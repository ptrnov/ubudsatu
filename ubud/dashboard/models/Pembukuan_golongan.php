<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "pembukuan_golongan".
 *
 * @property string $GOL_ID
 * @property string $GOL_NM
 * @property string $GOL_KET
 * @property string $PRICE
 * @property string $SRC
 * @property integer $STATUS
 * @property string $CREATED_BY
 * @property string $UPDATED_BY
 * @property string $CREATED_AT
 * @property string $UPDATED_TIME
 */
class Pembukuan_golongan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pembukuan_golongan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GOL_KET'], 'string'],
            [['PRICE'], 'number'],
            [['STATUS'], 'integer'],
            [['CREATED_AT', 'UPDATED_TIME'], 'safe'],
            [['GOL_NM', 'CREATED_BY', 'UPDATED_BY'], 'string', 'max' => 100],
            [['SRC'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GOL_ID' => 'Gol  ID',
            'GOL_NM' => 'Gol  Nm',
            'GOL_KET' => 'Gol  Ket',
            'PRICE' => 'Price',
            'SRC' => 'RW/RT1234',
            'STATUS' => 'Status',
            'CREATED_BY' => 'Created  By',
            'UPDATED_BY' => 'Updated  By',
            'CREATED_AT' => 'Created  At',
            'UPDATED_TIME' => 'Updated  Time',
        ];
    }
}
