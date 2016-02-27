<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "pembukuan_type".
 *
 * @property string $TYPE_ID
 * @property string $TYPE_NM
 */
class Pembukuan_type extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pembukuan_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TYPE_NM'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TYPE_ID' => 'Type  ID',
            'TYPE_NM' => 'Type  Nm',
        ];
    }
}
