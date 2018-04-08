<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_6aac0326536bdf89889115a9c705f23c39d205d5167187f7e505646ff04c6f6b extends Twig_Template
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
        $__internal_09633de511d4caf0c97fbdccd2ead79597e638769457eca1003e25929a495038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09633de511d4caf0c97fbdccd2ead79597e638769457eca1003e25929a495038->enter($__internal_09633de511d4caf0c97fbdccd2ead79597e638769457eca1003e25929a495038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09633de511d4caf0c97fbdccd2ead79597e638769457eca1003e25929a495038->leave($__internal_09633de511d4caf0c97fbdccd2ead79597e638769457eca1003e25929a495038_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_db2464f3527cbd3a642ea87a49e46fd0f09bc711d3d1f416f0710c5ad4010492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2464f3527cbd3a642ea87a49e46fd0f09bc711d3d1f416f0710c5ad4010492->enter($__internal_db2464f3527cbd3a642ea87a49e46fd0f09bc711d3d1f416f0710c5ad4010492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Register in the Souk</title>

";
        
        $__internal_db2464f3527cbd3a642ea87a49e46fd0f09bc711d3d1f416f0710c5ad4010492->leave($__internal_db2464f3527cbd3a642ea87a49e46fd0f09bc711d3d1f416f0710c5ad4010492_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f5b3708b4e027e123c2ee6e29505659ae25ceefe73833950624a117b70ef662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5b3708b4e027e123c2ee6e29505659ae25ceefe73833950624a117b70ef662->enter($__internal_5f5b3708b4e027e123c2ee6e29505659ae25ceefe73833950624a117b70ef662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 10)->display($context);
        
        $__internal_5f5b3708b4e027e123c2ee6e29505659ae25ceefe73833950624a117b70ef662->leave($__internal_5f5b3708b4e027e123c2ee6e29505659ae25ceefe73833950624a117b70ef662_prof);

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
