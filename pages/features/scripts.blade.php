<script>
    var slug = /[^/]*$/.exec(window.location)[0];

    var ts = new Date().getTime();
    var data = {_: ts};

    Vue.component('feature1', {
        props: ['page'],
        template: '<div><h2 style="margin-top:25px;color:#fff;">@{{ page.json.feature1.headline }}</h2><h5 class="description" style="text-align:left;color:#fff;">@{{ page.json.feature1.message }}</h5></div>'
    });
    Vue.component('feature2', {
        props: ['page'],
        template: '<div><h2 style="margin-bottom:5px;">@{{ page.json.feature2.headline }}</h2><h5 class="description" style="text-align:left;color:#000;">@{{ page.json.feature2.message }}</h5></div>'
    });
    Vue.component('feature3', {
        props: ['page'],
        template: '<div><h2 style="margin-bottom:5px;">@{{ page.json.feature3.headline }}</h2><h5 class="description" style="text-align:left;color:#000;">@{{ page.json.feature3.message }}</h5></div>'
    });
    var page = null;
    var feature1 = new Vue({
        el: '.wrapper',
        data: {
            views: ['feature1', 'feature1', 'feature3'],
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('/api/page/' + slug + '/random', function (json) {
                _this.items = {"items": json};
                page = {"items": json};
            });
        }
    });
</script>