<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_e9aec35f0a36c14a762e2fb1458edc0f654197da2881d1a592ec62429a1b0ed7 extends Twig_Template
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
        $__internal_00f24b5ef059807026e1918f4953679f46c299a29b82c5453297a28e86e215e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f24b5ef059807026e1918f4953679f46c299a29b82c5453297a28e86e215e9->enter($__internal_00f24b5ef059807026e1918f4953679f46c299a29b82c5453297a28e86e215e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_5006fd4887a7f59e8fed468f5e1c3f98ccae8f266301e12d48a12f18a4b60630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5006fd4887a7f59e8fed468f5e1c3f98ccae8f266301e12d48a12f18a4b60630->enter($__internal_5006fd4887a7f59e8fed468f5e1c3f98ccae8f266301e12d48a12f18a4b60630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_00f24b5ef059807026e1918f4953679f46c299a29b82c5453297a28e86e215e9->leave($__internal_00f24b5ef059807026e1918f4953679f46c299a29b82c5453297a28e86e215e9_prof);

        
        $__internal_5006fd4887a7f59e8fed468f5e1c3f98ccae8f266301e12d48a12f18a4b60630->leave($__internal_5006fd4887a7f59e8fed468f5e1c3f98ccae8f266301e12d48a12f18a4b60630_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_time.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}
