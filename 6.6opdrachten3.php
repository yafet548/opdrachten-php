<?php
function WillekeurigePostcode()
{
    echo rand(1000,9999);
    $stringtekst = "ABCDEFGHIJKLMNOPQRSTUWXYZ";
    $random = substr(str_shuffle($stringtekst), 0, 2);
    echo $random;
}
WillekeurigePostcode();
?>