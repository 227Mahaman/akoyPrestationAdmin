<?php
$title = "Listes des CV";
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
            <table id="example1" class="table table-bordered" role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Client</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Date création</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="" aria-label="CSS grade: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                $data = Manager::getData('cv', 'statut', 1, true)['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
                    $client = Manager::getData('client', 'id', $value['client'])['data'];
                    if ($i % 2 == 0) :
                      ?>

                <tr role="row" class="odd">
                </tr>
                  <td class="sorting_1"><?= $i;?></td>
                  <td><?= $client['nom'] . ' ' . $client['prenom'];?></td>
                  <td><?= $value['created_at'];?></td>
                  <td>
                    <a href="javascript:void()" onclick="getHTML('cv&delete=<?= $value['id'] ?>')" class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php else : ?>
                <tr role="row" class="even">
                  <td class="sorting_1"><?= $i;?></td>
                  <td><?= $client['nom'] . ' ' . $client['prenom'];?></td>
                  <td><?= $value['created_at'];?></td>
                  <td>
                    <a href="javascript:void()" onclick="getHTML('cv&delete=<?= $value['id'] ?>')" class="btn btn-danger">
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
                  <th rowspan="1" colspan="1">#</th>
                  <th rowspan="1" colspan="1">Client</th>
                  <th rowspan="1" colspan="1">Date de création</th>
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