<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0510ccb17a27442de84cbe3113345bc6d4b0d3d451c63eef28c606d6deb45706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_5de6fd0c1fbe7b5cfe5d09bea1fcc47daa9c825009e84bf5219bffb65718904b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de6fd0c1fbe7b5cfe5d09bea1fcc47daa9c825009e84bf5219bffb65718904b->enter($__internal_5de6fd0c1fbe7b5cfe5d09bea1fcc47daa9c825009e84bf5219bffb65718904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_96521b814f07ff063122068d3e194153400ff35566aacb4b39e104585c597308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96521b814f07ff063122068d3e194153400ff35566aacb4b39e104585c597308->enter($__internal_96521b814f07ff063122068d3e194153400ff35566aacb4b39e104585c597308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de6fd0c1fbe7b5cfe5d09bea1fcc47daa9c825009e84bf5219bffb65718904b->leave($__internal_5de6fd0c1fbe7b5cfe5d09bea1fcc47daa9c825009e84bf5219bffb65718904b_prof);

        
        $__internal_96521b814f07ff063122068d3e194153400ff35566aacb4b39e104585c597308->leave($__internal_96521b814f07ff063122068d3e194153400ff35566aacb4b39e104585c597308_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c99d86bdd9c89280c23c269f72e0f607e5023af558a0734dd5af6f60c1cd9f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99d86bdd9c89280c23c269f72e0f607e5023af558a0734dd5af6f60c1cd9f92->enter($__internal_c99d86bdd9c89280c23c269f72e0f607e5023af558a0734dd5af6f60c1cd9f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_de3962c2bb7420545e67fc1ea31aca8cd541204e1ac861de761f9ca58accb271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3962c2bb7420545e67fc1ea31aca8cd541204e1ac861de761f9ca58accb271->enter($__internal_de3962c2bb7420545e67fc1ea31aca8cd541204e1ac861de761f9ca58accb271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_de3962c2bb7420545e67fc1ea31aca8cd541204e1ac861de761f9ca58accb271->leave($__internal_de3962c2bb7420545e67fc1ea31aca8cd541204e1ac861de761f9ca58accb271_prof);

        
        $__internal_c99d86bdd9c89280c23c269f72e0f607e5023af558a0734dd5af6f60c1cd9f92->leave($__internal_c99d86bdd9c89280c23c269f72e0f607e5023af558a0734dd5af6f60c1cd9f92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
