<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ebf4e9ba7a4b3407c463e915597e8f8a947dbb8881cc76d61c1b13ae1e1bfee2 extends Twig_Template
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
        $__internal_0aa418678ba81d8dd8cfd0392b57a21ef9707645a1d391e0bee59004f7ff139b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa418678ba81d8dd8cfd0392b57a21ef9707645a1d391e0bee59004f7ff139b->enter($__internal_0aa418678ba81d8dd8cfd0392b57a21ef9707645a1d391e0bee59004f7ff139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_95e524f2aa52280fd94f803dfcc51dd749c12cd66500eacf21680ea728fadda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e524f2aa52280fd94f803dfcc51dd749c12cd66500eacf21680ea728fadda4->enter($__internal_95e524f2aa52280fd94f803dfcc51dd749c12cd66500eacf21680ea728fadda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0aa418678ba81d8dd8cfd0392b57a21ef9707645a1d391e0bee59004f7ff139b->leave($__internal_0aa418678ba81d8dd8cfd0392b57a21ef9707645a1d391e0bee59004f7ff139b_prof);

        
        $__internal_95e524f2aa52280fd94f803dfcc51dd749c12cd66500eacf21680ea728fadda4->leave($__internal_95e524f2aa52280fd94f803dfcc51dd749c12cd66500eacf21680ea728fadda4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
