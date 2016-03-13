<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lang".
 *
 * @property integer $id
 * @property string $session_id
 * @property string $lang
 */
class Lang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lang'], 'required'],
            [['session_id'], 'string', 'max' => 50],
            [['lang'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'session_id' => 'Session ID',
            'lang' => 'Lang',
        ];
    }
}
