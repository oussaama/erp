<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c07289efb6a8962f3ee224baacd6bed554c5c8e665d78812970dee1fa1bc8324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a53b6b3b705838f4a48c20b29ae612027d8a509f61bc220353a57831d4db436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a53b6b3b705838f4a48c20b29ae612027d8a509f61bc220353a57831d4db436->enter($__internal_2a53b6b3b705838f4a48c20b29ae612027d8a509f61bc220353a57831d4db436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_41451f4a0080d0128a0b469ebef92f96e3fda7151c759e3844545d4c154f5a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41451f4a0080d0128a0b469ebef92f96e3fda7151c759e3844545d4c154f5a2c->enter($__internal_41451f4a0080d0128a0b469ebef92f96e3fda7151c759e3844545d4c154f5a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a53b6b3b705838f4a48c20b29ae612027d8a509f61bc220353a57831d4db436->leave($__internal_2a53b6b3b705838f4a48c20b29ae612027d8a509f61bc220353a57831d4db436_prof);

        
        $__internal_41451f4a0080d0128a0b469ebef92f96e3fda7151c759e3844545d4c154f5a2c->leave($__internal_41451f4a0080d0128a0b469ebef92f96e3fda7151c759e3844545d4c154f5a2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69de79b22f305f8e09843aa8fcf5762b204d0c43db9a3823e66858591f75da17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69de79b22f305f8e09843aa8fcf5762b204d0c43db9a3823e66858591f75da17->enter($__internal_69de79b22f305f8e09843aa8fcf5762b204d0c43db9a3823e66858591f75da17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_57b52b45aba152440244308795f77d29d1c1ff6c664af2d18810cf07116b3ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b52b45aba152440244308795f77d29d1c1ff6c664af2d18810cf07116b3ae5->enter($__internal_57b52b45aba152440244308795f77d29d1c1ff6c664af2d18810cf07116b3ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_57b52b45aba152440244308795f77d29d1c1ff6c664af2d18810cf07116b3ae5->leave($__internal_57b52b45aba152440244308795f77d29d1c1ff6c664af2d18810cf07116b3ae5_prof);

        
        $__internal_69de79b22f305f8e09843aa8fcf5762b204d0c43db9a3823e66858591f75da17->leave($__internal_69de79b22f305f8e09843aa8fcf5762b204d0c43db9a3823e66858591f75da17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
