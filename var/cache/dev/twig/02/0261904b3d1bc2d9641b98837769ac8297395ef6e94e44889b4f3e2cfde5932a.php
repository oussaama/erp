<?php

/* ERPBundle:Front/etudiant/inscription:document.html.twig */
class __TwigTemplate_fc99b9ea7c6ae0bcea9f572844da022983fa149d9fc717d8f808d43b9fbe3221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5b02f4a07690e6eaca7c9ec99a87db945cbaa6e256a309a2118231720ea1dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b02f4a07690e6eaca7c9ec99a87db945cbaa6e256a309a2118231720ea1dfd->enter($__internal_f5b02f4a07690e6eaca7c9ec99a87db945cbaa6e256a309a2118231720ea1dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant/inscription:document.html.twig"));

        $__internal_0985af624dc42e85f253afaa9b90299638ce9feb7123a09674133f9ffb4f1be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0985af624dc42e85f253afaa9b90299638ce9feb7123a09674133f9ffb4f1be9->enter($__internal_0985af624dc42e85f253afaa9b90299638ce9feb7123a09674133f9ffb4f1be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant/inscription:document.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from backend.themesadmin.com/backend/admin_left_icon_menu/material/admin_default/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2017 17:22:18 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"bootstrap default admin template\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Form wizard | Admin Template</title>

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
                    petok: \"4f590e9d721ed61a1861dbb13e35f51ee60a3375-1497805401-1800\",
                    zone: \"themesadmin.com\",
                    rocket: \"0\",
                    apps: {\"ga_key\": {\"ua\": \"UA-92643213-2\", \"ga_bs\": \"2\"}}
                }];
                !function (a, b) {
                    a = document.createElement(\"script\"), b = document.getElementsByTagName(\"script\")[0], a.async = !0, a.src = \"../../../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d85b614c0f6/cloudflare.min.js\", b.parentNode.insertBefore(a, b)
                }()
            }
        } catch (e) {
        }
        ;
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link id=\"site-color\" rel=\"stylesheet\"
          href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jQuery-Smart-Wizard/styles/smart_wizard.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\">
    <link href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jQuery-Smart-Wizard/styles/smart_wizard_vertical.min.css"), "html", null, true);
        echo "\"
          rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
    <style>
        .input-margin {
            margin-bottom: 10px;
        }
        .datepicker-switch{
            color: #087380;
        }
        .next ,.prev {
            color: #087310;
        }
        .nav-item-etape-done {
            background: #5cb85c !important;
        }
    </style>
</head>
<body>
<div class=\"loader-overlay\">
    <div class=\"loader-preview-area\">
        <div class=\"spinners\">
            <div class=\"loader\">
                <div class=\"rotating-plane\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"wrapper\">
    <section id=\"\" class=\"container-fluid\">
        <div class=\"row\">
            <section>
                <div class=\"site-content-title\">
                    <h2 class=\"float-xs-left content-title-main\">Pre-Inscription</h2>

                    <ol class=\"breadcrumb float-xs-right\">
                        <li class=\"breadcrumb-item\">
                            <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Pré-Inscription</a></li>
                        <li class=\"breadcrumb-item active\">Form</li>
                    </ol>
                </div>
                <div class=\"content content-wizard\">
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"divider15\"></div>
                        <div class=\"divider10\"></div>
                        <div class=\"basic-wizard\">
                            <div>
                                <div class=\"step-content-wizzard\">
                                    <div class=\"step_default\">
                                        <ul class=\"nav nav-inline\">
                                            <li class=\"nav-item step_lg_spacing nav-item-etape-done\">
                                                <div class=\"step_badge float-xs-left text-xs-center\"
                                                     style=\"color: white;border-color:white;\">1
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\" style=\"color: white\">Pré-Inscription</h6>
                                                    <p class=\"step_description\" style=\"color: white\">Lorem ipsum dolor set.</p>
                                                </div>
                                            </li>
                                            <li class=\"nav-item step_lg_spacing active\">
                                                <div class=\"step_badge float-xs-left text-xs-center\">2</div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Upload des documents</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor set.</p>
                                                </div>
                                            </li>
                                            <li class=\"nav-item step_lg_spacing\">
                                                <div class=\"step_badge float-xs-left text-xs-center\">3
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Paiment</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor
                                                        set.</p>
                                                </div>
                                            </li>
                                            <li class=\"nav-item step_lg_spacing\">
                                                <div class=\"step_badge float-xs-left text-xs-center\">4
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Inscription</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor
                                                        set.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"divider15\"></div>
                                    <div class=\"divider15\"></div>
                                    <div class=\"divider15\"></div>
                                    ";
        // line 186
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == 0)) {
            // line 187
            echo "                                        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
                                        <div class=\"col-lg-3\">
                                            <label> Identifiant</label>
                                            <div class=\"input-group input-left-icon input-margin\">
                                                <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                ";
            // line 192
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierId", array()), 'row', array("attr" => array("required" => "required")));
            echo "
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <label>Diplome</label>
                                            <div class=\"input-group input-left-icon input-margin\">
                                                <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                ";
            // line 199
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierDiplome", array()), 'row', array("attr" => array("required" => "required")));
            echo "
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <label>Fiche de Note</label>
                                            <div class=\"input-group input-left-icon input-margin\">
                                                <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                ";
            // line 206
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierNote", array()), 'row', array("attr" => array("required" => "required")));
            echo "
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <label>Justificateur de paiment (optionnel)</label>
                                            <div class=\"input-group input-left-icon input-margin\">
                                                <span class=\"input-group-addon\"><i class=\"icon icon_upload\"></i></span>
                                                ";
            // line 213
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierExtrait", array()), 'row');
            echo "
                                            </div>
                                        </div>
                                        ";
            // line 216
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                                    ";
        } else {
            // line 218
            echo "                                        <div class=\"col-md-12 row\">
                                            <div class=\"alert alert-success\" role=\"alert\">
                                                <center>
                                                    <h4 class=\"alert-heading\">ajout d'information avec
                                                        succés</h4>
                                                    <p>les informations en cours de traitement</p>
                                                </center>
                                            </div>
                                        </div>
                                    ";
        }
        // line 228
        echo "                                </div>
                            </div>
            </section>
        </div>
    </section>
</div>

<script type=\"text/javascript\"
        src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/wizard.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
</body>
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
</html>";
        
        $__internal_f5b02f4a07690e6eaca7c9ec99a87db945cbaa6e256a309a2118231720ea1dfd->leave($__internal_f5b02f4a07690e6eaca7c9ec99a87db945cbaa6e256a309a2118231720ea1dfd_prof);

        
        $__internal_0985af624dc42e85f253afaa9b90299638ce9feb7123a09674133f9ffb4f1be9->leave($__internal_0985af624dc42e85f253afaa9b90299638ce9feb7123a09674133f9ffb4f1be9_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant/inscription:document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 260,  381 => 259,  376 => 257,  372 => 256,  367 => 254,  363 => 253,  359 => 252,  355 => 251,  350 => 249,  346 => 248,  341 => 246,  336 => 244,  331 => 242,  326 => 240,  321 => 238,  316 => 236,  306 => 228,  294 => 218,  289 => 216,  283 => 213,  273 => 206,  263 => 199,  253 => 192,  244 => 187,  242 => 186,  148 => 95,  144 => 94,  139 => 92,  134 => 90,  130 => 89,  126 => 88,  122 => 87,  117 => 85,  113 => 84,  109 => 83,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from backend.themesadmin.com/backend/admin_left_icon_menu/material/admin_default/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2017 17:22:18 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"bootstrap default admin template\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Form wizard | Admin Template</title>

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
                    petok: \"4f590e9d721ed61a1861dbb13e35f51ee60a3375-1497805401-1800\",
                    zone: \"themesadmin.com\",
                    rocket: \"0\",
                    apps: {\"ga_key\": {\"ua\": \"UA-92643213-2\", \"ga_bs\": \"2\"}}
                }];
                !function (a, b) {
                    a = document.createElement(\"script\"), b = document.getElementsByTagName(\"script\")[0], a.async = !0, a.src = \"../../../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d85b614c0f6/cloudflare.min.js\", b.parentNode.insertBefore(a, b)
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
          href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link href=\"{{ asset('assets/global/plugins/jQuery-Smart-Wizard/styles/smart_wizard.min.css') }}\" rel=\"stylesheet\"
          type=\"text/css\">
    <link href=\"{{ asset('assets/global/plugins/jQuery-Smart-Wizard/styles/smart_wizard_vertical.min.css') }}\"
          rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
    <style>
        .input-margin {
            margin-bottom: 10px;
        }
        .datepicker-switch{
            color: #087380;
        }
        .next ,.prev {
            color: #087310;
        }
        .nav-item-etape-done {
            background: #5cb85c !important;
        }
    </style>
</head>
<body>
<div class=\"loader-overlay\">
    <div class=\"loader-preview-area\">
        <div class=\"spinners\">
            <div class=\"loader\">
                <div class=\"rotating-plane\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"wrapper\">
    <section id=\"\" class=\"container-fluid\">
        <div class=\"row\">
            <section>
                <div class=\"site-content-title\">
                    <h2 class=\"float-xs-left content-title-main\">Pre-Inscription</h2>

                    <ol class=\"breadcrumb float-xs-right\">
                        <li class=\"breadcrumb-item\">
                            <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Pré-Inscription</a></li>
                        <li class=\"breadcrumb-item active\">Form</li>
                    </ol>
                </div>
                <div class=\"content content-wizard\">
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"divider15\"></div>
                        <div class=\"divider10\"></div>
                        <div class=\"basic-wizard\">
                            <div>
                                <div class=\"step-content-wizzard\">
                                    <div class=\"step_default\">
                                        <ul class=\"nav nav-inline\">
                                            <li class=\"nav-item step_lg_spacing nav-item-etape-done\">
                                                <div class=\"step_badge float-xs-left text-xs-center\"
                                                     style=\"color: white;border-color:white;\">1
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\" style=\"color: white\">Pré-Inscription</h6>
                                                    <p class=\"step_description\" style=\"color: white\">Lorem ipsum dolor set.</p>
                                                </div>
                                            </li>
                                            <li class=\"nav-item step_lg_spacing active\">
                                                <div class=\"step_badge float-xs-left text-xs-center\">2</div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Upload des documents</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor set.</p>
                                                </div>
                                            </li>
                                            <li class=\"nav-item step_lg_spacing\">
                                                <div class=\"step_badge float-xs-left text-xs-center\">3
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Paiment</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor
                                                        set.</p>
                                                </div>
                                            </li>
                                            <li class=\"nav-item step_lg_spacing\">
                                                <div class=\"step_badge float-xs-left text-xs-center\">4
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Inscription</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor
                                                        set.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"divider15\"></div>
                                    <div class=\"divider15\"></div>
                                    <div class=\"divider15\"></div>
                                    {% if etat == 0 %}
                                        {{ form_start(form) }}
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
                                    {% else %}
                                        <div class=\"col-md-12 row\">
                                            <div class=\"alert alert-success\" role=\"alert\">
                                                <center>
                                                    <h4 class=\"alert-heading\">ajout d'information avec
                                                        succés</h4>
                                                    <p>les informations en cours de traitement</p>
                                                </center>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
            </section>
        </div>
    </section>
</div>

<script type=\"text/javascript\"
        src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\"
        src=\"{{ asset('assets/global/plugins/tether/dist/js/tether.min.js') }}\"></script>
<script type=\"text/javascript\"
        src=\"{{ asset('assets/global/plugins/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\"
        src=\"{{ asset('assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}\"></script>
<script type=\"text/javascript\"
        src=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.js') }}\"></script>
<script type=\"text/javascript\"
        src=\"{{ asset('assets/global/plugins/screenfull.js/dist/screenfull.min.js') }}\"></script>
<script type=\"text/javascript\"
        src=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.js') }}\"></script>
<script src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
<script type=\"text/javascript\"
        src=\"{{ asset('assets/global/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/wizard.min.js') }}\"></script>
<script type=\"text/javascript\"
        src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEtudiant.js') }}\"></script>
</body>
<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
</html>", "ERPBundle:Front/etudiant/inscription:document.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/inscription/document.html.twig");
    }
}
