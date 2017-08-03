<?php

/* ERPBundle:Admin/scolarite/filiere:add.html.twig */
class __TwigTemplate_0205773a4d5fb4be3eca0cefcb30b2055bdf01e001fad3cf34f577865dfb310c extends Twig_Template
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
        $__internal_8954ccf5eb1a26d49b6a6e103a49565d550433c6f56c8905eb8abc04848a8f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8954ccf5eb1a26d49b6a6e103a49565d550433c6f56c8905eb8abc04848a8f1e->enter($__internal_8954ccf5eb1a26d49b6a6e103a49565d550433c6f56c8905eb8abc04848a8f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/filiere:add.html.twig"));

        $__internal_e4badfff3a2f26d982941a9b8a5bc3f23fdc48aadcb51e0c1c8c7437b47b94b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4badfff3a2f26d982941a9b8a5bc3f23fdc48aadcb51e0c1c8c7437b47b94b3->enter($__internal_e4badfff3a2f26d982941a9b8a5bc3f23fdc48aadcb51e0c1c8c7437b47b94b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/filiere:add.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Filiere_add"), "method" => "POST", "attr" => array("id" => "addFiliere", "novalidate" => "novalidate")));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filiere", array()), 'row');
        echo "
    <span id=\"filiere\"></span>
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diplome", array()), 'row');
        echo "
    <span id=\"diplome\"></span>
    <div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addFiliereButton\"/>
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
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formEmployee.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_8954ccf5eb1a26d49b6a6e103a49565d550433c6f56c8905eb8abc04848a8f1e->leave($__internal_8954ccf5eb1a26d49b6a6e103a49565d550433c6f56c8905eb8abc04848a8f1e_prof);

        
        $__internal_e4badfff3a2f26d982941a9b8a5bc3f23fdc48aadcb51e0c1c8c7437b47b94b3->leave($__internal_e4badfff3a2f26d982941a9b8a5bc3f23fdc48aadcb51e0c1c8c7437b47b94b3_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/filiere:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  51 => 12,  47 => 11,  43 => 10,  34 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action': path('admin_Filiere_add'),'method':'POST','attr':{'id':'addFiliere','novalidate':'novalidate'}}) }}
    {{ form_row(form.filiere) }}
    <span id=\"filiere\"></span>
    {{ form_row(form.diplome) }}
    <span id=\"diplome\"></span>
    <div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Update\" class=\"btn btn-primary site-btn pull-right\" id=\"addFiliereButton\"/>
</div>
<input type=\"hidden\" value=\"{{ app.user.etablissement.id }}\" name=\"id\"/>
{{ form_end(form) }}
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formEmployee.js') }}\"></script>", "ERPBundle:Admin/scolarite/filiere:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/filiere/add.html.twig");
    }
}
