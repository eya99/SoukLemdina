<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_b82902010f8c59b6349e7078f885598d7b6fb3101fee36b11769d6f6381ed041 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 4);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d01124a1c777b824960c56fc20c13aa8ea87dcafa0e6272448b9705284d79cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01124a1c777b824960c56fc20c13aa8ea87dcafa0e6272448b9705284d79cfa->enter($__internal_d01124a1c777b824960c56fc20c13aa8ea87dcafa0e6272448b9705284d79cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01124a1c777b824960c56fc20c13aa8ea87dcafa0e6272448b9705284d79cfa->leave($__internal_d01124a1c777b824960c56fc20c13aa8ea87dcafa0e6272448b9705284d79cfa_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a513f277d7e32000c83521933d8d5246f264fb2a86d49d7ee5781a46ed1e3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a513f277d7e32000c83521933d8d5246f264fb2a86d49d7ee5781a46ed1e3ae->enter($__internal_2a513f277d7e32000c83521933d8d5246f264fb2a86d49d7ee5781a46ed1e3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <meta http-equiv=\"refresh\" content=\"3;url=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\"/>
";
        
        $__internal_2a513f277d7e32000c83521933d8d5246f264fb2a86d49d7ee5781a46ed1e3ae->leave($__internal_2a513f277d7e32000c83521933d8d5246f264fb2a86d49d7ee5781a46ed1e3ae_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d3254999474f3763f9ea98c42dbd264f2fa046a0d529fbb4d8fc8ef1769fc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3254999474f3763f9ea98c42dbd264f2fa046a0d529fbb4d8fc8ef1769fc20->enter($__internal_2d3254999474f3763f9ea98c42dbd264f2fa046a0d529fbb4d8fc8ef1769fc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2d3254999474f3763f9ea98c42dbd264f2fa046a0d529fbb4d8fc8ef1769fc20->leave($__internal_2d3254999474f3763f9ea98c42dbd264f2fa046a0d529fbb4d8fc8ef1769fc20_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 2,  35 => 1,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block head %}
    <meta http-equiv=\"refresh\" content=\"3;url={{ path('fos_visitor_home') }}\"/>
{% endblock %}
{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
