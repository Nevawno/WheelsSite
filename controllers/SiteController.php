<?php

namespace app\controllers;

use app\models\BrandDiska;
use app\models\Brands;
use app\models\Seasons;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\DiaDiska;
use app\models\DiametrDiska;
use app\models\Wheels;
use app\models\Models;
use app\models\WidthShinu;
use app\models\ProfileShinu;
use app\models\Radius;
use app\models\TypeShipov;
use app\models\NalShipov;
use yii\data\Pagination;
use app\models\Diski;
use app\models\EtDiska;
use app\models\PcdDiska;
use app\models\TypeDiska;
use app\models\WidthDiska;

class SiteController extends Controller
{
    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }
  
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionIndex()
    {

        $models = Models::find()->all();
        $wheels = Wheels::find();

        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $wheels->count(),
        ]);

        $wheels = $wheels->offset($pagination->offset)->limit($pagination->limit)->all();

        $brands = Brands::find()->all();
        $seasons = Seasons::find()->all();
        $widthShinus = WidthShinu::find()->all();
        $profileShinus = ProfileShinu::find()->all();
        $radiuses = Radius::find()->all();
        $typeShipovs = TypeShipov::find()->all();
        $nalShipovs = NalShipov::find()->all();
        
        if (Yii::$app->request->post()) {
            $selects = Yii::$app->request->post();

            $query = "SELECT * FROM wheels WHERE model = ";

            foreach ($selects as $select) {
                $query .= "'$select' OR model = "; 
            }

            $query = substr($query,0,-12);

            foreach ($selects as $select) {
                $query .= " OR brand = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR season = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR width_shinu = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR profile_shinu = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR radius_shinu = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR type_shipov = '$select'";
            }
            
            foreach($selects as $select) {
                $query .= " OR nal_shipu = '$select'";
            }

            $wheels = Wheels::findBySql($query)->all();

        }

        return $this->render('index', 
        [
            'wheels' => $wheels, 
            'models' => $models, 
            'selects' => $selects,
            'query' => $query,
            'brands' => $brands,
            'seasons' => $seasons,
            'widthShinus' => $widthShinus,
            'profileShinus' => $profileShinus,
            'radiuses' => $radiuses,
            'typeShipovs' => $typeShipovs,
            'nalShipovs' => $nalShipovs,
            'pagination' => $pagination,
        ]);

    }

    public function actionDisk()
    {

        $width_diska = WidthDiska::find()->all();
        $diski = Diski::find();

        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $diski->count(),
        ]);

        $diski = $diski->offset($pagination->offset)->limit($pagination->limit)->all();

        $brand_diska = BrandDiska::find()->all();
        $diametr_diska = DiametrDiska::find()->all();
        $pcd_diska = PcdDiska::find()->all();
        $dia_diska = DiaDiska::find()->all();
        $et_diska = EtDiska::find()->all();
        $type_diska = TypeDiska::find()->all();
        
        if (Yii::$app->request->post()) {
            $selects = Yii::$app->request->post();

            $query = "SELECT * FROM diski WHERE type_diska = ";

            foreach ($selects as $select) {
                $query .= "'$select' OR brand = "; 
            }

            $query = substr($query,0,-12);

            foreach ($selects as $select) {
                $query .= " OR brand = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR diametr_diska = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR pcd_diska = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR dia_diska = '$select'";
            }

            foreach($selects as $select) {
                $query .= " OR et_diska = '$select'";
            }

            $diski = Diski::findBySql($query)->all();

        }

        return $this->render('disk', 
        [
            'diski' => $diski, 
            'width_diska' => $width_diska, 
            'selects' => $selects,
            'query' => $query,
            'brand_diska' => $brand_diska,
            'diametr_diska' => $diametr_diska,
            'pcd_diska' => $pcd_diska,
            'dia_diska' => $dia_diska,
            'et_diska' => $et_diska,
            'type_diska' => $type_diska,
            'pagination' => $pagination,
        ]);

    }
   

    // public function actionSearch() {
    //     $wheels = Wheels::find();
    //     $diski = Diski::find();
    //     $q = trim(Yii::$app->request->get('q'));
    //     if (!$q) {
    //         return $this->render('search');
    //     }
    //     $query = Wheels::find()->where(['like', 'name_wheel' => $q]);
    //     if ($query == null || $query == '' || empty($query)) {
    //         $query = Diski::find()->where(['like', 'name' => $q]);
    //     }
    //     $pagination = new Pagination([
    //         'defaultPageSize' => 20,
    //         'totalCount' => $query->count(),
    //         'forcePageParam' => false, 
    //         'pageSizeParam' => false
    //     ]);

    //     $diski = $diski->offset($pagination->offset)->limit($pagination->limit)->all();
    //     $wheels = $wheels->offset($pagination->offset)->limit($pagination->limit)->all();

    //     return $this->render('search', [
    //         'pagination' => $pagination,
    //         'diski' => $diski,
    //         'wheels' => $wheels,
    //         'q' => $q
    //     ]);
    // }
    
    
}
