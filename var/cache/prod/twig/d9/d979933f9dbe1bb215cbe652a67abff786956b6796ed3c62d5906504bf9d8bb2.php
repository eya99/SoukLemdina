<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_6839775fedd0cbdb0917d688df781b0f0d3fcf8eb1bff821b12e6320ce8a286b extends Twig_Template
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
        $__internal_33d20c6291add04707b2e86c45e6d55e976a1f5f40add3e24298b988750caedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d20c6291add04707b2e86c45e6d55e976a1f5f40add3e24298b988750caedd->enter($__internal_33d20c6291add04707b2e86c45e6d55e976a1f5f40add3e24298b988750caedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d20c6291add04707b2e86c45e6d55e976a1f5f40add3e24298b988750caedd->leave($__internal_33d20c6291add04707b2e86c45e6d55e976a1f5f40add3e24298b988750caedd_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_471868ee054513a0edb39813e27ac4998533b87e9d308633070b076b23724dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471868ee054513a0edb39813e27ac4998533b87e9d308633070b076b23724dae->enter($__internal_471868ee054513a0edb39813e27ac4998533b87e9d308633070b076b23724dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <meta http-equiv=\"refresh\" content=\"3;url=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\"/>
";
        
        $__internal_471868ee054513a0edb39813e27ac4998533b87e9d308633070b076b23724dae->leave($__internal_471868ee054513a0edb39813e27ac4998533b87e9d308633070b076b23724dae_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d506a579b184d1203aa69ce156da78bbb0d4f3a82a37bb70940cd0a075364108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d506a579b184d1203aa69ce156da78bbb0d4f3a82a37bb70940cd0a075364108->enter($__internal_d506a579b184d1203aa69ce156da78bbb0d4f3a82a37bb70940cd0a075364108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d506a579b184d1203aa69ce156da78bbb0d4f3a82a37bb70940cd0a075364108->leave($__internal_d506a579b184d1203aa69ce156da78bbb0d4f3a82a37bb70940cd0a075364108_prof);

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
", "@FOSUser/Registration/check_email.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\src\\SUserBundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
