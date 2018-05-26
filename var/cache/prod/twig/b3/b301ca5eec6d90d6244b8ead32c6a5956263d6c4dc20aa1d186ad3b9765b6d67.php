<?php

/* EvenementBundle:Evenement:AjoutEvent.html.twig */
class __TwigTemplate_85316dd5ffe9db0bc3f4886c61c7bf8cebf26df86e1fce4ebb75e1f6f32764db extends Twig_Template
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
        $__internal_31e0d11039ff2a1fc31ab7bb85eae6faf0d75df3f6649ac04b94abc1bb6869fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e0d11039ff2a1fc31ab7bb85eae6faf0d75df3f6649ac04b94abc1bb6869fb->enter($__internal_31e0d11039ff2a1fc31ab7bb85eae6faf0d75df3f6649ac04b94abc1bb6869fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:AjoutEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e0d11039ff2a1fc31ab7bb85eae6faf0d75df3f6649ac04b94abc1bb6869fb->leave($__internal_31e0d11039ff2a1fc31ab7bb85eae6faf0d75df3f6649ac04b94abc1bb6869fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6fd15dca42e2dc3acf348f301d4bb404afe91b4b89d2335259ee6a291476058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fd15dca42e2dc3acf348f301d4bb404afe91b4b89d2335259ee6a291476058->enter($__internal_a6fd15dca42e2dc3acf348f301d4bb404afe91b4b89d2335259ee6a291476058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6fd15dca42e2dc3acf348f301d4bb404afe91b4b89d2335259ee6a291476058->leave($__internal_a6fd15dca42e2dc3acf348f301d4bb404afe91b4b89d2335259ee6a291476058_prof);

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
