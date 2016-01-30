<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "tbl_rt".
 *
 * @property integer $id_rt
 * @property integer $id_rw
 * @property string $no_rt
 * @property string $ket_rt
 * @property integer $id_ketua_rt
 */
class Rt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_rt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rw', 'no_rt', 'ket_rt', 'id_ketua_rt'], 'required'],
            [['id_rw', 'id_ketua_rt'], 'integer'],
            [['no_rt', 'ket_rt'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rt' => 'Id Rt',
            'id_rw' => 'Id Rw',
            'no_rt' => 'No Rt',
            'ket_rt' => 'Ket Rt',
            'id_ketua_rt' => 'Id Ketua Rt',
        ];
    }
}
