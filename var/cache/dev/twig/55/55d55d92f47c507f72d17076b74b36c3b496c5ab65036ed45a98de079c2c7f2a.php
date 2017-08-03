<?php

/* ERPBundle:Admin/Class:add.html.twig */
class __TwigTemplate_a01ffed199aa494eba649187e30944b258ee363496c69e64a04d2a1a27d1a051 extends Twig_Template
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
        $__internal_8b92683f09b675d0128dbefeba2aa7e3beb05f7f20445c86944781c227a00e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b92683f09b675d0128dbefeba2aa7e3beb05f7f20445c86944781c227a00e6f->enter($__internal_8b92683f09b675d0128dbefeba2aa7e3beb05f7f20445c86944781c227a00e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Class:add.html.twig"));

        $__internal_bf589e203538a98b532cb0a22e0066a2854ca73d49bcb6c52a0f5b9072e29c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf589e203538a98b532cb0a22e0066a2854ca73d49bcb6c52a0f5b9072e29c90->enter($__internal_bf589e203538a98b532cb0a22e0066a2854ca73d49bcb6c52a0f5b9072e29c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Class:add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Class_add"), "method" => "POST", "attr" => array("id" => "addClass", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8b92683f09b675d0128dbefeba2aa7e3beb05f7f20445c86944781c227a00e6f->leave($__internal_8b92683f09b675d0128dbefeba2aa7e3beb05f7f20445c86944781c227a00e6f_prof);

        
        $__internal_bf589e203538a98b532cb0a22e0066a2854ca73d49bcb6c52a0f5b9072e29c90->leave($__internal_bf589e203538a98b532cb0a22e0066a2854ca73d49bcb6c52a0f5b9072e29c90_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Class:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 7,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Class_add'),'method':'POST','attr':{'id':'addClass','novalidate':'novalidate'}}) }}
    {{ form_widget(form) }}
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
", "ERPBundle:Admin/Class:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Class/add.html.twig");
    }
}
