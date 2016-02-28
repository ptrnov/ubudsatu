<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "warga_anggota_status".
 *
 * @property string $ID
 * @property string $ANGGOTA_STATUS
 */
class Warga_anggota_status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warga_anggota_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ANGGOTA_STATUS'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ANGGOTA_STATUS' => 'Anggota  Status',
        ];
    }
}
