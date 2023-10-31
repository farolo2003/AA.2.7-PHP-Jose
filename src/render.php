<?php 

function render(string $template, array $data = []):string{
    if($data){
        extract($data, EXTR_OVERWRITE);
    }
    //Inicializar buffer de salida
    ob_start();
    require 'views/'. $template. '.tpl.php';
    $rendered= ob_get_clean();
    return ((string)$rendered);
}