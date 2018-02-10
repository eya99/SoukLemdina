<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a542999d4a88e9cf9d35879a586f3359ed1dd9c577a4d58f3a20170cd141c3b8 extends Twig_Template
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
        $__internal_13b4b308999739766fb07d134cd0c888c604dd47d8e17829ab922d707be653bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b4b308999739766fb07d134cd0c888c604dd47d8e17829ab922d707be653bc->enter($__internal_13b4b308999739766fb07d134cd0c888c604dd47d8e17829ab922d707be653bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d35cd4722f5697a26158602f6d85bd29846474d9d51f95fa48464b1062ecc594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35cd4722f5697a26158602f6d85bd29846474d9d51f95fa48464b1062ecc594->enter($__internal_d35cd4722f5697a26158602f6d85bd29846474d9d51f95fa48464b1062ecc594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_13b4b308999739766fb07d134cd0c888c604dd47d8e17829ab922d707be653bc->leave($__internal_13b4b308999739766fb07d134cd0c888c604dd47d8e17829ab922d707be653bc_prof);

        
        $__internal_d35cd4722f5697a26158602f6d85bd29846474d9d51f95fa48464b1062ecc594->leave($__internal_d35cd4722f5697a26158602f6d85bd29846474d9d51f95fa48464b1062ecc594_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
