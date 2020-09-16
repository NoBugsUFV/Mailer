<?php

    /* function accumulateRecipient(){
        //TODO: fazer a função que acumula os destinatários em um vetor.
    } */

    function getExtension($file){
        $extension = explode(".", $file["name"]);
        $extension = end($extension);
        return $extension;
    }