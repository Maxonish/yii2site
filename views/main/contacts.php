
<?php 
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
?>




<?php $this->title="Contacts";?>


<?php if(Yii::$app->session->hasFlash('success')):?>
    <div class="row" style="margin-top: 80px; margin-bottom: 220px;">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1" style="text-align: center">
        <span style="color: green; font-size: 16px; font-weight: bold;">Message sent successfully</span>
    </div>
</div>
<?php else:?>
<div class="row ">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 contacts">
        contact us
    </div>
</div>
<div class="row hidden-xs" style="margin-bottom: 100px;">
    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <?php $form = ActiveForm::begin([]); ?>
            <div class="form-group"  id="name" style="margin-bottom: 20px;" >
            <?= $form->field($model, 'name',['template'=>'{input}{error}'])->textInput(['autofocus' => true, 'placeholder'=>'Name', 'style'=>'width: 70%']) ?>
            </div>
            <div class="form-group" id="message">
                 <?= $form->field($model, 'message',['template'=>'{input}{error}'])->textarea(['placeholder'=>'Message', 'style'=>'max-width: 100%; height: 100px; resize:none']) ?>
            </div>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-4 col-md-4 col-sm-4">{image}</div><div class="col-lg-6 col-md-6 col-sm-6">{input}</div></div>',
                    ])->label('Captcha') ?>
             <?= Html::submitButton('submit', ['class' => 'btn btn-warning',]) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<div class="row hidden-lg hidden-md hidden-sm" style="margin-bottom: 100px;">
    <div class="col-xs-8 col-xs-offset-2">
       <?php $form = ActiveForm::begin([]); ?>
            <div class="form-group"  style="margin-bottom: 20px;" >
                <?= $form->field($model, 'name',['template'=>'{input}{error}'])->textInput(['autofocus' => true, 'placeholder'=>'Name', 'style'=>'width: 70%']) ?>
            </div>
            <div class="form-group">
                 <?= $form->field($model, 'message',['template'=>'{input}{error}'])->textarea(['placeholder'=>'Message', 'style'=>'max-width: 100%; height: 100px; resize:none']) ?>
            </div>
            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-xs-5 ">{image}</div><div class="col-xs-6 ">{input}</div></div>',
                    ])->label('Captcha') ?>
            <?= Html::submitButton('submit', ['class' => 'btn btn-warning',]) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<?php endif;?>

