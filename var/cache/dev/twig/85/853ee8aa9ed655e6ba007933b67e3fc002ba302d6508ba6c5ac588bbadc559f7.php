<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_4dcb719a49dda925c1fabb85efcb8a4599af18b4cbe36d8f59fabc6117f6db5d extends Twig_Template
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
        $__internal_18d5e51abbbdaeb4b0d6fff81b129aa1b576c52f995c264ba8c6ba7ac2b12296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d5e51abbbdaeb4b0d6fff81b129aa1b576c52f995c264ba8c6ba7ac2b12296->enter($__internal_18d5e51abbbdaeb4b0d6fff81b129aa1b576c52f995c264ba8c6ba7ac2b12296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_0f40c7defb6a7ea6f318f1c39b1edf52239c0bdab6618a74d47e11d0c5e9c6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f40c7defb6a7ea6f318f1c39b1edf52239c0bdab6618a74d47e11d0c5e9c6db->enter($__internal_0f40c7defb6a7ea6f318f1c39b1edf52239c0bdab6618a74d47e11d0c5e9c6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_18d5e51abbbdaeb4b0d6fff81b129aa1b576c52f995c264ba8c6ba7ac2b12296->leave($__internal_18d5e51abbbdaeb4b0d6fff81b129aa1b576c52f995c264ba8c6ba7ac2b12296_prof);

        
        $__internal_0f40c7defb6a7ea6f318f1c39b1edf52239c0bdab6618a74d47e11d0c5e9c6db->leave($__internal_0f40c7defb6a7ea6f318f1c39b1edf52239c0bdab6618a74d47e11d0c5e9c6db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/erp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
