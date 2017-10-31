<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="main" >
        <div class="section bg-gradient-purple"  id="more">
            <div class="container text-center">
                <div class="row justify-content-md-center" style="margin-top:25px;">
                    <div class="col-md-7">
                        <div >
                            <h2 class="title" style="color:#fff;text-align:left;"><br>The power of IBM Watson.</h2>
                            <h5 class="description" style="text-align:left;font-weight:300;color:#fff;">Get deep <b>psychological insights</b> from any web page or text with one click. Simply input a URL and PsychoAnalytics will use IBM Watson's <span style="display:inline-block;"><b>Natural Language Understanding</b></span> to extract opinions, personality types, values, emotions, and more.</h5>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="https://upload.wikimedia.org/wikipedia/en/0/00/IBM_Watson_Logo_2017.png" alt="IBM Watson" class=" rounded" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section" style="background:#f5f5f5;">
            <div class="container text-center">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <img src="https://scrapy.org/img/43-monkeylearn-logo.png" alt="MonkeyLearn" class=" rounded" style="padding-top:40px;" />
                    </div>
                    <div class="col-md-6">
                        <div align="left">
                            <span class="badge badge-default" style="margin-bottom:10px;">Coming Soon</span>
                            <h2 class="title" style="color:#111;text-align:left;margin-bottom:10px;">The flexibility of MonkeyLearn.</h2>
                            <h5 class="description" style="text-align:left;font-weight:300;color:#111;">Create your own machine learning powered analytics app. Simply create a <b>custom module on MonkeyLearn</b> and paste the URL in your settings.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" >
            <div class="container text-center">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <div>
                            <h2 class="title" style="color:#111;text-align:left;"><br>The precision of Mixpanel.</h2>
                            <h5 class="description" style="text-align:left;font-weight:300;color:#111;">All the <b>topics, keywords, and sentiments</b> that your visitors find most appealing will show up directly in your Mixpanel dashboard, so you can see how they impact your business's performance.</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="https://mixpanel.com/wp-content/uploads/2016/09/logo-clear.png" alt="Mixpanel" class=" rounded" style="padding-top:40px;" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Start of Text Cycling -->
<script>
    var divs = $('div[id^="content-"]').hide(),
        i = 0;

    (function cycle() {

        divs.eq(i).fadeIn(400)
            .delay(1500)
            .fadeOut(400, cycle);

        i = ++i % divs.length;

    })();
</script>
<!-- Start of ParticleJS -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#001eff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.93415509907748635,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#00ff3c","opacity":0.90517838682439088,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>

<div class="section bg-gradient-orange" style="box-shadow:0px 0px 60px rgba(0,0,0,0.1);color:#fff;width:100%;">
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
                <h2 class="title">Ready to get started?</h2>
                <h5 class="description" style="color:#fff;font-weight:300;margin-bottom:35px;">Get up and running in 5 minutes or less.</h5>
                <a href="/get-started" class="btn btn-neutral btn-lg" onclick="mixpanel.track('cta');"><i class="now-ui-icons arrows-1_share-66"></i> Get Started</a>
                <a href="/get-started" class="btn btn-neutral btn-simple btn-lg">View the Docs</a>
            </div>
        </div>
    </div>
</div>