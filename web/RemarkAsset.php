<?php

namespace d4rkstar\web;

use yii;
use yii\web\AssetBundle;

class RemarkAsset extends AssetBundle
{

    public $sourcePath = '@webroot/remark';

    public $layout = 'global';

    public $skin = '';

    public $addons = [];

    public $css = [
        'global/css/bootstrap-extend.min.css',
        'base/assets/css/site.min.css',
        'global/vendor/animsition/animsition.min.css',
        'global/vendor/asscrollable/asScrollable.min.css',
        'global/vendor/switchery/switchery.min.css',
        'global/vendor/intro-js/introjs.min.css',
        'global/vendor/slidepanel/slidePanel.min.css',
        'global/vendor/flag-icon-css/flag-icon.min.css',
        'global/fonts/web-icons/web-icons.min.css',
        'global/fonts/brand-icons/brand-icons.min.css',
        'global/fonts/font-awesome/font-awesome.min.css',
    ];
    public $js = [
        'global/vendor/animsition/animsition.min.js',
        'global/vendor/asscroll/jquery-asScroll.js',
        'global/vendor/mousewheel/jquery.mousewheel.js',
        'global/vendor/asscrollable/jquery.asScrollable.all.min.js',
        'global/vendor/ashoverscroll/jquery-asHoverScroll.min.js',
        // Plugins
        'global/vendor/switchery/switchery.min.js',
        'global/vendor/intro-js/intro.min.js',
        'global/vendor/screenfull/screenfull.js',
        'global/vendor/slidepanel/jquery-slidePanel.min.js',
        'global/vendor/jquery-placeholder/jquery.placeholder.min.js',
        // Scripts
        'global/js/core.min.js',
        'base/assets/js/site.min.js',
        'base/assets/js/sections/menu.min.js',
        'base/assets/js/sections/menubar.min.js',
        'base/assets/js/sections/gridmenu.min.js',
        'base/assets/js/sections/sidebar.min.js',
        'global/js/configs/config-colors.min.js',
        'base/assets/js/configs/config-tour.min.js',
        'global/js/components/asscrollable.min.js',
        'global/js/components/animsition.min.js',
        'global/js/components/slidepanel.min.js',

    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];



    /**
     * @inheritdoc
     */
    public function init()
    {
        
        parent::init();

        $controller = Yii::$app->controller->id .'/'. Yii::$app->controller->action->id;
        if (array_key_exists($controller, $this->addons)) {
            $additional = $this->addons[$controller];
            if (array_key_exists('js',$additional) && is_array($additional['js'])) {
                $this->js = array_merge($this->js, $additional['js']);
            }
            if (array_key_exists('css',$additional) && is_array($additional['css'])) {
                $this->css = array_merge($this->css, $additional['css']);
            }
        }

        if ($this->skin!="") {
            $this->css[] = "base/assets/skins/".$this->skin.".css";
        }

    }
}