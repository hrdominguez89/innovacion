<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid my-auto">
    <div class="row justify-content-center">
        <div class="d-none d-md-block  col-md-5 col-lg-4 p-5 text-center align-self-center">
            <h3 class="mb-5">¿Por qué necesitamos el PIN?</h3>
            <p><i class="fas fa-check"></i> Podés usar la red de impresoras desde cualquier punto del ministerio.</p>
            <p><i class="fas fa-check"></i> Ayuda a evitar impresiones indeseadas.</p>
            <p><i class="fas fa-check"></i> Podés escanear directo a tu cuenta de correo.</p>
        </div>
        
        <div class="col-12 col-md-5 col-lg-4 p-5">
            <div class="container-xl text-center align-self-center">  
                <div class="mb-3 mx-auto mt-3">
                    <img src="<?php echo base_url(); ?>assets/img/logo_color.png" alt="Logo Ministerio de Ambiente y Desarrollo Sostenible" class="img-fluid">
                </div>
                <div class="text-left login-form mx-auto my-5">
                    <?php echo form_open(base_url().'auth/login');?>
                        <div class="form-group">
                            <?php echo form_label("Usuario","username");?>
                            <?php
                            $username_input=array(
                                "class"=>"form-control",
                                "id"=>"username",
                                "name"=>"username",
                                "required"=>"",
                                "value"=>isset($username)? $username:""
                            );
                            echo form_input($username_input);?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Contraseña', 'password');?>
                            <?php
                            $password_input=array(
                                "class"=>"form-control",
                                "id"=>"password",
                                "name"=>"password",
                                "required"=>""
                            );
                            echo form_password($password_input);?>
                        </div>
                        <?php
                        $submit_input=array(
                            "class"=>"btn btn-block text-white",
                            "style"=>"background-color: #37BBED;",
                            "name"=>"login",
                            "value"=>"Iniciar sesión"
                        );
                        echo form_submit($submit_input);?>
                        <?php echo isset($error)? "<div class='mt-2 alert alert-danger'>".$error."</div>":"";?>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>

        <div class="d-none d-lg-block col-lg-4 p-5 text-center align-self-center">
            <img class="img-fluid" src="<?php echo base_url();?>assets/img/impresoras-02.png">
        </div>
    </div>
    
</div>
