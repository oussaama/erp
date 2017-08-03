<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_566dbd7fb76a2ed9b574212279630eb3589c222abef838bf54c4936f3c9dd697 extends Twig_Template
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
        $__internal_dcda8af4f24cd1f982abf59e1d858819cf0324c96fc009e7f78d18bb4595ad2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcda8af4f24cd1f982abf59e1d858819cf0324c96fc009e7f78d18bb4595ad2c->enter($__internal_dcda8af4f24cd1f982abf59e1d858819cf0324c96fc009e7f78d18bb4595ad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_e8f33629688a98beabb77022d5b77785ddb6a34c0e5941640179af7d0572778b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f33629688a98beabb77022d5b77785ddb6a34c0e5941640179af7d0572778b->enter($__internal_e8f33629688a98beabb77022d5b77785ddb6a34c0e5941640179af7d0572778b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => ($context["invalid_username"] ?? $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_dcda8af4f24cd1f982abf59e1d858819cf0324c96fc009e7f78d18bb4595ad2c->leave($__internal_dcda8af4f24cd1f982abf59e1d858819cf0324c96fc009e7f78d18bb4595ad2c_prof);

        
        $__internal_e8f33629688a98beabb77022d5b77785ddb6a34c0e5941640179af7d0572778b->leave($__internal_e8f33629688a98beabb77022d5b77785ddb6a34c0e5941640179af7d0572778b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  39 => 6,  33 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        {% if invalid_username is defined %}
            <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>
        {% endif %}
        <label for=\"username\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/erp/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
