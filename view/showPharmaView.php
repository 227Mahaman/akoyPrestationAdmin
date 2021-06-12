<?php
$title = "Listes des pharmacies";
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
        $module = Manager::getData("module", "action_url", "addPharma")['data']['id'];
        if (haveAction($_SESSION['user-akoyprestation']['roleId'], $module)) :
        ?>
          <a  href="javascript:void()" onclick="getHTML('addPharma')" class="btn btn-success-rgba"><i class="fa fa-plus"></i> Ajouter</a>
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
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Titre</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Adresse</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Tel</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Ville</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Image</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                $data = Manager::getData('pharmacies', 'statut', 1, true)['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
                    if ($i % 2 == 0) :
                      ?>

                <tr role="row" class="odd">
                  <td class="sorting_1"><?= $value['titre'];?></td>
                  <td><?= $value['adresse'];?></td>
                  <td><?= $value['tel'];?></td>
                  <td><?= Manager::getData('villes', 'id', $value['ville'])['data']['titre']; ?></td>
                  <td>
                    <img width="50" src="<?= Manager::getData("files", "id", $value['image'])['data']['file_url'];?>" class="img-circle" alt="<?= $value['first_name'];?>">
                  </td>
                  <td>
                    <a href="javascript:void()" onclick="getHTML('addPharma&modif=<?= $value['id'] ?>')" class="btn btn-primary">
                      <i class="fa fa-edit white"></i>
                    </a>
                    <a href="javascript:void()" onclick="getHTML('showPharma&delete=<?= $value['id'] ?>')" class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php else : ?>
                <tr role="row" class="even">
                  <td class="sorting_1"><?= $value['titre'];?></td>
                  <td><?= $value['adresse'];?></td>
                  <td><?= $value['tel'];?></td>
                  <td><?= Manager::getData('villes', 'id', $value['ville'])['data']['titre']; ?></td>
                  <td>
                  <img width="50" src="<?= Manager::getData("files", "id", $value['image'])['data']['file_url'];?>" class="img-circle" alt="<?= $value['first_name'];?>">
                  </td>
                  <td>
                    <a href="javascript:void()" onclick="getHTML('addPharma&modif=<?= $value['id'] ?>')" class="btn btn-primary">
                      <i class="fa fa-edit white"></i>
                    </a>
                    <a href="javascript:void()" onclick="getHTML('showPharma&delete=<?= $value['id'] ?>')" class="btn btn-danger">
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
                  <th rowspan="1" colspan="1">Adresse</th>
                  <th rowspan="1" colspan="1">Tel</th>
                  <th rowspan="1" colspan="1">Ville</th>
                  <th rowspan="1" colspan="1">Image</th>
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