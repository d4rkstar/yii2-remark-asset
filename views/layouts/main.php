<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$asset = new d4rkstar\web\RemarkAsset();
$asset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl($asset->sourcePath);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link rel="apple-touch-icon" href="<?= $directoryAsset ?>/global/assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="<?= $directoryAsset ?>/global/assets/images/favicon.ico">
        <?php $this->head() ?>


        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        <!--[if lt IE 9]>
        <script src="<?= $directoryAsset ?>/global/vendor/html5shiv/html5shiv.min.js"></script>
        <![endif]-->
        <!--[if lt IE 10]>
        <script src="<?= $directoryAsset ?>/global/vendor/media-match/media.match.min.js"></script>
        <script src="<?= $directoryAsset ?>/global/vendor/respond/respond.min.js"></script>
        <![endif]-->
        <!-- Scripts -->
        <script src="<?= $directoryAsset ?>/global/vendor/modernizr/modernizr.js"></script>
        <script src="<?= $directoryAsset ?>/global/vendor/breakpoints/breakpoints.js"></script>
        <script>
            Breakpoints();
        </script>
    </head>
    <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php $this->beginBody() ?>

    <?= $this->render('parts/main-header.php', ['directoryAsset' => $directoryAsset]) ?>

    <?= $this->render('parts/main-left.php', ['directoryAsset' => $directoryAsset]) ?>

    <?= $this->render('parts/main-content.php', ['content' => $content, 'directoryAsset' => $directoryAsset]) ?>

    <?= $this->render('parts/main-footer.php', ['directoryAsset' => $directoryAsset]) ?>

    <?php $this->endBody() ?>
    <script>
        (function(document, window, $) {
            'use strict';
            var Site = window.Site;
            $(document).ready(function() {
                Site.run();
            });
        })(document, window, jQuery);
    </script>
    </body>
</html>
<?php $this->endPage() ?>