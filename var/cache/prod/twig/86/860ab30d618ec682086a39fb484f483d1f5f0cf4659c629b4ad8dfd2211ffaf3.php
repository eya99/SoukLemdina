<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ff01ed72cdd7194e4ecd8cbc7233724fbf7e722364b8c639b7e426b0fcd77d39 extends Twig_Template
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
        $__internal_352f22fc422e9b45bc25b94a255eb6317b01e6ab6ee0bc96b5dc1b72ee51e271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352f22fc422e9b45bc25b94a255eb6317b01e6ab6ee0bc96b5dc1b72ee51e271->enter($__internal_352f22fc422e9b45bc25b94a255eb6317b01e6ab6ee0bc96b5dc1b72ee51e271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352f22fc422e9b45bc25b94a255eb6317b01e6ab6ee0bc96b5dc1b72ee51e271->leave($__internal_352f22fc422e9b45bc25b94a255eb6317b01e6ab6ee0bc96b5dc1b72ee51e271_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e999e681fb492211161ece89083ae22c47f3b577e5dc833b339f7e7e720bc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e999e681fb492211161ece89083ae22c47f3b577e5dc833b339f7e7e720bc89->enter($__internal_2e999e681fb492211161ece89083ae22c47f3b577e5dc833b339f7e7e720bc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Login to the Souk</title>

";
        
        $__internal_2e999e681fb492211161ece89083ae22c47f3b577e5dc833b339f7e7e720bc89->leave($__internal_2e999e681fb492211161ece89083ae22c47f3b577e5dc833b339f7e7e720bc89_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d70ace4ae7a4066b663a750710fc06c2e272416f58b2868634657a291846c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d70ace4ae7a4066b663a750710fc06c2e272416f58b2868634657a291846c46->enter($__internal_0d70ace4ae7a4066b663a750710fc06c2e272416f58b2868634657a291846c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0d70ace4ae7a4066b663a750710fc06c2e272416f58b2868634657a291846c46->leave($__internal_0d70ace4ae7a4066b663a750710fc06c2e272416f58b2868634657a291846c46_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab0e407611d81ad802212bc9cd24a6c556a35ebbc9c8831017f176556e670e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0e407611d81ad802212bc9cd24a6c556a35ebbc9c8831017f176556e670e77->enter($__internal_ab0e407611d81ad802212bc9cd24a6c556a35ebbc9c8831017f176556e670e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "SUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ab0e407611d81ad802212bc9cd24a6c556a35ebbc9c8831017f176556e670e77->leave($__internal_ab0e407611d81ad802212bc9cd24a6c556a35ebbc9c8831017f176556e670e77_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb97257cb326986636d23ebf2ac0851ba42376cc99430f3202786545bb9ffbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb97257cb326986636d23ebf2ac0851ba42376cc99430f3202786545bb9ffbec->enter($__internal_eb97257cb326986636d23ebf2ac0851ba42376cc99430f3202786545bb9ffbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_eb97257cb326986636d23ebf2ac0851ba42376cc99430f3202786545bb9ffbec->leave($__internal_eb97257cb326986636d23ebf2ac0851ba42376cc99430f3202786545bb9ffbec_prof);

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
