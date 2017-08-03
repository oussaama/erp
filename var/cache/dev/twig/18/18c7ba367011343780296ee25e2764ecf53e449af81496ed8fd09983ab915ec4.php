<?php

/* ERPBundle:SuperAdmin/etablissement:admin.html.twig */
class __TwigTemplate_6b0e690487ca1a558f834eb42575f75743f094e4e9bc032ab363e1864c390dee extends Twig_Template
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
        $__internal_6699b13ea00747c969e332f6dbe7dbf350111872c1502dbc7f2d635a47b399a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6699b13ea00747c969e332f6dbe7dbf350111872c1502dbc7f2d635a47b399a1->enter($__internal_6699b13ea00747c969e332f6dbe7dbf350111872c1502dbc7f2d635a47b399a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/etablissement:admin.html.twig"));

        $__internal_553116f9509ec07f630e5f504f3e6cc1157feedf13785b0a09878f925900d461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553116f9509ec07f630e5f504f3e6cc1157feedf13785b0a09878f925900d461->enter($__internal_553116f9509ec07f630e5f504f3e6cc1157feedf13785b0a09878f925900d461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/etablissement:admin.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_registration", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST"));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<div>
    <input type=\"submit\" value=\"registre\" class=\"btn btn-primary site-btn\"/>
</div>
<input type=\"hidden\" name=\"id\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6699b13ea00747c969e332f6dbe7dbf350111872c1502dbc7f2d635a47b399a1->leave($__internal_6699b13ea00747c969e332f6dbe7dbf350111872c1502dbc7f2d635a47b399a1_prof);

        
        $__internal_553116f9509ec07f630e5f504f3e6cc1157feedf13785b0a09878f925900d461->leave($__internal_553116f9509ec07f630e5f504f3e6cc1157feedf13785b0a09878f925900d461_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:SuperAdmin/etablissement:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action':path('admin_registration',{'id':id}),'method':'POST'}) }}
    {{ form_widget(form) }}
<div>
    <input type=\"submit\" value=\"registre\" class=\"btn btn-primary site-btn\"/>
</div>
<input type=\"hidden\" name=\"id\" value=\"{{ id }}\"/>
{{ form_end(form) }}
", "ERPBundle:SuperAdmin/etablissement:admin.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/SuperAdmin/etablissement/admin.html.twig");
    }
}
