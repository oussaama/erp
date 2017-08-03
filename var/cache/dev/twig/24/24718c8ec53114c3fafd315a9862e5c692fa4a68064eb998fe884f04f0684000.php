<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_02220a3f966a401db40ab493d19b2514f78e8a6e52ba0d2ad408a49e6f325706 extends Twig_Template
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
        $__internal_39d0eb49da72366a85aef8dd103e22191bfc7f0d3164bd9fcf9e8b1bea5b9ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d0eb49da72366a85aef8dd103e22191bfc7f0d3164bd9fcf9e8b1bea5b9ce6->enter($__internal_39d0eb49da72366a85aef8dd103e22191bfc7f0d3164bd9fcf9e8b1bea5b9ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_37f532361e50eadbff861ca70b02b55ed927f9d968e5aada1b4e2e01c755ff3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f532361e50eadbff861ca70b02b55ed927f9d968e5aada1b4e2e01c755ff3e->enter($__internal_37f532361e50eadbff861ca70b02b55ed927f9d968e5aada1b4e2e01c755ff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_39d0eb49da72366a85aef8dd103e22191bfc7f0d3164bd9fcf9e8b1bea5b9ce6->leave($__internal_39d0eb49da72366a85aef8dd103e22191bfc7f0d3164bd9fcf9e8b1bea5b9ce6_prof);

        
        $__internal_37f532361e50eadbff861ca70b02b55ed927f9d968e5aada1b4e2e01c755ff3e->leave($__internal_37f532361e50eadbff861ca70b02b55ed927f9d968e5aada1b4e2e01c755ff3e_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/var/www/html/erp/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
