<?php

/* ERPBundle:Admin:index.html.twig */
class __TwigTemplate_2944304260b7960c4c7d547dbbd30566375bf77828cf80ea946b657ae210bdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'secondMenu' => array($this, 'block_secondMenu'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23cf565854e752f4e1d1812d40e04a0201bc4c9b866118fd148271453494f521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cf565854e752f4e1d1812d40e04a0201bc4c9b866118fd148271453494f521->enter($__internal_23cf565854e752f4e1d1812d40e04a0201bc4c9b866118fd148271453494f521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin:index.html.twig"));

        $__internal_19fa70a149672ba07fa258b8f8db2315d769e4e3a3bc2c9050d7e9b026c5ecbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fa70a149672ba07fa258b8f8db2315d769e4e3a3bc2c9050d7e9b026c5ecbd->enter($__internal_19fa70a149672ba07fa258b8f8db2315d769e4e3a3bc2c9050d7e9b026c5ecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23cf565854e752f4e1d1812d40e04a0201bc4c9b866118fd148271453494f521->leave($__internal_23cf565854e752f4e1d1812d40e04a0201bc4c9b866118fd148271453494f521_prof);

        
        $__internal_19fa70a149672ba07fa258b8f8db2315d769e4e3a3bc2c9050d7e9b026c5ecbd->leave($__internal_19fa70a149672ba07fa258b8f8db2315d769e4e3a3bc2c9050d7e9b026c5ecbd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b5aa4c0a3e477ad0d349993d312ac23013ea3ab46f9e42c4d47f4256a06572d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5aa4c0a3e477ad0d349993d312ac23013ea3ab46f9e42c4d47f4256a06572d->enter($__internal_5b5aa4c0a3e477ad0d349993d312ac23013ea3ab46f9e42c4d47f4256a06572d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88e9364240f0ef4e02a35d1b029a03c313021210f59f00f8863de2d32c3649b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e9364240f0ef4e02a35d1b029a03c313021210f59f00f8863de2d32c3649b6->enter($__internal_88e9364240f0ef4e02a35d1b029a03c313021210f59f00f8863de2d32c3649b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Index";
        
        $__internal_88e9364240f0ef4e02a35d1b029a03c313021210f59f00f8863de2d32c3649b6->leave($__internal_88e9364240f0ef4e02a35d1b029a03c313021210f59f00f8863de2d32c3649b6_prof);

        
        $__internal_5b5aa4c0a3e477ad0d349993d312ac23013ea3ab46f9e42c4d47f4256a06572d->leave($__internal_5b5aa4c0a3e477ad0d349993d312ac23013ea3ab46f9e42c4d47f4256a06572d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fde4332471c0e567b461fb79e1503479b3c8bbafadfce8d2205d3a6e48a558ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde4332471c0e567b461fb79e1503479b3c8bbafadfce8d2205d3a6e48a558ff->enter($__internal_fde4332471c0e567b461fb79e1503479b3c8bbafadfce8d2205d3a6e48a558ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f1722941578d9d063fd6c0a7864576fc323aca29f993fcbbb49364860f452672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1722941578d9d063fd6c0a7864576fc323aca29f993fcbbb49364860f452672->enter($__internal_f1722941578d9d063fd6c0a7864576fc323aca29f993fcbbb49364860f452672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

        };
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-material-menu/css/color/light/color-default.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/css-hamburgers/dist/hamburgers.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_f1722941578d9d063fd6c0a7864576fc323aca29f993fcbbb49364860f452672->leave($__internal_f1722941578d9d063fd6c0a7864576fc323aca29f993fcbbb49364860f452672_prof);

        
        $__internal_fde4332471c0e567b461fb79e1503479b3c8bbafadfce8d2205d3a6e48a558ff->leave($__internal_fde4332471c0e567b461fb79e1503479b3c8bbafadfce8d2205d3a6e48a558ff_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_dda3f47a442da90efe2ed9dee4e9b62ee8353c73db9598bbd3d351afb1ec5c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda3f47a442da90efe2ed9dee4e9b62ee8353c73db9598bbd3d351afb1ec5c53->enter($__internal_dda3f47a442da90efe2ed9dee4e9b62ee8353c73db9598bbd3d351afb1ec5c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7088a8d90c5538dbc4f4b879f3d4adb5603db9d4a7152efa02a85ed741284d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7088a8d90c5538dbc4f4b879f3d4adb5603db9d4a7152efa02a85ed741284d3e->enter($__internal_7088a8d90c5538dbc4f4b879f3d4adb5603db9d4a7152efa02a85ed741284d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "    ";
        $this->displayBlock('secondMenu', $context, $blocks);
        // line 93
        echo "    <section id=\"content-wrapper\" class=\"form-elements\" style=\"margin-top: -50px;\">
                <div class=\"site-content-title\">
                    <h2 class=\"float-xs-left content-title-main\">Dashboard</h2>

                    <ol class=\"breadcrumb float-xs-right\">
                        <li class=\"breadcrumb-item\">
                            <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                        <li class=\"breadcrumb-item active\">Dashboard 2</li>
                    </ol>

                </div>

                <div class=\"contain-inner dashboard-v2\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-lg-12 col-xl-9\">
                                <div class=\"content\">
                                    <div class=\"dashboard-content\">
                                        <div class=\"dashboard-header\">
                                            <h4 class=\"page-content-title float-xs-left\">Traffic views</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                                  aria-hidden=\"true\"><span
                                                                    class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id=\"line-chart\" class=\"dashboard-box chart-height\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-12 col-xl-3\">
                                <div class=\"content form-bootstrap-datetime\">
                                    <div class=\"calender-icon\">
                                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                    </div>
                                    <div id=\"startdate\"></div>
                                    <div class=\"dashboard-calender\">
                                        <div class=\"inline-calendar\">
                                            <div data-plugin=\"flatpickr\" data-enable-time=\"true\"
                                                 data-inline=\"true\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"divider25\"></div>
                        <div class=\"row\">
                            <div class=\"col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                        <div class=\"dashboard-widget widget-box dashboard-xs-widget\">
                                            <div class=\"widget-content text-xs-right\">
                                                <div class=\"product-icon bg-danger flat-buttons\">
                                                    <i class=\"product-hover icon_printer\"></i>
                                                    <i class=\"display-icon icon_printer\"></i>
                                                </div>
                                                <span>Products</span>
                                                <h4 class=\"text-danger\">4,500</h4>
                                                <span class=\"search_ad\">Sale</span> <span>Today sale</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                        <div class=\"dashboard-widget widget-box\">
                                            <div class=\"widget-content text-xs-right\">
                                                <div class=\"product-icon bg-success flat-buttons\">
                                                    <i class=\"product-hover icon_document\"></i>
                                                    <i class=\"display-icon icon_document\"></i>
                                                </div>
                                                <span>Projects</span>
                                                <h4 class=\"text-success\">1,500</h4>
                                                <span class=\"search_ad bg-danger\">Sale</span><span>Total sale</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"divider-lg-spacing\"></div>
                                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                        <div class=\"dashboard-widget widget-box dashboard-xs-widget\">
                                            <div class=\"widget-content text-xs-right\">
                                                <div class=\"product-icon bg-primary flat-buttons\">
                                                    <i class=\"product-hover icon_contacts\"></i>
                                                    <i class=\"display-icon icon_contacts\"></i>
                                                </div>
                                                <span>Visitor</span>
                                                <h4 class=\"text-primary\">4,700</h4>
                                                <span class=\"search_ad bg-success\">View</span>
                                                <span>Today visitors</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                        <div class=\"dashboard-widget widget-box\">
                                            <div class=\"widget-content text-xs-right\">
                                                <div class=\"product-icon bg-info flat-buttons\">
                                                    <i class=\"product-hover icon_mail\"></i>
                                                    <i class=\"display-icon icon_mail\"></i>
                                                </div>
                                                <span>Message</span>
                                                <h4 class=\"text-info\">1,700</h4>
                                                <span class=\"search_ad\">View</span><span>Today message</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"dashboard_v4_box_block\">
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left primary_box\">
                                            <i class=\"fa fa-user fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/client/Entreprises\">Etudiants</a></h4>
                                            <p>Total etudiants : <span class=\"tag tag-pill tag-warning\">";
        // line 216
        echo twig_escape_filter($this->env, ($context["result"] ?? $this->getContext($context, "result")), "html", null, true);
        echo "</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left warning_box\">
                                            <i class=\"fa fa-envelope fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4> <a href=\"/publik/web/app_dev.php/admin/contact/\">Contacts</a></h4>
                                            <p>Total des contacts réçus : <span class=\"tag tag-pill tag-warning\">";
        // line 227
        echo twig_escape_filter($this->env, ($context["result2"] ?? $this->getContext($context, "result2")), "html", null, true);
        echo "</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left success_box\">
                                            <i class=\"fa fa-suitcase fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4> <a href=\"/publik/web/app_dev.php/admin/project/\">Enseignants</a></h4>
                                            <p>Total enseignants : <span class=\"tag tag-pill tag-warning\">";
        // line 238
        echo twig_escape_filter($this->env, ($context["result3"] ?? $this->getContext($context, "result3")), "html", null, true);
        echo "</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                            <i class=\"fa fa-archive fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/concours/\">Documents</a></h4>
                                            <p>Total Documents : <span class=\"tag tag-pill tag-success\">";
        // line 249
        echo twig_escape_filter($this->env, ($context["result4"] ?? $this->getContext($context, "result4")), "html", null, true);
        echo "</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                            <i class=\"fa fa-university fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/concours/\">Classes</a></h4>
                                            <p>Total classes : <span class=\"tag tag-pill tag-success\">";
        // line 260
        echo twig_escape_filter($this->env, ($context["result5"] ?? $this->getContext($context, "result5")), "html", null, true);
        echo "</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                            <i class=\"fa fa-university fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/concours/\">Matières</a></h4>
                                            <p>Total matières : <span class=\"tag tag-pill tag-success\">";
        // line 271
        echo twig_escape_filter($this->env, ($context["result6"] ?? $this->getContext($context, "result6")), "html", null, true);
        echo "</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                            <i class=\"fa fa-users fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/concours/\">Employées</a></h4>
                                            <p>Total employées : <span class=\"tag tag-pill tag-success\">";
        // line 282
        echo twig_escape_filter($this->env, ($context["result7"] ?? $this->getContext($context, "result7")), "html", null, true);
        echo "</span></p>
                                            <p>Total concours non qualifiées : <span class=\"tag tag-pill tag-warning\">0</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
";
        
        $__internal_7088a8d90c5538dbc4f4b879f3d4adb5603db9d4a7152efa02a85ed741284d3e->leave($__internal_7088a8d90c5538dbc4f4b879f3d4adb5603db9d4a7152efa02a85ed741284d3e_prof);

        
        $__internal_dda3f47a442da90efe2ed9dee4e9b62ee8353c73db9598bbd3d351afb1ec5c53->leave($__internal_dda3f47a442da90efe2ed9dee4e9b62ee8353c73db9598bbd3d351afb1ec5c53_prof);

    }

    // line 92
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_f820c74d80f9bf8158cb7f72731e11732fad7b8d8fa217d47165193eb8fe3f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f820c74d80f9bf8158cb7f72731e11732fad7b8d8fa217d47165193eb8fe3f06->enter($__internal_f820c74d80f9bf8158cb7f72731e11732fad7b8d8fa217d47165193eb8fe3f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_5b7e0831f57326eb591898b99586e6874d7e6a39c14a00110f87a94c585f3c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7e0831f57326eb591898b99586e6874d7e6a39c14a00110f87a94c585f3c10->enter($__internal_5b7e0831f57326eb591898b99586e6874d7e6a39c14a00110f87a94c585f3c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        
        $__internal_5b7e0831f57326eb591898b99586e6874d7e6a39c14a00110f87a94c585f3c10->leave($__internal_5b7e0831f57326eb591898b99586e6874d7e6a39c14a00110f87a94c585f3c10_prof);

        
        $__internal_f820c74d80f9bf8158cb7f72731e11732fad7b8d8fa217d47165193eb8fe3f06->leave($__internal_f820c74d80f9bf8158cb7f72731e11732fad7b8d8fa217d47165193eb8fe3f06_prof);

    }

    // line 293
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_e457ddb4ebe810b5e3a2d441f97fc3575804c94e47e14eed6b0bfd8ada7ee439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e457ddb4ebe810b5e3a2d441f97fc3575804c94e47e14eed6b0bfd8ada7ee439->enter($__internal_e457ddb4ebe810b5e3a2d441f97fc3575804c94e47e14eed6b0bfd8ada7ee439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_deb5f72be5d8380f556a2c84cd895072967e9fe804ec00fc25a538e0db640db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb5f72be5d8380f556a2c84cd895072967e9fe804ec00fc25a538e0db640db6->enter($__internal_deb5f72be5d8380f556a2c84cd895072967e9fe804ec00fc25a538e0db640db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 294
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flatpickr/dist/flatpickr.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#dashboard').addClass('active');
    </script>
";
        
        $__internal_deb5f72be5d8380f556a2c84cd895072967e9fe804ec00fc25a538e0db640db6->leave($__internal_deb5f72be5d8380f556a2c84cd895072967e9fe804ec00fc25a538e0db640db6_prof);

        
        $__internal_e457ddb4ebe810b5e3a2d441f97fc3575804c94e47e14eed6b0bfd8ada7ee439->leave($__internal_e457ddb4ebe810b5e3a2d441f97fc3575804c94e47e14eed6b0bfd8ada7ee439_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 312,  546 => 311,  542 => 310,  538 => 309,  534 => 308,  530 => 307,  526 => 306,  522 => 305,  518 => 304,  514 => 303,  510 => 302,  506 => 301,  502 => 300,  498 => 299,  494 => 298,  490 => 297,  486 => 296,  482 => 295,  477 => 294,  468 => 293,  451 => 92,  430 => 282,  416 => 271,  402 => 260,  388 => 249,  374 => 238,  360 => 227,  346 => 216,  221 => 93,  218 => 92,  209 => 91,  197 => 89,  193 => 88,  189 => 87,  185 => 86,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  165 => 81,  161 => 80,  157 => 79,  153 => 78,  149 => 77,  145 => 76,  71 => 4,  62 => 3,  44 => 2,  11 => 1,);
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
{% block title %}Admin - Index{% endblock %}
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

        };
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap/dist/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-material-menu/css/color/light/color-default.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/css-hamburgers/dist/hamburgers.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/morris.js/morris.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
{% endblock %}
{% block body %}
    {% block secondMenu %}{% endblock %}
    <section id=\"content-wrapper\" class=\"form-elements\" style=\"margin-top: -50px;\">
                <div class=\"site-content-title\">
                    <h2 class=\"float-xs-left content-title-main\">Dashboard</h2>

                    <ol class=\"breadcrumb float-xs-right\">
                        <li class=\"breadcrumb-item\">
                            <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                        <li class=\"breadcrumb-item active\">Dashboard 2</li>
                    </ol>

                </div>

                <div class=\"contain-inner dashboard-v2\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-lg-12 col-xl-9\">
                                <div class=\"content\">
                                    <div class=\"dashboard-content\">
                                        <div class=\"dashboard-header\">
                                            <h4 class=\"page-content-title float-xs-left\">Traffic views</h4>
                                            <div class=\"dashboard-action\">
                                                <ul class=\"right-action float-xs-right\">
                                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                                  aria-hidden=\"true\"><span
                                                                    class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id=\"line-chart\" class=\"dashboard-box chart-height\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-12 col-xl-3\">
                                <div class=\"content form-bootstrap-datetime\">
                                    <div class=\"calender-icon\">
                                        <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                    </div>
                                    <div id=\"startdate\"></div>
                                    <div class=\"dashboard-calender\">
                                        <div class=\"inline-calendar\">
                                            <div data-plugin=\"flatpickr\" data-enable-time=\"true\"
                                                 data-inline=\"true\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"divider25\"></div>
                        <div class=\"row\">
                            <div class=\"col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                        <div class=\"dashboard-widget widget-box dashboard-xs-widget\">
                                            <div class=\"widget-content text-xs-right\">
                                                <div class=\"product-icon bg-danger flat-buttons\">
                                                    <i class=\"product-hover icon_printer\"></i>
                                                    <i class=\"display-icon icon_printer\"></i>
                                                </div>
                                                <span>Products</span>
                                                <h4 class=\"text-danger\">4,500</h4>
                                                <span class=\"search_ad\">Sale</span> <span>Today sale</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                        <div class=\"dashboard-widget widget-box\">
                                            <div class=\"widget-content text-xs-right\">
                                                <div class=\"product-icon bg-success flat-buttons\">
                                                    <i class=\"product-hover icon_document\"></i>
                                                    <i class=\"display-icon icon_document\"></i>
                                                </div>
                                                <span>Projects</span>
                                                <h4 class=\"text-success\">1,500</h4>
                                                <span class=\"search_ad bg-danger\">Sale</span><span>Total sale</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"divider-lg-spacing\"></div>
                                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                        <div class=\"dashboard-widget widget-box dashboard-xs-widget\">
                                            <div class=\"widget-content text-xs-right\">
                                                <div class=\"product-icon bg-primary flat-buttons\">
                                                    <i class=\"product-hover icon_contacts\"></i>
                                                    <i class=\"display-icon icon_contacts\"></i>
                                                </div>
                                                <span>Visitor</span>
                                                <h4 class=\"text-primary\">4,700</h4>
                                                <span class=\"search_ad bg-success\">View</span>
                                                <span>Today visitors</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                        <div class=\"dashboard-widget widget-box\">
                                            <div class=\"widget-content text-xs-right\">
                                                <div class=\"product-icon bg-info flat-buttons\">
                                                    <i class=\"product-hover icon_mail\"></i>
                                                    <i class=\"display-icon icon_mail\"></i>
                                                </div>
                                                <span>Message</span>
                                                <h4 class=\"text-info\">1,700</h4>
                                                <span class=\"search_ad\">View</span><span>Today message</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"dashboard_v4_box_block\">
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left primary_box\">
                                            <i class=\"fa fa-user fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/client/Entreprises\">Etudiants</a></h4>
                                            <p>Total etudiants : <span class=\"tag tag-pill tag-warning\">{{ result }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left warning_box\">
                                            <i class=\"fa fa-envelope fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4> <a href=\"/publik/web/app_dev.php/admin/contact/\">Contacts</a></h4>
                                            <p>Total des contacts réçus : <span class=\"tag tag-pill tag-warning\">{{ result2 }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left success_box\">
                                            <i class=\"fa fa-suitcase fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4> <a href=\"/publik/web/app_dev.php/admin/project/\">Enseignants</a></h4>
                                            <p>Total enseignants : <span class=\"tag tag-pill tag-warning\">{{ result3 }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                            <i class=\"fa fa-archive fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/concours/\">Documents</a></h4>
                                            <p>Total Documents : <span class=\"tag tag-pill tag-success\">{{ result4 }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                            <i class=\"fa fa-university fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/concours/\">Classes</a></h4>
                                            <p>Total classes : <span class=\"tag tag-pill tag-success\">{{ result5 }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                            <i class=\"fa fa-university fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/concours/\">Matières</a></h4>
                                            <p>Total matières : <span class=\"tag tag-pill tag-success\">{{ result6 }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <div class=\"content\">
                                        <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                            <i class=\"fa fa-users fa-5x\"></i>
                                        </div>
                                        <div class=\"dashboard_v4_box_title float-xs-right\">
                                            <h4><a href=\"/publik/web/app_dev.php/admin/concours/\">Employées</a></h4>
                                            <p>Total employées : <span class=\"tag tag-pill tag-success\">{{ result7 }}</span></p>
                                            <p>Total concours non qualifiées : <span class=\"tag tag-pill tag-warning\">0</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/raphael/raphael.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/morris.js/morris.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/moment/min/moment.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/owl.carousel/dist/owl.carousel.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-mousewheel/jquery.mousewheel.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flatpickr/dist/flatpickr.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v2.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-icon-menu/js/layout.min.js') }}\"></script>
    <script>
        \$('#dashboard').addClass('active');
    </script>
{% endblock %}", "ERPBundle:Admin:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/index.html.twig");
    }
}
