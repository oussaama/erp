<?php

/* ERPBundle:Front/etudiant/inscription:preinscription.html.twig */
class __TwigTemplate_76fd76c20969e9d1331f6836eaf7a1a057c8d515f25ee7cdd54f40a09c2c4b71 extends Twig_Template
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
        $__internal_a1ab05059cbfac84b1036c41e4d36de1864a6c65d515417eac4be6a1deb01771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ab05059cbfac84b1036c41e4d36de1864a6c65d515417eac4be6a1deb01771->enter($__internal_a1ab05059cbfac84b1036c41e4d36de1864a6c65d515417eac4be6a1deb01771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant/inscription:preinscription.html.twig"));

        $__internal_6c7b68db7a8c001d75c3b855af90402bc48c27fdf6649f4b533d2666299dacc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7b68db7a8c001d75c3b855af90402bc48c27fdf6649f4b533d2666299dacc1->enter($__internal_6c7b68db7a8c001d75c3b855af90402bc48c27fdf6649f4b533d2666299dacc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant/inscription:preinscription.html.twig"));

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
                                            <li class=\"nav-item active step_lg_spacing \">
                                                <div class=\"step_badge float-xs-left text-xs-center\">1
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Pré-Inscription</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor
                                                        set.</p>
                                                </div>
                                            </li>
                                            <li class=\"nav-item step_lg_spacing\">
                                                <div class=\"step_badge float-xs-left text-xs-center\">2
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Upload des documents</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor
                                                        set.</p>
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
        // line 185
        if ((($context["etat"] ?? $this->getContext($context, "etat")) == 0)) {
            // line 186
            echo "                        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_registration", array("etat" => 1)), "method" => "POST", "attr" => array("id" => "addEtudiant")));
            echo "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                    ";
            // line 192
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
            echo "
                                </div>
                                <span id=\"etudiant_username\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                    ";
            // line 199
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
            echo "
                                </div>
                                <!--<span id=\"etudiant_nom\"></span>-->
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                    ";
            // line 208
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
            echo "
                                </div>
                                <span id=\"etudiant_prenom\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                    ";
            // line 215
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
            echo "
                                </div>
                                <span id=\"etudiant_cin\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_calendar\"></i></span>
                                    ";
            // line 225
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "naissance", array()), 'row');
            echo "
                                </div>
                                <span id=\"etudiant_fullName\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                    ";
            // line 232
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieu", array()), 'row');
            echo "
                                </div>
                                <span id=\"etudiant_cin\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                    ";
            // line 241
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()), 'row');
            echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                    ";
            // line 247
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                    ";
            // line 255
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'row');
            echo "
                                </div>
                                <span id=\"etudiant_cp\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                    ";
            // line 263
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
            echo "
                                </div>
                                <span id=\"etudiant_ville\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                    ";
            // line 273
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
            echo "
                                </div>
                                <span id=\"etudiant_pays\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                    ";
            // line 281
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveauEtude", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
            echo "
                                </div>
                                <span id=\"etudiant_pays\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                    ";
            // line 291
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diplome", array()), 'row', array("attr" => array("onChange" => "Diplome();")));
            echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                    ";
            // line 298
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'row', array("attr" => array("onChange" => "Filiere();")));
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_target\"></i></span>
                                    ";
            // line 307
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'row', array("attr" => array("onChange" => "Niveau();", "onSelect" => "Niveau()")));
            echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_toolbox\"></i></span>
                                    ";
            // line 314
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'row');
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_phone\"></i></span>
                                    ";
            // line 323
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
            echo "
                                </div>
                                <span id=\"etudiant_tel\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_mail\"></i></span>
                                    ";
            // line 331
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
            echo "
                                </div>
                                <span id=\"etudiant_email\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                    ";
            // line 341
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
            echo "
                                </div>
                                <span id=\"etudiant_p1\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                    ";
            // line 349
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("onFocusOut" => "validation();")));
            echo "
                                </div>
                                <span id=\"etudiant_p2\"></span>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div>
                            <input type=\"submit\" value=\"ajouter\"
                                   class=\"btn btn-primary site-btn pull-right\" id=\"addEtudiantButton\">
                        </div>
                        <input type=\"hidden\" value=\"pre-inscrit\" name=\"test\"/>
                        ";
            // line 360
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                        ";
        } else {
            // line 362
            echo "                            <div class=\"col-md-12 row\">
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
        // line 372
        echo "                    </div>
                </div>
            </section>
        </div>
    </section>
</div>

<script type=\"text/javascript\"
        src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/wizard.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
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

        /*if(valide1 == true){

         }*/
    }
</script>
<script type=\"text/javascript\" src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
</body>
<script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 475
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<script>
    \$(document).ready(function () {
        // configure the bootstrap datepicker
        \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
    });
</script>
</html>";
        
        $__internal_a1ab05059cbfac84b1036c41e4d36de1864a6c65d515417eac4be6a1deb01771->leave($__internal_a1ab05059cbfac84b1036c41e4d36de1864a6c65d515417eac4be6a1deb01771_prof);

        
        $__internal_6c7b68db7a8c001d75c3b855af90402bc48c27fdf6649f4b533d2666299dacc1->leave($__internal_6c7b68db7a8c001d75c3b855af90402bc48c27fdf6649f4b533d2666299dacc1_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant/inscription:preinscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 475,  644 => 474,  639 => 472,  564 => 400,  559 => 398,  555 => 397,  551 => 396,  547 => 395,  542 => 393,  538 => 392,  533 => 390,  528 => 388,  523 => 386,  518 => 384,  513 => 382,  508 => 380,  498 => 372,  486 => 362,  481 => 360,  467 => 349,  456 => 341,  443 => 331,  432 => 323,  420 => 314,  410 => 307,  398 => 298,  388 => 291,  375 => 281,  364 => 273,  351 => 263,  340 => 255,  329 => 247,  320 => 241,  308 => 232,  298 => 225,  285 => 215,  275 => 208,  263 => 199,  253 => 192,  243 => 186,  241 => 185,  148 => 95,  144 => 94,  139 => 92,  134 => 90,  130 => 89,  126 => 88,  122 => 87,  117 => 85,  113 => 84,  109 => 83,  25 => 1,);
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
                                            <li class=\"nav-item active step_lg_spacing \">
                                                <div class=\"step_badge float-xs-left text-xs-center\">1
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Pré-Inscription</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor
                                                        set.</p>
                                                </div>
                                            </li>
                                            <li class=\"nav-item step_lg_spacing\">
                                                <div class=\"step_badge float-xs-left text-xs-center\">2
                                                </div>
                                                <div class=\"step_infomation\">
                                                    <h6 class=\"step_title\">Upload des documents</h6>
                                                    <p class=\"step_description\">Lorem ipsum dolor
                                                        set.</p>
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
                        {{ form_start(form,{'action': path('etudiant_registration',{'etat':1}),'method':'POST','attr':{'id':'addEtudiant'}}) }}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_profile\"></i></span>
                                    {{ form_row(form.username,{'attr': {'onFocusOut':'validation();'}}) }}
                                </div>
                                <span id=\"etudiant_username\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                    {{ form_row(form.nom,{'attr': {'onFocusOut':'validation();'}}) }}
                                </div>
                                <!--<span id=\"etudiant_nom\"></span>-->
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                    {{ form_row(form.prenom,{'attr': {'onFocusOut':'validation();'}}) }}
                                </div>
                                <span id=\"etudiant_prenom\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                    {{ form_row(form.cin,{'attr': {'onFocusOut':'validation();'}}) }}
                                </div>
                                <span id=\"etudiant_cin\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_calendar\"></i></span>
                                    {{ form_row(form.naissance) }}
                                </div>
                                <span id=\"etudiant_fullName\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_wallet\"></i></span>
                                    {{ form_row(form.lieu) }}
                                </div>
                                <span id=\"etudiant_cin\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_profile\"></i></span>
                                    {{ form_row(form.sex) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                    {{ form_row(form.pays) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                    <span class=\"input-group-addon\"><i class=\"icon icon_house\"></i></span>
                                    {{ form_row(form.adresse) }}
                                </div>
                                <span id=\"etudiant_cp\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                    {{ form_row(form.ville) }}
                                </div>
                                <span id=\"etudiant_ville\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                    {{ form_row(form.cp,{'attr': {'onFocusOut':'validation();'}}) }}
                                </div>
                                <span id=\"etudiant_pays\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                                <span class=\"input-group-addon\"><i
                                                                            class=\"icon icon_house\"></i></span>
                                    {{ form_row(form.niveauEtude,{'attr': {'onFocusOut':'validation();'}}) }}
                                </div>
                                <span id=\"etudiant_pays\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                    {{ form_row(form.diplome,{'attr': {'onChange':'Diplome();'}}) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                        <span class=\"input-group-addon\"><i
                                                                    class=\"icon icon_document\"></i></span>
                                    {{ form_row(form.filiere,{'attr': {'onChange':'Filiere();'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_target\"></i></span>
                                    {{ form_row(form.specialite,{'attr': {'onChange':'Niveau();','onSelect':'Niveau()'}}) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_toolbox\"></i></span>
                                    {{ form_row(form.niveau) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_phone\"></i></span>
                                    {{ form_row(form.tel,{'attr': {'onFocusOut':'validation();'}}) }}
                                </div>
                                <span id=\"etudiant_tel\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_mail\"></i></span>
                                    {{ form_row(form.email) }}
                                </div>
                                <span id=\"etudiant_email\"></span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                    {{ form_row(form.plainPassword.first) }}
                                </div>
                                <span id=\"etudiant_p1\"></span>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group input-left-icon input-margin\">
                                                            <span class=\"input-group-addon\"><i
                                                                        class=\"icon icon_key\"></i></span>
                                    {{ form_row(form.plainPassword.second,{'attr': {'onFocusOut':'validation();'}}) }}
                                </div>
                                <span id=\"etudiant_p2\"></span>
                            </div>
                        </div>
                        <div class=\"divider15\"></div>
                        <div>
                            <input type=\"submit\" value=\"ajouter\"
                                   class=\"btn btn-primary site-btn pull-right\" id=\"addEtudiantButton\">
                        </div>
                        <input type=\"hidden\" value=\"pre-inscrit\" name=\"test\"/>
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

        /*if(valide1 == true){

         }*/
    }
</script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEtudiant.js') }}\"></script>
</body>
<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<script>
    \$(document).ready(function () {
        // configure the bootstrap datepicker
        \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
    });
</script>
</html>", "ERPBundle:Front/etudiant/inscription:preinscription.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/inscription/preinscription.html.twig");
    }
}
