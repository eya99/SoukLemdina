<?php

/* EvenementBundle:Evenement:AjoutEvent.html.twig */
class __TwigTemplate_803eb5d49bd90e99f3c9652ee146878b0061a349442a9cd35b2481b50436ceac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "EvenementBundle:Evenement:AjoutEvent.html.twig", 1);
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
        $__internal_bae70d1e3280192cf5012bbabaf2897c0177f922beacd758952f03c288119e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae70d1e3280192cf5012bbabaf2897c0177f922beacd758952f03c288119e18->enter($__internal_bae70d1e3280192cf5012bbabaf2897c0177f922beacd758952f03c288119e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:AjoutEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bae70d1e3280192cf5012bbabaf2897c0177f922beacd758952f03c288119e18->leave($__internal_bae70d1e3280192cf5012bbabaf2897c0177f922beacd758952f03c288119e18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6ccdc63bf92e788dd31f703a11a8cd661b395bb03a985f23ec9d049e95f5bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ccdc63bf92e788dd31f703a11a8cd661b395bb03a985f23ec9d049e95f5bf3->enter($__internal_f6ccdc63bf92e788dd31f703a11a8cd661b395bb03a985f23ec9d049e95f5bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"content-wrap\" >
    <div class=\"container clearfix\">
        <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
            <div class=\"tab-container\">
                <div class=\"tab-content clearfix\" id=\"tab-login\">
                    <div class=\"panel panel-default nobottommargin\" style=\"background-color:#ffffdd\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">

                            <h3>Ajouter événements</h3>


                                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 17
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
        
        $__internal_f6ccdc63bf92e788dd31f703a11a8cd661b395bb03a985f23ec9d049e95f5bf3->leave($__internal_f6ccdc63bf92e788dd31f703a11a8cd661b395bb03a985f23ec9d049e95f5bf3_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:AjoutEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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

<div class=\"content-wrap\" >
    <div class=\"container clearfix\">
        <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
            <div class=\"tab-container\">
                <div class=\"tab-content clearfix\" id=\"tab-login\">
                    <div class=\"panel panel-default nobottommargin\" style=\"background-color:#ffffdd\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">

                            <h3>Ajouter événements</h3>


                                {{ form_start(form) }}
                                {{ form_end(form) }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    {% endblock %}



", "EvenementBundle:Evenement:AjoutEvent.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/EvenementBundle/Resources/views/Evenement/AjoutEvent.html.twig");
    }
}
