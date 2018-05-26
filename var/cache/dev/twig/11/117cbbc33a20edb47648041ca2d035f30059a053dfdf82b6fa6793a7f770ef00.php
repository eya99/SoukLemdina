<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2c68175d15a3233494ed513c101839500b4dd51cf57554392ce216d82b881d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_69e215a356ea60c0ae18e0b0f52fd8d6163b44e9bc059f9e158f4f812256f09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e215a356ea60c0ae18e0b0f52fd8d6163b44e9bc059f9e158f4f812256f09a->enter($__internal_69e215a356ea60c0ae18e0b0f52fd8d6163b44e9bc059f9e158f4f812256f09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_8283adf648ace21fd73d0bc5b8e1d49475f5b6396e51ae82841e6f66aab1a54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8283adf648ace21fd73d0bc5b8e1d49475f5b6396e51ae82841e6f66aab1a54f->enter($__internal_8283adf648ace21fd73d0bc5b8e1d49475f5b6396e51ae82841e6f66aab1a54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e215a356ea60c0ae18e0b0f52fd8d6163b44e9bc059f9e158f4f812256f09a->leave($__internal_69e215a356ea60c0ae18e0b0f52fd8d6163b44e9bc059f9e158f4f812256f09a_prof);

        
        $__internal_8283adf648ace21fd73d0bc5b8e1d49475f5b6396e51ae82841e6f66aab1a54f->leave($__internal_8283adf648ace21fd73d0bc5b8e1d49475f5b6396e51ae82841e6f66aab1a54f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_49ca1a850af2356dc431a89a79bd49b1026e1137b1884e54c070f5bf704097cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ca1a850af2356dc431a89a79bd49b1026e1137b1884e54c070f5bf704097cb->enter($__internal_49ca1a850af2356dc431a89a79bd49b1026e1137b1884e54c070f5bf704097cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4187e479c1b5541ed4098417c024a046d9b1d15a8f457f8fc7a8ea46b11d6c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4187e479c1b5541ed4098417c024a046d9b1d15a8f457f8fc7a8ea46b11d6c7c->enter($__internal_4187e479c1b5541ed4098417c024a046d9b1d15a8f457f8fc7a8ea46b11d6c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Login to the Souk</title>

";
        
        $__internal_4187e479c1b5541ed4098417c024a046d9b1d15a8f457f8fc7a8ea46b11d6c7c->leave($__internal_4187e479c1b5541ed4098417c024a046d9b1d15a8f457f8fc7a8ea46b11d6c7c_prof);

        
        $__internal_49ca1a850af2356dc431a89a79bd49b1026e1137b1884e54c070f5bf704097cb->leave($__internal_49ca1a850af2356dc431a89a79bd49b1026e1137b1884e54c070f5bf704097cb_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f947c4f8f8ea7ef08a9d8ae2589a690fdb95ab85369728bf516d3e930f35561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f947c4f8f8ea7ef08a9d8ae2589a690fdb95ab85369728bf516d3e930f35561->enter($__internal_1f947c4f8f8ea7ef08a9d8ae2589a690fdb95ab85369728bf516d3e930f35561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4c1673fd0dd7f212b197644763a552c93449dd35f7c68dc844a05f5ddd9d694c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1673fd0dd7f212b197644763a552c93449dd35f7c68dc844a05f5ddd9d694c->enter($__internal_4c1673fd0dd7f212b197644763a552c93449dd35f7c68dc844a05f5ddd9d694c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4c1673fd0dd7f212b197644763a552c93449dd35f7c68dc844a05f5ddd9d694c->leave($__internal_4c1673fd0dd7f212b197644763a552c93449dd35f7c68dc844a05f5ddd9d694c_prof);

        
        $__internal_1f947c4f8f8ea7ef08a9d8ae2589a690fdb95ab85369728bf516d3e930f35561->leave($__internal_1f947c4f8f8ea7ef08a9d8ae2589a690fdb95ab85369728bf516d3e930f35561_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a53f7fbb09babc23d420a438208795620885281c80e4ccf0115b8ff4e2b2ddf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53f7fbb09babc23d420a438208795620885281c80e4ccf0115b8ff4e2b2ddf1->enter($__internal_a53f7fbb09babc23d420a438208795620885281c80e4ccf0115b8ff4e2b2ddf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d124c05acc201047820d6e5754ff13ce830f6b5c73b0001c2bd1652ef762d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d124c05acc201047820d6e5754ff13ce830f6b5c73b0001c2bd1652ef762d56->enter($__internal_9d124c05acc201047820d6e5754ff13ce830f6b5c73b0001c2bd1652ef762d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "SUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_9d124c05acc201047820d6e5754ff13ce830f6b5c73b0001c2bd1652ef762d56->leave($__internal_9d124c05acc201047820d6e5754ff13ce830f6b5c73b0001c2bd1652ef762d56_prof);

        
        $__internal_a53f7fbb09babc23d420a438208795620885281c80e4ccf0115b8ff4e2b2ddf1->leave($__internal_a53f7fbb09babc23d420a438208795620885281c80e4ccf0115b8ff4e2b2ddf1_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d81351f194cb056018ca3517c45ff8ac6f9d33bbc6f782adc89b7676f313df18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81351f194cb056018ca3517c45ff8ac6f9d33bbc6f782adc89b7676f313df18->enter($__internal_d81351f194cb056018ca3517c45ff8ac6f9d33bbc6f782adc89b7676f313df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ea3e2ff1717d0b0e493e6b984063651434e9c21459e9fecefa4498b825a9f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea3e2ff1717d0b0e493e6b984063651434e9c21459e9fecefa4498b825a9f63->enter($__internal_3ea3e2ff1717d0b0e493e6b984063651434e9c21459e9fecefa4498b825a9f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3ea3e2ff1717d0b0e493e6b984063651434e9c21459e9fecefa4498b825a9f63->leave($__internal_3ea3e2ff1717d0b0e493e6b984063651434e9c21459e9fecefa4498b825a9f63_prof);

        
        $__internal_d81351f194cb056018ca3517c45ff8ac6f9d33bbc6f782adc89b7676f313df18->leave($__internal_d81351f194cb056018ca3517c45ff8ac6f9d33bbc6f782adc89b7676f313df18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 23,  128 => 21,  119 => 20,  106 => 17,  97 => 16,  84 => 13,  79 => 11,  76 => 10,  67 => 9,  52 => 3,  43 => 2,  11 => 1,);
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
{% endblock %}", "FOSUserBundle:Security:login.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Security/login.html.twig");
    }
}
