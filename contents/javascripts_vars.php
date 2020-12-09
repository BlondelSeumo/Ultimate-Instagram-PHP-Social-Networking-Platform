<script type="text/javascript" src="<?php echo $base_url; ?>js/readmore.js "></script>
<script type="text/javascript">
var requestUrl =   "<?php echo $base_url; ?>";
var sureWanttoDeleteThisComment =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['delete_comment_sure'][$dataUserPageLanguage]) ? $page_Lang['delete_comment_sure'][$dataUserPageLanguage] : $page_Lang['delete_comment_sure']['english']); ?>";
var sureWanttoDeleteThisPost = "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['sure_want_to_delete_this_post'][$dataUserPageLanguage]) ? $page_Lang['sure_want_to_delete_this_post'][$dataUserPageLanguage] : $page_Lang['sure_want_to_delete_this_post']['english']); ?>";
var roger =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['roger_ok'][$dataUserPageLanguage]) ? $page_Lang['roger_ok'][$dataUserPageLanguage] : $page_Lang['roger_ok']['english']); ?>";
var reportSendedText =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['report_already_sended'][$dataUserPageLanguage]) ? $page_Lang['report_already_sended'][$dataUserPageLanguage] : $page_Lang['report_already_sended']['english']); ?>";
var cancel =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['cancel'][$dataUserPageLanguage]) ? $page_Lang['cancel'][$dataUserPageLanguage] : $page_Lang['cancel']['english']); ?>";
var sure =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['sure_delete'][$dataUserPageLanguage]) ? $page_Lang['sure_delete'][$dataUserPageLanguage] : $page_Lang['sure_delete']['english']); ?>";
var ForgotChooseReportType =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['forgot_report_type'][$dataUserPageLanguage]) ? $page_Lang['forgot_report_type'][$dataUserPageLanguage] : $page_Lang['forgot_report_type']['english']); ?>";
var selectedNightMode =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['night_mode'][$dataUserPageLanguage]) ? $page_Lang['night_mode'][$dataUserPageLanguage] : $page_Lang['night_mode']['english']); ?>";
var selectedDayMode =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['day_mode'][$dataUserPageLanguage]) ? $page_Lang['day_mode'][$dataUserPageLanguage] : $page_Lang['day_mode']['english']); ?>";
var visitLinkText =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['visit_story_profile'][$dataUserPageLanguage]) ? $page_Lang['visit_story_profile'][$dataUserPageLanguage] : $page_Lang['visit_story_profile']['english']); ?>";
var disableComment =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['disable_comment_feature'][$dataUserPageLanguage]) ? $page_Lang['disable_comment_feature'][$dataUserPageLanguage] : $page_Lang['disable_comment_feature']['english']); ?>";
var enableComment =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['enable_comment_feature'][$dataUserPageLanguage]) ? $page_Lang['enable_comment_feature'][$dataUserPageLanguage] : $page_Lang['enable_comment_feature']['english']); ?>";
var minAmonth =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['amonth_least'][$dataUserPageLanguage]) ? $page_Lang['amonth_least'][$dataUserPageLanguage] : $page_Lang['amonth_least']['english']); ?> <?php echo $minMonth . $scurrency; ?>";
var wrongfe =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['wrong_fee'][$dataUserPageLanguage]) ? $page_Lang['wrong_fee'][$dataUserPageLanguage] : $page_Lang['wrong_fee']['english']); ?>";
var adsSuccess =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['ad_created_success_wait_mail'][$dataUserPageLanguage]) ? $page_Lang['ad_created_success_wait_mail'][$dataUserPageLanguage] : $page_Lang['ad_created_success_wait_mail']['english']); ?>";
var noenoughCredit =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['no_credit_enough'][$dataUserPageLanguage]) ? $page_Lang['no_credit_enough'][$dataUserPageLanguage] : $page_Lang['no_credit_enough']['english']); ?>";
var noenoughbudget =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['no_credit_budget'][$dataUserPageLanguage]) ? $page_Lang['no_credit_budget'][$dataUserPageLanguage] : $page_Lang['no_credit_budget']['english']); ?>";
var ShowImagesA =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['show_hide_image'][$dataUserPageLanguage]) ? $page_Lang['show_hide_image'][$dataUserPageLanguage] : $page_Lang['show_hide_image']['english']); ?>";
var HideImagesA =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['show_hide_image_hide'][$dataUserPageLanguage]) ? $page_Lang['show_hide_image_hide'][$dataUserPageLanguage] : $page_Lang['show_hide_image_hide']['english']); ?>";
var ChoseSelfTime =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['choose_self_destruct_time'][$dataUserPageLanguage]) ? $page_Lang['choose_self_destruct_time'][$dataUserPageLanguage] : $page_Lang['choose_self_destruct_time']['english']); ?>";
var selfSecond =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['self_second'][$dataUserPageLanguage]) ? $page_Lang['self_second'][$dataUserPageLanguage] : $page_Lang['self_second']['english']); ?>";
var selfMinute =  "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['self_minute'][$dataUserPageLanguage]) ? $page_Lang['self_minute'][$dataUserPageLanguage] : $page_Lang['self_minute']['english']); ?>";
var seenItAll = "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['seen_it_all'][$dataUserPageLanguage]) ? $page_Lang['seen_it_all'][$dataUserPageLanguage] : $page_Lang['seen_it_all']['english']); ?>";
var seeProduct = "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['show_product'][$dataUserPageLanguage]) ? $page_Lang['show_product'][$dataUserPageLanguage] : $page_Lang['show_product']['english']); ?>";
var hideProduct = "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['hide_product'][$dataUserPageLanguage]) ? $page_Lang['hide_product'][$dataUserPageLanguage] : $page_Lang['hide_product']['english']); ?>";
var statusUploaded = "<?php echo preg_replace('/\r|\n/', '', isset($page_Lang['story_shared_sucs'][$dataUserPageLanguage]) ? $page_Lang['story_shared_sucs'][$dataUserPageLanguage] : $page_Lang['story_shared_sucs']['english']); ?>";
$(function() {
    //caches a jQuery object containing the header element
    var headera = $(".header_container");
	var headerIn = $(".header_in");
	var headerLogo = $(".aU2HW");
	var headerMenu = $(".headerMenu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 77) {
            headera.addClass("aUCRo");
			headerIn.addClass("buoMu");
			headerLogo.addClass("topico");
			headerMenu.addClass("top_menu");
        } else {
            headera.removeClass("aUCRo");
			headerIn.removeClass("buoMu");
			headerLogo.removeClass("topico");
			headerMenu.removeClass("top_menu");
        }
    });
});
$(document).ready(function(){
$(".swiper-container").livequery(function() {
    var swiper = new Swiper(this, {
      slidesPerView: 4,
      spaceBetween: 5,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 3,
          spaceBetween: 5,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 5,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 5,
        },
      }
    });
 });
<?php if ($LiveVideos) {?>
$(".thliveVid").livequery(function() {
  var swiper = new Swiper(this, {
      slidesPerView: 4,
      spaceBetween: 20,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
      }
    });
});
<?php }?>
});
</script>
<script type="text/javascript">
function testTheiaStickySidebars() {
    var me = {};
    me.scrollTopStep = 1;
    me.currentScrollTop = 0;
    me.values = null;

    window.scrollTo(0, 1);
    window.scrollTo(0, 0);

    $(window).scroll(function(me) {
        return function(event) {
            var newValues = [];

            // Get sidebar offsets.
            $('.theiaStickySidebar').each(function() {
                newValues.push($(this).offset().top);
            });

            if (me.values != null) {
                var ok = true;

                for (var j = 0; j < newValues.length; j++) {
                    var diff = Math.abs(newValues[j] - me.values[j]);
                    if (diff > 1) {
                        ok = false;

                        console.log('Offset difference for sidebar #' + (j + 1) + ' is ' + diff + 'px');

                        // Highlight sidebar.
                        $($('.theiaStickySidebar')[j]).css('background', 'yellow');
                    }
                }

                if (ok == false) {
                    // Stop test.
                    $(this).unbind(event);

                    alert('Bummer. Offset difference is bigger than 1px for some sidebars, which will be highlighted in yellow. Check the logs. Aborting.');

                    return;
                }
            }

            me.values = newValues;

            // Scroll to bottom. We don't cache ($(document).height() - $(window).height()) since it may change (e.g. after images are loaded).
            if (me.currentScrollTop < ($(document).height() - $(window).height()) && me.scrollTopStep == 1) {
                me.currentScrollTop += me.scrollTopStep;
                window.scrollTo(0, me.currentScrollTop);
            }
            // Then back up.
            else if (me.currentScrollTop > 0) {
                me.scrollTopStep = -1;
                me.currentScrollTop += me.scrollTopStep;
                window.scrollTo(0, me.currentScrollTop);
            }
            // Then stop.
            else {
                $(this).unbind(event);

                alert("Great success!");
            }
        };
    }(me));
}
	$(document).ready(function() {
		if($(window).width() > 915){
		  $('.theiaSidebar')
			.theiaStickySidebar({
				additionalMarginTop: 30
	      });
		}
	});
$(window).resize(function() {
  if($(window).width() < 915){
      $(".COOzN").removeClass('theiaSidebar');
	  $(".COOzN , .theiaStickySidebar").removeAttr('style');
  }else{
      $(".COOzN").addClass('theiaSidebar');
  }
});
</script>
<?php if ($page == 'newsfeed' || $page = 'profile') {?>
<script type="text/javascript" src="<?php echo $base_url; ?>js/bfaf/images-compare.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>js/bfaf/hammer.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
	 $(".js-img-compare").livequery(function() {
		var imagesCompareElement = $(this).imagesCompare();
	  });
   });
</script>
<?php }?>
<?php if ($videoAutoPlayStatus == 1) {?>
<script type="text/javascript">
  $(document).ready(function($) {
    function AutoVideoPlaying() {
        var videos = $('video'), // All videos element
            allVidoesVisenseObj = [];
        var monitorVideo = function(video) { //Handler for each video element
            var visibility = VisSense(video, { fullyvisible: 0.75 }),
                visibility_monitor = visibility.monitor({
                    fullyvisible: function(e) {
                        video.play();
                        videos.prop('muted', soundStatusVideo);
                        var videoid = $(video).attr('data-id');
                        var type = 'afterads';
                        if ($("#afterVideoAds" + videoid).length == 0) {
                            var data = 'f=' + type + '&afID=' + videoid;
                            $.ajax({
                                type: 'POST',
                                url: requestUrl + 'requests/activity',
                                data: data,
                                beforeSend: function() {},
                                success: function(html) {
                                    if ($("#afterVideoAds" + videoid).length == 0) {
                                        var videoDuration = video.duration;
                                        var ShowAdsAfter = (videoDuration / 2) * 1000;
                                        var num = (ShowAdsAfter).toFixed(0);
                                        setTimeout(function() {
                                            $('#videoPlayer' + videoid).after('<div class="progress-bar-ads-time theBari"><span class="progress-ads-time progress-prog-ads-time"></span></div>');
                                            //video.pause();
                                        }, num - 3000);
                                        setTimeout(function() {
                                            $('#videobox' + videoid).append(html);
                                        }, num);
                                    }
                                }
                            });
                        } else {
                            $('.afterVideoAds' + videoid).remove();
                            $('.theBari').remove();
                        }

                    },
                    hidden: function(e) {
                        video.pause();
                    }
                }).start();
            return {
                visMonitor: visibility_monitor,
                monitorStop: function() {
                    this.visMonitor.stop();
                },
                monitorStart: function() {
                    this.visMonitor.start();
                }
            };
        };

        videos.each(function(index) {
            var monitorVids = monitorVideo(this);
            allVidoesVisenseObj.push(monitorVids);
        });
    }
    AutoVideoPlaying();

    function byScroll() {
        $('.viewserListContainer').bind('scroll', function() {
            if (scrollLoad && $(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
                var scrollType = $("#moreUseri").attr("data-type"); // moreLikedUser
                if (scrollType == 'moreLikedUser') { var ID = $('.viewerItems ').children('.theluser').last().attr('data-last'); var postid = $("#likedpp").attr("data-id"); }
                var data = 'lastid=' + ID + '&feed=' + scrollType + '&pid=' + postid;
                $.ajax({
                    type: "POST",
                    url: requestUrl + 'requests/morefeed',
                    data: data,
                    cache: false,
                    beforeSend: function() {
                        $("#moreUseri").after('<div class="post_explore_box" id="preloadMore"><div class="post_explore_box_in"><div class="noMorePost">' + loadingMini + '</div></div></div>');
                    },
                    success: function(html) {
                        if (html) {
                            $(".viewerItems").append(html);
                            $("#preloadMore").remove();
                        } else {
                            $("#preloadMore").remove();
                            scrollLoad = false;
                        }
                    }
                });
            } else {
                // Do Something
            }
            return false;
        });
    }
  });
</script>
<?php }?>
