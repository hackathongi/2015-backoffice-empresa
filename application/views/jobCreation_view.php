<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dataIni = date("Y-m-d");

?>
<main class="container">
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url(); ?>">Inici</a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>job/create">Alta oferta</a>
        </li>
    </ul>
    <div>
        <?php echo validation_errors(); ?>
    </div>
    <article class="new-offer">
        <h2 class="new-offer-title">Alta oferta</h2>
        <hr/>
        <form action="<?php echo base_url(); ?>job/create" method="post">
            <div class="form-group new-offer-email">
                <label class="control-label" for="new-offer-title">Títol</label>
                <input class="form-control" id="new-offer-title" name="title" placeholder="Introdueix el títol de l'oferta" type="text">
            </div>
            <div class="form-group new-offer-description">
                <label class="control-label" for="new-offer-description">Descripció</label>
                <textarea class="form-control" name="description" rows="3" id="new-offer-description" placeholder="Descriu breument l'oferta"></textarea>
            </div>
            <div style="display:none" class="form-group new-offer-date-ini">
                <label class="control-label" for="new-offer-date-ini">Data ini</label>
                <input class="form-control" id="new-offer-date-ini" name="start_date" type="date" value="<?php echo $dataIni; ?>">
            </div>
            <div class="form-group new-offer-date-end">
                <label class="control-label" for="new-offer-date-end">Data fi</label>
                <input class="form-control datepicker" id="new-offer-date-end" name type="text">
            </div>
            <div class="form-group new-offer-location">
                <label class="control-label" for="new-offer-location">Població</label>
                <input class="form-control" id="new-offer-location" name="city" placeholder="Població" type="text" onchange="getLatLng()">
            </div>
            <div style="display:none" class="form-group new-offer-latitude">
                <label class="control-label" for="new-offer-latitude">Latitud</label>
                <input class="form-control" id="new-offer-latitude" name="latitude" placeholder="Latitud" type="text">
            </div>
            <div style="display:none" class="form-group new-offer-longitude">
                <label class="control-label" for="new-offer-longitude">Longitud</label>
                <input class="form-control" id="new-offer-longitude" name="longitude" placeholder="Longitud" type="text">
            </div>
            <div class="form-group new-offer-image">
                <label class="control-label" for="new-offer-image">Foto oferta</label>
                <input class="form-control" id="new-offer-image" name="picture_url" type="file">
            </div>
            <div class="form-group new-offer-submit">
                <a class="btn btn-link" href="<?php echo base_url(); ?>"> Cancela</a>
                <button type="submit" class="btn btn-primary">Publica</button>
            </div>
        </form>
    </article>
</main>
<script type="text/javascript" src="js/hackajobs-stylesheet-dependencies.js"></script>
<script type="text/javascript">
    (function ($, window, document, undefined ) {
// Break if datepicker is not present
        if(!$.fn.datepicker) return;
// Attach datepicker
        $(".datepicker").datepicker({
            language: "ca"
        });
    })( jQuery, window, document );
</script>
<script>
    function getLatLng(){
        //$.ajax({ url:'https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&sensor=true',
        $.ajax({ url:'http://maps.googleapis.com/maps/api/geocode/json?address=' + $( '#new-offer-location' ).val() + '&sensor=true',
            success: function(data){
                //alert(data.results[0].geometry.location.lat);
                //alert('hola');
                $( '#new-offer-longitude' ).val(data.results[0].geometry.location.lng);
                $( '#new-offer-latitude' ).val(data.results[0].geometry.location.lat);
            }
        });
    }
</script>
