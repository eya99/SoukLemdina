<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3a8fe003a98dfd34d75f3aaf7c9e766dc7ab9cce48bffe9b5f76af28decc271c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_646ba27229a590f948850d7787739b6e59b5fe5026c6562743634cd951033874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646ba27229a590f948850d7787739b6e59b5fe5026c6562743634cd951033874->enter($__internal_646ba27229a590f948850d7787739b6e59b5fe5026c6562743634cd951033874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_898b7907f834dae14444cfb95f0a4d0bb7447ab0f00d45f9239277bbd28b1aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898b7907f834dae14444cfb95f0a4d0bb7447ab0f00d45f9239277bbd28b1aac->enter($__internal_898b7907f834dae14444cfb95f0a4d0bb7447ab0f00d45f9239277bbd28b1aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_646ba27229a590f948850d7787739b6e59b5fe5026c6562743634cd951033874->leave($__internal_646ba27229a590f948850d7787739b6e59b5fe5026c6562743634cd951033874_prof);

        
        $__internal_898b7907f834dae14444cfb95f0a4d0bb7447ab0f00d45f9239277bbd28b1aac->leave($__internal_898b7907f834dae14444cfb95f0a4d0bb7447ab0f00d45f9239277bbd28b1aac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_908ea557960c835adb269bcdd08b9314f70e37e371221b23a178c7fbfec96f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908ea557960c835adb269bcdd08b9314f70e37e371221b23a178c7fbfec96f88->enter($__internal_908ea557960c835adb269bcdd08b9314f70e37e371221b23a178c7fbfec96f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b333c0ce8cc914655b5713e6432c943857c3154f5efcec6a87c7b0bab19e7a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b333c0ce8cc914655b5713e6432c943857c3154f5efcec6a87c7b0bab19e7a96->enter($__internal_b333c0ce8cc914655b5713e6432c943857c3154f5efcec6a87c7b0bab19e7a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b333c0ce8cc914655b5713e6432c943857c3154f5efcec6a87c7b0bab19e7a96->leave($__internal_b333c0ce8cc914655b5713e6432c943857c3154f5efcec6a87c7b0bab19e7a96_prof);

        
        $__internal_908ea557960c835adb269bcdd08b9314f70e37e371221b23a178c7fbfec96f88->leave($__internal_908ea557960c835adb269bcdd08b9314f70e37e371221b23a178c7fbfec96f88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
