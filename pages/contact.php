<?php
$c = new CandidePage('contact');
?>
<h1>contacter eosécurité reims</h1>
<main class="contactContainer comingFade">
    <section class="contactContainer__section">
        <div class="contactContainer__section__leftdiv">
            <iframe class="contactContainer__section__leftdiv__map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10410.48734700077!2d4.1120199!3d49.2835625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x582159c6f6770dc7!2sEO+SECURITE!5e0!3m2!1sfr!2sfr!4v1558898213831!5m2!1sfr!2sfr" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="contactContainer__section__leftdiv__text">
                <h3 class="white">EO Sécurité</h3>
                <p class="secondaryTextWhite">
                    Adresse:<br>
                    <?php $c->text('rue')?><br>
                    <?php $c->text('code_postal_et_ville')?><br>
                    Téléphone:<?php $c->text('numero_de_telephone')?><br>
                    Adresse mail: <?php $c->text('mail')?>
                </p>
            </div>
        </div>
        <div class="contactContainer__section__rightdiv">
            <h2>Nous contacter</h2>
            <form action="php/contact.php"  class="contactContainer__section__rightdiv__form" method="post">
            <div>
                <label for="name" class="contactContainer__section__rightdiv__form__text">Nom complet</label>
                <input type="text" name="name" placeholder="ex: Jérémy Floriac" class="contactContainer__section__rightdiv__form__input">
                <span class="contactContainer__section__rightdiv__form__errorSpan"></span>
            </div>
            <div>
                <label for="company" class="contactContainer__section__rightdiv__form__text">Entreprise</label>
                <input type="text" name="company" placeholder="ex: EO Sércurité" class="contactContainer__section__rightdiv__form__input">
                <span class="contactContainer__section__rightdiv__form__errorSpan"></span>
            </div>
            <div>
                <label for="email" class="email contactContainer__section__rightdiv__form__text">Adresse mail</label>
                <input type="email" name="email" placeholder="ex: jeremy@mail.com" class="contactContainer__section__rightdiv__form__input">
                <span class="contactContainer__section__rightdiv__form__errorSpan"></span>
            </div>
            <div>
                <label for="message" class="contactContainer__section__rightdiv__form__text">Message</label>
                <textarea name="message" cols="30" rows="10" class="contactContainer__section__rightdiv__form__textarea"></textarea>
                <span class="contactContainer__section__rightdiv__form__errorSpan"></span>
            </div>
            <div class="contactContainer__section__rightdiv__form__check"> 
                <input type="checkbox" name="isACompany" class="contactContainer__section__rightdiv__form__check__square">
                    <div class="check contactContainer__section__rightdiv__form__check__text">
                        <label for="scales">Je certifie représenter une entreprise et non un particulier</label>
                    </div>
            </div>
            <div class="primaryButton contactContainer__section__rightdiv__button">
                <button class="primaryButton contactContainer__section__rightdiv__button">Envoyer</button>
            </div>
            </form>
        </div>
    </section>
</main>
