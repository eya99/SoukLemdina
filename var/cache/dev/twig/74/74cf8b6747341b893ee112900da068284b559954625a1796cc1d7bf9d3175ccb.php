<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_4d4ff05fa923e2e0f8850b73ef1aaaac99868f2df5d9c1622b929db87a5449a5 extends Twig_Template
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
        $__internal_18e285053b989a21b76ec23ed04b763c4573b1b7060bc96554552d95e4409fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e285053b989a21b76ec23ed04b763c4573b1b7060bc96554552d95e4409fe5->enter($__internal_18e285053b989a21b76ec23ed04b763c4573b1b7060bc96554552d95e4409fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_7e6f7bbcb0d3609b56f85c4ae5b95d4865e7c4c36bf59d6a4747d51d60ce3121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6f7bbcb0d3609b56f85c4ae5b95d4865e7c4c36bf59d6a4747d51d60ce3121->enter($__internal_7e6f7bbcb0d3609b56f85c4ae5b95d4865e7c4c36bf59d6a4747d51d60ce3121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_18e285053b989a21b76ec23ed04b763c4573b1b7060bc96554552d95e4409fe5->leave($__internal_18e285053b989a21b76ec23ed04b763c4573b1b7060bc96554552d95e4409fe5_prof);

        
        $__internal_7e6f7bbcb0d3609b56f85c4ae5b95d4865e7c4c36bf59d6a4747d51d60ce3121->leave($__internal_7e6f7bbcb0d3609b56f85c4ae5b95d4865e7c4c36bf59d6a4747d51d60ce3121_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
