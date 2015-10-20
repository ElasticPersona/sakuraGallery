<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $userInfo['name'] }} Gallery</title>
    <meta name="description" content="Scattered Polaroids Gallery: A flat-style take on a Polaroid gallery" />
    <meta name="keywords" content="scattered polaroids, image gallery, javascript, random rotation, 3d, backface, flat design" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/polaroid-component.css" />
    <link rel="stylesheet" type="text/css" href="/css/polaroid-demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/polaroid-normalize.css" />
    <script type="text/javascript" src="/js/polaroid-modernizr.min.js"></script>
    <script type="text/javascript" src="/js/polaroid-photostack.js"></script>
    <script type="text/javascript" src="/js/polaroid-classie.js"></script>
<style>
.polaroidImage {
   max-width: 240px;
   max-height: 240px;
}
.headerImage {
    background-image: url({{ $userInfo['profile_banner_url'] }});
    background-repeat:no-repeat;
    -moz-background-size:auto;
    background-size:auto;
    width: 100%;
}
</style>
    </head>



<div class="container">
            <!-- Top Navigation -->
            <div class="codrops-top clearfix">
                <a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/DotNavigationStyles/"><span>Previous Demo</span></a>
                <span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=18402"><span>Back to the Codrops Article</span></a></span>
            </div>
            <header class="codrops-header headerImage">
                <svg xmlns="http://www.w3.org/2000/svg" width="1000px" height="300px" class="polaroid" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1000 300">
                    <g transform="rotate(-9.424738883972168 131.13208007812517,131.28302001953134) "><rect id="svg_6" height="194.264154" width="194.264154" y="34.15094" x="34"/><rect id="svg_7" height="116.226417" width="152.754719" y="56.566035" x="54.754717"/></g><rect id="svg_2" height="0" width="1" y="108" x="123" stroke-width="10" stroke="#000000" fill="#ffffff"/><g id="svg_10" transform="rotate(8.810273170471191 211.13208007812494,164.28302001953114) "><rect id="svg_11" height="194.264154" width="194.264154" y="67.15094" x="114"/><rect id="svg_12" height="116.226417" width="152.754719" y="89.566035" x="134.754717"/></g><g id="svg_13" transform="rotate(-14.838730812072754 350.132080078125,168.28302001953125) "><rect id="svg_14" height="194.264154" width="194.264154" y="71.15094" x="253"/><rect id="svg_15" height="116.226417" width="152.754719" y="93.566035" x="273.754717"/></g><g id="svg_16" transform="rotate(-1.4553210735321045 476.1320800781219,121.28302001953003) "><rect id="svg_17" height="194.264154" width="194.264154" y="24.15094" x="379"/><rect id="svg_18" height="116.226417" width="152.754719" y="46.566035" x="399.754717"/></g><g id="svg_19" transform="rotate(-4.776742458343506 556.1320800781244,176.28302001953122) "><rect id="svg_20" height="194.264154" width="194.264154" y="79.15094" x="459"/><rect id="svg_21" height="116.226417" width="152.754719" y="101.566035" x="479.754717"/></g><g id="svg_22" transform="rotate(17.17530059814453 690.1320800781251,163.2830200195312) "><rect id="svg_23" height="194.264154" width="194.264154" y="66.15094" x="593"/><rect id="svg_24" height="116.226417" width="152.754719" y="88.566035" x="613.754717"/></g><g id="svg_25" transform="rotate(-9.506031036376953 771.132080078125,177.28302001953094) "><rect id="svg_26" height="194.264154" width="194.264154" y="80.15094" x="674"/><rect id="svg_27" height="116.226417" width="152.754719" y="102.566035" x="694.754717"/></g><g id="svg_28" transform="rotate(19.351133346557617 862.1320800781251,137.28302001953148) "><rect id="svg_29" height="194.264154" width="194.264154" y="40.15094" x="765"/><rect id="svg_30" height="116.226417" width="152.754719" y="62.566035" x="785.754717"/></g></g>
                </svg>
                <h1>{{ $userInfo['name'] }}<span>{{ $userInfo['description'] }}</span></h1>
            </header>


            <div class="description">
                <p>This first example shows a simple use case without showing a description on the back side of the Polaroid. Clicking another navigation dot will reshuffle the Polaroids and bring the respective current item to the center.</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="400px" height="100px" class="polaroid" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1000 300">
                    <g transform="rotate(-9.424738883972168 131.13208007812517,131.28302001953134) "><rect id="svg_6" height="194.264154" width="194.264154" y="34.15094" x="34"/><rect id="svg_7" height="116.226417" width="152.754719" y="56.566035" x="54.754717"/></g><rect id="svg_2" height="0" width="1" y="108" x="123" stroke-width="10" stroke="#000000" fill="#ffffff"/><g id="svg_10" transform="rotate(8.810273170471191 211.13208007812494,164.28302001953114) "><rect id="svg_11" height="194.264154" width="194.264154" y="67.15094" x="114"/><rect id="svg_12" height="116.226417" width="152.754719" y="89.566035" x="134.754717"/></g><g id="svg_13" transform="rotate(-14.838730812072754 350.132080078125,168.28302001953125) "><rect id="svg_14" height="194.264154" width="194.264154" y="71.15094" x="253"/><rect id="svg_15" height="116.226417" width="152.754719" y="93.566035" x="273.754717"/></g><g id="svg_16" transform="rotate(-1.4553210735321045 476.1320800781219,121.28302001953003) "><rect id="svg_17" height="194.264154" width="194.264154" y="24.15094" x="379"/><rect id="svg_18" height="116.226417" width="152.754719" y="46.566035" x="399.754717"/></g><g id="svg_19" transform="rotate(-4.776742458343506 556.1320800781244,176.28302001953122) "><rect id="svg_20" height="194.264154" width="194.264154" y="79.15094" x="459"/><rect id="svg_21" height="116.226417" width="152.754719" y="101.566035" x="479.754717"/></g><g id="svg_22" transform="rotate(17.17530059814453 690.1320800781251,163.2830200195312) "><rect id="svg_23" height="194.264154" width="194.264154" y="66.15094" x="593"/><rect id="svg_24" height="116.226417" width="152.754719" y="88.566035" x="613.754717"/></g><g id="svg_25" transform="rotate(-9.506031036376953 771.132080078125,177.28302001953094) "><rect id="svg_26" height="194.264154" width="194.264154" y="80.15094" x="674"/><rect id="svg_27" height="116.226417" width="152.754719" y="102.566035" x="694.754717"/></g><g id="svg_28" transform="rotate(19.351133346557617 862.1320800781251,137.28302001953148) "><rect id="svg_29" height="194.264154" width="194.264154" y="40.15094" x="765"/><rect id="svg_30" height="116.226417" width="152.754719" y="62.566035" x="785.754717"/></g></g>
                </svg>
                <p><strong>Click on the gallery to start it.</strong></p>
            </div>
            <section id="photostack-1" class="photostack photostack-start">
                <div>
                    <figure>
                        <a href="http://goo.gl/Qw3ND4" class="photostack-img"><img src="img/01.jpg" alt="img01"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Serenity Beach</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/fhwlSP" class="photostack-img"><img src="img/02.jpg" alt="img02"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Happy Days</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/Jmvr4u" class="photostack-img"><img src="img/03.jpg" alt="img03"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Beautywood</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/49lN3k" class="photostack-img"><img src="img/04.jpg" alt="img04"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Heaven of time</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/NJ1Dhf" class="photostack-img"><img src="img/05.jpg" alt="img05"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Speed Racer</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="http://goo.gl/Ms7VDl" class="photostack-img"><img src="img/06.jpg" alt="img06"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Forever this</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/07.jpg" alt="img07"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Lovely Green</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/08.jpg" alt="img08"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Wonderful</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/09.jpg" alt="img09"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Love Addict</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/10.jpg" alt="img10"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Friendship</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/11.jpg" alt="img11"/></a>
                        <figcaption>
                            <h2 class="photostack-title">White Nights</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/12.jpg" alt="img12"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Serendipity</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/13.jpg" alt="img13"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Pure Soul</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/14.jpg" alt="img14"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Winds of Peace</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/15.jpg" alt="img15"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Shades of blue</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="img/16.jpg" alt="img16"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Lightness</h2>
                        </figcaption>
                    </figure>
                </div>
            </section>



            <section class="description">
                <p>The next examples show how to add a description to the back of the photo which can be viewed by flipping the Polaroid. To flip the Polaroid, <strong>the current navigation dot has to be clicked a second time</strong>. This functionality is indicated by a rotated arrow on the dot icon.</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="110px" height="110px" class="polaroid" preserveAspectRatio="xMidYMid meet" viewBox="0 0 300 300">
                    <!-- Created with SVG-edit - http://svg-edit.googlecode.com/ -->
                    <rect id="svg_2" height="0" width="1" y="108" x="123"/>
                    <rect id="svg_6" height="194.264154" width="194.264154" y="22.15094" x="18"/>
                    <rect id="svg_7" height="116.226417" width="152.754719" y="44.566035" x="38.754717"/>
                    <rect id="svg_1" height="194.264154" width="194.264154" y="83.584903" x="87.73585"/>
                    <rect id="svg_3" height="116.226417" width="152.754719" y="105.999998" x="108.490567"/>
                </svg>
                <p>Another configurable option for each item is the <strong>shuffle iteration count</strong> which defines how many times all items should be "spread", or shuffled, before the current photo moves to the middle. </p>
            </section>
            <section id="photostack-2" class="photostack photostack-start">
                <div>
                    {{ $index = 0 }}
                    @foreach ($instagramImages as $image)
                    <figure>
                        <a href="{{ $image }}" class="photostack-img"><img class="polaroidImage" src="{{ $image }}" alt=""/></a>
                        <figcaption>
                            <h2 class="photostack-title"></h2>
                            <div class="photostack-back">
                                <p> {{ $instagramTexts[$index] }} </p>
                            </div>
                        </figcaption>
                    </figure>
                    {{ $index++ }}
                    @endforeach
                </div>
            </section>




<section class="description">
    <p>The last example <strong>does not require a click</strong> on the gallery to initiate the first shuffling.</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="400px" height="100px" class="polaroid" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1000 300">
        <g transform="rotate(-9.424738883972168 131.13208007812517,131.28302001953134) "><rect id="svg_6" height="194.264154" width="194.264154" y="34.15094" x="34"/><rect id="svg_7" height="116.226417" width="152.754719" y="56.566035" x="54.754717"/></g><rect id="svg_2" height="0" width="1" y="108" x="123" stroke-width="10" stroke="#000000" fill="#ffffff"/><g id="svg_10" transform="rotate(8.810273170471191 211.13208007812494,164.28302001953114) "><rect id="svg_11" height="194.264154" width="194.264154" y="67.15094" x="114"/><rect id="svg_12" height="116.226417" width="152.754719" y="89.566035" x="134.754717"/></g><g id="svg_13" transform="rotate(-14.838730812072754 350.132080078125,168.28302001953125) "><rect id="svg_14" height="194.264154" width="194.264154" y="71.15094" x="253"/><rect id="svg_15" height="116.226417" width="152.754719" y="93.566035" x="273.754717"/></g><g id="svg_16" transform="rotate(-1.4553210735321045 476.1320800781219,121.28302001953003) "><rect id="svg_17" height="194.264154" width="194.264154" y="24.15094" x="379"/><rect id="svg_18" height="116.226417" width="152.754719" y="46.566035" x="399.754717"/></g><g id="svg_19" transform="rotate(-4.776742458343506 556.1320800781244,176.28302001953122) "><rect id="svg_20" height="194.264154" width="194.264154" y="79.15094" x="459"/><rect id="svg_21" height="116.226417" width="152.754719" y="101.566035" x="479.754717"/></g><g id="svg_22" transform="rotate(17.17530059814453 690.1320800781251,163.2830200195312) "><rect id="svg_23" height="194.264154" width="194.264154" y="66.15094" x="593"/><rect id="svg_24" height="116.226417" width="152.754719" y="88.566035" x="613.754717"/></g><g id="svg_25" transform="rotate(-9.506031036376953 771.132080078125,177.28302001953094) "><rect id="svg_26" height="194.264154" width="194.264154" y="80.15094" x="674"/><rect id="svg_27" height="116.226417" width="152.754719" y="102.566035" x="694.754717"/></g><g id="svg_28" transform="rotate(19.351133346557617 862.1320800781251,137.28302001953148) "><rect id="svg_29" height="194.264154" width="194.264154" y="40.15094" x="765"/><rect id="svg_30" height="116.226417" width="152.754719" y="62.566035" x="785.754717"/></g></g>
    </svg>
<p>The <strong>dummy items</strong> show how to fill the container with Polaroids without actually making them part of the viewable gallery. This can be useful when wanting to show just a specific subset of a collection.</p>
<p>All Polaroids in this use case have a description on the back side, which can be viewed by clicking the navigation dot again.</p>
</section>
<section id="photostack-3" class="photostack">
    <div>
       {{ $index = 0 }}
        @foreach ($tweetImages as $image)
        <figure>
            <a href="{{ $image }}" class="photostack-img"><img class="polaroidImage" src="{{ $image }}" alt=""/></a>
            <figcaption>
                <h2 class="photostack-title"></h2>
                <div class="photostack-back">
                    <p> {{ $tweetTexts[$index] }} </p>
                </div>
            </figcaption>
        </figure>
        {{ $index++ }}
        @endforeach
    </div>
</section>




            <section class="description">
                <p>Photos by <a href="http://www.flickr.com/photos/rnugraha/">Riza Nugraha</a>, licensed under <a href="http://creativecommons.org/licenses/by/2.0/deed.en">Creative Commons Attribution 2.0 Generic (CC BY 2.0)</a></p>
            </section>
            <section class="related">
                <h3>If you enjoyed this demo you might also like:</h3>
                <a href="http://tympanus.net/Development/ElasticStack/">
                    <img src="http://codropspz.tympanus.netdna-cdn.com/codrops/wp-content/uploads/2013/11/ElastiStackMain-300x162.jpg" />
                    <h3>Elastic Stack</h3>
                </a>
                <a href="http://tympanus.net/Tutorials/ThumbnailGridExpandingPreview/">
                    <img src="http://codropspz.tympanus.netdna-cdn.com/codrops/wp-content/uploads/2013/03/ThumbnailGridExpandingPreview-300x162.jpg" />
                    <h3>Expanding Thumbnail Grid</h3>
                </a>

            </section>
        </div><!-- /container -->


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
        </script>
