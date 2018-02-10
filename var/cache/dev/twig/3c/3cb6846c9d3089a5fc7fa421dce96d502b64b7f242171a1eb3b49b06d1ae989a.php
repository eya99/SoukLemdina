<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_95b082ebcbbd8f83793c451d409360e34d8b41223dbfba580f06ffd6a4dc2eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_a66152ee2e030ed1ce409db430589c230fb0d2eb406a129e04135a74a97e5aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66152ee2e030ed1ce409db430589c230fb0d2eb406a129e04135a74a97e5aa4->enter($__internal_a66152ee2e030ed1ce409db430589c230fb0d2eb406a129e04135a74a97e5aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_4a3ec05622ceb1679daf8e582d8aca8217f21cf271504386b4220ad88934f10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3ec05622ceb1679daf8e582d8aca8217f21cf271504386b4220ad88934f10a->enter($__internal_4a3ec05622ceb1679daf8e582d8aca8217f21cf271504386b4220ad88934f10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66152ee2e030ed1ce409db430589c230fb0d2eb406a129e04135a74a97e5aa4->leave($__internal_a66152ee2e030ed1ce409db430589c230fb0d2eb406a129e04135a74a97e5aa4_prof);

        
        $__internal_4a3ec05622ceb1679daf8e582d8aca8217f21cf271504386b4220ad88934f10a->leave($__internal_4a3ec05622ceb1679daf8e582d8aca8217f21cf271504386b4220ad88934f10a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ce686ecaf04f436cda64ec5f0d8c44cd132061974d84f09586eb11f26e60e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce686ecaf04f436cda64ec5f0d8c44cd132061974d84f09586eb11f26e60e5b->enter($__internal_5ce686ecaf04f436cda64ec5f0d8c44cd132061974d84f09586eb11f26e60e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e602544c3e954e5a8a32a9ed91c7b6774bd04ceb0da4a0c2615d07e12a6f16a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e602544c3e954e5a8a32a9ed91c7b6774bd04ceb0da4a0c2615d07e12a6f16a1->enter($__internal_e602544c3e954e5a8a32a9ed91c7b6774bd04ceb0da4a0c2615d07e12a6f16a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e602544c3e954e5a8a32a9ed91c7b6774bd04ceb0da4a0c2615d07e12a6f16a1->leave($__internal_e602544c3e954e5a8a32a9ed91c7b6774bd04ceb0da4a0c2615d07e12a6f16a1_prof);

        
        $__internal_5ce686ecaf04f436cda64ec5f0d8c44cd132061974d84f09586eb11f26e60e5b->leave($__internal_5ce686ecaf04f436cda64ec5f0d8c44cd132061974d84f09586eb11f26e60e5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
