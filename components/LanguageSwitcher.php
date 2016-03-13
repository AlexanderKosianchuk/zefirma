<?php
/*
author :: Pitt Phunsanit
website :: http://plusmagi.com
change language by get language=EN, language=TH,...
or select on this widget
*/
 
namespace app\components;
 
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Lang;
 
class LanguageSwitcher extends Widget
{
    public $languages = [
        'ru' => 'рус',
        'en' => 'eng'
    ];
 
    public function init()
    {
        if(php_sapi_name() === 'cli')
        {
            return true;
        }
        parent::init();
        
        if (session_status() == PHP_SESSION_NONE) {
        	session_start();
        }
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $sessionId = md5($ip . $browser);
        
        if (($model = Lang::findOne(['session_id' => $sessionId])) === null) {
        	$model = new Lang();
        }
        
        $languageNew = Yii::$app->request->get('language');

        if($languageNew)
        {
            if(isset($this->languages[$languageNew]))
            {
                Yii::$app->language = $languageNew;
                
                $model->attributes = [
		        	'session_id' => $sessionId,
		        	'lang' => $languageNew
		        ];
                $model->save();
            }
        }
        elseif(isset($model->lang))
        {
            Yii::$app->language = $model->lang;
        }
    }
 
    public function run(){
        $languages = $this->languages;
        $current = $languages[Yii::$app->language];
 
        $items = [];
        foreach($languages as $code => $language)
        {
            $temp = [];
            $temp['label'] = $language;
            $temp['url'] = Url::current(['language' => $code]);
            $temp['class'] = 'lang-menu-default';
            
            if($current == $language) {
            	$temp['class'] = 'lang-menu-active';
            }
            
            array_push($items, $temp);
        }
         
        $widgetStack = Html::beginTag("div", ['class' => 'language-menu']);
        foreach($items as $item) {
        	$widgetStack .= 
        	Html::a($item['label'], 
        		[$item['url']], 
        		['class'=>$item['class']]
        	);
        }
        $widgetStack .= Html::endTag("div");
        return $widgetStack;
    }
 
}