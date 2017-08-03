<?php

/* ERPBundle:Admin/Membre/etudiant:show.html.twig */
class __TwigTemplate_3a8de47b6e92091df03d6e8b7398f425145f7c219222ee03bcf6f3d74fdae0ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Membre/etudiant:show.html.twig", 1);
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
        $__internal_2412240cca7483b26e0540f959d38ea4e3b866a165d602e0a41faa03502e0b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2412240cca7483b26e0540f959d38ea4e3b866a165d602e0a41faa03502e0b42->enter($__internal_2412240cca7483b26e0540f959d38ea4e3b866a165d602e0a41faa03502e0b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:show.html.twig"));

        $__internal_da880bbcaca8a513657197a18750e77733b359d1f60b3928e6c35f0380e3ba94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da880bbcaca8a513657197a18750e77733b359d1f60b3928e6c35f0380e3ba94->enter($__internal_da880bbcaca8a513657197a18750e77733b359d1f60b3928e6c35f0380e3ba94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2412240cca7483b26e0540f959d38ea4e3b866a165d602e0a41faa03502e0b42->leave($__internal_2412240cca7483b26e0540f959d38ea4e3b866a165d602e0a41faa03502e0b42_prof);

        
        $__internal_da880bbcaca8a513657197a18750e77733b359d1f60b3928e6c35f0380e3ba94->leave($__internal_da880bbcaca8a513657197a18750e77733b359d1f60b3928e6c35f0380e3ba94_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2705f821c00b10e8accbbfb5b19affcb2a5a834d6c20975bf043d8579b4b83ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2705f821c00b10e8accbbfb5b19affcb2a5a834d6c20975bf043d8579b4b83ca->enter($__internal_2705f821c00b10e8accbbfb5b19affcb2a5a834d6c20975bf043d8579b4b83ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f390c713414b80a32fa697d8dfd77ef55e2cbcac21fe85c49ddc28686128a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f390c713414b80a32fa697d8dfd77ef55e2cbcac21fe85c49ddc28686128a13->enter($__internal_5f390c713414b80a32fa697d8dfd77ef55e2cbcac21fe85c49ddc28686128a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Etudiant";
        
        $__internal_5f390c713414b80a32fa697d8dfd77ef55e2cbcac21fe85c49ddc28686128a13->leave($__internal_5f390c713414b80a32fa697d8dfd77ef55e2cbcac21fe85c49ddc28686128a13_prof);

        
        $__internal_2705f821c00b10e8accbbfb5b19affcb2a5a834d6c20975bf043d8579b4b83ca->leave($__internal_2705f821c00b10e8accbbfb5b19affcb2a5a834d6c20975bf043d8579b4b83ca_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a3a86e67247359dbf9712addf8ec3a15e638619ce618631c8c3707045a15046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3a86e67247359dbf9712addf8ec3a15e638619ce618631c8c3707045a15046->enter($__internal_6a3a86e67247359dbf9712addf8ec3a15e638619ce618631c8c3707045a15046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78b5534468866b625f38adde29bf0cdaa3ec0f46eb10d8314b4231d3899138ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b5534468866b625f38adde29bf0cdaa3ec0f46eb10d8314b4231d3899138ef->enter($__internal_78b5534468866b625f38adde29bf0cdaa3ec0f46eb10d8314b4231d3899138ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/magnific-popup/dist/magnific-popup.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }

    </style>
";
        
        $__internal_78b5534468866b625f38adde29bf0cdaa3ec0f46eb10d8314b4231d3899138ef->leave($__internal_78b5534468866b625f38adde29bf0cdaa3ec0f46eb10d8314b4231d3899138ef_prof);

        
        $__internal_6a3a86e67247359dbf9712addf8ec3a15e638619ce618631c8c3707045a15046->leave($__internal_6a3a86e67247359dbf9712addf8ec3a15e638619ce618631c8c3707045a15046_prof);

    }

    // line 107
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_a1708469f70a607c43a3d0bb4d09cd2c13aee28462a19b5ec96bc98ccef7b001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1708469f70a607c43a3d0bb4d09cd2c13aee28462a19b5ec96bc98ccef7b001->enter($__internal_a1708469f70a607c43a3d0bb4d09cd2c13aee28462a19b5ec96bc98ccef7b001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_4e4926f4322834849be430f7ec5bee4843d6169c8030dbed76e756e509db00fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4926f4322834849be430f7ec5bee4843d6169c8030dbed76e756e509db00fc->enter($__internal_4e4926f4322834849be430f7ec5bee4843d6169c8030dbed76e756e509db00fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 108
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
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\">
                                    <span class=\"icon_desktop header-icon\" aria-hidden=\"true\"></span>
                                    <span>Personnel</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\">
                                    <span class=\"icon_tool header-icon\" aria-hidden=\"true\"></span>
                                    <span>Enseignant</span>
                                </a>
                            </li>
                            <li style=\"background:#087380;\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"
                                          style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Etudiant</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 136
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
        
        $__internal_4e4926f4322834849be430f7ec5bee4843d6169c8030dbed76e756e509db00fc->leave($__internal_4e4926f4322834849be430f7ec5bee4843d6169c8030dbed76e756e509db00fc_prof);

        
        $__internal_a1708469f70a607c43a3d0bb4d09cd2c13aee28462a19b5ec96bc98ccef7b001->leave($__internal_a1708469f70a607c43a3d0bb4d09cd2c13aee28462a19b5ec96bc98ccef7b001_prof);

    }

    // line 149
    public function block_body($context, array $blocks = array())
    {
        $__internal_87cfd3e3880daed9d39224d1fbc20cfac076c982df4f5cba9e647317dd181e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cfd3e3880daed9d39224d1fbc20cfac076c982df4f5cba9e647317dd181e40->enter($__internal_87cfd3e3880daed9d39224d1fbc20cfac076c982df4f5cba9e647317dd181e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ed0000fea3f758a0ada1065ab1772ce02e1e7d8bbc4736bb1b6e6fac5442b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed0000fea3f758a0ada1065ab1772ce02e1e7d8bbc4736bb1b6e6fac5442b0c->enter($__internal_7ed0000fea3f758a0ada1065ab1772ce02e1e7d8bbc4736bb1b6e6fac5442b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 150
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">
        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Etudiant</a></li>
                <li class=\"breadcrumb-item active\">detail</li>
            </ol>

        </div>

        <div class=\"col-xs-12 col-lg-7 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <h4 class=\"page-content-title\">Information Personnel</h4>
                <div class=\"divider15\"></div>
                <div class=\"personal-info-box\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                        </div>
                        <div class=\"col-md-6\">
                            <img class=\"image-profile\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image1-profile.jpg"), "html", null, true);
        echo "\"
                                                            alt=\"Profile image\">
                            </img>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"divider15\"></div>
                        <div class=\"col-xs-12\">
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\"> Nom & Prenom :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "prenom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Cin :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cin", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Date de Naissance :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 190
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "naissance", array()), "d-M-Y"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 194
        if (($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "sex", array()) == 1)) {
            echo "Homme";
        } else {
            echo " Femme ";
        }
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Email :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "email", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "adresse", array()), "html", null, true);
        echo "
                                    , ";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "cp", array()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "pays", array()), "name", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Tel :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "tel", array()), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau d'études :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveauEtude", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Diplome qui souhaite :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "diplome", array()), "nom", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Filiére :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "filiere", array()), "filiere", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Specicialite :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "specialite", array()), "nomSpecialite", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau :</div>
                                <div class=\"detail-profile float-xs-right\">";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "niveau", array()), "niveau", array()), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-lg-5 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <div class=\"dashboard-content\">
                    <div class=\"divider15\"></div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Identitée :</h4>
                            ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "document", array()), "identifiant", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["identifiant"]) {
            // line 245
            echo "                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["identifiant"])), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["identifiant"])), "html", null, true);
            echo "\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Id\"
                                             title=\"Identifiant\"/>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['identifiant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Diplomes :</h4>
                            ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "document", array()), "diplome", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 261
            echo "                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["diplome"])), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 264
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["diplome"])), "html", null, true);
            echo "\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Diplome\"
                                             title=\"Diplome\"/>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Notes :</h4>
                            ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "document", array()), "note", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 277
            echo "                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"";
            // line 279
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["note"])), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["note"])), "html", null, true);
            echo "\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Note\"
                                             title=\"Note\"/>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Justificatif de paiment :</h4>
                            ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "document", array()), "extrait", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extrait"]) {
            // line 293
            echo "                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"";
            // line 295
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["extrait"])), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((("uploads/etablissement/" . twig_date_format_filter($this->env, "now", "Y")) . "/etudiant/") . ($context["id"] ?? $this->getContext($context, "id"))) . "/") . $context["extrait"])), "html", null, true);
            echo "\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Justificatif de paiment\"
                                             title=\"Justificatif de paiment\"/>
                                    </a>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extrait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <a>
                        <button type=\"button\" class=\"btn btn-xs btn-primary btn-xs desactivt pull-right\"
                                data-id=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo "\" data-target=\"#view-validation\" data-toggle=\"modal\">
                            Validate
                        </button>
                    </a>
                </div>
            </div>
    </section>
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
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn\" id=\"validate\">Confirmer
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary refuse\">Refuser</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7ed0000fea3f758a0ada1065ab1772ce02e1e7d8bbc4736bb1b6e6fac5442b0c->leave($__internal_7ed0000fea3f758a0ada1065ab1772ce02e1e7d8bbc4736bb1b6e6fac5442b0c_prof);

        
        $__internal_87cfd3e3880daed9d39224d1fbc20cfac076c982df4f5cba9e647317dd181e40->leave($__internal_87cfd3e3880daed9d39224d1fbc20cfac076c982df4f5cba9e647317dd181e40_prof);

    }

    // line 344
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_bc2024e92a49dd154da7206620bb67476c491c2077842a93fcc6755ce7ef4e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2024e92a49dd154da7206620bb67476c491c2077842a93fcc6755ce7ef4e76->enter($__internal_bc2024e92a49dd154da7206620bb67476c491c2077842a93fcc6755ce7ef4e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_9057b97241341dea8905e2c7e8838d953e539b26e4a02ba15f5d574f03b370d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9057b97241341dea8905e2c7e8838d953e539b26e4a02ba15f5d574f03b370d8->enter($__internal_9057b97241341dea8905e2c7e8838d953e539b26e4a02ba15f5d574f03b370d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 345
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/media/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/dataTables.responsive.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-responsive/js/responsive.bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables-scroller/js/dataTables.scroller.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/lightbox.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEtudiant.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
        \$('#validate').click(function () {
            id =";
        // line 389
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo ";
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
        id =";
        // line 401
        echo twig_escape_filter($this->env, $this->getAttribute(($context["etudiant"] ?? $this->getContext($context, "etudiant")), "id", array()), "html", null, true);
        echo ";
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
    </script>
";
        
        $__internal_9057b97241341dea8905e2c7e8838d953e539b26e4a02ba15f5d574f03b370d8->leave($__internal_9057b97241341dea8905e2c7e8838d953e539b26e4a02ba15f5d574f03b370d8_prof);

        
        $__internal_bc2024e92a49dd154da7206620bb67476c491c2077842a93fcc6755ce7ef4e76->leave($__internal_bc2024e92a49dd154da7206620bb67476c491c2077842a93fcc6755ce7ef4e76_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 401,  774 => 389,  765 => 383,  761 => 382,  757 => 381,  752 => 379,  747 => 377,  742 => 375,  737 => 373,  732 => 371,  727 => 369,  723 => 368,  719 => 367,  715 => 366,  711 => 365,  707 => 364,  702 => 362,  697 => 360,  692 => 358,  688 => 357,  684 => 356,  680 => 355,  676 => 354,  672 => 353,  667 => 351,  663 => 350,  658 => 348,  653 => 346,  648 => 345,  639 => 344,  592 => 307,  585 => 302,  573 => 296,  569 => 295,  565 => 293,  561 => 292,  553 => 286,  541 => 280,  537 => 279,  533 => 277,  529 => 276,  521 => 270,  509 => 264,  505 => 263,  501 => 261,  497 => 260,  489 => 254,  477 => 248,  473 => 247,  469 => 245,  465 => 244,  446 => 228,  439 => 224,  432 => 220,  425 => 216,  418 => 212,  410 => 207,  399 => 203,  395 => 202,  388 => 198,  377 => 194,  370 => 190,  363 => 186,  354 => 182,  342 => 173,  317 => 150,  308 => 149,  285 => 136,  275 => 129,  266 => 123,  257 => 117,  246 => 108,  237 => 107,  219 => 99,  215 => 98,  211 => 97,  207 => 96,  203 => 95,  198 => 93,  193 => 91,  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  155 => 80,  151 => 79,  147 => 78,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/magnific-popup/dist/magnific-popup.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
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
                <li class=\"breadcrumb-item active\">detail</li>
            </ol>

        </div>

        <div class=\"col-xs-12 col-lg-7 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <h4 class=\"page-content-title\">Information Personnel</h4>
                <div class=\"divider15\"></div>
                <div class=\"personal-info-box\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                        </div>
                        <div class=\"col-md-6\">
                            <img class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image1-profile.jpg') }}\"
                                                            alt=\"Profile image\">
                            </img>
                        </div>
                        <div class=\"divider15\"></div>
                        <div class=\"divider15\"></div>
                        <div class=\"col-xs-12\">
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\"> Nom & Prenom :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.nom }} {{ etudiant.prenom }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Cin :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.cin }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Date de Naissance :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.naissance | date('d-M-Y') }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Sexe :</div>
                                <div class=\"detail-profile float-xs-right\">{% if etudiant.sex == 1 %}Homme{% else %} Femme {% endif %}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Email :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.email }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Adresse :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.adresse }}
                                    , {{ etudiant.ville }} {{ etudiant.cp }} , {{ etudiant.pays.name }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Tel :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.tel }}
                                </div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau d'études :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.niveauEtude }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Diplome qui souhaite :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.diplome.nom }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Filiére :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.filiere.filiere }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Specicialite :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.specialite.nomSpecialite }}</div>
                            </div>
                            <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                <div class=\"left-name-profile float-xs-left\">Niveau :</div>
                                <div class=\"detail-profile float-xs-right\">{{ etudiant.niveau.niveau }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-lg-5 lg-dashboard-v2\">
            <div class=\"content\">
                <div class=\"divider-lg-spacing divider-xs-spacing\"></div>
                <div class=\"dashboard-content\">
                    <div class=\"divider15\"></div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Identitée :</h4>
                            {% for identifiant in etudiant.document.identifiant %}
                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~identifiant) }}\">
                                        <img src=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~identifiant) }}\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Id\"
                                             title=\"Identifiant\"/>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Diplomes :</h4>
                            {% for diplome in etudiant.document.diplome %}
                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~diplome) }}\">
                                        <img src=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~diplome) }}\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Diplome\"
                                             title=\"Diplome\"/>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Notes :</h4>
                            {% for note in etudiant.document.note %}
                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~note) }}\">
                                        <img src=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~note) }}\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Note\"
                                             title=\"Note\"/>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <div class=\"lightbox-image gallery-group animationGallery\">
                        <div class=\"search_block\">
                            <h4>Justificatif de paiment :</h4>
                            {% for extrait in etudiant.document.extrait %}
                                <div class=\"col-lg-4\" id=\"animation-lightbox-output\">
                                    <a data-effect=\"mfp-zoom-in\"
                                       href=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~extrait) }}\">
                                        <img src=\"{{ asset('uploads/etablissement/'~ \"now\"|date('Y')~'/etudiant/'~id~'/'~extrait) }}\"
                                             class=\"img img-rounded img-responsive img-thumbnail\" alt=\"Justificatif de paiment\"
                                             title=\"Justificatif de paiment\"/>
                                    </a>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"divider15\"></div>
                    <a>
                        <button type=\"button\" class=\"btn btn-xs btn-primary btn-xs desactivt pull-right\"
                                data-id=\"{{ etudiant.id }}\" data-target=\"#view-validation\" data-toggle=\"modal\">
                            Validate
                        </button>
                    </a>
                </div>
            </div>
    </section>
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
                    <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn\" id=\"validate\">Confirmer
                    </button>
                    <button type=\"button\" class=\"btn btn-secondary refuse\">Refuser</button>
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
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/lightbox.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEtudiant.js') }}\"></script>
    <script>
        \$('#user').addClass('active');
    </script>
    <script>
        \$('#validate').click(function () {
            id ={{ etudiant.id }};
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
        id ={{ etudiant.id }};
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
    </script>
{% endblock %}
", "ERPBundle:Admin/Membre/etudiant:show.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/show.html.twig");
    }
}
