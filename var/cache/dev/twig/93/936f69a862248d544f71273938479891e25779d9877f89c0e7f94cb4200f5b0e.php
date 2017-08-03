<?php

/* ERPBundle:Front/Cour:index.html.twig */
class __TwigTemplate_94b3a61b0f538c60909bc36eadcd792a823ecc7408df768bc2e77456fa5677c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/Cour:index.html.twig", 1);
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
        $__internal_ac1530a349d0ae1801396928f1332f0c7ad8f429a21d0821843b24f0aaac5d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1530a349d0ae1801396928f1332f0c7ad8f429a21d0821843b24f0aaac5d0d->enter($__internal_ac1530a349d0ae1801396928f1332f0c7ad8f429a21d0821843b24f0aaac5d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Cour:index.html.twig"));

        $__internal_dc9cd186433f14bf537dd3b97e47d3ab4537288914b73f6cd7e8437d3122bfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9cd186433f14bf537dd3b97e47d3ab4537288914b73f6cd7e8437d3122bfbc->enter($__internal_dc9cd186433f14bf537dd3b97e47d3ab4537288914b73f6cd7e8437d3122bfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/Cour:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac1530a349d0ae1801396928f1332f0c7ad8f429a21d0821843b24f0aaac5d0d->leave($__internal_ac1530a349d0ae1801396928f1332f0c7ad8f429a21d0821843b24f0aaac5d0d_prof);

        
        $__internal_dc9cd186433f14bf537dd3b97e47d3ab4537288914b73f6cd7e8437d3122bfbc->leave($__internal_dc9cd186433f14bf537dd3b97e47d3ab4537288914b73f6cd7e8437d3122bfbc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e055e2e15e447e9fefd9bfda1c96036c904b3a4f364d8b92b6e5e5168041c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e055e2e15e447e9fefd9bfda1c96036c904b3a4f364d8b92b6e5e5168041c4c->enter($__internal_3e055e2e15e447e9fefd9bfda1c96036c904b3a4f364d8b92b6e5e5168041c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d89287ad59dc3804d9518b2601a0672c620710565b656ec030a9ea2532a4309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d89287ad59dc3804d9518b2601a0672c620710565b656ec030a9ea2532a4309->enter($__internal_1d89287ad59dc3804d9518b2601a0672c620710565b656ec030a9ea2532a4309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Enseignant - Cours";
        
        $__internal_1d89287ad59dc3804d9518b2601a0672c620710565b656ec030a9ea2532a4309->leave($__internal_1d89287ad59dc3804d9518b2601a0672c620710565b656ec030a9ea2532a4309_prof);

        
        $__internal_3e055e2e15e447e9fefd9bfda1c96036c904b3a4f364d8b92b6e5e5168041c4c->leave($__internal_3e055e2e15e447e9fefd9bfda1c96036c904b3a4f364d8b92b6e5e5168041c4c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cecd89a7482ae60b94bdc760293b1da1fb226fcf0b3353e9784d744c23dc4f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecd89a7482ae60b94bdc760293b1da1fb226fcf0b3353e9784d744c23dc4f78->enter($__internal_cecd89a7482ae60b94bdc760293b1da1fb226fcf0b3353e9784d744c23dc4f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ea9823801c5b8dc947c7ad1b52df3c1dd33709d1a74c762418cf6c005217e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea9823801c5b8dc947c7ad1b52df3c1dd33709d1a74c762418cf6c005217e95->enter($__internal_7ea9823801c5b8dc947c7ad1b52df3c1dd33709d1a74c762418cf6c005217e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7ea9823801c5b8dc947c7ad1b52df3c1dd33709d1a74c762418cf6c005217e95->leave($__internal_7ea9823801c5b8dc947c7ad1b52df3c1dd33709d1a74c762418cf6c005217e95_prof);

        
        $__internal_cecd89a7482ae60b94bdc760293b1da1fb226fcf0b3353e9784d744c23dc4f78->leave($__internal_cecd89a7482ae60b94bdc760293b1da1fb226fcf0b3353e9784d744c23dc4f78_prof);

    }

    // line 112
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_a88399e290b1f51f6e7e7a1c320597ba4ea5bbe99114e1c4d5d5941b1427840f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88399e290b1f51f6e7e7a1c320597ba4ea5bbe99114e1c4d5d5941b1427840f->enter($__internal_a88399e290b1f51f6e7e7a1c320597ba4ea5bbe99114e1c4d5d5941b1427840f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_82de8b3f5f9db62e94841f48f8d90e8d7f4357e81773188039c4ae087aedc02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82de8b3f5f9db62e94841f48f8d90e8d7f4357e81773188039c4ae087aedc02e->enter($__internal_82de8b3f5f9db62e94841f48f8d90e8d7f4357e81773188039c4ae087aedc02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 113
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
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_index");
        echo "\">
                                    <span class=\"icon fa fa-list header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appsense_index");
        echo "\">
                                    <span class=\"icon fa fa-table header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absences</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
        echo "\">
                                    <span class=\"icon fa fa-check-square-o header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examens</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 141
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
        
        $__internal_82de8b3f5f9db62e94841f48f8d90e8d7f4357e81773188039c4ae087aedc02e->leave($__internal_82de8b3f5f9db62e94841f48f8d90e8d7f4357e81773188039c4ae087aedc02e_prof);

        
        $__internal_a88399e290b1f51f6e7e7a1c320597ba4ea5bbe99114e1c4d5d5941b1427840f->leave($__internal_a88399e290b1f51f6e7e7a1c320597ba4ea5bbe99114e1c4d5d5941b1427840f_prof);

    }

    // line 154
    public function block_body($context, array $blocks = array())
    {
        $__internal_ded83fcc6c61a73862e0767fac516255b8f2aaa8459d214eab179d5187034f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded83fcc6c61a73862e0767fac516255b8f2aaa8459d214eab179d5187034f7d->enter($__internal_ded83fcc6c61a73862e0767fac516255b8f2aaa8459d214eab179d5187034f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37391475d565d3d888e40ec4e3bc3a8f2e39ff511075c9ee4382a4a9a70961e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37391475d565d3d888e40ec4e3bc3a8f2e39ff511075c9ee4382a4a9a70961e7->enter($__internal_37391475d565d3d888e40ec4e3bc3a8f2e39ff511075c9ee4382a4a9a70961e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 155
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Cours</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des cours</h4>
                                            <br><br><br>
                                            <div class=\"row\">
                                                ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 180
            echo "                                                    <div class=\"alert alert-success alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\"
                                                           aria-label=\"close\">×</a>
                                                        <strong> Succès !</strong> ";
            // line 183
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
                                                ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice2"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 188
            echo "                                                    <div class=\"alert alert-warning alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\"
                                                           aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> ";
            // line 191
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                    </div>


                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice3"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 197
            echo "                                                    <div class=\"alert alert-danger alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\"
                                                           aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> ";
            // line 200
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                                            </div>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                                  aria-hidden=\"true\"><span
                                                                    class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_new");
        echo "\">
                                                    <button class=\"btn btn-primary site-btn pull-right\"
                                                            data-target=\"#view-add\" data-toggle=\"modal\">Ajouter
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box col-lg-12  col-xs-12 col-xl-12\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\"
                                                       class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nom du cour</th>
                                                        <th>Date publication</th>
                                                        <th>Cour</th>
                                                        <th>Classe</th>
                                                        <th>Matière</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cours"] ?? $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 242
            echo "                                                    ";
            if (($this->getAttribute($context["cour"], "enabled", array()) == 1)) {
                // line 243
                echo "                                                        <tr>
                                                            <td>
                                                                <a href=\"";
                // line 245
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_show", array("id" => $this->getAttribute($context["cour"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "id", array()), "html", null, true);
                echo "</a>
                                                            </td>
                                                            <td >
                                                                ";
                // line 248
                if (($this->getAttribute($context["cour"], "nom", array()) != null)) {
                    // line 249
                    echo "                                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
                    echo "
                                                                ";
                } else {
                    // line 251
                    echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i
                                                                                class=\"fa fa-times\"></i> Aucun nom affecté !</span>
                                                                ";
                }
                // line 254
                echo "                                                            </td>
                                                            <td>";
                // line 255
                if ($this->getAttribute($context["cour"], "datePublication", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cour"], "datePublication", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                                                            <td>
                                                                ";
                // line 257
                if (($this->getAttribute($context["cour"], "cour", array()) != null)) {
                    // line 258
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
                        // line 259
                        echo "                                                                       <a href=\"";
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
                    // line 261
                    echo "                                                                ";
                } else {
                    // line 262
                    echo "                                                                    <span class=\"tag tag-pill tag-danger\"><i
                                                                                class=\"fa fa-times\"></i> Aucun cour affecté !</span>
                                                                ";
                }
                // line 265
                echo "                                                            </td>
                                                            <td><span class=\"tag tag-pill tag-success\"><i
                                                                            class=\"fa fa-check\"></i> ";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cour"], "classe", array()), "nomClass", array()), "html", null, true);
                echo " </span>
                                                            </td>
                                                            <td >";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cour"], "matiere", array()), "nom", array()), "html", null, true);
                echo "</td>
                                                            <td><a href=\"";
                // line 270
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_edit", array("id" => $this->getAttribute($context["cour"], "id", array()))), "html", null, true);
                echo "\">
                                                                    <button type=\"button\" class=\"btn btn-outline-warning btn-xs \">Modifier</button>
                                                                </a>

                                                                <a><button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    ";
            } else {
                // line 280
                echo "


                                                        <tr>
                                                        <td>
                                                            <a href=\"";
                // line 285
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_show", array("id" => $this->getAttribute($context["cour"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "id", array()), "html", null, true);
                echo "</a>
                                                        </td>
                                                        <td >
                                                            ";
                // line 288
                if (($this->getAttribute($context["cour"], "nom", array()) != null)) {
                    // line 289
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
                    echo "
                                                            ";
                } else {
                    // line 291
                    echo "                                                                <span class=\"tag tag-pill tag-danger\"><i
                                                                            class=\"fa fa-times\"></i> Aucun nom affecté !</span>
                                                            ";
                }
                // line 294
                echo "                                                        </td>
                                                        <td>";
                // line 295
                if ($this->getAttribute($context["cour"], "datePublication", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cour"], "datePublication", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                                                        <td>
                                                            ";
                // line 297
                if (($this->getAttribute($context["cour"], "cour", array()) != null)) {
                    // line 298
                    echo "                                                                ";
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
                        // line 299
                        echo "                                                                    <a href=\"";
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
                    // line 301
                    echo "                                                            ";
                } else {
                    // line 302
                    echo "                                                                <span class=\"tag tag-pill tag-danger\"><i
                                                                            class=\"fa fa-times\"></i> Aucun cour affecté !</span>
                                                            ";
                }
                // line 305
                echo "                                                        </td>
                                                        <td><span
                                                                    class=\"tag tag-pill tag-success\"><i
                                                                        class=\"fa fa-check\"></i> ";
                // line 308
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cour"], "classe", array()), "nomClass", array()), "html", null, true);
                echo " </span>
                                                        </td>
                                                        <td >";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cour"], "matiere", array()), "nom", array()), "html", null, true);
                echo "</td>
                                                        <td><a href=\"";
                // line 311
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_edit", array("id" => $this->getAttribute($context["cour"], "id", array()))), "html", null, true);
                echo "\">
                                                                <button type=\"button\"
                                                                        class=\"btn btn-outline-warning btn-xs \">
                                                                    Modifier
                                                                </button>
                                                            </a>

                                                            <a>
                                                                <button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"";
                // line 319
                echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
            }
            // line 324
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
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
                    <h4 class=\"modal-title\">Activation / Desactivation  des cours</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-followw\">
                                ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cours"] ?? $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 354
            echo "                                    <div class=\"profile-icon text-xs-center\">
                                        <p>Voulez vous désactiver le cour :   ";
            // line 355
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
            echo "</p>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        echo "                            </div>
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

";
        
        $__internal_37391475d565d3d888e40ec4e3bc3a8f2e39ff511075c9ee4382a4a9a70961e7->leave($__internal_37391475d565d3d888e40ec4e3bc3a8f2e39ff511075c9ee4382a4a9a70961e7_prof);

        
        $__internal_ded83fcc6c61a73862e0767fac516255b8f2aaa8459d214eab179d5187034f7d->leave($__internal_ded83fcc6c61a73862e0767fac516255b8f2aaa8459d214eab179d5187034f7d_prof);

    }

    // line 372
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_d6c783c725445641aabfb1bd591e755f46ffd721613acfa9b2b1eae85750acaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c783c725445641aabfb1bd591e755f46ffd721613acfa9b2b1eae85750acaa->enter($__internal_d6c783c725445641aabfb1bd591e755f46ffd721613acfa9b2b1eae85750acaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_b921b56f79c5acdc1efd661b55c8a9d6bb401bb15907e0bc08bb6cc3214744cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b921b56f79c5acdc1efd661b55c8a9d6bb401bb15907e0bc08bb6cc3214744cd->enter($__internal_b921b56f79c5acdc1efd661b55c8a9d6bb401bb15907e0bc08bb6cc3214744cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 373
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: Routing.generate('enseignant_delete_cours', {'id': id}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/cour/\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$('.edit-Cour').click(function () {
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('cour_edit', {'id': id}),
                success: function () {
                    \$('#update-cour-form').html('<img src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("loader.gif"), "html", null, true);
        echo "\" />');
                },
                complete: function (data) {
                    \$('#update-cour-form').html(data.responseText)
                }
            });
        });
    </script>
";
        
        $__internal_b921b56f79c5acdc1efd661b55c8a9d6bb401bb15907e0bc08bb6cc3214744cd->leave($__internal_b921b56f79c5acdc1efd661b55c8a9d6bb401bb15907e0bc08bb6cc3214744cd_prof);

        
        $__internal_d6c783c725445641aabfb1bd591e755f46ffd721613acfa9b2b1eae85750acaa->leave($__internal_d6c783c725445641aabfb1bd591e755f46ffd721613acfa9b2b1eae85750acaa_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/Cour:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  901 => 433,  872 => 407,  867 => 405,  862 => 403,  857 => 401,  852 => 399,  847 => 397,  843 => 396,  839 => 395,  835 => 394,  831 => 393,  827 => 392,  822 => 390,  817 => 388,  812 => 386,  808 => 385,  804 => 384,  800 => 383,  796 => 382,  792 => 381,  787 => 379,  783 => 378,  778 => 376,  773 => 374,  768 => 373,  759 => 372,  736 => 358,  727 => 355,  724 => 354,  720 => 353,  690 => 325,  684 => 324,  676 => 319,  665 => 311,  661 => 310,  656 => 308,  651 => 305,  646 => 302,  643 => 301,  624 => 299,  606 => 298,  604 => 297,  597 => 295,  594 => 294,  589 => 291,  583 => 289,  581 => 288,  573 => 285,  566 => 280,  557 => 274,  550 => 270,  546 => 269,  541 => 267,  537 => 265,  532 => 262,  529 => 261,  510 => 259,  492 => 258,  490 => 257,  483 => 255,  480 => 254,  475 => 251,  469 => 249,  467 => 248,  459 => 245,  455 => 243,  452 => 242,  448 => 241,  422 => 218,  405 => 203,  396 => 200,  391 => 197,  386 => 196,  375 => 191,  370 => 188,  366 => 187,  363 => 186,  354 => 183,  349 => 180,  345 => 179,  319 => 155,  310 => 154,  287 => 141,  278 => 135,  269 => 129,  259 => 122,  248 => 113,  239 => 112,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Enseignant - Cours{% endblock %}
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
                                    <span class=\"icon fa fa-list header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Cours</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des cours</h4>
                                            <br><br><br>
                                            <div class=\"row\">
                                                {% for flashMessage in app.session.flashbag.get('notice') %}
                                                    <div class=\"alert alert-success alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\"
                                                           aria-label=\"close\">×</a>
                                                        <strong> Succès !</strong> {{ flashMessage }}
                                                    </div>
                                                {% endfor %}

                                                {% for flashMessage in app.session.flashbag.get('notice2') %}
                                                    <div class=\"alert alert-warning alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\"
                                                           aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> {{ flashMessage }}
                                                    </div>


                                                {% endfor %}
                                                {% for flashMessage in app.session.flashbag.get('notice3') %}
                                                    <div class=\"alert alert-danger alert-dismissable\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\"
                                                           aria-label=\"close\">×</a>
                                                        <strong> Attention !</strong> {{ flashMessage }}
                                                    </div>
                                                {% endfor %}
                                            </div>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                                  aria-hidden=\"true\"><span
                                                                    class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"{{ path('cour_new') }}\">
                                                    <button class=\"btn btn-primary site-btn pull-right\"
                                                            data-target=\"#view-add\" data-toggle=\"modal\">Ajouter
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box col-lg-12  col-xs-12 col-xl-12\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\"
                                                       class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nom du cour</th>
                                                        <th>Date publication</th>
                                                        <th>Cour</th>
                                                        <th>Classe</th>
                                                        <th>Matière</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for cour in cours %}
                                                    {% if cour.enabled == 1 %}
                                                        <tr>
                                                            <td>
                                                                <a href=\"{{ path('cour_show', { 'id': cour.id }) }}\">{{ cour.id }}</a>
                                                            </td>
                                                            <td >
                                                                {% if cour.nom  != NULL %}
                                                                    {{ cour.nom }}
                                                                {% else %}
                                                                    <span class=\"tag tag-pill tag-danger\"><i
                                                                                class=\"fa fa-times\"></i> Aucun nom affecté !</span>
                                                                {% endif %}
                                                            </td>
                                                            <td>{% if cour.datePublication %}{{ cour.datePublication|date('Y-m-d H:i:s') }}{% endif %}</td>
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
                                                            <td><span class=\"tag tag-pill tag-success\"><i
                                                                            class=\"fa fa-check\"></i> {{ cour.classe.nomClass }} </span>
                                                            </td>
                                                            <td >{{ cour.matiere.nom }}</td>
                                                            <td><a href=\"{{ path('cour_edit',{'id':cour.id}) }}\">
                                                                    <button type=\"button\" class=\"btn btn-outline-warning btn-xs \">Modifier</button>
                                                                </a>

                                                                <a><button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"{{ cour.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    {% else %}



                                                        <tr>
                                                        <td>
                                                            <a href=\"{{ path('cour_show', { 'id': cour.id }) }}\">{{ cour.id }}</a>
                                                        </td>
                                                        <td >
                                                            {% if cour.nom  != NULL %}
                                                                {{ cour.nom }}
                                                            {% else %}
                                                                <span class=\"tag tag-pill tag-danger\"><i
                                                                            class=\"fa fa-times\"></i> Aucun nom affecté !</span>
                                                            {% endif %}
                                                        </td>
                                                        <td>{% if cour.datePublication %}{{ cour.datePublication|date('Y-m-d H:i:s') }}{% endif %}</td>
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
                                                        <td><span
                                                                    class=\"tag tag-pill tag-success\"><i
                                                                        class=\"fa fa-check\"></i> {{ cour.classe.nomClass }} </span>
                                                        </td>
                                                        <td >{{ cour.matiere.nom }}</td>
                                                        <td><a href=\"{{ path('cour_edit',{'id':cour.id}) }}\">
                                                                <button type=\"button\"
                                                                        class=\"btn btn-outline-warning btn-xs \">
                                                                    Modifier
                                                                </button>
                                                            </a>

                                                            <a>
                                                                <button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"{{ cour.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive</button>
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
                    <h4 class=\"modal-title\">Activation / Desactivation  des cours</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-followw\">
                                {% for cour in cours %}
                                    <div class=\"profile-icon text-xs-center\">
                                        <p>Voulez vous désactiver le cour :   {{ cour.nom }}</p>
                                    </div>
                                {% endfor %}
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

    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: Routing.generate('enseignant_delete_cours', {'id': id}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/cour/\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$('.edit-Cour').click(function () {
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('cour_edit', {'id': id}),
                success: function () {
                    \$('#update-cour-form').html('<img src=\"{{ asset('loader.gif') }}\" />');
                },
                complete: function (data) {
                    \$('#update-cour-form').html(data.responseText)
                }
            });
        });
    </script>
{% endblock %}





















", "ERPBundle:Front/Cour:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/Cour/index.html.twig");
    }
}
