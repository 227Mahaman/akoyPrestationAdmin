<?php
$title = "Type des agents";
$type_user_data = array();
if (!empty($_GET['modif'])) {
  $title = "Modifier Type agent";
  $type_user_data = Manager::getData('types_user', 'id', $_GET['modif'])['data'];
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
      <div class="card m-b-30">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="typeForm" role="form" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="label">Nom du type d'agent</label>
              <input type="text" required class="form-control" id="label" name="label" value="<?= (!empty($_GET['modif']) ? $type_user_data['label'] : '');?>" placeholder="Type d'agent">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" onclick="postData('typeForm', 'type'<?= (!empty($_GET['modif']) ? ', ' . $_GET['modif'] : '') ?>)" class="btn btn-success"><?= $GLOBALS['lang']['btn-valid'] ?? 'valider' ?></button>
            <p id="postMessage">

            </p>
            <?php
            if (isset($_SESSION['messages'])) {
              echo Manager::messages($_SESSION['messages'], 'alert-danger');
            }
            ?>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card m-b-30">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $title ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th>Type des agents</th>
                <th>Action</th>
              </tr>
              <?php
              $data = Manager::getData('types_user', 'statut', 1, true)['data'];
              if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {


              ?>
                  <tr>
                    <td><?= $value['label'] ?></td>
                    <td>
                      <a href="javascript:void()" onclick="getHTML('type&modif=<?= $value['id'] ?>')" class="btn btn-primary">
                        <i class="fa fa-edit white"></i>
                      </a>
                      <a href="javascript:void()" onclick="getHTML('type&delete=<?= $value['id'] ?>')" class="btn btn-danger">
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
<br> <br> <br>
<?php
// $content = ob_get_clean();
// require('template.php');
?>