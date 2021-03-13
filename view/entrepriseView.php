<?php
$title = "Gestion des entreprises";
$entreprise_data = array();
if (!empty($_GET['modif'])) {
  $title = "Modifier entreprise";
  $entreprise_data = Manager::getData('entreprise', 'id', $_GET['modif'])['data'];
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
          <form id="entrepriseForm" role="form" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="label">Nom</label>
                <input type="text" value="<?= (!empty($_GET['modif']) ? $entreprise_data['label'] : '');?>" required class="form-control" id="titre" name="titre" placeholder="Le nom de l'entreprise">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" onclick="postData('entrepriseForm', 'entreprises'<?= (!empty($_GET['modif']) ? ', ' . $entreprise_data['id'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
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
          <h3 class="card-title"><b>Liste des Entreprises</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th>Nom</th>
                  <th>Action</th>
                </tr>
                <?php
                $sql = "SELECT * FROM entreprise WHERE statut=1 LIMIT $start_form, $per_page";
                $data = Manager::getMultiplesRecords($sql);
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <tr>
                      <td><?php echo $value['titre'];?></td>
                      <td>
                          <a href="javascript:void()" onclick="getHTML('entreprises&modif=<?= $value['id'];?>')" class="btn btn-primary">
                            <i class="fa fa-edit white"></i>
                          </a>
                          <a href="javascript:void()" onclick="getHTML('entreprises&delete=<?= $value['id'];?>')" class="btn btn-danger">
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
                $sql = "SELECT COUNT(*) nb FROM entreprise WHERE statut=1";
                $total_row = Manager::getSingleRecords($sql)['nb'];
                $total_page = ceil($total_row / $per_page);
                $pageType='';
                if (!empty($_GET['role'])) {
                  $pageType="&role=".$_GET['role'];
                }


                ?>
                <li class="page-item <?= $page >= 2 ? '' : 'disabled' ?>">
                  <a class="page-link" href="javascript:void()" onclick="getHTML('entreprises<?= $pageType ?>&page=<?= $page - 1 ?>')" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Precedent</span>
                  </a>
                </li>
                <?php
                for ($i = 1; $i < $total_page; $i++) {
                  if ($i == $page) {


                ?>
                    <li class="page-item active"><a class="page-link" href="javascript:void()" onclick="getHTML('entreprises<?= $pageType ?>&page=<?= $i ?>')"><?= $i ?></a></li>
                <?php
                  }else {
                ?>
                <li class="page-item"><a class="page-link" href="javascript:void()" onclick="getHTML('entreprises<?= $pageType ?>&page=<?= $i ?>')"><?= $i ?></a></li>
                <?php
                  
                    
                  }
                }
                ?>
                <li class="page-item <?= $page < $total_page ? '' : 'disabled' ?>">
                  <a class="page-link" href="javascript:void()" onclick="getHTML('entreprises<?= $pageType ?>&page=<?= $page + 1 ?>')" aria-label="Next">
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