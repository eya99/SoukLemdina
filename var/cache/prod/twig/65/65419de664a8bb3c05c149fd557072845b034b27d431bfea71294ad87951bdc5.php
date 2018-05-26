<?php

/* LocalBundle:Local:modifie.html.twig */
class __TwigTemplate_61d111a8dbf72a9658e01a0890015134bdcd14e0a5b4b2997f2f4f31674beecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:modifie.html.twig", 1);
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
        $__internal_7da35416596d47b4334919826e3a792d88d097893c3781da409c206669507974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da35416596d47b4334919826e3a792d88d097893c3781da409c206669507974->enter($__internal_7da35416596d47b4334919826e3a792d88d097893c3781da409c206669507974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:modifie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7da35416596d47b4334919826e3a792d88d097893c3781da409c206669507974->leave($__internal_7da35416596d47b4334919826e3a792d88d097893c3781da409c206669507974_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_28dd140b7ba9fdb96ade7f7c7fbb5f916b98bf1d912ddc564160d69a231dd010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28dd140b7ba9fdb96ade7f7c7fbb5f916b98bf1d912ddc564160d69a231dd010->enter($__internal_28dd140b7ba9fdb96ade7f7c7fbb5f916b98bf1d912ddc564160d69a231dd010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_28dd140b7ba9fdb96ade7f7c7fbb5f916b98bf1d912ddc564160d69a231dd010->leave($__internal_28dd140b7ba9fdb96ade7f7c7fbb5f916b98bf1d912ddc564160d69a231dd010_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddf4116156deca7df4113ce00056b3e5965fbc66dbb9b4033d17d1e733bff9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf4116156deca7df4113ce00056b3e5965fbc66dbb9b4033d17d1e733bff9a6->enter($__internal_ddf4116156deca7df4113ce00056b3e5965fbc66dbb9b4033d17d1e733bff9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ddf4116156deca7df4113ce00056b3e5965fbc66dbb9b4033d17d1e733bff9a6->leave($__internal_ddf4116156deca7df4113ce00056b3e5965fbc66dbb9b4033d17d1e733bff9a6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cbed8bc47b277158b274e5a44064cb75ee8013bab995f9ab3b75d709b6a0bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbed8bc47b277158b274e5a44064cb75ee8013bab995f9ab3b75d709b6a0bc9->enter($__internal_5cbed8bc47b277158b274e5a44064cb75ee8013bab995f9ab3b75d709b6a0bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section id=\"page-title\">

    <div class=\"container clearfix\">
        <h1>Modifier un local</h1>

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
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                    <input type=\"submit\" value=\"Modifier\" class=\"button button-3d button-black nomargin\">
                </div>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>

    </section>
";
        
        $__internal_5cbed8bc47b277158b274e5a44064cb75ee8013bab995f9ab3b75d709b6a0bc9->leave($__internal_5cbed8bc47b277158b274e5a44064cb75ee8013bab995f9ab3b75d709b6a0bc9_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a90aa10262bb407173e911718e009b1bc6dd1ca2922a48e97ceffd4543f73d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90aa10262bb407173e911718e009b1bc6dd1ca2922a48e97ceffd4543f73d49->enter($__internal_a90aa10262bb407173e911718e009b1bc6dd1ca2922a48e97ceffd4543f73d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a90aa10262bb407173e911718e009b1bc6dd1ca2922a48e97ceffd4543f73d49->leave($__internal_a90aa10262bb407173e911718e009b1bc6dd1ca2922a48e97ceffd4543f73d49_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:modifie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  91 => 22,  85 => 19,  79 => 16,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
        <h1>Modifier un local</h1>

    </div>

</section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">
                {{ form_start(form) }}
                <div class=\"line line-sm\"></div>
                <div class=\"center\">
                    {{ form(form) }}
                    <input type=\"submit\" value=\"Modifier\" class=\"button button-3d button-black nomargin\">
                </div>
                {{ form_end(form) }}
            </div>
        </div>

    </section>
{% endblock %}
{% block javascripts %}{% endblock %}

", "LocalBundle:Local:modifie.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/modifie.html.twig");
    }
}
