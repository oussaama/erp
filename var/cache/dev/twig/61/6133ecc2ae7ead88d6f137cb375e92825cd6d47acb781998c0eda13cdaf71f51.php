<?php

/* ERPBundle:Admin/payment:update.html.twig */
class __TwigTemplate_e4a3bb2c804ae3de39ed063280a0637b0d46e460220d6bb620b701d1a914e969 extends Twig_Template
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
        $__internal_cc1018b8f2a6e59d061403ae45a054112ad59c18b48909e26df9117c0a076327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1018b8f2a6e59d061403ae45a054112ad59c18b48909e26df9117c0a076327->enter($__internal_cc1018b8f2a6e59d061403ae45a054112ad59c18b48909e26df9117c0a076327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/payment:update.html.twig"));

        $__internal_277210bbb8eb1f260cb1bfbf623b1fc3fd551a839f58b5f026ced90536f38835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277210bbb8eb1f260cb1bfbf623b1fc3fd551a839f58b5f026ced90536f38835->enter($__internal_277210bbb8eb1f260cb1bfbf623b1fc3fd551a839f58b5f026ced90536f38835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/payment:update.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_payment_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST", "attr" => array("id" => "new", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "payment", array()), 'row');
        echo "
<span id=\"payment_payment\"></span>
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "debut", array()), 'row');
        echo "
<span id=\"payment_debut\"></span>
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fin", array()), 'row');
        echo "
<span id=\"payment_dfin\"></span>
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
        
        $__internal_cc1018b8f2a6e59d061403ae45a054112ad59c18b48909e26df9117c0a076327->leave($__internal_cc1018b8f2a6e59d061403ae45a054112ad59c18b48909e26df9117c0a076327_prof);

        
        $__internal_277210bbb8eb1f260cb1bfbf623b1fc3fd551a839f58b5f026ced90536f38835->leave($__internal_277210bbb8eb1f260cb1bfbf623b1fc3fd551a839f58b5f026ced90536f38835_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/payment:update.html.twig";
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
        return new Twig_Source("{{ form_start(form,{'action': path('admin_payment_update',{'id':id}),'method':'POST','attr':{'id':'new','novalidate':'novalidate'}}) }}
    {{ form_row(form.payment) }}
<span id=\"payment_payment\"></span>
{{ form_row(form.debut) }}
<span id=\"payment_debut\"></span>
{{ form_row(form.fin) }}
<span id=\"payment_dfin\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
", "ERPBundle:Admin/payment:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/payment/update.html.twig");
    }
}
