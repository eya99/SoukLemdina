<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_a0f33d932d7eb956ee90bcda0f5107ac54f1f02e4761e7a97393559eaa62c341 extends Twig_Template
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
        $__internal_17198ccdb45f16cad384fe44f4b0c787ccbacf02461c55528915993e50366cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17198ccdb45f16cad384fe44f4b0c787ccbacf02461c55528915993e50366cdd->enter($__internal_17198ccdb45f16cad384fe44f4b0c787ccbacf02461c55528915993e50366cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_c4d47d0a62323c26225f26169c762f491e03175702dc80c61d0576dc6fcf18d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d47d0a62323c26225f26169c762f491e03175702dc80c61d0576dc6fcf18d3->enter($__internal_c4d47d0a62323c26225f26169c762f491e03175702dc80c61d0576dc6fcf18d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_17198ccdb45f16cad384fe44f4b0c787ccbacf02461c55528915993e50366cdd->leave($__internal_17198ccdb45f16cad384fe44f4b0c787ccbacf02461c55528915993e50366cdd_prof);

        
        $__internal_c4d47d0a62323c26225f26169c762f491e03175702dc80c61d0576dc6fcf18d3->leave($__internal_c4d47d0a62323c26225f26169c762f491e03175702dc80c61d0576dc6fcf18d3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
