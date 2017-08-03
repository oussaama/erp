<?php

/* ERPBundle:SuperAdmin/client:add.html.twig */
class __TwigTemplate_ca5e0d6905846d84e48897e173d8d21f5513aca8a9da562824985c6a11ceca35 extends Twig_Template
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
        $__internal_f8ad1fbbd6f2aa94f5e8f357523c9ae2097ca5ecd269f4768baa7c194aa01f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ad1fbbd6f2aa94f5e8f357523c9ae2097ca5ecd269f4768baa7c194aa01f9f->enter($__internal_f8ad1fbbd6f2aa94f5e8f357523c9ae2097ca5ecd269f4768baa7c194aa01f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/client:add.html.twig"));

        $__internal_233efc7a5792c13612371f21129a493db7c290774d6a76f0e52ca428a5818c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233efc7a5792c13612371f21129a493db7c290774d6a76f0e52ca428a5818c39->enter($__internal_233efc7a5792c13612371f21129a493db7c290774d6a76f0e52ca428a5818c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/client:add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_client_add"), "method" => "POST", "attr" => array("id" => "addClient", "novalidate" => "novalidate")));
        echo "
<script>
    ";
        // line 3
        echo $this->env->getExtension('Boekkooi\Bundle\JqueryValidationBundle\Twig\JqueryValidationExtension')->renderJavascript($this->env, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
</script>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fullName", array()), 'row');
        echo "
    <span id=\"client_fullName\"></span>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", array()), 'row');
        echo "
    <span id=\"client_cin\"></span>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'row');
        echo "
    <span id=\"client_tel\"></span>
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mail", array()), 'row');
        echo "
    <span id=\"client_mail\"></span>
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'row');
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row');
        echo "
    <span id=\"client_cp\"></span>
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
    <span id=\"client_ville\"></span>
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'row');
        echo "
    <span id=\"client_pays\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addClientButton\"/>
</div>
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formClient.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f8ad1fbbd6f2aa94f5e8f357523c9ae2097ca5ecd269f4768baa7c194aa01f9f->leave($__internal_f8ad1fbbd6f2aa94f5e8f357523c9ae2097ca5ecd269f4768baa7c194aa01f9f_prof);

        
        $__internal_233efc7a5792c13612371f21129a493db7c290774d6a76f0e52ca428a5818c39->leave($__internal_233efc7a5792c13612371f21129a493db7c290774d6a76f0e52ca428a5818c39_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:SuperAdmin/client:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  83 => 26,  79 => 25,  70 => 19,  65 => 17,  60 => 15,  55 => 13,  50 => 11,  45 => 9,  40 => 7,  35 => 5,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('super_admin_client_add'),'method':'POST','attr':{'id':'addClient','novalidate':'novalidate'}}) }}
<script>
    {{ form_jquery_validation(form) }}
</script>
    {{ form_row(form.fullName) }}
    <span id=\"client_fullName\"></span>
    {{ form_row(form.cin) }}
    <span id=\"client_cin\"></span>
    {{ form_row(form.tel) }}
    <span id=\"client_tel\"></span>
    {{ form_row(form.mail) }}
    <span id=\"client_mail\"></span>
    {{ form_row(form.adresse) }}

    {{ form_row(form.cp) }}
    <span id=\"client_cp\"></span>
    {{ form_row(form.ville) }}
    <span id=\"client_ville\"></span>
    {{ form_row(form.pays) }}
    <span id=\"client_pays\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addClientButton\"/>
</div>
{{ form_end(form) }}
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formClient.js') }}\"></script>
", "ERPBundle:SuperAdmin/client:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/SuperAdmin/client/add.html.twig");
    }
}
