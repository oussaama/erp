<?php

/* ERPBundle:Admin/retard:index.html.twig */
class __TwigTemplate_d5d0ff840071f204416d24d47a178475c2dac069bd49a846713b53d3ee5ca93d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/retard:index.html.twig", 1);
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
        $__internal_20a43c3d1fe34d8940afe1b377dd3e4874306d3902980b08c39f9b6704414e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a43c3d1fe34d8940afe1b377dd3e4874306d3902980b08c39f9b6704414e07->enter($__internal_20a43c3d1fe34d8940afe1b377dd3e4874306d3902980b08c39f9b6704414e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/retard:index.html.twig"));

        $__internal_720ee68cc7d0e5bff43d9032884f2720f5f758032e4052cb6c7525c7e4516c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720ee68cc7d0e5bff43d9032884f2720f5f758032e4052cb6c7525c7e4516c33->enter($__internal_720ee68cc7d0e5bff43d9032884f2720f5f758032e4052cb6c7525c7e4516c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/retard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a43c3d1fe34d8940afe1b377dd3e4874306d3902980b08c39f9b6704414e07->leave($__internal_20a43c3d1fe34d8940afe1b377dd3e4874306d3902980b08c39f9b6704414e07_prof);

        
        $__internal_720ee68cc7d0e5bff43d9032884f2720f5f758032e4052cb6c7525c7e4516c33->leave($__internal_720ee68cc7d0e5bff43d9032884f2720f5f758032e4052cb6c7525c7e4516c33_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa1d84170e99f8a75f4bb3759e6a55090c10e86577eba6c27b5ab2319cbec9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1d84170e99f8a75f4bb3759e6a55090c10e86577eba6c27b5ab2319cbec9d7->enter($__internal_aa1d84170e99f8a75f4bb3759e6a55090c10e86577eba6c27b5ab2319cbec9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef0a831d0d28e542517e760d956f7e3053f97590dbab8907e2c6e29e671d7dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0a831d0d28e542517e760d956f7e3053f97590dbab8907e2c6e29e671d7dfb->enter($__internal_ef0a831d0d28e542517e760d956f7e3053f97590dbab8907e2c6e29e671d7dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Retard";
        
        $__internal_ef0a831d0d28e542517e760d956f7e3053f97590dbab8907e2c6e29e671d7dfb->leave($__internal_ef0a831d0d28e542517e760d956f7e3053f97590dbab8907e2c6e29e671d7dfb_prof);

        
        $__internal_aa1d84170e99f8a75f4bb3759e6a55090c10e86577eba6c27b5ab2319cbec9d7->leave($__internal_aa1d84170e99f8a75f4bb3759e6a55090c10e86577eba6c27b5ab2319cbec9d7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb11eb6cc783a75a33ee60a61ed7c264882c9b7c33f60d421b0431faf92493dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb11eb6cc783a75a33ee60a61ed7c264882c9b7c33f60d421b0431faf92493dd->enter($__internal_cb11eb6cc783a75a33ee60a61ed7c264882c9b7c33f60d421b0431faf92493dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c61434c04dc42c50d741469411f03c3fd26135b923be8b90280c2efe230d981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c61434c04dc42c50d741469411f03c3fd26135b923be8b90280c2efe230d981->enter($__internal_0c61434c04dc42c50d741469411f03c3fd26135b923be8b90280c2efe230d981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_0c61434c04dc42c50d741469411f03c3fd26135b923be8b90280c2efe230d981->leave($__internal_0c61434c04dc42c50d741469411f03c3fd26135b923be8b90280c2efe230d981_prof);

        
        $__internal_cb11eb6cc783a75a33ee60a61ed7c264882c9b7c33f60d421b0431faf92493dd->leave($__internal_cb11eb6cc783a75a33ee60a61ed7c264882c9b7c33f60d421b0431faf92493dd_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_34ff55752947a54a758ba782f9751608d7927340461d83f88df7be8ac6f73d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ff55752947a54a758ba782f9751608d7927340461d83f88df7be8ac6f73d2e->enter($__internal_34ff55752947a54a758ba782f9751608d7927340461d83f88df7be8ac6f73d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6714b32c6819a2989de7c745461712824f9581022d7f0212394a3096372a749e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6714b32c6819a2989de7c745461712824f9581022d7f0212394a3096372a749e->enter($__internal_6714b32c6819a2989de7c745461712824f9581022d7f0212394a3096372a749e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Retard</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Retard</a></li>
                <li class=\"breadcrumb-item active\">List</li>
            </ol>

        </div>

        <div class=\"content userlist-content\">
            <form class=\"search_form\">
                <div class=\"input-group search_field\">
                    <input type=\"text\" placeholder=\"search..\" name=\"search\" class=\"form-control\" id=\"search\">
                    <span class=\"input-group-addon\"><button type=\"button\"><i class=\"icon icon_search\"></i></button></span>
                </div>
            </form>
            <div class=\"divider15\"></div>
            <div class=\"divider15\"></div>
            <div class=\"gallery-filter\">
                <div class=\"filter-options\">
                    <button class=\"btn flat-buttons btn-primary active\" data-group=\"employee\">Employee</button>
                    <button class=\"btn flat-buttons btn-primary\" data-group=\"enseignant\">Enseignant</button>
                    <button class=\"btn flat-buttons btn-primary\" data-group=\"etudiant\">Etudiant</button>
                </div>
            </div>
            <div class=\"divider5\"></div>
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["retard"] ?? $this->getContext($context, "retard")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 122
            echo "            <div class=\"none-padding\">
                <div id=\"grid\" data-plugin=\"lightbox\" class=\"row my-shuffle-container\">
                    ";
            // line 124
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "user", array()), "roles", array()), 0, array(), "array") == "ROLE_EMPLOYEE")) {
                // line 125
                echo "                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"employee\"]'>
                        ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 126
$context["r"], "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ENSEIGNANT")) {
                // line 127
                echo "                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"enseignant\"]'>
                            ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 128
$context["r"], "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ETUDIANT")) {
                // line 129
                echo "                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"etudiant\"]'>
                                ";
            }
            // line 131
            echo "                                <div class=\"userlist-box content text-xs-center\">
                                    <div class=\"image-userlist\">
                                        <img alt=\"user image\" src=\"../../../assets/global/image/image-profile.jpg\">
                                    </div>
                                    <h5 class=\"name-userlist\">";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "user", array()), "username", array()), "html", null, true);
            echo "</h5>
                                    <div class=\"border-userlist\"></div>
                                    <h6 class=\"post-userlist\">";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateModif", array()), "M d Y H:i"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nombre", array()), "html", null, true);
            echo ")</h6>
                                    <h6 class=\"post-userlist\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "user", array()), "email", array()), "html", null, true);
            echo "</h6>
                                    <a class=\"btn flat-buttons btn-primary site-btn openUserlist\" data-id=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "user", array()), "id", array()), "html", null, true);
            echo "\">View detail</a>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "            </div>
            <div class=\"row\">
                <div class=\"userlist-box content text-xs-center\">
                    <div id=\"userlistNav\" class=\"overlay-userlistNav info-userlist\">
                        <div data-plugin=\"custom-scroll\" data-height=\"100%\">
                            <a href=\"javascript:void(0)\" class=\"closeUserlist\">&times;</a>
                            <div class=\"overlay-content-userlistNav\">
                                <div class=\"user-overlay-img\">
                                    <img alt=\"user image\" src=\"../../../assets/global/image/image11-profile.jpg\">
                                </div>
                                <div class=\"hover-user-box\">
                                    <div class=\"user-box\">
                                        <div class=\"user-inner-box\">
                                            <div class=\"image-userlist\">
                                                <img alt=\"user image\" src=\"../../../assets/global/image/image11-profile.jpg\"/>
                                            </div>
                                            <h5 class=\"name-userlist\">Root James</h5>
                                            <div class=\"border-userlist\"></div>
                                            <h6 class=\"post-userlist\">WordPress Developer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"detail-userlist\">
                                    <div class=\"row text-xs-left edit-form-userlist\">
                                        <div class=\"col-md-12\">
                                            <h4 class=\"page-content-title\">Personal Information</h4>
                                            <div class=\"personal-info-box\">
                                                <div class=\"row\">
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">First Name :</div>
                                                        <div class=\"detail-profile\">Root James</div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input\" value=\"Root James\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Post :</div>
                                                        <div class=\"detail-profile\">WordPress Developer
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input\" value=\"WordPress Developer\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Country :</div>
                                                        <div class=\"detail-profile\">New Zealand</div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input\" value=\"New Zealand\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Address :</div>
                                                        <div class=\"detail-profile\">2, 44 Victoria Street
                                                            Wellington 6142, New Zealand.
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input edit-textarea\" value=\"2, 44 Victoria Street Wellington 6142, New Zealand.\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"divider15\"></div>
                                        <div class=\"col-md-12\">
                                            <h4 class=\"page-content-title\">Contact Information</h4>
                                            <div class=\"personal-info-box\">
                                                <div class=\"row\">
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile float-xs-left\">mail:</div>
                                                        <div class=\"detail-profile float-xs-right\">
                                                            rootjames@gmail.com
                                                        </div>
                                                        <div class=\"userlist-group\">
                                                            <input type=\"text\" class=\"edit-input\" value=\"rootjames@gmail.com\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile float-xs-left\">Tel No
                                                            :
                                                        </div>
                                                        <div class=\"detail-profile float-xs-right\">1234
                                                            567890
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input\" value=\"1234 567890\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile float-xs-left\">Mobile
                                                            No :
                                                        </div>
                                                        <div class=\"detail-profile float-xs-right\">
                                                            9876543210
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"9876543210\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type=\"button\" data-toggle=\"edit\"
                                                class=\"btn flat-buttons btn-primary edit-profile edit save-btn\">
                                            Edit
                                        </button>
                                    </div>
                                </div>
                                <div class=\"profile-icon text-xs-center\">
                                    <a class=\"flat-buttons\" href=\"javascript:void(0)\">
                                        <i class=\"icon social_facebook\"></i>
                                    </a>
                                    <a class=\"flat-buttons\" href=\"javascript:void(0)\">
                                        <i class=\"icon social_twitter \"></i>
                                    </a>
                                    <a class=\"flat-buttons\" href=\"javascript:void(0)\">
                                        <i class=\"icon social_instagram\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6714b32c6819a2989de7c745461712824f9581022d7f0212394a3096372a749e->leave($__internal_6714b32c6819a2989de7c745461712824f9581022d7f0212394a3096372a749e_prof);

        
        $__internal_34ff55752947a54a758ba782f9751608d7927340461d83f88df7be8ac6f73d2e->leave($__internal_34ff55752947a54a758ba782f9751608d7927340461d83f88df7be8ac6f73d2e_prof);

    }

    // line 266
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_f63d8096f1d1f7bad50cf785b9199e8769e20d58cbc61f9c3f5461e22d7cb81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63d8096f1d1f7bad50cf785b9199e8769e20d58cbc61f9c3f5461e22d7cb81f->enter($__internal_f63d8096f1d1f7bad50cf785b9199e8769e20d58cbc61f9c3f5461e22d7cb81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_77375d5abf91add828a7e39a0a72c9774128d15b06dfa2033143a6321e4744bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77375d5abf91add828a7e39a0a72c9774128d15b06dfa2033143a6321e4744bc->enter($__internal_77375d5abf91add828a7e39a0a72c9774128d15b06dfa2033143a6321e4744bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 267
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/shufflejs/dist/shuffle.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/gallery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/userlist.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/shufflejs/dist/shuffle.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$('.openUserlist').click(function(){
            id = \$(this).data('id');
            alert(id);
            \$.ajax({
                method:'POST',
                url: Routing.generate('admin_Retard_detail',{'id':id}),
                success:function(data){
                    alert(data.user);
                }
            });
        });
    </script>
";
        
        $__internal_77375d5abf91add828a7e39a0a72c9774128d15b06dfa2033143a6321e4744bc->leave($__internal_77375d5abf91add828a7e39a0a72c9774128d15b06dfa2033143a6321e4744bc_prof);

        
        $__internal_f63d8096f1d1f7bad50cf785b9199e8769e20d58cbc61f9c3f5461e22d7cb81f->leave($__internal_f63d8096f1d1f7bad50cf785b9199e8769e20d58cbc61f9c3f5461e22d7cb81f_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/retard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 281,  482 => 280,  478 => 279,  474 => 278,  470 => 277,  466 => 276,  462 => 275,  458 => 274,  454 => 273,  450 => 272,  446 => 271,  442 => 270,  438 => 269,  434 => 268,  429 => 267,  420 => 266,  289 => 144,  278 => 139,  274 => 138,  268 => 137,  263 => 135,  257 => 131,  253 => 129,  251 => 128,  248 => 127,  246 => 126,  243 => 125,  241 => 124,  237 => 122,  233 => 121,  198 => 88,  189 => 87,  177 => 85,  173 => 84,  169 => 83,  165 => 82,  161 => 81,  157 => 80,  153 => 79,  149 => 78,  145 => 77,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
{% block title %}Admin - Retard{% endblock %}
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/Waves/dist/waves.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap/dist/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
{% endblock %}
{% block body %}
    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Retard</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Retard</a></li>
                <li class=\"breadcrumb-item active\">List</li>
            </ol>

        </div>

        <div class=\"content userlist-content\">
            <form class=\"search_form\">
                <div class=\"input-group search_field\">
                    <input type=\"text\" placeholder=\"search..\" name=\"search\" class=\"form-control\" id=\"search\">
                    <span class=\"input-group-addon\"><button type=\"button\"><i class=\"icon icon_search\"></i></button></span>
                </div>
            </form>
            <div class=\"divider15\"></div>
            <div class=\"divider15\"></div>
            <div class=\"gallery-filter\">
                <div class=\"filter-options\">
                    <button class=\"btn flat-buttons btn-primary active\" data-group=\"employee\">Employee</button>
                    <button class=\"btn flat-buttons btn-primary\" data-group=\"enseignant\">Enseignant</button>
                    <button class=\"btn flat-buttons btn-primary\" data-group=\"etudiant\">Etudiant</button>
                </div>
            </div>
            <div class=\"divider5\"></div>
            {% for r in retard %}
            <div class=\"none-padding\">
                <div id=\"grid\" data-plugin=\"lightbox\" class=\"row my-shuffle-container\">
                    {% if( r.user.roles[0] == \"ROLE_EMPLOYEE\") %}
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"employee\"]'>
                        {% elseif( r.user.roles[0] == \"ROLE_ENSEIGNANT\") %}
                        <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"enseignant\"]'>
                            {% elseif( r.user.roles[0] == \"ROLE_ETUDIANT\") %}
                            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"etudiant\"]'>
                                {% endif %}
                                <div class=\"userlist-box content text-xs-center\">
                                    <div class=\"image-userlist\">
                                        <img alt=\"user image\" src=\"../../../assets/global/image/image-profile.jpg\">
                                    </div>
                                    <h5 class=\"name-userlist\">{{ r.user.username }}</h5>
                                    <div class=\"border-userlist\"></div>
                                    <h6 class=\"post-userlist\">{{ r.dateModif|date('M d Y H:i') }} ({{ r.nombre }})</h6>
                                    <h6 class=\"post-userlist\">{{ r.user.email }}</h6>
                                    <a class=\"btn flat-buttons btn-primary site-btn openUserlist\" data-id=\"{{ r.user.id }}\">View detail</a>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
            </div>
            <div class=\"row\">
                <div class=\"userlist-box content text-xs-center\">
                    <div id=\"userlistNav\" class=\"overlay-userlistNav info-userlist\">
                        <div data-plugin=\"custom-scroll\" data-height=\"100%\">
                            <a href=\"javascript:void(0)\" class=\"closeUserlist\">&times;</a>
                            <div class=\"overlay-content-userlistNav\">
                                <div class=\"user-overlay-img\">
                                    <img alt=\"user image\" src=\"../../../assets/global/image/image11-profile.jpg\">
                                </div>
                                <div class=\"hover-user-box\">
                                    <div class=\"user-box\">
                                        <div class=\"user-inner-box\">
                                            <div class=\"image-userlist\">
                                                <img alt=\"user image\" src=\"../../../assets/global/image/image11-profile.jpg\"/>
                                            </div>
                                            <h5 class=\"name-userlist\">Root James</h5>
                                            <div class=\"border-userlist\"></div>
                                            <h6 class=\"post-userlist\">WordPress Developer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"detail-userlist\">
                                    <div class=\"row text-xs-left edit-form-userlist\">
                                        <div class=\"col-md-12\">
                                            <h4 class=\"page-content-title\">Personal Information</h4>
                                            <div class=\"personal-info-box\">
                                                <div class=\"row\">
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">First Name :</div>
                                                        <div class=\"detail-profile\">Root James</div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input\" value=\"Root James\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Post :</div>
                                                        <div class=\"detail-profile\">WordPress Developer
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input\" value=\"WordPress Developer\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Country :</div>
                                                        <div class=\"detail-profile\">New Zealand</div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input\" value=\"New Zealand\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Address :</div>
                                                        <div class=\"detail-profile\">2, 44 Victoria Street
                                                            Wellington 6142, New Zealand.
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input edit-textarea\" value=\"2, 44 Victoria Street Wellington 6142, New Zealand.\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"divider15\"></div>
                                        <div class=\"col-md-12\">
                                            <h4 class=\"page-content-title\">Contact Information</h4>
                                            <div class=\"personal-info-box\">
                                                <div class=\"row\">
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile float-xs-left\">mail:</div>
                                                        <div class=\"detail-profile float-xs-right\">
                                                            rootjames@gmail.com
                                                        </div>
                                                        <div class=\"userlist-group\">
                                                            <input type=\"text\" class=\"edit-input\" value=\"rootjames@gmail.com\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile float-xs-left\">Tel No
                                                            :
                                                        </div>
                                                        <div class=\"detail-profile float-xs-right\">1234
                                                            567890
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\" class=\"edit-input\" value=\"1234 567890\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile float-xs-left\">Mobile
                                                            No :
                                                        </div>
                                                        <div class=\"detail-profile float-xs-right\">
                                                            9876543210
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"9876543210\"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type=\"button\" data-toggle=\"edit\"
                                                class=\"btn flat-buttons btn-primary edit-profile edit save-btn\">
                                            Edit
                                        </button>
                                    </div>
                                </div>
                                <div class=\"profile-icon text-xs-center\">
                                    <a class=\"flat-buttons\" href=\"javascript:void(0)\">
                                        <i class=\"icon social_facebook\"></i>
                                    </a>
                                    <a class=\"flat-buttons\" href=\"javascript:void(0)\">
                                        <i class=\"icon social_twitter \"></i>
                                    </a>
                                    <a class=\"flat-buttons\" href=\"javascript:void(0)\">
                                        <i class=\"icon social_instagram\"></i>
                                    </a>
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
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/shufflejs/dist/shuffle.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/gallery.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/userlist.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/shufflejs/dist/shuffle.min.js') }}\"></script>
    <script type=\"text/javascript\">
        \$('.openUserlist').click(function(){
            id = \$(this).data('id');
            alert(id);
            \$.ajax({
                method:'POST',
                url: Routing.generate('admin_Retard_detail',{'id':id}),
                success:function(data){
                    alert(data.user);
                }
            });
        });
    </script>
{% endblock %}", "ERPBundle:Admin/retard:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/retard/index.html.twig");
    }
}
