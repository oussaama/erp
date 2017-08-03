<?php

/* ERPBundle:Admin/Membre/etudiant:showAll.html.twig */
class __TwigTemplate_c4cafb1130c72f82b3d3e78ff6fae2f7e4fb501be8d7b723a16520d45bce4eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:showAll.html.twig", 1);
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
        $__internal_7d25494e46b0a3cfecb3455c2dadd7b218c8f641d209b2385a6d3f08f5d97a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d25494e46b0a3cfecb3455c2dadd7b218c8f641d209b2385a6d3f08f5d97a52->enter($__internal_7d25494e46b0a3cfecb3455c2dadd7b218c8f641d209b2385a6d3f08f5d97a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:showAll.html.twig"));

        $__internal_1bdb3606eb93c1839a27c1a729180c0cd4a23d88bad475dab2db95343f0803f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdb3606eb93c1839a27c1a729180c0cd4a23d88bad475dab2db95343f0803f7->enter($__internal_1bdb3606eb93c1839a27c1a729180c0cd4a23d88bad475dab2db95343f0803f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:showAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d25494e46b0a3cfecb3455c2dadd7b218c8f641d209b2385a6d3f08f5d97a52->leave($__internal_7d25494e46b0a3cfecb3455c2dadd7b218c8f641d209b2385a6d3f08f5d97a52_prof);

        
        $__internal_1bdb3606eb93c1839a27c1a729180c0cd4a23d88bad475dab2db95343f0803f7->leave($__internal_1bdb3606eb93c1839a27c1a729180c0cd4a23d88bad475dab2db95343f0803f7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f97fd9caad7cc09899b26f9ba45e3d97c911aeb3744605b970cfeaa51c551d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f97fd9caad7cc09899b26f9ba45e3d97c911aeb3744605b970cfeaa51c551d9->enter($__internal_3f97fd9caad7cc09899b26f9ba45e3d97c911aeb3744605b970cfeaa51c551d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61233508876ddeec2f9aaf3457fe94570a1bae27f7bd031373a83da0f1ea9767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61233508876ddeec2f9aaf3457fe94570a1bae27f7bd031373a83da0f1ea9767->enter($__internal_61233508876ddeec2f9aaf3457fe94570a1bae27f7bd031373a83da0f1ea9767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_61233508876ddeec2f9aaf3457fe94570a1bae27f7bd031373a83da0f1ea9767->leave($__internal_61233508876ddeec2f9aaf3457fe94570a1bae27f7bd031373a83da0f1ea9767_prof);

        
        $__internal_3f97fd9caad7cc09899b26f9ba45e3d97c911aeb3744605b970cfeaa51c551d9->leave($__internal_3f97fd9caad7cc09899b26f9ba45e3d97c911aeb3744605b970cfeaa51c551d9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3b5c328bb4d31021e1218073cad4bfde960a77967f4bff1512f738c30694dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b5c328bb4d31021e1218073cad4bfde960a77967f4bff1512f738c30694dc1->enter($__internal_e3b5c328bb4d31021e1218073cad4bfde960a77967f4bff1512f738c30694dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_783b114e281aeceb59ed5f7629b2aad98f25ee0874771e4463ef2ca8542004b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783b114e281aeceb59ed5f7629b2aad98f25ee0874771e4463ef2ca8542004b8->enter($__internal_783b114e281aeceb59ed5f7629b2aad98f25ee0874771e4463ef2ca8542004b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        \$('#user').addClass('active');
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link id=\"site-color\" rel=\"stylesheet\"
          href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/css/color/light/color-default.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/css-hamburgers/dist/hamburgers.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/magnific-popup/dist/magnific-popup.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }

    </style>
";
        
        $__internal_783b114e281aeceb59ed5f7629b2aad98f25ee0874771e4463ef2ca8542004b8->leave($__internal_783b114e281aeceb59ed5f7629b2aad98f25ee0874771e4463ef2ca8542004b8_prof);

        
        $__internal_e3b5c328bb4d31021e1218073cad4bfde960a77967f4bff1512f738c30694dc1->leave($__internal_e3b5c328bb4d31021e1218073cad4bfde960a77967f4bff1512f738c30694dc1_prof);

    }

    // line 107
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_5a40c1fbe63fa8e4f7d330f037e510c784085e560314a98e6a03058d7af39dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a40c1fbe63fa8e4f7d330f037e510c784085e560314a98e6a03058d7af39dea->enter($__internal_5a40c1fbe63fa8e4f7d330f037e510c784085e560314a98e6a03058d7af39dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_84d2b3b7a8c83b359bd246d627d3dcbfc2572ef3f30ce1f078905cc967e3e188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d2b3b7a8c83b359bd246d627d3dcbfc2572ef3f30ce1f078905cc967e3e188->enter($__internal_84d2b3b7a8c83b359bd246d627d3dcbfc2572ef3f30ce1f078905cc967e3e188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 108
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
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise");
        echo "\">
                                    <span class=\"icon_tools header-icon\" aria-hidden=\"true\"></span>
                                    <span>Tuteur de stage</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_84d2b3b7a8c83b359bd246d627d3dcbfc2572ef3f30ce1f078905cc967e3e188->leave($__internal_84d2b3b7a8c83b359bd246d627d3dcbfc2572ef3f30ce1f078905cc967e3e188_prof);

        
        $__internal_5a40c1fbe63fa8e4f7d330f037e510c784085e560314a98e6a03058d7af39dea->leave($__internal_5a40c1fbe63fa8e4f7d330f037e510c784085e560314a98e6a03058d7af39dea_prof);

    }

    // line 149
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aadfb974f2fdf537a762ea381538ba98fcb9da2dfbcd01e050f2b2c9a4d07f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aadfb974f2fdf537a762ea381538ba98fcb9da2dfbcd01e050f2b2c9a4d07f4->enter($__internal_3aadfb974f2fdf537a762ea381538ba98fcb9da2dfbcd01e050f2b2c9a4d07f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc856d9f4b1f32736f25c2acd21042787b290b1597345f3bcc8694940303722c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc856d9f4b1f32736f25c2acd21042787b290b1597345f3bcc8694940303722c->enter($__internal_fc856d9f4b1f32736f25c2acd21042787b290b1597345f3bcc8694940303722c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 150
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
                <li class=\"breadcrumb-item active\">detail</li>
            </ol>

        </div>

        <div class=\"col-xs-12 col-lg-6 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <h4 class=\"page-content-title\">Information Personnel</h4>
                <div class=\"divider15\"></div>
                <div class=\"personal-info-box\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                        </div>
                        <div class=\"col-md-7\">
                            <img class=\"image-profile\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image1-profile.jpg"), "html", null, true);
        echo "\"
                                                            alt=\"Profile image\">
                            </img>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"divider15\"></div>
                        <div class=\"col-xs-12\">
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\"> Nom & Prenom :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\"> Numero etudiant :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cie", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\"> Nom & Prenom :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Cin :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cin", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Classe :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "classe", array()), "nomClass", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Date de Naissance :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 202
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "naissance", array()), "d-M-Y"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 206
        if (($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "sex", array()) == 1)) {
            echo "Homme";
        } else {
            echo " Femme ";
        }
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Email :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "adresse", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cp", array()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "pays", array()), "name", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Tel :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "tel", array()), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau d'études :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveauEtude", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Diplome qui souhaite :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "diplome", array()), "nom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Filiére :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "filiere", array()), "filiere", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Specicialite :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "specialite", array()), "nomSpecialite", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveau", array()), "niveau", array()), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-lg-5 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <div class=\"dashboard-content\">
                    <h4>Document </h4>
                    <div class=\"divider15\"></div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Identitée :</h4>
                            ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "document", array()), "identifiant", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["identifiant"]) {
            // line 257
            echo "                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["identifiant"])), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["identifiant"])), "html", null, true);
            echo "\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Id\"
                                             title=\"Identifiant\"/>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['identifiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Diplomes :</h4>
                            ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "document", array()), "diplome", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 273
            echo "                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"";
            // line 275
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["diplome"])), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["diplome"])), "html", null, true);
            echo "\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Diplome\"
                                             title=\"Diplome\"/>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Notes :</h4>
                            ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "document", array()), "note", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 289
            echo "                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"";
            // line 291
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["note"])), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["note"])), "html", null, true);
            echo "\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Note\"
                                             title=\"Note\"/>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Justificatif de paiment :</h4>
                            ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "document", array()), "extrait", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 305
            echo "                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"";
            // line 307
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . ($context["extrait"] ?? $this->getContext($context, "extrait")))), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . ($context["extrait"] ?? $this->getContext($context, "extrait")))), "html", null, true);
            echo "\" class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Extrait\" title=\"Extrait\"/>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"divider15\"></div>

                    </div>
                </div>
            </div>
    </section>
    <div id=\"view-validation\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Validation Etudiant</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <div class=\"profile-icon text-xs-center\">
                                    <p>confirmer cette etudiant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn\" id=\"validate\">Confirmer
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary refuse\">Refuser</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_fc856d9f4b1f32736f25c2acd21042787b290b1597345f3bcc8694940303722c->leave($__internal_fc856d9f4b1f32736f25c2acd21042787b290b1597345f3bcc8694940303722c_prof);

        
        $__internal_3aadfb974f2fdf537a762ea381538ba98fcb9da2dfbcd01e050f2b2c9a4d07f4->leave($__internal_3aadfb974f2fdf537a762ea381538ba98fcb9da2dfbcd01e050f2b2c9a4d07f4_prof);

    }

    // line 351
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_17107c6b17f6ab25c124f55d36c2590e582226af65a2a35a3e2ff36d996b7d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17107c6b17f6ab25c124f55d36c2590e582226af65a2a35a3e2ff36d996b7d19->enter($__internal_17107c6b17f6ab25c124f55d36c2590e582226af65a2a35a3e2ff36d996b7d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6dbf475163a47788a757d72489d71a75a4e4ff04852e7faa53860920c95290cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbf475163a47788a757d72489d71a75a4e4ff04852e7faa53860920c95290cb->enter($__internal_6dbf475163a47788a757d72489d71a75a4e4ff04852e7faa53860920c95290cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 352
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/lightbox.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
        \$('#validate').click(function () {
            id =";
        // line 396
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo ";
            alert(id);
            \$.ajax({
                url: Routing.generate('admin_Etudiant_validation', {'id': id, 'etat': 1}),
                success: function (result) {
                    console.log(result);
                    window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                },
                failed: function (a) {
                    console.log(a);
                }
            });
        });
        id =";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo ";
        \$('.refuse').click(function () {
            \$.ajax({
                url: Routing.generate('admin_Etudiant_validation', {'id': id, 'etat': 0}),
                success: function (result) {
                    console.log(result);
                    window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                },
                failed: function (a) {
                    console.log(a);
                }
            });
        });

        \$(\"#erpbundle_payment_carte\").keyup(function (e) {
            var tel = \$(\"#erpbundle_payment_carte\").val();
            if (tel.length > 20) {
                \$(\"#cartee\").fadeIn(500).text(\"vous devez verifier le numero de votre compte\").addClass('text-danger');
                \$(\"#erpbundle_payment_carte\").css(\"border\", \"1px solid red\");
            }
            else {
                \$(\"#cartee\").fadeOut(500);
                \$(\"#erpbundle_payment_carte\").css(\"border\", \"1px solid green\");
            }
        });
    </script>
";
        
        $__internal_6dbf475163a47788a757d72489d71a75a4e4ff04852e7faa53860920c95290cb->leave($__internal_6dbf475163a47788a757d72489d71a75a4e4ff04852e7faa53860920c95290cb_prof);

        
        $__internal_17107c6b17f6ab25c124f55d36c2590e582226af65a2a35a3e2ff36d996b7d19->leave($__internal_17107c6b17f6ab25c124f55d36c2590e582226af65a2a35a3e2ff36d996b7d19_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 409,  788 => 396,  779 => 390,  775 => 389,  771 => 388,  766 => 386,  761 => 384,  756 => 382,  751 => 380,  746 => 378,  741 => 376,  737 => 375,  733 => 374,  729 => 373,  725 => 372,  721 => 371,  716 => 369,  711 => 367,  706 => 365,  702 => 364,  698 => 363,  694 => 362,  690 => 361,  686 => 360,  681 => 358,  677 => 357,  672 => 355,  667 => 353,  662 => 352,  653 => 351,  605 => 312,  595 => 308,  591 => 307,  587 => 305,  583 => 304,  575 => 298,  563 => 292,  559 => 291,  555 => 289,  551 => 288,  543 => 282,  531 => 276,  527 => 275,  523 => 273,  519 => 272,  511 => 266,  499 => 260,  495 => 259,  491 => 257,  487 => 256,  467 => 239,  460 => 235,  453 => 231,  446 => 227,  439 => 223,  431 => 218,  418 => 214,  411 => 210,  400 => 206,  393 => 202,  386 => 198,  379 => 194,  370 => 190,  363 => 186,  354 => 182,  342 => 173,  317 => 150,  308 => 149,  285 => 136,  275 => 129,  266 => 123,  257 => 117,  246 => 108,  237 => 107,  219 => 99,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  198 => 93,  193 => 91,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  155 => 80,  151 => 79,  147 => 78,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Etudiant{% endblock %}
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
        \$('#user').addClass('active');
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap/dist/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link id=\"site-color\" rel=\"stylesheet\"
          href=\"{{ asset('assets/layouts/layout-material-menu/css/color/light/color-default.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/css-hamburgers/dist/hamburgers.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/morris.js/morris.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/magnific-popup/dist/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
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
                                <a href=\"{{ path('admin_Employee') }}\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Enseignant') }}\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Etudiant') }}\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Entreprise') }}\">
                                    <span class=\"icon_tools header-icon\" aria-hidden=\"true\"></span>
                                    <span>Tuteur de stage</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
                <li class=\"breadcrumb-item active\">detail</li>
            </ol>

        </div>

        <div class=\"col-xs-12 col-lg-6 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <h4 class=\"page-content-title\">Information Personnel</h4>
                <div class=\"divider15\"></div>
                <div class=\"personal-info-box\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                        </div>
                        <div class=\"col-md-7\">
                            <img class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image1-profile.jpg') }}\"
                                                            alt=\"Profile image\">
                            </img>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"divider15\"></div>
                        <div class=\"col-xs-12\">
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\"> Nom & Prenom :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.nom }} {{ etudiant.prenom }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\"> Numero etudiant :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.cie }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\"> Nom & Prenom :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.nom }} {{ etudiant.prenom }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Cin :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.cin }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Classe :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.classe.nomClass }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Date de Naissance :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.naissance | date('d-M-Y') }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                                <div class=\"detail-profile float-xs-right\">{% if etudiant.sex == 1 %}Homme{% else %} Femme {% endif %}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Email :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.email }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.adresse }}, {{ etudiant.ville }} {{ etudiant.cp }} , {{ etudiant.pays.name }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Tel :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.tel }}
                                </div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau d'études :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.niveauEtude }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Diplome qui souhaite :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.diplome.nom }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Filiére :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.filiere.filiere }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Specicialite :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.specialite.nomSpecialite }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.niveau.niveau }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-lg-5 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <div class=\"dashboard-content\">
                    <h4>Document </h4>
                    <div class=\"divider15\"></div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Identitée :</h4>
                            {% for identifiant in etudiant.document.identifiant %}
                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~identifiant) }}\">
                                        <img src=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~identifiant) }}\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Id\"
                                             title=\"Identifiant\"/>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Diplomes :</h4>
                            {% for diplome in etudiant.document.diplome %}
                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~diplome) }}\">
                                        <img src=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~diplome) }}\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Diplome\"
                                             title=\"Diplome\"/>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Notes :</h4>
                            {% for note in etudiant.document.note %}
                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~note) }}\">
                                        <img src=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~note) }}\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Note\"
                                             title=\"Note\"/>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Justificatif de paiment :</h4>
                            {% for note in etudiant.document.extrait %}
                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~extrait) }}\">
                                        <img src=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~extrait) }}\" class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Extrait\" title=\"Extrait\"/>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"divider15\"></div>

                    </div>
                </div>
            </div>
    </section>
    <div id=\"view-validation\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Validation Etudiant</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <div class=\"profile-icon text-xs-center\">
                                    <p>confirmer cette etudiant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn\" id=\"validate\">Confirmer
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary refuse\">Refuser</button>
                </div>
            </div>
        </div>
    </div>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/raphael/raphael.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/morris.js/morris.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/moment/min/moment.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/owl.carousel/dist/owl.carousel.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/lightbox.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEtudiant.js') }}\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
        \$('#validate').click(function () {
            id ={{ etudiant.id }};
            alert(id);
            \$.ajax({
                url: Routing.generate('admin_Etudiant_validation', {'id': id, 'etat': 1}),
                success: function (result) {
                    console.log(result);
                    window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                },
                failed: function (a) {
                    console.log(a);
                }
            });
        });
        id ={{ etudiant.id }};
        \$('.refuse').click(function () {
            \$.ajax({
                url: Routing.generate('admin_Etudiant_validation', {'id': id, 'etat': 0}),
                success: function (result) {
                    console.log(result);
                    window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                },
                failed: function (a) {
                    console.log(a);
                }
            });
        });

        \$(\"#erpbundle_payment_carte\").keyup(function (e) {
            var tel = \$(\"#erpbundle_payment_carte\").val();
            if (tel.length > 20) {
                \$(\"#cartee\").fadeIn(500).text(\"vous devez verifier le numero de votre compte\").addClass('text-danger');
                \$(\"#erpbundle_payment_carte\").css(\"border\", \"1px solid red\");
            }
            else {
                \$(\"#cartee\").fadeOut(500);
                \$(\"#erpbundle_payment_carte\").css(\"border\", \"1px solid green\");
            }
        });
    </script>
{% endblock %}
", "ERPBundle:Admin/Membre/etudiant:showAll.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/showAll.html.twig");
    }
}
