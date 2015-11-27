<?php
namespace api\controllers;

use yii\rest\ActiveController;

class ProgressController extends ActiveController
{
	public $modelClass = 'common\models\Progress';
    public $reservedParams = ['sort','q'];

	public function behaviors()
    {
        return \yii\helpers\ArrayHelper::merge(parent::behaviors(), [
            // Setting up Origin, for allowing access from different host
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
                'cors' => [
                    'Origin' => ['http://kawal-korupsi.dev', 'http://kawal-korupsi.dev/'],
                    'Access-Control-Request-Method' => ['POST', 'PUT', 'GET', 'HEADER'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age' => 3600,
                    'Access-Control-Expose-Headers' => [
                        'X-Pagination-Current-Page',
                        'X-Pagination-Page-Count',
                        'X-Pagination-Per-Page',
                        'X-Pagination-Total-Count',
                        'Link',
                    ],
                ],
            ],
        ]);
    }
	
    public function actions() {
        $actions = parent::actions();
        // Override indexAction
        $actions['index']['prepareDataProvider'] = [$this, 'indexDataProvider'];
        return $actions;
    }

    // Override index request
    public function indexDataProvider() {
        $params = \Yii::$app->request->queryParams;

        $model = new $this->modelClass;
        $modelAttr = $model->attributes;

        $search = [];

        if (!empty($params)) {
            foreach ($params as $key => $value) {
                if(!is_scalar($key) or !is_scalar($value)) {
                    throw new BadRequestHttpException('Bad Request');
                }
                if (!in_array(strtolower($key), $this->reservedParams) && \yii\helpers\ArrayHelper::keyExists($key, $modelAttr, false)) {
                    $search[$key] = $value;
                }
            }
        }
        $searchByAttr['ProgressSearch'] = $search;
        $searchModel = new \common\models\ProgressSearch();    
        return $searchModel->search($searchByAttr);     
    }

} 
