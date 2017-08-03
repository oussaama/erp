<?php

/* BoekkooiJqueryValidationBundle:Form:form_validate.js.twig */
class __TwigTemplate_ff79d6265c7bca1c5c843b665ce043af7ab794f5ba23673c707999eede2bd026 extends Twig_Template
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
        $__internal_32440fa84437f617be189711e4ac15158564495e41eabe96eb7e1c502697eb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32440fa84437f617be189711e4ac15158564495e41eabe96eb7e1c502697eb0d->enter($__internal_32440fa84437f617be189711e4ac15158564495e41eabe96eb7e1c502697eb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoekkooiJqueryValidationBundle:Form:form_validate.js.twig"));

        $__internal_2c70c13c330a5dff2c4f4220c4d9abf37008a0fc7c7f318c7d24a9acdafa9e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c70c13c330a5dff2c4f4220c4d9abf37008a0fc7c7f318c7d24a9acdafa9e21->enter($__internal_2c70c13c330a5dff2c4f4220c4d9abf37008a0fc7c7f318c7d24a9acdafa9e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoekkooiJqueryValidationBundle:Form:form_validate.js.twig"));

        // line 1
        $context["gen"] = $this->loadTemplate("BoekkooiJqueryValidationBundle:Form:macros.js.twig", "BoekkooiJqueryValidationBundle:Form:form_validate.js.twig", 1);
        // line 4
        echo "(function(\$) {
    \"use strict\";
    var form = \$(\"";
        // line 6
        echo $context["gen"]->getform_jquery_selector(($context["form"] ?? $this->getContext($context, "form")));
        echo "\");
    var validator = form.validate({
        rules: {";
        // line 9
        echo $context["gen"]->getform_rules(($context["fields"] ?? $this->getContext($context, "fields")), ($context["enforce_validation_groups"] ?? $this->getContext($context, "enforce_validation_groups")));
        // line 10
        echo "},
        messages: {";
        // line 12
        echo $context["gen"]->getform_messages(($context["fields"] ?? $this->getContext($context, "fields")));
        // line 13
        echo "}
    });";
        // line 16
        if (($context["enforce_validation_groups"] ?? $this->getContext($context, "enforce_validation_groups"))) {
            // line 17
            echo "validator.settings.validation_groups = {";
            echo $context["gen"]->getvalidation_groups(($context["validation_groups"] ?? $this->getContext($context, "validation_groups")), ($context["enabled_validation_groups"] ?? $this->getContext($context, "enabled_validation_groups")));
            echo "};";
        }
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? $this->getContext($context, "buttons")));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 21
            if ($this->getAttribute($context["button"], "cancel", array())) {
                // line 22
                echo "form.find(\"*[name=\\\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "name", array()), "js");
                echo "\\\"]\").addClass(\"cancel\");";
            } elseif (            // line 23
($context["enforce_validation_groups"] ?? $this->getContext($context, "enforce_validation_groups"))) {
                // line 24
                echo "form.find(\"*[name=\\\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "name", array()), "js");
                echo "\\\"]\").click(function() {
                validator.settings.validation_groups = {";
                // line 25
                echo $context["gen"]->getvalidation_groups(($context["validation_groups"] ?? $this->getContext($context, "validation_groups")), $this->getAttribute($context["button"], "validation_groups", array()));
                echo "};
            });";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "})(jQuery);";
        
        $__internal_32440fa84437f617be189711e4ac15158564495e41eabe96eb7e1c502697eb0d->leave($__internal_32440fa84437f617be189711e4ac15158564495e41eabe96eb7e1c502697eb0d_prof);

        
        $__internal_2c70c13c330a5dff2c4f4220c4d9abf37008a0fc7c7f318c7d24a9acdafa9e21->leave($__internal_2c70c13c330a5dff2c4f4220c4d9abf37008a0fc7c7f318c7d24a9acdafa9e21_prof);

    }

    public function getTemplateName()
    {
        return "BoekkooiJqueryValidationBundle:Form:form_validate.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  70 => 25,  65 => 24,  63 => 23,  59 => 22,  57 => 21,  53 => 20,  48 => 17,  46 => 16,  43 => 13,  41 => 12,  38 => 10,  36 => 9,  31 => 6,  27 => 4,  25 => 1,);
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
    var validator = form.validate({
        rules: {
            {{- gen.form_rules(fields, enforce_validation_groups) -}}
        },
        messages: {
            {{- gen.form_messages(fields) -}}
        }
    });

    {%- if enforce_validation_groups -%}
        validator.settings.validation_groups = { {{- gen.validation_groups(validation_groups, enabled_validation_groups) -}} };
    {%- endif -%}

    {%- for button in buttons -%}
        {%- if button.cancel -%}
            form.find(\"*[name=\\\"{{ button.name|e('js') }}\\\"]\").addClass(\"cancel\");
        {%- elseif enforce_validation_groups -%}
            form.find(\"*[name=\\\"{{ button.name|e('js') }}\\\"]\").click(function() {
                validator.settings.validation_groups = { {{- gen.validation_groups(validation_groups, button.validation_groups) -}} };
            });
        {%- endif -%}
    {%- endfor %}
})(jQuery);
{%- endautoescape -%}
", "BoekkooiJqueryValidationBundle:Form:form_validate.js.twig", "/var/www/html/erp/vendor/boekkooi/jquery-validation-bundle/src/Resources/views/Form/form_validate.js.twig");
    }
}
