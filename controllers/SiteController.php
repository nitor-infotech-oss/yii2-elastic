<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\Employees;

class SiteController extends Controller
{
    

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // $employees = new Employees();
        // $employees->searchEmp();
        return $this->render('index');
    }

    /**
     * Get empployee name.
     *
     * @return JSON string
     */
    public function actionEmpNames()
    {
        if(Yii::$app->request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;

            $postData = Yii::$app->request->post();
            // var_dump($postData['searchTxt']);
            $employees = new Employees();
            $empNames = $employees->searchEmpNames($postData['searchTxt']);

            return ['data'=> ['success'=>true,'empNames'=>$empNames]];
        }
    }
    
}
