<?php 
namespace app\controllers;

use Yii;
use app\models\CadastroModel;
use yii\base\Controller;

class ExerciciosController extends Controller{
    public function actionFormulario(){

        $cadastroModel = new CadastroModel;
        $post = Yii::$app->request->post();// same as $_POST

        //O método load vai tentar popular a model com o post que foi feito
        if($cadastroModel->Load($post) && $cadastroModel->validate()){ //Se o cadastroModel for populado corretamente e for validado 
            
            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel
            ]);    
        
        }else{
            return $this->render('formulario', [
                'model' => $cadastroModel
            ]); 
        }

    }
}
?>