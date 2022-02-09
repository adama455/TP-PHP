<?php

    function distance(int $xa,int $ya,int $xb,int $yb):float {
        return sqrt((pow(($xb-$xa),2)+pow(($yb-$ya),2)));
    }
?>
