<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid my-auto">
    <div class="row justify-content-center mt-4">
        <div class="col-12 text-center">
            <h2>Hola <?php echo $this->session->flashdata("name").' '.$this->session->flashdata("lastname");?></h2>
            
            <?php if(!$this->session->flashdata("group")):;?>
                <p>Su cuenta no está autorizada a imprimir</p>

            <?php elseif($this->session->flashdata("pin")):;?>
                <h3>Su PIN es:<br>
                <?php echo $this->session->flashdata("pin");?></h3>

            <?php else:;?>
                <p>Usted no cuenta con un PIN<br>
                para solicitarlo envie un mail a <a href="mailto:mesadeservicios@ambiente.gob.ar?subject=Solicitud de PIN para el uso de impresoras&body=A fin de acceder al servicio de impresión solicito se me asigne el siguiente PIN (6 dígitos, ejemplo: 112233):">mesadeservicios@ambiente.gob.ar</a></p>
            
            <?php endif;?>
        </div>
        <div class="d-none d-lg-block col-lg-5 px-5 text-center">
            <img class="img-fluid" src="<?php echo base_url();?>assets/img/impresoras-01.png">
        </div>
        <div class="col-12 col-lg-5 mt-3 mt-lg-0 px-5 text-center align-self-center">

            <h3>Nuestro objetivo es lograr un uso eficiente y sostenible del papel.</h3>
            <div class="mt-5">
                <p><i class="fas fa-check"></i> Imprimí usando ambas caras de una hoja.</p>
                <p><i class="fas fa-check"></i> Evitá imprimir si no es necesario.</p>
                <p><i class="fas fa-check"></i> Revisá el documento antes de enviarlo a imprimir.</p>
            </div>
        </div>
        
    </div>
</div>