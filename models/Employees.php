<?php

namespace app\models;

use Yii;
use Yii\elasticsearch\ActiveRecord;
/**
 * Employees is the model behind Employee search.
 */
class ContactForm extends ActiveRecord
{
    public function attributes()
    {
        return['fName','lName','nicName'];
    }

    public function searchEmp(){
        
    }
}
