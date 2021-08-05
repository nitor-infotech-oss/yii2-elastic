<?php

namespace app\models;

use Yii;
use yii\elasticsearch\ActiveRecord;
/**
 * Employees is the model behind Employee search.
 */
class Employees extends ActiveRecord
{
    public function attributes()
    {
        return['fName','lName','nicName'];
    }

    public function searchEmpNames($searchTxt)
    {
        $empNames = Employees::find()->query(['query_string' => ['query' => '*'.$searchTxt.'*',"fields"=>["fName","lName","nicName"]]])->all();
        return $empNames;
    }
}
