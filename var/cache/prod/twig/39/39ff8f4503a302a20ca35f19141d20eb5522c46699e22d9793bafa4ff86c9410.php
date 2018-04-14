<?php

/* WorkshopBundle:Workshop:UpdateWorkshop.html.twig */
class __TwigTemplate_7eaf11e7c53263f64194c478152e280e2fc6d2421a4b3c54b7b4317db757155c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "WorkshopBundle:Workshop:UpdateWorkshop.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31bf0043b70a0578646c47cd4e4bb395ca62e016c1fb49d67a050bbc9b4c3346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bf0043b70a0578646c47cd4e4bb395ca62e016c1fb49d67a050bbc9b4c3346->enter($__internal_31bf0043b70a0578646c47cd4e4bb395ca62e016c1fb49d67a050bbc9b4c3346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:UpdateWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31bf0043b70a0578646c47cd4e4bb395ca62e016c1fb49d67a050bbc9b4c3346->leave($__internal_31bf0043b70a0578646c47cd4e4bb395ca62e016c1fb49d67a050bbc9b4c3346_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fdfc6a64e4dd7f3a49e9618583e7f8de42620bafeb2668e2f383c8908739b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdfc6a64e4dd7f3a49e9618583e7f8de42620bafeb2668e2f383c8908739b8a->enter($__internal_3fdfc6a64e4dd7f3a49e9618583e7f8de42620bafeb2668e2f383c8908739b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3fdfc6a64e4dd7f3a49e9618583e7f8de42620bafeb2668e2f383c8908739b8a->leave($__internal_3fdfc6a64e4dd7f3a49e9618583e7f8de42620bafeb2668e2f383c8908739b8a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6713f18f91a2d7ad370f7b715831a0a10ef8eda0ee7d2d9185f8a4e086340b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6713f18f91a2d7ad370f7b715831a0a10ef8eda0ee7d2d9185f8a4e086340b0d->enter($__internal_6713f18f91a2d7ad370f7b715831a0a10ef8eda0ee7d2d9185f8a4e086340b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6713f18f91a2d7ad370f7b715831a0a10ef8eda0ee7d2d9185f8a4e086340b0d->leave($__internal_6713f18f91a2d7ad370f7b715831a0a10ef8eda0ee7d2d9185f8a4e086340b0d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cd005b9ba091c75c6b66f31b87b2427cb4fd378cf8de6955cf4cfdb54254157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd005b9ba091c75c6b66f31b87b2427cb4fd378cf8de6955cf4cfdb54254157->enter($__internal_8cd005b9ba091c75c6b66f31b87b2427cb4fd378cf8de6955cf4cfdb54254157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-login\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">

                                <h1>Modifier Workshop</h1>


                                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Ajouter", array()), 'widget', array("label" => "Modifier"));
        echo "

                                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_8cd005b9ba091c75c6b66f31b87b2427cb4fd378cf8de6955cf4cfdb54254157->leave($__internal_8cd005b9ba091c75c6b66f31b87b2427cb4fd378cf8de6955cf4cfdb54254157_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Workshop:UpdateWorkshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  82 => 20,  78 => 19,  65 => 8,  59 => 7,  48 => 4,  36 => 3,  11 => 1,);
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

{% block title %}Welcome!{% endblock %}
{% block stylesheets %}{% endblock %}


{% block body %}
    <div class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-login\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">

                                <h1>Modifier Workshop</h1>


                                {{ form_start(form) }}
                                {{ form_widget(form.Ajouter,{'label':'Modifier'}) }}

                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

", "WorkshopBundle:Workshop:UpdateWorkshop.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Workshop/UpdateWorkshop.html.twig");
    }
}
