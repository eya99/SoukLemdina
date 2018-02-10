<?php

/* ::base.html.twig */
class __TwigTemplate_b771e732b285e795feb818546d4018f9f8306718540edde4c3cb36dfb89e0aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c061ccc0c01a2866d1ad696c8a6d8a13fb02c6776cdd310d0bfaebc05b9b9e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c061ccc0c01a2866d1ad696c8a6d8a13fb02c6776cdd310d0bfaebc05b9b9e15->enter($__internal_c061ccc0c01a2866d1ad696c8a6d8a13fb02c6776cdd310d0bfaebc05b9b9e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d4faac2e5d34e5b599b8dc0188465727b9e112b2115913042a2b7dda7807dfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4faac2e5d34e5b599b8dc0188465727b9e112b2115913042a2b7dda7807dfeb->enter($__internal_d4faac2e5d34e5b599b8dc0188465727b9e112b2115913042a2b7dda7807dfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c061ccc0c01a2866d1ad696c8a6d8a13fb02c6776cdd310d0bfaebc05b9b9e15->leave($__internal_c061ccc0c01a2866d1ad696c8a6d8a13fb02c6776cdd310d0bfaebc05b9b9e15_prof);

        
        $__internal_d4faac2e5d34e5b599b8dc0188465727b9e112b2115913042a2b7dda7807dfeb->leave($__internal_d4faac2e5d34e5b599b8dc0188465727b9e112b2115913042a2b7dda7807dfeb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4d0e9e2388c9a3067eae980ea0e4cb556fc1eb78ca880abc4eb1583a557999e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d0e9e2388c9a3067eae980ea0e4cb556fc1eb78ca880abc4eb1583a557999e->enter($__internal_f4d0e9e2388c9a3067eae980ea0e4cb556fc1eb78ca880abc4eb1583a557999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9df54f403f94b590d7ebc54b7e8dfb4c49a732485206246ccaa77b49071ea0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9df54f403f94b590d7ebc54b7e8dfb4c49a732485206246ccaa77b49071ea0f->enter($__internal_e9df54f403f94b590d7ebc54b7e8dfb4c49a732485206246ccaa77b49071ea0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e9df54f403f94b590d7ebc54b7e8dfb4c49a732485206246ccaa77b49071ea0f->leave($__internal_e9df54f403f94b590d7ebc54b7e8dfb4c49a732485206246ccaa77b49071ea0f_prof);

        
        $__internal_f4d0e9e2388c9a3067eae980ea0e4cb556fc1eb78ca880abc4eb1583a557999e->leave($__internal_f4d0e9e2388c9a3067eae980ea0e4cb556fc1eb78ca880abc4eb1583a557999e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f6bddd0506a5ac625253e7587be84a693bd1c485b80afa476e33071bd881a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6bddd0506a5ac625253e7587be84a693bd1c485b80afa476e33071bd881a34->enter($__internal_9f6bddd0506a5ac625253e7587be84a693bd1c485b80afa476e33071bd881a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f8e6026492d259e9a751a1f4b2b6b48981eb1300be593a501653c321374d79a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e6026492d259e9a751a1f4b2b6b48981eb1300be593a501653c321374d79a2->enter($__internal_f8e6026492d259e9a751a1f4b2b6b48981eb1300be593a501653c321374d79a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f8e6026492d259e9a751a1f4b2b6b48981eb1300be593a501653c321374d79a2->leave($__internal_f8e6026492d259e9a751a1f4b2b6b48981eb1300be593a501653c321374d79a2_prof);

        
        $__internal_9f6bddd0506a5ac625253e7587be84a693bd1c485b80afa476e33071bd881a34->leave($__internal_9f6bddd0506a5ac625253e7587be84a693bd1c485b80afa476e33071bd881a34_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cd2ef28098dd7ba7dafa07e0f8376313e3b6698d402f1b6995886a3996e6e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd2ef28098dd7ba7dafa07e0f8376313e3b6698d402f1b6995886a3996e6e3c->enter($__internal_9cd2ef28098dd7ba7dafa07e0f8376313e3b6698d402f1b6995886a3996e6e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_170a81a05cce49d0f25747482790c3c528057df17899063227fc1cf569d675d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170a81a05cce49d0f25747482790c3c528057df17899063227fc1cf569d675d0->enter($__internal_170a81a05cce49d0f25747482790c3c528057df17899063227fc1cf569d675d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_170a81a05cce49d0f25747482790c3c528057df17899063227fc1cf569d675d0->leave($__internal_170a81a05cce49d0f25747482790c3c528057df17899063227fc1cf569d675d0_prof);

        
        $__internal_9cd2ef28098dd7ba7dafa07e0f8376313e3b6698d402f1b6995886a3996e6e3c->leave($__internal_9cd2ef28098dd7ba7dafa07e0f8376313e3b6698d402f1b6995886a3996e6e3c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_639fe32c48c48a1fbc6932a9db2605c94b65b61c6075420fc587f664c0a50955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639fe32c48c48a1fbc6932a9db2605c94b65b61c6075420fc587f664c0a50955->enter($__internal_639fe32c48c48a1fbc6932a9db2605c94b65b61c6075420fc587f664c0a50955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90e9ef81db30f3d2048cd68e0e7962947ec9bcc980d9b1fbfda5e6a9e51d3f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e9ef81db30f3d2048cd68e0e7962947ec9bcc980d9b1fbfda5e6a9e51d3f1d->enter($__internal_90e9ef81db30f3d2048cd68e0e7962947ec9bcc980d9b1fbfda5e6a9e51d3f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_90e9ef81db30f3d2048cd68e0e7962947ec9bcc980d9b1fbfda5e6a9e51d3f1d->leave($__internal_90e9ef81db30f3d2048cd68e0e7962947ec9bcc980d9b1fbfda5e6a9e51d3f1d_prof);

        
        $__internal_639fe32c48c48a1fbc6932a9db2605c94b65b61c6075420fc587f664c0a50955->leave($__internal_639fe32c48c48a1fbc6932a9db2605c94b65b61c6075420fc587f664c0a50955_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\app/Resources\\views/base.html.twig");
    }
}
