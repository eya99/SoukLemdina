<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_93119b6fdf662b7216e21091f5bf6fa018b227eb4ccc3bdf06b26d8f2bd4bc5a extends Twig_Template
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
        $__internal_a90a98ff666a8a9f94a1adf49ab1857684a49346abe9def6ebb2a5cb177cce41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90a98ff666a8a9f94a1adf49ab1857684a49346abe9def6ebb2a5cb177cce41->enter($__internal_a90a98ff666a8a9f94a1adf49ab1857684a49346abe9def6ebb2a5cb177cce41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a90a98ff666a8a9f94a1adf49ab1857684a49346abe9def6ebb2a5cb177cce41->leave($__internal_a90a98ff666a8a9f94a1adf49ab1857684a49346abe9def6ebb2a5cb177cce41_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_07702081932aa60c743d39262c41bc26be5f2dbee1a30a4742d032a3bba3a1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07702081932aa60c743d39262c41bc26be5f2dbee1a30a4742d032a3bba3a1f8->enter($__internal_07702081932aa60c743d39262c41bc26be5f2dbee1a30a4742d032a3bba3a1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Register in the Souk</title>

";
        
        $__internal_07702081932aa60c743d39262c41bc26be5f2dbee1a30a4742d032a3bba3a1f8->leave($__internal_07702081932aa60c743d39262c41bc26be5f2dbee1a30a4742d032a3bba3a1f8_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a8c1e50df04130052b80d2bde944a1303cf2a4dde4fcfb9f2ff7a211fd38c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8c1e50df04130052b80d2bde944a1303cf2a4dde4fcfb9f2ff7a211fd38c3f->enter($__internal_0a8c1e50df04130052b80d2bde944a1303cf2a4dde4fcfb9f2ff7a211fd38c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 10)->display($context);
        
        $__internal_0a8c1e50df04130052b80d2bde944a1303cf2a4dde4fcfb9f2ff7a211fd38c3f->leave($__internal_0a8c1e50df04130052b80d2bde944a1303cf2a4dde4fcfb9f2ff7a211fd38c3f_prof);

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
