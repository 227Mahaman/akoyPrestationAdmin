<?php
$title = "Listes de programmation des pharmacie de garde";
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
        $module = Manager::getData("module", "action_url", "addProgram")['data']['id'];
        if (haveAction($_SESSION['user-akoyprestation']['roleId'], $module)) :
        ?>
          <a  href="javascript:void()" onclick="getHTML('addProgram')" class="btn btn-success-rgba"><i class="fa fa-plus"></i> Ajouter</a>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>
<br> <br> 
<div class="container">
  <div class="card m-b-30">
    <div class="card-header">
      <h3 class="card-title"><?= $title ?></h3>
    </div>
    <!-- /.card-header -->
    
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Titre</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Date Début</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Date Fin</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Nombre de pharmacie</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                $data = Manager::getData('programmation', 'statut', 1, true)['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
                    if ($i % 2 == 0) :
                      ?>

                <tr role="row" class="odd">
                  <td class="sorting_1"><?= $value['titre'];?></td>
                  <td><?= $value['date_debut'];?></td>
                  <td><?= $value['date_fin'];?></td>
                  <td><?= ""; ?></td>
                  <td>
                    <a href="javascript:void()" onclick="getHTML('addGroupeToProgram&id=<?= $value['id_program'] ?>')" class="btn btn-success">
                      <i class="fa fa-plus white"></i>
                    </a>
                    <a href="javascript:void()" onclick="getHTML('addProgram&modif=<?= $value['id_program'] ?>')" class="btn btn-primary">
                      <i class="fa fa-edit white"></i>
                    </a>
                    <a href="javascript:void()" onclick="getHTML('showProgram&delete=<?= $value['id_program'] ?>')" class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php else : ?>
                <tr role="row" class="even">
                  <td class="sorting_1"><?= $value['titre'];?></td>
                  <td><?= $value['date_debut'];?></td>
                  <td><?= $value['date_fin'];?></td>
                  <td><?= ""; ?></td>
                  <td>
                    <a href="javascript:void()" onclick="getHTML('addGroupeToProgram&id=<?= $value['id_program'] ?>')" class="btn btn-success">
                      <i class="fa fa-plus white"></i>
                    </a>
                    <a href="javascript:void()" onclick="getHTML('addProgram&modif=<?= $value['id_program'] ?>')" class="btn btn-primary">
                      <i class="fa fa-edit white"></i>
                    </a>
                    <a href="javascript:void()" onclick="getHTML('showProgram&delete=<?= $value['id_program'] ?>')" class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php endif; ?>
                <?php
                  }
                } else {
                  Manager::messages('Aucune donnée trouvé', 'alert-warning');
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">Titre</th>
                  <th rowspan="1" colspan="1">Date Début</th>
                  <th rowspan="1" colspan="1">Date Fin</th>
                  <th rowspan="1" colspan="1">Nombre de pharmacie</th>
                  <th rowspan="1" colspan="1">Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
</div>
<br>
<br>
<?php
// $content = ob_get_clean();
// require('template.php');
?>