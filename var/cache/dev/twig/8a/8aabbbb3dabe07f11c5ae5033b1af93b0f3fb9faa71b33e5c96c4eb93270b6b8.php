<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_7ee13b318c520b73a1d43498025f719084d3ec3db8aa1eb9d6ad74acdfe31882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9749106c197c403fe822310405ab6f97fdc1153a6c0a11f7dcf98552d84f1fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9749106c197c403fe822310405ab6f97fdc1153a6c0a11f7dcf98552d84f1fef->enter($__internal_9749106c197c403fe822310405ab6f97fdc1153a6c0a11f7dcf98552d84f1fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_f6c35aed8fc94ff18804bd328717fbb8af9244cfa218ac41170be7f78dfaca82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c35aed8fc94ff18804bd328717fbb8af9244cfa218ac41170be7f78dfaca82->enter($__internal_f6c35aed8fc94ff18804bd328717fbb8af9244cfa218ac41170be7f78dfaca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9749106c197c403fe822310405ab6f97fdc1153a6c0a11f7dcf98552d84f1fef->leave($__internal_9749106c197c403fe822310405ab6f97fdc1153a6c0a11f7dcf98552d84f1fef_prof);

        
        $__internal_f6c35aed8fc94ff18804bd328717fbb8af9244cfa218ac41170be7f78dfaca82->leave($__internal_f6c35aed8fc94ff18804bd328717fbb8af9244cfa218ac41170be7f78dfaca82_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e8854b50762ebefb102e09fbfa10224f0672a063a2a081a249ad64634a336a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8854b50762ebefb102e09fbfa10224f0672a063a2a081a249ad64634a336a0->enter($__internal_0e8854b50762ebefb102e09fbfa10224f0672a063a2a081a249ad64634a336a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_43909eb88b29ec75f3869a22be4df49490d5605b5e8f3dc0913370469e54773a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43909eb88b29ec75f3869a22be4df49490d5605b5e8f3dc0913370469e54773a->enter($__internal_43909eb88b29ec75f3869a22be4df49490d5605b5e8f3dc0913370469e54773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_43909eb88b29ec75f3869a22be4df49490d5605b5e8f3dc0913370469e54773a->leave($__internal_43909eb88b29ec75f3869a22be4df49490d5605b5e8f3dc0913370469e54773a_prof);

        
        $__internal_0e8854b50762ebefb102e09fbfa10224f0672a063a2a081a249ad64634a336a0->leave($__internal_0e8854b50762ebefb102e09fbfa10224f0672a063a2a081a249ad64634a336a0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
