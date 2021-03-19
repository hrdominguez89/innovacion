<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="es-ar" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Recordá tu PIN">
    <meta name="author" content="Ministerio de Ambiente y Desarrollo Sostenible">

    <script src="https://kit.fontawesome.com/a7dbba11bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
  
    <title>Ministerio de Ambiente Desarrollo Sostenible</title>
  
    <?php if(isset($files_css)){
      foreach ($files_css as $file) {
        # code...
        echo "<link href='".base_url("assets/css/$file")."' rel='stylesheet' type='text/css' />";
      }
} ?>
  	
</head>

<body class="d-flex flex-column h-100">
    <!-- HEADER -->
    <?php $this->load->view('header_view');?>
    <!-- FIN HEADER -->

    <!-- SECTIONS -->
    <?php $this->load->view($sections_view);?>
    <!-- END SECTIONS -->

    <!-- FOOTER -->
    <?php $this->load->view('footer_view');?> 
    <!-- END FOOTER -->
  
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.slim.min"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    
  <!-- CONDICIONAL PARA CARGAR LOS SCRIPT DESDE EL CONTROLLER -->
  <?php if(isset($files_js)){
      foreach ($files_js as $file_js) {
        # code...
        echo "<script src='".base_url("assets/js/$file_js")."'></script>"; 
      }
    } ?>

  
</body>
</html> 