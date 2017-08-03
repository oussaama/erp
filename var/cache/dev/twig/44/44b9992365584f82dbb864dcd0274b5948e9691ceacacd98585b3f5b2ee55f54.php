<?php

/* CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig */
class __TwigTemplate_1595de89c73a514919e280bd356b77a01a26cd4fba543995314231bfa85db7f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'craue_flow_stepList_class' => array($this, 'block_craue_flow_stepList_class'),
            'craue_flow_stepLabel' => array($this, 'block_craue_flow_stepLabel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_825cd93920021f3922641640679647d76903629c1dc16790a1eaf90ecc59fa88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825cd93920021f3922641640679647d76903629c1dc16790a1eaf90ecc59fa88->enter($__internal_825cd93920021f3922641640679647d76903629c1dc16790a1eaf90ecc59fa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig"));

        $__internal_3d85d7211671ca622feebd9605eb43cad92d1e5a2ad87e47adc72587dd9ce6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d85d7211671ca622feebd9605eb43cad92d1e5a2ad87e47adc72587dd9ce6d6->enter($__internal_3d85d7211671ca622feebd9605eb43cad92d1e5a2ad87e47adc72587dd9ce6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig"));

        // line 1
        $this->displayBlock('craue_flow_stepList_class', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('craue_flow_stepLabel', $context, $blocks);
        
        $__internal_825cd93920021f3922641640679647d76903629c1dc16790a1eaf90ecc59fa88->leave($__internal_825cd93920021f3922641640679647d76903629c1dc16790a1eaf90ecc59fa88_prof);

        
        $__internal_3d85d7211671ca622feebd9605eb43cad92d1e5a2ad87e47adc72587dd9ce6d6->leave($__internal_3d85d7211671ca622feebd9605eb43cad92d1e5a2ad87e47adc72587dd9ce6d6_prof);

    }

    // line 1
    public function block_craue_flow_stepList_class($context, array $blocks = array())
    {
        $__internal_907fa681344ced3b6b3f0de824fbbe7a18261e10022fef1bfcae19f7a6a76dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907fa681344ced3b6b3f0de824fbbe7a18261e10022fef1bfcae19f7a6a76dfb->enter($__internal_907fa681344ced3b6b3f0de824fbbe7a18261e10022fef1bfcae19f7a6a76dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "craue_flow_stepList_class"));

        $__internal_5be88762096d5b1b9705a44ee3488d95337d03cbcef57bd26b1097c0db03019a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be88762096d5b1b9705a44ee3488d95337d03cbcef57bd26b1097c0db03019a->enter($__internal_5be88762096d5b1b9705a44ee3488d95337d03cbcef57bd26b1097c0db03019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "craue_flow_stepList_class"));

        // line 2
        if (($this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index", array()) == $this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method"))) {
            // line 3
            echo " class=\"craue_formflow_current_step\"";
        } elseif ($this->getAttribute(        // line 4
($context["flow"] ?? $this->getContext($context, "flow")), "isStepSkipped", array(0 => $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index", array())), "method")) {
            // line 5
            echo " class=\"craue_formflow_skipped_step\"";
        } elseif ($this->getAttribute(        // line 6
($context["flow"] ?? $this->getContext($context, "flow")), "isStepDone", array(0 => $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index", array())), "method")) {
            // line 7
            echo " class=\"craue_formflow_done_step\"";
        }
        
        $__internal_5be88762096d5b1b9705a44ee3488d95337d03cbcef57bd26b1097c0db03019a->leave($__internal_5be88762096d5b1b9705a44ee3488d95337d03cbcef57bd26b1097c0db03019a_prof);

        
        $__internal_907fa681344ced3b6b3f0de824fbbe7a18261e10022fef1bfcae19f7a6a76dfb->leave($__internal_907fa681344ced3b6b3f0de824fbbe7a18261e10022fef1bfcae19f7a6a76dfb_prof);

    }

    // line 11
    public function block_craue_flow_stepLabel($context, array $blocks = array())
    {
        $__internal_b46dfd1ea13d0654f1e7857d593be63b2bc19a01bb7b11c43297f886fa1aa367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46dfd1ea13d0654f1e7857d593be63b2bc19a01bb7b11c43297f886fa1aa367->enter($__internal_b46dfd1ea13d0654f1e7857d593be63b2bc19a01bb7b11c43297f886fa1aa367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "craue_flow_stepLabel"));

        $__internal_dba95cc739a2995950f5072bf5eee2af944fec5c8794ce22f28dda51a04f9a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba95cc739a2995950f5072bf5eee2af944fec5c8794ce22f28dda51a04f9a65->enter($__internal_dba95cc739a2995950f5072bf5eee2af944fec5c8794ce22f28dda51a04f9a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "craue_flow_stepLabel"));

        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["stepLabel"] ?? $this->getContext($context, "stepLabel"))), "html", null, true);
        
        $__internal_dba95cc739a2995950f5072bf5eee2af944fec5c8794ce22f28dda51a04f9a65->leave($__internal_dba95cc739a2995950f5072bf5eee2af944fec5c8794ce22f28dda51a04f9a65_prof);

        
        $__internal_b46dfd1ea13d0654f1e7857d593be63b2bc19a01bb7b11c43297f886fa1aa367->leave($__internal_b46dfd1ea13d0654f1e7857d593be63b2bc19a01bb7b11c43297f886fa1aa367_prof);

    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  72 => 11,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  53 => 3,  51 => 2,  42 => 1,  32 => 11,  29 => 10,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block craue_flow_stepList_class %}
\t{%- if loop.index == flow.getCurrentStepNumber() -%}
\t\t{{ ' class=\"craue_formflow_current_step\"' }}
\t{%- elseif flow.isStepSkipped(loop.index) -%}
\t\t{{ ' class=\"craue_formflow_skipped_step\"' }}
\t{%- elseif flow.isStepDone(loop.index) -%}
\t\t{{ ' class=\"craue_formflow_done_step\"' }}
\t{%- endif -%}
{% endblock %}

{% block craue_flow_stepLabel %}
\t{{- stepLabel | trans -}}
{% endblock %}
", "CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig", "/var/www/html/erp/vendor/craue/formflow-bundle/Resources/views/FormFlow/stepList_blocks.html.twig");
    }
}
