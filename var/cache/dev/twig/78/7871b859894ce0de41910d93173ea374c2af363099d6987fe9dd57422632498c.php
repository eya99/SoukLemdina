<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3fae85a1349efe2df00086b87fc4523cb571d12c5b4b3a5fb4e031d632b79df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_38a9e15133993c09e4908440ae2321c91f958309ff382d731eb4823666d1fc93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a9e15133993c09e4908440ae2321c91f958309ff382d731eb4823666d1fc93->enter($__internal_38a9e15133993c09e4908440ae2321c91f958309ff382d731eb4823666d1fc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_ab85bf89dd4575d644494a0276a59c65dc23e43deb95c82125562019715a2bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab85bf89dd4575d644494a0276a59c65dc23e43deb95c82125562019715a2bd6->enter($__internal_ab85bf89dd4575d644494a0276a59c65dc23e43deb95c82125562019715a2bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a9e15133993c09e4908440ae2321c91f958309ff382d731eb4823666d1fc93->leave($__internal_38a9e15133993c09e4908440ae2321c91f958309ff382d731eb4823666d1fc93_prof);

        
        $__internal_ab85bf89dd4575d644494a0276a59c65dc23e43deb95c82125562019715a2bd6->leave($__internal_ab85bf89dd4575d644494a0276a59c65dc23e43deb95c82125562019715a2bd6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea840a24fc1b19f5768854f57d450261a67fc977b5748129525d27dbf178ed60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea840a24fc1b19f5768854f57d450261a67fc977b5748129525d27dbf178ed60->enter($__internal_ea840a24fc1b19f5768854f57d450261a67fc977b5748129525d27dbf178ed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_592ab464b79557a36c9f27424760448420876f213c70370bb853dd26506f82fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592ab464b79557a36c9f27424760448420876f213c70370bb853dd26506f82fc->enter($__internal_592ab464b79557a36c9f27424760448420876f213c70370bb853dd26506f82fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_592ab464b79557a36c9f27424760448420876f213c70370bb853dd26506f82fc->leave($__internal_592ab464b79557a36c9f27424760448420876f213c70370bb853dd26506f82fc_prof);

        
        $__internal_ea840a24fc1b19f5768854f57d450261a67fc977b5748129525d27dbf178ed60->leave($__internal_ea840a24fc1b19f5768854f57d450261a67fc977b5748129525d27dbf178ed60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
