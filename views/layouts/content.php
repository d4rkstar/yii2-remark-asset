<!-- Page -->
<?php
use yii\widgets\Breadcrumbs;
?>
<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title"><?php
            if ($this->title !== null) {
                echo \yii\helpers\Html::encode($this->title);
            } else {
                echo \yii\helpers\Inflector::camel2words(
                    \yii\helpers\Inflector::id2camel($this->context->module->id)
                );
                echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
            } ?></h1>
        <?php
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        )
        ?>
    </div>
    <div class="page-content container-fluid">

        <?= $content; ?>
    </div>
</div>
<!-- End Page -->