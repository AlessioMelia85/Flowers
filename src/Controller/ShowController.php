<?php

declare(strict_types=1);


namespace App\Controller;

use Cake\ORM\TableRegistry;

class ShowController extends AppController{


    /******************METODO SHOW******************/
    public function show() {

        $flowers = TableRegistry::getTableLocator()->get('Flowers');
        
        $query = $flowers -> find('all',[
        
        'contain' => ['opportunities'],
        
       
        
        ]);
        
        $this->set('query', $query);

    }
}
        
        ?>
        