<?php

?>

<main class="container">

    <ul class="breadcrumb">
        <li>
            <a href="<?php echo base_url();?>">Inici</a>
        </li>
        <li>
            <a href="<?php echo base_url();?>job/all">Llistat d'ofertes</a>
        </li>
        <li>
            <a href="#"><?php echo $job_detail['title'].'['.$numInscrits.'inscrits]'; ?></a>
        </li>
    </ul>

    <article class="offer-status">

        <h1 class="offer-title"><?php echo $job_detail['title']; ?></h1>

        <section class="offer-applicants">
            <h4 class="applicants-title">Hi han aplicat <?= $numInscrits ?> persones:</h4>

            <?php
            // Repeat for each applicant
            $counter = 1;
            foreach($appliers as $dataUser):
                $foto = "https://pbs.twimg.com/profile_images/378800000572625171/5e0f212228fa6ebf35fc28efab092f82_bigger.jpeg";//TODO $dataUser['foto']; FIXME
                $nom = $dataUser['name'];
                ?>

                <article class="offer-applicant">
                    <div class="applicant-image">
                        <img src="<?= $foto ?>">
                    </div>
                    <h5 class="applicant-name"><?= $nom ?></h5>

                    <?php
                    // Repeat for each applicant mutual friends
                    foreach($dataUser['friends'] as $dataFriends):
                        $nomAmic = $dataFriends['nom'];
                        $urlAmic = $dataFriends['url'];
                        $recomana = $dataFriends['recomana'];
                        ?>

                        <article class="applicant-contact">
                            <h6 class="contact-name"><a href="<?= $urlAmic ?>"><?= $nomAmic ?></a></h6>
                            <?php
                            if(empty(trim($recomana))):
                                ?>
                                <a class="applicant-recommendation-request" href="#"><span class="badge">Sol·licita una recomanació</span></a>
                            <?php
                            else:
                                ?>
                                <p class="applicant-recommendation"><?= $recomana ?></p>
                            <?php
                            endif;
                            ?>
                        </article>

                    <?php
                    endforeach;
                    ?>

                </article>

                <?php
                $counter++;
            endforeach;
            ?>

        </section>

        <hr/>

        <?/*
        <div class="offer-image">
            <img src="http://lorempixel.com/g/640/360/" alt="Titol Oferta"/>
        </div>

        <div class="offer-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet error et excepturi facere illo non perspiciatis quo sunt suscipit vero. At corporis deleniti incidunt minima placeat quam quibusdam repellendus vitae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet error et excepturi facere illo non perspiciatis quo sunt suscipit vero. At corporis deleniti incidunt minima placeat quam quibusdam repellendus vitae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet error et excepturi facere illo non perspiciatis quo sunt suscipit vero. At corporis deleniti incidunt minima placeat quam quibusdam repellendus vitae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet error et excepturi facere illo non perspiciatis quo sunt suscipit vero. At corporis deleniti incidunt minima placeat quam quibusdam repellendus vitae.</p>
        </div>

        <hr/>
        */?>

        <div class="offer-details">
            <?/*
            <div class="offer-author-image">
                <img src="http://lorempixel.com/g/240/240/" alt="Joan Vilajoana"/>
            </div>
            <dl class="offer-author">
                <dt>Author:</dt>
                <dd>
                    <a href="#" target="_blank">Joan Vilajoana</a>
                </dd>
            </dl>
            <dl class="offer-date-start">
                <dt>Publicada:</dt>
                <dd>DD-MM-YYYY</dd>
            </dl>
            */?>
            <dl class="offer-date-end">
                <dt>End:</dt>
                <dd><?= $job_detail['end_date'] ?></dd>
            </dl>
            <?/*
            <dl class="offer-location">
                <dt>Ciutat:</dt>
                <dd>Olot</dd>
            </dl>
            */?>
        </div>

    </article>

</main>