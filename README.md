Remark Asset Bundle
=====================

*Backend UI for Yii2 Framework, based on [Remark](http://getbootstrapadmin.com/remark/)*

This package contains an [Asset Bundle for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html) 
which registers the required JS and CSS files for the Remark theme.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install Remark Asset run:

```
php composer.phar require d4rkstar/yii2-remark-asset "2.0.x-dev"
```



Quick Start
-----------

Once the extension is installed, you can have a **preview** by reconfiguring the path mappings of the view component:

For Yii 2 [Application Template](https://github.com/yiisoft/yii2-app-advanced) or [Basic Application Template](https://github.com/yiisoft/yii2-app-basic)

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/d4rkstar/yii2-remark-asset/views'
             ],
         ],
    ],
],
```

This asset bundle provides sample files for layout and view (see folder `examples/`), they are **not meant to be customized directly in the `vendor/` folder**.

Therefore it is recommended to **copy the views into your application** and adjust them to your needs.