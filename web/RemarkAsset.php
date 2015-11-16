<?php

namespace d4rkstar\web;

use yii\web\AssetBundle;

class RemarkAsset extends AssetBundle
{

    public $sourcePath = '@webroot/remark';

    public $layout = 'global';

    public $skin = '';
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
        if ($this->skin!="") {
            $this->css[] = "base/assets/skins/".$this->skin.".css";
        }
    }
}