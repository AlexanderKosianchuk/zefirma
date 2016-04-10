<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $id
 * @property string $ssesid
 * @property string $created_dt
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ssesid'], 'required'],
            [['ssesid'], 'string'],
            [['created_dt'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ssesid' => 'Ssesid',
            'created_dt' => 'Created Dt',
        ];
    }
    
    public static function checkAdminLogedIn() {
    	$ip = $_SERVER['REMOTE_ADDR'];
    	$browser = $_SERVER['HTTP_USER_AGENT'];
    	$sessionId = md5($ip . $browser);
    	
    	$model = Admin::findOne(['ssesid' => $sessionId]);

    	if ($model === null) {
    		return false;
    	} 
    	
    	if(strtotime($model->created_dt) < (time() - 60*60*24*7)) {
    		return false;
    	}
    	
		return true;
    }
    
    public static function login() {
    	$ip = $_SERVER['REMOTE_ADDR'];
    	$browser = $_SERVER['HTTP_USER_AGENT'];
    	$sessionId = md5($ip . $browser);
    	 
    	$model = new Admin();
    	
    	$model->attributes = [
    			'ssesid' => $sessionId
    	];
    	return $model->save();
    }
    
    public static function logout() {
    	$ip = $_SERVER['REMOTE_ADDR'];
    	$browser = $_SERVER['HTTP_USER_AGENT'];
    	$sessionId = md5($ip . $browser);
    
    	return Admin::deleteAll(['ssesid' => $sessionId]);
    }
}
