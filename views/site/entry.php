<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <!-- 入力フォームのテキスト -->
    <?= $form->field($model, 'name')->label("お名前") ?>
    <?= $form->field($model, 'email')->label("メールアドレス") ?>

    <!-- 入力フォームのボタン -->
    <div class="form-group">
        <?= Html::submitButton('送信', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>