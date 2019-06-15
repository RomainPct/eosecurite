<?php
$c = new CandidePage('produits_et_partenaires');
$c1 = new CandideCollection('produits');
?>
<main id="part__container" class="comingFade">
    <h1>Les partenaires et les produits proposés par EO Sécurité, Reims</h1>
    <section id="part__displayContainer" class="comingRight">
        <div id="part__leftCont">
            <h2><?php $c->text('titres_page_produits'); ?></h2>
            <p><?php $c->text('description_page_produits'); ?></p>
        </div>
        <img src="<?php $c->image('image_page_produit',[500,360]) ?>" alt="image_page_produit" id="part__rightDisplay">
    </section>
    <section id="part__sliderCont" class="comingLeft">
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
    <section id="part__partners" class="comingRight">
        <h2>Nos partenaires</h2>
        <div id="part__squareCont">
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            </div>
            <div id="part__squareCont">
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            <div class="part__partnersSquare"></div>
            </div>
        </div>
    </section>
    <section id="part__contact">
        <a href="/contact" title="Contact EO sécurité" class="primaryButton">Prendre contact avec EO Sécurité</a>
    </section>
</main>
