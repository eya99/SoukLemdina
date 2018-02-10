<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_86d766b03ef2ada7a6e6cbe7462ce8ba7f9b53fcf8bc5bdfdfe0262e91851ae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_b3c1ca7d0bfd5b083e9c924b64e127372f12dae6adfc57784d357806644af4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c1ca7d0bfd5b083e9c924b64e127372f12dae6adfc57784d357806644af4b9->enter($__internal_b3c1ca7d0bfd5b083e9c924b64e127372f12dae6adfc57784d357806644af4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_9862fb7a1b7ad4150a5940cbb52257d3c4cf73877f308574ea28626bfb94c69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9862fb7a1b7ad4150a5940cbb52257d3c4cf73877f308574ea28626bfb94c69b->enter($__internal_9862fb7a1b7ad4150a5940cbb52257d3c4cf73877f308574ea28626bfb94c69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c1ca7d0bfd5b083e9c924b64e127372f12dae6adfc57784d357806644af4b9->leave($__internal_b3c1ca7d0bfd5b083e9c924b64e127372f12dae6adfc57784d357806644af4b9_prof);

        
        $__internal_9862fb7a1b7ad4150a5940cbb52257d3c4cf73877f308574ea28626bfb94c69b->leave($__internal_9862fb7a1b7ad4150a5940cbb52257d3c4cf73877f308574ea28626bfb94c69b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_431b30078ac598e88f819725f081a3044458b5cfc9ae18eae21f6d580b79f7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431b30078ac598e88f819725f081a3044458b5cfc9ae18eae21f6d580b79f7b2->enter($__internal_431b30078ac598e88f819725f081a3044458b5cfc9ae18eae21f6d580b79f7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_63a594cd59e0620671c34c008041a630cf287400188ff85f1689258c2979190e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a594cd59e0620671c34c008041a630cf287400188ff85f1689258c2979190e->enter($__internal_63a594cd59e0620671c34c008041a630cf287400188ff85f1689258c2979190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_63a594cd59e0620671c34c008041a630cf287400188ff85f1689258c2979190e->leave($__internal_63a594cd59e0620671c34c008041a630cf287400188ff85f1689258c2979190e_prof);

        
        $__internal_431b30078ac598e88f819725f081a3044458b5cfc9ae18eae21f6d580b79f7b2->leave($__internal_431b30078ac598e88f819725f081a3044458b5cfc9ae18eae21f6d580b79f7b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
