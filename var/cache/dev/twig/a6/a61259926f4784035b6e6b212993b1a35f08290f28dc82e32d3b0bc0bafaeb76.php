<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1c3952a2a5e0edbaa12870b9b80ea260777fe49de7eaeeb59a08b51a0cb8b07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7cea02bd181b052efc9c7bc59e66b575e65542e86d837b501ae391a8ab96a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7cea02bd181b052efc9c7bc59e66b575e65542e86d837b501ae391a8ab96a0e->enter($__internal_f7cea02bd181b052efc9c7bc59e66b575e65542e86d837b501ae391a8ab96a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_6811e10d93e0b56577c733895acd8b95f7604ba37d8aa91955128c3b1b925812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6811e10d93e0b56577c733895acd8b95f7604ba37d8aa91955128c3b1b925812->enter($__internal_6811e10d93e0b56577c733895acd8b95f7604ba37d8aa91955128c3b1b925812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f7cea02bd181b052efc9c7bc59e66b575e65542e86d837b501ae391a8ab96a0e->leave($__internal_f7cea02bd181b052efc9c7bc59e66b575e65542e86d837b501ae391a8ab96a0e_prof);

        
        $__internal_6811e10d93e0b56577c733895acd8b95f7604ba37d8aa91955128c3b1b925812->leave($__internal_6811e10d93e0b56577c733895acd8b95f7604ba37d8aa91955128c3b1b925812_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b9c702c836e08a820e4886aa1c7e9c877c6e655ea2daeb965befba3688c9f7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c702c836e08a820e4886aa1c7e9c877c6e655ea2daeb965befba3688c9f7e5->enter($__internal_b9c702c836e08a820e4886aa1c7e9c877c6e655ea2daeb965befba3688c9f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4b7a87363ffd671b4d82a7a89fd21d64ba9743e0f9c6a62cd47a98d9ad9999f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7a87363ffd671b4d82a7a89fd21d64ba9743e0f9c6a62cd47a98d9ad9999f0->enter($__internal_4b7a87363ffd671b4d82a7a89fd21d64ba9743e0f9c6a62cd47a98d9ad9999f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4b7a87363ffd671b4d82a7a89fd21d64ba9743e0f9c6a62cd47a98d9ad9999f0->leave($__internal_4b7a87363ffd671b4d82a7a89fd21d64ba9743e0f9c6a62cd47a98d9ad9999f0_prof);

        
        $__internal_b9c702c836e08a820e4886aa1c7e9c877c6e655ea2daeb965befba3688c9f7e5->leave($__internal_b9c702c836e08a820e4886aa1c7e9c877c6e655ea2daeb965befba3688c9f7e5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_441214e7cc475660cbf37154740aba2ccd17903e53f21fe5c7f5fa8b618e592b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441214e7cc475660cbf37154740aba2ccd17903e53f21fe5c7f5fa8b618e592b->enter($__internal_441214e7cc475660cbf37154740aba2ccd17903e53f21fe5c7f5fa8b618e592b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f21ce138055e47ec38b03e4412cc8fe47152799cf019640435518bfaf9e9f5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21ce138055e47ec38b03e4412cc8fe47152799cf019640435518bfaf9e9f5db->enter($__internal_f21ce138055e47ec38b03e4412cc8fe47152799cf019640435518bfaf9e9f5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f21ce138055e47ec38b03e4412cc8fe47152799cf019640435518bfaf9e9f5db->leave($__internal_f21ce138055e47ec38b03e4412cc8fe47152799cf019640435518bfaf9e9f5db_prof);

        
        $__internal_441214e7cc475660cbf37154740aba2ccd17903e53f21fe5c7f5fa8b618e592b->leave($__internal_441214e7cc475660cbf37154740aba2ccd17903e53f21fe5c7f5fa8b618e592b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7cc16300d94b1c763850106a650676ac117a3ce54084fa83dcdd6151980a9be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc16300d94b1c763850106a650676ac117a3ce54084fa83dcdd6151980a9be4->enter($__internal_7cc16300d94b1c763850106a650676ac117a3ce54084fa83dcdd6151980a9be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_46ac976a2c47759f788983f496a5fa75f20de8bb08691f848fe5ed69e2038264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ac976a2c47759f788983f496a5fa75f20de8bb08691f848fe5ed69e2038264->enter($__internal_46ac976a2c47759f788983f496a5fa75f20de8bb08691f848fe5ed69e2038264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_46ac976a2c47759f788983f496a5fa75f20de8bb08691f848fe5ed69e2038264->leave($__internal_46ac976a2c47759f788983f496a5fa75f20de8bb08691f848fe5ed69e2038264_prof);

        
        $__internal_7cc16300d94b1c763850106a650676ac117a3ce54084fa83dcdd6151980a9be4->leave($__internal_7cc16300d94b1c763850106a650676ac117a3ce54084fa83dcdd6151980a9be4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
