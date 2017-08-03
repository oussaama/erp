<?php

/* CraueFormFlowBundle:FormFlow:stepList_content.html.twig */
class __TwigTemplate_f66a7815fac5981a00c7a74172be1ad843b9dffcd22c55ae13275135d8d05441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@CraueFormFlow/FormFlow/stepList_blocks.html.twig", "CraueFormFlowBundle:FormFlow:stepList_content.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@CraueFormFlow/FormFlow/stepList_blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ef1e94ea8e3bb29ba40071ae18d24c6300d2013b28b5cfc053329fabbcb4eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef1e94ea8e3bb29ba40071ae18d24c6300d2013b28b5cfc053329fabbcb4eeb->enter($__internal_9ef1e94ea8e3bb29ba40071ae18d24c6300d2013b28b5cfc053329fabbcb4eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:stepList_content.html.twig"));

        $__internal_c1dcb066a458591526b04839ac8c92529d155542679a58c1be21af5ed94ba875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dcb066a458591526b04839ac8c92529d155542679a58c1be21af5ed94ba875->enter($__internal_c1dcb066a458591526b04839ac8c92529d155542679a58c1be21af5ed94ba875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:stepList_content.html.twig"));

        // line 3
        if ( !twig_test_empty($this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getStepLabels", array(), "method"))) {
            // line 4
            echo "<ol class=\"craue_formflow_steplist\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["flow"] ?? $this->getContext($context, "flow")), "getStepLabels", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stepLabel"]) {
                // line 6
                echo "\t\t\t<li";
                $this->displayBlock("craue_flow_stepList_class", $context, $blocks);
                echo ">";
                // line 7
                if ($this->env->getExtension('Craue\FormFlowBundle\Twig\Extension\FormFlowExtension')->isStepLinkable(($context["flow"] ?? $this->getContext($context, "flow")), $this->getAttribute($context["loop"], "index", array()))) {
                    // line 8
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->env->getExtension('Craue\FormFlowBundle\Twig\Extension\FormFlowExtension')->addDynamicStepNavigationParameters(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 9
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")),                     // line 10
($context["flow"] ?? $this->getContext($context, "flow")), $this->getAttribute($context["loop"], "index", array()))), "html", null, true);
                    echo "\">";
                    // line 11
                    $this->displayBlock("craue_flow_stepLabel", $context, $blocks);
                    // line 12
                    echo "</a>";
                } else {
                    // line 14
                    $this->displayBlock("craue_flow_stepLabel", $context, $blocks);
                }
                // line 16
                echo "</li>
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</ol>";
        }
        
        $__internal_9ef1e94ea8e3bb29ba40071ae18d24c6300d2013b28b5cfc053329fabbcb4eeb->leave($__internal_9ef1e94ea8e3bb29ba40071ae18d24c6300d2013b28b5cfc053329fabbcb4eeb_prof);

        
        $__internal_c1dcb066a458591526b04839ac8c92529d155542679a58c1be21af5ed94ba875->leave($__internal_c1dcb066a458591526b04839ac8c92529d155542679a58c1be21af5ed94ba875_prof);

    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepList_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  79 => 16,  76 => 14,  73 => 12,  71 => 11,  68 => 10,  67 => 9,  65 => 8,  63 => 7,  59 => 6,  42 => 5,  39 => 4,  37 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use '@CraueFormFlow/FormFlow/stepList_blocks.html.twig' %}

{%- if flow.getStepLabels() is not empty -%}
\t<ol class=\"craue_formflow_steplist\">
\t\t{% for stepLabel in flow.getStepLabels() %}
\t\t\t<li{{ block('craue_flow_stepList_class') }}>
\t\t\t\t{%- if craue_isStepLinkable(flow, loop.index) -%}
\t\t\t\t\t<a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all
\t\t\t\t\t\t\t| merge(app.request.attributes.get('_route_params'))
\t\t\t\t\t\t\t| craue_addDynamicStepNavigationParameters(flow, loop.index)) }}\">
\t\t\t\t\t\t{{- block('craue_flow_stepLabel') -}}
\t\t\t\t\t</a>
\t\t\t\t{%- else -%}
\t\t\t\t\t{{ block('craue_flow_stepLabel') }}
\t\t\t\t{%- endif -%}
\t\t\t</li>
\t\t{% endfor %}
\t</ol>
{%- endif -%}
", "CraueFormFlowBundle:FormFlow:stepList_content.html.twig", "/var/www/html/erp/vendor/craue/formflow-bundle/Resources/views/FormFlow/stepList_content.html.twig");
    }
}
