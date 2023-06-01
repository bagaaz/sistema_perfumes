<?php
    if(!function_exists('now')){
        function now(){
            return date('Y-m-d H:i:s');
        }
    }

    if(!function_exists('format_date')){
        function format_date($date, $format = 'd/m/Y') {
            return \Carbon\Carbon::parse($date)->format($format);
        }
    }

    if(!function_exists('format_money')){
        function format_money($amount, $symbol = 'R$') {
            return $symbol . number_format($amount, 2, ',', '.');
        }
    }
?>
