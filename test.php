<?php
require_once "model/class/Manager.php";
function bdd()
{
    $dbname = '';
    $user = '';
    $pass = '';
    if ($_SERVER["SERVER_NAME"] == 'localhost') {
        $dbname = 'akoy_prestation';
        $user = 'root';
        $pass = '';
    }
    try {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", "$user", "$pass", $pdo_options);
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }
    return $bdd;
}

function getTables()
{

    $sql = "SHOW TABLES";
    $req = bdd()->prepare($sql);
    $req->execute();
    while ($res = $req->fetch()) {
        $data[] = $res["Tables_in_akoy_prestation"];
    }
    return $data;
}

function getFields($table)
{

    $sql = "DESCRIBE $table";
    $req = bdd()->query($sql);
    while ($res = $req->fetch()) {
        $data[] = $res['Field'];
    }
    return $data;
}

function HasIndex($table, $Column_name)
{

    $sql = "SHOW INDEXES FROM $table WHERE Column_name='$Column_name'";
    $req = bdd()->query($sql);
    $req->execute();
    if (!$req->fetchAll()) {
        return false;
    }
    return true;
}



function modifyRecord($sql, $params)
{
    $req = bdd()->prepare($sql);
    $res = $req->execute($params);
    return $res;
}

$tables_list = getTables();

if (is_array($tables_list) || is_object($tables_list)) {

    foreach ($tables_list as $tables) {
        $file = fopen("form.php", "w+");
        fclose($file);
        chmod("form.php", 0777);

        $fields = getFields("document");
        //die(var_dump($fields));
        $text_field = '';

        if (is_array($fields) || is_object($fields)) {
            $i = 0;
            foreach ($fields as $key => $field) {
                $hasIndex = HasIndex("document", $field);
                if ($i != 0 && !$hasIndex) {
                    $text_field .= '<div class="form-group">
            <label for="' . $field . '">' . $field . '</label>
            <input value="" type="text" required class="form-control" id="' . $field . '" name="' . $field . '" placeholder="Veuillez entrer ' . $field . '">
          </div>';
                }elseif ($i!=0 && $hasIndex) {
                    $text_field .= '<div class="form-group col-lg-4 col-sm-12">
                    <label for="' . $field . '">' . $field . '</label>
                    <select class="form-control"  name="' . $field . '" id="' . $field . '">
                      <?php
                      $sql = "SELECT * FROM '.$field.'";
                      $data = Manager::getMultiplesRecords($sql);
                      foreach ($data as $key => $value) {
                      
                      ?>
                      <option value="<?= $value[\'id'.$field . '\'] ?>"><?= $value[\'libelle'.$field . '\'] ?></option>
                    <?php } ?>
                    </select>
                  </div>';
                }
                $i++;
            }
            file_put_contents("form.php", "\n" . $text_field . PHP_EOL, FILE_APPEND | LOCK_EX, null);
        }
    }
}