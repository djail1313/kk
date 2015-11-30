<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    // public $sourcePath = '@web';
    public $css = [
        'template-admin/css/style.default.css',
    ];
    public $js = [
        'template-admin/js/jquery-migrate-1.2.1.min.js',
        'template-admin/js/bootstrap.min.js',
        'template-admin/js/modernizr.min.js',
        'template-admin/js/jquery.sparkline.min.js',
        'template-admin/js/toggles.min.js',
        'template-admin/js/retina.min.js',
        'template-admin/js/jquery.cookies.js',
        'template-admin/js/custom.js',
    ];
}
