<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dataIni = date("Y-m-d");

?>
<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>WallyJobs</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="#">Inici<br></a>
                </li>
                <li class="active">
                    <a href="#">Alta Oferta<br></a>
                </li>
                <li>
                    <a href="#">Sortir</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Inici</a>
                    </li>
                    <li>
                        <a href="#">Alta oferta</a>
                    </li>
                </ul>
                <h1>Alta oferta</h1>
                <div>
                    <?php echo validation_errors(); ?>
                </div>
                <form action="<?php echo base_url(); ?>job/create" method="post">
                    <div class="form-group">
                        <label class="control-label" for="exampleInputEmail1">Títol</label>
                        <input class="form-control" id="exampleInputEmail1" placeholder="Introdueix el títol de l'oferta"
                               type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="jobDescription">Descripció</label>
                        <textarea id="jobDescription" class="form-control" name="description" rows="3" placeholder="Descriu breument l'oferta"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="jobDateIni">Data ini</label>
                        <div>
                            <input id="jobDateIni" name="start_date" type="date" value="<?php echo $dataIni; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="jobDateFin">Data fi</label>
                        <div>
                            <input id="jobDateFin" name="end_date" type="date" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="jobCity">Població</label>
                        <input class="form-control" id="jobCity" name="city" placeholder="Poblacio"
                               type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="jobLongitude">Latitud</label>
                        <input class="form-control" id="jobLongitude" name="latitude" placeholder="Latitud"
                               type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="jobLatitude">Longitud</label>
                        <input class="form-control" id="jobLatitude" name="longitude" placeholder="Longitud"
                               type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="input-1">Foto oferta</label>
                        <input class="file" id="input-1" name="picture_url" type="file">
                    </div>
                    <a href="<?php echo base_url(); ?>" class="btn btn-danger">&lt;&lt; Tornar inici</a>

                    <button type="submit" class="btn btn-primary">Publicar oferta a Facebook</button>
                </form>
            </div>
        </div>
    </div>
</div>