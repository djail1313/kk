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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/animate.delay.css",
"css/animate.min.css",
"css/bootstrap.css",
"css/bootstrap.min.css",
"css/bootstrap-editable.css",
"css/bootstrap-override.css",
"css/bootstrap-override-rtl.css",
"css/bootstrap-rtl.min.css",
"css/bootstrap-timepicker.min.css",
"css/bootstrap-wysihtml5.css",
"css/colorpicker.css",
"css/dropzone.css",
"css/font.helvetica-neue.css",
"css/font.roboto.css",
"css/font-awesome.css",
"css/font-awesome.min.css",
"css/fullcalendar.css",
"css/index.html",
"css/jquery.datatables.css",
"css/jquery.gritter.css",
"css/jquery.tagsinput.css",
"css/jquery-jvectormap-1.2.2.css",
"css/jquery-ui-1.10.3.css",
"css/lato.css",
"css/morris.css",
"css/prettyPhoto.css",
"css/roboto.css",
"css/select2.css",
"css/site.css",
"css/style.bluenav.css",
"css/style.darkknight.css",
"css/style.default.css",
"css/style.default-rtl.css",
"css/style.dodgerblue.css",
"css/style.greyjoy.css",
"css/style.inverse.css",
"css/style.katniss.css",
"css/toggles.css",
"css/weather-icons.min.css",
"css/wysiwyg-color.css"
    ];
    public $js = [
        "js/angular.min.js",
"js/bootstrap.js",
"js/bootstrap.min.js",
"js/bootstrap-datetimepicker.min.js",
"js/bootstrap-editable.min.js",
"js/bootstrap-timepicker.min.js",
"js/bootstrap-wizard.min.js",
"js/bootstrap-wysihtml5.js",
"js/charts.js",
"js/chosen.jquery.min.js",
"js/colorpicker.js",
"js/custom.js",
"js/dashboard.js",
"js/dropzone.min.js",
"js/fullcalendar.min.js",
"js/gmaps.js",
"js/holder.js",
"js/html5shiv.js",
"js/index.html",
"js/jquery.autogrow-textarea.js",
"js/jquery.cookies.js",
"js/jquery.datatables.min.js",
"js/jquery.gritter.min.js",
"js/jquery.maskedinput.min.js",
"js/jquery.mousewheel.js",
"js/jquery.prettyPhoto.js",
"js/jquery.sparkline.min.js",
"js/jquery.tagsinput.min.js",
"js/jquery.ui.touch-punch.min.js",
"js/jquery.validate.min.js",
"js/jquery-1.11.1.min.js",
"js/jquery-jvectormap-1.2.2.min.js",
"js/jquery-jvectormap-us-aea-en.js",
"js/jquery-jvectormap-world-mill-en.js",
"js/jquery-migrate-1.2.1.min.js",
"js/jquery-ui-1.10.3.min.js",
"js/masonry.pkgd.min.js",
"js/modernizr.min.js",
"js/moment.js",
"js/morris.min.js",
"js/raphael-2.1.0.min.js",
"js/respond.min.js",
"js/retina.min.js",
"js/select2.min.js",
"js/toggles.min.js",
"js/wysihtml5-0.3.0.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
