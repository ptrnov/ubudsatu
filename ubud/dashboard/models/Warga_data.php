<?php

namespace ubud\dashboard\models;

use Yii;

use ubud\dashboard\models\Warga_status;
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
	
	public $rw_disply;
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
            [['SENSUS_FIX','ID','STATUS','RUMAH_NO', 'RUMAH_STT', 'JUMLAH_ANGOTA'], 'integer'],
            [['RW','RT'], 'string', 'max' => 10],
            [['KK_NM'], 'string', 'max' => 100],
            [['RUMAH_BLOCK'], 'string', 'max' => 50],
            [['TLP_RUMAH', 'TLP_HP'], 'string', 'max' => 20],
            [['TLP_KANTOR'], 'string', 'max' => 30],
			[['PHOTO','CREATED_BY','UPDATED_BY','CREATED_AT','UPDATED_TIME'], 'safe']
        ];
    }

	public function getSttrumah(){
		return $this->hasOne(Warga_status::className(), ['ID' => 'RUMAH_STT']);
	}
	
	public function getSttnm(){
		return $this->sttrumah->RUMAH_STATUS;
	}
	
	
	
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'RW' => 'Rukun.Warga',
            'RT' => 'Rukun.Tetangga',
            'KK_NM' => 'Nama.KK',
            'RUMAH_BLOCK' => 'Block',
            'RUMAH_NO' => 'No.Rumah',
            'RUMAH_STT' => 'Status.Rumah',
            'JUMLAH_ANGOTA' => 'Anggota.Keluarga',
            'TLP_RUMAH' => 'Tlp.Rumah',
            'TLP_KANTOR' => 'Tlp.Kantor',
            'TLP_HP' => 'Handphone',
        ];
    }
}
