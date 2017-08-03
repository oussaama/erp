<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1b34caac2ff78d4f1e8984ab39faddf6c5c864666ee32534774cb139f1024cbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_700745427591475aff92130dc89e7ac18735e52414943f6c18ce499b621d7aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700745427591475aff92130dc89e7ac18735e52414943f6c18ce499b621d7aed->enter($__internal_700745427591475aff92130dc89e7ac18735e52414943f6c18ce499b621d7aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5bfc45d5d13cdea995e3a3aedc8f348593ec91d5bd0b02294d032b4166f1e8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfc45d5d13cdea995e3a3aedc8f348593ec91d5bd0b02294d032b4166f1e8d0->enter($__internal_5bfc45d5d13cdea995e3a3aedc8f348593ec91d5bd0b02294d032b4166f1e8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700745427591475aff92130dc89e7ac18735e52414943f6c18ce499b621d7aed->leave($__internal_700745427591475aff92130dc89e7ac18735e52414943f6c18ce499b621d7aed_prof);

        
        $__internal_5bfc45d5d13cdea995e3a3aedc8f348593ec91d5bd0b02294d032b4166f1e8d0->leave($__internal_5bfc45d5d13cdea995e3a3aedc8f348593ec91d5bd0b02294d032b4166f1e8d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7b097f7f0532fc93102c1ca27fd037cb5b0ece02e530b185c764ee7e4e5b6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b097f7f0532fc93102c1ca27fd037cb5b0ece02e530b185c764ee7e4e5b6ce->enter($__internal_e7b097f7f0532fc93102c1ca27fd037cb5b0ece02e530b185c764ee7e4e5b6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a468a2a4b771139834551ddda0c9ad5ed9c54a545ca898b476a2ae3fce1cf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a468a2a4b771139834551ddda0c9ad5ed9c54a545ca898b476a2ae3fce1cf56->enter($__internal_1a468a2a4b771139834551ddda0c9ad5ed9c54a545ca898b476a2ae3fce1cf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1a468a2a4b771139834551ddda0c9ad5ed9c54a545ca898b476a2ae3fce1cf56->leave($__internal_1a468a2a4b771139834551ddda0c9ad5ed9c54a545ca898b476a2ae3fce1cf56_prof);

        
        $__internal_e7b097f7f0532fc93102c1ca27fd037cb5b0ece02e530b185c764ee7e4e5b6ce->leave($__internal_e7b097f7f0532fc93102c1ca27fd037cb5b0ece02e530b185c764ee7e4e5b6ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a236d4ed256a060425d2929b186ac9b2aec32c69a8cf1ad9a0f757c187b95a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a236d4ed256a060425d2929b186ac9b2aec32c69a8cf1ad9a0f757c187b95a6->enter($__internal_0a236d4ed256a060425d2929b186ac9b2aec32c69a8cf1ad9a0f757c187b95a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3a147187c11e33f340cc3c7d20285cf20f92e7f9f6367fef148e35ecfbf64b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a147187c11e33f340cc3c7d20285cf20f92e7f9f6367fef148e35ecfbf64b8->enter($__internal_f3a147187c11e33f340cc3c7d20285cf20f92e7f9f6367fef148e35ecfbf64b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3a147187c11e33f340cc3c7d20285cf20f92e7f9f6367fef148e35ecfbf64b8->leave($__internal_f3a147187c11e33f340cc3c7d20285cf20f92e7f9f6367fef148e35ecfbf64b8_prof);

        
        $__internal_0a236d4ed256a060425d2929b186ac9b2aec32c69a8cf1ad9a0f757c187b95a6->leave($__internal_0a236d4ed256a060425d2929b186ac9b2aec32c69a8cf1ad9a0f757c187b95a6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a0a40408c2dbf07ea799941abc1a4c7ae1b61aa66a8042c0144a8dbf9f081aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0a40408c2dbf07ea799941abc1a4c7ae1b61aa66a8042c0144a8dbf9f081aa->enter($__internal_3a0a40408c2dbf07ea799941abc1a4c7ae1b61aa66a8042c0144a8dbf9f081aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38bd4c132a5e64ad6278ed1a7bbba2e979642d03e9e7143c3449602f956e57a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bd4c132a5e64ad6278ed1a7bbba2e979642d03e9e7143c3449602f956e57a0->enter($__internal_38bd4c132a5e64ad6278ed1a7bbba2e979642d03e9e7143c3449602f956e57a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_38bd4c132a5e64ad6278ed1a7bbba2e979642d03e9e7143c3449602f956e57a0->leave($__internal_38bd4c132a5e64ad6278ed1a7bbba2e979642d03e9e7143c3449602f956e57a0_prof);

        
        $__internal_3a0a40408c2dbf07ea799941abc1a4c7ae1b61aa66a8042c0144a8dbf9f081aa->leave($__internal_3a0a40408c2dbf07ea799941abc1a4c7ae1b61aa66a8042c0144a8dbf9f081aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
