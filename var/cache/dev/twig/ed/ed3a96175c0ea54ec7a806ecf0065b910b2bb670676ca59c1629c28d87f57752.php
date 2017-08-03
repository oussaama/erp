<?php

/* ERPBundle:Admin/Membre/etudiant:payment.html.twig */
class __TwigTemplate_5b429e28e7ddf6f4dbabed22d9048e5b2c164dcf11bbac973853a3dfd01b19ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:payment.html.twig", 1);
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
        $__internal_c0d78652398f9ef6dc56a22c33cb6c46b93d289626ec43547f438828371c5f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d78652398f9ef6dc56a22c33cb6c46b93d289626ec43547f438828371c5f0e->enter($__internal_c0d78652398f9ef6dc56a22c33cb6c46b93d289626ec43547f438828371c5f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:payment.html.twig"));

        $__internal_2e56af40287345f93c834db9f46f259120f96c8d5e4707baead042c6bd64be67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e56af40287345f93c834db9f46f259120f96c8d5e4707baead042c6bd64be67->enter($__internal_2e56af40287345f93c834db9f46f259120f96c8d5e4707baead042c6bd64be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d78652398f9ef6dc56a22c33cb6c46b93d289626ec43547f438828371c5f0e->leave($__internal_c0d78652398f9ef6dc56a22c33cb6c46b93d289626ec43547f438828371c5f0e_prof);

        
        $__internal_2e56af40287345f93c834db9f46f259120f96c8d5e4707baead042c6bd64be67->leave($__internal_2e56af40287345f93c834db9f46f259120f96c8d5e4707baead042c6bd64be67_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cab46f7151bd1d7b5fced378f293453563215e57a4c2473029e225fd6434a9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab46f7151bd1d7b5fced378f293453563215e57a4c2473029e225fd6434a9cd->enter($__internal_cab46f7151bd1d7b5fced378f293453563215e57a4c2473029e225fd6434a9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f9ff5d676538a7ba936894cd3c7717446dca536cc762d6069d3b28748c9a317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9ff5d676538a7ba936894cd3c7717446dca536cc762d6069d3b28748c9a317->enter($__internal_4f9ff5d676538a7ba936894cd3c7717446dca536cc762d6069d3b28748c9a317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_4f9ff5d676538a7ba936894cd3c7717446dca536cc762d6069d3b28748c9a317->leave($__internal_4f9ff5d676538a7ba936894cd3c7717446dca536cc762d6069d3b28748c9a317_prof);

        
        $__internal_cab46f7151bd1d7b5fced378f293453563215e57a4c2473029e225fd6434a9cd->leave($__internal_cab46f7151bd1d7b5fced378f293453563215e57a4c2473029e225fd6434a9cd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e09c8f313bd468e9aaa59082505fe743d23290140160ff0a01fc44f3815622b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e09c8f313bd468e9aaa59082505fe743d23290140160ff0a01fc44f3815622b->enter($__internal_7e09c8f313bd468e9aaa59082505fe743d23290140160ff0a01fc44f3815622b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_295d4811417fd90263be8e687d1a2853efec157f01a26d2cff72a0cd95d2ed36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295d4811417fd90263be8e687d1a2853efec157f01a26d2cff72a0cd95d2ed36->enter($__internal_295d4811417fd90263be8e687d1a2853efec157f01a26d2cff72a0cd95d2ed36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        tr [colspan=\"2\"] {
            text-align: center;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }

        .input-form {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_295d4811417fd90263be8e687d1a2853efec157f01a26d2cff72a0cd95d2ed36->leave($__internal_295d4811417fd90263be8e687d1a2853efec157f01a26d2cff72a0cd95d2ed36_prof);

        
        $__internal_7e09c8f313bd468e9aaa59082505fe743d23290140160ff0a01fc44f3815622b->leave($__internal_7e09c8f313bd468e9aaa59082505fe743d23290140160ff0a01fc44f3815622b_prof);

    }

    // line 113
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_541dd81a037731f2db729b978650767506e8d70f848ed7ea661426fe024ce70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541dd81a037731f2db729b978650767506e8d70f848ed7ea661426fe024ce70d->enter($__internal_541dd81a037731f2db729b978650767506e8d70f848ed7ea661426fe024ce70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_cb1a7cbce4ba88ccce65a686cea8d360970545a228457250e00a0c34814535fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1a7cbce4ba88ccce65a686cea8d360970545a228457250e00a0c34814535fa->enter($__internal_cb1a7cbce4ba88ccce65a686cea8d360970545a228457250e00a0c34814535fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 114
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
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_payment_index");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\" style=\"color:white;\"></span>
                                    <span style=\"color:white\">Paiment</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_status_index");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Mode Paiment</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_cb1a7cbce4ba88ccce65a686cea8d360970545a228457250e00a0c34814535fa->leave($__internal_cb1a7cbce4ba88ccce65a686cea8d360970545a228457250e00a0c34814535fa_prof);

        
        $__internal_541dd81a037731f2db729b978650767506e8d70f848ed7ea661426fe024ce70d->leave($__internal_541dd81a037731f2db729b978650767506e8d70f848ed7ea661426fe024ce70d_prof);

    }

    // line 141
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb28dfe8a32e7ab6f4ca48404e57a9555d134b414c7f06e67b0a29bee5e5e198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb28dfe8a32e7ab6f4ca48404e57a9555d134b414c7f06e67b0a29bee5e5e198->enter($__internal_fb28dfe8a32e7ab6f4ca48404e57a9555d134b414c7f06e67b0a29bee5e5e198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1872d65f027107f0801914f42ea9ed9b832eed0f647ae6fb432c84d75c22af15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1872d65f027107f0801914f42ea9ed9b832eed0f647ae6fb432c84d75c22af15->enter($__internal_1872d65f027107f0801914f42ea9ed9b832eed0f647ae6fb432c84d75c22af15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 142
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
                <li class=\"breadcrumb-item active\">payment</li>
            </ol>

        </div>

        <div class=\"col-xs-12 col-lg-6 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <h4 class=\"page-content-title\">Personal Information</h4>
                <div class=\"divider15\"></div>
                <div class=\"personal-info-box\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                        </div>
                        <div class=\"col-md-6\">
                            <img class=\"image-profile\"><img src=\"";
        // line 166
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
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Cin :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cin", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Date de Naissance :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 183
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "naissance", array()), "d-M-Y"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 187
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
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "adresse", array()), "html", null, true);
        echo "
                                    , ";
        // line 196
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
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "tel", array()), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau d'études :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveauEtude", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Diplome qui souhaite :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "diplome", array()), "nom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Filiére :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "filiere", array()), "filiere", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Specicialite :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "specialite", array()), "nomSpecialite", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveau", array()), "niveau", array()), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-lg-6 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <div class=\"dashboard-content\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h4 class=\"page-content-title\">Tranches Paiement Informations</h4>
                            <div class=\"divider15\"></div>
                            <div class=\"personal-info-box\">

                                <div class=\"basic_table table-responsive\">
                                    <table class=\"table table-striped table-hover display nowrap\" id=\"validate\">
                                        <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Date Debut</th>
                                            <th>Date Fin</th>
                                            <th>Etat</th>
                                            <th>Montant</th>
                                            <th>Reste</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tranche"] ?? $this->getContext($context, "tranche")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 252
            echo "                                            ";
            if (($this->getAttribute($context["t"], "state", array()) == "en attente")) {
                // line 253
                echo "                                            <tr class=\"table-danger\">
                                                <td>";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "title", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateDeb", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateFin", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "state", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "montant", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reste", array()), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            } else {
                // line 262
                echo "                                            <tr class=\"table-success\">
                                                <td>";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "title", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateDeb", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateFin", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "state", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "montant", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reste", array()), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            }
            // line 271
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"col-md-12\">
                            <h4 class=\"page-content-title\">liste des Paiement</h4>
                            <div class=\"divider15\"></div>
                            <div class=\"personal-info-box\">

                                <div class=\"basic_table table-responsive\">
                                    <table class=\"table table-striped table-hover display nowrap\" id=\"validate\">
                                        <thead>
                                        <tr>
                                            <th>Solde</th>
                                            <th>Date</th>
                                            <th>Mode</th>
                                            <th>Numero </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payments"] ?? $this->getContext($context, "payments")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 295
            echo "                                            <tr>
                                                <td>";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "solde", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 297
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "createdAt", array()), "Y M D H:i:s"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "status", array()), "type", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "carte", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"divider15\"></div>
                        <div class=\"divider15\"></div>
                        <div class=\"container\">
                            ";
        // line 311
        if ((($context["msg"] ?? $this->getContext($context, "msg")) != null)) {
            // line 312
            echo "                                <span alert alert-danger>";
            echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
            echo "</span>
                            ";
        }
        // line 314
        echo "                            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_etudiant_payment", array("id" => $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array())))));
        echo "
                            <div class=\"row\">
                                <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                    <div class=\"left-name-profile float-xs-left\">Solde de paiement :</div>
                                    <div> ";
        // line 318
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "solde", array()), 'widget');
        echo "</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                    <div class=\"left-name-profile float-xs-left\">Mode de paiement:</div>
                                    <div>  ";
        // line 324
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'widget');
        echo "</div>
                                </div>
                            </div>
                            <div class=\"row\" id=\"cartee\">
                                <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                    <div class=\"left-name-profile float-xs-left\">Numero Carte</div>
                                    <div>";
        // line 330
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "carte", array()), 'widget');
        echo "</div>
                                    <span></span>
                                </div>
                            </div>
                            <br>
                            <button class=\"btn btn-primary\" data-target=\"#view-add\" data-toggle=\"modal\" type=\"submit\"
                                    style=\"margin:auto;display:block\">Ajouter
                            </button>
                            <input type=\"hidden\" value=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
                            ";
        // line 339
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
    </section>
";
        
        $__internal_1872d65f027107f0801914f42ea9ed9b832eed0f647ae6fb432c84d75c22af15->leave($__internal_1872d65f027107f0801914f42ea9ed9b832eed0f647ae6fb432c84d75c22af15_prof);

        
        $__internal_fb28dfe8a32e7ab6f4ca48404e57a9555d134b414c7f06e67b0a29bee5e5e198->leave($__internal_fb28dfe8a32e7ab6f4ca48404e57a9555d134b414c7f06e67b0a29bee5e5e198_prof);

    }

    // line 346
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_0862b79bd20bc97dc0ffc984ab621789e81bac44cf9b535e791aae3e0457058d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0862b79bd20bc97dc0ffc984ab621789e81bac44cf9b535e791aae3e0457058d->enter($__internal_0862b79bd20bc97dc0ffc984ab621789e81bac44cf9b535e791aae3e0457058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_0bd4bb181494515ffbbefdb955d10b7aad29961d392089426273a83e5f104e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd4bb181494515ffbbefdb955d10b7aad29961d392089426273a83e5f104e5d->enter($__internal_0bd4bb181494515ffbbefdb955d10b7aad29961d392089426273a83e5f104e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 347
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#paiment').addClass('active');
        \$('#cartee').hide();
        \$('#erpbundle_payment_status').change(function () {
            id= \$(this).val();
            \$.ajax({
                'url':Routing.generate('methode_paiment',{'id':id}),
                'method' : 'POST',
                'success' : function(data){
                    if (data.methode == \"chéque\" || data.methode == \"virement\" || data.methode == \"carte bancaire\"){
                        \$('#cartee').show();
                    }else{
                        \$('#cartee').hide();
                    }
                }
            });
        });
    </script>
";
        
        $__internal_0bd4bb181494515ffbbefdb955d10b7aad29961d392089426273a83e5f104e5d->leave($__internal_0bd4bb181494515ffbbefdb955d10b7aad29961d392089426273a83e5f104e5d_prof);

        
        $__internal_0862b79bd20bc97dc0ffc984ab621789e81bac44cf9b535e791aae3e0457058d->leave($__internal_0862b79bd20bc97dc0ffc984ab621789e81bac44cf9b535e791aae3e0457058d_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  780 => 382,  776 => 381,  771 => 379,  766 => 377,  761 => 375,  756 => 373,  751 => 371,  747 => 370,  743 => 369,  739 => 368,  735 => 367,  731 => 366,  726 => 364,  721 => 362,  716 => 360,  712 => 359,  708 => 358,  704 => 357,  700 => 356,  696 => 355,  691 => 353,  687 => 352,  682 => 350,  677 => 348,  672 => 347,  663 => 346,  646 => 339,  642 => 338,  631 => 330,  622 => 324,  613 => 318,  605 => 314,  599 => 312,  597 => 311,  586 => 302,  577 => 299,  573 => 298,  569 => 297,  565 => 296,  562 => 295,  558 => 294,  534 => 272,  528 => 271,  522 => 268,  518 => 267,  514 => 266,  510 => 265,  506 => 264,  502 => 263,  499 => 262,  493 => 259,  489 => 258,  485 => 257,  481 => 256,  477 => 255,  473 => 254,  470 => 253,  467 => 252,  463 => 251,  430 => 221,  423 => 217,  416 => 213,  409 => 209,  402 => 205,  394 => 200,  383 => 196,  379 => 195,  372 => 191,  361 => 187,  354 => 183,  347 => 179,  338 => 175,  326 => 166,  300 => 142,  291 => 141,  269 => 129,  260 => 123,  249 => 114,  240 => 113,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  198 => 93,  193 => 91,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  155 => 80,  151 => 79,  147 => 78,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <style>
        tr [colspan=\"2\"] {
            text-align: center;
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
                                <a href=\"{{ path('admin_payment_index') }}\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\" style=\"color:white;\"></span>
                                    <span style=\"color:white\">Paiment</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_status_index') }}\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Mode Paiment</span>
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
                <li class=\"breadcrumb-item active\">payment</li>
            </ol>

        </div>

        <div class=\"col-xs-12 col-lg-6 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <h4 class=\"page-content-title\">Personal Information</h4>
                <div class=\"divider15\"></div>
                <div class=\"personal-info-box\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                        </div>
                        <div class=\"col-md-6\">
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
                                <div class=\"left-name-profile float-xs-left\">Cin :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.cin }}</div>
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
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.adresse }}
                                    , {{ etudiant.ville }} {{ etudiant.cp }} , {{ etudiant.pays.name }}</div>
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
        <div class=\"col-xs-12 col-lg-6 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <div class=\"dashboard-content\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h4 class=\"page-content-title\">Tranches Paiement Informations</h4>
                            <div class=\"divider15\"></div>
                            <div class=\"personal-info-box\">

                                <div class=\"basic_table table-responsive\">
                                    <table class=\"table table-striped table-hover display nowrap\" id=\"validate\">
                                        <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Date Debut</th>
                                            <th>Date Fin</th>
                                            <th>Etat</th>
                                            <th>Montant</th>
                                            <th>Reste</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for t in tranche %}
                                            {% if t.state == \"en attente\" %}
                                            <tr class=\"table-danger\">
                                                <td>{{ t.title }}</td>
                                                <td>{{ t.dateDeb }}</td>
                                                <td>{{ t.dateFin }}</td>
                                                <td>{{ t.state }}</td>
                                                <td>{{ t.montant }}</td>
                                                <td>{{ t.reste }}</td>
                                            </tr>
                                        {% else %}
                                            <tr class=\"table-success\">
                                                <td>{{ t.title }}</td>
                                                <td>{{ t.dateDeb }}</td>
                                                <td>{{ t.dateFin }}</td>
                                                <td>{{ t.state }}</td>
                                                <td>{{ t.montant }}</td>
                                                <td>{{ t.reste }}</td>
                                            </tr>
                                        {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"col-md-12\">
                            <h4 class=\"page-content-title\">liste des Paiement</h4>
                            <div class=\"divider15\"></div>
                            <div class=\"personal-info-box\">

                                <div class=\"basic_table table-responsive\">
                                    <table class=\"table table-striped table-hover display nowrap\" id=\"validate\">
                                        <thead>
                                        <tr>
                                            <th>Solde</th>
                                            <th>Date</th>
                                            <th>Mode</th>
                                            <th>Numero </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for s in payments %}
                                            <tr>
                                                <td>{{ s.solde }}</td>
                                                <td>{{ s.createdAt| date('Y M D H:i:s') }}</td>
                                                <td>{{ s.status.type }}</td>
                                                <td>{{ s.carte }}</td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"divider15\"></div>
                        <div class=\"divider15\"></div>
                        <div class=\"container\">
                            {% if msg!= null %}
                                <span alert alert-danger>{{ msg }}</span>
                            {% endif %}
                            {{ form_start(form,{'path':path('admin_etudiant_payment',{'id':etudiant.id})}) }}
                            <div class=\"row\">
                                <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                    <div class=\"left-name-profile float-xs-left\">Solde de paiement :</div>
                                    <div> {{ form_widget(form.solde) }}</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                    <div class=\"left-name-profile float-xs-left\">Mode de paiement:</div>
                                    <div>  {{ form_widget(form.status) }}</div>
                                </div>
                            </div>
                            <div class=\"row\" id=\"cartee\">
                                <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                    <div class=\"left-name-profile float-xs-left\">Numero Carte</div>
                                    <div>{{ form_widget(form.carte) }}</div>
                                    <span></span>
                                </div>
                            </div>
                            <br>
                            <button class=\"btn btn-primary\" data-target=\"#view-add\" data-toggle=\"modal\" type=\"submit\"
                                    style=\"margin:auto;display:block\">Ajouter
                            </button>
                            <input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
                            {{ form_end(form) }}
                        </div>
                    </div>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEtudiant.js') }}\"></script>
    <script>
        \$('#paiment').addClass('active');
        \$('#cartee').hide();
        \$('#erpbundle_payment_status').change(function () {
            id= \$(this).val();
            \$.ajax({
                'url':Routing.generate('methode_paiment',{'id':id}),
                'method' : 'POST',
                'success' : function(data){
                    if (data.methode == \"chéque\" || data.methode == \"virement\" || data.methode == \"carte bancaire\"){
                        \$('#cartee').show();
                    }else{
                        \$('#cartee').hide();
                    }
                }
            });
        });
    </script>
{% endblock %}

", "ERPBundle:Admin/Membre/etudiant:payment.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/payment.html.twig");
    }
}
