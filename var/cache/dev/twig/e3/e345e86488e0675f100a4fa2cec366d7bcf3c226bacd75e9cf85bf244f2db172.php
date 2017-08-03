<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_dc314a367327cb2fc8d0eba220f775bb57b6aff981effbe10365d7f52de7976d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87bf9b8aed58eef16d6671728beeeba6968bc7552a9c9b2c5fe4ca194cf19548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bf9b8aed58eef16d6671728beeeba6968bc7552a9c9b2c5fe4ca194cf19548->enter($__internal_87bf9b8aed58eef16d6671728beeeba6968bc7552a9c9b2c5fe4ca194cf19548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ae12a898966bc2ad67da9074996bf1e8f2791b543ed0a33674a005d2feb451e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae12a898966bc2ad67da9074996bf1e8f2791b543ed0a33674a005d2feb451e9->enter($__internal_ae12a898966bc2ad67da9074996bf1e8f2791b543ed0a33674a005d2feb451e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87bf9b8aed58eef16d6671728beeeba6968bc7552a9c9b2c5fe4ca194cf19548->leave($__internal_87bf9b8aed58eef16d6671728beeeba6968bc7552a9c9b2c5fe4ca194cf19548_prof);

        
        $__internal_ae12a898966bc2ad67da9074996bf1e8f2791b543ed0a33674a005d2feb451e9->leave($__internal_ae12a898966bc2ad67da9074996bf1e8f2791b543ed0a33674a005d2feb451e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b70c404ec99efeedaeb32e3690dd03fd208536dd4bf490773511d3cb9057b2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70c404ec99efeedaeb32e3690dd03fd208536dd4bf490773511d3cb9057b2e6->enter($__internal_b70c404ec99efeedaeb32e3690dd03fd208536dd4bf490773511d3cb9057b2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d35962b35d0e772274272894a0695d4e20e370cf4657185319d310ac716ac1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35962b35d0e772274272894a0695d4e20e370cf4657185319d310ac716ac1d8->enter($__internal_d35962b35d0e772274272894a0695d4e20e370cf4657185319d310ac716ac1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d35962b35d0e772274272894a0695d4e20e370cf4657185319d310ac716ac1d8->leave($__internal_d35962b35d0e772274272894a0695d4e20e370cf4657185319d310ac716ac1d8_prof);

        
        $__internal_b70c404ec99efeedaeb32e3690dd03fd208536dd4bf490773511d3cb9057b2e6->leave($__internal_b70c404ec99efeedaeb32e3690dd03fd208536dd4bf490773511d3cb9057b2e6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
