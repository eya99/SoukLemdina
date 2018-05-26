<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dc9fb1e2649870ae6897e053621eb5192056a91d3bb5e5ba40524952d8b45a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_58b2f7e71d5eba2b963b649897fedc3bcb9f17d89d1b8bd85b9ef5a266e61ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b2f7e71d5eba2b963b649897fedc3bcb9f17d89d1b8bd85b9ef5a266e61ae4->enter($__internal_58b2f7e71d5eba2b963b649897fedc3bcb9f17d89d1b8bd85b9ef5a266e61ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_d37bacde5a83dbe9d31999a9af5eb3ea29a325f6cdd09aa5f6b253d3a5252e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37bacde5a83dbe9d31999a9af5eb3ea29a325f6cdd09aa5f6b253d3a5252e8c->enter($__internal_d37bacde5a83dbe9d31999a9af5eb3ea29a325f6cdd09aa5f6b253d3a5252e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b2f7e71d5eba2b963b649897fedc3bcb9f17d89d1b8bd85b9ef5a266e61ae4->leave($__internal_58b2f7e71d5eba2b963b649897fedc3bcb9f17d89d1b8bd85b9ef5a266e61ae4_prof);

        
        $__internal_d37bacde5a83dbe9d31999a9af5eb3ea29a325f6cdd09aa5f6b253d3a5252e8c->leave($__internal_d37bacde5a83dbe9d31999a9af5eb3ea29a325f6cdd09aa5f6b253d3a5252e8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89c52085e0b70ee50a9879ffbc4dbb4419c3cb075d78627f0b9d21908a4bf58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c52085e0b70ee50a9879ffbc4dbb4419c3cb075d78627f0b9d21908a4bf58f->enter($__internal_89c52085e0b70ee50a9879ffbc4dbb4419c3cb075d78627f0b9d21908a4bf58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59c7195ff891a4a6d55d17a88fd0af8546226a2a2b7895d9e741f7245aeb3268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c7195ff891a4a6d55d17a88fd0af8546226a2a2b7895d9e741f7245aeb3268->enter($__internal_59c7195ff891a4a6d55d17a88fd0af8546226a2a2b7895d9e741f7245aeb3268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_59c7195ff891a4a6d55d17a88fd0af8546226a2a2b7895d9e741f7245aeb3268->leave($__internal_59c7195ff891a4a6d55d17a88fd0af8546226a2a2b7895d9e741f7245aeb3268_prof);

        
        $__internal_89c52085e0b70ee50a9879ffbc4dbb4419c3cb075d78627f0b9d21908a4bf58f->leave($__internal_89c52085e0b70ee50a9879ffbc4dbb4419c3cb075d78627f0b9d21908a4bf58f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Group/list.html.twig");
    }
}
