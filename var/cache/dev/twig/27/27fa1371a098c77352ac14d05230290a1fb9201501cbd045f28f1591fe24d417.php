<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b060944a5c2b0c0ca99d8f89425db6fe7962d3d54ca264946ab9f951c810fa9d extends Twig_Template
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
        $__internal_79b96b5d5a35a3758527a394dd97c4a7f87ea76f81f5d8298f53b8d64f9c8434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b96b5d5a35a3758527a394dd97c4a7f87ea76f81f5d8298f53b8d64f9c8434->enter($__internal_79b96b5d5a35a3758527a394dd97c4a7f87ea76f81f5d8298f53b8d64f9c8434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8a74bf23d3b84b6faf46bb448a577bc110f8cf430b35da8c6089543d2dbfe72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a74bf23d3b84b6faf46bb448a577bc110f8cf430b35da8c6089543d2dbfe72f->enter($__internal_8a74bf23d3b84b6faf46bb448a577bc110f8cf430b35da8c6089543d2dbfe72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_79b96b5d5a35a3758527a394dd97c4a7f87ea76f81f5d8298f53b8d64f9c8434->leave($__internal_79b96b5d5a35a3758527a394dd97c4a7f87ea76f81f5d8298f53b8d64f9c8434_prof);

        
        $__internal_8a74bf23d3b84b6faf46bb448a577bc110f8cf430b35da8c6089543d2dbfe72f->leave($__internal_8a74bf23d3b84b6faf46bb448a577bc110f8cf430b35da8c6089543d2dbfe72f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
