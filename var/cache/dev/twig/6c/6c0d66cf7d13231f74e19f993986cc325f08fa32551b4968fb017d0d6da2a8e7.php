<?php

/* ERPBundle:Admin/Compte:mailBox.html.twig */
class __TwigTemplate_55d7fc5ad3a963f40f5fe4444ba7f40b75ea205e2c7640fd866b21997c0e18c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Compte:mailBox.html.twig", 1);
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
        $__internal_009851f1c76dc7632db2f02f55be53b37a6006940c1728bdc15703a70e9e833f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009851f1c76dc7632db2f02f55be53b37a6006940c1728bdc15703a70e9e833f->enter($__internal_009851f1c76dc7632db2f02f55be53b37a6006940c1728bdc15703a70e9e833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:mailBox.html.twig"));

        $__internal_23aee730cbb37042a16ad6a1e05e80011182f07e15d01bb7ffc02c988c15f62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23aee730cbb37042a16ad6a1e05e80011182f07e15d01bb7ffc02c988c15f62b->enter($__internal_23aee730cbb37042a16ad6a1e05e80011182f07e15d01bb7ffc02c988c15f62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:mailBox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_009851f1c76dc7632db2f02f55be53b37a6006940c1728bdc15703a70e9e833f->leave($__internal_009851f1c76dc7632db2f02f55be53b37a6006940c1728bdc15703a70e9e833f_prof);

        
        $__internal_23aee730cbb37042a16ad6a1e05e80011182f07e15d01bb7ffc02c988c15f62b->leave($__internal_23aee730cbb37042a16ad6a1e05e80011182f07e15d01bb7ffc02c988c15f62b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4196e48e361f1967c23fee31b0b5bca11f571403c739bd69fbc014e35918b518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4196e48e361f1967c23fee31b0b5bca11f571403c739bd69fbc014e35918b518->enter($__internal_4196e48e361f1967c23fee31b0b5bca11f571403c739bd69fbc014e35918b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e03c580c13139932ce45f8eea457ce1e0438cf94d145e62ea5987ddd1aebeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e03c580c13139932ce45f8eea457ce1e0438cf94d145e62ea5987ddd1aebeda->enter($__internal_5e03c580c13139932ce45f8eea457ce1e0438cf94d145e62ea5987ddd1aebeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - MailBox";
        
        $__internal_5e03c580c13139932ce45f8eea457ce1e0438cf94d145e62ea5987ddd1aebeda->leave($__internal_5e03c580c13139932ce45f8eea457ce1e0438cf94d145e62ea5987ddd1aebeda_prof);

        
        $__internal_4196e48e361f1967c23fee31b0b5bca11f571403c739bd69fbc014e35918b518->leave($__internal_4196e48e361f1967c23fee31b0b5bca11f571403c739bd69fbc014e35918b518_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e09d6e3bc7833daf98fe88d9da784e5bbdebeca9bc59012ac378e02996a110bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09d6e3bc7833daf98fe88d9da784e5bbdebeca9bc59012ac378e02996a110bf->enter($__internal_e09d6e3bc7833daf98fe88d9da784e5bbdebeca9bc59012ac378e02996a110bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76dba6520fca25a23b0859f9dce17ccf2bd23d6653f5c810fc3a7cd5c6f3ad5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76dba6520fca25a23b0859f9dce17ccf2bd23d6653f5c810fc3a7cd5c6f3ad5f->enter($__internal_76dba6520fca25a23b0859f9dce17ccf2bd23d6653f5c810fc3a7cd5c6f3ad5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_76dba6520fca25a23b0859f9dce17ccf2bd23d6653f5c810fc3a7cd5c6f3ad5f->leave($__internal_76dba6520fca25a23b0859f9dce17ccf2bd23d6653f5c810fc3a7cd5c6f3ad5f_prof);

        
        $__internal_e09d6e3bc7833daf98fe88d9da784e5bbdebeca9bc59012ac378e02996a110bf->leave($__internal_e09d6e3bc7833daf98fe88d9da784e5bbdebeca9bc59012ac378e02996a110bf_prof);

    }

    // line 98
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_1fa0b638c843a4fed6bac3d4f4b5262c7ff52606936a660c9a6d56f9b6461acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa0b638c843a4fed6bac3d4f4b5262c7ff52606936a660c9a6d56f9b6461acd->enter($__internal_1fa0b638c843a4fed6bac3d4f4b5262c7ff52606936a660c9a6d56f9b6461acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_1e42083b9868abd5499c843f0361b6dbe6f3f324411cab797d53cc5a8eda0782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e42083b9868abd5499c843f0361b6dbe6f3f324411cab797d53cc5a8eda0782->enter($__internal_1e42083b9868abd5499c843f0361b6dbe6f3f324411cab797d53cc5a8eda0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Messsagerie</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_notification");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_agenda");
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
        
        $__internal_1e42083b9868abd5499c843f0361b6dbe6f3f324411cab797d53cc5a8eda0782->leave($__internal_1e42083b9868abd5499c843f0361b6dbe6f3f324411cab797d53cc5a8eda0782_prof);

        
        $__internal_1fa0b638c843a4fed6bac3d4f4b5262c7ff52606936a660c9a6d56f9b6461acd->leave($__internal_1fa0b638c843a4fed6bac3d4f4b5262c7ff52606936a660c9a6d56f9b6461acd_prof);

    }

    // line 139
    public function block_body($context, array $blocks = array())
    {
        $__internal_4336047136ddbb191627b6b0be1faeaa08323264a3a96bc238310175a291b494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4336047136ddbb191627b6b0be1faeaa08323264a3a96bc238310175a291b494->enter($__internal_4336047136ddbb191627b6b0be1faeaa08323264a3a96bc238310175a291b494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7a48dd945817550bcfdca81b6c801806bad568d6fa0549591c2d08119b3be0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a48dd945817550bcfdca81b6c801806bad568d6fa0549591c2d08119b3be0c->enter($__internal_d7a48dd945817550bcfdca81b6c801806bad568d6fa0549591c2d08119b3be0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_wallet\" aria-hidden=\"true\"></span>Inbox<span class=\"tag square-tag tag-success\"> 42</span></a></li>
                                        <li><a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "important"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_mail_alt\" aria-hidden=\"true\"></span>Importante</a></li>
                                        <li><a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "send"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_cloud-upload_alt\" aria-hidden=\"true\"></span>Envoyer<span class=\"tag square-tag tag-warning\"> 20</span></a></li>
                                        <li><a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "archive"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_archive_alt\" aria-hidden=\"true\"></span>Archive</a></li>
                                        <li><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "corbeille"));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox_Detail", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"mail_compose_main pop\">
                <form action=\"";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox_send");
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
        
        $__internal_d7a48dd945817550bcfdca81b6c801806bad568d6fa0549591c2d08119b3be0c->leave($__internal_d7a48dd945817550bcfdca81b6c801806bad568d6fa0549591c2d08119b3be0c_prof);

        
        $__internal_4336047136ddbb191627b6b0be1faeaa08323264a3a96bc238310175a291b494->leave($__internal_4336047136ddbb191627b6b0be1faeaa08323264a3a96bc238310175a291b494_prof);

    }

    // line 312
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_f267735048e0432c796123a5edaf8f8aaa35277f4d8cef2c29f9c3638bce9bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f267735048e0432c796123a5edaf8f8aaa35277f4d8cef2c29f9c3638bce9bfc->enter($__internal_f267735048e0432c796123a5edaf8f8aaa35277f4d8cef2c29f9c3638bce9bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_25f0597bc7f7a7e5c47e7ea0830185f3a546eef00e3b99d76c22f152f91f964e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f0597bc7f7a7e5c47e7ea0830185f3a546eef00e3b99d76c22f152f91f964e->enter($__internal_25f0597bc7f7a7e5c47e7ea0830185f3a546eef00e3b99d76c22f152f91f964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 313
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simplemde/dist/simplemde.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/mail.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('#communication').addClass('active');
        </script>
    ";
        
        $__internal_25f0597bc7f7a7e5c47e7ea0830185f3a546eef00e3b99d76c22f152f91f964e->leave($__internal_25f0597bc7f7a7e5c47e7ea0830185f3a546eef00e3b99d76c22f152f91f964e_prof);

        
        $__internal_f267735048e0432c796123a5edaf8f8aaa35277f4d8cef2c29f9c3638bce9bfc->leave($__internal_f267735048e0432c796123a5edaf8f8aaa35277f4d8cef2c29f9c3638bce9bfc_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Compte:mailBox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 326,  588 => 325,  584 => 324,  580 => 323,  576 => 322,  572 => 321,  568 => 320,  564 => 319,  560 => 318,  556 => 317,  552 => 316,  548 => 315,  544 => 314,  539 => 313,  530 => 312,  489 => 281,  475 => 269,  465 => 265,  454 => 257,  449 => 255,  441 => 250,  436 => 248,  427 => 246,  414 => 239,  410 => 238,  397 => 228,  393 => 227,  389 => 226,  357 => 197,  353 => 196,  349 => 195,  345 => 194,  341 => 193,  305 => 160,  283 => 140,  274 => 139,  251 => 126,  236 => 114,  227 => 108,  216 => 99,  207 => 98,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 84,  167 => 83,  163 => 82,  159 => 81,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
                                <a href=\"{{ path('admin_mailBox',{'type':'recu'}) }}\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Messsagerie</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"{{ path('admin_notification') }}\">
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
                                <a href=\"{{ path('admin_agenda') }}\">
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
                                        <li><a href=\"{{ path('admin_mailBox',{'type':'recu'}) }}\" class=\"flat-buttons\"><span class=\"icon_wallet\" aria-hidden=\"true\"></span>Inbox<span class=\"tag square-tag tag-success\"> 42</span></a></li>
                                        <li><a href=\"{{ path('admin_mailBox',{'type':'important'}) }}\" class=\"flat-buttons\"><span class=\"icon_mail_alt\" aria-hidden=\"true\"></span>Importante</a></li>
                                        <li><a href=\"{{ path('admin_mailBox',{'type':'send'}) }}\" class=\"flat-buttons\"><span class=\"icon_cloud-upload_alt\" aria-hidden=\"true\"></span>Envoyer<span class=\"tag square-tag tag-warning\"> 20</span></a></li>
                                        <li><a href=\"{{ path('admin_mailBox',{'type':'archive'}) }}\" class=\"flat-buttons\"><span class=\"icon_archive_alt\" aria-hidden=\"true\"></span>Archive</a></li>
                                        <li><a href=\"{{ path('admin_mailBox',{'type':'corbeille'}) }}\" class=\"flat-buttons\"><span class=\"icon_trash_alt\" aria-hidden=\"true\"></span>Corbeille</a></li>
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
                                            <a href=\"{{ path('admin_mailBox_Detail',{'id':m.id}) }}\">
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"mail_compose_main pop\">
                <form action=\"{{ path('admin_mailBox_send') }}\" method=\"POST\">
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
    {% endblock %}", "ERPBundle:Admin/Compte:mailBox.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Compte/mailBox.html.twig");
    }
}
