<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "pembukuan".
 *
 * @property string $ID
 * @property string $TGL
 * @property integer $TYPE
 * @property string $CHILD
 * @property string $SRC
 * @property string $SRC_DSC_REF
 * @property string $SRC_DSC
 * @property string $SRC_DSC_QTY
 * @property string $SRC_DSC_PRICE
 * @property string $SRC_DSC_DETAIL
 * @property string $KETERANGAN
 * @property integer $STATUS
 * @property string $CREATED_BY
 * @property string $UPDATED_BY
 * @property string $CREATED_AT
 * @property string $UPDATED_TIME
 */
class Pembukuan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pembukuan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TGL', 'CREATED_AT', 'UPDATED_TIME'], 'safe'],
            [['TYPE'], 'required'],
            [['TYPE', 'CHILD', 'SRC_DSC_QTY', 'STATUS'], 'integer'],
            [['SRC_DSC_PRICE'], 'number'],
            [['SRC_DSC_DETAIL', 'KETERANGAN'], 'string'],
            [['SRC', 'SRC_DSC_REF'], 'string', 'max' => 50],
            [['SRC_DSC'], 'string', 'max' => 10],
            [['CREATED_BY'], 'string', 'max' => 100],
            [['UPDATED_BY'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TGL' => 'Tgl',
            'TYPE' => 'Type',
            'CHILD_ID' => 'Kategori',
            'SRC' => 'State',
            'SRC_DSC_REF' => 'Ref.Kode',
            'SRC_DSC' => 'Dari',
            'SRC_DSC_QTY' => 'JUMLAH',
            'SRC_DSC_PRICE' => 'Harga',
            'SRC_DSC_DETAIL' => 'Ket.Detail',
            'KETERANGAN' => 'Ket.lain',
            'STATUS' => 'Status',
            'CREATED_BY' => 'Created  By',
            'UPDATED_BY' => 'Updated  By',
            'CREATED_AT' => 'Created  At',
            'UPDATED_TIME' => 'Updated  Time',
        ];
    }
}
