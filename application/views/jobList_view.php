<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 28/03/2015
 * Time: 12:02
 */
    setlocale(LC_ALL, 'es-ES');
?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url(); ?>">Inici</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>job/all">Llistat d'ofertes</a>
                    </li>
                </ul>
                <h1>Llistat d'ofertes</h1>
                <a class="btn btn-primary" href="<?php echo base_url(); ?>job/form">Crear oferta</a>
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
			<a href="/job/detail/<?= $job['id']; ?>">
                        <tr>
                            <td><?php echo $job['id']; ?></td>
                            <td><?php echo $job['title']; ?></td>
                            <td><?php echo $job['description']; ?></td>
                            <td><?php echo $job['start_date']; ?></td>
                            <td><?php echo $job['end_date']; ?></td>
                            <td><?php echo $job['appliers']; ?></td>
                        </tr>
			</a>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
