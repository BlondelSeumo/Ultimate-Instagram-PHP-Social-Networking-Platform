<div class="theTopMenuProfile">
  <div class="theTopMenuWrapper">
      <!---->
      <div class="swiper-container">
        <span class="swiper-wrapper"> 
          <?php 
            if($allEventCategories){ 
                foreach($allEventCategories as $event_item){
                    $eventiID = $event_item['ev_id'];
                    $eventiKey = $event_item['ev_key'];
                    $eventiIcon = $event_item['ev_icon'];
                    echo '<div class="<div class="swiper-slide theModern"><a href="'.$base_url.'events/'.$eventiKey.'"><div class="chip">'.$eventiIcon.' '.$page_Lang[$eventiKey][$dataUserPageLanguage].'</div></a></div>  ';
                } 
            }
          ?>  
                     
        </span> 
      </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      <!---->
  </div>
</div>
<script>
var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 2,
      freeMode: true, 
	  navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	   }
    });
</script> 


