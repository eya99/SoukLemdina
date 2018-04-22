<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b7a64cea20f8e78ed7d67d70b821935c9f68d8782a82f5db39d68fe96965bf38 extends Twig_Template
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
        $__internal_a1a739af9e4bc28c8a3b0f83497454f7c22d5d06d0435860e368683237bf7548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a739af9e4bc28c8a3b0f83497454f7c22d5d06d0435860e368683237bf7548->enter($__internal_a1a739af9e4bc28c8a3b0f83497454f7c22d5d06d0435860e368683237bf7548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a739af9e4bc28c8a3b0f83497454f7c22d5d06d0435860e368683237bf7548->leave($__internal_a1a739af9e4bc28c8a3b0f83497454f7c22d5d06d0435860e368683237bf7548_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e56a5f6b61d803d390f12bdcc043d77f913334e1dada38da757b877526d55e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e56a5f6b61d803d390f12bdcc043d77f913334e1dada38da757b877526d55e5->enter($__internal_1e56a5f6b61d803d390f12bdcc043d77f913334e1dada38da757b877526d55e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Login to the Souk</title>

";
        
        $__internal_1e56a5f6b61d803d390f12bdcc043d77f913334e1dada38da757b877526d55e5->leave($__internal_1e56a5f6b61d803d390f12bdcc043d77f913334e1dada38da757b877526d55e5_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1cc2701fa666aa8b94c21450eab21a2cb143140f0bb932faa7520e2c935f200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cc2701fa666aa8b94c21450eab21a2cb143140f0bb932faa7520e2c935f200->enter($__internal_e1cc2701fa666aa8b94c21450eab21a2cb143140f0bb932faa7520e2c935f200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e1cc2701fa666aa8b94c21450eab21a2cb143140f0bb932faa7520e2c935f200->leave($__internal_e1cc2701fa666aa8b94c21450eab21a2cb143140f0bb932faa7520e2c935f200_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecc92c62ad5b57da917a7b5b430f38ea1aa182e20fcefcc81b18c5d68f4a34cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc92c62ad5b57da917a7b5b430f38ea1aa182e20fcefcc81b18c5d68f4a34cc->enter($__internal_ecc92c62ad5b57da917a7b5b430f38ea1aa182e20fcefcc81b18c5d68f4a34cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "SUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ecc92c62ad5b57da917a7b5b430f38ea1aa182e20fcefcc81b18c5d68f4a34cc->leave($__internal_ecc92c62ad5b57da917a7b5b430f38ea1aa182e20fcefcc81b18c5d68f4a34cc_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28398f76fb23eb4bc8fcecfab487cbc1e6100d75792dc19324f750e2e0da8b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28398f76fb23eb4bc8fcecfab487cbc1e6100d75792dc19324f750e2e0da8b0b->enter($__internal_28398f76fb23eb4bc8fcecfab487cbc1e6100d75792dc19324f750e2e0da8b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_28398f76fb23eb4bc8fcecfab487cbc1e6100d75792dc19324f750e2e0da8b0b->leave($__internal_28398f76fb23eb4bc8fcecfab487cbc1e6100d75792dc19324f750e2e0da8b0b_prof);

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
