<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dbe2769a70789d850dd24605f399e4bd716950efba16fef71db129a530aeb48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccba52ff499ff126549824902abf8ebb6d28ab08fb731c94d31030b3848eac5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccba52ff499ff126549824902abf8ebb6d28ab08fb731c94d31030b3848eac5f->enter($__internal_ccba52ff499ff126549824902abf8ebb6d28ab08fb731c94d31030b3848eac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e3a4f11232251995fe36ef8c182d61d4a07018cd83b28c81aecf9f1a68c0f09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a4f11232251995fe36ef8c182d61d4a07018cd83b28c81aecf9f1a68c0f09f->enter($__internal_e3a4f11232251995fe36ef8c182d61d4a07018cd83b28c81aecf9f1a68c0f09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccba52ff499ff126549824902abf8ebb6d28ab08fb731c94d31030b3848eac5f->leave($__internal_ccba52ff499ff126549824902abf8ebb6d28ab08fb731c94d31030b3848eac5f_prof);

        
        $__internal_e3a4f11232251995fe36ef8c182d61d4a07018cd83b28c81aecf9f1a68c0f09f->leave($__internal_e3a4f11232251995fe36ef8c182d61d4a07018cd83b28c81aecf9f1a68c0f09f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57103187e56b6c3efd27868ddf6ecf7b6bb8962b16e13a8f662562c7f4081da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57103187e56b6c3efd27868ddf6ecf7b6bb8962b16e13a8f662562c7f4081da0->enter($__internal_57103187e56b6c3efd27868ddf6ecf7b6bb8962b16e13a8f662562c7f4081da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32f93e5100c30c53e630c45f42a06206a8d0a1c8e96c6fd2afa3f469781a6943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f93e5100c30c53e630c45f42a06206a8d0a1c8e96c6fd2afa3f469781a6943->enter($__internal_32f93e5100c30c53e630c45f42a06206a8d0a1c8e96c6fd2afa3f469781a6943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_32f93e5100c30c53e630c45f42a06206a8d0a1c8e96c6fd2afa3f469781a6943->leave($__internal_32f93e5100c30c53e630c45f42a06206a8d0a1c8e96c6fd2afa3f469781a6943_prof);

        
        $__internal_57103187e56b6c3efd27868ddf6ecf7b6bb8962b16e13a8f662562c7f4081da0->leave($__internal_57103187e56b6c3efd27868ddf6ecf7b6bb8962b16e13a8f662562c7f4081da0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a384658e036171c78d73356b119904db4afe0dec5db7561920957c7eb7fd8cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a384658e036171c78d73356b119904db4afe0dec5db7561920957c7eb7fd8cba->enter($__internal_a384658e036171c78d73356b119904db4afe0dec5db7561920957c7eb7fd8cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77306bdfde6b2c8b2ee0391ea65da8fdcaf22591324d2761edab181733af3cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77306bdfde6b2c8b2ee0391ea65da8fdcaf22591324d2761edab181733af3cce->enter($__internal_77306bdfde6b2c8b2ee0391ea65da8fdcaf22591324d2761edab181733af3cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_77306bdfde6b2c8b2ee0391ea65da8fdcaf22591324d2761edab181733af3cce->leave($__internal_77306bdfde6b2c8b2ee0391ea65da8fdcaf22591324d2761edab181733af3cce_prof);

        
        $__internal_a384658e036171c78d73356b119904db4afe0dec5db7561920957c7eb7fd8cba->leave($__internal_a384658e036171c78d73356b119904db4afe0dec5db7561920957c7eb7fd8cba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
