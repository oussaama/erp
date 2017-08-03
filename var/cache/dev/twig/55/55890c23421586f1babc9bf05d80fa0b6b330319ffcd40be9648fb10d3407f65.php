<?php

/* baseAdmin.html.twig */
class __TwigTemplate_949614f068331c889d54f163adaacae47462f3540f54a40f712fe19b172d9995 extends Twig_Template
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
        $__internal_6a11749de35f2ec2f6cd70a3eec2816848ba4b02d52e77e2512a7f51e37c16fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a11749de35f2ec2f6cd70a3eec2816848ba4b02d52e77e2512a7f51e37c16fa->enter($__internal_6a11749de35f2ec2f6cd70a3eec2816848ba4b02d52e77e2512a7f51e37c16fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_06239aa5151c72a336e084fc49c5b7504394725d4a8c994427592d5ac901612a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06239aa5151c72a336e084fc49c5b7504394725d4a8c994427592d5ac901612a->enter($__internal_06239aa5151c72a336e084fc49c5b7504394725d4a8c994427592d5ac901612a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

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
        echo "    <link rel=\"stylesheet\" src=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>

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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "Etablissement", array()), "typeEtablissement", array()) == "Université")) {
            // line 33
            echo "                    ";
            $this->loadTemplate("::headers/Admin/menuAdminUniversite.html.twig", "baseAdmin.html.twig", 33)->display($context);
            // line 34
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "Etablissement", array()), "typeEtablissement", array()) == "lycée")) {
            // line 35
            echo "                    ";
            $this->loadTemplate("::headers/Admin/menuAdminLycee.html.twig", "baseAdmin.html.twig", 35)->display($context);
            // line 36
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "Etablissement", array()), "typeEtablissement", array()) == "college")) {
            // line 37
            echo "                    ";
            $this->loadTemplate("::headers/Admin/menuAdminCollege.html.twig", "baseAdmin.html.twig", 37)->display($context);
            // line 38
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "Etablissement", array()), "typeEtablissement", array()) == "primaire")) {
            // line 39
            echo "                    ";
            $this->loadTemplate("::headers/Admin/menuAdminPrimaire.html.twig", "baseAdmin.html.twig", 39)->display($context);
            // line 40
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "Etablissement", array()), "typeEtablissement", array()) == "garderie")) {
            // line 41
            echo "                    ";
            $this->loadTemplate("::headers/Admin/menuAdminGardurie.html.twig", "baseAdmin.html.twig", 41)->display($context);
            // line 42
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "Etablissement", array()), "typeEtablissement", array()) == "Centre Formation")) {
            // line 43
            echo "                    ";
            $this->loadTemplate("::headers/Admin/menuAdminFormation.html.twig", "baseAdmin.html.twig", 43)->display($context);
            // line 44
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "type", array()) == "etudiant")) {
            // line 45
            echo "                    ";
            $this->loadTemplate("::headers/Front/menuEtudiant.html.twig", "baseAdmin.html.twig", 45)->display($context);
            // line 46
            echo "                ";
        }
        // line 47
        echo "            </aside>
            ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        </div>
    </section>
    <footer id=\"footer\">
        Copyright&copy; 2017, All Rights Reserved.
    </footer>


</div>
";
        // line 57
        $this->displayBlock('scripts', $context, $blocks);
        // line 58
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
</body>

</html>";
        
        $__internal_6a11749de35f2ec2f6cd70a3eec2816848ba4b02d52e77e2512a7f51e37c16fa->leave($__internal_6a11749de35f2ec2f6cd70a3eec2816848ba4b02d52e77e2512a7f51e37c16fa_prof);

        
        $__internal_06239aa5151c72a336e084fc49c5b7504394725d4a8c994427592d5ac901612a->leave($__internal_06239aa5151c72a336e084fc49c5b7504394725d4a8c994427592d5ac901612a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c4ac0cc0b39b909ba80249a3aa34b6813e75f82892c35f6f8c7aa820bd0de65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4ac0cc0b39b909ba80249a3aa34b6813e75f82892c35f6f8c7aa820bd0de65->enter($__internal_0c4ac0cc0b39b909ba80249a3aa34b6813e75f82892c35f6f8c7aa820bd0de65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ace4a9af45265095dc1421bcff2eac18092057440e1b03de8a53829458c3216e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace4a9af45265095dc1421bcff2eac18092057440e1b03de8a53829458c3216e->enter($__internal_ace4a9af45265095dc1421bcff2eac18092057440e1b03de8a53829458c3216e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ace4a9af45265095dc1421bcff2eac18092057440e1b03de8a53829458c3216e->leave($__internal_ace4a9af45265095dc1421bcff2eac18092057440e1b03de8a53829458c3216e_prof);

        
        $__internal_0c4ac0cc0b39b909ba80249a3aa34b6813e75f82892c35f6f8c7aa820bd0de65->leave($__internal_0c4ac0cc0b39b909ba80249a3aa34b6813e75f82892c35f6f8c7aa820bd0de65_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0368fbe130979bb63b4383538c1d9e260106a1a4ef30a797bee78d106504194b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0368fbe130979bb63b4383538c1d9e260106a1a4ef30a797bee78d106504194b->enter($__internal_0368fbe130979bb63b4383538c1d9e260106a1a4ef30a797bee78d106504194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f8e46b0cf6fa19065d6a6aa4bbbf56248300a77173aa68f4aa8fb27374bb88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8e46b0cf6fa19065d6a6aa4bbbf56248300a77173aa68f4aa8fb27374bb88c->enter($__internal_6f8e46b0cf6fa19065d6a6aa4bbbf56248300a77173aa68f4aa8fb27374bb88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f8e46b0cf6fa19065d6a6aa4bbbf56248300a77173aa68f4aa8fb27374bb88c->leave($__internal_6f8e46b0cf6fa19065d6a6aa4bbbf56248300a77173aa68f4aa8fb27374bb88c_prof);

        
        $__internal_0368fbe130979bb63b4383538c1d9e260106a1a4ef30a797bee78d106504194b->leave($__internal_0368fbe130979bb63b4383538c1d9e260106a1a4ef30a797bee78d106504194b_prof);

    }

    // line 26
    public function block_secondMenu($context, array $blocks = array())
    {
        $__internal_ca5c45e336cd5ac7a68266627953025a8da00bda8c979a9ec4615c818deed2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5c45e336cd5ac7a68266627953025a8da00bda8c979a9ec4615c818deed2f5->enter($__internal_ca5c45e336cd5ac7a68266627953025a8da00bda8c979a9ec4615c818deed2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        $__internal_d4f345246edb2efcb64acc5f71431aa6e688a3b140cfd127cd358c4354867d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f345246edb2efcb64acc5f71431aa6e688a3b140cfd127cd358c4354867d53->enter($__internal_d4f345246edb2efcb64acc5f71431aa6e688a3b140cfd127cd358c4354867d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondMenu"));

        
        $__internal_d4f345246edb2efcb64acc5f71431aa6e688a3b140cfd127cd358c4354867d53->leave($__internal_d4f345246edb2efcb64acc5f71431aa6e688a3b140cfd127cd358c4354867d53_prof);

        
        $__internal_ca5c45e336cd5ac7a68266627953025a8da00bda8c979a9ec4615c818deed2f5->leave($__internal_ca5c45e336cd5ac7a68266627953025a8da00bda8c979a9ec4615c818deed2f5_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_3469a3d66648f7a3e61c5d4ce96bafb2a2246c7f79d6e02ccc6e2ac4eaf0006b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3469a3d66648f7a3e61c5d4ce96bafb2a2246c7f79d6e02ccc6e2ac4eaf0006b->enter($__internal_3469a3d66648f7a3e61c5d4ce96bafb2a2246c7f79d6e02ccc6e2ac4eaf0006b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46ccbe2f6ab27cf636811a3b2fab40cd449d2ae09b55da0cb1824135571758f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ccbe2f6ab27cf636811a3b2fab40cd449d2ae09b55da0cb1824135571758f4->enter($__internal_46ccbe2f6ab27cf636811a3b2fab40cd449d2ae09b55da0cb1824135571758f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46ccbe2f6ab27cf636811a3b2fab40cd449d2ae09b55da0cb1824135571758f4->leave($__internal_46ccbe2f6ab27cf636811a3b2fab40cd449d2ae09b55da0cb1824135571758f4_prof);

        
        $__internal_3469a3d66648f7a3e61c5d4ce96bafb2a2246c7f79d6e02ccc6e2ac4eaf0006b->leave($__internal_3469a3d66648f7a3e61c5d4ce96bafb2a2246c7f79d6e02ccc6e2ac4eaf0006b_prof);

    }

    // line 57
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4de8f0cdf269c295d8b0ce4d40201527dbdae3dfb57dd743c481d5e95d43818d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de8f0cdf269c295d8b0ce4d40201527dbdae3dfb57dd743c481d5e95d43818d->enter($__internal_4de8f0cdf269c295d8b0ce4d40201527dbdae3dfb57dd743c481d5e95d43818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_140e8213ea9b41ca5aab148038e30bf3cfe4765327a75e0de64509d225e67934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140e8213ea9b41ca5aab148038e30bf3cfe4765327a75e0de64509d225e67934->enter($__internal_140e8213ea9b41ca5aab148038e30bf3cfe4765327a75e0de64509d225e67934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_140e8213ea9b41ca5aab148038e30bf3cfe4765327a75e0de64509d225e67934->leave($__internal_140e8213ea9b41ca5aab148038e30bf3cfe4765327a75e0de64509d225e67934_prof);

        
        $__internal_4de8f0cdf269c295d8b0ce4d40201527dbdae3dfb57dd743c481d5e95d43818d->leave($__internal_4de8f0cdf269c295d8b0ce4d40201527dbdae3dfb57dd743c481d5e95d43818d_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 57,  206 => 48,  189 => 26,  172 => 8,  155 => 7,  141 => 59,  136 => 58,  134 => 57,  124 => 49,  122 => 48,  119 => 47,  116 => 46,  113 => 45,  110 => 44,  107 => 43,  104 => 42,  101 => 41,  98 => 40,  95 => 39,  92 => 38,  89 => 37,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  75 => 32,  68 => 27,  66 => 26,  62 => 25,  44 => 9,  42 => 8,  38 => 7,  30 => 1,);
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
    <link rel=\"stylesheet\" src=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>

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
                {% if(app.user.Etablissement.typeEtablissement == \"Université\") %}
                    {% include '::headers/Admin/menuAdminUniversite.html.twig' %}
                {% elseif(app.user.Etablissement.typeEtablissement == \"lycée\") %}
                    {% include '::headers/Admin/menuAdminLycee.html.twig' %}
                {% elseif(app.user.Etablissement.typeEtablissement == \"college\") %}
                    {% include '::headers/Admin/menuAdminCollege.html.twig' %}
                {% elseif(app.user.Etablissement.typeEtablissement == \"primaire\") %}
                    {% include '::headers/Admin/menuAdminPrimaire.html.twig' %}
                {% elseif(app.user.Etablissement.typeEtablissement == \"garderie\") %}
                    {% include '::headers/Admin/menuAdminGardurie.html.twig' %}
                {% elseif(app.user.Etablissement.typeEtablissement == \"Centre Formation\") %}
                    {% include '::headers/Admin/menuAdminFormation.html.twig' %}
                {% elseif(app.user.type == \"etudiant\") %}
                    {% include '::headers/Front/menuEtudiant.html.twig' %}
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

</html>", "baseAdmin.html.twig", "/var/www/html/erp/app/Resources/views/baseAdmin.html.twig");
    }
}
