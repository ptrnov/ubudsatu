<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "warga_block".
 *
 * @property string $ID
 * @property string $RUMAH_BLOCK
 */
class Warga_block extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warga_block';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RUMAH_BLOCK'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'RUMAH_BLOCK' => 'Rumah  Block',
        ];
    }
}
