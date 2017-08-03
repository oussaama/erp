<?php

/* ERPBundle:Admin/scolarite/niveau:add.html.twig */
class __TwigTemplate_e1b551f9a05632c7e0059b7f45409df279547405d54b4b0f5f505589dec8f85a extends Twig_Template
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
        $__internal_05cd6d9f371beb223e0db6ea420e9559737f8e4ee7eb14c05d175206cf1fa199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cd6d9f371beb223e0db6ea420e9559737f8e4ee7eb14c05d175206cf1fa199->enter($__internal_05cd6d9f371beb223e0db6ea420e9559737f8e4ee7eb14c05d175206cf1fa199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/niveau:add.html.twig"));

        $__internal_dfc1743ffd199c0d6bfd67b0144ffb6b38368676d0382cc4b24ee5b758b6251c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc1743ffd199c0d6bfd67b0144ffb6b38368676d0382cc4b24ee5b758b6251c->enter($__internal_dfc1743ffd199c0d6bfd67b0144ffb6b38368676d0382cc4b24ee5b758b6251c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/niveau:add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Niveau_add"), "method" => "POST", "attr" => array("id" => "addNiveau", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'row');
        echo "
    <span id=\"niveau\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addNiveauButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_05cd6d9f371beb223e0db6ea420e9559737f8e4ee7eb14c05d175206cf1fa199->leave($__internal_05cd6d9f371beb223e0db6ea420e9559737f8e4ee7eb14c05d175206cf1fa199_prof);

        
        $__internal_dfc1743ffd199c0d6bfd67b0144ffb6b38368676d0382cc4b24ee5b758b6251c->leave($__internal_dfc1743ffd199c0d6bfd67b0144ffb6b38368676d0382cc4b24ee5b758b6251c_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/niveau:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 8,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Niveau_add'),'method':'POST','attr':{'id':'addNiveau','novalidate':'novalidate'}}) }}
    {{ form_row(form.niveau) }}
    <span id=\"niveau\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addNiveauButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}", "ERPBundle:Admin/scolarite/niveau:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/niveau/add.html.twig");
    }
}
