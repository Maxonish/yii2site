<?php 


use yii\helpers\Html;
use yii\widgets\LinkPager;

?> 





<div class="row">
	<?php foreach ($images as $image):?>
 <div class="col-lg-4 col-xs-12 col-sm-6 col-md-6 margin2" >
	<figure class="imghvr-slide-right hidden-xs">
		<img src="<?=Html::encode("{$image->src}")?>" class="img-responsive" alt="Cat" >
    <figcaption style="opacity: 0.8;">
      <div class="galery">Beautiful cats</div>
    </figcaption>
		<a href="#"></a>
	</figure>
	
	<figure class="imghvr-slide-right hidden-sm hidden-md hidden-lg">
		<img src="<?=Html::encode("{$image->src}")?>" class="img-responsive" alt="Cat" >
    <figcaption style="opacity: 0.8;">
      <div class="galery" style="font-size: 30px;">Beautiful cats</div>
    </figcaption>
		<a href="#"></a>
	</figure>
	    
	</div>
<?php endforeach;?>
</div>


<div class="row">
	<div class="col-lg-2 col-xs-6 col-sm-4 col-md-3 col-lg-offset-5 col-sm-offset-4 col-md-offset-5 col-xs-offset-4">
		<?= LinkPager::widget(['pagination' => $pagination]) ?>
	</div>
</div>








<!--<div class="row hidden-xs">
     <div class="col-md-4 col-md-offset-5 col-sm-4 col-lg-3  col-sm-offset-4 col-lg-offset-5 pag"><div class="margin3"  ng-repeat="num in nums" ng-click="Query($event)">{{num}}</div></div>
</div>

<div class="row hidden-lg hidden-md hidden-sm">
    <div class="col-xs-10 col-xs-offset-1 pag" style="padding-bottom:80px;">
		<button type="button" class="btn btn-primary " id="buttonpag" ng-click="Query3();">Загрузить еще</button>
	</div>
	
</div>-->

