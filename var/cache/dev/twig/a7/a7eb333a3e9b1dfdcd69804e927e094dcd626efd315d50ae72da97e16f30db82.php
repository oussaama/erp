<?php

/* ERPBundle:Front/etudiant/mail:mailBox.html.twig */
class __TwigTemplate_899b7dda6e3e56a25478c1a1595ad0be3ee535d4e265218d2b44c34aaa520401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseFront.html.twig", "ERPBundle:Front/etudiant/mail:mailBox.html.twig", 1);
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
        $__internal_31ce956dc647e766d4f2d021635b0054b9ce6a286591040b82d45106ed1058b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ce956dc647e766d4f2d021635b0054b9ce6a286591040b82d45106ed1058b2->enter($__internal_31ce956dc647e766d4f2d021635b0054b9ce6a286591040b82d45106ed1058b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant/mail:mailBox.html.twig"));

        $__internal_8bb39ea5d5c1fa4b1a1a76ca44e69751a59f5c11389133b18668bf3b19688d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb39ea5d5c1fa4b1a1a76ca44e69751a59f5c11389133b18668bf3b19688d0f->enter($__internal_8bb39ea5d5c1fa4b1a1a76ca44e69751a59f5c11389133b18668bf3b19688d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Front/etudiant/mail:mailBox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ce956dc647e766d4f2d021635b0054b9ce6a286591040b82d45106ed1058b2->leave($__internal_31ce956dc647e766d4f2d021635b0054b9ce6a286591040b82d45106ed1058b2_prof);

        
        $__internal_8bb39ea5d5c1fa4b1a1a76ca44e69751a59f5c11389133b18668bf3b19688d0f->leave($__internal_8bb39ea5d5c1fa4b1a1a76ca44e69751a59f5c11389133b18668bf3b19688d0f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef1416242b78314a85995453071460880e58e25a63c3c5420510e1592bd1a7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1416242b78314a85995453071460880e58e25a63c3c5420510e1592bd1a7d1->enter($__internal_ef1416242b78314a85995453071460880e58e25a63c3c5420510e1592bd1a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c7338f0cbec29bf4e39d3d410091e98ef1e60c71a47af009b6146edc14bb42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7338f0cbec29bf4e39d3d410091e98ef1e60c71a47af009b6146edc14bb42f->enter($__internal_8c7338f0cbec29bf4e39d3d410091e98ef1e60c71a47af009b6146edc14bb42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - MailBox";
        
        $__internal_8c7338f0cbec29bf4e39d3d410091e98ef1e60c71a47af009b6146edc14bb42f->leave($__internal_8c7338f0cbec29bf4e39d3d410091e98ef1e60c71a47af009b6146edc14bb42f_prof);

        
        $__internal_ef1416242b78314a85995453071460880e58e25a63c3c5420510e1592bd1a7d1->leave($__internal_ef1416242b78314a85995453071460880e58e25a63c3c5420510e1592bd1a7d1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0df389c0b117189d2968041d946469c7c2afb93339eabcf270a5a8a112fa9ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0df389c0b117189d2968041d946469c7c2afb93339eabcf270a5a8a112fa9ef->enter($__internal_c0df389c0b117189d2968041d946469c7c2afb93339eabcf270a5a8a112fa9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ef7cbd08518050b8de34f03d812bab76d6c4f3d403643f58d9e3fb725189c529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7cbd08518050b8de34f03d812bab76d6c4f3d403643f58d9e3fb725189c529->enter($__internal_ef7cbd08518050b8de34f03d812bab76d6c4f3d403643f58d9e3fb725189c529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simplemde/dist/simplemde.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-nice-select/css/style.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_ef7cbd08518050b8de34f03d812bab76d6c4f3d403643f58d9e3fb725189c529->leave($__internal_ef7cbd08518050b8de34f03d812bab76d6c4f3d403643f58d9e3fb725189c529_prof);

        
        $__internal_c0df389c0b117189d2968041d946469c7c2afb93339eabcf270a5a8a112fa9ef->leave($__internal_c0df389c0b117189d2968041d946469c7c2afb93339eabcf270a5a8a112fa9ef_prof);

    }

    // line 98
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_64d9cf7b503743b473243945a71c372c53cf160d49c3802b8866433f60f94b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d9cf7b503743b473243945a71c372c53cf160d49c3802b8866433f60f94b1f->enter($__internal_64d9cf7b503743b473243945a71c372c53cf160d49c3802b8866433f60f94b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_c99c4434d429e8a5064e4fbcb8a28b58b257d7b4b5da642c1ea86093bb918e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99c4434d429e8a5064e4fbcb8a28b58b257d7b4b5da642c1ea86093bb918e4d->enter($__internal_c99c4434d429e8a5064e4fbcb8a28b58b257d7b4b5da642c1ea86093bb918e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 99
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
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox", array("type" => "recu"));
        echo "\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Messsagerie</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_notification");
        echo "\">
                                    <span class=\"icon_info header-icon\" aria-hidden=\"true\"></span>
                                    <span>Notification</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Evenement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_agenda");
        echo "\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Agenda</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c99c4434d429e8a5064e4fbcb8a28b58b257d7b4b5da642c1ea86093bb918e4d->leave($__internal_c99c4434d429e8a5064e4fbcb8a28b58b257d7b4b5da642c1ea86093bb918e4d_prof);

        
        $__internal_64d9cf7b503743b473243945a71c372c53cf160d49c3802b8866433f60f94b1f->leave($__internal_64d9cf7b503743b473243945a71c372c53cf160d49c3802b8866433f60f94b1f_prof);

    }

    // line 139
    public function block_body($context, array $blocks = array())
    {
        $__internal_9877efd055d7fd006960d990cd9430ff6804ac1c5cdde129fe6e348f331ff877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9877efd055d7fd006960d990cd9430ff6804ac1c5cdde129fe6e348f331ff877->enter($__internal_9877efd055d7fd006960d990cd9430ff6804ac1c5cdde129fe6e348f331ff877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b485a78a7835560f8af80e4b7185ebb2154a1dbe1ca690787c517ec29e05822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b485a78a7835560f8af80e4b7185ebb2154a1dbe1ca690787c517ec29e05822->enter($__internal_8b485a78a7835560f8af80e4b7185ebb2154a1dbe1ca690787c517ec29e05822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 140
        echo "    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Mailbox</a></li>
                <li class=\"breadcrumb-item active\">mail</li>
            </ol>

        </div>

        <div class=\"mailbox_main\">
            <div class=\"col-xl-12 col-lg-12 col-md-12\">
                <div class=\"content\">
                    <div class=\"mailbox-header\">
                        <div class=\"row\">
                            <div class=\"col-xl-4\">
                                <div class=\"inbox-left float-xs-left\">
                                    <img alt=\"Profile image\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/user.jpg"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"right-mailbox float-xs-left\">
                                    <h3>Miler Hussey</h3>
                                    <h4>Mailbox</h4>
                                </div>
                            </div>
                            <div class=\"col-xl-8\">
                                <form action=\"#\" class=\"mail_search float-xs-right\">
                                    <div class=\"input-group\">
                                        <input id=\"search\" type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"search..\">
                                        <a href=\"#\" class=\"input-group-addon search_icon\"><i class=\"icon icon_search\"></i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"mailbox-contain\">
                        <div class=\"col-xl-2 col-lg-3 col-md-3 sidebar_block\">
                            <div class=\"row\">
                                <button aria-controls=\"collapseExample\" aria-expanded=\"false\"
                                        data-target=\"#collapseExample\" data-toggle=\"collapse\" type=\"button\"
                                        class=\"mail-toggle\">
                                    Mailbox <span class=\"icon arrow_carrot-down float-xs-right\"></span>
                                </button>
                                <div class=\"sidebar_contain collapse\" id=\"collapseExample\">
                                    <div class=\"mail_btn\">
                                        <button type=\"submit\"
                                                class=\"btn btn-primary btn-block mail_compose_btn flat-buttons\"
                                                id=\"compose_mail\">Compose
                                        </button>
                                    </div>
                                    <ul class=\"mailbox_sidebar_contain\">
                                        <li><a href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox", array("type" => "recu"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_wallet\" aria-hidden=\"true\"></span>Inbox<span class=\"tag square-tag tag-success\"> 42</span></a></li>
                                        <li><a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox", array("type" => "important"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_mail_alt\" aria-hidden=\"true\"></span>Importante</a></li>
                                        <li><a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox", array("type" => "send"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_cloud-upload_alt\" aria-hidden=\"true\"></span>Envoyer<span class=\"tag square-tag tag-warning\"> 20</span></a></li>
                                        <li><a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox", array("type" => "archive"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_archive_alt\" aria-hidden=\"true\"></span>Archive</a></li>
                                        <li><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox", array("type" => "corbeille"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_trash_alt\" aria-hidden=\"true\"></span>Corbeille</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-10 col-lg-9 col-md-9 right_sidebar_contain\">
                            <div class=\"mailbox_nav_bar\">
                                <div class=\"float-xs-right search_xs\">
                                    <div class=\"box float-xs-left xs-selectbox\">
                                        <select data-plugin=\"niceselect\" class=\"small\">
                                            <option data-display=\"Sort by\">Newest date</option>
                                            <option value=\"1\">Oldest date</option>
                                            <option value=\"2\">Unread</option>
                                            <option value=\"4\">More setting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"float-xs-left search_xs\">
                                    <div class=\"mail_check float-xs-left\">
                                        <div class=\"checkbox-squared\">
                                            <input type=\"checkbox\" class=\"check_all\" value=\"None\"
                                                   id=\"checkbox-squared\" name=\"check\"/>
                                            <label for=\"checkbox-squared\"></label>
                                            <span>All</span>
                                        </div>
                                    </div>
                                    <div class=\"box float-xs-left right-xs-selectbox\">
                                        <select data-plugin=\"niceselect\" class=\"small\">
                                            <option data-display=\"More\">Mark as read</option>
                                            <option value=\"1\"><a href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "unread"));
        echo "\">Unread</a></option>
                                            <option value=\"4\"><a href=\"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "archive"));
        echo "\">Archive</a></option>
                                            <option value=\"5\"><a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "delete"));
        echo "\">Delete</a></option>
                                        </select>
                                    </div>
                                    <a href=\"javascript:void(0)\" class=\"mailbox_refresh flat-buttons\"><i class=\"icon icon_refresh\"></i></a>
                                </div>
                            </div>
                            <div class=\"mailbox_right_contain\">
                                <table class=\"table mail_table\">
                                    <tbody>
                                    <tbody>
                                    ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail"] ?? $this->getContext($context, "mail")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 239
            echo "                                    <tr ";
            if (($this->getAttribute($context["m"], "etat", array()) == 0)) {
                echo "class=\"active-table\"";
            }
            echo ">
                                        <td class=\"mail_message\">
                                            <div class=\"checkbox-squared float-xs-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"checkbox-squared1\" name=\"check\"/>
                                                <label for=\"checkbox-squared1\"></label>
                                            </div>
                                            <div class=\"mail_favorite float-xs-left\">
                                                <a href=\"javascript:void(0)\" class=\"rated\">";
            // line 246
            if (($this->getAttribute($context["m"], "important", array()) == 0)) {
                echo "<i class=\"icon icon_star_alt\"></i>";
            } else {
                echo "<i class=\"icon icon_star\"></i>";
            }
            echo "</a>
                                            </div>
                                            <a href=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox_Detail", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">
                                                <div class=\"inbox-left float-xs-left\">
                                                    <img src=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image11-profile.jpg"), "html", null, true);
            echo "\"
                                                         alt=\"Profile image\">
                                                </div>
                                                <div class=\"float-xs-left user-name-mail\">Root James</div>
                                                <div class=\"float-xs-right main-title-mailbox\">
                                                    <span class=\"float-xs-left\"><span class=\"mail_title\">";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "objet", array()), "html", null, true);
            echo "</span></span>
                                                    <span class=\"tag square-tag bg-sitecolor float-xs-left\">New</span>
                                                    <span class=\"des-mail-box\">";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "message", array()), "html", null, true);
            echo "</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class=\"mail_link text-xs-center\">
                                            <a href=\"javascript:void(0)\"><i class=\"icon icon_link_alt\"></i></a>
                                        </td>
                                        <td class=\"mail-time text-xs-right\">
                                            ";
            // line 265
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateEnvoi", array()), "H:m"), "html", null, true);
            echo "
                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                                    </tbody>
                                </table>
                                <div class=\"navigation\">
                                    ";
        // line 272
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["mail"] ?? $this->getContext($context, "mail")));
        echo "
                                </div>
                                <div class=\"pagination_with_gap text-xs-right mail_pagination\">
                                    <ul class=\"pagination\">
                                        <li class=\"page-item\">
                                            <a href=\"javascript:void(0)\" class=\"page-link pagination_link\" aria-label=\"Previous\">
                                                <span aria-hidden=\"true\">«</span>
                                            </a>
                                        </li>
                                        <li class=\"page-item active\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\">1</a></li>
                                        <li class=\"page-item\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\">2</a></li>
                                        <li class=\"page-item\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\">3</a></li>
                                        <li class=\"page-item\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\">4</a></li>
                                        <li class=\"page-item\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\" aria-label=\"Next\"><span aria-hidden=\"true\">»</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"mail_compose_main pop\">
                <form action=\"";
        // line 295
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox_send");
        echo "\" method=\"POST\">
                    <div class=\"content\">
                        <div class=\"mail_view_title compose_title\">
                            <div class=\"compose-inputbox\">
                                <span>To :</span>
                                <input type=\"text\" name=\"email\">
                                <a href=\"javascript:void(0)\" class=\"compose_close float-xs-right flat-buttons\"><i class=\"icon icon_close\"></i></a>
                            </div>
                            <div class=\"compose_inputbox\">
                                <span>Subject :</span><input type=\"text\" name=\"subject\">
                            </div>
                            <div class=\"compose-inputbox\">
                                <span>Cc/Bcc :</span>
                                <input type=\"text\" name=\"cc\">
                            </div>
                        </div>
                        <div class=\"compose_message\">
                            <textarea id=\"send-mail\" data-height=\"150\" data-plugin=\"simplemarkdown\" data-spell-checker=\"false\" name=\"message\"></textarea>
                        </div>
                        <div class=\"compose_btn\">
                            <button type=\"submit\" class=\"btn btn-primary flat-buttons\">Send</button>
                            <input name=\"file_link[]\" id=\"file_link\" multiple=\"\" type=\"file\">
                            <label for=\"file_link\" class=\"btn btn-primary flat-buttons\"><i class=\"icon icon_link_alt\"></i></label>
                            <a href=\"javascript:void(0)\" class=\"mail_trash float-xs-right flat-buttons\"><i class=\"icon icon_trash_alt\"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
";
        
        $__internal_8b485a78a7835560f8af80e4b7185ebb2154a1dbe1ca690787c517ec29e05822->leave($__internal_8b485a78a7835560f8af80e4b7185ebb2154a1dbe1ca690787c517ec29e05822_prof);

        
        $__internal_9877efd055d7fd006960d990cd9430ff6804ac1c5cdde129fe6e348f331ff877->leave($__internal_9877efd055d7fd006960d990cd9430ff6804ac1c5cdde129fe6e348f331ff877_prof);

    }

    // line 326
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ebde7efbfa20e7da6f2e85c62d43f6333c56858531793107ce713ee92bb17da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebde7efbfa20e7da6f2e85c62d43f6333c56858531793107ce713ee92bb17da1->enter($__internal_ebde7efbfa20e7da6f2e85c62d43f6333c56858531793107ce713ee92bb17da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_9f2ac321640a3136933fb0ffdba278f87ea47dcbde3cc0a2a0c681d42505ff11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2ac321640a3136933fb0ffdba278f87ea47dcbde3cc0a2a0c681d42505ff11->enter($__internal_9f2ac321640a3136933fb0ffdba278f87ea47dcbde3cc0a2a0c681d42505ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 327
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simplemde/dist/simplemde.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/mail.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('#communication').addClass('active');
        </script>
    ";
        
        $__internal_9f2ac321640a3136933fb0ffdba278f87ea47dcbde3cc0a2a0c681d42505ff11->leave($__internal_9f2ac321640a3136933fb0ffdba278f87ea47dcbde3cc0a2a0c681d42505ff11_prof);

        
        $__internal_ebde7efbfa20e7da6f2e85c62d43f6333c56858531793107ce713ee92bb17da1->leave($__internal_ebde7efbfa20e7da6f2e85c62d43f6333c56858531793107ce713ee92bb17da1_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Front/etudiant/mail:mailBox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 340,  605 => 339,  601 => 338,  597 => 337,  593 => 336,  589 => 335,  585 => 334,  581 => 333,  577 => 332,  573 => 331,  569 => 330,  565 => 329,  561 => 328,  556 => 327,  547 => 326,  506 => 295,  480 => 272,  475 => 269,  465 => 265,  454 => 257,  449 => 255,  441 => 250,  436 => 248,  427 => 246,  414 => 239,  410 => 238,  397 => 228,  393 => 227,  389 => 226,  357 => 197,  353 => 196,  349 => 195,  345 => 194,  341 => 193,  305 => 160,  283 => 140,  274 => 139,  251 => 126,  236 => 114,  227 => 108,  216 => 99,  207 => 98,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - MailBox{% endblock %}
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
          href=\"{{ asset('assets/layouts/layout-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/simplemde/dist/simplemde.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/jquery-nice-select/css/style.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <style>
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
                            <li style=\"background:#087380;\">
                                <a href=\"{{ path('etudiant_mailBox',{'type':'recu'}) }}\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Messsagerie</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_notification') }}\">
                                    <span class=\"icon_info header-icon\" aria-hidden=\"true\"></span>
                                    <span>Notification</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"#\">
                                    <span class=\"icon_toolbox header-icon\" aria-hidden=\"true\"></span>
                                    <span>Evenement</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('etudiant_agenda') }}\">
                                    <span class=\"icon_calendar header-icon\" aria-hidden=\"true\" ></span>
                                    <span>Agenda</span>
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
    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Mailbox</a></li>
                <li class=\"breadcrumb-item active\">mail</li>
            </ol>

        </div>

        <div class=\"mailbox_main\">
            <div class=\"col-xl-12 col-lg-12 col-md-12\">
                <div class=\"content\">
                    <div class=\"mailbox-header\">
                        <div class=\"row\">
                            <div class=\"col-xl-4\">
                                <div class=\"inbox-left float-xs-left\">
                                    <img alt=\"Profile image\" src=\"{{ asset('assets/global/image/user.jpg') }}\">
                                </div>
                                <div class=\"right-mailbox float-xs-left\">
                                    <h3>Miler Hussey</h3>
                                    <h4>Mailbox</h4>
                                </div>
                            </div>
                            <div class=\"col-xl-8\">
                                <form action=\"#\" class=\"mail_search float-xs-right\">
                                    <div class=\"input-group\">
                                        <input id=\"search\" type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"search..\">
                                        <a href=\"#\" class=\"input-group-addon search_icon\"><i class=\"icon icon_search\"></i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"mailbox-contain\">
                        <div class=\"col-xl-2 col-lg-3 col-md-3 sidebar_block\">
                            <div class=\"row\">
                                <button aria-controls=\"collapseExample\" aria-expanded=\"false\"
                                        data-target=\"#collapseExample\" data-toggle=\"collapse\" type=\"button\"
                                        class=\"mail-toggle\">
                                    Mailbox <span class=\"icon arrow_carrot-down float-xs-right\"></span>
                                </button>
                                <div class=\"sidebar_contain collapse\" id=\"collapseExample\">
                                    <div class=\"mail_btn\">
                                        <button type=\"submit\"
                                                class=\"btn btn-primary btn-block mail_compose_btn flat-buttons\"
                                                id=\"compose_mail\">Compose
                                        </button>
                                    </div>
                                    <ul class=\"mailbox_sidebar_contain\">
                                        <li><a href=\"{{ path('etudiant_mailBox',{'type':'recu'}) }}\" class=\"flat-buttons\"><span class=\"icon_wallet\" aria-hidden=\"true\"></span>Inbox<span class=\"tag square-tag tag-success\"> 42</span></a></li>
                                        <li><a href=\"{{ path('etudiant_mailBox',{'type':'important'}) }}\" class=\"flat-buttons\"><span class=\"icon_mail_alt\" aria-hidden=\"true\"></span>Importante</a></li>
                                        <li><a href=\"{{ path('etudiant_mailBox',{'type':'send'}) }}\" class=\"flat-buttons\"><span class=\"icon_cloud-upload_alt\" aria-hidden=\"true\"></span>Envoyer<span class=\"tag square-tag tag-warning\"> 20</span></a></li>
                                        <li><a href=\"{{ path('etudiant_mailBox',{'type':'archive'}) }}\" class=\"flat-buttons\"><span class=\"icon_archive_alt\" aria-hidden=\"true\"></span>Archive</a></li>
                                        <li><a href=\"{{ path('etudiant_mailBox',{'type':'corbeille'}) }}\" class=\"flat-buttons\"><span class=\"icon_trash_alt\" aria-hidden=\"true\"></span>Corbeille</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-10 col-lg-9 col-md-9 right_sidebar_contain\">
                            <div class=\"mailbox_nav_bar\">
                                <div class=\"float-xs-right search_xs\">
                                    <div class=\"box float-xs-left xs-selectbox\">
                                        <select data-plugin=\"niceselect\" class=\"small\">
                                            <option data-display=\"Sort by\">Newest date</option>
                                            <option value=\"1\">Oldest date</option>
                                            <option value=\"2\">Unread</option>
                                            <option value=\"4\">More setting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"float-xs-left search_xs\">
                                    <div class=\"mail_check float-xs-left\">
                                        <div class=\"checkbox-squared\">
                                            <input type=\"checkbox\" class=\"check_all\" value=\"None\"
                                                   id=\"checkbox-squared\" name=\"check\"/>
                                            <label for=\"checkbox-squared\"></label>
                                            <span>All</span>
                                        </div>
                                    </div>
                                    <div class=\"box float-xs-left right-xs-selectbox\">
                                        <select data-plugin=\"niceselect\" class=\"small\">
                                            <option data-display=\"More\">Mark as read</option>
                                            <option value=\"1\"><a href=\"{{ path('admin_mailBox',{'type':'unread'}) }}\">Unread</a></option>
                                            <option value=\"4\"><a href=\"{{ path('admin_mailBox',{'type':'archive'}) }}\">Archive</a></option>
                                            <option value=\"5\"><a href=\"{{ path('admin_mailBox',{'type':'delete'}) }}\">Delete</a></option>
                                        </select>
                                    </div>
                                    <a href=\"javascript:void(0)\" class=\"mailbox_refresh flat-buttons\"><i class=\"icon icon_refresh\"></i></a>
                                </div>
                            </div>
                            <div class=\"mailbox_right_contain\">
                                <table class=\"table mail_table\">
                                    <tbody>
                                    <tbody>
                                    {% for m in mail %}
                                    <tr {% if(m.etat == 0) %}class=\"active-table\"{% endif %}>
                                        <td class=\"mail_message\">
                                            <div class=\"checkbox-squared float-xs-left\">
                                                <input type=\"checkbox\" value=\"None\" id=\"checkbox-squared1\" name=\"check\"/>
                                                <label for=\"checkbox-squared1\"></label>
                                            </div>
                                            <div class=\"mail_favorite float-xs-left\">
                                                <a href=\"javascript:void(0)\" class=\"rated\">{% if(m.important == 0) %}<i class=\"icon icon_star_alt\"></i>{% else %}<i class=\"icon icon_star\"></i>{% endif %}</a>
                                            </div>
                                            <a href=\"{{ path('etudiant_mailBox_Detail',{'id':m.id}) }}\">
                                                <div class=\"inbox-left float-xs-left\">
                                                    <img src=\"{{ asset('assets/global/image/image11-profile.jpg') }}\"
                                                         alt=\"Profile image\">
                                                </div>
                                                <div class=\"float-xs-left user-name-mail\">Root James</div>
                                                <div class=\"float-xs-right main-title-mailbox\">
                                                    <span class=\"float-xs-left\"><span class=\"mail_title\">{{ m.objet }}</span></span>
                                                    <span class=\"tag square-tag bg-sitecolor float-xs-left\">New</span>
                                                    <span class=\"des-mail-box\">{{ m.message }}</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class=\"mail_link text-xs-center\">
                                            <a href=\"javascript:void(0)\"><i class=\"icon icon_link_alt\"></i></a>
                                        </td>
                                        <td class=\"mail-time text-xs-right\">
                                            {{ m.dateEnvoi|date(\"H:m\") }}
                                        </td>
                                    </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"navigation\">
                                    {{ knp_pagination_render(mail) }}
                                </div>
                                <div class=\"pagination_with_gap text-xs-right mail_pagination\">
                                    <ul class=\"pagination\">
                                        <li class=\"page-item\">
                                            <a href=\"javascript:void(0)\" class=\"page-link pagination_link\" aria-label=\"Previous\">
                                                <span aria-hidden=\"true\">«</span>
                                            </a>
                                        </li>
                                        <li class=\"page-item active\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\">1</a></li>
                                        <li class=\"page-item\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\">2</a></li>
                                        <li class=\"page-item\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\">3</a></li>
                                        <li class=\"page-item\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\">4</a></li>
                                        <li class=\"page-item\"><a href=\"javascript:void(0)\" class=\"page-link pagination_link flat-buttons\" aria-label=\"Next\"><span aria-hidden=\"true\">»</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"mail_compose_main pop\">
                <form action=\"{{ path('etudiant_mailBox_send') }}\" method=\"POST\">
                    <div class=\"content\">
                        <div class=\"mail_view_title compose_title\">
                            <div class=\"compose-inputbox\">
                                <span>To :</span>
                                <input type=\"text\" name=\"email\">
                                <a href=\"javascript:void(0)\" class=\"compose_close float-xs-right flat-buttons\"><i class=\"icon icon_close\"></i></a>
                            </div>
                            <div class=\"compose_inputbox\">
                                <span>Subject :</span><input type=\"text\" name=\"subject\">
                            </div>
                            <div class=\"compose-inputbox\">
                                <span>Cc/Bcc :</span>
                                <input type=\"text\" name=\"cc\">
                            </div>
                        </div>
                        <div class=\"compose_message\">
                            <textarea id=\"send-mail\" data-height=\"150\" data-plugin=\"simplemarkdown\" data-spell-checker=\"false\" name=\"message\"></textarea>
                        </div>
                        <div class=\"compose_btn\">
                            <button type=\"submit\" class=\"btn btn-primary flat-buttons\">Send</button>
                            <input name=\"file_link[]\" id=\"file_link\" multiple=\"\" type=\"file\">
                            <label for=\"file_link\" class=\"btn btn-primary flat-buttons\"><i class=\"icon icon_link_alt\"></i></label>
                            <a href=\"javascript:void(0)\" class=\"mail_trash float-xs-right flat-buttons\"><i class=\"icon icon_trash_alt\"></i></a>
                        </div>
                    </div>
                </form>
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
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/simplemde/dist/simplemde.min.js') }}\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/mail.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-icon-menu/js/layout.min.js') }}\"></script>
        <script>
            \$('#communication').addClass('active');
        </script>
    {% endblock %}", "ERPBundle:Front/etudiant/mail:mailBox.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Front/etudiant/mail/mailBox.html.twig");
    }
}
