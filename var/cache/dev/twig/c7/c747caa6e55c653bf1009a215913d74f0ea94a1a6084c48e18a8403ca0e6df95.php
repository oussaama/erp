<?php

/* ERPBundle:Admin/Membre/entreprise:index.html.twig */
class __TwigTemplate_894285e781cbf91725387372079f1ba00d6500a82f79a1d98fe79cb3ad42e906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/entreprise:index.html.twig", 1);
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
        $__internal_4c5ed6bc6ab9fc062eea3a0cdadd1c159e497be71f8c895ecb50f398d107f4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5ed6bc6ab9fc062eea3a0cdadd1c159e497be71f8c895ecb50f398d107f4e4->enter($__internal_4c5ed6bc6ab9fc062eea3a0cdadd1c159e497be71f8c895ecb50f398d107f4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/entreprise:index.html.twig"));

        $__internal_bf91fe5fc87fd3114f5a30c29717cb3db5f9d70540d594744000fdfa0234a2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf91fe5fc87fd3114f5a30c29717cb3db5f9d70540d594744000fdfa0234a2bd->enter($__internal_bf91fe5fc87fd3114f5a30c29717cb3db5f9d70540d594744000fdfa0234a2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/entreprise:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c5ed6bc6ab9fc062eea3a0cdadd1c159e497be71f8c895ecb50f398d107f4e4->leave($__internal_4c5ed6bc6ab9fc062eea3a0cdadd1c159e497be71f8c895ecb50f398d107f4e4_prof);

        
        $__internal_bf91fe5fc87fd3114f5a30c29717cb3db5f9d70540d594744000fdfa0234a2bd->leave($__internal_bf91fe5fc87fd3114f5a30c29717cb3db5f9d70540d594744000fdfa0234a2bd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d120a3dbd83c6621a95a3542c565fd464df7837f473c3f9ba068b4f44052829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d120a3dbd83c6621a95a3542c565fd464df7837f473c3f9ba068b4f44052829->enter($__internal_0d120a3dbd83c6621a95a3542c565fd464df7837f473c3f9ba068b4f44052829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be68c1fedbc28f367d2dfadac36b06a6a6ddbd8026ea47b867d43ce9f52197c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be68c1fedbc28f367d2dfadac36b06a6a6ddbd8026ea47b867d43ce9f52197c3->enter($__internal_be68c1fedbc28f367d2dfadac36b06a6a6ddbd8026ea47b867d43ce9f52197c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Entreprise";
        
        $__internal_be68c1fedbc28f367d2dfadac36b06a6a6ddbd8026ea47b867d43ce9f52197c3->leave($__internal_be68c1fedbc28f367d2dfadac36b06a6a6ddbd8026ea47b867d43ce9f52197c3_prof);

        
        $__internal_0d120a3dbd83c6621a95a3542c565fd464df7837f473c3f9ba068b4f44052829->leave($__internal_0d120a3dbd83c6621a95a3542c565fd464df7837f473c3f9ba068b4f44052829_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed72284df3468825401bbd7bf52b6c292177f66a9d2e25a49cc05eda08c326af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed72284df3468825401bbd7bf52b6c292177f66a9d2e25a49cc05eda08c326af->enter($__internal_ed72284df3468825401bbd7bf52b6c292177f66a9d2e25a49cc05eda08c326af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_37665f0575cbe91441b4db1ae76c2da39d09818ab6c0132fe4b9ad09af70e4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37665f0575cbe91441b4db1ae76c2da39d09818ab6c0132fe4b9ad09af70e4b6->enter($__internal_37665f0575cbe91441b4db1ae76c2da39d09818ab6c0132fe4b9ad09af70e4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

        };
        \$('#user').addClass('active');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_37665f0575cbe91441b4db1ae76c2da39d09818ab6c0132fe4b9ad09af70e4b6->leave($__internal_37665f0575cbe91441b4db1ae76c2da39d09818ab6c0132fe4b9ad09af70e4b6_prof);

        
        $__internal_ed72284df3468825401bbd7bf52b6c292177f66a9d2e25a49cc05eda08c326af->leave($__internal_ed72284df3468825401bbd7bf52b6c292177f66a9d2e25a49cc05eda08c326af_prof);

    }

    // line 103
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_5b59e371e6664cc4d64f648b878c6c47aee4768d94d56bdba7bac0297206d7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b59e371e6664cc4d64f648b878c6c47aee4768d94d56bdba7bac0297206d7d5->enter($__internal_5b59e371e6664cc4d64f648b878c6c47aee4768d94d56bdba7bac0297206d7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_ddfe7b87ee7c1c3676aad52e0ea0d7a8c177be5efbf366a80e08a3942925aaf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfe7b87ee7c1c3676aad52e0ea0d7a8c177be5efbf366a80e08a3942925aaf1->enter($__internal_ddfe7b87ee7c1c3676aad52e0ea0d7a8c177be5efbf366a80e08a3942925aaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 104
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
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Etudiant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 131
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
        
        $__internal_ddfe7b87ee7c1c3676aad52e0ea0d7a8c177be5efbf366a80e08a3942925aaf1->leave($__internal_ddfe7b87ee7c1c3676aad52e0ea0d7a8c177be5efbf366a80e08a3942925aaf1_prof);

        
        $__internal_5b59e371e6664cc4d64f648b878c6c47aee4768d94d56bdba7bac0297206d7d5->leave($__internal_5b59e371e6664cc4d64f648b878c6c47aee4768d94d56bdba7bac0297206d7d5_prof);

    }

    // line 144
    public function block_body($context, array $blocks = array())
    {
        $__internal_454c555b3b781c43ed6ac66b2fa253aa79aadf622e141300d72b805b076a6241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454c555b3b781c43ed6ac66b2fa253aa79aadf622e141300d72b805b076a6241->enter($__internal_454c555b3b781c43ed6ac66b2fa253aa79aadf622e141300d72b805b076a6241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c40bd06c08ae5cf454ca51dfcc47c8abd0c913e7cd56b144cdd9c1e5d811954d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40bd06c08ae5cf454ca51dfcc47c8abd0c913e7cd56b144cdd9c1e5d811954d->enter($__internal_c40bd06c08ae5cf454ca51dfcc47c8abd0c913e7cd56b144cdd9c1e5d811954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 145
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Entreprise</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des Entreprises</h4>
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
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise_add");
        echo "\"><button class=\"btn btn-primary site-btn pull-right\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\" class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Directeur</th>
                                                        <th>Email</th>
                                                        <th>Date d'Ajouter</th>
                                                        <th>Adresse</th>
                                                        <th>Telephone</th>
                                                        <th>Domaine</th>
                                                        <th>action</th>
                                                        <th>Statu</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entreprise"] ?? $this->getContext($context, "entreprise")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 203
            echo "                                                        ";
            if (($this->getAttribute($context["e"], "enabled", array()) == 1)) {
                // line 204
                echo "                                                            <tr>
                                                                <td>";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fullName", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "directeur", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 207
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "lastLogin", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
                echo "
                                                                    , ";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "pays", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "domaine", array()), "html", null, true);
                echo "</td>
                                                                <td>
                                                                    <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise_update", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs update-Entreprise\">Update</button></a>
                                                                    <a href=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise_pdf", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs\"  data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\">PDF</button></a>
                                                                    <a href=\"";
                // line 216
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise_pdf");
                echo "\"><button class=\"btn btn-social \" data-title=\"imprimer\" data-toggle=\"modal\" data-target=\"#imprimer\" ><span class=\"glyphicon glyphicon-save-file\"></span> Imprimer maintenant </button></a>
                                                                </td>
                                                                <td>
                                                                    <a><button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button></a>
                                                                </td>
                                                            </tr>
                                                        ";
            } else {
                // line 223
                echo "                                                            <tr>
                                                                <td>";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fullname", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "directeur", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 226
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "lastLogin", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
                echo "
                                                                    , ";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "pays", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "domaine", array()), "html", null, true);
                echo "</td>
                                                                <td>
                                                                    <a><button type=\"button\" class=\"btn btn-outline-primary btn-xs\" disabled>Update</button></a>
                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                // line 236
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise_pdf", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs\"  data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\">PDF</button></a>
                                                                    <a  href=\"";
                // line 237
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise_pdf");
                echo "\"><button class=\"btn btn-social \" data-title=\"imprimer\" data-toggle=\"modal\" data-target=\"#imprimer\" ><span class=\"glyphicon glyphicon-save-file\"></span> Imprimer maintenant </button></a>
                                                                    <a><button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive</button></a>
                                                                </td>
                                                            </tr>
                                                        ";
            }
            // line 242
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
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
                    <h4 class=\"modal-title\">Activation de Client</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-followw\">
                                <div class=\"profile-icon text-xs-center\">
                                    <p>Confirmation de supresseion</p>
                                </div>
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
";
        
        $__internal_c40bd06c08ae5cf454ca51dfcc47c8abd0c913e7cd56b144cdd9c1e5d811954d->leave($__internal_c40bd06c08ae5cf454ca51dfcc47c8abd0c913e7cd56b144cdd9c1e5d811954d_prof);

        
        $__internal_454c555b3b781c43ed6ac66b2fa253aa79aadf622e141300d72b805b076a6241->leave($__internal_454c555b3b781c43ed6ac66b2fa253aa79aadf622e141300d72b805b076a6241_prof);

    }

    // line 286
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_06370e1da235c82affff59eb05ffeaf58207db74f6e1ed732ef09e2f29276632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06370e1da235c82affff59eb05ffeaf58207db74f6e1ed732ef09e2f29276632->enter($__internal_06370e1da235c82affff59eb05ffeaf58207db74f6e1ed732ef09e2f29276632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_1900a674606fea4674bb0c67ba7c89d95a629d984567c19c65422652a0f7aaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1900a674606fea4674bb0c67ba7c89d95a629d984567c19c65422652a0f7aaf2->enter($__internal_1900a674606fea4674bb0c67ba7c89d95a629d984567c19c65422652a0f7aaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 287
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/js/layout.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
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
        
        $__internal_1900a674606fea4674bb0c67ba7c89d95a629d984567c19c65422652a0f7aaf2->leave($__internal_1900a674606fea4674bb0c67ba7c89d95a629d984567c19c65422652a0f7aaf2_prof);

        
        $__internal_06370e1da235c82affff59eb05ffeaf58207db74f6e1ed732ef09e2f29276632->leave($__internal_06370e1da235c82affff59eb05ffeaf58207db74f6e1ed732ef09e2f29276632_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/entreprise:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 310,  657 => 309,  653 => 308,  649 => 307,  645 => 306,  641 => 305,  637 => 304,  633 => 303,  629 => 302,  625 => 301,  621 => 300,  617 => 299,  613 => 298,  609 => 297,  605 => 296,  601 => 295,  597 => 294,  593 => 293,  589 => 292,  585 => 291,  581 => 290,  577 => 289,  573 => 288,  568 => 287,  559 => 286,  507 => 243,  501 => 242,  494 => 238,  490 => 237,  484 => 236,  476 => 231,  472 => 230,  468 => 229,  460 => 228,  456 => 227,  452 => 226,  448 => 225,  444 => 224,  441 => 223,  434 => 219,  428 => 216,  422 => 215,  418 => 214,  413 => 212,  409 => 211,  405 => 210,  397 => 209,  393 => 208,  389 => 207,  385 => 206,  381 => 205,  378 => 204,  375 => 203,  371 => 202,  348 => 182,  309 => 145,  300 => 144,  277 => 131,  268 => 125,  259 => 119,  250 => 113,  239 => 104,  230 => 103,  210 => 93,  206 => 92,  202 => 91,  198 => 90,  194 => 89,  190 => 88,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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

        };
        \$('#user').addClass('active');
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <style>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des Entreprises</h4>
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
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <a href=\"{{ path('admin_Entreprise_add') }}\"><button class=\"btn btn-primary site-btn pull-right\">Ajouter</button></a>
                                            </div>
                                        </div>
                                        <div class=\"dashboard-box\">
                                            <div class=\"basic_table table-responsive\">
                                                <table data-plugin=\"datatable\" class=\"table table-striped table-hover display nowrap\">
                                                    <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Directeur</th>
                                                        <th>Email</th>
                                                        <th>Date d'Ajouter</th>
                                                        <th>Adresse</th>
                                                        <th>Telephone</th>
                                                        <th>Domaine</th>
                                                        <th>action</th>
                                                        <th>Statu</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for e in entreprise %}
                                                        {% if e.enabled == 1 %}
                                                            <tr>
                                                                <td>{{ e.fullName }}</td>
                                                                <td>{{ e.directeur }}</td>
                                                                <td>{{ e.lastLogin|date('M d Y H:i') }}</td>
                                                                <td>{{ e.email }}</td>
                                                                <td>{{ e.adresse }} , {{ e.ville }} {{ e.cp }}
                                                                    , {{ e.pays }}</td>
                                                                <td>{{ e.tel }}</td>
                                                                <td>{{ e.domaine }}</td>
                                                                <td>
                                                                    <a href=\"{{ path('admin_Entreprise_update',{'id':e.id}) }}\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs update-Entreprise\">Update</button></a>
                                                                    <a href=\"{{ path('admin_Entreprise_pdf', { 'id': e.id }) }}\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs\"  data-id=\"{{ e.id }}\">PDF</button></a>
                                                                    <a href=\"{{path('admin_Entreprise_pdf')}}\"><button class=\"btn btn-social \" data-title=\"imprimer\" data-toggle=\"modal\" data-target=\"#imprimer\" ><span class=\"glyphicon glyphicon-save-file\"></span> Imprimer maintenant </button></a>
                                                                </td>
                                                                <td>
                                                                    <a><button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"{{ e.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button></a>
                                                                </td>
                                                            </tr>
                                                        {% else %}
                                                            <tr>
                                                                <td>{{ e.fullname }}</td>
                                                                <td>{{ e.directeur }}</td>
                                                                <td>{{ e.lastLogin|date('M d Y H:i') }}</td>
                                                                <td>{{ e.email }}</td>
                                                                <td>{{ e.adresse }} , {{ e.ville }} {{ e.cp }}
                                                                    , {{ e.pays }}</td>
                                                                <td>{{ e.tel }}</td>
                                                                <td>{{ e.domaine }}</td>
                                                                <td>
                                                                    <a><button type=\"button\" class=\"btn btn-outline-primary btn-xs\" disabled>Update</button></a>
                                                                </td>
                                                                <td>
                                                                    <a href=\"{{ path('admin_Entreprise_pdf', { 'id': e.id }) }}\"><button type=\"button\" class=\"btn btn-outline-primary btn-xs\"  data-id=\"{{ e.id }}\">PDF</button></a>
                                                                    <a  href=\"{{path('admin_Entreprise_pdf')}}\"><button class=\"btn btn-social \" data-title=\"imprimer\" data-toggle=\"modal\" data-target=\"#imprimer\" ><span class=\"glyphicon glyphicon-save-file\"></span> Imprimer maintenant </button></a>
                                                                    <a><button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"{{ e.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive</button></a>
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
                    <h4 class=\"modal-title\">Activation de Client</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-followw\">
                                <div class=\"profile-icon text-xs-center\">
                                    <p>Confirmation de supresseion</p>
                                </div>
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
        \$('#user').addClass('active');
    </script>
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
{% endblock %}", "ERPBundle:Admin/Membre/entreprise:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/entreprise/index.html.twig");
    }
}
