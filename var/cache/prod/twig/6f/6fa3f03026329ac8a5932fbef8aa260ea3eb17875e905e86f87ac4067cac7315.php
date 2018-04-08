<?php

/* SocialBundle:Profile:register.html.twig */
class __TwigTemplate_3252e0dd5f30db5766a7be959f3a83f91cc837051ab6736283fad03afd7155b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "SocialBundle:Profile:register.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce6f49db3ab3b465e6352669ecc0cce2e8bcaba01dfa4311b4aad099cfaf0118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6f49db3ab3b465e6352669ecc0cce2e8bcaba01dfa4311b4aad099cfaf0118->enter($__internal_ce6f49db3ab3b465e6352669ecc0cce2e8bcaba01dfa4311b4aad099cfaf0118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6f49db3ab3b465e6352669ecc0cce2e8bcaba01dfa4311b4aad099cfaf0118->leave($__internal_ce6f49db3ab3b465e6352669ecc0cce2e8bcaba01dfa4311b4aad099cfaf0118_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_459d849f88f178ceea19bdbadde5bb0e89cfb8e9565a0914ab7f082c0681898b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459d849f88f178ceea19bdbadde5bb0e89cfb8e9565a0914ab7f082c0681898b->enter($__internal_459d849f88f178ceea19bdbadde5bb0e89cfb8e9565a0914ab7f082c0681898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        if (array_key_exists("created", $context)) {
            // line 4
            echo "        <title>Modifier votre profile</title>
    ";
        } else {
            // line 6
            echo "        <title>Complete votre inscription</title>
    ";
        }
        
        $__internal_459d849f88f178ceea19bdbadde5bb0e89cfb8e9565a0914ab7f082c0681898b->leave($__internal_459d849f88f178ceea19bdbadde5bb0e89cfb8e9565a0914ab7f082c0681898b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3c56c3d14ad2d3088f51e3828177e03586b2bf63ca702a89ee8acf51dfe9b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c56c3d14ad2d3088f51e3828177e03586b2bf63ca702a89ee8acf51dfe9b48->enter($__internal_d3c56c3d14ad2d3088f51e3828177e03586b2bf63ca702a89ee8acf51dfe9b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                ";
        // line 19
        if (array_key_exists("created", $context)) {
            // line 20
            echo "                                    <h3>Changer vos données du profile</h3>
                                ";
        } else {
            // line 22
            echo "                                    <h3>Compléter vos données du profile</h3>
                                ";
        }
        // line 24
        echo "                                    <div class=\"col_full\">
                                        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                    </div>
                                ";
        // line 28
        if (array_key_exists("profile", $context)) {
            // line 29
            echo "                                    <a title=\"Retirer l'image du profile\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_delete_image", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))), "html", null, true);
            echo "\">
                                        Retirer l'image du profile
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a title=\"Retour\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                                        Retourner au profile
                                    </a>
                                ";
        }
        // line 37
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d3c56c3d14ad2d3088f51e3828177e03586b2bf63ca702a89ee8acf51dfe9b48->leave($__internal_d3c56c3d14ad2d3088f51e3828177e03586b2bf63ca702a89ee8acf51dfe9b48_prof);

    }

    public function getTemplateName()
    {
        return "SocialBundle:Profile:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  106 => 33,  98 => 29,  96 => 28,  91 => 26,  87 => 25,  84 => 24,  80 => 22,  76 => 20,  74 => 19,  63 => 10,  57 => 9,  48 => 6,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block head %}
    {% if created is defined %}
        <title>Modifier votre profile</title>
    {% else %}
        <title>Complete votre inscription</title>
    {% endif %}
{% endblock %}
{% block body %}
    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
                <div class=\"tab-container\">
                    <div class=\"tab-content clearfix\" id=\"tab-register\">
                        <div class=\"panel panel-default nobottommargin\">
                            <div class=\"panel-body\" style=\"padding: 40px;\">
                                {% if created is defined %}
                                    <h3>Changer vos données du profile</h3>
                                {% else %}
                                    <h3>Compléter vos données du profile</h3>
                                {% endif %}
                                    <div class=\"col_full\">
                                        {{ form_start(form) }}
                                        {{ form_end(form) }}
                                    </div>
                                {% if profile is defined %}
                                    <a title=\"Retirer l'image du profile\" href=\"{{ path('social_delete_image',{'id': profile.id}) }}\">
                                        Retirer l'image du profile
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a title=\"Retour\" href=\"{{ path('social_check_profile',{'id':app.user.id}) }}\">
                                        Retourner au profile
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "SocialBundle:Profile:register.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Profile/register.html.twig");
    }
}
