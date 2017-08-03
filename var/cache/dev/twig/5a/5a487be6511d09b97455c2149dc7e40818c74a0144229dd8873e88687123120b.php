<?php

/* ERPBundle:Admin/scolarite/annee:update.html.twig */
class __TwigTemplate_fe12a2b4d29392949a8c7da23f1b687ff05763a4a4ea9b225f66fd6749b0fbcf extends Twig_Template
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
        $__internal_823d4dc103792da32c9217f9692c541b3f54f51b50531db17f1b1d2b35f930aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823d4dc103792da32c9217f9692c541b3f54f51b50531db17f1b1d2b35f930aa->enter($__internal_823d4dc103792da32c9217f9692c541b3f54f51b50531db17f1b1d2b35f930aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/annee:update.html.twig"));

        $__internal_9f9b0538fdda4ec1ee50ce401d41b55b01b85e405ac6d0d600dce1121e7346ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9b0538fdda4ec1ee50ce401d41b55b01b85e405ac6d0d600dce1121e7346ce->enter($__internal_9f9b0538fdda4ec1ee50ce401d41b55b01b85e405ac6d0d600dce1121e7346ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/annee:update.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Annee_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "addAnnee", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'row');
        echo "
<span id=\"annee_annee\"></span>
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "debut", array()), 'row');
        echo "
<span id=\"annee_debut\"></span>
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fin", array()), 'row');
        echo "
<span id=\"annee_dfin\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_823d4dc103792da32c9217f9692c541b3f54f51b50531db17f1b1d2b35f930aa->leave($__internal_823d4dc103792da32c9217f9692c541b3f54f51b50531db17f1b1d2b35f930aa_prof);

        
        $__internal_9f9b0538fdda4ec1ee50ce401d41b55b01b85e405ac6d0d600dce1121e7346ce->leave($__internal_9f9b0538fdda4ec1ee50ce401d41b55b01b85e405ac6d0d600dce1121e7346ce_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/annee:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  39 => 6,  34 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Annee_update',{'id':id}),'method':'POST','attr':{'id':'addAnnee','novalidate':'novalidate'}}) }}
    {{ form_row(form.annee) }}
<span id=\"annee_annee\"></span>
{{ form_row(form.debut) }}
<span id=\"annee_debut\"></span>
{{ form_row(form.fin) }}
<span id=\"annee_dfin\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
", "ERPBundle:Admin/scolarite/annee:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/annee/update.html.twig");
    }
}
