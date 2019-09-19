<?php
$c[0] = new CandidePage('produits_et_partenaires');
$c[1] = new CandideCollection('produits');
$c[2] = new CandideCollection('partenaires');
?>
<main class="comingFade part__container">
    <h1>Les partenaires et les produits proposés par EO Sécurité, Reims</h1>
    <section class="part__displayContainer">
        <div class="part__leftCont">
            <h2><?php $c[0]->text('titres_page_produits'); ?></h2>
            <p><?php $c[0]->text('description_page_produits'); ?></p>
        </div>
        <img src="<?php $c[0]->image('image_page_produit',[500,360]) ?>" alt="image_page_produit" id="part__rightDisplay">
    </section>
    <section class="part__sliderCont">
        <div class="part__slider">

            <?php
                foreach ($c[1]->avalaibleItemIds() as $id) {
            ?>
                <div class="part__cards">
                     <img src="<?php $c[1]->image('image_du_produit',$id,[130,130]) ?>" alt="image_du_produit">
                    <p><?php $c[1]->text('nom_du_produit',$id); ?></p>
                </div>
                <?php
                }
                ?>
        </div>
    </section> 
    <section class="part__partners">
        <h2>Nos partenaires</h2>
        <div class="part__squareCont">
            <?php
            foreach ($c[2]->avalaibleItemIds() as $id) {
                ?>
                <div class="part__partnersSquare">
                    <img src="<?php $c[2]->image("logo",$id,[400,400]) ?>" alt="<?php $c[2]->text("nom",$id) ?>">
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <section class="part__contact">
        <a href="/contact" title="Contact EO sécurité" class="primaryButton">Prendre contact avec EO Sécurité</a>
    </section>
</main>
