<?php

/* CommandeBundle:Commande:modifierCommande.html.twig */
class __TwigTemplate_0669b355bccaa127cab27d3cab278427dd9e64519348feb3b304895dfb8b6a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "CommandeBundle:Commande:modifierCommande.html.twig", 1);
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
        $__internal_5643d9a05d9991068f7668d95f3fe0b5fb155eb128e1c2e1c75ffbfbb5f7fd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5643d9a05d9991068f7668d95f3fe0b5fb155eb128e1c2e1c75ffbfbb5f7fd5a->enter($__internal_5643d9a05d9991068f7668d95f3fe0b5fb155eb128e1c2e1c75ffbfbb5f7fd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Commande:modifierCommande.html.twig"));

        $__internal_f34a093251e48d4732c0d4d2e5cd82dc1512e1f47ade0b96e99cfb55cdf1d933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34a093251e48d4732c0d4d2e5cd82dc1512e1f47ade0b96e99cfb55cdf1d933->enter($__internal_f34a093251e48d4732c0d4d2e5cd82dc1512e1f47ade0b96e99cfb55cdf1d933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Commande:modifierCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5643d9a05d9991068f7668d95f3fe0b5fb155eb128e1c2e1c75ffbfbb5f7fd5a->leave($__internal_5643d9a05d9991068f7668d95f3fe0b5fb155eb128e1c2e1c75ffbfbb5f7fd5a_prof);

        
        $__internal_f34a093251e48d4732c0d4d2e5cd82dc1512e1f47ade0b96e99cfb55cdf1d933->leave($__internal_f34a093251e48d4732c0d4d2e5cd82dc1512e1f47ade0b96e99cfb55cdf1d933_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_77e352eaf3a2227dc3957298e498b97718bac86ae6fb1a4fe3b0be68b753face = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e352eaf3a2227dc3957298e498b97718bac86ae6fb1a4fe3b0be68b753face->enter($__internal_77e352eaf3a2227dc3957298e498b97718bac86ae6fb1a4fe3b0be68b753face_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fba66a08933b7c48f630707693ea0bb876d950ce9cba704321bbc229428f6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fba66a08933b7c48f630707693ea0bb876d950ce9cba704321bbc229428f6d3->enter($__internal_3fba66a08933b7c48f630707693ea0bb876d950ce9cba704321bbc229428f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3fba66a08933b7c48f630707693ea0bb876d950ce9cba704321bbc229428f6d3->leave($__internal_3fba66a08933b7c48f630707693ea0bb876d950ce9cba704321bbc229428f6d3_prof);

        
        $__internal_77e352eaf3a2227dc3957298e498b97718bac86ae6fb1a4fe3b0be68b753face->leave($__internal_77e352eaf3a2227dc3957298e498b97718bac86ae6fb1a4fe3b0be68b753face_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:Commande:modifierCommande.html.twig";
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
{% endblock %}", "CommandeBundle:Commande:modifierCommande.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/Commande/modifierCommande.html.twig");
    }
}
