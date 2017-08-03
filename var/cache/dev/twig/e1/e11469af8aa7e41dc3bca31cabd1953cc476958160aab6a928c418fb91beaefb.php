<?php

/* ERPBundle:Admin/scolarite/diplome:update.html.twig */
class __TwigTemplate_45d2fa6c053e3cada0f09d1b2c799bf338fe7e4a7b45c2342b1a20d17a5dbb3f extends Twig_Template
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
        $__internal_239487440c7d8ee2d2af562948b5293c948a5db9d91aaf11a9fddf4ba14a68a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239487440c7d8ee2d2af562948b5293c948a5db9d91aaf11a9fddf4ba14a68a2->enter($__internal_239487440c7d8ee2d2af562948b5293c948a5db9d91aaf11a9fddf4ba14a68a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/diplome:update.html.twig"));

        $__internal_db1ff87894f8546b339bc590a6b962ca883588e991b4aba7332873fe70972e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1ff87894f8546b339bc590a6b962ca883588e991b4aba7332873fe70972e65->enter($__internal_db1ff87894f8546b339bc590a6b962ca883588e991b4aba7332873fe70972e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/diplome:update.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Diplome_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "addAnnee", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
<span id=\"annee_dfin\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
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
        
        $__internal_239487440c7d8ee2d2af562948b5293c948a5db9d91aaf11a9fddf4ba14a68a2->leave($__internal_239487440c7d8ee2d2af562948b5293c948a5db9d91aaf11a9fddf4ba14a68a2_prof);

        
        $__internal_db1ff87894f8546b339bc590a6b962ca883588e991b4aba7332873fe70972e65->leave($__internal_db1ff87894f8546b339bc590a6b962ca883588e991b4aba7332873fe70972e65_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/diplome:update.html.twig";
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
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Diplome_update',{'id':id}),'method':'POST','attr':{'id':'addAnnee','novalidate':'novalidate'}}) }}
    {{ form_row(form.nom) }}
<span id=\"annee_dfin\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
", "ERPBundle:Admin/scolarite/diplome:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/diplome/update.html.twig");
    }
}
