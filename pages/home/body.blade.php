<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="main" >
        <div  class="section particles-js bg-gradient-purple">
            <div class="space-50"></div>
            <div class="container text-center">
                <div class="row justify-content-md-center"  align="center">
                    <div class="col-md-12" style="margin-bottom:0px;margin-top:25px;">
                        <h2 class="title" style="width:100%;color:#fff;margin-bottom: 0px;text-align: left;">
                            Psycho-analyze your <div id="content-1">customers.</div><div id="content-2">content.</div><div id="content-3">competitors.</div>
                        </h2>
                    </div>
                    <div class="col-md-12" align="center">
                       <div id="options">
                           <?php /* <a href="/marketers" class="btn btn-neutral btn-simple btn-round" style="border:1px solid #fff;">For Marketers</a> */?>
                           <a class="btn btn-neutral btn-simple btn-round" href="javascript:void(0)" onclick="scrollToMore()">Learn More</a>
                               <?php /* <a href="/journalists" class="btn btn-neutral btn-simple btn-round" style="border:1px solid #fff;">For Journalists</a>*/?>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section"  id="more">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div id="feature1">
                        <feature1
                                v-for="item in items"
                                v-bind:page="item"
                                v-bind:key="item.id"
                                v-bind:href="item.slug">
                        </feature1>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://psychoanalytics.s3-us-west-1.amazonaws.com/pages/psychoanalytics/asexd9JlLeC3C2VvgHGtuilLGrxdm8tXaVSU0QB5.png" alt="Market Research" class="img-raised rounded" />
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="more" style="background:#f5f5f5;">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <img src="https://psychoanalytics.s3-us-west-1.amazonaws.com/pages/psychoanalytics/ASrvIgnSWKeYEU4RKhLfOCJsUTvdrQ01LHcpqegG.png" alt="Content Trends" class="img-raised rounded" />
                </div>
                <div class="col-md-6">
                    <div id="feature2" style="margin-top:25px;">
                        <feature2
                                v-for="item in items"
                                v-bind:page="item"
                                v-bind:key="item.id"
                                v-bind:href="item.slug">
                        </feature2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="more">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div id="feature3"  style="margin-top:25px;">
                        <feature3
                                v-for="item in items"
                                v-bind:page="item"
                                v-bind:key="item.id"
                                v-bind:href="item.slug">
                        </feature3>
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
                <a href="/get-started" class="btn btn-neutral btn-lg" onclick="mixpanel.track('cta');"><i class="now-ui-icons arrows-1_share-66"></i> Get Started</a>
                <a href="/get-started" class="btn btn-neutral btn-simple btn-lg">View the Docs</a>
            </div>
        </div>
    </div>
</div>