<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b2dddc644b8dcdd182bf83387a81c0ec600d4af65c1bab94cfc127223e4b7133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_81a984fbf69d1be02591f7fb1770be012f15b6e55de69e3104a81f4455ede7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a984fbf69d1be02591f7fb1770be012f15b6e55de69e3104a81f4455ede7d1->enter($__internal_81a984fbf69d1be02591f7fb1770be012f15b6e55de69e3104a81f4455ede7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_85d4c7ea4890cd439de2bd56babc0209fa4182e05b3e7a3aec43364e47f1de67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d4c7ea4890cd439de2bd56babc0209fa4182e05b3e7a3aec43364e47f1de67->enter($__internal_85d4c7ea4890cd439de2bd56babc0209fa4182e05b3e7a3aec43364e47f1de67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81a984fbf69d1be02591f7fb1770be012f15b6e55de69e3104a81f4455ede7d1->leave($__internal_81a984fbf69d1be02591f7fb1770be012f15b6e55de69e3104a81f4455ede7d1_prof);

        
        $__internal_85d4c7ea4890cd439de2bd56babc0209fa4182e05b3e7a3aec43364e47f1de67->leave($__internal_85d4c7ea4890cd439de2bd56babc0209fa4182e05b3e7a3aec43364e47f1de67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac02a1fac90538c2726c7444dfe73525643accf70adafae2b719c7291178ea12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac02a1fac90538c2726c7444dfe73525643accf70adafae2b719c7291178ea12->enter($__internal_ac02a1fac90538c2726c7444dfe73525643accf70adafae2b719c7291178ea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_582a9e39088b1cd8a9b806e33cc74f79f5ea49851dfa758d33c73e9e4bec0fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582a9e39088b1cd8a9b806e33cc74f79f5ea49851dfa758d33c73e9e4bec0fc5->enter($__internal_582a9e39088b1cd8a9b806e33cc74f79f5ea49851dfa758d33c73e9e4bec0fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_582a9e39088b1cd8a9b806e33cc74f79f5ea49851dfa758d33c73e9e4bec0fc5->leave($__internal_582a9e39088b1cd8a9b806e33cc74f79f5ea49851dfa758d33c73e9e4bec0fc5_prof);

        
        $__internal_ac02a1fac90538c2726c7444dfe73525643accf70adafae2b719c7291178ea12->leave($__internal_ac02a1fac90538c2726c7444dfe73525643accf70adafae2b719c7291178ea12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Profile/show.html.twig");
    }
}
