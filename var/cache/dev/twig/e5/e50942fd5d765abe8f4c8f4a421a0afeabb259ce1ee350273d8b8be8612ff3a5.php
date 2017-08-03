<?php

/* ERPBundle:Admin/UniteEnseignement/matiere:update.html.twig */
class __TwigTemplate_b94d484f0d900656f3c10a30583e16d226fc9a73bd42730fdc4bc81eba9bb571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/UniteEnseignement/matiere:update.html.twig", 1);
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
        $__internal_4b50efd944731e5947a9dc36b44ab2291ef798a011a0df6a950d94d481f8bd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b50efd944731e5947a9dc36b44ab2291ef798a011a0df6a950d94d481f8bd41->enter($__internal_4b50efd944731e5947a9dc36b44ab2291ef798a011a0df6a950d94d481f8bd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement/matiere:update.html.twig"));

        $__internal_5f2f628b2b770586ad46f9824a8049aff89710125b85d352655db2af572b720a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2f628b2b770586ad46f9824a8049aff89710125b85d352655db2af572b720a->enter($__internal_5f2f628b2b770586ad46f9824a8049aff89710125b85d352655db2af572b720a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement/matiere:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b50efd944731e5947a9dc36b44ab2291ef798a011a0df6a950d94d481f8bd41->leave($__internal_4b50efd944731e5947a9dc36b44ab2291ef798a011a0df6a950d94d481f8bd41_prof);

        
        $__internal_5f2f628b2b770586ad46f9824a8049aff89710125b85d352655db2af572b720a->leave($__internal_5f2f628b2b770586ad46f9824a8049aff89710125b85d352655db2af572b720a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1237462c4fead63dabab15eda2b93989d259515e90a022c6db0a8d70481efc9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1237462c4fead63dabab15eda2b93989d259515e90a022c6db0a8d70481efc9e->enter($__internal_1237462c4fead63dabab15eda2b93989d259515e90a022c6db0a8d70481efc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3d0a76ae6fbdd126802e415f59ed8cdf21725077ba3096acf38b6bb2190fa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d0a76ae6fbdd126802e415f59ed8cdf21725077ba3096acf38b6bb2190fa18->enter($__internal_d3d0a76ae6fbdd126802e415f59ed8cdf21725077ba3096acf38b6bb2190fa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Employee";
        
        $__internal_d3d0a76ae6fbdd126802e415f59ed8cdf21725077ba3096acf38b6bb2190fa18->leave($__internal_d3d0a76ae6fbdd126802e415f59ed8cdf21725077ba3096acf38b6bb2190fa18_prof);

        
        $__internal_1237462c4fead63dabab15eda2b93989d259515e90a022c6db0a8d70481efc9e->leave($__internal_1237462c4fead63dabab15eda2b93989d259515e90a022c6db0a8d70481efc9e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04a657a385c568c6c147d746926a6bcce6da7645f8c2a4744ee78636ec10d7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a657a385c568c6c147d746926a6bcce6da7645f8c2a4744ee78636ec10d7a2->enter($__internal_04a657a385c568c6c147d746926a6bcce6da7645f8c2a4744ee78636ec10d7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0abb8256add4be4b79f8324d4b2d287aaa0f3e6f0467cbc3e1cf7e97e96577ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abb8256add4be4b79f8324d4b2d287aaa0f3e6f0467cbc3e1cf7e97e96577ca->enter($__internal_0abb8256add4be4b79f8324d4b2d287aaa0f3e6f0467cbc3e1cf7e97e96577ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        .menu-paiment:hover {
            background: #087380 !important;
        }

        .input-margin {
            margin-top: 10px;
        }
        label{
            margin-top:15px;
        }
    </style>
";
        
        $__internal_0abb8256add4be4b79f8324d4b2d287aaa0f3e6f0467cbc3e1cf7e97e96577ca->leave($__internal_0abb8256add4be4b79f8324d4b2d287aaa0f3e6f0467cbc3e1cf7e97e96577ca_prof);

        
        $__internal_04a657a385c568c6c147d746926a6bcce6da7645f8c2a4744ee78636ec10d7a2->leave($__internal_04a657a385c568c6c147d746926a6bcce6da7645f8c2a4744ee78636ec10d7a2_prof);

    }

    // line 111
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_ee633c76f536c973e1eb86a6bab68295ea37b20876bdbe1882d1285f60a2106f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee633c76f536c973e1eb86a6bab68295ea37b20876bdbe1882d1285f60a2106f->enter($__internal_ee633c76f536c973e1eb86a6bab68295ea37b20876bdbe1882d1285f60a2106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_6221588274080ff08711420f12dc8e9ec23d68720653195778fbbad7c92159e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6221588274080ff08711420f12dc8e9ec23d68720653195778fbbad7c92159e6->enter($__internal_6221588274080ff08711420f12dc8e9ec23d68720653195778fbbad7c92159e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 112
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
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Annee_index");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Année</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_index");
        echo "\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Semestre</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Diplome_index");
        echo "\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Diplome</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Filiere_index");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Filiére</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Specialite_index");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Specialite</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Niveau_index");
        echo "\">
                                    <span class=\"icon_building header-icon\" aria-hidden=\"true\"></span>
                                    <span>Niveau</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Class_index");
        echo "\">
                                    <span class=\"icon_globe header-icon\" aria-hidden=\"true\"></span>
                                    <span>Classe</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Emploi_index");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Unite_index");
        echo "\">
                                    <span class=\"icon_book header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color: #fff;\">Unite Enseignement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_index");
        echo "\">
                                    <span class=\"icon_group header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Session</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6221588274080ff08711420f12dc8e9ec23d68720653195778fbbad7c92159e6->leave($__internal_6221588274080ff08711420f12dc8e9ec23d68720653195778fbbad7c92159e6_prof);

        
        $__internal_ee633c76f536c973e1eb86a6bab68295ea37b20876bdbe1882d1285f60a2106f->leave($__internal_ee633c76f536c973e1eb86a6bab68295ea37b20876bdbe1882d1285f60a2106f_prof);

    }

    // line 188
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f02cde72a3758bec930090b666754a9850ca4f9ce6be487a195301a0ba6df0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f02cde72a3758bec930090b666754a9850ca4f9ce6be487a195301a0ba6df0f->enter($__internal_4f02cde72a3758bec930090b666754a9850ca4f9ce6be487a195301a0ba6df0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e8f76ec2cb317c51258d4f6b7f64fe5c310c680044c07256361ed8fbc7340ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8f76ec2cb317c51258d4f6b7f64fe5c310c680044c07256361ed8fbc7340ac->enter($__internal_9e8f76ec2cb317c51258d4f6b7f64fe5c310c680044c07256361ed8fbc7340ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 189
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Employee</a></li>
                <li class=\"breadcrumb-item active\"> add</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Update Matiere</h4>
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
        // line 224
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Matiere_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "addClass", "novalidate" => "novalidate")));
        echo "
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Nom : </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_profile\"></i></span>
                                                            ";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                                                        </div>
                                                        <span id=\"employee_username\"></span>
                                                    </div>
                                                </div>

                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Coefession: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_genius\"></i></span>
                                                            ";
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coef", array()), 'row');
        echo "
                                                        </div>
                                                        <span id=\"employee_fullName\"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Credit: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_lifesaver\"></i></span>
                                                            ";
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "credit", array()), 'row');
        echo "
                                                        </div>
                                                        <span id=\"employee_cin\"></span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Td: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_book\"></i></span>
                                                            ";
        // line 277
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "td", array()), 'row');
        echo "
                                                        </div>
                                                        <span id=\"employee_tel\"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Tp: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_desktop\"></i></span>
                                                            ";
        // line 293
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tp", array()), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Cours: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                                            ";
        // line 305
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cours", array()), 'row');
        echo "
                                                        </div>
                                                        <span id=\"employee_cp\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Specialite: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_pushpin\"></i></span>
                                                            ";
        // line 320
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'row');
        echo "
                                                        </div>
                                                        <span id=\"employee_ville\"></span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Niveau: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_tablet\"></i></span>
                                                            ";
        // line 333
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"divider15\"></div>
                                    <div>
                                        <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\"
                                               id=\"addMatiereButton\"/>
                                    </div>
                                    ";
        // line 345
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
        
        $__internal_9e8f76ec2cb317c51258d4f6b7f64fe5c310c680044c07256361ed8fbc7340ac->leave($__internal_9e8f76ec2cb317c51258d4f6b7f64fe5c310c680044c07256361ed8fbc7340ac_prof);

        
        $__internal_4f02cde72a3758bec930090b666754a9850ca4f9ce6be487a195301a0ba6df0f->leave($__internal_4f02cde72a3758bec930090b666754a9850ca4f9ce6be487a195301a0ba6df0f_prof);

    }

    // line 357
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_f2649b95f9e84470d45f1786a80faac8f2bcfb73724cc10bd001afc7cb6153b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2649b95f9e84470d45f1786a80faac8f2bcfb73724cc10bd001afc7cb6153b2->enter($__internal_f2649b95f9e84470d45f1786a80faac8f2bcfb73724cc10bd001afc7cb6153b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_2451ddd405c22206b050269e919b55e9ffa8b3e7c24f1efbe02623119e378bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2451ddd405c22206b050269e919b55e9ffa8b3e7c24f1efbe02623119e378bc1->enter($__internal_2451ddd405c22206b050269e919b55e9ffa8b3e7c24f1efbe02623119e378bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 358
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 393
        echo "\"></script>
    <script>
        \$('#gestion').addClass('active');
    </script>
";
        
        $__internal_2451ddd405c22206b050269e919b55e9ffa8b3e7c24f1efbe02623119e378bc1->leave($__internal_2451ddd405c22206b050269e919b55e9ffa8b3e7c24f1efbe02623119e378bc1_prof);

        
        $__internal_f2649b95f9e84470d45f1786a80faac8f2bcfb73724cc10bd001afc7cb6153b2->leave($__internal_f2649b95f9e84470d45f1786a80faac8f2bcfb73724cc10bd001afc7cb6153b2_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/UniteEnseignement/matiere:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 393,  691 => 392,  686 => 390,  681 => 388,  676 => 386,  671 => 384,  666 => 382,  662 => 381,  658 => 380,  654 => 379,  650 => 378,  646 => 377,  641 => 375,  636 => 373,  631 => 371,  627 => 370,  623 => 369,  619 => 368,  615 => 367,  611 => 366,  606 => 364,  602 => 363,  597 => 361,  592 => 359,  587 => 358,  578 => 357,  556 => 345,  541 => 333,  525 => 320,  507 => 305,  492 => 293,  473 => 277,  457 => 264,  438 => 248,  421 => 234,  408 => 224,  371 => 189,  362 => 188,  339 => 175,  330 => 169,  321 => 163,  312 => 157,  303 => 151,  294 => 145,  285 => 139,  276 => 133,  267 => 127,  258 => 121,  247 => 112,  238 => 111,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }

        .input-margin {
            margin-top: 10px;
        }
        label{
            margin-top:15px;
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
                                <a href=\"{{ path('admin_Annee_index') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Année</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('semestre_index') }}\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Semestre</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Diplome_index') }}\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Diplome</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Filiere_index') }}\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Filiére</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Specialite_index') }}\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Specialite</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Niveau_index') }}\">
                                    <span class=\"icon_building header-icon\" aria-hidden=\"true\"></span>
                                    <span>Niveau</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Class_index') }}\">
                                    <span class=\"icon_globe header-icon\" aria-hidden=\"true\"></span>
                                    <span>Classe</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_Emploi_index') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_Unite_index') }}\">
                                    <span class=\"icon_book header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color: #fff;\">Unite Enseignement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('session_index') }}\">
                                    <span class=\"icon_group header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Session</span>
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
                <li class=\"breadcrumb-item\"><a href=\"#\">Employee</a></li>
                <li class=\"breadcrumb-item active\"> add</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Update Matiere</h4>
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
                                            {{ form_start(form,{'action': path('admin_Matiere_update',{'id':id}),'method':'POST','attr':{'id':'addClass','novalidate':'novalidate'}}) }}
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Nom : </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_profile\"></i></span>
                                                            {{ form_row(form.nom) }}
                                                        </div>
                                                        <span id=\"employee_username\"></span>
                                                    </div>
                                                </div>

                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Coefession: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_genius\"></i></span>
                                                            {{ form_row(form.coef) }}
                                                        </div>
                                                        <span id=\"employee_fullName\"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Credit: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_lifesaver\"></i></span>
                                                            {{ form_row(form.credit) }}
                                                        </div>
                                                        <span id=\"employee_cin\"></span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Td: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_book\"></i></span>
                                                            {{ form_row(form.td) }}
                                                        </div>
                                                        <span id=\"employee_tel\"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Tp: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_desktop\"></i></span>
                                                            {{ form_row(form.tp) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Cours: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                                            {{ form_row(form.cours) }}
                                                        </div>
                                                        <span id=\"employee_cp\"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Specialite: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_pushpin\"></i></span>
                                                            {{ form_row(form.specialite) }}
                                                        </div>
                                                        <span id=\"employee_ville\"></span>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"col-md-2\">
                                                        <label>Niveau: </label>
                                                    </div>
                                                    <div class=\"col-md-10\">
                                                        <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_tablet\"></i></span>
                                                            {{ form_row(form.niveau) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"divider15\"></div>
                                    <div>
                                        <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\"
                                               id=\"addMatiereButton\"/>
                                    </div>
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
    <script type=\"text/javascript\" src=\"{#asset('assets/global/js/global/form/formEmployee.js') #}\"></script>
    <script>
        \$('#gestion').addClass('active');
    </script>
{% endblock %}
", "ERPBundle:Admin/UniteEnseignement/matiere:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/UniteEnseignement/matiere/update.html.twig");
    }
}
