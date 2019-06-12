<?php 
$c = new CandidePage('formations');
$c1 = new CandideCollection('formations');
?>
<h1>Les formations de EO Sécurité Reims</h1>
<main class="containerFormations comingFade">
    <div class="containerFormations__containerTrainings comingLeft">
        <div class="containerFormations__containerTrainings__trainings">
            <h2><?php $c->text('titre_pour_les_formations'); ?></h2>
            <p><?php $c->text('description_des_formations'); ?></p>
        </div>
        <div class="containerFormations__containerTrainings__trainings__characteristics">
            <h3 class="white"><?php $c->text('titre_pour_les_specificite_de_eo_securite'); ?></h3>
            <p class="white"><?php $c->text('premiere_specificite_eo_securite'); ?></p>
            <p class= "white"><?php $c->text('deuxieme_specificite_eo_securite'); ?></p>
            <p class="white"><?php $c->text('troisieme_specificite_eo_securite'); ?></p>
        </div>
    </div>

    <div class="containerCardsFormations comingRight">
    <?php 
    foreach($c1->avalaibleItemIds() as $id){
        ?>
        <div class= "containerCardsFormations__cardsTraining">
            <div class="containerCardsFormations__cardsTraining__imgFormations">
                <img src="<?php $c1->image('image_de_la_formation', $id,[400,200]) ?>" alt="">
            </div>
            <div class="containerCardsFormations__cardsTraining__contentFormations">
                <h3 class="white"><?php $c1->text('nom_de_la_formation', $id); ?></h3>
                <p class="white"><?php $c1->text('description_de_la_formation', $id); ?></p>
            </div>
            <div class="containerCardsFormations__cardsTraining__buttonFormations">
                <a class="primaryButton white" href="formation/<?php echo $id ?>" title="<?php $c1->text('nom_de_la_formation', $id) ?> EO Sécurité">En savoir plus</a>
            </div>
        </div>
        <?php
    }
    ?> 
    </div>
</main>