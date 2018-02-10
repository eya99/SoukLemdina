<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_738ec2fb6599c02ed0cd63255133b3442b3db95fe404b5c7172ae32fb663d759 extends Twig_Template
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
        $__internal_8b30f2ff3cd089990f7f243d9fdd4d38080a263488d90da3fae812493f9035f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b30f2ff3cd089990f7f243d9fdd4d38080a263488d90da3fae812493f9035f6->enter($__internal_8b30f2ff3cd089990f7f243d9fdd4d38080a263488d90da3fae812493f9035f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_264cfb81fcfaa61a97c61b85b689054fd731196aca2f44ad808c364ec0024407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264cfb81fcfaa61a97c61b85b689054fd731196aca2f44ad808c364ec0024407->enter($__internal_264cfb81fcfaa61a97c61b85b689054fd731196aca2f44ad808c364ec0024407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8b30f2ff3cd089990f7f243d9fdd4d38080a263488d90da3fae812493f9035f6->leave($__internal_8b30f2ff3cd089990f7f243d9fdd4d38080a263488d90da3fae812493f9035f6_prof);

        
        $__internal_264cfb81fcfaa61a97c61b85b689054fd731196aca2f44ad808c364ec0024407->leave($__internal_264cfb81fcfaa61a97c61b85b689054fd731196aca2f44ad808c364ec0024407_prof);

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
", "TwigBundle:Exception:exception.json.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
