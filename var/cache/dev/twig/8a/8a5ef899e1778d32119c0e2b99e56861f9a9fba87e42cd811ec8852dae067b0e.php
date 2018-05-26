<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1b6f8defd5f62f4a0f99aa0e3ce373de9a5cb0121cf80b95393f3c4a79346d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_deb1947a19d52e3384b4b005e70853de3d6ab569d9ab0dc014249696771d3619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb1947a19d52e3384b4b005e70853de3d6ab569d9ab0dc014249696771d3619->enter($__internal_deb1947a19d52e3384b4b005e70853de3d6ab569d9ab0dc014249696771d3619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_a82d060d8086e5dd4bcd2f49fc472826f5aee25c70ec80990d150484e11e7320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82d060d8086e5dd4bcd2f49fc472826f5aee25c70ec80990d150484e11e7320->enter($__internal_a82d060d8086e5dd4bcd2f49fc472826f5aee25c70ec80990d150484e11e7320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb1947a19d52e3384b4b005e70853de3d6ab569d9ab0dc014249696771d3619->leave($__internal_deb1947a19d52e3384b4b005e70853de3d6ab569d9ab0dc014249696771d3619_prof);

        
        $__internal_a82d060d8086e5dd4bcd2f49fc472826f5aee25c70ec80990d150484e11e7320->leave($__internal_a82d060d8086e5dd4bcd2f49fc472826f5aee25c70ec80990d150484e11e7320_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_c097364a1c6209f654a9fb33f65e3898c3eca81ea53a8253f355bb58dc5d62bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c097364a1c6209f654a9fb33f65e3898c3eca81ea53a8253f355bb58dc5d62bb->enter($__internal_c097364a1c6209f654a9fb33f65e3898c3eca81ea53a8253f355bb58dc5d62bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f9194a28cebffa4176adabb36430f3b34b9f6a81c1fdaf7c0afe0b65dda0bbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9194a28cebffa4176adabb36430f3b34b9f6a81c1fdaf7c0afe0b65dda0bbb0->enter($__internal_f9194a28cebffa4176adabb36430f3b34b9f6a81c1fdaf7c0afe0b65dda0bbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Register in the Souk</title>

";
        
        $__internal_f9194a28cebffa4176adabb36430f3b34b9f6a81c1fdaf7c0afe0b65dda0bbb0->leave($__internal_f9194a28cebffa4176adabb36430f3b34b9f6a81c1fdaf7c0afe0b65dda0bbb0_prof);

        
        $__internal_c097364a1c6209f654a9fb33f65e3898c3eca81ea53a8253f355bb58dc5d62bb->leave($__internal_c097364a1c6209f654a9fb33f65e3898c3eca81ea53a8253f355bb58dc5d62bb_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5a59045e4f96e3496fdbd2f2d2f6b7b37e845210e63b0b47c63a40e85568c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a59045e4f96e3496fdbd2f2d2f6b7b37e845210e63b0b47c63a40e85568c5e->enter($__internal_a5a59045e4f96e3496fdbd2f2d2f6b7b37e845210e63b0b47c63a40e85568c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_52bb7aa4de280c7bd677757b2e1074a647d3f077d4f86e98f5abab035c3ead6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bb7aa4de280c7bd677757b2e1074a647d3f077d4f86e98f5abab035c3ead6e->enter($__internal_52bb7aa4de280c7bd677757b2e1074a647d3f077d4f86e98f5abab035c3ead6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 10)->display($context);
        
        $__internal_52bb7aa4de280c7bd677757b2e1074a647d3f077d4f86e98f5abab035c3ead6e->leave($__internal_52bb7aa4de280c7bd677757b2e1074a647d3f077d4f86e98f5abab035c3ead6e_prof);

        
        $__internal_a5a59045e4f96e3496fdbd2f2d2f6b7b37e845210e63b0b47c63a40e85568c5e->leave($__internal_a5a59045e4f96e3496fdbd2f2d2f6b7b37e845210e63b0b47c63a40e85568c5e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  65 => 9,  50 => 3,  41 => 2,  11 => 1,);
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
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Registration/register.html.twig");
    }
}
