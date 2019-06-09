<?php 
$c1 = new CandidePage('accueil');
?>
<main class="containerHome">
    <h1>Accueil de l'entreprise EO Sécurité à Reims</h1>
    <div class="containerHome__line">
        <div class="containerHome__line__bigPicture">
            <img src="<?php $c1->image('illustration_description_line_1',[644,397]); ?>" alt="L'entreprise EO Sécurtié">
        </div>
        <div class="containerHome__line__textJustifyLeft">
            <h2><?php $c1->text('title_line_1'); ?></h2>
            <p><?php $c1->text('description_line_1'); ?></p>
        </div>
    </div>
    <div class="containerHome__line reverse">
        <div class="containerHome__line__textJustifyRight">
            <h2><?php $c1->text('title_line_2'); ?></h2>
            <p><?php $c1->text('description_line_2'); ?></p>
        </div>
        <div class="containerHome__line__bigPicture">
            <img src="<?php $c1->image('illustration_description_line_2',[644,397]); ?>" alt="Nos spécificités">
        </div>
    </div>
    <div class="containerHome__lastLine">
        <div class="containerHome__lastLine__bloc">
            <div class="containerHome__lastLine__bloc__smallPicture">
                <img src="<?php $c1->image('illustration_description_line_3_left',[397,245]); ?>" alt="Nos produits">
            </div>
            <h3 class="white"><?php $c1->text('title_line_3_left'); ?></h3>
            <p class="white"><?php $c1->text('description_line_3_left'); ?></p>
            <div class="containerHome__lastLine__bloc__buttonContainer">
                <a class="primaryButton" href="../produits">Découvrir nos produits</a>
            </div>
        </div>
        <div class="containerHome__lastLine__bloc lastMarginBottom">
            <div class="containerHome__lastLine__bloc__smallPicture">
                <img src="<?php $c1->image('right',[397,245]); ?>" alt="Nos formations">
            </div>
            <h3 class="white"><?php $c1->text('right'); ?></h3> 
            <p class="white"><?php $c1->text('description_line_3_right'); ?></p>
            <div class="containerHome__lastLine__bloc__buttonContainer">
                <a class="primaryButton" href="../formations">Découvrir nos formations</a>
            </div>
        </div>
    </div>
</main>