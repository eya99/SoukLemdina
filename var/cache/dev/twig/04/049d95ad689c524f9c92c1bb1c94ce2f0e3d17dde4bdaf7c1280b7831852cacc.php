<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_df5c60a89f95e9bb6a340bdabd780f6e54d3e87a9c12eb3675eb8d731a3a4f81 extends Twig_Template
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
        $__internal_530ca0c0f0d5cd2a8fdc0a7717da6312f73681ca315079c305d104de9970260f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530ca0c0f0d5cd2a8fdc0a7717da6312f73681ca315079c305d104de9970260f->enter($__internal_530ca0c0f0d5cd2a8fdc0a7717da6312f73681ca315079c305d104de9970260f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7199cc9a5edbf3fba92f6e326c290f127f4cf8663db780b9f95d1e6c919faaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7199cc9a5edbf3fba92f6e326c290f127f4cf8663db780b9f95d1e6c919faaa5->enter($__internal_7199cc9a5edbf3fba92f6e326c290f127f4cf8663db780b9f95d1e6c919faaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_530ca0c0f0d5cd2a8fdc0a7717da6312f73681ca315079c305d104de9970260f->leave($__internal_530ca0c0f0d5cd2a8fdc0a7717da6312f73681ca315079c305d104de9970260f_prof);

        
        $__internal_7199cc9a5edbf3fba92f6e326c290f127f4cf8663db780b9f95d1e6c919faaa5->leave($__internal_7199cc9a5edbf3fba92f6e326c290f127f4cf8663db780b9f95d1e6c919faaa5_prof);

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
", "TwigBundle:Exception:error.js.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
