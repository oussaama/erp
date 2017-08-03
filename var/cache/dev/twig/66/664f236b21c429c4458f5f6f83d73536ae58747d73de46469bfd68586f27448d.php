<?php

/* ERPBundle:SuperAdmin/client:index.html.twig */
class __TwigTemplate_48cd025d35e826127d925c97a51c7e63b17db883b2a1060f0cf8af3047907a53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ERPBundle:SuperAdmin/client:index.html.twig", 1);
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
        $__internal_3b5576faaa63db4bcfca8442623c0d864f2f283bb97336ae86a187f713699235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5576faaa63db4bcfca8442623c0d864f2f283bb97336ae86a187f713699235->enter($__internal_3b5576faaa63db4bcfca8442623c0d864f2f283bb97336ae86a187f713699235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/client:index.html.twig"));

        $__internal_4e39ff5ee08850a59f11db750b27fd8efd28a7c0e0f463f08328750dfdc7456b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e39ff5ee08850a59f11db750b27fd8efd28a7c0e0f463f08328750dfdc7456b->enter($__internal_4e39ff5ee08850a59f11db750b27fd8efd28a7c0e0f463f08328750dfdc7456b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b5576faaa63db4bcfca8442623c0d864f2f283bb97336ae86a187f713699235->leave($__internal_3b5576faaa63db4bcfca8442623c0d864f2f283bb97336ae86a187f713699235_prof);

        
        $__internal_4e39ff5ee08850a59f11db750b27fd8efd28a7c0e0f463f08328750dfdc7456b->leave($__internal_4e39ff5ee08850a59f11db750b27fd8efd28a7c0e0f463f08328750dfdc7456b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c5a81ce29fcb6451d42784b0e5dac00fd7fa9e4ab83eea0318f8efe130cb556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5a81ce29fcb6451d42784b0e5dac00fd7fa9e4ab83eea0318f8efe130cb556->enter($__internal_7c5a81ce29fcb6451d42784b0e5dac00fd7fa9e4ab83eea0318f8efe130cb556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80d86a59e63bfb026005ac602624205c70f3614612570bc65aae030999d98a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d86a59e63bfb026005ac602624205c70f3614612570bc65aae030999d98a43->enter($__internal_80d86a59e63bfb026005ac602624205c70f3614612570bc65aae030999d98a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SuperAdmin - Client";
        
        $__internal_80d86a59e63bfb026005ac602624205c70f3614612570bc65aae030999d98a43->leave($__internal_80d86a59e63bfb026005ac602624205c70f3614612570bc65aae030999d98a43_prof);

        
        $__internal_7c5a81ce29fcb6451d42784b0e5dac00fd7fa9e4ab83eea0318f8efe130cb556->leave($__internal_7c5a81ce29fcb6451d42784b0e5dac00fd7fa9e4ab83eea0318f8efe130cb556_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c8290900d78c0d0c6093219a8b7c26ba9d5f0ddbf52b0dbef235a8e435b43a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8290900d78c0d0c6093219a8b7c26ba9d5f0ddbf52b0dbef235a8e435b43a9->enter($__internal_0c8290900d78c0d0c6093219a8b7c26ba9d5f0ddbf52b0dbef235a8e435b43a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e44863c2c873ab291e9cf9caa66954cd581707f57d3dd6a9ff92665aa0a8f9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44863c2c873ab291e9cf9caa66954cd581707f57d3dd6a9ff92665aa0a8f9ca->enter($__internal_e44863c2c873ab291e9cf9caa66954cd581707f57d3dd6a9ff92665aa0a8f9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/css/color/light/color-default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/css/scroller.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_e44863c2c873ab291e9cf9caa66954cd581707f57d3dd6a9ff92665aa0a8f9ca->leave($__internal_e44863c2c873ab291e9cf9caa66954cd581707f57d3dd6a9ff92665aa0a8f9ca_prof);

        
        $__internal_0c8290900d78c0d0c6093219a8b7c26ba9d5f0ddbf52b0dbef235a8e435b43a9->leave($__internal_0c8290900d78c0d0c6093219a8b7c26ba9d5f0ddbf52b0dbef235a8e435b43a9_prof);

    }

    // line 88
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd1c778fe031b9a76a4461cc7d5534d5062e3ad201265d65f5b9341e005e1342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1c778fe031b9a76a4461cc7d5534d5062e3ad201265d65f5b9341e005e1342->enter($__internal_fd1c778fe031b9a76a4461cc7d5534d5062e3ad201265d65f5b9341e005e1342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0573b5dd528ffd522009d9177bf68c6231cdbcd6155b9b1f0e0b53a72cf98694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0573b5dd528ffd522009d9177bf68c6231cdbcd6155b9b1f0e0b53a72cf98694->enter($__internal_0573b5dd528ffd522009d9177bf68c6231cdbcd6155b9b1f0e0b53a72cf98694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 89
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ERPBundle:SuperAdmin/SuperAdmin:header"));
        echo "
";
        
        $__internal_0573b5dd528ffd522009d9177bf68c6231cdbcd6155b9b1f0e0b53a72cf98694->leave($__internal_0573b5dd528ffd522009d9177bf68c6231cdbcd6155b9b1f0e0b53a72cf98694_prof);

        
        $__internal_fd1c778fe031b9a76a4461cc7d5534d5062e3ad201265d65f5b9341e005e1342->leave($__internal_fd1c778fe031b9a76a4461cc7d5534d5062e3ad201265d65f5b9341e005e1342_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e646d578847cc3810ca81805a48d0c61f952a774e7f8308e83ccdca5d7feb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e646d578847cc3810ca81805a48d0c61f952a774e7f8308e83ccdca5d7feb3c->enter($__internal_1e646d578847cc3810ca81805a48d0c61f952a774e7f8308e83ccdca5d7feb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f208709d7ef12abee12f10069f5c41ebd3eef2ead8ccb33347cc1004712fc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f208709d7ef12abee12f10069f5c41ebd3eef2ead8ccb33347cc1004712fc55->enter($__internal_8f208709d7ef12abee12f10069f5c41ebd3eef2ead8ccb33347cc1004712fc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "    <div class=\"row\">
        <section id=\"content-wrapper\">
            ";
        // line 94
        $this->displayBlock('menu', $context, $blocks);
        // line 95
        echo "            <div class=\"site-content-title\">
                <h2 class=\"float-xs-left content-title-main\">Client</h2>

                <ol class=\"breadcrumb float-xs-right\">
                    <li class=\"breadcrumb-item\">
                        <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                        <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_homepage");
        echo "\">Home</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_client");
        echo "\">Client</a></li>
                    <li class=\"breadcrumb-item active\">index</li>
                </ol>

            </div>
            <div class=\"content content-datatable datatable-width\">
                <div class=\"row\">
                    <div class='col-md-offset-10'>
                            <button class=\"btn btn-primary site-btn\" data-target=\"#view-add\" data-toggle=\"modal\">
                                Ajouter
                            </button>
                    </div>
                    <div class=\"divider15\"></div>
                    <div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <table data-plugin=\"datatable\" data-responsive=\"true\" class=\"table table-striped table-hover dt-responsive\">
                                    <thead>
                                    <tr>
                                        <th>Nom de Client</th>
                                        <th>CIN</th>
                                        <th>Email</th>
                                        <th>Date d'Ajouter</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                        <th>Etablissement</th>
                                        <th>action</th>
                                        <th>Statu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["client"] ?? $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 135
            echo "                                        ";
            if (($this->getAttribute($context["e"], "enabled", array()) == 1)) {
                // line 136
                echo "                                        <tr>
                                            <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fullName", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 139
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "dateAjout", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "mail", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "pays", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                <a href=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_etablissement", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-outline-secondary btn-xs\">Info</button></a>
                                                <a><button type=\"button\" class=\"btn btn-outline-info btn-xs add-Etablissement\" data-target=\"#view-add-etablissement\" data-toggle=\"modal\" data-id=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\">Ajouter</button> </a>
                                            </td>
                                            <td>
                                                <a><button type=\"button\" class=\"btn btn-outline-primary btn-xs update-Client\" data-target=\"#view-update-client\" data-toggle=\"modal\" data-id=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\">Update</button></a>
                                            </td>
                                            <td>
                                                <a><button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button></a>
                                            </td>
                                        </tr>
                                        ";
            } else {
                // line 155
                echo "                                            <tr>
                                                <td>";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fullname", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 158
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "dateAjout", array()), "M d Y H:i"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "mail", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
                echo " , ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "pays", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
                echo "</td>
                                                <td>
                                                    <a href=\"";
                // line 163
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_etablissement", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-outline-info btn-xs\" disabled>Info</button></a>
                                                    <a><button type=\"button\" class=\"btn btn-outline-info btn-xs\" disabled>Ajouter</button> </a>
                                                </td>
                                                <td>
                                                    <a><button type=\"button\" class=\"btn btn-outline-primary btn-xs\" disabled>Update</button></a>
                                                </td>
                                                <td>
                                                    <a><button type=\"button\" class=\"btn btn-xs btn-outline-danger desactivt\" data-id=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\" data-target=\"#view-contact\" data-toggle=\"modal\">Desactive</button></a>
                                                </td>
                                            </tr>
                                        ";
            }
            // line 174
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                                    </tbody>
                                </table>
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
                                            <div class=\"contact-follow\">
                                                <div class=\"profile-icon text-xs-center\">
                                                    <p>sddssdsdsdssd</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\"  class=\"btn btn-primary edit-profile edit save-btn desactiv\">Confirmer</button>
                                    <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>




        <div id=\"view-add\" class=\"modal fade\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        <h4 class=\"modal-title\">Ajouter Client</h4>
                    </div>
                    <div class=\"modal-body contact-info\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"divider15\"></div>
                                <div class=\"contact-follow\">
                                    ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ERPBundle:SuperAdmin/SuperAdmin:addClient"));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"view-update-client\" class=\"modal fade\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        <h4 class=\"modal-title\">Update Client</h4>
                    </div>
                    <div class=\"modal-body contact-info\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"divider15\"></div>
                                <div class=\"contact-follow\">
                                    <script type=\"text/javascript\">
                                        \$('.update-Client').click(function(){
                                            id = \$(this).data('id');
                                            \$.ajax({
                                                type: 'POST',
                                                url: Routing.generate('super_admin_client_update',{'id':id}),
                                                complete: function(data) {
                                                    \$('.contact-follow').html(data.responseText)
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"view-add-etablissement\" class=\"modal fade\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        <h4 class=\"modal-title\">Ajouter Etablissement</h4>
                    </div>
                    <div class=\"modal-body contact-info\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"divider15\"></div>
                                <div class=\"contact-follow\">
                                    <script type=\"text/javascript\">
                                        \$('.add-Etablissement').click(function(){
                                            id = \$(this).data('id');
                                            \$.ajax({
                                                type: 'POST',
                                                url: Routing.generate('super_admin_etablissement_create',{'id':id}),
                                                complete: function(data) {
                                                    \$('.contact-follow').html(data.responseText)
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8f208709d7ef12abee12f10069f5c41ebd3eef2ead8ccb33347cc1004712fc55->leave($__internal_8f208709d7ef12abee12f10069f5c41ebd3eef2ead8ccb33347cc1004712fc55_prof);

        
        $__internal_1e646d578847cc3810ca81805a48d0c61f952a774e7f8308e83ccdca5d7feb3c->leave($__internal_1e646d578847cc3810ca81805a48d0c61f952a774e7f8308e83ccdca5d7feb3c_prof);

    }

    // line 94
    public function block_menu($context, array $blocks = array())
    {
        $__internal_543327d93f9def1a983c36326b20722efc33c309beaf056bc082cd0f4648091c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543327d93f9def1a983c36326b20722efc33c309beaf056bc082cd0f4648091c->enter($__internal_543327d93f9def1a983c36326b20722efc33c309beaf056bc082cd0f4648091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_715be8e8078c18c04c3f3e57ffae7cc7a0d41ff895fd0d2ee21b9b46cb942839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715be8e8078c18c04c3f3e57ffae7cc7a0d41ff895fd0d2ee21b9b46cb942839->enter($__internal_715be8e8078c18c04c3f3e57ffae7cc7a0d41ff895fd0d2ee21b9b46cb942839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("::headers/menuSuperAdmin.html.twig", "ERPBundle:SuperAdmin/client:index.html.twig", 94)->display($context);
        
        $__internal_715be8e8078c18c04c3f3e57ffae7cc7a0d41ff895fd0d2ee21b9b46cb942839->leave($__internal_715be8e8078c18c04c3f3e57ffae7cc7a0d41ff895fd0d2ee21b9b46cb942839_prof);

        
        $__internal_543327d93f9def1a983c36326b20722efc33c309beaf056bc082cd0f4648091c->leave($__internal_543327d93f9def1a983c36326b20722efc33c309beaf056bc082cd0f4648091c_prof);

    }

    // line 305
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bf4b4b20da596c7ddf3c7bb4e489cd99b76741495af1266495e9442587b105b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf4b4b20da596c7ddf3c7bb4e489cd99b76741495af1266495e9442587b105b->enter($__internal_8bf4b4b20da596c7ddf3c7bb4e489cd99b76741495af1266495e9442587b105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_408f65076c6efa6fcf8d8bb912d4ef723e1a14a29619153dafa38e3ccdf93640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408f65076c6efa6fcf8d8bb912d4ef723e1a14a29619153dafa38e3ccdf93640->enter($__internal_408f65076c6efa6fcf8d8bb912d4ef723e1a14a29619153dafa38e3ccdf93640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 306
        echo "            <script type=\"text/javascript\"
                    src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/editable-table/mindmup-editabletable.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"
                    src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/editable-table/numeric-input-example.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/datatable.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js\"></script>
            <script>
                \$('.desactivt').click(function() {
                    id = \$(this).data('id');
                    \$('.desactiv').click(function () {
                       \$.ajax({
                            url:  'http://localhost/erp/web/app_dev.php/backend/client/delete/'+id,
                            success: function (result) {
                                console.log(result);
                                window.location.href = \"http://localhost/erp/web/app_dev.php/backend/client\";
                            },
                           failed: function(a){
                                console.log(a);
                           }
                        });
                    });
                });
            </script>
        ";
        
        $__internal_408f65076c6efa6fcf8d8bb912d4ef723e1a14a29619153dafa38e3ccdf93640->leave($__internal_408f65076c6efa6fcf8d8bb912d4ef723e1a14a29619153dafa38e3ccdf93640_prof);

        
        $__internal_8bf4b4b20da596c7ddf3c7bb4e489cd99b76741495af1266495e9442587b105b->leave($__internal_8bf4b4b20da596c7ddf3c7bb4e489cd99b76741495af1266495e9442587b105b_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:SuperAdmin/client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 336,  648 => 335,  644 => 334,  640 => 333,  636 => 332,  631 => 330,  626 => 328,  621 => 326,  616 => 324,  611 => 322,  606 => 320,  601 => 318,  597 => 317,  592 => 315,  587 => 313,  582 => 311,  577 => 309,  572 => 307,  569 => 306,  560 => 305,  542 => 94,  456 => 229,  400 => 175,  394 => 174,  387 => 170,  377 => 163,  372 => 161,  362 => 160,  358 => 159,  354 => 158,  350 => 157,  346 => 156,  343 => 155,  336 => 151,  330 => 148,  324 => 145,  320 => 144,  315 => 142,  305 => 141,  301 => 140,  297 => 139,  293 => 138,  289 => 137,  286 => 136,  283 => 135,  279 => 134,  245 => 103,  240 => 101,  232 => 95,  230 => 94,  226 => 92,  217 => 91,  204 => 89,  195 => 88,  182 => 85,  178 => 84,  174 => 83,  170 => 82,  166 => 81,  162 => 80,  158 => 79,  154 => 78,  150 => 77,  146 => 76,  72 => 4,  63 => 3,  45 => 2,  11 => 1,);
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
{% block title %}SuperAdmin - Client{% endblock %}
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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/datatables-scroller/css/scroller.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-menu/css/layout.min.css') }}\"/>

{% endblock %}
{% block header %}
    {{ render(controller('ERPBundle:SuperAdmin/SuperAdmin:header')) }}
{% endblock %}
{% block body %}
    <div class=\"row\">
        <section id=\"content-wrapper\">
            {% block menu %}{% include '::headers/menuSuperAdmin.html.twig' %}{% endblock %}
            <div class=\"site-content-title\">
                <h2 class=\"float-xs-left content-title-main\">Client</h2>

                <ol class=\"breadcrumb float-xs-right\">
                    <li class=\"breadcrumb-item\">
                        <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                        <a href=\"{{ path('super_admin_homepage') }}\">Home</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('super_admin_client') }}\">Client</a></li>
                    <li class=\"breadcrumb-item active\">index</li>
                </ol>

            </div>
            <div class=\"content content-datatable datatable-width\">
                <div class=\"row\">
                    <div class='col-md-offset-10'>
                            <button class=\"btn btn-primary site-btn\" data-target=\"#view-add\" data-toggle=\"modal\">
                                Ajouter
                            </button>
                    </div>
                    <div class=\"divider15\"></div>
                    <div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <table data-plugin=\"datatable\" data-responsive=\"true\" class=\"table table-striped table-hover dt-responsive\">
                                    <thead>
                                    <tr>
                                        <th>Nom de Client</th>
                                        <th>CIN</th>
                                        <th>Email</th>
                                        <th>Date d'Ajouter</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                        <th>Etablissement</th>
                                        <th>action</th>
                                        <th>Statu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for e in client %}
                                        {% if e.enabled == 1 %}
                                        <tr>
                                            <td>{{ e.fullName }}</td>
                                            <td>{{ e.cin }}</td>
                                            <td>{{ e.dateAjout|date('M d Y H:i') }}</td>
                                            <td>{{ e.mail }}</td>
                                            <td>{{ e.adresse }} , {{ e.ville }} {{ e.cp }} , {{ e.pays }}</td>
                                            <td>{{ e.tel }}</td>
                                            <td>
                                                <a href=\"{{ path('super_admin_etablissement',{'id':e.id}) }}\"><button type=\"button\" class=\"btn btn-outline-secondary btn-xs\">Info</button></a>
                                                <a><button type=\"button\" class=\"btn btn-outline-info btn-xs add-Etablissement\" data-target=\"#view-add-etablissement\" data-toggle=\"modal\" data-id=\"{{ e.id }}\">Ajouter</button> </a>
                                            </td>
                                            <td>
                                                <a><button type=\"button\" class=\"btn btn-outline-primary btn-xs update-Client\" data-target=\"#view-update-client\" data-toggle=\"modal\" data-id=\"{{ e.id }}\">Update</button></a>
                                            </td>
                                            <td>
                                                <a><button type=\"button\" class=\"btn btn-xs btn-outline-success btn-xs desactivt\" data-id=\"{{ e.id }}\" data-target=\"#view-contact\" data-toggle=\"modal\">Active</button></a>
                                            </td>
                                        </tr>
                                        {% else %}
                                            <tr>
                                                <td>{{ e.fullname }}</td>
                                                <td>{{ e.cin }}</td>
                                                <td>{{ e.dateAjout|date('M d Y H:i') }}</td>
                                                <td>{{ e.mail }}</td>
                                                <td>{{ e.adresse }} , {{ e.ville }} {{ e.cp }} , {{ e.pays }}</td>
                                                <td>{{ e.tel }}</td>
                                                <td>
                                                    <a href=\"{{ path('super_admin_etablissement',{'id':e.id}) }}\"><button type=\"button\" class=\"btn btn-outline-info btn-xs\" disabled>Info</button></a>
                                                    <a><button type=\"button\" class=\"btn btn-outline-info btn-xs\" disabled>Ajouter</button> </a>
                                                </td>
                                                <td>
                                                    <a><button type=\"button\" class=\"btn btn-outline-primary btn-xs\" disabled>Update</button></a>
                                                </td>
                                                <td>
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
                                            <div class=\"contact-follow\">
                                                <div class=\"profile-icon text-xs-center\">
                                                    <p>sddssdsdsdssd</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\"  class=\"btn btn-primary edit-profile edit save-btn desactiv\">Confirmer</button>
                                    <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>




        <div id=\"view-add\" class=\"modal fade\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        <h4 class=\"modal-title\">Ajouter Client</h4>
                    </div>
                    <div class=\"modal-body contact-info\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"divider15\"></div>
                                <div class=\"contact-follow\">
                                    {{ render(controller('ERPBundle:SuperAdmin/SuperAdmin:addClient')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"view-update-client\" class=\"modal fade\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        <h4 class=\"modal-title\">Update Client</h4>
                    </div>
                    <div class=\"modal-body contact-info\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"divider15\"></div>
                                <div class=\"contact-follow\">
                                    <script type=\"text/javascript\">
                                        \$('.update-Client').click(function(){
                                            id = \$(this).data('id');
                                            \$.ajax({
                                                type: 'POST',
                                                url: Routing.generate('super_admin_client_update',{'id':id}),
                                                complete: function(data) {
                                                    \$('.contact-follow').html(data.responseText)
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"view-add-etablissement\" class=\"modal fade\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        <h4 class=\"modal-title\">Ajouter Etablissement</h4>
                    </div>
                    <div class=\"modal-body contact-info\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"divider15\"></div>
                                <div class=\"contact-follow\">
                                    <script type=\"text/javascript\">
                                        \$('.add-Etablissement').click(function(){
                                            id = \$(this).data('id');
                                            \$.ajax({
                                                type: 'POST',
                                                url: Routing.generate('super_admin_etablissement_create',{'id':id}),
                                                complete: function(data) {
                                                    \$('.contact-follow').html(data.responseText)
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
        {% block javascripts %}
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
            <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
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
                    src=\"{{ asset('assets/global/plugins/editable-table/mindmup-editabletable.js') }}\"></script>
            <script type=\"text/javascript\"
                    src=\"{{ asset('assets/global/plugins/editable-table/numeric-input-example.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/datatable.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-menu/js/layout.min.js') }}\"></script>
            <script src=\"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js\"></script>
            <script>
                \$('.desactivt').click(function() {
                    id = \$(this).data('id');
                    \$('.desactiv').click(function () {
                       \$.ajax({
                            url:  'http://localhost/erp/web/app_dev.php/backend/client/delete/'+id,
                            success: function (result) {
                                console.log(result);
                                window.location.href = \"http://localhost/erp/web/app_dev.php/backend/client\";
                            },
                           failed: function(a){
                                console.log(a);
                           }
                        });
                    });
                });
            </script>
        {% endblock %}", "ERPBundle:SuperAdmin/client:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/SuperAdmin/client/index.html.twig");
    }
}
