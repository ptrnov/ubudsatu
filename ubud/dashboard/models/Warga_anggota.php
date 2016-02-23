<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "warga_anggota".
 *
 * @property string $ID
 * @property string $NO_WARGA
 */
class Warga_anggota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warga_anggota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NO_WARGA'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NO_WARGA' => 'No  Warga',
        ];
    }
}
