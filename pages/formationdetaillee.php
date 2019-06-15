<?php 
$c = new CandideCollectionItem('formations', $_GET["id"]);
?>
<h1>Les informations des formations de EO Sécurité Reims</h1>
<main class= "containerFormationDetaillee comingFade">
    <div class="containerFormationDetaillee__contentFormationDetaillee">
        <div class="containerFormationDetaillee__contentFormationDetaillee__titleFormationDetaillee">
            <h2><?php $c->text('nom_de_la_formation'); ?></h2>
            <p><?php $c->text('description_de_la_formation'); ?></p>
            <div class="containerFormationDetaillee__formationAskQuotation">
                <div class="containerFormationDetaillee__formationAskQuotation__informationQuotation">
                     <p><?php $c->text('principe_de_la_formation'); ?></p>
                     <p><strong>Public : </strong><?php $c->text('public_de_la_formation'); ?></p>
                     <p><strong>Durée : </strong><?php $c->text('duree_de_la_formation'); ?></p>
                     <p><strong>Lieu : </strong><?php $c->text('lieu_de_la_formation'); ?></p>
                     <div class="containerFormationDetaillee__formationAskQuotation__informationQuotation__buttonQuotation">
                     <a class="primaryButton white" href="../contact" title="Bouton formation detaillee">Demander un devis</a>
                    </div>
                 </div>
            </div>
        </div>
        <div class="containerFormationDetaillee__contenFormationDetaillee__descriptionFormationDetaillee">
                <!-- Contenu de la formation (modulable avec l'espace de gestion) -->
                <?php $c->text('descriptif_complet_de_la_formation', true); ?>
        </div>
    </div>
</main>