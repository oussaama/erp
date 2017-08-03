<?php

/* ERPBundle:Admin/Membre/etudiant:addClass.html.twig */
class __TwigTemplate_75709f1ac4b10cd8b6fafd87b24d2440d1bd36986fc7fce891f41e199a456949 extends Twig_Template
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
        $__internal_753c14452b357319a5159bf4f5b9349b91f44b0c7fce87083109e65170251631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753c14452b357319a5159bf4f5b9349b91f44b0c7fce87083109e65170251631->enter($__internal_753c14452b357319a5159bf4f5b9349b91f44b0c7fce87083109e65170251631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:addClass.html.twig"));

        $__internal_210710a06dca51810771f22e390a31e9a8535769ebb4eaae015961c9bdfbb876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210710a06dca51810771f22e390a31e9a8535769ebb4eaae015961c9bdfbb876->enter($__internal_210710a06dca51810771f22e390a31e9a8535769ebb4eaae015961c9bdfbb876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Membre/etudiant:addClass.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_etudiant_class_add", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\" , method=\"post\">
    <div>
        <label for=\"erp_etudiant_specialite\">Classe</label>
        <select id=\"erp_etudiant_specialite\" name=\"classe\" data-validation=\"required\" class=\"form-control\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classe"] ?? $this->getContext($context, "classe")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 6
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomClass", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </select>
    </div>
    <div >
        <button class=\"btn btn-primary site-btn\" type=\"submit\">Ajouter</button>
    </div>
</form>";
        
        $__internal_753c14452b357319a5159bf4f5b9349b91f44b0c7fce87083109e65170251631->leave($__internal_753c14452b357319a5159bf4f5b9349b91f44b0c7fce87083109e65170251631_prof);

        
        $__internal_210710a06dca51810771f22e390a31e9a8535769ebb4eaae015961c9bdfbb876->leave($__internal_210710a06dca51810771f22e390a31e9a8535769ebb4eaae015961c9bdfbb876_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Membre/etudiant:addClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  37 => 6,  33 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('admin_etudiant_class_add',{'id':id}) }}\" , method=\"post\">
    <div>
        <label for=\"erp_etudiant_specialite\">Classe</label>
        <select id=\"erp_etudiant_specialite\" name=\"classe\" data-validation=\"required\" class=\"form-control\">
            {% for c in classe %}
            <option value=\"{{ c.id }}\">{{ c.nomClass }}</option>
            {% endfor %}
        </select>
    </div>
    <div >
        <button class=\"btn btn-primary site-btn\" type=\"submit\">Ajouter</button>
    </div>
</form>", "ERPBundle:Admin/Membre/etudiant:addClass.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Membre/etudiant/addClass.html.twig");
    }
}
