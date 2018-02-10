<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e4c77e5e0acf7ed94253984010dbe3d91163caa8789acab9ba55f7fba2d2c0d6 extends Twig_Template
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
        $__internal_2b784cd609becb7a99b05c949dd7cb0880dfae4e2d614b7988722946dba097e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b784cd609becb7a99b05c949dd7cb0880dfae4e2d614b7988722946dba097e9->enter($__internal_2b784cd609becb7a99b05c949dd7cb0880dfae4e2d614b7988722946dba097e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_1c123721e2e2f3f52743bd84277a8bca1f8770de823743eee3fc7780e3d80c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c123721e2e2f3f52743bd84277a8bca1f8770de823743eee3fc7780e3d80c27->enter($__internal_1c123721e2e2f3f52743bd84277a8bca1f8770de823743eee3fc7780e3d80c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2b784cd609becb7a99b05c949dd7cb0880dfae4e2d614b7988722946dba097e9->leave($__internal_2b784cd609becb7a99b05c949dd7cb0880dfae4e2d614b7988722946dba097e9_prof);

        
        $__internal_1c123721e2e2f3f52743bd84277a8bca1f8770de823743eee3fc7780e3d80c27->leave($__internal_1c123721e2e2f3f52743bd84277a8bca1f8770de823743eee3fc7780e3d80c27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
