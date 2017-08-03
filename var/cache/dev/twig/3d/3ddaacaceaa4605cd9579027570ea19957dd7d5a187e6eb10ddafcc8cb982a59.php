<?php

/* ERPBundle:Admin/scolarite/emploi:add.html.twig */
class __TwigTemplate_9099b09ec7af271972e25ffbac97563cc66ceadaa98147a1ec3638d57bc371ed extends Twig_Template
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
        $__internal_bfd5111bb30ee45d531d185d4405f674087e4e2d5290ee8fa6986f05dba1f368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd5111bb30ee45d531d185d4405f674087e4e2d5290ee8fa6986f05dba1f368->enter($__internal_bfd5111bb30ee45d531d185d4405f674087e4e2d5290ee8fa6986f05dba1f368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/emploi:add.html.twig"));

        $__internal_876a6eab714da6ceb0d7773a5ce654b33ecb841456b766cce345514c4e2673f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876a6eab714da6ceb0d7773a5ce654b33ecb841456b766cce345514c4e2673f6->enter($__internal_876a6eab714da6ceb0d7773a5ce654b33ecb841456b766cce345514c4e2673f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/emploi:add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Emploi_add"), "method" => "POST", "attr" => array("id" => "addFiliere", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmploiButton\"/>
</div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_bfd5111bb30ee45d531d185d4405f674087e4e2d5290ee8fa6986f05dba1f368->leave($__internal_bfd5111bb30ee45d531d185d4405f674087e4e2d5290ee8fa6986f05dba1f368_prof);

        
        $__internal_876a6eab714da6ceb0d7773a5ce654b33ecb841456b766cce345514c4e2673f6->leave($__internal_876a6eab714da6ceb0d7773a5ce654b33ecb841456b766cce345514c4e2673f6_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/emploi:add.html.twig";
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
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Emploi_add'),'method':'POST','attr':{'id':'addFiliere','novalidate':'novalidate'}}) }}
    {{ form_widget(form) }}
    <div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmploiButton\"/>
</div>
{{ form_end(form) }}
", "ERPBundle:Admin/scolarite/emploi:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/emploi/add.html.twig");
    }
}
