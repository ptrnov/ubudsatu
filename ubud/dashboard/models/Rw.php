<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "tbl_rw".
 *
 * @property integer $id_rw
 * @property string $no_rw
 * @property string $ket_rw
 * @property integer $id_ketua_rt
 */
class Rw extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_rw';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_rw', 'ket_rw', 'id_ketua_rt'], 'required'],
            [['id_ketua_rt'], 'integer'],
            [['no_rw', 'ket_rw'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rw' => 'Id Rw',
            'no_rw' => 'No Rw',
            'ket_rw' => 'Ket Rw',
            'id_ketua_rt' => 'Id Ketua Rt',
        ];
    }
}
