<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c4cb94625c1123881cb38d3d23abfb0b926e87cc57cd1b1c1266e7033c2bb1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_916616695172ae323efcbce5c63ffe64f2a18075df8264ab1fb5effa2adb7558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916616695172ae323efcbce5c63ffe64f2a18075df8264ab1fb5effa2adb7558->enter($__internal_916616695172ae323efcbce5c63ffe64f2a18075df8264ab1fb5effa2adb7558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0ce82c2ff43db4410ce64002683481469c1298cb31e84d8fd43d247df0b15881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce82c2ff43db4410ce64002683481469c1298cb31e84d8fd43d247df0b15881->enter($__internal_0ce82c2ff43db4410ce64002683481469c1298cb31e84d8fd43d247df0b15881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_916616695172ae323efcbce5c63ffe64f2a18075df8264ab1fb5effa2adb7558->leave($__internal_916616695172ae323efcbce5c63ffe64f2a18075df8264ab1fb5effa2adb7558_prof);

        
        $__internal_0ce82c2ff43db4410ce64002683481469c1298cb31e84d8fd43d247df0b15881->leave($__internal_0ce82c2ff43db4410ce64002683481469c1298cb31e84d8fd43d247df0b15881_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ac9108a8323e6d7e07a471fb2a30f5b546d082a0650dd818dd0d5b00fdfde49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac9108a8323e6d7e07a471fb2a30f5b546d082a0650dd818dd0d5b00fdfde49->enter($__internal_8ac9108a8323e6d7e07a471fb2a30f5b546d082a0650dd818dd0d5b00fdfde49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ce070d0b2a0383450dc5797c2a3ff118ade9b5f49bd503041fe1537ae8d1263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce070d0b2a0383450dc5797c2a3ff118ade9b5f49bd503041fe1537ae8d1263->enter($__internal_8ce070d0b2a0383450dc5797c2a3ff118ade9b5f49bd503041fe1537ae8d1263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8ce070d0b2a0383450dc5797c2a3ff118ade9b5f49bd503041fe1537ae8d1263->leave($__internal_8ce070d0b2a0383450dc5797c2a3ff118ade9b5f49bd503041fe1537ae8d1263_prof);

        
        $__internal_8ac9108a8323e6d7e07a471fb2a30f5b546d082a0650dd818dd0d5b00fdfde49->leave($__internal_8ac9108a8323e6d7e07a471fb2a30f5b546d082a0650dd818dd0d5b00fdfde49_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_58bc48bcaeb8d4a9f6366b67549fc948d8a19841b3609547659ef8b67fc5dd59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bc48bcaeb8d4a9f6366b67549fc948d8a19841b3609547659ef8b67fc5dd59->enter($__internal_58bc48bcaeb8d4a9f6366b67549fc948d8a19841b3609547659ef8b67fc5dd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_755464421ebcb6ed52db6e0e43646afb01df6978739f3a3d7b75de3561f9ab05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755464421ebcb6ed52db6e0e43646afb01df6978739f3a3d7b75de3561f9ab05->enter($__internal_755464421ebcb6ed52db6e0e43646afb01df6978739f3a3d7b75de3561f9ab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_755464421ebcb6ed52db6e0e43646afb01df6978739f3a3d7b75de3561f9ab05->leave($__internal_755464421ebcb6ed52db6e0e43646afb01df6978739f3a3d7b75de3561f9ab05_prof);

        
        $__internal_58bc48bcaeb8d4a9f6366b67549fc948d8a19841b3609547659ef8b67fc5dd59->leave($__internal_58bc48bcaeb8d4a9f6366b67549fc948d8a19841b3609547659ef8b67fc5dd59_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ba72dd4399d4f1813253f60d79e947101256302a8a829990c6a29337504c81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba72dd4399d4f1813253f60d79e947101256302a8a829990c6a29337504c81f->enter($__internal_9ba72dd4399d4f1813253f60d79e947101256302a8a829990c6a29337504c81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52cc6130bac0ba31c9bef2f8de00076d139a9cb68ae1ab40cd4db9944b58c7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cc6130bac0ba31c9bef2f8de00076d139a9cb68ae1ab40cd4db9944b58c7c5->enter($__internal_52cc6130bac0ba31c9bef2f8de00076d139a9cb68ae1ab40cd4db9944b58c7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52cc6130bac0ba31c9bef2f8de00076d139a9cb68ae1ab40cd4db9944b58c7c5->leave($__internal_52cc6130bac0ba31c9bef2f8de00076d139a9cb68ae1ab40cd4db9944b58c7c5_prof);

        
        $__internal_9ba72dd4399d4f1813253f60d79e947101256302a8a829990c6a29337504c81f->leave($__internal_9ba72dd4399d4f1813253f60d79e947101256302a8a829990c6a29337504c81f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
