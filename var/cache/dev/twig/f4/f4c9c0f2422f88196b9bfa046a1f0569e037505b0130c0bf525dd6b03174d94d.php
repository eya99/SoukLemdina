<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_49e299a0e8b8011d452d6dc2c76fdcb44a83b33af90f6321e0f493f3aa51817f extends Twig_Template
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
        $__internal_6c7c75dc69e73b9dbedd334b64c9443912a17da223c5559e07e97e8d505dbd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7c75dc69e73b9dbedd334b64c9443912a17da223c5559e07e97e8d505dbd90->enter($__internal_6c7c75dc69e73b9dbedd334b64c9443912a17da223c5559e07e97e8d505dbd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_a458a38228eacdf8e6c771fe8dcda79ae33d14bab488129f09ba251c6ce315e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a458a38228eacdf8e6c771fe8dcda79ae33d14bab488129f09ba251c6ce315e7->enter($__internal_a458a38228eacdf8e6c771fe8dcda79ae33d14bab488129f09ba251c6ce315e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6c7c75dc69e73b9dbedd334b64c9443912a17da223c5559e07e97e8d505dbd90->leave($__internal_6c7c75dc69e73b9dbedd334b64c9443912a17da223c5559e07e97e8d505dbd90_prof);

        
        $__internal_a458a38228eacdf8e6c771fe8dcda79ae33d14bab488129f09ba251c6ce315e7->leave($__internal_a458a38228eacdf8e6c771fe8dcda79ae33d14bab488129f09ba251c6ce315e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
