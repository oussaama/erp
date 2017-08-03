<?php

/* ERPBundle:Admin/Membre/etudiant:showDetail.html.twig */
class __TwigTemplate_0d9f116cacfc718ba82e142359d6260815e959af826381c78280137280fac722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:showDetail.html.twig", 1);
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
        $__internal_10998fc41a6bac15e60e7622c27fa5c595c3ff6a20fb3d82fbfb87353b61c129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10998fc41a6bac15e60e7622c27fa5c595c3ff6a20fb3d82fbfb87353b61c129->enter($__internal_10998fc41a6bac15e60e7622c27fa5c595c3ff6a20fb3d82fbfb87353b61c129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:showDetail.html.twig"));

        $__internal_0367bb54d3703d7f12a30ca67a78e631290b610d03c500243550cf1efdb877dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0367bb54d3703d7f12a30ca67a78e631290b610d03c500243550cf1efdb877dc->enter($__internal_0367bb54d3703d7f12a30ca67a78e631290b610d03c500243550cf1efdb877dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:showDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10998fc41a6bac15e60e7622c27fa5c595c3ff6a20fb3d82fbfb87353b61c129->leave($__internal_10998fc41a6bac15e60e7622c27fa5c595c3ff6a20fb3d82fbfb87353b61c129_prof);

        
        $__internal_0367bb54d3703d7f12a30ca67a78e631290b610d03c500243550cf1efdb877dc->leave($__internal_0367bb54d3703d7f12a30ca67a78e631290b610d03c500243550cf1efdb877dc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac793a3f4ef0455c7c06109f907e7f2d5c0f2ee23db8b93d5ad5407ada0d13a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac793a3f4ef0455c7c06109f907e7f2d5c0f2ee23db8b93d5ad5407ada0d13a9->enter($__internal_ac793a3f4ef0455c7c06109f907e7f2d5c0f2ee23db8b93d5ad5407ada0d13a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4253cd823e2587201099bb59437a8c4abd09621f515ce77dd0c04ef59fd0074e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4253cd823e2587201099bb59437a8c4abd09621f515ce77dd0c04ef59fd0074e->enter($__internal_4253cd823e2587201099bb59437a8c4abd09621f515ce77dd0c04ef59fd0074e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_4253cd823e2587201099bb59437a8c4abd09621f515ce77dd0c04ef59fd0074e->leave($__internal_4253cd823e2587201099bb59437a8c4abd09621f515ce77dd0c04ef59fd0074e_prof);

        
        $__internal_ac793a3f4ef0455c7c06109f907e7f2d5c0f2ee23db8b93d5ad5407ada0d13a9->leave($__internal_ac793a3f4ef0455c7c06109f907e7f2d5c0f2ee23db8b93d5ad5407ada0d13a9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cad8c733ffe76b560251490cf4860cf1084b64933451762dac49a754b145da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cad8c733ffe76b560251490cf4860cf1084b64933451762dac49a754b145da6->enter($__internal_4cad8c733ffe76b560251490cf4860cf1084b64933451762dac49a754b145da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec65df07907161ec54d7ab4fc99ec62665333e6a77df4928d23dc7dc8ce94711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec65df07907161ec54d7ab4fc99ec62665333e6a77df4928d23dc7dc8ce94711->enter($__internal_ec65df07907161ec54d7ab4fc99ec62665333e6a77df4928d23dc7dc8ce94711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        \$('#user').addClass('active');
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link id=\"site-color\" rel=\"stylesheet\"
          href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/css/color/light/color-default.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/css-hamburgers/dist/hamburgers.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/magnific-popup/dist/magnific-popup.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        #sidebar {
            margin-top: -4px;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }

    </style>
";
        
        $__internal_ec65df07907161ec54d7ab4fc99ec62665333e6a77df4928d23dc7dc8ce94711->leave($__internal_ec65df07907161ec54d7ab4fc99ec62665333e6a77df4928d23dc7dc8ce94711_prof);

        
        $__internal_4cad8c733ffe76b560251490cf4860cf1084b64933451762dac49a754b145da6->leave($__internal_4cad8c733ffe76b560251490cf4860cf1084b64933451762dac49a754b145da6_prof);

    }

    // line 111
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_e86c15360c09e26825f2cd6ee8cb6f89a53ce22961563e16f3f012a144200928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86c15360c09e26825f2cd6ee8cb6f89a53ce22961563e16f3f012a144200928->enter($__internal_e86c15360c09e26825f2cd6ee8cb6f89a53ce22961563e16f3f012a144200928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_0933584c5b29e8816dff839f402314022f7ee9c316e1d1ea5ec2d1ccab031471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0933584c5b29e8816dff839f402314022f7ee9c316e1d1ea5ec2d1ccab031471->enter($__internal_0933584c5b29e8816dff839f402314022f7ee9c316e1d1ea5ec2d1ccab031471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 140
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
        
        $__internal_0933584c5b29e8816dff839f402314022f7ee9c316e1d1ea5ec2d1ccab031471->leave($__internal_0933584c5b29e8816dff839f402314022f7ee9c316e1d1ea5ec2d1ccab031471_prof);

        
        $__internal_e86c15360c09e26825f2cd6ee8cb6f89a53ce22961563e16f3f012a144200928->leave($__internal_e86c15360c09e26825f2cd6ee8cb6f89a53ce22961563e16f3f012a144200928_prof);

    }

    // line 153
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fbe43c600ba39a19a6f6915689a4061b1114dff7b379fd46ea12c169d48a756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbe43c600ba39a19a6f6915689a4061b1114dff7b379fd46ea12c169d48a756->enter($__internal_4fbe43c600ba39a19a6f6915689a4061b1114dff7b379fd46ea12c169d48a756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ed87a952401a6bfd47326f650c73a1b6fc404b2ea3b1c5571a2eae48ce3e647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed87a952401a6bfd47326f650c73a1b6fc404b2ea3b1c5571a2eae48ce3e647->enter($__internal_5ed87a952401a6bfd47326f650c73a1b6fc404b2ea3b1c5571a2eae48ce3e647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 154
        echo "<section id=\"content-wrapper\" class=\"form-elements\">
    <div class=\"site-content-title\">
        <ol class=\"breadcrumb float-xs-right\">
            <li class=\"breadcrumb-item\">
                <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                <a href=\"#\">Home</a>
            </li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
            <li class=\"breadcrumb-item active\">detail</li>
        </ol>

    </div>

    <div class=\"col-xs-12 lg-dashboard-v2\">
        <div class=\"content\">
            <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
            <h4 class=\"page-content-title\">Personal Information</h4>
            <div class=\"divider15\"></div>
            <div class=\"personal-info-box\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"image-profile\">
                            <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/camera.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\">
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\"> Nom & Prenom :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Cin :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cin", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">DateNaissance :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 190
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "naissance", array()), "d-M-Y"), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 194
        if (($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "sex", array()) == 1)) {
            echo "Homme";
        } else {
            echo " Femme ";
        }
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Email :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "adresse", array()), "html", null, true);
        echo "
                                , ";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cp", array()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "pays", array()), "name", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Tel :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "tel", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Niveau d'études :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveauEtude", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Diplome qui souhaite :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "diplome", array()), "nom", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Filiére :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "filiere", array()), "filiere", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Specicialite :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "specialite", array()), "nomSpecialite", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Niveau :</div>
                            <div class=\"detail-profile float-xs-right\">";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveau", array()), "niveau", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"divider15\"></div>
                        <a>
                            <button type=\"button\" class=\"btn btn-xs btn-primary btn-xs desactivt pull-right\"
                                    data-id=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo "\" data-target=\"#view-validation\" data-toggle=\"modal\">
                                Validate
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-validation\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Validation Etudiant</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <div class=\"profile-icon text-xs-center\">
                                    <p>confirmer cette etudiant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn\" id=\"validate\">Confirmer
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary refuse\">Refuser</button>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_5ed87a952401a6bfd47326f650c73a1b6fc404b2ea3b1c5571a2eae48ce3e647->leave($__internal_5ed87a952401a6bfd47326f650c73a1b6fc404b2ea3b1c5571a2eae48ce3e647_prof);

        
        $__internal_4fbe43c600ba39a19a6f6915689a4061b1114dff7b379fd46ea12c169d48a756->leave($__internal_4fbe43c600ba39a19a6f6915689a4061b1114dff7b379fd46ea12c169d48a756_prof);

    }

    // line 272
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_48c86aa2742c019de563e2753918ffc947b8fc64c6ae4793982684d177814369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c86aa2742c019de563e2753918ffc947b8fc64c6ae4793982684d177814369->enter($__internal_48c86aa2742c019de563e2753918ffc947b8fc64c6ae4793982684d177814369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_09d6785837207635724bb9b9f98de5b45575044573d64c39abaf3f0346651057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d6785837207635724bb9b9f98de5b45575044573d64c39abaf3f0346651057->enter($__internal_09d6785837207635724bb9b9f98de5b45575044573d64c39abaf3f0346651057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 273
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/lightbox.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('#user').addClass('active');
            \$('.gallery-group').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
                    titleSrc: function (item) {
                        return item.el.attr('title');
                    }
                }
            });

        </script>
        <script>
            \$(\"#animationGallery\").magnificPopup({
                delegate: \"a\",
                type: \"image\",
                closeOnContentClick: !1,
                closeBtnInside: !1,
                mainClass: \"mfp-with-zoom mfp-img-mobile\",
                image: {
                    verticalFit: !0,
                    titleSrc: function (item) {
                        return item.el.attr(\"title\") + ' · <a class=\"image-source-link\" href=\"' + item.el.attr(\"data-source\") + '\" target=\"_blank\">image source</a>'
                    }
                },
                gallery: {
                    enabled: !0
                },
                zoom: {
                    enabled: !0,
                    duration: 300,
                    opener: function (element) {
                        return element.find(\"img\")
                    }
                }
            });
        </script>
        <script>
            \$('#validate').click(function () {
                id =";
        // line 362
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo ";
                \$.ajax({
                    url: Routing.generate('admin_Etudiant_validation', {'id': id, 'etat': 1}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
            id =";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo ";
            \$('.refuse').click(function () {
                \$.ajax({
                    url: Routing.generate('admin_Etudiant_validation', {'id': id, 'etat': 0}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        </script>
    ";
        
        $__internal_09d6785837207635724bb9b9f98de5b45575044573d64c39abaf3f0346651057->leave($__internal_09d6785837207635724bb9b9f98de5b45575044573d64c39abaf3f0346651057_prof);

        
        $__internal_48c86aa2742c019de563e2753918ffc947b8fc64c6ae4793982684d177814369->leave($__internal_48c86aa2742c019de563e2753918ffc947b8fc64c6ae4793982684d177814369_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:showDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 374,  680 => 362,  628 => 313,  624 => 312,  619 => 310,  614 => 308,  609 => 306,  604 => 304,  599 => 302,  594 => 300,  589 => 298,  585 => 297,  581 => 296,  577 => 295,  572 => 293,  567 => 291,  562 => 289,  557 => 287,  553 => 286,  549 => 285,  545 => 284,  541 => 283,  537 => 282,  532 => 280,  527 => 278,  522 => 276,  517 => 274,  512 => 273,  503 => 272,  454 => 233,  446 => 228,  439 => 224,  432 => 220,  425 => 216,  418 => 212,  410 => 207,  399 => 203,  395 => 202,  388 => 198,  377 => 194,  370 => 190,  363 => 186,  354 => 182,  345 => 176,  321 => 154,  312 => 153,  289 => 140,  279 => 133,  270 => 127,  261 => 121,  250 => 112,  241 => 111,  219 => 99,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  198 => 93,  193 => 91,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  155 => 80,  151 => 79,  147 => 78,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
        \$('#user').addClass('active');
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/magnific-popup/dist/magnific-popup.min.css') }}\">
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
            <li class=\"breadcrumb-item active\">detail</li>
        </ol>

    </div>

    <div class=\"col-xs-12 lg-dashboard-v2\">
        <div class=\"content\">
            <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
            <h4 class=\"page-content-title\">Personal Information</h4>
            <div class=\"divider15\"></div>
            <div class=\"personal-info-box\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"image-profile\">
                            <img src=\"{{ asset('assets/global/image/camera.jpg') }}\" alt=\"Profile image\">
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\"> Nom & Prenom :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.nom }} {{ etudiant.prenom }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Cin :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.cin }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">DateNaissance :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.naissance | date('d-M-Y') }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                            <div class=\"detail-profile float-xs-right\">{% if etudiant.sex == 1 %}Homme{% else %} Femme {% endif %}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Email :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.email }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.adresse }}
                                , {{ etudiant.ville }} {{ etudiant.cp }} , {{ etudiant.pays.name }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Tel :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.tel }}
                            </div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Niveau d'études :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.niveauEtude }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Diplome qui souhaite :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.diplome.nom }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Filiére :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.filiere.filiere }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Specicialite :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.specialite.nomSpecialite }}</div>
                        </div>
                        <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                            <div class=\"left-name-profile float-xs-left\">Niveau :</div>
                            <div class=\"detail-profile float-xs-right\">{{ etudiant.niveau.niveau }}</div>
                        </div>
                        <div class=\"divider15\"></div>
                        <a>
                            <button type=\"button\" class=\"btn btn-xs btn-primary btn-xs desactivt pull-right\"
                                    data-id=\"{{ etudiant.id }}\" data-target=\"#view-validation\" data-toggle=\"modal\">
                                Validate
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-validation\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Validation Etudiant</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\">
                                <div class=\"profile-icon text-xs-center\">
                                    <p>confirmer cette etudiant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn\" id=\"validate\">Confirmer
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary refuse\">Refuser</button>
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
        <script type=\"text/javascript\"
                src=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.js') }}\"></script>
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
        <script type=\"text/javascript\"
                src=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v4.min.js') }}\"></script>
        <script type=\"text/javascript\"
                src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
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
        <script type=\"text/javascript\"
                src=\"{{ asset('assets/global/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/lightbox.js') }}\"></script>
        <script>
            \$('#user').addClass('active');
            \$('.gallery-group').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
                    titleSrc: function (item) {
                        return item.el.attr('title');
                    }
                }
            });

        </script>
        <script>
            \$(\"#animationGallery\").magnificPopup({
                delegate: \"a\",
                type: \"image\",
                closeOnContentClick: !1,
                closeBtnInside: !1,
                mainClass: \"mfp-with-zoom mfp-img-mobile\",
                image: {
                    verticalFit: !0,
                    titleSrc: function (item) {
                        return item.el.attr(\"title\") + ' · <a class=\"image-source-link\" href=\"' + item.el.attr(\"data-source\") + '\" target=\"_blank\">image source</a>'
                    }
                },
                gallery: {
                    enabled: !0
                },
                zoom: {
                    enabled: !0,
                    duration: 300,
                    opener: function (element) {
                        return element.find(\"img\")
                    }
                }
            });
        </script>
        <script>
            \$('#validate').click(function () {
                id ={{ etudiant.id }};
                \$.ajax({
                    url: Routing.generate('admin_Etudiant_validation', {'id': id, 'etat': 1}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
            id ={{ etudiant.id }};
            \$('.refuse').click(function () {
                \$.ajax({
                    url: Routing.generate('admin_Etudiant_validation', {'id': id, 'etat': 0}),
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });
        </script>
    {% endblock %}
", "ERPBundle:Admin/Membre/etudiant:showDetail.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/showDetail.html.twig");
    }
}
