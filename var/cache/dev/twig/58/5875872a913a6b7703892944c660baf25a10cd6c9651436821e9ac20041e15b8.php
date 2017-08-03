<?php

/* ERPBundle:Admin/Compte:rapport.html.twig */
class __TwigTemplate_8ecafd7e38b84be0a6721462305281cf4a5dd1ecdaf189eb23cf261c548960c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Compte:rapport.html.twig", 1);
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
        $__internal_9b1ffd82921a970468a33edb74bfbbaaddd09e6b9ba7191ef6582f49208988ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1ffd82921a970468a33edb74bfbbaaddd09e6b9ba7191ef6582f49208988ea->enter($__internal_9b1ffd82921a970468a33edb74bfbbaaddd09e6b9ba7191ef6582f49208988ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:rapport.html.twig"));

        $__internal_3c7a102516d89425bb0e4a5180f7ac4f8cad9acc8f3038b4ff070578f9957d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7a102516d89425bb0e4a5180f7ac4f8cad9acc8f3038b4ff070578f9957d4f->enter($__internal_3c7a102516d89425bb0e4a5180f7ac4f8cad9acc8f3038b4ff070578f9957d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:rapport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b1ffd82921a970468a33edb74bfbbaaddd09e6b9ba7191ef6582f49208988ea->leave($__internal_9b1ffd82921a970468a33edb74bfbbaaddd09e6b9ba7191ef6582f49208988ea_prof);

        
        $__internal_3c7a102516d89425bb0e4a5180f7ac4f8cad9acc8f3038b4ff070578f9957d4f->leave($__internal_3c7a102516d89425bb0e4a5180f7ac4f8cad9acc8f3038b4ff070578f9957d4f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd473af1fdd62237fb6ba6e0a965260bed80ea0783ea6806238997e4515c5d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd473af1fdd62237fb6ba6e0a965260bed80ea0783ea6806238997e4515c5d36->enter($__internal_cd473af1fdd62237fb6ba6e0a965260bed80ea0783ea6806238997e4515c5d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e16e846e4b287f3d7878808b157b88aa05a5ebbc9eeddf77654213b01dc62bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e16e846e4b287f3d7878808b157b88aa05a5ebbc9eeddf77654213b01dc62bb->enter($__internal_5e16e846e4b287f3d7878808b157b88aa05a5ebbc9eeddf77654213b01dc62bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Rapport";
        
        $__internal_5e16e846e4b287f3d7878808b157b88aa05a5ebbc9eeddf77654213b01dc62bb->leave($__internal_5e16e846e4b287f3d7878808b157b88aa05a5ebbc9eeddf77654213b01dc62bb_prof);

        
        $__internal_cd473af1fdd62237fb6ba6e0a965260bed80ea0783ea6806238997e4515c5d36->leave($__internal_cd473af1fdd62237fb6ba6e0a965260bed80ea0783ea6806238997e4515c5d36_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ffc871c07d4b25de38eb26276b8deb4b5df9f76410aeb20518d65491801b92f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc871c07d4b25de38eb26276b8deb4b5df9f76410aeb20518d65491801b92f2->enter($__internal_ffc871c07d4b25de38eb26276b8deb4b5df9f76410aeb20518d65491801b92f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8b532f54deaa8e94dcdcff64e56d6657b00a65721f0d2a93fdf8dc7074e5c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b532f54deaa8e94dcdcff64e56d6657b00a65721f0d2a93fdf8dc7074e5c4c->enter($__internal_a8b532f54deaa8e94dcdcff64e56d6657b00a65721f0d2a93fdf8dc7074e5c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link id=\"site-color\" rel=\"stylesheet\"
          href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/FooTable/compiled/footable.bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/hover/css/hover.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
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
        
        $__internal_a8b532f54deaa8e94dcdcff64e56d6657b00a65721f0d2a93fdf8dc7074e5c4c->leave($__internal_a8b532f54deaa8e94dcdcff64e56d6657b00a65721f0d2a93fdf8dc7074e5c4c_prof);

        
        $__internal_ffc871c07d4b25de38eb26276b8deb4b5df9f76410aeb20518d65491801b92f2->leave($__internal_ffc871c07d4b25de38eb26276b8deb4b5df9f76410aeb20518d65491801b92f2_prof);

    }

    // line 100
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_2ea55edef6f078d88d0dd2a7f5fb7bbf1029c303e4e4faf7256ac72d9e92efc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea55edef6f078d88d0dd2a7f5fb7bbf1029c303e4e4faf7256ac72d9e92efc5->enter($__internal_2ea55edef6f078d88d0dd2a7f5fb7bbf1029c303e4e4faf7256ac72d9e92efc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_91dfdf2949acb283708a266cf1f780d84327a9f4230d89796a8cd1141897ee38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dfdf2949acb283708a266cf1f780d84327a9f4230d89796a8cd1141897ee38->enter($__internal_91dfdf2949acb283708a266cf1f780d84327a9f4230d89796a8cd1141897ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 101
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
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_rapport");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color: #fff;\"> Rapport</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"arrow_down header-icon\" aria-hidden=\"true\"></span>
                                    <span>Import</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_archive header-icon\" aria-hidden=\"true\"></span>
                                    <span>Archivage</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_parametrage");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>parametre</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_91dfdf2949acb283708a266cf1f780d84327a9f4230d89796a8cd1141897ee38->leave($__internal_91dfdf2949acb283708a266cf1f780d84327a9f4230d89796a8cd1141897ee38_prof);

        
        $__internal_2ea55edef6f078d88d0dd2a7f5fb7bbf1029c303e4e4faf7256ac72d9e92efc5->leave($__internal_2ea55edef6f078d88d0dd2a7f5fb7bbf1029c303e4e4faf7256ac72d9e92efc5_prof);

    }

    // line 141
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd31c3de3aac64e8a1520eaeee7f60ab822bf3e5ca27446a8cfe7ae128541c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd31c3de3aac64e8a1520eaeee7f60ab822bf3e5ca27446a8cfe7ae128541c37->enter($__internal_fd31c3de3aac64e8a1520eaeee7f60ab822bf3e5ca27446a8cfe7ae128541c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee6bd2e2d6a681a554a8d803ac1b81dea6b4bb2f8b6569e47e28a9a21e1c8aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6bd2e2d6a681a554a8d803ac1b81dea6b4bb2f8b6569e47e28a9a21e1c8aba->enter($__internal_ee6bd2e2d6a681a554a8d803ac1b81dea6b4bb2f8b6569e47e28a9a21e1c8aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 142
        echo "    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Rapport</h2>
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Rapport</a></li>
                <li class=\"breadcrumb-item active\">index</li>
            </ol>
        </div>

        <div class=\"content\">
            <div class=\"divider15\"></div>
            <div class=\"divider15\"></div>
            <div class=\"\">
                <div class=\"col-md-4\">
                    <div class=\"ribbon-box right-ribbon-box\">
                        <div class=\"ribbon-position sheer-ribbon left-ribbon-position\"><span class=\"icon icon_datareport\"></span> Centre du rapport</div>
                        <h4>Personnel</h4>
                        <h4>Enseignant</h4>
                        <h4>Etudiant</h4>
                    </div>

                </div>
                <div class=\"col-md-4\">
                    <div class=\"ribbon-box right-ribbon-box\">
                        <div class=\"ribbon-position sheer-ribbon left-ribbon-position\"><span class=\"icon icon_building\"></span> Rapports d'auberge</div>
                        <h4>Salle</h4>
                        <h4>Frais</h4>
                    </div>

                </div>
                <div class=\"col-md-4\">
                    <div class=\"ribbon-box right-ribbon-box\">
                        <div class=\"ribbon-position sheer-ribbon left-ribbon-position\"><span class=\"icon icon_calendar\"></span> Calendrier</div>
                        <p>Content here...</p>
                    </div>

                </div>
            </div>
            <div class=\"divider15\"></div>
            <div class=\"divider15\"></div>
        </div>
        </div>
    </section>
";
        
        $__internal_ee6bd2e2d6a681a554a8d803ac1b81dea6b4bb2f8b6569e47e28a9a21e1c8aba->leave($__internal_ee6bd2e2d6a681a554a8d803ac1b81dea6b4bb2f8b6569e47e28a9a21e1c8aba_prof);

        
        $__internal_fd31c3de3aac64e8a1520eaeee7f60ab822bf3e5ca27446a8cfe7ae128541c37->leave($__internal_fd31c3de3aac64e8a1520eaeee7f60ab822bf3e5ca27446a8cfe7ae128541c37_prof);

    }

    // line 190
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_0a22b3fc3f814b40ee3373379c80508312b8ed0eaf476404c90f39962c93e843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a22b3fc3f814b40ee3373379c80508312b8ed0eaf476404c90f39962c93e843->enter($__internal_0a22b3fc3f814b40ee3373379c80508312b8ed0eaf476404c90f39962c93e843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_bb159780417e7ec9aeef1b60cb07d2b341567879eff88f0002bf487dcfd8f976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb159780417e7ec9aeef1b60cb07d2b341567879eff88f0002bf487dcfd8f976->enter($__internal_bb159780417e7ec9aeef1b60cb07d2b341567879eff88f0002bf487dcfd8f976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 191
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/FooTable/compiled/footable.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-form-validator/form-validator/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mask-plugin/dist/jquery.mask.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/footable.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function selectBy(x) {
            if (document.getElementById(x).checked == true) {
                \$('#' + x + '1').prop('checked', true);
                \$('#' + x + '2').prop('checked', true);
                \$('#' + x + '3').prop('checked', true);
                \$('#' + x + '4').prop('checked', true);
            } else {
                \$('#' + x + '1').prop('checked', false);
                \$('#' + x + '2').prop('checked', false);
                \$('#' + x + '3').prop('checked', false);
                \$('#' + x + '4').prop('checked', false);
            }
        }
    </script>
";
        
        $__internal_bb159780417e7ec9aeef1b60cb07d2b341567879eff88f0002bf487dcfd8f976->leave($__internal_bb159780417e7ec9aeef1b60cb07d2b341567879eff88f0002bf487dcfd8f976_prof);

        
        $__internal_0a22b3fc3f814b40ee3373379c80508312b8ed0eaf476404c90f39962c93e843->leave($__internal_0a22b3fc3f814b40ee3373379c80508312b8ed0eaf476404c90f39962c93e843_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Compte:rapport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 216,  423 => 214,  418 => 212,  414 => 211,  410 => 210,  406 => 209,  402 => 208,  397 => 206,  392 => 204,  387 => 202,  383 => 201,  379 => 200,  375 => 199,  370 => 197,  366 => 196,  361 => 194,  356 => 192,  351 => 191,  342 => 190,  285 => 142,  276 => 141,  253 => 128,  232 => 110,  221 => 101,  212 => 100,  191 => 89,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Rapport{% endblock %}
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
    <link id=\"site-color\" rel=\"stylesheet\"
          href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/FooTable/compiled/footable.bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/hover/css/hover.min.css') }}\"/>
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
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_rapport') }}\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color: #fff;\"> Rapport</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"arrow_down header-icon\" aria-hidden=\"true\"></span>
                                    <span>Import</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_archive header-icon\" aria-hidden=\"true\"></span>
                                    <span>Archivage</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_parametrage') }}\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>parametre</span>
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
            <h2 class=\"float-xs-left content-title-main\">Rapport</h2>
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Rapport</a></li>
                <li class=\"breadcrumb-item active\">index</li>
            </ol>
        </div>

        <div class=\"content\">
            <div class=\"divider15\"></div>
            <div class=\"divider15\"></div>
            <div class=\"\">
                <div class=\"col-md-4\">
                    <div class=\"ribbon-box right-ribbon-box\">
                        <div class=\"ribbon-position sheer-ribbon left-ribbon-position\"><span class=\"icon icon_datareport\"></span> Centre du rapport</div>
                        <h4>Personnel</h4>
                        <h4>Enseignant</h4>
                        <h4>Etudiant</h4>
                    </div>

                </div>
                <div class=\"col-md-4\">
                    <div class=\"ribbon-box right-ribbon-box\">
                        <div class=\"ribbon-position sheer-ribbon left-ribbon-position\"><span class=\"icon icon_building\"></span> Rapports d'auberge</div>
                        <h4>Salle</h4>
                        <h4>Frais</h4>
                    </div>

                </div>
                <div class=\"col-md-4\">
                    <div class=\"ribbon-box right-ribbon-box\">
                        <div class=\"ribbon-position sheer-ribbon left-ribbon-position\"><span class=\"icon icon_calendar\"></span> Calendrier</div>
                        <p>Content here...</p>
                    </div>

                </div>
            </div>
            <div class=\"divider15\"></div>
            <div class=\"divider15\"></div>
        </div>
        </div>
    </section>
{% endblock %}
{% block scripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/tether/dist/js/tether.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/screenfull.js/dist/screenfull.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/moment/moment.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/FooTable/compiled/footable.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/jquery-form-validator/form-validator/jquery.form-validator.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/jquery-mask-plugin/dist/jquery.mask.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/footable.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\">
        function selectBy(x) {
            if (document.getElementById(x).checked == true) {
                \$('#' + x + '1').prop('checked', true);
                \$('#' + x + '2').prop('checked', true);
                \$('#' + x + '3').prop('checked', true);
                \$('#' + x + '4').prop('checked', true);
            } else {
                \$('#' + x + '1').prop('checked', false);
                \$('#' + x + '2').prop('checked', false);
                \$('#' + x + '3').prop('checked', false);
                \$('#' + x + '4').prop('checked', false);
            }
        }
    </script>
{% endblock %}", "ERPBundle:Admin/Compte:rapport.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Compte/rapport.html.twig");
    }
}
