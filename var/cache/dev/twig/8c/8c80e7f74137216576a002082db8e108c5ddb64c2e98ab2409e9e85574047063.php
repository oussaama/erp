<?php

/* ERPBundle:Admin/universite:index.html.twig */
class __TwigTemplate_a5d8c01b4884cc42aeadbc80a96ee3f3354684df51c334a621bbf1e0d54f3576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/universite:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_50fb354083589b1e6f3c2055cfb3e084db96382c325e0d54667cbb0d99e4b79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fb354083589b1e6f3c2055cfb3e084db96382c325e0d54667cbb0d99e4b79a->enter($__internal_50fb354083589b1e6f3c2055cfb3e084db96382c325e0d54667cbb0d99e4b79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/universite:index.html.twig"));

        $__internal_7cf227203f1313228400e3b1f2850e7f1beef6cc0166f94090ffff5e8db0badd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf227203f1313228400e3b1f2850e7f1beef6cc0166f94090ffff5e8db0badd->enter($__internal_7cf227203f1313228400e3b1f2850e7f1beef6cc0166f94090ffff5e8db0badd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/universite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50fb354083589b1e6f3c2055cfb3e084db96382c325e0d54667cbb0d99e4b79a->leave($__internal_50fb354083589b1e6f3c2055cfb3e084db96382c325e0d54667cbb0d99e4b79a_prof);

        
        $__internal_7cf227203f1313228400e3b1f2850e7f1beef6cc0166f94090ffff5e8db0badd->leave($__internal_7cf227203f1313228400e3b1f2850e7f1beef6cc0166f94090ffff5e8db0badd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf7da6953fd75901869ba92da0f53c2dc16ca654bc7428efca3e4b86aab653f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7da6953fd75901869ba92da0f53c2dc16ca654bc7428efca3e4b86aab653f5->enter($__internal_bf7da6953fd75901869ba92da0f53c2dc16ca654bc7428efca3e4b86aab653f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cb8056eb41baa18f2eaad530637f1cca88625267fa54d04c399a5ce5df05b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb8056eb41baa18f2eaad530637f1cca88625267fa54d04c399a5ce5df05b7e->enter($__internal_2cb8056eb41baa18f2eaad530637f1cca88625267fa54d04c399a5ce5df05b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Index";
        
        $__internal_2cb8056eb41baa18f2eaad530637f1cca88625267fa54d04c399a5ce5df05b7e->leave($__internal_2cb8056eb41baa18f2eaad530637f1cca88625267fa54d04c399a5ce5df05b7e_prof);

        
        $__internal_bf7da6953fd75901869ba92da0f53c2dc16ca654bc7428efca3e4b86aab653f5->leave($__internal_bf7da6953fd75901869ba92da0f53c2dc16ca654bc7428efca3e4b86aab653f5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ed87d0e4d716f09da4b4d57c755d333fb45075d9323e9dbb17207e798ce86ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed87d0e4d716f09da4b4d57c755d333fb45075d9323e9dbb17207e798ce86ff->enter($__internal_8ed87d0e4d716f09da4b4d57c755d333fb45075d9323e9dbb17207e798ce86ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a7765ef41bd3fe25662dd06c5d5ea0141ebd211fc3c461258ef16bf4b666226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7765ef41bd3fe25662dd06c5d5ea0141ebd211fc3c461258ef16bf4b666226->enter($__internal_6a7765ef41bd3fe25662dd06c5d5ea0141ebd211fc3c461258ef16bf4b666226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
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
                    petok: \"e53f95b1ea72b53fbf11a3f72ea14fd7bb6b9124-1497803184-1800\",
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/weather-icons/css/weather-icons.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/weather-icons/css/weather-icons-wind.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/rickshaw/rickshaw.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6a7765ef41bd3fe25662dd06c5d5ea0141ebd211fc3c461258ef16bf4b666226->leave($__internal_6a7765ef41bd3fe25662dd06c5d5ea0141ebd211fc3c461258ef16bf4b666226_prof);

        
        $__internal_8ed87d0e4d716f09da4b4d57c755d333fb45075d9323e9dbb17207e798ce86ff->leave($__internal_8ed87d0e4d716f09da4b4d57c755d333fb45075d9323e9dbb17207e798ce86ff_prof);

    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        $__internal_f76ef2f4530c6cde43004b7a03148d674348668ecbd47dfb9ce8186c2b7dcbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76ef2f4530c6cde43004b7a03148d674348668ecbd47dfb9ce8186c2b7dcbc4->enter($__internal_f76ef2f4530c6cde43004b7a03148d674348668ecbd47dfb9ce8186c2b7dcbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cf20d93f6f930036376a2d986d0a3ec569d1fd94ce3151749f695d2a086ff34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf20d93f6f930036376a2d986d0a3ec569d1fd94ce3151749f695d2a086ff34->enter($__internal_0cf20d93f6f930036376a2d986d0a3ec569d1fd94ce3151749f695d2a086ff34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 91
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Dashboard</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Components</a></li>
                <li class=\"breadcrumb-item active\">Dashboard</li>
            </ol>

        </div>


        <div class=\"contain-inner dashboard_v4-page\">
            <div class=\"row\">
                <div class=\"dashboard_v4_box_block\">
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"dashboard_v4_box_icon float-xs-left primary_box\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"dashboard_v4_box_title float-xs-right\">
                                <h4>24,300</h4>
                                <p>Total user</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"dashboard_v4_box_icon float-xs-left warning_box\">
                                <i class=\"fa fa-envelope\"></i>
                            </div>
                            <div class=\"dashboard_v4_box_title float-xs-right\">
                                <h4>24,300</h4>
                                <p>Today's message</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"dashboard_v4_box_icon float-xs-left success_box\">
                                <i class=\"fa fa-file-text\"></i>
                            </div>
                            <div class=\"dashboard_v4_box_title float-xs-right\">
                                <h4>24,300</h4>
                                <p>Total projects</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                <i class=\"fa fa-book\"></i>
                            </div>
                            <div class=\"dashboard_v4_box_title float-xs-right\">
                                <h4>24,300</h4>
                                <p>Today's visiter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard_v4_block\">
                    <div class=\"content dashboard_v4_project_list\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Your yearly revenues</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box dashboard_v4_project_block\">
                            <table class=\"table  table-striped\">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"stackline-bar\">3,5,7,9,4,6,5,8</div>
                                    </td>
                                    <td>
                                        <h6>Total income</h6>
                                        <p>Total amount of income earned annually.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"sparkline-line\">1,5,6,9,4,8,5,4</div>
                                    </td>
                                    <td>
                                        <h6>Yearly sell</h6>
                                        <p>Businesses do their accounting on a sell.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"sparkline-inlinerange\">5,3,6,4,5,3,5,7</div>
                                    </td>
                                    <td>
                                        <h6>Profit</h6>
                                        <p>Revenue minus the cost of goods sold.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"sparkline-linecustom\">5,7,9,8,6,5,8,4</div>
                                    </td>
                                    <td>
                                        <h6>Loss</h6>
                                        <p>An amount of money lost by your business</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard_v4_block2\">
                    <div class=\"content dashboard_v4_project_list\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Promotion analysis</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"dashboard-box\">
                            <div id=\"dashboard_v4_revenue_chart\" class=\"dashboard_v4_revenue_chart\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content dashboard_v4_project_list\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Projects status</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box text-xs-center\">
                            <div class=\"dashboard-box text-xs-center\">
                                <div class=\"traffic-chart\">
                                    <div id=\"yaxis\"></div>
                                    <div id=\"dashboard-chart-line\"></div>
                                    <div id=\"xaxis\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content dashboard_v4_project_list\">
                        <div class=\"dashboard-content\">
                            <div class=\"dashboard-header\">
                                <h4 class=\"page-content-title float-xs-left\">Our latest projects</h4>
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
                            <div class=\"dashboard-box\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"basic_table table-responsive\">
                                            <table class=\"table table-striped\">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Project name</th>
                                                    <th>Start date</th>
                                                    <th>Status</th>
                                                    <th>Assign</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>0</td>
                                                    <td>Watermark template</td>
                                                    <td>13-2-2017</td>
                                                    <td><span class=\"tag square-tag light-red-color\">Work in Progress</span>
                                                    </td>
                                                    <td>Harvinder Singh</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Bookshow app</td>
                                                    <td>16-3-2017</td>
                                                    <td><span
                                                                class=\"tag square-tag purple-color\">Coming soon</span>
                                                    </td>
                                                    <td>Terry Khoo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>PhotoSnap template</td>
                                                    <td>1-3-2017</td>
                                                    <td><span class=\"tag square-tag dodger-blue-color\">Work in Progress</span>
                                                    </td>
                                                    <td>Nicky Almera</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Metabox wordpress template</td>
                                                    <td>25-1-2017</td>
                                                    <td><span
                                                                class=\"tag square-tag soft-orange-color\">Released</span>
                                                    </td>
                                                    <td>Edmund Wong</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>FlatUi admin panel</td>
                                                    <td>1-2-2017</td>
                                                    <td><span class=\"tag square-tag golden-color\">Pending</span>
                                                    </td>
                                                    <td>Larry the Bird</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>DecentData app</td>
                                                    <td>13-3-2017</td>
                                                    <td><span class=\"tag square-tag spice-color\">Pending</span>
                                                    </td>
                                                    <td>Jacob Thornton</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>User admin panel</td>
                                                    <td>25-3-2017</td>
                                                    <td><span class=\"tag square-tag bright-pink-color\">Coming soon</span>
                                                    </td>
                                                    <td>Jacob Thornton</td>
                                                </tr>
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
            <div class=\"row\">
                <div class=\"dashboard_v4_box_block\">
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"text-xs-center\">
                                <h4 class=\"text-primary\">Database load</h4>
                            </div>
                            <div class=\"text-xs-center\">
                                <canvas id=\"dashboard_v4_monthly_expense\"></canvas>
                            </div>
                            <div class=\"dashboard_v4_chart_contain\">
                                <h5 id=\"dashboard_v4_expense_text\"
                                    class=\"float-xs-left gauge-value text-primary\"></h5>
                                <h5 class=\"float-xs-right text-primary\">Safe</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"text-xs-center\">
                                <h4 class=\"text-warning\">Daily visitor</h4>
                            </div>
                            <div id=\"dashboard_v4_daily_visit\" class=\"dashboard_v4_chart\"></div>
                            <div class=\"dashboard_v4_chart_contain\">
                                <h5 class=\"float-xs-left text-warning\">2,750</h5>
                                <h5 class=\"float-xs-right text-warning\">25%</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"text-xs-center\">
                                <h4 class=\"text-success\">Top advertise</h4>
                            </div>
                            <div class=\"divider15\"></div>
                            <div class=\"dashboard_v4_advertise\"></div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content dashboard_v4_sale\">
                            <div class=\"text-xs-center\">
                                <h4 class=\"text-danger\">Daily sales</h4>
                                <div class=\"divider15\"></div>
                            </div>
                            <div class=\"vertical-progress-bar vertical-bottom\">
                                <div class=\"progress-bar\">
                                    <div class=\"progress-track\">
                                        <div class=\"progress-fill veritcal-progress-info\">
                                            <span>65%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress-bar\">
                                    <div class=\"progress-track\">
                                        <div class=\"progress-fill veritcal-progress-warning\">
                                            <span>93%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress-bar\">
                                    <div class=\"progress-track\">
                                        <div class=\"progress-fill veritcal-progress-danger\">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class=\"bar-legend\">
                                    <li><span class=\"bar-legend-pointer veritcal-progress-info\"></span> New York
                                    </li>
                                    <li><span class=\"bar-legend-pointer veritcal-progress-warning\"></span> US
                                    </li>
                                    <li><span class=\"bar-legend-pointer veritcal-progress-danger\"></span> India
                                    </li>
                                </ul>
                            </div>
                            <div class=\"dashboard_v4_chart_contain\">
                                <h5 class=\"float-xs-left text-danger\">1850</h5>
                                <h5 class=\"float-xs-right text-danger\">Product</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"dashboard_v4_advertise_block\">
                    <div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"dashboard_4_advertise_box dodger-blue-color\">
                                            <h5>Top message</h5>
                                            <p>Elementum eu lorem senectus volutpat facilisi quam
                                                dignissim potenti enim.</p>
                                            <div class=\"float-xs-right\">
                                                <i class=\"fa fa-desktop\"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"divider15\"></div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 tile-active\">
                                        <div class=\"tile dashboard_4_advertise_box light-red-color text-xs-center dashboard_4_advertise_box2\">
                                            <div class=\"advertise_box_icon\">
                                                <i class=\"fa fa-send\"></i>
                                            </div>
                                            <h5>Product</h5>
                                        </div>
                                        <div class=\"tile dashboard_4_advertise_box golden-color\">
                                            <h5>Product</h5>
                                            <p>Elementum eu lorem senectus volutpat.</p>
                                        </div>
                                    </div>
                                    <div class=\"dashboard_v4_xs_space\"></div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <div class=\"dashboard_4_advertise_box bright-pink-color text-xs-center dashboard_4_advertise_box2\">
                                            <div class=\"advertise_box_icon\">
                                                <i class=\"fa fa-cart-plus\"></i>
                                            </div>
                                            <h5>Order</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard_v4_sm_space\"></div>
                            <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 tile-active\">
                                        <div class=\"tile dashboard_4_advertise_box spice-color text-xs-center dashboard_4_advertise_box2\">
                                            <div class=\"advertise_box_icon\">
                                                <i class=\"fa fa-envelope\"></i>
                                            </div>
                                            <h5>Email</h5>
                                        </div>
                                        <div class=\"tile dashboard_4_advertise_box soft-orange-color\">
                                            <h5>Email</h5>
                                            <p>Elementum eu lorem senectus volutpat.</p>
                                        </div>
                                    </div>
                                    <div class=\"divider15\"></div>
                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"dashboard_4_advertise_box3 purple-color text-xs-center\">
                                            <div class=\"float-xs-left\">
                                                <i class=\"fa fa-send\"></i>
                                            </div>
                                            <div class=\"float-xs-right text-xs-right\">
                                                <h4>16,964</h4>
                                                <h5>Page visit</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"dashboard_v4_sm_space\"></div>
                    <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"dashboard_4_advertise_box3 google_bg text-xs-center\">
                                    <div class=\"float-xs-left\">
                                        <i class=\"fa fa-google-plus\"></i>
                                    </div>
                                    <div class=\"float-xs-right text-xs-right\">
                                        <h4>2.6K</h4>
                                        <h5>Connect</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard_v4_xs_space\"></div>
                            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"dashboard_4_advertise_box3 twitter_bg text-xs-center\">
                                    <div class=\"float-xs-left\">
                                        <i class=\"fa fa-twitter\"></i>
                                    </div>
                                    <div class=\"float-xs-right text-xs-right\">
                                        <h4>10,894</h4>
                                        <h5>Followers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"divider15\"></div>
                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 tile-active\">
                                <div class=\"tile dashboard_4_advertise_image dodger-blue-color\">
                                    <h5 class=\"float-xs-right\">Latest product</h5>
                                </div>
                                <div class=\"tile dashboard_4_advertise_box spice-color\">
                                    <h5>Latest product</h5>
                                    <p>Elementum eu lorem senectus volutpat facilisi quam dignissim </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"dashboard_v4_weather\">
                        <div class=\"weather-block text-xs-center\">
                            <div class=\"weather-block_display\">
                                <canvas id=\"partly-cloudy-day\"></canvas>
                                <h2>35<i class=\"wi wi-degrees\"></i></h2>
                            </div>
                            <div class=\"weather-display-title text-xs-center\">
                                <h5>Partly cloudy</h5>
                                <h5>15km/37%</h5>
                            </div>
                        </div>
                        <div class=\"weather-display-block\">
                            <div class=\"row\">
                                <div class=\"weather-display-day text-xs-center\">
                                    <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                        <h6>SUN</h6>
                                        <canvas id=\"sleet\" width=\"30\" height=\"30\"></canvas>
                                        <h6>32<i class=\"wi wi-degrees\"></i></h6>
                                    </div>
                                    <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                        <h6>MON</h6>
                                        <canvas id=\"wind\" width=\"30\" height=\"30\"></canvas>
                                        <h6>45<i class=\"wi wi-degrees\"></i></h6>
                                    </div>
                                    <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                        <h6>TUS</h6>
                                        <canvas id=\"partly-cloudy-night\" width=\"30\" height=\"30\"></canvas>
                                        <h6>39<i class=\"wi wi-degrees\"></i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"dashboard_v4_sm_space\"></div>
                <div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"dashboard-header dashboard_v4_map_block content\">
                        <h4 class=\"page-content-title float-xs-left\">Visitor map</h4>
                        <div class=\"dashboard-action\">
                            <ul class=\"right-action float-xs-right\">
                                <li data-widget=\"collapse\">
                                    <a aria-hidden=\"true\" href=\"javascript:void(0)\">
                                        <span aria-hidden=\"true\" class=\"icon_minus-06\"></span>
                                    </a>
                                </li>
                                <li data-widget=\"close\">
                                    <a href=\"javascript:void(0)\">
                                        <span aria-hidden=\"true\" class=\"icon_close\"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"mapcontainer crm-mapcontainer dashboard_v4_map\">
                                <div class=\"map\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
";
        
        $__internal_0cf20d93f6f930036376a2d986d0a3ec569d1fd94ce3151749f695d2a086ff34->leave($__internal_0cf20d93f6f930036376a2d986d0a3ec569d1fd94ce3151749f695d2a086ff34_prof);

        
        $__internal_f76ef2f4530c6cde43004b7a03148d674348668ecbd47dfb9ce8186c2b7dcbc4->leave($__internal_f76ef2f4530c6cde43004b7a03148d674348668ecbd47dfb9ce8186c2b7dcbc4_prof);

    }

    // line 628
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_afafd1e6559e195bd53c90f6d03966b8b013f69880f24fb6d4655319d351846a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afafd1e6559e195bd53c90f6d03966b8b013f69880f24fb6d4655319d351846a->enter($__internal_afafd1e6559e195bd53c90f6d03966b8b013f69880f24fb6d4655319d351846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_394c4c264ba7f06f29938c4f0b8abbe5b16ad51bb7da22524c486e946f017c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394c4c264ba7f06f29938c4f0b8abbe5b16ad51bb7da22524c486e946f017c4d->enter($__internal_394c4c264ba7f06f29938c4f0b8abbe5b16ad51bb7da22524c486e946f017c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 629
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/progressbar.js/dist/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mapael/js/jquery.mapael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mapael/js/maps/france_departments.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mapael/js/maps/world_countries.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mapael/js/maps/usa_states.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/d3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/rickshaw/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_394c4c264ba7f06f29938c4f0b8abbe5b16ad51bb7da22524c486e946f017c4d->leave($__internal_394c4c264ba7f06f29938c4f0b8abbe5b16ad51bb7da22524c486e946f017c4d_prof);

        
        $__internal_afafd1e6559e195bd53c90f6d03966b8b013f69880f24fb6d4655319d351846a->leave($__internal_afafd1e6559e195bd53c90f6d03966b8b013f69880f24fb6d4655319d351846a_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/universite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  882 => 658,  878 => 657,  874 => 656,  870 => 655,  866 => 654,  862 => 653,  858 => 652,  854 => 651,  850 => 650,  846 => 649,  842 => 648,  838 => 647,  834 => 646,  830 => 645,  826 => 644,  822 => 643,  818 => 642,  814 => 641,  810 => 640,  806 => 639,  802 => 638,  798 => 637,  794 => 636,  790 => 635,  786 => 634,  782 => 633,  778 => 632,  774 => 631,  770 => 630,  765 => 629,  756 => 628,  210 => 91,  201 => 90,  189 => 88,  185 => 87,  181 => 86,  177 => 85,  173 => 84,  169 => 83,  165 => 82,  161 => 81,  157 => 80,  153 => 79,  149 => 78,  145 => 77,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
                    petok: \"e53f95b1ea72b53fbf11a3f72ea14fd7bb6b9124-1497803184-1800\",
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap/dist/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/weather-icons/css/weather-icons.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/weather-icons/css/weather-icons-wind.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/rickshaw/rickshaw.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
{% endblock %}
{% block body %}
    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Dashboard</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Components</a></li>
                <li class=\"breadcrumb-item active\">Dashboard</li>
            </ol>

        </div>


        <div class=\"contain-inner dashboard_v4-page\">
            <div class=\"row\">
                <div class=\"dashboard_v4_box_block\">
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"dashboard_v4_box_icon float-xs-left primary_box\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            <div class=\"dashboard_v4_box_title float-xs-right\">
                                <h4>24,300</h4>
                                <p>Total user</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"dashboard_v4_box_icon float-xs-left warning_box\">
                                <i class=\"fa fa-envelope\"></i>
                            </div>
                            <div class=\"dashboard_v4_box_title float-xs-right\">
                                <h4>24,300</h4>
                                <p>Today's message</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"dashboard_v4_box_icon float-xs-left success_box\">
                                <i class=\"fa fa-file-text\"></i>
                            </div>
                            <div class=\"dashboard_v4_box_title float-xs-right\">
                                <h4>24,300</h4>
                                <p>Total projects</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"dashboard_v4_box_icon float-xs-left danger_box\">
                                <i class=\"fa fa-book\"></i>
                            </div>
                            <div class=\"dashboard_v4_box_title float-xs-right\">
                                <h4>24,300</h4>
                                <p>Today's visiter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard_v4_block\">
                    <div class=\"content dashboard_v4_project_list\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Your yearly revenues</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box dashboard_v4_project_block\">
                            <table class=\"table  table-striped\">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"stackline-bar\">3,5,7,9,4,6,5,8</div>
                                    </td>
                                    <td>
                                        <h6>Total income</h6>
                                        <p>Total amount of income earned annually.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"sparkline-line\">1,5,6,9,4,8,5,4</div>
                                    </td>
                                    <td>
                                        <h6>Yearly sell</h6>
                                        <p>Businesses do their accounting on a sell.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"sparkline-inlinerange\">5,3,6,4,5,3,5,7</div>
                                    </td>
                                    <td>
                                        <h6>Profit</h6>
                                        <p>Revenue minus the cost of goods sold.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"sparkline-linecustom\">5,7,9,8,6,5,8,4</div>
                                    </td>
                                    <td>
                                        <h6>Loss</h6>
                                        <p>An amount of money lost by your business</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard_v4_block2\">
                    <div class=\"content dashboard_v4_project_list\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Promotion analysis</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"dashboard-box\">
                            <div id=\"dashboard_v4_revenue_chart\" class=\"dashboard_v4_revenue_chart\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content dashboard_v4_project_list\">
                        <div class=\"dashboard-header\">
                            <h4 class=\"page-content-title float-xs-left\">Projects status</h4>
                            <div class=\"dashboard-action\">
                                <ul class=\"right-action float-xs-right\">
                                    <li data-widget=\"collapse\"><a href=\"javascript:void(0)\"
                                                                  aria-hidden=\"true\"><span class=\"icon_minus-06\"
                                                                                           aria-hidden=\"true\"></span></a>
                                    </li>
                                    <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span
                                                    class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"dashboard-box text-xs-center\">
                            <div class=\"dashboard-box text-xs-center\">
                                <div class=\"traffic-chart\">
                                    <div id=\"yaxis\"></div>
                                    <div id=\"dashboard-chart-line\"></div>
                                    <div id=\"xaxis\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"content dashboard_v4_project_list\">
                        <div class=\"dashboard-content\">
                            <div class=\"dashboard-header\">
                                <h4 class=\"page-content-title float-xs-left\">Our latest projects</h4>
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
                            <div class=\"dashboard-box\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"basic_table table-responsive\">
                                            <table class=\"table table-striped\">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Project name</th>
                                                    <th>Start date</th>
                                                    <th>Status</th>
                                                    <th>Assign</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>0</td>
                                                    <td>Watermark template</td>
                                                    <td>13-2-2017</td>
                                                    <td><span class=\"tag square-tag light-red-color\">Work in Progress</span>
                                                    </td>
                                                    <td>Harvinder Singh</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Bookshow app</td>
                                                    <td>16-3-2017</td>
                                                    <td><span
                                                                class=\"tag square-tag purple-color\">Coming soon</span>
                                                    </td>
                                                    <td>Terry Khoo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>PhotoSnap template</td>
                                                    <td>1-3-2017</td>
                                                    <td><span class=\"tag square-tag dodger-blue-color\">Work in Progress</span>
                                                    </td>
                                                    <td>Nicky Almera</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Metabox wordpress template</td>
                                                    <td>25-1-2017</td>
                                                    <td><span
                                                                class=\"tag square-tag soft-orange-color\">Released</span>
                                                    </td>
                                                    <td>Edmund Wong</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>FlatUi admin panel</td>
                                                    <td>1-2-2017</td>
                                                    <td><span class=\"tag square-tag golden-color\">Pending</span>
                                                    </td>
                                                    <td>Larry the Bird</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>DecentData app</td>
                                                    <td>13-3-2017</td>
                                                    <td><span class=\"tag square-tag spice-color\">Pending</span>
                                                    </td>
                                                    <td>Jacob Thornton</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>User admin panel</td>
                                                    <td>25-3-2017</td>
                                                    <td><span class=\"tag square-tag bright-pink-color\">Coming soon</span>
                                                    </td>
                                                    <td>Jacob Thornton</td>
                                                </tr>
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
            <div class=\"row\">
                <div class=\"dashboard_v4_box_block\">
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"text-xs-center\">
                                <h4 class=\"text-primary\">Database load</h4>
                            </div>
                            <div class=\"text-xs-center\">
                                <canvas id=\"dashboard_v4_monthly_expense\"></canvas>
                            </div>
                            <div class=\"dashboard_v4_chart_contain\">
                                <h5 id=\"dashboard_v4_expense_text\"
                                    class=\"float-xs-left gauge-value text-primary\"></h5>
                                <h5 class=\"float-xs-right text-primary\">Safe</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"text-xs-center\">
                                <h4 class=\"text-warning\">Daily visitor</h4>
                            </div>
                            <div id=\"dashboard_v4_daily_visit\" class=\"dashboard_v4_chart\"></div>
                            <div class=\"dashboard_v4_chart_contain\">
                                <h5 class=\"float-xs-left text-warning\">2,750</h5>
                                <h5 class=\"float-xs-right text-warning\">25%</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content\">
                            <div class=\"text-xs-center\">
                                <h4 class=\"text-success\">Top advertise</h4>
                            </div>
                            <div class=\"divider15\"></div>
                            <div class=\"dashboard_v4_advertise\"></div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"content dashboard_v4_sale\">
                            <div class=\"text-xs-center\">
                                <h4 class=\"text-danger\">Daily sales</h4>
                                <div class=\"divider15\"></div>
                            </div>
                            <div class=\"vertical-progress-bar vertical-bottom\">
                                <div class=\"progress-bar\">
                                    <div class=\"progress-track\">
                                        <div class=\"progress-fill veritcal-progress-info\">
                                            <span>65%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress-bar\">
                                    <div class=\"progress-track\">
                                        <div class=\"progress-fill veritcal-progress-warning\">
                                            <span>93%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress-bar\">
                                    <div class=\"progress-track\">
                                        <div class=\"progress-fill veritcal-progress-danger\">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class=\"bar-legend\">
                                    <li><span class=\"bar-legend-pointer veritcal-progress-info\"></span> New York
                                    </li>
                                    <li><span class=\"bar-legend-pointer veritcal-progress-warning\"></span> US
                                    </li>
                                    <li><span class=\"bar-legend-pointer veritcal-progress-danger\"></span> India
                                    </li>
                                </ul>
                            </div>
                            <div class=\"dashboard_v4_chart_contain\">
                                <h5 class=\"float-xs-left text-danger\">1850</h5>
                                <h5 class=\"float-xs-right text-danger\">Product</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"dashboard_v4_advertise_block\">
                    <div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"dashboard_4_advertise_box dodger-blue-color\">
                                            <h5>Top message</h5>
                                            <p>Elementum eu lorem senectus volutpat facilisi quam
                                                dignissim potenti enim.</p>
                                            <div class=\"float-xs-right\">
                                                <i class=\"fa fa-desktop\"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"divider15\"></div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 tile-active\">
                                        <div class=\"tile dashboard_4_advertise_box light-red-color text-xs-center dashboard_4_advertise_box2\">
                                            <div class=\"advertise_box_icon\">
                                                <i class=\"fa fa-send\"></i>
                                            </div>
                                            <h5>Product</h5>
                                        </div>
                                        <div class=\"tile dashboard_4_advertise_box golden-color\">
                                            <h5>Product</h5>
                                            <p>Elementum eu lorem senectus volutpat.</p>
                                        </div>
                                    </div>
                                    <div class=\"dashboard_v4_xs_space\"></div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <div class=\"dashboard_4_advertise_box bright-pink-color text-xs-center dashboard_4_advertise_box2\">
                                            <div class=\"advertise_box_icon\">
                                                <i class=\"fa fa-cart-plus\"></i>
                                            </div>
                                            <h5>Order</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard_v4_sm_space\"></div>
                            <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 tile-active\">
                                        <div class=\"tile dashboard_4_advertise_box spice-color text-xs-center dashboard_4_advertise_box2\">
                                            <div class=\"advertise_box_icon\">
                                                <i class=\"fa fa-envelope\"></i>
                                            </div>
                                            <h5>Email</h5>
                                        </div>
                                        <div class=\"tile dashboard_4_advertise_box soft-orange-color\">
                                            <h5>Email</h5>
                                            <p>Elementum eu lorem senectus volutpat.</p>
                                        </div>
                                    </div>
                                    <div class=\"divider15\"></div>
                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"dashboard_4_advertise_box3 purple-color text-xs-center\">
                                            <div class=\"float-xs-left\">
                                                <i class=\"fa fa-send\"></i>
                                            </div>
                                            <div class=\"float-xs-right text-xs-right\">
                                                <h4>16,964</h4>
                                                <h5>Page visit</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"dashboard_v4_sm_space\"></div>
                    <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"dashboard_4_advertise_box3 google_bg text-xs-center\">
                                    <div class=\"float-xs-left\">
                                        <i class=\"fa fa-google-plus\"></i>
                                    </div>
                                    <div class=\"float-xs-right text-xs-right\">
                                        <h4>2.6K</h4>
                                        <h5>Connect</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"dashboard_v4_xs_space\"></div>
                            <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <div class=\"dashboard_4_advertise_box3 twitter_bg text-xs-center\">
                                    <div class=\"float-xs-left\">
                                        <i class=\"fa fa-twitter\"></i>
                                    </div>
                                    <div class=\"float-xs-right text-xs-right\">
                                        <h4>10,894</h4>
                                        <h5>Followers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"divider15\"></div>
                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 tile-active\">
                                <div class=\"tile dashboard_4_advertise_image dodger-blue-color\">
                                    <h5 class=\"float-xs-right\">Latest product</h5>
                                </div>
                                <div class=\"tile dashboard_4_advertise_box spice-color\">
                                    <h5>Latest product</h5>
                                    <p>Elementum eu lorem senectus volutpat facilisi quam dignissim </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"dashboard_v4_weather\">
                        <div class=\"weather-block text-xs-center\">
                            <div class=\"weather-block_display\">
                                <canvas id=\"partly-cloudy-day\"></canvas>
                                <h2>35<i class=\"wi wi-degrees\"></i></h2>
                            </div>
                            <div class=\"weather-display-title text-xs-center\">
                                <h5>Partly cloudy</h5>
                                <h5>15km/37%</h5>
                            </div>
                        </div>
                        <div class=\"weather-display-block\">
                            <div class=\"row\">
                                <div class=\"weather-display-day text-xs-center\">
                                    <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                        <h6>SUN</h6>
                                        <canvas id=\"sleet\" width=\"30\" height=\"30\"></canvas>
                                        <h6>32<i class=\"wi wi-degrees\"></i></h6>
                                    </div>
                                    <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                        <h6>MON</h6>
                                        <canvas id=\"wind\" width=\"30\" height=\"30\"></canvas>
                                        <h6>45<i class=\"wi wi-degrees\"></i></h6>
                                    </div>
                                    <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                        <h6>TUS</h6>
                                        <canvas id=\"partly-cloudy-night\" width=\"30\" height=\"30\"></canvas>
                                        <h6>39<i class=\"wi wi-degrees\"></i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"dashboard_v4_sm_space\"></div>
                <div class=\"col-xl-7 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"dashboard-header dashboard_v4_map_block content\">
                        <h4 class=\"page-content-title float-xs-left\">Visitor map</h4>
                        <div class=\"dashboard-action\">
                            <ul class=\"right-action float-xs-right\">
                                <li data-widget=\"collapse\">
                                    <a aria-hidden=\"true\" href=\"javascript:void(0)\">
                                        <span aria-hidden=\"true\" class=\"icon_minus-06\"></span>
                                    </a>
                                </li>
                                <li data-widget=\"close\">
                                    <a href=\"javascript:void(0)\">
                                        <span aria-hidden=\"true\" class=\"icon_close\"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"dashboard-box\">
                            <div class=\"mapcontainer crm-mapcontainer dashboard_v4_map\">
                                <div class=\"map\"></div>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flot/jquery.flot.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/Flot/jquery.flot.resize.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flot/jquery.flot.pie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flot/jquery.flot.time.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flot/jquery.flot.categories.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/flot-spline/js/jquery.flot.spline.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/skycons/skycons.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/progressbar.js/dist/progressbar.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/gauge.js/dist/gauge.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/raphael/raphael.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-mapael/js/jquery.mapael.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-mapael/js/maps/france_departments.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-mapael/js/maps/world_countries.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-mapael/js/maps/usa_states.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/d3/d3.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/rickshaw/rickshaw.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>

{% endblock %}", "ERPBundle:Admin/universite:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/universite/index.html.twig");
    }
}
