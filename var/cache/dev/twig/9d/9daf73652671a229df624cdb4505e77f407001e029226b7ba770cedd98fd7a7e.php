<?php

/* ERPBundle:Admin/Compte:profil.html.twig */
class __TwigTemplate_b3db045c6edbd51e2ef7ed6fd68061dc2565b809f3d07a4eec62688d5a3ea3a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "ERPBundle:Admin/Compte:profil.html.twig", 1);
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
        $__internal_caa23de87b92f25b001cc3ca66a358a4018429fa6e599c435dd52cc9b536f090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa23de87b92f25b001cc3ca66a358a4018429fa6e599c435dd52cc9b536f090->enter($__internal_caa23de87b92f25b001cc3ca66a358a4018429fa6e599c435dd52cc9b536f090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:profil.html.twig"));

        $__internal_b2b38d40b2875db68679cb1ab10b0c8ef9f5a2aabceffed8a0705693e5128deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b38d40b2875db68679cb1ab10b0c8ef9f5a2aabceffed8a0705693e5128deb->enter($__internal_b2b38d40b2875db68679cb1ab10b0c8ef9f5a2aabceffed8a0705693e5128deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa23de87b92f25b001cc3ca66a358a4018429fa6e599c435dd52cc9b536f090->leave($__internal_caa23de87b92f25b001cc3ca66a358a4018429fa6e599c435dd52cc9b536f090_prof);

        
        $__internal_b2b38d40b2875db68679cb1ab10b0c8ef9f5a2aabceffed8a0705693e5128deb->leave($__internal_b2b38d40b2875db68679cb1ab10b0c8ef9f5a2aabceffed8a0705693e5128deb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b1541dba56ecdb6a559183a47a0af847272ae837b9927541eed2a17a1662f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1541dba56ecdb6a559183a47a0af847272ae837b9927541eed2a17a1662f1a->enter($__internal_6b1541dba56ecdb6a559183a47a0af847272ae837b9927541eed2a17a1662f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f77fb3e53b686b82174e17bd93b7343a5c8069ca3ecc161adf102d3d4893048a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77fb3e53b686b82174e17bd93b7343a5c8069ca3ecc161adf102d3d4893048a->enter($__internal_f77fb3e53b686b82174e17bd93b7343a5c8069ca3ecc161adf102d3d4893048a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin - Profil";
        
        $__internal_f77fb3e53b686b82174e17bd93b7343a5c8069ca3ecc161adf102d3d4893048a->leave($__internal_f77fb3e53b686b82174e17bd93b7343a5c8069ca3ecc161adf102d3d4893048a_prof);

        
        $__internal_6b1541dba56ecdb6a559183a47a0af847272ae837b9927541eed2a17a1662f1a->leave($__internal_6b1541dba56ecdb6a559183a47a0af847272ae837b9927541eed2a17a1662f1a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f029b4660eb58b41f96f5dae9e34b5b7fed379117e1c891f3676da0904caf366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f029b4660eb58b41f96f5dae9e34b5b7fed379117e1c891f3676da0904caf366->enter($__internal_f029b4660eb58b41f96f5dae9e34b5b7fed379117e1c891f3676da0904caf366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9fa423968cac9aca8cbe2c311ab0b0605aee51cd3852e6e4fe7e315d9857b597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa423968cac9aca8cbe2c311ab0b0605aee51cd3852e6e4fe7e315d9857b597->enter($__internal_9fa423968cac9aca8cbe2c311ab0b0605aee51cd3852e6e4fe7e315d9857b597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/css/layout.min.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_9fa423968cac9aca8cbe2c311ab0b0605aee51cd3852e6e4fe7e315d9857b597->leave($__internal_9fa423968cac9aca8cbe2c311ab0b0605aee51cd3852e6e4fe7e315d9857b597_prof);

        
        $__internal_f029b4660eb58b41f96f5dae9e34b5b7fed379117e1c891f3676da0904caf366->leave($__internal_f029b4660eb58b41f96f5dae9e34b5b7fed379117e1c891f3676da0904caf366_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_187f10162756befcfc825ef5db11099483c987e499626d91c9ad34278e957cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187f10162756befcfc825ef5db11099483c987e499626d91c9ad34278e957cbb->enter($__internal_187f10162756befcfc825ef5db11099483c987e499626d91c9ad34278e957cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c30285d9547a0d0b2672686ceeeff89c694a20a3e912e83883f4d9f363489758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30285d9547a0d0b2672686ceeeff89c694a20a3e912e83883f4d9f363489758->enter($__internal_c30285d9547a0d0b2672686ceeeff89c694a20a3e912e83883f4d9f363489758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
                    <h2 class=\"float-xs-left content-title-main\">Profile</h2>

                    <ol class=\"breadcrumb float-xs-right\">
                        <li class=\"breadcrumb-item\">
                            <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                        <li class=\"breadcrumb-item active\">Profile</li>
                    </ol>

                </div>
        <div class=\"col-md-12 profile-contain\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-md-5 col-xs-12 contacts\">
                    <div class=\"content text-xs-center\">
                        <div class=\"image-profile\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/profile.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"/></div>
                        <h3 class=\"name-profile\">Shane Handcomb</h3>
                        <h6 class=\"email-profile\">shanehandcomb@gmail.com</h6>
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
                            <div class=\"content activities-section\">
                                <div data-plugin=\"custom-scroll\" data-height=\"305\">
                                    <div>
                                        <h4 class=\"page-content-title\">Setting</h4>
                                        <div class=\"divider15\"></div>
                                        <ul class=\"setting-profile\">
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_house_alt\" aria-hidden=\"true\"></span>Profile</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_profile\" aria-hidden=\"true\"></span>Account</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_info_alt\" aria-hidden=\"true\"></span>Help</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"arrow_move\" aria-hidden=\"true\"></span>Apps</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_lifesaver\" aria-hidden=\"true\"></span>Display</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_key_alt\" aria-hidden=\"true\"></span>Security</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_map_alt\" aria-hidden=\"true\"></span>Location</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-9 col-md-7 col-xs-12\">
                            <div class=\"content text-xs-center\">
                                <div class=\"activities-count float-xs-left\">
                                    <a href=\"#\">
                                        <h5>Tweets</h5>
                                        <span class=\"social_twitter\" aria-hidden=\"true\"></span>
                                        <h6>2580</h6>
                                    </a>
                                </div>
                                <div class=\"activities-count float-xs-left\">
                                    <a href=\"#\">
                                        <h5>Share</h5>
                                        <span class=\"social_share\" aria-hidden=\"true\"></span>
                                        <h6>3547</h6>
                                    </a>
                                </div>
                                <div class=\"activities-count float-xs-left\">
                                    <a href=\"#\">
                                        <h5>Activities</h5>
                                        <span class=\"icon_hourglass\" aria-hidden=\"true\"></span>
                                        <h6>451</h6>
                                    </a>
                                </div>
                            </div>
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <h4 class=\"page-content-title\">Personal Information</h4>
                                        <div class=\"divider15\"></div>
                                        <div class=\"personal-info-box\">
                                            <div class=\"row\">
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">First Name :</div>
                                                    <div class=\"detail-profile float-xs-right\">Shane Handcomb</div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Post :</div>
                                                    <div class=\"detail-profile float-xs-right\">Web Developer</div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Country :</div>
                                                    <div class=\"detail-profile float-xs-right\">USA</div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Address :</div>
                                                    <div class=\"detail-profile float-xs-right\">585 Pacific St. Everett,
                                                        MA 02149
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"divider-lg-spacing\"></div>
                                    <div class=\"col-md-12\">
                                        <h4 class=\"page-content-title\">Contact Information</h4>
                                        <div class=\"divider15\"></div>
                                        <div class=\"personal-info-box\">
                                            <div class=\"row\">
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Email :</div>
                                                    <div class=\"detail-profile float-xs-right\">shanehandcomb@gmail.com
                                                    </div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Tel No :</div>
                                                    <div class=\"detail-profile float-xs-right\">1234 567890</div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Mobile No :</div>
                                                    <div class=\"detail-profile float-xs-right\">+1 123 456 7890</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12 col-xl-4 col-xs-12\">
                                            <div class=\"content setting-section\">
                                                <div data-plugin=\"custom-scroll\" data-height=\"260\">
                                                    <div>
                                                        <h4 class=\"page-content-title\">Skill</h4>
                                                        <div class=\"divider15\"></div>
                                                        <div class=\"progressbar-project\">
                                                            <div class=\"html-section\">
                                                                <h6>HTML</h6>
                                                                <div class=\"progress\">
                                                                    <progress class=\"progress progress-striped progress-success\" value=\"85\" max=\"100\"></progress>
                                                                </div>
                                                            </div>
                                                            <div class=\"html-section\">
                                                                <h6>CSS</h6>
                                                                <div class=\"progress\">
                                                                    <progress class=\"progress progress-striped progress-info\" value=\"72\" max=\"100\"></progress>
                                                                </div>
                                                            </div>
                                                            <div class=\"html-section\">
                                                                <h6>WordPress</h6>
                                                                <div class=\"progress\">
                                                                    <progress class=\"progress progress-striped progress-warning\" value=\"66\" max=\"100\"></progress>
                                                                </div>
                                                            </div>
                                                            <div class=\"html-section\">
                                                                <h6>jQuery</h6>
                                                                <div class=\"progress\">
                                                                    <progress class=\"progress progress-striped progress-danger\" value=\"77\" max=\"100\"></progress>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 col-xl-4 col-sm-12 col-xs-12\">
                                            <div class=\"content setting-section\">
                                                <h4 class=\"page-content-title\">Follow</h4>
                                                <div class=\"divider15\"></div>
                                                <div data-plugin=\"custom-scroll\" data-height=\"200\">
                                                    <div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image-profile.jpg"), "html", null, true);
        echo "\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">Meg Lanning</a></h5>
                                                                <p>PHP Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image1-profile.jpg"), "html", null, true);
        echo "\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">John Cook</a></h5>
                                                                <p>iOS Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image2-profile.jpg"), "html", null, true);
        echo "\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">Danieal Fleming</a></h5>
                                                                <p>Web Designer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image3-profile.jpg"), "html", null, true);
        echo "\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">Ricky Shane</a></h5>
                                                                <p>PHP Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image4-profile.jpg"), "html", null, true);
        echo "\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">Michael Gilly</a></h5>
                                                                <p>Web/Graphics Designer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 col-xl-4 col-sm-12 col-xs-12\">
                                            <div class=\"content accept-section text-xs-center\">
                                                <div class=\"profile-accept\">
                                                    <img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/profile.jpg"), "html", null, true);
        echo "\" alt=\"image\"/>
                                                </div>
                                                <h5 class=\"name-profile\">Shane Handcomb </h5>
                                                <h6 class=\"email-profile\">shanehandcomb@gmail.com</h6>
                                                <button class=\"btn flat-buttons accept-btn\" type=\"submit\">Accept
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"content\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-xs-12\">
                                <div class=\"nav-tab-horizontal\">
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link flat-buttons active\" data-toggle=\"tab\" href=\"#home2\"
                                               role=\"tab\">Activity</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link flat-buttons\" data-toggle=\"tab\" href=\"#profile2\"
                                               role=\"tab\">Friends</a>
                                        </li>
                                    </ul>
                                    <div class=\"divider15\"></div>
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"home2\" role=\"tabpanel\">
                                            <div class=\"activity-box\">
                                                <div class=\"first-activity-box clearfix\">
                                                    <div class=\"profile-accept float-xs-left\">
                                                        <img alt=\"Activity image\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image1-profile.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"right-side-activity float-xs-right\">
                                                        <div class=\"top-section-activity\">
                                                            <h5 class=\"float-xs-left\">John Cook</h5>
                                                            <p class=\"float-xs-right\">Active</p>
                                                        </div>
                                                        <div class=\"image-activity\">
                                                            <p class=\"des-activity\">
                                                                Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                                the coast of the Semantics, a large language ocean.
                                                            </p>
                                                            <a class=\"btn flat-buttons btn-primary float-md-left\">More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"first-activity-box clearfix\">
                                                    <div class=\"profile-accept float-xs-left\">
                                                        <img alt=\"Activity image\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image2-profile.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"right-side-activity float-xs-right\">
                                                        <div class=\"top-section-activity\">
                                                            <h5 class=\"float-xs-left\">Danieal Fleming</h5>
                                                            <p class=\"float-xs-right\">1 Hours ago</p>
                                                        </div>
                                                        <div class=\"image-activity\">
                                                            <p class=\"des-activity\">
                                                                Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                                the coast of the Semantics, a large language ocean. A
                                                                small river named Duden flows by their place and
                                                                supplies it with the necessary regelialia. It is a
                                                                paradisematic country, in which roasted parts of
                                                                sentences fly into your mouth.
                                                            </p>
                                                            <div class=\"set-image\">
                                                                <img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/book-flower.jpg"), "html", null, true);
        echo "\" class=\"image-upload-profile float-xs-left\" alt=\"Upload image\"/>
                                                                <img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/camera.jpg"), "html", null, true);
        echo "\" class=\"image-upload-profile float-xs-left\" alt=\"Upload image\"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"first-activity-box clearfix\">
                                                    <div class=\"profile-accept float-xs-left\">
                                                        <img alt=\"Activity image\" src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image3-profile.jpg"), "html", null, true);
        echo "\">
                                                    </div>
                                                    <div class=\"right-side-activity float-xs-right\">
                                                        <div class=\"top-section-activity\">
                                                            <h5 class=\"float-xs-left\">Ricky
                                                                Shane<span>has birthday</span></h5>
                                                            <p class=\"float-xs-right\">2 Day ago</p>
                                                        </div>
                                                        <div class=\"image-activity\">
                                                            <p class=\"des-activity\">
                                                                Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                                the coast of the Semantics, a large language ocean. A
                                                                small river named Duden flows by their place and
                                                                supplies it with the necessary regelialia. It is a
                                                                paradisematic country, in which roasted parts of
                                                                sentences fly into your mouth. Even the all-powerful
                                                                Pointing has no control about the blind texts it is an
                                                                almost unorthographic life One day however a small line
                                                                of blind text by the name of Lorem Ipsum decided to
                                                                leave.
                                                            </p>
                                                            <a class=\"btn flat-buttons btn-primary float-md-left\">More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane\" id=\"profile2\" role=\"tabpanel\">
                                            <div class=\"row\">
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image1-profile.jpg"), "html", null, true);
        echo "\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">John Cook</h5>
                                                        <h6 class=\"email-profile\">johncook@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image2-profile.jpg"), "html", null, true);
        echo "\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Danieal Fleming</h5>
                                                        <h6 class=\"email-profile\">danieal@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image3-profile.jpg"), "html", null, true);
        echo "\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Ricky Shane</h5>
                                                        <h6 class=\"email-profile\">rickyshane@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image4-profile.jpg"), "html", null, true);
        echo "\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Michael Gilly</h5>
                                                        <h6 class=\"email-profile\">michaelgilly@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image5-profile.jpg"), "html", null, true);
        echo "\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">James Ross</h5>
                                                        <h6 class=\"email-profile\">jamesross@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image6-profile.jpg"), "html", null, true);
        echo "\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Martin Taylor</h5>
                                                        <h6 class=\"email-profile\">martintaylor@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image7-profile.jpg"), "html", null, true);
        echo "\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Shane Butler</h5>
                                                        <h6 class=\"email-profile\">shanebutler@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/image/image8-profile.jpg"), "html", null, true);
        echo "\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Jimmy Joseph</h5>
                                                        <h6 class=\"email-profile\">jimmyjoseph@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"content\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h4 class=\"page-content-title\">Message</h4>
                                <div class=\"divider15\"></div>
                                <form action=\"javascript:void(0)\" method=\"post\" class=\"message-profile\">
                                    <textarea placeholder=\"Message...\"></textarea>
                                    <button class=\"btn flat-buttons btn-primary float-md-left\" type=\"submit\">Search
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
";
        
        $__internal_c30285d9547a0d0b2672686ceeeff89c694a20a3e912e83883f4d9f363489758->leave($__internal_c30285d9547a0d0b2672686ceeeff89c694a20a3e912e83883f4d9f363489758_prof);

        
        $__internal_187f10162756befcfc825ef5db11099483c987e499626d91c9ad34278e957cbb->leave($__internal_187f10162756befcfc825ef5db11099483c987e499626d91c9ad34278e957cbb_prof);

    }

    // line 519
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_833dbe6dadcb15c5e1b8cb1c7b2a0589c094293ff9319aa27179b7e3d2e68dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833dbe6dadcb15c5e1b8cb1c7b2a0589c094293ff9319aa27179b7e3d2e68dcd->enter($__internal_833dbe6dadcb15c5e1b8cb1c7b2a0589c094293ff9319aa27179b7e3d2e68dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_47840524c450a1bb20e9a16e619e7c34f962b70cbc3e1f45ce2c3581fd5106f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47840524c450a1bb20e9a16e619e7c34f962b70cbc3e1f45ce2c3581fd5106f5->enter($__internal_47840524c450a1bb20e9a16e619e7c34f962b70cbc3e1f45ce2c3581fd5106f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 520
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/screenfull.js/dist/screenfull.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\".";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/site-settings.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout-left-icon-menu/js/layout.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_47840524c450a1bb20e9a16e619e7c34f962b70cbc3e1f45ce2c3581fd5106f5->leave($__internal_47840524c450a1bb20e9a16e619e7c34f962b70cbc3e1f45ce2c3581fd5106f5_prof);

        
        $__internal_833dbe6dadcb15c5e1b8cb1c7b2a0589c094293ff9319aa27179b7e3d2e68dcd->leave($__internal_833dbe6dadcb15c5e1b8cb1c7b2a0589c094293ff9319aa27179b7e3d2e68dcd_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Compte:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 530,  741 => 529,  737 => 528,  733 => 527,  729 => 526,  725 => 525,  721 => 524,  717 => 523,  713 => 522,  709 => 521,  704 => 520,  695 => 519,  654 => 488,  641 => 478,  628 => 468,  615 => 458,  602 => 448,  589 => 438,  576 => 428,  563 => 418,  527 => 385,  517 => 378,  513 => 377,  491 => 358,  468 => 338,  432 => 305,  415 => 291,  404 => 283,  393 => 275,  382 => 267,  371 => 259,  213 => 104,  193 => 86,  184 => 85,  172 => 83,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  152 => 78,  148 => 77,  144 => 76,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
{% block title %}Admin - Profil{% endblock %}
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
    <link id=\"site-color\" rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/color/light/color-default.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/switchery/dist/switchery.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-left-icon-menu/css/layout.min.css') }}\"/>
{% endblock %}
{% block body %}
    <section id=\"content-wrapper\">
        <div class=\"site-content-title\">
                    <h2 class=\"float-xs-left content-title-main\">Profile</h2>

                    <ol class=\"breadcrumb float-xs-right\">
                        <li class=\"breadcrumb-item\">
                            <span class=\"fs1\" aria-hidden=\"true\" data-icon=\"\"></span>
                            <a href=\"#\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                        <li class=\"breadcrumb-item active\">Profile</li>
                    </ol>

                </div>
        <div class=\"col-md-12 profile-contain\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-md-5 col-xs-12 contacts\">
                    <div class=\"content text-xs-center\">
                        <div class=\"image-profile\"><img src=\"{{ asset(\"assets/global/image/profile.jpg\") }}\" alt=\"Profile image\"/></div>
                        <h3 class=\"name-profile\">Shane Handcomb</h3>
                        <h6 class=\"email-profile\">shanehandcomb@gmail.com</h6>
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
                            <div class=\"content activities-section\">
                                <div data-plugin=\"custom-scroll\" data-height=\"305\">
                                    <div>
                                        <h4 class=\"page-content-title\">Setting</h4>
                                        <div class=\"divider15\"></div>
                                        <ul class=\"setting-profile\">
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_house_alt\" aria-hidden=\"true\"></span>Profile</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_profile\" aria-hidden=\"true\"></span>Account</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_info_alt\" aria-hidden=\"true\"></span>Help</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"arrow_move\" aria-hidden=\"true\"></span>Apps</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_lifesaver\" aria-hidden=\"true\"></span>Display</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_key_alt\" aria-hidden=\"true\"></span>Security</a></li>
                                            <li><a href=\"javascript:void(0)\" class=\"flat-buttons\"><span class=\"icon_map_alt\" aria-hidden=\"true\"></span>Location</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-9 col-md-7 col-xs-12\">
                            <div class=\"content text-xs-center\">
                                <div class=\"activities-count float-xs-left\">
                                    <a href=\"#\">
                                        <h5>Tweets</h5>
                                        <span class=\"social_twitter\" aria-hidden=\"true\"></span>
                                        <h6>2580</h6>
                                    </a>
                                </div>
                                <div class=\"activities-count float-xs-left\">
                                    <a href=\"#\">
                                        <h5>Share</h5>
                                        <span class=\"social_share\" aria-hidden=\"true\"></span>
                                        <h6>3547</h6>
                                    </a>
                                </div>
                                <div class=\"activities-count float-xs-left\">
                                    <a href=\"#\">
                                        <h5>Activities</h5>
                                        <span class=\"icon_hourglass\" aria-hidden=\"true\"></span>
                                        <h6>451</h6>
                                    </a>
                                </div>
                            </div>
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <h4 class=\"page-content-title\">Personal Information</h4>
                                        <div class=\"divider15\"></div>
                                        <div class=\"personal-info-box\">
                                            <div class=\"row\">
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">First Name :</div>
                                                    <div class=\"detail-profile float-xs-right\">Shane Handcomb</div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Post :</div>
                                                    <div class=\"detail-profile float-xs-right\">Web Developer</div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Country :</div>
                                                    <div class=\"detail-profile float-xs-right\">USA</div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Address :</div>
                                                    <div class=\"detail-profile float-xs-right\">585 Pacific St. Everett,
                                                        MA 02149
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"divider-lg-spacing\"></div>
                                    <div class=\"col-md-12\">
                                        <h4 class=\"page-content-title\">Contact Information</h4>
                                        <div class=\"divider15\"></div>
                                        <div class=\"personal-info-box\">
                                            <div class=\"row\">
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Email :</div>
                                                    <div class=\"detail-profile float-xs-right\">shanehandcomb@gmail.com
                                                    </div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Tel No :</div>
                                                    <div class=\"detail-profile float-xs-right\">1234 567890</div>
                                                </div>
                                                <div class=\"user-name-profile col-xl-6 col-md-12 col-xs-12\">
                                                    <div class=\"left-name-profile float-xs-left\">Mobile No :</div>
                                                    <div class=\"detail-profile float-xs-right\">+1 123 456 7890</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12 col-xl-4 col-xs-12\">
                                            <div class=\"content setting-section\">
                                                <div data-plugin=\"custom-scroll\" data-height=\"260\">
                                                    <div>
                                                        <h4 class=\"page-content-title\">Skill</h4>
                                                        <div class=\"divider15\"></div>
                                                        <div class=\"progressbar-project\">
                                                            <div class=\"html-section\">
                                                                <h6>HTML</h6>
                                                                <div class=\"progress\">
                                                                    <progress class=\"progress progress-striped progress-success\" value=\"85\" max=\"100\"></progress>
                                                                </div>
                                                            </div>
                                                            <div class=\"html-section\">
                                                                <h6>CSS</h6>
                                                                <div class=\"progress\">
                                                                    <progress class=\"progress progress-striped progress-info\" value=\"72\" max=\"100\"></progress>
                                                                </div>
                                                            </div>
                                                            <div class=\"html-section\">
                                                                <h6>WordPress</h6>
                                                                <div class=\"progress\">
                                                                    <progress class=\"progress progress-striped progress-warning\" value=\"66\" max=\"100\"></progress>
                                                                </div>
                                                            </div>
                                                            <div class=\"html-section\">
                                                                <h6>jQuery</h6>
                                                                <div class=\"progress\">
                                                                    <progress class=\"progress progress-striped progress-danger\" value=\"77\" max=\"100\"></progress>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 col-xl-4 col-sm-12 col-xs-12\">
                                            <div class=\"content setting-section\">
                                                <h4 class=\"page-content-title\">Follow</h4>
                                                <div class=\"divider15\"></div>
                                                <div data-plugin=\"custom-scroll\" data-height=\"200\">
                                                    <div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"{{ asset('assets/global/image/image-profile.jpg') }}\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">Meg Lanning</a></h5>
                                                                <p>PHP Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"{{ asset('assets/global/image/image1-profile.jpg') }}\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">John Cook</a></h5>
                                                                <p>iOS Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"{{ asset('assets/global/image/image2-profile.jpg') }}\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">Danieal Fleming</a></h5>
                                                                <p>Web Designer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"{{ asset('assets/global/image/image3-profile.jpg') }}\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">Ricky Shane</a></h5>
                                                                <p>PHP Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"activities-profile follow-profile\">
                                                            <div class=\"img-activities-profile float-xs-left\"><img src=\"{{ asset('assets/global/image/image4-profile.jpg') }}\" alt=\"Follow image\"/>
                                                            </div>
                                                            <div class=\"right-activities-profile float-xs-left\">
                                                                <h5><a href=\"#\">Michael Gilly</a></h5>
                                                                <p>Web/Graphics Designer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 col-xl-4 col-sm-12 col-xs-12\">
                                            <div class=\"content accept-section text-xs-center\">
                                                <div class=\"profile-accept\">
                                                    <img src=\"{{ asset('assets/global/image/profile.jpg') }}\" alt=\"image\"/>
                                                </div>
                                                <h5 class=\"name-profile\">Shane Handcomb </h5>
                                                <h6 class=\"email-profile\">shanehandcomb@gmail.com</h6>
                                                <button class=\"btn flat-buttons accept-btn\" type=\"submit\">Accept
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"content\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-xs-12\">
                                <div class=\"nav-tab-horizontal\">
                                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link flat-buttons active\" data-toggle=\"tab\" href=\"#home2\"
                                               role=\"tab\">Activity</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link flat-buttons\" data-toggle=\"tab\" href=\"#profile2\"
                                               role=\"tab\">Friends</a>
                                        </li>
                                    </ul>
                                    <div class=\"divider15\"></div>
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"home2\" role=\"tabpanel\">
                                            <div class=\"activity-box\">
                                                <div class=\"first-activity-box clearfix\">
                                                    <div class=\"profile-accept float-xs-left\">
                                                        <img alt=\"Activity image\" src=\"{{ asset('assets/global/image/image1-profile.jpg') }}\">
                                                    </div>
                                                    <div class=\"right-side-activity float-xs-right\">
                                                        <div class=\"top-section-activity\">
                                                            <h5 class=\"float-xs-left\">John Cook</h5>
                                                            <p class=\"float-xs-right\">Active</p>
                                                        </div>
                                                        <div class=\"image-activity\">
                                                            <p class=\"des-activity\">
                                                                Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                                the coast of the Semantics, a large language ocean.
                                                            </p>
                                                            <a class=\"btn flat-buttons btn-primary float-md-left\">More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"first-activity-box clearfix\">
                                                    <div class=\"profile-accept float-xs-left\">
                                                        <img alt=\"Activity image\" src=\"{{ asset('assets/global/image/image2-profile.jpg') }}\">
                                                    </div>
                                                    <div class=\"right-side-activity float-xs-right\">
                                                        <div class=\"top-section-activity\">
                                                            <h5 class=\"float-xs-left\">Danieal Fleming</h5>
                                                            <p class=\"float-xs-right\">1 Hours ago</p>
                                                        </div>
                                                        <div class=\"image-activity\">
                                                            <p class=\"des-activity\">
                                                                Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                                the coast of the Semantics, a large language ocean. A
                                                                small river named Duden flows by their place and
                                                                supplies it with the necessary regelialia. It is a
                                                                paradisematic country, in which roasted parts of
                                                                sentences fly into your mouth.
                                                            </p>
                                                            <div class=\"set-image\">
                                                                <img src=\"{{ asset('assets/global/image/book-flower.jpg') }}\" class=\"image-upload-profile float-xs-left\" alt=\"Upload image\"/>
                                                                <img src=\"{{ asset('assets/global/image/camera.jpg') }}\" class=\"image-upload-profile float-xs-left\" alt=\"Upload image\"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"first-activity-box clearfix\">
                                                    <div class=\"profile-accept float-xs-left\">
                                                        <img alt=\"Activity image\" src=\"{{ asset('assets/global/image/image3-profile.jpg') }}\">
                                                    </div>
                                                    <div class=\"right-side-activity float-xs-right\">
                                                        <div class=\"top-section-activity\">
                                                            <h5 class=\"float-xs-left\">Ricky
                                                                Shane<span>has birthday</span></h5>
                                                            <p class=\"float-xs-right\">2 Day ago</p>
                                                        </div>
                                                        <div class=\"image-activity\">
                                                            <p class=\"des-activity\">
                                                                Far far away, behind the word mountains, far from the
                                                                countries Vokalia and Consonantia, there live the blind
                                                                texts. Separated they live in Bookmarksgrove right at
                                                                the coast of the Semantics, a large language ocean. A
                                                                small river named Duden flows by their place and
                                                                supplies it with the necessary regelialia. It is a
                                                                paradisematic country, in which roasted parts of
                                                                sentences fly into your mouth. Even the all-powerful
                                                                Pointing has no control about the blind texts it is an
                                                                almost unorthographic life One day however a small line
                                                                of blind text by the name of Lorem Ipsum decided to
                                                                leave.
                                                            </p>
                                                            <a class=\"btn flat-buttons btn-primary float-md-left\">More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tab-pane\" id=\"profile2\" role=\"tabpanel\">
                                            <div class=\"row\">
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image1-profile.jpg') }}\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">John Cook</h5>
                                                        <h6 class=\"email-profile\">johncook@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image2-profile.jpg') }}\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Danieal Fleming</h5>
                                                        <h6 class=\"email-profile\">danieal@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image3-profile.jpg') }}\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Ricky Shane</h5>
                                                        <h6 class=\"email-profile\">rickyshane@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image4-profile.jpg') }}\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Michael Gilly</h5>
                                                        <h6 class=\"email-profile\">michaelgilly@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image5-profile.jpg') }}\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">James Ross</h5>
                                                        <h6 class=\"email-profile\">jamesross@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image6-profile.jpg') }}\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Martin Taylor</h5>
                                                        <h6 class=\"email-profile\">martintaylor@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image7-profile.jpg') }}\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Shane Butler</h5>
                                                        <h6 class=\"email-profile\">shanebutler@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                                <div class=\"col-xl-3 col-md-4 col-sm-6 col-xs-12\">
                                                    <div class=\"friend-list-box content text-xs-center\">
                                                        <div class=\"image-profile\"><img src=\"{{ asset('assets/global/image/image8-profile.jpg') }}\" alt=\"Friend image\"/>
                                                        </div>
                                                        <h5 class=\"name-profile\">Jimmy Joseph</h5>
                                                        <h6 class=\"email-profile\">jimmyjoseph@gmail.com</h6>
                                                        <h6 class=\"email-profile phone-no-profile\">+1 123 456 7890</h6>
                                                        <a class=\"btn flat-buttons btn-primary site-btn\">Friend</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"content\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h4 class=\"page-content-title\">Message</h4>
                                <div class=\"divider15\"></div>
                                <form action=\"javascript:void(0)\" method=\"post\" class=\"message-profile\">
                                    <textarea placeholder=\"Message...\"></textarea>
                                    <button class=\"btn flat-buttons btn-primary float-md-left\" type=\"submit\">Search
                                    </button>
                                </form>
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
    <script type=\"text/javascript\" src=\".{{ asset('assets/global/plugins/Waves/dist/waves.min.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/classie/classie.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/js/site-settings.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/layouts/layout-left-icon-menu/js/layout.min.js') }}\"></script>
{% endblock %}", "ERPBundle:Admin/Compte:profil.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Compte/profil.html.twig");
    }
}
