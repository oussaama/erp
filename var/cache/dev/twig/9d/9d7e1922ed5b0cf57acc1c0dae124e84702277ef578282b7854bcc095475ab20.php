<?php

/* ERPBundle:Front/etudiant:cours.html.twig */
class __TwigTemplate_1bd13c6d9e84e365d7dc22f33b7cc31ce337c0c4797ab1860cfac78724cd4a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/etudiant:cours.html.twig", 1);
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47cd0d001d6244b277ca6789816ed5b0ddbcff22964860290216b2b58dafe3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cd0d001d6244b277ca6789816ed5b0ddbcff22964860290216b2b58dafe3b8->enter($__internal_47cd0d001d6244b277ca6789816ed5b0ddbcff22964860290216b2b58dafe3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:cours.html.twig"));

        $__internal_08e93ab1543da34b815f0c6a3f5b84058c7f8d7d153b7328f5edfa49c0752509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e93ab1543da34b815f0c6a3f5b84058c7f8d7d153b7328f5edfa49c0752509->enter($__internal_08e93ab1543da34b815f0c6a3f5b84058c7f8d7d153b7328f5edfa49c0752509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:cours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47cd0d001d6244b277ca6789816ed5b0ddbcff22964860290216b2b58dafe3b8->leave($__internal_47cd0d001d6244b277ca6789816ed5b0ddbcff22964860290216b2b58dafe3b8_prof);

        
        $__internal_08e93ab1543da34b815f0c6a3f5b84058c7f8d7d153b7328f5edfa49c0752509->leave($__internal_08e93ab1543da34b815f0c6a3f5b84058c7f8d7d153b7328f5edfa49c0752509_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1c07bad61ff8b7dd1c76b640cd1d35e57c5dc0a337233203aca8947a68fdaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c07bad61ff8b7dd1c76b640cd1d35e57c5dc0a337233203aca8947a68fdaef->enter($__internal_d1c07bad61ff8b7dd1c76b640cd1d35e57c5dc0a337233203aca8947a68fdaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a25f7ab69b53bb154c8b04153b3d611b4fcd7489af1208a5615e7ce3d68dc5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25f7ab69b53bb154c8b04153b3d611b4fcd7489af1208a5615e7ce3d68dc5d7->enter($__internal_a25f7ab69b53bb154c8b04153b3d611b4fcd7489af1208a5615e7ce3d68dc5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Etudiant - Cours";
        
        $__internal_a25f7ab69b53bb154c8b04153b3d611b4fcd7489af1208a5615e7ce3d68dc5d7->leave($__internal_a25f7ab69b53bb154c8b04153b3d611b4fcd7489af1208a5615e7ce3d68dc5d7_prof);

        
        $__internal_d1c07bad61ff8b7dd1c76b640cd1d35e57c5dc0a337233203aca8947a68fdaef->leave($__internal_d1c07bad61ff8b7dd1c76b640cd1d35e57c5dc0a337233203aca8947a68fdaef_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef17ad37e61cb8fcdc078d678b2a7274d48345feeffdd74a6740ce7833e9c3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef17ad37e61cb8fcdc078d678b2a7274d48345feeffdd74a6740ce7833e9c3d6->enter($__internal_ef17ad37e61cb8fcdc078d678b2a7274d48345feeffdd74a6740ce7833e9c3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_38405de6d53ab6ab163461f7fdfd9c5af57b8d10c47a5064f69d4f738ca17ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38405de6d53ab6ab163461f7fdfd9c5af57b8d10c47a5064f69d4f738ca17ee5->enter($__internal_38405de6d53ab6ab163461f7fdfd9c5af57b8d10c47a5064f69d4f738ca17ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
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
        
        $__internal_38405de6d53ab6ab163461f7fdfd9c5af57b8d10c47a5064f69d4f738ca17ee5->leave($__internal_38405de6d53ab6ab163461f7fdfd9c5af57b8d10c47a5064f69d4f738ca17ee5_prof);

        
        $__internal_ef17ad37e61cb8fcdc078d678b2a7274d48345feeffdd74a6740ce7833e9c3d6->leave($__internal_ef17ad37e61cb8fcdc078d678b2a7274d48345feeffdd74a6740ce7833e9c3d6_prof);

    }

    // line 101
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_e0038af245d533f664c7aabfb3e492b46b074a81f003e5712c873333a14ce250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0038af245d533f664c7aabfb3e492b46b074a81f003e5712c873333a14ce250->enter($__internal_e0038af245d533f664c7aabfb3e492b46b074a81f003e5712c873333a14ce250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_9fcc6f848282e3e92d4e98708052f0ee06271aa75d069dcb98f418eaeae19f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcc6f848282e3e92d4e98708052f0ee06271aa75d069dcb98f418eaeae19f2f->enter($__internal_9fcc6f848282e3e92d4e98708052f0ee06271aa75d069dcb98f418eaeae19f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_programme");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Programme</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_cours");
        echo "\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_emploi");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_absence");
        echo "\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absence</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_examen");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examen</span>
                                </a>
                            </li>
                            <li  class=\"menu-paiment\">
                                <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_note");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Note</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_paiment");
        echo "\">
                                    <span class=\"icon_wallet header-icon\" aria-hidden=\"true\"></span>
                                    <span>paiment</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_9fcc6f848282e3e92d4e98708052f0ee06271aa75d069dcb98f418eaeae19f2f->leave($__internal_9fcc6f848282e3e92d4e98708052f0ee06271aa75d069dcb98f418eaeae19f2f_prof);

        
        $__internal_e0038af245d533f664c7aabfb3e492b46b074a81f003e5712c873333a14ce250->leave($__internal_e0038af245d533f664c7aabfb3e492b46b074a81f003e5712c873333a14ce250_prof);

    }

    // line 159
    public function block_body($context, array $blocks = array())
    {
        $__internal_a96713c86332aa13a2b4d56cf8a6749192c97c09939b577563785f5d454d7534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96713c86332aa13a2b4d56cf8a6749192c97c09939b577563785f5d454d7534->enter($__internal_a96713c86332aa13a2b4d56cf8a6749192c97c09939b577563785f5d454d7534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_598b9bb846c731a17a92e5b95957211d2c3dde5e8d08cf63a98a1c128c6ba006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598b9bb846c731a17a92e5b95957211d2c3dde5e8d08cf63a98a1c128c6ba006->enter($__internal_598b9bb846c731a17a92e5b95957211d2c3dde5e8d08cf63a98a1c128c6ba006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 160
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Cours</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Cours</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">liste des Cours </h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\" class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nom</th>
                                                        <th>Matiere</th>
                                                        <th>Enseignant</th>
                                                        <th>Fichiers Cour</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cours"] ?? $this->getContext($context, "cours")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 209
            echo "                                                        <tr>
                                                            <td>";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                                            <td >
                                                                ";
            // line 212
            if (($this->getAttribute($context["cour"], "nom", array()) != null)) {
                // line 213
                echo "                                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 215
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i
                                                                                class=\"fa fa-times\"></i> Aucun nom affecté !</span>
                                                                ";
            }
            // line 218
            echo "                                                            </td>
                                                            <td>";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cour"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cour"], "enseignant", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                                            <td>
                                                                ";
            // line 222
            if (($this->getAttribute($context["cour"], "cour", array()) != null)) {
                // line 223
                echo "                                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cour"], "cour", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 224
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/enseignant/") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array())) . "/cours/") . $context["c"])), "html", null, true);
                    echo "\" target=\"_blank\"> cour";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</a>
                                                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                echo "                                                                ";
            } else {
                // line 227
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i
                                                                                class=\"fa fa-times\"></i> Aucun cour affecté !</span>
                                                                ";
            }
            // line 230
            echo "                                                            </td>
                                                        </tr>
                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
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
";
        
        $__internal_598b9bb846c731a17a92e5b95957211d2c3dde5e8d08cf63a98a1c128c6ba006->leave($__internal_598b9bb846c731a17a92e5b95957211d2c3dde5e8d08cf63a98a1c128c6ba006_prof);

        
        $__internal_a96713c86332aa13a2b4d56cf8a6749192c97c09939b577563785f5d454d7534->leave($__internal_a96713c86332aa13a2b4d56cf8a6749192c97c09939b577563785f5d454d7534_prof);

    }

    // line 247
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_939ee52269344f59847376712b09247f9be4284c39596239be8aa9c3ad039443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939ee52269344f59847376712b09247f9be4284c39596239be8aa9c3ad039443->enter($__internal_939ee52269344f59847376712b09247f9be4284c39596239be8aa9c3ad039443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_07bceae147443d1806a17d73b39cb84c38dfe8c41487b394a0947d4b9affa8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bceae147443d1806a17d73b39cb84c38dfe8c41487b394a0947d4b9affa8b2->enter($__internal_07bceae147443d1806a17d73b39cb84c38dfe8c41487b394a0947d4b9affa8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 248
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 271
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
    <script type=\"text/javascript\">
        \$(\".etudiant-Classe\").click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('admin_Class_etudiant',{'id':id}),
                complete: function(data) {
                    \$('#update-class-form').html(data.responseText);
                }
            })
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
    <script>\$(\"#scolarite\").addClass('active')</script>
";
        
        $__internal_07bceae147443d1806a17d73b39cb84c38dfe8c41487b394a0947d4b9affa8b2->leave($__internal_07bceae147443d1806a17d73b39cb84c38dfe8c41487b394a0947d4b9affa8b2_prof);

        
        $__internal_939ee52269344f59847376712b09247f9be4284c39596239be8aa9c3ad039443->leave($__internal_939ee52269344f59847376712b09247f9be4284c39596239be8aa9c3ad039443_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 271,  611 => 270,  607 => 269,  603 => 268,  599 => 267,  595 => 266,  591 => 265,  587 => 264,  583 => 263,  579 => 262,  575 => 261,  571 => 260,  567 => 259,  563 => 258,  559 => 257,  555 => 256,  551 => 255,  547 => 254,  543 => 253,  539 => 252,  535 => 251,  531 => 250,  527 => 249,  522 => 248,  513 => 247,  490 => 233,  474 => 230,  469 => 227,  466 => 226,  447 => 224,  429 => 223,  427 => 222,  422 => 220,  418 => 219,  415 => 218,  410 => 215,  404 => 213,  402 => 212,  397 => 210,  394 => 209,  377 => 208,  327 => 160,  318 => 159,  296 => 147,  287 => 141,  278 => 135,  269 => 129,  260 => 123,  251 => 117,  242 => 111,  231 => 102,  222 => 101,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseFront.html.twig' %}
{% block title %}Etudiant - Cours{% endblock %}
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
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
                                <a href=\"{{ path('etudiant_programme') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Programme</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('etudiant_cours') }}\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_emploi') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_absence') }}\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absence</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_examen') }}\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examen</span>
                                </a>
                            </li>
                            <li  class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_note') }}\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Note</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_paiment') }}\">
                                    <span class=\"icon_wallet header-icon\" aria-hidden=\"true\"></span>
                                    <span>paiment</span>
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
            <h2 class=\"float-xs-left content-title-main\">Cours</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Cours</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">liste des Cours </h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\" class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nom</th>
                                                        <th>Matiere</th>
                                                        <th>Enseignant</th>
                                                        <th>Fichiers Cour</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for cour in cours %}
                                                        <tr>
                                                            <td>{{ loop.index }}</td>
                                                            <td >
                                                                {% if cour.nom  != NULL %}
                                                                    {{ cour.nom }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i
                                                                                class=\"fa fa-times\"></i> Aucun nom affecté !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td>{{ cour.matiere.nom }}</td>
                                                            <td>{{ cour.enseignant.fullName }}</td>
                                                            <td>
                                                                {% if cour.cour  != NULL %}
                                                                    {% for c in cour.cour %}
                                                                        <a href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/enseignant/'~app.user.id~'/cours/'~c) }}\" target=\"_blank\"> cour{{ loop.index }}</a>
                                                                    {% endfor %}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i
                                                                                class=\"fa fa-times\"></i> Aucun cour affecté !</span>
                                                                {% endif %}
                                                            </td>
                                                        </tr>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
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
    <script type=\"text/javascript\">
        \$(\".etudiant-Classe\").click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('admin_Class_etudiant',{'id':id}),
                complete: function(data) {
                    \$('#update-class-form').html(data.responseText);
                }
            })
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
    <script>\$(\"#scolarite\").addClass('active')</script>
{% endblock %}", "ERPBundle:Front/etudiant:cours.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/cours.html.twig");
    }
}
