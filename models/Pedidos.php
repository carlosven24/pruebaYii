<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedidos".
 *
 * @property int $id
 * @property string|null $formato
 * @property string|null $categoria
 * @property string|null $tipo
 * @property string|null $modalidad
 * @property string|null $nombre
 * @property string|null $proposito
 * @property string|null $extension
 * @property string|null $paises
 * @property string|null $idioma
 * @property string|null $seo
 * @property string|null $palabra_clave
 * @property string|null $semantica
 * @property string|null $descripcion
 * @property string|null $archivo
 * @property string|null $audio
 * @property string|null $publico
 * @property string|null $perpesctiva
 * @property string|null $fecha_entrega
 */
class Pedidos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedidos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoria', 'tipo', 'modalidad', 'nombre', 'proposito', 'extension', 'paises', 'idioma', 'seo', 'palabra_clave', 'semantica', 'descripcion', 'archivo', 'audio', 'publico', 'perpesctiva', 'fecha_entrega'], 'required'],
            [['formato', 'categoria', 'tipo', 'modalidad', 'nombre', 'proposito', 'extension', 'paises', 'idioma', 'seo', 'palabra_clave', 'semantica', 'descripcion', 'archivo', 'audio', 'publico', 'perpesctiva', 'fecha_entrega'], 'string', 'max' => 255]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'formato' => 'Formato',
            'categoria' => 'Categoria',
            'tipo' => 'Tipo',
            'modalidad' => 'Modalidad',
            'nombre' => 'Nombre',
            'proposito' => 'Proposito',
            'extension' => 'Extension',
            'paises' => 'Paises',
            'idioma' => 'Idioma',
            'seo' => 'Seo',
            'palabra_clave' => 'Palabra Clave',
            'semantica' => 'Semantica',
            'descripcion' => 'Descripcion',
            'archivo' => 'Archivo',
            'audio' => 'Audio',
            'publico' => 'Publico',
            'perpesctiva' => 'Perpesctiva',
            'fecha_entrega' => 'Fecha Entrega',
        ];
    }
}
