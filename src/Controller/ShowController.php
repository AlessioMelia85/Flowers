<?php

declare(strict_types=1);


namespace App\Controller;

use Cake\ORM\TableRegistry;

class ShowController extends AppController{

public function show() {

$flowers = TableRegistry::getTableLocator()->get('Flowers');

$query = $flowers -> find('all',[

'contain' => ['opportunities'],

// debug($query);

]);
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

die();

echo '</table>';
echo '</center>';

echo '</body>';
}


}
?>
