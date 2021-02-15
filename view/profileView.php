<?php
$title = "Profile";
ob_start();
?>
<div class="row">
  <div class="col-md-12">

    <!-- Profile Image -->
    <div class="box box-success">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?= !empty($_SESSION['user-akoyprestation']['photo']) ? $_SESSION['user-akoyprestation']['photo'] : 'public/vendor/dist/img/avatar.png' ?>" alt="User profile picture">

        <h3 class="profile-username text-center"><?= $_SESSION['user-akoyprestation']['first_name'] . ' ' . $_SESSION['user-akoyprestation']['last_name'] . ' ('.$_SESSION['user-akoyprestation']['role'] .')' ?></h3>

        <p class="text-muted text-center"><?= $_SESSION['user-akoyprestation']['types_user']  ?></p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Section/sous-Section</b> <a class="pull-right">SR</a>
          </li>
          <li class="list-group-item">
            <b>Poste</b> <a class="pull-right">SCASC</a>
          </li>
        </ul>

        <!--<a href="#" class="btn btn-success btn-block"><b>Follow</b></a>-->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
   
    <!-- /.box -->
  </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>