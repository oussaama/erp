<?php

/* :headers/Admin:menuAdminFormation.html.twig */
class __TwigTemplate_d3e650100543fdc11bb84ff57a7fc43698299459d711f2b409d264eb104ab1a6 extends Twig_Template
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
        $__internal_e4be144349951fd30667eb52caed348c059afaf6bd6071674966ffbae4838e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4be144349951fd30667eb52caed348c059afaf6bd6071674966ffbae4838e2d->enter($__internal_e4be144349951fd30667eb52caed348c059afaf6bd6071674966ffbae4838e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers/Admin:menuAdminFormation.html.twig"));

        $__internal_925cc4e4849adeb245bd2cee828b1962d220965dc28772d0ac6787088e078b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925cc4e4849adeb245bd2cee828b1962d220965dc28772d0ac6787088e078b3e->enter($__internal_925cc4e4849adeb245bd2cee828b1962d220965dc28772d0ac6787088e078b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers/Admin:menuAdminFormation.html.twig"));

        // line 1
        echo "<div class=\"sidebar-menu\">
    <ul class=\"nav site-menu\" id=\"site-menu\">
        <li class=\"sub-item\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
        echo "\" class=\"flat-buttons\"><i class=\"icon_desktop\"></i><span>Dashboard</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_tags_alt\"></i>
                <span>Compte</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Compte</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <ul class=\"submenu-sub\">
                            <li>
                                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profil");
        echo "\" class=\"flat-buttons\">Profil</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_parametrage");
        echo "\" class=\"flat-buttons\">Parametrage</a>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\" class=\"flat-buttons\">
                <i class=\"icon_ribbon_alt\"></i>
                <span>Messagerie</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_puzzle\"></i>
                <span>Gestion</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Scolarité</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Class_index");
        echo "\" class=\"flat-buttons\">Classe</a>
                        </li>
                        <li>
                            <a href=\"bootbox.html\" class=\"flat-buttons\">Groupes</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Retard_index");
        echo "\" class=\"flat-buttons\">Retard</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Appsense_index");
        echo "\" class=\"flat-buttons\">Appcense</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Unite_index");
        echo "\" class=\"flat-buttons\">Unite d'enseignement</a>
                        </li>
                        <li>
                            <a href=\"masonry.html\" class=\"flat-buttons\">Emploi de Temps</a>
                        </li>
                        <li>
                            <a href=\"rating.html\" class=\"flat-buttons\">Note</a>
                        </li>
                        <li>
                            <a href=\"sortable_nestable.html\" class=\"flat-buttons\">Salle</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Examen");
        echo "\" class=\"flat-buttons\">Examen</a>
                        </li>
                        <li>
                            <a href=\"sortable_nestable.html\" class=\"flat-buttons\">Bulltins</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_id\"></i>
                <span>Users</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Employee");
        echo "\" class=\"flat-buttons\">Employee</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Enseignant");
        echo "\" class=\"flat-buttons\">Enseignant</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Etudiant");
        echo "\" class=\"flat-buttons\">Etudiant</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_Entreprise");
        echo "\" class=\"flat-buttons\">Entreprise</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\" class=\"flat-buttons\">
                <i class=\"icon_ribbon_alt\"></i>
                <span>Messagerie</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_table\"></i>
                <span>Actualite</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Communication</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mailBox", array("type" => "recu"));
        echo "\" class=\"flat-buttons\">Messagerie</a>
                        </li>
                        <li>
                            <a href=\"bootstrap_tables.html\" class=\"flat-buttons\">Notification</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_agenda");
        echo "\" class=\"flat-buttons\">Agenda</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_wallet\"></i>
                <span>Parametrage</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Parametrage</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"social_widget.html\" class=\"flat-buttons\">Import</a>
                        </li>
                        <li>
                            <a href=\"static_widget.html\" class=\"flat-buttons\">Export</a>
                        </li>
                        <li>
                            <a href=\"data_widgets.html\" class=\"flat-buttons\">Archivage</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>";
        
        $__internal_e4be144349951fd30667eb52caed348c059afaf6bd6071674966ffbae4838e2d->leave($__internal_e4be144349951fd30667eb52caed348c059afaf6bd6071674966ffbae4838e2d_prof);

        
        $__internal_925cc4e4849adeb245bd2cee828b1962d220965dc28772d0ac6787088e078b3e->leave($__internal_925cc4e4849adeb245bd2cee828b1962d220965dc28772d0ac6787088e078b3e_prof);

    }

    public function getTemplateName()
    {
        return ":headers/Admin:menuAdminFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 124,  186 => 118,  168 => 103,  158 => 96,  152 => 93,  146 => 90,  140 => 87,  119 => 69,  104 => 57,  98 => 54,  92 => 51,  83 => 45,  65 => 30,  53 => 21,  47 => 18,  30 => 4,  25 => 1,);
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
        <li class=\"sub-item\">
            <a href=\"{{ path('admin_homepage') }}\" class=\"flat-buttons\"><i class=\"icon_desktop\"></i><span>Dashboard</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_tags_alt\"></i>
                <span>Compte</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Compte</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <ul class=\"submenu-sub\">
                            <li>
                                <a href=\"{{ path('admin_profil') }}\" class=\"flat-buttons\">Profil</a>
                            </li>
                            <li>
                                <a href=\"{{ path('admin_parametrage') }}\" class=\"flat-buttons\">Parametrage</a>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"{{ path('admin_mailBox',{'type':'recu'}) }}\" class=\"flat-buttons\">
                <i class=\"icon_ribbon_alt\"></i>
                <span>Messagerie</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_puzzle\"></i>
                <span>Gestion</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Scolarité</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"{{ path('admin_Class_index') }}\" class=\"flat-buttons\">Classe</a>
                        </li>
                        <li>
                            <a href=\"bootbox.html\" class=\"flat-buttons\">Groupes</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_Retard_index') }}\" class=\"flat-buttons\">Retard</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_Appsense_index') }}\" class=\"flat-buttons\">Appcense</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_Unite_index') }}\" class=\"flat-buttons\">Unite d'enseignement</a>
                        </li>
                        <li>
                            <a href=\"masonry.html\" class=\"flat-buttons\">Emploi de Temps</a>
                        </li>
                        <li>
                            <a href=\"rating.html\" class=\"flat-buttons\">Note</a>
                        </li>
                        <li>
                            <a href=\"sortable_nestable.html\" class=\"flat-buttons\">Salle</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_Examen') }}\" class=\"flat-buttons\">Examen</a>
                        </li>
                        <li>
                            <a href=\"sortable_nestable.html\" class=\"flat-buttons\">Bulltins</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_id\"></i>
                <span>Users</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"{{ path('admin_Employee') }}\" class=\"flat-buttons\">Employee</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_Enseignant') }}\" class=\"flat-buttons\">Enseignant</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_Etudiant') }}\" class=\"flat-buttons\">Etudiant</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_Entreprise') }}\" class=\"flat-buttons\">Entreprise</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"{{ path('admin_mailBox',{'type':'recu'}) }}\" class=\"flat-buttons\">
                <i class=\"icon_ribbon_alt\"></i>
                <span>Messagerie</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_table\"></i>
                <span>Actualite</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Communication</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"{{ path('admin_mailBox',{'type':'recu'}) }}\" class=\"flat-buttons\">Messagerie</a>
                        </li>
                        <li>
                            <a href=\"bootstrap_tables.html\" class=\"flat-buttons\">Notification</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_agenda') }}\" class=\"flat-buttons\">Agenda</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_wallet\"></i>
                <span>Parametrage</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Parametrage</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"social_widget.html\" class=\"flat-buttons\">Import</a>
                        </li>
                        <li>
                            <a href=\"static_widget.html\" class=\"flat-buttons\">Export</a>
                        </li>
                        <li>
                            <a href=\"data_widgets.html\" class=\"flat-buttons\">Archivage</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>", ":headers/Admin:menuAdminFormation.html.twig", "/var/www/html/erp/app/Resources/views/headers/Admin/menuAdminFormation.html.twig");
    }
}
