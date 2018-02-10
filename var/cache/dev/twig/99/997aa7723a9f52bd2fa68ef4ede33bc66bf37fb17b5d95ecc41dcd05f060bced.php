<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_83469e314eb22dce0e696a4bb89bf81700f92a28e43d91e4162720b7023e884c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_011103b5c79455af91537823e4248f7bb2e0fd16f07fcb73d8186c19aa8218dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011103b5c79455af91537823e4248f7bb2e0fd16f07fcb73d8186c19aa8218dc->enter($__internal_011103b5c79455af91537823e4248f7bb2e0fd16f07fcb73d8186c19aa8218dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_59769bbbf36ec6eb4d2699c45e945eef93cd6a315c6df342f04cb14a64f5aba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59769bbbf36ec6eb4d2699c45e945eef93cd6a315c6df342f04cb14a64f5aba7->enter($__internal_59769bbbf36ec6eb4d2699c45e945eef93cd6a315c6df342f04cb14a64f5aba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011103b5c79455af91537823e4248f7bb2e0fd16f07fcb73d8186c19aa8218dc->leave($__internal_011103b5c79455af91537823e4248f7bb2e0fd16f07fcb73d8186c19aa8218dc_prof);

        
        $__internal_59769bbbf36ec6eb4d2699c45e945eef93cd6a315c6df342f04cb14a64f5aba7->leave($__internal_59769bbbf36ec6eb4d2699c45e945eef93cd6a315c6df342f04cb14a64f5aba7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7267434aaa59d5d501f0d00a400ccf9811787c53bb4c5375ea5e41586da5347b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7267434aaa59d5d501f0d00a400ccf9811787c53bb4c5375ea5e41586da5347b->enter($__internal_7267434aaa59d5d501f0d00a400ccf9811787c53bb4c5375ea5e41586da5347b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e514462ccbd596656a854194841042a8c7b778976e777f83fe4ec4678ac9890a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e514462ccbd596656a854194841042a8c7b778976e777f83fe4ec4678ac9890a->enter($__internal_e514462ccbd596656a854194841042a8c7b778976e777f83fe4ec4678ac9890a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e514462ccbd596656a854194841042a8c7b778976e777f83fe4ec4678ac9890a->leave($__internal_e514462ccbd596656a854194841042a8c7b778976e777f83fe4ec4678ac9890a_prof);

        
        $__internal_7267434aaa59d5d501f0d00a400ccf9811787c53bb4c5375ea5e41586da5347b->leave($__internal_7267434aaa59d5d501f0d00a400ccf9811787c53bb4c5375ea5e41586da5347b_prof);

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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
