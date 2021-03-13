<?php
include_once('model/class/RoleManager.php');
include_once('model/class/UserManager.php');
include_once('model/class/EmergencyManager.php');
include_once('model/class/MenuManager.php');
include_once('model/class/Files.php');
include_once('model/database/categories_publication.php');
include_once('model/database/cv.php');
// include_once('model/database/files.php');
include_once('model/database/ecole.php');
include_once('model/database/entreprise.php');
include_once('model/database/module.php');
include_once('model/database/pays.php');
include_once('model/database/publications.php');
include_once('model/database/module_role.php');
include_once('model/database/roles.php');
include_once('model/database/type_publication.php');
include_once('model/database/categorie_type_publication.php');
include_once('model/database/types_user.php');
include_once('model/database/villes.php');
include_once('model/database/users.php');
include_once('model/database/langues.php');


function addData($data, $table)
{
    $url = API_ROOT_PATH. "/object/$table";
    $res = Manager::addoNTable($url, $data, $table);
    $res = Manager::correct($res);
    if (isset($res['error'])) {
        if (!$res['error']) {
            $lastId = $res['lastId'];
            if (!empty($lastId)) {
                // Manager::showError($lastId);
               
                    return 1;
                
            }else {
                return $res['message'];
            }
        }else {
            return $res['message'];
        }
    }else {
        return $res;
    }
}

function update($table, $data, $property, $val)
{
    $res = Manager::updateData($data, $table, $property, $val);
    // var_dump($res);   die('ok');
    if ($res['error']) {
        return $res['message'];
    }else {
        return 1;
    }
    
}

function deleteLogique($table, $data, $property, $val)
{
    $res = Manager::updateData($data, $table, $property, $val);
    if ($res['error']) {
        return $res['message'];
    }else {
        return 1;
    }
    
}

function insert($table) {
    $manager = new Manager();
    return $manager->insert($table);
}

function setActionUrl($name)
{
    $name = str_replace(' ', '_', $name);
    return $name;
}

function getModules()
{
    $res = Manager::getData('module_role', 'role_id', $_SESSION['user-akoyprestation']['roleId']);
    $_SESSION['user-akoyprestation']['roles']['modules'] = $res;
    $sql ="select action_url from module where sub_module=?";
    $res = Manager::getMultiplesRecords($sql, [$res['data']['module']]);
    $_SESSION['user-akoyprestation']['roles']['modules_action'] = $res;
}

function getActions($moduleId)
{
   $res = array();
   // Manager::showError($module)
   $sql = "SELECT *, id as module, id FROM module WHERE sub_module=?";
       $res = Manager::getMultiplesRecords($sql, [$moduleId]);
   return $res;
}

function haveAction($role, $module)
{
   $res = array();
   $sql = "SELECT * FROM module_role WHERE role_id=? AND module=?";
   $res = Manager::getMultiplesRecords($sql, [$role, $module]);
    //Manager::showError($res);
   if ((is_array($res) || is_object($res)) && count($res)>0) {
       return true;
   }else {
       return false;
   }
   
}

function countFields($table, $field=null, $value=null)
{
    $sql = "SELECT COUNT(*) nb FROM $table";
    if (!empty($field) && !empty($value)) {
        $sql = "SELECT COUNT(*) nb FROM $table WHERE $field=?";
        
    }
    return Manager::getSingleRecords($sql, [$value]);
}
function getModelByDocuments($value=null)
{
    $sql = "SELECT model_name, COUNT(DISTINCT(id_document)) nb_doc FROM model m LEFT JOIN document d ON d.model=m.id_model GROUP BY id_model";
    if (!empty($value)) {
        $sql = "SELECT model_name, COUNT(DISTINCT(id_document)) nb_doc FROM model m LEFT JOIN document d ON d.model=m.id_model WHERE m.entity=? GROUP BY id_model";
        
    }
    return Manager::getMultiplesRecords($sql, [$value]);
}


function handleMatricule($mat)
{
    $lentgh = strlen($mat);
    switch ($lentgh) {
        case 7:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key+1<7) {
                    $res .= $temp[$key+1];
                }
            }
            return $res;
            break;
        case 8:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+2];
                }elseif($key>=2) {
                    if ($key+1<8) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 9:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+3];
                }elseif($key>=3) {
                    if ($key+1<9) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 10:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+4];
                }elseif($key>=4) {
                    if ($key+1<10) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        case 11:
            $temp = str_split($mat);
            $res="";
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $res .= $temp[$key+5];
                }elseif($key>=5) {
                    if ($key+1<11) {
                        $res .= $temp[$key+1];
                    }
                }
            }
            return $res;
            break;
        
        default:
            return $mat;
            break;
    }
}

function getMatricule()
{
    $sql = "SELECT COUNT(*) +1 nb FROM document";
    $res = Manager::getSingleRecords($sql);
    // Manager::showError($res);
    try {
        return date("yy").'-chcodu-'.handleMatricule("00000".$res['nb']);
    } catch (\Throwable $th) {
        return date("y")."-chcodu-000001";
    }

}

function getFontAwsomeByFileType($type)
{
    if (strpos($type,"image")!==false) {
        return 'fa-file-image-o';
    }elseif (strpos($type, "audio")!==false) {
        return 'fa-file-audio-o';
    }elseif (strpos($type, "video")!==false) {
        return 'fa-file-video-o';
    }else {
        return 'fa-file-o';
    }
}

// source: https://stackoverflow.com/a/4356295/9928098
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function loadMenu($data){
    $thisSMenu = array();
    foreach ($data as $key => $value) {
        //$sql = "SELECT sub_module, name, id, icon FROM module WHERE is_menu=1 AND statut=1 AND id = ?";
        
        // on recupère les sous menus des modules
        $sql = "SELECT x.sub_module, x.name, x.id, x.icon FROM module x WHERE x.is_menu=1 AND x.statut=1 AND x.id = ?";
        $name = Manager::getSingleRecords($sql, [$value['module']]);

        $sql = "SELECT COUNT(id) n FROM module WHERE sub_module=?";
        $n = Manager::getSingleRecords($sql, [$name['id']])['n'];
        // print_r($name);

        // on test s'il n'ont pas des parents
        if (!empty($n) && $n>0) {
        //if (empty($name['sub_module'])) {
            $menu = new MenuManager($name['name']); // on instancie la class menu
            $sMenu = getActions($name['id']); // on recupère les sous module
            if (is_array($sMenu) || is_object($sMenu)) {
                foreach ($sMenu as $key => $smValue) {
                    //loadMenu($sMenu);
                    if (haveAction($_SESSION['user-akoyprestation']['roleId'], $smValue['id'])) {
                        //$thisSMenu[$smValue['action_url']] = $smValue['name'];
                        $ssMenu = getActions($smValue['id']);
                        if(empty($name['sub_module'])){
                            $thisSMenu[$smValue['action_url']] = $smValue['name'];
                        } else {
                            if (is_array($ssMenu) || is_object($ssMenu)) {
                                $n=1;
                                foreach ($ssMenu as $key => $ssmValue) {
                                    $thisSMenu[$smValue['action_url']] = $ssmValue['name'];
                                }
                            }
                        }
                    }
                }
            }
            $menu->setmSousMenu($thisSMenu, $n=1);

                //sizeof($sMenu)
                //$menu->setmSousMenu($thisSMenu, $n=0);
            // } else {
                
            // }
            // if (is_array($sMenu) || is_object($sMenu)) {
            //     foreach ($sMenu as $key => $smValue) {
                    
            //         //loadMenu($sMenu);
            //         if (haveAction($_SESSION['user-akoyprestation']['roleId'], $smValue['id'])) {
            //             $thisSMenu[$smValue['action_url']] = $smValue['name'];
            //         }
            //     }
            // }
            // $menu->setmSousMenu($thisSMenu, $n=0);
            echo $menu->getMenu($name['icon']);
            $thisSMenu = (array) null;
        }
    }
}