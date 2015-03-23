<?php
use yii\helpers\Html;
use bizley\podium\assets\PodiumAsset;

PodiumAsset::register($this);
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="container">
        <?= $this->render('/elements/installation/_navbar') ?>
        <?= $this->render('/elements/main/_breadcrumbs') ?>
        <?= $content ?>
    </div>
    <?= $this->render('/elements/main/_footer') ?>
<?php $this->endBody() ?>
    
</body>
</html>
<?php $this->endPage() ?>