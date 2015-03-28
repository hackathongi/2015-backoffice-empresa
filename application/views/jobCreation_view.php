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
                <form action="<?php echo base_url(); ?>/job/create" method="post">
                    <div class="form-group">
                        <label class="control-label" for="exampleInputEmail1">Títol</label>
                        <input class="form-control" id="exampleInputEmail1" placeholder="Introdueix el títol de l'oferta"
                               type="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="exampleInputPassword1">Descripció</label>
                        <textarea class="form-control" rows="3" placeholder="Descriu breument l'oferta"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="exampleInputEmail1">Data fi</label>
                        <div>
                            <input type="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="exampleInputEmail1">Població</label>
                        <input class="form-control" id="exampleInputEmail1" placeholder="Introdueix el títol de l'oferta"
                               type="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="exampleInputEmail1">Foto oferta</label>
                        <input class="file" id="input-1" type="file">
                    </div>
                    <button type="submit" class="btn btn-danger">&lt;&lt; Tornar inici</button>
                    <button type="submit" class="btn btn-primary">Publicar oferta a Facebook</button>
                </form>
            </div>
        </div>
    </div>
</div>