<?php

/* ERPBundle:Front/etudiant:note.html.twig */
class __TwigTemplate_c734045fc42717c094e8664bd35cddd1586fb352aa5f34cefd47d8d25c7dc529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/etudiant:note.html.twig", 1);
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
        $__internal_e7cea06c6d7778d724d4bd9a202e19d9e2a0de8d20028a1caa8756f04c6a43d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7cea06c6d7778d724d4bd9a202e19d9e2a0de8d20028a1caa8756f04c6a43d0->enter($__internal_e7cea06c6d7778d724d4bd9a202e19d9e2a0de8d20028a1caa8756f04c6a43d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:note.html.twig"));

        $__internal_ef78208bcf60beb07001068474c5f4a508f9c09d0c0d8642872f2a527dce6dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef78208bcf60beb07001068474c5f4a508f9c09d0c0d8642872f2a527dce6dde->enter($__internal_ef78208bcf60beb07001068474c5f4a508f9c09d0c0d8642872f2a527dce6dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:note.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7cea06c6d7778d724d4bd9a202e19d9e2a0de8d20028a1caa8756f04c6a43d0->leave($__internal_e7cea06c6d7778d724d4bd9a202e19d9e2a0de8d20028a1caa8756f04c6a43d0_prof);

        
        $__internal_ef78208bcf60beb07001068474c5f4a508f9c09d0c0d8642872f2a527dce6dde->leave($__internal_ef78208bcf60beb07001068474c5f4a508f9c09d0c0d8642872f2a527dce6dde_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_261802648fb068e89014b44cbfa5133e3f4d782be8f0e4297d795e7d8eb3d5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261802648fb068e89014b44cbfa5133e3f4d782be8f0e4297d795e7d8eb3d5cf->enter($__internal_261802648fb068e89014b44cbfa5133e3f4d782be8f0e4297d795e7d8eb3d5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99fee1a10242caafc39e656c5ee06c26d4645fa3e58f36d28314d8e954765728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fee1a10242caafc39e656c5ee06c26d4645fa3e58f36d28314d8e954765728->enter($__internal_99fee1a10242caafc39e656c5ee06c26d4645fa3e58f36d28314d8e954765728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Etudiant - Note";
        
        $__internal_99fee1a10242caafc39e656c5ee06c26d4645fa3e58f36d28314d8e954765728->leave($__internal_99fee1a10242caafc39e656c5ee06c26d4645fa3e58f36d28314d8e954765728_prof);

        
        $__internal_261802648fb068e89014b44cbfa5133e3f4d782be8f0e4297d795e7d8eb3d5cf->leave($__internal_261802648fb068e89014b44cbfa5133e3f4d782be8f0e4297d795e7d8eb3d5cf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ebd702acf25470aa35d8e9973ab543b12cf5c631edd70bc49a8884b11f45318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebd702acf25470aa35d8e9973ab543b12cf5c631edd70bc49a8884b11f45318->enter($__internal_7ebd702acf25470aa35d8e9973ab543b12cf5c631edd70bc49a8884b11f45318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a3b29edcbda77efe9b5584070079eef7891367866eb8c880f089290764ae841e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b29edcbda77efe9b5584070079eef7891367866eb8c880f089290764ae841e->enter($__internal_a3b29edcbda77efe9b5584070079eef7891367866eb8c880f089290764ae841e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a3b29edcbda77efe9b5584070079eef7891367866eb8c880f089290764ae841e->leave($__internal_a3b29edcbda77efe9b5584070079eef7891367866eb8c880f089290764ae841e_prof);

        
        $__internal_7ebd702acf25470aa35d8e9973ab543b12cf5c631edd70bc49a8884b11f45318->leave($__internal_7ebd702acf25470aa35d8e9973ab543b12cf5c631edd70bc49a8884b11f45318_prof);

    }

    // line 101
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_a5fcb18ad31166df14b4e9ae44be902a1ba40b99ed54d583ec83cca2bd8e4946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fcb18ad31166df14b4e9ae44be902a1ba40b99ed54d583ec83cca2bd8e4946->enter($__internal_a5fcb18ad31166df14b4e9ae44be902a1ba40b99ed54d583ec83cca2bd8e4946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_37b885a49b7b5b5e44c35c96b2c1c2c89af9071d358dfa25f2860578533404d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b885a49b7b5b5e44c35c96b2c1c2c89af9071d358dfa25f2860578533404d3->enter($__internal_37b885a49b7b5b5e44c35c96b2c1c2c89af9071d358dfa25f2860578533404d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_note");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span  style=\"color:white\">Note</span>
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
        
        $__internal_37b885a49b7b5b5e44c35c96b2c1c2c89af9071d358dfa25f2860578533404d3->leave($__internal_37b885a49b7b5b5e44c35c96b2c1c2c89af9071d358dfa25f2860578533404d3_prof);

        
        $__internal_a5fcb18ad31166df14b4e9ae44be902a1ba40b99ed54d583ec83cca2bd8e4946->leave($__internal_a5fcb18ad31166df14b4e9ae44be902a1ba40b99ed54d583ec83cca2bd8e4946_prof);

    }

    // line 159
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec83e9eb7fd9f101376098da83034b484891503c2792a444a5faf32dcaac51e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec83e9eb7fd9f101376098da83034b484891503c2792a444a5faf32dcaac51e5->enter($__internal_ec83e9eb7fd9f101376098da83034b484891503c2792a444a5faf32dcaac51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eeab7378f97621811d3416fb3a54597e9a992948a98d9189ae253d01a1c1f530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeab7378f97621811d3416fb3a54597e9a992948a98d9189ae253d01a1c1f530->enter($__internal_eeab7378f97621811d3416fb3a54597e9a992948a98d9189ae253d01a1c1f530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 160
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Note</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">note</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">liste des Notes </h4>
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
                                                        <th>Matiere</th>
                                                        <th>DS</th>
                                                        <th>Test</th>
                                                        <th>TP</th>
                                                        <th>Examen</th>
                                                        <th>Moyenne</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["note"] ?? $this->getContext($context, "note")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 210
            echo "                                                            <tr>
                                                                <td>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["n"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "ds", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "test", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "tp", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "exam", array()), "html", null, true);
            echo "</td>
                                                                <td>Moyenne</td>
                                                            </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
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
        
        $__internal_eeab7378f97621811d3416fb3a54597e9a992948a98d9189ae253d01a1c1f530->leave($__internal_eeab7378f97621811d3416fb3a54597e9a992948a98d9189ae253d01a1c1f530_prof);

        
        $__internal_ec83e9eb7fd9f101376098da83034b484891503c2792a444a5faf32dcaac51e5->leave($__internal_ec83e9eb7fd9f101376098da83034b484891503c2792a444a5faf32dcaac51e5_prof);

    }

    // line 233
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_7558cacad308685d5d3f4e76f421ae2170d61ec4e87a05563a77b3d757ac19ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7558cacad308685d5d3f4e76f421ae2170d61ec4e87a05563a77b3d757ac19ac->enter($__internal_7558cacad308685d5d3f4e76f421ae2170d61ec4e87a05563a77b3d757ac19ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_1db10e78a1aeb2d6aa91de06b9bdc6450d76d8e1b7fdc93ae865f06a4886ed29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db10e78a1aeb2d6aa91de06b9bdc6450d76d8e1b7fdc93ae865f06a4886ed29->enter($__internal_1db10e78a1aeb2d6aa91de06b9bdc6450d76d8e1b7fdc93ae865f06a4886ed29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 234
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 257
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
        
        $__internal_1db10e78a1aeb2d6aa91de06b9bdc6450d76d8e1b7fdc93ae865f06a4886ed29->leave($__internal_1db10e78a1aeb2d6aa91de06b9bdc6450d76d8e1b7fdc93ae865f06a4886ed29_prof);

        
        $__internal_7558cacad308685d5d3f4e76f421ae2170d61ec4e87a05563a77b3d757ac19ac->leave($__internal_7558cacad308685d5d3f4e76f421ae2170d61ec4e87a05563a77b3d757ac19ac_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant:note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 257,  532 => 256,  528 => 255,  524 => 254,  520 => 253,  516 => 252,  512 => 251,  508 => 250,  504 => 249,  500 => 248,  496 => 247,  492 => 246,  488 => 245,  484 => 244,  480 => 243,  476 => 242,  472 => 241,  468 => 240,  464 => 239,  460 => 238,  456 => 237,  452 => 236,  448 => 235,  443 => 234,  434 => 233,  411 => 219,  401 => 215,  397 => 214,  393 => 213,  389 => 212,  385 => 211,  382 => 210,  378 => 209,  327 => 160,  318 => 159,  296 => 147,  287 => 141,  278 => 135,  269 => 129,  260 => 123,  251 => 117,  242 => 111,  231 => 102,  222 => 101,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Etudiant - Note{% endblock %}
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
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('etudiant_note') }}\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span  style=\"color:white\">Note</span>
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
            <h2 class=\"float-xs-left content-title-main\">Note</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">note</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">liste des Notes </h4>
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
                                                        <th>Matiere</th>
                                                        <th>DS</th>
                                                        <th>Test</th>
                                                        <th>TP</th>
                                                        <th>Examen</th>
                                                        <th>Moyenne</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for n in note %}
                                                            <tr>
                                                                <td>{{ n.matiere.nom }}</td>
                                                                <td>{{ n.ds }}</td>
                                                                <td>{{ n.test }}</td>
                                                                <td>{{ n.tp }}</td>
                                                                <td>{{ n.exam }}</td>
                                                                <td>Moyenne</td>
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
{% endblock %}", "ERPBundle:Front/etudiant:note.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/note.html.twig");
    }
}
