<?php
global $title;
$title = "Ajouter un groupe de pharmacie";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modifier le groupe";
  $datas = Manager::getData("groupe_pharmacies", "id", $_GET['modif'])['data'];
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
        $module = Manager::getData("module", "action_url", "showGroupePharma")['data']['id'];
        if (haveAction($_SESSION['user-akoyprestation']['roleId'], $module)) :
        ?>
          <a href="javascript:void()" onclick="getHTML('showGroupePharma')" class="btn btn-success-rgba"><i class="fa fa-eye"></i> Liste des groupes</a>
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
      <form id="groupeForm" role="form" method="post">
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Code Groupe</span>
            </div>
            <input type="text" required class="form-control" id="code_groupe" name="code_groupe" placeholder="Code Pharma" value="<?= (!empty($_GET['modif'])) ? $datas['code_groupe'] : "" ?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Titre</span>
            </div>
            <input type="text" required class="form-control" id="titre" name="titre" placeholder="Veuillez entrer le titre" value="<?= (!empty($_GET['modif'])) ? $datas['titre'] : "" ?>">
          </div>
        </div>
        <!-- /.box-body -->


        <button type="submit" onclick="postData('groupeForm', 'addGroupePharma'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
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