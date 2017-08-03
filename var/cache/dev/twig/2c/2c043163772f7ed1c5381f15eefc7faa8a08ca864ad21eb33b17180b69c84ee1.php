<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_4628744597324996a50181be5781ea21fa8a74c74d9416c1fc9b0e4df05b068b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02dcfcc5c6056dff3f64ea2427704f901be2e56bc7f0de507b21fc5f6111eebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02dcfcc5c6056dff3f64ea2427704f901be2e56bc7f0de507b21fc5f6111eebf->enter($__internal_02dcfcc5c6056dff3f64ea2427704f901be2e56bc7f0de507b21fc5f6111eebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_e111bd62456e5891ca7e25b0fae2846c8bd06fdb2e4e3198113b95500830ab86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e111bd62456e5891ca7e25b0fae2846c8bd06fdb2e4e3198113b95500830ab86->enter($__internal_e111bd62456e5891ca7e25b0fae2846c8bd06fdb2e4e3198113b95500830ab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02dcfcc5c6056dff3f64ea2427704f901be2e56bc7f0de507b21fc5f6111eebf->leave($__internal_02dcfcc5c6056dff3f64ea2427704f901be2e56bc7f0de507b21fc5f6111eebf_prof);

        
        $__internal_e111bd62456e5891ca7e25b0fae2846c8bd06fdb2e4e3198113b95500830ab86->leave($__internal_e111bd62456e5891ca7e25b0fae2846c8bd06fdb2e4e3198113b95500830ab86_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e8e663cd5cc18c796bcd460d3ac37e251ee38eaa0bfa6b4cdc2e5f04d0bf2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8e663cd5cc18c796bcd460d3ac37e251ee38eaa0bfa6b4cdc2e5f04d0bf2ec->enter($__internal_8e8e663cd5cc18c796bcd460d3ac37e251ee38eaa0bfa6b4cdc2e5f04d0bf2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e5e3804fdc878fea69eec3e5b9f11163805de1574ece075d3c33cb3874ce145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5e3804fdc878fea69eec3e5b9f11163805de1574ece075d3c33cb3874ce145->enter($__internal_5e5e3804fdc878fea69eec3e5b9f11163805de1574ece075d3c33cb3874ce145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SuperAdmin - Inscription";
        
        $__internal_5e5e3804fdc878fea69eec3e5b9f11163805de1574ece075d3c33cb3874ce145->leave($__internal_5e5e3804fdc878fea69eec3e5b9f11163805de1574ece075d3c33cb3874ce145_prof);

        
        $__internal_8e8e663cd5cc18c796bcd460d3ac37e251ee38eaa0bfa6b4cdc2e5f04d0bf2ec->leave($__internal_8e8e663cd5cc18c796bcd460d3ac37e251ee38eaa0bfa6b4cdc2e5f04d0bf2ec_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25a1b8585fb6a841a2b9b2edddb9dd0474113b21d31368e184ab3a8b6298a49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a1b8585fb6a841a2b9b2edddb9dd0474113b21d31368e184ab3a8b6298a49f->enter($__internal_25a1b8585fb6a841a2b9b2edddb9dd0474113b21d31368e184ab3a8b6298a49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8384924866af812df2093ba2809e09f66ea36da89b020318d8d152defdbe53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8384924866af812df2093ba2809e09f66ea36da89b020318d8d152defdbe53e->enter($__internal_d8384924866af812df2093ba2809e09f66ea36da89b020318d8d152defdbe53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        })(window); //]]>
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
                    atok: \"0058b165fc78163e6d148677944b9ad6\",
                    petok: \"8ddbcbc9feff803550a9f3ceca501f2cd0d28aa0-1496996202-1800\",
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
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link id=\"site-color\" rel=\"stylesheet\"
          href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/css/color/light/color-default.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_d8384924866af812df2093ba2809e09f66ea36da89b020318d8d152defdbe53e->leave($__internal_d8384924866af812df2093ba2809e09f66ea36da89b020318d8d152defdbe53e_prof);

        
        $__internal_25a1b8585fb6a841a2b9b2edddb9dd0474113b21d31368e184ab3a8b6298a49f->leave($__internal_25a1b8585fb6a841a2b9b2edddb9dd0474113b21d31368e184ab3a8b6298a49f_prof);

    }

    // line 87
    public function block_header($context, array $blocks = array())
    {
        $__internal_835402c1e7f5ef3443855521e4b731b27e2dd575207a022a40f8281d360c807b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835402c1e7f5ef3443855521e4b731b27e2dd575207a022a40f8281d360c807b->enter($__internal_835402c1e7f5ef3443855521e4b731b27e2dd575207a022a40f8281d360c807b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8d2ae46c5d5c7b10b64eb5876ee61ab67067be1f5542501410358b66f97db549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2ae46c5d5c7b10b64eb5876ee61ab67067be1f5542501410358b66f97db549->enter($__internal_8d2ae46c5d5c7b10b64eb5876ee61ab67067be1f5542501410358b66f97db549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 88
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ERPBundle:SuperAdmin/SuperAdmin:header"));
        echo "
";
        
        $__internal_8d2ae46c5d5c7b10b64eb5876ee61ab67067be1f5542501410358b66f97db549->leave($__internal_8d2ae46c5d5c7b10b64eb5876ee61ab67067be1f5542501410358b66f97db549_prof);

        
        $__internal_835402c1e7f5ef3443855521e4b731b27e2dd575207a022a40f8281d360c807b->leave($__internal_835402c1e7f5ef3443855521e4b731b27e2dd575207a022a40f8281d360c807b_prof);

    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        $__internal_90974ae13fd0aa43064e705e3c01bc24dbf6c6bf45c1d56dc93fb20953866cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90974ae13fd0aa43064e705e3c01bc24dbf6c6bf45c1d56dc93fb20953866cbf->enter($__internal_90974ae13fd0aa43064e705e3c01bc24dbf6c6bf45c1d56dc93fb20953866cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b19bb494a8075236e2d9267e6cea7aaa881ed2a0fe3cb1fd1ad9ff61190a4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b19bb494a8075236e2d9267e6cea7aaa881ed2a0fe3cb1fd1ad9ff61190a4c3->enter($__internal_6b19bb494a8075236e2d9267e6cea7aaa881ed2a0fe3cb1fd1ad9ff61190a4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "    <div class=\"row\">
        <section id=\"content-wrapper\" class=\"form-elements\">
            ";
        // line 93
        $this->displayBlock('menu', $context, $blocks);
        // line 94
        echo "            <div class=\"site-content-title\">
                <h2 class=\"float-xs-left content-title-main\">Client</h2>

                <ol class=\"breadcrumb float-xs-right\">
                    <li class=\"breadcrumb-item\">
                        <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                        <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_homepage");
        echo "\">Home</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_client");
        echo "\">Client</a></li>
                    <li class=\"breadcrumb-item active\">Inscription</li>
                </ol>

            </div>

            <div class=\"content\">
                <div class=\"general-elements-content\">
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"default-validators\" role=\"tabpanel\">
                                    <div class=\"element-margin-bottom\">
                                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 117
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 118
                echo "                                                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                                                    ";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                                                </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register")));
        echo "
                                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                                        <div>
                                            <input type=\"submit\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                        </div>
                                        ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
";
        
        $__internal_6b19bb494a8075236e2d9267e6cea7aaa881ed2a0fe3cb1fd1ad9ff61190a4c3->leave($__internal_6b19bb494a8075236e2d9267e6cea7aaa881ed2a0fe3cb1fd1ad9ff61190a4c3_prof);

        
        $__internal_90974ae13fd0aa43064e705e3c01bc24dbf6c6bf45c1d56dc93fb20953866cbf->leave($__internal_90974ae13fd0aa43064e705e3c01bc24dbf6c6bf45c1d56dc93fb20953866cbf_prof);

    }

    // line 93
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de036e7470ac5148c13bb0181376aa9d1f68d2277f81aa9e974cd9552a7fc681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de036e7470ac5148c13bb0181376aa9d1f68d2277f81aa9e974cd9552a7fc681->enter($__internal_de036e7470ac5148c13bb0181376aa9d1f68d2277f81aa9e974cd9552a7fc681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97211049f83926c38b739e17f60d3e25c329fbe80d109699a83ac107bce30a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97211049f83926c38b739e17f60d3e25c329fbe80d109699a83ac107bce30a0f->enter($__internal_97211049f83926c38b739e17f60d3e25c329fbe80d109699a83ac107bce30a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("::headers/menuSuperAdmin.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 93)->display($context);
        
        $__internal_97211049f83926c38b739e17f60d3e25c329fbe80d109699a83ac107bce30a0f->leave($__internal_97211049f83926c38b739e17f60d3e25c329fbe80d109699a83ac107bce30a0f_prof);

        
        $__internal_de036e7470ac5148c13bb0181376aa9d1f68d2277f81aa9e974cd9552a7fc681->leave($__internal_de036e7470ac5148c13bb0181376aa9d1f68d2277f81aa9e974cd9552a7fc681_prof);

    }

    // line 140
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_527992a9c915722d83674641f9da3bb1e9f20f3a60096ccc388814c4b2176997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527992a9c915722d83674641f9da3bb1e9f20f3a60096ccc388814c4b2176997->enter($__internal_527992a9c915722d83674641f9da3bb1e9f20f3a60096ccc388814c4b2176997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_520008becfad9332ec1101755a48d6a4662c37079ec81597cd8936be81c5e3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520008becfad9332ec1101755a48d6a4662c37079ec81597cd8936be81c5e3aa->enter($__internal_520008becfad9332ec1101755a48d6a4662c37079ec81597cd8936be81c5e3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-form-validator/form-validator/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_520008becfad9332ec1101755a48d6a4662c37079ec81597cd8936be81c5e3aa->leave($__internal_520008becfad9332ec1101755a48d6a4662c37079ec81597cd8936be81c5e3aa_prof);

        
        $__internal_527992a9c915722d83674641f9da3bb1e9f20f3a60096ccc388814c4b2176997->leave($__internal_527992a9c915722d83674641f9da3bb1e9f20f3a60096ccc388814c4b2176997_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 155,  389 => 154,  385 => 153,  381 => 152,  376 => 150,  372 => 149,  367 => 147,  363 => 146,  358 => 144,  353 => 142,  348 => 141,  339 => 140,  321 => 93,  299 => 128,  294 => 126,  289 => 124,  284 => 123,  278 => 122,  269 => 119,  264 => 118,  259 => 117,  255 => 116,  238 => 102,  233 => 100,  225 => 94,  223 => 93,  219 => 91,  210 => 90,  197 => 88,  188 => 87,  175 => 84,  171 => 83,  167 => 82,  163 => 81,  159 => 80,  155 => 79,  150 => 77,  146 => 76,  72 => 4,  63 => 3,  45 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}SuperAdmin - Inscription{% endblock %}
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
        })(window); //]]>
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
                    atok: \"0058b165fc78163e6d148677944b9ad6\",
                    petok: \"8ddbcbc9feff803550a9f3ceca501f2cd0d28aa0-1496996202-1800\",
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap/dist/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link id=\"site-color\" rel=\"stylesheet\"
          href=\"{{ asset('assets/layouts/layout-left-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-menu/css/layout.min.css') }}\"/>

{% endblock %}
{% block header %}
    {{ render(controller('ERPBundle:SuperAdmin/SuperAdmin:header')) }}
{% endblock %}
{% block body %}
    <div class=\"row\">
        <section id=\"content-wrapper\" class=\"form-elements\">
            {% block menu %}{% include '::headers/menuSuperAdmin.html.twig' %}{% endblock %}
            <div class=\"site-content-title\">
                <h2 class=\"float-xs-left content-title-main\">Client</h2>

                <ol class=\"breadcrumb float-xs-right\">
                    <li class=\"breadcrumb-item\">
                        <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                        <a href=\"{{ path('super_admin_homepage') }}\">Home</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('super_admin_client') }}\">Client</a></li>
                    <li class=\"breadcrumb-item active\">Inscription</li>
                </ol>

            </div>

            <div class=\"content\">
                <div class=\"general-elements-content\">
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"default-validators\" role=\"tabpanel\">
                                    <div class=\"element-margin-bottom\">
                                        {% for type, messages in app.session.flashBag.all %}
                                            {% for message in messages %}
                                                <div class=\"{{ type }}\">
                                                    {{ message|trans({}, 'FOSUserBundle') }}
                                                </div>
                                            {% endfor %}
                                        {% endfor %}
                                        {{ form_start(form, {'action':path('fos_user_registration_register')}) }}
                                        {{ form_widget(form) }}
                                        <div>
                                            <input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\"/>
                                        </div>
                                        {{ form_start(form)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/tether/dist/js/tether.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/screenfull.js/dist/screenfull.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/jquery-form-validator/form-validator/jquery.form-validator.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-menu/js/layout.min.js') }}\"></script>
{% endblock %}", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
