<?php

/* ERPBundle:Admin/scolarite/niveau:update.html.twig */
class __TwigTemplate_af795672ef859d82cf6e6f6cfa7c0777b477d1aaa3373e074041f871d5d3c79a extends Twig_Template
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
        $__internal_b1d9ae2e10486c1d3892e717cdcb5e88fd28e4b8d7793b570e23530a716d2f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d9ae2e10486c1d3892e717cdcb5e88fd28e4b8d7793b570e23530a716d2f88->enter($__internal_b1d9ae2e10486c1d3892e717cdcb5e88fd28e4b8d7793b570e23530a716d2f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/niveau:update.html.twig"));

        $__internal_21b8ca60f723b2aa91309abbf2bafaa878f8ed3f1cdf45d4d271b546b779896f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b8ca60f723b2aa91309abbf2bafaa878f8ed3f1cdf45d4d271b546b779896f->enter($__internal_21b8ca60f723b2aa91309abbf2bafaa878f8ed3f1cdf45d4d271b546b779896f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/niveau:update.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Niveau_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "addNiveau", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", array()), 'row');
        echo "
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"update\" class=\"btn btn-primary site-btn pull-right\" id=\"addNiveauButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_b1d9ae2e10486c1d3892e717cdcb5e88fd28e4b8d7793b570e23530a716d2f88->leave($__internal_b1d9ae2e10486c1d3892e717cdcb5e88fd28e4b8d7793b570e23530a716d2f88_prof);

        
        $__internal_21b8ca60f723b2aa91309abbf2bafaa878f8ed3f1cdf45d4d271b546b779896f->leave($__internal_21b8ca60f723b2aa91309abbf2bafaa878f8ed3f1cdf45d4d271b546b779896f_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/niveau:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  41 => 8,  37 => 7,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Niveau_update',{'id':id}),'method':'POST','attr':{'id':'addNiveau','novalidate':'novalidate'}}) }}
    {{ form_row(form.niveau) }}
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"update\" class=\"btn btn-primary site-btn pull-right\" id=\"addNiveauButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>", "ERPBundle:Admin/scolarite/niveau:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/niveau/update.html.twig");
    }
}
