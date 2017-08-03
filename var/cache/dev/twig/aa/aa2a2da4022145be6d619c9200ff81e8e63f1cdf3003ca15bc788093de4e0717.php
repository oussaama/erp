<?php

/* ERPBundle:Admin/UniteEnseignement/matiere:show.html.twig */
class __TwigTemplate_47201d419363dfedb3258e1cdb677f42dc12f507f9c7500c5e22bab733d08d85 extends Twig_Template
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
        $__internal_0902d73adf74347cbb6ba01669f85234120493c3053a239969342c02fd51f1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0902d73adf74347cbb6ba01669f85234120493c3053a239969342c02fd51f1d5->enter($__internal_0902d73adf74347cbb6ba01669f85234120493c3053a239969342c02fd51f1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement/matiere:show.html.twig"));

        $__internal_273583082a00b8c31f585eaa24173f23e0e31c7f4c8f26c5532d21ae64a89bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273583082a00b8c31f585eaa24173f23e0e31c7f4c8f26c5532d21ae64a89bb9->enter($__internal_273583082a00b8c31f585eaa24173f23e0e31c7f4c8f26c5532d21ae64a89bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/UniteEnseignement/matiere:show.html.twig"));

        // line 1
        echo "<div class=\"col-md-12\">
    <div class=\"search_block\">
        <h5 class=\"search_title\">Matiere num ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "id", array()), "html", null, true);
        echo "</h5>
        <p>nom : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo "</p>
        <p>Coefession : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "coef", array()), "html", null, true);
        echo "</p>
        <p>credit : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "credit", array()), "html", null, true);
        echo "</p>
        <p>TD: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "td", array()), "html", null, true);
        echo "</p>
        <p>TP : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "tp", array()), "html", null, true);
        echo "</p>
        <p>Cour : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "cours", array()), "html", null, true);
        echo "</p>
        <p>date d'ajoute : ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "dateAjoute", array()), "M d Y H:i"), "html", null, true);
        echo "</p>
        <p>date de Modification : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "dateModif", array()), "M d Y H:i"), "html", null, true);
        echo "</p>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Matiere_update", array("id" => $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "id", array()))), "html", null, true);
        echo "\"><button class=\"btn btn-outline-warning btn-xs\">Update</button></a>
        <button class=\"btn btn-outline-danger btn-xs delete-Matiere\" data-target=\"#view-matiere-delete\" data-toggle=\"modal\" data-id=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["matiere"] ?? $this->getContext($context, "matiere")), "id", array()), "html", null, true);
        echo "\" >Delete</button>
    </div>
</div>

<div id=\"view-matiere-update\" class=\"modal fade\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\">Update Matiere</h4>
            </div>
            <div class=\"modal-body contact-info\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"divider15\"></div>
                        <div class=\"contact-follow\" id=\"update-matiere-form\">
                            <div class=\"profile-icon text-xs-center\">
                                sdsdsdsdsdsd
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn desactiv\">Confirmer</button>
                <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    \$('.desactivt').click(function () {
        id = \$(this).data('id');
        \$('.desactiv').click(function () {
            \$.ajax({
                url: Routing.generate('admin_Matiere_delete', {'id': id}),
                success: function (result) {
                    console.log(result);
                    window.location.href = \"http://localhost/erp/web/app_dev.php/admin/unite/index\";
                },
                failed: function (a) {
                    console.log(a);
                }
            });
        });
    });
</script>";
        
        $__internal_0902d73adf74347cbb6ba01669f85234120493c3053a239969342c02fd51f1d5->leave($__internal_0902d73adf74347cbb6ba01669f85234120493c3053a239969342c02fd51f1d5_prof);

        
        $__internal_273583082a00b8c31f585eaa24173f23e0e31c7f4c8f26c5532d21ae64a89bb9->leave($__internal_273583082a00b8c31f585eaa24173f23e0e31c7f4c8f26c5532d21ae64a89bb9_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/UniteEnseignement/matiere:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-12\">
    <div class=\"search_block\">
        <h5 class=\"search_title\">Matiere num {{ matiere.id }}</h5>
        <p>nom : {{ matiere.nom }}</p>
        <p>Coefession : {{ matiere.coef }}</p>
        <p>credit : {{ matiere.credit }}</p>
        <p>TD: {{ matiere.td }}</p>
        <p>TP : {{ matiere.tp }}</p>
        <p>Cour : {{ matiere.cours }}</p>
        <p>date d'ajoute : {{ matiere.dateAjoute|date('M d Y H:i') }}</p>
        <p>date de Modification : {{ matiere.dateModif|date('M d Y H:i') }}</p>
        <a href=\"{{ path('admin_Matiere_update',{'id':matiere.id}) }}\"><button class=\"btn btn-outline-warning btn-xs\">Update</button></a>
        <button class=\"btn btn-outline-danger btn-xs delete-Matiere\" data-target=\"#view-matiere-delete\" data-toggle=\"modal\" data-id=\"{{ matiere.id }}\" >Delete</button>
    </div>
</div>

<div id=\"view-matiere-update\" class=\"modal fade\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close contact-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\">Update Matiere</h4>
            </div>
            <div class=\"modal-body contact-info\">
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"divider15\"></div>
                        <div class=\"contact-follow\" id=\"update-matiere-form\">
                            <div class=\"profile-icon text-xs-center\">
                                sdsdsdsdsdsd
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary edit-profile edit save-btn desactiv\">Confirmer</button>
                <button type=\"button\" class=\"btn btn-secondary close-btn\" data-dismiss=\"modal\">Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    \$('.desactivt').click(function () {
        id = \$(this).data('id');
        \$('.desactiv').click(function () {
            \$.ajax({
                url: Routing.generate('admin_Matiere_delete', {'id': id}),
                success: function (result) {
                    console.log(result);
                    window.location.href = \"http://localhost/erp/web/app_dev.php/admin/unite/index\";
                },
                failed: function (a) {
                    console.log(a);
                }
            });
        });
    });
</script>", "ERPBundle:Admin/UniteEnseignement/matiere:show.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/UniteEnseignement/matiere/show.html.twig");
    }
}
