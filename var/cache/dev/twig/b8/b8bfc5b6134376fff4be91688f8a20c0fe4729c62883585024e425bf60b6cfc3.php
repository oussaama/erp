<?php

/* ERPBundle:Front/etudiant:Notification.html.twig */
class __TwigTemplate_f90294c51c3750b2426426122449a3b9ae25a0841c12e2be9744842b9e5848d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/etudiant:Notification.html.twig", 1);
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
        $__internal_7a6e6df7a0e8758798e3ae6ce4866cb133baa78356bc8b7161a9b035598d8fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6e6df7a0e8758798e3ae6ce4866cb133baa78356bc8b7161a9b035598d8fb4->enter($__internal_7a6e6df7a0e8758798e3ae6ce4866cb133baa78356bc8b7161a9b035598d8fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:Notification.html.twig"));

        $__internal_aae6aa485627ee85d116028ea10e3ef83eb1058b0d2bf26689248b522557d7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae6aa485627ee85d116028ea10e3ef83eb1058b0d2bf26689248b522557d7b8->enter($__internal_aae6aa485627ee85d116028ea10e3ef83eb1058b0d2bf26689248b522557d7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:Notification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6e6df7a0e8758798e3ae6ce4866cb133baa78356bc8b7161a9b035598d8fb4->leave($__internal_7a6e6df7a0e8758798e3ae6ce4866cb133baa78356bc8b7161a9b035598d8fb4_prof);

        
        $__internal_aae6aa485627ee85d116028ea10e3ef83eb1058b0d2bf26689248b522557d7b8->leave($__internal_aae6aa485627ee85d116028ea10e3ef83eb1058b0d2bf26689248b522557d7b8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3011c68bd94c651577c5a81e3455ce7b755711e3e2338094b1a98ec3e6b9e563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3011c68bd94c651577c5a81e3455ce7b755711e3e2338094b1a98ec3e6b9e563->enter($__internal_3011c68bd94c651577c5a81e3455ce7b755711e3e2338094b1a98ec3e6b9e563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9c61f76251cc9f0a8e4e993117522a307b131cfc3d8775b5b38ed791df1ba45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c61f76251cc9f0a8e4e993117522a307b131cfc3d8775b5b38ed791df1ba45->enter($__internal_c9c61f76251cc9f0a8e4e993117522a307b131cfc3d8775b5b38ed791df1ba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Etudiant - Notification";
        
        $__internal_c9c61f76251cc9f0a8e4e993117522a307b131cfc3d8775b5b38ed791df1ba45->leave($__internal_c9c61f76251cc9f0a8e4e993117522a307b131cfc3d8775b5b38ed791df1ba45_prof);

        
        $__internal_3011c68bd94c651577c5a81e3455ce7b755711e3e2338094b1a98ec3e6b9e563->leave($__internal_3011c68bd94c651577c5a81e3455ce7b755711e3e2338094b1a98ec3e6b9e563_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e45207702edfc2c7652d9527716495f3c5a25ac7112285342f6742190d3aec02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45207702edfc2c7652d9527716495f3c5a25ac7112285342f6742190d3aec02->enter($__internal_e45207702edfc2c7652d9527716495f3c5a25ac7112285342f6742190d3aec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_02e9092627935ce59a19515a1b98084557872732ca3afd7522ba4862d3e39be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e9092627935ce59a19515a1b98084557872732ca3afd7522ba4862d3e39be2->enter($__internal_02e9092627935ce59a19515a1b98084557872732ca3afd7522ba4862d3e39be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
        echo "\" id=\"site-color\"/>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
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
        
        $__internal_02e9092627935ce59a19515a1b98084557872732ca3afd7522ba4862d3e39be2->leave($__internal_02e9092627935ce59a19515a1b98084557872732ca3afd7522ba4862d3e39be2_prof);

        
        $__internal_e45207702edfc2c7652d9527716495f3c5a25ac7112285342f6742190d3aec02->leave($__internal_e45207702edfc2c7652d9527716495f3c5a25ac7112285342f6742190d3aec02_prof);

    }

    // line 95
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_6a7a01e19d4109e56eee37e2a866b3c83a326964a082fb1ba1483558ef5ccaf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7a01e19d4109e56eee37e2a866b3c83a326964a082fb1ba1483558ef5ccaf8->enter($__internal_6a7a01e19d4109e56eee37e2a866b3c83a326964a082fb1ba1483558ef5ccaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_38fb2a4df4810fbab0a5c11e878d66645067269d285cfcc51a4961554dab29d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fb2a4df4810fbab0a5c11e878d66645067269d285cfcc51a4961554dab29d9->enter($__internal_38fb2a4df4810fbab0a5c11e878d66645067269d285cfcc51a4961554dab29d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 96
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
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox", array("type" => "recu"));
        echo "\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Messsagerie</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_notification");
        echo "\">
                                    <span class=\"icon_info header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Notification</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Evenement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_agenda");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Agenda</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_38fb2a4df4810fbab0a5c11e878d66645067269d285cfcc51a4961554dab29d9->leave($__internal_38fb2a4df4810fbab0a5c11e878d66645067269d285cfcc51a4961554dab29d9_prof);

        
        $__internal_6a7a01e19d4109e56eee37e2a866b3c83a326964a082fb1ba1483558ef5ccaf8->leave($__internal_6a7a01e19d4109e56eee37e2a866b3c83a326964a082fb1ba1483558ef5ccaf8_prof);

    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb9499cddd2eccdae2c2d661c278f4bb275b1f18d4430c0c5bfd0f656ecc7e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9499cddd2eccdae2c2d661c278f4bb275b1f18d4430c0c5bfd0f656ecc7e8c->enter($__internal_cb9499cddd2eccdae2c2d661c278f4bb275b1f18d4430c0c5bfd0f656ecc7e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a37de7ed3a8bb8cbee44e954ecc0147ef0e27d6824cacac60a686081fc4da438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37de7ed3a8bb8cbee44e954ecc0147ef0e27d6824cacac60a686081fc4da438->enter($__internal_a37de7ed3a8bb8cbee44e954ecc0147ef0e27d6824cacac60a686081fc4da438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 137
        echo "
    <section id=\"content-wrapper\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Notification</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Notification</a>
                </li>
                <li class=\"breadcrumb-item active\">List</li>
            </ol>
        </div>

        <div class=\"content-list\">
            <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-8 offset-xl-2 col-lg-12 col-md-12\">
                                <div class=\"nav-tab-horizontal\">
                                    <div class=\"divider15\"></div>
                                    <div class=\"tab-content\">
                                        <div id=\"message-list-output\" class=\"tab-pane active\">
                                            <div class=\"list-group message-list-group\">
                                                <a href=\"#\" class=\"list-group-item\">
                                                    <div class=\"list-image float-xs-left\">
                                                        <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image-profile.jpg"), "html", null, true);
        echo "\" alt=\"contact\"/>
                                                    </div>
                                                    <div class=\"list-message float-xs-left\">
                                                        <span class=\"float-xs-right\">Just now</span>
                                                        <h6>Jenny</h6>
                                                        <p>Convallis risus. Praesent nec nascetur varius
                                                            senectus aptent elit elementum auctor quis suscipit,
                                                            curae; tempor varius maecenas viverra tempus
                                                            cum.</p>
                                                    </div>
                                                </a>
                                                <a href=\"#\" class=\"list-group-item\">
                                                    <div class=\"list-image float-xs-left\">
                                                        <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image2-profile.jpg"), "html", null, true);
        echo "\" alt=\"contact\"/>
                                                    </div>
                                                    <div class=\"list-message float-xs-left\">
                                                        <span class=\"float-xs-right\">5 hour ago</span>
                                                        <h6>Suzi</h6>
                                                        <p>Rhoncus neque per porta. Suspendisse ultricies risus,
                                                            iaculis egestas eget tristique elementum mattis sem
                                                            venenatis nascetur orci natoque aptent cursus.</p>
                                                    </div>
                                                </a>
                                                <a href=\"#\" class=\"list-group-item\">
                                                    <div class=\"list-image float-xs-left\">
                                                        <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image5-profile.jpg"), "html", null, true);
        echo "\" alt=\"contact\"/>
                                                    </div>
                                                    <div class=\"list-message float-xs-left\">
                                                        <span class=\"float-xs-right\">yesterday</span>
                                                        <h6>Henry</h6>
                                                        <p>Elementum eu lorem senectus volutpat facilisi quam
                                                            dignissim potenti enim posuere conubia eu aenean
                                                            Sapien ultricies mattis tellus semper blandit.</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_a37de7ed3a8bb8cbee44e954ecc0147ef0e27d6824cacac60a686081fc4da438->leave($__internal_a37de7ed3a8bb8cbee44e954ecc0147ef0e27d6824cacac60a686081fc4da438_prof);

        
        $__internal_cb9499cddd2eccdae2c2d661c278f4bb275b1f18d4430c0c5bfd0f656ecc7e8c->leave($__internal_cb9499cddd2eccdae2c2d661c278f4bb275b1f18d4430c0c5bfd0f656ecc7e8c_prof);

    }

    // line 215
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_6a17b70fd9a451cc852d3e324d5cbed39b6e8612994821ced55a552af078ecea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a17b70fd9a451cc852d3e324d5cbed39b6e8612994821ced55a552af078ecea->enter($__internal_6a17b70fd9a451cc852d3e324d5cbed39b6e8612994821ced55a552af078ecea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_88e25ca720e3e2302dfb1d0d50fd2816eb66fc6ea40af8cca396fe91e74264b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e25ca720e3e2302dfb1d0d50fd2816eb66fc6ea40af8cca396fe91e74264b1->enter($__internal_88e25ca720e3e2302dfb1d0d50fd2816eb66fc6ea40af8cca396fe91e74264b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 216
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script>\$(\"#communication\").addClass('active')</script>
";
        
        $__internal_88e25ca720e3e2302dfb1d0d50fd2816eb66fc6ea40af8cca396fe91e74264b1->leave($__internal_88e25ca720e3e2302dfb1d0d50fd2816eb66fc6ea40af8cca396fe91e74264b1_prof);

        
        $__internal_6a17b70fd9a451cc852d3e324d5cbed39b6e8612994821ced55a552af078ecea->leave($__internal_6a17b70fd9a451cc852d3e324d5cbed39b6e8612994821ced55a552af078ecea_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant:Notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 226,  419 => 225,  415 => 224,  411 => 223,  407 => 222,  403 => 221,  399 => 220,  395 => 219,  391 => 218,  387 => 217,  382 => 216,  373 => 215,  340 => 192,  325 => 180,  309 => 167,  277 => 137,  268 => 136,  245 => 123,  230 => 111,  221 => 105,  210 => 96,  201 => 95,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  165 => 81,  161 => 80,  157 => 79,  153 => 78,  149 => 77,  145 => 76,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Etudiant - Notification{% endblock %}
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css') }}\" id=\"site-color\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
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
                                <a href=\"{{ path('etudiant_mailBox',{'type':'recu'}) }}\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Messsagerie</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('etudiant_notification') }}\">
                                    <span class=\"icon_info header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Notification</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Evenement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_agenda') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Agenda</span>
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
            <h2 class=\"float-xs-left content-title-main\">Notification</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Notification</a>
                </li>
                <li class=\"breadcrumb-item active\">List</li>
            </ol>
        </div>

        <div class=\"content-list\">
            <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-8 offset-xl-2 col-lg-12 col-md-12\">
                                <div class=\"nav-tab-horizontal\">
                                    <div class=\"divider15\"></div>
                                    <div class=\"tab-content\">
                                        <div id=\"message-list-output\" class=\"tab-pane active\">
                                            <div class=\"list-group message-list-group\">
                                                <a href=\"#\" class=\"list-group-item\">
                                                    <div class=\"list-image float-xs-left\">
                                                        <img src=\"{{ asset('assets/global/image/image-profile.jpg') }}\" alt=\"contact\"/>
                                                    </div>
                                                    <div class=\"list-message float-xs-left\">
                                                        <span class=\"float-xs-right\">Just now</span>
                                                        <h6>Jenny</h6>
                                                        <p>Convallis risus. Praesent nec nascetur varius
                                                            senectus aptent elit elementum auctor quis suscipit,
                                                            curae; tempor varius maecenas viverra tempus
                                                            cum.</p>
                                                    </div>
                                                </a>
                                                <a href=\"#\" class=\"list-group-item\">
                                                    <div class=\"list-image float-xs-left\">
                                                        <img src=\"{{ asset('assets/global/image/image2-profile.jpg') }}\" alt=\"contact\"/>
                                                    </div>
                                                    <div class=\"list-message float-xs-left\">
                                                        <span class=\"float-xs-right\">5 hour ago</span>
                                                        <h6>Suzi</h6>
                                                        <p>Rhoncus neque per porta. Suspendisse ultricies risus,
                                                            iaculis egestas eget tristique elementum mattis sem
                                                            venenatis nascetur orci natoque aptent cursus.</p>
                                                    </div>
                                                </a>
                                                <a href=\"#\" class=\"list-group-item\">
                                                    <div class=\"list-image float-xs-left\">
                                                        <img src=\"{{ asset('assets/global/image/image5-profile.jpg') }}\" alt=\"contact\"/>
                                                    </div>
                                                    <div class=\"list-message float-xs-left\">
                                                        <span class=\"float-xs-right\">yesterday</span>
                                                        <h6>Henry</h6>
                                                        <p>Elementum eu lorem senectus volutpat facilisi quam
                                                            dignissim potenti enim posuere conubia eu aenean
                                                            Sapien ultricies mattis tellus semper blandit.</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-validation/dist/jquery.validate.min.js') }}\"></script>
    <script>\$(\"#communication\").addClass('active')</script>
{% endblock %}", "ERPBundle:Front/etudiant:Notification.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/Notification.html.twig");
    }
}
