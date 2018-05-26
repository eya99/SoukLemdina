<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3fa5eeb2673a3c9418b19269f05eceee02a93ee189f0ce6297cf13d3cd578eae extends Twig_Template
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
        $__internal_97f7b41f5f86700f8040c37dbf223dcc7141be902cb4359cbe7f8261a306addc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f7b41f5f86700f8040c37dbf223dcc7141be902cb4359cbe7f8261a306addc->enter($__internal_97f7b41f5f86700f8040c37dbf223dcc7141be902cb4359cbe7f8261a306addc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_20239bb440c1717b36e8dc695d8416d462116acb5563eb7d2e0a4083b8c15535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20239bb440c1717b36e8dc695d8416d462116acb5563eb7d2e0a4083b8c15535->enter($__internal_20239bb440c1717b36e8dc695d8416d462116acb5563eb7d2e0a4083b8c15535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_97f7b41f5f86700f8040c37dbf223dcc7141be902cb4359cbe7f8261a306addc->leave($__internal_97f7b41f5f86700f8040c37dbf223dcc7141be902cb4359cbe7f8261a306addc_prof);

        
        $__internal_20239bb440c1717b36e8dc695d8416d462116acb5563eb7d2e0a4083b8c15535->leave($__internal_20239bb440c1717b36e8dc695d8416d462116acb5563eb7d2e0a4083b8c15535_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
