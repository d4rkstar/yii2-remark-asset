<?php

namespace d4rkstar\web;

use yii\web\AssetBundle;

class RemarkAsset extends AssetBundle
{

    public $sourcePath = '@vendor/d4rkstar/yii2-remark-asset/vendor/remark';

    public $layout = 'global';

    public $skin = '';
    public $css = [
        'global/css/bootstrap-extend.min.css',
        'base/assets/css/site.min.css',
        'global/vendor/animsition/animsition.css',
        'global/vendor/asscrollable/asScrollable.css',
        'global/vendor/switchery/switchery.css',
        'global/vendor/intro-js/introjs.css',
        'global/vendor/slidepanel/slidePanel.css',
        'global/vendor/flag-icon-css/flag-icon.css',
        'global/fonts/web-icons/web-icons.min.css',
        'global/fonts/brand-icons/brand-icons.min.css',
    ];
    public $js = [
        'global/vendor/animsition/animsition.js',
        'global/vendor/asscroll/jquery-asScroll.js',
        'global/vendor/mousewheel/jquery.mousewheel.js',
        'global/vendor/asscrollable/jquery.asScrollable.all.js',
        'global/vendor/ashoverscroll/jquery-asHoverScroll.js',
        // Plugins
        'global/vendor/switchery/switchery.min.js',
        'global/vendor/intro-js/intro.js',
        'global/vendor/screenfull/screenfull.js',
        'global/vendor/slidepanel/jquery-slidePanel.js',

        // Scripts
        'global/js/core.js',
        'base/assets/js/site.js',
        'base/assets/js/sections/menu.js',
        'base/assets/js/sections/menubar.js',
        'base/assets/js/sections/gridmenu.js',
        'base/assets/js/sections/sidebar.js',
        'global/js/configs/config-colors.js',
        'base/assets/js/configs/config-tour.js',
        'global/js/components/asscrollable.js',
        'global/js/components/animsition.js',
        'global/js/components/slidepanel.js',
        'global/js/components/switchery.js',
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