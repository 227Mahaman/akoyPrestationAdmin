<?php
$title = "Gestion des écoles";
$ecole_data = array();
if (!empty($_GET['modif'])) {
  $title = "Modifier école";
  $ecole_data = Manager::getData('ecole', 'id', $_GET['modif'])['data'];
}
$page = 1;
$per_page = 25;
if (!empty($_GET['page'])) {
  extract($_GET);
}
$start_form = ($page - 1) * $per_page;
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
      <div class="col-md-4">
        <!-- general form elements -->
        <div class="card m-b-30">
          <div class="card-header with-border">
            <h3 class="card-title"><?= $title ?></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="ecoleForm" role="form" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="label">Nom</label>
                <input type="text" value="<?= (!empty($_GET['modif']) ? $ecole_data['label'] : '');?>" required class="form-control" id="label" name="label" placeholder="Le nom de l'école">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea required class="form-control" id="description" name="description" placeholder="description de l'école"><?= (!empty($_GET['modif']) ? $ecole_data['description'] : '');?></textarea>
              </div>
              <div class="form-group">
                <label for="ville">Ville</label>
                <select class="form-control searchable" id="ville" name="ville">
                  <?php
                  $data = Manager::getData('villes', 'statut', 1, true)['data'];
                  if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                  ?>
                      <option <?= (!empty($_GET['modif'])) ? (($value['id'] == $ecole_data['ville']) ? "selected" : "") : "";?> value="<?= $value['id'] ?>"><?= $value['titre'];?></option>
                  <?php
                    }
                  } else {
                    Manager::messages('Aucune donnée trouvé', 'alert-warning');
                  }
                  ?>
                </select>
            </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" onclick="postData('ecoleForm', 'ecoles'<?= (!empty($_GET['modif']) ? ', ' . $ecole_data['id'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
              <p id="postMessage">

              </p>
              <?php
              if (isset($_SESSION['messages'])) {
                echo Manager::messages($_SESSION['messages'], $_SESSION['type']);
              }
              ?>
            </div>
          </form>
        </div>

      </div>
    <div class="col-md-8">
      <div class="card m-b-30">
        <div class="card-header with-border">
          <h3 class="card-title"><b>Liste des écoles</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th>Nom</th>
                  <th>Description</th>
                  <th>Ville</th>
                  <th>Action</th>
                </tr>
                <?php
                $sql = "SELECT * FROM ecole WHERE statut=1 LIMIT $start_form, $per_page";
                $data = Manager::getMultiplesRecords($sql);
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <tr>
                      <td><?php echo $value['label'];?></td>
                      <td><?= $value['description'];?></td>
                      <td><?= Manager::getData('villes', 'id', $value['ville'])['data']['titre'];?></td>
                      <td>
                          <a href="javascript:void()" onclick="getHTML('ecoles&modif=<?= $value['id'];?>')" class="btn btn-primary">
                            <i class="fa fa-edit white"></i>
                          </a>
                          <a href="javascript:void()" onclick="getHTML('ecoles&delete=<?= $value['id'];?>')" class="btn btn-danger">
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
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <?php
                $sql = "SELECT COUNT(*) nb FROM ecole WHERE statut=1";
                $total_row = Manager::getSingleRecords($sql)['nb'];
                $total_page = ceil($total_row / $per_page);
                $pageType='';
                if (!empty($_GET['role'])) {
                  $pageType="&role=".$_GET['role'];
                }


                ?>
                <li class="page-item <?= $page >= 2 ? '' : 'disabled' ?>">
                  <a class="page-link" href="javascript:void()" onclick="getHTML('ecole<?= $pageType ?>&page=<?= $page - 1 ?>')" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Precedent</span>
                  </a>
                </li>
                <?php
                for ($i = 1; $i < $total_page; $i++) {
                  if ($i == $page) {


                ?>
                    <li class="page-item active"><a class="page-link" href="javascript:void()" onclick="getHTML('ecole<?= $pageType ?>&page=<?= $i ?>')"><?= $i ?></a></li>
                <?php
                  }else {
                ?>
                <li class="page-item"><a class="page-link" href="javascript:void()" onclick="getHTML('ecole<?= $pageType ?>&page=<?= $i ?>')"><?= $i ?></a></li>
                <?php
                  
                    
                  }
                }
                ?>
                <li class="page-item <?= $page < $total_page ? '' : 'disabled' ?>">
                  <a class="page-link" href="javascript:void()" onclick="getHTML('ecole<?= $pageType ?>&page=<?= $page + 1 ?>')" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Suivant</span>
                  </a>
                </li>
               
              </ul>
            </nav>
          </form>
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