<?php

/* ERPBundle:Admin/UniteEnseignement:add.html.twig */
class __TwigTemplate_ea16502fe61edc642807cb8f6a2e61e396b2a88f64588905e47ee53c05e6a01f extends Twig_Template
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
        $__internal_1b2660b3a2ff5f0ee0fa6479aa54942481a07289e4acd7672996fb8e96e3b742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2660b3a2ff5f0ee0fa6479aa54942481a07289e4acd7672996fb8e96e3b742->enter($__internal_1b2660b3a2ff5f0ee0fa6479aa54942481a07289e4acd7672996fb8e96e3b742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement:add.html.twig"));

        $__internal_518e6a4e0f5390c7d1805c2afbd2802c5f0d63b7fde7cfe6d69845130fff66a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518e6a4e0f5390c7d1805c2afbd2802c5f0d63b7fde7cfe6d69845130fff66a1->enter($__internal_518e6a4e0f5390c7d1805c2afbd2802c5f0d63b7fde7cfe6d69845130fff66a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement:add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Unite_add"), "method" => "POST", "attr" => array("id" => "addClass", "novalidate" => "novalidate")));
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
        
        $__internal_1b2660b3a2ff5f0ee0fa6479aa54942481a07289e4acd7672996fb8e96e3b742->leave($__internal_1b2660b3a2ff5f0ee0fa6479aa54942481a07289e4acd7672996fb8e96e3b742_prof);

        
        $__internal_518e6a4e0f5390c7d1805c2afbd2802c5f0d63b7fde7cfe6d69845130fff66a1->leave($__internal_518e6a4e0f5390c7d1805c2afbd2802c5f0d63b7fde7cfe6d69845130fff66a1_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/UniteEnseignement:add.html.twig";
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
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Unite_add'),'method':'POST','attr':{'id':'addClass','novalidate':'novalidate'}}) }}
    {{ form_widget(form) }}
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
", "ERPBundle:Admin/UniteEnseignement:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/UniteEnseignement/add.html.twig");
    }
}
