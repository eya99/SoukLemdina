<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9b58cae6fd24bdae43d5d630550dcc38aa079d0b5053d913f5f03a4f8afc1bf1 extends Twig_Template
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
        $__internal_d7a44e77e9961b691a43c484243f5c521f27e228da2cadc9d213bd4b1079f81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a44e77e9961b691a43c484243f5c521f27e228da2cadc9d213bd4b1079f81b->enter($__internal_d7a44e77e9961b691a43c484243f5c521f27e228da2cadc9d213bd4b1079f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a44e77e9961b691a43c484243f5c521f27e228da2cadc9d213bd4b1079f81b->leave($__internal_d7a44e77e9961b691a43c484243f5c521f27e228da2cadc9d213bd4b1079f81b_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_279ba7a61fae70707ce2fb4cecef3c9e9c3a2b9bcc626d53b9155ec8f4b745f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279ba7a61fae70707ce2fb4cecef3c9e9c3a2b9bcc626d53b9155ec8f4b745f5->enter($__internal_279ba7a61fae70707ce2fb4cecef3c9e9c3a2b9bcc626d53b9155ec8f4b745f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Login to the Souk</title>

";
        
        $__internal_279ba7a61fae70707ce2fb4cecef3c9e9c3a2b9bcc626d53b9155ec8f4b745f5->leave($__internal_279ba7a61fae70707ce2fb4cecef3c9e9c3a2b9bcc626d53b9155ec8f4b745f5_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cb88096301f57df85336879b224a5e5260f7027cc3eeb0e403f40e318797613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb88096301f57df85336879b224a5e5260f7027cc3eeb0e403f40e318797613->enter($__internal_0cb88096301f57df85336879b224a5e5260f7027cc3eeb0e403f40e318797613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0cb88096301f57df85336879b224a5e5260f7027cc3eeb0e403f40e318797613->leave($__internal_0cb88096301f57df85336879b224a5e5260f7027cc3eeb0e403f40e318797613_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e272743cde539858d830c4cbcd5bd848c64bc23ce618bd6f8b21b1d244860e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e272743cde539858d830c4cbcd5bd848c64bc23ce618bd6f8b21b1d244860e29->enter($__internal_e272743cde539858d830c4cbcd5bd848c64bc23ce618bd6f8b21b1d244860e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "SUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_e272743cde539858d830c4cbcd5bd848c64bc23ce618bd6f8b21b1d244860e29->leave($__internal_e272743cde539858d830c4cbcd5bd848c64bc23ce618bd6f8b21b1d244860e29_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a36a9586f7aab0bb2f1b5166c17cf4e43a57ea8b047dc117dc0d0dedd3cc84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a36a9586f7aab0bb2f1b5166c17cf4e43a57ea8b047dc117dc0d0dedd3cc84f->enter($__internal_8a36a9586f7aab0bb2f1b5166c17cf4e43a57ea8b047dc117dc0d0dedd3cc84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8a36a9586f7aab0bb2f1b5166c17cf4e43a57ea8b047dc117dc0d0dedd3cc84f->leave($__internal_8a36a9586f7aab0bb2f1b5166c17cf4e43a57ea8b047dc117dc0d0dedd3cc84f_prof);

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
{% endblock %}", "@FOSUser/Security/login.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\src\\SUserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
