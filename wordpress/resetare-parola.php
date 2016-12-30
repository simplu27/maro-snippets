<?php

// Parola  de acces la sectiunea de administrare Wordpress poate fi modificata direct in baza de date.
// Este necesar sa rulati comanda de mai jos in PHPMyAdmin sau in linie de comanda MySQL:

UPDATE `wp_users` SET `user_pass` = MD5( 'parola_noua' ) WHERE `wp_users`.`user_login` = "utilizator_admin";

// "parola_noua" - parola pe care doriti sa o setati
// "utilizator_admin" - numele utilizatorului care are drepturi de administrator si pentru care doriti resetarea parolei