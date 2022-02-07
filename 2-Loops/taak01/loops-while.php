<?php

$leeftijd = 0;
//Ik ben 18 jaar oud dus ik heb stemrecht!
while($leeftijd <=18){
    echo "Ik ben: $leeftijd jaar oud dus ik heb stemrecht! <br/>";
    $leeftijd++;
}

//Ik ben x jaar, dus ik mag nog niet stemmen
while($leeftijd >18){
    echo "Ik ben: $leeftijd jaar, dus ik mag nog niet stemmen <br/>";
    $leeftijd++;
}
?>