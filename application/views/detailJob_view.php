<?php

?>
<div class="col-md-12">
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo base_url();?>">Inici</a>
		</li>
		<li>
			<a href="<?php echo base_url();?>job/all">Llistat d'ofertes<br></a>
		</li>
		<li>
			<a href="#"><?php echo $job_detail['title'].'['.$numInscrits.'inscrits]'; ?></a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-8">
		<h1><?php echo $job_detail['title']; ?></h1>
	</div>
	<div class="col-md-4 text-right">
		<h3><?php echo $job_detail['end_date']; ?></h3>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<p contenteditable="true"><?php echo $job_detail['description']; ?></p>
	</div>
</div>

<div class="row">
	<h2>Inscrits</h2>
</div>


<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Foto</th>
			<th>Nom</th>
			<th>Recomenacions d'amics compartits</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$counter = 1;
	foreach($appliers as $dataUser):
		$foto = "";//TODO $dataUser['foto']; FIXME
		$nom = $dataUser['name'];
	?>
		<tr>
			<td><?php echo $counter; ?></td>
			<td><img src="<?php echo $foto; ?>" class="img-responsive"/></td>
			<td><?php echo $nom; ?></td>
			<?php
			if(!(count($dataUser['friends']) > 0)):
			?><span class="label label-warning">No hi ha recomanacions</span><?php
			else:
				?><ul><?php
				foreach($friends as $dataFriends):
					$nomAmic = $dataFriends['nom'];
					$urlAmic = $dataFriends['url'];
					$recomana = $dataFriends['recomana'];
					?>
					<li>
					<a href="<?php echo $urlAmic; ?>"><?php echo $nomAmic; ?></a> 
					<?php
					if(empty(trim($recomana))):
						?><a href="#" class="btn btn-xs btn-success">Sol.licitar recomanació</a><?php
					else:
						?>diu <span style="color:#666;"><?php echo $recomana; ?></span><?php
					endif;
					?>
					</li>
					<?php
				endforeach;			
				?></ul><?php
			endif;
			?>
		</tr>
	<?php
	$counter++;
	endforeach;
	?>
	</tbody>
</table>