<?php

/* ERPBundle:Admin/Membre/employee:show.html.twig */
class __TwigTemplate_9974b00eaba9b7f10aec0e01d1f70e24eda709761f82a7a3089415a83a81f10d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/employee:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_44c54a42563e9eacdc619f8a38de03895e4a0b66048d31ab14561d15a3ccda29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c54a42563e9eacdc619f8a38de03895e4a0b66048d31ab14561d15a3ccda29->enter($__internal_44c54a42563e9eacdc619f8a38de03895e4a0b66048d31ab14561d15a3ccda29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/employee:show.html.twig"));

        $__internal_0cd68fb70db2c981042638ee4561935c210c04ac7b5ee8accb5586323460fe63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd68fb70db2c981042638ee4561935c210c04ac7b5ee8accb5586323460fe63->enter($__internal_0cd68fb70db2c981042638ee4561935c210c04ac7b5ee8accb5586323460fe63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/employee:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c54a42563e9eacdc619f8a38de03895e4a0b66048d31ab14561d15a3ccda29->leave($__internal_44c54a42563e9eacdc619f8a38de03895e4a0b66048d31ab14561d15a3ccda29_prof);

        
        $__internal_0cd68fb70db2c981042638ee4561935c210c04ac7b5ee8accb5586323460fe63->leave($__internal_0cd68fb70db2c981042638ee4561935c210c04ac7b5ee8accb5586323460fe63_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e55d4a3211cc6a4547299d68b9bb44a24101d81f617d6b47ad467db24252a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e55d4a3211cc6a4547299d68b9bb44a24101d81f617d6b47ad467db24252a7a->enter($__internal_6e55d4a3211cc6a4547299d68b9bb44a24101d81f617d6b47ad467db24252a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f79ff9fb422d17dbc316a1844068a9cb4c0c54a88d96a0e22dd42da20ae6857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f79ff9fb422d17dbc316a1844068a9cb4c0c54a88d96a0e22dd42da20ae6857->enter($__internal_2f79ff9fb422d17dbc316a1844068a9cb4c0c54a88d96a0e22dd42da20ae6857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Employee";
        
        $__internal_2f79ff9fb422d17dbc316a1844068a9cb4c0c54a88d96a0e22dd42da20ae6857->leave($__internal_2f79ff9fb422d17dbc316a1844068a9cb4c0c54a88d96a0e22dd42da20ae6857_prof);

        
        $__internal_6e55d4a3211cc6a4547299d68b9bb44a24101d81f617d6b47ad467db24252a7a->leave($__internal_6e55d4a3211cc6a4547299d68b9bb44a24101d81f617d6b47ad467db24252a7a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9876cdcd43ab6b227152b0f68e7e8804225d607678a5223f0fd22d95a4f3785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9876cdcd43ab6b227152b0f68e7e8804225d607678a5223f0fd22d95a4f3785->enter($__internal_f9876cdcd43ab6b227152b0f68e7e8804225d607678a5223f0fd22d95a4f3785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ba357c43d20b1eaaed841fa3df773766a74ff6e3f5ff7031b201d597e1c6509c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba357c43d20b1eaaed841fa3df773766a74ff6e3f5ff7031b201d597e1c6509c->enter($__internal_ba357c43d20b1eaaed841fa3df773766a74ff6e3f5ff7031b201d597e1c6509c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
";
        
        $__internal_ba357c43d20b1eaaed841fa3df773766a74ff6e3f5ff7031b201d597e1c6509c->leave($__internal_ba357c43d20b1eaaed841fa3df773766a74ff6e3f5ff7031b201d597e1c6509c_prof);

        
        $__internal_f9876cdcd43ab6b227152b0f68e7e8804225d607678a5223f0fd22d95a4f3785->leave($__internal_f9876cdcd43ab6b227152b0f68e7e8804225d607678a5223f0fd22d95a4f3785_prof);

    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d194f3beafb9325bb5ad4614796ea6ee03920a3652e166aa2d52750b99c2ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d194f3beafb9325bb5ad4614796ea6ee03920a3652e166aa2d52750b99c2ee1->enter($__internal_5d194f3beafb9325bb5ad4614796ea6ee03920a3652e166aa2d52750b99c2ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91aca6c58fe3ca1bd064e2ad721f376a784923835c2bfa709e9cbdb7d5c95100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aca6c58fe3ca1bd064e2ad721f376a784923835c2bfa709e9cbdb7d5c95100->enter($__internal_91aca6c58fe3ca1bd064e2ad721f376a784923835c2bfa709e9cbdb7d5c95100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <a class=\"flat-buttons active\" href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\"  style=\"padding: 23px;background:#087380\">
                <span class=\"mega-title\"  style=\"color:white\">Employée</span>
            </a>
            <a class=\"flat-buttons\"  href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\" style=\"padding: 23px;\">
                <span class=\"mega-title\">Enseignant</span>
            </a>
            <a class=\"flat-buttons active\" href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\"  style=\"padding: 23px;\">
                <span class=\"mega-title\">Etudiant</span>
            </a>
            <a class=\"flat-buttons\"  href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise");
        echo "\" style=\"padding: 23px;\">
                <span class=\"mega-title\">Tuteur de stage</span>
            </a>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Employee</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des Employees</h4>
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
                                                    <h4 class=\"page-content-title\">Personal Information</h4>
                                                    <div class=\"divider15\"></div>
                                                    <div class=\"personal-info-box\">
                                                        <div class=\"row\">
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">First Name :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute(($context["employee"] ?? $this->getContext($context, "employee")), "fullName", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Post :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute(($context["employee"] ?? $this->getContext($context, "employee")), "poste", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Country :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["employee"] ?? $this->getContext($context, "employee")), "pays", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Address :</div>
                                                                <div class=\"detail-profile float-xs-right\">";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["employee"] ?? $this->getContext($context, "employee")), "adresse", array()), "html", null, true);
        echo "
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"divider-lg-spacing\"></div>
                                                <div class=\"col-md-12\">
                                                    <h4 class=\"page-content-title\">Contact Information</h4>
                                                    <div class=\"divider15\"></div>
                                                    <div class=\"personal-info-box\">
                                                        <div class=\"row\">
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Ville :</div>
                                                                <div class=\"detail-profile float-xs-right\">";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute(($context["employee"] ?? $this->getContext($context, "employee")), "ville", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Tel No :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["employee"] ?? $this->getContext($context, "employee")), "tel", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Code postal :</div>
                                                                <div class=\"detail-profile float-xs-right\">";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute(($context["employee"] ?? $this->getContext($context, "employee")), "cp", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
        // line 192
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                            <div class=\"form-group row\">
                                                <label for=\"example-number-input\" class=\"col-2 col-form-label\">Solde</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "solde", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-datetime-local-input\" class=\"col-2 col-form-label\">Date</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 202
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-date-input\" class=\"col-2 col-form-label\">Date de création</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "created_at", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-month-input\" class=\"col-2 col-form-label\">Date de modification</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "updated_at", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-time-input\" class=\"col-2 col-form-label\">Type de paiement</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                                                </div>
                                            </div>

                                            <div class=\"form-group row\">
                                                <label for=\"example-time-input\" class=\"col-2 col-form-label\">Statut de paiement</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'widget');
        echo "
                                                </div>
                                            </div>



                                            <input type=\"submit\" name=\"sendNewSms\" class=\"inputButton\"  value=\" Valider \" />
                                            ";
        // line 234
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
        
        $__internal_91aca6c58fe3ca1bd064e2ad721f376a784923835c2bfa709e9cbdb7d5c95100->leave($__internal_91aca6c58fe3ca1bd064e2ad721f376a784923835c2bfa709e9cbdb7d5c95100_prof);

        
        $__internal_5d194f3beafb9325bb5ad4614796ea6ee03920a3652e166aa2d52750b99c2ee1->leave($__internal_5d194f3beafb9325bb5ad4614796ea6ee03920a3652e166aa2d52750b99c2ee1_prof);

    }

    // line 250
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_69194ca73d43083d9a19ff11d27be3be7c6aaec8b51541948be1e71cc72ff459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69194ca73d43083d9a19ff11d27be3be7c6aaec8b51541948be1e71cc72ff459->enter($__internal_69194ca73d43083d9a19ff11d27be3be7c6aaec8b51541948be1e71cc72ff459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_aac66cf058db59213ebe04405b0697f888e708038a8c0a3f5077fc1a8b32df63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac66cf058db59213ebe04405b0697f888e708038a8c0a3f5077fc1a8b32df63->enter($__internal_aac66cf058db59213ebe04405b0697f888e708038a8c0a3f5077fc1a8b32df63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 251
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/js/layout.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 274
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
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/employee\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_aac66cf058db59213ebe04405b0697f888e708038a8c0a3f5077fc1a8b32df63->leave($__internal_aac66cf058db59213ebe04405b0697f888e708038a8c0a3f5077fc1a8b32df63_prof);

        
        $__internal_69194ca73d43083d9a19ff11d27be3be7c6aaec8b51541948be1e71cc72ff459->leave($__internal_69194ca73d43083d9a19ff11d27be3be7c6aaec8b51541948be1e71cc72ff459_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/employee:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 274,  545 => 273,  541 => 272,  537 => 271,  533 => 270,  529 => 269,  525 => 268,  521 => 267,  517 => 266,  513 => 265,  509 => 264,  505 => 263,  501 => 262,  497 => 261,  493 => 260,  489 => 259,  485 => 258,  481 => 257,  477 => 256,  473 => 255,  469 => 254,  465 => 253,  461 => 252,  456 => 251,  447 => 250,  421 => 234,  411 => 227,  401 => 220,  392 => 214,  383 => 208,  374 => 202,  365 => 196,  358 => 192,  349 => 186,  342 => 182,  335 => 178,  318 => 164,  311 => 160,  304 => 156,  297 => 152,  249 => 107,  243 => 104,  237 => 101,  231 => 98,  226 => 95,  217 => 94,  205 => 92,  201 => 91,  197 => 90,  193 => 89,  189 => 88,  185 => 87,  181 => 86,  177 => 85,  173 => 84,  169 => 83,  165 => 82,  161 => 81,  157 => 80,  153 => 79,  149 => 78,  145 => 77,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
{% endblock %}
{% block body %}
    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <a class=\"flat-buttons active\" href=\"{{ path('admin_Employee') }}\"  style=\"padding: 23px;background:#087380\">
                <span class=\"mega-title\"  style=\"color:white\">Employée</span>
            </a>
            <a class=\"flat-buttons\"  href=\"{{ path('admin_Enseignant') }}\" style=\"padding: 23px;\">
                <span class=\"mega-title\">Enseignant</span>
            </a>
            <a class=\"flat-buttons active\" href=\"{{ path('admin_Etudiant') }}\"  style=\"padding: 23px;\">
                <span class=\"mega-title\">Etudiant</span>
            </a>
            <a class=\"flat-buttons\"  href=\"{{ path('admin_Entreprise') }}\" style=\"padding: 23px;\">
                <span class=\"mega-title\">Tuteur de stage</span>
            </a>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Employee</a></li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Liste des Employees</h4>
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
                                                    <h4 class=\"page-content-title\">Personal Information</h4>
                                                    <div class=\"divider15\"></div>
                                                    <div class=\"personal-info-box\">
                                                        <div class=\"row\">
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">First Name :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ employee.fullName }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Post :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ employee.poste }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Country :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ employee.pays }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Address :</div>
                                                                <div class=\"detail-profile float-xs-right\">{{ employee.adresse }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"divider-lg-spacing\"></div>
                                                <div class=\"col-md-12\">
                                                    <h4 class=\"page-content-title\">Contact Information</h4>
                                                    <div class=\"divider15\"></div>
                                                    <div class=\"personal-info-box\">
                                                        <div class=\"row\">
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Ville :</div>
                                                                <div class=\"detail-profile float-xs-right\">{{ employee.ville }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Tel No :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ employee.tel }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Code postal :</div>
                                                                <div class=\"detail-profile float-xs-right\">{{ employee.cp }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{ form_start(form) }}
                                            <div class=\"form-group row\">
                                                <label for=\"example-number-input\" class=\"col-2 col-form-label\">Solde</label>
                                                <div class=\"col-10\">
                                                    {{ form_widget(form.solde) }}
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-datetime-local-input\" class=\"col-2 col-form-label\">Date</label>
                                                <div class=\"col-10\">
                                                    {{ form_widget(form.date) }}
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-date-input\" class=\"col-2 col-form-label\">Date de création</label>
                                                <div class=\"col-10\">
                                                    {{ form_widget(form.created_at) }}
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-month-input\" class=\"col-2 col-form-label\">Date de modification</label>
                                                <div class=\"col-10\">
                                                    {{ form_widget(form.updated_at) }}
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-time-input\" class=\"col-2 col-form-label\">Type de paiement</label>
                                                <div class=\"col-10\">
                                                    {{ form_widget(form.type) }}
                                                </div>
                                            </div>

                                            <div class=\"form-group row\">
                                                <label for=\"example-time-input\" class=\"col-2 col-form-label\">Statut de paiement</label>
                                                <div class=\"col-10\">
                                                    {{ form_widget(form.status) }}
                                                </div>
                                            </div>



                                            <input type=\"submit\" name=\"sendNewSms\" class=\"inputButton\"  value=\" Valider \" />
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
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/employee\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
{% endblock %}", "ERPBundle:Admin/Membre/employee:show.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/employee/show.html.twig");
    }
}
