<?php

/* :headers/Admin:menuAdminUniversite.html.twig */
class __TwigTemplate_e0be0d9901ef25ac8f5d86fe408a405e55d92f5d39fa7f42f863e5780f47a45d extends Twig_Template
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
        $__internal_7a35ac071409323a9f88db12782f188da0f382089f00491db72f3fc993cc3ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a35ac071409323a9f88db12782f188da0f382089f00491db72f3fc993cc3ad7->enter($__internal_7a35ac071409323a9f88db12782f188da0f382089f00491db72f3fc993cc3ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers/Admin:menuAdminUniversite.html.twig"));

        $__internal_39eab008de70c08a1e5114f56e5674bc64afd18d0e75da8ccf9087f31616ebba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39eab008de70c08a1e5114f56e5674bc64afd18d0e75da8ccf9087f31616ebba->enter($__internal_39eab008de70c08a1e5114f56e5674bc64afd18d0e75da8ccf9087f31616ebba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers/Admin:menuAdminUniversite.html.twig"));

        // line 1
        echo "<div class=\"sidebar-menu\">
    <ul class=\"nav site-menu\" id=\"site-menu\">
        <li class=\"sub-item\" id=\"dashboard\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\" class=\"flat-buttons\"><i class=\"icon_desktop\"></i><span>Dashboard</span></a>
        </li>
        <li class=\"sub-item\" id=\"user\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\" class=\"flat-buttons\">
                <i class=\"icon_group\"></i>
                <span>UTILSATEURS</span>
            </a>
        </li>
        <li class=\"sub-item\"  id=\"gestion\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Annee_index");
        echo "\" class=\"flat-buttons\"><i class=\"icon_tags_alt\"></i><span>SCOLARITE</span></a>
        </li>
        <li class=\"sub-item\" id=\"scolarite\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Examen");
        echo "\" class=\"flat-buttons\"><i class=\"icon_puzzle\"></i><span>EXAMEN</span></a>
        </li>
        <li class=\"sub-item\" id=\"scolarite\">
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Examen");
        echo "\" class=\"flat-buttons\"><i class=\"icon_puzzle\"></i><span>DOCUMENTS</span></a>
        </li>

        <li class=\"sub-item\" id=\"communication\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\" class=\"flat-buttons\" >
                <i class=\"icon_mail_alt\"></i>
                <span>COMMUNICATION</span>
            </a>
        </li>
        <li class=\"sub-item\" id=\"paiment\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_payment_index");
        echo "\" class=\"flat-buttons\"><i class=\"icon_tags_alt\"></i><span>PAIEMENT</span></a>
        </li>
        <li class=\"sub-item\" id=\"scolarite\">
            <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Examen");
        echo "\" class=\"flat-buttons\"><i class=\"icon_puzzle\"></i><span>BIBLIOTHEQUES</span></a>
        </li>
        <li class=\"sub-item\">
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_rapport");
        echo "\" class=\"flat-buttons\">
                <i class=\"icon_wallet\"></i>
                <span>PARAMETRAGES</span>
            </a>
        </li>
    </ul>
</div>

";
        
        $__internal_7a35ac071409323a9f88db12782f188da0f382089f00491db72f3fc993cc3ad7->leave($__internal_7a35ac071409323a9f88db12782f188da0f382089f00491db72f3fc993cc3ad7_prof);

        
        $__internal_39eab008de70c08a1e5114f56e5674bc64afd18d0e75da8ccf9087f31616ebba->leave($__internal_39eab008de70c08a1e5114f56e5674bc64afd18d0e75da8ccf9087f31616ebba_prof);

    }

    public function getTemplateName()
    {
        return ":headers/Admin:menuAdminUniversite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 35,  79 => 32,  73 => 29,  64 => 23,  57 => 19,  51 => 16,  45 => 13,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar-menu\">
    <ul class=\"nav site-menu\" id=\"site-menu\">
        <li class=\"sub-item\" id=\"dashboard\">
            <a href=\"{{ path('admin_homepage') }}\" class=\"flat-buttons\"><i class=\"icon_desktop\"></i><span>Dashboard</span></a>
        </li>
        <li class=\"sub-item\" id=\"user\">
            <a href=\"{{ path('admin_Employee') }}\" class=\"flat-buttons\">
                <i class=\"icon_group\"></i>
                <span>UTILSATEURS</span>
            </a>
        </li>
        <li class=\"sub-item\"  id=\"gestion\">
            <a href=\"{{ path('admin_Annee_index') }}\" class=\"flat-buttons\"><i class=\"icon_tags_alt\"></i><span>SCOLARITE</span></a>
        </li>
        <li class=\"sub-item\" id=\"scolarite\">
            <a href=\"{{ path('admin_Examen') }}\" class=\"flat-buttons\"><i class=\"icon_puzzle\"></i><span>EXAMEN</span></a>
        </li>
        <li class=\"sub-item\" id=\"scolarite\">
            <a href=\"{{ path('admin_Examen') }}\" class=\"flat-buttons\"><i class=\"icon_puzzle\"></i><span>DOCUMENTS</span></a>
        </li>

        <li class=\"sub-item\" id=\"communication\">
            <a href=\"{{ path('admin_mailBox',{'type':'recu'}) }}\" class=\"flat-buttons\" >
                <i class=\"icon_mail_alt\"></i>
                <span>COMMUNICATION</span>
            </a>
        </li>
        <li class=\"sub-item\" id=\"paiment\">
            <a href=\"{{ path('admin_payment_index') }}\" class=\"flat-buttons\"><i class=\"icon_tags_alt\"></i><span>PAIEMENT</span></a>
        </li>
        <li class=\"sub-item\" id=\"scolarite\">
            <a href=\"{{ path('admin_Examen') }}\" class=\"flat-buttons\"><i class=\"icon_puzzle\"></i><span>BIBLIOTHEQUES</span></a>
        </li>
        <li class=\"sub-item\">
            <a href=\"{{ path('admin_rapport') }}\" class=\"flat-buttons\">
                <i class=\"icon_wallet\"></i>
                <span>PARAMETRAGES</span>
            </a>
        </li>
    </ul>
</div>

", ":headers/Admin:menuAdminUniversite.html.twig", "/var/www/html/erp/app/Resources/views/headers/Admin/menuAdminUniversite.html.twig");
    }
}
