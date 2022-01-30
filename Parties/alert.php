<?php

    if (isset($_GET['reg_err'])) {

        $err = htmlspecialchars($_GET['reg_err']);

        switch ($err) {

            case 'name_length':
                ?>
                <div class="alert">
                    <strong> Votre prénom ne doit pas dépasser les 60 caractères. </strong>
                </div>
                <?php
                break;

            case 'lastName_length':
                ?>
                <div class="alert">
                    <strong> Votre nom ne doit pas dépasser les 60 caractères. </strong>
                </div>
                <?php
                break;

            case 'email':
                ?>
                <div class="alert">
                    <strong>Votre email est trop large, essayez à nouveau</strong>
                </div>
                <?php
                break;

            case 'anniversaire':
                ?>
                <div class="alert">
                    <strong> Votre date de naissance n'existe pas. Essayez de nouveau. </strong>
                </div>
                <?php
                break;

            case 'password_length':
                ?>
                <div class="alert">
                    <strong> Votre mot de passe ne doit pas dépasser les 60 caractères. </strong>
                </div>
                <?php
                break;

            case 'repPassword_length':
                ?>
                <div class="alert">
                    <strong> Votre mot de passe ne doit pas dépasser les 60 caractères. </strong>
                </div>
                <?php
                break;

            case 'passwords':
                ?>
                <div class="alert">
                    <strong> Les mots de passent ne sont pas identiques. </strong>
                </div>
                <?php
                break;

            case 'email_already':
                ?>
                <div class="alert">
                    <strong> L'email est déjà inscrit sur le site. essayez de nouveau.</strong>
                </div>
                <?php
                break;

            case 'pseudo_already':
                ?>
                <div class="alert">
                    <strong> L'utilisateur existe déjà</strong>
                </div>
                <?php
                break;

            case 'success':
                ?>
                <div id="success">
                    <strong>Votre inscription a été effectué ! Conectez vous dès maintenant ! </strong>
                </div>
                <?php
                break;
        }
    }
?>
