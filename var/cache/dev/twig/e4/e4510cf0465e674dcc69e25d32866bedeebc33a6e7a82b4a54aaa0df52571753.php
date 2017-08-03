<?php

/* ERPBundle:Admin/scolarite/annee:add.html.twig */
class __TwigTemplate_13714bcee51c14603752f194f3e773bd241bb88a1ba7c012224bc8667a429785 extends Twig_Template
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
        $__internal_0573039b03469a4f38aea5a91a68e845da54b5d0902cb464e86a6bfd49c7eec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0573039b03469a4f38aea5a91a68e845da54b5d0902cb464e86a6bfd49c7eec2->enter($__internal_0573039b03469a4f38aea5a91a68e845da54b5d0902cb464e86a6bfd49c7eec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/annee:add.html.twig"));

        $__internal_6d991ad4f338592e0a21ae37c62fa9cbaa4bcba647b34aed3d3027d2ffe27523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d991ad4f338592e0a21ae37c62fa9cbaa4bcba647b34aed3d3027d2ffe27523->enter($__internal_6d991ad4f338592e0a21ae37c62fa9cbaa4bcba647b34aed3d3027d2ffe27523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/annee:add.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Annee_add"), "method" => "POST", "attr" => array("id" => "addAnnee", "novalidate" => "novalidate")));
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'row');
        echo "
    <span id=\"annee_annee\"></span>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "debut", array()), 'row');
        echo "
    <span id=\"annee_debut\"></span>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fin", array()), 'row');
        echo "
    <span id=\"annee_dfin\"></span>
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<script>
    \$(document).ready(function () {
        // configure the bootstrap datepicker
        \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
    });
</script>";
        
        $__internal_0573039b03469a4f38aea5a91a68e845da54b5d0902cb464e86a6bfd49c7eec2->leave($__internal_0573039b03469a4f38aea5a91a68e845da54b5d0902cb464e86a6bfd49c7eec2_prof);

        
        $__internal_6d991ad4f338592e0a21ae37c62fa9cbaa4bcba647b34aed3d3027d2ffe27523->leave($__internal_6d991ad4f338592e0a21ae37c62fa9cbaa4bcba647b34aed3d3027d2ffe27523_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/annee:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  51 => 13,  42 => 7,  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
{{ form_start(form,{'action': path('admin_Annee_add'),'method':'POST','attr':{'id':'addAnnee','novalidate':'novalidate'}}) }}
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
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<script>
    \$(document).ready(function () {
        // configure the bootstrap datepicker
        \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
    });
</script>", "ERPBundle:Admin/scolarite/annee:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/annee/add.html.twig");
    }
}
