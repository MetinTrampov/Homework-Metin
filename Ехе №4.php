<?php

//Правим for цикъл който ще добавя по 1 звезда на всеки един ред с командата echo "*" в цикъла.
for ($rows=0; $rows<5; $rows++)
{ 
    echo "*";
    //И правим друг вложен цикъл който добавя по още една звезда на всеки нов ред
    for ($star=0; $star<$rows; $star++)
    {   
       echo "*";
    }
    //с тази команда минаваме на нов ред
    echo "</br>";    
} 









