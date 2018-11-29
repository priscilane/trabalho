<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "email".
 *
 * @property int $id
 * @property string $titulo
 * @property string $mensagem
 * @property int $user_enviado
 * @property int $user_recebido
 * @property int $active_enviado
 * @property int $active_recebido
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'mensagem', 'user_enviado', 'user_recebido', 'active_enviado', 'active_recebido'], 'required'],
            [['mensagem'], 'string'],
            [['user_enviado', 'user_recebido', 'active_enviado', 'active_recebido'], 'integer'],
            [['titulo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'mensagem' => 'Mensagem',
            'user_enviado' => 'User Enviado',
            'user_recebido' => 'User Recebido',
            'active_enviado' => 'Active Enviado',
            'active_recebido' => 'Active Recebido',
        ];
    }
}
