<?php

/* ERPBundle:Admin/UniteEnseignement:update.html.twig */
class __TwigTemplate_6ebb82671fd51df5ec19001cd497e6ea4a823753614888245c7beaa7ead3213a extends Twig_Template
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
        $__internal_22179807b8e98e35d062aa29bb652a6f27982ec5edfec219e7c2eda3e709846b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22179807b8e98e35d062aa29bb652a6f27982ec5edfec219e7c2eda3e709846b->enter($__internal_22179807b8e98e35d062aa29bb652a6f27982ec5edfec219e7c2eda3e709846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement:update.html.twig"));

        $__internal_331fdaa31eb9bf9da7ba377ce8538368724b510e9c5780b52154830695515c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331fdaa31eb9bf9da7ba377ce8538368724b510e9c5780b52154830695515c9f->enter($__internal_331fdaa31eb9bf9da7ba377ce8538368724b510e9c5780b52154830695515c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement:update.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Unite_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "addClass", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
</div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_22179807b8e98e35d062aa29bb652a6f27982ec5edfec219e7c2eda3e709846b->leave($__internal_22179807b8e98e35d062aa29bb652a6f27982ec5edfec219e7c2eda3e709846b_prof);

        
        $__internal_331fdaa31eb9bf9da7ba377ce8538368724b510e9c5780b52154830695515c9f->leave($__internal_331fdaa31eb9bf9da7ba377ce8538368724b510e9c5780b52154830695515c9f_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/UniteEnseignement:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Unite_update',{'id':id}),'method':'POST','attr':{'id':'addClass','novalidate':'novalidate'}}) }}
    {{ form_widget(form) }}
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
</div>
{{ form_end(form) }}
", "ERPBundle:Admin/UniteEnseignement:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/UniteEnseignement/update.html.twig");
    }
}
