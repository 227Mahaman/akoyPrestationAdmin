<?php
$id = 1;
if (isset($_GET['id'])) extract($_GET);
$title = "Les groupes de la programmation";
$page = 1;
$per_page = 25;
if (!empty($_GET['page'])) {
  extract($_GET);
}
$start_form = ($page - 1) * $per_page;
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
      <div class="card m-b-30">
        <div class="card-header with-border">
          <h3 class="card-title">
            <b>
              <?= 
              Manager::getData('programmation', 'id_program', $id)['data']['titre'] . 
              ' Du ' . Manager::getData('programmation', 'id_program', $id)['data']['date_debut'] .
              ' au ' . Manager::getData('programmation', 'id_program', $id)['data']['date_fin'];
              ?>
            </b>
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th>Code</th>
                  <th>Titre</th>
                  <th>Action</th>
                </tr>
                <?php
                $sql = "SELECT * FROM groupe_pharmacies WHERE statut=1 LIMIT $start_form, $per_page";
                $data = Manager::getMultiplesRecords($sql);
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                ?>
                    <tr>
                      <td><?= $value['code_groupe'];?></td>
                      <td><?= $value['titre'];?></td>
                      <td>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkcard">
                              <label>
                                <input class="groupe_pharma_is_checked" onchange="addGroupeProgram(this,<?=$_GET['id']?>)" value="<?= $value['id'] ?>" type="checkbox"> ajouter groupe au programmation
                              </label>
                            </div>
                          </div>
                        </div>
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
                $sql = "SELECT COUNT(*) nb FROM groupe_pharmacies";
                $total_row = Manager::getSingleRecords($sql)['nb'];
                $total_page = ceil($total_row / $per_page);
                $pageType='';
                if (!empty($_GET['id'])) {
                  $pageType="&id=".$_GET['id'];
                }


                ?>
                <li class="page-item <?= $page >= 2 ? '' : 'disabled' ?>">
                  <a class="page-link" href="javascript:void()" onclick="getHTML('addGroupeToProgram<?= $pageType ?>&page=<?= $page - 1 ?>')" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Precedent</span>
                  </a>
                </li>
                <?php
                for ($i = 1; $i < $total_page; $i++) {
                  if ($i == $page) {


                ?>
                    <li class="page-item active"><a class="page-link" href="javascript:void()" onclick="getHTML('addGroupeToProgram<?= $pageType ?>&page=<?= $i ?>')"><?= $i ?></a></li>
                <?php
                  }else {
                ?>
                <li class="page-item"><a class="page-link" href="javascript:void()" onclick="getHTML('addGroupeToProgram<?= $pageType ?>&page=<?= $i ?>')"><?= $i ?></a></li>
                <?php
                  
                    
                  }
                }
                ?>
                <li class="page-item <?= $page < $total_page ? '' : 'disabled' ?>">
                  <a class="page-link" href="javascript:void()" onclick="getHTML('addGroupeToProgram<?= $pageType ?>&page=<?= $page + 1 ?>')" aria-label="Next">
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

<script>
  $('input:checkbox.groupe_pharma_is_checked').each(function(i, v) {
    $mr = getDataWith2Param('programmation_has_groupe_pharm', '	id_groupe', $(v).val(), 'id_program', <?= $_GET['id'] ?>);

    $mr.done(function($mr) {
      if (!$mr.error) {
        $(v).attr('checked', true);
      }
    });

    $mr.fail(function($mr) {
      $(v).attr('checked', false);

    });
  });
</script>