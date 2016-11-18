<?php

 
namespace backend\controllers;
use backend\controllers\LogController;
use Yii;
use backend\models\User;
use backend\models\Log;
use backend\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
     //   $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $query = User::find()->select('level_id,level_name,username,display_name,user.id,user.created_at,user.updated_at, user.status')->innerJoinWith('level');

       $dataProvider= new ActiveDataProvider([
        'query' => $query,

        ]);
       

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        $date = time();
        $model->created_at = $date;
        $model->updated_at = $date;
         
        if ($model->load(Yii::$app->request->post())) {
            if (!$model->validate()) {
               
                return $this->render('create', [
                    'model' => $model,
                ]);
                return null;
            }
            $model->setPassword($model->password);
            $model->generateAuthKey();
            // echo "<pre>";
            // print_r($model);
            // die();
            if ($model->save()) {
                # code...
             //     echo "<pre>";
             // print_r( Yii::$app->user->getId());
             // die();
                LogController::writeLog(Log::tableName(),"Tạo: user ID: $model->id, user_name: $model->username, dislay_name: $model->display_name", Yii::$app->user->getId() );
                 return $this->redirect(['view', 'id' => $model->id]);
            }
            

           
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldAttributes = $model->attributes;
      
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
              LogController::writeLog(Log::tableName(),"Sửa nhân viên :. {.Dữ liệu cũ: ".implode(' ',$oldAttributes) . "}. {Dữ liệu mới: ".implode(' ', $model->attributes)."}" , Yii::$app->user->getId() );
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function dectectUpdateChange($newAttribute,$oldAttribute)
    {
        // $contentChange = 'Thay đổi: ';
        // if ($newAttribute['username'] != $oldAttribute['username'] ) {
        //     $contentChange .= "username: $oldAttribute['username'] =>  $newAttribute['username'] ";
        //     # code...
        // }
        // if ($newAttribute['display_name'] != $oldAttribute['username'] ) {
        //     $contentChange .= "username: $oldAttribute['username'] =>  $newAttribute['username'] ";
        //     # code...
        // }
    }

}
