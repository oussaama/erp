<?php

/* ERPBundle:Admin/Membre/etudiant:add.html.twig */
class __TwigTemplate_1bd9b9e59d03be619180d747c25ad4f32e956cf4e51951c83bf85354e13e54ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:add.html.twig", 1);
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
        $__internal_594923dca9ed0bfe7c8c8b8ee0d32a3961b162fd6b9421bd1f5779edc6351093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594923dca9ed0bfe7c8c8b8ee0d32a3961b162fd6b9421bd1f5779edc6351093->enter($__internal_594923dca9ed0bfe7c8c8b8ee0d32a3961b162fd6b9421bd1f5779edc6351093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:add.html.twig"));

        $__internal_957ebdf1181660311deac94724ac2344344834edf239b34e1436b1f025a3079e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957ebdf1181660311deac94724ac2344344834edf239b34e1436b1f025a3079e->enter($__internal_957ebdf1181660311deac94724ac2344344834edf239b34e1436b1f025a3079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594923dca9ed0bfe7c8c8b8ee0d32a3961b162fd6b9421bd1f5779edc6351093->leave($__internal_594923dca9ed0bfe7c8c8b8ee0d32a3961b162fd6b9421bd1f5779edc6351093_prof);

        
        $__internal_957ebdf1181660311deac94724ac2344344834edf239b34e1436b1f025a3079e->leave($__internal_957ebdf1181660311deac94724ac2344344834edf239b34e1436b1f025a3079e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_00317a4110415b25c2704850ab537993c066955b8c991a89ec762ac092ccd3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00317a4110415b25c2704850ab537993c066955b8c991a89ec762ac092ccd3dc->enter($__internal_00317a4110415b25c2704850ab537993c066955b8c991a89ec762ac092ccd3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c45a6bedb4dc6a545a72a3e8520a743f5d16c347a06edfae37dae18a9a23ed47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45a6bedb4dc6a545a72a3e8520a743f5d16c347a06edfae37dae18a9a23ed47->enter($__internal_c45a6bedb4dc6a545a72a3e8520a743f5d16c347a06edfae37dae18a9a23ed47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_c45a6bedb4dc6a545a72a3e8520a743f5d16c347a06edfae37dae18a9a23ed47->leave($__internal_c45a6bedb4dc6a545a72a3e8520a743f5d16c347a06edfae37dae18a9a23ed47_prof);

        
        $__internal_00317a4110415b25c2704850ab537993c066955b8c991a89ec762ac092ccd3dc->leave($__internal_00317a4110415b25c2704850ab537993c066955b8c991a89ec762ac092ccd3dc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f1580d5262ec940d0f6c7ee4b7e229bbd233e3036e3a2af4b14fc24be07d0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1580d5262ec940d0f6c7ee4b7e229bbd233e3036e3a2af4b14fc24be07d0c4->enter($__internal_2f1580d5262ec940d0f6c7ee4b7e229bbd233e3036e3a2af4b14fc24be07d0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b085c40a85ed407e853b6f3ee30d0f8e3c19c5127c1fd574f3b5fa5da6397791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b085c40a85ed407e853b6f3ee30d0f8e3c19c5127c1fd574f3b5fa5da6397791->enter($__internal_b085c40a85ed407e853b6f3ee30d0f8e3c19c5127c1fd574f3b5fa5da6397791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }

        .input-margin {
            margin-top: 10px;
        }
        .datepicker-switch{
            color: #087380;
        }
        .next ,.prev {
            color: #087310;
        }
    </style>
";
        
        $__internal_b085c40a85ed407e853b6f3ee30d0f8e3c19c5127c1fd574f3b5fa5da6397791->leave($__internal_b085c40a85ed407e853b6f3ee30d0f8e3c19c5127c1fd574f3b5fa5da6397791_prof);

        
        $__internal_2f1580d5262ec940d0f6c7ee4b7e229bbd233e3036e3a2af4b14fc24be07d0c4->leave($__internal_2f1580d5262ec940d0f6c7ee4b7e229bbd233e3036e3a2af4b14fc24be07d0c4_prof);

    }

    // line 115
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_3640fbdb3bfcbda5232527cf9307eb82f1da478b0b6cecbe4772ccaa514ea5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3640fbdb3bfcbda5232527cf9307eb82f1da478b0b6cecbe4772ccaa514ea5af->enter($__internal_3640fbdb3bfcbda5232527cf9307eb82f1da478b0b6cecbe4772ccaa514ea5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_31eaab7711bb4e3b7b7d1cd101d1366e1f895868b6ce92684d55742b82540bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31eaab7711bb4e3b7b7d1cd101d1366e1f895868b6ce92684d55742b82540bac->enter($__internal_31eaab7711bb4e3b7b7d1cd101d1366e1f895868b6ce92684d55742b82540bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 116
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
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 144
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
        
        $__internal_31eaab7711bb4e3b7b7d1cd101d1366e1f895868b6ce92684d55742b82540bac->leave($__internal_31eaab7711bb4e3b7b7d1cd101d1366e1f895868b6ce92684d55742b82540bac_prof);

        
        $__internal_3640fbdb3bfcbda5232527cf9307eb82f1da478b0b6cecbe4772ccaa514ea5af->leave($__internal_3640fbdb3bfcbda5232527cf9307eb82f1da478b0b6cecbe4772ccaa514ea5af_prof);

    }

    // line 157
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e31b90101297f8a637d7f029c78494e14b1c4a2175a07180afa1fd41a541c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e31b90101297f8a637d7f029c78494e14b1c4a2175a07180afa1fd41a541c2f->enter($__internal_2e31b90101297f8a637d7f029c78494e14b1c4a2175a07180afa1fd41a541c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41d0497bb00500ead738efb4b638050fa6c1320c85501fdc477dd50f39c15ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d0497bb00500ead738efb4b638050fa6c1320c85501fdc477dd50f39c15ad7->enter($__internal_41d0497bb00500ead738efb4b638050fa6c1320c85501fdc477dd50f39c15ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 158
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajout Etudiant </h4>
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
        // line 197
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_registration", array("etat" => 0)), "method" => "POST", "attr" => array("id" => "addEtudiant")));
        echo "
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 203
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"etudiant_username\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"etudiant_nom\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"etudiant_prenom\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                                        ";
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"etudiant_cin\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_calendar\"></i></span>
                                                        ";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "naissance", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"etudiant_fullName\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                                        ";
        // line 244
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieu", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"etudiant_cin\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 253
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()), 'row');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"etudiant_cp\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                                        ";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"etudiant_ville\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                                        ";
        // line 285
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"etudiant_pays\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                                        ";
        // line 293
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveauEtude", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"etudiant_pays\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                                        ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diplome", array()), 'row', array("attr" => array("onChange" => "Diplome();")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                                        ";
        // line 310
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'row', array("attr" => array("onChange" => "Filiere();")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_target\"></i></span>
                                                        ";
        // line 319
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'row', array("attr" => array("onChange" => "Niveau();", "onSelect" => "Niveau()")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_toolbox\"></i></span>
                                                        ";
        // line 326
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'row');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_phone\"></i></span>
                                                        ";
        // line 335
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"etudiant_tel\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_mail\"></i></span>
                                                        ";
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"etudiant_email\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                                        ";
        // line 353
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                                                    </div>
                                                    <span id=\"etudiant_p1\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                                        ";
        // line 361
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"etudiant_p2\"></span>
                                                </div>
                                            </div>
                                            <div class=\"divider15\"></div>
                                            <div>
                                                <input type=\"submit\" value=\"ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\" id=\"addEtudiantButton\">
                                            </div>
                                            <input type=\"hidden\" value=\"pre-inscrit\" name=\"test\"/>
                                            ";
        // line 372
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
        
        $__internal_41d0497bb00500ead738efb4b638050fa6c1320c85501fdc477dd50f39c15ad7->leave($__internal_41d0497bb00500ead738efb4b638050fa6c1320c85501fdc477dd50f39c15ad7_prof);

        
        $__internal_2e31b90101297f8a637d7f029c78494e14b1c4a2175a07180afa1fd41a541c2f->leave($__internal_2e31b90101297f8a637d7f029c78494e14b1c4a2175a07180afa1fd41a541c2f_prof);

    }

    // line 384
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_d8eca449d95f55e7125ad53d76970229be6e9e492e0f8824d0870e49f3c64f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8eca449d95f55e7125ad53d76970229be6e9e492e0f8824d0870e49f3c64f4b->enter($__internal_d8eca449d95f55e7125ad53d76970229be6e9e492e0f8824d0870e49f3c64f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_78ee3455aac36219c824930b5936bcddeb2fbbb05108538440d3a72a0d4db9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ee3455aac36219c824930b5936bcddeb2fbbb05108538440d3a72a0d4db9e8->enter($__internal_78ee3455aac36219c824930b5936bcddeb2fbbb05108538440d3a72a0d4db9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 385
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
    <script>
        \$(document).ready(function () {
            // configure the bootstrap datepicker
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
                maxDate: new Date(2007, 1, 1),
                minDate: new Date(2005,1,1),
            });
        });
    </script>
    <script>
        \$('#user').addClass('active');
        \$('#erp_etudiant_niveau').prepend('<option value=\"\" selected=\"selected\">Niveau</option>');
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#erp_etudiant_pre_inscription_sex').prepend('<option value=\"\" selected=\"selected\">Selectionner votre sexe</option>');
        \$('#erp_etudiant_pre_inscription_niveauEtude').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Niveau d\\'etudes</option>');
        \$('#erp_etudiant_pre_inscription_diplome').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Diplome Souhaiter</option>');
        \$('#erp_etudiant_pre_inscription_specialite').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Spécialite</option>');
        \$('#erp_etudiant_pre_inscription_filiere').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Filiere</option>');
        \$('#erp_etudiant_pre_inscription_niveau').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Niveau</option>');

        function Diplome() {
            var id_select = \$('#erp_etudiant_pre_inscription_diplome').val();
            str = '<option value=\"\" selected=\"selected\">Selectionner votre Filiere</option>';
            \$.ajax({
                url: Routing.generate('form_diplome', {'id': id_select}),
                success: function (response) {
                    \$.each(response, function (index, value) {
                        str += '<option value=\"' + value.id + '\"> ' + value.nom + ' </option>';
                    });
                    \$('#erp_etudiant_pre_inscription_filiere').html(str);
                },
                error: function (json) {
                    console.log(json);
                }
            });
        }

        function Filiere() {
            var id_select = \$('#erp_etudiant_pre_inscription_filiere').val();
            str = '<option value=\"\" selected=\"selected\">Selectionner votre Specialite</option>';
            \$.ajax({
                url: Routing.generate('form_filiere', {'id': id_select}),
                success: function (response) {
                    \$.each(response, function (index, value) {
                        str += '<option value=\"' + value.id + '\"> ' + value.filiere + ' </option>';
                    });
                    \$('#erp_etudiant_pre_inscription_specialite').html(str);
                },
                error: function (json) {
                    console.log(json);
                }
            });
        }
        function Niveau() {
            var id_select = \$('#erp_etudiant_pre_inscription_specialite').val();
            str = '<option value=\"\" selected=\"selected\">Selectionner votre Niveau</option>';
            \$.ajax({
                url: Routing.generate('form_niveau', {'id': id_select}),
                success: function (response) {
                    \$.each(response, function (index, value) {
                        str += '<option value=\"' + value.id + '\"> ' + value.niveau + ' </option>';
                    });
                    \$('#erp_etudiant_pre_inscription_niveau').html(str);
                },
                error: function (json) {
                    console.log(json);
                }
            });

            console.log(\$(\"#erp_etudiant_pre_inscription_specialite option:selected\"));
        }
        function validation() {
            if (valide1 == true && valide3 == true && valide4 == true && valide5 == true && valide6 == true && valide7 == true ) {
                \$('#addEtudiantButton').prop('disabled', false);
            } else {
                \$('#addEtudiantButton').prop('disabled', true);
            }
        }
    </script>
";
        
        $__internal_78ee3455aac36219c824930b5936bcddeb2fbbb05108538440d3a72a0d4db9e8->leave($__internal_78ee3455aac36219c824930b5936bcddeb2fbbb05108538440d3a72a0d4db9e8_prof);

        
        $__internal_d8eca449d95f55e7125ad53d76970229be6e9e492e0f8824d0870e49f3c64f4b->leave($__internal_d8eca449d95f55e7125ad53d76970229be6e9e492e0f8824d0870e49f3c64f4b_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 434,  735 => 418,  731 => 417,  726 => 415,  721 => 413,  716 => 411,  711 => 409,  707 => 408,  703 => 407,  699 => 406,  695 => 405,  691 => 404,  686 => 402,  681 => 400,  676 => 398,  672 => 397,  668 => 396,  664 => 395,  660 => 394,  656 => 393,  651 => 391,  647 => 390,  642 => 388,  637 => 386,  632 => 385,  623 => 384,  601 => 372,  587 => 361,  576 => 353,  563 => 343,  552 => 335,  540 => 326,  530 => 319,  518 => 310,  508 => 303,  495 => 293,  484 => 285,  471 => 275,  460 => 267,  449 => 259,  440 => 253,  428 => 244,  418 => 237,  405 => 227,  395 => 220,  383 => 211,  372 => 203,  363 => 197,  322 => 158,  313 => 157,  290 => 144,  280 => 137,  271 => 131,  262 => 125,  251 => 116,  242 => 115,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }

        .input-margin {
            margin-top: 10px;
        }
        .datepicker-switch{
            color: #087380;
        }
        .next ,.prev {
            color: #087310;
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajout Etudiant </h4>
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
                                            {{ form_start(form,{'action': path('etudiant_registration',{'etat':0}),'method':'POST','attr':{'id':'addEtudiant'}}) }}
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.username,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"etudiant_username\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.nom,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"etudiant_nom\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.prenom,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"etudiant_prenom\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                                        {{ form_row(form.cin,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"etudiant_cin\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_calendar\"></i></span>
                                                        {{ form_row(form.naissance) }}
                                                    </div>
                                                    <span id=\"etudiant_fullName\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                                        {{ form_row(form.lieu) }}
                                                    </div>
                                                    <span id=\"etudiant_cin\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.sex) }}
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.pays) }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.adresse) }}
                                                    </div>
                                                    <span id=\"etudiant_cp\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.ville) }}
                                                    </div>
                                                    <span id=\"etudiant_ville\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.cp,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"etudiant_pays\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.niveauEtude,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"etudiant_pays\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                                        {{ form_row(form.diplome,{'attr': {'onChange':'Diplome();'}}) }}
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                                        {{ form_row(form.filiere,{'attr': {'onChange':'Filiere();'}}) }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_target\"></i></span>
                                                        {{ form_row(form.specialite,{'attr': {'onChange':'Niveau();','onSelect':'Niveau()'}}) }}
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_toolbox\"></i></span>
                                                        {{ form_row(form.niveau) }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_phone\"></i></span>
                                                        {{ form_row(form.tel,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"etudiant_tel\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_mail\"></i></span>
                                                        {{ form_row(form.email) }}
                                                    </div>
                                                    <span id=\"etudiant_email\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                                        {{ form_row(form.plainPassword.first) }}
                                                    </div>
                                                    <span id=\"etudiant_p1\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                                        {{ form_row(form.plainPassword.second,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"etudiant_p2\"></span>
                                                </div>
                                            </div>
                                            <div class=\"divider15\"></div>
                                            <div>
                                                <input type=\"submit\" value=\"ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\" id=\"addEtudiantButton\">
                                            </div>
                                            <input type=\"hidden\" value=\"pre-inscrit\" name=\"test\"/>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
    <script>
        \$(document).ready(function () {
            // configure the bootstrap datepicker
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
                maxDate: new Date(2007, 1, 1),
                minDate: new Date(2005,1,1),
            });
        });
    </script>
    <script>
        \$('#user').addClass('active');
        \$('#erp_etudiant_niveau').prepend('<option value=\"\" selected=\"selected\">Niveau</option>');
    </script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEtudiant.js') }}\"></script>
    <script>
        \$('#erp_etudiant_pre_inscription_sex').prepend('<option value=\"\" selected=\"selected\">Selectionner votre sexe</option>');
        \$('#erp_etudiant_pre_inscription_niveauEtude').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Niveau d\\'etudes</option>');
        \$('#erp_etudiant_pre_inscription_diplome').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Diplome Souhaiter</option>');
        \$('#erp_etudiant_pre_inscription_specialite').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Spécialite</option>');
        \$('#erp_etudiant_pre_inscription_filiere').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Filiere</option>');
        \$('#erp_etudiant_pre_inscription_niveau').prepend('<option value=\"\" selected=\"selected\">Selectionner votre Niveau</option>');

        function Diplome() {
            var id_select = \$('#erp_etudiant_pre_inscription_diplome').val();
            str = '<option value=\"\" selected=\"selected\">Selectionner votre Filiere</option>';
            \$.ajax({
                url: Routing.generate('form_diplome', {'id': id_select}),
                success: function (response) {
                    \$.each(response, function (index, value) {
                        str += '<option value=\"' + value.id + '\"> ' + value.nom + ' </option>';
                    });
                    \$('#erp_etudiant_pre_inscription_filiere').html(str);
                },
                error: function (json) {
                    console.log(json);
                }
            });
        }

        function Filiere() {
            var id_select = \$('#erp_etudiant_pre_inscription_filiere').val();
            str = '<option value=\"\" selected=\"selected\">Selectionner votre Specialite</option>';
            \$.ajax({
                url: Routing.generate('form_filiere', {'id': id_select}),
                success: function (response) {
                    \$.each(response, function (index, value) {
                        str += '<option value=\"' + value.id + '\"> ' + value.filiere + ' </option>';
                    });
                    \$('#erp_etudiant_pre_inscription_specialite').html(str);
                },
                error: function (json) {
                    console.log(json);
                }
            });
        }
        function Niveau() {
            var id_select = \$('#erp_etudiant_pre_inscription_specialite').val();
            str = '<option value=\"\" selected=\"selected\">Selectionner votre Niveau</option>';
            \$.ajax({
                url: Routing.generate('form_niveau', {'id': id_select}),
                success: function (response) {
                    \$.each(response, function (index, value) {
                        str += '<option value=\"' + value.id + '\"> ' + value.niveau + ' </option>';
                    });
                    \$('#erp_etudiant_pre_inscription_niveau').html(str);
                },
                error: function (json) {
                    console.log(json);
                }
            });

            console.log(\$(\"#erp_etudiant_pre_inscription_specialite option:selected\"));
        }
        function validation() {
            if (valide1 == true && valide3 == true && valide4 == true && valide5 == true && valide6 == true && valide7 == true ) {
                \$('#addEtudiantButton').prop('disabled', false);
            } else {
                \$('#addEtudiantButton').prop('disabled', true);
            }
        }
    </script>
{% endblock %}
", "ERPBundle:Admin/Membre/etudiant:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/add.html.twig");
    }
}
