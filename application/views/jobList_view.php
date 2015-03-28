<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 28/03/2015
 * Time: 12:02
 */
    setlocale(LC_ALL, 'es-ES');
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
                <li class="active">
                    <a href="#">Inici<br></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/job/create">Alta Oferta<br></a>
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
                        <a href="#">Llistat d'ofertes</a>
                    </li>
                </ul>
                <h1>Llistat d'ofertes</h1>
                <a class="btn btn-primary" href="<?php echo base_url(); ?>/job/create">Crear oferta</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Títol</th>
                        <th>Descripció</th>
                        <th>Data inici</th>
                        <th>Data fi</th>
                        <th>Inscrits</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($jobs_list as $job) {
                        ?>
                        <tr>
                            <td><?php echo $job['id']; ?></td>
                            <td><?php echo $job['title']; ?></td>
                            <td><?php echo $job['description']; ?></td>
                            <td><?php echo $job['start_date']; ?></td>
                            <td><?php echo $job['end_date']; ?></td>
                            <td><?php echo $job['appliers']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>