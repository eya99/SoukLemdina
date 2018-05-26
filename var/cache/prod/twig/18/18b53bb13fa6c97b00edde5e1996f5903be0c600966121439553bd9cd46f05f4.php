<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_da052ae359e35b568b3d075480598dcdc6906c70f31bc9d160abe5f7b26683ef extends Twig_Template
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
        $__internal_5cf641e12263b4ec243c0317eaca01080513c3d5f4ac613ce33964a3a53c6bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf641e12263b4ec243c0317eaca01080513c3d5f4ac613ce33964a3a53c6bef->enter($__internal_5cf641e12263b4ec243c0317eaca01080513c3d5f4ac613ce33964a3a53c6bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_5cf641e12263b4ec243c0317eaca01080513c3d5f4ac613ce33964a3a53c6bef->leave($__internal_5cf641e12263b4ec243c0317eaca01080513c3d5f4ac613ce33964a3a53c6bef_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
