<?php
    $html = '<h2>Confirmez-vous votre inscription avec ces informations suivantes ?</h2><br>';
    $html .= 'Pseudo : ' . $_POST["pseudo"] . '<br>';
    $html .= 'Email : ' . $_POST["email"] . '<br>';
    $html .= 'Age : ' . $_POST["age"] . '<br>';
    $html .= 'Equipe : ' . $_POST["equipe"] . '<br>';
    $html .= '<a href="merci.php">Je confirme et valide mon inscription</a>';

    echo $html;