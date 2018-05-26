<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_739e8194649008dce52a29c7c3de5f0227354e255419ff0035e8e8dca72d117f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_165a1cae01c0572654d7cc1f15b479e296f114aa7b9b06b2a253a2f4f1dfe7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165a1cae01c0572654d7cc1f15b479e296f114aa7b9b06b2a253a2f4f1dfe7a7->enter($__internal_165a1cae01c0572654d7cc1f15b479e296f114aa7b9b06b2a253a2f4f1dfe7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_894122f69a807552666bd5666d1808acd7d47420bd7f2f459f1aa2bde02be2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894122f69a807552666bd5666d1808acd7d47420bd7f2f459f1aa2bde02be2e3->enter($__internal_894122f69a807552666bd5666d1808acd7d47420bd7f2f459f1aa2bde02be2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165a1cae01c0572654d7cc1f15b479e296f114aa7b9b06b2a253a2f4f1dfe7a7->leave($__internal_165a1cae01c0572654d7cc1f15b479e296f114aa7b9b06b2a253a2f4f1dfe7a7_prof);

        
        $__internal_894122f69a807552666bd5666d1808acd7d47420bd7f2f459f1aa2bde02be2e3->leave($__internal_894122f69a807552666bd5666d1808acd7d47420bd7f2f459f1aa2bde02be2e3_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_07d0c41289d5002af6d9c5a2d085484d34bde1f7383238e0ce592e56d69330ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d0c41289d5002af6d9c5a2d085484d34bde1f7383238e0ce592e56d69330ad->enter($__internal_07d0c41289d5002af6d9c5a2d085484d34bde1f7383238e0ce592e56d69330ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b62b5555f0cca957be54263d0af6483170825605f4340fdba54654c4e725406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b62b5555f0cca957be54263d0af6483170825605f4340fdba54654c4e725406->enter($__internal_5b62b5555f0cca957be54263d0af6483170825605f4340fdba54654c4e725406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <meta http-equiv=\"refresh\" content=\"3;url=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_ajout_profile");
        echo "\"/>
";
        
        $__internal_5b62b5555f0cca957be54263d0af6483170825605f4340fdba54654c4e725406->leave($__internal_5b62b5555f0cca957be54263d0af6483170825605f4340fdba54654c4e725406_prof);

        
        $__internal_07d0c41289d5002af6d9c5a2d085484d34bde1f7383238e0ce592e56d69330ad->leave($__internal_07d0c41289d5002af6d9c5a2d085484d34bde1f7383238e0ce592e56d69330ad_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5215f8850e30904fad6c05f05aa8dc086f701a76ea197f6c28af4420ebfdfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5215f8850e30904fad6c05f05aa8dc086f701a76ea197f6c28af4420ebfdfaa->enter($__internal_d5215f8850e30904fad6c05f05aa8dc086f701a76ea197f6c28af4420ebfdfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9083ad4a0d342927932405c782088441946d56ef370c4dc0863cf5866f05b52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9083ad4a0d342927932405c782088441946d56ef370c4dc0863cf5866f05b52e->enter($__internal_9083ad4a0d342927932405c782088441946d56ef370c4dc0863cf5866f05b52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "    &nbsp;&nbsp;&nbsp;&nbsp;<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 9
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 10
            echo "        &nbsp;&nbsp;&nbsp;&nbsp;<p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9083ad4a0d342927932405c782088441946d56ef370c4dc0863cf5866f05b52e->leave($__internal_9083ad4a0d342927932405c782088441946d56ef370c4dc0863cf5866f05b52e_prof);

        
        $__internal_d5215f8850e30904fad6c05f05aa8dc086f701a76ea197f6c28af4420ebfdfaa->leave($__internal_d5215f8850e30904fad6c05f05aa8dc086f701a76ea197f6c28af4420ebfdfaa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  77 => 9,  72 => 8,  63 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
{% block head %}
    <meta http-equiv=\"refresh\" content=\"3;url={{ path('social_ajout_profile') }}\"/>
{% endblock %}
{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    &nbsp;&nbsp;&nbsp;&nbsp;<p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
        &nbsp;&nbsp;&nbsp;&nbsp;<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
