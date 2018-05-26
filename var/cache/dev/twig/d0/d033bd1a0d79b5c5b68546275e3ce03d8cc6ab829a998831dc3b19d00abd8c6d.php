<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_2dcd79fe22350929560dc3bf6fed29f51a37549a7ca6212177d9c53b9f1291ca extends Twig_Template
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
        $__internal_e12e035419b9aa3d4d1951543f28421cf61302b15e7d9d7a1c28c65feae2d610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12e035419b9aa3d4d1951543f28421cf61302b15e7d9d7a1c28c65feae2d610->enter($__internal_e12e035419b9aa3d4d1951543f28421cf61302b15e7d9d7a1c28c65feae2d610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_0e0f1b9fb54a77326beaa3b2c217b34db9e0adf19c8d7a238382851c0bfeb6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0f1b9fb54a77326beaa3b2c217b34db9e0adf19c8d7a238382851c0bfeb6bf->enter($__internal_0e0f1b9fb54a77326beaa3b2c217b34db9e0adf19c8d7a238382851c0bfeb6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e12e035419b9aa3d4d1951543f28421cf61302b15e7d9d7a1c28c65feae2d610->leave($__internal_e12e035419b9aa3d4d1951543f28421cf61302b15e7d9d7a1c28c65feae2d610_prof);

        
        $__internal_0e0f1b9fb54a77326beaa3b2c217b34db9e0adf19c8d7a238382851c0bfeb6bf->leave($__internal_0e0f1b9fb54a77326beaa3b2c217b34db9e0adf19c8d7a238382851c0bfeb6bf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_73fb280cf8296ff23c9e3907034218af62964755c50063601beb24c7ce3eece2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fb280cf8296ff23c9e3907034218af62964755c50063601beb24c7ce3eece2->enter($__internal_73fb280cf8296ff23c9e3907034218af62964755c50063601beb24c7ce3eece2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_490a0c77cba73ba87304fe6f46a57029ca778d502d6de2ee41a03e485b2c43c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490a0c77cba73ba87304fe6f46a57029ca778d502d6de2ee41a03e485b2c43c7->enter($__internal_490a0c77cba73ba87304fe6f46a57029ca778d502d6de2ee41a03e485b2c43c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_490a0c77cba73ba87304fe6f46a57029ca778d502d6de2ee41a03e485b2c43c7->leave($__internal_490a0c77cba73ba87304fe6f46a57029ca778d502d6de2ee41a03e485b2c43c7_prof);

        
        $__internal_73fb280cf8296ff23c9e3907034218af62964755c50063601beb24c7ce3eece2->leave($__internal_73fb280cf8296ff23c9e3907034218af62964755c50063601beb24c7ce3eece2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2bf3bf02cd3159fb632e1dc9a2a257ec56b0c91e683e04d8fd0875791d8782b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf3bf02cd3159fb632e1dc9a2a257ec56b0c91e683e04d8fd0875791d8782b4->enter($__internal_2bf3bf02cd3159fb632e1dc9a2a257ec56b0c91e683e04d8fd0875791d8782b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2d33b305346a7dcfc482fc01105df7d96fe3b93230e2630fe3c54157898625a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d33b305346a7dcfc482fc01105df7d96fe3b93230e2630fe3c54157898625a1->enter($__internal_2d33b305346a7dcfc482fc01105df7d96fe3b93230e2630fe3c54157898625a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d33b305346a7dcfc482fc01105df7d96fe3b93230e2630fe3c54157898625a1->leave($__internal_2d33b305346a7dcfc482fc01105df7d96fe3b93230e2630fe3c54157898625a1_prof);

        
        $__internal_2bf3bf02cd3159fb632e1dc9a2a257ec56b0c91e683e04d8fd0875791d8782b4->leave($__internal_2bf3bf02cd3159fb632e1dc9a2a257ec56b0c91e683e04d8fd0875791d8782b4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_13cdd299ee3042d53baccbc88574b78bc3eaeb37b674ad09bbc6527ce596ebc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cdd299ee3042d53baccbc88574b78bc3eaeb37b674ad09bbc6527ce596ebc3->enter($__internal_13cdd299ee3042d53baccbc88574b78bc3eaeb37b674ad09bbc6527ce596ebc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f1ba263b6e9e60bd06fca38f98151754977c3041c47a53e2832513aef42e7273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ba263b6e9e60bd06fca38f98151754977c3041c47a53e2832513aef42e7273->enter($__internal_f1ba263b6e9e60bd06fca38f98151754977c3041c47a53e2832513aef42e7273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f1ba263b6e9e60bd06fca38f98151754977c3041c47a53e2832513aef42e7273->leave($__internal_f1ba263b6e9e60bd06fca38f98151754977c3041c47a53e2832513aef42e7273_prof);

        
        $__internal_13cdd299ee3042d53baccbc88574b78bc3eaeb37b674ad09bbc6527ce596ebc3->leave($__internal_13cdd299ee3042d53baccbc88574b78bc3eaeb37b674ad09bbc6527ce596ebc3_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Registration/email.txt.twig");
    }
}
