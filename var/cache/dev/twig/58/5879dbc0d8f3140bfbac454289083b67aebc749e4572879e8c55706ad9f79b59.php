<?php

/* CommandeBundle:LigneDeCommande:modifierLigneDeCommande.html.twig */
class __TwigTemplate_8fe84650e8f8ecdaeaf1374efb7bf5c711a6034ae700bfd7c6bed5d9e786e38e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "CommandeBundle:LigneDeCommande:modifierLigneDeCommande.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f81b6f0c4e28b34ebac3cd96eecdc04d6e462d868a4297bd3e517a471a44fc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81b6f0c4e28b34ebac3cd96eecdc04d6e462d868a4297bd3e517a471a44fc3f->enter($__internal_f81b6f0c4e28b34ebac3cd96eecdc04d6e462d868a4297bd3e517a471a44fc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:modifierLigneDeCommande.html.twig"));

        $__internal_771cf81e4971bce4b0f222165d14ffe92b73837286eb1c879418a5e204d3ce19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771cf81e4971bce4b0f222165d14ffe92b73837286eb1c879418a5e204d3ce19->enter($__internal_771cf81e4971bce4b0f222165d14ffe92b73837286eb1c879418a5e204d3ce19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:LigneDeCommande:modifierLigneDeCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f81b6f0c4e28b34ebac3cd96eecdc04d6e462d868a4297bd3e517a471a44fc3f->leave($__internal_f81b6f0c4e28b34ebac3cd96eecdc04d6e462d868a4297bd3e517a471a44fc3f_prof);

        
        $__internal_771cf81e4971bce4b0f222165d14ffe92b73837286eb1c879418a5e204d3ce19->leave($__internal_771cf81e4971bce4b0f222165d14ffe92b73837286eb1c879418a5e204d3ce19_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1ca08c7cb2c9372f4db3714e60be19593f4b9891586a6757fc21f9e5723e9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ca08c7cb2c9372f4db3714e60be19593f4b9891586a6757fc21f9e5723e9f7->enter($__internal_a1ca08c7cb2c9372f4db3714e60be19593f4b9891586a6757fc21f9e5723e9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85f37384068a8cf9c6cc5686fc4586c918aea60de24048055567c74897623954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f37384068a8cf9c6cc5686fc4586c918aea60de24048055567c74897623954->enter($__internal_85f37384068a8cf9c6cc5686fc4586c918aea60de24048055567c74897623954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            </div></div></div></div></div></div></div>
";
        
        $__internal_85f37384068a8cf9c6cc5686fc4586c918aea60de24048055567c74897623954->leave($__internal_85f37384068a8cf9c6cc5686fc4586c918aea60de24048055567c74897623954_prof);

        
        $__internal_a1ca08c7cb2c9372f4db3714e60be19593f4b9891586a6757fc21f9e5723e9f7->leave($__internal_a1ca08c7cb2c9372f4db3714e60be19593f4b9891586a6757fc21f9e5723e9f7_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:LigneDeCommande:modifierLigneDeCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}
    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                {{ form_start(form) }}

                                {{ form_end(form) }}
                            </div></div></div></div></div></div></div>
{% endblock %}", "CommandeBundle:LigneDeCommande:modifierLigneDeCommande.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/LigneDeCommande/modifierLigneDeCommande.html.twig");
    }
}
