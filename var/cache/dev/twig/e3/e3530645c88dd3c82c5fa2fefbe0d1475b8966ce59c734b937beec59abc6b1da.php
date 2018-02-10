<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f3804c3af95333b946f1ce6531297ec36b0e2c7577629571b4947e415745a945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb713c8753674ed5e05ad2e2c19a2ac7697b6778ffe40fbe7f8e6e34861b5b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb713c8753674ed5e05ad2e2c19a2ac7697b6778ffe40fbe7f8e6e34861b5b71->enter($__internal_fb713c8753674ed5e05ad2e2c19a2ac7697b6778ffe40fbe7f8e6e34861b5b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_4b3353fb2cc0d58f5dac81c77fcefca74a1b7d3aaffa929454d15d67cbe7f8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3353fb2cc0d58f5dac81c77fcefca74a1b7d3aaffa929454d15d67cbe7f8ad->enter($__internal_4b3353fb2cc0d58f5dac81c77fcefca74a1b7d3aaffa929454d15d67cbe7f8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fb713c8753674ed5e05ad2e2c19a2ac7697b6778ffe40fbe7f8e6e34861b5b71->leave($__internal_fb713c8753674ed5e05ad2e2c19a2ac7697b6778ffe40fbe7f8e6e34861b5b71_prof);

        
        $__internal_4b3353fb2cc0d58f5dac81c77fcefca74a1b7d3aaffa929454d15d67cbe7f8ad->leave($__internal_4b3353fb2cc0d58f5dac81c77fcefca74a1b7d3aaffa929454d15d67cbe7f8ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
