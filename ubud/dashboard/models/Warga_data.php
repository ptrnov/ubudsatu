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
	public $noInt;
	public $noAlfa;
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
            [['SENSUS_FIX','ID','STATUS', 'RUMAH_STT','JUMLAH_ANGOTA','noInt'], 'integer'],
            [['RW','RT','RUMAH_NO','noAlfa'], 'string', 'max' => 10],
            [['KK_NM'], 'string', 'max' => 100],
            [['RUMAH_BLOCK'], 'string'],
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
	
	
	/*JUMLAH CDATA KK */
	//RT
	public function getRt1_Cntkk(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=1')->count();	 
		 return $cnt;
	}	
	public function getRt2_Cntkk(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=2')->count();	 
		 return $cnt;
	}	
	public function getRt3_Cntkk(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=3')->count();	 
		 return $cnt;
	}	
	public function getRt4_Cntkk(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=4')->count();	 
		 return $cnt;
	}
	//RW
	public function getRw_Cntkk(){
		 $cnt=$this->find()->where('STATUS<>3 AND RW=11')->count();	 
		 return $cnt;
	}
	
	/*JUMLAH STATUS RUMAH - MILIK */
	//RT
	public function getRt1_Cntrumah_milik(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=1 AND RUMAH_STT=1')->count();	 
		 return $cnt;
	}	
	public function getRt2_Cntrumah_milik(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=2 AND RUMAH_STT=1')->count();	 
		 return $cnt;
	}	
	public function getRt3_Cntrumah_milik(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=3 AND RUMAH_STT=1')->count();	 
		 return $cnt;
	}
	public function getRt4_Cntrumah_milik(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=4 AND RUMAH_STT=1')->count();	 
		 return $cnt;
	}
	//RW
	public function getRw_Cntrumah_milik(){
		 $cnt=$this->find()->where('STATUS<>3 AND RW=11 AND RUMAH_STT=1')->count();	 
		 return $cnt;
	}
	
	/*JUMLAH STATUS RUMAH - KONTRAK */
	//RT
	public function getRt1_Cntrumah_kontrak(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=1 AND RUMAH_STT=2')->count();	 
		 return $cnt;
	}	
	public function getRt2_Cntrumah_kontrak(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=2 AND RUMAH_STT=2')->count();	 
		 return $cnt;
	}	
	public function getRt3_Cntrumah_kontrak(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=3 AND RUMAH_STT=2')->count();	 
		 return $cnt;
	}
	public function getRt4_Cntrumah_kontrak(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=4 AND RUMAH_STT=2')->count();	 
		 return $cnt;
	}
	//RW
	public function getRw_Cntrumah_kontrak(){
		 $cnt=$this->find()->where('STATUS<>3 AND RW=11 AND RUMAH_STT=2')->count();	 
		 return $cnt;
	}
	
	/*JUMLAH STATUS RUMAH - KOSONG */
	//RT
	public function getRt1_Cntrumah_kosong(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=1 AND RUMAH_STT=3')->count();	 
		 return $cnt;
	}	
	public function getRt2_Cntrumah_kosong(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=2 AND RUMAH_STT=3')->count();	 
		 return $cnt;
	}	
	public function getRt3_Cntrumah_kosong(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=3 AND RUMAH_STT=3')->count();	 
		 return $cnt;
	}
	public function getRt4_Cntrumah_kosong(){
		 $cnt=$this->find()->where('STATUS<>3 AND RT=4 AND RUMAH_STT=3')->count();	 
		 return $cnt;
	}
	//RW
	public function getRw_Cntrumah_kosong(){
		 $cnt=$this->find()->where('STATUS<>3 AND RW=11 AND RUMAH_STT=3')->count();	 
		 return $cnt;
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
