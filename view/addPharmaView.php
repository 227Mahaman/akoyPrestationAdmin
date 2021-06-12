<?php
global $title;
$title = "Ajouter une pharmacie";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier publicité";
  $datas = Manager::getData("pharmacies", "id", $_GET['modif'])['data'];
  $src = Manager::getData("files", "id", $datas['image'])['data']['file_url'];
}
// ob_start();
?>
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title"><?= $title ?></h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
      </div>
    </div>
    <div class="col-md-4 col-lg-4">
      <div class="widgetbar">
        <?php
        $module = Manager::getData("module", "action_url", "showPharma")['data']['id'];
        if (haveAction($_SESSION['user-akoyprestation']['roleId'], $module)) :
        ?>
          <a href="javascript:void()" onclick="getHTML('showPharma')" class="btn btn-success-rgba"><i class="fa fa-eye"></i> Liste des publications</a>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card m-b-30">
      <div class="card-header">
        <h3 class="card-title"><?= $title ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form id="pharmaForm" role="form" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Code Pharmacie</span>
            </div>
            <input type="text" required class="form-control" id="code_pharma" name="code_pharma" placeholder="Code Pharma" value="<?= (!empty($_GET['modif'])) ? $datas['code_pharma'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Titre</span>
            </div>
            <input type="text" required class="form-control" id="titre" name="titre" placeholder="Veuillez entrer le titre de la publicité" value="<?= (!empty($_GET['modif'])) ? $datas['titre'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Adresse</span>
            </div>
            <input type="text" required class="form-control" id="adresse" name="adresse" placeholder="Veuillez entrer l'adresse" value="<?= (!empty($_GET['modif'])) ? $datas['adresse'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Tel</span>
            </div>
            <input type="text" required class="form-control" id="tel" name="tel" placeholder="Veuillez entrer le numero de téléphone" value="<?= (!empty($_GET['modif'])) ? $datas['tel'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Ville</span>
            </div>
            <select class="form-control" id="ville" name="ville">
            <option disabled selected>Sélection</option>
              <?php
              $data = Manager::getData('villes', 'statut', 1, true)['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
              ?>
                  <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['ville']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'];?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
          </div>
          <div class="input-group mb-3" style="text-align: center;">
            <img src="<?= (!empty($_GET['modif'])) ? $src : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="Image">
            <!-- hidden file input to trigger with JQuery  -->
            <input type="file" name="profile_picture" id="profile_input" value="" style="display: none;">
          </div>
        </div>
        <!-- /.box-body -->


        <button type="submit" onclick="postData('pharmaForm', 'addPharma'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
        <p id="postMessage">

            </p>
        <?php
        if (isset($_SESSION['messages'])) {
          echo Manager::messages($_SESSION['messages'], 'alert-danger');
        }
        ?>
      </form>
    </div>
  </div>
</div>
<script>
</script>
<?php
// $content = ob_get_clean();
// require('template.php');
?>