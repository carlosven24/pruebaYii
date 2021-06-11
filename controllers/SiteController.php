<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\PedidosForm;
use app\models\Pedidos;
use yii\web\UploadedFile;



class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */


    public function actionPedidos(){

        try {

        $model = new PedidosForm;
        $msg = false;

        if($model->load(Yii::$app->request->post())){
            if($model->validate()){ 


            $archivo = UploadedFile::getInstance($model,'archivo');
            $audio = UploadedFile::getInstance($model,'audio');

            //Save files
            $archivo->saveAs('uploads/documents/' . $archivo->baseName . '.' . $archivo->extension);
            $audio->saveAs('uploads/audio/' . $audio->baseName . '.' . $audio->extension);
            
            
            //ARRAYS
            $categoria = "";
            $array = $model->categoria;
            for ($i = 0;count($array) > $i;$i++) {
                $categoria .= $array[$i] . ",";
            }

            $paises = "";
            $array = $model->paises;
            for ($i = 0; count($array) > $i;$i++) {
                $paises .= $array[$i] . ",";
            }
            //END ARRAYS


            //Option perspectiva 3
            if($model->perspectiva == 3){
                $model->perspectiva = $model->perspectiva;
            }

            $pedidos = new Pedidos;
            $pedidos->formato = $model->formato;
            $pedidos->categoria = $categoria;
            $pedidos->tipo = $model->tipo;
            $pedidos->modalidad = $model->modalidad;
            $pedidos->nombre = $model->nombre;
            $pedidos->proposito = $model->proposito;
            $pedidos->extension = $model->extension;
            $pedidos->paises = $paises;
            $pedidos->idioma = $model->idioma;
            $pedidos->seo = $model->seo;
            $pedidos->palabra_clave = $model->palabra_clave;
            $pedidos->semantica = $model->semantica;
            $pedidos->descripcion = $model->descripcion;
            $pedidos->archivo = $archivo->baseName . '.' . $archivo->extension;
            $pedidos->audio = $audio->baseName . '.' . $audio->extension;
            $pedidos->publico = $model->publico_objetivo;
            $pedidos->perspectiva = $model->perspectiva;
            $pedidos->fecha_entrega = $model->fecha_entrega;
            $pedidos->save(false);
          
            }
        }

        return $this->render('pedidos',['model'=>$model, 'msg' => $msg]);


        }catch (\Exception $e) {
            return $this->render('pedidos',['model'=>$model, 'msg' => $e]);
        }
    }

}
