<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c992e6011e2ff0dbee98172ed489e72e7ed91b3ec0ee79876341fadfe2ee8cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57eeac445e84f625b796f311ffe46ef136f7e9c4b13a429058ed684a3ca2991c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57eeac445e84f625b796f311ffe46ef136f7e9c4b13a429058ed684a3ca2991c->enter($__internal_57eeac445e84f625b796f311ffe46ef136f7e9c4b13a429058ed684a3ca2991c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57eeac445e84f625b796f311ffe46ef136f7e9c4b13a429058ed684a3ca2991c->leave($__internal_57eeac445e84f625b796f311ffe46ef136f7e9c4b13a429058ed684a3ca2991c_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_357ceb60d5ede203b7e48d17c3d5de5789711f0eab25e859a9ae1e86eff69c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357ceb60d5ede203b7e48d17c3d5de5789711f0eab25e859a9ae1e86eff69c92->enter($__internal_357ceb60d5ede203b7e48d17c3d5de5789711f0eab25e859a9ae1e86eff69c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Register in the Souk</title>

";
        
        $__internal_357ceb60d5ede203b7e48d17c3d5de5789711f0eab25e859a9ae1e86eff69c92->leave($__internal_357ceb60d5ede203b7e48d17c3d5de5789711f0eab25e859a9ae1e86eff69c92_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86c8f03a451ff055e45de72d5b4508b95393d04b9ac3e850ff234c036955ecd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c8f03a451ff055e45de72d5b4508b95393d04b9ac3e850ff234c036955ecd0->enter($__internal_86c8f03a451ff055e45de72d5b4508b95393d04b9ac3e850ff234c036955ecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 10)->display($context);
        
        $__internal_86c8f03a451ff055e45de72d5b4508b95393d04b9ac3e850ff234c036955ecd0->leave($__internal_86c8f03a451ff055e45de72d5b4508b95393d04b9ac3e850ff234c036955ecd0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 9,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SUserBundle::layout.html.twig\" %}
{% block head %}

    <!-- Document Title
\t============================================= -->
    <title>Register in the Souk</title>

{% endblock %}
{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Registration/register.html.twig");
    }
}
