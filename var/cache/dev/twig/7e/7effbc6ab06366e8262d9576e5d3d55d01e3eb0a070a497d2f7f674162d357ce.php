<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2e4c14ff6bdfcac0b0cc0da836650a3f55c1ccd9b9f320c25dc7d5041061f779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_29c34e30b1e433698c2c1f4863732c622816ffb7345e547b3714bc348edbafc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c34e30b1e433698c2c1f4863732c622816ffb7345e547b3714bc348edbafc7->enter($__internal_29c34e30b1e433698c2c1f4863732c622816ffb7345e547b3714bc348edbafc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $__internal_ec4a495f75fb1092351a444c06e7d15ee14ad16b4c0b95a5ac996d33b96a2a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4a495f75fb1092351a444c06e7d15ee14ad16b4c0b95a5ac996d33b96a2a1a->enter($__internal_ec4a495f75fb1092351a444c06e7d15ee14ad16b4c0b95a5ac996d33b96a2a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c34e30b1e433698c2c1f4863732c622816ffb7345e547b3714bc348edbafc7->leave($__internal_29c34e30b1e433698c2c1f4863732c622816ffb7345e547b3714bc348edbafc7_prof);

        
        $__internal_ec4a495f75fb1092351a444c06e7d15ee14ad16b4c0b95a5ac996d33b96a2a1a->leave($__internal_ec4a495f75fb1092351a444c06e7d15ee14ad16b4c0b95a5ac996d33b96a2a1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6563252330ff797ef005fbe6867e226b4a59e26d8f2c8dabdacd74529d041d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6563252330ff797ef005fbe6867e226b4a59e26d8f2c8dabdacd74529d041d67->enter($__internal_6563252330ff797ef005fbe6867e226b4a59e26d8f2c8dabdacd74529d041d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b30ed30ff98a57cfe64e0d083cea26cd4a0ad3f4ff8e0d2268635c0e593429e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b30ed30ff98a57cfe64e0d083cea26cd4a0ad3f4ff8e0d2268635c0e593429e->enter($__internal_2b30ed30ff98a57cfe64e0d083cea26cd4a0ad3f4ff8e0d2268635c0e593429e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => ($context["email"] ?? $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2b30ed30ff98a57cfe64e0d083cea26cd4a0ad3f4ff8e0d2268635c0e593429e->leave($__internal_2b30ed30ff98a57cfe64e0d083cea26cd4a0ad3f4ff8e0d2268635c0e593429e_prof);

        
        $__internal_6563252330ff797ef005fbe6867e226b4a59e26d8f2c8dabdacd74529d041d67->leave($__internal_6563252330ff797ef005fbe6867e226b4a59e26d8f2c8dabdacd74529d041d67_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Resetting/checkEmail.html.twig");
    }
}
