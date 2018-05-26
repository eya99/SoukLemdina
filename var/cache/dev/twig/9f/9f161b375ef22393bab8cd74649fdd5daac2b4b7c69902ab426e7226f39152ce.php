<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_e4d206e3f49eae9d30b93c2c861ea3ccb3c8f61ad6351afb0e38e49a14a7da0b extends Twig_Template
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
        $__internal_3a75248a943f0bf4df5e8ab22bd636a430fe568d4d4045c6297974912cb3408e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a75248a943f0bf4df5e8ab22bd636a430fe568d4d4045c6297974912cb3408e->enter($__internal_3a75248a943f0bf4df5e8ab22bd636a430fe568d4d4045c6297974912cb3408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_7c2846919b64930cfcb3c754b67e286a19209d890bc6fd60395e93f35fddd25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2846919b64930cfcb3c754b67e286a19209d890bc6fd60395e93f35fddd25f->enter($__internal_7c2846919b64930cfcb3c754b67e286a19209d890bc6fd60395e93f35fddd25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_3a75248a943f0bf4df5e8ab22bd636a430fe568d4d4045c6297974912cb3408e->leave($__internal_3a75248a943f0bf4df5e8ab22bd636a430fe568d4d4045c6297974912cb3408e_prof);

        
        $__internal_7c2846919b64930cfcb3c754b67e286a19209d890bc6fd60395e93f35fddd25f->leave($__internal_7c2846919b64930cfcb3c754b67e286a19209d890bc6fd60395e93f35fddd25f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
