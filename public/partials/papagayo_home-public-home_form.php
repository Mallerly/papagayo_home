<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       Juan Santiago
 * @since      1.0.0
 *
 * @package    Papagayo_home
 * @subpackage Papagayo_home/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<div class="carrusel-fomr col-md-4 col-sm-4 col-lg-4">
  <h2>Concurso Programa Papagayo</h2>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Cedula de Identidad">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Clave de Acceso">
    </div>
  </div>
  <div class="col-sm-10">
    <button type="button" class="btn btn-primary btn-block">Ingresar </button>
  </div>
  <div class="col-sm-10">
    <button type="button" class="btn btn-success btn-block">Registrarme </button>
  </div>
  <div class="col-sm-10" style="margin-top: 15px; margin-left: 28px;">
    <a href="#">Desbloqueo y Recuperación de clave de acceso</a>
  </div>
</div>



<style media="screen">
  .carrusel-fomr{
    position: relative;
    top: -34em;
    float: right;
    right: 8%;
    background: white;
    opacity: 0.9;
    width: 30%;
    text-align: center;
    height: 30em;
  }

  .carrusel-fomr .form-control{
    text-align: center;
    font-size: 20px;
  }

  .carrusel-fomr .form-group>div{
    left: 30px;
    margin-top: 25px;
  }

  .carrusel-fomr>div button{
    margin-top: 25px;
    margin-left: 30px;
  }

  .carrusel-fomr>div a{
    color: #0469b0;
    text-align: justify;
    font-size: 13px;
  }

  .carrusel-fomr h2{
    color: #0469b0;
  }

</style>
