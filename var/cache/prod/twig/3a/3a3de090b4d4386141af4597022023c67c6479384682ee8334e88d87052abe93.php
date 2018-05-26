<?php

/* WorkshopBundle:Workshop:UpdateWorkshop.html.twig */
class __TwigTemplate_b3d10c33974ae6321498787f2c6fc450e1b6579a7f1e9f32a2eeedd19eacf9f3 extends Twig_Template
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
        $__internal_31b4be67574b1f4e8bc1698a2b89d566a7150513de46bcfb2de8e67577b6b3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b4be67574b1f4e8bc1698a2b89d566a7150513de46bcfb2de8e67577b6b3fc->enter($__internal_31b4be67574b1f4e8bc1698a2b89d566a7150513de46bcfb2de8e67577b6b3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:UpdateWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b4be67574b1f4e8bc1698a2b89d566a7150513de46bcfb2de8e67577b6b3fc->leave($__internal_31b4be67574b1f4e8bc1698a2b89d566a7150513de46bcfb2de8e67577b6b3fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f78af6fc87f09e5bde533da0f852eb80ce538d8d4ef5f2ce0352f3bd3237ccc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78af6fc87f09e5bde533da0f852eb80ce538d8d4ef5f2ce0352f3bd3237ccc6->enter($__internal_f78af6fc87f09e5bde533da0f852eb80ce538d8d4ef5f2ce0352f3bd3237ccc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f78af6fc87f09e5bde533da0f852eb80ce538d8d4ef5f2ce0352f3bd3237ccc6->leave($__internal_f78af6fc87f09e5bde533da0f852eb80ce538d8d4ef5f2ce0352f3bd3237ccc6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9672dcd72e6322f5059657b750d0d8affd1e5e42819f7e9927b2a4750bbcd2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9672dcd72e6322f5059657b750d0d8affd1e5e42819f7e9927b2a4750bbcd2ed->enter($__internal_9672dcd72e6322f5059657b750d0d8affd1e5e42819f7e9927b2a4750bbcd2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9672dcd72e6322f5059657b750d0d8affd1e5e42819f7e9927b2a4750bbcd2ed->leave($__internal_9672dcd72e6322f5059657b750d0d8affd1e5e42819f7e9927b2a4750bbcd2ed_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa01e3be3749842b810a6f858a1600c05e7e720b8b2111eb4f559abc6bc3d999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa01e3be3749842b810a6f858a1600c05e7e720b8b2111eb4f559abc6bc3d999->enter($__internal_aa01e3be3749842b810a6f858a1600c05e7e720b8b2111eb4f559abc6bc3d999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa01e3be3749842b810a6f858a1600c05e7e720b8b2111eb4f559abc6bc3d999->leave($__internal_aa01e3be3749842b810a6f858a1600c05e7e720b8b2111eb4f559abc6bc3d999_prof);

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
