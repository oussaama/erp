<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6fbf2302d027ae644ccce9f3d520b11b1fb80e4f09e5b5f70a525403f4048bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_526f7a1fb32909d9db62669999432d3c3e6a46506c8d0b9dcd5de35cc2f74304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526f7a1fb32909d9db62669999432d3c3e6a46506c8d0b9dcd5de35cc2f74304->enter($__internal_526f7a1fb32909d9db62669999432d3c3e6a46506c8d0b9dcd5de35cc2f74304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_33af50489586d06d19f64753c166c11277c56ec4016825c149748d7fdf271fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33af50489586d06d19f64753c166c11277c56ec4016825c149748d7fdf271fde->enter($__internal_33af50489586d06d19f64753c166c11277c56ec4016825c149748d7fdf271fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_526f7a1fb32909d9db62669999432d3c3e6a46506c8d0b9dcd5de35cc2f74304->leave($__internal_526f7a1fb32909d9db62669999432d3c3e6a46506c8d0b9dcd5de35cc2f74304_prof);

        
        $__internal_33af50489586d06d19f64753c166c11277c56ec4016825c149748d7fdf271fde->leave($__internal_33af50489586d06d19f64753c166c11277c56ec4016825c149748d7fdf271fde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cad96582802a421d16edb510596e2b79049c2091c41aa2c879fe408bde866c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad96582802a421d16edb510596e2b79049c2091c41aa2c879fe408bde866c94->enter($__internal_cad96582802a421d16edb510596e2b79049c2091c41aa2c879fe408bde866c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3e7acd5bd38326d9370a589c1f9de19f5ecedab417ed970da8f4a2de950f87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e7acd5bd38326d9370a589c1f9de19f5ecedab417ed970da8f4a2de950f87f->enter($__internal_f3e7acd5bd38326d9370a589c1f9de19f5ecedab417ed970da8f4a2de950f87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f3e7acd5bd38326d9370a589c1f9de19f5ecedab417ed970da8f4a2de950f87f->leave($__internal_f3e7acd5bd38326d9370a589c1f9de19f5ecedab417ed970da8f4a2de950f87f_prof);

        
        $__internal_cad96582802a421d16edb510596e2b79049c2091c41aa2c879fe408bde866c94->leave($__internal_cad96582802a421d16edb510596e2b79049c2091c41aa2c879fe408bde866c94_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1ca620c13c17fa79ddfdcd27e322362be66d42881fd19f13df9fc2d43dd04af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ca620c13c17fa79ddfdcd27e322362be66d42881fd19f13df9fc2d43dd04af->enter($__internal_d1ca620c13c17fa79ddfdcd27e322362be66d42881fd19f13df9fc2d43dd04af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_025aaa10c689c3775661ea1e0b5c9617d816566af23b9acbb0ce279bbbe6933c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025aaa10c689c3775661ea1e0b5c9617d816566af23b9acbb0ce279bbbe6933c->enter($__internal_025aaa10c689c3775661ea1e0b5c9617d816566af23b9acbb0ce279bbbe6933c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_025aaa10c689c3775661ea1e0b5c9617d816566af23b9acbb0ce279bbbe6933c->leave($__internal_025aaa10c689c3775661ea1e0b5c9617d816566af23b9acbb0ce279bbbe6933c_prof);

        
        $__internal_d1ca620c13c17fa79ddfdcd27e322362be66d42881fd19f13df9fc2d43dd04af->leave($__internal_d1ca620c13c17fa79ddfdcd27e322362be66d42881fd19f13df9fc2d43dd04af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
