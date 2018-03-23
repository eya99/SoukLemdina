<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ecdfeaaf4ca96c8719c915f501882893aaf5a5f144842e6fbd1d2e7b09390931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c0872a4b7235935d85eefe0bf6ac222eb5b13d30fe3a4bbf718c37a9ff58ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0872a4b7235935d85eefe0bf6ac222eb5b13d30fe3a4bbf718c37a9ff58ac2->enter($__internal_6c0872a4b7235935d85eefe0bf6ac222eb5b13d30fe3a4bbf718c37a9ff58ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c0872a4b7235935d85eefe0bf6ac222eb5b13d30fe3a4bbf718c37a9ff58ac2->leave($__internal_6c0872a4b7235935d85eefe0bf6ac222eb5b13d30fe3a4bbf718c37a9ff58ac2_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_cde43e2a9fcf1958a6d32971b4f0a3108d587f4e3cb94f0122e1df29c638ebba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde43e2a9fcf1958a6d32971b4f0a3108d587f4e3cb94f0122e1df29c638ebba->enter($__internal_cde43e2a9fcf1958a6d32971b4f0a3108d587f4e3cb94f0122e1df29c638ebba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Login to the Souk</title>

";
        
        $__internal_cde43e2a9fcf1958a6d32971b4f0a3108d587f4e3cb94f0122e1df29c638ebba->leave($__internal_cde43e2a9fcf1958a6d32971b4f0a3108d587f4e3cb94f0122e1df29c638ebba_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7673a4cc45d06b9812f20001f497b7f24c919057aa8b82a9ac02730224a4e697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7673a4cc45d06b9812f20001f497b7f24c919057aa8b82a9ac02730224a4e697->enter($__internal_7673a4cc45d06b9812f20001f497b7f24c919057aa8b82a9ac02730224a4e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <!-- Radio Checkbox Plugin -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/components/radio-checkbox.css"), "html", null, true);
        echo "\" type=\"text/css\"/>

    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\"/>
";
        
        $__internal_7673a4cc45d06b9812f20001f497b7f24c919057aa8b82a9ac02730224a4e697->leave($__internal_7673a4cc45d06b9812f20001f497b7f24c919057aa8b82a9ac02730224a4e697_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25f7b0717fa0c8baa8004d0653b7ca169b8ab6efd09ae7a6d2b446468d776873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f7b0717fa0c8baa8004d0653b7ca169b8ab6efd09ae7a6d2b446468d776873->enter($__internal_25f7b0717fa0c8baa8004d0653b7ca169b8ab6efd09ae7a6d2b446468d776873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "SUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_25f7b0717fa0c8baa8004d0653b7ca169b8ab6efd09ae7a6d2b446468d776873->leave($__internal_25f7b0717fa0c8baa8004d0653b7ca169b8ab6efd09ae7a6d2b446468d776873_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32847e7c9a6b6eb63409b3278df4eef2d272643a9a4ea668d8202fbc2fa6c82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32847e7c9a6b6eb63409b3278df4eef2d272643a9a4ea668d8202fbc2fa6c82f->enter($__internal_32847e7c9a6b6eb63409b3278df4eef2d272643a9a4ea668d8202fbc2fa6c82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
    <!-- Bootstrap Switch Plugin -->
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/components/bs-switches.js"), "html", null, true);
        echo "\"></script>


    <script>

        jQuery(\".bt-switch\").bootstrapSwitch();

    </script>
";
        
        $__internal_32847e7c9a6b6eb63409b3278df4eef2d272643a9a4ea668d8202fbc2fa6c82f->leave($__internal_32847e7c9a6b6eb63409b3278df4eef2d272643a9a4ea668d8202fbc2fa6c82f_prof);

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
        return array (  105 => 23,  101 => 21,  95 => 20,  85 => 17,  79 => 16,  69 => 13,  64 => 11,  61 => 10,  55 => 9,  43 => 3,  37 => 2,  11 => 1,);
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
    <title>Login to the Souk</title>

{% endblock %}
{% block stylesheets %}
    <!-- Radio Checkbox Plugin -->
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/components/radio-checkbox.css') }}\" type=\"text/css\"/>

    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/responsive.css') }}\" type=\"text/css\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\"/>
{% endblock %}
{% block fos_user_content %}
    {{ include('SUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}

{% block javascripts %}

    <!-- Bootstrap Switch Plugin -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/components/bs-switches.js') }}\"></script>


    <script>

        jQuery(\".bt-switch\").bootstrapSwitch();

    </script>
{% endblock %}", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Security/login.html.twig");
    }
}
