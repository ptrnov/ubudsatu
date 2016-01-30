<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "kk_detail".
 *
 * @property integer $id
 * @property string $id_kk
 * @property integer $id_rt
 * @property string $nama
 * @property string $status
 */
class Kk_detail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kk_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kk', 'id_rt', 'nama', 'status'], 'required'],
            [['id_rt'], 'integer'],
            [['id_kk', 'nama', 'status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kk' => 'Id Kk',
            'id_rt' => 'Id Rt',
            'nama' => 'Nama',
            'status' => 'Status',
        ];
    }
}
