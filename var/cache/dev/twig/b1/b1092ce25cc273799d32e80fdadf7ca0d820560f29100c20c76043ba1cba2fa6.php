<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c8b084a2b2ead1ff390013ee03131c88dc5a5c152d93024b3a27daa6e33a28e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9383282e8955445d3a727e3c1f2a000184987c0e5f61d1703d0f8ec89185179a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9383282e8955445d3a727e3c1f2a000184987c0e5f61d1703d0f8ec89185179a->enter($__internal_9383282e8955445d3a727e3c1f2a000184987c0e5f61d1703d0f8ec89185179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_5062bb7516fd3e7596b7dc35713f10b4f67dc9cf7714a6f4feb18a71432a83ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5062bb7516fd3e7596b7dc35713f10b4f67dc9cf7714a6f4feb18a71432a83ff->enter($__internal_5062bb7516fd3e7596b7dc35713f10b4f67dc9cf7714a6f4feb18a71432a83ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9383282e8955445d3a727e3c1f2a000184987c0e5f61d1703d0f8ec89185179a->leave($__internal_9383282e8955445d3a727e3c1f2a000184987c0e5f61d1703d0f8ec89185179a_prof);

        
        $__internal_5062bb7516fd3e7596b7dc35713f10b4f67dc9cf7714a6f4feb18a71432a83ff->leave($__internal_5062bb7516fd3e7596b7dc35713f10b4f67dc9cf7714a6f4feb18a71432a83ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05276c1d80f5119d45b7ab6c984180d6c24ebf381abbbdf83ea0a315281a9ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05276c1d80f5119d45b7ab6c984180d6c24ebf381abbbdf83ea0a315281a9ec6->enter($__internal_05276c1d80f5119d45b7ab6c984180d6c24ebf381abbbdf83ea0a315281a9ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a61ec3f475b5a1cf6ed8ee8328d3ab98f1fe9d6b9964b0fb60c0891f324d9b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61ec3f475b5a1cf6ed8ee8328d3ab98f1fe9d6b9964b0fb60c0891f324d9b08->enter($__internal_a61ec3f475b5a1cf6ed8ee8328d3ab98f1fe9d6b9964b0fb60c0891f324d9b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a61ec3f475b5a1cf6ed8ee8328d3ab98f1fe9d6b9964b0fb60c0891f324d9b08->leave($__internal_a61ec3f475b5a1cf6ed8ee8328d3ab98f1fe9d6b9964b0fb60c0891f324d9b08_prof);

        
        $__internal_05276c1d80f5119d45b7ab6c984180d6c24ebf381abbbdf83ea0a315281a9ec6->leave($__internal_05276c1d80f5119d45b7ab6c984180d6c24ebf381abbbdf83ea0a315281a9ec6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Group/edit.html.twig");
    }
}
