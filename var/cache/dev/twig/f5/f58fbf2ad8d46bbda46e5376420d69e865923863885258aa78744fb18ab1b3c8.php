<?php

/* ERPBundle:Admin/UniteEnseignement/matiere:add.html.twig */
class __TwigTemplate_930257ce0452fe7969671d7268ea36a1259cc485e5e6480286a9aa7012c9660a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/UniteEnseignement/matiere:add.html.twig", 1);
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
        $__internal_c2d4d0e4d798f966180cecb9dad9169aceba39bae5dda9e6a35e153ee885b10e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d4d0e4d798f966180cecb9dad9169aceba39bae5dda9e6a35e153ee885b10e->enter($__internal_c2d4d0e4d798f966180cecb9dad9169aceba39bae5dda9e6a35e153ee885b10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement/matiere:add.html.twig"));

        $__internal_6a14c970ffde80ed20a403b291d6eb1808c44bcfd9b179c9087002b2b0e37b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a14c970ffde80ed20a403b291d6eb1808c44bcfd9b179c9087002b2b0e37b26->enter($__internal_6a14c970ffde80ed20a403b291d6eb1808c44bcfd9b179c9087002b2b0e37b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement/matiere:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d4d0e4d798f966180cecb9dad9169aceba39bae5dda9e6a35e153ee885b10e->leave($__internal_c2d4d0e4d798f966180cecb9dad9169aceba39bae5dda9e6a35e153ee885b10e_prof);

        
        $__internal_6a14c970ffde80ed20a403b291d6eb1808c44bcfd9b179c9087002b2b0e37b26->leave($__internal_6a14c970ffde80ed20a403b291d6eb1808c44bcfd9b179c9087002b2b0e37b26_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_44146559e316c8285a51149ed4fb9dc511cf7372431d743928cd10569d1ecbc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44146559e316c8285a51149ed4fb9dc511cf7372431d743928cd10569d1ecbc2->enter($__internal_44146559e316c8285a51149ed4fb9dc511cf7372431d743928cd10569d1ecbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94e14a3526c93a9fdfd2fb7d3a4053841fbd3388e2b4fed86be4e1ca88d8ef83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e14a3526c93a9fdfd2fb7d3a4053841fbd3388e2b4fed86be4e1ca88d8ef83->enter($__internal_94e14a3526c93a9fdfd2fb7d3a4053841fbd3388e2b4fed86be4e1ca88d8ef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Employee";
        
        $__internal_94e14a3526c93a9fdfd2fb7d3a4053841fbd3388e2b4fed86be4e1ca88d8ef83->leave($__internal_94e14a3526c93a9fdfd2fb7d3a4053841fbd3388e2b4fed86be4e1ca88d8ef83_prof);

        
        $__internal_44146559e316c8285a51149ed4fb9dc511cf7372431d743928cd10569d1ecbc2->leave($__internal_44146559e316c8285a51149ed4fb9dc511cf7372431d743928cd10569d1ecbc2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e50372285db542438bc91d0304bcb46a5368862b829baaea597a36ee9d84107f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50372285db542438bc91d0304bcb46a5368862b829baaea597a36ee9d84107f->enter($__internal_e50372285db542438bc91d0304bcb46a5368862b829baaea597a36ee9d84107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_26b6b837647863bd0fbd4e4d6d61dec9828df22056f2c7c668ddfa3347b89344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b6b837647863bd0fbd4e4d6d61dec9828df22056f2c7c668ddfa3347b89344->enter($__internal_26b6b837647863bd0fbd4e4d6d61dec9828df22056f2c7c668ddfa3347b89344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/css/color/light/color-default.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/css-hamburgers/dist/hamburgers.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-margin {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_26b6b837647863bd0fbd4e4d6d61dec9828df22056f2c7c668ddfa3347b89344->leave($__internal_26b6b837647863bd0fbd4e4d6d61dec9828df22056f2c7c668ddfa3347b89344_prof);

        
        $__internal_e50372285db542438bc91d0304bcb46a5368862b829baaea597a36ee9d84107f->leave($__internal_e50372285db542438bc91d0304bcb46a5368862b829baaea597a36ee9d84107f_prof);

    }

    // line 107
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_fd63423a087399db7f3f19b156adad76932ed5efac6b936b99708ce220418974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd63423a087399db7f3f19b156adad76932ed5efac6b936b99708ce220418974->enter($__internal_fd63423a087399db7f3f19b156adad76932ed5efac6b936b99708ce220418974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_ff4d43052397258d09ffd310688377e6e416b94cf52d8bad13ccd236b416cbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4d43052397258d09ffd310688377e6e416b94cf52d8bad13ccd236b416cbf4->enter($__internal_ff4d43052397258d09ffd310688377e6e416b94cf52d8bad13ccd236b416cbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Annee_index");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Année</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_index");
        echo "\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Semestre</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Diplome_index");
        echo "\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Diplome</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Filiere_index");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Filiére</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Specialite_index");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Specialite</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\" >
                                <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Niveau_index");
        echo "\">
                                    <span class=\"icon_building header-icon\" aria-hidden=\"true\"></span>
                                    <span>Niveau</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Class_index");
        echo "\">
                                    <span class=\"icon_globe header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Classe</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Emploi_index");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Unite_index");
        echo "\">
                                    <span class=\"icon_book header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color: #fff;\">Unite Enseignement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_index");
        echo "\">
                                    <span class=\"icon_group header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Session</span>
                                </a>
                            </li>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ff4d43052397258d09ffd310688377e6e416b94cf52d8bad13ccd236b416cbf4->leave($__internal_ff4d43052397258d09ffd310688377e6e416b94cf52d8bad13ccd236b416cbf4_prof);

        
        $__internal_fd63423a087399db7f3f19b156adad76932ed5efac6b936b99708ce220418974->leave($__internal_fd63423a087399db7f3f19b156adad76932ed5efac6b936b99708ce220418974_prof);

    }

    // line 185
    public function block_body($context, array $blocks = array())
    {
        $__internal_9098b6cc4c0916831703898f1bcf46f45cd357d668bb297ba25e2d5020309ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9098b6cc4c0916831703898f1bcf46f45cd357d668bb297ba25e2d5020309ffe->enter($__internal_9098b6cc4c0916831703898f1bcf46f45cd357d668bb297ba25e2d5020309ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d707c416ee8e3a1f883ce567d9d2cb114a5ccffcd625057993c3afba4f260e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d707c416ee8e3a1f883ce567d9d2cb114a5ccffcd625057993c3afba4f260e3->enter($__internal_0d707c416ee8e3a1f883ce567d9d2cb114a5ccffcd625057993c3afba4f260e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 186
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Matiere</a></li>
                <li class=\"breadcrumb-item active\"> add</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajoute Matiere</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            ";
        // line 216
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Matiere_add", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "addClass", "novalidate" => "novalidate")));
        echo "
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 221
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_nom\"></span>
                                                </div>

                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coef", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_fullName\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "credit", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"entreprise_directeur\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_phone\"></i></span>
                                                        ";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "td", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"entreprise_tel\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 256
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tp", array()), 'row');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 262
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cours", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_cp\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_ville\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 278
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_pays\"></span>
                                                </div>
                                            </div>
                                            <div class=\"divider15\"></div>
                                            <div>
                                                <input type=\"submit\" value=\"ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
                                            </div>
                                            <input type=\"hidden\" value=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
                                            ";
        // line 289
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
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
";
        
        $__internal_0d707c416ee8e3a1f883ce567d9d2cb114a5ccffcd625057993c3afba4f260e3->leave($__internal_0d707c416ee8e3a1f883ce567d9d2cb114a5ccffcd625057993c3afba4f260e3_prof);

        
        $__internal_9098b6cc4c0916831703898f1bcf46f45cd357d668bb297ba25e2d5020309ffe->leave($__internal_9098b6cc4c0916831703898f1bcf46f45cd357d668bb297ba25e2d5020309ffe_prof);

    }

    // line 301
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_40d7b677b5a9942f7b9467f64068d503d3d6e477970a5608c2b030993ddab36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d7b677b5a9942f7b9467f64068d503d3d6e477970a5608c2b030993ddab36f->enter($__internal_40d7b677b5a9942f7b9467f64068d503d3d6e477970a5608c2b030993ddab36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_4baa7398d525c47d6cbc6f26903eebab9badeebe363a60c6fa040c5f91d71769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4baa7398d525c47d6cbc6f26903eebab9badeebe363a60c6fa040c5f91d71769->enter($__internal_4baa7398d525c47d6cbc6f26903eebab9badeebe363a60c6fa040c5f91d71769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 302
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEmployee.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#gestion').addClass('active');
    </script>
";
        
        $__internal_4baa7398d525c47d6cbc6f26903eebab9badeebe363a60c6fa040c5f91d71769->leave($__internal_4baa7398d525c47d6cbc6f26903eebab9badeebe363a60c6fa040c5f91d71769_prof);

        
        $__internal_40d7b677b5a9942f7b9467f64068d503d3d6e477970a5608c2b030993ddab36f->leave($__internal_40d7b677b5a9942f7b9467f64068d503d3d6e477970a5608c2b030993ddab36f_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/UniteEnseignement/matiere:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 327,  631 => 326,  627 => 325,  623 => 324,  619 => 323,  615 => 322,  611 => 321,  607 => 320,  603 => 319,  599 => 318,  595 => 317,  591 => 316,  587 => 315,  583 => 314,  579 => 313,  575 => 312,  571 => 311,  567 => 310,  563 => 309,  559 => 308,  555 => 307,  551 => 306,  547 => 305,  543 => 304,  539 => 303,  534 => 302,  525 => 301,  503 => 289,  499 => 288,  486 => 278,  476 => 271,  464 => 262,  455 => 256,  443 => 247,  433 => 240,  420 => 230,  408 => 221,  400 => 216,  368 => 186,  359 => 185,  335 => 171,  326 => 165,  317 => 159,  308 => 153,  299 => 147,  290 => 141,  281 => 135,  272 => 129,  263 => 123,  254 => 117,  243 => 108,  234 => 107,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Employee{% endblock %}
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-margin {
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
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Class_index') }}\">
                                    <span class=\"icon_globe header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Classe</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Emploi_index') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Unite_index') }}\">
                                    <span class=\"icon_book header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color: #fff;\">Unite Enseignement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('session_index') }}\">
                                    <span class=\"icon_group header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Session</span>
                                </a>
                            </li>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Matiere</a></li>
                <li class=\"breadcrumb-item active\"> add</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajoute Matiere</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            {{ form_start(form,{'action': path('admin_Matiere_add',{'id':id}),'method':'POST','attr':{'id':'addClass','novalidate':'novalidate'}}) }}
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.nom) }}
                                                    </div>
                                                    <span id=\"employee_nom\"></span>
                                                </div>

                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.coef) }}
                                                    </div>
                                                    <span id=\"employee_fullName\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.credit) }}
                                                    </div>
                                                    <span id=\"entreprise_directeur\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_phone\"></i></span>
                                                        {{ form_row(form.td) }}
                                                    </div>
                                                    <span id=\"entreprise_tel\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.tp) }}
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.cours) }}
                                                    </div>
                                                    <span id=\"employee_cp\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.specialite) }}
                                                    </div>
                                                    <span id=\"employee_ville\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.niveau) }}
                                                    </div>
                                                    <span id=\"employee_pays\"></span>
                                                </div>
                                            </div>
                                            <div class=\"divider15\"></div>
                                            <div>
                                                <input type=\"submit\" value=\"ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
                                            </div>
                                            <input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
                                            {{ form_end(form) }}
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEmployee.js') }}\"></script>
    <script>
        \$('#gestion').addClass('active');
    </script>
{% endblock %}", "ERPBundle:Admin/UniteEnseignement/matiere:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/UniteEnseignement/matiere/add.html.twig");
    }
}
