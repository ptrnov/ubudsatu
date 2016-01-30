<?php

namespace ubud\sistem\models;
use ubud\sistem\models\Userprofile;
use kartik\builder\Form;
use Yii;

class Userlogin extends \yii\db\ActiveRecord
{
	
	 public static function getDb()
	{
		/* Author -ptr.nov- : HRD | Dashboard I */
		return \Yii::$app->db;  
	}
	
    public static function tableName()
    {
        return '{{user}}';
    }

    public function rules()
    {
        return [
            [['id','username','auth_key','password_hash'], 'required'],
			[['username','auth_key','password_hash','password_reset_token','EMP_ID','POSITION_SITE'], 'string'],
            [['email','avatar','avatarImage'], 'string'],
			[['id','status','created_at','updated_at','POSITION_LOGIN'],'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'User.ID'),
            'username' => Yii::t('app', 'User Name'),
			'auth_key' => Yii::t('app', 'Access Token'),
			'password_hash' => Yii::t('app', 'Password Hash'),
			'password_reset_token' => Yii::t('app', 'Reset Password'),
			'email' => Yii::t('app', 'Email'),
			'EMP_ID' => Yii::t('app', 'Employe.ID'),
			'created_at' => Yii::t('app', 'Created'),
			'updated_at' => Yii::t('app', 'Update'),
			'avatar' => Yii::t('app', 'Avatar'),
			'avatarImage' => Yii::t('app', 'Avatar Image'),
        ];
    } 
	/* public function getEmp()
	{
		return $this->hasOne(Employe::className(), ['EMP_ID' => 'EMP_ID']);
	} */
	
	public function getUserprofile()
	{
		return $this->hasOne(Userprofile::className(), ['ID' => 'id']);
	}
	public function getMdlpermission()
	{
		return $this->hasMany(Mdlpermission::className(), ['USER_ID' => 'id']);
	}
	
     
}


