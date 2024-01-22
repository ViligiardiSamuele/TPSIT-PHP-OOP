<?php
require_once('models/Alunno.php');

$classe = [];

for ($i = 1; $i < 18; $i++)
    array_push($classe, new Alunno('Nome'.$i, 'Cognome'.$i, $i));

foreach ($classe as $alunno) {
    print_r($alunno); echo '<br>';
}
