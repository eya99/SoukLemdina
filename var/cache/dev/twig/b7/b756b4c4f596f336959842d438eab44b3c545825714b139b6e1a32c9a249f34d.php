<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b4952b52b0a7e5308d0ec150a1c2d35a8150303e01eafad28a2bcd35c379b883 extends Twig_Template
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
        $__internal_a10d1ef2dee28bd7334f24aca127d633f7743b23ef2acbdbbfcfdd94f1c2d71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10d1ef2dee28bd7334f24aca127d633f7743b23ef2acbdbbfcfdd94f1c2d71f->enter($__internal_a10d1ef2dee28bd7334f24aca127d633f7743b23ef2acbdbbfcfdd94f1c2d71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9c91f3cc6605d3eda2e966b4a09cddc9189d72269c8a8380115ed925a46dfa3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c91f3cc6605d3eda2e966b4a09cddc9189d72269c8a8380115ed925a46dfa3f->enter($__internal_9c91f3cc6605d3eda2e966b4a09cddc9189d72269c8a8380115ed925a46dfa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a10d1ef2dee28bd7334f24aca127d633f7743b23ef2acbdbbfcfdd94f1c2d71f->leave($__internal_a10d1ef2dee28bd7334f24aca127d633f7743b23ef2acbdbbfcfdd94f1c2d71f_prof);

        
        $__internal_9c91f3cc6605d3eda2e966b4a09cddc9189d72269c8a8380115ed925a46dfa3f->leave($__internal_9c91f3cc6605d3eda2e966b4a09cddc9189d72269c8a8380115ed925a46dfa3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
