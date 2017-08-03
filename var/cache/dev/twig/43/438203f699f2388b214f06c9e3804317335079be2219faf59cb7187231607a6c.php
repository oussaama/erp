<?php

/* ERPBundle:Front/Appsense:show.html.twig */
class __TwigTemplate_be9c77ee459c08da5e240ed466c4a281e3d120c8fb468df7b6871c50f8383cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/Appsense:show.html.twig", 1);
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
        $__internal_c4a69ebb76c8a232618f9b8e20b1addac37d7e3effba57d1860985428af53728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a69ebb76c8a232618f9b8e20b1addac37d7e3effba57d1860985428af53728->enter($__internal_c4a69ebb76c8a232618f9b8e20b1addac37d7e3effba57d1860985428af53728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Appsense:show.html.twig"));

        $__internal_4fff6f864217792124f72654dc400200e65ad47d82bd41f90384fe1bed1356eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fff6f864217792124f72654dc400200e65ad47d82bd41f90384fe1bed1356eb->enter($__internal_4fff6f864217792124f72654dc400200e65ad47d82bd41f90384fe1bed1356eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Appsense:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4a69ebb76c8a232618f9b8e20b1addac37d7e3effba57d1860985428af53728->leave($__internal_c4a69ebb76c8a232618f9b8e20b1addac37d7e3effba57d1860985428af53728_prof);

        
        $__internal_4fff6f864217792124f72654dc400200e65ad47d82bd41f90384fe1bed1356eb->leave($__internal_4fff6f864217792124f72654dc400200e65ad47d82bd41f90384fe1bed1356eb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d565e6392e680dabe064e56de2035ab3243238345c0d25c44ce8da0c8e95b2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d565e6392e680dabe064e56de2035ab3243238345c0d25c44ce8da0c8e95b2d9->enter($__internal_d565e6392e680dabe064e56de2035ab3243238345c0d25c44ce8da0c8e95b2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e3fc9028cbecf6348cea71e0fb6f0ce6b00c7b228b8cdcb501cdba3b3d868c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3fc9028cbecf6348cea71e0fb6f0ce6b00c7b228b8cdcb501cdba3b3d868c8->enter($__internal_2e3fc9028cbecf6348cea71e0fb6f0ce6b00c7b228b8cdcb501cdba3b3d868c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Enseignant - Absences";
        
        $__internal_2e3fc9028cbecf6348cea71e0fb6f0ce6b00c7b228b8cdcb501cdba3b3d868c8->leave($__internal_2e3fc9028cbecf6348cea71e0fb6f0ce6b00c7b228b8cdcb501cdba3b3d868c8_prof);

        
        $__internal_d565e6392e680dabe064e56de2035ab3243238345c0d25c44ce8da0c8e95b2d9->leave($__internal_d565e6392e680dabe064e56de2035ab3243238345c0d25c44ce8da0c8e95b2d9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b054072693c7d69344ef5d65be906f501f73bc0bd43987bc8dbe6ea645e3d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b054072693c7d69344ef5d65be906f501f73bc0bd43987bc8dbe6ea645e3d4b->enter($__internal_9b054072693c7d69344ef5d65be906f501f73bc0bd43987bc8dbe6ea645e3d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc24aeafc3d9f8113c73d686f25d0c01962a8cbf18a82dc9e01ea9037781e899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc24aeafc3d9f8113c73d686f25d0c01962a8cbf18a82dc9e01ea9037781e899->enter($__internal_fc24aeafc3d9f8113c73d686f25d0c01962a8cbf18a82dc9e01ea9037781e899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
    <style>
        .datepicker-switch{
            color: #087380;
        }
        .next ,.prev {
            color: #087310;
        }
    </style>
    <style>
        #sidebar {
            margin-top: -4px;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_fc24aeafc3d9f8113c73d686f25d0c01962a8cbf18a82dc9e01ea9037781e899->leave($__internal_fc24aeafc3d9f8113c73d686f25d0c01962a8cbf18a82dc9e01ea9037781e899_prof);

        
        $__internal_9b054072693c7d69344ef5d65be906f501f73bc0bd43987bc8dbe6ea645e3d4b->leave($__internal_9b054072693c7d69344ef5d65be906f501f73bc0bd43987bc8dbe6ea645e3d4b_prof);

    }

    // line 116
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_7f9dcce66d097f3a12a9de95f0c5ff3cdd1883a918c9a68ed997637db2ff9c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9dcce66d097f3a12a9de95f0c5ff3cdd1883a918c9a68ed997637db2ff9c6e->enter($__internal_7f9dcce66d097f3a12a9de95f0c5ff3cdd1883a918c9a68ed997637db2ff9c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_1fab8ff8cc79b32bff90277156bd97e2383fcb16c8625cf8776abdbfa6d6f7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fab8ff8cc79b32bff90277156bd97e2383fcb16c8625cf8776abdbfa6d6f7e0->enter($__internal_1fab8ff8cc79b32bff90277156bd97e2383fcb16c8625cf8776abdbfa6d6f7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 117
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
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_index");
        echo "\">
                                    <span class=\"icon fa fa-list header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appsense_index");
        echo "\">
                                    <span class=\"icon fa fa-table header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absences</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
        echo "\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examens</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_index");
        echo "\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Notes</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_1fab8ff8cc79b32bff90277156bd97e2383fcb16c8625cf8776abdbfa6d6f7e0->leave($__internal_1fab8ff8cc79b32bff90277156bd97e2383fcb16c8625cf8776abdbfa6d6f7e0_prof);

        
        $__internal_7f9dcce66d097f3a12a9de95f0c5ff3cdd1883a918c9a68ed997637db2ff9c6e->leave($__internal_7f9dcce66d097f3a12a9de95f0c5ff3cdd1883a918c9a68ed997637db2ff9c6e_prof);

    }

    // line 157
    public function block_body($context, array $blocks = array())
    {
        $__internal_45ac622a688548622133e11d1c74b96f5c0addcf0560c56f891394f25b499044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ac622a688548622133e11d1c74b96f5c0addcf0560c56f891394f25b499044->enter($__internal_45ac622a688548622133e11d1c74b96f5c0addcf0560c56f891394f25b499044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7daf986289787eb6d4bd165c029f9eed834baa19151ca8b65dc726c45cb8505e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7daf986289787eb6d4bd165c029f9eed834baa19151ca8b65dc726c45cb8505e->enter($__internal_7daf986289787eb6d4bd165c029f9eed834baa19151ca8b65dc726c45cb8505e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 158
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Absence</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Absences</a></li>
                <li class=\"breadcrumb-item active\"> détails</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Absence information</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\">
                                                            <span class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"content\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"divider15\"></div>
                                                    <div class=\"personal-info-box\">
                                                        <div class=\"row\">
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Nom Enseignant :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["appsense"] ?? $this->getContext($context, "appsense")), "enseignant", array()), "fullname", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Nom de l'étudiant :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["appsense"] ?? $this->getContext($context, "appsense")), "etudiant", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["appsense"] ?? $this->getContext($context, "appsense")), "etudiant", array()), "prenom", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Date de début :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 209
        if ($this->getAttribute(($context["appsense"] ?? $this->getContext($context, "appsense")), "dateAppsense", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["appsense"] ?? $this->getContext($context, "appsense")), "dateAppsense", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Date de retour :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 213
        if ($this->getAttribute(($context["appsense"] ?? $this->getContext($context, "appsense")), "dateFinAppsense", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["appsense"] ?? $this->getContext($context, "appsense")), "dateFinAppsense", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Matière :</div>
                                                                <div class=\"detail-profile float-xs-right\">";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["appsense"] ?? $this->getContext($context, "appsense")), "matiere", array()), "nom", array()), "html", null, true);
        echo "
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appsense_index");
        echo "\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs \" style=\"margin:auto;display:block\">Retourner vers la liste</button></a>
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
        </div>
    </section>



";
        
        $__internal_7daf986289787eb6d4bd165c029f9eed834baa19151ca8b65dc726c45cb8505e->leave($__internal_7daf986289787eb6d4bd165c029f9eed834baa19151ca8b65dc726c45cb8505e_prof);

        
        $__internal_45ac622a688548622133e11d1c74b96f5c0addcf0560c56f891394f25b499044->leave($__internal_45ac622a688548622133e11d1c74b96f5c0addcf0560c56f891394f25b499044_prof);

    }

    // line 239
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_541b3c7c972b2f28fe3f9123c1e85103a94ae491cef1875be2c19f9a3546dfa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541b3c7c972b2f28fe3f9123c1e85103a94ae491cef1875be2c19f9a3546dfa0->enter($__internal_541b3c7c972b2f28fe3f9123c1e85103a94ae491cef1875be2c19f9a3546dfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_e0ae2a2e6b33d72ea4e77e6c4f571fed1b9c9a7a07e40c5598098572a77ccb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ae2a2e6b33d72ea4e77e6c4f571fed1b9c9a7a07e40c5598098572a77ccb99->enter($__internal_e0ae2a2e6b33d72ea4e77e6c4f571fed1b9c9a7a07e40c5598098572a77ccb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 240
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/js/layout.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: 'http://localhost/erp/web/app_dev.php/admin/delete/' + id,
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/entreprise\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_e0ae2a2e6b33d72ea4e77e6c4f571fed1b9c9a7a07e40c5598098572a77ccb99->leave($__internal_e0ae2a2e6b33d72ea4e77e6c4f571fed1b9c9a7a07e40c5598098572a77ccb99_prof);

        
        $__internal_541b3c7c972b2f28fe3f9123c1e85103a94ae491cef1875be2c19f9a3546dfa0->leave($__internal_541b3c7c972b2f28fe3f9123c1e85103a94ae491cef1875be2c19f9a3546dfa0_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/Appsense:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 263,  534 => 262,  530 => 261,  526 => 260,  522 => 259,  518 => 258,  514 => 257,  510 => 256,  506 => 255,  502 => 254,  498 => 253,  494 => 252,  490 => 251,  486 => 250,  482 => 249,  478 => 248,  474 => 247,  470 => 246,  466 => 245,  462 => 244,  458 => 243,  454 => 242,  450 => 241,  445 => 240,  436 => 239,  409 => 222,  401 => 217,  392 => 213,  383 => 209,  374 => 205,  367 => 201,  322 => 158,  313 => 157,  290 => 144,  281 => 138,  272 => 132,  263 => 126,  252 => 117,  243 => 116,  210 => 93,  206 => 92,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Enseignant - Absences{% endblock %}
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
    <style>
        .datepicker-switch{
            color: #087380;
        }
        .next ,.prev {
            color: #087310;
        }
    </style>
    <style>
        #sidebar {
            margin-top: -4px;
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
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('cour_index') }}\">
                                    <span class=\"icon fa fa-list header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('appsense_index') }}\">
                                    <span class=\"icon fa fa-table header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absences</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('examen_index') }}\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examens</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('note_index') }}\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Notes</span>
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
            <h2 class=\"float-xs-left content-title-main\">Absence</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Absences</a></li>
                <li class=\"breadcrumb-item active\"> détails</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Absence information</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\">
                                                            <span class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"content\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"divider15\"></div>
                                                    <div class=\"personal-info-box\">
                                                        <div class=\"row\">
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Nom Enseignant :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ appsense.enseignant.fullname }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Nom de l'étudiant :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ appsense.etudiant.nom }} {{ appsense.etudiant.prenom }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Date de début :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {% if appsense.dateAppsense %}{{ appsense.dateAppsense|date('Y-m-d H:i:s') }}{% endif %}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Date de retour :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {% if appsense.dateFinAppsense %}{{ appsense.dateFinAppsense|date('Y-m-d H:i:s') }}{% endif %}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Matière :</div>
                                                                <div class=\"detail-profile float-xs-right\">{{ appsense.matiere.nom }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <a href=\"{{ path('appsense_index') }}\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs \" style=\"margin:auto;display:block\">Retourner vers la liste</button></a>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v2.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-material-menu/js/layout.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: 'http://localhost/erp/web/app_dev.php/admin/delete/' + id,
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/entreprise\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
{% endblock %}



", "ERPBundle:Front/Appsense:show.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/Appsense/show.html.twig");
    }
}
