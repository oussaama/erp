<?php

/* ERPBundle:Admin/Membre/parent:add.html.twig */
class __TwigTemplate_c394a5c0ce743c3e9521e2a5b551f729659d4192077df2f6372c8f6a68657219 extends Twig_Template
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
        $__internal_8e6154ee688696ffcbf8b3e4d4804350c27e10478d72ff57727106e80a44a141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6154ee688696ffcbf8b3e4d4804350c27e10478d72ff57727106e80a44a141->enter($__internal_8e6154ee688696ffcbf8b3e4d4804350c27e10478d72ff57727106e80a44a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/parent:add.html.twig"));

        $__internal_a215d828fa1453da53fc74c261cc05482b6f5ebdd5900d5946b8bc6524a147f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a215d828fa1453da53fc74c261cc05482b6f5ebdd5900d5946b8bc6524a147f4->enter($__internal_a215d828fa1453da53fc74c261cc05482b6f5ebdd5900d5946b8bc6524a147f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/parent:add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("parent_registration"), "method" => "POST", "attr" => array("id" => "addParent", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    <span id=\"parent_username\"></span>
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomPere", array()), 'row');
        echo "
    <span id=\"parent_nomPere\"></span>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cinPere", array()), 'row');
        echo "
    <span id=\"parent_cinPere\"></span>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telPere", array()), 'row');
        echo "
    <span id=\"parent_telPere\"></span>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "professionPere", array()), 'row');
        echo "
    <span id=\"parent_professionPere\"></span>
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomMere", array()), 'row');
        echo "
    <span id=\"parent_nomMere\"></span>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cinMere", array()), 'row');
        echo "
    <span id=\"parent_cinMere\"></span>
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telMere", array()), 'row');
        echo "
    <span id=\"parent_telMere\"></span>
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "professionMere", array()), 'row');
        echo "
    <span id=\"parent_professionMere\"></span>
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("placeholder" => "email")));
        echo "
    <span id=\"parent_email\"></span>
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    <span id=\"parent_p1\"></span>
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
    <span id=\"parent_p2\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addParentButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formParent.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_8e6154ee688696ffcbf8b3e4d4804350c27e10478d72ff57727106e80a44a141->leave($__internal_8e6154ee688696ffcbf8b3e4d4804350c27e10478d72ff57727106e80a44a141_prof);

        
        $__internal_a215d828fa1453da53fc74c261cc05482b6f5ebdd5900d5946b8bc6524a147f4->leave($__internal_a215d828fa1453da53fc74c261cc05482b6f5ebdd5900d5946b8bc6524a147f4_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/parent:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  101 => 32,  97 => 31,  93 => 30,  84 => 24,  79 => 22,  74 => 20,  69 => 18,  64 => 16,  59 => 14,  54 => 12,  49 => 10,  44 => 8,  39 => 6,  34 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('parent_registration'),'method':'POST','attr':{'id':'addParent','novalidate':'novalidate'}}) }}
    {{ form_row(form.username) }}
    <span id=\"parent_username\"></span>
    {{ form_row(form.nomPere) }}
    <span id=\"parent_nomPere\"></span>
    {{ form_row(form.cinPere) }}
    <span id=\"parent_cinPere\"></span>
    {{ form_row(form.telPere) }}
    <span id=\"parent_telPere\"></span>
    {{ form_row(form.professionPere) }}
    <span id=\"parent_professionPere\"></span>
    {{ form_row(form.nomMere) }}
    <span id=\"parent_nomMere\"></span>
    {{ form_row(form.cinMere) }}
    <span id=\"parent_cinMere\"></span>
    {{ form_row(form.telMere) }}
    <span id=\"parent_telMere\"></span>
    {{ form_row(form.professionMere) }}
    <span id=\"parent_professionMere\"></span>
    {{ form_row(form.email,{ 'attr': {'placeholder': \"email\"} }) }}
    <span id=\"parent_email\"></span>
    {{ form_row(form.plainPassword.first) }}
    <span id=\"parent_p1\"></span>
    {{ form_row(form.plainPassword.second) }}
    <span id=\"parent_p2\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addParentButton\"/>
</div>
<input type=\"hidden\" value=\"{{ id }}\" name=\"id\"/>
{{ form_end(form) }}
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formParent.js') }}\"></script>", "ERPBundle:Admin/Membre/parent:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/parent/add.html.twig");
    }
}
