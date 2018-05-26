<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4dbb3e172930c9013d967d3dbf5f0886b73da3ddcc8c330798db10cc9b31d643 extends Twig_Template
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
        $__internal_9be0c23fd28d3ae611355dae9510d3c61ee89757a9bbd4e3fdf3dea6198ea7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be0c23fd28d3ae611355dae9510d3c61ee89757a9bbd4e3fdf3dea6198ea7bd->enter($__internal_9be0c23fd28d3ae611355dae9510d3c61ee89757a9bbd4e3fdf3dea6198ea7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_a0d51101a7af8ef2b3ad23a9fdb2659c01122acd62f41eb736a4ba188a386c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d51101a7af8ef2b3ad23a9fdb2659c01122acd62f41eb736a4ba188a386c65->enter($__internal_a0d51101a7af8ef2b3ad23a9fdb2659c01122acd62f41eb736a4ba188a386c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9be0c23fd28d3ae611355dae9510d3c61ee89757a9bbd4e3fdf3dea6198ea7bd->leave($__internal_9be0c23fd28d3ae611355dae9510d3c61ee89757a9bbd4e3fdf3dea6198ea7bd_prof);

        
        $__internal_a0d51101a7af8ef2b3ad23a9fdb2659c01122acd62f41eb736a4ba188a386c65->leave($__internal_a0d51101a7af8ef2b3ad23a9fdb2659c01122acd62f41eb736a4ba188a386c65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
