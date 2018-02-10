<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_28975658d9ed60de2b6fd5ebb8789e9a8dc213f1d5cc93d80af900542c9b9393 extends Twig_Template
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
        $__internal_75d7b5392cf4656760d22a88ab6d130b6ab1e0f19c2f4395d3290bc9270e0957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d7b5392cf4656760d22a88ab6d130b6ab1e0f19c2f4395d3290bc9270e0957->enter($__internal_75d7b5392cf4656760d22a88ab6d130b6ab1e0f19c2f4395d3290bc9270e0957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d8a43a03e35c07ca95ca35b2dbd25ae2e026cbccde99201c98c13389ba323c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a43a03e35c07ca95ca35b2dbd25ae2e026cbccde99201c98c13389ba323c3e->enter($__internal_d8a43a03e35c07ca95ca35b2dbd25ae2e026cbccde99201c98c13389ba323c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_75d7b5392cf4656760d22a88ab6d130b6ab1e0f19c2f4395d3290bc9270e0957->leave($__internal_75d7b5392cf4656760d22a88ab6d130b6ab1e0f19c2f4395d3290bc9270e0957_prof);

        
        $__internal_d8a43a03e35c07ca95ca35b2dbd25ae2e026cbccde99201c98c13389ba323c3e->leave($__internal_d8a43a03e35c07ca95ca35b2dbd25ae2e026cbccde99201c98c13389ba323c3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
