<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c776b9a95ce04b27bf9a34c4d2ad80558cf79d6ced4ab616ca6f233907648bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_265638bb303ca3c646507b43ea886c4aa3b63a65db3128557afb125fec899e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265638bb303ca3c646507b43ea886c4aa3b63a65db3128557afb125fec899e2d->enter($__internal_265638bb303ca3c646507b43ea886c4aa3b63a65db3128557afb125fec899e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_d6ee143fbba72eab2a557473e8ff8d3988f1f39470889d51795431e71c90bdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ee143fbba72eab2a557473e8ff8d3988f1f39470889d51795431e71c90bdc3->enter($__internal_d6ee143fbba72eab2a557473e8ff8d3988f1f39470889d51795431e71c90bdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265638bb303ca3c646507b43ea886c4aa3b63a65db3128557afb125fec899e2d->leave($__internal_265638bb303ca3c646507b43ea886c4aa3b63a65db3128557afb125fec899e2d_prof);

        
        $__internal_d6ee143fbba72eab2a557473e8ff8d3988f1f39470889d51795431e71c90bdc3->leave($__internal_d6ee143fbba72eab2a557473e8ff8d3988f1f39470889d51795431e71c90bdc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1984db706da849a74581c05976f793cdabc396bd71e4814d77895bb891d3adf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1984db706da849a74581c05976f793cdabc396bd71e4814d77895bb891d3adf1->enter($__internal_1984db706da849a74581c05976f793cdabc396bd71e4814d77895bb891d3adf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d5f1ded7f9cde6e26db7cbc3c2a0005121a20911bf8f1766b183ef6aca9ab9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5f1ded7f9cde6e26db7cbc3c2a0005121a20911bf8f1766b183ef6aca9ab9d->enter($__internal_9d5f1ded7f9cde6e26db7cbc3c2a0005121a20911bf8f1766b183ef6aca9ab9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9d5f1ded7f9cde6e26db7cbc3c2a0005121a20911bf8f1766b183ef6aca9ab9d->leave($__internal_9d5f1ded7f9cde6e26db7cbc3c2a0005121a20911bf8f1766b183ef6aca9ab9d_prof);

        
        $__internal_1984db706da849a74581c05976f793cdabc396bd71e4814d77895bb891d3adf1->leave($__internal_1984db706da849a74581c05976f793cdabc396bd71e4814d77895bb891d3adf1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
