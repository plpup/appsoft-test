<?php

use yii\views\_form;

$this->title = 'Создать пост';
?>

<?= $this->render('_form', [
    'model' => $post,
]) ?>