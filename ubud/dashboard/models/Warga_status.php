<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "warga_status".
 *
 * @property string $ID
 * @property string $RUMAH_STATUS
 */
class Warga_status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warga_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RUMAH_STATUS'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'RUMAH_STATUS' => 'Rumah  Status',
        ];
    }
}
