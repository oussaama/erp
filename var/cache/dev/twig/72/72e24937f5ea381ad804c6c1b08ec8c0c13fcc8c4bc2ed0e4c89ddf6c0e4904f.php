<?php

/* ERPBundle:Admin/Class:index.html.twig */
class __TwigTemplate_fe1f44a5b2873881d726c07033add91948fc7ba85ac565af0d8aea719ef0e2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Class:index.html.twig", 1);
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
        $__internal_b5969ef320b5f36f3f8c837bcc9094a47fa81405ca72ee23aa6f35ccdaf611bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5969ef320b5f36f3f8c837bcc9094a47fa81405ca72ee23aa6f35ccdaf611bc->enter($__internal_b5969ef320b5f36f3f8c837bcc9094a47fa81405ca72ee23aa6f35ccdaf611bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Class:index.html.twig"));

        $__internal_94d3077757b9af0605eb66a8ca8f127566b4adcde7c1cba93b57f89e5135947e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d3077757b9af0605eb66a8ca8f127566b4adcde7c1cba93b57f89e5135947e->enter($__internal_94d3077757b9af0605eb66a8ca8f127566b4adcde7c1cba93b57f89e5135947e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Class:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5969ef320b5f36f3f8c837bcc9094a47fa81405ca72ee23aa6f35ccdaf611bc->leave($__internal_b5969ef320b5f36f3f8c837bcc9094a47fa81405ca72ee23aa6f35ccdaf611bc_prof);

        
        $__internal_94d3077757b9af0605eb66a8ca8f127566b4adcde7c1cba93b57f89e5135947e->leave($__internal_94d3077757b9af0605eb66a8ca8f127566b4adcde7c1cba93b57f89e5135947e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5e4cfb088ad3a6d94865e403b40e5e113e0fb528473be9ba1e07076fbeff806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e4cfb088ad3a6d94865e403b40e5e113e0fb528473be9ba1e07076fbeff806->enter($__internal_f5e4cfb088ad3a6d94865e403b40e5e113e0fb528473be9ba1e07076fbeff806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ce4df8ef1a66d568420f06ee4018d9cacc808a37a8b8c4f01469ff1bac867e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce4df8ef1a66d568420f06ee4018d9cacc808a37a8b8c4f01469ff1bac867e3->enter($__internal_1ce4df8ef1a66d568420f06ee4018d9cacc808a37a8b8c4f01469ff1bac867e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Classe";
        
        $__internal_1ce4df8ef1a66d568420f06ee4018d9cacc808a37a8b8c4f01469ff1bac867e3->leave($__internal_1ce4df8ef1a66d568420f06ee4018d9cacc808a37a8b8c4f01469ff1bac867e3_prof);

        
        $__internal_f5e4cfb088ad3a6d94865e403b40e5e113e0fb528473be9ba1e07076fbeff806->leave($__internal_f5e4cfb088ad3a6d94865e403b40e5e113e0fb528473be9ba1e07076fbeff806_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e528435e97fe25f7d4c5d37ceab70ffa29c4224f1c30efba6da6cd52786c015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e528435e97fe25f7d4c5d37ceab70ffa29c4224f1c30efba6da6cd52786c015->enter($__internal_2e528435e97fe25f7d4c5d37ceab70ffa29c4224f1c30efba6da6cd52786c015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd2c8916f2b8285dc8e1b65e0523bb18ac0f8e5b3157ad26de79fbe43c9c7897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2c8916f2b8285dc8e1b65e0523bb18ac0f8e5b3157ad26de79fbe43c9c7897->enter($__internal_fd2c8916f2b8285dc8e1b65e0523bb18ac0f8e5b3157ad26de79fbe43c9c7897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 91
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
        
        $__internal_fd2c8916f2b8285dc8e1b65e0523bb18ac0f8e5b3157ad26de79fbe43c9c7897->leave($__internal_fd2c8916f2b8285dc8e1b65e0523bb18ac0f8e5b3157ad26de79fbe43c9c7897_prof);

        
        $__internal_2e528435e97fe25f7d4c5d37ceab70ffa29c4224f1c30efba6da6cd52786c015->leave($__internal_2e528435e97fe25f7d4c5d37ceab70ffa29c4224f1c30efba6da6cd52786c015_prof);

    }

    // line 101
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_b1d09122c50393e316e52ed5986598f4b18e37f04fc7774f1e356712c09f6124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d09122c50393e316e52ed5986598f4b18e37f04fc7774f1e356712c09f6124->enter($__internal_b1d09122c50393e316e52ed5986598f4b18e37f04fc7774f1e356712c09f6124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_b0d175c0c08d810fc4b5cc9aab9798f1b55a499953272fe05850fbfb42dec177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d175c0c08d810fc4b5cc9aab9798f1b55a499953272fe05850fbfb42dec177->enter($__internal_b0d175c0c08d810fc4b5cc9aab9798f1b55a499953272fe05850fbfb42dec177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 102
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
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Annee_index");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Année</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_index");
        echo "\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Semestre</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Diplome_index");
        echo "\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Diplome</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Filiere_index");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Filiére</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Specialite_index");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Specialite</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\" >
                                <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Niveau_index");
        echo "\">
                                    <span class=\"icon_building header-icon\" aria-hidden=\"true\"></span>
                                    <span>Niveau</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Class_index");
        echo "\">
                                    <span class=\"icon_globe header-icon\" aria-hidden=\"true\" style=\"color: #fff;\" ></span>
                                    <span style=\"color: #fff;\">Classe</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Emploi_index");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Unite_index");
        echo "\">
                                    <span class=\"icon_book header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Unite Enseignement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_index");
        echo "\">
                                    <span class=\"icon_group header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Session</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b0d175c0c08d810fc4b5cc9aab9798f1b55a499953272fe05850fbfb42dec177->leave($__internal_b0d175c0c08d810fc4b5cc9aab9798f1b55a499953272fe05850fbfb42dec177_prof);

        
        $__internal_b1d09122c50393e316e52ed5986598f4b18e37f04fc7774f1e356712c09f6124->leave($__internal_b1d09122c50393e316e52ed5986598f4b18e37f04fc7774f1e356712c09f6124_prof);

    }

    // line 178
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fc85828596fb0d439878773aec97d28ec3ce807ad72aa79aca2f81127370e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc85828596fb0d439878773aec97d28ec3ce807ad72aa79aca2f81127370e4e->enter($__internal_0fc85828596fb0d439878773aec97d28ec3ce807ad72aa79aca2f81127370e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7319ad1dec57189734f8c56cf33e1790673a2308a1761b6b6e7d0dd5cadccf17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7319ad1dec57189734f8c56cf33e1790673a2308a1761b6b6e7d0dd5cadccf17->enter($__internal_7319ad1dec57189734f8c56cf33e1790673a2308a1761b6b6e7d0dd5cadccf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 179
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Classe</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Classe</a></li>
                <li class=\"breadcrumb-item active\">index </li>
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
                                            <h4 class=\"page-content-title float-xs-left\">liste des Classes </h4>
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
                                                <button class=\"btn btn-primary site-btn pull-right\" data-target=\"#view-add\" data-toggle=\"modal\">
                                                    Ajouter
                                                </button>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table class=\"table table-striped\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Specialite</th>
                                                        <th>Annee</th>
                                                        <th>Date d'Ajouter</th>
                                                        <th>Dernier Modification</th>
                                                        <th>Etudiant</th>
                                                        <th>action</th>
                                                        <th>Statu</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classe"] ?? $this->getContext($context, "classe")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 238
            echo "                                                        ";
            if (($this->getAttribute($context["c"], "enabled", array()) == 1)) {
                // line 239
                echo "                                                            <tr>
                                                                <td>";
                // line 240
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomClass", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "specialite", array()), "nomSpecialite", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "annee", array()), "annee", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 243
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateAjoute", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 244
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateModif", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>
                                                                    <a href=\"";
                // line 246
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Class_etudiant", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
                echo "\">
                                                                        <button type=\"button\" class=\"btn btn-outline-warning btn-xs \">Liste</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-outline-primary btn-xs update-Classe\" data-target=\"#view-update-classe\" data-toggle=\"modal\"  data-id=\"";
                // line 252
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "\">Update</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        ";
            } else {
                // line 262
                echo "                                                            <tr>
                                                                <td>";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomClass", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "specialite", array()), "nomSpecialite", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "annee", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 266
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateAjoute", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 267
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateModif", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-outline-primary btn-xs\" disabled>Update</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        ";
            }
            // line 280
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
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
                    <h4 class=\"modal-title\">Activation Etudiant</h4>
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
    <div id=\"view-delete-parent\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Activation Parent</h4>
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
    <div id=\"view-add\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Ajouter Classe</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                ";
        // line 366
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ERPBundle:Admin/AdminClass:addClass"));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-update-classe\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Update Classe</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\" id=\"update-etudiant-form\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7319ad1dec57189734f8c56cf33e1790673a2308a1761b6b6e7d0dd5cadccf17->leave($__internal_7319ad1dec57189734f8c56cf33e1790673a2308a1761b6b6e7d0dd5cadccf17_prof);

        
        $__internal_0fc85828596fb0d439878773aec97d28ec3ce807ad72aa79aca2f81127370e4e->leave($__internal_0fc85828596fb0d439878773aec97d28ec3ce807ad72aa79aca2f81127370e4e_prof);

    }

    // line 397
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_3e9fb49f6d93bdb8e1d06d9db3add0f5a4405ac81f62599b0edb122c316868b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9fb49f6d93bdb8e1d06d9db3add0f5a4405ac81f62599b0edb122c316868b6->enter($__internal_3e9fb49f6d93bdb8e1d06d9db3add0f5a4405ac81f62599b0edb122c316868b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_21b573d306761ec60209fab43af9ecba18b19ea69f18da64ce4c327b4cd383fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b573d306761ec60209fab43af9ecba18b19ea69f18da64ce4c327b4cd383fe->enter($__internal_21b573d306761ec60209fab43af9ecba18b19ea69f18da64ce4c327b4cd383fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 398
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.update-Classe').click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('admin_Class_update',{'id':id}),
                complete: function(data) {
                    \$('#update-etudiant-form').html(data.responseText);
                }
            });
        });
    </script>
    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: Routing.generate('admin_Class_delete',{'id':id}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/class/index\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_21b573d306761ec60209fab43af9ecba18b19ea69f18da64ce4c327b4cd383fe->leave($__internal_21b573d306761ec60209fab43af9ecba18b19ea69f18da64ce4c327b4cd383fe_prof);

        
        $__internal_3e9fb49f6d93bdb8e1d06d9db3add0f5a4405ac81f62599b0edb122c316868b6->leave($__internal_3e9fb49f6d93bdb8e1d06d9db3add0f5a4405ac81f62599b0edb122c316868b6_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Class:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 416,  721 => 415,  717 => 414,  713 => 413,  709 => 412,  705 => 411,  701 => 410,  697 => 409,  693 => 408,  689 => 407,  685 => 406,  681 => 405,  677 => 404,  673 => 403,  669 => 402,  665 => 401,  661 => 400,  657 => 399,  652 => 398,  643 => 397,  602 => 366,  515 => 281,  509 => 280,  501 => 275,  490 => 267,  486 => 266,  482 => 265,  478 => 264,  474 => 263,  471 => 262,  463 => 257,  455 => 252,  446 => 246,  441 => 244,  437 => 243,  433 => 242,  429 => 241,  425 => 240,  422 => 239,  419 => 238,  415 => 237,  355 => 179,  346 => 178,  323 => 165,  314 => 159,  305 => 153,  296 => 147,  287 => 141,  278 => 135,  269 => 129,  260 => 123,  251 => 117,  242 => 111,  231 => 102,  222 => 101,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Classe{% endblock %}
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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-material-menu/css/color/light/color-default.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/css-hamburgers/dist/hamburgers.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/morris.js/morris.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}\"/>
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
                                <a href=\"{{ path('admin_Annee_index') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Année</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('semestre_index') }}\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Semestre</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Diplome_index') }}\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Diplome</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Filiere_index') }}\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Filiére</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Specialite_index') }}\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Specialite</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\" >
                                <a href=\"{{ path('admin_Niveau_index') }}\">
                                    <span class=\"icon_building header-icon\" aria-hidden=\"true\"></span>
                                    <span>Niveau</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Class_index') }}\">
                                    <span class=\"icon_globe header-icon\" aria-hidden=\"true\" style=\"color: #fff;\" ></span>
                                    <span style=\"color: #fff;\">Classe</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Emploi_index') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Unite_index') }}\">
                                    <span class=\"icon_book header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Unite Enseignement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('session_index') }}\">
                                    <span class=\"icon_group header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Session</span>
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
            <h2 class=\"float-xs-left content-title-main\">Classe</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Classe</a></li>
                <li class=\"breadcrumb-item active\">index </li>
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
                                            <h4 class=\"page-content-title float-xs-left\">liste des Classes </h4>
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
                                                <button class=\"btn btn-primary site-btn pull-right\" data-target=\"#view-add\" data-toggle=\"modal\">
                                                    Ajouter
                                                </button>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table class=\"table table-striped\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Specialite</th>
                                                        <th>Annee</th>
                                                        <th>Date d'Ajouter</th>
                                                        <th>Dernier Modification</th>
                                                        <th>Etudiant</th>
                                                        <th>action</th>
                                                        <th>Statu</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for c in classe %}
                                                        {% if c.enabled == 1 %}
                                                            <tr>
                                                                <td>{{ c.nomClass }}</td>
                                                                <td>{{ c.specialite.nomSpecialite }}</td>
                                                                <td>{{ c.annee.annee }}</td>
                                                                <td>{{ c.dateAjoute|date('M d Y H:i') }}</td>
                                                                <td>{{ c.dateModif|date('M d Y H:i') }}</td>
                                                                <td>
                                                                    <a href=\"{{ path('admin_Class_etudiant',{'id':c.id}) }}\">
                                                                        <button type=\"button\" class=\"btn btn-outline-warning btn-xs \">Liste</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-outline-primary btn-xs update-Classe\" data-target=\"#view-update-classe\" data-toggle=\"modal\"  data-id=\"{{ c.id }}\">Update</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"{{ c.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        {% else %}
                                                            <tr>
                                                                <td>{{ c.nomClass }}</td>
                                                                <td>{{ c.specialite.nomSpecialite }}</td>
                                                                <td>{{ c.annee }}</td>
                                                                <td>{{ c.dateAjoute|date('M d Y H:i') }}</td>
                                                                <td>{{ c.dateModif|date('M d Y H:i') }}</td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-outline-primary btn-xs\" disabled>Update</button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"{{ c.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive</button>
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
                    <h4 class=\"modal-title\">Activation Etudiant</h4>
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
    <div id=\"view-delete-parent\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Activation Parent</h4>
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
    <div id=\"view-add\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Ajouter Classe</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                {{  render(controller('ERPBundle:Admin/AdminClass:addClass')) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-update-classe\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Update Classe</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\" id=\"update-etudiant-form\">

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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
    <script type=\"text/javascript\">
        \$('.update-Classe').click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('admin_Class_update',{'id':id}),
                complete: function(data) {
                    \$('#update-etudiant-form').html(data.responseText);
                }
            });
        });
    </script>
    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: Routing.generate('admin_Class_delete',{'id':id}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/class/index\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
{% endblock %}", "ERPBundle:Admin/Class:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Class/index.html.twig");
    }
}
