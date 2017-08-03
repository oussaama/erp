<?php

/* ERPBundle:Admin/Compte:agenda.html.twig */
class __TwigTemplate_d97d1e0bd10749cd39062d830aaabdc0c7331246766aef24d7b9ea4317119fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Compte:agenda.html.twig", 1);
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dc176aa058c794d72b00adf97ab223c977ac9a733643cdc5c1f5b0bfe46d047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc176aa058c794d72b00adf97ab223c977ac9a733643cdc5c1f5b0bfe46d047->enter($__internal_2dc176aa058c794d72b00adf97ab223c977ac9a733643cdc5c1f5b0bfe46d047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:agenda.html.twig"));

        $__internal_f7c09c01fcb8eabf47dcb6e5806d9de064fd99462494307b00f39de0adaf80e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c09c01fcb8eabf47dcb6e5806d9de064fd99462494307b00f39de0adaf80e8->enter($__internal_f7c09c01fcb8eabf47dcb6e5806d9de064fd99462494307b00f39de0adaf80e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dc176aa058c794d72b00adf97ab223c977ac9a733643cdc5c1f5b0bfe46d047->leave($__internal_2dc176aa058c794d72b00adf97ab223c977ac9a733643cdc5c1f5b0bfe46d047_prof);

        
        $__internal_f7c09c01fcb8eabf47dcb6e5806d9de064fd99462494307b00f39de0adaf80e8->leave($__internal_f7c09c01fcb8eabf47dcb6e5806d9de064fd99462494307b00f39de0adaf80e8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0ac42e454ff58fa2abe9dbcf14bbc36ad897c1832f47f75498eedb0e2c6fd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ac42e454ff58fa2abe9dbcf14bbc36ad897c1832f47f75498eedb0e2c6fd19->enter($__internal_b0ac42e454ff58fa2abe9dbcf14bbc36ad897c1832f47f75498eedb0e2c6fd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82628fec12f0608c899cc8cf2e4268fbf0cbebd8a50292570cb467eb13520c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82628fec12f0608c899cc8cf2e4268fbf0cbebd8a50292570cb467eb13520c63->enter($__internal_82628fec12f0608c899cc8cf2e4268fbf0cbebd8a50292570cb467eb13520c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Agenda";
        
        $__internal_82628fec12f0608c899cc8cf2e4268fbf0cbebd8a50292570cb467eb13520c63->leave($__internal_82628fec12f0608c899cc8cf2e4268fbf0cbebd8a50292570cb467eb13520c63_prof);

        
        $__internal_b0ac42e454ff58fa2abe9dbcf14bbc36ad897c1832f47f75498eedb0e2c6fd19->leave($__internal_b0ac42e454ff58fa2abe9dbcf14bbc36ad897c1832f47f75498eedb0e2c6fd19_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c5897e786904f4b238243860121045f89fd7bdbedd083db4daa248d1a84f3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5897e786904f4b238243860121045f89fd7bdbedd083db4daa248d1a84f3c8->enter($__internal_8c5897e786904f4b238243860121045f89fd7bdbedd083db4daa248d1a84f3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_511cece02689afaeb888205f69c4c062692779dec0002427b7749943451c5894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511cece02689afaeb888205f69c4c062692779dec0002427b7749943451c5894->enter($__internal_511cece02689afaeb888205f69c4c062692779dec0002427b7749943451c5894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/fullcalendar/dist/fullcalendar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_511cece02689afaeb888205f69c4c062692779dec0002427b7749943451c5894->leave($__internal_511cece02689afaeb888205f69c4c062692779dec0002427b7749943451c5894_prof);

        
        $__internal_8c5897e786904f4b238243860121045f89fd7bdbedd083db4daa248d1a84f3c8->leave($__internal_8c5897e786904f4b238243860121045f89fd7bdbedd083db4daa248d1a84f3c8_prof);

    }

    // line 96
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_a33a0738f002a87196b018d3df0b8deec6ba58e1f692114a503399f6b526ab4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33a0738f002a87196b018d3df0b8deec6ba58e1f692114a503399f6b526ab4e->enter($__internal_a33a0738f002a87196b018d3df0b8deec6ba58e1f692114a503399f6b526ab4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_d460dadd42bac603559e76cccbb104f94a62c33dd88b4d25dea246f68511bea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d460dadd42bac603559e76cccbb104f94a62c33dd88b4d25dea246f68511bea6->enter($__internal_d460dadd42bac603559e76cccbb104f94a62c33dd88b4d25dea246f68511bea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 97
        echo "    <div id=\"header-icon\">
        <div class=\"header-width\">
            <div class=\"col-xl-12\">
                <div class=\"menucontainer\">
                    <div class=\"overlapblackbg\"></div>
                    <a id=\"navtoggle\" class=\"animated-arrow\"><span></span></a>
                    <nav id=\"nav\" class=\"topmenu\" role=\"navigation\">
                        <ul class=\"menu-list live-search-list\">
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Messsagerie</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_notification");
        echo "\">
                                    <span class=\"icon_info header-icon\" aria-hidden=\"true\"></span>
                                    <span>Notification</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Evenement</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_agenda");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Agenda</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d460dadd42bac603559e76cccbb104f94a62c33dd88b4d25dea246f68511bea6->leave($__internal_d460dadd42bac603559e76cccbb104f94a62c33dd88b4d25dea246f68511bea6_prof);

        
        $__internal_a33a0738f002a87196b018d3df0b8deec6ba58e1f692114a503399f6b526ab4e->leave($__internal_a33a0738f002a87196b018d3df0b8deec6ba58e1f692114a503399f6b526ab4e_prof);

    }

    // line 137
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd14df4678514c1ad83dbd4fc515e9a4addf9fe2dbf89567c8393c9a951eec63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd14df4678514c1ad83dbd4fc515e9a4addf9fe2dbf89567c8393c9a951eec63->enter($__internal_fd14df4678514c1ad83dbd4fc515e9a4addf9fe2dbf89567c8393c9a951eec63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6991417247731e8befd73ed03d5dee402cb41248a4ed4804c0e40e1aed8dc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6991417247731e8befd73ed03d5dee402cb41248a4ed4804c0e40e1aed8dc2c->enter($__internal_e6991417247731e8befd73ed03d5dee402cb41248a4ed4804c0e40e1aed8dc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 138
        echo "    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Calendar</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Agenda</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                <li class=\"breadcrumb-item active\">Agenda</li>
            </ol>

        </div>

        <div class=\"content calendar-contain\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"calender-box\">
                        <div id='wrap'>
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"event-box\">
                        <div id='external-events'>
                            <div class=\"always-visible\" data-plugin=\"scrollbar\" data-useBothWheelAxes=\"true\"
                                 data-height=\"145\" data-minScrollbarLength=\"true\" data-wheelSpeed=\"0.1\">
                                <div>
                                    <h4>Draggable events</h4>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-birthday-cake\"></i>Birthday
                                        party
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-handshake-o\"></i>Block
                                        party
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-users\"></i>Meeting</div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-plane\"></i>Tour event
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-glass\"></i>Enjoy party
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-child\"></i>Holiday</div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-gavel\"></i>Workshop</div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-camera\"></i>Photography
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-life-ring\"></i>Sport
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-cutlery\"></i>Dinner party
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-video-camera\"></i>Movie
                                        day
                                    </div>
                                    <div class=\"checkbox-squared calendar-checkbox\">
                                        <input value=\"None\" id=\"drop-remove\" name=\"check\" type=\"checkbox\">
                                        <label for=\"drop-remove\"></label>
                                        <span>Remove after drop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel\" data-slide-to=\"2\"></li>
                            </ol>

                            <div class=\"carousel-inner\">
                                <div class=\"active carousel-item text-xs-center\">
                                    <div class=\"carousel-inner-item\">
                                        <div class=\"content-event\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"profile-accept\">
                                                        <img alt=\"image\"
                                                             src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/login-profile.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                </div>
                                                <div class=\"col-md-12\">
                                                    <div class=\"event-width\">
                                                        <h2>21th December Monday</h2>
                                                        <i class=\"fa fa-birthday-cake\"></i>
                                                        <p>For all of friends and relatives to attend my annual
                                                            birthday celebration party for this special
                                                            screening !</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"carousel-item text-xs-center\">
                                    <div class=\"carousel-inner-item\">
                                        <div class=\"content-event\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"profile-accept\">
                                                        <img alt=\"image\"
                                                             src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image8-profile.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                </div>
                                                <div class=\"col-md-12\">
                                                    <div class=\"event-width\">
                                                        <h2>22th December Tuesday</h2>
                                                        <i class=\"fa fa-handshake-o\"></i>
                                                        <p>Join team on tuesday for grand opening block party an
                                                            afternoon of food and drinks, live entertainment
                                                            !</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"carousel-item text-xs-center\">
                                    <div class=\"carousel-inner-item\">
                                        <div class=\"content-event\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"profile-accept\">
                                                        <img alt=\"image\"
                                                             src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image4-profile.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                </div>
                                                <div class=\"col-md-12\">
                                                    <div class=\"event-width\">
                                                        <h2>24th December Thursday</h2>
                                                        <i class=\"fa fa-users\"></i>
                                                        <p>Meeting of plan and develop programs, itineraries,
                                                            budgets, and services according to client
                                                            requirements.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class=\"carousel-control left\" href=\"#carousel\" data-slide=\"prev\">&lsaquo;</a>
                            <a class=\"carousel-control right\" href=\"#carousel\" data-slide=\"next\">&rsaquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_e6991417247731e8befd73ed03d5dee402cb41248a4ed4804c0e40e1aed8dc2c->leave($__internal_e6991417247731e8befd73ed03d5dee402cb41248a4ed4804c0e40e1aed8dc2c_prof);

        
        $__internal_fd14df4678514c1ad83dbd4fc515e9a4addf9fe2dbf89567c8393c9a951eec63->leave($__internal_fd14df4678514c1ad83dbd4fc515e9a4addf9fe2dbf89567c8393c9a951eec63_prof);

    }

    // line 287
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_200a316a906d6feaf2c0e008513d5b34a09ff82b1d59c0a0d5702ec072ae5fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200a316a906d6feaf2c0e008513d5b34a09ff82b1d59c0a0d5702ec072ae5fe4->enter($__internal_200a316a906d6feaf2c0e008513d5b34a09ff82b1d59c0a0d5702ec072ae5fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_256992f38c5d63973e548ad7d19cc490ffa1e7aefa95617bce6ae9c809e9c13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256992f38c5d63973e548ad7d19cc490ffa1e7aefa95617bce6ae9c809e9c13d->enter($__internal_256992f38c5d63973e548ad7d19cc490ffa1e7aefa95617bce6ae9c809e9c13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 288
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/calendar.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script>\$('#communication').addClass('active');</script>
";
        
        $__internal_256992f38c5d63973e548ad7d19cc490ffa1e7aefa95617bce6ae9c809e9c13d->leave($__internal_256992f38c5d63973e548ad7d19cc490ffa1e7aefa95617bce6ae9c809e9c13d_prof);

        
        $__internal_200a316a906d6feaf2c0e008513d5b34a09ff82b1d59c0a0d5702ec072ae5fe4->leave($__internal_200a316a906d6feaf2c0e008513d5b34a09ff82b1d59c0a0d5702ec072ae5fe4_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Compte:agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 302,  510 => 301,  506 => 300,  502 => 299,  498 => 298,  494 => 297,  490 => 296,  486 => 295,  482 => 294,  478 => 293,  474 => 292,  470 => 291,  466 => 290,  462 => 289,  457 => 288,  448 => 287,  411 => 260,  385 => 237,  359 => 214,  281 => 138,  272 => 137,  249 => 124,  234 => 112,  225 => 106,  214 => 97,  205 => 96,  185 => 86,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  165 => 81,  161 => 80,  157 => 79,  153 => 78,  149 => 77,  145 => 76,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}Admin - Agenda{% endblock %}
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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/fullcalendar/dist/fullcalendar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <style>
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
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_mailBox',{'type':'recu'}) }}\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Messsagerie</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_notification') }}\">
                                    <span class=\"icon_info header-icon\" aria-hidden=\"true\"></span>
                                    <span>Notification</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Evenement</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_agenda') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Agenda</span>
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
    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Calendar</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Agenda</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                <li class=\"breadcrumb-item active\">Agenda</li>
            </ol>

        </div>

        <div class=\"content calendar-contain\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"calender-box\">
                        <div id='wrap'>
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"event-box\">
                        <div id='external-events'>
                            <div class=\"always-visible\" data-plugin=\"scrollbar\" data-useBothWheelAxes=\"true\"
                                 data-height=\"145\" data-minScrollbarLength=\"true\" data-wheelSpeed=\"0.1\">
                                <div>
                                    <h4>Draggable events</h4>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-birthday-cake\"></i>Birthday
                                        party
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-handshake-o\"></i>Block
                                        party
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-users\"></i>Meeting</div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-plane\"></i>Tour event
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-glass\"></i>Enjoy party
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-child\"></i>Holiday</div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-gavel\"></i>Workshop</div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-camera\"></i>Photography
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-life-ring\"></i>Sport
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-cutlery\"></i>Dinner party
                                    </div>
                                    <div class='fc-event flat-buttons'><i class=\"fa fa-video-camera\"></i>Movie
                                        day
                                    </div>
                                    <div class=\"checkbox-squared calendar-checkbox\">
                                        <input value=\"None\" id=\"drop-remove\" name=\"check\" type=\"checkbox\">
                                        <label for=\"drop-remove\"></label>
                                        <span>Remove after drop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel\" data-slide-to=\"2\"></li>
                            </ol>

                            <div class=\"carousel-inner\">
                                <div class=\"active carousel-item text-xs-center\">
                                    <div class=\"carousel-inner-item\">
                                        <div class=\"content-event\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"profile-accept\">
                                                        <img alt=\"image\"
                                                             src=\"{{ asset('assets/global/image/login-profile.jpg') }}\">
                                                    </div>
                                                </div>
                                                <div class=\"col-md-12\">
                                                    <div class=\"event-width\">
                                                        <h2>21th December Monday</h2>
                                                        <i class=\"fa fa-birthday-cake\"></i>
                                                        <p>For all of friends and relatives to attend my annual
                                                            birthday celebration party for this special
                                                            screening !</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"carousel-item text-xs-center\">
                                    <div class=\"carousel-inner-item\">
                                        <div class=\"content-event\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"profile-accept\">
                                                        <img alt=\"image\"
                                                             src=\"{{ asset('assets/global/image/image8-profile.jpg') }}\">
                                                    </div>
                                                </div>
                                                <div class=\"col-md-12\">
                                                    <div class=\"event-width\">
                                                        <h2>22th December Tuesday</h2>
                                                        <i class=\"fa fa-handshake-o\"></i>
                                                        <p>Join team on tuesday for grand opening block party an
                                                            afternoon of food and drinks, live entertainment
                                                            !</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"carousel-item text-xs-center\">
                                    <div class=\"carousel-inner-item\">
                                        <div class=\"content-event\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"profile-accept\">
                                                        <img alt=\"image\"
                                                             src=\"{{ asset('assets/global/image/image4-profile.jpg') }}\">
                                                    </div>
                                                </div>
                                                <div class=\"col-md-12\">
                                                    <div class=\"event-width\">
                                                        <h2>24th December Thursday</h2>
                                                        <i class=\"fa fa-users\"></i>
                                                        <p>Meeting of plan and develop programs, itineraries,
                                                            budgets, and services according to client
                                                            requirements.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class=\"carousel-control left\" href=\"#carousel\" data-slide=\"prev\">&lsaquo;</a>
                            <a class=\"carousel-control right\" href=\"#carousel\" data-slide=\"next\">&rsaquo;</a>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/moment/min/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/fullcalendar/dist/fullcalendar.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/calendar.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
    <script>\$('#communication').addClass('active');</script>
{% endblock %}", "ERPBundle:Admin/Compte:agenda.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Compte/agenda.html.twig");
    }
}
