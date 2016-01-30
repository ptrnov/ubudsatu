<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "kk_header".
 *
 * @property integer $id_kk
 * @property string $nama_kk
 * @property string $alamat_kk
 * @property string $status_kk
 * @property integer $jml_kk
 * @property string $ket_kk
 * @property integer $id_rt
 */
class Kk_header extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kk_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kk', 'alamat_kk', 'status_kk', 'jml_kk', 'ket_kk', 'id_rt'], 'required'],
            [['jml_kk', 'id_rt'], 'integer'],
            [['nama_kk', 'alamat_kk', 'status_kk', 'ket_kk'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kk' => 'Id Kk',
            'nama_kk' => 'Nama Kk',
            'alamat_kk' => 'Alamat Kk',
            'status_kk' => 'Status Kk',
            'jml_kk' => 'Jml Kk',
            'ket_kk' => 'Ket Kk',
            'id_rt' => 'Id Rt',
        ];
    }
}
