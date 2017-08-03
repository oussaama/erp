<?php

/* ERPBundle:Admin/Compte:mailAttente.html.twig */
class __TwigTemplate_acec103ed695014422bc01f7df2017c7299634472b5b48170378c0aabf46779f extends Twig_Template
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
        $__internal_c711c6d68f43bceb3d0427ec474c616a1975effef6bf878e15e9926081d3495b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c711c6d68f43bceb3d0427ec474c616a1975effef6bf878e15e9926081d3495b->enter($__internal_c711c6d68f43bceb3d0427ec474c616a1975effef6bf878e15e9926081d3495b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:mailAttente.html.twig"));

        $__internal_89de12c73c830c6100a2d2bd5466c9163a2e6155d3da56b19714f8898e3f5d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89de12c73c830c6100a2d2bd5466c9163a2e6155d3da56b19714f8898e3f5d0d->enter($__internal_89de12c73c830c6100a2d2bd5466c9163a2e6155d3da56b19714f8898e3f5d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/Compte:mailAttente.html.twig"));

        // line 1
        echo "upload votre document.
<a href=\"localhost";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_document", array("id" => ($context["id"] ?? $this->getContext($context, "id")), "crypte" => ($context["crypt"] ?? $this->getContext($context, "crypt")))), "html", null, true);
        echo "\">localhost";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_document", array("id" => ($context["id"] ?? $this->getContext($context, "id")), "crypte" => ($context["crypt"] ?? $this->getContext($context, "crypt")))), "html", null, true);
        echo "</a>
";
        
        $__internal_c711c6d68f43bceb3d0427ec474c616a1975effef6bf878e15e9926081d3495b->leave($__internal_c711c6d68f43bceb3d0427ec474c616a1975effef6bf878e15e9926081d3495b_prof);

        
        $__internal_89de12c73c830c6100a2d2bd5466c9163a2e6155d3da56b19714f8898e3f5d0d->leave($__internal_89de12c73c830c6100a2d2bd5466c9163a2e6155d3da56b19714f8898e3f5d0d_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/Compte:mailAttente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("upload votre document.
<a href=\"localhost{{ path('etudiant_document',{'id':id,'crypte':crypt}) }}\">localhost{{ path('etudiant_document',{'id':id,'crypte':crypt}) }}</a>
", "ERPBundle:Admin/Compte:mailAttente.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/Compte/mailAttente.html.twig");
    }
}
