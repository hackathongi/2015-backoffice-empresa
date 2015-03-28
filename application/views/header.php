<!doctype html> 
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php setlocale(LC_ALL,"es_ES"); ?>
    <title><?php echo $title ?></title>

	<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
    <link type="text/css" href="//admin.wallyjobs.com/application/assets/css/hackajobs-stylesheet.css" rel="stylesheet">
    <link type='text/css' rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">

	<script type="text/javascript" src="//admin.wallyjobs.com/application/assets/js/hackajobs-stylesheet-dependencies.min.js"></script>
    <?php/*
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    */?>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
</head>
<body class="col-md-12 col-lg-12 col-sm-12 col-xs-12 container">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="wally-logo">
                <a href=""<?php echo base_url(); ?>"><img src="img/wallyJobsLogoHor.svg" alt="WallyJobs"/></a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="<?php echo base_url(); ?>">Inici<br></a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url(); ?>job/create">Alta Oferta<br></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>user/delete">Sortir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
