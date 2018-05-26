<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_6892f98b2dabf20755eb2ae2369fe2b53aeed44560111e3f93a0b0feb7b072a4 extends Twig_Template
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
        $__internal_96e48df928fbb43bb74fe4383300a40d953f19ec9c83dca6ce5975ab554ee4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e48df928fbb43bb74fe4383300a40d953f19ec9c83dca6ce5975ab554ee4ca->enter($__internal_96e48df928fbb43bb74fe4383300a40d953f19ec9c83dca6ce5975ab554ee4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_96e48df928fbb43bb74fe4383300a40d953f19ec9c83dca6ce5975ab554ee4ca->leave($__internal_96e48df928fbb43bb74fe4383300a40d953f19ec9c83dca6ce5975ab554ee4ca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3c0af7a6935b035f0410e49fb877ede75501727e5becc4a8806441c8bc3a914d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0af7a6935b035f0410e49fb877ede75501727e5becc4a8806441c8bc3a914d->enter($__internal_3c0af7a6935b035f0410e49fb877ede75501727e5becc4a8806441c8bc3a914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_3c0af7a6935b035f0410e49fb877ede75501727e5becc4a8806441c8bc3a914d->leave($__internal_3c0af7a6935b035f0410e49fb877ede75501727e5becc4a8806441c8bc3a914d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_663045d4582a289864605e945caf26506b70857ffec4c23fe26475367e845981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663045d4582a289864605e945caf26506b70857ffec4c23fe26475367e845981->enter($__internal_663045d4582a289864605e945caf26506b70857ffec4c23fe26475367e845981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_663045d4582a289864605e945caf26506b70857ffec4c23fe26475367e845981->leave($__internal_663045d4582a289864605e945caf26506b70857ffec4c23fe26475367e845981_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e25ff98b7d7ad54951da22271ab9919f74e9b649df953fba4d278010044da13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25ff98b7d7ad54951da22271ab9919f74e9b649df953fba4d278010044da13d->enter($__internal_e25ff98b7d7ad54951da22271ab9919f74e9b649df953fba4d278010044da13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e25ff98b7d7ad54951da22271ab9919f74e9b649df953fba4d278010044da13d->leave($__internal_e25ff98b7d7ad54951da22271ab9919f74e9b649df953fba4d278010044da13d_prof);

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
", "@FOSUser/Registration/email.txt.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Registration/email.txt.twig");
    }
}
