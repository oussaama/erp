<?php

/* ERPBundle:Admin/Compte:mailBoxDetail.html.twig */
class __TwigTemplate_548adefd64bb6573e14bdfc8e8b40938db56f44739e5fa3add262795996adeeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Compte:mailBoxDetail.html.twig", 1);
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
        $__internal_3b9a6c21244ddb1bb0237a403e9ab3c9882f43b09141a1699a558b53c40a415f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9a6c21244ddb1bb0237a403e9ab3c9882f43b09141a1699a558b53c40a415f->enter($__internal_3b9a6c21244ddb1bb0237a403e9ab3c9882f43b09141a1699a558b53c40a415f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:mailBoxDetail.html.twig"));

        $__internal_451adc68c7b2d85c67a6c6b77d30c12d33fa323f7d2d8bab8776ba21d1151149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451adc68c7b2d85c67a6c6b77d30c12d33fa323f7d2d8bab8776ba21d1151149->enter($__internal_451adc68c7b2d85c67a6c6b77d30c12d33fa323f7d2d8bab8776ba21d1151149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:mailBoxDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b9a6c21244ddb1bb0237a403e9ab3c9882f43b09141a1699a558b53c40a415f->leave($__internal_3b9a6c21244ddb1bb0237a403e9ab3c9882f43b09141a1699a558b53c40a415f_prof);

        
        $__internal_451adc68c7b2d85c67a6c6b77d30c12d33fa323f7d2d8bab8776ba21d1151149->leave($__internal_451adc68c7b2d85c67a6c6b77d30c12d33fa323f7d2d8bab8776ba21d1151149_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3505cbbd09bcb13884b234b57eab6040eb706ec46438e96d14b4796aa5def1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3505cbbd09bcb13884b234b57eab6040eb706ec46438e96d14b4796aa5def1ec->enter($__internal_3505cbbd09bcb13884b234b57eab6040eb706ec46438e96d14b4796aa5def1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d36db0c3c6fc14da89cec26fcf2388c6d43adf908896409474677d4a04e1eded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36db0c3c6fc14da89cec26fcf2388c6d43adf908896409474677d4a04e1eded->enter($__internal_d36db0c3c6fc14da89cec26fcf2388c6d43adf908896409474677d4a04e1eded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - MailBox Detail";
        
        $__internal_d36db0c3c6fc14da89cec26fcf2388c6d43adf908896409474677d4a04e1eded->leave($__internal_d36db0c3c6fc14da89cec26fcf2388c6d43adf908896409474677d4a04e1eded_prof);

        
        $__internal_3505cbbd09bcb13884b234b57eab6040eb706ec46438e96d14b4796aa5def1ec->leave($__internal_3505cbbd09bcb13884b234b57eab6040eb706ec46438e96d14b4796aa5def1ec_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67ef1d1253afa33962ea1b3d43108e79556c7ea66a5d14f3870037383aebf8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ef1d1253afa33962ea1b3d43108e79556c7ea66a5d14f3870037383aebf8de->enter($__internal_67ef1d1253afa33962ea1b3d43108e79556c7ea66a5d14f3870037383aebf8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8208f194cc6e4cfe15d6f6ae7a4939fcc49b0dbb86d6a6c06893c54b43a845e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8208f194cc6e4cfe15d6f6ae7a4939fcc49b0dbb86d6a6c06893c54b43a845e8->enter($__internal_8208f194cc6e4cfe15d6f6ae7a4939fcc49b0dbb86d6a6c06893c54b43a845e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simplemde/dist/simplemde.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <style>
        #sidebar {
            margin-top: -4px;
        }

        .menu-paiment:hover {
            background: #087380 !important;
        }
        .input-form {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_8208f194cc6e4cfe15d6f6ae7a4939fcc49b0dbb86d6a6c06893c54b43a845e8->leave($__internal_8208f194cc6e4cfe15d6f6ae7a4939fcc49b0dbb86d6a6c06893c54b43a845e8_prof);

        
        $__internal_67ef1d1253afa33962ea1b3d43108e79556c7ea66a5d14f3870037383aebf8de->leave($__internal_67ef1d1253afa33962ea1b3d43108e79556c7ea66a5d14f3870037383aebf8de_prof);

    }

    // line 101
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_2355d503efee73cc5afad14f24f958257a16e7a2bdeacff60c2931ed749fdaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2355d503efee73cc5afad14f24f958257a16e7a2bdeacff60c2931ed749fdaae->enter($__internal_2355d503efee73cc5afad14f24f958257a16e7a2bdeacff60c2931ed749fdaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_efcd4e96cd2df7b88c50e6af025cd14a64013bd56bf88d0c65b89b31bb8a4abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcd4e96cd2df7b88c50e6af025cd14a64013bd56bf88d0c65b89b31bb8a4abd->enter($__internal_efcd4e96cd2df7b88c50e6af025cd14a64013bd56bf88d0c65b89b31bb8a4abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        // line 102
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
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\">
                                    <span class=\"icon_mail header-icon\" aria-hidden=\"true\" style=\"color: #fff;\"></span>
                                    <span style=\"color:white\">Messsagerie</span>
                                </a>
                            </li>
                            <li class=\"menu-paiment\">
                                <a href=\"";
        // line 117
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
        // line 129
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
        
        $__internal_efcd4e96cd2df7b88c50e6af025cd14a64013bd56bf88d0c65b89b31bb8a4abd->leave($__internal_efcd4e96cd2df7b88c50e6af025cd14a64013bd56bf88d0c65b89b31bb8a4abd_prof);

        
        $__internal_2355d503efee73cc5afad14f24f958257a16e7a2bdeacff60c2931ed749fdaae->leave($__internal_2355d503efee73cc5afad14f24f958257a16e7a2bdeacff60c2931ed749fdaae_prof);

    }

    // line 142
    public function block_body($context, array $blocks = array())
    {
        $__internal_020dce94a796f02e8ebbff9a1043cc3393a206f7c62c98a6cbfbe891d1791bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020dce94a796f02e8ebbff9a1043cc3393a206f7c62c98a6cbfbe891d1791bbc->enter($__internal_020dce94a796f02e8ebbff9a1043cc3393a206f7c62c98a6cbfbe891d1791bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41c32d5282c0640787be23f65a6a6bc4b3f9c5afa83cdbf470917443c72d1f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c32d5282c0640787be23f65a6a6bc4b3f9c5afa83cdbf470917443c72d1f39->enter($__internal_41c32d5282c0640787be23f65a6a6bc4b3f9c5afa83cdbf470917443c72d1f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 143
        echo "    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Mailbox</h2>

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
        // line 165
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
                                        <button type=\"submit\" class=\"btn btn-primary btn-block mail_compose_btn flat-buttons\" id=\"compose_mail\">Compose</button>
                                    </div>
                                    <ul class=\"mailbox_sidebar_contain\">
                                        <li><a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_wallet\" aria-hidden=\"true\"></span>Inbox<span class=\"tag square-tag tag-success\"> 42</span></a></li>
                                        <li><a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "important"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_mail_alt\" aria-hidden=\"true\"></span>Importante</a></li>
                                        <li><a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "send"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_cloud-upload_alt\" aria-hidden=\"true\"></span>Envoyer<span class=\"tag square-tag tag-warning\"> 20</span></a></li>
                                        <li><a href=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "archive"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_archive_alt\" aria-hidden=\"true\"></span>Archive</a></li>
                                        <li><a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "corbeille"));
        echo "\" class=\"flat-buttons\"><span class=\"icon_trash_alt\" aria-hidden=\"true\"></span>Corbeille</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-10 col-lg-9 col-md-9 right-sidebar_block mail_view_block\">
                            <div class=\"mailbox_right_contain\">
                                <div class=\"col-xl-12\">
                                    <div class=\"row\">
                                        <div class=\"inbox-left float-xs-left\">
                                            <img alt=\"Profile image\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/user.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"mail_view_title\">
                                            <span class=\"float-xs-left\">From :</span><h6>";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "send", array()), "html", null, true);
        echo "</h6>
                                            <span class=\"float-xs-left\">Subject :</span>
                                            <p>";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "objet", array()), "html", null, true);
        echo "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"mail_massage\">
                                    <p>Hello Bonnie,</p>
                                    <p>";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "send", array()), "html", null, true);
        echo "</p>
                                    <blockquote class=\"blockquote\">
                                        <p>";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "message", array()), "html", null, true);
        echo "</p>
                                    </blockquote>
                                </div>
                                <div class=\"mail_attachments\">
                                    <i class=\"icon icon_link_alt float-xs-left\"></i>
                                    <div class=\"float-xs-left\">Attachments <span>(3)</span></div>
                                    <div class=\"col-md-12\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                                                <div class=\"gallery-img mail_attachments_img\">
                                                    <img class=\"view-img\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/mail-image1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    <div class=\"gallery-overlay\">
                                                        <div class=\"gallery-wrapper\">
                                                            <div class=\"gallery-description\">
                                                                <div class=\"gallery-icon\">
                                                                    <a href=\"#\"><i class=\"icon icon_download\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Note with pen</h6>
                                            </div>
                                            <div class=\"col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                                                <div class=\"gallery-img mail_attachments_img\">
                                                    <img class=\"view-img\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/mail-image2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    <div class=\"gallery-overlay\">
                                                        <div class=\"gallery-wrapper\">
                                                            <div class=\"gallery-description\">
                                                                <div class=\"gallery-icon\">
                                                                    <a href=\"#\"><i
                                                                                class=\"icon icon_download\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Laptop with paper</h6>
                                            </div>
                                            <div class=\"col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                                                <div class=\"gallery-img mail_attachments_img\">
                                                    <img class=\"view-img\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/mail-image3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                    <div class=\"gallery-overlay\">
                                                        <div class=\"gallery-wrapper\">
                                                            <div class=\"gallery-description\">
                                                                <div class=\"gallery-icon\">
                                                                    <a href=\"#\"><i
                                                                                class=\"icon icon_download\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Lenovo laptop</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"mail_reply_button float-xs-left\">
                                    <button type=\"button\" class=\"btn btn-primary mail_reply_btn flat-buttons\" id=\"mail_reply\"><i class=\"icon fa fa-mail-reply\"></i>Reply</button>
                                    <button type=\"button\" class=\"btn btn-primary mail_reply_btn flat-buttons\" id=\"mail_forward_btn\"><i class=\"icon fa fa-mail-forward\"></i>Forward</button>
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"col-md-12\">
                                <div class=\"row\">
                                    <form action=\"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox_send");
        echo "\" method=\"POST\">
                                        <div class=\"reply_main_block\">
                                            <div class=\"reply_to\">
                                                <span class=\"float-xs-left\">To :</span><h6>";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "send", array()), "html", null, true);
        echo "</h6>
                                                <input type=\"hidden\" name =\"email\" value=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "send", array()), "html", null, true);
        echo "\"/>
                                                <input type=\"hidden\" name =\"objet\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "objet", array()), "html", null, true);
        echo "\"/>
                                                </div>
                                            <div class=\"reply_massage\">
                                                <textarea id=\"reply-mail\" data-plugin=\"simplemarkdown\" data-spell-checker=\"false\" data-autofocus=\"true\" rows=\"10\" name=\"message\"></textarea>
                                            </div>
                                            <div class=\"reply_bottom\">
                                                <button type=\"submit\" class=\"btn btn-primary flat-buttons\">Send</button>
                                                <button type=\"button\" class=\"btn btn-primary flat-buttons\" id=\"mail_reply_cancel\">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"row\">
                                    <div class=\"forward_block\">
                                        <form action=\"";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox_send");
        echo "\" method=\"POST\">
                                            <div class=\"reply_to\">
                                                <span class=\"float-xs-left\">From :</span><input type=\"text\" name=\"email\">
                                                <input type=\"hidden\" name =\"objet\" value=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "objet", array()), "html", null, true);
        echo "\"/>
                                            </div>
                                            <div class=\"reply_massage\">
                                                <textarea id=\"forward-mail\" data-plugin=\"simplemarkdown\" data-spell-checker=\"false\" data-autofocus=\"true\" rows=\"10\" name=\"message\"></textarea>
                                            </div>
                                            <div class=\"reply_bottom\">
                                                <button type=\"submit\" class=\"btn btn-primary flat-buttons\">Send</button>
                                                <button type=\"button\" class=\"btn btn-primary flat-buttons\" id=\"mail_forward_cancel\">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"mail_compose_main pop\">
                            <div class=\"content\">
                                <form action=\"";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox_send");
        echo "\" method=\"POST\">
                                <div class=\"mail_view_title compose_title\">
                                    <div class=\"compose-inputbox\"><span>To :</span><input type=\"text\" name=\"email\">
                                        <a href=\"javascript:void(0)\" class=\"compose_close float-xs-right flat-buttons\"><i class=\"icon icon_close\"></i></a>
                                    </div>
                                    <div class=\"compose_inputbox\">
                                        <span>Subject :</span><input type=\"text\" name=\"subject\">
                                    </div>
                                </div>
                                <div class=\"compose_message\">
                                <textarea id=\"send-mail\" data-height=\"150\" data-plugin=\"simplemarkdown\" data-spell-checker=\"false\"></textarea>
                                </div>
                                <div class=\"compose_btn\">
                                    <button type=\"submit\" class=\"btn btn-primary flat-buttons\">Send</button>
                                    <input name=\"file_link[]\" id=\"file_link\" multiple=\"\" type=\"file\">
                                    <label for=\"file_link\" class=\"btn btn-primary flat-buttons\"><i class=\"icon icon_link_alt\"></i></label>
                                    <a href=\"javascript:void(0)\" class=\"mail_trash float-xs-right flat-buttons\"><i class=\"icon icon_trash_alt\"></i></a>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>

    </section>
";
        
        $__internal_41c32d5282c0640787be23f65a6a6bc4b3f9c5afa83cdbf470917443c72d1f39->leave($__internal_41c32d5282c0640787be23f65a6a6bc4b3f9c5afa83cdbf470917443c72d1f39_prof);

        
        $__internal_020dce94a796f02e8ebbff9a1043cc3393a206f7c62c98a6cbfbe891d1791bbc->leave($__internal_020dce94a796f02e8ebbff9a1043cc3393a206f7c62c98a6cbfbe891d1791bbc_prof);

    }

    // line 355
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_67c41e0976e21764ab28e61e8e4972780e5dac1154550f1967a80b52dc4d8880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c41e0976e21764ab28e61e8e4972780e5dac1154550f1967a80b52dc4d8880->enter($__internal_67c41e0976e21764ab28e61e8e4972780e5dac1154550f1967a80b52dc4d8880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_d5973ed34cac992578be7ea24b7b23a8e264ebcafc017304c22947c00e036ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5973ed34cac992578be7ea24b7b23a8e264ebcafc017304c22947c00e036ac6->enter($__internal_d5973ed34cac992578be7ea24b7b23a8e264ebcafc017304c22947c00e036ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 356
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simplemde/dist/simplemde.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/CodeMirror-v1/js/codemirror.js"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/mail.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script>\$('communication').addClass('active');</script>
";
        
        $__internal_d5973ed34cac992578be7ea24b7b23a8e264ebcafc017304c22947c00e036ac6->leave($__internal_d5973ed34cac992578be7ea24b7b23a8e264ebcafc017304c22947c00e036ac6_prof);

        
        $__internal_67c41e0976e21764ab28e61e8e4972780e5dac1154550f1967a80b52dc4d8880->leave($__internal_67c41e0976e21764ab28e61e8e4972780e5dac1154550f1967a80b52dc4d8880_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Compte:mailBoxDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  632 => 369,  628 => 368,  624 => 367,  620 => 366,  616 => 365,  612 => 364,  608 => 363,  604 => 362,  600 => 361,  596 => 360,  592 => 359,  588 => 358,  584 => 357,  579 => 356,  570 => 355,  534 => 329,  514 => 312,  508 => 309,  489 => 293,  485 => 292,  481 => 291,  475 => 288,  447 => 263,  428 => 247,  410 => 232,  397 => 222,  392 => 220,  383 => 214,  378 => 212,  372 => 209,  359 => 199,  355 => 198,  351 => 197,  347 => 196,  343 => 195,  310 => 165,  286 => 143,  277 => 142,  254 => 129,  239 => 117,  230 => 111,  219 => 102,  210 => 101,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 80,  154 => 79,  150 => 78,  146 => 77,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - MailBox Detail{% endblock %}
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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/simplemde/dist/simplemde.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <style>
        #sidebar {
            margin-top: -4px;
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
            <h2 class=\"float-xs-left content-title-main\">Mailbox</h2>

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
                                        <button type=\"submit\" class=\"btn btn-primary btn-block mail_compose_btn flat-buttons\" id=\"compose_mail\">Compose</button>
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
                        <div class=\"col-xl-10 col-lg-9 col-md-9 right-sidebar_block mail_view_block\">
                            <div class=\"mailbox_right_contain\">
                                <div class=\"col-xl-12\">
                                    <div class=\"row\">
                                        <div class=\"inbox-left float-xs-left\">
                                            <img alt=\"Profile image\" src=\"{{ asset('assets/global/image/user.jpg') }}\">
                                        </div>
                                        <div class=\"mail_view_title\">
                                            <span class=\"float-xs-left\">From :</span><h6>{{ mail.send }}</h6>
                                            <span class=\"float-xs-left\">Subject :</span>
                                            <p>{{ mail.objet }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"mail_massage\">
                                    <p>Hello Bonnie,</p>
                                    <p>{{ mail.send }}</p>
                                    <blockquote class=\"blockquote\">
                                        <p>{{ mail.message }}</p>
                                    </blockquote>
                                </div>
                                <div class=\"mail_attachments\">
                                    <i class=\"icon icon_link_alt float-xs-left\"></i>
                                    <div class=\"float-xs-left\">Attachments <span>(3)</span></div>
                                    <div class=\"col-md-12\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                                                <div class=\"gallery-img mail_attachments_img\">
                                                    <img class=\"view-img\" src=\"{{ asset('assets/global/image/mail-image1.jpg') }}\" alt=\"\"/>
                                                    <div class=\"gallery-overlay\">
                                                        <div class=\"gallery-wrapper\">
                                                            <div class=\"gallery-description\">
                                                                <div class=\"gallery-icon\">
                                                                    <a href=\"#\"><i class=\"icon icon_download\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Note with pen</h6>
                                            </div>
                                            <div class=\"col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                                                <div class=\"gallery-img mail_attachments_img\">
                                                    <img class=\"view-img\" src=\"{{ asset('assets/global/image/mail-image2.jpg') }}\" alt=\"\"/>
                                                    <div class=\"gallery-overlay\">
                                                        <div class=\"gallery-wrapper\">
                                                            <div class=\"gallery-description\">
                                                                <div class=\"gallery-icon\">
                                                                    <a href=\"#\"><i
                                                                                class=\"icon icon_download\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Laptop with paper</h6>
                                            </div>
                                            <div class=\"col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12\">
                                                <div class=\"gallery-img mail_attachments_img\">
                                                    <img class=\"view-img\" src=\"{{ asset('assets/global/image/mail-image3.jpg') }}\" alt=\"\"/>
                                                    <div class=\"gallery-overlay\">
                                                        <div class=\"gallery-wrapper\">
                                                            <div class=\"gallery-description\">
                                                                <div class=\"gallery-icon\">
                                                                    <a href=\"#\"><i
                                                                                class=\"icon icon_download\"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Lenovo laptop</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"mail_reply_button float-xs-left\">
                                    <button type=\"button\" class=\"btn btn-primary mail_reply_btn flat-buttons\" id=\"mail_reply\"><i class=\"icon fa fa-mail-reply\"></i>Reply</button>
                                    <button type=\"button\" class=\"btn btn-primary mail_reply_btn flat-buttons\" id=\"mail_forward_btn\"><i class=\"icon fa fa-mail-forward\"></i>Forward</button>
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
                            <div class=\"col-md-12\">
                                <div class=\"row\">
                                    <form action=\"{{ path('admin_mailBox_send') }}\" method=\"POST\">
                                        <div class=\"reply_main_block\">
                                            <div class=\"reply_to\">
                                                <span class=\"float-xs-left\">To :</span><h6>{{ mail.send }}</h6>
                                                <input type=\"hidden\" name =\"email\" value=\"{{ mail.send }}\"/>
                                                <input type=\"hidden\" name =\"objet\" value=\"{{ mail.objet }}\"/>
                                                </div>
                                            <div class=\"reply_massage\">
                                                <textarea id=\"reply-mail\" data-plugin=\"simplemarkdown\" data-spell-checker=\"false\" data-autofocus=\"true\" rows=\"10\" name=\"message\"></textarea>
                                            </div>
                                            <div class=\"reply_bottom\">
                                                <button type=\"submit\" class=\"btn btn-primary flat-buttons\">Send</button>
                                                <button type=\"button\" class=\"btn btn-primary flat-buttons\" id=\"mail_reply_cancel\">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"row\">
                                    <div class=\"forward_block\">
                                        <form action=\"{{ path('admin_mailBox_send') }}\" method=\"POST\">
                                            <div class=\"reply_to\">
                                                <span class=\"float-xs-left\">From :</span><input type=\"text\" name=\"email\">
                                                <input type=\"hidden\" name =\"objet\" value=\"{{ mail.objet }}\"/>
                                            </div>
                                            <div class=\"reply_massage\">
                                                <textarea id=\"forward-mail\" data-plugin=\"simplemarkdown\" data-spell-checker=\"false\" data-autofocus=\"true\" rows=\"10\" name=\"message\"></textarea>
                                            </div>
                                            <div class=\"reply_bottom\">
                                                <button type=\"submit\" class=\"btn btn-primary flat-buttons\">Send</button>
                                                <button type=\"button\" class=\"btn btn-primary flat-buttons\" id=\"mail_forward_cancel\">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"mail_compose_main pop\">
                            <div class=\"content\">
                                <form action=\"{{ path('admin_mailBox_send') }}\" method=\"POST\">
                                <div class=\"mail_view_title compose_title\">
                                    <div class=\"compose-inputbox\"><span>To :</span><input type=\"text\" name=\"email\">
                                        <a href=\"javascript:void(0)\" class=\"compose_close float-xs-right flat-buttons\"><i class=\"icon icon_close\"></i></a>
                                    </div>
                                    <div class=\"compose_inputbox\">
                                        <span>Subject :</span><input type=\"text\" name=\"subject\">
                                    </div>
                                </div>
                                <div class=\"compose_message\">
                                <textarea id=\"send-mail\" data-height=\"150\" data-plugin=\"simplemarkdown\" data-spell-checker=\"false\"></textarea>
                                </div>
                                <div class=\"compose_btn\">
                                    <button type=\"submit\" class=\"btn btn-primary flat-buttons\">Send</button>
                                    <input name=\"file_link[]\" id=\"file_link\" multiple=\"\" type=\"file\">
                                    <label for=\"file_link\" class=\"btn btn-primary flat-buttons\"><i class=\"icon icon_link_alt\"></i></label>
                                    <a href=\"javascript:void(0)\" class=\"mail_trash float-xs-right flat-buttons\"><i class=\"icon icon_trash_alt\"></i></a>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/CodeMirror-v1/js/codemirror.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/mail.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-icon-menu/js/layout.min.js') }}\"></script>
    <script>\$('communication').addClass('active');</script>
{% endblock %}", "ERPBundle:Admin/Compte:mailBoxDetail.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Compte/mailBoxDetail.html.twig");
    }
}
