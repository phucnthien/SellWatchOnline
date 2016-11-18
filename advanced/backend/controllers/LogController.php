<?php

namespace backend\controllers;
use common\models\User;
use Yii;
use backend\models\Log;
use backend\models\LogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * LogController implements the CRUD actions for Log model.
 */
class LogController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
        'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
        'delete' => ['POST'],
        ],
        ],
        ];
    }

    /**
     * Lists all Log models.
     * @return mixed
     */
    public function actionIndex()
    {

       $query = Log::find()->select('user.username,tbl_log.id,staff_id,content,table_change,tbl_log.created_at')->innerJoinWith('user');
       

       $dataProvider= new ActiveDataProvider([
        'query' => $query,

        ]);

       // Thuonghieu::find()->select(['name', 'id'])->where(['id' => Customer::STATUS_ACTIVE])->column()
       return $this->render('index', [

        'dataProvider' => $dataProvider,
        ]);
   }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the Log model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Log the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Log::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function writeLog($table_change,$content,$staff_id)
    {
        $model = new Log();
        $model->table_change = $table_change;
        $model->content = $content;
        $model->staff_id = $staff_id;
        $model->created_at = time();
        $model->insert();
    }
    public function compareAttribute($newAttribute,$oldAttribute)
    {
        
    }
}
