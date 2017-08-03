<?php

/* :headers/Front:menuEnseignant.html.twig */
class __TwigTemplate_1705a20e1d285f763ef0473f8c3ac4c7c3452f803e658157d24be727799ede8e extends Twig_Template
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
        $__internal_03485fd602312eafbe7cbe153bd1ea6f2acf90fdab56e3aea98382f322a02f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03485fd602312eafbe7cbe153bd1ea6f2acf90fdab56e3aea98382f322a02f93->enter($__internal_03485fd602312eafbe7cbe153bd1ea6f2acf90fdab56e3aea98382f322a02f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers/Front:menuEnseignant.html.twig"));

        $__internal_8aac5858c57003c7232b6773d5352111786ac3d38e824575b6f7d69414553775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aac5858c57003c7232b6773d5352111786ac3d38e824575b6f7d69414553775->enter($__internal_8aac5858c57003c7232b6773d5352111786ac3d38e824575b6f7d69414553775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":headers/Front:menuEnseignant.html.twig"));

        // line 1
        echo "<div class=\"sidebar-menu\">
    <ul class=\"nav site-menu\" id=\"site-menu\">
        <li class=\"sub-item\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enseignant_homepage");
        echo "\" class=\"flat-buttons\"><i class=\"icon_desktop\"></i><span>Accueil</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_puzzle\"></i>
                <span>Scolarité</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Scolarité</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enseignant_emploi");
        echo "\" class=\"flat-buttons\">Emploi de Temps</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cour_index");
        echo "\" class=\"flat-buttons\">Cours</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appsense_index");
        echo "\" class=\"flat-buttons\">Absences</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
        echo "\" class=\"flat-buttons\">Examens</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("note_index");
        echo "\" class=\"flat-buttons\">Notes</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enseignant_profil");
        echo "\" class=\"flat-buttons\">
                <i class=\"icon_group\"></i>
                <span>Profil</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_mail_alt\"></i>
                <span>Communication</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Communication</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"\" class=\"flat-buttons\">Messagerie</a>
                        </li>
                        <li>
                            <a href=\"\" class=\"flat-buttons\">Notification</a>
                        </li>
                        <li>
                            <a href=\"\" class=\"flat-buttons\">Agenda</a>
                        </li>
                        <li>
                            <a href=\"\" class=\"flat-buttons\">Actualité</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>";
        
        $__internal_03485fd602312eafbe7cbe153bd1ea6f2acf90fdab56e3aea98382f322a02f93->leave($__internal_03485fd602312eafbe7cbe153bd1ea6f2acf90fdab56e3aea98382f322a02f93_prof);

        
        $__internal_8aac5858c57003c7232b6773d5352111786ac3d38e824575b6f7d69414553775->leave($__internal_8aac5858c57003c7232b6773d5352111786ac3d38e824575b6f7d69414553775_prof);

    }

    public function getTemplateName()
    {
        return ":headers/Front:menuEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  70 => 29,  64 => 26,  58 => 23,  52 => 20,  46 => 17,  30 => 4,  25 => 1,);
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
            <a href=\"{{ path('enseignant_homepage') }}\" class=\"flat-buttons\"><i class=\"icon_desktop\"></i><span>Accueil</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_puzzle\"></i>
                <span>Scolarité</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Scolarité</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"{{ path('enseignant_emploi') }}\" class=\"flat-buttons\">Emploi de Temps</a>
                        </li>
                        <li>
                            <a href=\"{{ path('cour_index') }}\" class=\"flat-buttons\">Cours</a>
                        </li>
                        <li>
                            <a href=\"{{ path('appsense_index') }}\" class=\"flat-buttons\">Absences</a>
                        </li>
                        <li>
                            <a href=\"{{ path('examen_index') }}\" class=\"flat-buttons\">Examens</a>
                        </li>
                        <li>
                            <a href=\"{{ path('note_index') }}\" class=\"flat-buttons\">Notes</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"sub-item\">
            <a href=\"{{ path('enseignant_profil') }}\" class=\"flat-buttons\">
                <i class=\"icon_group\"></i>
                <span>Profil</span>
            </a>
        </li>
        <li class=\"sub-item\">
            <a href=\"javascript:void(0)\" class=\"flat-buttons\">
                <i class=\"icon_mail_alt\"></i>
                <span>Communication</span>
            </a>
            <ul class=\"sub-menu\">
                <li class=\"menu-title\"><span>Communication</span></li>
                <li class=\"main-item\">
                    <ul data-plugin=\"custom-scroll\" data-suppress-scroll-x=\"true\" data-height=\"100%\">
                        <li>
                            <a href=\"\" class=\"flat-buttons\">Messagerie</a>
                        </li>
                        <li>
                            <a href=\"\" class=\"flat-buttons\">Notification</a>
                        </li>
                        <li>
                            <a href=\"\" class=\"flat-buttons\">Agenda</a>
                        </li>
                        <li>
                            <a href=\"\" class=\"flat-buttons\">Actualité</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>", ":headers/Front:menuEnseignant.html.twig", "/var/www/html/erp/app/Resources/views/headers/Front/menuEnseignant.html.twig");
    }
}
