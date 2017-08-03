<?php

/* ERPBundle:Front/Note:index.html.twig */
class __TwigTemplate_22a89ea67b71940978993482752a832517639687bee521e76cfbc87e7ce28148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/Note:index.html.twig", 1);
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
        $__internal_b4e4aa711f56414318e18c32b580c27b9b7c540c3936f4d1811d72fe65df521f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e4aa711f56414318e18c32b580c27b9b7c540c3936f4d1811d72fe65df521f->enter($__internal_b4e4aa711f56414318e18c32b580c27b9b7c540c3936f4d1811d72fe65df521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Note:index.html.twig"));

        $__internal_f57fda7a33497bb00564fc514d9b0986ff8c579350d436742eb2bc3e1d385255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57fda7a33497bb00564fc514d9b0986ff8c579350d436742eb2bc3e1d385255->enter($__internal_f57fda7a33497bb00564fc514d9b0986ff8c579350d436742eb2bc3e1d385255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Note:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e4aa711f56414318e18c32b580c27b9b7c540c3936f4d1811d72fe65df521f->leave($__internal_b4e4aa711f56414318e18c32b580c27b9b7c540c3936f4d1811d72fe65df521f_prof);

        
        $__internal_f57fda7a33497bb00564fc514d9b0986ff8c579350d436742eb2bc3e1d385255->leave($__internal_f57fda7a33497bb00564fc514d9b0986ff8c579350d436742eb2bc3e1d385255_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d469ed8e87d1ae75f4a99c2e3a937f45c35b2fb37df028f1742b72265890467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d469ed8e87d1ae75f4a99c2e3a937f45c35b2fb37df028f1742b72265890467->enter($__internal_9d469ed8e87d1ae75f4a99c2e3a937f45c35b2fb37df028f1742b72265890467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9c2b7a01b0ee17341b8622a8f8ce909fee7bdde5a8425802059560691556258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c2b7a01b0ee17341b8622a8f8ce909fee7bdde5a8425802059560691556258->enter($__internal_a9c2b7a01b0ee17341b8622a8f8ce909fee7bdde5a8425802059560691556258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Enseignant - Notes";
        
        $__internal_a9c2b7a01b0ee17341b8622a8f8ce909fee7bdde5a8425802059560691556258->leave($__internal_a9c2b7a01b0ee17341b8622a8f8ce909fee7bdde5a8425802059560691556258_prof);

        
        $__internal_9d469ed8e87d1ae75f4a99c2e3a937f45c35b2fb37df028f1742b72265890467->leave($__internal_9d469ed8e87d1ae75f4a99c2e3a937f45c35b2fb37df028f1742b72265890467_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b6020671a0ee0094955848606fecf09434ceba5123cbbd04c4589300dceeb80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6020671a0ee0094955848606fecf09434ceba5123cbbd04c4589300dceeb80->enter($__internal_0b6020671a0ee0094955848606fecf09434ceba5123cbbd04c4589300dceeb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_adea13077210fd87c147bfa66381b36c960336627af8ffc8bfa5500eeae5caa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adea13077210fd87c147bfa66381b36c960336627af8ffc8bfa5500eeae5caa9->enter($__internal_adea13077210fd87c147bfa66381b36c960336627af8ffc8bfa5500eeae5caa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_adea13077210fd87c147bfa66381b36c960336627af8ffc8bfa5500eeae5caa9->leave($__internal_adea13077210fd87c147bfa66381b36c960336627af8ffc8bfa5500eeae5caa9_prof);

        
        $__internal_0b6020671a0ee0094955848606fecf09434ceba5123cbbd04c4589300dceeb80->leave($__internal_0b6020671a0ee0094955848606fecf09434ceba5123cbbd04c4589300dceeb80_prof);

    }

    // line 107
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_9f7bff4501854a5a79362ae9a7879c72388fc5a1c35c22302f83981f70c5f0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7bff4501854a5a79362ae9a7879c72388fc5a1c35c22302f83981f70c5f0a7->enter($__internal_9f7bff4501854a5a79362ae9a7879c72388fc5a1c35c22302f83981f70c5f0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_1f33842fce5c8bddc752ced5da1ffa993634077c4d49eed4cf78d076e2c849bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f33842fce5c8bddc752ced5da1ffa993634077c4d49eed4cf78d076e2c849bd->enter($__internal_1f33842fce5c8bddc752ced5da1ffa993634077c4d49eed4cf78d076e2c849bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 108
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
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_index");
        echo "\">
                                    <span class=\"icon fa fa-list header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appsense_index");
        echo "\">
                                    <span class=\"icon fa fa-table header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absences</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
        echo "\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examens</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 135
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
        
        $__internal_1f33842fce5c8bddc752ced5da1ffa993634077c4d49eed4cf78d076e2c849bd->leave($__internal_1f33842fce5c8bddc752ced5da1ffa993634077c4d49eed4cf78d076e2c849bd_prof);

        
        $__internal_9f7bff4501854a5a79362ae9a7879c72388fc5a1c35c22302f83981f70c5f0a7->leave($__internal_9f7bff4501854a5a79362ae9a7879c72388fc5a1c35c22302f83981f70c5f0a7_prof);

    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b58c2832d41ec9e54ddfb16b2a0791c98a2c7ffb3136bc0eb89c4887864f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b58c2832d41ec9e54ddfb16b2a0791c98a2c7ffb3136bc0eb89c4887864f30->enter($__internal_f6b58c2832d41ec9e54ddfb16b2a0791c98a2c7ffb3136bc0eb89c4887864f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11f45f22a93cc1cae3209793612b36327e8189f3a7bbbfbc4f65017fb6e9d97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f45f22a93cc1cae3209793612b36327e8189f3a7bbbfbc4f65017fb6e9d97e->enter($__internal_11f45f22a93cc1cae3209793612b36327e8189f3a7bbbfbc4f65017fb6e9d97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 149
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Notes</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des notes des étudiants</h4>
                                            <br><br><br>
                                            <div class=\"row\">
                                                ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 174
            echo "                                                    <div class=\"alert alert-success alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Succès !</strong> ";
            // line 176
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "
                                                ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice2"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 181
            echo "                                                    <div class=\"alert alert-warning alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> ";
            // line 183
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                    </div>


                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice3"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 189
            echo "                                                    <div class=\"flash-notice text-center\">
                                                        <p class=\"bg-danger\"> ";
            // line 190
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </p>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                                            </div>
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
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_new");
        echo "\"><button class=\"btn btn-primary site-btn pull-right\" data-target=\"#view-add\" data-toggle=\"modal\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box col-lg-12  col-xs-12 col-xl-12\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\"  class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nom étudiant</th>
                                                        <th>Semestre</th>
                                                        <th>Session</th>
                                                        <th>Note d'examen</th>
                                                        <th>Ds</th>
                                                        <th>Autres</th>
                                                        <th>Tp</th>
                                                        <th>CC</th>
                                                        <th colspan=\"3\">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 225
            echo "                                                        <tr>
                                                            <td><a href=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_show", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "id", array()), "html", null, true);
            echo "</a></td>
                                                            <td contenteditable=\"true\" >
                                                                ";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "etudiant", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "etudiant", array()), "prenom", array()), "html", null, true);
            echo "
                                                            </td>
                                                            <td contenteditable=\"true\">";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "semestre", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                            <td contenteditable=\"true\">";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "session", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                            <td contenteditable=\"true\" >
                                                                ";
            // line 233
            if (($this->getAttribute($context["note"], "exam", array()) != 0)) {
                // line 234
                echo "                                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "exam", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 236
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun examen à afficher !</span>
                                                                ";
            }
            // line 238
            echo "                                                            </td>
                                                            <td contenteditable=\"true\">
                                                                ";
            // line 240
            if (($this->getAttribute($context["note"], "ds", array()) != 0)) {
                // line 241
                echo "                                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "ds", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 243
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun ds à afficher !</span>
                                                                ";
            }
            // line 245
            echo "                                                            </td>
                                                            <td contenteditable=\"true\">
                                                                ";
            // line 247
            if (($this->getAttribute($context["note"], "test", array()) != 0)) {
                // line 248
                echo "                                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "test", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 250
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun autres à afficher !</span>
                                                                ";
            }
            // line 252
            echo "                                                            </td>
                                                            <td contenteditable=\"true\">
                                                                ";
            // line 254
            if (($this->getAttribute($context["note"], "tp", array()) != 0)) {
                // line 255
                echo "                                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "tp", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 257
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun tp à afficher !</span>
                                                                ";
            }
            // line 259
            echo "                                                            </td>
                                                            <td contenteditable=\"true\">
                                                                ";
            // line 261
            if (($this->getAttribute($context["note"], "cc", array()) != 0)) {
                // line 262
                echo "                                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "cc", array()), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 264
                echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun controle continue à afficher !</span>
                                                                ";
            }
            // line 265
            echo "</td>
                                                            <td> <a href=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_edit", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-warning btn-xs \">Modifier</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_show", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs \">Détails</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"";
            // line 272
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_pdf");
            echo "\" target=\"_blank\">pdf</a>
                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
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
        
        $__internal_11f45f22a93cc1cae3209793612b36327e8189f3a7bbbfbc4f65017fb6e9d97e->leave($__internal_11f45f22a93cc1cae3209793612b36327e8189f3a7bbbfbc4f65017fb6e9d97e_prof);

        
        $__internal_f6b58c2832d41ec9e54ddfb16b2a0791c98a2c7ffb3136bc0eb89c4887864f30->leave($__internal_f6b58c2832d41ec9e54ddfb16b2a0791c98a2c7ffb3136bc0eb89c4887864f30_prof);

    }

    // line 290
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8f375667fa6d810b23d0d9d70a5d7de90cc4cc9d2f2fdb1cbd91ea18ee25e736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f375667fa6d810b23d0d9d70a5d7de90cc4cc9d2f2fdb1cbd91ea18ee25e736->enter($__internal_8f375667fa6d810b23d0d9d70a5d7de90cc4cc9d2f2fdb1cbd91ea18ee25e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_b01b2c647cfa4499f5e476504d0b5454a2768e75bdbb32ca51009c42d62b1857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01b2c647cfa4499f5e476504d0b5454a2768e75bdbb32ca51009c42d62b1857->enter($__internal_b01b2c647cfa4499f5e476504d0b5454a2768e75bdbb32ca51009c42d62b1857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 291
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: Routing.generate('admin_delete_compte',{'id':id}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/employee\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$('.edit-Note').click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('note_edit',{'id':id}),
                success:function(){
                    \$('#update-note-form').html('<img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loader.gif"), "html", null, true);
        echo "\" />');
                },
                complete: function(data) {
                    \$('#update-note-form').html(data.responseText)
                }
            });
        });
    </script>
";
        
        $__internal_b01b2c647cfa4499f5e476504d0b5454a2768e75bdbb32ca51009c42d62b1857->leave($__internal_b01b2c647cfa4499f5e476504d0b5454a2768e75bdbb32ca51009c42d62b1857_prof);

        
        $__internal_8f375667fa6d810b23d0d9d70a5d7de90cc4cc9d2f2fdb1cbd91ea18ee25e736->leave($__internal_8f375667fa6d810b23d0d9d70a5d7de90cc4cc9d2f2fdb1cbd91ea18ee25e736_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/Note:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  716 => 340,  687 => 314,  683 => 313,  679 => 312,  675 => 311,  671 => 310,  667 => 309,  663 => 308,  659 => 307,  655 => 306,  651 => 305,  647 => 304,  643 => 303,  639 => 302,  635 => 301,  631 => 300,  627 => 299,  623 => 298,  619 => 297,  615 => 296,  611 => 295,  607 => 294,  603 => 293,  599 => 292,  594 => 291,  585 => 290,  562 => 276,  552 => 272,  546 => 269,  540 => 266,  537 => 265,  533 => 264,  527 => 262,  525 => 261,  521 => 259,  517 => 257,  511 => 255,  509 => 254,  505 => 252,  501 => 250,  495 => 248,  493 => 247,  489 => 245,  485 => 243,  479 => 241,  477 => 240,  473 => 238,  469 => 236,  463 => 234,  461 => 233,  456 => 231,  452 => 230,  445 => 228,  438 => 226,  435 => 225,  431 => 224,  407 => 203,  395 => 193,  386 => 190,  383 => 189,  378 => 188,  367 => 183,  363 => 181,  359 => 180,  356 => 179,  347 => 176,  343 => 174,  339 => 173,  313 => 149,  304 => 148,  281 => 135,  272 => 129,  263 => 123,  254 => 117,  243 => 108,  234 => 107,  210 => 93,  206 => 92,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Enseignant - Notes{% endblock %}
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
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Notes</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des notes des étudiants</h4>
                                            <br><br><br>
                                            <div class=\"row\">
                                                {% for flashMessage in app.session.flashbag.get('notice') %}
                                                    <div class=\"alert alert-success alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Succès !</strong> {{ flashMessage }}
                                                    </div>
                                                {% endfor %}

                                                {% for flashMessage in app.session.flashbag.get('notice2') %}
                                                    <div class=\"alert alert-warning alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> {{ flashMessage }}
                                                    </div>


                                                {% endfor %}
                                                {% for flashMessage in app.session.flashbag.get('notice3') %}
                                                    <div class=\"flash-notice text-center\">
                                                        <p class=\"bg-danger\"> {{ flashMessage }} </p>
                                                    </div>
                                                {% endfor %}
                                            </div>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"{{ path('note_new') }}\"><button class=\"btn btn-primary site-btn pull-right\" data-target=\"#view-add\" data-toggle=\"modal\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box col-lg-12  col-xs-12 col-xl-12\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\"  class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nom étudiant</th>
                                                        <th>Semestre</th>
                                                        <th>Session</th>
                                                        <th>Note d'examen</th>
                                                        <th>Ds</th>
                                                        <th>Autres</th>
                                                        <th>Tp</th>
                                                        <th>CC</th>
                                                        <th colspan=\"3\">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for note in notes %}
                                                        <tr>
                                                            <td><a href=\"{{ path('note_show', { 'id': note.id }) }}\">{{ note.id }}</a></td>
                                                            <td contenteditable=\"true\" >
                                                                {{ note.etudiant.nom }} {{ note.etudiant.prenom }}
                                                            </td>
                                                            <td contenteditable=\"true\">{{ note.semestre.nom }}</td>
                                                            <td contenteditable=\"true\">{{ note.session.nom }}</td>
                                                            <td contenteditable=\"true\" >
                                                                {% if note.exam != 0 %}
                                                                    {{ note.exam }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun examen à afficher !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td contenteditable=\"true\">
                                                                {% if note.ds != 0 %}
                                                                {{ note.ds }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun ds à afficher !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td contenteditable=\"true\">
                                                                {% if note.test != 0 %}
                                                                {{ note.test }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun autres à afficher !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td contenteditable=\"true\">
                                                                {% if note.tp != 0 %}
                                                                {{ note.tp }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun tp à afficher !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td contenteditable=\"true\">
                                                                {% if note.cc != 0 %}
                                                                {{ note.cc }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i class=\"fa fa-times\"></i> Aucun controle continue à afficher !</span>
                                                                {% endif %}</td>
                                                            <td> <a href=\"{{ path('note_edit',{'id':note.id}) }}\"><button type=\"button\" class=\"btn btn-outline-warning btn-xs \">Modifier</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"{{ path('note_show', { 'id': note.id }) }}\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs \">Détails</button></a>
                                                            </td>
                                                            <td>
                                                                <a href=\"{{ path('note_pdf') }}\" target=\"_blank\">pdf</a>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
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
                    url: Routing.generate('admin_delete_compte',{'id':id}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/employee\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$('.edit-Note').click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('note_edit',{'id':id}),
                success:function(){
                    \$('#update-note-form').html('<img src=\"{{ asset('loader.gif') }}\" />');
                },
                complete: function(data) {
                    \$('#update-note-form').html(data.responseText)
                }
            });
        });
    </script>
{% endblock %}











", "ERPBundle:Front/Note:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/Note/index.html.twig");
    }
}
