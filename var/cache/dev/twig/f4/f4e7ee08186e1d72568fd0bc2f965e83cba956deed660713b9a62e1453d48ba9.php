<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_30bb58281a81f0b79ede85b451a19d10dcba61e68199adb53fa3ee49d19e0c00 extends Twig_Template
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
        $__internal_7aa6807da99da283aaf32c1e0d276cf5369cf93ba6a37070f90edbf43de2f304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa6807da99da283aaf32c1e0d276cf5369cf93ba6a37070f90edbf43de2f304->enter($__internal_7aa6807da99da283aaf32c1e0d276cf5369cf93ba6a37070f90edbf43de2f304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_984447e2fcb425afd6f6ac54370c0a787d2ed2e8b1f4fd775c03b22260e9e963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984447e2fcb425afd6f6ac54370c0a787d2ed2e8b1f4fd775c03b22260e9e963->enter($__internal_984447e2fcb425afd6f6ac54370c0a787d2ed2e8b1f4fd775c03b22260e9e963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7aa6807da99da283aaf32c1e0d276cf5369cf93ba6a37070f90edbf43de2f304->leave($__internal_7aa6807da99da283aaf32c1e0d276cf5369cf93ba6a37070f90edbf43de2f304_prof);

        
        $__internal_984447e2fcb425afd6f6ac54370c0a787d2ed2e8b1f4fd775c03b22260e9e963->leave($__internal_984447e2fcb425afd6f6ac54370c0a787d2ed2e8b1f4fd775c03b22260e9e963_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
