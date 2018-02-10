<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_1064861b4e8bb80dd50cf586461e6d5d84b8a9c54ae7198a8afc93c040e66f2b extends Twig_Template
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
        $__internal_a02503d5985f59dbc4ef6241b1cb85bec5b878f6f174ac7b45839d06d8868f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02503d5985f59dbc4ef6241b1cb85bec5b878f6f174ac7b45839d06d8868f57->enter($__internal_a02503d5985f59dbc4ef6241b1cb85bec5b878f6f174ac7b45839d06d8868f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_02098e11be39eff43ef664dce5a965e85e613e8d2b4505470eae102ea2042bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02098e11be39eff43ef664dce5a965e85e613e8d2b4505470eae102ea2042bf0->enter($__internal_02098e11be39eff43ef664dce5a965e85e613e8d2b4505470eae102ea2042bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a02503d5985f59dbc4ef6241b1cb85bec5b878f6f174ac7b45839d06d8868f57->leave($__internal_a02503d5985f59dbc4ef6241b1cb85bec5b878f6f174ac7b45839d06d8868f57_prof);

        
        $__internal_02098e11be39eff43ef664dce5a965e85e613e8d2b4505470eae102ea2042bf0->leave($__internal_02098e11be39eff43ef664dce5a965e85e613e8d2b4505470eae102ea2042bf0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
