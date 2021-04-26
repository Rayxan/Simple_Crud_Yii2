<?php

namespace app\models;

use yii\base\Model;

class CadastroModel extends Model{
    public $nome;
    public $email;
    public $idade;

    public function rules(){    //retorna um array de configuração das regras, é aqui que ocorre toda a validação
        return [
            [['nome', 'email', 'idade'], 'required'],
            ['email', 'email'],
            ['idade', 'number', 'integerOnly' => true]
        ];
    }

    public function attributesLabels(){ //retorna como os atributos devem ser chamados nas views
        return [
            'nome' => 'Nome Completo',
            'email' => 'E-mail',
            'idade' => 'Idade'
        ];
    }
}

?>

