<?php

/* LocalBundle:Local:ajout.html.twig */
class __TwigTemplate_0142704048d095ffcabcf3265a974ba50c158b1c8b3105047c841973515db1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:ajout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f83d930ae050963d2f94fa925f42bb79036a8c9c7b2c2a0193939ffbd3eb69e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83d930ae050963d2f94fa925f42bb79036a8c9c7b2c2a0193939ffbd3eb69e9->enter($__internal_f83d930ae050963d2f94fa925f42bb79036a8c9c7b2c2a0193939ffbd3eb69e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83d930ae050963d2f94fa925f42bb79036a8c9c7b2c2a0193939ffbd3eb69e9->leave($__internal_f83d930ae050963d2f94fa925f42bb79036a8c9c7b2c2a0193939ffbd3eb69e9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_99d58af05ef1d49b8dbd14da139b2ab967497d7f6efc32944583abf8d50a067e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d58af05ef1d49b8dbd14da139b2ab967497d7f6efc32944583abf8d50a067e->enter($__internal_99d58af05ef1d49b8dbd14da139b2ab967497d7f6efc32944583abf8d50a067e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_99d58af05ef1d49b8dbd14da139b2ab967497d7f6efc32944583abf8d50a067e->leave($__internal_99d58af05ef1d49b8dbd14da139b2ab967497d7f6efc32944583abf8d50a067e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d66f0ca7f6a2ff1a1d81aeab365587a2b282c3d43e78831498be776449d6c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d66f0ca7f6a2ff1a1d81aeab365587a2b282c3d43e78831498be776449d6c55->enter($__internal_5d66f0ca7f6a2ff1a1d81aeab365587a2b282c3d43e78831498be776449d6c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5d66f0ca7f6a2ff1a1d81aeab365587a2b282c3d43e78831498be776449d6c55->leave($__internal_5d66f0ca7f6a2ff1a1d81aeab365587a2b282c3d43e78831498be776449d6c55_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_990a3af439a3cce216a1599e01f64fc14463726c237d9ec0f410045d7a308897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990a3af439a3cce216a1599e01f64fc14463726c237d9ec0f410045d7a308897->enter($__internal_990a3af439a3cce216a1599e01f64fc14463726c237d9ec0f410045d7a308897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Ajouter un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"line line-sm\"></div>
                <div class=\"center\">
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

                    <input type=\"submit\" value=\"Ajouter\" class=\"button button-3d button-black nomargin\">
                </div>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>

    </section>

";
        
        $__internal_990a3af439a3cce216a1599e01f64fc14463726c237d9ec0f410045d7a308897->leave($__internal_990a3af439a3cce216a1599e01f64fc14463726c237d9ec0f410045d7a308897_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f0fdc889067cd057a77e714510a0ade1a8c4e8bfe020128de8afef2074f6154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0fdc889067cd057a77e714510a0ade1a8c4e8bfe020128de8afef2074f6154->enter($__internal_5f0fdc889067cd057a77e714510a0ade1a8c4e8bfe020128de8afef2074f6154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f0fdc889067cd057a77e714510a0ade1a8c4e8bfe020128de8afef2074f6154->leave($__internal_5f0fdc889067cd057a77e714510a0ade1a8c4e8bfe020128de8afef2074f6154_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  93 => 24,  86 => 20,  79 => 16,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SUserBundle::layout.html.twig' %}
  {% block title %}Local{% endblock %}
    {% block stylesheets %}{% endblock %}
{% block body %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Ajouter un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">
                {{ form_start(form) }}

                <div class=\"line line-sm\"></div>
                <div class=\"center\">
                    {{ form(form) }}

                    <input type=\"submit\" value=\"Ajouter\" class=\"button button-3d button-black nomargin\">
                </div>
                {{ form_end(form) }}
            </div>
        </div>

    </section>

{% endblock %}
{% block javascripts %}{% endblock %}
", "LocalBundle:Local:ajout.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/ajout.html.twig");
    }
}
