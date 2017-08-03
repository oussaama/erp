<?php

/* ERPBundle:Front/Examen:index.html.twig */
class __TwigTemplate_33dc494408a32c1a26b2b417adc112a051c9e01c7e264b9800be634359bda10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/Examen:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'secondMenu' => array($this, 'block_secondMenu'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18cac344877ababbc7d1123b52b16eb8319ae4e54aa74699694f29343ae99617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18cac344877ababbc7d1123b52b16eb8319ae4e54aa74699694f29343ae99617->enter($__internal_18cac344877ababbc7d1123b52b16eb8319ae4e54aa74699694f29343ae99617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Examen:index.html.twig"));

        $__internal_ec467b856e9d10738991e7ec6fc804cce922e5c66a282d82048c3604bc0ee7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec467b856e9d10738991e7ec6fc804cce922e5c66a282d82048c3604bc0ee7e4->enter($__internal_ec467b856e9d10738991e7ec6fc804cce922e5c66a282d82048c3604bc0ee7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Examen:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18cac344877ababbc7d1123b52b16eb8319ae4e54aa74699694f29343ae99617->leave($__internal_18cac344877ababbc7d1123b52b16eb8319ae4e54aa74699694f29343ae99617_prof);

        
        $__internal_ec467b856e9d10738991e7ec6fc804cce922e5c66a282d82048c3604bc0ee7e4->leave($__internal_ec467b856e9d10738991e7ec6fc804cce922e5c66a282d82048c3604bc0ee7e4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bb42932b24f847cd80381cc929b4f1080927cea390052b04f41e2840ec1bc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb42932b24f847cd80381cc929b4f1080927cea390052b04f41e2840ec1bc7d->enter($__internal_9bb42932b24f847cd80381cc929b4f1080927cea390052b04f41e2840ec1bc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1af2d05ce2dfe9bc9919d7bc521fa9bc9714a479ae3a808942e06b8959ccb269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af2d05ce2dfe9bc9919d7bc521fa9bc9714a479ae3a808942e06b8959ccb269->enter($__internal_1af2d05ce2dfe9bc9919d7bc521fa9bc9714a479ae3a808942e06b8959ccb269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Enseignant - Examens";
        
        $__internal_1af2d05ce2dfe9bc9919d7bc521fa9bc9714a479ae3a808942e06b8959ccb269->leave($__internal_1af2d05ce2dfe9bc9919d7bc521fa9bc9714a479ae3a808942e06b8959ccb269_prof);

        
        $__internal_9bb42932b24f847cd80381cc929b4f1080927cea390052b04f41e2840ec1bc7d->leave($__internal_9bb42932b24f847cd80381cc929b4f1080927cea390052b04f41e2840ec1bc7d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34396adbe5b63ccc3c0e16813ce6d19891a56e35e37c2d1b06aa5583d4df0dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34396adbe5b63ccc3c0e16813ce6d19891a56e35e37c2d1b06aa5583d4df0dfb->enter($__internal_34396adbe5b63ccc3c0e16813ce6d19891a56e35e37c2d1b06aa5583d4df0dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06564b6127e17f343c0665ab9c96814926ace260bf2d696f9b480f294afe9179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06564b6127e17f343c0665ab9c96814926ace260bf2d696f9b480f294afe9179->enter($__internal_06564b6127e17f343c0665ab9c96814926ace260bf2d696f9b480f294afe9179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <script type=\"text/javascript\">
        //<![CDATA[
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-92643213-2']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        (function (b) {
            (function (a) {
                \"__CF\" in b && \"DJS\" in b.__CF ? b.__CF.DJS.push(a) : \"addEventListener\" in b ? b.addEventListener(\"load\", a, !1) : b.attachEvent(\"onload\", a)
            })(function () {
                \"FB\" in b && \"Event\" in FB && \"subscribe\" in FB.Event && (FB.Event.subscribe(\"edge.create\", function (a) {
                    _gaq.push([\"_trackSocial\", \"facebook\", \"like\", a])
                }), FB.Event.subscribe(\"edge.remove\", function (a) {
                    _gaq.push([\"_trackSocial\", \"facebook\", \"unlike\", a])
                }), FB.Event.subscribe(\"message.send\", function (a) {
                    _gaq.push([\"_trackSocial\", \"facebook\", \"send\", a])
                }));
                \"twttr\" in b && \"events\" in twttr && \"bind\" in twttr.events && twttr.events.bind(\"tweet\", function (a) {
                    if (a) {
                        var b;
                        if (a.target && a.target.nodeName == \"IFRAME\")a:{
                            if (a = a.target.src) {
                                a = a.split(\"#\")[0].match(/[^?=&]+=([^&]*)?/g);
                                b = 0;
                                for (var c; c = a[b]; ++b)if (c.indexOf(\"url\") === 0) {
                                    b = unescape(c.split(\"=\")[1]);
                                    break a
                                }
                            }
                            b = void 0
                        }
                        _gaq.push([\"_trackSocial\", \"twitter\", \"tweet\", b])
                    }
                })
            })
        })(window);//]]>
    </script>
    <script type=\"text/javascript\">
        //<![CDATA[
        try {
            if (!window.CloudFlare) {
                var CloudFlare = [{
                    verbose: 0,
                    p: 0,
                    byc: 0,
                    owlid: \"cf\",
                    bag2: 1,
                    mirage2: 0,
                    oracle: 0,
                    paths: {cloudflare: \"/cdn-cgi/nexp/dok3v=1613a3a185/\"},
                    atok: \"82f71ab91e52e9dc6f8d10c6ee544add\",
                    petok: \"07d9b5c669a4fa4a06776c98721e4d32cea870c5-1497805119-1800\",
                    zone: \"themesadmin.com\",
                    rocket: \"0\",
                    apps: {\"ga_key\": {\"ua\": \"UA-92643213-2\", \"ga_bs\": \"2\"}}
                }];
                !function (a, b) {
                    a = document.createElement(\"script\"), b = document.getElementsByTagName(\"script\")[0], a.async = !0, a.src = \"../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d85b614c0f6/cloudflare.min.js\", b.parentNode.insertBefore(a, b)
                }()
            }
        } catch (e) {

        }
        ;
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/css/color/light/color-default.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/css-hamburgers/dist/hamburgers.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        #sidebar {
            margin-top: -4px;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_06564b6127e17f343c0665ab9c96814926ace260bf2d696f9b480f294afe9179->leave($__internal_06564b6127e17f343c0665ab9c96814926ace260bf2d696f9b480f294afe9179_prof);

        
        $__internal_34396adbe5b63ccc3c0e16813ce6d19891a56e35e37c2d1b06aa5583d4df0dfb->leave($__internal_34396adbe5b63ccc3c0e16813ce6d19891a56e35e37c2d1b06aa5583d4df0dfb_prof);

    }

    // line 107
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_652390fdf0485673e1c337bf5cbe3452af0d461af54647f78896c89aca5e5dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652390fdf0485673e1c337bf5cbe3452af0d461af54647f78896c89aca5e5dd1->enter($__internal_652390fdf0485673e1c337bf5cbe3452af0d461af54647f78896c89aca5e5dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_a6d76c97197d5aad9e0cd51c70addb8f485bec78fb78e94ded515405aecce890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d76c97197d5aad9e0cd51c70addb8f485bec78fb78e94ded515405aecce890->enter($__internal_a6d76c97197d5aad9e0cd51c70addb8f485bec78fb78e94ded515405aecce890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 108
        echo "    <div id=\"header-icon\">
        <div class=\"header-width\">
            <div class=\"col-xl-12\">
                <div class=\"menucontainer\">
                    <div class=\"overlapblackbg\"></div>
                    <a id=\"navtoggle\" class=\"animated-arrow\"><span></span></a>
                    <nav id=\"nav\" class=\"topmenu\" role=\"navigation\">
                        <ul class=\"menu-list live-search-list\">
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_index");
        echo "\">
                                    <span class=\"icon fa fa-list header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appsense_index");
        echo "\">
                                    <span class=\"icon fa fa-table header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absences</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
        echo "\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examens</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_index");
        echo "\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Notes</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_a6d76c97197d5aad9e0cd51c70addb8f485bec78fb78e94ded515405aecce890->leave($__internal_a6d76c97197d5aad9e0cd51c70addb8f485bec78fb78e94ded515405aecce890_prof);

        
        $__internal_652390fdf0485673e1c337bf5cbe3452af0d461af54647f78896c89aca5e5dd1->leave($__internal_652390fdf0485673e1c337bf5cbe3452af0d461af54647f78896c89aca5e5dd1_prof);

    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d5327ac563a3035a3026f3f0aace714da5401500b04f8db7182f43d23f4a93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5327ac563a3035a3026f3f0aace714da5401500b04f8db7182f43d23f4a93c->enter($__internal_0d5327ac563a3035a3026f3f0aace714da5401500b04f8db7182f43d23f4a93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85b7d36cbcc1966ee2695187232f4c4e3b44a10b60fe7d033b1e8a5567381cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b7d36cbcc1966ee2695187232f4c4e3b44a10b60fe7d033b1e8a5567381cac->enter($__internal_85b7d36cbcc1966ee2695187232f4c4e3b44a10b60fe7d033b1e8a5567381cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 149
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Examens</a></li>
                <li class=\"breadcrumb-item active\"> index</li>
            </ol>

        </div>

        <div class=\"contain-inner dashboard-v2\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12 col-xl-12 xl-dashboard-v2\">
                        <div class=\"row\">
                            <div class=\"col-md-12 lg-dashboard-v2\">
                                <div class=\"content\">
                                    <div class=\"dashboard-content\">
                                        <div class=\"dashboard-header\">
                                            <h4 class=\"page-content-title float-xs-left\">Liste des examens</h4>
                                            <br><br><br>
                                            <div class=\"row\">
                                                ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 176
            echo "                                                    <div class=\"alert alert-success alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Succès !</strong> ";
            // line 178
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "
                                                ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice2"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 183
            echo "                                                    <div class=\"alert alert-warning alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> ";
            // line 185
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice3"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 189
            echo "                                                    <div class=\"alert alert-danger alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> ";
            // line 191
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                                            </div>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_new");
        echo "\"><button class=\"btn btn-primary site-btn pull-right\" data-target=\"#view-add\" data-toggle=\"modal\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box col-lg-12  col-xs-12 col-xl-12\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\"  class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nom</th>
                                                        <th>Type</th>
                                                        <th>Date examen</th>
                                                        <th>Duree</th>
                                                        <th>Salle</th>
                                                        <th colspan=\"3\">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["examens"] ?? $this->getContext($context, "examens")));
        foreach ($context['_seq'] as $context["_key"] => $context["examen"]) {
            // line 223
            echo "                                                        <tr>
                                                            <td><a href=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_show", array("id" => $this->getAttribute($context["examen"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["examen"], "id", array()), "html", null, true);
            echo "</a></td>
                                                            <td>";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["examen"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                            <td>
                                                                ";
            // line 227
            if (($this->getAttribute($context["examen"], "type", array()) != null)) {
                // line 228
                echo "                                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["examen"], "type", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 230
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun type d'examen affecté !</span>
                                                                ";
            }
            // line 232
            echo "                                                            </td>
                                                            <td>
                                                                ";
            // line 234
            if (($this->getAttribute($context["examen"], "dateExamen", array()) != null)) {
                // line 235
                echo "                                                                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["examen"], "dateExamen", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 237
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucunne date affecté !</span>
                                                                ";
            }
            // line 239
            echo "                                                            </td>
                                                            <td>
                                                                ";
            // line 241
            if (($this->getAttribute($context["examen"], "duree", array()) != null)) {
                // line 242
                echo "                                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["examen"], "duree", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 244
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucunne durée affecté !</span>
                                                                ";
            }
            // line 246
            echo "                                                            </td>
                                                            <td>
                                                                ";
            // line 248
            if (($this->getAttribute($this->getAttribute($context["examen"], "salle", array()), "nom", array()) != null)) {
                // line 249
                echo "                                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["examen"], "salle", array()), "nom", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 251
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucunne salle à afficher !</span>
                                                                ";
            }
            // line 253
            echo "                                                            </td>
                                                            <td> <a href=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_edit", array("id" => $this->getAttribute($context["examen"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-warning btn-xs \">Modifier</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_show", array("id" => $this->getAttribute($context["examen"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs \">Détails</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_note", array("id" => $this->getAttribute($context["examen"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-danger btn-xs \">Affecter note</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_deleteExamen", array("id" => $this->getAttribute($context["examen"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-danger btn-xs \">Supprimer</button></a>
                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_85b7d36cbcc1966ee2695187232f4c4e3b44a10b60fe7d033b1e8a5567381cac->leave($__internal_85b7d36cbcc1966ee2695187232f4c4e3b44a10b60fe7d033b1e8a5567381cac_prof);

        
        $__internal_0d5327ac563a3035a3026f3f0aace714da5401500b04f8db7182f43d23f4a93c->leave($__internal_0d5327ac563a3035a3026f3f0aace714da5401500b04f8db7182f43d23f4a93c_prof);

    }

    // line 281
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ec7f86d145ea68702a9243819ce148f34594a6ac0affc48d585e3ece2ddeb82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7f86d145ea68702a9243819ce148f34594a6ac0affc48d585e3ece2ddeb82a->enter($__internal_ec7f86d145ea68702a9243819ce148f34594a6ac0affc48d585e3ece2ddeb82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_af84fb7f98293e1b339c5c358a36511c67c3b80d24302e9715b42a0ba07312c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af84fb7f98293e1b339c5c358a36511c67c3b80d24302e9715b42a0ba07312c8->enter($__internal_af84fb7f98293e1b339c5c358a36511c67c3b80d24302e9715b42a0ba07312c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 282
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: Routing.generate('admin_delete_compte',{'id':id}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/employee\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$('.edit-Examen').click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('examen_edit',{'id':id}),
                success:function(){
                    \$('#update-examen-form').html('<img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loader.gif"), "html", null, true);
        echo "\" />');
                },
                complete: function(data) {
                    \$('#update-examen-form').html(data.responseText)
                }
            });
        });
    </script>
";
        
        $__internal_af84fb7f98293e1b339c5c358a36511c67c3b80d24302e9715b42a0ba07312c8->leave($__internal_af84fb7f98293e1b339c5c358a36511c67c3b80d24302e9715b42a0ba07312c8_prof);

        
        $__internal_ec7f86d145ea68702a9243819ce148f34594a6ac0affc48d585e3ece2ddeb82a->leave($__internal_ec7f86d145ea68702a9243819ce148f34594a6ac0affc48d585e3ece2ddeb82a_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/Examen:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 331,  663 => 305,  659 => 304,  655 => 303,  651 => 302,  647 => 301,  643 => 300,  639 => 299,  635 => 298,  631 => 297,  627 => 296,  623 => 295,  619 => 294,  615 => 293,  611 => 292,  607 => 291,  603 => 290,  599 => 289,  595 => 288,  591 => 287,  587 => 286,  583 => 285,  579 => 284,  575 => 283,  570 => 282,  561 => 281,  538 => 267,  528 => 263,  522 => 260,  516 => 257,  510 => 254,  507 => 253,  503 => 251,  497 => 249,  495 => 248,  491 => 246,  487 => 244,  481 => 242,  479 => 241,  475 => 239,  471 => 237,  465 => 235,  463 => 234,  459 => 232,  455 => 230,  449 => 228,  447 => 227,  442 => 225,  436 => 224,  433 => 223,  429 => 222,  408 => 204,  396 => 194,  387 => 191,  383 => 189,  378 => 188,  369 => 185,  365 => 183,  361 => 182,  358 => 181,  349 => 178,  345 => 176,  341 => 175,  313 => 149,  304 => 148,  281 => 135,  272 => 129,  263 => 123,  254 => 117,  243 => 108,  234 => 107,  210 => 93,  206 => 92,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseFront.html.twig' %}
{% block title %}Enseignant - Examens{% endblock %}
{% block stylesheets %}
    <script type=\"text/javascript\">
        //<![CDATA[
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-92643213-2']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        (function (b) {
            (function (a) {
                \"__CF\" in b && \"DJS\" in b.__CF ? b.__CF.DJS.push(a) : \"addEventListener\" in b ? b.addEventListener(\"load\", a, !1) : b.attachEvent(\"onload\", a)
            })(function () {
                \"FB\" in b && \"Event\" in FB && \"subscribe\" in FB.Event && (FB.Event.subscribe(\"edge.create\", function (a) {
                    _gaq.push([\"_trackSocial\", \"facebook\", \"like\", a])
                }), FB.Event.subscribe(\"edge.remove\", function (a) {
                    _gaq.push([\"_trackSocial\", \"facebook\", \"unlike\", a])
                }), FB.Event.subscribe(\"message.send\", function (a) {
                    _gaq.push([\"_trackSocial\", \"facebook\", \"send\", a])
                }));
                \"twttr\" in b && \"events\" in twttr && \"bind\" in twttr.events && twttr.events.bind(\"tweet\", function (a) {
                    if (a) {
                        var b;
                        if (a.target && a.target.nodeName == \"IFRAME\")a:{
                            if (a = a.target.src) {
                                a = a.split(\"#\")[0].match(/[^?=&]+=([^&]*)?/g);
                                b = 0;
                                for (var c; c = a[b]; ++b)if (c.indexOf(\"url\") === 0) {
                                    b = unescape(c.split(\"=\")[1]);
                                    break a
                                }
                            }
                            b = void 0
                        }
                        _gaq.push([\"_trackSocial\", \"twitter\", \"tweet\", b])
                    }
                })
            })
        })(window);//]]>
    </script>
    <script type=\"text/javascript\">
        //<![CDATA[
        try {
            if (!window.CloudFlare) {
                var CloudFlare = [{
                    verbose: 0,
                    p: 0,
                    byc: 0,
                    owlid: \"cf\",
                    bag2: 1,
                    mirage2: 0,
                    oracle: 0,
                    paths: {cloudflare: \"/cdn-cgi/nexp/dok3v=1613a3a185/\"},
                    atok: \"82f71ab91e52e9dc6f8d10c6ee544add\",
                    petok: \"07d9b5c669a4fa4a06776c98721e4d32cea870c5-1497805119-1800\",
                    zone: \"themesadmin.com\",
                    rocket: \"0\",
                    apps: {\"ga_key\": {\"ua\": \"UA-92643213-2\", \"ga_bs\": \"2\"}}
                }];
                !function (a, b) {
                    a = document.createElement(\"script\"), b = document.getElementsByTagName(\"script\")[0], a.async = !0, a.src = \"../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d85b614c0f6/cloudflare.min.js\", b.parentNode.insertBefore(a, b)
                }()
            }
        } catch (e) {

        }
        ;
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap/dist/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-material-menu/css/color/light/color-default.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/css-hamburgers/dist/hamburgers.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/morris.js/morris.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <style>
        #sidebar {
            margin-top: -4px;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
{% endblock %}
{% block secondMenu %}
    <div id=\"header-icon\">
        <div class=\"header-width\">
            <div class=\"col-xl-12\">
                <div class=\"menucontainer\">
                    <div class=\"overlapblackbg\"></div>
                    <a id=\"navtoggle\" class=\"animated-arrow\"><span></span></a>
                    <nav id=\"nav\" class=\"topmenu\" role=\"navigation\">
                        <ul class=\"menu-list live-search-list\">
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('cour_index') }}\">
                                    <span class=\"icon fa fa-list header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('appsense_index') }}\">
                                    <span class=\"icon fa fa-table header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absences</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('examen_index') }}\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examens</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('note_index') }}\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Notes</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block body %}
    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Examens</a></li>
                <li class=\"breadcrumb-item active\"> index</li>
            </ol>

        </div>

        <div class=\"contain-inner dashboard-v2\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12 col-xl-12 xl-dashboard-v2\">
                        <div class=\"row\">
                            <div class=\"col-md-12 lg-dashboard-v2\">
                                <div class=\"content\">
                                    <div class=\"dashboard-content\">
                                        <div class=\"dashboard-header\">
                                            <h4 class=\"page-content-title float-xs-left\">Liste des examens</h4>
                                            <br><br><br>
                                            <div class=\"row\">
                                                {% for flashMessage in app.session.flashbag.get('notice') %}
                                                    <div class=\"alert alert-success alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Succès !</strong> {{ flashMessage }}
                                                    </div>
                                                {% endfor %}

                                                {% for flashMessage in app.session.flashbag.get('notice2') %}
                                                    <div class=\"alert alert-warning alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> {{ flashMessage }}
                                                    </div>
                                                {% endfor %}
                                                {% for flashMessage in app.session.flashbag.get('notice3') %}
                                                    <div class=\"alert alert-danger alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> {{ flashMessage }}
                                                    </div>
                                                {% endfor %}
                                            </div>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"{{ path('examen_new') }}\"><button class=\"btn btn-primary site-btn pull-right\" data-target=\"#view-add\" data-toggle=\"modal\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box col-lg-12  col-xs-12 col-xl-12\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\"  class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nom</th>
                                                        <th>Type</th>
                                                        <th>Date examen</th>
                                                        <th>Duree</th>
                                                        <th>Salle</th>
                                                        <th colspan=\"3\">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for examen in examens %}
                                                        <tr>
                                                            <td><a href=\"{{ path('examen_show', { 'id': examen.id }) }}\">{{ examen.id }}</a></td>
                                                            <td>{{ examen.matiere.nom }}</td>
                                                            <td>
                                                                {% if examen.type  != NULL%}
                                                                    {{ examen.type}}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun type d'examen affecté !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td>
                                                                {% if examen.dateExamen != NULL%}
                                                                    {{ examen.dateExamen|date('Y-m-d H:i:s') }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucunne date affecté !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td>
                                                                {% if examen.duree  != NULL%}
                                                                    {{ examen.duree}}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucunne durée affecté !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td>
                                                                {% if examen.salle.nom  != null %}
                                                                    {{ examen.salle.nom }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucunne salle à afficher !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td> <a href=\"{{ path('examen_edit',{'id':examen.id}) }}\"><button type=\"button\" class=\"btn btn-outline-warning btn-xs \">Modifier</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"{{ path('examen_show', { 'id': examen.id }) }}\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs \">Détails</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"{{ path('examen_note',{'id':examen.id}) }}\"><button type=\"button\" class=\"btn btn-outline-danger btn-xs \">Affecter note</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"{{ path('examen_deleteExamen', { 'id': examen.id }) }}\"><button type=\"button\" class=\"btn btn-outline-danger btn-xs \">Supprimer</button></a>
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block scripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/tether/dist/js/tether.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/screenfull.js/dist/screenfull.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/raphael/raphael.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/morris.js/morris.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/moment/min/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/owl.carousel/dist/owl.carousel.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>

    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: Routing.generate('admin_delete_compte',{'id':id}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/employee\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$('.edit-Examen').click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('examen_edit',{'id':id}),
                success:function(){
                    \$('#update-examen-form').html('<img src=\"{{ asset('loader.gif') }}\" />');
                },
                complete: function(data) {
                    \$('#update-examen-form').html(data.responseText)
                }
            });
        });
    </script>
{% endblock %}











", "ERPBundle:Front/Examen:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/Examen/index.html.twig");
    }
}
