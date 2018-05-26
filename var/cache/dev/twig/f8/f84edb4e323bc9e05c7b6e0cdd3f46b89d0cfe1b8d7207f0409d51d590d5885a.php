<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_d1019c25ce0ec3fa89bd0174213923607e330fe7b17ec879c5f94e1c1ab5409b extends Twig_Template
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
        $__internal_b7e890a59c3a290601caad4f56f98393115bad8537ad75cba1b31448a3453d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e890a59c3a290601caad4f56f98393115bad8537ad75cba1b31448a3453d0a->enter($__internal_b7e890a59c3a290601caad4f56f98393115bad8537ad75cba1b31448a3453d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_1a5b94425bb43d53083ca82aa37d5702aab49a9f4c510e9ce716b387e3537267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5b94425bb43d53083ca82aa37d5702aab49a9f4c510e9ce716b387e3537267->enter($__internal_1a5b94425bb43d53083ca82aa37d5702aab49a9f4c510e9ce716b387e3537267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        echo "
";
        
        $__internal_b7e890a59c3a290601caad4f56f98393115bad8537ad75cba1b31448a3453d0a->leave($__internal_b7e890a59c3a290601caad4f56f98393115bad8537ad75cba1b31448a3453d0a_prof);

        
        $__internal_1a5b94425bb43d53083ca82aa37d5702aab49a9f4c510e9ce716b387e3537267->leave($__internal_1a5b94425bb43d53083ca82aa37d5702aab49a9f4c510e9ce716b387e3537267_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_raw.html.twig");
    }
}
