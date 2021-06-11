<?php

namespace app\models;

use Yii;
use yii\base\Model;


/**
 * ContactForm is the model behind the contact form.
 */
class PedidosForm extends Model
{
    public $formato;
    public $tipo;
    public $categoria;
    public $modalidad;
    public $nombre;
    public $proposito;
    public $extension;
    public $paises;
    public $idioma;
    public $seo;
    public $palabra_clave;
    public $semantica;
    public $descripcion;
    public $archivo;
    public $audio;
    public $publico_objetivo;
    public $perspectiva;
    public $perspectiva2;
    public $fecha_entrega;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['formato'], 'required'],
            [['formato','tipo','modalidad','nombre','proposito','extension','idioma','seo','palabra_clave','semantica','descripcion','perspectiva','perspectiva2','fecha_entrega'],'string', 'max' => 255],
            [['categoria','paises','publico_objetivo'],'default'],
            [['archivo'],'file','extensions' => ['pdf', 'docx'],'skipOnEmpty' => true],
            [['audio'],'file','extensions' => 'mp3']
        ];
    }

    /**
     * @return array customized attribute labels
     */


}
