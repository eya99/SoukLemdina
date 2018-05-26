<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_81494537750559041912e29e7990c55e0c741672c2e2071f025580317267d37a extends Twig_Template
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
        $__internal_b8dde0385558b35b989823bde80287a5fa7049c391a8683261f8a26aa206df28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8dde0385558b35b989823bde80287a5fa7049c391a8683261f8a26aa206df28->enter($__internal_b8dde0385558b35b989823bde80287a5fa7049c391a8683261f8a26aa206df28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_f28cec9577b1e33ebfb10ebaf798821d7df3c90796c8fc6c14be14fe2d0228ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28cec9577b1e33ebfb10ebaf798821d7df3c90796c8fc6c14be14fe2d0228ea->enter($__internal_f28cec9577b1e33ebfb10ebaf798821d7df3c90796c8fc6c14be14fe2d0228ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b8dde0385558b35b989823bde80287a5fa7049c391a8683261f8a26aa206df28->leave($__internal_b8dde0385558b35b989823bde80287a5fa7049c391a8683261f8a26aa206df28_prof);

        
        $__internal_f28cec9577b1e33ebfb10ebaf798821d7df3c90796c8fc6c14be14fe2d0228ea->leave($__internal_f28cec9577b1e33ebfb10ebaf798821d7df3c90796c8fc6c14be14fe2d0228ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7ec4b2b5f05600bfc573bdf5a75adb1554fd83529d3507e93d1136debb0971d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec4b2b5f05600bfc573bdf5a75adb1554fd83529d3507e93d1136debb0971d1->enter($__internal_7ec4b2b5f05600bfc573bdf5a75adb1554fd83529d3507e93d1136debb0971d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9f506014a01a6b978f928aa62c32c5090b00b2f5ea1fded128c9ea6f30ded612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f506014a01a6b978f928aa62c32c5090b00b2f5ea1fded128c9ea6f30ded612->enter($__internal_9f506014a01a6b978f928aa62c32c5090b00b2f5ea1fded128c9ea6f30ded612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9f506014a01a6b978f928aa62c32c5090b00b2f5ea1fded128c9ea6f30ded612->leave($__internal_9f506014a01a6b978f928aa62c32c5090b00b2f5ea1fded128c9ea6f30ded612_prof);

        
        $__internal_7ec4b2b5f05600bfc573bdf5a75adb1554fd83529d3507e93d1136debb0971d1->leave($__internal_7ec4b2b5f05600bfc573bdf5a75adb1554fd83529d3507e93d1136debb0971d1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bf7570dd7c0d957a42ea08f54e97f10117d242f8101637f51b521d0d6104e387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7570dd7c0d957a42ea08f54e97f10117d242f8101637f51b521d0d6104e387->enter($__internal_bf7570dd7c0d957a42ea08f54e97f10117d242f8101637f51b521d0d6104e387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1f5ecc073361fc990ea1f9a4bae7c75b3c85864c3dbd24876738da58ab885fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5ecc073361fc990ea1f9a4bae7c75b3c85864c3dbd24876738da58ab885fd9->enter($__internal_1f5ecc073361fc990ea1f9a4bae7c75b3c85864c3dbd24876738da58ab885fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1f5ecc073361fc990ea1f9a4bae7c75b3c85864c3dbd24876738da58ab885fd9->leave($__internal_1f5ecc073361fc990ea1f9a4bae7c75b3c85864c3dbd24876738da58ab885fd9_prof);

        
        $__internal_bf7570dd7c0d957a42ea08f54e97f10117d242f8101637f51b521d0d6104e387->leave($__internal_bf7570dd7c0d957a42ea08f54e97f10117d242f8101637f51b521d0d6104e387_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_479ec9eb831eb21d2878328b5d884402003ea24b4a0e8050f52cfedfad8670fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479ec9eb831eb21d2878328b5d884402003ea24b4a0e8050f52cfedfad8670fa->enter($__internal_479ec9eb831eb21d2878328b5d884402003ea24b4a0e8050f52cfedfad8670fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7af223dcd836b3b38c36af30d27c6c39431bfd923b0c1edb4f817dd9a5bb8315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af223dcd836b3b38c36af30d27c6c39431bfd923b0c1edb4f817dd9a5bb8315->enter($__internal_7af223dcd836b3b38c36af30d27c6c39431bfd923b0c1edb4f817dd9a5bb8315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7af223dcd836b3b38c36af30d27c6c39431bfd923b0c1edb4f817dd9a5bb8315->leave($__internal_7af223dcd836b3b38c36af30d27c6c39431bfd923b0c1edb4f817dd9a5bb8315_prof);

        
        $__internal_479ec9eb831eb21d2878328b5d884402003ea24b4a0e8050f52cfedfad8670fa->leave($__internal_479ec9eb831eb21d2878328b5d884402003ea24b4a0e8050f52cfedfad8670fa_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
