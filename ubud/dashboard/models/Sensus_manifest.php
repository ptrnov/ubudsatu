<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "sensus_manifest".
 *
 * @property string $ID
 * @property string $TGL
 * @property string $SRC
 * @property string $KK_ID
 * @property integer $STATUS_APPROVED
 * @property string $CREATED_BY
 * @property string $UPDATED_BY
 * @property string $CREATED_AT
 * @property string $UPDATED_TIME
 */
class Sensus_manifest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sensus_manifest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'STATUS_APPROVED'], 'integer'],
            [['TGL', 'CREATED_AT', 'UPDATED_TIME'], 'safe'],
            [['SRC', 'KK_ID'], 'string', 'max' => 10],
            [['CREATED_BY', 'UPDATED_BY'], 'string', 'max' => 100]
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
            'SRC' => 'DATA  RT',
            'KK_ID' => 'KK',
            'STATUS_APPROVED' => 'STATUS_APPROVED',
            'CREATED_BY' => 'Created  By',
            'UPDATED_BY' => 'Updated  By',
            'CREATED_AT' => 'Created  At',
            'UPDATED_TIME' => 'Updated  Time',
        ];
    }
}
