<?php 
$c1 = new CandidePage('accueil');
?>
<main class="containerHome">
    <h1>Accueil de l'entreprise EO Sécurité à Reims</h1>
    <div class="containerHome__line">
        <div class="containerHome__line__bigPicture">
            <img src="<?php $c1->image('image_section_entreprise',[644,397]); ?>" alt="L'entreprise EO Sécurtié">
        </div>
        <div class="containerHome__line__textJustifyLeft">
            <h2><?php $c1->text('titre_section_entreprise'); ?></h2>
            <p><?php $c1->text('texte_section_entreprise'); ?></p>
        </div>
    </div>
    <div class="containerHome__line reverse">
        <div class="containerHome__line__textJustifyRight">
            <h2><?php $c1->text('titre_section_valeurs'); ?></h2>
            <p><?php $c1->text('texte_section_valeurs'); ?></p>
        </div>
        <div class="containerHome__line__bigPicture">
            <img src="<?php $c1->image('image_section_valeurs',[644,397]); ?>" alt="Nos valeurs">
        </div>
    </div>
    <div class="containerHome__lastLine">
        <div class="containerHome__lastLine__bloc">
            <div class="containerHome__lastLine__bloc__smallPicture">
                <img src="<?php $c1->image('image_section_produits',[397,245]); ?>" alt="Nos produits">
            </div>
            <h3 class="white"><?php $c1->text('titre_section_produits'); ?></h3>
            <p class="white"><?php $c1->text('texte_section_produits'); ?></p>
            <div class="containerHome__lastLine__bloc__buttonContainer">
                <a class="primaryButton" href="../produits">Découvrir nos produits</a>
            </div>
        </div>
        <div class="containerHome__lastLine__bloc lastMarginBottom">
            <div class="containerHome__lastLine__bloc__smallPicture">
                <img src="<?php $c1->image('image_section_formations',[397,245]); ?>" alt="Nos formations">
            </div>
            <h3 class="white"><?php $c1->text('titre_section_formations'); ?></h3> 
            <p class="white"><?php $c1->text('texte_section_formations'); ?></p>
            <div class="containerHome__lastLine__bloc__buttonContainer">
                <a class="primaryButton" href="../formations">Découvrir nos formations</a>
            </div>
        </div>
    </div>
</main>