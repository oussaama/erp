<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_a6fa2d83b76aadb9f36b66b75f1270e1a1c0a928791993f3974d184c3a2f0917 extends Twig_Template
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
        $__internal_a61475e72d1435316f79284f7e9b25f47d1156f8b89a0648cb4c047a3fbc4e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61475e72d1435316f79284f7e9b25f47d1156f8b89a0648cb4c047a3fbc4e3f->enter($__internal_a61475e72d1435316f79284f7e9b25f47d1156f8b89a0648cb4c047a3fbc4e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_039d2fbc5bac9638d33d3f1546b41f349cb23ad48e60def21c24e4455d200fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039d2fbc5bac9638d33d3f1546b41f349cb23ad48e60def21c24e4455d200fda->enter($__internal_039d2fbc5bac9638d33d3f1546b41f349cb23ad48e60def21c24e4455d200fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupname" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_a61475e72d1435316f79284f7e9b25f47d1156f8b89a0648cb4c047a3fbc4e3f->leave($__internal_a61475e72d1435316f79284f7e9b25f47d1156f8b89a0648cb4c047a3fbc4e3f_prof);

        
        $__internal_039d2fbc5bac9638d33d3f1546b41f349cb23ad48e60def21c24e4455d200fda->leave($__internal_039d2fbc5bac9638d33d3f1546b41f349cb23ad48e60def21c24e4455d200fda_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupname': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
