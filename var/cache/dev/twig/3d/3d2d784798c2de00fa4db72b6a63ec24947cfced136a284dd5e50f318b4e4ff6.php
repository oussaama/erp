<?php

/* ERPBundle:Admin/Membre/enseignant:index.html.twig */
class __TwigTemplate_d1753dc1fe7479976a464e741429d5d551bdb50a9362017a3564b90a4ecb46c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/enseignant:index.html.twig", 1);
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
        $__internal_5e52a32b0a518a58ba7c56239574d8f249cb51d21678be2976820df583e65219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e52a32b0a518a58ba7c56239574d8f249cb51d21678be2976820df583e65219->enter($__internal_5e52a32b0a518a58ba7c56239574d8f249cb51d21678be2976820df583e65219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/enseignant:index.html.twig"));

        $__internal_4b643e87bd5c0d2034325ddee35ad39081a57e4b80378a7dbad3781233794da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b643e87bd5c0d2034325ddee35ad39081a57e4b80378a7dbad3781233794da4->enter($__internal_4b643e87bd5c0d2034325ddee35ad39081a57e4b80378a7dbad3781233794da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/enseignant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e52a32b0a518a58ba7c56239574d8f249cb51d21678be2976820df583e65219->leave($__internal_5e52a32b0a518a58ba7c56239574d8f249cb51d21678be2976820df583e65219_prof);

        
        $__internal_4b643e87bd5c0d2034325ddee35ad39081a57e4b80378a7dbad3781233794da4->leave($__internal_4b643e87bd5c0d2034325ddee35ad39081a57e4b80378a7dbad3781233794da4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_342f764a26ae1b5f3e894b9a83437480fb8e125943f1f658375745be1d9f5ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342f764a26ae1b5f3e894b9a83437480fb8e125943f1f658375745be1d9f5ec4->enter($__internal_342f764a26ae1b5f3e894b9a83437480fb8e125943f1f658375745be1d9f5ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9223d9674c8a60e7713a2f2ebb5d2b6db1509431853b342ff86d36babd533094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9223d9674c8a60e7713a2f2ebb5d2b6db1509431853b342ff86d36babd533094->enter($__internal_9223d9674c8a60e7713a2f2ebb5d2b6db1509431853b342ff86d36babd533094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Enseignant";
        
        $__internal_9223d9674c8a60e7713a2f2ebb5d2b6db1509431853b342ff86d36babd533094->leave($__internal_9223d9674c8a60e7713a2f2ebb5d2b6db1509431853b342ff86d36babd533094_prof);

        
        $__internal_342f764a26ae1b5f3e894b9a83437480fb8e125943f1f658375745be1d9f5ec4->leave($__internal_342f764a26ae1b5f3e894b9a83437480fb8e125943f1f658375745be1d9f5ec4_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d61df83dafe08ceddb94881447b394c25f5d9d6ab8bf34e5a97e353b4f101b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61df83dafe08ceddb94881447b394c25f5d9d6ab8bf34e5a97e353b4f101b72->enter($__internal_d61df83dafe08ceddb94881447b394c25f5d9d6ab8bf34e5a97e353b4f101b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b5173aede7481d8224376668107b2eea0d33b2740d1d8182753042a45cd8f93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5173aede7481d8224376668107b2eea0d33b2740d1d8182753042a45cd8f93e->enter($__internal_b5173aede7481d8224376668107b2eea0d33b2740d1d8182753042a45cd8f93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
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
        
        $__internal_b5173aede7481d8224376668107b2eea0d33b2740d1d8182753042a45cd8f93e->leave($__internal_b5173aede7481d8224376668107b2eea0d33b2740d1d8182753042a45cd8f93e_prof);

        
        $__internal_d61df83dafe08ceddb94881447b394c25f5d9d6ab8bf34e5a97e353b4f101b72->leave($__internal_d61df83dafe08ceddb94881447b394c25f5d9d6ab8bf34e5a97e353b4f101b72_prof);

    }

    // line 103
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_8551fdf8be5da52b06a0f22edcb3a62b363de4bbc95ee3b16d7b97b61ca3f945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8551fdf8be5da52b06a0f22edcb3a62b363de4bbc95ee3b16d7b97b61ca3f945->enter($__internal_8551fdf8be5da52b06a0f22edcb3a62b363de4bbc95ee3b16d7b97b61ca3f945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_c56e403470190459dcf0723e034dbf8f3cf4a1f9519a7dd94e1408e381994d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56e403470190459dcf0723e034dbf8f3cf4a1f9519a7dd94e1408e381994d4c->enter($__internal_c56e403470190459dcf0723e034dbf8f3cf4a1f9519a7dd94e1408e381994d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 104
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
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Enseignant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 131
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
        
        $__internal_c56e403470190459dcf0723e034dbf8f3cf4a1f9519a7dd94e1408e381994d4c->leave($__internal_c56e403470190459dcf0723e034dbf8f3cf4a1f9519a7dd94e1408e381994d4c_prof);

        
        $__internal_8551fdf8be5da52b06a0f22edcb3a62b363de4bbc95ee3b16d7b97b61ca3f945->leave($__internal_8551fdf8be5da52b06a0f22edcb3a62b363de4bbc95ee3b16d7b97b61ca3f945_prof);

    }

    // line 144
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b3861f1f76175519005aed7718001b8df4629369f2e1b7dbb391274ff200a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3861f1f76175519005aed7718001b8df4629369f2e1b7dbb391274ff200a05->enter($__internal_9b3861f1f76175519005aed7718001b8df4629369f2e1b7dbb391274ff200a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae6fcf4fbf7f3ffc7b34f25492ab89bd36085b1cc34183ad8753ded231809a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6fcf4fbf7f3ffc7b34f25492ab89bd36085b1cc34183ad8753ded231809a34->enter($__internal_ae6fcf4fbf7f3ffc7b34f25492ab89bd36085b1cc34183ad8753ded231809a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 145
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Enseignant</a></li>
                <li class=\"breadcrumb-item active\">index</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">liste des Enseignants</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant_add");
        echo "\"><button class=\"btn btn-primary site-btn pull-right\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\" class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>CIN</th>
                                                        <th>Email</th>
                                                        <th>Date d'Ajouter</th>
                                                        <th>Adresse</th>
                                                        <th>Telephone</th>
                                                        <th>Specilite</th>
                                                        <th>grade</th>
                                                        <th>action</th>
                                                        <th>Statu</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enseignant"] ?? $this->getContext($context, "enseignant")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 202
            echo "                                                        ";
            if (($this->getAttribute($context["e"], "enabled", array()) == 1)) {
                // line 203
                echo "                                                            <tr>
                                                                <td>";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fullName", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 206
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "lastLogin", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
                echo "
                                                                    , ";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "pays", array()), "name", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "specialite", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "grade", array()), "html", null, true);
                echo "</td>
                                                                <td>
                                                                    <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant_update", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\">
                                                                        <button type=\"button\" class=\"btn btn-outline-primary btn-xs update-Enseignant\">Update</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        ";
            } else {
                // line 225
                echo "                                                            <tr>
                                                                <td>";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fullname", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 228
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "lastLogin", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
                echo "
                                                                    , ";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "pays", array()), "name", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "specialite", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "grade", array()), "html", null, true);
                echo "</td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-outline-primary btn-xs\" disabled>Update</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        ";
            }
            // line 248
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
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
    <div id=\"view-contact\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Activation de Enseignant</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <div class=\"profile-icon text-xs-center\">
                                    <p>sddssdsdsdssd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn desactiv\">Confirmer</button>
                    <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-update-client\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Update Enseignant</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <script type=\"text/javascript\">
                                    \$('.update-Enseignant').click(function(){
                                        id = \$(this).data('id');
                                        \$.ajax({
                                            type: 'POST',
                                            url: Routing.generate('admin_Enseignant_update',{'id':id}),
                                            complete: function(data) {
                                                \$('.contact-follow').html(data.responseText)
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ae6fcf4fbf7f3ffc7b34f25492ab89bd36085b1cc34183ad8753ded231809a34->leave($__internal_ae6fcf4fbf7f3ffc7b34f25492ab89bd36085b1cc34183ad8753ded231809a34_prof);

        
        $__internal_9b3861f1f76175519005aed7718001b8df4629369f2e1b7dbb391274ff200a05->leave($__internal_9b3861f1f76175519005aed7718001b8df4629369f2e1b7dbb391274ff200a05_prof);

    }

    // line 325
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_9f976c2aeaa47a64b2a77d7bbf1f63723f8d22beb2cd659c25d5e48e01d7330c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f976c2aeaa47a64b2a77d7bbf1f63723f8d22beb2cd659c25d5e48e01d7330c->enter($__internal_9f976c2aeaa47a64b2a77d7bbf1f63723f8d22beb2cd659c25d5e48e01d7330c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_723de953a175c958f66edb84c556b16f1fb3999c1e43459e5d58d6e890702521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723de953a175c958f66edb84c556b16f1fb3999c1e43459e5d58d6e890702521->enter($__internal_723de953a175c958f66edb84c556b16f1fb3999c1e43459e5d58d6e890702521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 326
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/js/layout.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: 'http://localhost/erp/web/app_dev.php/admin/delete/' + id,
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/enseignant\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_723de953a175c958f66edb84c556b16f1fb3999c1e43459e5d58d6e890702521->leave($__internal_723de953a175c958f66edb84c556b16f1fb3999c1e43459e5d58d6e890702521_prof);

        
        $__internal_9f976c2aeaa47a64b2a77d7bbf1f63723f8d22beb2cd659c25d5e48e01d7330c->leave($__internal_9f976c2aeaa47a64b2a77d7bbf1f63723f8d22beb2cd659c25d5e48e01d7330c_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/enseignant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 349,  686 => 348,  682 => 347,  678 => 346,  674 => 345,  670 => 344,  666 => 343,  662 => 342,  658 => 341,  654 => 340,  650 => 339,  646 => 338,  642 => 337,  638 => 336,  634 => 335,  630 => 334,  626 => 333,  622 => 332,  618 => 331,  614 => 330,  610 => 329,  606 => 328,  602 => 327,  597 => 326,  588 => 325,  503 => 249,  497 => 248,  488 => 242,  477 => 234,  473 => 233,  469 => 232,  465 => 231,  457 => 230,  453 => 229,  449 => 228,  445 => 227,  441 => 226,  438 => 225,  430 => 220,  421 => 214,  416 => 212,  412 => 211,  408 => 210,  404 => 209,  396 => 208,  392 => 207,  388 => 206,  384 => 205,  380 => 204,  377 => 203,  374 => 202,  370 => 201,  346 => 180,  309 => 145,  300 => 144,  277 => 131,  268 => 125,  259 => 119,  250 => 113,  239 => 104,  230 => 103,  210 => 93,  206 => 92,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Enseignant{% endblock %}
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
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
                                <a href=\"{{ path('admin_Employee') }}\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Enseignant') }}\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Enseignant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Etudiant') }}\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Etudiant</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Enseignant</a></li>
                <li class=\"breadcrumb-item active\">index</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">liste des Enseignants</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"{{ path('admin_Enseignant_add') }}\"><button class=\"btn btn-primary site-btn pull-right\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\" class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>CIN</th>
                                                        <th>Email</th>
                                                        <th>Date d'Ajouter</th>
                                                        <th>Adresse</th>
                                                        <th>Telephone</th>
                                                        <th>Specilite</th>
                                                        <th>grade</th>
                                                        <th>action</th>
                                                        <th>Statu</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for e in enseignant %}
                                                        {% if e.enabled == 1 %}
                                                            <tr>
                                                                <td>{{ e.fullName }}</td>
                                                                <td>{{ e.cin }}</td>
                                                                <td>{{ e.lastLogin|date('M d Y H:i') }}</td>
                                                                <td>{{ e.email }}</td>
                                                                <td>{{ e.adresse }} , {{ e.ville }} {{ e.cp }}
                                                                    , {{ e.pays.name }}</td>
                                                                <td>{{ e.tel }}</td>
                                                                <td>{{ e.specialite }}</td>
                                                                <td>{{ e.grade }}</td>
                                                                <td>
                                                                    <a href=\"{{ path('admin_Enseignant_update',{'id':e.id}) }}\">
                                                                        <button type=\"button\" class=\"btn btn-outline-primary btn-xs update-Enseignant\">Update</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"{{ e.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        {% else %}
                                                            <tr>
                                                                <td>{{ e.fullname }}</td>
                                                                <td>{{ e.cin }}</td>
                                                                <td>{{ e.lastLogin|date('M d Y H:i') }}</td>
                                                                <td>{{ e.email }}</td>
                                                                <td>{{ e.adresse }} , {{ e.ville }} {{ e.cp }}
                                                                    , {{ e.pays.name }}</td>
                                                                <td>{{ e.tel }}</td>
                                                                <td>{{ e.specialite }}</td>
                                                                <td>{{ e.grade }}</td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-outline-primary btn-xs\" disabled>Update</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"{{ e.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        {% endif %}
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
    <div id=\"view-contact\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Activation de Enseignant</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <div class=\"profile-icon text-xs-center\">
                                    <p>sddssdsdsdssd</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn desactiv\">Confirmer</button>
                    <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-update-client\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Update Enseignant</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <script type=\"text/javascript\">
                                    \$('.update-Enseignant').click(function(){
                                        id = \$(this).data('id');
                                        \$.ajax({
                                            type: 'POST',
                                            url: Routing.generate('admin_Enseignant_update',{'id':id}),
                                            complete: function(data) {
                                                \$('.contact-follow').html(data.responseText)
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v2.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-material-menu/js/layout.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: 'http://localhost/erp/web/app_dev.php/admin/delete/' + id,
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/enseignant\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
{% endblock %}", "ERPBundle:Admin/Membre/enseignant:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/enseignant/index.html.twig");
    }
}
