<?php

/* CraueFormFlowBundle:FormFlow:buttons.html.twig */
class __TwigTemplate_8dc12177be5506d35a15a7eb524d5833f104da32ea2ea183ee728a4e1fce0009 extends Twig_Template
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
        $__internal_290bb063d8e931381e2ab7feddc23a9995341959a77139ae9f0ccdab9b304098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290bb063d8e931381e2ab7feddc23a9995341959a77139ae9f0ccdab9b304098->enter($__internal_290bb063d8e931381e2ab7feddc23a9995341959a77139ae9f0ccdab9b304098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:buttons.html.twig"));

        $__internal_05bb932f3db089534f48551f03b2166953dc24af3821c106751e098f62b84120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bb932f3db089534f48551f03b2166953dc24af3821c106751e098f62b84120->enter($__internal_05bb932f3db089534f48551f03b2166953dc24af3821c106751e098f62b84120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:buttons.html.twig"));

        // line 1
        $context["renderBackButton"] = (($this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getFirstStepNumber", array(), "method") < $this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getLastStepNumber", array(), "method")) && twig_in_filter($this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method"), range(($this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getFirstStepNumber", array(), "method") + 1), $this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getLastStepNumber", array(), "method"))));
        // line 2
        $context["renderResetButton"] = ((array_key_exists("craue_formflow_button_render_reset", $context)) ? (($context["craue_formflow_button_render_reset"] ?? $this->getContext($context, "craue_formflow_button_render_reset"))) : (true));
        // line 3
        $context["buttonCount"] = ((1 + ((($context["renderBackButton"] ?? $this->getContext($context, "renderBackButton"))) ? (1) : (0))) + ((($context["renderResetButton"] ?? $this->getContext($context, "renderResetButton"))) ? (1) : (0)));
        // line 4
        echo "
<div class=\"craue_formflow_buttons craue_formflow_button_count_";
        // line 5
        echo twig_escape_filter($this->env, ($context["buttonCount"] ?? $this->getContext($context, "buttonCount")), "html", null, true);
        echo "\">
\t";
        // line 11
        $context["isLastStep"] = ($this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method") == $this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getLastStepNumber", array(), "method"));
        // line 12
        $context["craue_formflow_button_class_last"] = ((array_key_exists("craue_formflow_button_class_last", $context)) ? (_twig_default_filter(($context["craue_formflow_button_class_last"] ?? $this->getContext($context, "craue_formflow_button_class_last")), "craue_formflow_button_last")) : ("craue_formflow_button_last"));
        // line 13
        $context["craue_formflow_button_class_last"] = ((($context["isLastStep"] ?? $this->getContext($context, "isLastStep"))) ? (((        // line 14
array_key_exists("craue_formflow_button_class_finish", $context)) ? (_twig_default_filter(($context["craue_formflow_button_class_finish"] ?? $this->getContext($context, "craue_formflow_button_class_finish")), ($context["craue_formflow_button_class_last"] ?? $this->getContext($context, "craue_formflow_button_class_last")))) : (($context["craue_formflow_button_class_last"] ?? $this->getContext($context, "craue_formflow_button_class_last"))))) : (((        // line 15
array_key_exists("craue_formflow_button_class_next", $context)) ? (_twig_default_filter(($context["craue_formflow_button_class_next"] ?? $this->getContext($context, "craue_formflow_button_class_next")), ($context["craue_formflow_button_class_last"] ?? $this->getContext($context, "craue_formflow_button_class_last")))) : (($context["craue_formflow_button_class_last"] ?? $this->getContext($context, "craue_formflow_button_class_last"))))));
        // line 17
        $context["craue_buttons"] = array(0 => array("label" => ((        // line 19
array_key_exists("craue_formflow_button_label_last", $context)) ? (_twig_default_filter(($context["craue_formflow_button_label_last"] ?? $this->getContext($context, "craue_formflow_button_label_last")), ((($context["isLastStep"] ?? $this->getContext($context, "isLastStep"))) ? (((array_key_exists("craue_formflow_button_label_finish", $context)) ? (_twig_default_filter(($context["craue_formflow_button_label_finish"] ?? $this->getContext($context, "craue_formflow_button_label_finish")), "button.finish")) : ("button.finish"))) : (((array_key_exists("craue_formflow_button_label_next", $context)) ? (_twig_default_filter(($context["craue_formflow_button_label_next"] ?? $this->getContext($context, "craue_formflow_button_label_next")), "button.next")) : ("button.next")))))) : (((($context["isLastStep"] ?? $this->getContext($context, "isLastStep"))) ? (((array_key_exists("craue_formflow_button_label_finish", $context)) ? (_twig_default_filter(($context["craue_formflow_button_label_finish"] ?? $this->getContext($context, "craue_formflow_button_label_finish")), "button.finish")) : ("button.finish"))) : (((array_key_exists("craue_formflow_button_label_next", $context)) ? (_twig_default_filter(($context["craue_formflow_button_label_next"] ?? $this->getContext($context, "craue_formflow_button_label_next")), "button.next")) : ("button.next")))))), "render" => true, "attr" => array("class" =>         // line 22
($context["craue_formflow_button_class_last"] ?? $this->getContext($context, "craue_formflow_button_class_last")))), 1 => array("label" => ((        // line 26
array_key_exists("craue_formflow_button_label_back", $context)) ? (_twig_default_filter(($context["craue_formflow_button_label_back"] ?? $this->getContext($context, "craue_formflow_button_label_back")), "button.back")) : ("button.back")), "render" =>         // line 27
($context["renderBackButton"] ?? $this->getContext($context, "renderBackButton")), "attr" => array("class" => ((        // line 29
array_key_exists("craue_formflow_button_class_back", $context)) ? (_twig_default_filter(($context["craue_formflow_button_class_back"] ?? $this->getContext($context, "craue_formflow_button_class_back")), "")) : ("")), "name" => $this->getAttribute(        // line 30
($context["flow"] ?? $this->getContext($context, "flow")), "getFormTransitionKey", array(), "method"), "value" => "back", "formnovalidate" => "formnovalidate")), 2 => array("label" => ((        // line 36
array_key_exists("craue_formflow_button_label_reset", $context)) ? (_twig_default_filter(($context["craue_formflow_button_label_reset"] ?? $this->getContext($context, "craue_formflow_button_label_reset")), "button.reset")) : ("button.reset")), "render" =>         // line 37
($context["renderResetButton"] ?? $this->getContext($context, "renderResetButton")), "attr" => array("class" => ((        // line 39
array_key_exists("craue_formflow_button_class_reset", $context)) ? (_twig_default_filter(($context["craue_formflow_button_class_reset"] ?? $this->getContext($context, "craue_formflow_button_class_reset")), "craue_formflow_button_first")) : ("craue_formflow_button_first")), "name" => $this->getAttribute(        // line 40
($context["flow"] ?? $this->getContext($context, "flow")), "getFormTransitionKey", array(), "method"), "value" => "reset", "formnovalidate" => "formnovalidate")));
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["craue_buttons"] ?? $this->getContext($context, "craue_buttons")));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            if ($this->getAttribute($context["button"], "render", array())) {
                // line 48
                echo "\t\t<button type=\"submit\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["button"], "attr", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["button"], "label", array()), array(), "CraueFormFlowBundle"), "html", null, true);
                // line 50
                echo "</button>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
";
        
        $__internal_290bb063d8e931381e2ab7feddc23a9995341959a77139ae9f0ccdab9b304098->leave($__internal_290bb063d8e931381e2ab7feddc23a9995341959a77139ae9f0ccdab9b304098_prof);

        
        $__internal_05bb932f3db089534f48551f03b2166953dc24af3821c106751e098f62b84120->leave($__internal_05bb932f3db089534f48551f03b2166953dc24af3821c106751e098f62b84120_prof);

    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 52,  80 => 50,  78 => 49,  63 => 48,  58 => 47,  56 => 40,  55 => 39,  54 => 37,  53 => 36,  52 => 30,  51 => 29,  50 => 27,  49 => 26,  48 => 22,  47 => 19,  46 => 17,  44 => 15,  43 => 14,  42 => 13,  40 => 12,  38 => 11,  34 => 5,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set renderBackButton = flow.getFirstStepNumber() < flow.getLastStepNumber() and flow.getCurrentStepNumber() in (flow.getFirstStepNumber() + 1) .. flow.getLastStepNumber() %}
{% set renderResetButton = craue_formflow_button_render_reset is defined ? craue_formflow_button_render_reset : true %}
{% set buttonCount = 1 + (renderBackButton ? 1 : 0) + (renderResetButton ? 1 : 0) %}

<div class=\"craue_formflow_buttons craue_formflow_button_count_{{ buttonCount }}\">
\t{#
\t\tDefault button (the one trigged by pressing the enter/return key) must be defined first.
\t\tThus, all buttons are defined in reverse order and will be reversed again via CSS.
\t\tSee http://stackoverflow.com/questions/1963245/multiple-submit-buttons-specifying-default-button
\t#}
\t{%- set isLastStep = flow.getCurrentStepNumber() == flow.getLastStepNumber() -%}
\t{%- set craue_formflow_button_class_last = craue_formflow_button_class_last | default('craue_formflow_button_last') -%}
\t{%- set craue_formflow_button_class_last = isLastStep
\t\t\t? craue_formflow_button_class_finish | default(craue_formflow_button_class_last)
\t\t\t: craue_formflow_button_class_next | default(craue_formflow_button_class_last)
\t\t-%}
\t{%- set craue_buttons = [
\t\t\t{
\t\t\t\tlabel: craue_formflow_button_label_last | default(isLastStep ? craue_formflow_button_label_finish | default('button.finish') : craue_formflow_button_label_next | default('button.next')),
\t\t\t\trender: true,
\t\t\t\tattr: {
\t\t\t\t\tclass: craue_formflow_button_class_last,
\t\t\t\t},
\t\t\t},
\t\t\t{
\t\t\t\tlabel: craue_formflow_button_label_back | default('button.back'),
\t\t\t\trender: renderBackButton,
\t\t\t\tattr: {
\t\t\t\t\tclass: craue_formflow_button_class_back | default(''),
\t\t\t\t\tname: flow.getFormTransitionKey(),
\t\t\t\t\tvalue: 'back',
\t\t\t\t\tformnovalidate: 'formnovalidate',
\t\t\t\t},
\t\t\t},
\t\t\t{
\t\t\t\tlabel: craue_formflow_button_label_reset | default('button.reset'),
\t\t\t\trender: renderResetButton,
\t\t\t\tattr: {
\t\t\t\t\tclass: craue_formflow_button_class_reset | default('craue_formflow_button_first'),
\t\t\t\t\tname: flow.getFormTransitionKey(),
\t\t\t\t\tvalue: 'reset',
\t\t\t\t\tformnovalidate: 'formnovalidate',
\t\t\t\t},
\t\t\t},
\t\t] -%}

\t{% for button in craue_buttons if button.render %}
\t\t<button type=\"submit\"{% for key, value in button.attr %} {{ key }}=\"{{ value }}\"{% endfor %}>
\t\t\t{{- button.label | trans({}, 'CraueFormFlowBundle') -}}
\t\t</button>
\t{% endfor %}
</div>
", "CraueFormFlowBundle:FormFlow:buttons.html.twig", "/var/www/html/erp/vendor/craue/formflow-bundle/Resources/views/FormFlow/buttons.html.twig");
    }
}
