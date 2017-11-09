<body class="index-page sidebar-collapse">
<div id="startup_engine_nav_container"></div>
<div class="wrapper">
    <div class="main" >
        <div  class="section particles-js bg-gradient-purple">
            <div class="space-50"></div>
            <div class="container text-center">
                <div class="row justify-content-md-center"  align="center">
                    <heading
                            v-for="item in items"
                            v-bind:page="item"
                            v-bind:key="item.id"
                            v-bind:href="item.slug">
                    </heading>
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