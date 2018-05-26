<?php

/* EvenementBundle:Evenement:UpdateEvent.html.twig */
class __TwigTemplate_70e44c651c4d31e6450d2e7954205a0ea8fd8ff7981685136a69a6622a430c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "EvenementBundle:Evenement:UpdateEvent.html.twig", 1);
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
        $__internal_419ae735fee5318d40ebef1812c18e23baa35041f6d6b017ffd36e8356b84128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419ae735fee5318d40ebef1812c18e23baa35041f6d6b017ffd36e8356b84128->enter($__internal_419ae735fee5318d40ebef1812c18e23baa35041f6d6b017ffd36e8356b84128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:UpdateEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_419ae735fee5318d40ebef1812c18e23baa35041f6d6b017ffd36e8356b84128->leave($__internal_419ae735fee5318d40ebef1812c18e23baa35041f6d6b017ffd36e8356b84128_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_651ad823d68bc67954330efa211cf4d328924e166429710a0b3edbc429175829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651ad823d68bc67954330efa211cf4d328924e166429710a0b3edbc429175829->enter($__internal_651ad823d68bc67954330efa211cf4d328924e166429710a0b3edbc429175829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_651ad823d68bc67954330efa211cf4d328924e166429710a0b3edbc429175829->leave($__internal_651ad823d68bc67954330efa211cf4d328924e166429710a0b3edbc429175829_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90d1d9624e56abd848ce734dfb5cc7ec626a4df692a0d15159de01ea9b7ddb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d1d9624e56abd848ce734dfb5cc7ec626a4df692a0d15159de01ea9b7ddb73->enter($__internal_90d1d9624e56abd848ce734dfb5cc7ec626a4df692a0d15159de01ea9b7ddb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_90d1d9624e56abd848ce734dfb5cc7ec626a4df692a0d15159de01ea9b7ddb73->leave($__internal_90d1d9624e56abd848ce734dfb5cc7ec626a4df692a0d15159de01ea9b7ddb73_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3a7f692f4934e15b4e5b71db51f5b5ea48a78b5432ced6996c501c9f9b88500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a7f692f4934e15b4e5b71db51f5b5ea48a78b5432ced6996c501c9f9b88500->enter($__internal_e3a7f692f4934e15b4e5b71db51f5b5ea48a78b5432ced6996c501c9f9b88500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"content-wrap\">
    <div class=\"container clearfix\">
        <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
            <div class=\"tab-container\">
                <div class=\"tab-content clearfix\" id=\"tab-login\">
                    <div class=\"panel panel-default nobottommargin\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">

                        <h1>Modifier événement</h1>


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
        
        $__internal_e3a7f692f4934e15b4e5b71db51f5b5ea48a78b5432ced6996c501c9f9b88500->leave($__internal_e3a7f692f4934e15b4e5b71db51f5b5ea48a78b5432ced6996c501c9f9b88500_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f529723137f687788ae12c908f57e346e3858c9563eac0ddeaba1f417e517485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f529723137f687788ae12c908f57e346e3858c9563eac0ddeaba1f417e517485->enter($__internal_f529723137f687788ae12c908f57e346e3858c9563eac0ddeaba1f417e517485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f529723137f687788ae12c908f57e346e3858c9563eac0ddeaba1f417e517485->leave($__internal_f529723137f687788ae12c908f57e346e3858c9563eac0ddeaba1f417e517485_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:UpdateEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  88 => 22,  83 => 20,  79 => 19,  66 => 8,  60 => 7,  49 => 4,  37 => 3,  11 => 1,);
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

                        <h1>Modifier événement</h1>


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



{% block javascripts %}{% endblock %}", "EvenementBundle:Evenement:UpdateEvent.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/EvenementBundle/Resources/views/Evenement/UpdateEvent.html.twig");
    }
}
