<?php

/* baseFront.html.twig */
class __TwigTemplate_ead7666c7e60749d4cabd4a745d6746fdcbe640c649b24ce6251c842d0aa754e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'secondMenu' => array($this, 'block_secondMenu'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da78a48d4eaa0d7ab49dde095830ddd3b3add480d654f4b7d85542835e28940d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da78a48d4eaa0d7ab49dde095830ddd3b3add480d654f4b7d85542835e28940d->enter($__internal_da78a48d4eaa0d7ab49dde095830ddd3b3add480d654f4b7d85542835e28940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_bdcaf8299b8957d510d24c768d7d663214a4d059b3a501129b294b64c103ace4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcaf8299b8957d510d24c768d7d663214a4d059b3a501129b294b64c103ace4->enter($__internal_bdcaf8299b8957d510d24c768d7d663214a4d059b3a501129b294b64c103ace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"bootstrap default admin template\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"stylesheet\" src=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />

</head>
<body>
<div class=\"loader-overlay\">
    <div class=\"loader-preview-area\">
        <div class=\"spinners\">
            <div class=\"loader\">
                <div class=\"rotating-plane\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"wrapper\">
    <header id=\"header\">
        <div class=\"header-inner\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ERPBundle:Admin/Admin:header"));
        echo "
            ";
        // line 26
        $this->displayBlock('secondMenu', $context, $blocks);
        // line 27
        echo "        </div>
    </header>
    <section id=\"main\" class=\"container-fluid\">
        <div class=\"row\">
            <aside id=\"sidebar\">
                ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ETUDIANT")) {
            // line 33
            echo "                    ";
            $this->loadTemplate("::headers/Front/menuEtudiant.html.twig", "baseFront.html.twig", 33)->display($context);
            // line 34
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_ENSEIGNANT")) {
            // line 35
            echo "                        ";
            $this->loadTemplate("::headers/Front/menuEnseignant.html.twig", "baseFront.html.twig", 35)->display($context);
            // line 36
            echo "                ";
        }
        // line 37
        echo "            </aside>
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "        </div>
    </section>
    <footer id=\"footer\">
        Copyright&copy; 2017, All Rights Reserved.
    </footer>


</div>
";
        // line 47
        $this->displayBlock('scripts', $context, $blocks);
        // line 48
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
</body>

</html>";
        
        $__internal_da78a48d4eaa0d7ab49dde095830ddd3b3add480d654f4b7d85542835e28940d->leave($__internal_da78a48d4eaa0d7ab49dde095830ddd3b3add480d654f4b7d85542835e28940d_prof);

        
        $__internal_bdcaf8299b8957d510d24c768d7d663214a4d059b3a501129b294b64c103ace4->leave($__internal_bdcaf8299b8957d510d24c768d7d663214a4d059b3a501129b294b64c103ace4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53f9e5884ac892d2330982d22dca31e420438f2c054005e29b603a5f34e26271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f9e5884ac892d2330982d22dca31e420438f2c054005e29b603a5f34e26271->enter($__internal_53f9e5884ac892d2330982d22dca31e420438f2c054005e29b603a5f34e26271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ca66020890d8ee3fcbb7eb91bc114578e960b751dffc730373f3ba82542ab7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca66020890d8ee3fcbb7eb91bc114578e960b751dffc730373f3ba82542ab7e->enter($__internal_9ca66020890d8ee3fcbb7eb91bc114578e960b751dffc730373f3ba82542ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9ca66020890d8ee3fcbb7eb91bc114578e960b751dffc730373f3ba82542ab7e->leave($__internal_9ca66020890d8ee3fcbb7eb91bc114578e960b751dffc730373f3ba82542ab7e_prof);

        
        $__internal_53f9e5884ac892d2330982d22dca31e420438f2c054005e29b603a5f34e26271->leave($__internal_53f9e5884ac892d2330982d22dca31e420438f2c054005e29b603a5f34e26271_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97330a5b018daed82d881c3b06bdfcbd69280868d484ebd684057b0edd22d205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97330a5b018daed82d881c3b06bdfcbd69280868d484ebd684057b0edd22d205->enter($__internal_97330a5b018daed82d881c3b06bdfcbd69280868d484ebd684057b0edd22d205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_89df7f1d8d15a7b9a8b99701e837d1771d49bd1603a40cd39dd19ac62f1f06af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89df7f1d8d15a7b9a8b99701e837d1771d49bd1603a40cd39dd19ac62f1f06af->enter($__internal_89df7f1d8d15a7b9a8b99701e837d1771d49bd1603a40cd39dd19ac62f1f06af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89df7f1d8d15a7b9a8b99701e837d1771d49bd1603a40cd39dd19ac62f1f06af->leave($__internal_89df7f1d8d15a7b9a8b99701e837d1771d49bd1603a40cd39dd19ac62f1f06af_prof);

        
        $__internal_97330a5b018daed82d881c3b06bdfcbd69280868d484ebd684057b0edd22d205->leave($__internal_97330a5b018daed82d881c3b06bdfcbd69280868d484ebd684057b0edd22d205_prof);

    }

    // line 26
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_ac316066af9a3fde79fd0212dc375832c9d6db4dbec734b447ebcefd735309c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac316066af9a3fde79fd0212dc375832c9d6db4dbec734b447ebcefd735309c9->enter($__internal_ac316066af9a3fde79fd0212dc375832c9d6db4dbec734b447ebcefd735309c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_670cccb278fa07a1096ea0b68e841362e864460f7d76bd8e3558805bbdf5df4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670cccb278fa07a1096ea0b68e841362e864460f7d76bd8e3558805bbdf5df4e->enter($__internal_670cccb278fa07a1096ea0b68e841362e864460f7d76bd8e3558805bbdf5df4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        
        $__internal_670cccb278fa07a1096ea0b68e841362e864460f7d76bd8e3558805bbdf5df4e->leave($__internal_670cccb278fa07a1096ea0b68e841362e864460f7d76bd8e3558805bbdf5df4e_prof);

        
        $__internal_ac316066af9a3fde79fd0212dc375832c9d6db4dbec734b447ebcefd735309c9->leave($__internal_ac316066af9a3fde79fd0212dc375832c9d6db4dbec734b447ebcefd735309c9_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_71f7db680e78b487d9d36e74daa69bacb6db1a10585657c2556f80531932ac6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f7db680e78b487d9d36e74daa69bacb6db1a10585657c2556f80531932ac6c->enter($__internal_71f7db680e78b487d9d36e74daa69bacb6db1a10585657c2556f80531932ac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b938299f1455707c79ca0cf834756930cc184081c9662a9d1aa4dd607fbc6853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b938299f1455707c79ca0cf834756930cc184081c9662a9d1aa4dd607fbc6853->enter($__internal_b938299f1455707c79ca0cf834756930cc184081c9662a9d1aa4dd607fbc6853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b938299f1455707c79ca0cf834756930cc184081c9662a9d1aa4dd607fbc6853->leave($__internal_b938299f1455707c79ca0cf834756930cc184081c9662a9d1aa4dd607fbc6853_prof);

        
        $__internal_71f7db680e78b487d9d36e74daa69bacb6db1a10585657c2556f80531932ac6c->leave($__internal_71f7db680e78b487d9d36e74daa69bacb6db1a10585657c2556f80531932ac6c_prof);

    }

    // line 47
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_e8c95542270c79ac27d7619811f132603973c28bf61ae03bc44dbd7bdd56c004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c95542270c79ac27d7619811f132603973c28bf61ae03bc44dbd7bdd56c004->enter($__internal_e8c95542270c79ac27d7619811f132603973c28bf61ae03bc44dbd7bdd56c004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_062405beb88e33fbb7412aaf5a4f91da8bb80f6a90b0d275af3559fb13e5a7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062405beb88e33fbb7412aaf5a4f91da8bb80f6a90b0d275af3559fb13e5a7ab->enter($__internal_062405beb88e33fbb7412aaf5a4f91da8bb80f6a90b0d275af3559fb13e5a7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_062405beb88e33fbb7412aaf5a4f91da8bb80f6a90b0d275af3559fb13e5a7ab->leave($__internal_062405beb88e33fbb7412aaf5a4f91da8bb80f6a90b0d275af3559fb13e5a7ab_prof);

        
        $__internal_e8c95542270c79ac27d7619811f132603973c28bf61ae03bc44dbd7bdd56c004->leave($__internal_e8c95542270c79ac27d7619811f132603973c28bf61ae03bc44dbd7bdd56c004_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 47,  176 => 38,  159 => 26,  142 => 8,  125 => 7,  111 => 49,  106 => 48,  104 => 47,  94 => 39,  92 => 38,  89 => 37,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  75 => 32,  68 => 27,  66 => 26,  62 => 25,  44 => 9,  42 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"bootstrap default admin template\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>{% block title %}{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"stylesheet\" src=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />

</head>
<body>
<div class=\"loader-overlay\">
    <div class=\"loader-preview-area\">
        <div class=\"spinners\">
            <div class=\"loader\">
                <div class=\"rotating-plane\"></div>
            </div>
        </div>
    </div>
</div>
<div class=\"wrapper\">
    <header id=\"header\">
        <div class=\"header-inner\">
            {{ render(controller('ERPBundle:Admin/Admin:header')) }}
            {% block secondMenu %}{% endblock %}
        </div>
    </header>
    <section id=\"main\" class=\"container-fluid\">
        <div class=\"row\">
            <aside id=\"sidebar\">
                {% if(app.user.roles[0]==\"ROLE_ETUDIANT\") %}
                    {% include '::headers/Front/menuEtudiant.html.twig' %}
                {% elseif(app.user.roles[0]==\"ROLE_ENSEIGNANT\") %}
                        {% include '::headers/Front/menuEnseignant.html.twig' %}
                {% endif %}
            </aside>
        {% block body %}{% endblock %}
        </div>
    </section>
    <footer id=\"footer\">
        Copyright&copy; 2017, All Rights Reserved.
    </footer>


</div>
{% block scripts %}{% endblock %}
<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
</body>

</html>", "baseFront.html.twig", "/var/www/html/erp/app/Resources/views/baseFront.html.twig");
    }
}
