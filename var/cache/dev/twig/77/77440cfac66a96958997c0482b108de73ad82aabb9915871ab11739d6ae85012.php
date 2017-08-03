<?php

/* ERPBundle:Admin/Membre/employee:index.html.twig */
class __TwigTemplate_74d7c3c91da3426a56866ba73c41f731c4b9a0644ae56e1e4aae158bf1ad7a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/employee:index.html.twig", 1);
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
        $__internal_a641c848fd14212b13dd2d35b1bd9ab8685f4254a87b4930bceb31cd15596491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a641c848fd14212b13dd2d35b1bd9ab8685f4254a87b4930bceb31cd15596491->enter($__internal_a641c848fd14212b13dd2d35b1bd9ab8685f4254a87b4930bceb31cd15596491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/employee:index.html.twig"));

        $__internal_b592f9d2535380948d118f1ef2838706d5aca15a5c658cedaa981385e1ef360e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b592f9d2535380948d118f1ef2838706d5aca15a5c658cedaa981385e1ef360e->enter($__internal_b592f9d2535380948d118f1ef2838706d5aca15a5c658cedaa981385e1ef360e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/employee:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a641c848fd14212b13dd2d35b1bd9ab8685f4254a87b4930bceb31cd15596491->leave($__internal_a641c848fd14212b13dd2d35b1bd9ab8685f4254a87b4930bceb31cd15596491_prof);

        
        $__internal_b592f9d2535380948d118f1ef2838706d5aca15a5c658cedaa981385e1ef360e->leave($__internal_b592f9d2535380948d118f1ef2838706d5aca15a5c658cedaa981385e1ef360e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_164ce8b967ecc5aecb894d4e0cdf616b13d37de0511756de0928738126685e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164ce8b967ecc5aecb894d4e0cdf616b13d37de0511756de0928738126685e65->enter($__internal_164ce8b967ecc5aecb894d4e0cdf616b13d37de0511756de0928738126685e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_663cea793fa05c51a46f1a5f29acc2dfda4de32a3c9abad61fbfa6f81de06166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663cea793fa05c51a46f1a5f29acc2dfda4de32a3c9abad61fbfa6f81de06166->enter($__internal_663cea793fa05c51a46f1a5f29acc2dfda4de32a3c9abad61fbfa6f81de06166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Employee";
        
        $__internal_663cea793fa05c51a46f1a5f29acc2dfda4de32a3c9abad61fbfa6f81de06166->leave($__internal_663cea793fa05c51a46f1a5f29acc2dfda4de32a3c9abad61fbfa6f81de06166_prof);

        
        $__internal_164ce8b967ecc5aecb894d4e0cdf616b13d37de0511756de0928738126685e65->leave($__internal_164ce8b967ecc5aecb894d4e0cdf616b13d37de0511756de0928738126685e65_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a13ece8437652addcd62951182b94d85dcc60f55f19cffc066ea047d9097e48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13ece8437652addcd62951182b94d85dcc60f55f19cffc066ea047d9097e48d->enter($__internal_a13ece8437652addcd62951182b94d85dcc60f55f19cffc066ea047d9097e48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c20dfa1ecc96e22fd74f12f1a07d38c860dc7e58abcf8bb105c7fee1fb13909d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20dfa1ecc96e22fd74f12f1a07d38c860dc7e58abcf8bb105c7fee1fb13909d->enter($__internal_c20dfa1ecc96e22fd74f12f1a07d38c860dc7e58abcf8bb105c7fee1fb13909d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c20dfa1ecc96e22fd74f12f1a07d38c860dc7e58abcf8bb105c7fee1fb13909d->leave($__internal_c20dfa1ecc96e22fd74f12f1a07d38c860dc7e58abcf8bb105c7fee1fb13909d_prof);

        
        $__internal_a13ece8437652addcd62951182b94d85dcc60f55f19cffc066ea047d9097e48d->leave($__internal_a13ece8437652addcd62951182b94d85dcc60f55f19cffc066ea047d9097e48d_prof);

    }

    // line 103
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_dce08e2a8bf5c8af0ab88f9e50a029914d7e301f3ade9ced667f886ef306ac49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce08e2a8bf5c8af0ab88f9e50a029914d7e301f3ade9ced667f886ef306ac49->enter($__internal_dce08e2a8bf5c8af0ab88f9e50a029914d7e301f3ade9ced667f886ef306ac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_6ed441d349546bd413a5dd295b5064f78aedfc08605638ffac8ae182b15e65cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed441d349546bd413a5dd295b5064f78aedfc08605638ffac8ae182b15e65cd->enter($__internal_6ed441d349546bd413a5dd295b5064f78aedfc08605638ffac8ae182b15e65cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 104
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
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
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
        
        $__internal_6ed441d349546bd413a5dd295b5064f78aedfc08605638ffac8ae182b15e65cd->leave($__internal_6ed441d349546bd413a5dd295b5064f78aedfc08605638ffac8ae182b15e65cd_prof);

        
        $__internal_dce08e2a8bf5c8af0ab88f9e50a029914d7e301f3ade9ced667f886ef306ac49->leave($__internal_dce08e2a8bf5c8af0ab88f9e50a029914d7e301f3ade9ced667f886ef306ac49_prof);

    }

    // line 144
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c19b8f0068c31bbab90713c8e8b0b8a3d0190e279319f2485d9cccbb706ed47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c19b8f0068c31bbab90713c8e8b0b8a3d0190e279319f2485d9cccbb706ed47->enter($__internal_8c19b8f0068c31bbab90713c8e8b0b8a3d0190e279319f2485d9cccbb706ed47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a998963cbb27f5b3fb4658962f3f0039c052b7dd37b1444f46f1ebff2d49481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a998963cbb27f5b3fb4658962f3f0039c052b7dd37b1444f46f1ebff2d49481->enter($__internal_1a998963cbb27f5b3fb4658962f3f0039c052b7dd37b1444f46f1ebff2d49481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 145
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Personnel</a></li>
                <li class=\"breadcrumb-item active\"> index</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des Personnels</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee_add");
        echo "\"><button class=\"btn btn-primary site-btn pull-right\" data-target=\"#view-add\" data-toggle=\"modal\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\"  class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>CIN</th>
                                                        <th>Email</th>
                                                        <th>Date d'Ajouter</th>
                                                        <th>Adresse</th>
                                                        <th>Telephone</th>
                                                        <th>Poste</th>
                                                        <th>Salaire</th>
                                                        <th>action</th>
                                                        <th>Statu</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employee"] ?? $this->getContext($context, "employee")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 200
            echo "                                                        ";
            if (($this->getAttribute($context["e"], "enabled", array()) == 1)) {
                // line 201
                echo "                                                            <tr>
                                                                <td>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fullName", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 204
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "lastLogin", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
                echo "
                                                                    , ";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "pays", array()), "name", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "poste", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "salaire", array()), "html", null, true);
                echo "</td>
                                                                <td>
                                                                    <a href=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee_update", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs \">Update</button></a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        ";
            } else {
                // line 221
                echo "                                                            <tr>
                                                                <td>";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fullName", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 224
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "lastLogin", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
                echo "
                                                                    , ";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "pays", array()), "name", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "poste", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "salaire", array()), "html", null, true);
                echo "</td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\"
                                                                                class=\"btn btn-outline-primary btn-xs\"
                                                                                disabled>Update
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\"
                                                                                class=\"btn btn-xs btn-outline-danger desactivt\"
                                                                                data-id=\"";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\"
                                                                                data-target=\"#view-contact\"
                                                                                data-toggle=\"modal\">Desactive
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        ";
            }
            // line 251
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
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
                    <h4 class=\"modal-title\">Activation / Desactivation  des Employees</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-followw\">
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
                    <h4 class=\"modal-title\">Update Employee</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <script type=\"text/javascript\">
                                    \$('.update-Employee').click(function(){
                                        id = \$(this).data('id');
                                        \$.ajax({
                                            type: 'POST',
                                            url: Routing.generate('admin_Employee_update',{'id':id}),
                                            success:function(){
                                                \$('.contact-follow').html('<img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loader.gif"), "html", null, true);
        echo "\" />');
                                            },
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
        
        $__internal_1a998963cbb27f5b3fb4658962f3f0039c052b7dd37b1444f46f1ebff2d49481->leave($__internal_1a998963cbb27f5b3fb4658962f3f0039c052b7dd37b1444f46f1ebff2d49481_prof);

        
        $__internal_8c19b8f0068c31bbab90713c8e8b0b8a3d0190e279319f2485d9cccbb706ed47->leave($__internal_8c19b8f0068c31bbab90713c8e8b0b8a3d0190e279319f2485d9cccbb706ed47_prof);

    }

    // line 331
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_34d3df5fb1294e05217aa74d45b6cfd56d8e164c668691e21f94784022dcd76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d3df5fb1294e05217aa74d45b6cfd56d8e164c668691e21f94784022dcd76d->enter($__internal_34d3df5fb1294e05217aa74d45b6cfd56d8e164c668691e21f94784022dcd76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_68c4c85c20d453f0f192daee0d569a425c33422fe1493f55b02782d9e7025cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c4c85c20d453f0f192daee0d569a425c33422fe1493f55b02782d9e7025cad->enter($__internal_68c4c85c20d453f0f192daee0d569a425c33422fe1493f55b02782d9e7025cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 332
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 355
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
                    url: Routing.generate('admin_delete_compte',{'id':id}),
                    success: function (result) {
                        console.log(result);
                       // window.location.href = \"http://localhost/erp/web/app_dev.php/admin/employee\";
                    },
                    error: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_68c4c85c20d453f0f192daee0d569a425c33422fe1493f55b02782d9e7025cad->leave($__internal_68c4c85c20d453f0f192daee0d569a425c33422fe1493f55b02782d9e7025cad_prof);

        
        $__internal_34d3df5fb1294e05217aa74d45b6cfd56d8e164c668691e21f94784022dcd76d->leave($__internal_34d3df5fb1294e05217aa74d45b6cfd56d8e164c668691e21f94784022dcd76d_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/employee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 355,  695 => 354,  691 => 353,  687 => 352,  683 => 351,  679 => 350,  675 => 349,  671 => 348,  667 => 347,  663 => 346,  659 => 345,  655 => 344,  651 => 343,  647 => 342,  643 => 341,  639 => 340,  635 => 339,  631 => 338,  627 => 337,  623 => 336,  619 => 335,  615 => 334,  611 => 333,  606 => 332,  597 => 331,  571 => 315,  506 => 252,  500 => 251,  489 => 243,  473 => 230,  469 => 229,  465 => 228,  461 => 227,  453 => 226,  449 => 225,  445 => 224,  441 => 223,  437 => 222,  434 => 221,  426 => 216,  419 => 212,  414 => 210,  410 => 209,  406 => 208,  402 => 207,  394 => 206,  390 => 205,  386 => 204,  382 => 203,  378 => 202,  375 => 201,  372 => 200,  368 => 199,  344 => 178,  309 => 145,  300 => 144,  277 => 131,  268 => 125,  259 => 119,  250 => 113,  239 => 104,  230 => 103,  210 => 93,  206 => 92,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Employee') }}\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Enseignant') }}\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Personnel</a></li>
                <li class=\"breadcrumb-item active\"> index</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des Personnels</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"{{ path('admin_Employee_add')}}\"><button class=\"btn btn-primary site-btn pull-right\" data-target=\"#view-add\" data-toggle=\"modal\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\"  class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>CIN</th>
                                                        <th>Email</th>
                                                        <th>Date d'Ajouter</th>
                                                        <th>Adresse</th>
                                                        <th>Telephone</th>
                                                        <th>Poste</th>
                                                        <th>Salaire</th>
                                                        <th>action</th>
                                                        <th>Statu</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for e in employee %}
                                                        {% if e.enabled == 1 %}
                                                            <tr>
                                                                <td>{{ e.fullName }}</td>
                                                                <td>{{ e.cin }}</td>
                                                                <td>{{ e.lastLogin|date('M d Y H:i') }}</td>
                                                                <td>{{ e.email }}</td>
                                                                <td>{{ e.adresse }} , {{ e.ville }} {{ e.cp }}
                                                                    , {{ e.pays.name }}</td>
                                                                <td>{{ e.tel }}</td>
                                                                <td>{{ e.poste }}</td>
                                                                <td>{{ e.salaire }}</td>
                                                                <td>
                                                                    <a href=\"{{ path('admin_Employee_update',{'id':e.id})}}\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs \">Update</button></a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"{{ e.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        {% else %}
                                                            <tr>
                                                                <td>{{ e.fullName }}</td>
                                                                <td>{{ e.cin }}</td>
                                                                <td>{{ e.lastLogin|date('M d Y H:i') }}</td>
                                                                <td>{{ e.email }}</td>
                                                                <td>{{ e.adresse }} , {{ e.ville }} {{ e.cp }}
                                                                    , {{ e.pays.name }}</td>
                                                                <td>{{ e.tel }}</td>
                                                                <td>{{ e.poste }}</td>
                                                                <td>{{ e.salaire }}</td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\"
                                                                                class=\"btn btn-outline-primary btn-xs\"
                                                                                disabled>Update
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <button type=\"button\"
                                                                                class=\"btn btn-xs btn-outline-danger desactivt\"
                                                                                data-id=\"{{ e.id }}\"
                                                                                data-target=\"#view-contact\"
                                                                                data-toggle=\"modal\">Desactive
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
                    <h4 class=\"modal-title\">Activation / Desactivation  des Employees</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-followw\">
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
                    <h4 class=\"modal-title\">Update Employee</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <script type=\"text/javascript\">
                                    \$('.update-Employee').click(function(){
                                        id = \$(this).data('id');
                                        \$.ajax({
                                            type: 'POST',
                                            url: Routing.generate('admin_Employee_update',{'id':id}),
                                            success:function(){
                                                \$('.contact-follow').html('<img src=\"{{ asset('loader.gif') }}\" />');
                                            },
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
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
                    url: Routing.generate('admin_delete_compte',{'id':id}),
                    success: function (result) {
                        console.log(result);
                       // window.location.href = \"http://localhost/erp/web/app_dev.php/admin/employee\";
                    },
                    error: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
{% endblock %}", "ERPBundle:Admin/Membre/employee:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/employee/index.html.twig");
    }
}
