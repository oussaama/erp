<?php

/* ERPBundle:Admin/Membre/entreprise:add.html.twig */
class __TwigTemplate_16f11e848ed65a46e3a1ff5a44339ff2dc5b46079f35b16c600a417f14808cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/entreprise:add.html.twig", 1);
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
        $__internal_81ebfcf188b678248d2ae37295e2ca6c1e03c2cd307c99b14eef36bc7e3cbfaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ebfcf188b678248d2ae37295e2ca6c1e03c2cd307c99b14eef36bc7e3cbfaf->enter($__internal_81ebfcf188b678248d2ae37295e2ca6c1e03c2cd307c99b14eef36bc7e3cbfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/entreprise:add.html.twig"));

        $__internal_82c8ba8339eaa5979b166bebfc90494dd2839c4b52dcc56156af0bed5733600c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c8ba8339eaa5979b166bebfc90494dd2839c4b52dcc56156af0bed5733600c->enter($__internal_82c8ba8339eaa5979b166bebfc90494dd2839c4b52dcc56156af0bed5733600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/entreprise:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ebfcf188b678248d2ae37295e2ca6c1e03c2cd307c99b14eef36bc7e3cbfaf->leave($__internal_81ebfcf188b678248d2ae37295e2ca6c1e03c2cd307c99b14eef36bc7e3cbfaf_prof);

        
        $__internal_82c8ba8339eaa5979b166bebfc90494dd2839c4b52dcc56156af0bed5733600c->leave($__internal_82c8ba8339eaa5979b166bebfc90494dd2839c4b52dcc56156af0bed5733600c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c4c8f97ba2db8c4920f1b8a520870f67012de19d6b04beb90838a3e7cb7ddf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4c8f97ba2db8c4920f1b8a520870f67012de19d6b04beb90838a3e7cb7ddf5->enter($__internal_1c4c8f97ba2db8c4920f1b8a520870f67012de19d6b04beb90838a3e7cb7ddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0e46323f7db5db6c50c404559e53ed890e03ad801627188e9dac4f6f03dc3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e46323f7db5db6c50c404559e53ed890e03ad801627188e9dac4f6f03dc3f1->enter($__internal_a0e46323f7db5db6c50c404559e53ed890e03ad801627188e9dac4f6f03dc3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Entreprise";
        
        $__internal_a0e46323f7db5db6c50c404559e53ed890e03ad801627188e9dac4f6f03dc3f1->leave($__internal_a0e46323f7db5db6c50c404559e53ed890e03ad801627188e9dac4f6f03dc3f1_prof);

        
        $__internal_1c4c8f97ba2db8c4920f1b8a520870f67012de19d6b04beb90838a3e7cb7ddf5->leave($__internal_1c4c8f97ba2db8c4920f1b8a520870f67012de19d6b04beb90838a3e7cb7ddf5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d835777f523bfad065b6f3ed1c3f8e8bf338ecc4d84f2a676a080f658d50e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d835777f523bfad065b6f3ed1c3f8e8bf338ecc4d84f2a676a080f658d50e26->enter($__internal_7d835777f523bfad065b6f3ed1c3f8e8bf338ecc4d84f2a676a080f658d50e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_39764eb40712e8eec99a26a3a940a25eb653c0f8c012651d93a700f8a8d1084d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39764eb40712e8eec99a26a3a940a25eb653c0f8c012651d93a700f8a8d1084d->enter($__internal_39764eb40712e8eec99a26a3a940a25eb653c0f8c012651d93a700f8a8d1084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-margin{
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_39764eb40712e8eec99a26a3a940a25eb653c0f8c012651d93a700f8a8d1084d->leave($__internal_39764eb40712e8eec99a26a3a940a25eb653c0f8c012651d93a700f8a8d1084d_prof);

        
        $__internal_7d835777f523bfad065b6f3ed1c3f8e8bf338ecc4d84f2a676a080f658d50e26->leave($__internal_7d835777f523bfad065b6f3ed1c3f8e8bf338ecc4d84f2a676a080f658d50e26_prof);

    }

    // line 107
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_314e7c1c748297372aae5c9763122da61a813bb11aaf5305edf53712db067e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314e7c1c748297372aae5c9763122da61a813bb11aaf5305edf53712db067e48->enter($__internal_314e7c1c748297372aae5c9763122da61a813bb11aaf5305edf53712db067e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_72635ffc716731560e9eae00e9193d4b7097ac9bc886bf5a44d58360743f04e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72635ffc716731560e9eae00e9193d4b7097ac9bc886bf5a44d58360743f04e8->enter($__internal_72635ffc716731560e9eae00e9193d4b7097ac9bc886bf5a44d58360743f04e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Etudiant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise");
        echo "\">
                                    <span class=\"icon_tools header-icon\" aria-hidden=\"true\"  style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Tuteur de stage</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_72635ffc716731560e9eae00e9193d4b7097ac9bc886bf5a44d58360743f04e8->leave($__internal_72635ffc716731560e9eae00e9193d4b7097ac9bc886bf5a44d58360743f04e8_prof);

        
        $__internal_314e7c1c748297372aae5c9763122da61a813bb11aaf5305edf53712db067e48->leave($__internal_314e7c1c748297372aae5c9763122da61a813bb11aaf5305edf53712db067e48_prof);

    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fd8b5e45d0172fb1234928e13153d429cab52b4055c61a52c969ac210d278af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd8b5e45d0172fb1234928e13153d429cab52b4055c61a52c969ac210d278af->enter($__internal_3fd8b5e45d0172fb1234928e13153d429cab52b4055c61a52c969ac210d278af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a914c55ca4854bd92d617d6bb9581fe1778b0048ae751682d0a9b6c8dab1da21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a914c55ca4854bd92d617d6bb9581fe1778b0048ae751682d0a9b6c8dab1da21->enter($__internal_a914c55ca4854bd92d617d6bb9581fe1778b0048ae751682d0a9b6c8dab1da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 149
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Entreprise</a></li>
                <li class=\"breadcrumb-item active\">Ajout</li>
            </ol>

        </div>

        <div class=\"contain-inner dashboard-v2\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12 col-xl-12 xl-dashboard-v2\">
                        <div class=\"row\">
                            <div class=\"col-md-12 lg-dashboard-v2\">
                                <div class=\"content\">
                                    <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                                    <div class=\"dashboard-content\">
                                        <div class=\"dashboard-header\">
                                            <h4 class=\"page-content-title float-xs-left\">Ajoute d'entreprise </h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span
                                                                    class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            <div class=\"divider15\"></div>
                                            ";
        // line 188
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entreprise_registration"), "method" => "POST", "attr" => array("id" => "addEntreprise", "novalidate" => "novalidate")));
        echo "
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_username\"></span>
                                                </div>

                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullName", array()), 'row');
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
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "directeur", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"entreprise_directeur\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_phone\"></i></span>
                                                        ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'row');
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
        // line 228
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'row');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row');
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
        // line 243
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_ville\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 250
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_pays\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                                        ";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "domaine", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"entreprise_domaine\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_mail\"></i></span>
                                                        ";
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("placeholder" => "email")));
        echo "
                                                    </div>
                                                    <span id=\"entreprise_email\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        ";
        // line 277
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_p1\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        ";
        // line 285
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"employee_p2\"></span>
                                                </div>
                                            </div>
                                            <div class=\"divider15\"></div>
                                            <div>
                                                <input type=\"submit\" value=\"ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\"
                                                       id=\"addEntrepriseButton\"/>
                                            </div>
                                            <input type=\"hidden\" value=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
                                            ";
        // line 297
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
        
        $__internal_a914c55ca4854bd92d617d6bb9581fe1778b0048ae751682d0a9b6c8dab1da21->leave($__internal_a914c55ca4854bd92d617d6bb9581fe1778b0048ae751682d0a9b6c8dab1da21_prof);

        
        $__internal_3fd8b5e45d0172fb1234928e13153d429cab52b4055c61a52c969ac210d278af->leave($__internal_3fd8b5e45d0172fb1234928e13153d429cab52b4055c61a52c969ac210d278af_prof);

    }

    // line 309
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_bc0a6e92e2832e2a04a6ab934b3a5c4cb0879811be5c937a9ba6bd2b7b8bca72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0a6e92e2832e2a04a6ab934b3a5c4cb0879811be5c937a9ba6bd2b7b8bca72->enter($__internal_bc0a6e92e2832e2a04a6ab934b3a5c4cb0879811be5c937a9ba6bd2b7b8bca72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_c185cff3c6c20fade59fc63b6f4c9dc1e5bcfa46803e7e04f36942967d46332b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c185cff3c6c20fade59fc63b6f4c9dc1e5bcfa46803e7e04f36942967d46332b->enter($__internal_c185cff3c6c20fade59fc63b6f4c9dc1e5bcfa46803e7e04f36942967d46332b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 310
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 346
        echo "\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
";
        
        $__internal_c185cff3c6c20fade59fc63b6f4c9dc1e5bcfa46803e7e04f36942967d46332b->leave($__internal_c185cff3c6c20fade59fc63b6f4c9dc1e5bcfa46803e7e04f36942967d46332b_prof);

        
        $__internal_bc0a6e92e2832e2a04a6ab934b3a5c4cb0879811be5c937a9ba6bd2b7b8bca72->leave($__internal_bc0a6e92e2832e2a04a6ab934b3a5c4cb0879811be5c937a9ba6bd2b7b8bca72_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/entreprise:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 346,  644 => 345,  640 => 344,  635 => 342,  630 => 340,  625 => 338,  620 => 336,  615 => 334,  611 => 333,  607 => 332,  603 => 331,  599 => 330,  595 => 329,  590 => 327,  585 => 325,  580 => 323,  576 => 322,  572 => 321,  568 => 320,  564 => 319,  560 => 318,  555 => 316,  551 => 315,  546 => 313,  541 => 311,  536 => 310,  527 => 309,  505 => 297,  501 => 296,  487 => 285,  476 => 277,  463 => 267,  452 => 259,  440 => 250,  430 => 243,  418 => 234,  409 => 228,  397 => 219,  387 => 212,  374 => 202,  362 => 193,  354 => 188,  313 => 149,  304 => 148,  281 => 135,  272 => 129,  263 => 123,  254 => 117,  243 => 108,  234 => 107,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Entreprise{% endblock %}
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-margin{
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
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Etudiant') }}\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Etudiant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Entreprise') }}\">
                                    <span class=\"icon_tools header-icon\" aria-hidden=\"true\"  style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Tuteur de stage</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Entreprise</a></li>
                <li class=\"breadcrumb-item active\">Ajout</li>
            </ol>

        </div>

        <div class=\"contain-inner dashboard-v2\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12 col-xl-12 xl-dashboard-v2\">
                        <div class=\"row\">
                            <div class=\"col-md-12 lg-dashboard-v2\">
                                <div class=\"content\">
                                    <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                                    <div class=\"dashboard-content\">
                                        <div class=\"dashboard-header\">
                                            <h4 class=\"page-content-title float-xs-left\">Ajoute d'entreprise </h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span
                                                                    class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            <div class=\"divider15\"></div>
                                            {{ form_start(form,{'action': path('entreprise_registration'),'method':'POST','attr':{'id':'addEntreprise','novalidate':'novalidate'}}) }}
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.username) }}
                                                    </div>
                                                    <span id=\"employee_username\"></span>
                                                </div>

                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.fullName) }}
                                                    </div>
                                                    <span id=\"employee_fullName\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.directeur) }}
                                                    </div>
                                                    <span id=\"entreprise_directeur\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_phone\"></i></span>
                                                        {{ form_row(form.tel) }}
                                                    </div>
                                                    <span id=\"entreprise_tel\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.adresse) }}
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.cp) }}
                                                    </div>
                                                    <span id=\"employee_cp\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.ville) }}
                                                    </div>
                                                    <span id=\"employee_ville\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.pays) }}
                                                    </div>
                                                    <span id=\"employee_pays\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                                        {{ form_row(form.domaine) }}
                                                    </div>
                                                    <span id=\"entreprise_domaine\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_mail\"></i></span>
                                                        {{ form_row(form.email,{ 'attr': {'placeholder': \"email\"} }) }}
                                                    </div>
                                                    <span id=\"entreprise_email\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        {{ form_row(form.plainPassword.first) }}
                                                    </div>
                                                    <span id=\"employee_p1\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        {{ form_row(form.plainPassword.second) }}
                                                    </div>
                                                    <span id=\"employee_p2\"></span>
                                                </div>
                                            </div>
                                            <div class=\"divider15\"></div>
                                            <div>
                                                <input type=\"submit\" value=\"ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\"
                                                       id=\"addEntrepriseButton\"/>
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
    <script type=\"text/javascript\" src=\"{# asset('assets/global/js/global/form/formEntreprise.js') #}\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
{% endblock %}
", "ERPBundle:Admin/Membre/entreprise:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/entreprise/add.html.twig");
    }
}
