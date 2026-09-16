<?php


function router(){
    echo "2. O Router está analisando a URL. <br>";
    $rota = "/usuarios";
    $parametro = "id-123";
    middleware($rota);
}