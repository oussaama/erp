<?php

/* ERPBundle:SuperAdmin/etablissement:index.html.twig */
class __TwigTemplate_5e34071372c084757e843ba1c91e72f6b258995fa07db40f62cddfc64fd9126f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ERPBundle:SuperAdmin/etablissement:index.html.twig", 1);
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
        $__internal_d2153698fd9137d5ddb0fb220ff32a88db8100404cea05f2d4b0997f6f23fe41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2153698fd9137d5ddb0fb220ff32a88db8100404cea05f2d4b0997f6f23fe41->enter($__internal_d2153698fd9137d5ddb0fb220ff32a88db8100404cea05f2d4b0997f6f23fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/etablissement:index.html.twig"));

        $__internal_79a9ef4f6ff1e9d32749cf77e5d8acbf104ec5b9dd4416c2e0f9dba5789b5a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a9ef4f6ff1e9d32749cf77e5d8acbf104ec5b9dd4416c2e0f9dba5789b5a85->enter($__internal_79a9ef4f6ff1e9d32749cf77e5d8acbf104ec5b9dd4416c2e0f9dba5789b5a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/etablissement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2153698fd9137d5ddb0fb220ff32a88db8100404cea05f2d4b0997f6f23fe41->leave($__internal_d2153698fd9137d5ddb0fb220ff32a88db8100404cea05f2d4b0997f6f23fe41_prof);

        
        $__internal_79a9ef4f6ff1e9d32749cf77e5d8acbf104ec5b9dd4416c2e0f9dba5789b5a85->leave($__internal_79a9ef4f6ff1e9d32749cf77e5d8acbf104ec5b9dd4416c2e0f9dba5789b5a85_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cc739df133e6d7b3e797c0f1f533a7bc0a5aac79cda0b798bc9ffb004170e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc739df133e6d7b3e797c0f1f533a7bc0a5aac79cda0b798bc9ffb004170e18->enter($__internal_9cc739df133e6d7b3e797c0f1f533a7bc0a5aac79cda0b798bc9ffb004170e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38f3ab9e47af311988312c1d0775a8f6a75ee836b88c1b86857170e94b86bd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f3ab9e47af311988312c1d0775a8f6a75ee836b88c1b86857170e94b86bd6b->enter($__internal_38f3ab9e47af311988312c1d0775a8f6a75ee836b88c1b86857170e94b86bd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SuperAdmin - Index";
        
        $__internal_38f3ab9e47af311988312c1d0775a8f6a75ee836b88c1b86857170e94b86bd6b->leave($__internal_38f3ab9e47af311988312c1d0775a8f6a75ee836b88c1b86857170e94b86bd6b_prof);

        
        $__internal_9cc739df133e6d7b3e797c0f1f533a7bc0a5aac79cda0b798bc9ffb004170e18->leave($__internal_9cc739df133e6d7b3e797c0f1f533a7bc0a5aac79cda0b798bc9ffb004170e18_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a73ca810026972d6831887efe8d611a051fbfb3f8c7875e3b8569aaf9fce9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a73ca810026972d6831887efe8d611a051fbfb3f8c7875e3b8569aaf9fce9e1->enter($__internal_2a73ca810026972d6831887efe8d611a051fbfb3f8c7875e3b8569aaf9fce9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f7e30ececd02df2d657cec63a81fd97430b005d64d7bb1266da4d7b6fd15e35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e30ececd02df2d657cec63a81fd97430b005d64d7bb1266da4d7b6fd15e35c->enter($__internal_f7e30ececd02df2d657cec63a81fd97430b005d64d7bb1266da4d7b6fd15e35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\"
          href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/css/scroller.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>

";
        
        $__internal_f7e30ececd02df2d657cec63a81fd97430b005d64d7bb1266da4d7b6fd15e35c->leave($__internal_f7e30ececd02df2d657cec63a81fd97430b005d64d7bb1266da4d7b6fd15e35c_prof);

        
        $__internal_2a73ca810026972d6831887efe8d611a051fbfb3f8c7875e3b8569aaf9fce9e1->leave($__internal_2a73ca810026972d6831887efe8d611a051fbfb3f8c7875e3b8569aaf9fce9e1_prof);

    }

    // line 91
    public function block_header($context, array $blocks = array())
    {
        $__internal_aa391f3ab3384fa22256014caa04433ae129442897eba53ce3838c1645f43cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa391f3ab3384fa22256014caa04433ae129442897eba53ce3838c1645f43cb6->enter($__internal_aa391f3ab3384fa22256014caa04433ae129442897eba53ce3838c1645f43cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5b970728a53ae8464a4be1cb3877c4066431a51b4b9d872f7f4c3257bcd5eddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b970728a53ae8464a4be1cb3877c4066431a51b4b9d872f7f4c3257bcd5eddb->enter($__internal_5b970728a53ae8464a4be1cb3877c4066431a51b4b9d872f7f4c3257bcd5eddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 92
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ERPBundle:SuperAdmin/SuperAdmin:header"));
        echo "
";
        
        $__internal_5b970728a53ae8464a4be1cb3877c4066431a51b4b9d872f7f4c3257bcd5eddb->leave($__internal_5b970728a53ae8464a4be1cb3877c4066431a51b4b9d872f7f4c3257bcd5eddb_prof);

        
        $__internal_aa391f3ab3384fa22256014caa04433ae129442897eba53ce3838c1645f43cb6->leave($__internal_aa391f3ab3384fa22256014caa04433ae129442897eba53ce3838c1645f43cb6_prof);

    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        $__internal_052597de1e09a97b9f27df9561044b34cb73515daa9aebff5c769460db16a463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052597de1e09a97b9f27df9561044b34cb73515daa9aebff5c769460db16a463->enter($__internal_052597de1e09a97b9f27df9561044b34cb73515daa9aebff5c769460db16a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cea688fddacdb44ca1f80303b878fdf774485e9376f869ee6a93726905ba06df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea688fddacdb44ca1f80303b878fdf774485e9376f869ee6a93726905ba06df->enter($__internal_cea688fddacdb44ca1f80303b878fdf774485e9376f869ee6a93726905ba06df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo "    <div class=\"row\">
        <section id=\"content-wrapper\">
            ";
        // line 97
        $this->displayBlock('menu', $context, $blocks);
        // line 98
        echo "            <div class=\"site-content-title\">
                <h2 class=\"float-xs-left content-title-main\">Etablissement</h2>

                <ol class=\"breadcrumb float-xs-right\">
                    <li class=\"breadcrumb-item\">
                        <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                        <a href=\"#\">Home</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Etablissement</a></li>
                    <li class=\"breadcrumb-item active\">index</li>
                </ol>

            </div>
            <div class=\"content content-datatable datatable-width\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"divider15\"></div>
                        <table data-plugin=\"datatable\" data-responsive=\"true\"
                               class=\"table table-striped table-hover dt-responsive\">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Academie</th>
                                <th>Annee</th>
                                <th>Adresse</th>
                                <th>Departement</th>
                                <th>Pays</th>
                                <th>Télephone</th>
                                <th>Fax</th>
                                <th>Site Web</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etablissement"] ?? $this->getContext($context, "etablissement")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 135
            echo "                                <tr>
                                    <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nomEtablissement", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "typeEtablissement", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "academie", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "anneeScolaire", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "codePostal", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "departement", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "pays", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "fax", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "siteWeb", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "mail", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 148
            if (($this->getAttribute($context["e"], "admin", array()) != null)) {
                // line 149
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_etablissement_config", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><i
                                                        class=\"icon_tools text-info\"></i></a>
                                        ";
            } else {
                // line 152
                echo "                                            <i class=\"icon_plus text-info add-Admin-Etablissement\"
                                               data-target=\"#view-admin-etablissement\" data-toggle=\"modal\"
                                               data-id=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\"></i>
                                        ";
            }
            // line 156
            echo "                                        <i class=\"icon_pencil-edit text-primary update-Etablissement\"
                                           data-target=\"#view-edit-etablissement\" data-toggle=\"modal\"
                                           data-id=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "\"></i>
                                        <a><i class=\"icon_trash text-danger\" data-target=\"#view-contact\"
                                              data-toggle=\"modal\"></i></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id=\"view-edit-etablissement\" class=\"modal modal-xl fade\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <h4 class=\"modal-title\">Update Etablissement</h4>
                        </div>
                        <div class=\"modal-body contact-info\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"divider15\"></div>
                                    <div class=\"contact-follow\" id=\"update-Etablissement-form\">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"view-admin-etablissement\" class=\"modal fade\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <h4 class=\"modal-title\">Ajouter Admin</h4>
                        </div>
                        <div class=\"modal-body contact-info\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"divider15\"></div>
                                    <div class=\"\" id=\"admin-etablissement-form\">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"view-contact\" class=\"modal fade\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <h4 class=\"modal-title\">Contact detail</h4>
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
                            <a href=\"";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_etablissement_delete", array("id" => 1));
        echo "\">
                                <button type=\"button\" data-toggle=\"edit\" class=\"btn btn-danger edit-profile edit save-btn\">
                                    Confirmer
                                </button>
                            </a>
                            <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
";
        
        $__internal_cea688fddacdb44ca1f80303b878fdf774485e9376f869ee6a93726905ba06df->leave($__internal_cea688fddacdb44ca1f80303b878fdf774485e9376f869ee6a93726905ba06df_prof);

        
        $__internal_052597de1e09a97b9f27df9561044b34cb73515daa9aebff5c769460db16a463->leave($__internal_052597de1e09a97b9f27df9561044b34cb73515daa9aebff5c769460db16a463_prof);

    }

    // line 97
    public function block_menu($context, array $blocks = array())
    {
        $__internal_572c8b08c0ab0db3ca0e342d23b37f4d1426796cf38945d8a7d519c68ddb42c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572c8b08c0ab0db3ca0e342d23b37f4d1426796cf38945d8a7d519c68ddb42c2->enter($__internal_572c8b08c0ab0db3ca0e342d23b37f4d1426796cf38945d8a7d519c68ddb42c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5b468640bc7fd78285f383826908a642e633e7b3f94d6c5281457870ccf4b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b468640bc7fd78285f383826908a642e633e7b3f94d6c5281457870ccf4b65->enter($__internal_f5b468640bc7fd78285f383826908a642e633e7b3f94d6c5281457870ccf4b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("::headers/menuSuperAdmin.html.twig", "ERPBundle:SuperAdmin/etablissement:index.html.twig", 97)->display($context);
        
        $__internal_f5b468640bc7fd78285f383826908a642e633e7b3f94d6c5281457870ccf4b65->leave($__internal_f5b468640bc7fd78285f383826908a642e633e7b3f94d6c5281457870ccf4b65_prof);

        
        $__internal_572c8b08c0ab0db3ca0e342d23b37f4d1426796cf38945d8a7d519c68ddb42c2->leave($__internal_572c8b08c0ab0db3ca0e342d23b37f4d1426796cf38945d8a7d519c68ddb42c2_prof);

    }

    // line 249
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12d262ae6d0e75519db2590595d10c1809ea771a27f20331e1fed0743db24e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d262ae6d0e75519db2590595d10c1809ea771a27f20331e1fed0743db24e8d->enter($__internal_12d262ae6d0e75519db2590595d10c1809ea771a27f20331e1fed0743db24e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8fedd313999949c4487ef3db0c50a912616fba58285468af30271ab3b7746582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fedd313999949c4487ef3db0c50a912616fba58285468af30271ab3b7746582->enter($__internal_8fedd313999949c4487ef3db0c50a912616fba58285468af30271ab3b7746582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/editable-table/mindmup-editabletable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/editable-table/numeric-input-example.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/datatable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.update-Etablissement').click(function () {
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('super_admin_etablissement_update',{'etab':id}),
                complete: function(data) {
                    \$('#update-Etablissement-form').html(data.responseText);
                }
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$(\".add-Admin-Etablissement\").click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('super_admin_etablissement_admin',{'id':id}),
                complete: function(data) {
                    \$('#admin-etablissement-form').html(data.responseText);
                }
            })
        });
    </script>
";
        
        $__internal_8fedd313999949c4487ef3db0c50a912616fba58285468af30271ab3b7746582->leave($__internal_8fedd313999949c4487ef3db0c50a912616fba58285468af30271ab3b7746582_prof);

        
        $__internal_12d262ae6d0e75519db2590595d10c1809ea771a27f20331e1fed0743db24e8d->leave($__internal_12d262ae6d0e75519db2590595d10c1809ea771a27f20331e1fed0743db24e8d_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:SuperAdmin/etablissement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 267,  552 => 266,  548 => 265,  544 => 264,  540 => 263,  536 => 262,  532 => 261,  528 => 260,  524 => 259,  520 => 258,  516 => 257,  512 => 256,  508 => 255,  504 => 254,  500 => 253,  496 => 252,  492 => 251,  487 => 250,  478 => 249,  460 => 97,  436 => 235,  363 => 164,  351 => 158,  347 => 156,  342 => 154,  338 => 152,  331 => 149,  329 => 148,  324 => 146,  320 => 145,  316 => 144,  312 => 143,  308 => 142,  304 => 141,  296 => 140,  292 => 139,  288 => 138,  284 => 137,  280 => 136,  277 => 135,  273 => 134,  235 => 98,  233 => 97,  229 => 95,  220 => 94,  207 => 92,  198 => 91,  185 => 88,  181 => 87,  177 => 86,  172 => 84,  167 => 82,  162 => 80,  158 => 79,  154 => 78,  150 => 77,  146 => 76,  72 => 4,  63 => 3,  45 => 2,  11 => 1,);
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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables-scroller/css/scroller.bootstrap4.min.css') }}\"/>
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
                <h2 class=\"float-xs-left content-title-main\">Etablissement</h2>

                <ol class=\"breadcrumb float-xs-right\">
                    <li class=\"breadcrumb-item\">
                        <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                        <a href=\"#\">Home</a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Etablissement</a></li>
                    <li class=\"breadcrumb-item active\">index</li>
                </ol>

            </div>
            <div class=\"content content-datatable datatable-width\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"divider15\"></div>
                        <table data-plugin=\"datatable\" data-responsive=\"true\"
                               class=\"table table-striped table-hover dt-responsive\">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Academie</th>
                                <th>Annee</th>
                                <th>Adresse</th>
                                <th>Departement</th>
                                <th>Pays</th>
                                <th>Télephone</th>
                                <th>Fax</th>
                                <th>Site Web</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for e in etablissement %}
                                <tr>
                                    <td>{{ e.nomEtablissement }}</td>
                                    <td>{{ e.typeEtablissement }}</td>
                                    <td>{{ e.academie }}</td>
                                    <td>{{ e.anneeScolaire }}</td>
                                    <td>{{ e.adresse }} , {{ e.ville }} {{ e.codePostal }}</td>
                                    <td>{{ e.departement }}</td>
                                    <td>{{ e.pays }}</td>
                                    <td>{{ e.tel }}</td>
                                    <td>{{ e.fax }}</td>
                                    <td>{{ e.siteWeb }}</td>
                                    <td>{{ e.mail }}</td>
                                    <td>
                                        {% if e.admin != null %}
                                            <a href=\"{{ path('super_admin_etablissement_config',{'id':e.id}) }}\"><i
                                                        class=\"icon_tools text-info\"></i></a>
                                        {% else %}
                                            <i class=\"icon_plus text-info add-Admin-Etablissement\"
                                               data-target=\"#view-admin-etablissement\" data-toggle=\"modal\"
                                               data-id=\"{{ e.id }}\"></i>
                                        {% endif %}
                                        <i class=\"icon_pencil-edit text-primary update-Etablissement\"
                                           data-target=\"#view-edit-etablissement\" data-toggle=\"modal\"
                                           data-id=\"{{ e.id }}\"></i>
                                        <a><i class=\"icon_trash text-danger\" data-target=\"#view-contact\"
                                              data-toggle=\"modal\"></i></a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id=\"view-edit-etablissement\" class=\"modal modal-xl fade\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <h4 class=\"modal-title\">Update Etablissement</h4>
                        </div>
                        <div class=\"modal-body contact-info\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"divider15\"></div>
                                    <div class=\"contact-follow\" id=\"update-Etablissement-form\">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"view-admin-etablissement\" class=\"modal fade\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <h4 class=\"modal-title\">Ajouter Admin</h4>
                        </div>
                        <div class=\"modal-body contact-info\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    <div class=\"divider15\"></div>
                                    <div class=\"\" id=\"admin-etablissement-form\">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"view-contact\" class=\"modal fade\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                            <h4 class=\"modal-title\">Contact detail</h4>
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
                            <a href=\"{{ path('super_admin_etablissement_delete',{'id':1}) }}\">
                                <button type=\"button\" data-toggle=\"edit\" class=\"btn btn-danger edit-profile edit save-btn\">
                                    Confirmer
                                </button>
                            </a>
                            <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                            </button>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/screenfull.js/dist/screenfull.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/dataTables.responsive.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/datatables-scroller/js/dataTables.scroller.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/editable-table/mindmup-editabletable.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/editable-table/numeric-input-example.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/datatable.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-menu/js/layout.min.js') }}\"></script>
    <script type=\"text/javascript\">
        \$('.update-Etablissement').click(function () {
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('super_admin_etablissement_update',{'etab':id}),
                complete: function(data) {
                    \$('#update-Etablissement-form').html(data.responseText);
                }
            });
        });
    </script>
    <script type=\"text/javascript\">
        \$(\".add-Admin-Etablissement\").click(function(){
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('super_admin_etablissement_admin',{'id':id}),
                complete: function(data) {
                    \$('#admin-etablissement-form').html(data.responseText);
                }
            })
        });
    </script>
{% endblock %}", "ERPBundle:SuperAdmin/etablissement:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/SuperAdmin/etablissement/index.html.twig");
    }
}
