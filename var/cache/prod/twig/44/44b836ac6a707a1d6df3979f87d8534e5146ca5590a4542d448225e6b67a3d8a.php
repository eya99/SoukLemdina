<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_12f7b0a3d159a1e01010c00e1e3bea507cb5e16f21e7cdc563048f0dc660b4a8 extends Twig_Template
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
        $__internal_819db38e84760c00c617b6c5aeb663e2567ef132e8bb3d8ba5207a47b5218a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819db38e84760c00c617b6c5aeb663e2567ef132e8bb3d8ba5207a47b5218a8a->enter($__internal_819db38e84760c00c617b6c5aeb663e2567ef132e8bb3d8ba5207a47b5218a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_819db38e84760c00c617b6c5aeb663e2567ef132e8bb3d8ba5207a47b5218a8a->leave($__internal_819db38e84760c00c617b6c5aeb663e2567ef132e8bb3d8ba5207a47b5218a8a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_86ba739ee7ef5b5145c112c53d0a81f4ea51cc0bad2b62aa59cecb947b198ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ba739ee7ef5b5145c112c53d0a81f4ea51cc0bad2b62aa59cecb947b198ecd->enter($__internal_86ba739ee7ef5b5145c112c53d0a81f4ea51cc0bad2b62aa59cecb947b198ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_86ba739ee7ef5b5145c112c53d0a81f4ea51cc0bad2b62aa59cecb947b198ecd->leave($__internal_86ba739ee7ef5b5145c112c53d0a81f4ea51cc0bad2b62aa59cecb947b198ecd_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_55da77e552225e4ffe8f183313121a307d521c21a45cbb576d6c8584931fdc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55da77e552225e4ffe8f183313121a307d521c21a45cbb576d6c8584931fdc45->enter($__internal_55da77e552225e4ffe8f183313121a307d521c21a45cbb576d6c8584931fdc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_55da77e552225e4ffe8f183313121a307d521c21a45cbb576d6c8584931fdc45->leave($__internal_55da77e552225e4ffe8f183313121a307d521c21a45cbb576d6c8584931fdc45_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2e474f92415420487a7fad0f1d0af6915de67543de98fdb92255baea5c435649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e474f92415420487a7fad0f1d0af6915de67543de98fdb92255baea5c435649->enter($__internal_2e474f92415420487a7fad0f1d0af6915de67543de98fdb92255baea5c435649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2e474f92415420487a7fad0f1d0af6915de67543de98fdb92255baea5c435649->leave($__internal_2e474f92415420487a7fad0f1d0af6915de67543de98fdb92255baea5c435649_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
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
", "@FOSUser/Registration/email.txt.twig", "D:\\xampp\\htdocs\\SoukLemdina\\src\\SUserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
