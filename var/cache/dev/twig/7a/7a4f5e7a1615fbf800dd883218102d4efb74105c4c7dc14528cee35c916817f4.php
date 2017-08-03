<?php

/* ERPBundle:Admin/scolarite/diplome:add.html.twig */
class __TwigTemplate_f4791c76d9f7e1c82b24e38342b23e447f7ce2034a6262e94feed5dc21b8fd8e extends Twig_Template
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
        $__internal_87223eab2841971a98188d2cfbc35cdf64a812bd5ffbb317c310fe0da8ffd72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87223eab2841971a98188d2cfbc35cdf64a812bd5ffbb317c310fe0da8ffd72e->enter($__internal_87223eab2841971a98188d2cfbc35cdf64a812bd5ffbb317c310fe0da8ffd72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/diplome:add.html.twig"));

        $__internal_700836cdd0072c080735571e332238f90a95a143705b291d637b60fd2f59a85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700836cdd0072c080735571e332238f90a95a143705b291d637b60fd2f59a85b->enter($__internal_700836cdd0072c080735571e332238f90a95a143705b291d637b60fd2f59a85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/scolarite/diplome:add.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.standalone.min.css\">
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Diplome_add"), "method" => "POST", "attr" => array("id" => "addAnnee", "novalidate" => "novalidate")));
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
<div class=\"divider15\"></div>
<div>
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary site-btn pull-right\" id=\"addEmployeeButton\"/>
</div>
<input type=\"hidden\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "etablissement", array()), "id", array()), "html", null, true);
        echo "\" name=\"id\"/>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\" src=\"";
        // line 10
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
        
        $__internal_87223eab2841971a98188d2cfbc35cdf64a812bd5ffbb317c310fe0da8ffd72e->leave($__internal_87223eab2841971a98188d2cfbc35cdf64a812bd5ffbb317c310fe0da8ffd72e_prof);

        
        $__internal_700836cdd0072c080735571e332238f90a95a143705b291d637b60fd2f59a85b->leave($__internal_700836cdd0072c080735571e332238f90a95a143705b291d637b60fd2f59a85b_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/scolarite/diplome:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  44 => 9,  40 => 8,  32 => 3,  28 => 2,  25 => 1,);
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
{{ form_start(form,{'action': path('admin_Diplome_add'),'method':'POST','attr':{'id':'addAnnee','novalidate':'novalidate'}}) }}
    {{ form_row(form.nom) }}
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
</script>", "ERPBundle:Admin/scolarite/diplome:add.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/scolarite/diplome/add.html.twig");
    }
}
