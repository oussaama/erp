<?php

/* ERPBundle:Admin/Membre/entreprise:show.html.twig */
class __TwigTemplate_1143bdf7139f66b44d8199fa5f3095ca1cada934305646c1a6f2ee7cc3fb5701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/entreprise:show.html.twig", 1);
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
        $__internal_b25115628adafc1ee9c698961b772fb58f3e2ecdfa6a2c1eed67aa09e5bedf5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25115628adafc1ee9c698961b772fb58f3e2ecdfa6a2c1eed67aa09e5bedf5f->enter($__internal_b25115628adafc1ee9c698961b772fb58f3e2ecdfa6a2c1eed67aa09e5bedf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/entreprise:show.html.twig"));

        $__internal_b0ccd218083a70efbfe322eacab266efe381a4ecd744ea13bc7d5ba77da612bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ccd218083a70efbfe322eacab266efe381a4ecd744ea13bc7d5ba77da612bc->enter($__internal_b0ccd218083a70efbfe322eacab266efe381a4ecd744ea13bc7d5ba77da612bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/entreprise:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b25115628adafc1ee9c698961b772fb58f3e2ecdfa6a2c1eed67aa09e5bedf5f->leave($__internal_b25115628adafc1ee9c698961b772fb58f3e2ecdfa6a2c1eed67aa09e5bedf5f_prof);

        
        $__internal_b0ccd218083a70efbfe322eacab266efe381a4ecd744ea13bc7d5ba77da612bc->leave($__internal_b0ccd218083a70efbfe322eacab266efe381a4ecd744ea13bc7d5ba77da612bc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_67babbe7ed19bace424211d358523f3e2559638a537b1f8302a681a8445ecb29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67babbe7ed19bace424211d358523f3e2559638a537b1f8302a681a8445ecb29->enter($__internal_67babbe7ed19bace424211d358523f3e2559638a537b1f8302a681a8445ecb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6de5e38b94bf0612d59fae5f4335115638c91a203f0036381eb7075de59e9b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de5e38b94bf0612d59fae5f4335115638c91a203f0036381eb7075de59e9b30->enter($__internal_6de5e38b94bf0612d59fae5f4335115638c91a203f0036381eb7075de59e9b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Entreprise";
        
        $__internal_6de5e38b94bf0612d59fae5f4335115638c91a203f0036381eb7075de59e9b30->leave($__internal_6de5e38b94bf0612d59fae5f4335115638c91a203f0036381eb7075de59e9b30_prof);

        
        $__internal_67babbe7ed19bace424211d358523f3e2559638a537b1f8302a681a8445ecb29->leave($__internal_67babbe7ed19bace424211d358523f3e2559638a537b1f8302a681a8445ecb29_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_934d6032210fed30893c52bb0d269149dba77052d6b159cc69560896c58b7b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934d6032210fed30893c52bb0d269149dba77052d6b159cc69560896c58b7b47->enter($__internal_934d6032210fed30893c52bb0d269149dba77052d6b159cc69560896c58b7b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8eeaeec033d7822d1fa4e0375dda76a8ebd1543c6deb32b415f94e4a0fd3d403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eeaeec033d7822d1fa4e0375dda76a8ebd1543c6deb32b415f94e4a0fd3d403->enter($__internal_8eeaeec033d7822d1fa4e0375dda76a8ebd1543c6deb32b415f94e4a0fd3d403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/css/color/light/color-default.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/css-hamburgers/dist/hamburgers.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_8eeaeec033d7822d1fa4e0375dda76a8ebd1543c6deb32b415f94e4a0fd3d403->leave($__internal_8eeaeec033d7822d1fa4e0375dda76a8ebd1543c6deb32b415f94e4a0fd3d403_prof);

        
        $__internal_934d6032210fed30893c52bb0d269149dba77052d6b159cc69560896c58b7b47->leave($__internal_934d6032210fed30893c52bb0d269149dba77052d6b159cc69560896c58b7b47_prof);

    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef908e0eba611a0a15b1170d5fb23747a26a882f9740d61c0c8a6476c9d96c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef908e0eba611a0a15b1170d5fb23747a26a882f9740d61c0c8a6476c9d96c56->enter($__internal_ef908e0eba611a0a15b1170d5fb23747a26a882f9740d61c0c8a6476c9d96c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea7d34f5aa6c58e1444adc372ba830cdabe8a1225140e9b06b14b45c644337dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7d34f5aa6c58e1444adc372ba830cdabe8a1225140e9b06b14b45c644337dd->enter($__internal_ea7d34f5aa6c58e1444adc372ba830cdabe8a1225140e9b06b14b45c644337dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <a class=\"flat-buttons active\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\"  style=\"padding: 23px;\">
                <span class=\"mega-title\">Employée</span>
            </a>
            <a class=\"flat-buttons\"  href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\" style=\"padding: 23px;\">
                <span class=\"mega-title\">Enseignant</span>
            </a>
            <a class=\"flat-buttons active\" href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\"  style=\"padding: 23px;\">
                <span class=\"mega-title\">Etudiant</span>
            </a>
            <a class=\"flat-buttons\"  href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise");
        echo "\"  style=\"padding: 23px;background: #087380;\">
                <span class=\"mega-title\" style=\"color:#ffffff;\">Tuteur de stage</span>
            </a>

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
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "fullName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "directeur", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Post :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "domaine", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Country :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "pays", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Address :</div>
                                                                <div class=\"detail-profile float-xs-right\">";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "adresse", array()), "html", null, true);
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
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "ville", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Tel No :</div>
                                                                <div class=\"detail-profile float-xs-right\"> ";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "tel", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Code postal :</div>
                                                                <div class=\"detail-profile float-xs-right\">";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "cp", array()), "html", null, true);
        echo "</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                            <div class=\"form-group row\">
                                                <label for=\"example-number-input\" class=\"col-2 col-form-label\">Solde</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 195
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "solde", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-datetime-local-input\" class=\"col-2 col-form-label\">Date</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-date-input\" class=\"col-2 col-form-label\">Date de création</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "created_at", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-month-input\" class=\"col-2 col-form-label\">Date de modification</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 213
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "updated_at", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"example-time-input\" class=\"col-2 col-form-label\">Type de paiement</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                                                </div>
                                            </div>

                                            <div class=\"form-group row\">
                                                <label for=\"example-time-input\" class=\"col-2 col-form-label\">Statut de paiement</label>
                                                <div class=\"col-10\">
                                                    ";
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'widget');
        echo "
                                                </div>
                                            </div>



                                            <input type=\"submit\" name=\"sendNewSms\" class=\"inputButton\"  value=\" Valider \" />
                                            ";
        // line 233
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
        
        $__internal_ea7d34f5aa6c58e1444adc372ba830cdabe8a1225140e9b06b14b45c644337dd->leave($__internal_ea7d34f5aa6c58e1444adc372ba830cdabe8a1225140e9b06b14b45c644337dd_prof);

        
        $__internal_ef908e0eba611a0a15b1170d5fb23747a26a882f9740d61c0c8a6476c9d96c56->leave($__internal_ef908e0eba611a0a15b1170d5fb23747a26a882f9740d61c0c8a6476c9d96c56_prof);

    }

    // line 249
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_f519c014daf5234d0938698821dde01ab3fc178804555dc46bd61540558dcd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f519c014daf5234d0938698821dde01ab3fc178804555dc46bd61540558dcd3d->enter($__internal_f519c014daf5234d0938698821dde01ab3fc178804555dc46bd61540558dcd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_f8ab2f1a6abe064f2284d7e41fb5848a819c1944070b0fdc9bb5f838153fe880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ab2f1a6abe064f2284d7e41fb5848a819c1944070b0fdc9bb5f838153fe880->enter($__internal_f8ab2f1a6abe064f2284d7e41fb5848a819c1944070b0fdc9bb5f838153fe880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 250
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/js/layout.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 273
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
        
        $__internal_f8ab2f1a6abe064f2284d7e41fb5848a819c1944070b0fdc9bb5f838153fe880->leave($__internal_f8ab2f1a6abe064f2284d7e41fb5848a819c1944070b0fdc9bb5f838153fe880_prof);

        
        $__internal_f519c014daf5234d0938698821dde01ab3fc178804555dc46bd61540558dcd3d->leave($__internal_f519c014daf5234d0938698821dde01ab3fc178804555dc46bd61540558dcd3d_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/entreprise:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 273,  546 => 272,  542 => 271,  538 => 270,  534 => 269,  530 => 268,  526 => 267,  522 => 266,  518 => 265,  514 => 264,  510 => 263,  506 => 262,  502 => 261,  498 => 260,  494 => 259,  490 => 258,  486 => 257,  482 => 256,  478 => 255,  474 => 254,  470 => 253,  466 => 252,  462 => 251,  457 => 250,  448 => 249,  422 => 233,  412 => 226,  402 => 219,  393 => 213,  384 => 207,  375 => 201,  366 => 195,  359 => 191,  350 => 185,  343 => 181,  336 => 177,  319 => 163,  312 => 159,  305 => 155,  296 => 151,  248 => 106,  242 => 103,  236 => 100,  230 => 97,  225 => 94,  216 => 93,  204 => 91,  200 => 90,  196 => 89,  192 => 88,  188 => 87,  184 => 86,  180 => 85,  176 => 84,  172 => 83,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  152 => 78,  148 => 77,  144 => 76,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
            <a class=\"flat-buttons active\" href=\"{{ path('admin_Employee') }}\"  style=\"padding: 23px;\">
                <span class=\"mega-title\">Employée</span>
            </a>
            <a class=\"flat-buttons\"  href=\"{{ path('admin_Enseignant') }}\" style=\"padding: 23px;\">
                <span class=\"mega-title\">Enseignant</span>
            </a>
            <a class=\"flat-buttons active\" href=\"{{ path('admin_Etudiant') }}\"  style=\"padding: 23px;\">
                <span class=\"mega-title\">Etudiant</span>
            </a>
            <a class=\"flat-buttons\"  href=\"{{ path('admin_Entreprise') }}\"  style=\"padding: 23px;background: #087380;\">
                <span class=\"mega-title\" style=\"color:#ffffff;\">Tuteur de stage</span>
            </a>

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
                                        <div class=\"content\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <h4 class=\"page-content-title\">Personal Information</h4>
                                                    <div class=\"divider15\"></div>
                                                    <div class=\"personal-info-box\">
                                                        <div class=\"row\">
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">First Name :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ entreprise.fullName }} {{ entreprise.directeur }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Post :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ entreprise.domaine }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Country :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ entreprise.pays }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Address :</div>
                                                                <div class=\"detail-profile float-xs-right\">{{ entreprise.adresse }}
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
                                                                <div class=\"detail-profile float-xs-right\">{{ entreprise.ville }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Tel No :</div>
                                                                <div class=\"detail-profile float-xs-right\"> {{ entreprise.tel }}</div>
                                                            </div>
                                                            <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                                <div class=\"left-name-profile float-xs-left\">Code postal :</div>
                                                                <div class=\"detail-profile float-xs-right\">{{ entreprise.cp }}</div>
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
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/entreprise\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        });
    </script>
{% endblock %}", "ERPBundle:Admin/Membre/entreprise:show.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/entreprise/show.html.twig");
    }
}
