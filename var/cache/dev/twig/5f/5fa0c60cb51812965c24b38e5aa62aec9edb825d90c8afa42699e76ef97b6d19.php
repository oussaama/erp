<?php

/* ERPBundle:Admin/Compte:Notification.html.twig */
class __TwigTemplate_9f5f5e0fc9c546820629716d58453a89d807d6325d44d4980b64311f32c16d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Compte:Notification.html.twig", 1);
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
        $__internal_620b053b5d55fb7f45430cce88cbdb76b79ce3cc92d9bd47852e4634f56cc690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620b053b5d55fb7f45430cce88cbdb76b79ce3cc92d9bd47852e4634f56cc690->enter($__internal_620b053b5d55fb7f45430cce88cbdb76b79ce3cc92d9bd47852e4634f56cc690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:Notification.html.twig"));

        $__internal_35bffca80c2075d9baa672723dace30e5f67f4d83980f1dd947d37d5326eacbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bffca80c2075d9baa672723dace30e5f67f4d83980f1dd947d37d5326eacbd->enter($__internal_35bffca80c2075d9baa672723dace30e5f67f4d83980f1dd947d37d5326eacbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:Notification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620b053b5d55fb7f45430cce88cbdb76b79ce3cc92d9bd47852e4634f56cc690->leave($__internal_620b053b5d55fb7f45430cce88cbdb76b79ce3cc92d9bd47852e4634f56cc690_prof);

        
        $__internal_35bffca80c2075d9baa672723dace30e5f67f4d83980f1dd947d37d5326eacbd->leave($__internal_35bffca80c2075d9baa672723dace30e5f67f4d83980f1dd947d37d5326eacbd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fa060bd3d95af403a2c57e836a939a6df881c0ea4bbf51023ce6f2dee580500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa060bd3d95af403a2c57e836a939a6df881c0ea4bbf51023ce6f2dee580500->enter($__internal_3fa060bd3d95af403a2c57e836a939a6df881c0ea4bbf51023ce6f2dee580500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8004bbaa8221e6c5866d64717b065944c4328ae4b253afa18cb20fa2ab68205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8004bbaa8221e6c5866d64717b065944c4328ae4b253afa18cb20fa2ab68205->enter($__internal_f8004bbaa8221e6c5866d64717b065944c4328ae4b253afa18cb20fa2ab68205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Notification";
        
        $__internal_f8004bbaa8221e6c5866d64717b065944c4328ae4b253afa18cb20fa2ab68205->leave($__internal_f8004bbaa8221e6c5866d64717b065944c4328ae4b253afa18cb20fa2ab68205_prof);

        
        $__internal_3fa060bd3d95af403a2c57e836a939a6df881c0ea4bbf51023ce6f2dee580500->leave($__internal_3fa060bd3d95af403a2c57e836a939a6df881c0ea4bbf51023ce6f2dee580500_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45bbcb14b30759e15d6722b618f8d5c2da5179f0f5a13581bf5db1a3141166f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bbcb14b30759e15d6722b618f8d5c2da5179f0f5a13581bf5db1a3141166f4->enter($__internal_45bbcb14b30759e15d6722b618f8d5c2da5179f0f5a13581bf5db1a3141166f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b01152f735922af06ee66345d8998c8463451f2e9b697b3a37a64e41fa88506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b01152f735922af06ee66345d8998c8463451f2e9b697b3a37a64e41fa88506->enter($__internal_0b01152f735922af06ee66345d8998c8463451f2e9b697b3a37a64e41fa88506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0b01152f735922af06ee66345d8998c8463451f2e9b697b3a37a64e41fa88506->leave($__internal_0b01152f735922af06ee66345d8998c8463451f2e9b697b3a37a64e41fa88506_prof);

        
        $__internal_45bbcb14b30759e15d6722b618f8d5c2da5179f0f5a13581bf5db1a3141166f4->leave($__internal_45bbcb14b30759e15d6722b618f8d5c2da5179f0f5a13581bf5db1a3141166f4_prof);

    }

    // line 95
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_2c74e77376ead04833e269d2a9854a0887c7a273afe0c825d1d4951f1764e7f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c74e77376ead04833e269d2a9854a0887c7a273afe0c825d1d4951f1764e7f7->enter($__internal_2c74e77376ead04833e269d2a9854a0887c7a273afe0c825d1d4951f1764e7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_d4199dff22114686520895c80d5baef7f0cd584cd0085d1c8f14d0b72e50e017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4199dff22114686520895c80d5baef7f0cd584cd0085d1c8f14d0b72e50e017->enter($__internal_d4199dff22114686520895c80d5baef7f0cd584cd0085d1c8f14d0b72e50e017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Messsagerie</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_notification");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_agenda");
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
        
        $__internal_d4199dff22114686520895c80d5baef7f0cd584cd0085d1c8f14d0b72e50e017->leave($__internal_d4199dff22114686520895c80d5baef7f0cd584cd0085d1c8f14d0b72e50e017_prof);

        
        $__internal_2c74e77376ead04833e269d2a9854a0887c7a273afe0c825d1d4951f1764e7f7->leave($__internal_2c74e77376ead04833e269d2a9854a0887c7a273afe0c825d1d4951f1764e7f7_prof);

    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
        $__internal_50ceb27ae36886d4f624206489679c7127b3ea456385693357cf38688d049c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ceb27ae36886d4f624206489679c7127b3ea456385693357cf38688d049c21->enter($__internal_50ceb27ae36886d4f624206489679c7127b3ea456385693357cf38688d049c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3c8e3f93d5ec951569d9c1f829fcae67e77ff6b445eb8bbabc40b1d53e15f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c8e3f93d5ec951569d9c1f829fcae67e77ff6b445eb8bbabc40b1d53e15f68->enter($__internal_f3c8e3f93d5ec951569d9c1f829fcae67e77ff6b445eb8bbabc40b1d53e15f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3c8e3f93d5ec951569d9c1f829fcae67e77ff6b445eb8bbabc40b1d53e15f68->leave($__internal_f3c8e3f93d5ec951569d9c1f829fcae67e77ff6b445eb8bbabc40b1d53e15f68_prof);

        
        $__internal_50ceb27ae36886d4f624206489679c7127b3ea456385693357cf38688d049c21->leave($__internal_50ceb27ae36886d4f624206489679c7127b3ea456385693357cf38688d049c21_prof);

    }

    // line 215
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4d2879ddf9ff5e0b82d12a0738c17d0060dd8a527f43370acf3a384a9f91b67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2879ddf9ff5e0b82d12a0738c17d0060dd8a527f43370acf3a384a9f91b67b->enter($__internal_4d2879ddf9ff5e0b82d12a0738c17d0060dd8a527f43370acf3a384a9f91b67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_df314fecd22bde7fe4d231f4596078338062dcbf5b002f9769ff960012f3d235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df314fecd22bde7fe4d231f4596078338062dcbf5b002f9769ff960012f3d235->enter($__internal_df314fecd22bde7fe4d231f4596078338062dcbf5b002f9769ff960012f3d235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
";
        
        $__internal_df314fecd22bde7fe4d231f4596078338062dcbf5b002f9769ff960012f3d235->leave($__internal_df314fecd22bde7fe4d231f4596078338062dcbf5b002f9769ff960012f3d235_prof);

        
        $__internal_4d2879ddf9ff5e0b82d12a0738c17d0060dd8a527f43370acf3a384a9f91b67b->leave($__internal_4d2879ddf9ff5e0b82d12a0738c17d0060dd8a527f43370acf3a384a9f91b67b_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Compte:Notification.html.twig";
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
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}Admin - Notification{% endblock %}
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
                                <a href=\"{{ path('admin_mailBox',{'type':'recu'}) }}\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Messsagerie</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_notification') }}\">
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
                                <a href=\"{{ path('admin_agenda') }}\">
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
{% endblock %}", "ERPBundle:Admin/Compte:Notification.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Compte/Notification.html.twig");
    }
}
