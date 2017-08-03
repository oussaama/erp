<?php

/* ERPBundle:Admin/status:show.html.twig */
class __TwigTemplate_a98493b3648565c68dd085d3d41771a7745ab5a7102f3727b6206170f6e8f972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ERPBundle:Admin/status:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_253328aed63cca0faac7dcc4980d69fc1b60e67a3c10b10c9f33d8492ea4d565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253328aed63cca0faac7dcc4980d69fc1b60e67a3c10b10c9f33d8492ea4d565->enter($__internal_253328aed63cca0faac7dcc4980d69fc1b60e67a3c10b10c9f33d8492ea4d565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/status:show.html.twig"));

        $__internal_20fb8de40bbda16aab9b8fcb69e6dcee793fcc5c4ed6cc8b9b0ceb33a9817fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fb8de40bbda16aab9b8fcb69e6dcee793fcc5c4ed6cc8b9b0ceb33a9817fb6->enter($__internal_20fb8de40bbda16aab9b8fcb69e6dcee793fcc5c4ed6cc8b9b0ceb33a9817fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/status:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_253328aed63cca0faac7dcc4980d69fc1b60e67a3c10b10c9f33d8492ea4d565->leave($__internal_253328aed63cca0faac7dcc4980d69fc1b60e67a3c10b10c9f33d8492ea4d565_prof);

        
        $__internal_20fb8de40bbda16aab9b8fcb69e6dcee793fcc5c4ed6cc8b9b0ceb33a9817fb6->leave($__internal_20fb8de40bbda16aab9b8fcb69e6dcee793fcc5c4ed6cc8b9b0ceb33a9817fb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9ccdfc166fc22d78938baa5d302ab8496c39a432a6085f3296556de16166a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ccdfc166fc22d78938baa5d302ab8496c39a432a6085f3296556de16166a41->enter($__internal_c9ccdfc166fc22d78938baa5d302ab8496c39a432a6085f3296556de16166a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6f060c4c67efa8bc79a04a407990e1a41d0054ebe890f638f07c677279fdc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f060c4c67efa8bc79a04a407990e1a41d0054ebe890f638f07c677279fdc6b->enter($__internal_e6f060c4c67efa8bc79a04a407990e1a41d0054ebe890f638f07c677279fdc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Status</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? $this->getContext($context, "status")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? $this->getContext($context, "status")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_status_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_status_edit", array("id" => $this->getAttribute(($context["status"] ?? $this->getContext($context, "status")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e6f060c4c67efa8bc79a04a407990e1a41d0054ebe890f638f07c677279fdc6b->leave($__internal_e6f060c4c67efa8bc79a04a407990e1a41d0054ebe890f638f07c677279fdc6b_prof);

        
        $__internal_c9ccdfc166fc22d78938baa5d302ab8496c39a432a6085f3296556de16166a41->leave($__internal_c9ccdfc166fc22d78938baa5d302ab8496c39a432a6085f3296556de16166a41_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/status:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Status</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ status.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ status.type }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_status_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_status_edit', { 'id': status.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ERPBundle:Admin/status:show.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/status/show.html.twig");
    }
}
