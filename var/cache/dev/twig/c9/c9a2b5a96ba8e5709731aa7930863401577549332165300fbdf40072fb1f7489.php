<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_7e9e082c939fa4e1d7bc339c53279b37362b6226cb36dd4be297ec1bc1a70211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ee2c5a9c8f822e48ee8bc72b680da837c5ec08bb4ff1971773a4733463890981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2c5a9c8f822e48ee8bc72b680da837c5ec08bb4ff1971773a4733463890981->enter($__internal_ee2c5a9c8f822e48ee8bc72b680da837c5ec08bb4ff1971773a4733463890981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_1138e86844319fe5c933a15d189dc5e54567c0eb22b0cbc72d0d64d1393c6b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1138e86844319fe5c933a15d189dc5e54567c0eb22b0cbc72d0d64d1393c6b49->enter($__internal_1138e86844319fe5c933a15d189dc5e54567c0eb22b0cbc72d0d64d1393c6b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2c5a9c8f822e48ee8bc72b680da837c5ec08bb4ff1971773a4733463890981->leave($__internal_ee2c5a9c8f822e48ee8bc72b680da837c5ec08bb4ff1971773a4733463890981_prof);

        
        $__internal_1138e86844319fe5c933a15d189dc5e54567c0eb22b0cbc72d0d64d1393c6b49->leave($__internal_1138e86844319fe5c933a15d189dc5e54567c0eb22b0cbc72d0d64d1393c6b49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_324ca6aedb109c443cba30d2b2e0d21af92f4db1480af6a289e332b3bbdc4689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324ca6aedb109c443cba30d2b2e0d21af92f4db1480af6a289e332b3bbdc4689->enter($__internal_324ca6aedb109c443cba30d2b2e0d21af92f4db1480af6a289e332b3bbdc4689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20adb988d23c46d5f03451dd4a61bc9566730e8cbbc4f3fb7cb1fc4cc0738d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20adb988d23c46d5f03451dd4a61bc9566730e8cbbc4f3fb7cb1fc4cc0738d35->enter($__internal_20adb988d23c46d5f03451dd4a61bc9566730e8cbbc4f3fb7cb1fc4cc0738d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_20adb988d23c46d5f03451dd4a61bc9566730e8cbbc4f3fb7cb1fc4cc0738d35->leave($__internal_20adb988d23c46d5f03451dd4a61bc9566730e8cbbc4f3fb7cb1fc4cc0738d35_prof);

        
        $__internal_324ca6aedb109c443cba30d2b2e0d21af92f4db1480af6a289e332b3bbdc4689->leave($__internal_324ca6aedb109c443cba30d2b2e0d21af92f4db1480af6a289e332b3bbdc4689_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Group/show.html.twig");
    }
}
