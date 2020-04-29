<?php
function isa_convert_bytes_to_specified($bytes, $to, $decimal_places = 1) 
{
    $formulas = array(
        'KB' => number_format($bytes / 1024, $decimal_places),
        'MB' => number_format($bytes / 1048576, $decimal_places),
        'GB' => number_format($bytes / 1073741824, $decimal_places)
    );
    return isset($formulas[$to]) ? $formulas[$to] : 0;
}
?>