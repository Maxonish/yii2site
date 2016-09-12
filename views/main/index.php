<?php $this->title='Main';?>
<div ng-controller="MainCtrl">
<div class="row">
	<div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1 hidden-xs">
		<img ng-src="{{url}}" class="img-responsive "  id="slide" alt="Responsive image">
	</div>
</div>
<!-- slider for xs-->

<div class="row hidden-lg hidden-md hidden-sm" style="margin-top: 20px;">
	<div class="col-xs-10 col-xs-offset-1">
		<img ng-src="{{url}}" class="img-responsive "  id="slide" alt="Responsive image">
	</div>
</div>


<div class="row hidden-xs">
	<div class="col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5 col-sm-2 col-sm-offset-5 col-xs-4 col-xs-offset-4 margin2">
		<div class="circle" ng-click="Slider(0)"><div class="border" id="0" style="display:block;"></div></div>
		<div class="circle" ng-click="Slider(1)"><div class="border" id="1"></div></div>
		<div class="circle" ng-click="Slider(2)"><div class="border" id="2"></div></div>
	</div>
</div>
<div class="row">
	<div class="col-md-4 col-md-offset-4 margin4">
		<div class="greeting">
			<p class="greeting_p"><span>Welcome</span> to our website!</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2" style="margin-top: 10px; margin-bottom: 40px;">
		<div class="greeting">
			<p>Beciegast nveritiv muyagsas itaesaert asety kertya asplicabrde ertyasnemo eniptaiades uytrsas leyrterte ertas bytrasa miasas girytarsas. Baslernatur autertas bytraodit aut <span class="highlighted">ani dolores</span> eo qui ratione.</p>
		</div>
	</div>
</div>
 <div class="row hidden-xs hidden-md hidden-lg">
		<div class="col-sm-4">
			<img src="/img/page1img1.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Adopting a Cat</h2>
				<p class="small_text">Beciegast nveriti vitaesaert asetyertya aset aplicabrde ertyasnemniptaiades. volernatur aut oditaut. Onsuntur magni dolores eo qui uptate msequi nesciunt, neque porrouisquam estqui dolorem ipsum quia dolor. </p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
		<div class="col-sm-4">
			<img src="/img/page1img2.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Exotic Cats</h2>
				<p class="small_text">Onsuntur magni dolores eo quatione uptate msequi nesciunt, neque porro sisquam estqui dolorem ipsumia dolor. Daitamet, consectetur, adipisci velite sed quia non numquam eius modise tempora incidun.</p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
		<div class="col-sm-4 " >
			<img src="/img/page1img3.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Cat Grooming</h2>
				<p class="small_text">Citaesaert asetyertya aset aplicrde ertyasnemniptaiades. volernatur auter oditaut. Onsuntur magni dolores saui ratione uptate msequi nesciunt, neque porrouisquam estqui dolorem ipsum, quia dolorer ntreterase.</p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
	</div>	
	
	<!-- For lg display-->
	
	<div class="row hidden-xs hidden-sm hidden-md">
		<div class="col-lg-2 " style="margin-left:18%">
			<img src="/img/page1img1.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Adopting a Cat</h2>
				<p class="small_text">Beciegast nveriti vitaesaert asetyertya aset aplicabrde ertyasnemniptaiades. volernatur aut oditaut. Onsuntur magni dolores eo qui uptate msequi nesciunt, neque porrouisquam estqui dolorem ipsum quia dolor. </p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
		<div class=" col-lg-2 " style="margin-left:7%">
			<img src="/img/page1img2.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Exotic Cats</h2>
				<p class="small_text">Onsuntur magni dolores eo quatione uptate msequi nesciunt, neque porro sisquam estqui dolorem ipsumia dolor. Daitamet, consectetur, adipisci velite sed quia non numquam eius modise tempora incidun.</p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
		<div class="col-lg-2" style="margin-left:7%">
			<img src="/img/page1img3.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Cat Grooming</h2>
				<p class="small_text">Citaesaert asetyertya aset aplicrde ertyasnemniptaiades. volernatur auter oditaut. Onsuntur magni dolores saui ratione uptate msequi nesciunt, neque porrouisquam estqui dolorem ipsum, quia dolorer ntreterase.</p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
	</div>	
	
	<!-- For md display-->
	
	<div class="row hidden-xs hidden-sm hidden-lg">
		<div class="col-md-3 " style="margin-left:8%">
			<img src="/img/page1img1.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Adopting a Cat</h2>
				<p class="small_text">Beciegast nveriti vitaesaert asetyertya aset aplicabrde ertyasnemniptaiades. volernatur aut oditaut. Onsuntur magni dolores eo qui uptate msequi nesciunt, neque porrouisquam estqui dolorem ipsum quia dolor. </p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
		<div class=" col-md-3 " style="margin-left:5%">
			<img src="/img/page1img2.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Exotic Cats</h2>
				<p class="small_text">Onsuntur magni dolores eo quatione uptate msequi nesciunt, neque porro sisquam estqui dolorem ipsumia dolor. Daitamet, consectetur, adipisci velite sed quia non numquam eius modise tempora incidun.</p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
		<div class="col-md-3" style="margin-left:5%">
			<img src="/img/page1img3.jpg" class="img-responsive" alt="cat">
			<div class="caption">
				<h2 class="big_text">Cat Grooming</h2>
				<p class="small_text">Citaesaert asetyertya aset aplicrde ertyasnemniptaiades. volernatur auter oditaut. Onsuntur magni dolores saui ratione uptate msequi nesciunt, neque porrouisquam estqui dolorem ipsum, quia dolorer ntreterase.</p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
	</div>	
	
	
	<!-- For xs display-->
	
     <div class="row hidden-sm hidden-md hidden-lg" style="margin-top: 20px;">
		<div class="col-xs-10 col-xs-offset-1">
				<img src="/img/page1img1xs.jpg" class="img-responsive" style="margin: auto;" alt="cat">
			<div class="caption">
				<h2 class="big_text" style="padding-top: 0px;">Adopting a Cat</h2>
				<p class="small_text" style="text-align: justify;">Beciegast nveriti vitaesaert asetyertya aset aplicabrde ertyasnemniptaiades. volernatur aut oditaut. Onsuntur magni dolores eo qui uptate msequi nesciunt, neque porrouisquam estqui dolorem ipsum quia dolor. </p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
	</div>
	<div class="row hidden-sm hidden-md hidden-lg" style="margin-top: 20px;">
		<div class="col-xs-10 col-xs-offset-1"">
			<img src="/img/page1img2xs.jpg" class="img-responsive" style="margin: auto;" alt="cat">
			<div class="caption">
				<h2 class="big_text" style="padding-top: 0px;">Exotic Cats</h2>
				<p class="small_text" style="text-align: justify;">Onsuntur magni dolores eo quatione uptate msequi nesciunt, neque porro sisquam estqui dolorem ipsumia dolor. Daitamet, consectetur, adipisci velite sed quia non numquam eius modise tempora incidun.</p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
	</div>
	<div class="row hidden-sm hidden-md hidden-lg" style="margin-top: 20px;">
		<div class="col-xs-10 col-xs-offset-1"">
			<img src="/img/page1img3xs.jpg" class="img-responsive" style="margin: auto;" alt="cat">
			<div class="caption">
				<h2 class="big_text" style="padding-top: 0px;" >Cat Grooming</h2>
				<p class="small_text" style="text-align: justify;">Citaesaert asetyertya aset aplicrde ertyasnemniptaiades. volernatur auter oditaut. Onsuntur magni dolores saui ratione uptate msequi nesciunt, neque porrouisquam estqui dolorem ipsum, quia dolorer ntreterase.</p>
				<p><a class="link" href="#"></a></p>
			</div>
		</div>
	</div>