<?php

/* WorkshopBundle:Workshop:AjoutWorkshop.html.twig */
class __TwigTemplate_41276fa9001460bed76fd3b52011872deb142afa72d7bbd3c12dbfd03b28b81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "WorkshopBundle:Workshop:AjoutWorkshop.html.twig", 1);
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
        $__internal_65eca81e0a095596a9b6b17ef16e069fa1949bb2d83960fabfb8c8db8bc2e58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65eca81e0a095596a9b6b17ef16e069fa1949bb2d83960fabfb8c8db8bc2e58e->enter($__internal_65eca81e0a095596a9b6b17ef16e069fa1949bb2d83960fabfb8c8db8bc2e58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AjoutWorkshop.html.twig"));

        $__internal_e2ce31b96720a9d10dd58c1051bea2b2ff6854e33e48ac58de2d9e4e2c1d8b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ce31b96720a9d10dd58c1051bea2b2ff6854e33e48ac58de2d9e4e2c1d8b5c->enter($__internal_e2ce31b96720a9d10dd58c1051bea2b2ff6854e33e48ac58de2d9e4e2c1d8b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AjoutWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65eca81e0a095596a9b6b17ef16e069fa1949bb2d83960fabfb8c8db8bc2e58e->leave($__internal_65eca81e0a095596a9b6b17ef16e069fa1949bb2d83960fabfb8c8db8bc2e58e_prof);

        
        $__internal_e2ce31b96720a9d10dd58c1051bea2b2ff6854e33e48ac58de2d9e4e2c1d8b5c->leave($__internal_e2ce31b96720a9d10dd58c1051bea2b2ff6854e33e48ac58de2d9e4e2c1d8b5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc5bc855be41e51980a79a2582dd58a4b8a0987142c5fb42fad34274103a77e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5bc855be41e51980a79a2582dd58a4b8a0987142c5fb42fad34274103a77e7->enter($__internal_fc5bc855be41e51980a79a2582dd58a4b8a0987142c5fb42fad34274103a77e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60bd95b228aab71c85ee530ec610376114a7de27babb1888f4936ed2a2735814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bd95b228aab71c85ee530ec610376114a7de27babb1888f4936ed2a2735814->enter($__internal_60bd95b228aab71c85ee530ec610376114a7de27babb1888f4936ed2a2735814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\" >
                    <div class=\"tab-content clearfix\" id=\"tab-login\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">

                                <h3>Ajouter  Votre Workshop</h3>
                                ";
        // line 14
        if (array_key_exists("fdate", $context)) {
            // line 15
            echo "                                    <script>alert(\"La date de début doit précéder la date de fin\")</script>
                                ";
        }
        // line 17
        echo "                                ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 18
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
        
        $__internal_60bd95b228aab71c85ee530ec610376114a7de27babb1888f4936ed2a2735814->leave($__internal_60bd95b228aab71c85ee530ec610376114a7de27babb1888f4936ed2a2735814_prof);

        
        $__internal_fc5bc855be41e51980a79a2582dd58a4b8a0987142c5fb42fad34274103a77e7->leave($__internal_fc5bc855be41e51980a79a2582dd58a4b8a0987142c5fb42fad34274103a77e7_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Workshop:AjoutWorkshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  67 => 17,  63 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
                <div class=\"tab-container\" >
                    <div class=\"tab-content clearfix\" id=\"tab-login\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">

                                <h3>Ajouter  Votre Workshop</h3>
                                {% if fdate is defined %}
                                    <script>alert(\"La date de début doit précéder la date de fin\")</script>
                                {% endif %}
                                {{ form_start(form) }}
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "WorkshopBundle:Workshop:AjoutWorkshop.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Workshop/AjoutWorkshop.html.twig");
    }
}
