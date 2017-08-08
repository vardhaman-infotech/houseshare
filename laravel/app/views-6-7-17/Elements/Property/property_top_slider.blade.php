<div class="carousel slide article-slide" id="article-photo-carousel">
	 
   <div class="carousel-inner cont-slider">
   
		<div class="item active">
			{{HTML::image('img/1_big.jpg','',array('class'=>'img-responsive'))}}
		</div>
		
		<div class="item">
			{{HTML::image('img/2_big.jpg','',array('class'=>'img-responsive'))}}
		</div>
		
		<div class="item">
			{{HTML::image('img/3_big.jpg','',array('class'=>'img-responsive'))}}
		</div>
		
		<div class="item">
			{{HTML::image('img/4_big.jpg','',array('class'=>'img-responsive'))}}
		</div> 
		
	</div>
	 
    <ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#article-photo-carousel">
			{{HTML::image('img/1.jpg','',array())}}
		</li>
	  
		<li data-slide-to="1" data-target="#article-photo-carousel">
			{{HTML::image('img/2.jpg','',array())}}
		</li>
		
		<li data-slide-to="2" data-target="#article-photo-carousel">
			{{HTML::image('img/3.jpg','',array())}}
		</li>
		
		<li class="" data-slide-to="3" data-target="#article-photo-carousel">
			{{HTML::image('img/4.jpg','',array())}}
		</li> 
   </ol>
   
</div>