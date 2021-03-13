<?php
$title = "Type des categories";
if (!empty($_GET['modif']) && ctype_digit($_GET['modif'])) {
  $title = "Modification du type";
  $datas = Manager::getData("categories_publication", "id", $_GET['modif'])['data'];
}
if (!empty($_GET['type'])) {
  $datas['type_publication']=$_GET['type'];
  // die($_GET['type']);
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
        <form id="categorie_type_publicationForm" role="form" method="post">
          <div class="card-body">
            <div class="form-group">
                <label for="type_publication">Type publication</label>
                <select class="form-control searchable" id="type_publication" name="type_publication">
                  <?php
                  $sql = "SELECT * FROM type_publication WHERE statut=1 AND id=?";
                  $data = Manager::getMultiplesRecords($sql, [$_GET['type']]);
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                  ?>
                      <option <?= (!empty($_GET['modif']) || !empty($_GET['type'])) ? (($value['id'] == $datas['type_publication']) ? "selected" : "") : "";?> value="<?= $value['id'] ?>"><?= $value['titre'];?></option>
                  <?php
                    }
                  } else {
                    Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                  ?>
                </select>
            </div>
            <div class="form-group">
                <label for="categories_publication">Catégorie</label>
                <select class="form-control searchable" id="categories_publication" name="categories_publication">
                  <?php
                  $data = Manager::getData('categories_publication', 'statut', 1, true)['data'];
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                  ?>
                      <option <?= (!empty($_GET['modif']) || !empty($_GET['type'])) ? (($value['id'] == $datas['type_publication']) ? "selected" : "") : "";?> value="<?= $value['id'] ?>"><?= $value['titre'];?></option>
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
            <button type="submit" onclick="postData('categorie_type_publicationForm', 'categorieTypePublication'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
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
                $sql = "SELECT *, t.titre type_publication, c.titre categories_publication FROM type_publication t, categories_publication c, categorie_type_publication ct
                WHERE t.id=ct.type_publication AND c.id=ct.categories_publication AND c.statut=1 AND t.statut=1 AND t.id=?";
                $data = Manager::getMultiplesRecords($sql, [$_GET['type']]);
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
              ?>
                  <tr>
                  <td><?= $i;?></td>
                    <td><?= $value['categories_publication'];?></td>
                    <td><i class="<?= $value['icon'];?>"></i></td>
                    <td><?= $value['type_publication'];?></td>
                    <td>
                      <a href="javascript:void()" onclick="getHTML('categorieTypePublication&modif=<?= $value['id'] ?>')" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="javascript:void()" onclick="getHTML('categorieTypePublication&delete=<?= $value['id'];?>')" class="btn btn-danger">
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