<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>さくらさん19歳のお誕生日おめでと</title>
<meta name="description" content="Sakura Araki Happy 19th Birthday." />
<meta name="keywords" content="Sakura Araki, Sakura, Araki, LinQ, 新木さくら, さくら, 新木" />
<meta name="author" content="Shuhei" />
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="/css/polaroid-component.css" />
<link rel="stylesheet" type="text/css" href="/css/polaroid-demo.css" />
<link rel="stylesheet" type="text/css" href="/css/polaroid-normalize.css" />
<link rel="stylesheet" type="text/css" href="/css/animate.css" />
<link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />
<link rel="stylesheet" type="text/css" href="/css/examples.css" />
<link rel="stylesheet" type="text/css" href="/css/smartPhone.css" media="only screen and (min-width: 0px) and (max-width: 414px)" >
<link rel="stylesheet" type="text/css" href="/css/tabletPc.css" type="text/css" media="only screen and (min-width: 415px) and (max-width: 910px)" >
<link rel="stylesheet" type="text/css" href="/css/desktopPc.css" media="only screen and (min-width: 911px)" >

<!-- フォント -->
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>


    <style>
        #slide2, #slide3, #slide4 {
            background-color: hotpink;
        }
        .age {
            color: red;
        }
    </style>

</head>
<body>

<div id="fullpage">
    <div class="section sakuraFirst" id="section0">
        <!--
        <video autoplay loop muted id="myVideo" style="visibility:hidden">
            <source src="../movies/sakuraHappyWedding.mp4" type="video/mp4">
        </video>
        -->
        <div class="layer">
            <h1 class="lightPink tlt">新木さくらさん19歳のお誕生日おめでとう！</h1>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1">
            <div class="sakuraSecond"></div>
        </div>
        <div class="slide" id="slide2">
            <h1 class="lightPink">Special SakuraDays</h1>
            <section id="photostack-1" class="photostack">
                <div>
                    <?php for($i = 1; $i <= 8; $i++) {?>
                        <figure>
                            <a class="photostack-img">
                                <img class="polaroidImage" src="https://s3-ap-northeast-1.amazonaws.com/sakuraimages/iPhone/0<?php echo $i ?>.jpg" alt=""/>
                            </a>
                            <figcaption>
                                <h2 class="photostack-title"></h2>
                            </figcaption>
                        </figure>
                    <?php } ?>
                </div>
            </section>
        </div>
        <div class="slide" id="slide3">
            <h1 class="lightPink">Instagram SakuraDays</h1>
            <section id="photostack-2" class="photostack">
                <div>
                    <?php $index = 0 ?>
                    @foreach ($instagramImages as $image)
                    <figure>
                        <a href="{{ $image }}" class="photostack-img">
                            <img class="polaroidImage" src="{{ $image }}" alt=""/>
                        </a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                            <div class="photostack-back polaroidText">
                                <p> {{ $instagramTexts[$index] }} </p>
                            </div>
                        </figcaption>
                    </figure>
                    <?php $index++ ?>
                    @endforeach
                </div>
            </section>
        </div>
        <div class="slide" id="slide4">
            <h1 class="lightPink">Twitter SakuraDays</h1>
            <section id="photostack-3" class="photostack">
                <div>
                    @foreach ($tweetItems as $item)
                    <figure>
                        <a href="{{ $item['image'] }}" class="photostack-img">
                            <img class="polaroidImage" src="{{ $item['image'] }}" alt=""/>
                        </a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                            <div class="photostack-back polaroidText">
                                <p> {{ $item['text'] }} </p>
                            </div>
                        </figcaption>
                    </figure>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    <div class="section sakuraThird" id="section2">
        <a href="/sakura/telephone">
            <h1 class="lightPink tlt">Listen to Telephone</h1>
        </a>
    </div>
    <div class="section sakuraFourth" id="section3">
        <h1 class="tlt lightPink">This is SAKURA day!</h1>
        <h1 class="tlt lightPink">Have fun with Me!</h1>
        <h2 class="tlt lightPink">Shuhei.</h2>
    </div>
</div>


<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/js/polaroid-modernizr.min.js"></script>
<script type="text/javascript" src="/js/polaroid-photostack.js"></script>
<script type="text/javascript" src="/js/polaroid-classie.js"></script>
<script type="text/javascript" src="/js/demo.js"></script>
<script type="text/javascript" src="/js/jquery.textillate.js"></script>
<script type="text/javascript" src="/js/jquery.lettering.js"></script>
<script type="text/javascript" src="/js/jquery.fullPage.min.js"></script>
<script type="text/javascript" src="/js/jquery.easings.min.js"></script>
<script type="text/javascript" src="/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/js/examples.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script>
    // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );

    new Photostack( document.getElementById( 'photostack-1' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );
    new Photostack( document.getElementById( 'photostack-2' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );
    new Photostack( document.getElementById( 'photostack-3' ), {
        callback : function( item ) {
            //console.log(item)
        }
    } );

    $(document).ready(function() {
        /*
         // 画面幅を取得
         var screenWidth = $(window).width();
         // 分岐する画面幅
         var xWidth = 911;
         if (xWidth <= screenWidth) {
         $('video').show();
         $('#fullpage').fullpage({
         verticalCentered: true,
         sectionsColor: ['white', 'white', '', ''],
         afterRender: function () {
         //playing the video
         $('video').get(0).play();
         }
         });
         } else {
         $('video').hide();
         */
        $('#fullpage').fullpage({
            verticalCentered: true,
            sectionsColor: ['white', 'white', '', ''],
        });
//            }

        $('.tlt').textillate({
            // the default selector to use when detecting multiple texts to animate
            selector: '.texts',

            // enable looping
            loop: true,

            // sets the minimum display time for each text before it is replaced
            minDisplayTime: 2000,

            // sets the initial delay before starting the animation
            // (note that depending on the in effect you may need to manually apply
            // visibility: hidden to the element before running this plugin)
            initialDelay: 0,

            // set whether or not to automatically start animating
            autoStart: true,

            // custom set of 'in' effects. This effects whether or not the
            // character is shown/hidden before or after an animation
            inEffects: [],

            // custom set of 'out' effects
            outEffects: [ 'hinge' ],

            // in animation settings
            in: {
                // set the effect name
                effect: 'fadeInLeftBig',
                delayScale: 1.5,
                delay: 50,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function () {}
            },

            // out animation settings.
            out: {
                effect: 'fadeOutRight',
                delayScale: 1.5,
                delay: 50,
                sync: false,
                shuffle: false,
                reverse: false,
                callback: function () {}
            },

            // callback that executes once textillate has finished
            callback: function () {},

            // set the type of token to animate (available types: 'char' and 'word')
            type: 'char'
        });
    });
</script>
</body>
</html>