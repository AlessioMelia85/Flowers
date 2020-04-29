<?php

echo '<body>';
        
        echo '<center>';
        
        echo '<table style="border: 1px solid black">';
        
        echo '<th>' . 'Nome' . '</th>'; 
        echo '<th>' . 'Occasione' . '</th>'; 
        echo '<th>' . 'Descrizione' . '</th>'; 
        
        
        foreach($query as $row){
            echo '<tr>' . '<td>' . $row -> name . '</td>';
            echo '<td>' . $row ->Opportunities['name'] . '</td>';
            echo '<td>' . $row ->Opportunities['description']. '</td>' . '</tr>';
            
        }
        
        
        
        echo '</table>';
        echo '</center>';
        
        echo '</body>';
     


    ?>