<?php

/* ERPBundle:Front/etudiant:programme.html.twig */
class __TwigTemplate_b29841247bc41b659d8d58442c9f38c912209711044fbb018ff94e2f28aaa5bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/etudiant:programme.html.twig", 1);
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbf8a29a641ab796dff52520695872dbcc4a5970115966d6dfe2ea717515bd99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf8a29a641ab796dff52520695872dbcc4a5970115966d6dfe2ea717515bd99->enter($__internal_dbf8a29a641ab796dff52520695872dbcc4a5970115966d6dfe2ea717515bd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:programme.html.twig"));

        $__internal_1b88115beebb3475fab92acc3d4b911b7c3209196c3b9f56d84bd78cc12bacbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b88115beebb3475fab92acc3d4b911b7c3209196c3b9f56d84bd78cc12bacbb->enter($__internal_1b88115beebb3475fab92acc3d4b911b7c3209196c3b9f56d84bd78cc12bacbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant:programme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf8a29a641ab796dff52520695872dbcc4a5970115966d6dfe2ea717515bd99->leave($__internal_dbf8a29a641ab796dff52520695872dbcc4a5970115966d6dfe2ea717515bd99_prof);

        
        $__internal_1b88115beebb3475fab92acc3d4b911b7c3209196c3b9f56d84bd78cc12bacbb->leave($__internal_1b88115beebb3475fab92acc3d4b911b7c3209196c3b9f56d84bd78cc12bacbb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_11426bd222e6c65ae8aab4558721de3ec2909fd5883d19898b914b131d57b14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11426bd222e6c65ae8aab4558721de3ec2909fd5883d19898b914b131d57b14d->enter($__internal_11426bd222e6c65ae8aab4558721de3ec2909fd5883d19898b914b131d57b14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48fec37ddd54fc9931f31b8d050ff290dd8272ebca8e58de325265e7be2dc8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fec37ddd54fc9931f31b8d050ff290dd8272ebca8e58de325265e7be2dc8cd->enter($__internal_48fec37ddd54fc9931f31b8d050ff290dd8272ebca8e58de325265e7be2dc8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Etudiant - Programme";
        
        $__internal_48fec37ddd54fc9931f31b8d050ff290dd8272ebca8e58de325265e7be2dc8cd->leave($__internal_48fec37ddd54fc9931f31b8d050ff290dd8272ebca8e58de325265e7be2dc8cd_prof);

        
        $__internal_11426bd222e6c65ae8aab4558721de3ec2909fd5883d19898b914b131d57b14d->leave($__internal_11426bd222e6c65ae8aab4558721de3ec2909fd5883d19898b914b131d57b14d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96600ccbf161ad213bedc249c5586b2fa47be6c426697a81ec6008d905dcf2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96600ccbf161ad213bedc249c5586b2fa47be6c426697a81ec6008d905dcf2a2->enter($__internal_96600ccbf161ad213bedc249c5586b2fa47be6c426697a81ec6008d905dcf2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d695065c24a6061eb17fdb5cdf8f79fab15b449ac5d862ca9cc285cab894c1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d695065c24a6061eb17fdb5cdf8f79fab15b449ac5d862ca9cc285cab894c1af->enter($__internal_d695065c24a6061eb17fdb5cdf8f79fab15b449ac5d862ca9cc285cab894c1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\"
          href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
    <style>
        .wrapper .content-pricing .vertical-pricing .center-detail-vertical ul li {
            float: left;
            list-style-type: none;
            padding: 5px 0;
            width: 14.285%;
        }
        .wrapper .content-pricing .vertical-pricing .center-detail-vertical {
            width: 80%;
            padding: 6px 0 0 125px;
        }
    </style>
";
        
        $__internal_d695065c24a6061eb17fdb5cdf8f79fab15b449ac5d862ca9cc285cab894c1af->leave($__internal_d695065c24a6061eb17fdb5cdf8f79fab15b449ac5d862ca9cc285cab894c1af_prof);

        
        $__internal_96600ccbf161ad213bedc249c5586b2fa47be6c426697a81ec6008d905dcf2a2->leave($__internal_96600ccbf161ad213bedc249c5586b2fa47be6c426697a81ec6008d905dcf2a2_prof);

    }

    // line 116
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_1f13cf7373ab88811a1429f136a937fb58e7f8b2bf1f77894541cfd0e3babf5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f13cf7373ab88811a1429f136a937fb58e7f8b2bf1f77894541cfd0e3babf5d->enter($__internal_1f13cf7373ab88811a1429f136a937fb58e7f8b2bf1f77894541cfd0e3babf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_892fede9d1d2aa6e7e819febfd8f770a9fb278244f97d45ebd318d39e795c7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892fede9d1d2aa6e7e819febfd8f770a9fb278244f97d45ebd318d39e795c7e9->enter($__internal_892fede9d1d2aa6e7e819febfd8f770a9fb278244f97d45ebd318d39e795c7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 117
        echo "    <div id=\"header-icon\">
        <div class=\"header-width\">
            <div class=\"col-xl-12\">
                <div class=\"menucontainer\">
                    <div class=\"overlapblackbg\"></div>
                    <a id=\"navtoggle\" class=\"animated-arrow\"><span></span></a>
                    <nav id=\"nav\" class=\"topmenu\" role=\"navigation\">
                        <ul class=\"menu-list live-search-list\">
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_programme");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Programme</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_cours");
        echo "\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_emploi");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_absence");
        echo "\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absence</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_examen");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examen</span>
                                </a>
                            </li>
                            <li  class=\"menu-paiment\">
                                <a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_note");
        echo "\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Note</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_paiment");
        echo "\">
                                    <span class=\"icon_wallet header-icon\" aria-hidden=\"true\"></span>
                                    <span>paiment</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_892fede9d1d2aa6e7e819febfd8f770a9fb278244f97d45ebd318d39e795c7e9->leave($__internal_892fede9d1d2aa6e7e819febfd8f770a9fb278244f97d45ebd318d39e795c7e9_prof);

        
        $__internal_1f13cf7373ab88811a1429f136a937fb58e7f8b2bf1f77894541cfd0e3babf5d->leave($__internal_1f13cf7373ab88811a1429f136a937fb58e7f8b2bf1f77894541cfd0e3babf5d_prof);

    }

    // line 174
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b8c07c24b349da46677fd2ea7570941e0dd9ef30282bea459cd784967638dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8c07c24b349da46677fd2ea7570941e0dd9ef30282bea459cd784967638dcb->enter($__internal_0b8c07c24b349da46677fd2ea7570941e0dd9ef30282bea459cd784967638dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f135dbafb36609ab9b6cc8cbc4db7980d2bfaa2334bf15e9245625c8ca050963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f135dbafb36609ab9b6cc8cbc4db7980d2bfaa2334bf15e9245625c8ca050963->enter($__internal_f135dbafb36609ab9b6cc8cbc4db7980d2bfaa2334bf15e9245625c8ca050963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 175
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Programme</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Programme</a></li>
                <li class=\"breadcrumb-item active\">Detail</li>
            </ol>

        </div>

        <div class=\"content content-pricing\">
            ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["query"] ?? $this->getContext($context, "query")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 192
            echo "                ";
            $context["i"] = $this->getAttribute($context["loop"], "index", array());
            // line 193
            echo "                <h4 class=\"page-content-title\">Semestre ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</h4>
                <div class=\"divider15\"></div>
                <div class=\"vertical-pricing-section\">
                ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["programme"] ?? $this->getContext($context, "programme")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                if (($this->getAttribute($this->getAttribute($context["u"], "semestre", array()), "id", array()) == ($context["i"] ?? $this->getContext($context, "i")))) {
                    // line 197
                    echo "                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"vertical-pricing\">
                                <div class=\"title-vertical-pricing float-xs-left\">
                                    <h2 class=\"align-middle\">";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
                    echo "</h2>
                                </div>
                                <div class=\"center-detail-vertical float-xs-left\">
                                    <ul>
                                        <li>Matiere</li>
                                        <li>Cours</li>
                                        <li>TD</li>
                                        <li>TP</li>
                                        <li>Coefession</li>
                                        <li>Credit</li>
                                        <li>Regime</li>
                                        ";
                    // line 212
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["u"], "matiere", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                        // line 213
                        echo "                                        <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
                        echo "</li>
                                        <li>";
                        // line 214
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "cours", array()), "html", null, true);
                        echo "h</li>
                                        <li>";
                        // line 215
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "td", array()), "html", null, true);
                        echo "h</li>
                                        <li>";
                        // line 216
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "tp", array()), "html", null, true);
                        echo "h</li>
                                        <li>";
                        // line 217
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "coef", array()), "html", null, true);
                        echo "</li>
                                        <li>";
                        // line 218
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "credit", array()), "html", null, true);
                        echo "</li>
                                            <li>";
                        // line 219
                        if (($this->getAttribute($context["m"], "regime", array()) == 1)) {
                            echo " Mixte";
                        } else {
                            echo "<span style=\"color:#f1f1f1;\">Mixte</span>";
                        }
                        echo "</li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 221
                    echo "                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                <div class=\"divider15\"></div>
                <div class=\"divider15\"></div>
                <div class=\"divider15\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "        </div>
    </section>
";
        
        $__internal_f135dbafb36609ab9b6cc8cbc4db7980d2bfaa2334bf15e9245625c8ca050963->leave($__internal_f135dbafb36609ab9b6cc8cbc4db7980d2bfaa2334bf15e9245625c8ca050963_prof);

        
        $__internal_0b8c07c24b349da46677fd2ea7570941e0dd9ef30282bea459cd784967638dcb->leave($__internal_0b8c07c24b349da46677fd2ea7570941e0dd9ef30282bea459cd784967638dcb_prof);

    }

    // line 235
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_1cdec43534993cd57b85e036e3c5332104fe087efc881ee36bc143b0330edce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdec43534993cd57b85e036e3c5332104fe087efc881ee36bc143b0330edce0->enter($__internal_1cdec43534993cd57b85e036e3c5332104fe087efc881ee36bc143b0330edce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_0f2536d6100c3f0d0a71637046ef687c054a8dcea727ada3460da318d6fcd55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2536d6100c3f0d0a71637046ef687c054a8dcea727ada3460da318d6fcd55a->enter($__internal_0f2536d6100c3f0d0a71637046ef687c054a8dcea727ada3460da318d6fcd55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 236
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$('.update-Classe').click(function () {
                id = \$(this).data('id');
                \$.ajax({
                    type: 'POST',
                    url: Routing.generate('admin_Class_update', {'id': id}),
                    complete: function (data) {
                        \$('#update-etudiant-form').html(data.responseText);
                    }
                });
            });
        </script>
        <script type=\"text/javascript\">
            \$(\".etudiant-Classe\").click(function () {
                id = \$(this).data('id');
                \$.ajax({
                    type: 'POST',
                    url: Routing.generate('admin_Class_etudiant', {'id': id}),
                    complete: function (data) {
                        \$('#update-class-form').html(data.responseText);
                    }
                })
            });
        </script>
        <script>
            \$('.desactivt').click(function () {
                id = \$(this).data('id');
                \$('.desactiv').click(function () {
                    \$.ajax({
                        url: Routing.generate('admin_Class_delete', {'id': id}),
                        success: function (result) {
                            console.log(result);
                            window.location.href = \"http://localhost/erp/web/app_dev.php/admin/class/index\";
                        },
                        failed: function (a) {
                            console.log(a);
                        }
                    });
                });
            });
        </script>
        <script>\$(\"#scolarite\").addClass('active')</script>
    ";
        
        $__internal_0f2536d6100c3f0d0a71637046ef687c054a8dcea727ada3460da318d6fcd55a->leave($__internal_0f2536d6100c3f0d0a71637046ef687c054a8dcea727ada3460da318d6fcd55a_prof);

        
        $__internal_1cdec43534993cd57b85e036e3c5332104fe087efc881ee36bc143b0330edce0->leave($__internal_1cdec43534993cd57b85e036e3c5332104fe087efc881ee36bc143b0330edce0_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant:programme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 273,  606 => 271,  601 => 269,  596 => 267,  591 => 265,  586 => 263,  581 => 261,  577 => 260,  573 => 259,  569 => 258,  564 => 256,  559 => 254,  554 => 252,  549 => 250,  545 => 249,  541 => 248,  537 => 247,  533 => 246,  529 => 245,  524 => 243,  519 => 241,  514 => 239,  509 => 237,  504 => 236,  495 => 235,  483 => 232,  466 => 228,  453 => 221,  441 => 219,  437 => 218,  433 => 217,  429 => 216,  425 => 215,  421 => 214,  416 => 213,  412 => 212,  398 => 201,  392 => 197,  387 => 196,  380 => 193,  377 => 192,  360 => 191,  342 => 175,  333 => 174,  311 => 162,  302 => 156,  293 => 150,  284 => 144,  275 => 138,  266 => 132,  257 => 126,  246 => 117,  237 => 116,  205 => 94,  201 => 93,  197 => 92,  193 => 91,  188 => 89,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Etudiant - Programme{% endblock %}
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
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables/media/css/dataTables.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('assets/global/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
    <style>
        .wrapper .content-pricing .vertical-pricing .center-detail-vertical ul li {
            float: left;
            list-style-type: none;
            padding: 5px 0;
            width: 14.285%;
        }
        .wrapper .content-pricing .vertical-pricing .center-detail-vertical {
            width: 80%;
            padding: 6px 0 0 125px;
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
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('etudiant_programme') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Programme</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_cours') }}\">
                                    <span class=\"icon_folder header-icon\" aria-hidden=\"true\"></span>
                                    <span>Cours</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_emploi') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\"></span>
                                    <span>Emploi de Temps</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_absence') }}\">
                                    <span class=\"icon_ribbon header-icon\" aria-hidden=\"true\"></span>
                                    <span>Absence</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_examen') }}\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Examen</span>
                                </a>
                            </li>
                            <li  class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_note') }}\">
                                    <span class=\"icon_document header-icon\" aria-hidden=\"true\"></span>
                                    <span>Note</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_paiment') }}\">
                                    <span class=\"icon_wallet header-icon\" aria-hidden=\"true\"></span>
                                    <span>paiment</span>
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
            <h2 class=\"float-xs-left content-title-main\">Programme</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Programme</a></li>
                <li class=\"breadcrumb-item active\">Detail</li>
            </ol>

        </div>

        <div class=\"content content-pricing\">
            {% for n in query %}
                {% set i = loop.index %}
                <h4 class=\"page-content-title\">Semestre {{ loop.index }}</h4>
                <div class=\"divider15\"></div>
                <div class=\"vertical-pricing-section\">
                {% for u in programme if u.semestre.id == i %}
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"vertical-pricing\">
                                <div class=\"title-vertical-pricing float-xs-left\">
                                    <h2 class=\"align-middle\">{{ u.nom }}</h2>
                                </div>
                                <div class=\"center-detail-vertical float-xs-left\">
                                    <ul>
                                        <li>Matiere</li>
                                        <li>Cours</li>
                                        <li>TD</li>
                                        <li>TP</li>
                                        <li>Coefession</li>
                                        <li>Credit</li>
                                        <li>Regime</li>
                                        {% for m in u.matiere  %}
                                        <li>{{ m.nom }}</li>
                                        <li>{{ m.cours }}h</li>
                                        <li>{{ m.td }}h</li>
                                        <li>{{ m.tp }}h</li>
                                        <li>{{ m.coef }}</li>
                                        <li>{{ m.credit }}</li>
                                            <li>{% if m.regime ==1 %} Mixte{% else %}<span style=\"color:#f1f1f1;\">Mixte</span>{% endif %}</li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                {% endfor %}
                <div class=\"divider15\"></div>
                <div class=\"divider15\"></div>
                <div class=\"divider15\"></div>
            {% endfor %}
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
                src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
        <script type=\"text/javascript\">
            \$('.update-Classe').click(function () {
                id = \$(this).data('id');
                \$.ajax({
                    type: 'POST',
                    url: Routing.generate('admin_Class_update', {'id': id}),
                    complete: function (data) {
                        \$('#update-etudiant-form').html(data.responseText);
                    }
                });
            });
        </script>
        <script type=\"text/javascript\">
            \$(\".etudiant-Classe\").click(function () {
                id = \$(this).data('id');
                \$.ajax({
                    type: 'POST',
                    url: Routing.generate('admin_Class_etudiant', {'id': id}),
                    complete: function (data) {
                        \$('#update-class-form').html(data.responseText);
                    }
                })
            });
        </script>
        <script>
            \$('.desactivt').click(function () {
                id = \$(this).data('id');
                \$('.desactiv').click(function () {
                    \$.ajax({
                        url: Routing.generate('admin_Class_delete', {'id': id}),
                        success: function (result) {
                            console.log(result);
                            window.location.href = \"http://localhost/erp/web/app_dev.php/admin/class/index\";
                        },
                        failed: function (a) {
                            console.log(a);
                        }
                    });
                });
            });
        </script>
        <script>\$(\"#scolarite\").addClass('active')</script>
    {% endblock %}", "ERPBundle:Front/etudiant:programme.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/programme.html.twig");
    }
}
