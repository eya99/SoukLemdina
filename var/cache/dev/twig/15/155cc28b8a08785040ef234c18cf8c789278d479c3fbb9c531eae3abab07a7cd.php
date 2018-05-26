<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e7555d651c7146e6f2fad9a8442f6eb50b591f445eea6a23d86b23303c66cc4b extends Twig_Template
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
        $__internal_e7e3581a87579db9adcb371f7863eb0c080ac07dcd600bf0a0aa21f46b57a9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e3581a87579db9adcb371f7863eb0c080ac07dcd600bf0a0aa21f46b57a9a5->enter($__internal_e7e3581a87579db9adcb371f7863eb0c080ac07dcd600bf0a0aa21f46b57a9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2213b9b4305db549cd22dc02275fce4e9f3d4f3cc2c4169a8d10bccc478fac04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2213b9b4305db549cd22dc02275fce4e9f3d4f3cc2c4169a8d10bccc478fac04->enter($__internal_2213b9b4305db549cd22dc02275fce4e9f3d4f3cc2c4169a8d10bccc478fac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e7e3581a87579db9adcb371f7863eb0c080ac07dcd600bf0a0aa21f46b57a9a5->leave($__internal_e7e3581a87579db9adcb371f7863eb0c080ac07dcd600bf0a0aa21f46b57a9a5_prof);

        
        $__internal_2213b9b4305db549cd22dc02275fce4e9f3d4f3cc2c4169a8d10bccc478fac04->leave($__internal_2213b9b4305db549cd22dc02275fce4e9f3d4f3cc2c4169a8d10bccc478fac04_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
