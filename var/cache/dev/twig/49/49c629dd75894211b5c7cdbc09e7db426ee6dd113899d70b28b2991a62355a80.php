<?php

/* SocialBundle:Profile:register.html.twig */
class __TwigTemplate_72c3e61f356cbe928dcf31220d288761eca6ef89c26cea9437cdb4433ffb79d0 extends Twig_Template
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
        $__internal_e9163ad49846a9f96544ff5684d61606189a4ddbad2f52bb9cd167bd2789d7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9163ad49846a9f96544ff5684d61606189a4ddbad2f52bb9cd167bd2789d7a6->enter($__internal_e9163ad49846a9f96544ff5684d61606189a4ddbad2f52bb9cd167bd2789d7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:register.html.twig"));

        $__internal_9b5df655372ccb78c80a6c998613ecdfb8be19b634ffa00de968a3a5b430f230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5df655372ccb78c80a6c998613ecdfb8be19b634ffa00de968a3a5b430f230->enter($__internal_9b5df655372ccb78c80a6c998613ecdfb8be19b634ffa00de968a3a5b430f230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9163ad49846a9f96544ff5684d61606189a4ddbad2f52bb9cd167bd2789d7a6->leave($__internal_e9163ad49846a9f96544ff5684d61606189a4ddbad2f52bb9cd167bd2789d7a6_prof);

        
        $__internal_9b5df655372ccb78c80a6c998613ecdfb8be19b634ffa00de968a3a5b430f230->leave($__internal_9b5df655372ccb78c80a6c998613ecdfb8be19b634ffa00de968a3a5b430f230_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0b7a3a077661f53f07213088f2bbfa1b06f1389969a7d39f869ddcd2a1ca6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b7a3a077661f53f07213088f2bbfa1b06f1389969a7d39f869ddcd2a1ca6bb->enter($__internal_e0b7a3a077661f53f07213088f2bbfa1b06f1389969a7d39f869ddcd2a1ca6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99034febeb46867efd48a530251ca93800fd1d595d9d3bc060bd14d37ba8af1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99034febeb46867efd48a530251ca93800fd1d595d9d3bc060bd14d37ba8af1d->enter($__internal_99034febeb46867efd48a530251ca93800fd1d595d9d3bc060bd14d37ba8af1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_99034febeb46867efd48a530251ca93800fd1d595d9d3bc060bd14d37ba8af1d->leave($__internal_99034febeb46867efd48a530251ca93800fd1d595d9d3bc060bd14d37ba8af1d_prof);

        
        $__internal_e0b7a3a077661f53f07213088f2bbfa1b06f1389969a7d39f869ddcd2a1ca6bb->leave($__internal_e0b7a3a077661f53f07213088f2bbfa1b06f1389969a7d39f869ddcd2a1ca6bb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd36c91348855968de445066939b4292eddd9622e319388606a72d1f897e13ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd36c91348855968de445066939b4292eddd9622e319388606a72d1f897e13ed->enter($__internal_bd36c91348855968de445066939b4292eddd9622e319388606a72d1f897e13ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4da2cb6a5946bf4782c6086de069e94a63b2547d95fc6d0858c47318b0b958d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4da2cb6a5946bf4782c6086de069e94a63b2547d95fc6d0858c47318b0b958d->enter($__internal_b4da2cb6a5946bf4782c6086de069e94a63b2547d95fc6d0858c47318b0b958d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4da2cb6a5946bf4782c6086de069e94a63b2547d95fc6d0858c47318b0b958d->leave($__internal_b4da2cb6a5946bf4782c6086de069e94a63b2547d95fc6d0858c47318b0b958d_prof);

        
        $__internal_bd36c91348855968de445066939b4292eddd9622e319388606a72d1f897e13ed->leave($__internal_bd36c91348855968de445066939b4292eddd9622e319388606a72d1f897e13ed_prof);

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
        return array (  128 => 37,  121 => 33,  113 => 29,  111 => 28,  106 => 26,  102 => 25,  99 => 24,  95 => 22,  91 => 20,  89 => 19,  78 => 10,  69 => 9,  57 => 6,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
