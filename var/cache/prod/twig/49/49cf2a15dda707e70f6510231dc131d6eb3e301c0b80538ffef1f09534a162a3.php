<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_74045280cb8142ab47aea9eee469f84d64748217f8959bf2936e50961f650090 extends Twig_Template
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
        $__internal_5b4aabb10d0d2576e93b1fb8c564dafb4aed9928a384c70fa4cd5dc966d7ddd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4aabb10d0d2576e93b1fb8c564dafb4aed9928a384c70fa4cd5dc966d7ddd3->enter($__internal_5b4aabb10d0d2576e93b1fb8c564dafb4aed9928a384c70fa4cd5dc966d7ddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b4aabb10d0d2576e93b1fb8c564dafb4aed9928a384c70fa4cd5dc966d7ddd3->leave($__internal_5b4aabb10d0d2576e93b1fb8c564dafb4aed9928a384c70fa4cd5dc966d7ddd3_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f75b44b9ca7bf2dbd479eaf46d0f82d5dd74ac242e0513bce29f4b5a7841a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f75b44b9ca7bf2dbd479eaf46d0f82d5dd74ac242e0513bce29f4b5a7841a37->enter($__internal_3f75b44b9ca7bf2dbd479eaf46d0f82d5dd74ac242e0513bce29f4b5a7841a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Register in the Souk</title>

";
        
        $__internal_3f75b44b9ca7bf2dbd479eaf46d0f82d5dd74ac242e0513bce29f4b5a7841a37->leave($__internal_3f75b44b9ca7bf2dbd479eaf46d0f82d5dd74ac242e0513bce29f4b5a7841a37_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3889cf2f8ed281fd38fc293eb4ab632b3d33702eb13f47f4d1420638c4571718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3889cf2f8ed281fd38fc293eb4ab632b3d33702eb13f47f4d1420638c4571718->enter($__internal_3889cf2f8ed281fd38fc293eb4ab632b3d33702eb13f47f4d1420638c4571718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 10)->display($context);
        
        $__internal_3889cf2f8ed281fd38fc293eb4ab632b3d33702eb13f47f4d1420638c4571718->leave($__internal_3889cf2f8ed281fd38fc293eb4ab632b3d33702eb13f47f4d1420638c4571718_prof);

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
", "@FOSUser/Registration/register.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\src\\SUserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
