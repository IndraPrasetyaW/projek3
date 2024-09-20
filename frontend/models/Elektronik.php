<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "elektronik".
 *
 * @property string|null $Kolom 1
 */
class Elektronik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'elektronik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kolom 1'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kolom 1' => 'Kolom 1',
        ];
    }
}
