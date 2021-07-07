<?php
$title = "Edit une image";
$role_data = array();
if (!empty($_GET['modif'])) {
  $title = "Modifier role";
  $role_data = Manager::getData('roles', 'id', $_GET['modif'])['data'];
}
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

  </div>
</div>
<div class="container container-margin">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div style="height: 650px;" class="card">
        <div  class="tui-image-editor"></div>
      </div>
    </div>

  
  </div>
</div>
<script>
  const instance = new new tui.ImageEditor(document.querySelector('.tui-image-editor'), {
      includeUI: {
          loadImage: {
              path: 'public/img/150x150.png',
              name: 'SampleImage',
          },
          // locale: locale_fr_FR,
          // theme: blackTheme, // or whiteTheme
          initMenu: 'filter',
          menuBarPosition: 'bottom',
      },
      cssMaxWidth: 700,
      cssMaxHeight: 500,
      selectionStyle: {
          cornerSize: 20,
          rotatingPointOffset: 70,
      },
  });
</script>
<?php
// $content = ob_get_clean();
// require('template.php');
?>