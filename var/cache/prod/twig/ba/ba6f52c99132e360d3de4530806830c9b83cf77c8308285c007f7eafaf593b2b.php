<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_174eb38d2fa4879f009036bc9c78d7a0ad53479bbe86723124b64d81b0f1bec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_28bf4e059a72daf2e55a3ca6b1418860bde5d4dd1afcfe11941063e322402b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bf4e059a72daf2e55a3ca6b1418860bde5d4dd1afcfe11941063e322402b57->enter($__internal_28bf4e059a72daf2e55a3ca6b1418860bde5d4dd1afcfe11941063e322402b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28bf4e059a72daf2e55a3ca6b1418860bde5d4dd1afcfe11941063e322402b57->leave($__internal_28bf4e059a72daf2e55a3ca6b1418860bde5d4dd1afcfe11941063e322402b57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_361b54ebc50a87bde8c676d1ba851fc80748c0eb9d293622ae9e2aca11a9cafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361b54ebc50a87bde8c676d1ba851fc80748c0eb9d293622ae9e2aca11a9cafb->enter($__internal_361b54ebc50a87bde8c676d1ba851fc80748c0eb9d293622ae9e2aca11a9cafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_361b54ebc50a87bde8c676d1ba851fc80748c0eb9d293622ae9e2aca11a9cafb->leave($__internal_361b54ebc50a87bde8c676d1ba851fc80748c0eb9d293622ae9e2aca11a9cafb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
