<?php

/* ERPBundle:SuperAdmin:index.html.twig */
class __TwigTemplate_8cc7eb7348553e483133aa4b145e48c080eee6d8b1b031ba4edec63779ba0064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ERPBundle:SuperAdmin:index.html.twig", 1);
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
        $__internal_3a8f3e5e2198d04ebc3aa3b1453f2f5907514bcca21bc28338ba88ac3c227ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8f3e5e2198d04ebc3aa3b1453f2f5907514bcca21bc28338ba88ac3c227ab7->enter($__internal_3a8f3e5e2198d04ebc3aa3b1453f2f5907514bcca21bc28338ba88ac3c227ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin:index.html.twig"));

        $__internal_ea7aac66121cd83f7c8edc9ec5fb8594f20946e17f95f631290521995075c797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7aac66121cd83f7c8edc9ec5fb8594f20946e17f95f631290521995075c797->enter($__internal_ea7aac66121cd83f7c8edc9ec5fb8594f20946e17f95f631290521995075c797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8f3e5e2198d04ebc3aa3b1453f2f5907514bcca21bc28338ba88ac3c227ab7->leave($__internal_3a8f3e5e2198d04ebc3aa3b1453f2f5907514bcca21bc28338ba88ac3c227ab7_prof);

        
        $__internal_ea7aac66121cd83f7c8edc9ec5fb8594f20946e17f95f631290521995075c797->leave($__internal_ea7aac66121cd83f7c8edc9ec5fb8594f20946e17f95f631290521995075c797_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_819bd413787d87bff582bd4896adf719570b5a394b5e29453bb8e4a1616ae517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819bd413787d87bff582bd4896adf719570b5a394b5e29453bb8e4a1616ae517->enter($__internal_819bd413787d87bff582bd4896adf719570b5a394b5e29453bb8e4a1616ae517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f69dbce91ff57a68f7394c7fe0fc1455e9aa9e35d0272a001ab7a709d54a4c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69dbce91ff57a68f7394c7fe0fc1455e9aa9e35d0272a001ab7a709d54a4c3d->enter($__internal_f69dbce91ff57a68f7394c7fe0fc1455e9aa9e35d0272a001ab7a709d54a4c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SuperAdmin - Index";
        
        $__internal_f69dbce91ff57a68f7394c7fe0fc1455e9aa9e35d0272a001ab7a709d54a4c3d->leave($__internal_f69dbce91ff57a68f7394c7fe0fc1455e9aa9e35d0272a001ab7a709d54a4c3d_prof);

        
        $__internal_819bd413787d87bff582bd4896adf719570b5a394b5e29453bb8e4a1616ae517->leave($__internal_819bd413787d87bff582bd4896adf719570b5a394b5e29453bb8e4a1616ae517_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a0d450f6c49669a82c31cca3cac83bc6b5686b3fddfb3284b15c8f4fd99fa3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0d450f6c49669a82c31cca3cac83bc6b5686b3fddfb3284b15c8f4fd99fa3b->enter($__internal_2a0d450f6c49669a82c31cca3cac83bc6b5686b3fddfb3284b15c8f4fd99fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_96f1ff5adfb084544b9e41299337bb41864a8182a1f6663526ea352ecf368975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f1ff5adfb084544b9e41299337bb41864a8182a1f6663526ea352ecf368975->enter($__internal_96f1ff5adfb084544b9e41299337bb41864a8182a1f6663526ea352ecf368975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <script type=\"text/javascript\">
//<![CDATA[
var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-92643213-2']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();(function(b){(function(a){\"__CF\"in b&&\"DJS\"in b.__CF?b.__CF.DJS.push(a):\"addEventListener\"in b?b.addEventListener(\"load\",a,!1):b.attachEvent(\"onload\",a)})(function(){\"FB\"in b&&\"Event\"in FB&&\"subscribe\"in FB.Event&&(FB.Event.subscribe(\"edge.create\",function(a){_gaq.push([\"_trackSocial\",\"facebook\",\"like\",a])}),FB.Event.subscribe(\"edge.remove\",function(a){_gaq.push([\"_trackSocial\",\"facebook\",\"unlike\",a])}),FB.Event.subscribe(\"message.send\",function(a){_gaq.push([\"_trackSocial\",\"facebook\",\"send\",a])}));\"twttr\"in b&&\"events\"in twttr&&\"bind\"in twttr.events&&twttr.events.bind(\"tweet\",function(a){if(a){var b;if(a.target&&a.target.nodeName==\"IFRAME\")a:{if(a=a.target.src){a=a.split(\"#\")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf(\"url\")===0){b=unescape(c.split(\"=\")[1]);break a}}b=void 0}_gaq.push([\"_trackSocial\",\"twitter\",\"tweet\",b])}})})})(window);//]]>
</script>
    <script type=\"text/javascript\">
        //<![CDATA[
        try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:\"cf\",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:\"/cdn-cgi/nexp/dok3v=1613a3a185/\"},atok:\"0058b165fc78163e6d148677944b9ad6\",petok:\"8ddbcbc9feff803550a9f3ceca501f2cd0d28aa0-1496996202-1800\",zone:\"themesadmin.com\",rocket:\"0\",apps:{\"ga_key\":{\"ua\":\"UA-92643213-2\",\"ga_bs\":\"2\"}}}];!function(a,b){a=document.createElement(\"script\"),b=document.getElementsByTagName(\"script\")[0],a.async=!0,a.src=\"../../../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d85b614c0f6/cloudflare.min.js\",b.parentNode.insertBefore(a,b)}()}}catch(e){};
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" id=\"site-color\"  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/css/color/light/color-default.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/weather-icons/css/weather-icons.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/weather-icons/css/weather-icons-wind.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/rickshaw/rickshaw.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_96f1ff5adfb084544b9e41299337bb41864a8182a1f6663526ea352ecf368975->leave($__internal_96f1ff5adfb084544b9e41299337bb41864a8182a1f6663526ea352ecf368975_prof);

        
        $__internal_2a0d450f6c49669a82c31cca3cac83bc6b5686b3fddfb3284b15c8f4fd99fa3b->leave($__internal_2a0d450f6c49669a82c31cca3cac83bc6b5686b3fddfb3284b15c8f4fd99fa3b_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd3f5014e9d9ac1938ab07462c81d649f5ab03eb9e37cbc15759162e4a76828a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3f5014e9d9ac1938ab07462c81d649f5ab03eb9e37cbc15759162e4a76828a->enter($__internal_fd3f5014e9d9ac1938ab07462c81d649f5ab03eb9e37cbc15759162e4a76828a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4d44cc332625a6ba5309fd6bf0fcf3daee8e2012c6065720e42f0983aef95347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d44cc332625a6ba5309fd6bf0fcf3daee8e2012c6065720e42f0983aef95347->enter($__internal_4d44cc332625a6ba5309fd6bf0fcf3daee8e2012c6065720e42f0983aef95347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ERPBundle:SuperAdmin/SuperAdmin:header"));
        echo "
";
        
        $__internal_4d44cc332625a6ba5309fd6bf0fcf3daee8e2012c6065720e42f0983aef95347->leave($__internal_4d44cc332625a6ba5309fd6bf0fcf3daee8e2012c6065720e42f0983aef95347_prof);

        
        $__internal_fd3f5014e9d9ac1938ab07462c81d649f5ab03eb9e37cbc15759162e4a76828a->leave($__internal_fd3f5014e9d9ac1938ab07462c81d649f5ab03eb9e37cbc15759162e4a76828a_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_0851bc5c2c4c51bfc165cedb6c9b55ef1700c95108ac5379464c1edce5661440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0851bc5c2c4c51bfc165cedb6c9b55ef1700c95108ac5379464c1edce5661440->enter($__internal_0851bc5c2c4c51bfc165cedb6c9b55ef1700c95108ac5379464c1edce5661440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71d17826341c0b446d9fa6d455ca22a6c595ac8f18bd2a556b7d76959597f337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d17826341c0b446d9fa6d455ca22a6c595ac8f18bd2a556b7d76959597f337->enter($__internal_71d17826341c0b446d9fa6d455ca22a6c595ac8f18bd2a556b7d76959597f337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "    <div class=\"row\">
        <section id=\"content-wrapper\" class=\"form-elements\">
            ";
        // line 31
        $this->displayBlock('menu', $context, $blocks);
        // line 32
        echo "            <div class=\"site-content-title\">
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
                                        <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                        <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"dashboard-box dashboard_v4_project_block\">
                                <table class=\"table  table-striped\">
                                    <tbody>
                                    <tr>
                                        <td><div class=\"stackline-bar\">3,5,7,9,4,6,5,8</div></td>
                                        <td>
                                            <h6>Total income</h6>
                                            <p>Total amount of income earned annually.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class=\"sparkline-line\">1,5,6,9,4,8,5,4</div></td>
                                        <td>
                                            <h6>Yearly sell</h6>
                                            <p>Businesses do their accounting on a sell.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class=\"sparkline-inlinerange\">5,3,6,4,5,3,5,7</div></td>
                                        <td>
                                            <h6>Profit</h6>
                                            <p>Revenue minus the cost of goods sold.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class=\"sparkline-linecustom\">5,7,9,8,6,5,8,4</div></td>
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
                                        <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                        <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
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
                                        <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                        <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
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
                                            <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                            <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
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
                                                        <td><span class=\"tag square-tag light-red-color\">Work in Progress</span></td>
                                                        <td>Harvinder Singh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Bookshow app</td>
                                                        <td>16-3-2017</td>
                                                        <td><span class=\"tag square-tag purple-color\">Coming soon</span></td>
                                                        <td>Terry Khoo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>PhotoSnap template</td>
                                                        <td>1-3-2017</td>
                                                        <td><span class=\"tag square-tag dodger-blue-color\">Work in Progress</span></td>
                                                        <td>Nicky Almera</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Metabox wordpress template</td>
                                                        <td>25-1-2017</td>
                                                        <td><span class=\"tag square-tag soft-orange-color\">Released</span></td>
                                                        <td>Edmund Wong</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>FlatUi admin panel</td>
                                                        <td>1-2-2017</td>
                                                        <td><span class=\"tag square-tag golden-color\">Pending</span></td>
                                                        <td>Larry the Bird</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>DecentData app</td>
                                                        <td>13-3-2017</td>
                                                        <td><span class=\"tag square-tag spice-color\">Pending</span></td>
                                                        <td>Jacob Thornton</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>User admin panel</td>
                                                        <td>25-3-2017</td>
                                                        <td><span class=\"tag square-tag bright-pink-color\">Coming soon</span></td>
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
                                    <h5 id=\"dashboard_v4_expense_text\" class=\"float-xs-left gauge-value text-primary\"></h5>
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
                                        <li><span class=\"bar-legend-pointer veritcal-progress-info\"></span> New York</li>
                                        <li><span class=\"bar-legend-pointer veritcal-progress-warning\"></span> US</li>
                                        <li><span class=\"bar-legend-pointer veritcal-progress-danger\"></span> India</li>
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

    </div>
";
        
        $__internal_71d17826341c0b446d9fa6d455ca22a6c595ac8f18bd2a556b7d76959597f337->leave($__internal_71d17826341c0b446d9fa6d455ca22a6c595ac8f18bd2a556b7d76959597f337_prof);

        
        $__internal_0851bc5c2c4c51bfc165cedb6c9b55ef1700c95108ac5379464c1edce5661440->leave($__internal_0851bc5c2c4c51bfc165cedb6c9b55ef1700c95108ac5379464c1edce5661440_prof);

    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8e8e59317144938f3d6e63dfdbfde25fd4031d28f1261409474c9091036277b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e8e59317144938f3d6e63dfdbfde25fd4031d28f1261409474c9091036277b->enter($__internal_f8e8e59317144938f3d6e63dfdbfde25fd4031d28f1261409474c9091036277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_306ab01d7136e7a92ff555eff184a7e7a17907c50b8e28d82f9c405110ac129b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306ab01d7136e7a92ff555eff184a7e7a17907c50b8e28d82f9c405110ac129b->enter($__internal_306ab01d7136e7a92ff555eff184a7e7a17907c50b8e28d82f9c405110ac129b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $this->loadTemplate("::headers/menuSuperAdmin.html.twig", "ERPBundle:SuperAdmin:index.html.twig", 31)->display($context);
        
        $__internal_306ab01d7136e7a92ff555eff184a7e7a17907c50b8e28d82f9c405110ac129b->leave($__internal_306ab01d7136e7a92ff555eff184a7e7a17907c50b8e28d82f9c405110ac129b_prof);

        
        $__internal_f8e8e59317144938f3d6e63dfdbfde25fd4031d28f1261409474c9091036277b->leave($__internal_f8e8e59317144938f3d6e63dfdbfde25fd4031d28f1261409474c9091036277b_prof);

    }

    // line 533
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e9a73e912042ed3240401cea1bb18469d72feb2516791801b5199b9bdfda295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9a73e912042ed3240401cea1bb18469d72feb2516791801b5199b9bdfda295->enter($__internal_4e9a73e912042ed3240401cea1bb18469d72feb2516791801b5199b9bdfda295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3d07ad3a86c8a83dcb92430ad3c68305ab07283d1f5d89e3769e1ba0b954ef9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d07ad3a86c8a83dcb92430ad3c68305ab07283d1f5d89e3769e1ba0b954ef9e->enter($__internal_3d07ad3a86c8a83dcb92430ad3c68305ab07283d1f5d89e3769e1ba0b954ef9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 534
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>


    <script type=\"text/javascript\" src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/arcseldon-jquery.sparkline/dist/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/progressbar.js/dist/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mapael/js/jquery.mapael.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mapael/js/maps/france_departments.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mapael/js/maps/world_countries.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-mapael/js/maps/usa_states.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/d3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/rickshaw/rickshaw.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/dashboard_v4.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3d07ad3a86c8a83dcb92430ad3c68305ab07283d1f5d89e3769e1ba0b954ef9e->leave($__internal_3d07ad3a86c8a83dcb92430ad3c68305ab07283d1f5d89e3769e1ba0b954ef9e_prof);

        
        $__internal_4e9a73e912042ed3240401cea1bb18469d72feb2516791801b5199b9bdfda295->leave($__internal_4e9a73e912042ed3240401cea1bb18469d72feb2516791801b5199b9bdfda295_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:SuperAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 564,  820 => 563,  816 => 562,  812 => 561,  808 => 560,  804 => 559,  800 => 558,  796 => 557,  792 => 556,  788 => 555,  784 => 554,  780 => 553,  776 => 552,  772 => 551,  768 => 550,  764 => 549,  760 => 548,  756 => 547,  752 => 546,  748 => 545,  744 => 544,  740 => 543,  734 => 540,  730 => 539,  726 => 538,  722 => 537,  718 => 536,  714 => 535,  709 => 534,  700 => 533,  682 => 31,  172 => 32,  170 => 31,  166 => 29,  157 => 28,  144 => 26,  135 => 25,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  87 => 14,  83 => 13,  72 => 4,  63 => 3,  45 => 2,  11 => 1,);
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
var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-92643213-2']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();(function(b){(function(a){\"__CF\"in b&&\"DJS\"in b.__CF?b.__CF.DJS.push(a):\"addEventListener\"in b?b.addEventListener(\"load\",a,!1):b.attachEvent(\"onload\",a)})(function(){\"FB\"in b&&\"Event\"in FB&&\"subscribe\"in FB.Event&&(FB.Event.subscribe(\"edge.create\",function(a){_gaq.push([\"_trackSocial\",\"facebook\",\"like\",a])}),FB.Event.subscribe(\"edge.remove\",function(a){_gaq.push([\"_trackSocial\",\"facebook\",\"unlike\",a])}),FB.Event.subscribe(\"message.send\",function(a){_gaq.push([\"_trackSocial\",\"facebook\",\"send\",a])}));\"twttr\"in b&&\"events\"in twttr&&\"bind\"in twttr.events&&twttr.events.bind(\"tweet\",function(a){if(a){var b;if(a.target&&a.target.nodeName==\"IFRAME\")a:{if(a=a.target.src){a=a.split(\"#\")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf(\"url\")===0){b=unescape(c.split(\"=\")[1]);break a}}b=void 0}_gaq.push([\"_trackSocial\",\"twitter\",\"tweet\",b])}})})})(window);//]]>
</script>
    <script type=\"text/javascript\">
        //<![CDATA[
        try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:\"cf\",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:\"/cdn-cgi/nexp/dok3v=1613a3a185/\"},atok:\"0058b165fc78163e6d148677944b9ad6\",petok:\"8ddbcbc9feff803550a9f3ceca501f2cd0d28aa0-1496996202-1800\",zone:\"themesadmin.com\",rocket:\"0\",apps:{\"ga_key\":{\"ua\":\"UA-92643213-2\",\"ga_bs\":\"2\"}}}];!function(a,b){a=document.createElement(\"script\"),b=document.getElementsByTagName(\"script\")[0],a.async=!0,a.src=\"../../../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d85b614c0f6/cloudflare.min.js\",b.parentNode.insertBefore(a,b)}()}}catch(e){};
        //]]>
    </script>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap/dist/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link rel=\"stylesheet\" id=\"site-color\"  href=\"{{ asset('assets/layouts/layout-left-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/weather-icons/css/weather-icons.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/weather-icons/css/weather-icons-wind.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/rickshaw/rickshaw.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-menu/css/layout.min.css') }}\"/>
{% endblock %}
{% block header %}
    {{ render(controller('ERPBundle:SuperAdmin/SuperAdmin:header')) }}
{% endblock %}
{% block body %}
    <div class=\"row\">
        <section id=\"content-wrapper\" class=\"form-elements\">
            {% block menu %}{% include '::headers/menuSuperAdmin.html.twig' %}{% endblock %}
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
                                        <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                        <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"dashboard-box dashboard_v4_project_block\">
                                <table class=\"table  table-striped\">
                                    <tbody>
                                    <tr>
                                        <td><div class=\"stackline-bar\">3,5,7,9,4,6,5,8</div></td>
                                        <td>
                                            <h6>Total income</h6>
                                            <p>Total amount of income earned annually.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class=\"sparkline-line\">1,5,6,9,4,8,5,4</div></td>
                                        <td>
                                            <h6>Yearly sell</h6>
                                            <p>Businesses do their accounting on a sell.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class=\"sparkline-inlinerange\">5,3,6,4,5,3,5,7</div></td>
                                        <td>
                                            <h6>Profit</h6>
                                            <p>Revenue minus the cost of goods sold.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class=\"sparkline-linecustom\">5,7,9,8,6,5,8,4</div></td>
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
                                        <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                        <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
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
                                        <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                        <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
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
                                            <li data-widget=\"collapse\"><a href=\"javascript:void(0)\" aria-hidden=\"true\"><span class=\"icon_minus-06\" aria-hidden=\"true\"></span></a></li>
                                            <li data-widget=\"close\"><a href=\"javascript:void(0)\"><span class=\"icon_close\" aria-hidden=\"true\"></span></a>
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
                                                        <td><span class=\"tag square-tag light-red-color\">Work in Progress</span></td>
                                                        <td>Harvinder Singh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Bookshow app</td>
                                                        <td>16-3-2017</td>
                                                        <td><span class=\"tag square-tag purple-color\">Coming soon</span></td>
                                                        <td>Terry Khoo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>PhotoSnap template</td>
                                                        <td>1-3-2017</td>
                                                        <td><span class=\"tag square-tag dodger-blue-color\">Work in Progress</span></td>
                                                        <td>Nicky Almera</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Metabox wordpress template</td>
                                                        <td>25-1-2017</td>
                                                        <td><span class=\"tag square-tag soft-orange-color\">Released</span></td>
                                                        <td>Edmund Wong</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>FlatUi admin panel</td>
                                                        <td>1-2-2017</td>
                                                        <td><span class=\"tag square-tag golden-color\">Pending</span></td>
                                                        <td>Larry the Bird</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>DecentData app</td>
                                                        <td>13-3-2017</td>
                                                        <td><span class=\"tag square-tag spice-color\">Pending</span></td>
                                                        <td>Jacob Thornton</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>User admin panel</td>
                                                        <td>25-3-2017</td>
                                                        <td><span class=\"tag square-tag bright-pink-color\">Coming soon</span></td>
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
                                    <h5 id=\"dashboard_v4_expense_text\" class=\"float-xs-left gauge-value text-primary\"></h5>
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
                                        <li><span class=\"bar-legend-pointer veritcal-progress-info\"></span> New York</li>
                                        <li><span class=\"bar-legend-pointer veritcal-progress-warning\"></span> US</li>
                                        <li><span class=\"bar-legend-pointer veritcal-progress-danger\"></span> India</li>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/dashboard_v4.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-menu/js/layout.min.js') }}\"></script>
{% endblock %}", "ERPBundle:SuperAdmin:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/SuperAdmin/index.html.twig");
    }
}
