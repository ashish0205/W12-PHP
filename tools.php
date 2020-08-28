<?php

/**
 * this file contain utility functions.
 */

/**
 * Display any one dimensional array.
 */
function array_display($array_name)
{
    $r = '';
    $r .= '<style> table,td,th{border: solid 2px black;}</style>';
    $r .= '<table>';
    $r .= '<tr>';
    $r .= '<th>Index/Key</th>';
    $r .= '<th>Value</th>';
    $r .= '</tr>';
    foreach ($array_name as $index => $value) {
        $r .= '<tr>';
        $r .= '<td> '.$index.' </td>';
        if ($index == 'price') {
            $r .= '<td> $'.$value.' </td>';
            $r .= '</tr>';
        } else {
            $r .= '<td>'.$value.' </td>';
            $r .= '</tr>';
        }
    }
    $r .= '</table>';

    return $r;
}
