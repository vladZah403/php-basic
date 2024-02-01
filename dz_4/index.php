<?php

$num = fgets(STDIN);

function getColor($num)
{
    switch ($num)
    {
        case 1 : echo "green \n"  ;
            break;
        case 2 : echo "red \n" ;
            break;
        case 3 : echo "blue \n" ;
            break;
        case 4 : echo "brown \n" ;
            break;
        case 5 : echo "violet \n" ;
            break;
        case 6 : echo "black \n" ;
            break;
        default:
            echo "white \n";
    }
}

getColor($num);