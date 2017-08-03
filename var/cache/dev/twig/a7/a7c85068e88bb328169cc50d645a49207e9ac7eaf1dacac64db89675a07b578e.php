<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a1e256a5e733d8e9f8302867723ee76c0990904bf93003d075a063f8159a4392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3f4fc6a15e6f3059a6eebbe5dc276d060df058821131388587a8aaac661d619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f4fc6a15e6f3059a6eebbe5dc276d060df058821131388587a8aaac661d619->enter($__internal_a3f4fc6a15e6f3059a6eebbe5dc276d060df058821131388587a8aaac661d619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_824ae165c07069107ef2c1c862658a6cf4f7724f93ad5d392e4bacbb2f9c33ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824ae165c07069107ef2c1c862658a6cf4f7724f93ad5d392e4bacbb2f9c33ef->enter($__internal_824ae165c07069107ef2c1c862658a6cf4f7724f93ad5d392e4bacbb2f9c33ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from backend.themesadmin.com/backend/admin_icon_menu/default/admin_default/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2017 07:20:03 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"bootstrap default admin template\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Login | Admin Template</title>

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
                    atok: \"0058b165fc78163e6d148677944b9ad6\",
                    petok: \"3e8a2ce822d1387f120c056146c5a74dbd30af7b-1496909676-1800\",
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
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/icons_fonts/elegant_font/elegant.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/global/css/global.css"), "html", null, true);
        echo "\"/>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/login/login-v2/css/login_v2.css"), "html", null, true);
        echo "\"/>

</head>
<body>

<div class=\"login_v2\">
    <div class=\"login_v2_main\">
        <div class=\"login_v2_contain\">
            <div class=\"login_v2_form text-xs-center\">
                <i class=\"login_v2_profile_icon icon icon_lock\"></i>
                <h5>Sign into your account</h5>
                ";
        // line 99
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 100
            echo "                    <strong class=\"text text-danger\" style=\"margin-buttom:15px;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), array(), "messages"), "html", null, true);
            echo "</strong>
                ";
        }
        // line 102
        echo "                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
                    <div class=\"login_v2_text_field\">
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                               required=\"required\" placeholder=\"saisie username ou email\"/>
                        <i class=\"icon icon_mail\"></i>
                    </div>
                    <div class=\"login_v2_text_field\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  placeholder=\"saisie votre mot de passe\"/>
                        <i class=\"icon icon_lock\"></i>
                    </div>
                    <div class=\"checkbox-login login_v2_check\">
                        <div class=\"checkbox-squared\">
                            <input type=\"checkbox\" id=\"checkbox-squared1\" name=\"_remember_me\" value=\"on\"/>
                            <label for=\"checkbox-squared1\"></label>
                            <span>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </form>
            </div>
            <div class=\"login_v2_reserved_text text-xs-center bold-fonts\">
                <p>© 2017. all right reserved.</p>
            </div>
        </div>
    </div>
</div>


<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tether/dist/js/tether.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/global/js/global.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/global_validation.js"), "html", null, true);
        echo "\"></script>
</body>

<!-- Mirrored from backend.themesadmin.com/backend/admin_icon_menu/default/admin_default/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2017 07:20:04 GMT -->
</html>";
        
        $__internal_a3f4fc6a15e6f3059a6eebbe5dc276d060df058821131388587a8aaac661d619->leave($__internal_a3f4fc6a15e6f3059a6eebbe5dc276d060df058821131388587a8aaac661d619_prof);

        
        $__internal_824ae165c07069107ef2c1c862658a6cf4f7724f93ad5d392e4bacbb2f9c33ef->leave($__internal_824ae165c07069107ef2c1c862658a6cf4f7724f93ad5d392e4bacbb2f9c33ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 135,  208 => 134,  204 => 133,  200 => 132,  196 => 131,  182 => 120,  176 => 117,  161 => 105,  156 => 103,  151 => 102,  145 => 100,  143 => 99,  129 => 88,  125 => 87,  121 => 86,  117 => 85,  113 => 84,  109 => 83,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from backend.themesadmin.com/backend/admin_icon_menu/default/admin_default/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2017 07:20:03 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"bootstrap default admin template\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>Login | Admin Template</title>

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
                    atok: \"0058b165fc78163e6d148677944b9ad6\",
                    petok: \"3e8a2ce822d1387f120c056146c5a74dbd30af7b-1496909676-1800\",
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/bootstrap.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/icons_fonts/elegant_font/elegant.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/global/css/global.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/components.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layouts/layout-icon-menu/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/login/login-v2/css/login_v2.css') }}\"/>

</head>
<body>

<div class=\"login_v2\">
    <div class=\"login_v2_main\">
        <div class=\"login_v2_contain\">
            <div class=\"login_v2_form text-xs-center\">
                <i class=\"login_v2_profile_icon icon icon_lock\"></i>
                <h5>Sign into your account</h5>
                {% if error %}
                    <strong class=\"text text-danger\" style=\"margin-buttom:15px;\">{{ error.messageKey|trans({}, 'messages') }}</strong>
                {% endif %}
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                    <div class=\"login_v2_text_field\">
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                               required=\"required\" placeholder=\"saisie username ou email\"/>
                        <i class=\"icon icon_mail\"></i>
                    </div>
                    <div class=\"login_v2_text_field\">
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  placeholder=\"saisie votre mot de passe\"/>
                        <i class=\"icon icon_lock\"></i>
                    </div>
                    <div class=\"checkbox-login login_v2_check\">
                        <div class=\"checkbox-squared\">
                            <input type=\"checkbox\" id=\"checkbox-squared1\" name=\"_remember_me\" value=\"on\"/>
                            <label for=\"checkbox-squared1\"></label>
                            <span>{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</span>
                        </div>
                    </div>
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\"/>
                </form>
            </div>
            <div class=\"login_v2_reserved_text text-xs-center bold-fonts\">
                <p>© 2017. all right reserved.</p>
            </div>
        </div>
    </div>
</div>


<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/tether/dist/js/tether.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/pages/global/js/global.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/global_validation.js') }}\"></script>
</body>

<!-- Mirrored from backend.themesadmin.com/backend/admin_icon_menu/default/admin_default/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2017 07:20:04 GMT -->
</html>", "FOSUserBundle:Security:login.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
