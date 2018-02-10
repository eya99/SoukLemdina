<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_66919b9a1aa1f4c83996151cddbe520f5958b45d2202f2fdbffb9055b5bada32 extends Twig_Template
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
        $__internal_fc4bd16b468d9593f560ee853df6d08706c1197097ee152a86fb89f04d6db101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4bd16b468d9593f560ee853df6d08706c1197097ee152a86fb89f04d6db101->enter($__internal_fc4bd16b468d9593f560ee853df6d08706c1197097ee152a86fb89f04d6db101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1a00692e403c95f4256f7a7e9d64ae2585ed2a5936094f8357cd3fabd41580c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a00692e403c95f4256f7a7e9d64ae2585ed2a5936094f8357cd3fabd41580c1->enter($__internal_1a00692e403c95f4256f7a7e9d64ae2585ed2a5936094f8357cd3fabd41580c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fc4bd16b468d9593f560ee853df6d08706c1197097ee152a86fb89f04d6db101->leave($__internal_fc4bd16b468d9593f560ee853df6d08706c1197097ee152a86fb89f04d6db101_prof);

        
        $__internal_1a00692e403c95f4256f7a7e9d64ae2585ed2a5936094f8357cd3fabd41580c1->leave($__internal_1a00692e403c95f4256f7a7e9d64ae2585ed2a5936094f8357cd3fabd41580c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
