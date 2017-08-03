<?php

/* ERPBundle:Admin/Membre/etudiant:tranche.html.twig */
class __TwigTemplate_5acf3ac23d0a7608f5730eb51d9d9f4794167bac95762a856bbb5d50ecee75fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:tranche.html.twig", 1);
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
        $__internal_b032c1daf8006539866a144e130a9f50815b1f88ca70ce0fe68fc8069876b04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b032c1daf8006539866a144e130a9f50815b1f88ca70ce0fe68fc8069876b04c->enter($__internal_b032c1daf8006539866a144e130a9f50815b1f88ca70ce0fe68fc8069876b04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:tranche.html.twig"));

        $__internal_1de7eba7d770f54f702cb48cfc012c58683416e8ecf9bceb799e711966a436da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de7eba7d770f54f702cb48cfc012c58683416e8ecf9bceb799e711966a436da->enter($__internal_1de7eba7d770f54f702cb48cfc012c58683416e8ecf9bceb799e711966a436da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:tranche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b032c1daf8006539866a144e130a9f50815b1f88ca70ce0fe68fc8069876b04c->leave($__internal_b032c1daf8006539866a144e130a9f50815b1f88ca70ce0fe68fc8069876b04c_prof);

        
        $__internal_1de7eba7d770f54f702cb48cfc012c58683416e8ecf9bceb799e711966a436da->leave($__internal_1de7eba7d770f54f702cb48cfc012c58683416e8ecf9bceb799e711966a436da_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac793ac1fad97367842a9840e9a82089fc6ad1bc279f0f28f1507524e710bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac793ac1fad97367842a9840e9a82089fc6ad1bc279f0f28f1507524e710bfe->enter($__internal_5ac793ac1fad97367842a9840e9a82089fc6ad1bc279f0f28f1507524e710bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58cb1be7e79aad2a07a281e3eaf5e0f01aa8781cf6df7b78814a3761409812d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cb1be7e79aad2a07a281e3eaf5e0f01aa8781cf6df7b78814a3761409812d7->enter($__internal_58cb1be7e79aad2a07a281e3eaf5e0f01aa8781cf6df7b78814a3761409812d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Tranches Paiement";
        
        $__internal_58cb1be7e79aad2a07a281e3eaf5e0f01aa8781cf6df7b78814a3761409812d7->leave($__internal_58cb1be7e79aad2a07a281e3eaf5e0f01aa8781cf6df7b78814a3761409812d7_prof);

        
        $__internal_5ac793ac1fad97367842a9840e9a82089fc6ad1bc279f0f28f1507524e710bfe->leave($__internal_5ac793ac1fad97367842a9840e9a82089fc6ad1bc279f0f28f1507524e710bfe_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f6c2cf26a822b84a3c4b54eaf69a740653df6acb19aa856f2c7cf4624e0848d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6c2cf26a822b84a3c4b54eaf69a740653df6acb19aa856f2c7cf4624e0848d->enter($__internal_7f6c2cf26a822b84a3c4b54eaf69a740653df6acb19aa856f2c7cf4624e0848d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_72e159f9bb2d5f64be203bf145b43024e4cb0dbcdb5ace16ea599a62a8129dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e159f9bb2d5f64be203bf145b43024e4cb0dbcdb5ace16ea599a62a8129dd4->enter($__internal_72e159f9bb2d5f64be203bf145b43024e4cb0dbcdb5ace16ea599a62a8129dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

        .datepicker-switch {
            color: #087380;
        }

        .next, .prev {
            color: #087310;
        }
    </style>
";
        
        $__internal_72e159f9bb2d5f64be203bf145b43024e4cb0dbcdb5ace16ea599a62a8129dd4->leave($__internal_72e159f9bb2d5f64be203bf145b43024e4cb0dbcdb5ace16ea599a62a8129dd4_prof);

        
        $__internal_7f6c2cf26a822b84a3c4b54eaf69a740653df6acb19aa856f2c7cf4624e0848d->leave($__internal_7f6c2cf26a822b84a3c4b54eaf69a740653df6acb19aa856f2c7cf4624e0848d_prof);

    }

    // line 117
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_198260c2b7daeecdfa3beda527234031925a7e7c3050a80831d1d0f5ac1cbaaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198260c2b7daeecdfa3beda527234031925a7e7c3050a80831d1d0f5ac1cbaaa->enter($__internal_198260c2b7daeecdfa3beda527234031925a7e7c3050a80831d1d0f5ac1cbaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_28951025410f82f9cf3e244b86041654dcdef1108c4ba7812b6bbf66a111c14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28951025410f82f9cf3e244b86041654dcdef1108c4ba7812b6bbf66a111c14b->enter($__internal_28951025410f82f9cf3e244b86041654dcdef1108c4ba7812b6bbf66a111c14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 118
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
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 146
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
        
        $__internal_28951025410f82f9cf3e244b86041654dcdef1108c4ba7812b6bbf66a111c14b->leave($__internal_28951025410f82f9cf3e244b86041654dcdef1108c4ba7812b6bbf66a111c14b_prof);

        
        $__internal_198260c2b7daeecdfa3beda527234031925a7e7c3050a80831d1d0f5ac1cbaaa->leave($__internal_198260c2b7daeecdfa3beda527234031925a7e7c3050a80831d1d0f5ac1cbaaa_prof);

    }

    // line 159
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8af9999f43289057fe3679976139516acd56ac99f0b7c527734bd7ee0002786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8af9999f43289057fe3679976139516acd56ac99f0b7c527734bd7ee0002786->enter($__internal_f8af9999f43289057fe3679976139516acd56ac99f0b7c527734bd7ee0002786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77c5ddabe6969569d834cfd36b078a70a10347fc92a3c3f0ea46ebb2da4c73c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c5ddabe6969569d834cfd36b078a70a10347fc92a3c3f0ea46ebb2da4c73c6->enter($__internal_77c5ddabe6969569d834cfd36b078a70a10347fc92a3c3f0ea46ebb2da4c73c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 160
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">ajout tranche</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Tranches</a></li>
                <li class=\"breadcrumb-item active\"> ajout</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajout tranche</h4>
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
                                        <div class=\"dashboard-box col-lg-12  col-xs-12 col-xl-12\">
                                            ";
        // line 199
        if ((($context["msg"] ?? $this->getContext($context, "msg")) != null)) {
            // line 200
            echo "                                                <div class=\"alert alert-danger\">
                                                    ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["msg"] ?? $this->getContext($context, "msg")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 202
                echo "                                                    <center><span class=\"text-center\">";
                echo twig_escape_filter($this->env, $context["m"], "html", null, true);
                echo "</span></center>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                                                </div>
                                            ";
        }
        // line 206
        echo "                                            <form action=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant_slice", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\"
                                                  id=\"addTranche\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4 input-form\">
                                                        <label>Total</label>
                                                        <input type=\"text\" class=\"form-control\" name=\"total\" id=\"\"
                                                               placeholder=\"saisie total\" required/>
                                                    </div>
                                                    <div class=\"col-md-4 input-form\">
                                                        <label>Frais d'inscription</label>
                                                        <input type=\"number\" class=\"form-control\" name=\"frais\"
                                                               placeholder=\"saisie frais inscription\" required/>
                                                    </div>
                                                    <div class=\"col-md-4 input-form\">
                                                        <label>Nombre de tranche</label>
                                                        <input type=\"number\" class=\"form-control\" name=\"nbr\" id=\"nbr\"
                                                               placeholder=\"saisie nombre de tranche\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"tranche\"></div>
                                                </div>
                                                <div class=\"divider15\"></div>
                                                <div>
                                                    <input type=\"submit\" value=\"ajouter\"
                                                           class=\"btn btn-primary site-btn pull-right\"
                                                           id=\"addClassButton\" name=\"submit\"/>
                                                </div>
                                                <input type=\"hidden\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
                                            </form>
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
        
        $__internal_77c5ddabe6969569d834cfd36b078a70a10347fc92a3c3f0ea46ebb2da4c73c6->leave($__internal_77c5ddabe6969569d834cfd36b078a70a10347fc92a3c3f0ea46ebb2da4c73c6_prof);

        
        $__internal_f8af9999f43289057fe3679976139516acd56ac99f0b7c527734bd7ee0002786->leave($__internal_f8af9999f43289057fe3679976139516acd56ac99f0b7c527734bd7ee0002786_prof);

    }

    // line 247
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_27f031c57f99de726f720c4e2aa6bcedb93c0c4dbf3ca3bfc0c6b27f627c6e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f031c57f99de726f720c4e2aa6bcedb93c0c4dbf3ca3bfc0c6b27f627c6e4a->enter($__internal_27f031c57f99de726f720c4e2aa6bcedb93c0c4dbf3ca3bfc0c6b27f627c6e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_d38a2e7a5170ad27158a5e1948233c3a880dd9fec339a0d0e3536117fec85e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38a2e7a5170ad27158a5e1948233c3a880dd9fec339a0d0e3536117fec85e6b->enter($__internal_d38a2e7a5170ad27158a5e1948233c3a880dd9fec339a0d0e3536117fec85e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 248
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
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
    <script type=\"text/javascript\"
            src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\"#nbr\").on('keyup', function () {
            nb = \$(\"#nbr\").val();
            if (nb < 10) {
                str = \"\";
                for (i = 0; i < nb; i++) {
                    x = i + 1;
                    str += '<div class=\"col-md-2\"><label style=\" margin-top:18px;font-weight:500;\">Tranche ' + x + '</label></div>' +
                        '<div class=\"col-md-4\"><input type=\"number\" class=\"form-control ta' + i + '\" style=\" margin-top:10px;\" placeholder=\"saisie Montant de tranche '+x+'\" name=\"ta' + i + '\" required/></div>' +
                        '<div class=\"col-md-3\"><input type=\"date\" class=\"form-control js-datepicker\" style=\" margin-top:10px;\" placeholder=\"saisie date debut\" id=\"deb' + i + '\" name=\"deb' + i + '\" required/></div>' +
                        '<div class=\"col-md-3\"><input type=\"date\" class=\"form-control js-datepicker\" style=\" margin-top:10px;\" placeholder=\"saisie date fin\" id=\"fin' + i + '\" name=\"fin' + i + '\" required/></div>';
                }
                str+='<div class=\"col-md-10\"></div><div class=\"col-md-2\"><span>Total : <span id=\"solde\">0</span></div>';
                \$('.tranche').html(str);
            } else {
                alert('nombre sup a 10');
            }
        });
    </script>
    <script>
        \$('.ta0').onfocusout(function(){
            alert(\$('.ta0').val());
            /* sold=0;
             for( i=1;i<=nb;i++){
             sold+=\$('ta'+i).val();
             }
             \$(\"#solde\").html(sold);*/
        });
    </script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
    <script>
        \$(document).ready(function () {
            // configure the bootstrap datepicker
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
            });
        });
    </script>
    <script>\$('#user').addClass('active');</script>
";
        
        $__internal_d38a2e7a5170ad27158a5e1948233c3a880dd9fec339a0d0e3536117fec85e6b->leave($__internal_d38a2e7a5170ad27158a5e1948233c3a880dd9fec339a0d0e3536117fec85e6b_prof);

        
        $__internal_27f031c57f99de726f720c4e2aa6bcedb93c0c4dbf3ca3bfc0c6b27f627c6e4a->leave($__internal_27f031c57f99de726f720c4e2aa6bcedb93c0c4dbf3ca3bfc0c6b27f627c6e4a_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:tranche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 277,  546 => 276,  542 => 275,  538 => 274,  534 => 273,  530 => 272,  526 => 271,  522 => 270,  518 => 269,  514 => 268,  510 => 267,  505 => 265,  500 => 263,  495 => 261,  491 => 260,  487 => 259,  483 => 258,  479 => 257,  475 => 256,  470 => 254,  466 => 253,  461 => 251,  456 => 249,  451 => 248,  442 => 247,  419 => 234,  387 => 206,  383 => 204,  374 => 202,  370 => 201,  367 => 200,  365 => 199,  324 => 160,  315 => 159,  292 => 146,  282 => 139,  273 => 133,  264 => 127,  253 => 118,  244 => 117,  214 => 97,  210 => 96,  206 => 95,  202 => 94,  197 => 92,  192 => 90,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Tranches Paiement{% endblock %}
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

        .datepicker-switch {
            color: #087380;
        }

        .next, .prev {
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
            <h2 class=\"float-xs-left content-title-main\">ajout tranche</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Tranches</a></li>
                <li class=\"breadcrumb-item active\"> ajout</li>
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
                                            <h4 class=\"page-content-title float-xs-left\">Ajout tranche</h4>
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
                                        <div class=\"dashboard-box col-lg-12  col-xs-12 col-xl-12\">
                                            {% if msg != null %}
                                                <div class=\"alert alert-danger\">
                                                    {% for m in msg %}
                                                    <center><span class=\"text-center\">{{ m }}</span></center>
                                                    {% endfor %}
                                                </div>
                                            {% endif %}
                                            <form action=\" {{ path('admin_Etudiant_slice',{'id':id}) }}\" method=\"POST\"
                                                  id=\"addTranche\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4 input-form\">
                                                        <label>Total</label>
                                                        <input type=\"text\" class=\"form-control\" name=\"total\" id=\"\"
                                                               placeholder=\"saisie total\" required/>
                                                    </div>
                                                    <div class=\"col-md-4 input-form\">
                                                        <label>Frais d'inscription</label>
                                                        <input type=\"number\" class=\"form-control\" name=\"frais\"
                                                               placeholder=\"saisie frais inscription\" required/>
                                                    </div>
                                                    <div class=\"col-md-4 input-form\">
                                                        <label>Nombre de tranche</label>
                                                        <input type=\"number\" class=\"form-control\" name=\"nbr\" id=\"nbr\"
                                                               placeholder=\"saisie nombre de tranche\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"tranche\"></div>
                                                </div>
                                                <div class=\"divider15\"></div>
                                                <div>
                                                    <input type=\"submit\" value=\"ajouter\"
                                                           class=\"btn btn-primary site-btn pull-right\"
                                                           id=\"addClassButton\" name=\"submit\"/>
                                                </div>
                                                <input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
                                            </form>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
    <script>
        \$(\"#nbr\").on('keyup', function () {
            nb = \$(\"#nbr\").val();
            if (nb < 10) {
                str = \"\";
                for (i = 0; i < nb; i++) {
                    x = i + 1;
                    str += '<div class=\"col-md-2\"><label style=\" margin-top:18px;font-weight:500;\">Tranche ' + x + '</label></div>' +
                        '<div class=\"col-md-4\"><input type=\"number\" class=\"form-control ta' + i + '\" style=\" margin-top:10px;\" placeholder=\"saisie Montant de tranche '+x+'\" name=\"ta' + i + '\" required/></div>' +
                        '<div class=\"col-md-3\"><input type=\"date\" class=\"form-control js-datepicker\" style=\" margin-top:10px;\" placeholder=\"saisie date debut\" id=\"deb' + i + '\" name=\"deb' + i + '\" required/></div>' +
                        '<div class=\"col-md-3\"><input type=\"date\" class=\"form-control js-datepicker\" style=\" margin-top:10px;\" placeholder=\"saisie date fin\" id=\"fin' + i + '\" name=\"fin' + i + '\" required/></div>';
                }
                str+='<div class=\"col-md-10\"></div><div class=\"col-md-2\"><span>Total : <span id=\"solde\">0</span></div>';
                \$('.tranche').html(str);
            } else {
                alert('nombre sup a 10');
            }
        });
    </script>
    <script>
        \$('.ta0').onfocusout(function(){
            alert(\$('.ta0').val());
            /* sold=0;
             for( i=1;i<=nb;i++){
             sold+=\$('ta'+i).val();
             }
             \$(\"#solde\").html(sold);*/
        });
    </script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
    <script>
        \$(document).ready(function () {
            // configure the bootstrap datepicker
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd',
            });
        });
    </script>
    <script>\$('#user').addClass('active');</script>
{% endblock %}

", "ERPBundle:Admin/Membre/etudiant:tranche.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/tranche.html.twig");
    }
}
