<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_4c1038c0bf6f687caf35e380fbbbea768cb23f35cddb2e1da1f980a19e30c2f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6080afb4595f4e5c63b985639f0983e2244ae8d4ba4d8238c1bc4c83fe5c3f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6080afb4595f4e5c63b985639f0983e2244ae8d4ba4d8238c1bc4c83fe5c3f67->enter($__internal_6080afb4595f4e5c63b985639f0983e2244ae8d4ba4d8238c1bc4c83fe5c3f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_13804b884491539bbb725c35c6a32c0b4cd069a9b7d2277ceb954659216677a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13804b884491539bbb725c35c6a32c0b4cd069a9b7d2277ceb954659216677a5->enter($__internal_13804b884491539bbb725c35c6a32c0b4cd069a9b7d2277ceb954659216677a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6080afb4595f4e5c63b985639f0983e2244ae8d4ba4d8238c1bc4c83fe5c3f67->leave($__internal_6080afb4595f4e5c63b985639f0983e2244ae8d4ba4d8238c1bc4c83fe5c3f67_prof);

        
        $__internal_13804b884491539bbb725c35c6a32c0b4cd069a9b7d2277ceb954659216677a5->leave($__internal_13804b884491539bbb725c35c6a32c0b4cd069a9b7d2277ceb954659216677a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a3450feb71dacc1754fe99f368dff9bbd52635111374f72b4f4ca808b9a7269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3450feb71dacc1754fe99f368dff9bbd52635111374f72b4f4ca808b9a7269->enter($__internal_3a3450feb71dacc1754fe99f368dff9bbd52635111374f72b4f4ca808b9a7269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4fda252e7eac932dca6f866e57bef4802b46419a6837e044bfb7c9acc83ee311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fda252e7eac932dca6f866e57bef4802b46419a6837e044bfb7c9acc83ee311->enter($__internal_4fda252e7eac932dca6f866e57bef4802b46419a6837e044bfb7c9acc83ee311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_4fda252e7eac932dca6f866e57bef4802b46419a6837e044bfb7c9acc83ee311->leave($__internal_4fda252e7eac932dca6f866e57bef4802b46419a6837e044bfb7c9acc83ee311_prof);

        
        $__internal_3a3450feb71dacc1754fe99f368dff9bbd52635111374f72b4f4ca808b9a7269->leave($__internal_3a3450feb71dacc1754fe99f368dff9bbd52635111374f72b4f4ca808b9a7269_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/erp/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
