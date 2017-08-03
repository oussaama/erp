<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_6b333dd92a6eea6ee4e3b5f74336d995bd4ab7b7d437bf68e676082ba5a92b1d extends Twig_Template
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
        $__internal_913929b893eed354b778461425c20c7e30514aea040f37d6b5278c505f10400b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913929b893eed354b778461425c20c7e30514aea040f37d6b5278c505f10400b->enter($__internal_913929b893eed354b778461425c20c7e30514aea040f37d6b5278c505f10400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_814c909c37ee5d23f3a296e8e10d9ff43cfa32ca8cfb3a9129e0fad543659791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814c909c37ee5d23f3a296e8e10d9ff43cfa32ca8cfb3a9129e0fad543659791->enter($__internal_814c909c37ee5d23f3a296e8e10d9ff43cfa32ca8cfb3a9129e0fad543659791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_913929b893eed354b778461425c20c7e30514aea040f37d6b5278c505f10400b->leave($__internal_913929b893eed354b778461425c20c7e30514aea040f37d6b5278c505f10400b_prof);

        
        $__internal_814c909c37ee5d23f3a296e8e10d9ff43cfa32ca8cfb3a9129e0fad543659791->leave($__internal_814c909c37ee5d23f3a296e8e10d9ff43cfa32ca8cfb3a9129e0fad543659791_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
