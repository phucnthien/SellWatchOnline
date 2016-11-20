<?php
    namespace backend\widgets;
    use yii\base\Widget;
    use yii\helpers\Html;
class logWidget extends Widget
{
    public $model;
    public function init()
    {
        parent::init();
        //   echo "<pre>";
        // print_r($model);
        // die();
    }

    public function run()
    {
        
        
        return $this->render('logWidget', ['model'=>$this->model]);
    }
}