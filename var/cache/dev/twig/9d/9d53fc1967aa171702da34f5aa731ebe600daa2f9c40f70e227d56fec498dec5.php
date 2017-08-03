<?php

/* BoekkooiJqueryValidationBundle:Form:dynamic_validate.js.twig */
class __TwigTemplate_8d91cd63b86123c67189492099ff34315ae5aec4514b470f0f3c8f7de161122f extends Twig_Template
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
        $__internal_11ecc06ca154a9a18410faf54ac8f1c89f92a60f7f91fcca049fb091c1bde631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ecc06ca154a9a18410faf54ac8f1c89f92a60f7f91fcca049fb091c1bde631->enter($__internal_11ecc06ca154a9a18410faf54ac8f1c89f92a60f7f91fcca049fb091c1bde631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoekkooiJqueryValidationBundle:Form:dynamic_validate.js.twig"));

        $__internal_166b449fd7a1055e9d85ad74c6927d00d65e059e00802c15724dbc1c7fefb417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166b449fd7a1055e9d85ad74c6927d00d65e059e00802c15724dbc1c7fefb417->enter($__internal_166b449fd7a1055e9d85ad74c6927d00d65e059e00802c15724dbc1c7fefb417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoekkooiJqueryValidationBundle:Form:dynamic_validate.js.twig"));

        // line 1
        $context["gen"] = $this->loadTemplate("BoekkooiJqueryValidationBundle:Form:macros.js.twig", "BoekkooiJqueryValidationBundle:Form:dynamic_validate.js.twig", 1);
        // line 4
        echo "(function(\$) {
    \"use strict\";
    var form = \$(\"";
        // line 6
        echo $context["gen"]->getform_jquery_selector(($context["form"] ?? $this->getContext($context, "form")));
        echo "\");
    var validator = form.validate();";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 10
            if ((twig_length_filter($this->env, $this->getAttribute($context["field"], "rules", array())) > 0)) {
                // line 11
                echo "form.find(\"*[name=\\\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "js");
                echo "\\\"]\").rules(\"add\", {";
                // line 12
                echo $context["gen"]->getrules($this->getAttribute($context["field"], "rules", array()), ($context["enforce_validation_groups"] ?? $this->getContext($context, "enforce_validation_groups")), true);
                // line 13
                echo "});";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "})(jQuery);";
        
        $__internal_11ecc06ca154a9a18410faf54ac8f1c89f92a60f7f91fcca049fb091c1bde631->leave($__internal_11ecc06ca154a9a18410faf54ac8f1c89f92a60f7f91fcca049fb091c1bde631_prof);

        
        $__internal_166b449fd7a1055e9d85ad74c6927d00d65e059e00802c15724dbc1c7fefb417->leave($__internal_166b449fd7a1055e9d85ad74c6927d00d65e059e00802c15724dbc1c7fefb417_prof);

    }

    public function getTemplateName()
    {
        return "BoekkooiJqueryValidationBundle:Form:dynamic_validate.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  47 => 13,  45 => 12,  41 => 11,  39 => 10,  35 => 9,  31 => 6,  27 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"BoekkooiJqueryValidationBundle:Form:macros.js.twig\" as gen %}

{%- autoescape false -%}
(function(\$) {
    \"use strict\";
    var form = \$(\"{{- gen.form_jquery_selector(form) -}}\");
    var validator = form.validate();

    {%- for field in fields -%}
        {%- if field.rules|length > 0 -%}
            form.find(\"*[name=\\\"{{ field.name|e('js') }}\\\"]\").rules(\"add\", {
                {{- gen.rules(field.rules, enforce_validation_groups, true)  -}}
            });
        {%- endif -%}
    {%- endfor -%}
})(jQuery);
{%- endautoescape -%}
", "BoekkooiJqueryValidationBundle:Form:dynamic_validate.js.twig", "/var/www/html/erp/vendor/boekkooi/jquery-validation-bundle/src/Resources/views/Form/dynamic_validate.js.twig");
    }
}
