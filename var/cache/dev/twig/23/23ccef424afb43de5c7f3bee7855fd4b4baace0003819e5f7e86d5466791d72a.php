<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1868c1ee5f58d5dbb8a28bb1ae6722336f1d852530b622475ec8e8e184286ecd extends Twig_Template
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
        $__internal_6b47b96056b0c912f75d552e6a2e0cdb3289d118297e0ab03a0cc6f9db74f4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b47b96056b0c912f75d552e6a2e0cdb3289d118297e0ab03a0cc6f9db74f4e7->enter($__internal_6b47b96056b0c912f75d552e6a2e0cdb3289d118297e0ab03a0cc6f9db74f4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5ebc4205cc1eef4e79c27e3129dafc2af8ed2220610161e9c191385f25219a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebc4205cc1eef4e79c27e3129dafc2af8ed2220610161e9c191385f25219a95->enter($__internal_5ebc4205cc1eef4e79c27e3129dafc2af8ed2220610161e9c191385f25219a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6b47b96056b0c912f75d552e6a2e0cdb3289d118297e0ab03a0cc6f9db74f4e7->leave($__internal_6b47b96056b0c912f75d552e6a2e0cdb3289d118297e0ab03a0cc6f9db74f4e7_prof);

        
        $__internal_5ebc4205cc1eef4e79c27e3129dafc2af8ed2220610161e9c191385f25219a95->leave($__internal_5ebc4205cc1eef4e79c27e3129dafc2af8ed2220610161e9c191385f25219a95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
