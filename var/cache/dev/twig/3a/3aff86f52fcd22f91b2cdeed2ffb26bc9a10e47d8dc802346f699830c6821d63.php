<?php

/* EvenementBundle:Evenement:AjoutEvent.html.twig */
class __TwigTemplate_c43df314bed134723b47cdffb674ad8c898d8ca9baf65e667cdd8ffe618745f8 extends Twig_Template
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
        $__internal_796f7a93e7139a256beb4c591e1be3517af5ad9c89f5b3cef665bd2fe03c69c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796f7a93e7139a256beb4c591e1be3517af5ad9c89f5b3cef665bd2fe03c69c2->enter($__internal_796f7a93e7139a256beb4c591e1be3517af5ad9c89f5b3cef665bd2fe03c69c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:AjoutEvent.html.twig"));

        $__internal_f3c7fa6561801bb1f6355c2e71aebd563ed0c319996f6cff6cd587d6c82d478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c7fa6561801bb1f6355c2e71aebd563ed0c319996f6cff6cd587d6c82d478a->enter($__internal_f3c7fa6561801bb1f6355c2e71aebd563ed0c319996f6cff6cd587d6c82d478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:AjoutEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_796f7a93e7139a256beb4c591e1be3517af5ad9c89f5b3cef665bd2fe03c69c2->leave($__internal_796f7a93e7139a256beb4c591e1be3517af5ad9c89f5b3cef665bd2fe03c69c2_prof);

        
        $__internal_f3c7fa6561801bb1f6355c2e71aebd563ed0c319996f6cff6cd587d6c82d478a->leave($__internal_f3c7fa6561801bb1f6355c2e71aebd563ed0c319996f6cff6cd587d6c82d478a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d05e9adbe5a88e9c640aaeb451d7ff0c78ae2468db5c1e61148b365eb9c20a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05e9adbe5a88e9c640aaeb451d7ff0c78ae2468db5c1e61148b365eb9c20a2c->enter($__internal_d05e9adbe5a88e9c640aaeb451d7ff0c78ae2468db5c1e61148b365eb9c20a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9806bb4367cbb3fdfaba2f1725bff7c55f47fea29b342a88d99588503ac1ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9806bb4367cbb3fdfaba2f1725bff7c55f47fea29b342a88d99588503ac1ba2->enter($__internal_b9806bb4367cbb3fdfaba2f1725bff7c55f47fea29b342a88d99588503ac1ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b9806bb4367cbb3fdfaba2f1725bff7c55f47fea29b342a88d99588503ac1ba2->leave($__internal_b9806bb4367cbb3fdfaba2f1725bff7c55f47fea29b342a88d99588503ac1ba2_prof);

        
        $__internal_d05e9adbe5a88e9c640aaeb451d7ff0c78ae2468db5c1e61148b365eb9c20a2c->leave($__internal_d05e9adbe5a88e9c640aaeb451d7ff0c78ae2468db5c1e61148b365eb9c20a2c_prof);

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
        return array (  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
