<?php

/* ERPBundle:Admin/Compte:parametrage.html.twig */
class __TwigTemplate_aa61582665f85620a6c3608260aae3c186f279ac61d41209976f650d6cacdb08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Compte:parametrage.html.twig", 1);
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
        $__internal_c5d30ed256a6286f91914afe55151325947dc1fc16606244573a89baf181e93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d30ed256a6286f91914afe55151325947dc1fc16606244573a89baf181e93f->enter($__internal_c5d30ed256a6286f91914afe55151325947dc1fc16606244573a89baf181e93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:parametrage.html.twig"));

        $__internal_223f802c59b55d24fa9f076bad3c833cf833952fc609d93a0c269e8bf8da515b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223f802c59b55d24fa9f076bad3c833cf833952fc609d93a0c269e8bf8da515b->enter($__internal_223f802c59b55d24fa9f076bad3c833cf833952fc609d93a0c269e8bf8da515b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:parametrage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5d30ed256a6286f91914afe55151325947dc1fc16606244573a89baf181e93f->leave($__internal_c5d30ed256a6286f91914afe55151325947dc1fc16606244573a89baf181e93f_prof);

        
        $__internal_223f802c59b55d24fa9f076bad3c833cf833952fc609d93a0c269e8bf8da515b->leave($__internal_223f802c59b55d24fa9f076bad3c833cf833952fc609d93a0c269e8bf8da515b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfba43ce5a0562bda1120fff6d9aa59592fba899aba2591224aade05d5d4b607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfba43ce5a0562bda1120fff6d9aa59592fba899aba2591224aade05d5d4b607->enter($__internal_bfba43ce5a0562bda1120fff6d9aa59592fba899aba2591224aade05d5d4b607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cdadcaf2c819f0bfe8e81858caa2d0e1459b2b5274b0e705518c97c986f0811c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdadcaf2c819f0bfe8e81858caa2d0e1459b2b5274b0e705518c97c986f0811c->enter($__internal_cdadcaf2c819f0bfe8e81858caa2d0e1459b2b5274b0e705518c97c986f0811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Parametrage";
        
        $__internal_cdadcaf2c819f0bfe8e81858caa2d0e1459b2b5274b0e705518c97c986f0811c->leave($__internal_cdadcaf2c819f0bfe8e81858caa2d0e1459b2b5274b0e705518c97c986f0811c_prof);

        
        $__internal_bfba43ce5a0562bda1120fff6d9aa59592fba899aba2591224aade05d5d4b607->leave($__internal_bfba43ce5a0562bda1120fff6d9aa59592fba899aba2591224aade05d5d4b607_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aec0779f8eb550867ec378b88a37331c15e52f0f2862d0b3aed14c57363d835d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec0779f8eb550867ec378b88a37331c15e52f0f2862d0b3aed14c57363d835d->enter($__internal_aec0779f8eb550867ec378b88a37331c15e52f0f2862d0b3aed14c57363d835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8127bdfc8129467d72881c7eb7a99ac2502e9d5952120e071e57b6c0825d95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8127bdfc8129467d72881c7eb7a99ac2502e9d5952120e071e57b6c0825d95e->enter($__internal_a8127bdfc8129467d72881c7eb7a99ac2502e9d5952120e071e57b6c0825d95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/FooTable/compiled/footable.bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/hover/css/hover.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
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
        
        $__internal_a8127bdfc8129467d72881c7eb7a99ac2502e9d5952120e071e57b6c0825d95e->leave($__internal_a8127bdfc8129467d72881c7eb7a99ac2502e9d5952120e071e57b6c0825d95e_prof);

        
        $__internal_aec0779f8eb550867ec378b88a37331c15e52f0f2862d0b3aed14c57363d835d->leave($__internal_aec0779f8eb550867ec378b88a37331c15e52f0f2862d0b3aed14c57363d835d_prof);

    }

    // line 98
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_c53412ea6ea63674b6b737e220713c04a4160327f88fc189260da52017af2b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53412ea6ea63674b6b737e220713c04a4160327f88fc189260da52017af2b44->enter($__internal_c53412ea6ea63674b6b737e220713c04a4160327f88fc189260da52017af2b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_760fe411d0ceec0eb690547acbbb1f1c925d716dbf928fc4a50fd0347f378993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760fe411d0ceec0eb690547acbbb1f1c925d716dbf928fc4a50fd0347f378993->enter($__internal_760fe411d0ceec0eb690547acbbb1f1c925d716dbf928fc4a50fd0347f378993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 99
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
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_rapport");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span> Rapport</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"arrow_down header-icon\" aria-hidden=\"true\"></span>
                                    <span>Import</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_archive header-icon\" aria-hidden=\"true\"></span>
                                    <span>Archivage</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_parametrage");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"  style=\"color: #fff;\"></span>
                                    <span style=\"color: #fff;\">parametre</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_760fe411d0ceec0eb690547acbbb1f1c925d716dbf928fc4a50fd0347f378993->leave($__internal_760fe411d0ceec0eb690547acbbb1f1c925d716dbf928fc4a50fd0347f378993_prof);

        
        $__internal_c53412ea6ea63674b6b737e220713c04a4160327f88fc189260da52017af2b44->leave($__internal_c53412ea6ea63674b6b737e220713c04a4160327f88fc189260da52017af2b44_prof);

    }

    // line 139
    public function block_body($context, array $blocks = array())
    {
        $__internal_948e8cc1da5a0acf9c63b7dba1d373f849e33b0bb96532a6e720d2124a5a9ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948e8cc1da5a0acf9c63b7dba1d373f849e33b0bb96532a6e720d2124a5a9ff1->enter($__internal_948e8cc1da5a0acf9c63b7dba1d373f849e33b0bb96532a6e720d2124a5a9ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6dcb359745db8c0b50acebcb2fd91a4a740c0f2da834a7af395f4ae7ddb859f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6dcb359745db8c0b50acebcb2fd91a4a740c0f2da834a7af395f4ae7ddb859f->enter($__internal_a6dcb359745db8c0b50acebcb2fd91a4a740c0f2da834a7af395f4ae7ddb859f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 140
        echo "    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Parametrage</h2>
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Components</a></li>
                <li class=\"breadcrumb-item active\">Footable</li>
            </ol>
        </div>

        <div class=\"content\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card-accordions collapse-footable\">
                            <div id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                <form action=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_parametrage", array("user" => "enseignant"));
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                <div class=\"card m-0\">
                                    <div class=\"card-header\" role=\"tab\" id=\"footableTwo\">
                                        <h5 class=\"mb-0\">
                                            <a aria-expanded=\"false\" class=\"card-title collapsed active\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">Enseignant</a>
                                        </h5>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"footableTwo\" aria-expanded=\"false\">
                                        <div class=\"card-block\">
                                            <table class=\"table table-striped m-0\">
                                                <thead>
                                                <tr>
                                                    <th data-breakpoints=\"xs\"></th>
                                                    <th>Permission</th>
                                                    <th>Creation</th>
                                                    <th>Modification</th>
                                                    <th>Suppression</th>
                                                    <th>Consultation</th>
                                                    <th>All</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Classe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce1\" name=\"ce1\"/>
                                                                <label for=\"ce1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce2\" name=\"ce2\"/>
                                                                <label for=\"ce2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce3\" name=\"ce3\"/>
                                                                <label for=\"ce3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce4\" name=\"ce4\"/>
                                                                <label for=\"ce4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce\" name=\"ce\" onclick=\"selectBy('ce')\"/>
                                                                <label for=\"ce\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Groupe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge1\" name=\"ge1\"/>
                                                                <label for=\"ge1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge2\" name=\"ge2\"/>
                                                                <label for=\"ge2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge3\" name=\"ge3\"/>
                                                                <label for=\"ge3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge4\" name=\"ge4\"/>
                                                                <label for=\"ge4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge\" name=\"ge\" onclick=\"selectBy('ge')\"/>
                                                                <label for=\"ge\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Retard</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re1\" name=\"re1\"/>
                                                                <label for=\"re1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re2\" name=\"re2\"/>
                                                                <label for=\"re2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re3\" name=\"re3\"/>
                                                                <label for=\"re3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re4\" name=\"re4\"/>
                                                                <label for=\"re4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re\" name=\"re\" onclick=\"selectBy('re')\"/>
                                                                <label for=\"re\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Unite d'enseigenement</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue1\" name=\"ue1\"/>
                                                                <label for=\"ue1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue2\" name=\"ue2\"/>
                                                                <label for=\"ue2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue3\" name=\"ue3\"/>
                                                                <label for=\"ue3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue4\" name=\"ue4\"/>
                                                                <label for=\"ue4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue\" name=\"ue\" onclick=\"selectBy('ue')\"/>
                                                                <label for=\"ue\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Emploide Temps</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te1\" name=\"te1\"/>
                                                                <label for=\"te1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te2\" name=\"te2\"/>
                                                                <label for=\"te2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te3\" name=\"te3\"/>
                                                                <label for=\"te3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te4\" name=\"te4\"/>
                                                                <label for=\"te4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te\" name=\"te\" onclick=\"selectBy('te')\"/>
                                                                <label for=\"te\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Note</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne1\" name=\"ne1\"/>
                                                                <label for=\"ne1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne2\" name=\"ne2\"/>
                                                                <label for=\"ne2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne3\" name=\"ne3\"/>
                                                                <label for=\"ne3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne4\" name=\"ne4\"/>
                                                                <label for=\"ne4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne\" name=\"ne\" onclick=\"selectBy('ne')\"/>
                                                                <label for=\"ne\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Salle</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se1\" name=\"se1\"/>
                                                                <label for=\"se1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se2\" name=\"se2\"/>
                                                                <label for=\"se2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se3\" name=\"se3\"/>
                                                                <label for=\"se3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se4\" name=\"se4\"/>
                                                                <label for=\"se4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se\" name=\"se\" onclick=\"selectBy('se')\"/>
                                                                <label for=\"se\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Examen</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe1\" name=\"exe1\"/>
                                                                <label for=\"exe1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe2\" name=\"exe2\"/>
                                                                <label for=\"exe2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe3\" name=\"exe3\"/>
                                                                <label for=\"exe3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe4\" name=\"exe4\"/>
                                                                <label for=\"exe4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe\" name=\"exe\" onclick=\"selectBy('exe')\"/>
                                                                <label for=\"exe\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Bulltins</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be1\" name=\"be1\"/>
                                                                <label for=\"be1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be2\" name=\"be2\"/>
                                                                <label for=\"be2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be3\" name=\"be3\"/>
                                                                <label for=\"be3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be4\" name=\"be4\"/>
                                                                <label for=\"be4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be\" name=\"be\" onclick=\"selectBy('be')\"/>
                                                                <label for=\"be\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>User</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use1\" name=\"use1\"/>
                                                                <label for=\"use1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use2\" name=\"use2\"/>
                                                                <label for=\"use2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use3\" name=\"use3\"/>
                                                                <label for=\"use3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use4\" name=\"use4\"/>
                                                                <label for=\"use4\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use\" name=\"use\" onclick=\"selectBy('use')\"/>
                                                                <label for=\"use\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card m-0\">
                                    <div class=\"card-header\" role=\"tab\" id=\"footableOne\">
                                        <h5 class=\"mb-0\">
                                            <a aria-expanded=\"false\" class=\"card-title collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">Etudiant</a>
                                        </h5>
                                    </div>
                                    <div id=\"collapseOne\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"footableOne\" aria-expanded=\"false\">
                                        <div class=\"card-block\">
                                            <table class=\"table table-striped m-0\">
                                                <thead>
                                                <tr>
                                                    <th data-breakpoints=\"xs\"></th>
                                                    <th>Permission</th>
                                                    <th>Creation</th>
                                                    <th>Modification</th>
                                                    <th>Suppression</th>
                                                    <th>Consultation</th>
                                                    <th>All</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Classe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet1\" name=\"cet1\"/>
                                                                <label for=\"cet1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet2\" name=\"cet2\"/>
                                                                <label for=\"cet2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet3\" name=\"cet3\"/>
                                                                <label for=\"cet3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet4\" name=\"cet4\"/>
                                                                <label for=\"cet4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet\" name=\"cet\" onclick=\"selectBy('cet')\"/>
                                                                <label for=\"cet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Groupe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get1\" name=\"get1\"/>
                                                                <label for=\"g1et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get2\" name=\"get2\"/>
                                                                <label for=\"get2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get3\" name=\"get3\"/>
                                                                <label for=\"g3et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get4\" name=\"get4\"/>
                                                                <label for=\"g4et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get\" name=\"get\" onclick=\"selectBy('get')\"/>
                                                                <label for=\"get\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Retard</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret1\" name=\"ret1\"/>
                                                                <label for=\"ret1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret2\" name=\"ret2\"/>
                                                                <label for=\"ret2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret3\" name=\"ret3\"/>
                                                                <label for=\"ret3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret4\" name=\"ret4\"/>
                                                                <label for=\"ret4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret\" name=\"ret\" onclick=\"selectBy('ret')\"/>
                                                                <label for=\"ret\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Unite d'enseigenement</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet1\" name=\"uet1\"/>
                                                                <label for=\"uet1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet2\" name=\"uet2\"/>
                                                                <label for=\"uet2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet3\" name=\"uet3\"/>
                                                                <label for=\"uet3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet4\" name=\"uet4\"/>
                                                                <label for=\"uet4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet\" name=\"uet\" onclick=\"selectBy('uet')\"/>
                                                                <label for=\"uet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Emploide Temps</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet1\" name=\"tet1\"/>
                                                                <label for=\"t1et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet2\" name=\"tet2\"/>
                                                                <label for=\"t2et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet3\" name=\"tet3\"/>
                                                                <label for=\"t3et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet4\" name=\"tet4\"/>
                                                                <label for=\"t4et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet\" name=\"tet\" onclick=\"selectBy('tet')\"/>
                                                                <label for=\"tet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Note</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net1\" name=\"net1\"/>
                                                                <label for=\"n1et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net2\" name=\"net2\"/>
                                                                <label for=\"n2et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net3\" name=\"net3\"/>
                                                                <label for=\"n3et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net4\" name=\"net4\"/>
                                                                <label for=\"net4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net\" name=\"net\" onclick=\"selectBy('net')\"/>
                                                                <label for=\"net\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Salle</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set1\" name=\"set1\"/>
                                                                <label for=\"set1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set2\" name=\"set2\"/>
                                                                <label for=\"set2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set3\" name=\"set3\"/>
                                                                <label for=\"set3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set4\" name=\"set4\"/>
                                                                <label for=\"set4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set\" name=\"set\" onclick=\"selectBy('set')\"/>
                                                                <label for=\"set\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Examen</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet1\" name=\"exet1\"/>
                                                                <label for=\"exet1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet2\" name=\"exet2\"/>
                                                                <label for=\"exet2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet3\" name=\"exet3\"/>
                                                                <label for=\"exet3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet4\" name=\"exet4\"/>
                                                                <label for=\"exet4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet\" name=\"exet\" onclick=\"selectBy('exet')\"/>
                                                                <label for=\"exet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Bulltins</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet1\" name=\"bet1\"/>
                                                                <label for=\"bet1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet2\" name=\"bet2\"/>
                                                                <label for=\"bet2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet3\" name=\"bet3\"/>
                                                                <label for=\"bet3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet4\" name=\"bet4\"/>
                                                                <label for=\"bet4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet\" name=\"bet\" onclick=\"selectBy('bet')\"/>
                                                                <label for=\"bet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>User</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset1\" name=\"uset1\"/>
                                                                <label for=\"uset1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset2\" name=\"uset2\"/>
                                                                <label for=\"uset2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset3\" name=\"uset3\"/>
                                                                <label for=\"uset3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset4\" name=\"uset4\"/>
                                                                <label for=\"uset4\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset\" name=\"uset\" onclick=\"selectBy('uset')\"/>
                                                                <label for=\"uset\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card m-0\">
                                    <div class=\"card-header\" role=\"tab\" id=\"footableThree\">
                                        <h5 class=\"mb-0\">
                                            <a aria-expanded=\"false\" class=\"card-title collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">Employee</a>
                                        </h5>
                                    </div>
                                    <div id=\"collapseThree\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"footableThree\" aria-expanded=\"false\">
                                        <div class=\"card-block\">
                                            <table class=\"table table-striped m-0\">
                                                <thead>
                                                <tr>
                                                    <th data-breakpoints=\"xs\"></th>
                                                    <th>Permission</th>
                                                    <th>Creation</th>
                                                    <th>Modification</th>
                                                    <th>Suppression</th>
                                                    <th>Consultation</th>
                                                    <th>All</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Classe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee1\" name=\"cee1\"/>
                                                                <label for=\"cee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee2\" name=\"cee2\"/>
                                                                <label for=\"cee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee3\" name=\"cee3\"/>
                                                                <label for=\"cee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee4\" name=\"cee4\"/>
                                                                <label for=\"cee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee\" name=\"cee\" onclick=\"selectBy('cee')\"/>
                                                                <label for=\"cee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Groupe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee1\" name=\"gee1\"/>
                                                                <label for=\"gee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee2\" name=\"gee2\"/>
                                                                <label for=\"gee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee3\" name=\"gee3\"/>
                                                                <label for=\"gee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee4\" name=\"gee4\"/>
                                                                <label for=\"gee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee\" name=\"gee\" onclick=\"selectBy('gee')\"/>
                                                                <label for=\"gee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Retard</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree1\" name=\"ree1\"/>
                                                                <label for=\"ree1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree2\" name=\"ree2\"/>
                                                                <label for=\"ree2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree3\" name=\"ree3\"/>
                                                                <label for=\"ree3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree4\" name=\"ree4\"/>
                                                                <label for=\"ree4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree\" name=\"ree\" onclick=\"selectBy('ree')\"/>
                                                                <label for=\"ree\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Unite d'enseigenement</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee1\" name=\"uee1\"/>
                                                                <label for=\"uee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee2\" name=\"uee2\"/>
                                                                <label for=\"uee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee3\" name=\"uee3\"/>
                                                                <label for=\"uee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee4\" name=\"uee4\"/>
                                                                <label for=\"uee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee\" name=\"uee\" onclick=\"selectBy('uee')\"/>
                                                                <label for=\"uee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Emploide Temps</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee1\" name=\"tee1\"/>
                                                                <label for=\"tee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee2\" name=\"tee2\"/>
                                                                <label for=\"tee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee3\" name=\"tee3\"/>
                                                                <label for=\"tee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee4\" name=\"tee4\"/>
                                                                <label for=\"tee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee\" name=\"tee\" onclick=\"selectBy('tee')\"/>
                                                                <label for=\"tee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Note</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee1\" name=\"nee1\"/>
                                                                <label for=\"nee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee2\" name=\"nee2\"/>
                                                                <label for=\"nee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee3\" name=\"nee3\"/>
                                                                <label for=\"nee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee4\" name=\"nee4\"/>
                                                                <label for=\"nee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee\" name=\"nee\" onclick=\"selectBy('nee')\"/>
                                                                <label for=\"nee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Salle</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see1\" name=\"see1\"/>
                                                                <label for=\"see1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see2\" name=\"see2\"/>
                                                                <label for=\"see2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see3\" name=\"see3\"/>
                                                                <label for=\"see3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see4\" name=\"see4\"/>
                                                                <label for=\"see4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see\" name=\"see\" onclick=\"selectBy('see')\"/>
                                                                <label for=\"see\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Examen</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee1\" name=\"exee1\"/>
                                                                <label for=\"ex1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee2\" name=\"exee2\"/>
                                                                <label for=\"exee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee3\" name=\"exee3\"/>
                                                                <label for=\"exee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee4\" name=\"exee4\"/>
                                                                <label for=\"exee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee\" name=\"exee\" onclick=\"selectBy('exee')\"/>
                                                                <label for=\"exee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Bulltins</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee1\" name=\"bee1\"/>
                                                                <label for=\"bee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee2\" name=\"bee2\"/>
                                                                <label for=\"bee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee3\" name=\"bee3\"/>
                                                                <label for=\"bee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee4\" name=\"bee4\"/>
                                                                <label for=\"bee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee\" name=\"bee\" onclick=\"selectBy('bee')\"/>
                                                                <label for=\"bee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>User</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee1\" name=\"usee1\"/>
                                                                <label for=\"usee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee2\" name=\"usee2\"/>
                                                                <label for=\"usee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee3\" name=\"usee3\"/>
                                                                <label for=\"usee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee4\" name=\"usee4\"/>
                                                                <label for=\"usee4\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee\" name=\"usee\" onclick=\"selectBy('usee')\"/>
                                                                <label for=\"usee\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                    <input type=\"submit\" class=\"btn-hover-animation hvr-ripple-in offset-lg-11\" style=\"border:0;\"/>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_a6dcb359745db8c0b50acebcb2fd91a4a740c0f2da834a7af395f4ae7ddb859f->leave($__internal_a6dcb359745db8c0b50acebcb2fd91a4a740c0f2da834a7af395f4ae7ddb859f_prof);

        
        $__internal_948e8cc1da5a0acf9c63b7dba1d373f849e33b0bb96532a6e720d2124a5a9ff1->leave($__internal_948e8cc1da5a0acf9c63b7dba1d373f849e33b0bb96532a6e720d2124a5a9ff1_prof);

    }

    // line 1566
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_51b5f3e774c8addfd985f0a049721b206c316812e5048dc641553175a27be359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b5f3e774c8addfd985f0a049721b206c316812e5048dc641553175a27be359->enter($__internal_51b5f3e774c8addfd985f0a049721b206c316812e5048dc641553175a27be359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_f7ce62185bd15875ce4e9117d602b78dd72bec26b83f9a6cc58bea821cb27f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ce62185bd15875ce4e9117d602b78dd72bec26b83f9a6cc58bea821cb27f98->enter($__internal_f7ce62185bd15875ce4e9117d602b78dd72bec26b83f9a6cc58bea821cb27f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 1567
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1568
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1570
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1571
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1572
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1573
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1575
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1576
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/FooTable/compiled/footable.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1577
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-form-validator/form-validator/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1578
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mask-plugin/dist/jquery.mask.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1581
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/footable.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1582
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1583
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 1584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    function selectBy(x){
        if(document.getElementById(x).checked == true){
            \$('#'+x+'1').prop('checked', true);
            \$('#'+x+'2').prop('checked', true);
            \$('#'+x+'3').prop('checked', true);
            \$('#'+x+'4').prop('checked', true);
        }else{
            \$('#'+x+'1').prop('checked', false);
            \$('#'+x+'2').prop('checked', false);
            \$('#'+x+'3').prop('checked', false);
            \$('#'+x+'4').prop('checked', false);
        }
    }
    </script>
";
        
        $__internal_f7ce62185bd15875ce4e9117d602b78dd72bec26b83f9a6cc58bea821cb27f98->leave($__internal_f7ce62185bd15875ce4e9117d602b78dd72bec26b83f9a6cc58bea821cb27f98_prof);

        
        $__internal_51b5f3e774c8addfd985f0a049721b206c316812e5048dc641553175a27be359->leave($__internal_51b5f3e774c8addfd985f0a049721b206c316812e5048dc641553175a27be359_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Compte:parametrage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1799 => 1584,  1795 => 1583,  1791 => 1582,  1787 => 1581,  1783 => 1580,  1779 => 1579,  1775 => 1578,  1771 => 1577,  1767 => 1576,  1763 => 1575,  1759 => 1574,  1755 => 1573,  1751 => 1572,  1747 => 1571,  1743 => 1570,  1739 => 1569,  1735 => 1568,  1730 => 1567,  1721 => 1566,  303 => 158,  283 => 140,  274 => 139,  251 => 126,  230 => 108,  219 => 99,  210 => 98,  189 => 87,  185 => 86,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  165 => 81,  161 => 80,  157 => 79,  153 => 78,  149 => 77,  145 => 76,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Parametrage{% endblock %}
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
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap/dist/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/FooTable/compiled/footable.bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/hover/css/hover.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
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
                                <a href=\"{{ path('admin_rapport') }}\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span> Rapport</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"arrow_down header-icon\" aria-hidden=\"true\"></span>
                                    <span>Import</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_archive header-icon\" aria-hidden=\"true\"></span>
                                    <span>Archivage</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('admin_parametrage') }}\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"  style=\"color: #fff;\"></span>
                                    <span style=\"color: #fff;\">parametre</span>
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
    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Parametrage</h2>
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Components</a></li>
                <li class=\"breadcrumb-item active\">Footable</li>
            </ol>
        </div>

        <div class=\"content\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"card-accordions collapse-footable\">
                            <div id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                <form action=\"{{ path('admin_parametrage',{'user':'enseignant'}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
                                <div class=\"card m-0\">
                                    <div class=\"card-header\" role=\"tab\" id=\"footableTwo\">
                                        <h5 class=\"mb-0\">
                                            <a aria-expanded=\"false\" class=\"card-title collapsed active\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">Enseignant</a>
                                        </h5>
                                    </div>
                                    <div id=\"collapseTwo\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"footableTwo\" aria-expanded=\"false\">
                                        <div class=\"card-block\">
                                            <table class=\"table table-striped m-0\">
                                                <thead>
                                                <tr>
                                                    <th data-breakpoints=\"xs\"></th>
                                                    <th>Permission</th>
                                                    <th>Creation</th>
                                                    <th>Modification</th>
                                                    <th>Suppression</th>
                                                    <th>Consultation</th>
                                                    <th>All</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Classe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce1\" name=\"ce1\"/>
                                                                <label for=\"ce1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce2\" name=\"ce2\"/>
                                                                <label for=\"ce2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce3\" name=\"ce3\"/>
                                                                <label for=\"ce3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce4\" name=\"ce4\"/>
                                                                <label for=\"ce4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ce\" name=\"ce\" onclick=\"selectBy('ce')\"/>
                                                                <label for=\"ce\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Groupe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge1\" name=\"ge1\"/>
                                                                <label for=\"ge1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge2\" name=\"ge2\"/>
                                                                <label for=\"ge2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge3\" name=\"ge3\"/>
                                                                <label for=\"ge3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge4\" name=\"ge4\"/>
                                                                <label for=\"ge4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ge\" name=\"ge\" onclick=\"selectBy('ge')\"/>
                                                                <label for=\"ge\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Retard</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re1\" name=\"re1\"/>
                                                                <label for=\"re1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re2\" name=\"re2\"/>
                                                                <label for=\"re2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re3\" name=\"re3\"/>
                                                                <label for=\"re3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re4\" name=\"re4\"/>
                                                                <label for=\"re4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"re\" name=\"re\" onclick=\"selectBy('re')\"/>
                                                                <label for=\"re\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Unite d'enseigenement</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue1\" name=\"ue1\"/>
                                                                <label for=\"ue1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue2\" name=\"ue2\"/>
                                                                <label for=\"ue2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue3\" name=\"ue3\"/>
                                                                <label for=\"ue3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue4\" name=\"ue4\"/>
                                                                <label for=\"ue4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ue\" name=\"ue\" onclick=\"selectBy('ue')\"/>
                                                                <label for=\"ue\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Emploide Temps</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te1\" name=\"te1\"/>
                                                                <label for=\"te1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te2\" name=\"te2\"/>
                                                                <label for=\"te2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te3\" name=\"te3\"/>
                                                                <label for=\"te3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te4\" name=\"te4\"/>
                                                                <label for=\"te4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"te\" name=\"te\" onclick=\"selectBy('te')\"/>
                                                                <label for=\"te\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Note</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne1\" name=\"ne1\"/>
                                                                <label for=\"ne1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne2\" name=\"ne2\"/>
                                                                <label for=\"ne2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne3\" name=\"ne3\"/>
                                                                <label for=\"ne3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne4\" name=\"ne4\"/>
                                                                <label for=\"ne4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ne\" name=\"ne\" onclick=\"selectBy('ne')\"/>
                                                                <label for=\"ne\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Salle</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se1\" name=\"se1\"/>
                                                                <label for=\"se1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se2\" name=\"se2\"/>
                                                                <label for=\"se2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se3\" name=\"se3\"/>
                                                                <label for=\"se3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se4\" name=\"se4\"/>
                                                                <label for=\"se4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"se\" name=\"se\" onclick=\"selectBy('se')\"/>
                                                                <label for=\"se\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Examen</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe1\" name=\"exe1\"/>
                                                                <label for=\"exe1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe2\" name=\"exe2\"/>
                                                                <label for=\"exe2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe3\" name=\"exe3\"/>
                                                                <label for=\"exe3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe4\" name=\"exe4\"/>
                                                                <label for=\"exe4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exe\" name=\"exe\" onclick=\"selectBy('exe')\"/>
                                                                <label for=\"exe\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Bulltins</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be1\" name=\"be1\"/>
                                                                <label for=\"be1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be2\" name=\"be2\"/>
                                                                <label for=\"be2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be3\" name=\"be3\"/>
                                                                <label for=\"be3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be4\" name=\"be4\"/>
                                                                <label for=\"be4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"be\" name=\"be\" onclick=\"selectBy('be')\"/>
                                                                <label for=\"be\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>User</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use1\" name=\"use1\"/>
                                                                <label for=\"use1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use2\" name=\"use2\"/>
                                                                <label for=\"use2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use3\" name=\"use3\"/>
                                                                <label for=\"use3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use4\" name=\"use4\"/>
                                                                <label for=\"use4\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"use\" name=\"use\" onclick=\"selectBy('use')\"/>
                                                                <label for=\"use\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card m-0\">
                                    <div class=\"card-header\" role=\"tab\" id=\"footableOne\">
                                        <h5 class=\"mb-0\">
                                            <a aria-expanded=\"false\" class=\"card-title collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">Etudiant</a>
                                        </h5>
                                    </div>
                                    <div id=\"collapseOne\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"footableOne\" aria-expanded=\"false\">
                                        <div class=\"card-block\">
                                            <table class=\"table table-striped m-0\">
                                                <thead>
                                                <tr>
                                                    <th data-breakpoints=\"xs\"></th>
                                                    <th>Permission</th>
                                                    <th>Creation</th>
                                                    <th>Modification</th>
                                                    <th>Suppression</th>
                                                    <th>Consultation</th>
                                                    <th>All</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Classe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet1\" name=\"cet1\"/>
                                                                <label for=\"cet1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet2\" name=\"cet2\"/>
                                                                <label for=\"cet2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet3\" name=\"cet3\"/>
                                                                <label for=\"cet3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet4\" name=\"cet4\"/>
                                                                <label for=\"cet4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cet\" name=\"cet\" onclick=\"selectBy('cet')\"/>
                                                                <label for=\"cet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Groupe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get1\" name=\"get1\"/>
                                                                <label for=\"g1et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get2\" name=\"get2\"/>
                                                                <label for=\"get2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get3\" name=\"get3\"/>
                                                                <label for=\"g3et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get4\" name=\"get4\"/>
                                                                <label for=\"g4et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"get\" name=\"get\" onclick=\"selectBy('get')\"/>
                                                                <label for=\"get\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Retard</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret1\" name=\"ret1\"/>
                                                                <label for=\"ret1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret2\" name=\"ret2\"/>
                                                                <label for=\"ret2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret3\" name=\"ret3\"/>
                                                                <label for=\"ret3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret4\" name=\"ret4\"/>
                                                                <label for=\"ret4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ret\" name=\"ret\" onclick=\"selectBy('ret')\"/>
                                                                <label for=\"ret\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Unite d'enseigenement</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet1\" name=\"uet1\"/>
                                                                <label for=\"uet1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet2\" name=\"uet2\"/>
                                                                <label for=\"uet2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet3\" name=\"uet3\"/>
                                                                <label for=\"uet3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet4\" name=\"uet4\"/>
                                                                <label for=\"uet4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uet\" name=\"uet\" onclick=\"selectBy('uet')\"/>
                                                                <label for=\"uet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Emploide Temps</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet1\" name=\"tet1\"/>
                                                                <label for=\"t1et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet2\" name=\"tet2\"/>
                                                                <label for=\"t2et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet3\" name=\"tet3\"/>
                                                                <label for=\"t3et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet4\" name=\"tet4\"/>
                                                                <label for=\"t4et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tet\" name=\"tet\" onclick=\"selectBy('tet')\"/>
                                                                <label for=\"tet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Note</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net1\" name=\"net1\"/>
                                                                <label for=\"n1et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net2\" name=\"net2\"/>
                                                                <label for=\"n2et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net3\" name=\"net3\"/>
                                                                <label for=\"n3et\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net4\" name=\"net4\"/>
                                                                <label for=\"net4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"net\" name=\"net\" onclick=\"selectBy('net')\"/>
                                                                <label for=\"net\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Salle</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set1\" name=\"set1\"/>
                                                                <label for=\"set1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set2\" name=\"set2\"/>
                                                                <label for=\"set2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set3\" name=\"set3\"/>
                                                                <label for=\"set3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set4\" name=\"set4\"/>
                                                                <label for=\"set4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"set\" name=\"set\" onclick=\"selectBy('set')\"/>
                                                                <label for=\"set\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Examen</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet1\" name=\"exet1\"/>
                                                                <label for=\"exet1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet2\" name=\"exet2\"/>
                                                                <label for=\"exet2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet3\" name=\"exet3\"/>
                                                                <label for=\"exet3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet4\" name=\"exet4\"/>
                                                                <label for=\"exet4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exet\" name=\"exet\" onclick=\"selectBy('exet')\"/>
                                                                <label for=\"exet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Bulltins</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet1\" name=\"bet1\"/>
                                                                <label for=\"bet1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet2\" name=\"bet2\"/>
                                                                <label for=\"bet2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet3\" name=\"bet3\"/>
                                                                <label for=\"bet3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet4\" name=\"bet4\"/>
                                                                <label for=\"bet4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bet\" name=\"bet\" onclick=\"selectBy('bet')\"/>
                                                                <label for=\"bet\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>User</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset1\" name=\"uset1\"/>
                                                                <label for=\"uset1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset2\" name=\"uset2\"/>
                                                                <label for=\"uset2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset3\" name=\"uset3\"/>
                                                                <label for=\"uset3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset4\" name=\"uset4\"/>
                                                                <label for=\"uset4\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uset\" name=\"uset\" onclick=\"selectBy('uset')\"/>
                                                                <label for=\"uset\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card m-0\">
                                    <div class=\"card-header\" role=\"tab\" id=\"footableThree\">
                                        <h5 class=\"mb-0\">
                                            <a aria-expanded=\"false\" class=\"card-title collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">Employee</a>
                                        </h5>
                                    </div>
                                    <div id=\"collapseThree\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"footableThree\" aria-expanded=\"false\">
                                        <div class=\"card-block\">
                                            <table class=\"table table-striped m-0\">
                                                <thead>
                                                <tr>
                                                    <th data-breakpoints=\"xs\"></th>
                                                    <th>Permission</th>
                                                    <th>Creation</th>
                                                    <th>Modification</th>
                                                    <th>Suppression</th>
                                                    <th>Consultation</th>
                                                    <th>All</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Classe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee1\" name=\"cee1\"/>
                                                                <label for=\"cee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee2\" name=\"cee2\"/>
                                                                <label for=\"cee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee3\" name=\"cee3\"/>
                                                                <label for=\"cee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee4\" name=\"cee4\"/>
                                                                <label for=\"cee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"cee\" name=\"cee\" onclick=\"selectBy('cee')\"/>
                                                                <label for=\"cee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Groupe</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee1\" name=\"gee1\"/>
                                                                <label for=\"gee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee2\" name=\"gee2\"/>
                                                                <label for=\"gee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee3\" name=\"gee3\"/>
                                                                <label for=\"gee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee4\" name=\"gee4\"/>
                                                                <label for=\"gee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"gee\" name=\"gee\" onclick=\"selectBy('gee')\"/>
                                                                <label for=\"gee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Retard</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree1\" name=\"ree1\"/>
                                                                <label for=\"ree1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree2\" name=\"ree2\"/>
                                                                <label for=\"ree2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree3\" name=\"ree3\"/>
                                                                <label for=\"ree3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree4\" name=\"ree4\"/>
                                                                <label for=\"ree4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"ree\" name=\"ree\" onclick=\"selectBy('ree')\"/>
                                                                <label for=\"ree\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Unite d'enseigenement</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee1\" name=\"uee1\"/>
                                                                <label for=\"uee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee2\" name=\"uee2\"/>
                                                                <label for=\"uee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee3\" name=\"uee3\"/>
                                                                <label for=\"uee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee4\" name=\"uee4\"/>
                                                                <label for=\"uee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"uee\" name=\"uee\" onclick=\"selectBy('uee')\"/>
                                                                <label for=\"uee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Emploide Temps</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee1\" name=\"tee1\"/>
                                                                <label for=\"tee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee2\" name=\"tee2\"/>
                                                                <label for=\"tee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee3\" name=\"tee3\"/>
                                                                <label for=\"tee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee4\" name=\"tee4\"/>
                                                                <label for=\"tee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"tee\" name=\"tee\" onclick=\"selectBy('tee')\"/>
                                                                <label for=\"tee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Note</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee1\" name=\"nee1\"/>
                                                                <label for=\"nee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee2\" name=\"nee2\"/>
                                                                <label for=\"nee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee3\" name=\"nee3\"/>
                                                                <label for=\"nee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee4\" name=\"nee4\"/>
                                                                <label for=\"nee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"nee\" name=\"nee\" onclick=\"selectBy('nee')\"/>
                                                                <label for=\"nee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Salle</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see1\" name=\"see1\"/>
                                                                <label for=\"see1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see2\" name=\"see2\"/>
                                                                <label for=\"see2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see3\" name=\"see3\"/>
                                                                <label for=\"see3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see4\" name=\"see4\"/>
                                                                <label for=\"see4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"see\" name=\"see\" onclick=\"selectBy('see')\"/>
                                                                <label for=\"see\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Examen</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee1\" name=\"exee1\"/>
                                                                <label for=\"ex1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee2\" name=\"exee2\"/>
                                                                <label for=\"exee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee3\" name=\"exee3\"/>
                                                                <label for=\"exee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee4\" name=\"exee4\"/>
                                                                <label for=\"exee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"exee\" name=\"exee\" onclick=\"selectBy('exee')\"/>
                                                                <label for=\"exee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>Bulltins</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee1\" name=\"bee1\"/>
                                                                <label for=\"bee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee2\" name=\"bee2\"/>
                                                                <label for=\"bee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee3\" name=\"bee3\"/>
                                                                <label for=\"bee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee4\" name=\"bee4\"/>
                                                                <label for=\"bee4\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"bee\" name=\"bee\" onclick=\"selectBy('bee')\"/>
                                                                <label for=\"bee\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr aria-expanded=\"true\">
                                                    <td></td>
                                                    <td>User</td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee1\" name=\"usee1\"/>
                                                                <label for=\"usee1\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee2\" name=\"usee2\"/>
                                                                <label for=\"usee2\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee3\" name=\"usee3\"/>
                                                                <label for=\"usee3\"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee4\" name=\"usee4\"/>
                                                                <label for=\"usee4\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class=\"checkbox product-check\">
                                                            <div class=\"checkbox-squared float-xs-left\">
                                                                <input type=\"checkbox\" id=\"usee\" name=\"usee\" onclick=\"selectBy('usee')\"/>
                                                                <label for=\"usee\"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                    <input type=\"submit\" class=\"btn-hover-animation hvr-ripple-in offset-lg-11\" style=\"border:0;\"/>
                                </form>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/moment/moment.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/FooTable/compiled/footable.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-form-validator/form-validator/jquery.form-validator.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-mask-plugin/dist/jquery.mask.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/footable.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\">
    function selectBy(x){
        if(document.getElementById(x).checked == true){
            \$('#'+x+'1').prop('checked', true);
            \$('#'+x+'2').prop('checked', true);
            \$('#'+x+'3').prop('checked', true);
            \$('#'+x+'4').prop('checked', true);
        }else{
            \$('#'+x+'1').prop('checked', false);
            \$('#'+x+'2').prop('checked', false);
            \$('#'+x+'3').prop('checked', false);
            \$('#'+x+'4').prop('checked', false);
        }
    }
    </script>
{% endblock %}", "ERPBundle:Admin/Compte:parametrage.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Compte/parametrage.html.twig");
    }
}
