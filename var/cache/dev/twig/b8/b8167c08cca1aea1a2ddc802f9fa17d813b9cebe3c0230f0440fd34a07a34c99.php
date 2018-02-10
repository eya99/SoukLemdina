<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_716475f6be8de419d42a51e5344167ea634ae59b71944b5cf837a27669e7a102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7e118aff8c2891179e1b700a84485e45903d9d0b5cfafff1f0467e0ed0efb108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e118aff8c2891179e1b700a84485e45903d9d0b5cfafff1f0467e0ed0efb108->enter($__internal_7e118aff8c2891179e1b700a84485e45903d9d0b5cfafff1f0467e0ed0efb108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_098aeda7ccfe56b36561fe6f196290f0200ade37b97f119cbf0cb8e7ad0fa0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098aeda7ccfe56b36561fe6f196290f0200ade37b97f119cbf0cb8e7ad0fa0e1->enter($__internal_098aeda7ccfe56b36561fe6f196290f0200ade37b97f119cbf0cb8e7ad0fa0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e118aff8c2891179e1b700a84485e45903d9d0b5cfafff1f0467e0ed0efb108->leave($__internal_7e118aff8c2891179e1b700a84485e45903d9d0b5cfafff1f0467e0ed0efb108_prof);

        
        $__internal_098aeda7ccfe56b36561fe6f196290f0200ade37b97f119cbf0cb8e7ad0fa0e1->leave($__internal_098aeda7ccfe56b36561fe6f196290f0200ade37b97f119cbf0cb8e7ad0fa0e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd43c129478f7dea350cc6913eb5980ba604349f788af99aaebb5a0c4e8830d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd43c129478f7dea350cc6913eb5980ba604349f788af99aaebb5a0c4e8830d9->enter($__internal_cd43c129478f7dea350cc6913eb5980ba604349f788af99aaebb5a0c4e8830d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_455c2ec4bdb12a4d6b0c0930c9ee9aee87ed09bac4d2415c9f02ff6f29825b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455c2ec4bdb12a4d6b0c0930c9ee9aee87ed09bac4d2415c9f02ff6f29825b98->enter($__internal_455c2ec4bdb12a4d6b0c0930c9ee9aee87ed09bac4d2415c9f02ff6f29825b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_455c2ec4bdb12a4d6b0c0930c9ee9aee87ed09bac4d2415c9f02ff6f29825b98->leave($__internal_455c2ec4bdb12a4d6b0c0930c9ee9aee87ed09bac4d2415c9f02ff6f29825b98_prof);

        
        $__internal_cd43c129478f7dea350cc6913eb5980ba604349f788af99aaebb5a0c4e8830d9->leave($__internal_cd43c129478f7dea350cc6913eb5980ba604349f788af99aaebb5a0c4e8830d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
