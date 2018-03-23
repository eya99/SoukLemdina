<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_311df7bf3a0ebfa3c1bfd2d8ee844eea227b03884c9f03475c837250f2197e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_386376e5c278eadaf129f634a05f7bfdcb88ba36eb8161c037aec819fa6a0930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386376e5c278eadaf129f634a05f7bfdcb88ba36eb8161c037aec819fa6a0930->enter($__internal_386376e5c278eadaf129f634a05f7bfdcb88ba36eb8161c037aec819fa6a0930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386376e5c278eadaf129f634a05f7bfdcb88ba36eb8161c037aec819fa6a0930->leave($__internal_386376e5c278eadaf129f634a05f7bfdcb88ba36eb8161c037aec819fa6a0930_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ec012f305e87ce18d944510b4b2febf836f159fa0870af8cebe388e942755fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec012f305e87ce18d944510b4b2febf836f159fa0870af8cebe388e942755fe->enter($__internal_5ec012f305e87ce18d944510b4b2febf836f159fa0870af8cebe388e942755fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5ec012f305e87ce18d944510b4b2febf836f159fa0870af8cebe388e942755fe->leave($__internal_5ec012f305e87ce18d944510b4b2febf836f159fa0870af8cebe388e942755fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
