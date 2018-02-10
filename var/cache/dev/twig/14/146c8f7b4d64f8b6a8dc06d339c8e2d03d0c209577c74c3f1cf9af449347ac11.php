<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b69534218bad8483fb5f40266f685f18e9e276e5dca8fed796d7fee49a3924c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f2da7791b042f61a17df20352244d4443ebd34bdc7729a6ce5ad4b4ed4752ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2da7791b042f61a17df20352244d4443ebd34bdc7729a6ce5ad4b4ed4752ad->enter($__internal_9f2da7791b042f61a17df20352244d4443ebd34bdc7729a6ce5ad4b4ed4752ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_2cf289e0c828bc189f10a193de2648cc721cf3c75cee97a900c3814660727239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf289e0c828bc189f10a193de2648cc721cf3c75cee97a900c3814660727239->enter($__internal_2cf289e0c828bc189f10a193de2648cc721cf3c75cee97a900c3814660727239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9f2da7791b042f61a17df20352244d4443ebd34bdc7729a6ce5ad4b4ed4752ad->leave($__internal_9f2da7791b042f61a17df20352244d4443ebd34bdc7729a6ce5ad4b4ed4752ad_prof);

        
        $__internal_2cf289e0c828bc189f10a193de2648cc721cf3c75cee97a900c3814660727239->leave($__internal_2cf289e0c828bc189f10a193de2648cc721cf3c75cee97a900c3814660727239_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fc277b46ca594879ffd799cc834054870a0ebbf6b40d5bdeedb39676dabfc868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc277b46ca594879ffd799cc834054870a0ebbf6b40d5bdeedb39676dabfc868->enter($__internal_fc277b46ca594879ffd799cc834054870a0ebbf6b40d5bdeedb39676dabfc868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0625680adfcac40b5229ccd5e8f8dcdf6f9f1f24304cb7124baed28824beb515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0625680adfcac40b5229ccd5e8f8dcdf6f9f1f24304cb7124baed28824beb515->enter($__internal_0625680adfcac40b5229ccd5e8f8dcdf6f9f1f24304cb7124baed28824beb515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0625680adfcac40b5229ccd5e8f8dcdf6f9f1f24304cb7124baed28824beb515->leave($__internal_0625680adfcac40b5229ccd5e8f8dcdf6f9f1f24304cb7124baed28824beb515_prof);

        
        $__internal_fc277b46ca594879ffd799cc834054870a0ebbf6b40d5bdeedb39676dabfc868->leave($__internal_fc277b46ca594879ffd799cc834054870a0ebbf6b40d5bdeedb39676dabfc868_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_195e4393b5e32be3a82355a91d2804ec8a060260db0d774cd462dd6a681b374b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195e4393b5e32be3a82355a91d2804ec8a060260db0d774cd462dd6a681b374b->enter($__internal_195e4393b5e32be3a82355a91d2804ec8a060260db0d774cd462dd6a681b374b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bf3864e377a64346ecd32b2ecf7570ce25c70cab00ac7df09b71a4ea381ff631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3864e377a64346ecd32b2ecf7570ce25c70cab00ac7df09b71a4ea381ff631->enter($__internal_bf3864e377a64346ecd32b2ecf7570ce25c70cab00ac7df09b71a4ea381ff631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bf3864e377a64346ecd32b2ecf7570ce25c70cab00ac7df09b71a4ea381ff631->leave($__internal_bf3864e377a64346ecd32b2ecf7570ce25c70cab00ac7df09b71a4ea381ff631_prof);

        
        $__internal_195e4393b5e32be3a82355a91d2804ec8a060260db0d774cd462dd6a681b374b->leave($__internal_195e4393b5e32be3a82355a91d2804ec8a060260db0d774cd462dd6a681b374b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f8e639583678948e24da6df0492ab0303af2935823e509de7e5833ff6222ac22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e639583678948e24da6df0492ab0303af2935823e509de7e5833ff6222ac22->enter($__internal_f8e639583678948e24da6df0492ab0303af2935823e509de7e5833ff6222ac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_046083f39f22b59e1550829b7db1776d424f2252456d9ecbd9a1d57815f99332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046083f39f22b59e1550829b7db1776d424f2252456d9ecbd9a1d57815f99332->enter($__internal_046083f39f22b59e1550829b7db1776d424f2252456d9ecbd9a1d57815f99332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_046083f39f22b59e1550829b7db1776d424f2252456d9ecbd9a1d57815f99332->leave($__internal_046083f39f22b59e1550829b7db1776d424f2252456d9ecbd9a1d57815f99332_prof);

        
        $__internal_f8e639583678948e24da6df0492ab0303af2935823e509de7e5833ff6222ac22->leave($__internal_f8e639583678948e24da6df0492ab0303af2935823e509de7e5833ff6222ac22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
