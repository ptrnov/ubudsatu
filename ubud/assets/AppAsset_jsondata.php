<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace ubud\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset_jsondata extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [  
		//'css/site.css',
   ];
    public $js = [
        'angular/app/jsondata.js',           
    ];
    public $depends = [
		//'yii\bootstrap\BootstrapAsset',
        'ubud\assets\AngularAsset',
    ];
}
	