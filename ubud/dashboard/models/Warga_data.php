<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "warga_data".
 *
 * @property string $ID
 * @property string $RT
 * @property string $KK_NM
 * @property string $RUMAH_BLOCK
 * @property string $RUMAH_NO
 * @property integer $RUMAH_STT
 * @property integer $JUMLAH_ANGOTA
 * @property string $TLP_RUMAH
 * @property string $TLP_KANTOR
 * @property string $TLP_HP
 */
class Warga_data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warga_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RUMAH_NO', 'RUMAH_STT', 'JUMLAH_ANGOTA'], 'integer'],
            [['RT'], 'string', 'max' => 10],
            [['KK_NM'], 'string', 'max' => 100],
            [['RUMAH_BLOCK'], 'string', 'max' => 50],
            [['TLP_RUMAH', 'TLP_HP'], 'string', 'max' => 20],
            [['TLP_KANTOR'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'RT' => 'Rt',
            'KK_NM' => 'Kk  Nm',
            'RUMAH_BLOCK' => 'Rumah  Block',
            'RUMAH_NO' => 'Rumah  No',
            'RUMAH_STT' => 'Rumah  Stt',
            'JUMLAH_ANGOTA' => 'Jumlah  Angota',
            'TLP_RUMAH' => 'Tlp  Rumah',
            'TLP_KANTOR' => 'Tlp  Kantor',
            'TLP_HP' => 'Tlp  Hp',
        ];
    }
}
