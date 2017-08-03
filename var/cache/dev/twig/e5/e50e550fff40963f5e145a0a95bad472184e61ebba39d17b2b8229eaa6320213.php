<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_0a67104d86720d8d0f76f4bd8b207888808a4a5cc38e683320a9a36a3d0c2de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_94873829c38420db0cb551cb2923a6216b44e781c59965aa5cecf6ec050dc687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94873829c38420db0cb551cb2923a6216b44e781c59965aa5cecf6ec050dc687->enter($__internal_94873829c38420db0cb551cb2923a6216b44e781c59965aa5cecf6ec050dc687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b2dc90950b7ab5466bca0121893e7e5adf17ce0c66f9bfadd3cddbd1995302f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dc90950b7ab5466bca0121893e7e5adf17ce0c66f9bfadd3cddbd1995302f3->enter($__internal_b2dc90950b7ab5466bca0121893e7e5adf17ce0c66f9bfadd3cddbd1995302f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94873829c38420db0cb551cb2923a6216b44e781c59965aa5cecf6ec050dc687->leave($__internal_94873829c38420db0cb551cb2923a6216b44e781c59965aa5cecf6ec050dc687_prof);

        
        $__internal_b2dc90950b7ab5466bca0121893e7e5adf17ce0c66f9bfadd3cddbd1995302f3->leave($__internal_b2dc90950b7ab5466bca0121893e7e5adf17ce0c66f9bfadd3cddbd1995302f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7430251f2345079e73ce3cb729b71a1512b64e3fc6dd9067615ac13f6e1277f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7430251f2345079e73ce3cb729b71a1512b64e3fc6dd9067615ac13f6e1277f->enter($__internal_c7430251f2345079e73ce3cb729b71a1512b64e3fc6dd9067615ac13f6e1277f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a29da76a48612eb9713b850fc2fa148262a43647835cff45799eaef469adbc80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29da76a48612eb9713b850fc2fa148262a43647835cff45799eaef469adbc80->enter($__internal_a29da76a48612eb9713b850fc2fa148262a43647835cff45799eaef469adbc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a29da76a48612eb9713b850fc2fa148262a43647835cff45799eaef469adbc80->leave($__internal_a29da76a48612eb9713b850fc2fa148262a43647835cff45799eaef469adbc80_prof);

        
        $__internal_c7430251f2345079e73ce3cb729b71a1512b64e3fc6dd9067615ac13f6e1277f->leave($__internal_c7430251f2345079e73ce3cb729b71a1512b64e3fc6dd9067615ac13f6e1277f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
