<?php

/* ERPBundle:Admin/Membre/etudiant:paymentDetail.html.twig */
class __TwigTemplate_5bd649595747e242f5a6ec00197c80d36ce438766d94de20bdda32aaf62ab803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:paymentDetail.html.twig", 1);
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
        $__internal_0074e6a42346b7ec815292e18693bd7d013085cd370d2c472bf10e6f564340cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0074e6a42346b7ec815292e18693bd7d013085cd370d2c472bf10e6f564340cd->enter($__internal_0074e6a42346b7ec815292e18693bd7d013085cd370d2c472bf10e6f564340cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:paymentDetail.html.twig"));

        $__internal_464a37507b813b166a96547737e0e7d6340170d2b8d3d4052a47b62de7f65009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464a37507b813b166a96547737e0e7d6340170d2b8d3d4052a47b62de7f65009->enter($__internal_464a37507b813b166a96547737e0e7d6340170d2b8d3d4052a47b62de7f65009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:paymentDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0074e6a42346b7ec815292e18693bd7d013085cd370d2c472bf10e6f564340cd->leave($__internal_0074e6a42346b7ec815292e18693bd7d013085cd370d2c472bf10e6f564340cd_prof);

        
        $__internal_464a37507b813b166a96547737e0e7d6340170d2b8d3d4052a47b62de7f65009->leave($__internal_464a37507b813b166a96547737e0e7d6340170d2b8d3d4052a47b62de7f65009_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_711ac7e18280355ad62a134b42201234b78dd0d331a2acb10cf64ede9954e5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711ac7e18280355ad62a134b42201234b78dd0d331a2acb10cf64ede9954e5ce->enter($__internal_711ac7e18280355ad62a134b42201234b78dd0d331a2acb10cf64ede9954e5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b92628f63eb7614b11dc0c92c0b84ccf798c5ccb6d60ca618a9b19bd33e9bc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92628f63eb7614b11dc0c92c0b84ccf798c5ccb6d60ca618a9b19bd33e9bc6d->enter($__internal_b92628f63eb7614b11dc0c92c0b84ccf798c5ccb6d60ca618a9b19bd33e9bc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_b92628f63eb7614b11dc0c92c0b84ccf798c5ccb6d60ca618a9b19bd33e9bc6d->leave($__internal_b92628f63eb7614b11dc0c92c0b84ccf798c5ccb6d60ca618a9b19bd33e9bc6d_prof);

        
        $__internal_711ac7e18280355ad62a134b42201234b78dd0d331a2acb10cf64ede9954e5ce->leave($__internal_711ac7e18280355ad62a134b42201234b78dd0d331a2acb10cf64ede9954e5ce_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2507163e83c0d67cb3d49b40380f347f159337bf009fb4465d93b729137e9ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2507163e83c0d67cb3d49b40380f347f159337bf009fb4465d93b729137e9ed3->enter($__internal_2507163e83c0d67cb3d49b40380f347f159337bf009fb4465d93b729137e9ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b9b869f537c54a42a8be4d74ca975396cc4e3c1aa262bb9a4d1f33cc44eca37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b869f537c54a42a8be4d74ca975396cc4e3c1aa262bb9a4d1f33cc44eca37a->enter($__internal_b9b869f537c54a42a8be4d74ca975396cc4e3c1aa262bb9a4d1f33cc44eca37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        #sidebar {
            margin-top: -4px;
        }

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
        
        $__internal_b9b869f537c54a42a8be4d74ca975396cc4e3c1aa262bb9a4d1f33cc44eca37a->leave($__internal_b9b869f537c54a42a8be4d74ca975396cc4e3c1aa262bb9a4d1f33cc44eca37a_prof);

        
        $__internal_2507163e83c0d67cb3d49b40380f347f159337bf009fb4465d93b729137e9ed3->leave($__internal_2507163e83c0d67cb3d49b40380f347f159337bf009fb4465d93b729137e9ed3_prof);

    }

    // line 117
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_fde918db0e10ff2a52c5624b245fbade328c898ce3b2150b0fd8d17cee50200d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde918db0e10ff2a52c5624b245fbade328c898ce3b2150b0fd8d17cee50200d->enter($__internal_fde918db0e10ff2a52c5624b245fbade328c898ce3b2150b0fd8d17cee50200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_ca6d35c0eec4febd1b75e15213fcd8df974473a2c80634ce1e9eb011284980a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6d35c0eec4febd1b75e15213fcd8df974473a2c80634ce1e9eb011284980a9->enter($__internal_ca6d35c0eec4febd1b75e15213fcd8df974473a2c80634ce1e9eb011284980a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 118
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
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 146
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
        
        $__internal_ca6d35c0eec4febd1b75e15213fcd8df974473a2c80634ce1e9eb011284980a9->leave($__internal_ca6d35c0eec4febd1b75e15213fcd8df974473a2c80634ce1e9eb011284980a9_prof);

        
        $__internal_fde918db0e10ff2a52c5624b245fbade328c898ce3b2150b0fd8d17cee50200d->leave($__internal_fde918db0e10ff2a52c5624b245fbade328c898ce3b2150b0fd8d17cee50200d_prof);

    }

    // line 159
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3d9cbd18e2ec1d24d8c711860f691dec2254e569f00c1dc3477d08c474eca32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d9cbd18e2ec1d24d8c711860f691dec2254e569f00c1dc3477d08c474eca32->enter($__internal_b3d9cbd18e2ec1d24d8c711860f691dec2254e569f00c1dc3477d08c474eca32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3efd01bc174375b5ea764a2fb7eb3bc1bd141adfc7c530843e7ee4bd1f8805ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efd01bc174375b5ea764a2fb7eb3bc1bd141adfc7c530843e7ee4bd1f8805ab->enter($__internal_3efd01bc174375b5ea764a2fb7eb3bc1bd141adfc7c530843e7ee4bd1f8805ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 160
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
        // line 184
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
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Cin :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cin", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Date de Naissance :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 201
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "naissance", array()), "d-M-Y"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 205
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
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "adresse", array()), "html", null, true);
        echo "
                                    , ";
        // line 214
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
        <div class=\"col-xs-12 col-lg-6 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <div class=\"dashboard-content\">
                    <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h4 class=\"page-content-title\">Paimenets</h4>
                        <div class=\"divider15\"></div>
                        <div class=\"personal-info-box\">
                            ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paiment"] ?? $this->getContext($context, "paiment")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 256
            echo "                            <div class=\"row\">
                                <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                    <div class=\"left-name-profile float-xs-left\">Solde :</div>
                                    <div class=\"detail-profile float-xs-right\"> ";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "paiment", array()), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_3efd01bc174375b5ea764a2fb7eb3bc1bd141adfc7c530843e7ee4bd1f8805ab->leave($__internal_3efd01bc174375b5ea764a2fb7eb3bc1bd141adfc7c530843e7ee4bd1f8805ab_prof);

        
        $__internal_b3d9cbd18e2ec1d24d8c711860f691dec2254e569f00c1dc3477d08c474eca32->leave($__internal_b3d9cbd18e2ec1d24d8c711860f691dec2254e569f00c1dc3477d08c474eca32_prof);

    }

    // line 270
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_9ce72e619132988b3842fe4d71a49534b8ca682c9315a1cdac74437b7648bd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce72e619132988b3842fe4d71a49534b8ca682c9315a1cdac74437b7648bd29->enter($__internal_9ce72e619132988b3842fe4d71a49534b8ca682c9315a1cdac74437b7648bd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_87a8c8c481efccac084ff4a35d180458b1800d4a696a659d5fd16ac65aebf4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a8c8c481efccac084ff4a35d180458b1800d4a696a659d5fd16ac65aebf4c6->enter($__internal_87a8c8c481efccac084ff4a35d180458b1800d4a696a659d5fd16ac65aebf4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 271
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#user').addClass('active');
        \$('#carte').hide();
        \$('#erpbundle_payment_type').click(function(){
            \$('#carte').show();
        });
    </script>
";
        
        $__internal_87a8c8c481efccac084ff4a35d180458b1800d4a696a659d5fd16ac65aebf4c6->leave($__internal_87a8c8c481efccac084ff4a35d180458b1800d4a696a659d5fd16ac65aebf4c6_prof);

        
        $__internal_9ce72e619132988b3842fe4d71a49534b8ca682c9315a1cdac74437b7648bd29->leave($__internal_9ce72e619132988b3842fe4d71a49534b8ca682c9315a1cdac74437b7648bd29_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:paymentDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 306,  621 => 305,  616 => 303,  611 => 301,  606 => 299,  601 => 297,  596 => 295,  592 => 294,  588 => 293,  584 => 292,  580 => 291,  576 => 290,  571 => 288,  566 => 286,  561 => 284,  557 => 283,  553 => 282,  549 => 281,  545 => 280,  541 => 279,  536 => 277,  532 => 276,  527 => 274,  522 => 272,  517 => 271,  508 => 270,  492 => 263,  482 => 259,  477 => 256,  473 => 255,  454 => 239,  447 => 235,  440 => 231,  433 => 227,  426 => 223,  418 => 218,  407 => 214,  403 => 213,  396 => 209,  385 => 205,  378 => 201,  371 => 197,  362 => 193,  350 => 184,  324 => 160,  315 => 159,  292 => 146,  282 => 139,  273 => 133,  264 => 127,  253 => 118,  244 => 117,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  198 => 93,  193 => 91,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  155 => 80,  151 => 79,  147 => 78,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
        #sidebar {
            margin-top: -4px;
        }

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
                        <h4 class=\"page-content-title\">Paimenets</h4>
                        <div class=\"divider15\"></div>
                        <div class=\"personal-info-box\">
                            {% for p in paiment %}
                            <div class=\"row\">
                                <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                    <div class=\"left-name-profile float-xs-left\">Solde :</div>
                                    <div class=\"detail-profile float-xs-right\"> {{ p.paiment }}</div>
                                </div>
                            </div>
                            {% endfor %}
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
        \$('#user').addClass('active');
        \$('#carte').hide();
        \$('#erpbundle_payment_type').click(function(){
            \$('#carte').show();
        });
    </script>
{% endblock %}

", "ERPBundle:Admin/Membre/etudiant:paymentDetail.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/paymentDetail.html.twig");
    }
}
