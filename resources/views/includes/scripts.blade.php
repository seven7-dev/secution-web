<script src="../js/jquery-3.6.0.min.js"></script>

<!-- plugins-jquery -->
<script src="../js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '../js/';</script>

<!-- REVOLUTION JS FILES -->
<script src="../revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="../revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="../revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="../revolution/js/revolution.addon.particles.min.js"></script>


<!-- revolution custom -->
<script src="../revolution/js/revolution-custom.js"></script>

<!-- custom -->
<script src="../js/custom.js"></script>



<script type="text/javascript">
                  var revapi92,
                tpj=jQuery;
            tpj(document).ready(function() {
        if(tpj("#rev_slider_92_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_92_1");
        }else{
          revapi92 = tpj("#rev_slider_92_1").show().revolution({
            sliderType:"standard",
jsFileLocation:"//localhost/revslider-standalone/revslider/public/assets/js/",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              touch:{
                touchenabled:"on",
                touchOnDesktop:"off",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              }
              ,
              arrows: {
                style:"uranus",
                enable:true,
                hide_onmobile:true,
                hide_under:767,
                hide_onleave:false,
                tmp:'',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                }
              }
              ,
              bullets: {
                enable:true,
                hide_onmobile:false,
                style:"hermes",
                hide_onleave:false,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:20,
                                space:5,
                tmp:''
              }
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1200,1024,778,480],
            gridheight:[900,768,960,720],
            lazyType:"smart",
            parallax: {
              type:"scroll",
              origo:"slidercenter",
              speed:1000,
                          speedbg:0,
                          speedls:0,
              levels:[5,10,15,20,25,30,35,40,45,46,47,-60,-70,200,-120,55],
              disable_onmobile:"on"
            },
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      }); /*ready*/
    </script>

<script src="{{ asset('js/all.min.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>
