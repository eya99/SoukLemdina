<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_dbf551960ead1f940b99d725276f7a574c529b2464ea43128b50ebff429b62a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_45d8c591f4481e5c2155472fb41efee0a3c58f5fcc070d0bac5c6a27773c1485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d8c591f4481e5c2155472fb41efee0a3c58f5fcc070d0bac5c6a27773c1485->enter($__internal_45d8c591f4481e5c2155472fb41efee0a3c58f5fcc070d0bac5c6a27773c1485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_e31e0c72d75b110c180ed912c6405b5d58a196821248a173f89b10bd7129e1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31e0c72d75b110c180ed912c6405b5d58a196821248a173f89b10bd7129e1a6->enter($__internal_e31e0c72d75b110c180ed912c6405b5d58a196821248a173f89b10bd7129e1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45d8c591f4481e5c2155472fb41efee0a3c58f5fcc070d0bac5c6a27773c1485->leave($__internal_45d8c591f4481e5c2155472fb41efee0a3c58f5fcc070d0bac5c6a27773c1485_prof);

        
        $__internal_e31e0c72d75b110c180ed912c6405b5d58a196821248a173f89b10bd7129e1a6->leave($__internal_e31e0c72d75b110c180ed912c6405b5d58a196821248a173f89b10bd7129e1a6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c492b48d5fc9ff3b2892e18d4cbbaefdfe5553efa7bb2cb6b9eaef041a7d8083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c492b48d5fc9ff3b2892e18d4cbbaefdfe5553efa7bb2cb6b9eaef041a7d8083->enter($__internal_c492b48d5fc9ff3b2892e18d4cbbaefdfe5553efa7bb2cb6b9eaef041a7d8083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_723335c4014f0f6a8608141c35f68190af2eb6c138419ca42aa10cdc5305ac90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723335c4014f0f6a8608141c35f68190af2eb6c138419ca42aa10cdc5305ac90->enter($__internal_723335c4014f0f6a8608141c35f68190af2eb6c138419ca42aa10cdc5305ac90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_723335c4014f0f6a8608141c35f68190af2eb6c138419ca42aa10cdc5305ac90->leave($__internal_723335c4014f0f6a8608141c35f68190af2eb6c138419ca42aa10cdc5305ac90_prof);

        
        $__internal_c492b48d5fc9ff3b2892e18d4cbbaefdfe5553efa7bb2cb6b9eaef041a7d8083->leave($__internal_c492b48d5fc9ff3b2892e18d4cbbaefdfe5553efa7bb2cb6b9eaef041a7d8083_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
