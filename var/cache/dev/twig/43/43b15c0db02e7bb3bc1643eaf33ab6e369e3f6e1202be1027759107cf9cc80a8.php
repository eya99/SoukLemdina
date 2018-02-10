<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_12e55a6e3d206ae4c3759a267fcbf8d31e90a25533d91129c250217105dae5f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4f1fb53e22f9d5943caa862a702e9d09b3bc561d108c3ae23766703dd265e591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1fb53e22f9d5943caa862a702e9d09b3bc561d108c3ae23766703dd265e591->enter($__internal_4f1fb53e22f9d5943caa862a702e9d09b3bc561d108c3ae23766703dd265e591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_a79240d37cbeed206f22065c647ad61aba733d35eb36a255eb1bff6c53118ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79240d37cbeed206f22065c647ad61aba733d35eb36a255eb1bff6c53118ad6->enter($__internal_a79240d37cbeed206f22065c647ad61aba733d35eb36a255eb1bff6c53118ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1fb53e22f9d5943caa862a702e9d09b3bc561d108c3ae23766703dd265e591->leave($__internal_4f1fb53e22f9d5943caa862a702e9d09b3bc561d108c3ae23766703dd265e591_prof);

        
        $__internal_a79240d37cbeed206f22065c647ad61aba733d35eb36a255eb1bff6c53118ad6->leave($__internal_a79240d37cbeed206f22065c647ad61aba733d35eb36a255eb1bff6c53118ad6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5a2bd29b02d96fa9a6755745ff32963a30f6a2dc0b335100ec327887b61c1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a2bd29b02d96fa9a6755745ff32963a30f6a2dc0b335100ec327887b61c1c7->enter($__internal_f5a2bd29b02d96fa9a6755745ff32963a30f6a2dc0b335100ec327887b61c1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a30245ec0fff3801aa0e00b1fac32a6759c51cac708ce87b532be1c9035abf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30245ec0fff3801aa0e00b1fac32a6759c51cac708ce87b532be1c9035abf96->enter($__internal_a30245ec0fff3801aa0e00b1fac32a6759c51cac708ce87b532be1c9035abf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a30245ec0fff3801aa0e00b1fac32a6759c51cac708ce87b532be1c9035abf96->leave($__internal_a30245ec0fff3801aa0e00b1fac32a6759c51cac708ce87b532be1c9035abf96_prof);

        
        $__internal_f5a2bd29b02d96fa9a6755745ff32963a30f6a2dc0b335100ec327887b61c1c7->leave($__internal_f5a2bd29b02d96fa9a6755745ff32963a30f6a2dc0b335100ec327887b61c1c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
