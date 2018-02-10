<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_9c8296c954295786db69ac285ffde09ba8e458fac4241fa23912055bbfb3a0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d246297aee0b80059aec5dbbb169d15c37e62ebf61a3205cc5f00c37f82b4cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d246297aee0b80059aec5dbbb169d15c37e62ebf61a3205cc5f00c37f82b4cd5->enter($__internal_d246297aee0b80059aec5dbbb169d15c37e62ebf61a3205cc5f00c37f82b4cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_920938ba373b32a2a1e444df7e7dc51d8634202b4407e548be345b55f23f0ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920938ba373b32a2a1e444df7e7dc51d8634202b4407e548be345b55f23f0ad5->enter($__internal_920938ba373b32a2a1e444df7e7dc51d8634202b4407e548be345b55f23f0ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d246297aee0b80059aec5dbbb169d15c37e62ebf61a3205cc5f00c37f82b4cd5->leave($__internal_d246297aee0b80059aec5dbbb169d15c37e62ebf61a3205cc5f00c37f82b4cd5_prof);

        
        $__internal_920938ba373b32a2a1e444df7e7dc51d8634202b4407e548be345b55f23f0ad5->leave($__internal_920938ba373b32a2a1e444df7e7dc51d8634202b4407e548be345b55f23f0ad5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2db80f376d2987a026cd6456f2299da07e6efce9f22f6e0a8a80ba2526e94136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db80f376d2987a026cd6456f2299da07e6efce9f22f6e0a8a80ba2526e94136->enter($__internal_2db80f376d2987a026cd6456f2299da07e6efce9f22f6e0a8a80ba2526e94136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_73bb200ef415d36e95e6ebd2eb27530cfe056627cd07337ff9274de8f2b51289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bb200ef415d36e95e6ebd2eb27530cfe056627cd07337ff9274de8f2b51289->enter($__internal_73bb200ef415d36e95e6ebd2eb27530cfe056627cd07337ff9274de8f2b51289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_73bb200ef415d36e95e6ebd2eb27530cfe056627cd07337ff9274de8f2b51289->leave($__internal_73bb200ef415d36e95e6ebd2eb27530cfe056627cd07337ff9274de8f2b51289_prof);

        
        $__internal_2db80f376d2987a026cd6456f2299da07e6efce9f22f6e0a8a80ba2526e94136->leave($__internal_2db80f376d2987a026cd6456f2299da07e6efce9f22f6e0a8a80ba2526e94136_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
