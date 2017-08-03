<?php

/* ERPBundle:Admin/payment:detail.html.twig */
class __TwigTemplate_025a96718eb56aa21fc0f896e3e76e935893b88bad671993aed493f837d0b3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/payment:detail.html.twig", 1);
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
        $__internal_89ae77077ae65da222d2cb19c530e235322794ff542a8f36cac9a31a3a945e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ae77077ae65da222d2cb19c530e235322794ff542a8f36cac9a31a3a945e5e->enter($__internal_89ae77077ae65da222d2cb19c530e235322794ff542a8f36cac9a31a3a945e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/payment:detail.html.twig"));

        $__internal_2ecdb6b15053728f872dc8a37b72dad436809d58e84c0b16543e6c26037b679f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecdb6b15053728f872dc8a37b72dad436809d58e84c0b16543e6c26037b679f->enter($__internal_2ecdb6b15053728f872dc8a37b72dad436809d58e84c0b16543e6c26037b679f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/payment:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ae77077ae65da222d2cb19c530e235322794ff542a8f36cac9a31a3a945e5e->leave($__internal_89ae77077ae65da222d2cb19c530e235322794ff542a8f36cac9a31a3a945e5e_prof);

        
        $__internal_2ecdb6b15053728f872dc8a37b72dad436809d58e84c0b16543e6c26037b679f->leave($__internal_2ecdb6b15053728f872dc8a37b72dad436809d58e84c0b16543e6c26037b679f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_887eaa92063dd6b7b1253b3ebc389171bf5a413a7359964675b2fce48443b033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887eaa92063dd6b7b1253b3ebc389171bf5a413a7359964675b2fce48443b033->enter($__internal_887eaa92063dd6b7b1253b3ebc389171bf5a413a7359964675b2fce48443b033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed7397b31db237bb20f6185e5352643c7510b6308c4aad76a7c2a95176cc9f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7397b31db237bb20f6185e5352643c7510b6308c4aad76a7c2a95176cc9f52->enter($__internal_ed7397b31db237bb20f6185e5352643c7510b6308c4aad76a7c2a95176cc9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Paiment";
        
        $__internal_ed7397b31db237bb20f6185e5352643c7510b6308c4aad76a7c2a95176cc9f52->leave($__internal_ed7397b31db237bb20f6185e5352643c7510b6308c4aad76a7c2a95176cc9f52_prof);

        
        $__internal_887eaa92063dd6b7b1253b3ebc389171bf5a413a7359964675b2fce48443b033->leave($__internal_887eaa92063dd6b7b1253b3ebc389171bf5a413a7359964675b2fce48443b033_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa197ef013ee58374ad560c93a8f034ab4f6c95d7f2d4e2f49192a26e205f3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa197ef013ee58374ad560c93a8f034ab4f6c95d7f2d4e2f49192a26e205f3a7->enter($__internal_fa197ef013ee58374ad560c93a8f034ab4f6c95d7f2d4e2f49192a26e205f3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8592e0d110180a77bbfe39c166f4cea26a31b3094b1a3adf52b681386a7f3da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8592e0d110180a77bbfe39c166f4cea26a31b3094b1a3adf52b681386a7f3da0->enter($__internal_8592e0d110180a77bbfe39c166f4cea26a31b3094b1a3adf52b681386a7f3da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        #sidebar {
            margin-top: -4px;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }

    </style>
";
        
        $__internal_8592e0d110180a77bbfe39c166f4cea26a31b3094b1a3adf52b681386a7f3da0->leave($__internal_8592e0d110180a77bbfe39c166f4cea26a31b3094b1a3adf52b681386a7f3da0_prof);

        
        $__internal_fa197ef013ee58374ad560c93a8f034ab4f6c95d7f2d4e2f49192a26e205f3a7->leave($__internal_fa197ef013ee58374ad560c93a8f034ab4f6c95d7f2d4e2f49192a26e205f3a7_prof);

    }

    // line 111
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_1b13ccf1546e687b7ab980cad4bd3bbab1c4714a3852c1a8e9e63631c61996e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b13ccf1546e687b7ab980cad4bd3bbab1c4714a3852c1a8e9e63631c61996e9->enter($__internal_1b13ccf1546e687b7ab980cad4bd3bbab1c4714a3852c1a8e9e63631c61996e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_47e209207202d4ec822aa74251f3f2c61400015dd027d6b68af7a5d7b91b2785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e209207202d4ec822aa74251f3f2c61400015dd027d6b68af7a5d7b91b2785->enter($__internal_47e209207202d4ec822aa74251f3f2c61400015dd027d6b68af7a5d7b91b2785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 112
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
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise");
        echo "\">
                                    <span class=\"icon_tools header-icon\" aria-hidden=\"true\"></span>
                                    <span>Entreprise</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_47e209207202d4ec822aa74251f3f2c61400015dd027d6b68af7a5d7b91b2785->leave($__internal_47e209207202d4ec822aa74251f3f2c61400015dd027d6b68af7a5d7b91b2785_prof);

        
        $__internal_1b13ccf1546e687b7ab980cad4bd3bbab1c4714a3852c1a8e9e63631c61996e9->leave($__internal_1b13ccf1546e687b7ab980cad4bd3bbab1c4714a3852c1a8e9e63631c61996e9_prof);

    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c2bb58ce9e5cf3031d425ee3202497a0625e4cec2a2dfcd8371316bfedbc4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2bb58ce9e5cf3031d425ee3202497a0625e4cec2a2dfcd8371316bfedbc4af->enter($__internal_8c2bb58ce9e5cf3031d425ee3202497a0625e4cec2a2dfcd8371316bfedbc4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea21e199288316496f16575c68d956f5c067519a80f9071958f57683c27515bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea21e199288316496f16575c68d956f5c067519a80f9071958f57683c27515bd->enter($__internal_ea21e199288316496f16575c68d956f5c067519a80f9071958f57683c27515bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 154
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Payment</a></li>
                <li class=\"breadcrumb-item active\">detail</li>
            </ol>

        </div>

        <div class=\"col-xs-12 col-lg-7 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <h4 class=\"page-content-title\">Information Personnel</h4>
                <div class=\"divider15\"></div>
                <div class=\"personal-info-box\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                        </div>
                        <div class=\"col-md-6\">
                            <img class=\"image-profile\"><img src=\"";
        // line 177
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
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Cin :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cin", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Date de Naissance :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 194
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "naissance", array()), "d-M-Y"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 198
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
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "adresse", array()), "html", null, true);
        echo "
                                    , ";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cp", array()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "pays", array()), "fr", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Tel :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "tel", array()), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau d'études :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveauEtude", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Diplome qui souhaite :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "diplome", array()), "nom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Filiére :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "filiere", array()), "filiere", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Specicialite :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "specialite", array()), "nomSpecialite", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 232
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
                    <div class=\"divider15\"></div>
                    <div class=\"divider15\"></div>
                </div>
            </div>
    </section>
";
        
        $__internal_ea21e199288316496f16575c68d956f5c067519a80f9071958f57683c27515bd->leave($__internal_ea21e199288316496f16575c68d956f5c067519a80f9071958f57683c27515bd_prof);

        
        $__internal_8c2bb58ce9e5cf3031d425ee3202497a0625e4cec2a2dfcd8371316bfedbc4af->leave($__internal_8c2bb58ce9e5cf3031d425ee3202497a0625e4cec2a2dfcd8371316bfedbc4af_prof);

    }

    // line 249
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_aed5521f3f083ed5a29607d4df0aad555578dc09307607681ff6db4472257755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed5521f3f083ed5a29607d4df0aad555578dc09307607681ff6db4472257755->enter($__internal_aed5521f3f083ed5a29607d4df0aad555578dc09307607681ff6db4472257755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_263223f4e7e3241d93c0c740d0d12d042cd965a15939efabc54d74b9474016a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263223f4e7e3241d93c0c740d0d12d042cd965a15939efabc54d74b9474016a1->enter($__internal_263223f4e7e3241d93c0c740d0d12d042cd965a15939efabc54d74b9474016a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 250
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/lightbox.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
        \$(\".animationGallery\").magnificPopup({
            delegate: \"a\",
            type: \"image\",
            closeOnContentClick: !1,
            closeBtnInside: !1,
            mainClass: \"mfp-with-zoom mfp-img-mobile\",
            image: {
                verticalFit: !0,
                titleSrc: function (item) {
                    return item.el.attr(\"title\") + ' · <a class=\"image-source-link\" href=\"' + item.el.attr(\"data-source\") + '\" target=\"_blank\">image source</a>'
                }
            },
            gallery: {
                enabled: !0
            },
            zoom: {
                enabled: !0,
                duration: 300,
                opener: function (element) {
                    return element.find(\"img\")
                }
            }
        });
    </script>
";
        
        $__internal_263223f4e7e3241d93c0c740d0d12d042cd965a15939efabc54d74b9474016a1->leave($__internal_263223f4e7e3241d93c0c740d0d12d042cd965a15939efabc54d74b9474016a1_prof);

        
        $__internal_aed5521f3f083ed5a29607d4df0aad555578dc09307607681ff6db4472257755->leave($__internal_aed5521f3f083ed5a29607d4df0aad555578dc09307607681ff6db4472257755_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/payment:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 288,  599 => 287,  595 => 286,  590 => 284,  585 => 282,  580 => 280,  575 => 278,  570 => 276,  565 => 274,  561 => 273,  557 => 272,  553 => 271,  549 => 270,  545 => 269,  540 => 267,  535 => 265,  530 => 263,  526 => 262,  522 => 261,  518 => 260,  514 => 259,  510 => 258,  505 => 256,  501 => 255,  496 => 253,  491 => 251,  486 => 250,  477 => 249,  450 => 232,  443 => 228,  436 => 224,  429 => 220,  422 => 216,  414 => 211,  403 => 207,  399 => 206,  392 => 202,  381 => 198,  374 => 194,  367 => 190,  358 => 186,  346 => 177,  321 => 154,  312 => 153,  289 => 140,  279 => 133,  270 => 127,  261 => 121,  250 => 112,  241 => 111,  219 => 99,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  198 => 93,  193 => 91,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  155 => 80,  151 => 79,  147 => 78,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Paiment{% endblock %}
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
        #sidebar {
            margin-top: -4px;
        }

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
                                    <span>Entreprise</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Payment</a></li>
                <li class=\"breadcrumb-item active\">detail</li>
            </ol>

        </div>

        <div class=\"col-xs-12 col-lg-7 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <h4 class=\"page-content-title\">Information Personnel</h4>
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
                                    , {{ etudiant.ville }} {{ etudiant.cp }} , {{ etudiant.pays.fr }}</div>
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
        \$(\".animationGallery\").magnificPopup({
            delegate: \"a\",
            type: \"image\",
            closeOnContentClick: !1,
            closeBtnInside: !1,
            mainClass: \"mfp-with-zoom mfp-img-mobile\",
            image: {
                verticalFit: !0,
                titleSrc: function (item) {
                    return item.el.attr(\"title\") + ' · <a class=\"image-source-link\" href=\"' + item.el.attr(\"data-source\") + '\" target=\"_blank\">image source</a>'
                }
            },
            gallery: {
                enabled: !0
            },
            zoom: {
                enabled: !0,
                duration: 300,
                opener: function (element) {
                    return element.find(\"img\")
                }
            }
        });
    </script>
{% endblock %}
", "ERPBundle:Admin/payment:detail.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/payment/detail.html.twig");
    }
}
