<?php

namespace backend\controllers;

use Yii;
use backend\models\Dongho;
use backend\models\DonghoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DonghoController implements the CRUD actions for Dongho model.
 */
class DonghoController extends Controller
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
     * Lists all Dongho models.
     * @return mixed
     */
    public function actionIndex()
    {

         //$this->layout ='product-manager';
        $searchModel = new DonghoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }

    /**
     * Displays a single Dongho model.
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
     * Creates a new Dongho model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dongho();
        $date = time();
        $model->created_at = $date;
        $model->updated_at = $date;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                ]);
        }
    }

    /**
     * Updates an existing Dongho model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                ]);
        }
    }
    // $key is value want to search, index is search by watch name or watch code
    public function actionSearch()

    {   
        $queryParams = Yii::$app->request->queryParams;
        if (isset($queryParams['productCode'])) {
            $model = $this->searchByProductCode($queryParams['productCode']);
            if ($model !== null) {
                # code...
                 return $this->render('_search', [
                'model' => $model,
                
                ]);
            }
            else
            {
                return $this->render('_search', [
                
                'error' => 'Không tìm thấy sản phẩm nào',
                ]);
            }
           
            # code...
        }
      
         return $this->render('_search');
      

        // $model =  new Dongho();
        // if ($model->load(Yii::$app->request->post())) {
        //     # code...

        //     return $this->render('_search', [
        //         'model' => $model,
        //         ]);
        // }
        // else
        // {
        //     return $this->render('_search', [
        //         'model' => $model,
        //         ]);
        // }

      //   if ($id == -1) {
      //       return $this->render('_search',[
      //               'model' => $model
      //           ]);
      //           # code...
      //   }
      //   else
      //   {
      //     Customer::find()->where(['id' => 10])->one();

      //     return $this->render('_search', [
      //       'model' => Dongho::find()->where(['id' => $id])->one()

      //       ]);
      // }
  }
    /**
     * Deletes an existing Dongho model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    /**
     * Finds the Dongho model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dongho the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dongho::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
   
     private function searchByProductCode($productCode){
        $model = Dongho::find()->where(['masp' =>$productCode])->one();
        return $model;
    }

}
