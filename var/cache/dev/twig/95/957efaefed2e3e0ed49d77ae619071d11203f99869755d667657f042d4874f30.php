<?php

/* ERPBundle:Admin/appsense:index.html.twig */
class __TwigTemplate_b40fe4f43e5d537ed9fdbb2343b97f10033de83327d34e3727265f93883247c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/appsense:index.html.twig", 1);
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
        $__internal_ca07c250bf34fdfe25365b93ba8a8dbdb2977734ff2e9310ecfd9187268d9480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca07c250bf34fdfe25365b93ba8a8dbdb2977734ff2e9310ecfd9187268d9480->enter($__internal_ca07c250bf34fdfe25365b93ba8a8dbdb2977734ff2e9310ecfd9187268d9480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/appsense:index.html.twig"));

        $__internal_813040db04cce9e1b3229c6c12398145c72f9de281f85a7a2438f982fba5bada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813040db04cce9e1b3229c6c12398145c72f9de281f85a7a2438f982fba5bada->enter($__internal_813040db04cce9e1b3229c6c12398145c72f9de281f85a7a2438f982fba5bada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/appsense:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca07c250bf34fdfe25365b93ba8a8dbdb2977734ff2e9310ecfd9187268d9480->leave($__internal_ca07c250bf34fdfe25365b93ba8a8dbdb2977734ff2e9310ecfd9187268d9480_prof);

        
        $__internal_813040db04cce9e1b3229c6c12398145c72f9de281f85a7a2438f982fba5bada->leave($__internal_813040db04cce9e1b3229c6c12398145c72f9de281f85a7a2438f982fba5bada_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c27e3975b91b0a91bef1c1592ffff35da3f89838e56a415ecf6e221389c792c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c27e3975b91b0a91bef1c1592ffff35da3f89838e56a415ecf6e221389c792c->enter($__internal_0c27e3975b91b0a91bef1c1592ffff35da3f89838e56a415ecf6e221389c792c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5291bb9f28e748bbf7f8301f72b9ec0465d95424882b09f3e767dfde9b22445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5291bb9f28e748bbf7f8301f72b9ec0465d95424882b09f3e767dfde9b22445->enter($__internal_e5291bb9f28e748bbf7f8301f72b9ec0465d95424882b09f3e767dfde9b22445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Appsense";
        
        $__internal_e5291bb9f28e748bbf7f8301f72b9ec0465d95424882b09f3e767dfde9b22445->leave($__internal_e5291bb9f28e748bbf7f8301f72b9ec0465d95424882b09f3e767dfde9b22445_prof);

        
        $__internal_0c27e3975b91b0a91bef1c1592ffff35da3f89838e56a415ecf6e221389c792c->leave($__internal_0c27e3975b91b0a91bef1c1592ffff35da3f89838e56a415ecf6e221389c792c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d053ae488939071c96befcbc1a97469c06113344aa023597140dceaee186f81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d053ae488939071c96befcbc1a97469c06113344aa023597140dceaee186f81d->enter($__internal_d053ae488939071c96befcbc1a97469c06113344aa023597140dceaee186f81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b3144c3d4a32e2a174f3aaf2592a5d70edb1a2837516f11166d3b77a9abdc7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3144c3d4a32e2a174f3aaf2592a5d70edb1a2837516f11166d3b77a9abdc7f->enter($__internal_9b3144c3d4a32e2a174f3aaf2592a5d70edb1a2837516f11166d3b77a9abdc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9b3144c3d4a32e2a174f3aaf2592a5d70edb1a2837516f11166d3b77a9abdc7f->leave($__internal_9b3144c3d4a32e2a174f3aaf2592a5d70edb1a2837516f11166d3b77a9abdc7f_prof);

        
        $__internal_d053ae488939071c96befcbc1a97469c06113344aa023597140dceaee186f81d->leave($__internal_d053ae488939071c96befcbc1a97469c06113344aa023597140dceaee186f81d_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_925d95c6a5068401644b712215ef0d226245977b5d864c464efde0db79f4adae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925d95c6a5068401644b712215ef0d226245977b5d864c464efde0db79f4adae->enter($__internal_925d95c6a5068401644b712215ef0d226245977b5d864c464efde0db79f4adae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf5810e31c61b00b82c98221e13692d414bec31c93e7b09ccbb52f82f7480e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5810e31c61b00b82c98221e13692d414bec31c93e7b09ccbb52f82f7480e47->enter($__internal_cf5810e31c61b00b82c98221e13692d414bec31c93e7b09ccbb52f82f7480e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "    <section id=\"content-wrapper\" class=\"form-elements\">

        <div class=\"site-content-title\">
            <h2 class=\"float-xs-left content-title-main\">Appsense</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Appsense</a></li>
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
            <div class=\"none-padding\">
                <div id=\"grid\" data-plugin=\"lightbox\" class=\"row my-shuffle-container\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"enseignant\"]'>
                        <div class=\"userlist-box content text-xs-center\">
                            <div class=\"image-userlist\">
                                <img alt=\"user image\" src=\"../../../assets/global/image/image-profile.jpg\">
                            </div>
                            <h5 class=\"name-userlist\">Meg Lanning</h5>
                            <div class=\"border-userlist\"></div>
                            <h6 class=\"post-userlist\">PHP Developer</h6>
                            <h6 class=\"post-userlist\">meglanning@gmail.com</h6>
                            <a class=\"btn flat-buttons btn-primary site-btn openUserlist\">View Profile</a>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"etudiant\"]'>
                        <div class=\"userlist-box content text-xs-center\">
                            <div class=\"image-userlist\">
                                <img alt=\"user image\" src=\"../../../assets/global/image/image-profile.jpg\">
                            </div>
                            <h5 class=\"name-userlist\">Meg Lanning</h5>
                            <div class=\"border-userlist\"></div>
                            <h6 class=\"post-userlist\">PHP Developer</h6>
                            <h6 class=\"post-userlist\">meglanning@gmail.com</h6>
                            <a class=\"btn flat-buttons btn-primary site-btn openUserlist\">View Profile</a>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"employee\"]'>
                        <div class=\"userlist-box content text-xs-center\">
                            <div class=\"image-userlist\">
                                <img alt=\"user image\" src=\"../../../assets/global/image/image-profile.jpg\">
                            </div>
                            <h5 class=\"name-userlist\">Meg Lanning</h5>
                            <div class=\"border-userlist\"></div>
                            <h6 class=\"post-userlist\">PHP Developer</h6>
                            <h6 class=\"post-userlist\">meglanning@gmail.com</h6>
                            <a class=\"btn flat-buttons btn-primary site-btn openUserlist\">View Profile</a>
                        </div>
                    </div>
                </div>
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
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"Root James\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Post :</div>
                                                        <div class=\"detail-profile\">WordPress Developer
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"WordPress Developer\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Country :</div>
                                                        <div class=\"detail-profile\">New Zealand</div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"New Zealand\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Address :</div>
                                                        <div class=\"detail-profile\">2, 44 Victoria Street
                                                            Wellington 6142, New Zealand.
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input edit-textarea\"
                                                                                           value=\"2, 44 Victoria Street Wellington 6142, New Zealand.\"/>
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
                                                        <div class=\"left-name-profile float-xs-left\">Email
                                                            :
                                                        </div>
                                                        <div class=\"detail-profile float-xs-right\">
                                                            rootjames@gmail.com
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"rootjames@gmail.com\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile float-xs-left\">Tel No
                                                            :
                                                        </div>
                                                        <div class=\"detail-profile float-xs-right\">1234
                                                            567890
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"1234 567890\"/>
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
        
        $__internal_cf5810e31c61b00b82c98221e13692d414bec31c93e7b09ccbb52f82f7480e47->leave($__internal_cf5810e31c61b00b82c98221e13692d414bec31c93e7b09ccbb52f82f7480e47_prof);

        
        $__internal_925d95c6a5068401644b712215ef0d226245977b5d864c464efde0db79f4adae->leave($__internal_925d95c6a5068401644b712215ef0d226245977b5d864c464efde0db79f4adae_prof);

    }

    // line 295
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_fedaf012b9a665eff5a2db94cd82a642cac71e2869c3cb378f414f3d3b1111a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedaf012b9a665eff5a2db94cd82a642cac71e2869c3cb378f414f3d3b1111a6->enter($__internal_fedaf012b9a665eff5a2db94cd82a642cac71e2869c3cb378f414f3d3b1111a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_65e7748129d6e3fe82897c4de5756bbe817d396ff2444bdca8f379c53566e46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e7748129d6e3fe82897c4de5756bbe817d396ff2444bdca8f379c53566e46f->enter($__internal_65e7748129d6e3fe82897c4de5756bbe817d396ff2444bdca8f379c53566e46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 296
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/shufflejs/dist/shuffle.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/gallery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/userlist.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/shufflejs/dist/shuffle.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_65e7748129d6e3fe82897c4de5756bbe817d396ff2444bdca8f379c53566e46f->leave($__internal_65e7748129d6e3fe82897c4de5756bbe817d396ff2444bdca8f379c53566e46f_prof);

        
        $__internal_fedaf012b9a665eff5a2db94cd82a642cac71e2869c3cb378f414f3d3b1111a6->leave($__internal_fedaf012b9a665eff5a2db94cd82a642cac71e2869c3cb378f414f3d3b1111a6_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/appsense:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 310,  476 => 309,  472 => 308,  468 => 307,  464 => 306,  460 => 305,  456 => 304,  452 => 303,  448 => 302,  444 => 301,  440 => 300,  436 => 299,  432 => 298,  428 => 297,  423 => 296,  414 => 295,  198 => 88,  189 => 87,  177 => 85,  173 => 84,  169 => 83,  165 => 82,  161 => 81,  157 => 80,  153 => 79,  149 => 78,  145 => 77,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
{% block title %}Admin - Appsense{% endblock %}
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
            <h2 class=\"float-xs-left content-title-main\">Appsense</h2>

            <ol class=\"breadcrumb float-xs-right\">
                <li class=\"breadcrumb-item\">
                    <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                    <a href=\"#\">Home</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Appsense</a></li>
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
            <div class=\"none-padding\">
                <div id=\"grid\" data-plugin=\"lightbox\" class=\"row my-shuffle-container\">
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"enseignant\"]'>
                        <div class=\"userlist-box content text-xs-center\">
                            <div class=\"image-userlist\">
                                <img alt=\"user image\" src=\"../../../assets/global/image/image-profile.jpg\">
                            </div>
                            <h5 class=\"name-userlist\">Meg Lanning</h5>
                            <div class=\"border-userlist\"></div>
                            <h6 class=\"post-userlist\">PHP Developer</h6>
                            <h6 class=\"post-userlist\">meglanning@gmail.com</h6>
                            <a class=\"btn flat-buttons btn-primary site-btn openUserlist\">View Profile</a>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"etudiant\"]'>
                        <div class=\"userlist-box content text-xs-center\">
                            <div class=\"image-userlist\">
                                <img alt=\"user image\" src=\"../../../assets/global/image/image-profile.jpg\">
                            </div>
                            <h5 class=\"name-userlist\">Meg Lanning</h5>
                            <div class=\"border-userlist\"></div>
                            <h6 class=\"post-userlist\">PHP Developer</h6>
                            <h6 class=\"post-userlist\">meglanning@gmail.com</h6>
                            <a class=\"btn flat-buttons btn-primary site-btn openUserlist\">View Profile</a>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 picture-item filtr-item\" data-groups='[\"employee\"]'>
                        <div class=\"userlist-box content text-xs-center\">
                            <div class=\"image-userlist\">
                                <img alt=\"user image\" src=\"../../../assets/global/image/image-profile.jpg\">
                            </div>
                            <h5 class=\"name-userlist\">Meg Lanning</h5>
                            <div class=\"border-userlist\"></div>
                            <h6 class=\"post-userlist\">PHP Developer</h6>
                            <h6 class=\"post-userlist\">meglanning@gmail.com</h6>
                            <a class=\"btn flat-buttons btn-primary site-btn openUserlist\">View Profile</a>
                        </div>
                    </div>
                </div>
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
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"Root James\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Post :</div>
                                                        <div class=\"detail-profile\">WordPress Developer
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"WordPress Developer\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Country :</div>
                                                        <div class=\"detail-profile\">New Zealand</div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"New Zealand\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile\">Address :</div>
                                                        <div class=\"detail-profile\">2, 44 Victoria Street
                                                            Wellington 6142, New Zealand.
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input edit-textarea\"
                                                                                           value=\"2, 44 Victoria Street Wellington 6142, New Zealand.\"/>
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
                                                        <div class=\"left-name-profile float-xs-left\">Email
                                                            :
                                                        </div>
                                                        <div class=\"detail-profile float-xs-right\">
                                                            rootjames@gmail.com
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"rootjames@gmail.com\"/>
                                                        </div>
                                                    </div>
                                                    <div class=\"user-name-profile col-xl-12 col-md-12 col-xs-12\">
                                                        <div class=\"left-name-profile float-xs-left\">Tel No
                                                            :
                                                        </div>
                                                        <div class=\"detail-profile float-xs-right\">1234
                                                            567890
                                                        </div>
                                                        <div class=\"userlist-group\"><input type=\"text\"
                                                                                           class=\"edit-input\"
                                                                                           value=\"1234 567890\"/>
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

{% endblock %}", "ERPBundle:Admin/appsense:index.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/appsense/index.html.twig");
    }
}
