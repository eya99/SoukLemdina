<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c06422467e447c87e235fac1559ed21dd7e0c34b5fa89d8466af51f7a2e9251c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_489465e7c7f3949636a53481228ee057dd85055b106e9d46b9ce10631abfe69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489465e7c7f3949636a53481228ee057dd85055b106e9d46b9ce10631abfe69a->enter($__internal_489465e7c7f3949636a53481228ee057dd85055b106e9d46b9ce10631abfe69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_a63c0312d807b8c90da887dfbfe817250f4bcdbf579e66e09eed6a79d78254d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63c0312d807b8c90da887dfbfe817250f4bcdbf579e66e09eed6a79d78254d1->enter($__internal_a63c0312d807b8c90da887dfbfe817250f4bcdbf579e66e09eed6a79d78254d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489465e7c7f3949636a53481228ee057dd85055b106e9d46b9ce10631abfe69a->leave($__internal_489465e7c7f3949636a53481228ee057dd85055b106e9d46b9ce10631abfe69a_prof);

        
        $__internal_a63c0312d807b8c90da887dfbfe817250f4bcdbf579e66e09eed6a79d78254d1->leave($__internal_a63c0312d807b8c90da887dfbfe817250f4bcdbf579e66e09eed6a79d78254d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10307595c88cb3249a40fe24f0571ca3d21ccb18d2ca9234bc17a04a42231181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10307595c88cb3249a40fe24f0571ca3d21ccb18d2ca9234bc17a04a42231181->enter($__internal_10307595c88cb3249a40fe24f0571ca3d21ccb18d2ca9234bc17a04a42231181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_684fa4cb661745b6294a67b7ddfad6037adb0edc8c31ff23146911c1d6378740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684fa4cb661745b6294a67b7ddfad6037adb0edc8c31ff23146911c1d6378740->enter($__internal_684fa4cb661745b6294a67b7ddfad6037adb0edc8c31ff23146911c1d6378740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_684fa4cb661745b6294a67b7ddfad6037adb0edc8c31ff23146911c1d6378740->leave($__internal_684fa4cb661745b6294a67b7ddfad6037adb0edc8c31ff23146911c1d6378740_prof);

        
        $__internal_10307595c88cb3249a40fe24f0571ca3d21ccb18d2ca9234bc17a04a42231181->leave($__internal_10307595c88cb3249a40fe24f0571ca3d21ccb18d2ca9234bc17a04a42231181_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
