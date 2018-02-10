<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_da8280e9abd97c1c617787f992435aa476132b210b33f797921461cd352f4398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_120e67ed90a401c5dabbd6519cf713f6ff3007736aad18301695506b7b0e0447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120e67ed90a401c5dabbd6519cf713f6ff3007736aad18301695506b7b0e0447->enter($__internal_120e67ed90a401c5dabbd6519cf713f6ff3007736aad18301695506b7b0e0447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_f3ce11a06ede60025a63e228cd5e1f321c272c19cbc055400c30bd06ab96bec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ce11a06ede60025a63e228cd5e1f321c272c19cbc055400c30bd06ab96bec4->enter($__internal_f3ce11a06ede60025a63e228cd5e1f321c272c19cbc055400c30bd06ab96bec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_120e67ed90a401c5dabbd6519cf713f6ff3007736aad18301695506b7b0e0447->leave($__internal_120e67ed90a401c5dabbd6519cf713f6ff3007736aad18301695506b7b0e0447_prof);

        
        $__internal_f3ce11a06ede60025a63e228cd5e1f321c272c19cbc055400c30bd06ab96bec4->leave($__internal_f3ce11a06ede60025a63e228cd5e1f321c272c19cbc055400c30bd06ab96bec4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f50439abccc16f470688bb7d13d854b4e12af58c38943f801b4e5920b10fb20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50439abccc16f470688bb7d13d854b4e12af58c38943f801b4e5920b10fb20e->enter($__internal_f50439abccc16f470688bb7d13d854b4e12af58c38943f801b4e5920b10fb20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_84f64c5b25d42c9d49b0afaa7289066572656133b1a59144b8ad1438146b2ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f64c5b25d42c9d49b0afaa7289066572656133b1a59144b8ad1438146b2ad0->enter($__internal_84f64c5b25d42c9d49b0afaa7289066572656133b1a59144b8ad1438146b2ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_84f64c5b25d42c9d49b0afaa7289066572656133b1a59144b8ad1438146b2ad0->leave($__internal_84f64c5b25d42c9d49b0afaa7289066572656133b1a59144b8ad1438146b2ad0_prof);

        
        $__internal_f50439abccc16f470688bb7d13d854b4e12af58c38943f801b4e5920b10fb20e->leave($__internal_f50439abccc16f470688bb7d13d854b4e12af58c38943f801b4e5920b10fb20e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
