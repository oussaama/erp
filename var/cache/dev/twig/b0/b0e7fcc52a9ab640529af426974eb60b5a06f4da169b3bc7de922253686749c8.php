<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4bdd4a31b4d0461ba2ec699f90cd2f1dc6859485b0780c433b9182e497785819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f9439957252f8548169bed6237aea4b8583c1b7922ca62accbf94d610bb85f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9439957252f8548169bed6237aea4b8583c1b7922ca62accbf94d610bb85f7d->enter($__internal_f9439957252f8548169bed6237aea4b8583c1b7922ca62accbf94d610bb85f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3de042cdbf7f7c6e43b1e0a9dca08c6c57bbf5cdeb5ed0f1e5d55c6cbd68e6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de042cdbf7f7c6e43b1e0a9dca08c6c57bbf5cdeb5ed0f1e5d55c6cbd68e6e6->enter($__internal_3de042cdbf7f7c6e43b1e0a9dca08c6c57bbf5cdeb5ed0f1e5d55c6cbd68e6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9439957252f8548169bed6237aea4b8583c1b7922ca62accbf94d610bb85f7d->leave($__internal_f9439957252f8548169bed6237aea4b8583c1b7922ca62accbf94d610bb85f7d_prof);

        
        $__internal_3de042cdbf7f7c6e43b1e0a9dca08c6c57bbf5cdeb5ed0f1e5d55c6cbd68e6e6->leave($__internal_3de042cdbf7f7c6e43b1e0a9dca08c6c57bbf5cdeb5ed0f1e5d55c6cbd68e6e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b1b3aeb1197558d1d7c9206dfd1ed06a07524c28bcc2d29dc582e4c73809029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1b3aeb1197558d1d7c9206dfd1ed06a07524c28bcc2d29dc582e4c73809029->enter($__internal_2b1b3aeb1197558d1d7c9206dfd1ed06a07524c28bcc2d29dc582e4c73809029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_42b540dbce6bc26ad5b6e416929d7a39cbac4c8c7ab7737695039dfa81bfcd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b540dbce6bc26ad5b6e416929d7a39cbac4c8c7ab7737695039dfa81bfcd35->enter($__internal_42b540dbce6bc26ad5b6e416929d7a39cbac4c8c7ab7737695039dfa81bfcd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_42b540dbce6bc26ad5b6e416929d7a39cbac4c8c7ab7737695039dfa81bfcd35->leave($__internal_42b540dbce6bc26ad5b6e416929d7a39cbac4c8c7ab7737695039dfa81bfcd35_prof);

        
        $__internal_2b1b3aeb1197558d1d7c9206dfd1ed06a07524c28bcc2d29dc582e4c73809029->leave($__internal_2b1b3aeb1197558d1d7c9206dfd1ed06a07524c28bcc2d29dc582e4c73809029_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
