<?php

function wheelsNotNull($obj, $view) {
    if ($obj !== null && $obj !== '') {
        return ' <tr>
        <td>'.$view.'</td>
        <td>'.$obj.'</td>
        </tr>';
    } else {
        return null;
    }
}