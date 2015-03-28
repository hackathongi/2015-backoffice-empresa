<?php
/**
 * Created by PhpStorm.
 * User: danie_000
 * Date: 28/03/2015
 * Time: 12:02
 */
    setlocale(LC_ALL, 'es-ES');
?>

<div class="table-responsive">
    <form action="<?php echo base_url(); ?>/job" method="post">
        <button type="submit" class="btn btn-add">Nova oferta</button>
    </form>
    <table class="table table-bordered table-hover">
        <tr class="active">
            <td>#</td>
            <td>Títol</td>
            <td>Finalitza</td>
            <td>Inscrits</td>
            <td>Action</td>
        </tr>
    <?php
        foreach($jobs as $job){
    ?>
        <tr class="success">
            <td><?php $job['id']; ?></td>
            <td><?php $job['title']; ?></td>
            <td><?php $job['end_date']; ?></td>
            <td><?php $job['numInscrits']; ?></td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </div>
            </td>
        </tr>
    <?php
        }
    ?>
    </table>
    <form action="<?php echo base_url(); ?>/job" method="post">
        <button type="submit" class="btn btn-add">Nova oferta</button>
    </form>
</div>