<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_7696470e74b05ab542ba6bc6a33810113e2b9a60bcb73a76a8b34d64bbc8c794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_a88389f68ce52d03f4f03605c5a43ed3e6c09f813caa4c6135caadbe12489743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88389f68ce52d03f4f03605c5a43ed3e6c09f813caa4c6135caadbe12489743->enter($__internal_a88389f68ce52d03f4f03605c5a43ed3e6c09f813caa4c6135caadbe12489743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_17695b3bd5e62ef685eb2337b1a4fe0e6752782d83343ed2714995ec5f4a7994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17695b3bd5e62ef685eb2337b1a4fe0e6752782d83343ed2714995ec5f4a7994->enter($__internal_17695b3bd5e62ef685eb2337b1a4fe0e6752782d83343ed2714995ec5f4a7994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a88389f68ce52d03f4f03605c5a43ed3e6c09f813caa4c6135caadbe12489743->leave($__internal_a88389f68ce52d03f4f03605c5a43ed3e6c09f813caa4c6135caadbe12489743_prof);

        
        $__internal_17695b3bd5e62ef685eb2337b1a4fe0e6752782d83343ed2714995ec5f4a7994->leave($__internal_17695b3bd5e62ef685eb2337b1a4fe0e6752782d83343ed2714995ec5f4a7994_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6f778b8433ab37b32490ca44b8463d5dfc2ae3a5ec150209d0a475db6fc99cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f778b8433ab37b32490ca44b8463d5dfc2ae3a5ec150209d0a475db6fc99cd->enter($__internal_f6f778b8433ab37b32490ca44b8463d5dfc2ae3a5ec150209d0a475db6fc99cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9feae471e88a46fcdbb817bcf5528122cbf7e198176de4d19b39f066c613d47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feae471e88a46fcdbb817bcf5528122cbf7e198176de4d19b39f066c613d47f->enter($__internal_9feae471e88a46fcdbb817bcf5528122cbf7e198176de4d19b39f066c613d47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_9feae471e88a46fcdbb817bcf5528122cbf7e198176de4d19b39f066c613d47f->leave($__internal_9feae471e88a46fcdbb817bcf5528122cbf7e198176de4d19b39f066c613d47f_prof);

        
        $__internal_f6f778b8433ab37b32490ca44b8463d5dfc2ae3a5ec150209d0a475db6fc99cd->leave($__internal_f6f778b8433ab37b32490ca44b8463d5dfc2ae3a5ec150209d0a475db6fc99cd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
