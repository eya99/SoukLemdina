<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b185f90f3bf01b3d2e57a3eb18d740c2f70a578f21f97c30e901540053578551 extends Twig_Template
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
        $__internal_b321b409a2da14e0aca94af2ece1d3eb950e4fa301d400f79bcfd05732c48713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b321b409a2da14e0aca94af2ece1d3eb950e4fa301d400f79bcfd05732c48713->enter($__internal_b321b409a2da14e0aca94af2ece1d3eb950e4fa301d400f79bcfd05732c48713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b9124e162f8571bfb371436ff2a7de88ff998543524a4883598ca19e48e491fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9124e162f8571bfb371436ff2a7de88ff998543524a4883598ca19e48e491fa->enter($__internal_b9124e162f8571bfb371436ff2a7de88ff998543524a4883598ca19e48e491fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b321b409a2da14e0aca94af2ece1d3eb950e4fa301d400f79bcfd05732c48713->leave($__internal_b321b409a2da14e0aca94af2ece1d3eb950e4fa301d400f79bcfd05732c48713_prof);

        
        $__internal_b9124e162f8571bfb371436ff2a7de88ff998543524a4883598ca19e48e491fa->leave($__internal_b9124e162f8571bfb371436ff2a7de88ff998543524a4883598ca19e48e491fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
