<?php

/* ERPBundle:Admin/Membre/etudiant:upload.html.twig */
class __TwigTemplate_46a39cf4222b7cea346bcacc9111e356832ed0def5f0ba32b00f42c4797c101f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:upload.html.twig", 1);
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
        $__internal_94c16bfe0d93ca984c8b24d3b1223d0b9cc4c5f0f7a3df33f3abc7eb4488d0f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c16bfe0d93ca984c8b24d3b1223d0b9cc4c5f0f7a3df33f3abc7eb4488d0f4->enter($__internal_94c16bfe0d93ca984c8b24d3b1223d0b9cc4c5f0f7a3df33f3abc7eb4488d0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:upload.html.twig"));

        $__internal_705d60774b9c1c5c537fc9b975b8c6cee5c3eb69be2d77cd2a7a0c864d48f154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705d60774b9c1c5c537fc9b975b8c6cee5c3eb69be2d77cd2a7a0c864d48f154->enter($__internal_705d60774b9c1c5c537fc9b975b8c6cee5c3eb69be2d77cd2a7a0c864d48f154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:upload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c16bfe0d93ca984c8b24d3b1223d0b9cc4c5f0f7a3df33f3abc7eb4488d0f4->leave($__internal_94c16bfe0d93ca984c8b24d3b1223d0b9cc4c5f0f7a3df33f3abc7eb4488d0f4_prof);

        
        $__internal_705d60774b9c1c5c537fc9b975b8c6cee5c3eb69be2d77cd2a7a0c864d48f154->leave($__internal_705d60774b9c1c5c537fc9b975b8c6cee5c3eb69be2d77cd2a7a0c864d48f154_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2386d4af7888582212663af6279c0a4068def7de80dabe32b348b5c2ce28d7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2386d4af7888582212663af6279c0a4068def7de80dabe32b348b5c2ce28d7f0->enter($__internal_2386d4af7888582212663af6279c0a4068def7de80dabe32b348b5c2ce28d7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1af610d20ef02f405857a702d6ed6962f8bea84ae4d4e6df85b9d7817c51714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1af610d20ef02f405857a702d6ed6962f8bea84ae4d4e6df85b9d7817c51714->enter($__internal_e1af610d20ef02f405857a702d6ed6962f8bea84ae4d4e6df85b9d7817c51714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_e1af610d20ef02f405857a702d6ed6962f8bea84ae4d4e6df85b9d7817c51714->leave($__internal_e1af610d20ef02f405857a702d6ed6962f8bea84ae4d4e6df85b9d7817c51714_prof);

        
        $__internal_2386d4af7888582212663af6279c0a4068def7de80dabe32b348b5c2ce28d7f0->leave($__internal_2386d4af7888582212663af6279c0a4068def7de80dabe32b348b5c2ce28d7f0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e8ec909aeb77bcaa5344bd10984be1e22d4226afa5b06dfa495fd4d3d2119d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8ec909aeb77bcaa5344bd10984be1e22d4226afa5b06dfa495fd4d3d2119d9->enter($__internal_6e8ec909aeb77bcaa5344bd10984be1e22d4226afa5b06dfa495fd4d3d2119d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d1b26bae109e4abb13681abc23fd21ac952c148bc2b954ddc049cb4b93e0f932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b26bae109e4abb13681abc23fd21ac952c148bc2b954ddc049cb4b93e0f932->enter($__internal_d1b26bae109e4abb13681abc23fd21ac952c148bc2b954ddc049cb4b93e0f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d1b26bae109e4abb13681abc23fd21ac952c148bc2b954ddc049cb4b93e0f932->leave($__internal_d1b26bae109e4abb13681abc23fd21ac952c148bc2b954ddc049cb4b93e0f932_prof);

        
        $__internal_6e8ec909aeb77bcaa5344bd10984be1e22d4226afa5b06dfa495fd4d3d2119d9->leave($__internal_6e8ec909aeb77bcaa5344bd10984be1e22d4226afa5b06dfa495fd4d3d2119d9_prof);

    }

    // line 115
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_12eaa44699db35d1e557dedefd35ffb8e74bf874e19788d65016367bb5fdc570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12eaa44699db35d1e557dedefd35ffb8e74bf874e19788d65016367bb5fdc570->enter($__internal_12eaa44699db35d1e557dedefd35ffb8e74bf874e19788d65016367bb5fdc570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_c88c07404eaeb29674d191224ffa0d9b6fce0ec446c1fa8aa58ea8ac416fa50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88c07404eaeb29674d191224ffa0d9b6fce0ec446c1fa8aa58ea8ac416fa50b->enter($__internal_c88c07404eaeb29674d191224ffa0d9b6fce0ec446c1fa8aa58ea8ac416fa50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
        
        $__internal_c88c07404eaeb29674d191224ffa0d9b6fce0ec446c1fa8aa58ea8ac416fa50b->leave($__internal_c88c07404eaeb29674d191224ffa0d9b6fce0ec446c1fa8aa58ea8ac416fa50b_prof);

        
        $__internal_12eaa44699db35d1e557dedefd35ffb8e74bf874e19788d65016367bb5fdc570->leave($__internal_12eaa44699db35d1e557dedefd35ffb8e74bf874e19788d65016367bb5fdc570_prof);

    }

    // line 157
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfe8fd10a9a02fa0cbb43be49868cb253e356165c4a012fa0771af99bf1da1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfe8fd10a9a02fa0cbb43be49868cb253e356165c4a012fa0771af99bf1da1e->enter($__internal_8bfe8fd10a9a02fa0cbb43be49868cb253e356165c4a012fa0771af99bf1da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d29909275d48113c7fcd7f1c4f31ef24cbc4a0aebef9441f143467158208e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d29909275d48113c7fcd7f1c4f31ef24cbc4a0aebef9441f143467158208e88->enter($__internal_3d29909275d48113c7fcd7f1c4f31ef24cbc4a0aebef9441f143467158208e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 158
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
                <li class=\"breadcrumb-item active\">Document </li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Upload Document Etudiant </h4>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_etudiant_document", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST"));
        echo "
                                            <div class=\"col-lg-3\">
                                                <label> Identifiant</label>
                                                <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                    ";
        // line 202
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierId", array()), 'row', array("attr" => array("required" => "required")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label>Diplome</label>
                                                <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierDiplome", array()), 'row', array("attr" => array("required" => "required")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label>Fiche de Note</label>
                                                <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                    ";
        // line 216
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierNote", array()), 'row', array("attr" => array("required" => "required")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label>Justificateur de paiment (optionnel)</label>
                                                <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                    ";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierExtrait", array()), 'row');
        echo "
                                                </div>
                                            </div>
                                            ";
        // line 226
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
        
        $__internal_3d29909275d48113c7fcd7f1c4f31ef24cbc4a0aebef9441f143467158208e88->leave($__internal_3d29909275d48113c7fcd7f1c4f31ef24cbc4a0aebef9441f143467158208e88_prof);

        
        $__internal_8bfe8fd10a9a02fa0cbb43be49868cb253e356165c4a012fa0771af99bf1da1e->leave($__internal_8bfe8fd10a9a02fa0cbb43be49868cb253e356165c4a012fa0771af99bf1da1e_prof);

    }

    // line 238
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_3b3450dc82d4002d529bf2639a4c44e71e6096a1e5534bb5dbd9f300e3290a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3450dc82d4002d529bf2639a4c44e71e6096a1e5534bb5dbd9f300e3290a51->enter($__internal_3b3450dc82d4002d529bf2639a4c44e71e6096a1e5534bb5dbd9f300e3290a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_86488b9f38a7c69a6bc762b8d3538e57b243f30eca9447c885a7882bdb631354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86488b9f38a7c69a6bc762b8d3538e57b243f30eca9447c885a7882bdb631354->enter($__internal_86488b9f38a7c69a6bc762b8d3538e57b243f30eca9447c885a7882bdb631354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 239
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
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
        // line 288
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
        
        $__internal_86488b9f38a7c69a6bc762b8d3538e57b243f30eca9447c885a7882bdb631354->leave($__internal_86488b9f38a7c69a6bc762b8d3538e57b243f30eca9447c885a7882bdb631354_prof);

        
        $__internal_3b3450dc82d4002d529bf2639a4c44e71e6096a1e5534bb5dbd9f300e3290a51->leave($__internal_3b3450dc82d4002d529bf2639a4c44e71e6096a1e5534bb5dbd9f300e3290a51_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 288,  541 => 272,  537 => 271,  532 => 269,  527 => 267,  522 => 265,  517 => 263,  513 => 262,  509 => 261,  505 => 260,  501 => 259,  497 => 258,  492 => 256,  487 => 254,  482 => 252,  478 => 251,  474 => 250,  470 => 249,  466 => 248,  462 => 247,  457 => 245,  453 => 244,  448 => 242,  443 => 240,  438 => 239,  429 => 238,  407 => 226,  401 => 223,  391 => 216,  381 => 209,  371 => 202,  363 => 197,  322 => 158,  313 => 157,  290 => 144,  280 => 137,  271 => 131,  262 => 125,  251 => 116,  242 => 115,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
                <li class=\"breadcrumb-item active\">Document </li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Upload Document Etudiant </h4>
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
                                            {{ form_start(form,{'action': path('admin_etudiant_document',{'id':id}),'method':'POST'}) }}
                                            <div class=\"col-lg-3\">
                                                <label> Identifiant</label>
                                                <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                    {{ form_row(form.fichierId,{'attr':{'required':'required'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label>Diplome</label>
                                                <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                    {{ form_row(form.fichierDiplome,{'attr':{'required':'required'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label>Fiche de Note</label>
                                                <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                    {{ form_row(form.fichierNote,{'attr':{'required':'required'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <label>Justificateur de paiment (optionnel)</label>
                                                <div class=\"input-group input-left-icon input-margin\">
                                                    <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                    {{ form_row(form.fichierExtrait) }}
                                                </div>
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
", "ERPBundle:Admin/Membre/etudiant:upload.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/upload.html.twig");
    }
}
