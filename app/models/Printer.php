<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 14:54
 */

namespace KITM;


class Printer
{
    public static function printArray(array $data): void {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<ul>';
        foreach ($data as $propName => $item) {
            echo '<li>'.$propName.': '.$item.'</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }
}