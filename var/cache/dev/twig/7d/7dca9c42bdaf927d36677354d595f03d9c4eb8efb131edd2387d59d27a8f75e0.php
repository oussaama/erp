<?php

/* ERPBundle:Admin/scolarite/filiere:update.html.twig */
class __TwigTemplate_3fd996e641b3883f90ade869773cf7ce472928d2b948efef8388332220d676cc extends Twig_Template
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
        $__internal_ee13741cf4c920db715e7434ecc27bd32d5a32838e7edaca3871edf37f3d5bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee13741cf4c920db715e7434ecc27bd32d5a32838e7edaca3871edf37f3d5bd0->enter($__internal_ee13741cf4c920db715e7434ecc27bd32d5a32838e7edaca3871edf37f3d5bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/filiere:update.html.twig"));

        $__internal_d15faeca7cf2d07c0372dee4efcea8be94548fedb700d7dcebb73c87fc433eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15faeca7cf2d07c0372dee4efcea8be94548fedb700d7dcebb73c87fc433eca->enter($__internal_d15faeca7cf2d07c0372dee4efcea8be94548fedb700d7dcebb73c87fc433eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/filiere:update.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Filiere_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "addFiliere", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diplome", array()), 'row');
        echo "
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"update\" class=\"btn btn-primary site-btn pull-right\" id=\"addFiliereButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ee13741cf4c920db715e7434ecc27bd32d5a32838e7edaca3871edf37f3d5bd0->leave($__internal_ee13741cf4c920db715e7434ecc27bd32d5a32838e7edaca3871edf37f3d5bd0_prof);

        
        $__internal_d15faeca7cf2d07c0372dee4efcea8be94548fedb700d7dcebb73c87fc433eca->leave($__internal_d15faeca7cf2d07c0372dee4efcea8be94548fedb700d7dcebb73c87fc433eca_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/filiere:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  41 => 8,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Filiere_update',{'id':id}),'method':'POST','attr':{'id':'addFiliere','novalidate':'novalidate'}}) }}
    {{ form_row(form.filiere) }}
    {{ form_row(form.diplome) }}
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"update\" class=\"btn btn-primary site-btn pull-right\" id=\"addFiliereButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
", "ERPBundle:Admin/scolarite/filiere:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/filiere/update.html.twig");
    }
}
