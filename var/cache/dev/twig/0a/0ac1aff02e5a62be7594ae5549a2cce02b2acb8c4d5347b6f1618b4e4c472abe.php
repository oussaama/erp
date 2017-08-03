<?php

/* ERPBundle:Admin/Membre/enseignant:add.html.twig */
class __TwigTemplate_14672cce271f5fee7dc262abe2094944d644a6b64635271cba9e0f54340f2b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/enseignant:add.html.twig", 1);
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
        $__internal_5ffb6ff45f34ef1ab88890afc3aaaf3eafdbfb57e66d5e5bf28eeee43c299cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffb6ff45f34ef1ab88890afc3aaaf3eafdbfb57e66d5e5bf28eeee43c299cfb->enter($__internal_5ffb6ff45f34ef1ab88890afc3aaaf3eafdbfb57e66d5e5bf28eeee43c299cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/enseignant:add.html.twig"));

        $__internal_76a940fa9cf366fc61d40d37917c2e74fdc8530ac28aa2b5d4b7ac458da2b8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a940fa9cf366fc61d40d37917c2e74fdc8530ac28aa2b5d4b7ac458da2b8ea->enter($__internal_76a940fa9cf366fc61d40d37917c2e74fdc8530ac28aa2b5d4b7ac458da2b8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/enseignant:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ffb6ff45f34ef1ab88890afc3aaaf3eafdbfb57e66d5e5bf28eeee43c299cfb->leave($__internal_5ffb6ff45f34ef1ab88890afc3aaaf3eafdbfb57e66d5e5bf28eeee43c299cfb_prof);

        
        $__internal_76a940fa9cf366fc61d40d37917c2e74fdc8530ac28aa2b5d4b7ac458da2b8ea->leave($__internal_76a940fa9cf366fc61d40d37917c2e74fdc8530ac28aa2b5d4b7ac458da2b8ea_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_28194f77931ba89afe1d824a185c0c7e2578d82feb3a44918da84e4d548433ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28194f77931ba89afe1d824a185c0c7e2578d82feb3a44918da84e4d548433ba->enter($__internal_28194f77931ba89afe1d824a185c0c7e2578d82feb3a44918da84e4d548433ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a1d61985c1fc75cc93a845da1b4155d7a29408547e7f33311a16eb68f30b849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1d61985c1fc75cc93a845da1b4155d7a29408547e7f33311a16eb68f30b849->enter($__internal_8a1d61985c1fc75cc93a845da1b4155d7a29408547e7f33311a16eb68f30b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Enseignant";
        
        $__internal_8a1d61985c1fc75cc93a845da1b4155d7a29408547e7f33311a16eb68f30b849->leave($__internal_8a1d61985c1fc75cc93a845da1b4155d7a29408547e7f33311a16eb68f30b849_prof);

        
        $__internal_28194f77931ba89afe1d824a185c0c7e2578d82feb3a44918da84e4d548433ba->leave($__internal_28194f77931ba89afe1d824a185c0c7e2578d82feb3a44918da84e4d548433ba_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e25efd837fa890ba77960305b2f5450ae579689b0bc6d9ee535bd4254510df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e25efd837fa890ba77960305b2f5450ae579689b0bc6d9ee535bd4254510df9->enter($__internal_4e25efd837fa890ba77960305b2f5450ae579689b0bc6d9ee535bd4254510df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_95120a8fc76f253e1672aa9598a1770aa346bf572f40ad8126002490b7b13825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95120a8fc76f253e1672aa9598a1770aa346bf572f40ad8126002490b7b13825->enter($__internal_95120a8fc76f253e1672aa9598a1770aa346bf572f40ad8126002490b7b13825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        .input-margin {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_95120a8fc76f253e1672aa9598a1770aa346bf572f40ad8126002490b7b13825->leave($__internal_95120a8fc76f253e1672aa9598a1770aa346bf572f40ad8126002490b7b13825_prof);

        
        $__internal_4e25efd837fa890ba77960305b2f5450ae579689b0bc6d9ee535bd4254510df9->leave($__internal_4e25efd837fa890ba77960305b2f5450ae579689b0bc6d9ee535bd4254510df9_prof);

    }

    // line 107
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_b20899a7be9e22e20ed107ab65bc88f981e20b1e9fd8313e7e7d9b780fa2b17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20899a7be9e22e20ed107ab65bc88f981e20b1e9fd8313e7e7d9b780fa2b17b->enter($__internal_b20899a7be9e22e20ed107ab65bc88f981e20b1e9fd8313e7e7d9b780fa2b17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_6dd7340ee027ce4a2530d789412fd45af875d54c4bccea7fa0b77293e7363964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd7340ee027ce4a2530d789412fd45af875d54c4bccea7fa0b77293e7363964->enter($__internal_6dd7340ee027ce4a2530d789412fd45af875d54c4bccea7fa0b77293e7363964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Enseignant</span>
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
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 135
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
        
        $__internal_6dd7340ee027ce4a2530d789412fd45af875d54c4bccea7fa0b77293e7363964->leave($__internal_6dd7340ee027ce4a2530d789412fd45af875d54c4bccea7fa0b77293e7363964_prof);

        
        $__internal_b20899a7be9e22e20ed107ab65bc88f981e20b1e9fd8313e7e7d9b780fa2b17b->leave($__internal_b20899a7be9e22e20ed107ab65bc88f981e20b1e9fd8313e7e7d9b780fa2b17b_prof);

    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        $__internal_182e9f002d1b54222fd3e53859afa0f2e577c9bde455774ef0dd9d1288a8d642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182e9f002d1b54222fd3e53859afa0f2e577c9bde455774ef0dd9d1288a8d642->enter($__internal_182e9f002d1b54222fd3e53859afa0f2e577c9bde455774ef0dd9d1288a8d642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85c27e89541f98c20aef5255a9db5cacc1790b4e1ecae09a583bea1adf99e358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c27e89541f98c20aef5255a9db5cacc1790b4e1ecae09a583bea1adf99e358->enter($__internal_85c27e89541f98c20aef5255a9db5cacc1790b4e1ecae09a583bea1adf99e358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 149
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Enseignant</a></li>
                <li class=\"breadcrumb-item active\">ajout</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajoute d'enseignant </h4>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enseignant_registration"), "method" => "POST", "attr" => array("id" => "addEnseignant", "novalidate" => "novalidate")));
        echo "
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_username\"></span>
                                                </div>

                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 203
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullName", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_fullName\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_cin\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_phone\"></i></span>
                                                        ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_tel\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 228
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_cp\"></span>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 244
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_ville\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        ";
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_pays\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_bag\"></i></span>
                                                        ";
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                        <span id=\"enseignant_specialite\"></span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_genius\"></i></span>
                                                        ";
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grade", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                        <span id=\"enseignant_grade\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_mail\"></i></span>
                                                        ";
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_email\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        ";
        // line 284
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_p1\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        ";
        // line 294
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"enseignant_p2\"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <input type=\"submit\" value=\"ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\"
                                                       id=\"addEnseignantButton\"/>
                                            </div>
                                            <input type=\"hidden\" value=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
                                            ";
        // line 305
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
        
        $__internal_85c27e89541f98c20aef5255a9db5cacc1790b4e1ecae09a583bea1adf99e358->leave($__internal_85c27e89541f98c20aef5255a9db5cacc1790b4e1ecae09a583bea1adf99e358_prof);

        
        $__internal_182e9f002d1b54222fd3e53859afa0f2e577c9bde455774ef0dd9d1288a8d642->leave($__internal_182e9f002d1b54222fd3e53859afa0f2e577c9bde455774ef0dd9d1288a8d642_prof);

    }

    // line 317
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ead400158db7bf193178ea8e1a6fc795e85579f88c8478d856827599ea0f2e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead400158db7bf193178ea8e1a6fc795e85579f88c8478d856827599ea0f2e0b->enter($__internal_ead400158db7bf193178ea8e1a6fc795e85579f88c8478d856827599ea0f2e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_3137cac359065f3485e803709756cafcaec5c8c9501f46701d554ff8ca2b40b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3137cac359065f3485e803709756cafcaec5c8c9501f46701d554ff8ca2b40b4->enter($__internal_3137cac359065f3485e803709756cafcaec5c8c9501f46701d554ff8ca2b40b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 318
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEnseignant.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#user').addClass('active');
        function validation() {
            if (valide1 == true && valide3 == true && valide4 == true && valide5 == true && valide6 == true && valide7 == true ) {
                \$('#addEnseignantButton').prop('disabled', false);
            } else {
                \$('#addEnseignantButton').prop('disabled', true);
            }
        }
    </script>

";
        
        $__internal_3137cac359065f3485e803709756cafcaec5c8c9501f46701d554ff8ca2b40b4->leave($__internal_3137cac359065f3485e803709756cafcaec5c8c9501f46701d554ff8ca2b40b4_prof);

        
        $__internal_ead400158db7bf193178ea8e1a6fc795e85579f88c8478d856827599ea0f2e0b->leave($__internal_ead400158db7bf193178ea8e1a6fc795e85579f88c8478d856827599ea0f2e0b_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/enseignant:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 354,  655 => 353,  651 => 352,  646 => 350,  641 => 348,  636 => 346,  631 => 344,  626 => 342,  622 => 341,  618 => 340,  614 => 339,  610 => 338,  606 => 337,  601 => 335,  596 => 333,  591 => 331,  587 => 330,  583 => 329,  579 => 328,  575 => 327,  571 => 326,  566 => 324,  562 => 323,  557 => 321,  552 => 319,  547 => 318,  538 => 317,  516 => 305,  512 => 304,  499 => 294,  486 => 284,  475 => 276,  463 => 267,  453 => 260,  441 => 251,  431 => 244,  418 => 234,  409 => 228,  397 => 219,  387 => 212,  375 => 203,  363 => 194,  354 => 188,  313 => 149,  304 => 148,  281 => 135,  272 => 129,  263 => 123,  254 => 117,  243 => 108,  234 => 107,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Enseignant{% endblock %}
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
                                <a href=\"{{ path('admin_Employee') }}\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Enseignant') }}\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Enseignant</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Enseignant</a></li>
                <li class=\"breadcrumb-item active\">ajout</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajoute d'enseignant </h4>
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
                                            {{ form_start(form,{'action': path('enseignant_registration'),'method':'POST','attr':{'id':'addEnseignant','novalidate':'novalidate'}}) }}
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.username,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_username\"></span>
                                                </div>

                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.fullName,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_fullName\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                                        {{ form_row(form.cin,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_cin\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_phone\"></i></span>
                                                        {{ form_row(form.tel,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_tel\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.adresse,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.cp,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_cp\"></span>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.ville,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_ville\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.pays,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_pays\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_bag\"></i></span>
                                                        {{ form_row(form.specialite,{'attr': {'onFocusOut':'validation();'}}) }}
                                                        <span id=\"enseignant_specialite\"></span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_genius\"></i></span>
                                                        {{ form_row(form.grade,{'attr': {'onFocusOut':'validation();'}}) }}
                                                        <span id=\"enseignant_grade\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i class=\"icon icon_mail\"></i></span>
                                                        {{ form_row(form.email,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_email\"></span>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        {{ form_row(form.plainPassword.first,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_p1\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        {{ form_row(form.plainPassword.second,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"enseignant_p2\"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <input type=\"submit\" value=\"ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\"
                                                       id=\"addEnseignantButton\"/>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEnseignant.js') }}\"></script>
    <script>
        \$('#user').addClass('active');
        function validation() {
            if (valide1 == true && valide3 == true && valide4 == true && valide5 == true && valide6 == true && valide7 == true ) {
                \$('#addEnseignantButton').prop('disabled', false);
            } else {
                \$('#addEnseignantButton').prop('disabled', true);
            }
        }
    </script>

{% endblock %}

", "ERPBundle:Admin/Membre/enseignant:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/enseignant/add.html.twig");
    }
}
