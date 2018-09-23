<?php
$baseUrl = "192.168.0.199/api/v2/map/property_detail?ml_num=";
$id = $_GET['id'] ?? '';
$device = $_GET['source']?? '';
$content = file_get_contents("http://192.168.0.199/api/v2/map/property_detail?ml_num=".$id."");
$decode = json_decode($content,1);
$detail = $decode['data'];

echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body onLoad="scrollTo(0,10)">
    <script src="javaScript/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
    <scriptsrc="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div class="top">
      <div class="topBar">
        <div class="logo"><img src="/images/logo.png" alt="sesame booking logo"></div>
        <div class="contact">
          <p>www.sesamebooking.com</p>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:600px;overflow:hidden;visibility:hidden;">
          <!-- Loading Screen -->
          <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
              <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/spin.svg" />
          </div>
          <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:600px;overflow:hidden;">
              <div>
                  <img data-u="image" src="images/001.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/002.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/003.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/004.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/005.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/006.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/007.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/008.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/009.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/010.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/011.jpg" />
              </div>
              <div>
                  <img data-u="image" src="images/012.jpg" />
              </div>
          </div>
          <!-- Bullet Navigator -->
          <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
              <div data-u="prototype" class="i" style="width:16px;height:16px;">
                  <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                      <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                  </svg>
              </div>
          </div>
          <!-- Arrow Navigator -->
          <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
              </svg>
          </div>
          <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
              </svg>
          </div>
      </div>
      <script type="text/javascript">jssor_1_slider_init();</script>  
      <div class="price">
        <div class="money">
          $200,000
        </div>
        <div class="address" >
          <p>123 Main Street</p>
        </div>
        <div class="size">
          <p>500 - 600 sq ft</p>
        </div>
        <div class="map">
          <img src="/images/mapLogo.png" alt="">
        </div>
        <div class="rooms">
          <i class="fas fa-bed"></i> 4 <i class="fas fa-bath"></i> 2
        </div>
      </div>

      <hr>
      <div class="display" id="map" hidden></div>
      <script>// Initialize and add the map
        function initMap() {
          // The location of Uluru
          var uluru = {lat: 43.751600000000003, lng: -79.360299999999995};
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById(\'map\'), {zoom: 16, center: uluru});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
        }
      </script>
      <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB053q2S6vg6aoMgM4w5XiutMqb8znL_vo&callback=initMap">
    </script>
      <div class="tab-box">
      <div class="description">
        <p>'.$detail['Ad_text'].'</p>
      </div>


      <div class="basicInfo">
        <div class="bigT">
          <p>Property Details</p>
        </div>
        <!-- -----------DETAIL----------- -->
        <div class="smallT smallF">
          <p>Detail</p>
        </div>
        <div class="item smallF">
          <p>Days Active</p>
          <p>2</p>
        </div>
        <div class="item smallF">
          <p>Date Available</p>
          <p>September 1/18</p>
        </div>
        <div class="item smallF">
          <p>MLS Number</p>
          <p>W4202841</p>
        </div>
        <div class="item smallF">
          <p>Type</p>
          <p>Detached</p>
        </div>
        <div class="item smallF">
          <p>Levels</p>
          <p>3-Storey</p>
        </div>
        <div class="item smallF">
          <p>Size</p>
          <p>N/A sq ft</p>
        </div>
        <div class="item smallF">
          <p>Lot Size</p>
          <p>100.07 feet</p>
        </div>
        <!-- ------------Building------------- -->
        <div class="smallT smallF">
          <p>Building</p>
        </div>
        <div class="item smallF">
          <p>Exterior</p>
          <p>Brick Front</p>
        </div>
        <div class="item smallF">
          <p>Basement</p>
          <p>Apartment and Fin W/O</p>
        </div>
        <div class="item smallF">
          <p>Garage</p>
          <p>Detached</p>
        </div>
        <div class="item smallF">
          <p>Driveway</p>
          <p>Lane</p>
        </div>
        <!-- ------------Utilities------------- -->
        <div class="smallT smallF">
          <p>Utilites</p>
        </div>
        <div class="item smallF">
          <p>Heat</p>
          <p>Forced Air</p>
        </div>
        <div class="item smallF">
          <p>A/C</p>
          <p>Central Air</p>
        </div>
        <div class="item smallF">
          <p>Heating Fuel</p>
          <p>Gas</p>
        </div>
        <!-- ------------Room Layout------------- -->
        <div class="smallT smallF">
          <p>Room Layout</p>
        </div>
        <div class="item smallF roomLayout">
          <p style="grid-area:t">Kitchen</p>
          <p style="grid-area:w">Bsmt</p>
          <p class="s" style="grid-area:s">14.44 × 6.76 ft</p>
        </div>
        <div class="item smallF roomLayout">
          <p style="grid-area:t">Bedroom</p>
          <p style="grid-area:w">Bsmt</p>
          <p class="s" style="grid-area:s">9.58 × 14.5 ft</p>
        </div>
        <div class="item smallF roomLayout">
          <p style="grid-area:t">Bedroom</p>
          <p style="grid-area:w">Bsmt</p>
          <p class="s" style="grid-area:s">9.58 × 14.5 ft</p>
        </div>
        <div class="item smallF roomLayout">
          <p style="grid-area:t">Bedroom</p>
          <p style="grid-area:w">Bsmt</p>
          <p class="s" style="grid-area:s">9.58 × 14.5 ft</p>
        </div>
        <!-- -------------Extras--------------- -->
        <div class="smallT smallF">
          <p>Extras</p>
        </div>
        <div class="item smallF">
          <p>Includes: S/S Fridge, Stove, Exhaust Fan, B/I Dishwasher, Stacked  washer and dryer, curtains, Elf.</p>
        </div>';
  if($device != 'device'){
  echo '
  <!-- ----------------Business Card------------ -->

      <div class="businessCard">
        <img src="/images/businessCardSample.png" alt="">
      </div>
  ';}
  echo '
  <!-- ---------------Law---------------- -->
      <div class="law smallF">
        <p>The Listing data is provided under copyright by the Toronto Real Estate Board. The listingdata is deemed reliable but is not garenteed accurate by the Toronto Real Estate Board nor Sesame Booking.</p>
      </div>
  ';
  if($device != 'device'){
  echo'
  <!-- -----------------Bottom Ads----------- -->
      <div class="bottomAds">
        <div class="picAndWords">
          <div class="appLogo">
            <img src="/images/downLogo.png" alt="">
          </div>
          <div class="words">
            <div class="title">
              <p>sesamebooking</p>
            </div>
            <div class="expl">
              多伦多免费房地产专业服务平台
            </div>
          </div>
        </div>
        <div class="moreBtn">
          <a href="http://www.sesamebooking.com/?p=downloadapp&lan=en">More</a>
        </div>
      </div>    
    </div>'
    ;}
echo'
    <div class="emptyBox"></div>
    <script>
      $(\'.map\').click(function(){
        if($(this).hasClass(\'display\')){
          $(\'#map\').slideDown();
          $(this).removeClass(\'display\');
        }else{
          $(\'#map\').slideUp();
          $(this).addClass(\'display\');
        }
      });
    </script>
  </body> 
  </html>
'; ?>