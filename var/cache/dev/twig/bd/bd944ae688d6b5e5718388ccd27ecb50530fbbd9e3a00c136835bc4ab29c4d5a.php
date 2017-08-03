<?php

/* ERPBundle:Front/etudiant:index.html.twig */
class __TwigTemplate_f047fa93735573d62e5bd807db8ee8ac2dd27e799fc9a7d704a1fd4cba96fe7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/etudiant:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_cc7c1a2e83ee417769d0e23435711a962751a8c341f024b439c97facfe3ee1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7c1a2e83ee417769d0e23435711a962751a8c341f024b439c97facfe3ee1ce->enter($__internal_cc7c1a2e83ee417769d0e23435711a962751a8c341f024b439c97facfe3ee1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:index.html.twig"));

        $__internal_9389f9b67ce4b5b33ecf84ed1957e26aef872e8c06ef759ef77c8196f5760829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9389f9b67ce4b5b33ecf84ed1957e26aef872e8c06ef759ef77c8196f5760829->enter($__internal_9389f9b67ce4b5b33ecf84ed1957e26aef872e8c06ef759ef77c8196f5760829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc7c1a2e83ee417769d0e23435711a962751a8c341f024b439c97facfe3ee1ce->leave($__internal_cc7c1a2e83ee417769d0e23435711a962751a8c341f024b439c97facfe3ee1ce_prof);

        
        $__internal_9389f9b67ce4b5b33ecf84ed1957e26aef872e8c06ef759ef77c8196f5760829->leave($__internal_9389f9b67ce4b5b33ecf84ed1957e26aef872e8c06ef759ef77c8196f5760829_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea451f58c83727a7b14c6fb9ca824d4b76be0d131ccd941379d3ef37d03c0b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea451f58c83727a7b14c6fb9ca824d4b76be0d131ccd941379d3ef37d03c0b5e->enter($__internal_ea451f58c83727a7b14c6fb9ca824d4b76be0d131ccd941379d3ef37d03c0b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1e6e5833f527fd9fbcbb3b81ebea93428f9d9769df530d0bd450f5449bcd5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e6e5833f527fd9fbcbb3b81ebea93428f9d9769df530d0bd450f5449bcd5ce->enter($__internal_f1e6e5833f527fd9fbcbb3b81ebea93428f9d9769df530d0bd450f5449bcd5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Index";
        
        $__internal_f1e6e5833f527fd9fbcbb3b81ebea93428f9d9769df530d0bd450f5449bcd5ce->leave($__internal_f1e6e5833f527fd9fbcbb3b81ebea93428f9d9769df530d0bd450f5449bcd5ce_prof);

        
        $__internal_ea451f58c83727a7b14c6fb9ca824d4b76be0d131ccd941379d3ef37d03c0b5e->leave($__internal_ea451f58c83727a7b14c6fb9ca824d4b76be0d131ccd941379d3ef37d03c0b5e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87f904c8ea5a5d45144e6765e15b593d3e50ca82d6bba97133b97ea33ab351f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f904c8ea5a5d45144e6765e15b593d3e50ca82d6bba97133b97ea33ab351f1->enter($__internal_87f904c8ea5a5d45144e6765e15b593d3e50ca82d6bba97133b97ea33ab351f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d5d4eb96aa48f32a89c21ffe4872a5738ad38316fd76914601b58a563f177cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d4eb96aa48f32a89c21ffe4872a5738ad38316fd76914601b58a563f177cd5->enter($__internal_d5d4eb96aa48f32a89c21ffe4872a5738ad38316fd76914601b58a563f177cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

        };
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/css/color/light/color-default.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/css-hamburgers/dist/hamburgers.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/weather-icons/css/weather-icons.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/weather-icons/css/weather-icons-wind.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/rickshaw/rickshaw.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>





";
        
        $__internal_d5d4eb96aa48f32a89c21ffe4872a5738ad38316fd76914601b58a563f177cd5->leave($__internal_d5d4eb96aa48f32a89c21ffe4872a5738ad38316fd76914601b58a563f177cd5_prof);

        
        $__internal_87f904c8ea5a5d45144e6765e15b593d3e50ca82d6bba97133b97ea33ab351f1->leave($__internal_87f904c8ea5a5d45144e6765e15b593d3e50ca82d6bba97133b97ea33ab351f1_prof);

    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        $__internal_addb8c89a6de7c10d6102e74e6a3a9a78e46fb8019045fd32f0d4ac4af27aa6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addb8c89a6de7c10d6102e74e6a3a9a78e46fb8019045fd32f0d4ac4af27aa6b->enter($__internal_addb8c89a6de7c10d6102e74e6a3a9a78e46fb8019045fd32f0d4ac4af27aa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc63f8211139f397a12b100bb0657be7bd3ae206747a443bc49357adbd0c6b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc63f8211139f397a12b100bb0657be7bd3ae206747a443bc49357adbd0c6b93->enter($__internal_dc63f8211139f397a12b100bb0657be7bd3ae206747a443bc49357adbd0c6b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Dashboard</h2>
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                <li class=\"breadcrumb-item active\">Dashboard 2</li>
            </ol>
        </div>

        <div class=\"contain-inner dashboard-v1\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Traffic views</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box text-xs-center\">
                            <div class=\"traffic-chart\">
                                <div id=\"rickshaw-realtime_y_axis\"></div>
                                <div id=\"rickshaw-realtime\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"data_widgets_block\">
                                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 data_widgets_box_block\">
                                        <div class=\"data_widgets_block\">
                                            <div class=\"data_widgets_box data_success\">
                                                <div class=\"data_widgets_contain\">
                                                    <div class=\"float-xs-left data_widgets_info\">
                                                        <div class=\"data_widgets_icon\">
                                                            <i class=\"fa fa-eye\"></i>
                                                        </div>
                                                        <h5 class=\"data_widgets_count\">1500</h5>
                                                        <h5 class=\"data_widgets_title\">Visitors</h5>
                                                    </div>
                                                    <div class=\"data_progress float-xs-right\">
                                                        <div class=\"circle-bar\" id=\"circle-progressbar1\"
                                                             data-plugin=\"progressbar\" data-type=\"Circle\"
                                                             data-duration=\"3400\" data-stroke-width=\"6\"
                                                             data-color=\"#5cb85c\" data-trail-color=\"#ddd\"
                                                             data-animate=\"0.8\" data-svg-style=\"null\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-8 col-lg-6 col-md-6 col-sm-12 col-xs-12 data_widgets_box_block\">
                                        <div class=\"data_widgets_block\">
                                            <div class=\"data_widgets_box data_success\">
                                                <div class=\"data_widgets_contain\">
                                                    <div class=\"striped-progress-bar\">
                                                        <h6>Today</h6>
                                                        <progress
                                                                class=\"progress progress-striped progress-info\"
                                                                value=\"55\" max=\"100\"></progress>
                                                        <h6>Yesterday</h6>
                                                        <progress
                                                                class=\"progress progress-striped progress-danger\"
                                                                value=\"75\" max=\"100\"></progress>
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
                <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-card-margin\">
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"card card-primary dashboard-card-box text-xs-center\">
                                <div class=\"card-block\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4\">
                                            <p>Mail</p>
                                            <span>6,432</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <p>Storage</p>
                                            <span>91%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <i class=\"fa fa-envelope fa-5x\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"card card-success dashboard-card-box text-xs-center\">
                                <div class=\"card-block\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4\">
                                            <p>Tasks</p>
                                            <span>7,245</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <p>Storage</p>
                                            <span>59%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <i class=\"fa fa-tasks fa-5x\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"card card-warning dashboard-card-box text-xs-center\">
                                <div class=\"card-block\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4\">
                                            <p>Space</p>
                                            <span>97.8%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <p>Remain</p>
                                            <span>2.2%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <i class=\"fa fa-archive fa-5x\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"card card-danger dashboard-card-box text-xs-center\">
                                <div class=\"card-block\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4\">
                                            <p>Outlay</p>
                                            <span>1,943k</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <p>Storage</p>
                                            <span>75%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <i class=\"fa fa-folder-open-o fa-5x\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content clock-content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Clock time</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div onload=\"CoolClock.findAndCreateClocks()\" class=\"text-xs-center\">
                                <canvas class=\"CoolClock:classic\"></canvas>
                            </div>
                            <div class=\"clock-section\">
                                <div class=\"col-xs-3\">
                                    <span class=\"pe-7s-clock text-white\"></span>
                                    <p class=\"text-white\">Clock</p>
                                </div>
                                <div class=\"col-xs-3\">
                                    <span class=\"pe-7s-alarm\"></span>
                                    <p>Alarm</p>
                                </div>
                                <div class=\"col-xs-3\">
                                    <span class=\"pe-7s-timer\"></span>
                                    <p>Timer</p>
                                </div>
                                <div class=\"col-xs-3\">
                                    <span class=\"pe-7s-wristwatch\"></span>
                                    <p>Watch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"overlay-box-shadow\">
                        <div class=\"icon-plus-overlay\">
                            <img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/flower.jpg"), "html", null, true);
        echo "\" alt=\"images\">
                            <div class=\"icon-overlay-text\">
                                <div class=\"text-overlay-wrapper\">
                                    <div class=\"text-overlay-description\">
                                        <p>
                                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                        </p>
                                        <hr>
                                        <hr>
                                        <p class=\"set2\">
                                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"overlay-box-title\">
                            <h4 class=\"page-content-title\">Flower</h4>
                            <div class=\"widget-footer\">
                                <div class=\"row\">
                                    <div class=\"col-xs-8\">
                                        <div class=\"widget-icon flower-icon-dashboard\">
                                            <a href=\"#\" class=\"text-xs-center icon-spacing\">
                                                <i class=\"icon icon_like\"></i><span>47</span>
                                            </a>
                                            <a href=\"#\" class=\"text-xs-center icon-spacing\">
                                                <i class=\"icon icon_comment_alt\"></i><span>85</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-4\">
                                        <div class=\"text-xs-right\">
                                            <button class=\"btn btn-primary flat-buttons site-btn m-0\">View
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content content-blockquote\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Message</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"image-blockquote alert-warning\">
                                <div class=\"img-blockquote\">
                                    <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/profile.jpg"), "html", null, true);
        echo "\" alt=\"image\"></div>
                                <blockquote>
                                    <p class=\"text-xs-center\">One morning, when Gregor Samsa woke from troubled
                                        dreams, he found himself.</p>
                                    <div class=\"border-blockquote\"></div>
                                    <h5 class=\"text-xs-center\">Shane Handcomb</h5>
                                    <h6 class=\"text-xs-center\">Web Developer</h6>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"dashboard-header\">
                                    <h4 class=\"page-content-title float-xs-left\">Monthly stock</h4>
                                    <div class=\"dashboard-action\">
                                        <ul class=\"right-action float-xs-right\">
                                            <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                          aria-hidden=\"true\"><span
                                                            class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                            <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                            class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"dashboard-box\">
                                    <div id=\"time-events\" class=\"chart-height\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"weather-background-image\">
                        <div class=\"row\">
                            <div class=\"col-xs-6 weather-city\">
                                <h1>London</h1>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"float-xs-right weather-time\">
                                    <h3>Today</h3>
                                    <h3>21:35 PM</h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"weather-icon text-xs-center\">
                                    <div class=\"weather-icon-center text-xs-center\">
                                        <i class=\"wi wi-sleet\"></i>
                                        <i class=\"wi wi-day-sunny fa fa-spin\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"weather-icon-title\">
                                    <i class=\"wi wi-solar-eclipse\"></i>
                                    <h3>Weather</h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-3 weather-width\">
                                <div class=\"weather-left-text\">
                                    <h1>22°</h1>
                                    <span>Monday 15<sup>th</sup></span>
                                </div>
                            </div>
                            <div class=\"col-xs-2 weather-width\">
                                <div class=\"weather-left-icon\">
                                    <i class=\"wi wi-day-cloudy\"></i>
                                    <span>3mph/65°</span>
                                </div>
                            </div>
                            <div class=\"col-xs-7 weather-day-width\">
                                <ul class=\"weather-days\">
                                    <li>
                                        <h4>Tue</h4>
                                        <i class=\"wi wi-cloudy\"></i>
                                        <span>21°</span>
                                    </li>
                                    <li>
                                        <h4>Wed</h4>
                                        <i class=\"wi wi-lightning\"></i>
                                        <span>20°</span>
                                    </li>
                                    <li>
                                        <h4>Thu</h4>
                                        <i class=\"wi wi-night-alt-cloudy\"></i>
                                        <span>22°</span>
                                    </li>
                                    <li>
                                        <h4>Fri</h4>
                                        <i class=\"wi wi-night-clear\"></i>
                                        <span>23°</span>
                                    </li>
                                    <li>
                                        <h4>Sat</h4>
                                        <i class=\"wi wi-day-sunny\"></i>
                                        <span>19°</span>
                                    </li>
                                    <li>
                                        <h4>Sun</h4>
                                        <i class=\"wi wi-night-alt-sleet-storm\"></i>
                                        <span>24°</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"social-icons-margin\">
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-twitter\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>5.7k</p>
                                            <span>Followers</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-twitter float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-googleplus\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>2.6k</p>
                                            <span>connect</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-google float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-dribbble\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>5.3k</p>
                                            <span>Followers</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-dribbble float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-facebook\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>8.3k</p>
                                            <span>Like</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-facebook float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-skype\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>4.4k</p>
                                            <span>Join</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-skype float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-instagram\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>5.9k</p>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-instagram float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Contact details</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"cover-widget\">
                                <div class=\"cover-widget-detail\">
                                    <div class=\"profile-image\">
                                        <img src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image8-profile.jpg"), "html", null, true);
        echo "\"
                                             alt=\"tag image\">
                                    </div>
                                    <div class=\"text-xs-center text-secondary\">
                                        <h4 class=\"text-secondary\">Krayon Jin</h4>
                                        <span>Designer</span>
                                        <button class=\"btn btn-primary flat-buttons\">Change profile</button>
                                    </div>
                                </div>
                                <div class=\"social-icon-box\">
                                    <div class=\"row m-0\">
                                        <div class=\"col-xs-6 col-sm-3 p-0\">
                                            <a href=\"#\"
                                               class=\"text-xs-center social-icon-widget social-facebook\">
                                                <i class=\"fa fa-facebook\"></i>
                                                <span>344</span>
                                            </a>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-3 p-0\">
                                            <a href=\"#\"
                                               class=\"text-xs-center social-icon-widget social-googleplus\">
                                                <i class=\"fa fa-google-plus\"></i>
                                                <span>450</span>
                                            </a>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-3 p-0\">
                                            <a href=\"#\"
                                               class=\"text-xs-center social-icon-widget social-twitter\">
                                                <i class=\"fa fa-twitter\"></i>
                                                <span>532</span>
                                            </a>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-3 p-0\">
                                            <a href=\"#\"
                                               class=\"text-xs-center social-icon-widget social-linkedin\">
                                                <i class=\"fa fa-linkedin\"></i>
                                                <span>753</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Contact details</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"basic_table basic_table_responsive table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>0</td>
                                        <td>Edmund</td>
                                        <td>Edmund@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Mark@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Larry</td>
                                        <td>Larry@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Harvinder</td>
                                        <td>Harvinder@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Terry</td>
                                        <td>Terry@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Jacob</td>
                                        <td>Jacob@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nicky</td>
                                        <td>Nicky@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>James</td>
                                        <td>James@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Michael</td>
                                        <td>Michael@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Ricky</td>
                                        <td>Ricky@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row dashboard-margin-bottom\">
                <div class=\"col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Poll activity</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box text-xs-center\">
                            <div class=\"btn-group btn-group-icon\" data-toggle=\"buttons\">
                                <button type=\"button\" class=\"btn btn-primary flat-buttons\">Week</button>
                                <button type=\"button\" class=\"btn btn-primary flat-buttons\">Months</button>
                                <button type=\"button\" class=\"btn btn-primary flat-buttons\">Year</button>
                            </div>
                            <div id=\"donut-color\" class=\"poll-height\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content testimonial-dashboard-v1\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Testimonial</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\">
                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div id=\"owl-full\" class=\"owl-carousel owl-theme data_widgets_block\">
                                <div class=\"testimonial-box testimonial-background warning-bg\">
                                    <div class=\"testimonial-center-image\">
                                        <img src=\"";
        // line 866
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image5-profile.jpg"), "html", null, true);
        echo "\" alt=\"image\"/>
                                    </div>
                                    <div class=\"testimonial-center-content\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet
                                            ultricies interdum. Pellentesque interdum massa. </p>
                                        <div class=\"testimonial-name\">
                                            <h6>Max Sharp</h6>
                                            <span><i class=\"icon_minus-06 \"></i>Author</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"testimonial-box testimonial-background danger-bg\">
                                    <div class=\"testimonial-center-image\">
                                        <img src=\"";
        // line 879
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image9-profile.jpg"), "html", null, true);
        echo "\" alt=\"image\"/>
                                    </div>
                                    <div class=\"testimonial-center-content\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                            sagittis finibus enim a accumsan. Pellentesque. </p>
                                        <div class=\"testimonial-name\">
                                            <h6>Victoria Ince</h6>
                                            <span><i class=\"icon_minus-06 \"></i>Author</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"testimonial-box testimonial-background success-bg\">
                                    <div class=\"testimonial-center-image\">
                                        <img src=\"";
        // line 892
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image11-profile.jpg"), "html", null, true);
        echo "\" alt=\"image\"/>
                                    </div>
                                    <div class=\"testimonial-center-content\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                                            non velit hendrerit, malesuada tortor sed.</p>
                                        <div class=\"testimonial-name\">
                                            <h6>Robert Nash</h6>
                                            <span><i class=\"icon_minus-06 \"></i>Author</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Skill</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"progressbar-project\">
                                <div class=\"html-section\">
                                    <h6>HTML</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-success\" value=\"85\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>CSS</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"72\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>WordPress</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-warning\" value=\"66\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>jQuery</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-danger\" value=\"77\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>Scss</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-success\" value=\"55\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>Php</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
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
        
        $__internal_dc63f8211139f397a12b100bb0657be7bd3ae206747a443bc49357adbd0c6b93->leave($__internal_dc63f8211139f397a12b100bb0657be7bd3ae206747a443bc49357adbd0c6b93_prof);

        
        $__internal_addb8c89a6de7c10d6102e74e6a3a9a78e46fb8019045fd32f0d4ac4af27aa6b->leave($__internal_addb8c89a6de7c10d6102e74e6a3a9a78e46fb8019045fd32f0d4ac4af27aa6b_prof);

    }

    // line 969
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_632558d9c37aeb7bedbe2e2024c1b2e5a80fdc61ef9b124947733bce4a466b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632558d9c37aeb7bedbe2e2024c1b2e5a80fdc61ef9b124947733bce4a466b2d->enter($__internal_632558d9c37aeb7bedbe2e2024c1b2e5a80fdc61ef9b124947733bce4a466b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_19f0d2255e9767f51a1d5c88bff90e771e963937a2b3109dd17a415f5ad08812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f0d2255e9767f51a1d5c88bff90e771e963937a2b3109dd17a415f5ad08812->enter($__internal_19f0d2255e9767f51a1d5c88bff90e771e963937a2b3109dd17a415f5ad08812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 970
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 971
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 972
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 973
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 974
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 975
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 976
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 978
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 979
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 980
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 981
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 982
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 983
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/progressbar.js/dist/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 984
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/CoolClock/coolclock.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 985
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/d3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 986
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/rickshaw/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 987
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 989
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v1.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 990
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script>\$(\"#indexx\").addClass('active')</script>
";
        
        $__internal_19f0d2255e9767f51a1d5c88bff90e771e963937a2b3109dd17a415f5ad08812->leave($__internal_19f0d2255e9767f51a1d5c88bff90e771e963937a2b3109dd17a415f5ad08812_prof);

        
        $__internal_632558d9c37aeb7bedbe2e2024c1b2e5a80fdc61ef9b124947733bce4a466b2d->leave($__internal_632558d9c37aeb7bedbe2e2024c1b2e5a80fdc61ef9b124947733bce4a466b2d_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1217 => 990,  1213 => 989,  1208 => 987,  1204 => 986,  1200 => 985,  1196 => 984,  1192 => 983,  1188 => 982,  1184 => 981,  1180 => 980,  1176 => 979,  1172 => 978,  1168 => 977,  1164 => 976,  1160 => 975,  1156 => 974,  1152 => 973,  1148 => 972,  1144 => 971,  1139 => 970,  1130 => 969,  1043 => 892,  1027 => 879,  1011 => 866,  762 => 620,  510 => 371,  445 => 309,  234 => 100,  225 => 99,  208 => 92,  204 => 91,  200 => 90,  196 => 89,  192 => 88,  188 => 87,  184 => 86,  180 => 85,  176 => 84,  172 => 83,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  152 => 78,  148 => 77,  144 => 76,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
{% block title %}Admin - Index{% endblock %}
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

        };
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/weather-icons/css/weather-icons.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/weather-icons/css/weather-icons-wind.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/rickshaw/rickshaw.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>





{% endblock %}
{% block body %}
    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Dashboard</h2>
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                <li class=\"breadcrumb-item active\">Dashboard 2</li>
            </ol>
        </div>

        <div class=\"contain-inner dashboard-v1\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Traffic views</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box text-xs-center\">
                            <div class=\"traffic-chart\">
                                <div id=\"rickshaw-realtime_y_axis\"></div>
                                <div id=\"rickshaw-realtime\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"data_widgets_block\">
                                    <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 data_widgets_box_block\">
                                        <div class=\"data_widgets_block\">
                                            <div class=\"data_widgets_box data_success\">
                                                <div class=\"data_widgets_contain\">
                                                    <div class=\"float-xs-left data_widgets_info\">
                                                        <div class=\"data_widgets_icon\">
                                                            <i class=\"fa fa-eye\"></i>
                                                        </div>
                                                        <h5 class=\"data_widgets_count\">1500</h5>
                                                        <h5 class=\"data_widgets_title\">Visitors</h5>
                                                    </div>
                                                    <div class=\"data_progress float-xs-right\">
                                                        <div class=\"circle-bar\" id=\"circle-progressbar1\"
                                                             data-plugin=\"progressbar\" data-type=\"Circle\"
                                                             data-duration=\"3400\" data-stroke-width=\"6\"
                                                             data-color=\"#5cb85c\" data-trail-color=\"#ddd\"
                                                             data-animate=\"0.8\" data-svg-style=\"null\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-8 col-lg-6 col-md-6 col-sm-12 col-xs-12 data_widgets_box_block\">
                                        <div class=\"data_widgets_block\">
                                            <div class=\"data_widgets_box data_success\">
                                                <div class=\"data_widgets_contain\">
                                                    <div class=\"striped-progress-bar\">
                                                        <h6>Today</h6>
                                                        <progress
                                                                class=\"progress progress-striped progress-info\"
                                                                value=\"55\" max=\"100\"></progress>
                                                        <h6>Yesterday</h6>
                                                        <progress
                                                                class=\"progress progress-striped progress-danger\"
                                                                value=\"75\" max=\"100\"></progress>
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
                <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-card-margin\">
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"card card-primary dashboard-card-box text-xs-center\">
                                <div class=\"card-block\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4\">
                                            <p>Mail</p>
                                            <span>6,432</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <p>Storage</p>
                                            <span>91%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <i class=\"fa fa-envelope fa-5x\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"card card-success dashboard-card-box text-xs-center\">
                                <div class=\"card-block\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4\">
                                            <p>Tasks</p>
                                            <span>7,245</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <p>Storage</p>
                                            <span>59%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <i class=\"fa fa-tasks fa-5x\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"card card-warning dashboard-card-box text-xs-center\">
                                <div class=\"card-block\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4\">
                                            <p>Space</p>
                                            <span>97.8%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <p>Remain</p>
                                            <span>2.2%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <i class=\"fa fa-archive fa-5x\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-12 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"card card-danger dashboard-card-box text-xs-center\">
                                <div class=\"card-block\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4\">
                                            <p>Outlay</p>
                                            <span>1,943k</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <p>Storage</p>
                                            <span>75%</span>
                                        </div>
                                        <div class=\"col-xs-4\">
                                            <i class=\"fa fa-folder-open-o fa-5x\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content clock-content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Clock time</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div onload=\"CoolClock.findAndCreateClocks()\" class=\"text-xs-center\">
                                <canvas class=\"CoolClock:classic\"></canvas>
                            </div>
                            <div class=\"clock-section\">
                                <div class=\"col-xs-3\">
                                    <span class=\"pe-7s-clock text-white\"></span>
                                    <p class=\"text-white\">Clock</p>
                                </div>
                                <div class=\"col-xs-3\">
                                    <span class=\"pe-7s-alarm\"></span>
                                    <p>Alarm</p>
                                </div>
                                <div class=\"col-xs-3\">
                                    <span class=\"pe-7s-timer\"></span>
                                    <p>Timer</p>
                                </div>
                                <div class=\"col-xs-3\">
                                    <span class=\"pe-7s-wristwatch\"></span>
                                    <p>Watch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"overlay-box-shadow\">
                        <div class=\"icon-plus-overlay\">
                            <img src=\"{{ asset('assets/global/image/flower.jpg') }}\" alt=\"images\">
                            <div class=\"icon-overlay-text\">
                                <div class=\"text-overlay-wrapper\">
                                    <div class=\"text-overlay-description\">
                                        <p>
                                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                        </p>
                                        <hr>
                                        <hr>
                                        <p class=\"set2\">
                                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"overlay-box-title\">
                            <h4 class=\"page-content-title\">Flower</h4>
                            <div class=\"widget-footer\">
                                <div class=\"row\">
                                    <div class=\"col-xs-8\">
                                        <div class=\"widget-icon flower-icon-dashboard\">
                                            <a href=\"#\" class=\"text-xs-center icon-spacing\">
                                                <i class=\"icon icon_like\"></i><span>47</span>
                                            </a>
                                            <a href=\"#\" class=\"text-xs-center icon-spacing\">
                                                <i class=\"icon icon_comment_alt\"></i><span>85</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-4\">
                                        <div class=\"text-xs-right\">
                                            <button class=\"btn btn-primary flat-buttons site-btn m-0\">View
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content content-blockquote\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Message</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"image-blockquote alert-warning\">
                                <div class=\"img-blockquote\">
                                    <img src=\"{{ asset('assets/global/image/profile.jpg') }}\" alt=\"image\"></div>
                                <blockquote>
                                    <p class=\"text-xs-center\">One morning, when Gregor Samsa woke from troubled
                                        dreams, he found himself.</p>
                                    <div class=\"border-blockquote\"></div>
                                    <h5 class=\"text-xs-center\">Shane Handcomb</h5>
                                    <h6 class=\"text-xs-center\">Web Developer</h6>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"row\">
                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"dashboard-header\">
                                    <h4 class=\"page-content-title float-xs-left\">Monthly stock</h4>
                                    <div class=\"dashboard-action\">
                                        <ul class=\"right-action float-xs-right\">
                                            <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                          aria-hidden=\"true\"><span
                                                            class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                            <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                            class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"dashboard-box\">
                                    <div id=\"time-events\" class=\"chart-height\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"weather-background-image\">
                        <div class=\"row\">
                            <div class=\"col-xs-6 weather-city\">
                                <h1>London</h1>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"float-xs-right weather-time\">
                                    <h3>Today</h3>
                                    <h3>21:35 PM</h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"weather-icon text-xs-center\">
                                    <div class=\"weather-icon-center text-xs-center\">
                                        <i class=\"wi wi-sleet\"></i>
                                        <i class=\"wi wi-day-sunny fa fa-spin\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"weather-icon-title\">
                                    <i class=\"wi wi-solar-eclipse\"></i>
                                    <h3>Weather</h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-3 weather-width\">
                                <div class=\"weather-left-text\">
                                    <h1>22°</h1>
                                    <span>Monday 15<sup>th</sup></span>
                                </div>
                            </div>
                            <div class=\"col-xs-2 weather-width\">
                                <div class=\"weather-left-icon\">
                                    <i class=\"wi wi-day-cloudy\"></i>
                                    <span>3mph/65°</span>
                                </div>
                            </div>
                            <div class=\"col-xs-7 weather-day-width\">
                                <ul class=\"weather-days\">
                                    <li>
                                        <h4>Tue</h4>
                                        <i class=\"wi wi-cloudy\"></i>
                                        <span>21°</span>
                                    </li>
                                    <li>
                                        <h4>Wed</h4>
                                        <i class=\"wi wi-lightning\"></i>
                                        <span>20°</span>
                                    </li>
                                    <li>
                                        <h4>Thu</h4>
                                        <i class=\"wi wi-night-alt-cloudy\"></i>
                                        <span>22°</span>
                                    </li>
                                    <li>
                                        <h4>Fri</h4>
                                        <i class=\"wi wi-night-clear\"></i>
                                        <span>23°</span>
                                    </li>
                                    <li>
                                        <h4>Sat</h4>
                                        <i class=\"wi wi-day-sunny\"></i>
                                        <span>19°</span>
                                    </li>
                                    <li>
                                        <h4>Sun</h4>
                                        <i class=\"wi wi-night-alt-sleet-storm\"></i>
                                        <span>24°</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"social-icons-margin\">
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-twitter\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>5.7k</p>
                                            <span>Followers</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-twitter float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-googleplus\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>2.6k</p>
                                            <span>connect</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-google float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-dribbble\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>5.3k</p>
                                            <span>Followers</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-dribbble float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-facebook\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>8.3k</p>
                                            <span>Like</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-facebook float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-skype\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>4.4k</p>
                                            <span>Join</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-skype float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div class=\"social-section social-instagram\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-text\">
                                            <p>5.9k</p>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"social-icon\">
                                            <i class=\"fa fa-instagram float-xs-right\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Contact details</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"cover-widget\">
                                <div class=\"cover-widget-detail\">
                                    <div class=\"profile-image\">
                                        <img src=\"{{ asset('assets/global/image/image8-profile.jpg') }}\"
                                             alt=\"tag image\">
                                    </div>
                                    <div class=\"text-xs-center text-secondary\">
                                        <h4 class=\"text-secondary\">Krayon Jin</h4>
                                        <span>Designer</span>
                                        <button class=\"btn btn-primary flat-buttons\">Change profile</button>
                                    </div>
                                </div>
                                <div class=\"social-icon-box\">
                                    <div class=\"row m-0\">
                                        <div class=\"col-xs-6 col-sm-3 p-0\">
                                            <a href=\"#\"
                                               class=\"text-xs-center social-icon-widget social-facebook\">
                                                <i class=\"fa fa-facebook\"></i>
                                                <span>344</span>
                                            </a>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-3 p-0\">
                                            <a href=\"#\"
                                               class=\"text-xs-center social-icon-widget social-googleplus\">
                                                <i class=\"fa fa-google-plus\"></i>
                                                <span>450</span>
                                            </a>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-3 p-0\">
                                            <a href=\"#\"
                                               class=\"text-xs-center social-icon-widget social-twitter\">
                                                <i class=\"fa fa-twitter\"></i>
                                                <span>532</span>
                                            </a>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-3 p-0\">
                                            <a href=\"#\"
                                               class=\"text-xs-center social-icon-widget social-linkedin\">
                                                <i class=\"fa fa-linkedin\"></i>
                                                <span>753</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Contact details</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"basic_table basic_table_responsive table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>0</td>
                                        <td>Edmund</td>
                                        <td>Edmund@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Mark@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Larry</td>
                                        <td>Larry@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Harvinder</td>
                                        <td>Harvinder@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Terry</td>
                                        <td>Terry@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Jacob</td>
                                        <td>Jacob@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nicky</td>
                                        <td>Nicky@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>James</td>
                                        <td>James@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Michael</td>
                                        <td>Michael@example.com</td>
                                        <td><span class=\"tag square-tag tag-success\">Online</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Ricky</td>
                                        <td>Ricky@example.com</td>
                                        <td><span class=\"tag square-tag tag-danger\">Offline</span></td>
                                        <td>
                                                    <span class=\"basic_table_icon\"><i
                                                                class=\"icon icon_pencil\"></i></span>
                                            <span class=\"basic_table_icon\"><i
                                                        class=\"icon icon_trash\"></i></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row dashboard-margin-bottom\">
                <div class=\"col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Poll activity</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box text-xs-center\">
                            <div class=\"btn-group btn-group-icon\" data-toggle=\"buttons\">
                                <button type=\"button\" class=\"btn btn-primary flat-buttons\">Week</button>
                                <button type=\"button\" class=\"btn btn-primary flat-buttons\">Months</button>
                                <button type=\"button\" class=\"btn btn-primary flat-buttons\">Year</button>
                            </div>
                            <div id=\"donut-color\" class=\"poll-height\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content testimonial-dashboard-v1\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Testimonial</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\">
                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div id=\"owl-full\" class=\"owl-carousel owl-theme data_widgets_block\">
                                <div class=\"testimonial-box testimonial-background warning-bg\">
                                    <div class=\"testimonial-center-image\">
                                        <img src=\"{{ asset('assets/global/image/image5-profile.jpg') }}\" alt=\"image\"/>
                                    </div>
                                    <div class=\"testimonial-center-content\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet
                                            ultricies interdum. Pellentesque interdum massa. </p>
                                        <div class=\"testimonial-name\">
                                            <h6>Max Sharp</h6>
                                            <span><i class=\"icon_minus-06 \"></i>Author</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"testimonial-box testimonial-background danger-bg\">
                                    <div class=\"testimonial-center-image\">
                                        <img src=\"{{ asset('assets/global/image/image9-profile.jpg') }}\" alt=\"image\"/>
                                    </div>
                                    <div class=\"testimonial-center-content\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                            sagittis finibus enim a accumsan. Pellentesque. </p>
                                        <div class=\"testimonial-name\">
                                            <h6>Victoria Ince</h6>
                                            <span><i class=\"icon_minus-06 \"></i>Author</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"testimonial-box testimonial-background success-bg\">
                                    <div class=\"testimonial-center-image\">
                                        <img src=\"{{ asset('assets/global/image/image11-profile.jpg') }}\" alt=\"image\"/>
                                    </div>
                                    <div class=\"testimonial-center-content\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                                            non velit hendrerit, malesuada tortor sed.</p>
                                        <div class=\"testimonial-name\">
                                            <h6>Robert Nash</h6>
                                            <span><i class=\"icon_minus-06 \"></i>Author</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Skill</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"progressbar-project\">
                                <div class=\"html-section\">
                                    <h6>HTML</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-success\" value=\"85\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>CSS</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"72\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>WordPress</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-warning\" value=\"66\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>jQuery</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-danger\" value=\"77\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>Scss</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-success\" value=\"55\" max=\"100\"></progress>
                                    </div>
                                </div>
                                <div class=\"html-section\">
                                    <h6>Php</h6>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/owl.carousel/dist/owl.carousel.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/progressbar.js/dist/progressbar.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/CoolClock/coolclock.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/d3/d3.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/rickshaw/rickshaw.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v1.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-icon-menu/js/layout.min.js') }}\"></script>
    <script>\$(\"#indexx\").addClass('active')</script>
{% endblock %}", "ERPBundle:Front/etudiant:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/index.html.twig");
    }
}
