<?php

/* ERPBundle:Admin/Class:update.html.twig */
class __TwigTemplate_cf9e51e55b9ab3295b4eab325badf5a488338cd5c0fc607dd5ec2b2797861034 extends Twig_Template
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
        $__internal_4b42dd09d23e50abd73db9049c54743cb3812d895e52a1f9d4df336cd5cf1f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b42dd09d23e50abd73db9049c54743cb3812d895e52a1f9d4df336cd5cf1f19->enter($__internal_4b42dd09d23e50abd73db9049c54743cb3812d895e52a1f9d4df336cd5cf1f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Class:update.html.twig"));

        $__internal_0fd1e53b793693701fdb68d92ae29c8d96fba0ab6877da11bbe53d5d8ee31d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd1e53b793693701fdb68d92ae29c8d96fba0ab6877da11bbe53d5d8ee31d01->enter($__internal_0fd1e53b793693701fdb68d92ae29c8d96fba0ab6877da11bbe53d5d8ee31d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Class:update.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Class_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "addClass", "novalidate" => "novalidate")));
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
        
        $__internal_4b42dd09d23e50abd73db9049c54743cb3812d895e52a1f9d4df336cd5cf1f19->leave($__internal_4b42dd09d23e50abd73db9049c54743cb3812d895e52a1f9d4df336cd5cf1f19_prof);

        
        $__internal_0fd1e53b793693701fdb68d92ae29c8d96fba0ab6877da11bbe53d5d8ee31d01->leave($__internal_0fd1e53b793693701fdb68d92ae29c8d96fba0ab6877da11bbe53d5d8ee31d01_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Class:update.html.twig";
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
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Class_update',{'id':id}),'method':'POST','attr':{'id':'addClass','novalidate':'novalidate'}}) }}
    {{ form_widget(form) }}
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
</div>
{{ form_end(form) }}
", "ERPBundle:Admin/Class:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Class/update.html.twig");
    }
}
