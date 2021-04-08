<?php
$kms = $argv[1];
function converterKmParaMilhas($kms){
    $milhas = 0.62;
    return $kms / $milhas;
}
echo converterKmParaMilhas($kms) . "\n";
