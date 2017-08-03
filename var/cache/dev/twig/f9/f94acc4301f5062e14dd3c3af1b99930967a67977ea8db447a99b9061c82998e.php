<?php

/* ERPBundle:Admin/scolarite/specialite:add.html.twig */
class __TwigTemplate_63dece39d8c83e764e9a38ddccc9486f4cbfa43980ff54482c6e09548b4fc276 extends Twig_Template
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
        $__internal_93ee0c6d1a83b7ebd4565da3c2671b84ff708b2cf1f6caf54e4137d3477b6d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93ee0c6d1a83b7ebd4565da3c2671b84ff708b2cf1f6caf54e4137d3477b6d75->enter($__internal_93ee0c6d1a83b7ebd4565da3c2671b84ff708b2cf1f6caf54e4137d3477b6d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/specialite:add.html.twig"));

        $__internal_3945f31f88fc34791a4dd4ef98ef90b712b69040d4e279b0c4a6086371910117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3945f31f88fc34791a4dd4ef98ef90b712b69040d4e279b0c4a6086371910117->enter($__internal_3945f31f88fc34791a4dd4ef98ef90b712b69040d4e279b0c4a6086371910117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/specialite:add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Specialite_add"), "method" => "POST", "attr" => array("id" => "addNSpecialite", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomSpecialite", array()), 'row');
        echo "
    <span id=\"specialite\"></span>
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'row');
        echo "
    <span id=\"specialite\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addSpecialiteButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_93ee0c6d1a83b7ebd4565da3c2671b84ff708b2cf1f6caf54e4137d3477b6d75->leave($__internal_93ee0c6d1a83b7ebd4565da3c2671b84ff708b2cf1f6caf54e4137d3477b6d75_prof);

        
        $__internal_3945f31f88fc34791a4dd4ef98ef90b712b69040d4e279b0c4a6086371910117->leave($__internal_3945f31f88fc34791a4dd4ef98ef90b712b69040d4e279b0c4a6086371910117_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/specialite:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  47 => 11,  43 => 10,  34 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Specialite_add'),'method':'POST','attr':{'id':'addNSpecialite','novalidate':'novalidate'}}) }}
    {{ form_row(form.nomSpecialite) }}
    <span id=\"specialite\"></span>
    {{ form_row(form.filiere) }}
    <span id=\"specialite\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addSpecialiteButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>", "ERPBundle:Admin/scolarite/specialite:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/specialite/add.html.twig");
    }
}
