<?php 
$c = new CandidePage ('formation_detaillee');
?>
<h1>Les informations des formations de EO Sécurité Reims</h1>
<main class= "containerFormationDetaillee">
    <div class="containerFormationDetaillee__contentFormationDetaillee">
        <div class="containerFormationDetaillee__contentFormationDetaillee__titleFormationDetaillee">
            <h2><?php $c->text('titre_de_la_formation'); ?></h2>
            <p><?php $c->text('contexte_de_la_formation'); ?></p>
        </div>
        <div class="containerFormationDetaillee__contenFormationDetaillee__descriptionFormationDetaillee">
                <!-- Contenu de la formation (modulable avec l'espace de gestion) -->
        </div>
    </div>
    <div class="containerFormationDetaillee__formationAskQuotation">
        <div class="containerFormationDetaillee__formationAskQuotation__informationQuotation">
            <p><?php $c->text('principe_de_la_formation_en_quelques_lignes'); ?></p>
            <p><strong>Public:</strong> Toutes personnes de l'entreprise.</p>
            <p><strong>Durée:</strong> 2 journées (14 heures)</p>
            <p><strong>Lieu:</strong> Dans les locaux de l'entreprise (les salariés apporteront leurs E.P.I)</p>
            <div class="containerFormationDetaillee__formationAskQuotation__informationQuotation__buttonQuotation">
                <a class="primaryButton white" href="../contact" title="Bouton formation detaillee">Demander un devis</a>
            </div>
        </div>
    </div>
</main>