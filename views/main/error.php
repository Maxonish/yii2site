<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="row">
	<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 error404 hidden-xs">
		<div class="error_message">
			<h3><?= nl2br(Html::encode($message)) ?></h3>
		</div>
	</div>
	<div class="col-xs-12 hidden-sm hidden-lg hidden-md">
		<div class="error_message_mobile">
			<h2><?= nl2br(Html::encode($message)) ?></h2>
		</div>
	</div>
</div>

