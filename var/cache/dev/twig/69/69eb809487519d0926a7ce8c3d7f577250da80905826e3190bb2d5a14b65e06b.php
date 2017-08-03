<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cea87cdf90335c03745ff0aa4e6f9d8dd2fe28fc4bcc68890613cc8c6759b44d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0477d2333e17ce31fc8ac4c8e2e361f21bf361c5d9d6ee521ffef6dcf21b2d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0477d2333e17ce31fc8ac4c8e2e361f21bf361c5d9d6ee521ffef6dcf21b2d5e->enter($__internal_0477d2333e17ce31fc8ac4c8e2e361f21bf361c5d9d6ee521ffef6dcf21b2d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ca25912055161d3467b1103ce54bbc448d9e21d7963aa2a02e1f972ab03ae5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca25912055161d3467b1103ce54bbc448d9e21d7963aa2a02e1f972ab03ae5fe->enter($__internal_ca25912055161d3467b1103ce54bbc448d9e21d7963aa2a02e1f972ab03ae5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0477d2333e17ce31fc8ac4c8e2e361f21bf361c5d9d6ee521ffef6dcf21b2d5e->leave($__internal_0477d2333e17ce31fc8ac4c8e2e361f21bf361c5d9d6ee521ffef6dcf21b2d5e_prof);

        
        $__internal_ca25912055161d3467b1103ce54bbc448d9e21d7963aa2a02e1f972ab03ae5fe->leave($__internal_ca25912055161d3467b1103ce54bbc448d9e21d7963aa2a02e1f972ab03ae5fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b68f5a3543403b9613bfa874670002f024b55957a8404a98c580a6723d61be8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68f5a3543403b9613bfa874670002f024b55957a8404a98c580a6723d61be8e->enter($__internal_b68f5a3543403b9613bfa874670002f024b55957a8404a98c580a6723d61be8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ede61d192b6655deb3257ab676bd726187c08f1e4dbae99ca432ed217c2541c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede61d192b6655deb3257ab676bd726187c08f1e4dbae99ca432ed217c2541c5->enter($__internal_ede61d192b6655deb3257ab676bd726187c08f1e4dbae99ca432ed217c2541c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ede61d192b6655deb3257ab676bd726187c08f1e4dbae99ca432ed217c2541c5->leave($__internal_ede61d192b6655deb3257ab676bd726187c08f1e4dbae99ca432ed217c2541c5_prof);

        
        $__internal_b68f5a3543403b9613bfa874670002f024b55957a8404a98c580a6723d61be8e->leave($__internal_b68f5a3543403b9613bfa874670002f024b55957a8404a98c580a6723d61be8e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ad11e4debb6faea53ba3519878117ab2bf90611991be13f782efdb536320209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad11e4debb6faea53ba3519878117ab2bf90611991be13f782efdb536320209->enter($__internal_4ad11e4debb6faea53ba3519878117ab2bf90611991be13f782efdb536320209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e663336ec76dfa3606f130cbb267471b2fddd5a1a0f13eac6d77292661416029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e663336ec76dfa3606f130cbb267471b2fddd5a1a0f13eac6d77292661416029->enter($__internal_e663336ec76dfa3606f130cbb267471b2fddd5a1a0f13eac6d77292661416029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e663336ec76dfa3606f130cbb267471b2fddd5a1a0f13eac6d77292661416029->leave($__internal_e663336ec76dfa3606f130cbb267471b2fddd5a1a0f13eac6d77292661416029_prof);

        
        $__internal_4ad11e4debb6faea53ba3519878117ab2bf90611991be13f782efdb536320209->leave($__internal_4ad11e4debb6faea53ba3519878117ab2bf90611991be13f782efdb536320209_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14990c592766536225ff205bc2464046e00c73b97bcdbdea9585a07aaf6048b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14990c592766536225ff205bc2464046e00c73b97bcdbdea9585a07aaf6048b9->enter($__internal_14990c592766536225ff205bc2464046e00c73b97bcdbdea9585a07aaf6048b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1258482d8e7690c97d1a259f73f6dd92681dae88b9f37856da5932e072531a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1258482d8e7690c97d1a259f73f6dd92681dae88b9f37856da5932e072531a8->enter($__internal_d1258482d8e7690c97d1a259f73f6dd92681dae88b9f37856da5932e072531a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d1258482d8e7690c97d1a259f73f6dd92681dae88b9f37856da5932e072531a8->leave($__internal_d1258482d8e7690c97d1a259f73f6dd92681dae88b9f37856da5932e072531a8_prof);

        
        $__internal_14990c592766536225ff205bc2464046e00c73b97bcdbdea9585a07aaf6048b9->leave($__internal_14990c592766536225ff205bc2464046e00c73b97bcdbdea9585a07aaf6048b9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
