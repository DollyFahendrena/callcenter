<?php
/**
 * Created by PhpStorm.
 * User: Jems
 * Date: 23/01/2019
 * Time: 23:13
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>SSIF - Bienvenue</title>
    <?php
    echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css');
    echo link_tag('assets/css/sb-admin.css');
    ?>
</head>
<!--Body-->
<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Bienvenue !</div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><?php echo anchor("supervisor/gerer_hote","Superviseur","class='list-group-item-link'") ;?></li>
                <li class="list-group-item"><?php echo anchor("hote/journal","Agent","class='list-group-item-link'") ;?></li>
                <li class="list-group-item"><?php echo anchor("developpeur/problemes","Développeur","class='list-group-item-link'") ;?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>

</body>
</html>

