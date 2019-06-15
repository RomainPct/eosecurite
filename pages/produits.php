<?php
$c = new CandidePage('produits_et_partenaires');
$c1 = new CandideCollection('produits');
?>
<main id="part__container" class="comingFade">
    <h1>Les partenaires et les produits proposés par EO Sécurité, Reims</h1>
    <section id="part__displayContainer">
        <div id="part__leftCont">
            <h2><?php $c->text('titres_page_produits'); ?></h2>
            <p><?php $c->text('description_page_produits'); ?></p>
        </div>
        <img src="<?php $c->image('image_page_produit',[500,360]) ?>" alt="image_page_produit" id="part__rightDisplay">
    </section>
    <section id="part__sliderCont">
        <div id="part__slider">

            <?php
                foreach ($c1->avalaibleItemIds() as $id) {
            ?>
                <div class="part__cards">
                     <img src="<?php $c1->image('image_du_produit',$id,[130,130]) ?>" alt="image_du_produit">
                    <h3><?php $c1->text('nom_du_produit',$id); ?></h3>
                </div>
                <?php
                }
                ?>
        </div>
    </section> 
    <section id="part__partners">
        <h2>Nos partenaires</h2>
        <div id="part__squareCont">
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/defibrion.png" alt="Defibrion"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/aimont.jpg" alt="Aimont"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/jallatte.jpg" alt="Jallatte"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/upower.jpg" alt="Upower"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/guyard.jpg" alt="Guyard"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/heckel.jpg" alt="Heckel"></div>
        </div>
        <div id="part__squareCont">
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/uvex.png" alt="Uvex"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/honeywell.jpg" alt="Honeywell"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/maxiflex.png" alt="Maxiflex"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/msa.png" alt="Msa"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/dickies.png" alt="Dickies"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/carhartt.jpg" alt="Carhartt"></div>
        </div>
        <div id="part__squareCont">
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/texet.png" alt="Texet"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/workzone.jpg" alt="Workzone"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/engel.png" alt="Engel" width="130px"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/cepovett.png" alt="Cepovett"></div>
            <div class="part__partnersSquare"> <img src="" alt=""></div>
            <div class="part__partnersSquare"> <img src="" alt=""></div>
        </div>
    </section>
    <section id="part__contact">
        <a href="/contact" title="Contact EO sécurité" class="primaryButton">Prendre contact avec EO Sécurité</a>
    </section>
</main>
