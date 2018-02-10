<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7569cde5a9351ac5fb9cbae92cc856c7e2595c0ca83bed9f204143be6e936379 extends Twig_Template
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
        $__internal_1fa142cd321ab7ddca6636f1f88c2764b0231d5fd2e3c90522e1cd5de3f72e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa142cd321ab7ddca6636f1f88c2764b0231d5fd2e3c90522e1cd5de3f72e50->enter($__internal_1fa142cd321ab7ddca6636f1f88c2764b0231d5fd2e3c90522e1cd5de3f72e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_44ec9a3c8cb2900ebe9117cfa94b5543bdeade966ab708062143b370cdd7d8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ec9a3c8cb2900ebe9117cfa94b5543bdeade966ab708062143b370cdd7d8b5->enter($__internal_44ec9a3c8cb2900ebe9117cfa94b5543bdeade966ab708062143b370cdd7d8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1fa142cd321ab7ddca6636f1f88c2764b0231d5fd2e3c90522e1cd5de3f72e50->leave($__internal_1fa142cd321ab7ddca6636f1f88c2764b0231d5fd2e3c90522e1cd5de3f72e50_prof);

        
        $__internal_44ec9a3c8cb2900ebe9117cfa94b5543bdeade966ab708062143b370cdd7d8b5->leave($__internal_44ec9a3c8cb2900ebe9117cfa94b5543bdeade966ab708062143b370cdd7d8b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
