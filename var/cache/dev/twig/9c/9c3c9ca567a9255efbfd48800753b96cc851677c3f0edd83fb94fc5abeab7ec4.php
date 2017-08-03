<?php

/* ERPBundle:Front/etudiant:paiment.html.twig */
class __TwigTemplate_fd8d8ee971721c697b121e63900e38c3c4c4900ec7d999e6619dc5a2c4c06601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/etudiant:paiment.html.twig", 1);
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
        $__internal_b8f33293f63c1c7bf6fbbe00e1f82e5b6d57e482c24bc1cc67dfc2de7670a5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f33293f63c1c7bf6fbbe00e1f82e5b6d57e482c24bc1cc67dfc2de7670a5df->enter($__internal_b8f33293f63c1c7bf6fbbe00e1f82e5b6d57e482c24bc1cc67dfc2de7670a5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:paiment.html.twig"));

        $__internal_968846d24c2f0f89fcba267bfb99ee8f505602326c0cf70dbe347673d759289e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968846d24c2f0f89fcba267bfb99ee8f505602326c0cf70dbe347673d759289e->enter($__internal_968846d24c2f0f89fcba267bfb99ee8f505602326c0cf70dbe347673d759289e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:paiment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f33293f63c1c7bf6fbbe00e1f82e5b6d57e482c24bc1cc67dfc2de7670a5df->leave($__internal_b8f33293f63c1c7bf6fbbe00e1f82e5b6d57e482c24bc1cc67dfc2de7670a5df_prof);

        
        $__internal_968846d24c2f0f89fcba267bfb99ee8f505602326c0cf70dbe347673d759289e->leave($__internal_968846d24c2f0f89fcba267bfb99ee8f505602326c0cf70dbe347673d759289e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe3f12052b29739a7c266540f23dd59b916e23337dc54f00001aa1c19e876a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3f12052b29739a7c266540f23dd59b916e23337dc54f00001aa1c19e876a6c->enter($__internal_fe3f12052b29739a7c266540f23dd59b916e23337dc54f00001aa1c19e876a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23c61a2f8973bb9518873418d5a591fa96299ae016985afc416ddb26a6f5c3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c61a2f8973bb9518873418d5a591fa96299ae016985afc416ddb26a6f5c3df->enter($__internal_23c61a2f8973bb9518873418d5a591fa96299ae016985afc416ddb26a6f5c3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Etudiant - Paiment";
        
        $__internal_23c61a2f8973bb9518873418d5a591fa96299ae016985afc416ddb26a6f5c3df->leave($__internal_23c61a2f8973bb9518873418d5a591fa96299ae016985afc416ddb26a6f5c3df_prof);

        
        $__internal_fe3f12052b29739a7c266540f23dd59b916e23337dc54f00001aa1c19e876a6c->leave($__internal_fe3f12052b29739a7c266540f23dd59b916e23337dc54f00001aa1c19e876a6c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_78b3fcf92ae0a73339df9728db020079dd30c2fed094caf72712c539fea3e9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b3fcf92ae0a73339df9728db020079dd30c2fed094caf72712c539fea3e9f2->enter($__internal_78b3fcf92ae0a73339df9728db020079dd30c2fed094caf72712c539fea3e9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6d770995b3e19c81314b0bc49e0d9259a44b3b6a546414d0f1277161ea6b18d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d770995b3e19c81314b0bc49e0d9259a44b3b6a546414d0f1277161ea6b18d5->enter($__internal_6d770995b3e19c81314b0bc49e0d9259a44b3b6a546414d0f1277161ea6b18d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6d770995b3e19c81314b0bc49e0d9259a44b3b6a546414d0f1277161ea6b18d5->leave($__internal_6d770995b3e19c81314b0bc49e0d9259a44b3b6a546414d0f1277161ea6b18d5_prof);

        
        $__internal_78b3fcf92ae0a73339df9728db020079dd30c2fed094caf72712c539fea3e9f2->leave($__internal_78b3fcf92ae0a73339df9728db020079dd30c2fed094caf72712c539fea3e9f2_prof);

    }

    // line 101
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_ead3799560c8487002bf20e8a47cace34b8e0b59203cf93bfbf9662597d083f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead3799560c8487002bf20e8a47cace34b8e0b59203cf93bfbf9662597d083f5->enter($__internal_ead3799560c8487002bf20e8a47cace34b8e0b59203cf93bfbf9662597d083f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_e743e07b25a70935ed0718e4675536daf835940f40cc81fc11655f91a2bc4bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e743e07b25a70935ed0718e4675536daf835940f40cc81fc11655f91a2bc4bfc->enter($__internal_e743e07b25a70935ed0718e4675536daf835940f40cc81fc11655f91a2bc4bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_cours");
        echo "\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Cours</span>
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
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_note");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Note</span>
                                </a>
                            </li>
                            <li  class=\"menu-paiment\" style=\"background:#087380;\">
                                <a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_paiment");
        echo "\">
                                    <span class=\"icon_wallet header-icon\" aria-hidden=\"true\"  style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Paiment</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e743e07b25a70935ed0718e4675536daf835940f40cc81fc11655f91a2bc4bfc->leave($__internal_e743e07b25a70935ed0718e4675536daf835940f40cc81fc11655f91a2bc4bfc_prof);

        
        $__internal_ead3799560c8487002bf20e8a47cace34b8e0b59203cf93bfbf9662597d083f5->leave($__internal_ead3799560c8487002bf20e8a47cace34b8e0b59203cf93bfbf9662597d083f5_prof);

    }

    // line 159
    public function block_body($context, array $blocks = array())
    {
        $__internal_2882c6c1e8bfc291c848a10ae793f94b88ed29e569ec8619bd09143d8b62ab42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2882c6c1e8bfc291c848a10ae793f94b88ed29e569ec8619bd09143d8b62ab42->enter($__internal_2882c6c1e8bfc291c848a10ae793f94b88ed29e569ec8619bd09143d8b62ab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42a405b96ab4dc96d773b2f6fe9e06000e48c1053e478fda07a472c49cdd1f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a405b96ab4dc96d773b2f6fe9e06000e48c1053e478fda07a472c49cdd1f19->enter($__internal_42a405b96ab4dc96d773b2f6fe9e06000e48c1053e478fda07a472c49cdd1f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 160
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Cours</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">examen</a></li>
                <li class=\"breadcrumb-item active\">index </li>
            </ol>

        </div>

        <div class=\"contain-inner dashboard-v2\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12 col-xl-12 xl-dashboard-v2\">
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
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tranche"] ?? $this->getContext($context, "tranche")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 200
            echo "                                                ";
            if (($this->getAttribute($context["t"], "state", array()) == "en attente")) {
                // line 201
                echo "                                                    <tr class=\"table-danger\">
                                                        <td>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "title", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateDeb", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateFin", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "state", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "montant", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reste", array()), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            } else {
                // line 210
                echo "                                                    <tr class=\"table-success\">
                                                        <td>";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "title", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateDeb", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "dateFin", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "state", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "montant", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reste", array()), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            }
            // line 219
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "                                            </tbody>
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
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paiment"] ?? $this->getContext($context, "paiment")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 243
            echo "                                                <tr>
                                                    <td>";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "solde", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 245
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "createdAt", array()), "Y M D H:i:s"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "status", array()), "type", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "carte", array()), "html", null, true);
            echo "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class=\"divider15\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_42a405b96ab4dc96d773b2f6fe9e06000e48c1053e478fda07a472c49cdd1f19->leave($__internal_42a405b96ab4dc96d773b2f6fe9e06000e48c1053e478fda07a472c49cdd1f19_prof);

        
        $__internal_2882c6c1e8bfc291c848a10ae793f94b88ed29e569ec8619bd09143d8b62ab42->leave($__internal_2882c6c1e8bfc291c848a10ae793f94b88ed29e569ec8619bd09143d8b62ab42_prof);

    }

    // line 263
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_199beded1261782e7929c0f1f453ba630e22cd82628eb3494b8a4d88538b5900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199beded1261782e7929c0f1f453ba630e22cd82628eb3494b8a4d88538b5900->enter($__internal_199beded1261782e7929c0f1f453ba630e22cd82628eb3494b8a4d88538b5900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_625642217fe4679dea08e8eb03de12619027f558d6d9e08a54de29fddd518fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625642217fe4679dea08e8eb03de12619027f558d6d9e08a54de29fddd518fd2->enter($__internal_625642217fe4679dea08e8eb03de12619027f558d6d9e08a54de29fddd518fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 264
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 287
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
        
        $__internal_625642217fe4679dea08e8eb03de12619027f558d6d9e08a54de29fddd518fd2->leave($__internal_625642217fe4679dea08e8eb03de12619027f558d6d9e08a54de29fddd518fd2_prof);

        
        $__internal_199beded1261782e7929c0f1f453ba630e22cd82628eb3494b8a4d88538b5900->leave($__internal_199beded1261782e7929c0f1f453ba630e22cd82628eb3494b8a4d88538b5900_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant:paiment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 287,  611 => 286,  607 => 285,  603 => 284,  599 => 283,  595 => 282,  591 => 281,  587 => 280,  583 => 279,  579 => 278,  575 => 277,  571 => 276,  567 => 275,  563 => 274,  559 => 273,  555 => 272,  551 => 271,  547 => 270,  543 => 269,  539 => 268,  535 => 267,  531 => 266,  527 => 265,  522 => 264,  513 => 263,  491 => 250,  482 => 247,  478 => 246,  474 => 245,  470 => 244,  467 => 243,  463 => 242,  439 => 220,  433 => 219,  427 => 216,  423 => 215,  419 => 214,  415 => 213,  411 => 212,  407 => 211,  404 => 210,  398 => 207,  394 => 206,  390 => 205,  386 => 204,  382 => 203,  378 => 202,  375 => 201,  372 => 200,  368 => 199,  327 => 160,  318 => 159,  296 => 147,  287 => 141,  278 => 135,  269 => 129,  260 => 123,  251 => 117,  242 => 111,  231 => 102,  222 => 101,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Etudiant - Paiment{% endblock %}
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
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_cours') }}\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Cours</span>
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
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_note') }}\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Note</span>
                                </a>
                            </li>
                            <li  class=\"menu-paiment\" style=\"background:#087380;\">
                                <a href=\"{{ path('etudiant_paiment') }}\">
                                    <span class=\"icon_wallet header-icon\" aria-hidden=\"true\"  style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Paiment</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">examen</a></li>
                <li class=\"breadcrumb-item active\">index </li>
            </ol>

        </div>

        <div class=\"contain-inner dashboard-v2\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12 col-xl-12 xl-dashboard-v2\">
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
                                            {% for s in paiment %}
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
{% endblock %}", "ERPBundle:Front/etudiant:paiment.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/paiment.html.twig");
    }
}
