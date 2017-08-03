<?php

/* ERPBundle:Front/enseignant:index.html.twig */
class __TwigTemplate_5e2d89fb5a76d9977cc4c728d3fdf215869e2897c0ca5f07e03f588278442432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/enseignant:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baa7d988fae7241299d595150d16adc2cde6c261a81f96542940c7aae3fb7372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa7d988fae7241299d595150d16adc2cde6c261a81f96542940c7aae3fb7372->enter($__internal_baa7d988fae7241299d595150d16adc2cde6c261a81f96542940c7aae3fb7372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/enseignant:index.html.twig"));

        $__internal_3c4fef58b5c8e26532324c32a2220458bc0c8bd2b7f17641715d392df75834e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4fef58b5c8e26532324c32a2220458bc0c8bd2b7f17641715d392df75834e8->enter($__internal_3c4fef58b5c8e26532324c32a2220458bc0c8bd2b7f17641715d392df75834e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/enseignant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa7d988fae7241299d595150d16adc2cde6c261a81f96542940c7aae3fb7372->leave($__internal_baa7d988fae7241299d595150d16adc2cde6c261a81f96542940c7aae3fb7372_prof);

        
        $__internal_3c4fef58b5c8e26532324c32a2220458bc0c8bd2b7f17641715d392df75834e8->leave($__internal_3c4fef58b5c8e26532324c32a2220458bc0c8bd2b7f17641715d392df75834e8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_28a5ca4298764ba1c1443e0259ba5edab25a625bcfcdd86192df860954cda706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a5ca4298764ba1c1443e0259ba5edab25a625bcfcdd86192df860954cda706->enter($__internal_28a5ca4298764ba1c1443e0259ba5edab25a625bcfcdd86192df860954cda706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a3f36487a83c93fbbb3f032733b7a226511d935982e82c4f371cd0b181d1144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3f36487a83c93fbbb3f032733b7a226511d935982e82c4f371cd0b181d1144->enter($__internal_3a3f36487a83c93fbbb3f032733b7a226511d935982e82c4f371cd0b181d1144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE - ENSEIGNANT";
        
        $__internal_3a3f36487a83c93fbbb3f032733b7a226511d935982e82c4f371cd0b181d1144->leave($__internal_3a3f36487a83c93fbbb3f032733b7a226511d935982e82c4f371cd0b181d1144_prof);

        
        $__internal_28a5ca4298764ba1c1443e0259ba5edab25a625bcfcdd86192df860954cda706->leave($__internal_28a5ca4298764ba1c1443e0259ba5edab25a625bcfcdd86192df860954cda706_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26a0a1d331ec5e97c24a1ed1e23f33de4dcee89b30791ee347cd38ac66187caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a0a1d331ec5e97c24a1ed1e23f33de4dcee89b30791ee347cd38ac66187caa->enter($__internal_26a0a1d331ec5e97c24a1ed1e23f33de4dcee89b30791ee347cd38ac66187caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e9443e45b2c4b0353dd260c97a557a769dcef7ed5614e4e44e9f8160b8e652e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9443e45b2c4b0353dd260c97a557a769dcef7ed5614e4e44e9f8160b8e652e4->enter($__internal_e9443e45b2c4b0353dd260c97a557a769dcef7ed5614e4e44e9f8160b8e652e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_e9443e45b2c4b0353dd260c97a557a769dcef7ed5614e4e44e9f8160b8e652e4->leave($__internal_e9443e45b2c4b0353dd260c97a557a769dcef7ed5614e4e44e9f8160b8e652e4_prof);

        
        $__internal_26a0a1d331ec5e97c24a1ed1e23f33de4dcee89b30791ee347cd38ac66187caa->leave($__internal_26a0a1d331ec5e97c24a1ed1e23f33de4dcee89b30791ee347cd38ac66187caa_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b8de36fca3b51748aaadb04a53cdd431d63b0ecdff5a4299099267415d42a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8de36fca3b51748aaadb04a53cdd431d63b0ecdff5a4299099267415d42a41->enter($__internal_8b8de36fca3b51748aaadb04a53cdd431d63b0ecdff5a4299099267415d42a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_087c056429b218e5f1a2181cecfa5a827ecc02572519c6fef64496e2c6fa778f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087c056429b218e5f1a2181cecfa5a827ecc02572519c6fef64496e2c6fa778f->enter($__internal_087c056429b218e5f1a2181cecfa5a827ecc02572519c6fef64496e2c6fa778f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Accueil | <u> Accès rapide </u> </h2>
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
            </ol>
        </div>
        <div class=\"col-md-12\">
            <div class=\"content content-blockquote\">
                <div class=\"image-blockquote alert-warning\">
                    <div class=\"img-blockquote\">
                    </div>
                    <blockquote>
                        <p class=\"text-xs-center\">Bienvenu, ";
        // line 109
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo " chez votre espace administratif</p>
                        <div class=\"border-blockquote\"></div>
                        <h5 class=\"text-xs-center\">";
        // line 111
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo " </h5>
                        <h5 class=\"text-xs-center\">Espace Enseignant</h5>
                    </blockquote>
                </div>
                <div class=\"contain-inner dashboard_v4-page\">
                    <div class=\"row\">
                        <div class=\"dashboard_v4_box_block\">
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"content\">
                                    <div class=\"dashboard_v4_box_icon float-xs-left warning_box\">
                                        <i class=\"fa fa-archive fa-5x\"></i>
                                    </div>
                                    <div class=\"dashboard_v4_box_title float-xs-right\">
                                        <h4><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_index");
        echo "\">COURS</a></h4>
                                        <p>Total des cours : <span class=\"tag tag-pill tag-warning\">";
        // line 125
        echo twig_escape_filter($this->env, ($context["result"] ?? $this->getContext($context, "result")), "html", null, true);
        echo "</span></p>
                                    </div>
                                    <br><br><br><br><br><br>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"content\">
                                    <div class=\"dashboard_v4_box_icon float-xs-left warning_box\">
                                        <i class=\"fa fa-edit fa-5x\"></i>
                                    </div>
                                    <div class=\"dashboard_v4_box_title float-xs-right\">
                                        <h4> <a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_index");
        echo "\">NOTES</a></h4>
                                        <p>Total des notes : <span class=\"tag tag-pill tag-warning\">";
        // line 140
        echo twig_escape_filter($this->env, ($context["result_note"] ?? $this->getContext($context, "result_note")), "html", null, true);
        echo "</span></p>
                                    </div>
                                    <br><br><br><br><br><br>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"content\">
                                    <div class=\"dashboard_v4_box_icon float-xs-left success_box\">
                                        <i class=\"fa fa-users fa-5x\"></i>
                                    </div>
                                    <div class=\"dashboard_v4_box_title float-xs-right\">
                                        <h4> <a href=\"";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appsense_index");
        echo "\">ABSENCES</a></h4>
                                        <p>Total des absences : <span class=\"tag tag-pill tag-success\">";
        // line 155
        echo twig_escape_filter($this->env, ($context["result_absence"] ?? $this->getContext($context, "result_absence")), "html", null, true);
        echo "</span></p>
                                    </div>
                                    <br><br><br><br><br><br>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"content\">
                                    <div class=\"dashboard_v4_box_icon float-xs-left success_box\">
                                        <i class=\"fa fa-university fa-5x\"></i>
                                    </div>
                                    <div class=\"dashboard_v4_box_title float-xs-right\">
                                        <h4> <a href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
        echo "\">EXAMENS</a></h4>
                                        <p>Total des examens principales : <span class=\"tag tag-pill tag-success\">";
        // line 170
        echo twig_escape_filter($this->env, ($context["result_examen_principale"] ?? $this->getContext($context, "result_examen_principale")), "html", null, true);
        echo "</span></p>
                                        <p>Total des examens controles : <span class=\"tag tag-pill tag-warning\">";
        // line 171
        echo twig_escape_filter($this->env, ($context["result_examen_controle"] ?? $this->getContext($context, "result_examen_controle")), "html", null, true);
        echo "</span></p>
                                    </div>
                                    <br><br><br><br><br><br>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"bars-color\" class=\"chart-height\"></div>
            </div>
        </div>
    </section>
";
        
        $__internal_087c056429b218e5f1a2181cecfa5a827ecc02572519c6fef64496e2c6fa778f->leave($__internal_087c056429b218e5f1a2181cecfa5a827ecc02572519c6fef64496e2c6fa778f_prof);

        
        $__internal_8b8de36fca3b51748aaadb04a53cdd431d63b0ecdff5a4299099267415d42a41->leave($__internal_8b8de36fca3b51748aaadb04a53cdd431d63b0ecdff5a4299099267415d42a41_prof);

    }

    // line 187
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_b7daecdc6cc2399abda31c7641fd8b8b0e48e89bda43c1c5ac10b2e0e710173d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7daecdc6cc2399abda31c7641fd8b8b0e48e89bda43c1c5ac10b2e0e710173d->enter($__internal_b7daecdc6cc2399abda31c7641fd8b8b0e48e89bda43c1c5ac10b2e0e710173d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_0c22fd2c8d68050db28357e21b4b8985f72ef029131ff4ec4dd6a25e362d1b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c22fd2c8d68050db28357e21b4b8985f72ef029131ff4ec4dd6a25e362d1b5b->enter($__internal_0c22fd2c8d68050db28357e21b4b8985f72ef029131ff4ec4dd6a25e362d1b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 188
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#dashboard').addClass('active');
    </script>
";
        
        $__internal_0c22fd2c8d68050db28357e21b4b8985f72ef029131ff4ec4dd6a25e362d1b5b->leave($__internal_0c22fd2c8d68050db28357e21b4b8985f72ef029131ff4ec4dd6a25e362d1b5b_prof);

        
        $__internal_b7daecdc6cc2399abda31c7641fd8b8b0e48e89bda43c1c5ac10b2e0e710173d->leave($__internal_b7daecdc6cc2399abda31c7641fd8b8b0e48e89bda43c1c5ac10b2e0e710173d_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/enseignant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 206,  432 => 205,  428 => 204,  424 => 203,  420 => 202,  416 => 201,  412 => 200,  408 => 199,  404 => 198,  400 => 197,  396 => 196,  392 => 195,  388 => 194,  384 => 193,  380 => 192,  376 => 191,  372 => 190,  368 => 189,  363 => 188,  354 => 187,  328 => 171,  324 => 170,  320 => 169,  303 => 155,  299 => 154,  282 => 140,  278 => 139,  261 => 125,  257 => 124,  241 => 111,  236 => 109,  217 => 92,  208 => 91,  196 => 89,  192 => 88,  188 => 87,  184 => 86,  180 => 85,  176 => 84,  172 => 83,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  152 => 78,  148 => 77,  144 => 76,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseFront.html.twig' %}
{% block title %}ESPACE - ENSEIGNANT{% endblock %}
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
{% endblock %}
{% block body %}
    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Accueil | <u> Accès rapide </u> </h2>
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
            </ol>
        </div>
        <div class=\"col-md-12\">
            <div class=\"content content-blockquote\">
                <div class=\"image-blockquote alert-warning\">
                    <div class=\"img-blockquote\">
                    </div>
                    <blockquote>
                        <p class=\"text-xs-center\">Bienvenu, {{ app.user.username |capitalize }} chez votre espace administratif</p>
                        <div class=\"border-blockquote\"></div>
                        <h5 class=\"text-xs-center\">{{ app.user.username |capitalize }} </h5>
                        <h5 class=\"text-xs-center\">Espace Enseignant</h5>
                    </blockquote>
                </div>
                <div class=\"contain-inner dashboard_v4-page\">
                    <div class=\"row\">
                        <div class=\"dashboard_v4_box_block\">
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"content\">
                                    <div class=\"dashboard_v4_box_icon float-xs-left warning_box\">
                                        <i class=\"fa fa-archive fa-5x\"></i>
                                    </div>
                                    <div class=\"dashboard_v4_box_title float-xs-right\">
                                        <h4><a href=\"{{ path('cour_index') }}\">COURS</a></h4>
                                        <p>Total des cours : <span class=\"tag tag-pill tag-warning\">{{ result }}</span></p>
                                    </div>
                                    <br><br><br><br><br><br>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"content\">
                                    <div class=\"dashboard_v4_box_icon float-xs-left warning_box\">
                                        <i class=\"fa fa-edit fa-5x\"></i>
                                    </div>
                                    <div class=\"dashboard_v4_box_title float-xs-right\">
                                        <h4> <a href=\"{{ path('note_index') }}\">NOTES</a></h4>
                                        <p>Total des notes : <span class=\"tag tag-pill tag-warning\">{{ result_note }}</span></p>
                                    </div>
                                    <br><br><br><br><br><br>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"content\">
                                    <div class=\"dashboard_v4_box_icon float-xs-left success_box\">
                                        <i class=\"fa fa-users fa-5x\"></i>
                                    </div>
                                    <div class=\"dashboard_v4_box_title float-xs-right\">
                                        <h4> <a href=\"{{ path('appsense_index') }}\">ABSENCES</a></h4>
                                        <p>Total des absences : <span class=\"tag tag-pill tag-success\">{{ result_absence }}</span></p>
                                    </div>
                                    <br><br><br><br><br><br>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"content\">
                                    <div class=\"dashboard_v4_box_icon float-xs-left success_box\">
                                        <i class=\"fa fa-university fa-5x\"></i>
                                    </div>
                                    <div class=\"dashboard_v4_box_title float-xs-right\">
                                        <h4> <a href=\"{{ path('examen_index') }}\">EXAMENS</a></h4>
                                        <p>Total des examens principales : <span class=\"tag tag-pill tag-success\">{{ result_examen_principale }}</span></p>
                                        <p>Total des examens controles : <span class=\"tag tag-pill tag-warning\">{{ result_examen_controle }}</span></p>
                                    </div>
                                    <br><br><br><br><br><br>
                                    <div class=\"progress\">
                                        <progress class=\"progress progress-striped progress-info\" value=\"60\" max=\"100\"></progress>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"bars-color\" class=\"chart-height\"></div>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-icon-menu/js/layout.min.js') }}\"></script>
    <script>
        \$('#dashboard').addClass('active');
    </script>
{% endblock %}", "ERPBundle:Front/enseignant:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/enseignant/index.html.twig");
    }
}
