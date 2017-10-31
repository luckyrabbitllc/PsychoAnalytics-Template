<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="main" >
        <div  class="section particles-js bg-gradient-purple">
            <div class="space-50"></div>
            <div class="container text-center">
                <div class="row justify-content-md-center"  align="center">
                    <div class="col-md-12" style="margin-bottom:0px;margin-top:25px;">
                        <h2 class="title" style="width:100%;color:#fff;">
                            Psycho-analyze your <div id="content-1">customers.</div><div id="content-2">content.</div><div id="content-3">competitors.</div>
                        </h2>
                    </div>
                    <div class="col-md-12" align="center">
                       <div>
                           <a href="#" class="btn btn-neutral btn-link btn-round" style="border:1px solid #fff; opacity:0.6;">For Marketers</a>
                           <a class="btn btn-neutral btn-round" href="javascript:void(0)" onclick="scrollToMore()">For Startups</a>
                           <a href="#" class="btn btn-neutral btn-link btn-round" style="border:1px solid #fff; opacity:0.6;">For Journalists</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="more">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div>
                    <h2 class="title">Analyze your content.</h2>
                    <h5 class="description" style="text-align:left;font-weight:300;color:#111;">Track <strong>what your audience likes about your content</strong> in real time. Break it down by topic, emotion, and more. Stop wasting time and resources creating content that doesn't work. Find what does and focus on that.</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://psychoanalytics.s3-us-west-1.amazonaws.com/pages/psychoanalytics/ASrvIgnSWKeYEU4RKhLfOCJsUTvdrQ01LHcpqegG.png" alt="Content Trends" class="img-raised rounded" />
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <img src="https://psychoanalytics.s3-us-west-1.amazonaws.com/pages/psychoanalytics/asexd9JlLeC3C2VvgHGtuilLGrxdm8tXaVSU0QB5.png" alt="Market Research" class="img-raised rounded" />
                </div>
                <div class="col-md-6">
                    <div>
                        <h2 class="title">Analyze your competitors.</h2>
                        <h5 class="description" style="text-align:left;font-weight:300;color:#111;">Get insights into your competitors' strategy with one click. Simply input a URL and PsychoAnalytics will use <b>Natural Language Processing</b> to extract opinions, personality types, estimated age range, values, emotions, and more.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="more">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div>
                        <h2 class="title">Analyze your customers.</h2>
                        <h5 class="description" style="text-align:left;font-weight:300;color:#111;">Are your customers more motivated by fear or ambition?
                            Do they respond better to intellectual reasoning, or an appeal to emotion?
                            PsychoAnalytics helps you identify <b>what inspires each individual customer</b> to action.</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://psychoanalytics.s3-us-west-1.amazonaws.com/pages/psychoanalytics/7n6IDoV4aXu8YMiMSxLCrr1ANBj2gjoA5GkObtsP.png" alt="Customer Psychology" class="img-raised rounded" />
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
                <a href="/get-started" class="btn bg-gradient-purple btn-lg" onclick="mixpanel.track('cta');"><i class="now-ui-icons arrows-1_share-66"></i> Get Started</a>
                <a href="/get-started" class="btn btn-neutral btn-lg" style="background:#fff;color:#222 !important;">View the Docs</a>
            </div>
        </div>
    </div>
</div>