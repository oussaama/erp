<?php

/* ERPBundle:Admin/payment:show.html.twig */
class __TwigTemplate_b1435d98ff851eb6d4622745a44bfc22cc23d1195e47818a51412c202907e3a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ERPBundle:Admin/payment:show.html.twig", 1);
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
        $__internal_f1ba9fc219fc09d86881d1b8a3e51c406273f50d47a6231e727e2423115f7c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ba9fc219fc09d86881d1b8a3e51c406273f50d47a6231e727e2423115f7c45->enter($__internal_f1ba9fc219fc09d86881d1b8a3e51c406273f50d47a6231e727e2423115f7c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/payment:show.html.twig"));

        $__internal_55ed1762e2dd86d0ac23eafe06abf80f6095230443bf9b7fd7d369ea1a04fa55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ed1762e2dd86d0ac23eafe06abf80f6095230443bf9b7fd7d369ea1a04fa55->enter($__internal_55ed1762e2dd86d0ac23eafe06abf80f6095230443bf9b7fd7d369ea1a04fa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERPBundle:Admin/payment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ba9fc219fc09d86881d1b8a3e51c406273f50d47a6231e727e2423115f7c45->leave($__internal_f1ba9fc219fc09d86881d1b8a3e51c406273f50d47a6231e727e2423115f7c45_prof);

        
        $__internal_55ed1762e2dd86d0ac23eafe06abf80f6095230443bf9b7fd7d369ea1a04fa55->leave($__internal_55ed1762e2dd86d0ac23eafe06abf80f6095230443bf9b7fd7d369ea1a04fa55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_56b5782057bf538da98ad967808ab2da500397da32ffb7ee14522914e268dd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b5782057bf538da98ad967808ab2da500397da32ffb7ee14522914e268dd4f->enter($__internal_56b5782057bf538da98ad967808ab2da500397da32ffb7ee14522914e268dd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35271d0ad43d29958da3607596487e634313228a2fdb92eaebf4726d8f0bb12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35271d0ad43d29958da3607596487e634313228a2fdb92eaebf4726d8f0bb12d->enter($__internal_35271d0ad43d29958da3607596487e634313228a2fdb92eaebf4726d8f0bb12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Payment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typepayment</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "typePayment", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Solde</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "solde", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "createdAt", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_payment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_payment_edit", array("id" => $this->getAttribute(($context["payment"] ?? $this->getContext($context, "payment")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_35271d0ad43d29958da3607596487e634313228a2fdb92eaebf4726d8f0bb12d->leave($__internal_35271d0ad43d29958da3607596487e634313228a2fdb92eaebf4726d8f0bb12d_prof);

        
        $__internal_56b5782057bf538da98ad967808ab2da500397da32ffb7ee14522914e268dd4f->leave($__internal_56b5782057bf538da98ad967808ab2da500397da32ffb7ee14522914e268dd4f_prof);

    }

    public function getTemplateName()
    {
        return "ERPBundle:Admin/payment:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  127 => 47,  121 => 44,  115 => 41,  103 => 34,  94 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Payment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ payment.id }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ payment.status }}</td>
            </tr>
            <tr>
                <th>Typepayment</th>
                <td>{{ payment.typePayment }}</td>
            </tr>
            <tr>
                <th>Solde</th>
                <td>{{ payment.solde }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if payment.date %}{{ payment.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if payment.createdAt %}{{ payment.createdAt|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{% if payment.updatedAt %}{{ payment.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_payment_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_payment_edit', { 'id': payment.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}



", "ERPBundle:Admin/payment:show.html.twig", "/var/www/html/erp/src/ERPBundle/Resources/views/Admin/payment/show.html.twig");
    }
}
