<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<!-- CSS Files -->
<link href="/css/bootstrap.min.css" rel="stylesheet" />
<link href="/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
<style>

    .btn-outline {
        border:1px solid royalblue !important;
        background:#fff !important;
        color:royalblue;
    }
    .btn-outline:hover {
        color:#222;
    }
    .btn-secondary {
        background:royalblue !important;
    }
    .btn-secondary-outline {
        border:1px solid royalblue !important;
        color: royalblue !important;
        background:transparent !important;
    }
    .bg-gradient-blue {
        background: royalblue;
        background: -webkit-linear-gradient(to right, royalblue, #00adff) !important;
        background: linear-gradient(to right, royalblue, #00adff) !important;
        color:#fff !important;
    }
    .bg-gradient-orange {
        background: #ff9966;
        background: -webkit-linear-gradient(to top right, #ff5e62, #ff9966);
        background: linear-gradient(to top right, #ff5e62, #ff9966);
    }

    .bg-gradient-multi {
        background: #ff9966;
        background: -webkit-linear-gradient(to top right, #ff5e62, #2dbeff);
        background: linear-gradient(to top right, #ff5e62, #2dbeff);
    }

    .bg-gradient-purple {
        background: #8b69ff;
        background: -webkit-linear-gradient(to top right, #ff35a4, #350090);
        background: linear-gradient(to top right, #ff35a4, #350090);
    }

    .bg-gradient-blue .btn, .bg-gradient-blue .btn {
        color:#fff !important;
        border-color: #fff !important;
    }

    .navbar-transparent #nav-cta {
        background:#fff;
        color:royalblue !important;
    }
    .h1-seo {
        font-weight:400 !important;
    }
    .card {
        border-radius:5px !important;
    }
    .card h4 {
        margin-top:10px !important;
        text-align:center;
    }
    @media screen and (max-width: 991px) {
        .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
            border: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-collapse .navbar .navbar-nav {
            margin-top: 15px !important;
        }
    }
    h1.title {
        font-weight:400 !important;
    }
    h2.title, h3, h4 {
        font-weight:300 !important;
    }

    h1, h2, h3, h4 {
        text-shadow: 0px 2px 13px rgba(0,0,0,0.17) !important;
    }

    .sidebar-collapse .navbar-collapse:before {
        background: none;  /* fallback for old browsers */
    }

    .page-header[filter-color="orange"] {
        background: rgba(44, 44, 44, 0.0);
        background: -webkit-linear-gradient(90deg, rgba(44, 44, 44, 0), rgba(224, 23, 3, 0.6));
        background: -o-linear-gradient(90deg, rgba(44, 44, 44, 0), rgba(224, 23, 3, 0.6));
        background: -moz-linear-gradient(90deg, rgba(44, 44, 44, 0), rgba(224, 23, 3, 0.6));
        background: linear-gradient(0deg, rgba(44, 44, 44, 0), rgba(224, 23, 3, 0.6));
    }
    #disqus_thread {
        padding:15px;
    }

    footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
        left: 0px;
        color:#222;
        background:#fff !important;
    }

    footer a {
        color:#333;
    }
    footer a:hover {
        color:#111;
    }
    #mobile-nav-brand {
        display:none;
    }
    @media screen and (max-width: 991px) {
        #navigation .nav-link:not(.btn) {
            color: royalblue;
            background: #fff;
            margin-bottom: 5px;
            border: none;
            border-radius: 3px !important;
            box-shadow: 0px 7px 18px rgba(0,0,0,0.1);
            text-align: center !important;
        }
        #nav-cta {
            color:#fff !important;
        }
    }
    @media screen and (max-width: 991px) {
        #mobile-nav-brand {
            display:block;
        }
        #navigation .nav-link:not(.btn):hover {
            background:#fff !important;
            color: #222 !important;
        }
        .navbar-transparent #nav-cta {
            color:#fff !important;
        }
        #navigation {
            background: #0e142b !important;box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 120px !important;
        }
    }
    #nav-cta {
        background:#7777dd!important;
        color:#fff !important;
    }
    #articles-index .page-header:before {
        background: none !important;
    }
    #particles-js{
        position:absolute;
        width: 100%;
        height: 100%;
        background-color: #fff;
        background-image: url("");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50% 50%; }
</style>