<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4b285a9afda380d26a522597b78d8c9512e581b153a8cc764c9b44c4ba98a00e extends Twig_Template
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
        $__internal_57b2f07dabd2c5126adee1bdc72bfb0700f1165d2957a50eaa915d09151bf627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b2f07dabd2c5126adee1bdc72bfb0700f1165d2957a50eaa915d09151bf627->enter($__internal_57b2f07dabd2c5126adee1bdc72bfb0700f1165d2957a50eaa915d09151bf627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_bbaba7f5e47c77d9418a83da15a80be45dd897aaf8770eb2ca579120c3259bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbaba7f5e47c77d9418a83da15a80be45dd897aaf8770eb2ca579120c3259bd8->enter($__internal_bbaba7f5e47c77d9418a83da15a80be45dd897aaf8770eb2ca579120c3259bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b2f07dabd2c5126adee1bdc72bfb0700f1165d2957a50eaa915d09151bf627->leave($__internal_57b2f07dabd2c5126adee1bdc72bfb0700f1165d2957a50eaa915d09151bf627_prof);

        
        $__internal_bbaba7f5e47c77d9418a83da15a80be45dd897aaf8770eb2ca579120c3259bd8->leave($__internal_bbaba7f5e47c77d9418a83da15a80be45dd897aaf8770eb2ca579120c3259bd8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25b46eb1bfc44f8546570c0e64bce93e96c6f8bbf1f0376dc1352d76c51d3ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b46eb1bfc44f8546570c0e64bce93e96c6f8bbf1f0376dc1352d76c51d3ea0->enter($__internal_25b46eb1bfc44f8546570c0e64bce93e96c6f8bbf1f0376dc1352d76c51d3ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a696055958ba9aa14e46b46ab3642aa8538686342ab1a4ba51200a5a0589931a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a696055958ba9aa14e46b46ab3642aa8538686342ab1a4ba51200a5a0589931a->enter($__internal_a696055958ba9aa14e46b46ab3642aa8538686342ab1a4ba51200a5a0589931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a696055958ba9aa14e46b46ab3642aa8538686342ab1a4ba51200a5a0589931a->leave($__internal_a696055958ba9aa14e46b46ab3642aa8538686342ab1a4ba51200a5a0589931a_prof);

        
        $__internal_25b46eb1bfc44f8546570c0e64bce93e96c6f8bbf1f0376dc1352d76c51d3ea0->leave($__internal_25b46eb1bfc44f8546570c0e64bce93e96c6f8bbf1f0376dc1352d76c51d3ea0_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
