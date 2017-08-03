<?php

/* ERPBundle:SuperAdmin/etablissement:config.html.twig */
class __TwigTemplate_757306aeba0100ad1c4eaeddd583baef87225a31abfc2c96129faec378aba44d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ERPBundle:SuperAdmin/etablissement:config.html.twig", 1);
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
        $__internal_88b0144ed88d623dce5dba9cb301c9ad16fd487f630bfe00a7460ee0e4797922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b0144ed88d623dce5dba9cb301c9ad16fd487f630bfe00a7460ee0e4797922->enter($__internal_88b0144ed88d623dce5dba9cb301c9ad16fd487f630bfe00a7460ee0e4797922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/etablissement:config.html.twig"));

        $__internal_6d1a9ddb3166f54508e32b8d5a4cf14a02adca5052007fcca07051b0d7ca514a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1a9ddb3166f54508e32b8d5a4cf14a02adca5052007fcca07051b0d7ca514a->enter($__internal_6d1a9ddb3166f54508e32b8d5a4cf14a02adca5052007fcca07051b0d7ca514a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/etablissement:config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b0144ed88d623dce5dba9cb301c9ad16fd487f630bfe00a7460ee0e4797922->leave($__internal_88b0144ed88d623dce5dba9cb301c9ad16fd487f630bfe00a7460ee0e4797922_prof);

        
        $__internal_6d1a9ddb3166f54508e32b8d5a4cf14a02adca5052007fcca07051b0d7ca514a->leave($__internal_6d1a9ddb3166f54508e32b8d5a4cf14a02adca5052007fcca07051b0d7ca514a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d000f28f4cded2180c3033e35141b56fd02114f2173b3f7e42185d22526bcbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d000f28f4cded2180c3033e35141b56fd02114f2173b3f7e42185d22526bcbc5->enter($__internal_d000f28f4cded2180c3033e35141b56fd02114f2173b3f7e42185d22526bcbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76d3ee4688ab8369d44845551f02bb48c9e261241e29d582d6f9668696dac0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d3ee4688ab8369d44845551f02bb48c9e261241e29d582d6f9668696dac0f1->enter($__internal_76d3ee4688ab8369d44845551f02bb48c9e261241e29d582d6f9668696dac0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SuperAdmin - Index";
        
        $__internal_76d3ee4688ab8369d44845551f02bb48c9e261241e29d582d6f9668696dac0f1->leave($__internal_76d3ee4688ab8369d44845551f02bb48c9e261241e29d582d6f9668696dac0f1_prof);

        
        $__internal_d000f28f4cded2180c3033e35141b56fd02114f2173b3f7e42185d22526bcbc5->leave($__internal_d000f28f4cded2180c3033e35141b56fd02114f2173b3f7e42185d22526bcbc5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de7a3ffbe4cf0cd166d95bb9c46ec0999ae142bd9c1255424423d2d0203abc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7a3ffbe4cf0cd166d95bb9c46ec0999ae142bd9c1255424423d2d0203abc01->enter($__internal_de7a3ffbe4cf0cd166d95bb9c46ec0999ae142bd9c1255424423d2d0203abc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b0169fe27a0afc8e91ea3b18cf69ffaa1bad00c9765cf7f04df81afcc5dd9336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0169fe27a0afc8e91ea3b18cf69ffaa1bad00c9765cf7f04df81afcc5dd9336->enter($__internal_b0169fe27a0afc8e91ea3b18cf69ffaa1bad00c9765cf7f04df81afcc5dd9336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\"
          href=\".";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/css/scroller.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/chartist/dist/chartist.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_b0169fe27a0afc8e91ea3b18cf69ffaa1bad00c9765cf7f04df81afcc5dd9336->leave($__internal_b0169fe27a0afc8e91ea3b18cf69ffaa1bad00c9765cf7f04df81afcc5dd9336_prof);

        
        $__internal_de7a3ffbe4cf0cd166d95bb9c46ec0999ae142bd9c1255424423d2d0203abc01->leave($__internal_de7a3ffbe4cf0cd166d95bb9c46ec0999ae142bd9c1255424423d2d0203abc01_prof);

    }

    // line 95
    public function block_header($context, array $blocks = array())
    {
        $__internal_e453a819e28c830813c83c003106b586c1a47fdf7f0caab21f7c00a46143020b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e453a819e28c830813c83c003106b586c1a47fdf7f0caab21f7c00a46143020b->enter($__internal_e453a819e28c830813c83c003106b586c1a47fdf7f0caab21f7c00a46143020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_39af185ce23d2b0e2da98ebfbb94c810916e8801af97562f75bc2db57e0e768a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39af185ce23d2b0e2da98ebfbb94c810916e8801af97562f75bc2db57e0e768a->enter($__internal_39af185ce23d2b0e2da98ebfbb94c810916e8801af97562f75bc2db57e0e768a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 96
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ERPBundle:SuperAdmin/SuperAdmin:header"));
        echo "
";
        
        $__internal_39af185ce23d2b0e2da98ebfbb94c810916e8801af97562f75bc2db57e0e768a->leave($__internal_39af185ce23d2b0e2da98ebfbb94c810916e8801af97562f75bc2db57e0e768a_prof);

        
        $__internal_e453a819e28c830813c83c003106b586c1a47fdf7f0caab21f7c00a46143020b->leave($__internal_e453a819e28c830813c83c003106b586c1a47fdf7f0caab21f7c00a46143020b_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8da44802dfdf6252056671e025700e78c367132c3d241902e2e7f5b07558d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8da44802dfdf6252056671e025700e78c367132c3d241902e2e7f5b07558d81->enter($__internal_d8da44802dfdf6252056671e025700e78c367132c3d241902e2e7f5b07558d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c8b31fb31eda9f08f8782a799256c335b9bc30ca35cd2a6bf68cde924c1af4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8b31fb31eda9f08f8782a799256c335b9bc30ca35cd2a6bf68cde924c1af4a->enter($__internal_4c8b31fb31eda9f08f8782a799256c335b9bc30ca35cd2a6bf68cde924c1af4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "    <div class=\"row\">
        <section id=\"content-wrapper\">
            ";
        // line 101
        $this->displayBlock('menu', $context, $blocks);
        // line 102
        echo "            <div class=\"site-content-title\">
                <h2 class=\"float-xs-left content-title-main\">Etablissement</h2>

                <ol class=\"breadcrumb float-xs-right\">
                    <li class=\"breadcrumb-item\">
                        <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                        <a href=\"#\">Home</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Etablissement</a></li>
                    <li class=\"breadcrumb-item active\">Parametrage</li>
                </ol>
            </div>
            <div class=\"col-xs-12\">
                <form action=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_etablissement_add_config");
        echo "\" method=\"post\">
                    <div class=\"dashboard-table dashboard-table-margin dashboard-table-search\">
                    <table data-plugin=\"datatable\" class=\"table table-striped table-hover display nowrap content-order-shipment\">
                        <thead>
                        <tr>
                            <th>
                                <div class=\"checkbox product-check\">
                                    <div class=\"checkbox-squared float-xs-left\">
                                        <input type=\"checkbox\" class=\"check_all float-xs-none\" value=\"None\"
                                               id=\"checkbox-shipments\" name=\"vertical\"/>
                                        <label for=\"checkbox-shipments\"></label>
                                    </div>
                                </div>
                            </th>
                            <th>Permission</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments1\" name=\"edt\" ";
        // line 137
        if (($this->getAttribute(($context["permission"] ?? $this->getContext($context, "permission")), "edt", array()) == true)) {
            echo " checked ";
        }
        echo "/>
                                            <label for=\"checkbox-shipments1\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">EDT</span></th>
                            </tr>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments2\" name=\"class\" ";
        // line 148
        if (($this->getAttribute(($context["permission"] ?? $this->getContext($context, "permission")), "class", array()) == true)) {
            echo " checked ";
        }
        echo "/>
                                            <label for=\"checkbox-shipments2\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">Gestion de Classe</span></th>
                            </tr>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments3\" name=\"ue\" ";
        // line 159
        if (($this->getAttribute(($context["permission"] ?? $this->getContext($context, "permission")), "ue", array()) == true)) {
            echo " checked ";
        }
        echo "/>
                                            <label for=\"checkbox-shipments3\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">Unité d'enseignement</span></th>
                            </tr>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments4\" name=\"grh\" ";
        // line 170
        if (($this->getAttribute(($context["permission"] ?? $this->getContext($context, "permission")), "grh", array()) == true)) {
            echo " checked ";
        }
        echo "/>
                                            <label for=\"checkbox-shipments4\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">Gestion des Ressources Humaines</span></th>
                            </tr>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments5\" name=\"p\" ";
        // line 181
        if (($this->getAttribute(($context["permission"] ?? $this->getContext($context, "permission")), "paiment", array()) == true)) {
            echo " checked ";
        }
        echo "/>
                                            <label for=\"checkbox-shipments5\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">Paiment</span></th>
                            </tr>}
                        </tbody>
                    </table>
                </div>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
                    <button type=\"submit\" class=\"btn btn-primary pull-right\">Valide</button>
                </form>
            </div>
        </section>
    </div>
";
        
        $__internal_4c8b31fb31eda9f08f8782a799256c335b9bc30ca35cd2a6bf68cde924c1af4a->leave($__internal_4c8b31fb31eda9f08f8782a799256c335b9bc30ca35cd2a6bf68cde924c1af4a_prof);

        
        $__internal_d8da44802dfdf6252056671e025700e78c367132c3d241902e2e7f5b07558d81->leave($__internal_d8da44802dfdf6252056671e025700e78c367132c3d241902e2e7f5b07558d81_prof);

    }

    // line 101
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98cba26101be2bf17c364c7ab561fa0ba56f91f4900b78cdf052c0eb016801ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cba26101be2bf17c364c7ab561fa0ba56f91f4900b78cdf052c0eb016801ec->enter($__internal_98cba26101be2bf17c364c7ab561fa0ba56f91f4900b78cdf052c0eb016801ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_870036ec97db79c9334137780dca05ed4c58264fb449ce1244563296f15d206b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870036ec97db79c9334137780dca05ed4c58264fb449ce1244563296f15d206b->enter($__internal_870036ec97db79c9334137780dca05ed4c58264fb449ce1244563296f15d206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("::headers/menuSuperAdmin.html.twig", "ERPBundle:SuperAdmin/etablissement:config.html.twig", 101)->display($context);
        
        $__internal_870036ec97db79c9334137780dca05ed4c58264fb449ce1244563296f15d206b->leave($__internal_870036ec97db79c9334137780dca05ed4c58264fb449ce1244563296f15d206b_prof);

        
        $__internal_98cba26101be2bf17c364c7ab561fa0ba56f91f4900b78cdf052c0eb016801ec->leave($__internal_98cba26101be2bf17c364c7ab561fa0ba56f91f4900b78cdf052c0eb016801ec_prof);

    }

    // line 198
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bba0593a7a2b6615a4bad2555fb3ac9ef3303d0a57d9939797b9469ab87edd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba0593a7a2b6615a4bad2555fb3ac9ef3303d0a57d9939797b9469ab87edd92->enter($__internal_bba0593a7a2b6615a4bad2555fb3ac9ef3303d0a57d9939797b9469ab87edd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_daf8710bb3b6ef80786f8528d3fead8c257c4d67433e826719fcc031f1418fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf8710bb3b6ef80786f8528d3fead8c257c4d67433e826719fcc031f1418fb8->enter($__internal_daf8710bb3b6ef80786f8528d3fead8c257c4d67433e826719fcc031f1418fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 199
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/chartist/dist/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/chartist-plugin-threshold/dist/chartist-plugin-threshold.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/chart.js/dist/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/chart.js/samples/utils.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/real_estate_dashboard.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/product_edit.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/global_validation.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_daf8710bb3b6ef80786f8528d3fead8c257c4d67433e826719fcc031f1418fb8->leave($__internal_daf8710bb3b6ef80786f8528d3fead8c257c4d67433e826719fcc031f1418fb8_prof);

        
        $__internal_bba0593a7a2b6615a4bad2555fb3ac9ef3303d0a57d9939797b9469ab87edd92->leave($__internal_bba0593a7a2b6615a4bad2555fb3ac9ef3303d0a57d9939797b9469ab87edd92_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:SuperAdmin/etablissement:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 223,  501 => 222,  497 => 221,  493 => 220,  489 => 219,  485 => 218,  481 => 217,  477 => 216,  473 => 215,  469 => 214,  465 => 213,  461 => 212,  457 => 211,  453 => 210,  449 => 209,  445 => 208,  441 => 207,  437 => 206,  433 => 205,  429 => 204,  425 => 203,  421 => 202,  417 => 201,  413 => 200,  408 => 199,  399 => 198,  381 => 101,  364 => 191,  349 => 181,  333 => 170,  317 => 159,  301 => 148,  285 => 137,  260 => 115,  245 => 102,  243 => 101,  239 => 99,  230 => 98,  217 => 96,  208 => 95,  195 => 92,  191 => 91,  187 => 90,  183 => 89,  178 => 87,  173 => 85,  168 => 83,  164 => 82,  159 => 80,  155 => 79,  150 => 77,  146 => 76,  72 => 4,  63 => 3,  45 => 2,  11 => 1,);
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
{% block title %}SuperAdmin - Index{% endblock %}
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
    <link rel=\"stylesheet\"
          href=\".{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables-scroller/css/scroller.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/chartist/dist/chartist.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.css') }}\"/>
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
                <h2 class=\"float-xs-left content-title-main\">Etablissement</h2>

                <ol class=\"breadcrumb float-xs-right\">
                    <li class=\"breadcrumb-item\">
                        <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                        <a href=\"#\">Home</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Etablissement</a></li>
                    <li class=\"breadcrumb-item active\">Parametrage</li>
                </ol>
            </div>
            <div class=\"col-xs-12\">
                <form action=\"{{ path('super_admin_etablissement_add_config') }}\" method=\"post\">
                    <div class=\"dashboard-table dashboard-table-margin dashboard-table-search\">
                    <table data-plugin=\"datatable\" class=\"table table-striped table-hover display nowrap content-order-shipment\">
                        <thead>
                        <tr>
                            <th>
                                <div class=\"checkbox product-check\">
                                    <div class=\"checkbox-squared float-xs-left\">
                                        <input type=\"checkbox\" class=\"check_all float-xs-none\" value=\"None\"
                                               id=\"checkbox-shipments\" name=\"vertical\"/>
                                        <label for=\"checkbox-shipments\"></label>
                                    </div>
                                </div>
                            </th>
                            <th>Permission</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments1\" name=\"edt\" {% if permission.edt == true %} checked {% endif %}/>
                                            <label for=\"checkbox-shipments1\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">EDT</span></th>
                            </tr>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments2\" name=\"class\" {% if permission.class == true %} checked {% endif %}/>
                                            <label for=\"checkbox-shipments2\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">Gestion de Classe</span></th>
                            </tr>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments3\" name=\"ue\" {% if permission.ue == true %} checked {% endif %}/>
                                            <label for=\"checkbox-shipments3\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">Unité d'enseignement</span></th>
                            </tr>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments4\" name=\"grh\" {% if permission.grh == true %} checked {% endif %}/>
                                            <label for=\"checkbox-shipments4\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">Gestion des Ressources Humaines</span></th>
                            </tr>
                            <tr>
                                <td class=\"mail_message\">
                                    <div class=\"checkbox product-check\">
                                        <div class=\"checkbox-squared float-xs-left\">
                                            <input type=\"checkbox\" id=\"checkbox-shipments5\" name=\"p\" {% if permission.paiment == true %} checked {% endif %}/>
                                            <label for=\"checkbox-shipments5\"></label>
                                        </div>
                                    </div>
                                </td>
                                <th><span class=\"\">Paiment</span></th>
                            </tr>}
                        </tbody>
                    </table>
                </div>
                    <input type=\"hidden\" name=\"id\" value=\"{{ id }}\"/>
                    <button type=\"submit\" class=\"btn btn-primary pull-right\">Valide</button>
                </form>
            </div>
        </section>
    </div>
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/tether/dist/js/tether.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/screenfull.js/dist/screenfull.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flot/jquery.flot.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/Flot/jquery.flot.resize.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/chartist/dist/chartist.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/chartist-plugin-threshold/dist/chartist-plugin-threshold.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/chart.js/dist/Chart.bundle.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/chart.js/samples/utils.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-validation/dist/jquery.validate.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/real_estate_dashboard.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/product_edit.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/global_validation.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-menu/js/layout.min.js') }}\"></script>


{% endblock %}", "ERPBundle:SuperAdmin/etablissement:config.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/SuperAdmin/etablissement/config.html.twig");
    }
}
