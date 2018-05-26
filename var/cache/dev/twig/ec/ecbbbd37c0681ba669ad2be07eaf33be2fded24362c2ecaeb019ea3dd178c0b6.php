<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_08eb2c731fe187aa5d31a69a7fd39245663a2821ba1e0f3745bdc3bd94411f24 extends Twig_Template
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
        $__internal_110d6766fb2d8a4b7e720c6d30d8264f0ddf2b5c3bb9bd1bcadf74a35e788d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110d6766fb2d8a4b7e720c6d30d8264f0ddf2b5c3bb9bd1bcadf74a35e788d57->enter($__internal_110d6766fb2d8a4b7e720c6d30d8264f0ddf2b5c3bb9bd1bcadf74a35e788d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_04ad3fe1859df29e7c89708d1477c2001b4c634d212549cbb5926c5f9f7cb188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ad3fe1859df29e7c89708d1477c2001b4c634d212549cbb5926c5f9f7cb188->enter($__internal_04ad3fe1859df29e7c89708d1477c2001b4c634d212549cbb5926c5f9f7cb188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_110d6766fb2d8a4b7e720c6d30d8264f0ddf2b5c3bb9bd1bcadf74a35e788d57->leave($__internal_110d6766fb2d8a4b7e720c6d30d8264f0ddf2b5c3bb9bd1bcadf74a35e788d57_prof);

        
        $__internal_04ad3fe1859df29e7c89708d1477c2001b4c634d212549cbb5926c5f9f7cb188->leave($__internal_04ad3fe1859df29e7c89708d1477c2001b4c634d212549cbb5926c5f9f7cb188_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
