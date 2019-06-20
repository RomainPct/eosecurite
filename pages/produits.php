<?php
$c = new CandidePage('produits_et_partenaires');
$c1 = new CandideCollection('produits');
?>
<main class="comingFade part__container">
    <h1>Les partenaires et les produits proposés par EO Sécurité, Reims</h1>
    <section class="part__displayContainer">
        <div class="part__leftCont">
            <h2><?php $c->text('titres_page_produits'); ?></h2>
            <p><?php $c->text('description_page_produits'); ?></p>
        </div>
        <img src="<?php $c->image('image_page_produit',[500,360]) ?>" alt="image_page_produit" id="part__rightDisplay">
    </section>
    <section class="part__sliderCont">
        <div class="part__slider">

            <?php
                foreach ($c1->avalaibleItemIds() as $id) {
            ?>
                <div class="part__cards">
                     <img src="<?php $c1->image('image_du_produit',$id,[130,130]) ?>" alt="image_du_produit">
                    <p><?php $c1->text('nom_du_produit',$id); ?></p>
                </div>
                <?php
                }
                ?>
        </div>
    </section> 
    <section class="part__partners">
        <h2>Nos partenaires</h2>
        <div class="part__squareCont">
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/Asset 1-page-001.jpg" alt="Atg"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/aimont.jpg" alt="Aimont"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/jallatte.png" alt="Jallatte"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/CleanSpace_logo_positive_mono.png" alt="Clean Space"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/upower.png" alt="Upower"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/carhartt.png" alt="Carhartt"></div>
        </div>
        <div class="part__squareCont">
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/uvex.png" alt="Uvex"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/heckel.jpg" alt="Heckel"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/cepovett.png" alt="Cepovett"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/honeywell.png" alt="Honeywell"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/guyard.jpg" alt="Guyard"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/Etxecom logo.png" alt="Extecom"></div>
        </div>
        <div class="part__squareCont">
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/texet.png" alt="Texet"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/engel.png" alt="Engel" width="130px"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/msa.png" alt="Msa"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/gvs-logo.jpg" alt="Gvs"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/INNOTECH.png" alt="Innotech"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/JSP.jpg" alt="Jsp"></div>
        </div>
        <div class="part__squareCont">
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/P2L.png" alt="P2L"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/PETZL.png" alt="PETZL"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/Logo JLF.png" alt="Jlf"></div>
            <div class="part__partnersSquare"> <img src="assets/images/partenaires/defibrion.png" alt="Defibrion"></div>
        </div>
    </section>
    <section class="part__contact">
        <a href="/contact" title="Contact EO sécurité" class="primaryButton">Prendre contact avec EO Sécurité</a>
    </section>
</main>
