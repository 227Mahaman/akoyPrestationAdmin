<?php
global $title;
$title = "Ajouter une publication";
$getPublicationType = Manager::getData('type_publication', 'titre', 'Annonce')['data']['id'];
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier publication";
  $datas = Manager::getData("publications", "id", $_GET['modif'])['data'];
  $src = Manager::getData("files", "id", $datas['file'])['data']['file_url'];
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
          <!-- <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
                                <li class="breadcrumb-item"><a href="#">Basic</a></li> -->
          <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
      </div>
    </div>
    <div class="col-md-4 col-lg-4">
      <div class="widgetbar">
        <?php
        $module = Manager::getData("module", "action_url", "listPublication")['data']['id'];
        if (haveAction($_SESSION['user-akoyprestation']['roleId'], $module)) :
        ?>
          <a href="javascript:void()" onclick="getHTML('listPublication')" class="btn btn-success-rgba"><i class="fa fa-eye"></i> Liste des publications</a>
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
      <form id="publicationForm" role="form" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <input type="hidden" required class="form-control" id="type_publication" name="type_publication" value="<?= (!empty($_GET['modif'])) ? $datas['type_publication'] : $getPublicationType;?>">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Secteur</span>
            </div>
            <select class="form-control" id="category_publication" name="category_publication">
            <option disabled selected>Sélection</option>
              <?php 
              //$file = fopen("categories.json", "w+") or die("Can't create file");
              // $sql = "SELECT * FROM categories_publication cp, categorie_type_publication ct WHERE cp.id=ct.categories_publication AND ct.type_publication='$getPublicationType'";
              // $data = Manager::getMultiplesRecords($sql);
              // $categories = json_decode($data);
              // fwrite($file, $categories);
              // fclose($file);
              //chmod("categories.json", 0777);
              $sql = "SELECT cp.id, cp.titre FROM categories_publication cp, categorie_type_publication ct WHERE cp.id=ct.categories_publication AND ct.type_publication='$getPublicationType'";
              $data = Manager::getMultiplesRecords($sql);
              //$data = Manager::getData('categories_publication', 'statut', 1, true)['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
              ?>
                  <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['categorie_publication']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'] ?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
          </div>
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Type</span>
            </div>
            <select class="form-control" id="type_publication" name="type_publication">
              <option disabled selected>Sélection</option>
              <?php
              // $data = Manager::getData('type_publication', 'statut', 1, true)['data'];
              // if (is_array($data) || is_object($data)) {
              //   foreach ($data as $value) {
              ?>
                  <option <?//= (!empty($_GET['modif'])) ? (($value['id'] == $datas['type_publication']) ? "selected" : "") : "" ?> value="<?//= $value['id'] ?>"><?= $value['titre'] ?></option>
              <?php
              //   }
              // } else {
              //   Manager::messages('Aucune donnée trouvé', 'alert-warning');
              // }
              ?>
            </select>
          </div> -->
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
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Entreprise</span>
            </div>
            <select class="form-control" id="entreprise" name="entreprise">
              <option disabled selected>Sélection</option>
              <?php
              // $data = Manager::getData('entreprise', 'statut', 1, true)['data'];
              // if (is_array($data) || is_object($data)) {
              //   foreach ($data as $value) {
              ?>
                  <option <?//= (!empty($_GET['modif'])) ? (($value['id'] == $datas['entreprise']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'];?></option>
              <?php
              //   }
              // } else {
              //   Manager::messages('Aucune donnée trouvé', 'alert-warning');
              // }
              ?>
            </select>
          </div> -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Titre</span>
            </div>
            <input type="text" required class="form-control" id="titre" name="titre" placeholder="Veuillez entrer le titre de la publication" value="<?= (!empty($_GET['modif'])) ? $datas['titre'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Description</span>
            </div>
            <textarea class="form-control" id="editor" name="description" value="<?= (!empty($_GET['modif'])) ? $datas['description'] : "" ?>" placeholder="Description" cols="5" rows="2"><?= (!empty($_GET['modif'])) ? $datas['description'] : "" ?></textarea>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Lieu</span>
            </div>
            <input type="text" required class="form-control" id="lieu" name="lieu" placeholder="Veuillez entrer le lieu" value="<?= (!empty($_GET['modif'])) ? $datas['lieu'] : "" ?>">
          </div>
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Année Bourse</span>
            </div>
            <input type="text" class="form-control" id="date_annee_bourse" name="date_annee_bourse" value="<?//= (!empty($_GET['modif'])) ? $datas['date_annee_bourse'] : "" ?>">
          </div> -->
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Date Début</span>
            </div>
            <input type="date" class="form-control" id="date_debut" name="date_debut" value="<?//= (!empty($_GET['modif'])) ? $datas['date_debut'] : "" ?>">
          </div> -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Date</span>
            </div>
            <input type="date" class="form-control" id="date_fin" name="date_fin" value="<?= (!empty($_GET['modif'])) ? $datas['date_fin'] : "" ?>">
          </div>
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Date Fin</span>
            </div>
            <input type="date" class="form-control" id="date_fin" name="date_fin" value="<?//= (!empty($_GET['modif'])) ? $datas['date_fin'] : "" ?>">
          </div> -->
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Date Elaboration</span>
            </div>
            <input type="date" required class="form-control" id="date_elaboration" name="date_elaboration" value="<?//= (!empty($_GET['modif'])) ? $datas['date_elaboration'] : "" ?>">
          </div> -->
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Ecole</span>
            </div>
            <select class="form-control" id="ecole" name="ecole">
            <option disabled selected>Sélection</option>
              <?php

              // $data = Manager::getData('ecole')['data'];
              // if (is_array($data) || is_object($data)) {
              //   foreach ($data as $value) {
              ?>
                  <option <?//= (!empty($_GET['modif'])) ? (($value['id'] == $datas['ecole']) ? "selected" : "") : "" ?> value="<?//= $value['id'] ?>"><?= $value['label'] ?></option>
              <?php
              //   }
              // } else {
              //   Manager::messages('Aucune donnée trouvé', 'alert-warning');
              // }
              ?>
            </select>
          </div> -->
          <div class="input-group mb-3" style="text-align: center;">
            <img src="<?= (!empty($_GET['modif'])) ? $src : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="photo profile">
            <!-- hidden file input to trigger with JQuery  -->
            <input type="file" name="profile_picture" id="profile_input" value="" style="display: none;">
          </div>
        </div>
        <!-- /.box-body -->


        <button type="submit" onclick="postData('publicationForm', 'addPublication'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
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
    // $("#category_publication").on("change", function() {
    //     console.log($(this).val(), 'category_publication');
    //     category = $(this).val();
    // });
</script>
<?php
// $content = ob_get_clean();
// require('template.php');
?>