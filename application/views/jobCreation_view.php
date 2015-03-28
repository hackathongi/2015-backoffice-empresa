<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dataIni = date("Y-m-d");

?>

<form action="<?php echo base_url(); ?>/job/create" method="post">
    <div class="form-group">
        <label for="jobTitle">Títol</label>
        <input type="text" class="form-control" id="jobTitle" name="title" placeholder="Nom de l'oferta" />
    </div>
    <div class="form-group">
        <label for="jobDesc">Descripció</label>
        <textarea id="jobDesc" rows="4" class="form-control" name="description" placeholder="Descripció"></textarea>
    </div>
    <div class="form-group">
        <label for="jobDataIni">Data Ini</label>
        <input type="date" class="form-control" id="jobDataIni" name="start_date" value="<?php echo $dataIni; ?>">
    </div>
    <div class="form-group">
        <label for="jobDataFin">Data Fin</label>
        <input type="date" class="form-control" id="jobDataFin" name="end_date">
    </div>
    <div class="form-group">
        <label for="jobCity">Ciutat</label>
        <input type="text" class="form-control" id="jobCity" placeholder="Ciutat" name = "city">
    </div>
    <div class="form-group">
        <label for="jobLong">Long.</label>
        <input type="text" class="form-control" id="jobLong" placeholder="Loongitud" name="longitude">
    </div>
    <div class="form-group">
        <label for="jobLat">Lat.</label>
        <input type="text" class="form-control" id="jobLat" placeholder="Latitud" name="latitude">
    </div>
    <a href="#" class="btn btn-info">UploadImage</a>
	<button type="submit" class="btn btn-danger">Desar</button>
</form>
