<?php

/* :headers/Front:menuEtudiant.html.twig */
class __TwigTemplate_fc884a9e46168b7a6e9cbbd34bb27614f0bb620077398286c47179ff119bcb87 extends Twig_Template
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
        $__internal_3a12b08d1ade9a73b94c41569de6a8d9f52fbe87ae6a7ab23b904134fd941a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a12b08d1ade9a73b94c41569de6a8d9f52fbe87ae6a7ab23b904134fd941a03->enter($__internal_3a12b08d1ade9a73b94c41569de6a8d9f52fbe87ae6a7ab23b904134fd941a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers/Front:menuEtudiant.html.twig"));

        $__internal_f861408bef97d405ba61078ce8c5e4c53c1c244337ae2a493f6e66ff6f6728c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f861408bef97d405ba61078ce8c5e4c53c1c244337ae2a493f6e66ff6f6728c5->enter($__internal_f861408bef97d405ba61078ce8c5e4c53c1c244337ae2a493f6e66ff6f6728c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers/Front:menuEtudiant.html.twig"));

        // line 1
        echo "<div class=\"sidebar-menu\">
    <ul class=\"nav site-menu\" id=\"site-menu\">
        <li class=\"sub-item\" id=\"indexx\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_homepage");
        echo "\" class=\"flat-buttons\"><i class=\"icon_desktop\"></i><span>Dashboard</span>
            </a>
        </li>
        <li class=\"sub-item\" id=\"scolarite\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_programme");
        echo "\" class=\"flat-buttons\">
                <i class=\"icon_puzzle\"></i>
                <span>Scolarité</span>
            </a>
        </li>
        <li class=\"sub-item\" id=\"profile\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_profile");
        echo "\" class=\"flat-buttons\">
                <i class=\"icon_group\"></i>
                <span>Profil</span>
            </a>
        </li>
        <li class=\"sub-item\" id=\"communication\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etudiant_mailBox", array("type" => "recu"));
        echo "\" class=\"flat-buttons\">
                <i class=\"icon_mail_alt\"></i>
                <span>Communication</span>
            </a>
        </li>
    </ul>
</div>";
        
        $__internal_3a12b08d1ade9a73b94c41569de6a8d9f52fbe87ae6a7ab23b904134fd941a03->leave($__internal_3a12b08d1ade9a73b94c41569de6a8d9f52fbe87ae6a7ab23b904134fd941a03_prof);

        
        $__internal_f861408bef97d405ba61078ce8c5e4c53c1c244337ae2a493f6e66ff6f6728c5->leave($__internal_f861408bef97d405ba61078ce8c5e4c53c1c244337ae2a493f6e66ff6f6728c5_prof);

    }

    public function getTemplateName()
    {
        return ":headers/Front:menuEtudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  46 => 14,  37 => 8,  30 => 4,  25 => 1,);
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
        <li class=\"sub-item\" id=\"indexx\">
            <a href=\"{{ path('etudiant_homepage') }}\" class=\"flat-buttons\"><i class=\"icon_desktop\"></i><span>Dashboard</span>
            </a>
        </li>
        <li class=\"sub-item\" id=\"scolarite\">
            <a href=\"{{ path('etudiant_programme') }}\" class=\"flat-buttons\">
                <i class=\"icon_puzzle\"></i>
                <span>Scolarité</span>
            </a>
        </li>
        <li class=\"sub-item\" id=\"profile\">
            <a href=\"{{ path('etudiant_profile') }}\" class=\"flat-buttons\">
                <i class=\"icon_group\"></i>
                <span>Profil</span>
            </a>
        </li>
        <li class=\"sub-item\" id=\"communication\">
            <a href=\"{{ path('etudiant_mailBox',{'type':'recu'}) }}\" class=\"flat-buttons\">
                <i class=\"icon_mail_alt\"></i>
                <span>Communication</span>
            </a>
        </li>
    </ul>
</div>", ":headers/Front:menuEtudiant.html.twig", "/var/www/html/erp/app/Resources/views/headers/Front/menuEtudiant.html.twig");
    }
}
