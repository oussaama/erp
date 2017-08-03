<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_50ea12ed8bf7d0a6d375a19696383532ebf5ed74725f489e7653c16d4dc260da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e8f13886de4b95d037ba916c0edaef7ff19d8ba28c29274aadd0a0688f037fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f13886de4b95d037ba916c0edaef7ff19d8ba28c29274aadd0a0688f037fa2->enter($__internal_e8f13886de4b95d037ba916c0edaef7ff19d8ba28c29274aadd0a0688f037fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3c79bde0be2d20b29e6da06098fae7faae594c97875c119676517ff0c9bbf756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c79bde0be2d20b29e6da06098fae7faae594c97875c119676517ff0c9bbf756->enter($__internal_3c79bde0be2d20b29e6da06098fae7faae594c97875c119676517ff0c9bbf756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8f13886de4b95d037ba916c0edaef7ff19d8ba28c29274aadd0a0688f037fa2->leave($__internal_e8f13886de4b95d037ba916c0edaef7ff19d8ba28c29274aadd0a0688f037fa2_prof);

        
        $__internal_3c79bde0be2d20b29e6da06098fae7faae594c97875c119676517ff0c9bbf756->leave($__internal_3c79bde0be2d20b29e6da06098fae7faae594c97875c119676517ff0c9bbf756_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b551f551d37df9deb4fab0c83d1bd98cd072ce88d4e1b1f56ec61628d498220c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b551f551d37df9deb4fab0c83d1bd98cd072ce88d4e1b1f56ec61628d498220c->enter($__internal_b551f551d37df9deb4fab0c83d1bd98cd072ce88d4e1b1f56ec61628d498220c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a93fd75f404b023f901ca79dc7eeeaec22d59bf8881138af6a51774472b0cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a93fd75f404b023f901ca79dc7eeeaec22d59bf8881138af6a51774472b0cc5->enter($__internal_5a93fd75f404b023f901ca79dc7eeeaec22d59bf8881138af6a51774472b0cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a93fd75f404b023f901ca79dc7eeeaec22d59bf8881138af6a51774472b0cc5->leave($__internal_5a93fd75f404b023f901ca79dc7eeeaec22d59bf8881138af6a51774472b0cc5_prof);

        
        $__internal_b551f551d37df9deb4fab0c83d1bd98cd072ce88d4e1b1f56ec61628d498220c->leave($__internal_b551f551d37df9deb4fab0c83d1bd98cd072ce88d4e1b1f56ec61628d498220c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_320b1132c6eeb2a05100a0fc70fd77a22d3e0f5064f0ac5654ab3f587d8e9140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320b1132c6eeb2a05100a0fc70fd77a22d3e0f5064f0ac5654ab3f587d8e9140->enter($__internal_320b1132c6eeb2a05100a0fc70fd77a22d3e0f5064f0ac5654ab3f587d8e9140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94ed79bd2d103cbd01b0546371f1138149def8e69ba4583024717da647b39be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ed79bd2d103cbd01b0546371f1138149def8e69ba4583024717da647b39be5->enter($__internal_94ed79bd2d103cbd01b0546371f1138149def8e69ba4583024717da647b39be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94ed79bd2d103cbd01b0546371f1138149def8e69ba4583024717da647b39be5->leave($__internal_94ed79bd2d103cbd01b0546371f1138149def8e69ba4583024717da647b39be5_prof);

        
        $__internal_320b1132c6eeb2a05100a0fc70fd77a22d3e0f5064f0ac5654ab3f587d8e9140->leave($__internal_320b1132c6eeb2a05100a0fc70fd77a22d3e0f5064f0ac5654ab3f587d8e9140_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_167b8dd48d998feb2ebae2ea59657263abd3d1b379f43d2c78ae6d8a12aed66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167b8dd48d998feb2ebae2ea59657263abd3d1b379f43d2c78ae6d8a12aed66c->enter($__internal_167b8dd48d998feb2ebae2ea59657263abd3d1b379f43d2c78ae6d8a12aed66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7398b6a9e25a29ce56e7da94b51626f96526e8d73565b229c2ecaf1022a4224a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7398b6a9e25a29ce56e7da94b51626f96526e8d73565b229c2ecaf1022a4224a->enter($__internal_7398b6a9e25a29ce56e7da94b51626f96526e8d73565b229c2ecaf1022a4224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7398b6a9e25a29ce56e7da94b51626f96526e8d73565b229c2ecaf1022a4224a->leave($__internal_7398b6a9e25a29ce56e7da94b51626f96526e8d73565b229c2ecaf1022a4224a_prof);

        
        $__internal_167b8dd48d998feb2ebae2ea59657263abd3d1b379f43d2c78ae6d8a12aed66c->leave($__internal_167b8dd48d998feb2ebae2ea59657263abd3d1b379f43d2c78ae6d8a12aed66c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
