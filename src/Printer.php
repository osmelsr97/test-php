<?php
declare(strict_types=1);

namespace App;

class Printer
{
    public function print(): string
    {
        $text = ["Technology","Information","IT"];
        $container = [];
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 || $i % 5 == 0) {
                $x = ( $i % 3 == 0 && $i % 5 >= 1) + (($i % 3 == 0 && $i % 5 == 0) * 2);
                array_push($container, $text[( $i % 3 == 0 && $i % 5 >= 1) + (($i % 3 == 0 && $i % 5 == 0) * 2)]);
            } else {
                array_push($container, $i);
            }
        }
        return implode('',$container);
    }
}