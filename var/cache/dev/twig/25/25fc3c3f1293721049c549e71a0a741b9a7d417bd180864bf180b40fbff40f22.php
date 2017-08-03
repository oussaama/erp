<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_aaf1b2f47a24330a3b1c2d2c5f294b17f6fcabb0d32d80d9d6b36bc2c1426fe4 extends Twig_Template
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
        $__internal_ecd96a62a60d609954eafbe3477d282807a793a64261b8bbc4f61badba9789ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd96a62a60d609954eafbe3477d282807a793a64261b8bbc4f61badba9789ed->enter($__internal_ecd96a62a60d609954eafbe3477d282807a793a64261b8bbc4f61badba9789ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_88063c36ac4f143122617e5ba6b6d6917fcf99d0bec6d3b9d8833dee3e8df9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88063c36ac4f143122617e5ba6b6d6917fcf99d0bec6d3b9d8833dee3e8df9d1->enter($__internal_88063c36ac4f143122617e5ba6b6d6917fcf99d0bec6d3b9d8833dee3e8df9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ecd96a62a60d609954eafbe3477d282807a793a64261b8bbc4f61badba9789ed->leave($__internal_ecd96a62a60d609954eafbe3477d282807a793a64261b8bbc4f61badba9789ed_prof);

        
        $__internal_88063c36ac4f143122617e5ba6b6d6917fcf99d0bec6d3b9d8833dee3e8df9d1->leave($__internal_88063c36ac4f143122617e5ba6b6d6917fcf99d0bec6d3b9d8833dee3e8df9d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
