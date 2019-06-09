<?php 
$c = new CandidePage ('formations');
$c1 = new CandideCollection ('formations');
?>
<h1>Les formations de EO Sécurité Reims</h1>
<main class="containerFormations">
    <div class="containerFormations__containerTrainings">
        <div class="containerFormations__containerTrainings__trainings">
            <h2><?php $c->text('titre_pour_les_formations') ?></h2>
            <p><?php $c->text('description_des_formations') ?></p>
        </div>
        <div class="containerFormations__containerTrainings__trainings__characteristics">
            <h3 class="white">Les spécificités EO Sécurité</h3>
            <p class="white"><?php $c->text('première_spécificité_eo_securite') ?></p>
            <p class= "white"><?php $c->text('deuxième_spécificité_eo_securite') ?></p>
            <p class="white"><?php $c->text('troisième_spécificité_eo_securite') ?></p>
        </div>
    </div>

    <div class="containerCardsFormations">
        <div class= "containerCardsFormations__cardsTraining">
            <div class="containerCardsFormations__cardsTraining__imgFormations"></div>
            <div class="containerCardsFormations__cardsTraining__contentFormations">
                <h3 class="white">Formation 1</h3>
                <p class="white">Description rapide de la formation en quelques lignes. But, contenu, avantages et intérêts de la formation</p>
            </div>
            <div class="containerCardsFormations__cardsTraining__buttonFormations">
                <a class="primaryButton white" href="../formationdetaillee" title="Bouton formations">En savoir plus</a>
            </div>
        </div>
        <div class= "containerCardsFormations__cardsTraining">
            <div class="containerCardsFormations__cardsTraining__imgFormations"></div>
            <div class="containerCardsFormations__cardsTraining__contentFormations">
                <h3 class="white">Formation 2</h3>
                <p class="white">Description rapide de la formation en quelques lignes. But, contenu, avantages et intérêts de la formation</p>
            </div>
            <div class="containerCardsFormations__cardsTraining__buttonFormations">
                <a class="primaryButton white" href="../formationdetaillee" title="Bouton formations">En savoir plus</a>
            </div>
        </div>
        <div class= "containerCardsFormations__cardsTraining">
            <div class="containerCardsFormations__cardsTraining__imgFormations"></div>
            <div class="containerCardsFormations__cardsTraining__contentFormations">
                <h3 class="white">Formation 3</h3>
                <p class="white">Description rapide de la formation en quelques lignes. But, contenu, avantages et intérêts de la formation</p>
            </div>
            <div class="containerCardsFormations__cardsTraining__buttonFormations">
                <a class="primaryButton white" href="../formationdetaillee" title="Bouton formations">En savoir plus</a>
            </div>
        </div>
    </div>
</main>