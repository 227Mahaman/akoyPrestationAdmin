<?php
$title = "Type des categories";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modification du type";
  $datas = Manager::getData("categories_publication", "id", $_GET['modif'])['data'];
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

  </div>
</div>
<div class="container container-margin">
  <div class="row">
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="categorie_publicationForm" role="form" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" required class="form-control" id="titre" name="titre" value="<?= (!empty($_GET['modif'])) ? $datas['titre'] : "" ?>" placeholder="Catégorie">
            </div>
            <div class="form-group">
              <label for="icon">icon</label>
              <input type="text" value="<?= (!empty($_GET['modif']) ? $datas['icon'] : '') ?>" class="form-control" id="icon" name="icon" placeholder="icon sous-format fontawsome (facultatif)">
            </div>
            <div class="form-group">
                <label for="type_publication">Type publication</label>
                <select class="form-control searchable" id="type_publication" name="type_publication">
                  <?php
                  $data = Manager::getData('type_publication', 'statut', 1, true)['data'];
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                  ?>
                      <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $datas['type_publication']) ? "selected" : "") : "";?> value="<?= $value['id'] ?>"><?= $value['titre'];?></option>
                  <?php
                    }
                  } else {
                    Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                  ?>
                </select>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" onclick="postData('categorie_publicationForm', 'categoriePublication'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
            <p id="postMessage">

            </p>
            <?php
            if (!empty($_SESSION['messages'])) {
              if ($_SESSION['messages']['code'] == 1) {
                echo Manager::messages($_SESSION['messages']['message'], 'alert-success');
              } else {
                echo Manager::messages($_SESSION['messages']['message'], 'alert-danger');
              }
            }
            ?>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="searchTable" class="table table-bordered">
            <tbody>
              <tr>
              <th>#</th>
                <th>Titre</th>
                <th>Icon</th>
                <th>Type</th>
                <th>Action</th>
              </tr>
              <?php
                $i = 0;
                $data = Manager::getData('categories_publication', 'statut', 1, true)['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
              ?>
                  <tr>
                  <td><?= $i;?></td>
                    <td><?= $value['titre'];?></td>
                    <td><i class="<?= $value['icon'];?>"></i></td>
                    <td><?= Manager::getData('type_publication', 'id', $value['type_publication'])['data']['titre'];?></td>
                    <td>
                      <a href="javascript:void()" onclick="getHTML('categoriePublication&modif=<?= $value['id'] ?>')" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="javascript:void()" onclick="getHTML('categoriePublication&delete=<?= $value['id'];?>')" class="btn btn-danger">
                        <i class="fa fa-trash white"></i>
                      </a>
                    </td>
                  </tr>
              <?php
                }
              } else {
                Manager::messages('Aucune donnée trouvé', 'alert-warning');
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
// $content = ob_get_clean();
// require('template.php');
?>