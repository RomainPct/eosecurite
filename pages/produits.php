<?php
$c = new CandidePage('produits_et_partenaires');
$c1 = new CandideCollection('produits');
?>
<main id="part__container" class="comingFade">
    <h1>Les partenaires et les produits proposés par EO Sécurité, Reims</h1>
    <section id="part__displayContainer">
        <div id="part__leftCont">
            <h2>Nos Produits</h2>
            <p>Texte qualité des produits et des partenaires + avantages de travailler avec EO Sécurité pour ce type de produits .Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>
        </div>
        <img src="https://picsum.photos/400/250" id="part__rightDisplay">
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
