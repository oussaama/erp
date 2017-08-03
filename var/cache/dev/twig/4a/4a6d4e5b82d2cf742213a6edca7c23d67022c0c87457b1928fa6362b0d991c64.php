<?php

/* BoekkooiJqueryValidationBundle:Form:conditions.js.twig */
class __TwigTemplate_fb9424464336e968e657cb8ffde1eb1a9331f875a71fe8ab36a00544e722ad41 extends Twig_Template
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
        $__internal_438d1cb10c8a1523ac541f00a2fbba646c91f1b2795da4aa9c13f0a94e4aadab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438d1cb10c8a1523ac541f00a2fbba646c91f1b2795da4aa9c13f0a94e4aadab->enter($__internal_438d1cb10c8a1523ac541f00a2fbba646c91f1b2795da4aa9c13f0a94e4aadab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoekkooiJqueryValidationBundle:Form:conditions.js.twig"));

        $__internal_fc7a635b28b4afa3b06ca3e374487cd5245c55e7cbbefe5cb902b37312a74cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7a635b28b4afa3b06ca3e374487cd5245c55e7cbbefe5cb902b37312a74cfd->enter($__internal_fc7a635b28b4afa3b06ca3e374487cd5245c55e7cbbefe5cb902b37312a74cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoekkooiJqueryValidationBundle:Form:conditions.js.twig"));

        // line 17
        echo "
";
        
        $__internal_438d1cb10c8a1523ac541f00a2fbba646c91f1b2795da4aa9c13f0a94e4aadab->leave($__internal_438d1cb10c8a1523ac541f00a2fbba646c91f1b2795da4aa9c13f0a94e4aadab_prof);

        
        $__internal_fc7a635b28b4afa3b06ca3e374487cd5245c55e7cbbefe5cb902b37312a74cfd->leave($__internal_fc7a635b28b4afa3b06ca3e374487cd5245c55e7cbbefe5cb902b37312a74cfd_prof);

    }

    // line 1
    public function getfield_dependency($__condition__ = null, $__rule__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "condition" => $__condition__,
            "rule" => $__rule__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d84ae37c41e52bafc076bf5c01e2cb57079841c8c1b70bfcc3e4628739aee37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d84ae37c41e52bafc076bf5c01e2cb57079841c8c1b70bfcc3e4628739aee37d->enter($__internal_d84ae37c41e52bafc076bf5c01e2cb57079841c8c1b70bfcc3e4628739aee37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field_dependency"));

            $__internal_34377f4a4697007940abae2795ff9118e73137a2df7288a37e77ec2778bdb071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_34377f4a4697007940abae2795ff9118e73137a2df7288a37e77ec2778bdb071->enter($__internal_34377f4a4697007940abae2795ff9118e73137a2df7288a37e77ec2778bdb071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field_dependency"));

            // line 2
            $context["isRequired"] = ($this->getAttribute(($context["rule"] ?? $this->getContext($context, "rule")), "name", array()) === "required");
            // line 4
            if (($context["isRequired"] ?? $this->getContext($context, "isRequired"))) {
                // line 5
                echo "var dep = form.find(\"[name=\\\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["condition"] ?? $this->getContext($context, "condition")), "field", array()), "js");
                echo "\\\"]\")[0];";
            }
            // line 8
            echo "if (";
            // line 9
            if (($this->getAttribute(($context["condition"] ?? $this->getContext($context, "condition")), "condition", array()) === "!")) {
                echo "!";
            }
            // line 10
            echo "(";
            // line 11
            if (($context["isRequired"] ?? $this->getContext($context, "isRequired"))) {
                // line 12
                echo "!\$.validator.methods.required.call(validator, validator.elementValue(dep), dep, true) || ";
            }
            // line 13
            echo "\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["condition"] ?? $this->getContext($context, "condition")), "field", array()), "js");
            echo "\" in validator.errorMap || \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["condition"] ?? $this->getContext($context, "condition")), "field", array()), "js");
            echo "\" in validator.invalid)) {
        return false;
    }
";
            
            $__internal_34377f4a4697007940abae2795ff9118e73137a2df7288a37e77ec2778bdb071->leave($__internal_34377f4a4697007940abae2795ff9118e73137a2df7288a37e77ec2778bdb071_prof);

            
            $__internal_d84ae37c41e52bafc076bf5c01e2cb57079841c8c1b70bfcc3e4628739aee37d->leave($__internal_d84ae37c41e52bafc076bf5c01e2cb57079841c8c1b70bfcc3e4628739aee37d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getfield_value_dependency($__condition__ = null, $__rule__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "condition" => $__condition__,
            "rule" => $__rule__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cd9b9ef49936862674efa56caa129d152fc93984594c0be5e0166d78fa1d229d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cd9b9ef49936862674efa56caa129d152fc93984594c0be5e0166d78fa1d229d->enter($__internal_cd9b9ef49936862674efa56caa129d152fc93984594c0be5e0166d78fa1d229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field_value_dependency"));

            $__internal_61110934278b04b32f28492a5457441176e37d177284d473cee92fdd89af4c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_61110934278b04b32f28492a5457441176e37d177284d473cee92fdd89af4c16->enter($__internal_61110934278b04b32f28492a5457441176e37d177284d473cee92fdd89af4c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "field_value_dependency"));

            // line 19
            echo "    var dep = form.find(\"[name=\\\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["condition"] ?? $this->getContext($context, "condition")), "field", array()), "js");
            echo "\\\"]\");
    if(dep.length > 1 || dep.is(':checkbox')) {
        dep = dep.filter(':checked')
    } else if(dep.is('select')) {
        dep = dep.find(':selected');
    }

    if(";
            // line 27
            if (($this->getAttribute(($context["condition"] ?? $this->getContext($context, "condition")), "condition", array()) === "!=")) {
                echo "!";
            }
            // line 28
            echo "\$.inArray(
            \"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["condition"] ?? $this->getContext($context, "condition")), "value", array()), "js");
            echo "\",
            \$.map(dep, function(elt) { return \$(elt).val(); })
        )
    ) {
        return false;
    }
";
            
            $__internal_61110934278b04b32f28492a5457441176e37d177284d473cee92fdd89af4c16->leave($__internal_61110934278b04b32f28492a5457441176e37d177284d473cee92fdd89af4c16_prof);

            
            $__internal_cd9b9ef49936862674efa56caa129d152fc93984594c0be5e0166d78fa1d229d->leave($__internal_cd9b9ef49936862674efa56caa129d152fc93984594c0be5e0166d78fa1d229d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BoekkooiJqueryValidationBundle:Form:conditions.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 29,  139 => 28,  135 => 27,  124 => 19,  105 => 18,  77 => 13,  74 => 12,  72 => 11,  70 => 10,  66 => 9,  64 => 8,  59 => 5,  57 => 4,  55 => 2,  36 => 1,  25 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro field_dependency(condition, rule) %}
    {%- set isRequired = rule.name is same as('required') -%}

    {%- if isRequired -%}
        var dep = form.find(\"[name=\\\"{{ condition.field|e('js') }}\\\"]\")[0];
    {%- endif -%}

    if (
    {%- if condition.condition is same as('!') -%}!{%- endif -%}
    (
        {%- if isRequired -%}
            !\$.validator.methods.required.call(validator, validator.elementValue(dep), dep, true) || {% endif -%}
        \"{{ condition.field|e('js') }}\" in validator.errorMap || \"{{ condition.field|e('js') }}\" in validator.invalid)) {
        return false;
    }
{% endmacro %}

{% macro field_value_dependency(condition, rule) %}
    var dep = form.find(\"[name=\\\"{{ condition.field|e('js') }}\\\"]\");
    if(dep.length > 1 || dep.is(':checkbox')) {
        dep = dep.filter(':checked')
    } else if(dep.is('select')) {
        dep = dep.find(':selected');
    }

    if(
    {%- if condition.condition is same as('!=') -%}!{%- endif -%}
        \$.inArray(
            \"{{ condition.value|e('js') }}\",
            \$.map(dep, function(elt) { return \$(elt).val(); })
        )
    ) {
        return false;
    }
{% endmacro %}
", "BoekkooiJqueryValidationBundle:Form:conditions.js.twig", "/var/www/html/erp/vendor/boekkooi/jquery-validation-bundle/src/Resources/views/Form/conditions.js.twig");
    }
}
