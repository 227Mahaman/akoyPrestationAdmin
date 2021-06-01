<?php
global $title;
$title = "Ajouter une publication";
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
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Secteur</span>
            </div>
            <select class="form-control" id="category_publication" name="category_publication">
            <option disabled selected>Sélection</option>
              <?php
              $file = fopen("type_publication.json", "w+") or die("Can't create file");
              // $sql = "SELECT *, t.titre type_publication, c.titre categories_publication FROM type_publication t, categories_publication c, categorie_type_publication ct
              // WHERE t.id=ct.type_publication AND c.id=ct.categories_publication AND c.statut=1 AND t.statut=1 AND t.id=?";
              $sql = "SELECT t.id, t.titre, cp.id idC  FROM categorie_type_publication c, categories_publication cp, type_publication t WHERE c.categories_publication=cp.id AND t.id=c.type_publication";
              $data = Manager::getMultiplesRecords($sql);
              $type_publications = json_encode($data);
              fwrite($file, $type_publications);
              fclose($file);
              chmod("type_publication.json", 0777);
              $data = Manager::getData('categories_publication', 'statut', 1, true)['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
              ?>
                  <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['category_publication']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'] ?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Type</span>
            </div>
            <select class="form-control type_publication" id="type_publication" name="type_publication">
              <option disabled selected>Sélection</option>
              <?php
              //$data = Manager::getData('type_publication', 'statut', 1, true)['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
              ?>
                  <option <?//= (!empty($_GET['modif'])) ? (($value['id'] == $datas['type_publication']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'] ?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
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
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Entreprise</span>
            </div>
            <select class="form-control" id="entreprise" name="entreprise">
              <option disabled selected>Sélection</option>
              <?php
              $data = Manager::getData('entreprise', 'statut', 1, true)['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
              ?>
                  <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['entreprise']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['titre'];?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">N°Publication</span>
            </div>
            <input type="text" required class="form-control" id="num_offre" name="num_offre" placeholder="00/année" value="<?= (!empty($_GET['modif'])) ? $datas['num_offre'] : getNumOffre(); ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Titre</span>
            </div>
            <input type="text" required class="form-control" id="titre" name="titre" placeholder="Veuillez entrer le titre de la publication" value="<?= (!empty($_GET['modif'])) ? $datas['titre'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Lieu</span>
            </div>
            <input type="text" required class="form-control" id="lieu" name="lieu" placeholder="Veuillez entrer le lieu" value="<?= (!empty($_GET['modif'])) ? $datas['lieu'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Année Bourse</span>
            </div>
            <input type="text" class="form-control" id="date_annee_bourse" name="date_annee_bourse" value="<?= (!empty($_GET['modif'])) ? $datas['date_annee_bourse'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Date Début</span>
            </div>
            <input type="date" class="form-control" id="date_debut" name="date_debut" value="<?= (!empty($_GET['modif'])) ? $datas['date_debut'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Date Fin</span>
            </div>
            <input type="date" class="form-control" id="date_fin" name="date_fin" value="<?= (!empty($_GET['modif'])) ? $datas['date_fin'] : "" ?>">
          </div>
          <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Date Elaboration</span>
            </div>
            <input type="date" required class="form-control" id="date_elaboration" name="date_elaboration" value="<?//= (!empty($_GET['modif'])) ? $datas['date_elaboration'] : "" ?>">
          </div> -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Ecole</span>
            </div>
            <select class="form-control" id="ecole" name="ecole">
            <option disabled selected>Sélection</option>
              <?php

              $data = Manager::getData('ecole')['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
              ?>
                  <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['ecole']) ? "selected" : "") : "" ?> value="<?= $value['id'] ?>"><?= $value['label'] ?></option>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Experience</span>
            </div>
            <select class="form-control" id="experience" name="experience">
              <option disabled selected>Sélection</option>
              <option value="1 an">1 an</option>
              <option value="2 ans">2 ans</option>
              <option value="3 ans">3 ans</option>
              <option value="4 ans">4 ans</option>
              <option value="5 ans">5 ans</option>
              <option value="6 ans">6 ans</option>
              <option value="7 ans">7 ans</option>
              <option value="8 ans">8 ans</option>
              <option value="9 ans">9 ans</option>
              <option value="10 ans">10 ans</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Sexe</span>
            </div>
            <select class="form-control" id="sexe" name="sexe">
              <option disabled selected>Sélection</option>
              <option value="0">F</option>
              <option value="1">M</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Diplome</span>
            </div>
            <select class="form-control" id="diplome" name="diplome">
              <option disabled selected>Sélection</option>
              <option value="Licence">Licence</option>
              <option value="Master">Master</option>
              <option value="Doctorat">Doctorat</option>
            </select>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Nombre de candidat</span>
            </div>
            <input type="number" min="0" class="form-control" id="nombre_candidat" name="nombre_candidat" value="<?= (!empty($_GET['modif'])) ? $datas['nombre_candidat'] : "";?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Salaire</span>
            </div>
            <input type="number" min="1000" class="form-control" id="salaire" name="salaire" value="<?= (!empty($_GET['modif'])) ? $datas['salaire'] : "";?>">
          </div>
          <div class="form-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Description</span>
            </div>
              <!-- <div id="summernote"><?//= (!empty($_GET['modif'])) ? $datas['description'] : "";?></div>
              <input type="hidden" required class="form-control" id="description" name="description" value="<?//= (!empty($_GET['modif'])) ? $datas['description'] : "" ?>"> -->
              <textarea class="form-control" id="summernote" name="description" value="<?= (!empty($_GET['modif'])) ? $datas['description'] : "" ?>" placeholder="Description" cols="30" rows="5"><?= (!empty($_GET['modif'])) ? $datas['description'] : "" ?></textarea>
          </div>
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
<script src="public/vendor/js/custom/custom-form-editor.js"></script>
<script>
    //$(".alert").on("show", function(){
        //$("#publicationForm").trigger('reset');
    //});
    
    $("#category_publication").on("change", function() {
      console.log($(this).val(), 'category_publication')
      v = $(this).val();
      hidePleaseWait();
      $.getJSON("type_publication.json", function(data) {
          var option = '<option class="option" selected>Veuillez selectionner le type de la publication</option>';
          $.each(data, function(key, val) {
              // console.log(key, val, "ok villes");
              if (val.idC == v) {
                  console.log(key, val, "ok type_publication");

                  option += '<option value="' + val.id + '">' + val.titre + '</option>';
              }
          });
          console.log(option);

          $("#type_publication").html(option);
      });
    });

    $('#description').val($('.note-editable').html());
    $('.note-editable').bind('DOMSubtreeModified', function() {
        console.log($(this).html(), 'ok');
        $('#description').val($(this).html());

    });
</script>
<?php
// $content = ob_get_clean();
// require('template.php');
?>