<?php

namespace ubud\dashboard\models;

use Yii;

/**
 * This is the model class for table "pembukuan_child".
 *
 * @property string $CHILD_ID
 * @property integer $TYPE_ID
 * @property string $CHILD_NM
 * @property string $SRC
 */
class Pembukuan_child extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pembukuan_child';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TYPE_ID'], 'integer'],
            [['CHILD_NM'], 'string', 'max' => 100],
            [['SRC'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CHILD_ID' => 'Child  ID',
            'TYPE_ID' => 'Type  ID',
            'CHILD_NM' => 'Pemasukan
TYPE_ID=1
CHIld NM : SETORAN RT
Pengeluaran 
TYPE_ID=2
CHIld NM : GAJI SKURITY',
            'SRC' => 'RW/RT/1234',
        ];
    }
}
