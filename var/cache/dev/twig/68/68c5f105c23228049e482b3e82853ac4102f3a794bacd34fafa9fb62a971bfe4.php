<?php

/* ERPBundle:Admin/Membre/etudiant:index.html.twig */
class __TwigTemplate_36b07d5d9808926cc38903876e983c0359b20d1c9086b000bc68ef1b97cb1116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:index.html.twig", 1);
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
        $__internal_7ca819939b99c9a3755155ea4274082e9d610ee9f444c7fafed64fe43c8d4bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca819939b99c9a3755155ea4274082e9d610ee9f444c7fafed64fe43c8d4bce->enter($__internal_7ca819939b99c9a3755155ea4274082e9d610ee9f444c7fafed64fe43c8d4bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:index.html.twig"));

        $__internal_ad0f6a6b7d9a7ef9934c4eece25915f2f8c29583ee1ed5a539319072a66b2bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0f6a6b7d9a7ef9934c4eece25915f2f8c29583ee1ed5a539319072a66b2bfa->enter($__internal_ad0f6a6b7d9a7ef9934c4eece25915f2f8c29583ee1ed5a539319072a66b2bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca819939b99c9a3755155ea4274082e9d610ee9f444c7fafed64fe43c8d4bce->leave($__internal_7ca819939b99c9a3755155ea4274082e9d610ee9f444c7fafed64fe43c8d4bce_prof);

        
        $__internal_ad0f6a6b7d9a7ef9934c4eece25915f2f8c29583ee1ed5a539319072a66b2bfa->leave($__internal_ad0f6a6b7d9a7ef9934c4eece25915f2f8c29583ee1ed5a539319072a66b2bfa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c5a8fdd39683a94412bf988f0245c092f2b1c9a8238b174538331ac3dc692ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5a8fdd39683a94412bf988f0245c092f2b1c9a8238b174538331ac3dc692ab->enter($__internal_7c5a8fdd39683a94412bf988f0245c092f2b1c9a8238b174538331ac3dc692ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f120dceb766e1c25c04531a51518f74a723bf17f8fe23788e622ddb28332746a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f120dceb766e1c25c04531a51518f74a723bf17f8fe23788e622ddb28332746a->enter($__internal_f120dceb766e1c25c04531a51518f74a723bf17f8fe23788e622ddb28332746a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_f120dceb766e1c25c04531a51518f74a723bf17f8fe23788e622ddb28332746a->leave($__internal_f120dceb766e1c25c04531a51518f74a723bf17f8fe23788e622ddb28332746a_prof);

        
        $__internal_7c5a8fdd39683a94412bf988f0245c092f2b1c9a8238b174538331ac3dc692ab->leave($__internal_7c5a8fdd39683a94412bf988f0245c092f2b1c9a8238b174538331ac3dc692ab_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d72e7a1c3f4bd08148a656dedf42beef00957e4433dd229bbd6233bbe1aced0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72e7a1c3f4bd08148a656dedf42beef00957e4433dd229bbd6233bbe1aced0c->enter($__internal_d72e7a1c3f4bd08148a656dedf42beef00957e4433dd229bbd6233bbe1aced0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_988d3b7de733047613d24f089aab7096930d6aaa6b24cd56c6f97ef0d8aed353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988d3b7de733047613d24f089aab7096930d6aaa6b24cd56c6f97ef0d8aed353->enter($__internal_988d3b7de733047613d24f089aab7096930d6aaa6b24cd56c6f97ef0d8aed353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        tr [colspan=\"2\"] {
            text-align: center;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }

        .input-form {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_988d3b7de733047613d24f089aab7096930d6aaa6b24cd56c6f97ef0d8aed353->leave($__internal_988d3b7de733047613d24f089aab7096930d6aaa6b24cd56c6f97ef0d8aed353_prof);

        
        $__internal_d72e7a1c3f4bd08148a656dedf42beef00957e4433dd229bbd6233bbe1aced0c->leave($__internal_d72e7a1c3f4bd08148a656dedf42beef00957e4433dd229bbd6233bbe1aced0c_prof);

    }

    // line 113
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_0734fe0278899235200ab97b0f9f201573de1efbcd8f853b420af8c6d1063f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0734fe0278899235200ab97b0f9f201573de1efbcd8f853b420af8c6d1063f7b->enter($__internal_0734fe0278899235200ab97b0f9f201573de1efbcd8f853b420af8c6d1063f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_c92ffb571b5b21fb265145f0c5b768984317775fcc1ad1e761d7350fe09cd475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92ffb571b5b21fb265145f0c5b768984317775fcc1ad1e761d7350fe09cd475->enter($__internal_c92ffb571b5b21fb265145f0c5b768984317775fcc1ad1e761d7350fe09cd475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 114
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
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 142
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
        
        $__internal_c92ffb571b5b21fb265145f0c5b768984317775fcc1ad1e761d7350fe09cd475->leave($__internal_c92ffb571b5b21fb265145f0c5b768984317775fcc1ad1e761d7350fe09cd475_prof);

        
        $__internal_0734fe0278899235200ab97b0f9f201573de1efbcd8f853b420af8c6d1063f7b->leave($__internal_0734fe0278899235200ab97b0f9f201573de1efbcd8f853b420af8c6d1063f7b_prof);

    }

    // line 155
    public function block_body($context, array $blocks = array())
    {
        $__internal_27a747129c048a93c30b527b8574526640a94e9fca36d01520e0e91754591261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a747129c048a93c30b527b8574526640a94e9fca36d01520e0e91754591261->enter($__internal_27a747129c048a93c30b527b8574526640a94e9fca36d01520e0e91754591261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59e721c0ec0b05a5e28aa6d03d419555619c8ddc357eea8434573a1b766ab143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e721c0ec0b05a5e28aa6d03d419555619c8ddc357eea8434573a1b766ab143->enter($__internal_59e721c0ec0b05a5e28aa6d03d419555619c8ddc357eea8434573a1b766ab143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 156
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
                <li class=\"breadcrumb-item active\">index</li>
            </ol>

        </div>

        <div class=\"contain-inner dashboard-v2\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12 col-xl-12 xl-dashboard-v2\">
                        <div class=\"row\">
                            <div class=\"col-md-12 lg-dashboard-v2\">
                                <div class=\"content\">
                                    <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                                    <div class=\"dashboard-content\">
                                        <div class=\"dashboard-header\">
                                            <h4 class=\"page-content-title float-xs-left\">liste des Etudiants </h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span
                                                                    class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            <div class=\"divider15\"></div>
                                            <div class=\"nav-tab-horizontal-right\">
                                                <ul class=\"nav nav-tabs float-xs-right\" role=\"tablist\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons\" data-toggle=\"tab\"
                                                           href=\"#home\" role=\"tab\">Pré-Inscrit</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons\" data-toggle=\"tab\"
                                                           href=\"#attente\" role=\"tab\">Dossier Complement</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons\" data-toggle=\"tab\"
                                                           href=\"#paimentss\" role=\"tab\">Règelement</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons\" data-toggle=\"tab\"
                                                           href=\"#profile\" role=\"tab\">Affectation</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons active\" data-toggle=\"tab\"
                                                           href=\"#valideee\" role=\"tab\">Valide</a>
                                                    </li>
                                                </ul>
                                                <div class=\"divider15\"></div>
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane \" id=\"home\" role=\"tabpanel\">
                                                        <div class=\"row\">
                                                            <div class=\"col-xs-12\">
                                                                <a href=\"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant_add");
        echo "\">
                                                                    <button class=\"btn btn-primary site-btn\"
                                                                            data-target=\"#view-add\" data-toggle=\"modal\">
                                                                        Ajouter
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>id</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Niveau d'études</th>
                                                                        <th>Diplome</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau</th>
                                                                        <th>action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etudiantp"] ?? $this->getContext($context, "etudiantp")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 254
            echo "                                                                        <tr>
                                                                            <td>";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "pays", array()), "name", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "niveauEtude", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "diplome", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "filiere", array()), "filiere", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "niveau", array()), "niveau", array()), "html", null, true);
            echo "</td>
                                                                            <td>
                                                                                <a href=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_etudiant_detail", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">
                                                                                    <button type=\"button\"
                                                                                            class=\"btn btn-outline-primary btn-xs\">
                                                                                        Detail
                                                                                    </button>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"attente\" role=\"tabpanel\">
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nom</th>
                                                                        <th>Prenom</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Date d'Ajouter</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau</th>
                                                                        <th>Dossier</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etudiante"] ?? $this->getContext($context, "etudiante")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 307
            echo "                                                                        <tr>
                                                                            <td>";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 312
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "lastLogin", array()), "M d Y H:i"), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 313
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 314
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 315
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 316
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "pays", array()), "name", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 318
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "filiere", array()), "filiere", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 319
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "niveau", array()), "niveau", array()), "html", null, true);
            echo "</td>
                                                                            <td>
                                                                                ";
            // line 322
            if (($this->getAttribute($context["e"], "document", array()) != null)) {
                // line 323
                echo "                                                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_etudiant_show_document", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><span
                                                                                                class=\"icon_document text-danger btn-lg\"></span></a>
                                                                                ";
            } else {
                // line 326
                echo "                                                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_etudiant_document", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><button class=\"btn btn-outline-warning btn-xs\">Upload</button></a>
                                                                                ";
            }
            // line 328
            echo "                                                                            </td>
                                                                        </tr>
                                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"paimentss\" role=\"tabpanel\">
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Niveau d'études</th>
                                                                        <th>Diplome</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau</th>
                                                                        <th>Tranche</th>
                                                                        <th>Validation</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etudiantpa"] ?? $this->getContext($context, "etudiantpa")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 361
            echo "                                                                        <tr>
                                                                            <td>";
            // line 362
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 363
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 364
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 365
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 366
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 367
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 368
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 369
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "niveauEtude", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 371
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "diplome", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 372
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "filiere", array()), "filiere", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 374
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "niveau", array()), "niveau", array()), "html", null, true);
            echo "</td>
                                                                            <td>
                                                                                <a href=\"";
            // line 376
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant_slice", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">
                                                                                    <button type=\"button\"
                                                                                            class=\"btn btn-outline-primary btn-xs\">
                                                                                        Tranche
                                                                                    </button>
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <a>
                                                                                    <button type=\"button\"
                                                                                            class=\"btn btn-xs btn-outline-success btn-xs desactivt\"
                                                                                            data-id=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "\"
                                                                                            data-target=\"#view-validation\"
                                                                                            data-toggle=\"modal\">Validate
                                                                                    </button>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        echo "                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\"
                                                                       id=\"validate\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau d'études</th>
                                                                        <th>Diplome</th>
                                                                        <th>Niveau</th>
                                                                        <th>classe</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etudiant"] ?? $this->getContext($context, "etudiant")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 425
            echo "                                                                        <tr>
                                                                            <td>";
            // line 426
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 427
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 428
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 429
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 431
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 432
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "pays", array()), "name", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 434
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 435
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "niveauEtude", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 436
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "diplome", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 437
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "filiere", array()), "filiere", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 438
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 439
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "niveau", array()), "niveau", array()), "html", null, true);
            echo "</td>
                                                                            <td>
                                                                                ";
            // line 441
            if (($this->getAttribute($context["e"], "classe", array()) == null)) {
                // line 442
                echo "                                                                                    <a>
                                                                                        <button type=\"button\"
                                                                                                class=\"btn btn-outline-primary btn-xs add-Class\"
                                                                                                data-target=\"#view-add-classe\"
                                                                                                data-toggle=\"modal\"
                                                                                                data-id=\"";
                // line 447
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\">
                                                                                            Ajouter
                                                                                        </button>
                                                                                    </a>
                                                                                ";
            } else {
                // line 452
                echo "                                                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "classe", array()), "nomClass", array()), "html", null, true);
                echo "
                                                                                ";
            }
            // line 454
            echo "                                                                            </td>
                                                                        </tr>
                                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        echo "                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane active\" id=\"valideee\" role=\"tabpanel\">
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\"
                                                                       id=\"validate\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>id</th>
                                                                        <th>Numero</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>dateNaissance</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau</th>
                                                                        <th>Classe</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["etudiantv"] ?? $this->getContext($context, "etudiantv")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 488
            echo "                                                                        <tr>
                                                                            <td>";
            // line 489
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 490
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cie", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 491
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 492
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenom", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 493
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "naissance", array()), "M d Y "), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 494
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cin", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 495
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 496
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 497
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "cp", array()), "html", null, true);
            echo "
                                                                                , ";
            // line 498
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "pays", array()), "name", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 499
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "tel", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 500
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "filiere", array()), "filiere", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 501
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "specialite", array()), "nomSpecialite", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 502
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "niveau", array()), "niveau", array()), "html", null, true);
            echo "</td>
                                                                            <td>";
            // line 503
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "classe", array()), "nomClass", array()), "html", null, true);
            echo "</td>
                                                                            <td>
                                                                                ";
            // line 505
            if (($this->getAttribute($context["e"], "enabled", array()) == 1)) {
                // line 506
                echo "                                                                                    <a class=\"desactivt\"
                                                                                       data-id=\"";
                // line 507
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\"
                                                                                       data-target=\"#view-contact\"
                                                                                       data-toggle=\"modal\"><span
                                                                                                class=\"icon_minus_alt text-danger\"></span></a>
                                                                                    <a href=\"";
                // line 511
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant_update", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><span
                                                                                                class=\"text-danger icon_pencil\"></span></a>
                                                                                    <a href=\"";
                // line 513
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant_show_all", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><span
                                                                                                class=\"text-primary icon_document\"></span></a>
                                                                                ";
            } else {
                // line 516
                echo "                                                                                    <a class=\"desactivt\"
                                                                                       data-id=\"";
                // line 517
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\"
                                                                                       data-target=\"#view-contact\"
                                                                                       data-toggle=\"modal\"><span
                                                                                                class=\"icon_plus_alt text-success\"></span></a>
                                                                                    <a href=\"";
                // line 521
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant_update", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><span
                                                                                                class=\"text-danger icon_pencil disabled\"></span></a>
                                                                                    <a href=\"";
                // line 523
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant_show_all", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
                echo "\"><span
                                                                                                class=\"text-primary icon_document disabled\"></span></a>
                                                                                ";
            }
            // line 526
            echo "                                                                            </td>
                                                                        </tr>
                                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 529
        echo "                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <div id=\"view-contact\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Activation Etudiant</h4>
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
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn desactiv\">Confirmer</button>
                    <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-document-etudiant\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Confirmation Document</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow \" id=\"document-etudiant-form\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn validate\">Confirmer</button>
                    <button type=\"button\" class=\"btn btn-secondary refuse\" data-dismiss=\"modal\">Refuser</button>
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
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn validate\">Confirmer</button>
                    <button type=\"button\" class=\"btn btn-secondary  refuse\" data-dismiss=\"modal\">Refuser</button>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-add-parent\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Ajouter Parent</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\" id=\"add-parent-form\">
                                <script type=\"text/javascript\">
                                    \$('.add-Parent').click(function () {
                                        id = \$(this).data('id');
                                        \$.ajax({
                                            type: 'POST',
                                            url: Routing.generate('admin_universite_Parent_add', {'id': id}),
                                            complete: function (data) {
                                                \$('#add-parent-form').html(data.responseText);
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
    <div id=\"view-update-parent\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Update Parent</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\" id=\"update-parent-form\">
                                <script type=\"text/javascript\">
                                    \$('.update-Parent').click(function () {
                                        id = \$(this).data('id');
                                        \$.ajax({
                                            type: 'POST',
                                            url: Routing.generate('admin_Parent_update', {'id': id}),
                                            complete: function (data) {
                                                \$('#update-parent-form').html(data.responseText);
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
    <div id=\"view-add-classe\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Ajouter Etudiant dans classe</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\" id=\"add-etudiant-class-form\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_59e721c0ec0b05a5e28aa6d03d419555619c8ddc357eea8434573a1b766ab143->leave($__internal_59e721c0ec0b05a5e28aa6d03d419555619c8ddc357eea8434573a1b766ab143_prof);

        
        $__internal_27a747129c048a93c30b527b8574526640a94e9fca36d01520e0e91754591261->leave($__internal_27a747129c048a93c30b527b8574526640a94e9fca36d01520e0e91754591261_prof);

    }

    // line 716
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_a5be2e6a93c1259b58785c31182c97b9d959e84850d096c85715fb11e2aabe71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5be2e6a93c1259b58785c31182c97b9d959e84850d096c85715fb11e2aabe71->enter($__internal_a5be2e6a93c1259b58785c31182c97b9d959e84850d096c85715fb11e2aabe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_7e8c3f4345b41f84719424ab17d428057128193341a5985dcccd3eb798bba650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8c3f4345b41f84719424ab17d428057128193341a5985dcccd3eb798bba650->enter($__internal_7e8c3f4345b41f84719424ab17d428057128193341a5985dcccd3eb798bba650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 717
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 722
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 743
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
        \$('.add-Class').click(function () {
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('admin_etudiant_class', {'id': id}),
                complete: function (data) {
                    \$('#add-etudiant-class-form').html(data.responseText);
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    </script>
    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: 'http://localhost/erp/web/app_dev.php/admin/delete/' + id,
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });

            \$('.validate').click(function () {
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
        });
    </script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
       /* \$(document).ready(function () {
            var table = \$('#validate').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });*/
    </script>
";
        
        $__internal_7e8c3f4345b41f84719424ab17d428057128193341a5985dcccd3eb798bba650->leave($__internal_7e8c3f4345b41f84719424ab17d428057128193341a5985dcccd3eb798bba650_prof);

        
        $__internal_a5be2e6a93c1259b58785c31182c97b9d959e84850d096c85715fb11e2aabe71->leave($__internal_a5be2e6a93c1259b58785c31182c97b9d959e84850d096c85715fb11e2aabe71_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1434 => 751,  1429 => 749,  1424 => 747,  1419 => 745,  1414 => 743,  1409 => 741,  1405 => 740,  1401 => 739,  1397 => 738,  1393 => 737,  1389 => 736,  1384 => 734,  1379 => 732,  1374 => 730,  1370 => 729,  1366 => 728,  1362 => 727,  1358 => 726,  1354 => 725,  1349 => 723,  1345 => 722,  1340 => 720,  1335 => 718,  1330 => 717,  1321 => 716,  1125 => 529,  1109 => 526,  1103 => 523,  1098 => 521,  1091 => 517,  1088 => 516,  1082 => 513,  1077 => 511,  1070 => 507,  1067 => 506,  1065 => 505,  1060 => 503,  1056 => 502,  1052 => 501,  1048 => 500,  1044 => 499,  1040 => 498,  1034 => 497,  1030 => 496,  1026 => 495,  1022 => 494,  1018 => 493,  1014 => 492,  1010 => 491,  1006 => 490,  1002 => 489,  999 => 488,  982 => 487,  950 => 457,  934 => 454,  928 => 452,  920 => 447,  913 => 442,  911 => 441,  906 => 439,  902 => 438,  898 => 437,  894 => 436,  890 => 435,  886 => 434,  882 => 433,  876 => 432,  872 => 431,  868 => 430,  864 => 429,  860 => 428,  856 => 427,  852 => 426,  849 => 425,  832 => 424,  801 => 395,  779 => 387,  765 => 376,  760 => 374,  756 => 373,  752 => 372,  748 => 371,  744 => 370,  740 => 369,  734 => 368,  730 => 367,  726 => 366,  722 => 365,  718 => 364,  714 => 363,  710 => 362,  707 => 361,  690 => 360,  659 => 331,  643 => 328,  637 => 326,  630 => 323,  628 => 322,  623 => 320,  619 => 319,  615 => 318,  611 => 317,  607 => 316,  601 => 315,  597 => 314,  593 => 313,  589 => 312,  585 => 311,  581 => 310,  577 => 309,  573 => 308,  570 => 307,  553 => 306,  524 => 279,  501 => 270,  496 => 268,  492 => 267,  488 => 266,  484 => 265,  480 => 264,  476 => 263,  472 => 262,  466 => 261,  462 => 260,  458 => 259,  454 => 258,  450 => 257,  446 => 256,  442 => 255,  439 => 254,  422 => 253,  389 => 223,  320 => 156,  311 => 155,  288 => 142,  278 => 135,  269 => 129,  260 => 123,  249 => 114,  240 => 113,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  198 => 93,  193 => 91,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  155 => 80,  151 => 79,  147 => 78,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <style>
        tr [colspan=\"2\"] {
            text-align: center;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }

        .input-form {
            margin-top: 10px;
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
                <li class=\"breadcrumb-item active\">index</li>
            </ol>

        </div>

        <div class=\"contain-inner dashboard-v2\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-lg-12 col-xl-12 xl-dashboard-v2\">
                        <div class=\"row\">
                            <div class=\"col-md-12 lg-dashboard-v2\">
                                <div class=\"content\">
                                    <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                                    <div class=\"dashboard-content\">
                                        <div class=\"dashboard-header\">
                                            <h4 class=\"page-content-title float-xs-left\">liste des Etudiants </h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\">
                                                        <a href=\"javascript:void(0)\" aria-hidden=\"true\"><span
                                                                    class=\"icon_minus-06\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                            <div class=\"divider15\"></div>
                                            <div class=\"nav-tab-horizontal-right\">
                                                <ul class=\"nav nav-tabs float-xs-right\" role=\"tablist\">
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons\" data-toggle=\"tab\"
                                                           href=\"#home\" role=\"tab\">Pré-Inscrit</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons\" data-toggle=\"tab\"
                                                           href=\"#attente\" role=\"tab\">Dossier Complement</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons\" data-toggle=\"tab\"
                                                           href=\"#paimentss\" role=\"tab\">Règelement</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons\" data-toggle=\"tab\"
                                                           href=\"#profile\" role=\"tab\">Affectation</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a class=\"nav-link flat-buttons active\" data-toggle=\"tab\"
                                                           href=\"#valideee\" role=\"tab\">Valide</a>
                                                    </li>
                                                </ul>
                                                <div class=\"divider15\"></div>
                                                <div class=\"tab-content\">
                                                    <div class=\"tab-pane \" id=\"home\" role=\"tabpanel\">
                                                        <div class=\"row\">
                                                            <div class=\"col-xs-12\">
                                                                <a href=\"{{ path('admin_Etudiant_add') }}\">
                                                                    <button class=\"btn btn-primary site-btn\"
                                                                            data-target=\"#view-add\" data-toggle=\"modal\">
                                                                        Ajouter
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>id</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Niveau d'études</th>
                                                                        <th>Diplome</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau</th>
                                                                        <th>action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for e in etudiantp %}
                                                                        <tr>
                                                                            <td>{{ loop.index }}</td>
                                                                            <td>{{ e.nom }}</td>
                                                                            <td>{{ e.prenom }}</td>
                                                                            <td>{{ e.cin }}</td>
                                                                            <td>{{ e.email }}</td>
                                                                            <td>{{ e.adresse }}
                                                                                , {{ e.ville }} {{ e.cp }}
                                                                                , {{ e.pays.name }}</td>
                                                                            <td>{{ e.tel }}</td>
                                                                            <td>{{ e.niveauEtude }}</td>
                                                                            <td>{{ e.diplome.nom }}</td>
                                                                            <td>{{ e.filiere.filiere }}</td>
                                                                            <td>{{ e.specialite.nomSpecialite }}</td>
                                                                            <td>{{ e.niveau.niveau }}</td>
                                                                            <td>
                                                                                <a href=\"{{ path('admin_etudiant_detail',{'id': e.id}) }}\">
                                                                                    <button type=\"button\"
                                                                                            class=\"btn btn-outline-primary btn-xs\">
                                                                                        Detail
                                                                                    </button>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"attente\" role=\"tabpanel\">
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nom</th>
                                                                        <th>Prenom</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Date d'Ajouter</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau</th>
                                                                        <th>Dossier</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for e in etudiante %}
                                                                        <tr>
                                                                            <td>{{ loop.index }}</td>
                                                                            <td>{{ e.nom }}</td>
                                                                            <td>{{ e.prenom }}</td>
                                                                            <td>{{ e.cin }}</td>
                                                                            <td>{{ e.lastLogin|date('M d Y H:i') }}</td>
                                                                            <td>{{ e.email }}</td>
                                                                            <td>{{ e.adresse }}
                                                                                , {{ e.ville }} {{ e.cp }}
                                                                                , {{ e.pays.name }}</td>
                                                                            <td>{{ e.tel }}</td>
                                                                            <td>{{ e.filiere.filiere }}</td>
                                                                            <td>{{ e.specialite.nomSpecialite }}</td>
                                                                            <td>{{ e.niveau.niveau }}</td>
                                                                            <td>
                                                                                {% if e.document != null %}
                                                                                    <a href=\"{{ path('admin_etudiant_show_document',{'id':e.id}) }}\"><span
                                                                                                class=\"icon_document text-danger btn-lg\"></span></a>
                                                                                {% else %}
                                                                                    <a href=\"{{ path('admin_etudiant_document',{'id':e.id}) }}\"><button class=\"btn btn-outline-warning btn-xs\">Upload</button></a>
                                                                                {% endif %}
                                                                            </td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"paimentss\" role=\"tabpanel\">
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Niveau d'études</th>
                                                                        <th>Diplome</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau</th>
                                                                        <th>Tranche</th>
                                                                        <th>Validation</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for e in etudiantpa %}
                                                                        <tr>
                                                                            <td>{{ loop.index }}</td>
                                                                            <td>{{ e.nom }}</td>
                                                                            <td>{{ e.prenom }}</td>
                                                                            <td>{{ e.cin }}</td>
                                                                            <td>{{ e.email }}</td>
                                                                            <td>{{ e.adresse }}
                                                                                , {{ e.ville }} {{ e.cp }}</td>
                                                                            <td>{{ e.tel }}</td>
                                                                            <td>{{ e.niveauEtude }}</td>
                                                                            <td>{{ e.diplome.nom }}</td>
                                                                            <td>{{ e.filiere.filiere }}</td>
                                                                            <td>{{ e.specialite.nomSpecialite }}</td>
                                                                            <td>{{ e.niveau.niveau }}</td>
                                                                            <td>
                                                                                <a href=\"{{ path('admin_Etudiant_slice',{'id':e.id}) }}\">
                                                                                    <button type=\"button\"
                                                                                            class=\"btn btn-outline-primary btn-xs\">
                                                                                        Tranche
                                                                                    </button>
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <a>
                                                                                    <button type=\"button\"
                                                                                            class=\"btn btn-xs btn-outline-success btn-xs desactivt\"
                                                                                            data-id=\"{{ e.id }}\"
                                                                                            data-target=\"#view-validation\"
                                                                                            data-toggle=\"modal\">Validate
                                                                                    </button>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\"
                                                                       id=\"validate\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau d'études</th>
                                                                        <th>Diplome</th>
                                                                        <th>Niveau</th>
                                                                        <th>classe</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for e in etudiant %}
                                                                        <tr>
                                                                            <td>{{ loop.index }}</td>
                                                                            <td>{{ e.nom }}</td>
                                                                            <td>{{ e.prenom }}</td>
                                                                            <td>{{ e.cin }}</td>
                                                                            <td>{{ e.email }}</td>
                                                                            <td>{{ e.adresse }}
                                                                                , {{ e.ville }} {{ e.cp }}
                                                                                , {{ e.pays.name }}</td>
                                                                            <td>{{ e.tel }}</td>
                                                                            <td>{{ e.niveauEtude }}</td>
                                                                            <td>{{ e.diplome.nom }}</td>
                                                                            <td>{{ e.filiere.filiere }}</td>
                                                                            <td>{{ e.specialite.nomSpecialite }}</td>
                                                                            <td>{{ e.niveau.niveau }}</td>
                                                                            <td>
                                                                                {% if e.classe == null %}
                                                                                    <a>
                                                                                        <button type=\"button\"
                                                                                                class=\"btn btn-outline-primary btn-xs add-Class\"
                                                                                                data-target=\"#view-add-classe\"
                                                                                                data-toggle=\"modal\"
                                                                                                data-id=\"{{ e.id }}\">
                                                                                            Ajouter
                                                                                        </button>
                                                                                    </a>
                                                                                {% else %}
                                                                                    {{ e.classe.nomClass }}
                                                                                {% endif %}
                                                                            </td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"tab-pane active\" id=\"valideee\" role=\"tabpanel\">
                                                        <div class=\"dashboard-box\">
                                                            <div class=\"basic_table table-responsive\">
                                                                <table data-plugin=\"datatable\"
                                                                       class=\"table table-striped table-hover display nowrap\"
                                                                       id=\"validate\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>id</th>
                                                                        <th>Numero</th>
                                                                        <th>Nom</th>
                                                                        <th>Prénom</th>
                                                                        <th>dateNaissance</th>
                                                                        <th>CIN</th>
                                                                        <th>Email</th>
                                                                        <th>Adresse</th>
                                                                        <th>Telephone</th>
                                                                        <th>Filiere</th>
                                                                        <th>Specialite</th>
                                                                        <th>Niveau</th>
                                                                        <th>Classe</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for e in etudiantv %}
                                                                        <tr>
                                                                            <td>{{ loop.index }}</td>
                                                                            <td>{{ e.cie }}</td>
                                                                            <td>{{ e.nom }}</td>
                                                                            <td>{{ e.prenom }}</td>
                                                                            <td>{{ e.naissance|date('M d Y ') }}</td>
                                                                            <td>{{ e.cin }}</td>
                                                                            <td>{{ e.email }}</td>
                                                                            <td>{{ e.adresse }}
                                                                                , {{ e.ville }} {{ e.cp }}
                                                                                , {{ e.pays.name }}</td>
                                                                            <td>{{ e.tel }}</td>
                                                                            <td>{{ e.filiere.filiere }}</td>
                                                                            <td>{{ e.specialite.nomSpecialite }}</td>
                                                                            <td>{{ e.niveau.niveau }}</td>
                                                                            <td>{{ e.classe.nomClass }}</td>
                                                                            <td>
                                                                                {% if e.enabled ==1 %}
                                                                                    <a class=\"desactivt\"
                                                                                       data-id=\"{{ e.id }}\"
                                                                                       data-target=\"#view-contact\"
                                                                                       data-toggle=\"modal\"><span
                                                                                                class=\"icon_minus_alt text-danger\"></span></a>
                                                                                    <a href=\"{{ path('admin_Etudiant_update',{'id':e.id}) }}\"><span
                                                                                                class=\"text-danger icon_pencil\"></span></a>
                                                                                    <a href=\"{{ path('admin_Etudiant_show_all',{'id':e.id}) }}\"><span
                                                                                                class=\"text-primary icon_document\"></span></a>
                                                                                {% else %}
                                                                                    <a class=\"desactivt\"
                                                                                       data-id=\"{{ e.id }}\"
                                                                                       data-target=\"#view-contact\"
                                                                                       data-toggle=\"modal\"><span
                                                                                                class=\"icon_plus_alt text-success\"></span></a>
                                                                                    <a href=\"{{ path('admin_Etudiant_update',{'id':e.id}) }}\"><span
                                                                                                class=\"text-danger icon_pencil disabled\"></span></a>
                                                                                    <a href=\"{{ path('admin_Etudiant_show_all',{'id':e.id}) }}\"><span
                                                                                                class=\"text-primary icon_document disabled\"></span></a>
                                                                                {% endif %}
                                                                            </td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <div id=\"view-contact\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Activation Etudiant</h4>
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
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn desactiv\">Confirmer</button>
                    <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-document-etudiant\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Confirmation Document</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow \" id=\"document-etudiant-form\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn validate\">Confirmer</button>
                    <button type=\"button\" class=\"btn btn-secondary refuse\" data-dismiss=\"modal\">Refuser</button>
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
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn validate\">Confirmer</button>
                    <button type=\"button\" class=\"btn btn-secondary  refuse\" data-dismiss=\"modal\">Refuser</button>
                </div>
            </div>
        </div>
    </div>
    <div id=\"view-add-parent\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Ajouter Parent</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\" id=\"add-parent-form\">
                                <script type=\"text/javascript\">
                                    \$('.add-Parent').click(function () {
                                        id = \$(this).data('id');
                                        \$.ajax({
                                            type: 'POST',
                                            url: Routing.generate('admin_universite_Parent_add', {'id': id}),
                                            complete: function (data) {
                                                \$('#add-parent-form').html(data.responseText);
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
    <div id=\"view-update-parent\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Update Parent</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\" id=\"update-parent-form\">
                                <script type=\"text/javascript\">
                                    \$('.update-Parent').click(function () {
                                        id = \$(this).data('id');
                                        \$.ajax({
                                            type: 'POST',
                                            url: Routing.generate('admin_Parent_update', {'id': id}),
                                            complete: function (data) {
                                                \$('#update-parent-form').html(data.responseText);
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
    <div id=\"view-add-classe\" class=\"modal fade\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\">Ajouter Etudiant dans classe</h4>
                </div>
                <div class=\"modal-body contact-info\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"divider15\"></div>
                            <div class=\"contact-follow\" id=\"add-etudiant-class-form\">
                            </div>
                        </div>
                    </div>
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
    <script type=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
    <script type=\"text/javascript\">
        \$('.add-Class').click(function () {
            id = \$(this).data('id');
            \$.ajax({
                type: 'POST',
                url: Routing.generate('admin_etudiant_class', {'id': id}),
                complete: function (data) {
                    \$('#add-etudiant-class-form').html(data.responseText);
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    </script>
    <script>
        \$('.desactivt').click(function () {
            id = \$(this).data('id');
            \$('.desactiv').click(function () {
                \$.ajax({
                    url: 'http://localhost/erp/web/app_dev.php/admin/delete/' + id,
                    success: function (result) {
                        console.log(result);
                        window.location.href = \"http://localhost/erp/web/app_dev.php/admin/etudiant\";
                    },
                    failed: function (a) {
                        console.log(a);
                    }
                });
            });

            \$('.validate').click(function () {
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
        });
    </script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
       /* \$(document).ready(function () {
            var table = \$('#validate').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });*/
    </script>
{% endblock %}", "ERPBundle:Admin/Membre/etudiant:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/index.html.twig");
    }
}
