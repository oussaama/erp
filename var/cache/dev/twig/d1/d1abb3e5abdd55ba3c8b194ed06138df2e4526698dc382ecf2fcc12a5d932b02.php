<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_33306bf88dcd646f6beeafc318b25e4a1db3dff659acbbeac9275b847c21057c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_bf58028cc16f5286fddf31b126efab63714846c8d7c79c455383366cd3ded076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf58028cc16f5286fddf31b126efab63714846c8d7c79c455383366cd3ded076->enter($__internal_bf58028cc16f5286fddf31b126efab63714846c8d7c79c455383366cd3ded076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_8991a2760515ac439bb1414a634386758cc2ab8e9e1e627803dbd3a22ae9f685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8991a2760515ac439bb1414a634386758cc2ab8e9e1e627803dbd3a22ae9f685->enter($__internal_8991a2760515ac439bb1414a634386758cc2ab8e9e1e627803dbd3a22ae9f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf58028cc16f5286fddf31b126efab63714846c8d7c79c455383366cd3ded076->leave($__internal_bf58028cc16f5286fddf31b126efab63714846c8d7c79c455383366cd3ded076_prof);

        
        $__internal_8991a2760515ac439bb1414a634386758cc2ab8e9e1e627803dbd3a22ae9f685->leave($__internal_8991a2760515ac439bb1414a634386758cc2ab8e9e1e627803dbd3a22ae9f685_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a3ce1f14a41c4e0a480642bf3fa8c2dd9125ed61925f04c2d20f1b447eb3eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3ce1f14a41c4e0a480642bf3fa8c2dd9125ed61925f04c2d20f1b447eb3eb5->enter($__internal_6a3ce1f14a41c4e0a480642bf3fa8c2dd9125ed61925f04c2d20f1b447eb3eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_094adddf6fef7ecdc10d5faf0d2c44f78debcb6b65470ab9412cb105a596756b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094adddf6fef7ecdc10d5faf0d2c44f78debcb6b65470ab9412cb105a596756b->enter($__internal_094adddf6fef7ecdc10d5faf0d2c44f78debcb6b65470ab9412cb105a596756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 7
            echo "        ";
            if ( !twig_test_empty(($context["targetUrl"] ?? $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
        
        $__internal_094adddf6fef7ecdc10d5faf0d2c44f78debcb6b65470ab9412cb105a596756b->leave($__internal_094adddf6fef7ecdc10d5faf0d2c44f78debcb6b65470ab9412cb105a596756b_prof);

        
        $__internal_6a3ce1f14a41c4e0a480642bf3fa8c2dd9125ed61925f04c2d20f1b447eb3eb5->leave($__internal_6a3ce1f14a41c4e0a480642bf3fa8c2dd9125ed61925f04c2d20f1b447eb3eb5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  59 => 7,  56 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>
    {% if app.session is not empty %}
        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
