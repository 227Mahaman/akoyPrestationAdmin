<?php
session_start();
//require 'vendor/autoload.php';

require('controller/Administration.php');



$useragent = $_SERVER['HTTP_USER_AGENT'];
if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}
if (empty($_SESSION['laguage'])) $_SESSION['laguage'] = 'fr';
if (!empty($_GET['langue'])) {
    $_SESSION['laguage'] = $_GET['langue'];
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}
$lang = json_decode(file_get_contents("public/traduction.json"), true);
if (!empty($lang)) $GLOBALS['lang'] = $lang[$_SESSION['laguage']];

if (isset($_SESSION['user-akoyprestation'])) {
    getModules();
    if (!empty($_GET['action'])) {
        extract($_GET);
        global $title;
        $_SESSION['user-akoyprestation']['prevTitle']  = $title;
        $sql = "SELECT id FROM module WHERE action_url=?";
        $module = Manager::getSingleRecords($sql, [$action])['id'];
        if (!haveAction($_SESSION['user-akoyprestation']['roleId'], $module)) {
            require('view/notFoundView.php');
            return;
        }
        if ($action == 'role') {
            $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
            if (!empty($input)) {
                $data = $input;
                $res = 0;
                if(!isset($_GET['modif'])){
                    $roles = new roles($data);
                    $res = insert($roles);
                } else {
                    $res = update('roles', $data, 'id', $_GET['modif']);
                }
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                    $_SESSION['type'] = 0;
                } else {
                    $_SESSION['messages'] = "Enregistrement réussis";
                    $_SESSION['type'] = 1;
                }
                if (!empty($_SESSION['messages'])) {
                    if ($_SESSION['type'] == 1) {
                        echo Manager::messages($_SESSION['messages'], 'alert-success');
                    } else {
                        echo Manager::messages($_SESSION['messages'], 'alert-danger');
                    }
                }
                die;
            }
            require_once("view/roleView.php");
        } elseif ($action == 'module') {
            $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
            if (!empty($input)) {
                $data = $input;
                $res = 0;
                var_dump($_POST);
                if(!isset($_GET['modif'])){
                    $modules = new module($data);
                    $res = insert($modules);
                } else {
                    $res = update('module', $data, 'id', $_GET['modif']);
                }
                // if (!empty($_GET['modif'])) {//Modification
                //     $res = update('module', $data, 'id', $_GET['modif']);
                // } else {//Insertion
                //     //$res = addData($data, 'module');
                //     $modules = new module($data);
                //     $res = insert($modules);
                // }

                //Manager::showError($res);

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                    $_SESSION['type'] = 0;
                } else {
                    $_SESSION['messages'] = "Enregistrement réussis";
                    $_SESSION['type'] = 1;
                }
                if (!empty($_SESSION['messages'])) {
                    if ($_SESSION['type'] == 1) {
                        echo Manager::messages($_SESSION['messages'], 'alert-success');
                    } else {
                        echo Manager::messages($_SESSION['messages'], 'alert-danger');
                    }
                }
                die;
            }
            require_once("view/moduleView.php");
        } elseif ($action == 'permission') {
            if (!empty($_POST)) {
                $data = $_POST;
                $data['action_url'] = setActionUrl($data['name']);
                $res = addData($data, 'actions');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/permissionView.php");
        } elseif ($action == 'ville') { //View Ville
            $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'une ville
                if (!empty($input)) {
                    $data = $input;
                    //var_dump($data);
                    //die();
                    $res = Manager::updateData($data, 'ville', 'id', $_GET['modif']);
                    if ($res['code'] = 1) {
                        echo " <script>
                        getHTML('ville');
                    </script>";
                    die;
                    }
                }
            } else { // Ajout Ville
                if (!empty($input)) {
                    $data = $input;
                    $ville = new villes($data);
                    //var_dump($ville); die;
                    $res = insert($ville);

                    $_SESSION['messages'] = $res;
                    if (!empty($_SESSION['messages'])) {
                        if ($_SESSION['messages']['code'] == 1) {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                        } else {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                        }
                    }
                    die;
                }
            }
            require_once("view/villeView.php");
        } elseif ($action == 'pays') { //View pays
            $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'un pays
                if (!empty($input)) {
                    $data = $input;
                    //var_dump($data);
                    //die();
                    $res = Manager::updateData($data, 'country', 'id', $_GET['modif']);
                    if ($res['code'] = 200) {
                        echo " <script>
                        getHTML('pays');
                    </script>";
                    die;
                    }
                }
            } else { // Ajout pays
                if (!empty($input)) {
                    $data = $input;
                    $pays = new country($data);
                    //var_dump($pays); die;
                    $res = insert($pays);

                    $_SESSION['messages'] = $res;
                    if (!empty($_SESSION['messages'])) {
                        if ($_SESSION['messages']['code'] == 1) {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                        } else {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                        }
                    }
                    die;
                }
            }
            require_once("view/paysView.php");
        }  elseif ($action == 'langue') { //View langue
            $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) { //Modification d'une langue
                if (!empty($input)) {
                    $data = $input;
                    //var_dump($data);
                    //die();
                    $res = Manager::updateData($data, 'langues', 'id', $_GET['modif']);
                    if ($res['code'] = 200) {
                        echo " <script>
                        getHTML('langue');
                    </script>";
                    die;
                    }
                }
            } else { // Ajout livre
                if (!empty($input)) {
                    $data = $input;
                    $langue = new langues($data);
                    //var_dump($langue); die;
                    $res = insert($langue);

                    $_SESSION['messages'] = $res;
                    if (!empty($_SESSION['messages'])) {
                        if ($_SESSION['messages']['code'] == 1) {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                        } else {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                        }
                    }
                    die;
                }
            }
            require_once("view/langueView.php");
        }  elseif ($action == 'traduction') { //View traduction
            $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
                if (!empty($input)) {
                    $data = json_decode(file_get_contents("public/traduction.json"), true);
                    $data[strtolower($input['langue'])][$input['key']] = $input['value'];

                    file_put_contents("public/traduction.json", json_encode($data), FILE_USE_INCLUDE_PATH);
                    $_SESSION['messages']['message'] = "Traduction effectué";
                    $_SESSION['messages']['code'] = 1;
                    if (!empty($_SESSION['messages'])) {
                        if ($_SESSION['messages']['code'] == 1) {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                        } else {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                        }
                    }
                    
                    die;
                }
            
            require_once("view/addTradutionView.php");
        } elseif ($action == 'type') {
            $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
            if (!empty($input)) {
                $data = $input;
                $res = addData($data, 'types_user');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                    $_SESSION['messages']['code'] = 0;
                    if (!empty($_SESSION['messages'])) {
                        if ($_SESSION['messages']['code'] == 1) {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                        } else {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                        }
                    }
                    die;
                }else {
                    $_SESSION['messages']['message'] = "Enregistrement reussis";
                    $_SESSION['messages']['code'] = 1;
                    if (!empty($_SESSION['messages'])) {
                        if ($_SESSION['messages']['code'] == 1) {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                        } else {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                        }
                    }
                    die;
                }
            }
            require_once("view/typeAgentView.php");
        } elseif ($action == 'addUser') {
            $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
            // Manager::showError($_FILES);
            if (!empty($input) && !empty($_FILES) && empty($_GET['modif'])) {
                $data = $input;
                $data['profile_picture'] = $_FILES['profile_picture'];
                $res = UserManager::addUser($data);
                // Manager::showError($res);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                    if (!empty($_SESSION['messages'])) {
                        if ($_SESSION['messages']['code'] == 1) {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                        } else {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                        }
                    }
                    die;
                } else {
                   echo " <script>
                        getHTML('showUser');
                    </script>";
                    die;
                    // header('Location: index.php?action=');
                }
                
            }
            if (!empty($_GET['modif']) && ctype_digit($_GET['modif']) && !empty($input)) { //Modification d'un utilisateur
                $data = $input;
                if (!empty($_FILES['profile_picture']['name'])) {
                    $data['photo'] = UserManager::uploadProfilePicture($_FILES['profile_picture']);
                    // $data['profile_picture'] = $_FILES['profile_picture'];
                }
                $res = Manager::updateData($data, 'users', 'id', $_GET['modif']);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                    if (!empty($_SESSION['messages'])) {
                        if ($_SESSION['messages']['code'] == 1) {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
                        } else {
                            echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
                        }
                    }
                    die;
                } else {
                    echo " <script>
                        getHTML('showUser');
                    </script>";
                    die;
                }
            }
            require_once("view/addUserView.php");
        } elseif ($action == 'showUser') {

            require_once("view/showUserView.php");
        }  elseif ($action == 'roleModule') {
            require_once("view/roleModuleView.php");
        } elseif ($action == 'profile') {
            require_once("view/profileView.php");
        } elseif ($action == 'logout') {
            require_once("view/logout.php");
        } elseif ($action == 'homeView') {
            require_once("view/homeView.php");
        } elseif ($action == 'searchView') {
            require_once("view/searchDataView.php");
        }
    } elseif (empty($_GET['mat'])) {
        require_once("view/homeView.php");
    }
} elseif (isset($_GET['signup'])) {
    if (!empty($_POST)) {
        $res = UserManager::activeUser($_POST);
        //print_r($_POST); die;
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        } else {
            header('Location: index.php');
        }
    }
    require('view/registerView.php');
} elseif (isset($_GET['login'])) {
    if (!empty($_POST)) {

        $res = UserManager::connectUser($_POST);
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        } else {
            header('Location: index.php?action=homeView');
        }
    }
    require('view/loginView.php');
} else {

   if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
        if (!empty($_POST)) {

            $res = UserManager::connectUserMobile($_POST);
            // Manager::showError($res);
            if ($res != 1) {
                $_SESSION['messages'] = $res;
            } else {
                header('Location: index.php?action=membre');
            }
        }
        require('view/loginViewMobile.php');
    } else {
        if (!empty($_POST)) {

            $res = UserManager::connectUser($_POST);
            if ($res != 1) {
                $_SESSION['messages'] = $res;
            } else {
                header('Location: index.php?action=homeView');
            }
        }
        require('view/loginView.php');
    }
}

