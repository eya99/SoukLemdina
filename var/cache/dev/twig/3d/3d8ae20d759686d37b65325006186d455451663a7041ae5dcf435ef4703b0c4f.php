<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c5da39dec8672b4c36bcdfee422be453e914e1d1efc4cedc83e2612d64989bb0 extends Twig_Template
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
        $__internal_b8666a0689f3eb1b96fd288557449033750cc1884ca8a2b97ea8a77c546cec85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8666a0689f3eb1b96fd288557449033750cc1884ca8a2b97ea8a77c546cec85->enter($__internal_b8666a0689f3eb1b96fd288557449033750cc1884ca8a2b97ea8a77c546cec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f89f3e8251b66db49693dd990c89d7e2eff26b340ddab3d768d2935375da7c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89f3e8251b66db49693dd990c89d7e2eff26b340ddab3d768d2935375da7c5d->enter($__internal_f89f3e8251b66db49693dd990c89d7e2eff26b340ddab3d768d2935375da7c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b8666a0689f3eb1b96fd288557449033750cc1884ca8a2b97ea8a77c546cec85->leave($__internal_b8666a0689f3eb1b96fd288557449033750cc1884ca8a2b97ea8a77c546cec85_prof);

        
        $__internal_f89f3e8251b66db49693dd990c89d7e2eff26b340ddab3d768d2935375da7c5d->leave($__internal_f89f3e8251b66db49693dd990c89d7e2eff26b340ddab3d768d2935375da7c5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
