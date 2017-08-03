<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2f5e5d5b599ed82f9368e899f9e971dd96869b6a94a7ad591222afe665ee8f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51c0de30da9ecce7e38a4fe8228bf1f7f5ec6c6914d3081cafaa348f2fad1772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c0de30da9ecce7e38a4fe8228bf1f7f5ec6c6914d3081cafaa348f2fad1772->enter($__internal_51c0de30da9ecce7e38a4fe8228bf1f7f5ec6c6914d3081cafaa348f2fad1772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_14b9943fbe931edd7c0b147aaab31e5bf0a0a6fd290e62c8fbbbe88b268292b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b9943fbe931edd7c0b147aaab31e5bf0a0a6fd290e62c8fbbbe88b268292b4->enter($__internal_14b9943fbe931edd7c0b147aaab31e5bf0a0a6fd290e62c8fbbbe88b268292b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_51c0de30da9ecce7e38a4fe8228bf1f7f5ec6c6914d3081cafaa348f2fad1772->leave($__internal_51c0de30da9ecce7e38a4fe8228bf1f7f5ec6c6914d3081cafaa348f2fad1772_prof);

        
        $__internal_14b9943fbe931edd7c0b147aaab31e5bf0a0a6fd290e62c8fbbbe88b268292b4->leave($__internal_14b9943fbe931edd7c0b147aaab31e5bf0a0a6fd290e62c8fbbbe88b268292b4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a26949178c1945838d873707a343e5bfb71ea92423f4ac9fefcddd81171cd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a26949178c1945838d873707a343e5bfb71ea92423f4ac9fefcddd81171cd8b->enter($__internal_3a26949178c1945838d873707a343e5bfb71ea92423f4ac9fefcddd81171cd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7b7cae675b888e8cf24c856dfc6304432e6a27feb0d245022585068a9417615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b7cae675b888e8cf24c856dfc6304432e6a27feb0d245022585068a9417615->enter($__internal_c7b7cae675b888e8cf24c856dfc6304432e6a27feb0d245022585068a9417615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c7b7cae675b888e8cf24c856dfc6304432e6a27feb0d245022585068a9417615->leave($__internal_c7b7cae675b888e8cf24c856dfc6304432e6a27feb0d245022585068a9417615_prof);

        
        $__internal_3a26949178c1945838d873707a343e5bfb71ea92423f4ac9fefcddd81171cd8b->leave($__internal_3a26949178c1945838d873707a343e5bfb71ea92423f4ac9fefcddd81171cd8b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
