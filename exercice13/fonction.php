<?php
    function espaceIni($chaine):string{
        $maj=preg_replace('/\s\s+/', ' ',trim($chaine) );
        return $maj;
    }
    function pointfinal($chaine):string{
        $point=chunk_split($chaine,25,".");
        return $point;
    }
    function preMaj($chaine):string{
        $letter=ucfirst($chaine);
        return $letter;
    }
    
?>