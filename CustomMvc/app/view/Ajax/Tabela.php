<?php

foreach ($this->view_data['TESTE'][0] as $key => $value) {
    echo '<th>' . $key . '</th>';
}

foreach ($this->view_data['TESTE'] as $key => $value)
{
    echo '<tr>';
    foreach ($this->view_data['TESTE'][$key] as $usuario)
    {
        echo '<td>'.$usuario .'</td>';
    }
    echo '</tr>';
}