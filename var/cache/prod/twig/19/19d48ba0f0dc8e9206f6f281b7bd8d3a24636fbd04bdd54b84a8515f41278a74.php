<?php

/* WorkshopBundle:Workshop:UpdateWorkshop.html.twig */
class __TwigTemplate_78b78bc0671547a5cd1e9067a79ce4654906e3f9451d3550244910db3fbfadc4 extends Twig_Template
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
        $__internal_a795327953dbfb8fd695561d75f38db282eda2721fee4a6c760b29f51961b22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a795327953dbfb8fd695561d75f38db282eda2721fee4a6c760b29f51961b22c->enter($__internal_a795327953dbfb8fd695561d75f38db282eda2721fee4a6c760b29f51961b22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:UpdateWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a795327953dbfb8fd695561d75f38db282eda2721fee4a6c760b29f51961b22c->leave($__internal_a795327953dbfb8fd695561d75f38db282eda2721fee4a6c760b29f51961b22c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9221573ccdf1dc5cedb1fd96943189676351a55ec3af15b52f9b2daa3cfcfdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9221573ccdf1dc5cedb1fd96943189676351a55ec3af15b52f9b2daa3cfcfdc2->enter($__internal_9221573ccdf1dc5cedb1fd96943189676351a55ec3af15b52f9b2daa3cfcfdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9221573ccdf1dc5cedb1fd96943189676351a55ec3af15b52f9b2daa3cfcfdc2->leave($__internal_9221573ccdf1dc5cedb1fd96943189676351a55ec3af15b52f9b2daa3cfcfdc2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a92b8d54280c7ee2ff801df09aaaf73107088bd245e76b10498a9b5dcd438103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92b8d54280c7ee2ff801df09aaaf73107088bd245e76b10498a9b5dcd438103->enter($__internal_a92b8d54280c7ee2ff801df09aaaf73107088bd245e76b10498a9b5dcd438103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a92b8d54280c7ee2ff801df09aaaf73107088bd245e76b10498a9b5dcd438103->leave($__internal_a92b8d54280c7ee2ff801df09aaaf73107088bd245e76b10498a9b5dcd438103_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b795df51f2bbae3932ab476fa4e8ca7bcd46d5c565707d4be39288efd4fb42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b795df51f2bbae3932ab476fa4e8ca7bcd46d5c565707d4be39288efd4fb42b->enter($__internal_3b795df51f2bbae3932ab476fa4e8ca7bcd46d5c565707d4be39288efd4fb42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b795df51f2bbae3932ab476fa4e8ca7bcd46d5c565707d4be39288efd4fb42b->leave($__internal_3b795df51f2bbae3932ab476fa4e8ca7bcd46d5c565707d4be39288efd4fb42b_prof);

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
