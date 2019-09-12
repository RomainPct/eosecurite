<?php 
$c[0] = new CandidePage('services');
$c[1] = new CandideCollection('services');
?>
<h1>services de eosécurité</h1>
<main class="servicesContainer comingFade">
    <section class="servicesContainer__servicesSection">
        <div class="servicesContainer__servicesSection__cattop">
            <h2><?php $c[0]->text('titre_pour_les_services'); ?></h2>
            <p><?php $c[0]->text('description_des_services'); ?></p>
        </div>

        <?php 
        foreach(array_reverse($c[1]->avalaibleItemIds()) as $id){
            ?>
            <div class="servicesContainer__servicesSection__cat">
                <h2 class="white"><?php $c[1]->text('titre_du_service', $id); ?></h2>
                <p class="white"><?php $c[1]->text('description_du_service', $id); ?></p>
            </div>
            <?php
        }
        ?> 
        <div class="primaryButton servicesContainer__servicesSection__button">
            <a class="primaryButton contactContainer__section__rightdiv__button" href="/contact" title="Contact EO sécurité">Prendre contact avec EO Sécurité</a>
        </div>
    </section>
</main>