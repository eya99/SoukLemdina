<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_7e90f01b43a9e1ddc8c6d62cb289c63273ea9d7401f78648d689cf740ca7d867 extends Twig_Template
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
        $__internal_0127a95b1a50b034f1e792d914435cc40d90ff3e18f44effba8d2563d9fd23a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0127a95b1a50b034f1e792d914435cc40d90ff3e18f44effba8d2563d9fd23a9->enter($__internal_0127a95b1a50b034f1e792d914435cc40d90ff3e18f44effba8d2563d9fd23a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_0217013ff9e162e1f0c3f32f6850991315d621480f8575e985ccfb4f1bfb6ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0217013ff9e162e1f0c3f32f6850991315d621480f8575e985ccfb4f1bfb6ea6->enter($__internal_0217013ff9e162e1f0c3f32f6850991315d621480f8575e985ccfb4f1bfb6ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0127a95b1a50b034f1e792d914435cc40d90ff3e18f44effba8d2563d9fd23a9->leave($__internal_0127a95b1a50b034f1e792d914435cc40d90ff3e18f44effba8d2563d9fd23a9_prof);

        
        $__internal_0217013ff9e162e1f0c3f32f6850991315d621480f8575e985ccfb4f1bfb6ea6->leave($__internal_0217013ff9e162e1f0c3f32f6850991315d621480f8575e985ccfb4f1bfb6ea6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
