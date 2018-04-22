<?php

/* WorkshopBundle:Workshop:AjoutWorkshop.html.twig */
class __TwigTemplate_22a29ed1c6d0d1cc717bc1223e1fb7821b8cc0068bb7ff383975ade95293115c extends Twig_Template
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
        $__internal_c3fd1b49c7d3a702f2bb9bb023cfb58ebb1fffc366e64cfed57af1616566cf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fd1b49c7d3a702f2bb9bb023cfb58ebb1fffc366e64cfed57af1616566cf98->enter($__internal_c3fd1b49c7d3a702f2bb9bb023cfb58ebb1fffc366e64cfed57af1616566cf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AjoutWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3fd1b49c7d3a702f2bb9bb023cfb58ebb1fffc366e64cfed57af1616566cf98->leave($__internal_c3fd1b49c7d3a702f2bb9bb023cfb58ebb1fffc366e64cfed57af1616566cf98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fccaf592b4c64bb8343856380a1e9311426dc68cbddcb22213743e19253df7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccaf592b4c64bb8343856380a1e9311426dc68cbddcb22213743e19253df7f4->enter($__internal_fccaf592b4c64bb8343856380a1e9311426dc68cbddcb22213743e19253df7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fccaf592b4c64bb8343856380a1e9311426dc68cbddcb22213743e19253df7f4->leave($__internal_fccaf592b4c64bb8343856380a1e9311426dc68cbddcb22213743e19253df7f4_prof);

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
        return array (  63 => 18,  58 => 17,  54 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
