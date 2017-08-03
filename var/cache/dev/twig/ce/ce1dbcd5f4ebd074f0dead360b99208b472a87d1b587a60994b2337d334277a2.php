<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7e94c216e51ed80417e9c653cc4a1c64712b48855418ca219d6691cb0e0c0577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37986c005873ea2f77675ab4f2802c1affc42967bd5d0b1f9928bbe75643f29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37986c005873ea2f77675ab4f2802c1affc42967bd5d0b1f9928bbe75643f29e->enter($__internal_37986c005873ea2f77675ab4f2802c1affc42967bd5d0b1f9928bbe75643f29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ddd862ad9f941618c30b6cd8a0f873db9f14e2aa565d230d922259f4610ea895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd862ad9f941618c30b6cd8a0f873db9f14e2aa565d230d922259f4610ea895->enter($__internal_ddd862ad9f941618c30b6cd8a0f873db9f14e2aa565d230d922259f4610ea895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37986c005873ea2f77675ab4f2802c1affc42967bd5d0b1f9928bbe75643f29e->leave($__internal_37986c005873ea2f77675ab4f2802c1affc42967bd5d0b1f9928bbe75643f29e_prof);

        
        $__internal_ddd862ad9f941618c30b6cd8a0f873db9f14e2aa565d230d922259f4610ea895->leave($__internal_ddd862ad9f941618c30b6cd8a0f873db9f14e2aa565d230d922259f4610ea895_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_dea78427f9b37461cc329952c57fc66ef32b9c59836773f1240eccd041bc43d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea78427f9b37461cc329952c57fc66ef32b9c59836773f1240eccd041bc43d6->enter($__internal_dea78427f9b37461cc329952c57fc66ef32b9c59836773f1240eccd041bc43d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4d4820d6d93f37aeb4058b2a235ee090615b6b763da7874112db8fd67eca1bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4820d6d93f37aeb4058b2a235ee090615b6b763da7874112db8fd67eca1bff->enter($__internal_4d4820d6d93f37aeb4058b2a235ee090615b6b763da7874112db8fd67eca1bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_4d4820d6d93f37aeb4058b2a235ee090615b6b763da7874112db8fd67eca1bff->leave($__internal_4d4820d6d93f37aeb4058b2a235ee090615b6b763da7874112db8fd67eca1bff_prof);

        
        $__internal_dea78427f9b37461cc329952c57fc66ef32b9c59836773f1240eccd041bc43d6->leave($__internal_dea78427f9b37461cc329952c57fc66ef32b9c59836773f1240eccd041bc43d6_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_810e9d178138989d6d5fb067a8760deb417a151a0f67d92b19ebb511c2fe3fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810e9d178138989d6d5fb067a8760deb417a151a0f67d92b19ebb511c2fe3fee->enter($__internal_810e9d178138989d6d5fb067a8760deb417a151a0f67d92b19ebb511c2fe3fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1182d0af3291cc27a7b6bdb3e75c8aa0737360ffb1a5f2f2fb0c40837d68dd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1182d0af3291cc27a7b6bdb3e75c8aa0737360ffb1a5f2f2fb0c40837d68dd18->enter($__internal_1182d0af3291cc27a7b6bdb3e75c8aa0737360ffb1a5f2f2fb0c40837d68dd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1182d0af3291cc27a7b6bdb3e75c8aa0737360ffb1a5f2f2fb0c40837d68dd18->leave($__internal_1182d0af3291cc27a7b6bdb3e75c8aa0737360ffb1a5f2f2fb0c40837d68dd18_prof);

        
        $__internal_810e9d178138989d6d5fb067a8760deb417a151a0f67d92b19ebb511c2fe3fee->leave($__internal_810e9d178138989d6d5fb067a8760deb417a151a0f67d92b19ebb511c2fe3fee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
