<?php

/* LocalBundle:Default:index.html.twig */
class __TwigTemplate_49bfa9ae6199a796848f4c037f67140255d75957a966fe3ccd06f38a8d33b60a extends Twig_Template
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
        $__internal_70d627f8fd61593d68462b82749ad28e7e56e6c5c27f3c508855b9c84bea927c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d627f8fd61593d68462b82749ad28e7e56e6c5c27f3c508855b9c84bea927c->enter($__internal_70d627f8fd61593d68462b82749ad28e7e56e6c5c27f3c508855b9c84bea927c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Default:index.html.twig"));

        $__internal_53d6a2af152654dd9ad814d714872f94ea2a36bbf068f9061afb69e9401f7dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d6a2af152654dd9ad814d714872f94ea2a36bbf068f9061afb69e9401f7dcd->enter($__internal_53d6a2af152654dd9ad814d714872f94ea2a36bbf068f9061afb69e9401f7dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_70d627f8fd61593d68462b82749ad28e7e56e6c5c27f3c508855b9c84bea927c->leave($__internal_70d627f8fd61593d68462b82749ad28e7e56e6c5c27f3c508855b9c84bea927c_prof);

        
        $__internal_53d6a2af152654dd9ad814d714872f94ea2a36bbf068f9061afb69e9401f7dcd->leave($__internal_53d6a2af152654dd9ad814d714872f94ea2a36bbf068f9061afb69e9401f7dcd_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "LocalBundle:Default:index.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Default/index.html.twig");
    }
}
