<?php

/* :headers:menuSuperAdmin.html.twig */
class __TwigTemplate_7bcc6193534278f86727cb098c68d3e0fc80b68b81784018cfc9e06ef2762c5d extends Twig_Template
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
        $__internal_517f93023095cc5ebd1a1ff645632b0a6f8d1625e159f3e1c28c458fbc6c69df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517f93023095cc5ebd1a1ff645632b0a6f8d1625e159f3e1c28c458fbc6c69df->enter($__internal_517f93023095cc5ebd1a1ff645632b0a6f8d1625e159f3e1c28c458fbc6c69df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers:menuSuperAdmin.html.twig"));

        $__internal_a8406fdd901f720052967bc58a1fbfd24ed86a3c34728bc64728a4b1ab0990b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8406fdd901f720052967bc58a1fbfd24ed86a3c34728bc64728a4b1ab0990b8->enter($__internal_a8406fdd901f720052967bc58a1fbfd24ed86a3c34728bc64728a4b1ab0990b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers:menuSuperAdmin.html.twig"));

        // line 1
        echo "<aside id=\"sidebar\">
    <div class=\"sidebar-search\">
        <input id=\"live-search-box\" type=\"search\" class=\"form-control input-sm\" placeholder=\"Search...\">
        <a href=\"javascript:void(0)\"><i class=\"search-close icon_search\"></i></a>
    </div>
    <div class=\"sidebar-menu\">
        <ul class=\"nav site-menu live-search-list\" id=\"site-menu\" data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
            <li class=\"menu-title\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_homepage");
        echo "\">
                    <i class=\"icon fa fa-dashboard\"></i> <span> Dashboard</span>
                </a>
            </li>
            <li class=\"menu-title\">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("super_admin_client");
        echo "\">
                    <i class=\"icon fa fa-users\"></i> <span> Client</span>
                </a>
            </li>
        </ul>
    </div>
    <div class=\"sidebar-extra\">
        <a href=\"#\"><i class=\"icon_lock-open_alt\"></i></a>
        <a href=\"#\"><i class=\"icon_key_alt\"></i></a>
        <a href=\"#\"><i class=\"icon_lock_alt\"></i></a>
    </div>
</aside>

";
        
        $__internal_517f93023095cc5ebd1a1ff645632b0a6f8d1625e159f3e1c28c458fbc6c69df->leave($__internal_517f93023095cc5ebd1a1ff645632b0a6f8d1625e159f3e1c28c458fbc6c69df_prof);

        
        $__internal_a8406fdd901f720052967bc58a1fbfd24ed86a3c34728bc64728a4b1ab0990b8->leave($__internal_a8406fdd901f720052967bc58a1fbfd24ed86a3c34728bc64728a4b1ab0990b8_prof);

    }

    public function getTemplateName()
    {
        return ":headers:menuSuperAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside id=\"sidebar\">
    <div class=\"sidebar-search\">
        <input id=\"live-search-box\" type=\"search\" class=\"form-control input-sm\" placeholder=\"Search...\">
        <a href=\"javascript:void(0)\"><i class=\"search-close icon_search\"></i></a>
    </div>
    <div class=\"sidebar-menu\">
        <ul class=\"nav site-menu live-search-list\" id=\"site-menu\" data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
            <li class=\"menu-title\">
                <a href=\"{{ path('super_admin_homepage') }}\">
                    <i class=\"icon fa fa-dashboard\"></i> <span> Dashboard</span>
                </a>
            </li>
            <li class=\"menu-title\">
                <a href=\"{{ path('super_admin_client') }}\">
                    <i class=\"icon fa fa-users\"></i> <span> Client</span>
                </a>
            </li>
        </ul>
    </div>
    <div class=\"sidebar-extra\">
        <a href=\"#\"><i class=\"icon_lock-open_alt\"></i></a>
        <a href=\"#\"><i class=\"icon_key_alt\"></i></a>
        <a href=\"#\"><i class=\"icon_lock_alt\"></i></a>
    </div>
</aside>

", ":headers:menuSuperAdmin.html.twig", "/var/www/html/erp/app/Resources/views/headers/menuSuperAdmin.html.twig");
    }
}
