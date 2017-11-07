<script>
    var slug = /[^/]*$/.exec(window.location)[0];

    Vue.component('feature1', {
        props: ['page'],
        template: '<div><h2 style="color:#fff;margin-top:25px;">@{{ page.json.feature1.headline }}</h2><h5 class="description" style="color:#fff;text-align:left;">@{{ page.json.feature1.message }}</h5></div>'
    });

    var page = null;
    var feature1 = new Vue({
        el: '#feature1',
        data: {
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('http://localhost:8000/api/page/' + slug + '/random', function (json) {
                _this.items = {"items": json};
                page = {"items": json};
                console.log(json);
            });
        }
    });

    Vue.component('feature2', {
        props: ['page'],
        template: '<div><h2 style="margin-bottom:5px;">@{{ page.json.feature2.headline }}</h2><h5 class="description" style="text-align:left;color:#000;">@{{ page.json.feature2.message }}</h5></div>'
    });
    var feature2 = new Vue({
        el: '#feature2',
        data: {
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('http://localhost:8000/api/page/' + slug + '/random', function (json) {
                _this.items = {"items": json};
                console.log(json);
            });
        }
    });

    Vue.component('feature3', {
        props: ['page'],
        template: '<div><h2 style="margin-bottom:5px;">@{{ page.json.feature3.headline }}</h2><h5 class="description" style="text-align:left;color:#000;">@{{ page.json.feature3.message }}</h5></div>'
    });
    var feature2 = new Vue({
        el: '#feature3',
        data: {
            items: null
        },
        created: function () {
            var _this = this;
            $.getJSON('http://localhost:8000/api/page/' + slug + '/random', function (json) {
                _this.items = {"items": json};
                console.log(json);
            });
        }
    });
</script>