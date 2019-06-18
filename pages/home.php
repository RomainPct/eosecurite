<?php 
$c1 = new CandidePage('accueil');
?>
<main class="containerHome comingFade">
    <h1>Accueil de l'entreprise EO Sécurité à Reims</h1>
    <div class="containerHome__line">
        <img class="containerHome__line__bigPicture" src="<?php $c1->image('image_section_entreprise',[960,585]); ?>" alt="L'entreprise EO Sécurtié">
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
        <img class="containerHome__line__bigPicture" src="<?php $c1->image('image_section_valeurs',[960,585]); ?>" alt="Nos valeurs">
    </div>
    <div class="containerHome__lastLine">
        <div class="containerHome__lastLine__bloc">
            <img class="containerHome__lastLine__bloc__smallPicture" src="<?php $c1->image('image_section_produits',[595,362]); ?>" alt="Nos produits">
            <h3 class="white"><?php $c1->text('titre_section_produits'); ?></h3>
            <p class="white"><?php $c1->text('texte_section_produits'); ?></p>
            <div class="containerHome__lastLine__bloc__buttonContainer">
                <a class="primaryButton" href="../produits">Découvrir nos produits</a>
            </div>
        </div>
        <div class="containerHome__lastLine__bloc">
            <img class="containerHome__lastLine__bloc__smallPicture" src="<?php $c1->image('image_section_services',[595,362]); ?>" alt="Nos services">
            <h3 class="white"><?php $c1->text('titre_section_services'); ?></h3>
            <p class="white"><?php $c1->text('texte_section_services'); ?></p>
            <div class="containerHome__lastLine__bloc__buttonContainer">
                <a class="primaryButton" href="../services">Découvrir nos services</a>
            </div>
        </div>
        <div class="containerHome__lastLine__bloc lastMarginBottom">
            <img class="containerHome__lastLine__bloc__smallPicture" src="<?php $c1->image('image_section_formations',[595,362]); ?>" alt="Nos formations">
            <h3 class="white"><?php $c1->text('titre_section_formations'); ?></h3> 
            <p class="white"><?php $c1->text('texte_section_formations'); ?></p>
            <div class="containerHome__lastLine__bloc__buttonContainer">
                <a class="primaryButton" href="../formations">Découvrir nos formations</a>
            </div>
        </div>
    </div>
</main>