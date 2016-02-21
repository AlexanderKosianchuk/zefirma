<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BowerAsset extends AppAsset
{
    public $sourcePath = '@bower';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    public $js = [
    	'jquery.mousewheel/jquery.mousewheel' . (!YII_DEBUG ? '.min' : '') . '.js'
    ];
}