<?php

    function Nombres(){

        $Numnombres = rand(1,5);
        $nombre = "";
    

        switch ($Numnombres){
            case 1: 
                $nombre = "Octavio";
                break;
             case 2:
                $nombre = "Anna";
                break;
             case 3:
                $nombre = "Cristian";
                break;
            case 4:
                $nombre = "Carlos";
                break;
            case 5:
                $nombre = "Elizabeth";
                break;
        }

        return $nombre;
    }

    echo Nombres();
?>
