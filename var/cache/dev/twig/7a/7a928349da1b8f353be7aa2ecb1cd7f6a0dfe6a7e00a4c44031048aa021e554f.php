<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0129a66ca5bb84b1a382ea3f26a116f3dbac871eecbbbe6d3254a6d245247a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55b6e2c236c4fed5845b262a87381b773ed033df84db9737ab6d2ee6c9d43e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b6e2c236c4fed5845b262a87381b773ed033df84db9737ab6d2ee6c9d43e3d->enter($__internal_55b6e2c236c4fed5845b262a87381b773ed033df84db9737ab6d2ee6c9d43e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ff4f3771324aa272bd704b70f76579eab36a393e23a18e0d7a0c825a55adb548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4f3771324aa272bd704b70f76579eab36a393e23a18e0d7a0c825a55adb548->enter($__internal_ff4f3771324aa272bd704b70f76579eab36a393e23a18e0d7a0c825a55adb548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_55b6e2c236c4fed5845b262a87381b773ed033df84db9737ab6d2ee6c9d43e3d->leave($__internal_55b6e2c236c4fed5845b262a87381b773ed033df84db9737ab6d2ee6c9d43e3d_prof);

        
        $__internal_ff4f3771324aa272bd704b70f76579eab36a393e23a18e0d7a0c825a55adb548->leave($__internal_ff4f3771324aa272bd704b70f76579eab36a393e23a18e0d7a0c825a55adb548_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0a901f83218c48644fc2cb31ef68fe9cb707c540cda33ec5d8a0591cb97461da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a901f83218c48644fc2cb31ef68fe9cb707c540cda33ec5d8a0591cb97461da->enter($__internal_0a901f83218c48644fc2cb31ef68fe9cb707c540cda33ec5d8a0591cb97461da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_caa99b028def2b3c9d59ab9975010e2f0bb8fe00b3d06f43885ac8d7bcfd6db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa99b028def2b3c9d59ab9975010e2f0bb8fe00b3d06f43885ac8d7bcfd6db9->enter($__internal_caa99b028def2b3c9d59ab9975010e2f0bb8fe00b3d06f43885ac8d7bcfd6db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_caa99b028def2b3c9d59ab9975010e2f0bb8fe00b3d06f43885ac8d7bcfd6db9->leave($__internal_caa99b028def2b3c9d59ab9975010e2f0bb8fe00b3d06f43885ac8d7bcfd6db9_prof);

        
        $__internal_0a901f83218c48644fc2cb31ef68fe9cb707c540cda33ec5d8a0591cb97461da->leave($__internal_0a901f83218c48644fc2cb31ef68fe9cb707c540cda33ec5d8a0591cb97461da_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab4e1dea3166a695b8ffbb4bdc864fff386027495ec171469c5e2d752eb9777f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4e1dea3166a695b8ffbb4bdc864fff386027495ec171469c5e2d752eb9777f->enter($__internal_ab4e1dea3166a695b8ffbb4bdc864fff386027495ec171469c5e2d752eb9777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a29dcfe6a13debdddd64a1acbe6dc56197ebf2f76e8d724d60cbf8516be870ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29dcfe6a13debdddd64a1acbe6dc56197ebf2f76e8d724d60cbf8516be870ec->enter($__internal_a29dcfe6a13debdddd64a1acbe6dc56197ebf2f76e8d724d60cbf8516be870ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a29dcfe6a13debdddd64a1acbe6dc56197ebf2f76e8d724d60cbf8516be870ec->leave($__internal_a29dcfe6a13debdddd64a1acbe6dc56197ebf2f76e8d724d60cbf8516be870ec_prof);

        
        $__internal_ab4e1dea3166a695b8ffbb4bdc864fff386027495ec171469c5e2d752eb9777f->leave($__internal_ab4e1dea3166a695b8ffbb4bdc864fff386027495ec171469c5e2d752eb9777f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_722a2ed3e10d010f01d0217e9c5b3a8a5e7aae9bdb6ec6eb814a7f2ace7ef7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722a2ed3e10d010f01d0217e9c5b3a8a5e7aae9bdb6ec6eb814a7f2ace7ef7dc->enter($__internal_722a2ed3e10d010f01d0217e9c5b3a8a5e7aae9bdb6ec6eb814a7f2ace7ef7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_258ac1ca9d5d3a6e5f94c4afa8396e1784f8482781b947a03d8ed353f047c036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258ac1ca9d5d3a6e5f94c4afa8396e1784f8482781b947a03d8ed353f047c036->enter($__internal_258ac1ca9d5d3a6e5f94c4afa8396e1784f8482781b947a03d8ed353f047c036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_258ac1ca9d5d3a6e5f94c4afa8396e1784f8482781b947a03d8ed353f047c036->leave($__internal_258ac1ca9d5d3a6e5f94c4afa8396e1784f8482781b947a03d8ed353f047c036_prof);

        
        $__internal_722a2ed3e10d010f01d0217e9c5b3a8a5e7aae9bdb6ec6eb814a7f2ace7ef7dc->leave($__internal_722a2ed3e10d010f01d0217e9c5b3a8a5e7aae9bdb6ec6eb814a7f2ace7ef7dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 11,  72 => 8,  63 => 6,  51 => 3,  42 => 1,  32 => 11,  30 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
