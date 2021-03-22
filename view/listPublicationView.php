<?php
$title = "Listes des publications";
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
        <?php
        $module = Manager::getData("module", "action_url", "addPublication")['data']['id'];
        if (haveAction($_SESSION['user-akoyprestation']['roleId'], $module)) :
        ?>
          <a  href="javascript:void()" onclick="getHTML('addPublication')" class="btn btn-success-rgba"><i class="fa fa-plus"></i> Ajouter</a>
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
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 182.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Titre</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Description</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Type</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Lieu</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Photo</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Année B</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Début & Fin</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 110.883px;" aria-label="CSS grade: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                $data = Manager::getData('publications', 'statut', 1, true)['data'];
                if (is_array($data) || is_object($data)) {
                  foreach ($data as $value) {
                    $i++;
                    if ($i % 2 == 0) :
                      ?>

                <tr role="row" class="odd">
                  <td class="sorting_1"><?= $value['titre'];?></td>
                 
                  <td><?= substr($value['description'], 0, 125);?></td>
                  
                  <td><?= Manager::getData('type_publication', 'id', $value['type_publication'])['data']['titre']; ?></td>
                  <td><?= $value['lieu'];?></td>
                  <td>
                    <img width="50" src="<?= Manager::getData("files", "id", $value['file'])['data']['file_url'];?>" class="img-circle" alt="<?= $value['first_name'];?>">
                  </td>
                  <td><?= $value['date_annee_bourse'];?></td>
                  <td><?= $value['date_debut'] . ' à ' . $value['date_fin'];?></td>
                  <td>
                    <a href="javascript:void()" onclick="getHTML('addPublication&modif=<?= $value['id'] ?>')" class="btn btn-primary">
                      <i class="fa fa-edit white"></i>
                    </a>
                    <a href="javascript:void()" onclick="getHTML('listPublication&delete=<?= $value['id'] ?>')" class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php else : ?>
                <tr role="row" class="even">
                  <td class="sorting_1"><?= $value['titre'];?></td>
                  <td><?= substr($value['description'], 0, 50);?></td>
                  
                  <td><?= Manager::getData('type_publication', 'id', $value['type_publication'])['data']['titre']; ?></td>
                  <td><?= $value['lieu']; ?></td>
                  <td>
                  <img width="50" src="<?= Manager::getData("files", "id", $value['file'])['data']['file_url'];?>" class="img-circle" alt="<?= $value['first_name'];?>">
                  </td>
                  <td><?= $value['date_annee_bourse'];?></td>
                  <td><?= $value['date_debut'] . ' à ' . $value['date_fin'];?></td>
                  <td>
                    <a href="javascript:void()" onclick="getHTML('addPublication&modif=<?= $value['id'] ?>')" class="btn btn-primary">
                      <i class="fa fa-edit white"></i>
                    </a>
                    <a href="javascript:void()" onclick="getHTML('listPublication&delete=<?= $value['id'] ?>')" class="btn btn-danger">
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
                  <th rowspan="1" colspan="1">Description</th>
                  <th rowspan="1" colspan="1">Type</th>
                  <th rowspan="1" colspan="1">Lieu</th>
                  <th rowspan="1" colspan="1">Photo</th>
                  <th rowspan="1" colspan="1">Année B</th>
                  <th rowspan="1" colspan="1">Début & Fin</th>
                  <th rowspan="1" colspan="1">Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <!--<div class="row">
          <div class="col-sm-5">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
          </div>
          <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
              <ul class="pagination">
                <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                <li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li>
                <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li>
                <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li>
              </ul>
            </div>
          </div>
        </div>-->
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