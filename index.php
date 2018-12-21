<?php include "include/headerinc.php"; ?>

<style>
    /* Send to external style sheet later */
    /* .img1 .bottom img {
        height: 800px !important;
    } */
    .owl-carousel img {
        /* width: 1200px !important; */
        height: 500px !important;
        width: 100%;
        /* height: 100%; */
    }
        
    .daydeal h2 {
        color: darkgray
    }
    @media screen and (max-width: 990px) {
        .owl-carousel img {
            width: 100% !important;
            height: 350px !important;
        }
    }
    @media screen and (max-width: 700px) {
        .daydeal h2 {
            font-size: 20px;
        }
        .daydeal img {
            height: 120px !important;
        }
        .owl-carousel .article-title {
            font-size: 11px !important
        }
    }
    
    @media screen and (max-width: 650px) {
        .daydeal img {
            width: 100px !important;
            height: 100px !important;
        }
        .img1 img {
            height: 160px;
        }
    }
    
    @media screen and (max-width: 400px) {
        .daydeal h2 {
            font-size: 12px;
        }
    }
</style>

<div class="container-fluid demo-2" style="width:98%">
    <br>
    </br>

    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-1"></div>
                    <h2>Your Favourites For Less.</h2>
                    <blockquote>
                        <p>Discover Our deal of the day.</p>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-2"></div>
                    <h2>Shop With 100%</h2>
                    <blockquote>
                        <p>confidence on KALshop.</p>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-3"></div>
                    <h2>Sales & Deals</h2>
                    <blockquote>
                        <p>Automobile</p>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-4"></div>
                    <h2>Guaranteed Same day DELIVERY</h2>
                    <blockquote>
                        <p>Gadgets & Electronics</p>
                    </blockquote>
                </div>
            </div>

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                    <div class="bg-img bg-img-5"></div>
                    <h2>Don't Starve! order now</h2>
                    <blockquote>
                        <p>food & drinks</p>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- /sl-slider -->
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev">Previous</span>
            <span class="nav-arrow-next">Next</span>
        </nav>
        <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </nav>

    </div>
    <!-- /slider-wrapper -->

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script type="text/javascript">
    $(function() {

        var Page = (function() {

            var $navArrows = $('#nav-arrows'),
                $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
                    onBeforeChange: function(slide, pos) {

                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');

                    }
                }),

                init = function() {

                    initEvents();

                },
                initEvents = function() {

                    // add navigation events
                    $navArrows.children(':last').on('click', function() {

                        slitslider.next();
                        return false;

                    });

                    $navArrows.children(':first').on('click', function() {

                        slitslider.previous();
                        return false;

                    });

                    $nav.each(function(i) {

                        $(this).on('click', function(event) {

                            var $dot = $(this);

                            if (!slitslider.isActive()) {

                                $nav.removeClass('nav-dot-current');
                                $dot.addClass('nav-dot-current');

                            }

                            slitslider.jump(i + 1);
                            return false;

                        });

                    });

                };

            return {
                init: init
            };

        })();

        Page.init();


    });
</script>

<br /><br /><br />

<!-- Div Container For Body Contents-->
<!-- <div class="container-fluid" style="margin:0 auto 0 auto;width:99.999%;"></div> -->
<div class="container-fluid" style="width:98%">

    <div class="section-title">
        <h2 class="title">Featured <span>Products</span></h2>
    </div>

    <div id="owl-carousel-6" class="owl-carousel owl-theme owl-loaded center-owl-nav">

        <div class="item col">
            <a href="#"><img src="wwwroot/img/blouse.jpg" class="img-fluid" alt="5"></a>
            <div class="product-details"><a href="#"><button class="salebutton w-100" id="prod" style="vertical-align:middle"><span>Dress | &#8358;1200</span></button></a> </div>
        </div>

        <div class="item">
            <a href="#"> <img src="wwwroot/img/denim.jpg" class="img-fluid" alt="4"></a>
            <div class="product-details"> <a href="#"><button class="salebutton" style="vertical-align:middle"><span>Denim Jacket | &#8358;11200 </span></button></a> </div>
        </div>
        <div class="item">
            <a href="#"><img src="wwwroot/img/hat.jpg" class="img-fluid" alt="3"></a>
            <div class="product-details"> <a href="#"><button class="salebutton" style="vertical-align:middle"><span>Beautiful Lady| &#8358;1.5mil </span></button></a> </div>
        </div>
        <div class="item">
            <a href=""><img src="wwwroot/img/redcoat.jpg" class="img-fluid" alt="2"></a>
            <div class="product-details"> <a href="#"><button class="salebutton" style="vertical-align:middle"><span>Red Coat | &#8358;15000 </span></button></a> </div>
        </div>
        <div class="item">
            <a href=""><img src="wwwroot/img/trenchcoat.jpg" class="img-fluid" alt="1"></a>
            <div class="product-details"> <a href="#"><button class="salebutton" style="vertical-align:middle"><span>Trench Coat | &#8358;1200 </span></button></a> </div>
        </div>

    </div>
</div>
<!-- <script>
    var prod = document.getElementById("prod");
    var fa = document.getElementById("fa");

    function shopBagAdd() {
        fa.classList.add("fa-shopping-bag")
        fa.style.position = 'relative'
        fa.style.right = '10px'
        fa.style.transition = '0.5s';
    }
    
    function shopBagRemove() {
        fa.classList.remove("fa-shopping-bag")
    }

    prod.addEventListener("mouseenter", shopBagAdd);
    prod.addEventListener("mouseleave", shopBagRemove);

</script> -->

<script src="./wwwroot/owlcarousel/main.js"></script>
<script src="wwwroot/owlcarousel/owl.carousel.min.js"></script>
<script src="wwwroot/owlcarousel/owl.carousel.js"></script>
<script src="wwwroot/owlcarousel/jquery.mousewheel.min.js"></script>
<script type="text/javascript">
    
    // owl.on('mousewheel', '.owl-stage', function(e) {
    //     if (e.deltaY > 0) {
    //         owl.trigger('next.owl');
    //     } else {
    //         owl.trigger('prev.owl');
    //     }
    //     e.preventDefault();
    // });
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 p-0">
            <div id="kashop-section-1" class="kalshop-section index-section">
                <!--hot deal start-->
                <section class="theme-bg text-center text-white" id="">
                    <div class="timer-container">

                        <div class="section-title2 mb-0">
                            <h2 class="title mb-3">Hot Deal Of <span> the week</span></h2>
                            <h4 class="text-white text-capitalize mb-0">Hurry Up Offer ends in:</h4>
                        </div>
                        <div class="py-4">
                            <div id="clockdiv">
                                <div>
                                    <span class="days"></span>
                                    <div class="smalltext">Days</div>
                                </div>
                                <div>
                                    <span class="hours"></span>
                                    <div class="smalltext">Hours</div>
                                </div>
                                <div>
                                    <span class="minutes"></span>
                                    <div class="smalltext">Minutes</div>
                                </div>
                                <div>
                                    <span class="seconds"></span>
                                    <div class="smalltext">Seconds</div>
                                </div>
                            </div>
                        </div>
                        <a href="#"><button class="button1 shopbtn" style="vertical-align:middle;"><span>Shop now </span></button></a>

                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
    initializeClock('clockdiv', deadline);
</script>