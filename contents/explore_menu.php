<div class="ex_fix_menu_wrp">
<div class="ex_fix_menu">
  <div class="ex_men_ic">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M61.86625,152.01575c-12.53808,-7.06992 -19.24967,-24.8325 -12.31592,-36.3995c6.32817,-10.97575 24.80383,-16.47975 41.3445,-6.35683c8.90458,5.47533 19.4575,9.96883 32.31808,9.96883c11.87875,0 23.091,-7.06992 29.36542,-17.68017c2.30767,-3.85567 3.956,-8.67525 4.94858,-11.8895c-0.33325,11.25167 -3.6335,22.81508 -9.89717,33.11c-15.83475,27.3265 -59.37583,44.3545 -85.7635,29.24717z"></path><path d="M41.66342,32.19625c12.45925,-6.50375 31.7985,-4.21758 37.70025,8.45667c5.24958,11.37708 5.29258,27.31575 -16.0605,38.68208c-9.1805,4.87692 -19.66892,10.73208 -25.57425,21.79383c-5.57208,10.40242 -6.235,23.07667 0,34.13483c2.29333,3.89867 5.57208,8.127 7.86183,10.40242c-9.503,-6.18483 -17.69808,-14.96042 -23.60342,-26.00783c-14.82067,-26.71375 -7.53933,-73.14658 19.67608,-87.462z"></path><path d="M154.08333,71.53408c0,13.76 -12.04358,28.79925 -26.04367,28.79925c-13.02183,0 -26.04367,-7.34942 -26.04367,-31.67667c0,-10.23758 -0.97825,-22.07692 -7.48917,-32.32525c-6.18125,-9.9115 -17.63358,-16.33642 -30.34008,-16.01392c-3.50092,0.00358 -7.32792,0.34042 -10.41675,1.1825c2.15,-0.989 3.8055,-1.89917 7.20967,-3.09242c7.4605,-2.60867 15.609,-3.85208 24.10508,-4.07425c31.90958,0 68.68892,27.44833 69.01858,57.20075z"></path></g></g></svg> 
  </div> 
</div>
  
  <div class="ex_menu_container">
    <div class="ex_me_con">
      <div class="ex_mm">
       <div class="ex_m_post_box"><a href="<?php echo $base_url.'events';?>"><div class="ex_in hvr-shadow" style="text-align:center;">All Events</div></a></div>
            
      <?php 
        if($allEventCategories){ 
            foreach($allEventCategories as $event_item){
                $eventiID = $event_item['ev_id'];
                $eventiKey = $event_item['ev_key'];
                $eventiIcon = $event_item['ev_icon'];
                echo '<div class="ex_m_post_box"><a href="'.$base_url.'events/'.$eventiKey.'"><div class="ex_in hvr-shadow">'.$eventiIcon.' '.$page_Lang[$eventiKey][$dataUserPageLanguage].'</div></a></div> ';
            } 
        }
      ?> 
      </div>
    </div>
  </div>
</div> 

 