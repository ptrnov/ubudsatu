<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "tbl_iuran_kk".
 *
 * @property integer $id_iuran_kk
 * @property integer $id_kk
 * @property string $tgl_iuran_kk
 * @property integer $nilai_iuran_kk
 * @property string $ket_iuran_kk
 * @property string $status_iuran_kk
 */
class Iuran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_iuran_kk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kk', 'tgl_iuran_kk', 'nilai_iuran_kk', 'ket_iuran_kk', 'status_iuran_kk'], 'required'],
            [['id_kk', 'nilai_iuran_kk'], 'integer'],
            [['tgl_iuran_kk'], 'safe'],
            [['ket_iuran_kk', 'status_iuran_kk'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_iuran_kk' => 'Id Iuran Kk',
            'id_kk' => 'Id Kk',
            'tgl_iuran_kk' => 'Tgl Iuran Kk',
            'nilai_iuran_kk' => 'Nilai Iuran Kk',
            'ket_iuran_kk' => 'Ket Iuran Kk',
            'status_iuran_kk' => 'Status Iuran Kk',
        ];
    }
}
