<?php

/* ERPBundle:Admin/payment:edit.html.twig */
class __TwigTemplate_1359871de71d07943909b66f51f89366d1b489b4f7875ca90ca957750b1a4cd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/payment:edit.html.twig", 1);
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
        $__internal_4d9ff8ca3b3f74cbe74b27b4cdee4811dd42217fbf1dced43e290320be373d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9ff8ca3b3f74cbe74b27b4cdee4811dd42217fbf1dced43e290320be373d2b->enter($__internal_4d9ff8ca3b3f74cbe74b27b4cdee4811dd42217fbf1dced43e290320be373d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/payment:edit.html.twig"));

        $__internal_864757ab52e222912d73edc54503d2c5095eee304803529543bb0f5e02abfa48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864757ab52e222912d73edc54503d2c5095eee304803529543bb0f5e02abfa48->enter($__internal_864757ab52e222912d73edc54503d2c5095eee304803529543bb0f5e02abfa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/payment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9ff8ca3b3f74cbe74b27b4cdee4811dd42217fbf1dced43e290320be373d2b->leave($__internal_4d9ff8ca3b3f74cbe74b27b4cdee4811dd42217fbf1dced43e290320be373d2b_prof);

        
        $__internal_864757ab52e222912d73edc54503d2c5095eee304803529543bb0f5e02abfa48->leave($__internal_864757ab52e222912d73edc54503d2c5095eee304803529543bb0f5e02abfa48_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea9a2b4623dc5e9a3ea245d74acdab0f3c1655ba7ae896afaae6db9a98028a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9a2b4623dc5e9a3ea245d74acdab0f3c1655ba7ae896afaae6db9a98028a26->enter($__internal_ea9a2b4623dc5e9a3ea245d74acdab0f3c1655ba7ae896afaae6db9a98028a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_423db93d1d0d9f035971f763368c4dec3372bfb71e6c656ac486f6fdc652c6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423db93d1d0d9f035971f763368c4dec3372bfb71e6c656ac486f6fdc652c6ce->enter($__internal_423db93d1d0d9f035971f763368c4dec3372bfb71e6c656ac486f6fdc652c6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_423db93d1d0d9f035971f763368c4dec3372bfb71e6c656ac486f6fdc652c6ce->leave($__internal_423db93d1d0d9f035971f763368c4dec3372bfb71e6c656ac486f6fdc652c6ce_prof);

        
        $__internal_ea9a2b4623dc5e9a3ea245d74acdab0f3c1655ba7ae896afaae6db9a98028a26->leave($__internal_ea9a2b4623dc5e9a3ea245d74acdab0f3c1655ba7ae896afaae6db9a98028a26_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8daba2474312600bb9054590ab0add52ba2ed3caf2d56bbdaa1bee51e0572567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8daba2474312600bb9054590ab0add52ba2ed3caf2d56bbdaa1bee51e0572567->enter($__internal_8daba2474312600bb9054590ab0add52ba2ed3caf2d56bbdaa1bee51e0572567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1fa33e331903697733323dc9c30e2e2c2cade465785fb0e7acbd1dcc937fa8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa33e331903697733323dc9c30e2e2c2cade465785fb0e7acbd1dcc937fa8a9->enter($__internal_1fa33e331903697733323dc9c30e2e2c2cade465785fb0e7acbd1dcc937fa8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1fa33e331903697733323dc9c30e2e2c2cade465785fb0e7acbd1dcc937fa8a9->leave($__internal_1fa33e331903697733323dc9c30e2e2c2cade465785fb0e7acbd1dcc937fa8a9_prof);

        
        $__internal_8daba2474312600bb9054590ab0add52ba2ed3caf2d56bbdaa1bee51e0572567->leave($__internal_8daba2474312600bb9054590ab0add52ba2ed3caf2d56bbdaa1bee51e0572567_prof);

    }

    // line 112
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_862286d5ded02d5a5cb24ef4c0e19fbffb1256bf5e7595d4944b8afdf9e0d075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862286d5ded02d5a5cb24ef4c0e19fbffb1256bf5e7595d4944b8afdf9e0d075->enter($__internal_862286d5ded02d5a5cb24ef4c0e19fbffb1256bf5e7595d4944b8afdf9e0d075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_61218e64b0026245c9b4f5d7c5cdf038871ea2cc35fd575dd9718972bc0b3832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61218e64b0026245c9b4f5d7c5cdf038871ea2cc35fd575dd9718972bc0b3832->enter($__internal_61218e64b0026245c9b4f5d7c5cdf038871ea2cc35fd575dd9718972bc0b3832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_payment_index");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"
                                          style=\"color:white;\"></span>
                                    <span style=\"color:white\">Paiment</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_index");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Mode Paiment</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_slice_index");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Modularite Paiment</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_status_index");
        echo "\">
                                    <span class=\"icon_tools header-icon\" aria-hidden=\"true\"></span>
                                    <span>Statu Paiment</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_61218e64b0026245c9b4f5d7c5cdf038871ea2cc35fd575dd9718972bc0b3832->leave($__internal_61218e64b0026245c9b4f5d7c5cdf038871ea2cc35fd575dd9718972bc0b3832_prof);

        
        $__internal_862286d5ded02d5a5cb24ef4c0e19fbffb1256bf5e7595d4944b8afdf9e0d075->leave($__internal_862286d5ded02d5a5cb24ef4c0e19fbffb1256bf5e7595d4944b8afdf9e0d075_prof);

    }

    // line 154
    public function block_body($context, array $blocks = array())
    {
        $__internal_e07ca04b8294896dcc877acaec3fdc6b67575db0caa535bb04936f064e7b5d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07ca04b8294896dcc877acaec3fdc6b67575db0caa535bb04936f064e7b5d08->enter($__internal_e07ca04b8294896dcc877acaec3fdc6b67575db0caa535bb04936f064e7b5d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_466d816df9d92dc3caec117c713f9b151284ab59acb5e0a110c981abb361dec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466d816df9d92dc3caec117c713f9b151284ab59acb5e0a110c981abb361dec6->enter($__internal_466d816df9d92dc3caec117c713f9b151284ab59acb5e0a110c981abb361dec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 155
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Etudiant</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
                <li class=\"breadcrumb-item active\"> payment</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Modifier Paiement</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            ";
        // line 187
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_payment_edit", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "new", "novalidate" => "novalidate")));
        echo "
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-form\">
                                                    ";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "solde", array()), 'row');
        echo "
                                                </div>
                                                <div class=\"col-md-6 input-form\">
                                                    <input type=\"text\"  value=\"";
        // line 193
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Date *\"/>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-form\">
                                                    ";
        // line 198
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'row');
        echo "
                                                </div>
                                                <div class=\"col-md-6 input-form\">
                                                    ";
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"divider15\"></div>
                                        <div>
                                            <input type=\"submit\" value=\"Modifier\"
                                                   class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
                                        </div>
                                        <input type=\"hidden\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
                                            ";
        // line 211
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
        
        $__internal_466d816df9d92dc3caec117c713f9b151284ab59acb5e0a110c981abb361dec6->leave($__internal_466d816df9d92dc3caec117c713f9b151284ab59acb5e0a110c981abb361dec6_prof);

        
        $__internal_e07ca04b8294896dcc877acaec3fdc6b67575db0caa535bb04936f064e7b5d08->leave($__internal_e07ca04b8294896dcc877acaec3fdc6b67575db0caa535bb04936f064e7b5d08_prof);

    }

    // line 223
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_2f81a65c144f6afa058470af9fadae0d8d7e1e34d12427544dd26201798886ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f81a65c144f6afa058470af9fadae0d8d7e1e34d12427544dd26201798886ad->enter($__internal_2f81a65c144f6afa058470af9fadae0d8d7e1e34d12427544dd26201798886ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_04c2d161556212c84debe75742eee8e291cae35c8b8b71e2a72e5c65e8ead94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c2d161556212c84debe75742eee8e291cae35c8b8b71e2a72e5c65e8ead94e->enter($__internal_04c2d161556212c84debe75742eee8e291cae35c8b8b71e2a72e5c65e8ead94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 224
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEmployee.js"), "html", null, true);
        echo "\"></script>*
    <script>
        \$('#erpbundle_payment_date_year,#erpbundle_payment_date_month,#erpbundle_payment_date_day,#erpbundle_payment _slices').addClass('form-control');
        \$('#erpbundle_payment_solde').css({'height': '52px'});
        \$('#erpbundle_payment_date_year,#erpbundle_payment_date_month,#erpbundle_payment_date_day').css({
            'width': '30%',
            'display': 'inline-block',
            'margin-left': '2.5%'
        });
    </script>
    <script>
        \$('#paiment').addClass('active');
    </script>
";
        
        $__internal_04c2d161556212c84debe75742eee8e291cae35c8b8b71e2a72e5c65e8ead94e->leave($__internal_04c2d161556212c84debe75742eee8e291cae35c8b8b71e2a72e5c65e8ead94e_prof);

        
        $__internal_2f81a65c144f6afa058470af9fadae0d8d7e1e34d12427544dd26201798886ad->leave($__internal_2f81a65c144f6afa058470af9fadae0d8d7e1e34d12427544dd26201798886ad_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/payment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 261,  535 => 260,  530 => 258,  525 => 256,  520 => 254,  515 => 252,  510 => 250,  505 => 248,  501 => 247,  497 => 246,  493 => 245,  489 => 244,  485 => 243,  480 => 241,  475 => 239,  470 => 237,  466 => 236,  462 => 235,  458 => 234,  454 => 233,  450 => 232,  445 => 230,  441 => 229,  436 => 227,  431 => 225,  426 => 224,  417 => 223,  395 => 211,  391 => 210,  379 => 201,  373 => 198,  365 => 193,  359 => 190,  353 => 187,  319 => 155,  310 => 154,  287 => 141,  278 => 135,  269 => 129,  259 => 122,  248 => 113,  239 => 112,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
                                <a href=\"{{ path('admin_payment_index') }}\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"
                                          style=\"color:white;\"></span>
                                    <span style=\"color:white\">Paiment</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_type_index') }}\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Mode Paiment</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_slice_index') }}\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Modularite Paiment</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_status_index') }}\">
                                    <span class=\"icon_tools header-icon\" aria-hidden=\"true\"></span>
                                    <span>Statu Paiment</span>
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
            <h2 class=\"float-xs-left content-title-main\">Etudiant</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
                <li class=\"breadcrumb-item active\"> payment</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Modifier Paiement</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            {{ form_start(form,{'action': path('admin_payment_edit',{'id':id}),'method':'POST','attr':{'id':'new','novalidate':'novalidate'}}) }}
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-form\">
                                                    {{ form_row(form.solde) }}
                                                </div>
                                                <div class=\"col-md-6 input-form\">
                                                    <input type=\"text\"  value=\"{{ \"now\"|date(\"m/d/Y\") }}\" class=\"form-control\" disabled=\"disabled\" placeholder=\"Date *\"/>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-form\">
                                                    {{ form_row(form.status) }}
                                                </div>
                                                <div class=\"col-md-6 input-form\">
                                                    {{ form_row(form.type) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"divider15\"></div>
                                        <div>
                                            <input type=\"submit\" value=\"Modifier\"
                                                   class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
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

    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEmployee.js') }}\"></script>*
    <script>
        \$('#erpbundle_payment_date_year,#erpbundle_payment_date_month,#erpbundle_payment_date_day,#erpbundle_payment _slices').addClass('form-control');
        \$('#erpbundle_payment_solde').css({'height': '52px'});
        \$('#erpbundle_payment_date_year,#erpbundle_payment_date_month,#erpbundle_payment_date_day').css({
            'width': '30%',
            'display': 'inline-block',
            'margin-left': '2.5%'
        });
    </script>
    <script>
        \$('#paiment').addClass('active');
    </script>
{% endblock %}", "ERPBundle:Admin/payment:edit.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/payment/edit.html.twig");
    }
}
