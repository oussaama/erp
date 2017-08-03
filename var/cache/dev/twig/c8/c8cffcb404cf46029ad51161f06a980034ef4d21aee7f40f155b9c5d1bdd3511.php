<?php

/* ERPBundle:Admin/status:edit.html.twig */
class __TwigTemplate_af8dd281e55d4a22e53ae039878ac7c934b147dc08905e91475e301b245e1815 extends Twig_Template
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
        $__internal_0f701fbe0fcf60db3ccf18f9d29a39b3088dac68f6a15042603116861faa07fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f701fbe0fcf60db3ccf18f9d29a39b3088dac68f6a15042603116861faa07fb->enter($__internal_0f701fbe0fcf60db3ccf18f9d29a39b3088dac68f6a15042603116861faa07fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/status:edit.html.twig"));

        $__internal_66135d2ea39370581ff4045dfb6af13aa28b20bda5ff16ab9e78458f9171be3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66135d2ea39370581ff4045dfb6af13aa28b20bda5ff16ab9e78458f9171be3a->enter($__internal_66135d2ea39370581ff4045dfb6af13aa28b20bda5ff16ab9e78458f9171be3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/status:edit.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_status_edit", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "new", "novalidate" => "novalidate")));
        echo "

<span id=\"status_status\"></span>
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row');
        echo "

<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Modifier\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0f701fbe0fcf60db3ccf18f9d29a39b3088dac68f6a15042603116861faa07fb->leave($__internal_0f701fbe0fcf60db3ccf18f9d29a39b3088dac68f6a15042603116861faa07fb_prof);

        
        $__internal_66135d2ea39370581ff4045dfb6af13aa28b20bda5ff16ab9e78458f9171be3a->leave($__internal_66135d2ea39370581ff4045dfb6af13aa28b20bda5ff16ab9e78458f9171be3a_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/status:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  40 => 10,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_status_edit',{'id':id}),'method':'POST','attr':{'id':'new','novalidate':'novalidate'}}) }}

<span id=\"status_status\"></span>
{{ form_row(form.type) }}

<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Modifier\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
", "ERPBundle:Admin/status:edit.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/status/edit.html.twig");
    }
}
