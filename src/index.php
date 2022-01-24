<?php
    echo '<p>update : 9 jan. 2022 à 11h08 </p>';

    $html = '<h1>Inscription - Tournoi Valorant Janvier 2022</h1>';
    $html .= '<form action="formulaire.php" method="post">';
    $html .=     '<div>';
    $html .=         '<label for="pseudo">Pseudo : </label>';
    $html .=         '<input type="text" id="pseudo" name="pseudo">';
    $html .=     '</div>';
    $html .=     '<div>';
    $html .=         '<label for="mail">Email : </label>';
    $html .=         '<input type="email" id="mail" name="mail">';
    $html .=     '</div>';
    $html .=     '<div>';
    $html .=         '<label for="age">Age : </label>';
    $html .=         '<input type="number" id="age" name="age">';
    $html .=     '</div>';
    $html .=     '<div>';
    $html .=         '<label for="equipe">Equipe : </label>';
    $html .=         '<input type="text" id="equipe" name="equipe">';
    $html .=     '</div>';
    $html .=     '<input type="submit" value="Envoyer">';
    $html .= '</form>';

    echo $html;
