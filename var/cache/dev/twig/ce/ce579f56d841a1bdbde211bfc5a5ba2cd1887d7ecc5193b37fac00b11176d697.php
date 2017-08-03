<?php

/* ERPBundle:Admin/status:new.html.twig */
class __TwigTemplate_e3d436baac3dcdd51d1b0b083944091a8e2c5d772da86aa519f6eb72649dcefb extends Twig_Template
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
        $__internal_6bfa8cd3d49482d055284fc86024394cef10d79e766e535e3f9b3f6b5cb28f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfa8cd3d49482d055284fc86024394cef10d79e766e535e3f9b3f6b5cb28f63->enter($__internal_6bfa8cd3d49482d055284fc86024394cef10d79e766e535e3f9b3f6b5cb28f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/status:new.html.twig"));

        $__internal_e4d6da1a587d6f3d9b423ce3571d7e7e317997ad9d895789acb00459e1729bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d6da1a587d6f3d9b423ce3571d7e7e317997ad9d895789acb00459e1729bf0->enter($__internal_e4d6da1a587d6f3d9b423ce3571d7e7e317997ad9d895789acb00459e1729bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/status:new.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_status_new"), "method" => "POST", "attr" => array("id" => "addClass", "novalidate" => "novalidate")));
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
        
        $__internal_6bfa8cd3d49482d055284fc86024394cef10d79e766e535e3f9b3f6b5cb28f63->leave($__internal_6bfa8cd3d49482d055284fc86024394cef10d79e766e535e3f9b3f6b5cb28f63_prof);

        
        $__internal_e4d6da1a587d6f3d9b423ce3571d7e7e317997ad9d895789acb00459e1729bf0->leave($__internal_e4d6da1a587d6f3d9b423ce3571d7e7e317997ad9d895789acb00459e1729bf0_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/status:new.html.twig";
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
        return new Twig_Source("{{ form_start(form,{'action': path('admin_status_new'),'method':'POST','attr':{'id':'addClass','novalidate':'novalidate'}}) }}
    {{ form_widget(form) }}
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addClassButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}", "ERPBundle:Admin/status:new.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/status/new.html.twig");
    }
}
