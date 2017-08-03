<?php

/* ERPBundle:SuperAdmin/client:update.html.twig */
class __TwigTemplate_d82f3c23f8a57b4b78ac0b6c49730ca6f9a2fdaef7655a9f11128537e112b5c6 extends Twig_Template
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
        $__internal_95e03d576ef414b277d5168d9c7806e18c8463541de9748b3002928d9f803cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e03d576ef414b277d5168d9c7806e18c8463541de9748b3002928d9f803cb6->enter($__internal_95e03d576ef414b277d5168d9c7806e18c8463541de9748b3002928d9f803cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/client:update.html.twig"));

        $__internal_936e8cf672808caf922935b0b80528e5a1ab58b04d90916a30d8bd33139316a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936e8cf672808caf922935b0b80528e5a1ab58b04d90916a30d8bd33139316a4->enter($__internal_936e8cf672808caf922935b0b80528e5a1ab58b04d90916a30d8bd33139316a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:SuperAdmin/client:update.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_client_update", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "method" => "POST"));
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"divider15\"></div>
    <div>
        <input type=\"submit\" value=\"update\" class=\"btn btn-primary site-btn pull-right\"/>
    </div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/js/global/form/formClient.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_95e03d576ef414b277d5168d9c7806e18c8463541de9748b3002928d9f803cb6->leave($__internal_95e03d576ef414b277d5168d9c7806e18c8463541de9748b3002928d9f803cb6_prof);

        
        $__internal_936e8cf672808caf922935b0b80528e5a1ab58b04d90916a30d8bd33139316a4->leave($__internal_936e8cf672808caf922935b0b80528e5a1ab58b04d90916a30d8bd33139316a4_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:SuperAdmin/client:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  41 => 8,  37 => 7,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form,{'action':path('super_admin_client_update',{'id':id}),'method':'POST'}) }}
    {{ form_widget(form) }}
    <div class=\"divider15\"></div>
    <div>
        <input type=\"submit\" value=\"update\" class=\"btn btn-primary site-btn pull-right\"/>
    </div>
{{ form_end(form) }}
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/js/global/form/formClient.js') }}\"></script>
", "ERPBundle:SuperAdmin/client:update.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/SuperAdmin/client/update.html.twig");
    }
}
