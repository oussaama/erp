<?php

/* ERPBundle:Admin/Membre/employee:add.html.twig */
class __TwigTemplate_a8e0b8254b8cc997f1f536f9381ed588e2ddc42f31cd03ba0a7373ac1fe69b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/employee:add.html.twig", 1);
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
        $__internal_9a7744f906dd142bc32cd2765f68fe175a4799a3c2c25496774699efa5f49307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7744f906dd142bc32cd2765f68fe175a4799a3c2c25496774699efa5f49307->enter($__internal_9a7744f906dd142bc32cd2765f68fe175a4799a3c2c25496774699efa5f49307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/employee:add.html.twig"));

        $__internal_499a83c0b0a4d139c071b0dcaeb5791d1814138fa9bb73b6994f6582e87b2b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499a83c0b0a4d139c071b0dcaeb5791d1814138fa9bb73b6994f6582e87b2b1f->enter($__internal_499a83c0b0a4d139c071b0dcaeb5791d1814138fa9bb73b6994f6582e87b2b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/employee:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a7744f906dd142bc32cd2765f68fe175a4799a3c2c25496774699efa5f49307->leave($__internal_9a7744f906dd142bc32cd2765f68fe175a4799a3c2c25496774699efa5f49307_prof);

        
        $__internal_499a83c0b0a4d139c071b0dcaeb5791d1814138fa9bb73b6994f6582e87b2b1f->leave($__internal_499a83c0b0a4d139c071b0dcaeb5791d1814138fa9bb73b6994f6582e87b2b1f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ab73856a61d5bc929c160ebe93df3aaa59988974b929893f3a7421c128a3cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab73856a61d5bc929c160ebe93df3aaa59988974b929893f3a7421c128a3cc6->enter($__internal_2ab73856a61d5bc929c160ebe93df3aaa59988974b929893f3a7421c128a3cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32b1ce5b14b01b511c7afa22b9f511ab9f8b17febba3edd0787db0f9e0940d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b1ce5b14b01b511c7afa22b9f511ab9f8b17febba3edd0787db0f9e0940d10->enter($__internal_32b1ce5b14b01b511c7afa22b9f511ab9f8b17febba3edd0787db0f9e0940d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Employee";
        
        $__internal_32b1ce5b14b01b511c7afa22b9f511ab9f8b17febba3edd0787db0f9e0940d10->leave($__internal_32b1ce5b14b01b511c7afa22b9f511ab9f8b17febba3edd0787db0f9e0940d10_prof);

        
        $__internal_2ab73856a61d5bc929c160ebe93df3aaa59988974b929893f3a7421c128a3cc6->leave($__internal_2ab73856a61d5bc929c160ebe93df3aaa59988974b929893f3a7421c128a3cc6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e0eab36ca88e2a34f345316a4adadfd2ff5a38191cfb5cee82beae20b1ff1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0eab36ca88e2a34f345316a4adadfd2ff5a38191cfb5cee82beae20b1ff1f2->enter($__internal_3e0eab36ca88e2a34f345316a4adadfd2ff5a38191cfb5cee82beae20b1ff1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c521660802a658a28adb740aefd0649945bddc6d769c81a230d6c4f68b9ea99b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c521660802a658a28adb740aefd0649945bddc6d769c81a230d6c4f68b9ea99b->enter($__internal_c521660802a658a28adb740aefd0649945bddc6d769c81a230d6c4f68b9ea99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c521660802a658a28adb740aefd0649945bddc6d769c81a230d6c4f68b9ea99b->leave($__internal_c521660802a658a28adb740aefd0649945bddc6d769c81a230d6c4f68b9ea99b_prof);

        
        $__internal_3e0eab36ca88e2a34f345316a4adadfd2ff5a38191cfb5cee82beae20b1ff1f2->leave($__internal_3e0eab36ca88e2a34f345316a4adadfd2ff5a38191cfb5cee82beae20b1ff1f2_prof);

    }

    // line 108
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_9ac19aa25314f79adfe642b68e036422a88b4810351c58a01fd5ae7048f62ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac19aa25314f79adfe642b68e036422a88b4810351c58a01fd5ae7048f62ccc->enter($__internal_9ac19aa25314f79adfe642b68e036422a88b4810351c58a01fd5ae7048f62ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_9b416ff083a46628d8a607f0f995e16c0d9b6eba6f13b84444440633c6f0bbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b416ff083a46628d8a607f0f995e16c0d9b6eba6f13b84444440633c6f0bbb1->enter($__internal_9b416ff083a46628d8a607f0f995e16c0d9b6eba6f13b84444440633c6f0bbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 109
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
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 137
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
        
        $__internal_9b416ff083a46628d8a607f0f995e16c0d9b6eba6f13b84444440633c6f0bbb1->leave($__internal_9b416ff083a46628d8a607f0f995e16c0d9b6eba6f13b84444440633c6f0bbb1_prof);

        
        $__internal_9ac19aa25314f79adfe642b68e036422a88b4810351c58a01fd5ae7048f62ccc->leave($__internal_9ac19aa25314f79adfe642b68e036422a88b4810351c58a01fd5ae7048f62ccc_prof);

    }

    // line 150
    public function block_body($context, array $blocks = array())
    {
        $__internal_b638425082f36049c2f63b1b8f5d825e0c6f6f00a2a1c415fdda0b666c6e49c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b638425082f36049c2f63b1b8f5d825e0c6f6f00a2a1c415fdda0b666c6e49c2->enter($__internal_b638425082f36049c2f63b1b8f5d825e0c6f6f00a2a1c415fdda0b666c6e49c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad84805282fdaa7575657aa75b4969970be7a4e4fba84f1b340cc3947046c37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad84805282fdaa7575657aa75b4969970be7a4e4fba84f1b340cc3947046c37a->enter($__internal_ad84805282fdaa7575657aa75b4969970be7a4e4fba84f1b340cc3947046c37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 151
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Personnel</a></li>
                <li class=\"breadcrumb-item active\"> Ajout</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajoute Personnel</h4>
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
                                        <div class=\"dashboard-box\">
                                            ";
        // line 187
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employee_registration"), "method" => "POST", "attr" => array("id" => "addEmployee", "novalidate" => "novalidate")));
        echo "
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullName", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_fullName\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon \">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_genius\"></i></span>
                                                        ";
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_cin\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_phone\"></i></span>
                                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_tel\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_house\"></i></span>
                                                        ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon \">
                                                    <span class=\"input-group-addon\"><i
                                                                class=\"icon icon_house\"></i></span>
                                                        ";
        // line 228
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_cp\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                    <span class=\"input-group-addon\"><i
                                                                class=\"icon icon_house\"></i></span>
                                                        ";
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_ville\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_house\"></i></span>
                                                        ";
        // line 246
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_pays\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_bag\"></i></span>
                                                        ";
        // line 254
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "poste", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_poste\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_currency\"></i></span>
                                                        ";
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "salaire", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_salaire\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_salaire\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                                        ";
        // line 282
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_p1\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        ";
        // line 290
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                    </div>
                                                    <span id=\"employee_p2\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                        <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_mail\"></i></span>
                                                            ";
        // line 300
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
        echo "
                                                        </div>
                                                        <span id=\"employee_salaire\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <input type=\"submit\" value=\"Ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\"
                                                       id=\"addEmployeeButton\"/>
                                            </div>
                                            <input type=\"hidden\" value=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
                                            ";
        // line 312
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
        
        $__internal_ad84805282fdaa7575657aa75b4969970be7a4e4fba84f1b340cc3947046c37a->leave($__internal_ad84805282fdaa7575657aa75b4969970be7a4e4fba84f1b340cc3947046c37a_prof);

        
        $__internal_b638425082f36049c2f63b1b8f5d825e0c6f6f00a2a1c415fdda0b666c6e49c2->leave($__internal_b638425082f36049c2f63b1b8f5d825e0c6f6f00a2a1c415fdda0b666c6e49c2_prof);

    }

    // line 324
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_553d0a9c0b2567e95c5ed4ea6f5b7b45c01e8fb4289ff097a9f1f63852a1dacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553d0a9c0b2567e95c5ed4ea6f5b7b45c01e8fb4289ff097a9f1f63852a1dacc->enter($__internal_553d0a9c0b2567e95c5ed4ea6f5b7b45c01e8fb4289ff097a9f1f63852a1dacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_b8265162f2defd670fdf93f5ec51cd86e8663b51aad0562372833b337300ec1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8265162f2defd670fdf93f5ec51cd86e8663b51aad0562372833b337300ec1a->enter($__internal_b8265162f2defd670fdf93f5ec51cd86e8663b51aad0562372833b337300ec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 325
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEmployee.js"), "html", null, true);
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
        
        $__internal_b8265162f2defd670fdf93f5ec51cd86e8663b51aad0562372833b337300ec1a->leave($__internal_b8265162f2defd670fdf93f5ec51cd86e8663b51aad0562372833b337300ec1a_prof);

        
        $__internal_553d0a9c0b2567e95c5ed4ea6f5b7b45c01e8fb4289ff097a9f1f63852a1dacc->leave($__internal_553d0a9c0b2567e95c5ed4ea6f5b7b45c01e8fb4289ff097a9f1f63852a1dacc_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/employee:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 360,  658 => 359,  653 => 357,  648 => 355,  643 => 353,  638 => 351,  633 => 349,  629 => 348,  625 => 347,  621 => 346,  617 => 345,  613 => 344,  608 => 342,  603 => 340,  598 => 338,  594 => 337,  590 => 336,  586 => 335,  582 => 334,  578 => 333,  573 => 331,  569 => 330,  564 => 328,  559 => 326,  554 => 325,  545 => 324,  523 => 312,  519 => 311,  505 => 300,  492 => 290,  481 => 282,  468 => 272,  457 => 264,  444 => 254,  433 => 246,  420 => 236,  409 => 228,  397 => 219,  386 => 211,  373 => 201,  362 => 193,  353 => 187,  315 => 151,  306 => 150,  283 => 137,  274 => 131,  265 => 125,  255 => 118,  244 => 109,  235 => 108,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Employee{% endblock %}
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
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Employee') }}\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Personnel</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Personnel</a></li>
                <li class=\"breadcrumb-item active\"> Ajout</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajoute Personnel</h4>
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
                                        <div class=\"dashboard-box\">
                                            {{ form_start(form,{'action': path('employee_registration'),'method':'POST','attr':{'id':'addEmployee','novalidate':'novalidate'}}) }}
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.fullName,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_fullName\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon \">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_genius\"></i></span>
                                                        {{ form_row(form.cin,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_cin\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_phone\"></i></span>
                                                        {{ form_row(form.tel,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_tel\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.adresse,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon \">
                                                    <span class=\"input-group-addon\"><i
                                                                class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.cp,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_cp\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                    <span class=\"input-group-addon\"><i
                                                                class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.ville,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_ville\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_house\"></i></span>
                                                        {{ form_row(form.pays,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_pays\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_bag\"></i></span>
                                                        {{ form_row(form.poste,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_poste\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_currency\"></i></span>
                                                        {{ form_row(form.salaire,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_salaire\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                                        {{ form_row(form.username,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_salaire\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                                        {{ form_row(form.plainPassword.first,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_p1\"></span>
                                                </div>
                                                <div class=\"col-md-6 input-margin\">
                                                    <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_key\"></i></span>
                                                        {{ form_row(form.plainPassword.second,{'attr': {'onFocusOut':'validation();'}}) }}
                                                    </div>
                                                    <span id=\"employee_p2\"></span>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6 input-margin\">
                                                        <div class=\"input-group input-left-icon\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_mail\"></i></span>
                                                            {{ form_row(form.email,{'attr': {'onFocusOut':'validation();'}}) }}
                                                        </div>
                                                        <span id=\"employee_salaire\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <input type=\"submit\" value=\"Ajouter\"
                                                       class=\"btn btn-primary site-btn pull-right\"
                                                       id=\"addEmployeeButton\"/>
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
    <script type=\"text/javascript\" src=\"{{  asset('assets/global/js/global/form/formEmployee.js') }}\"></script>
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
{% endblock %}", "ERPBundle:Admin/Membre/employee:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/employee/add.html.twig");
    }
}
