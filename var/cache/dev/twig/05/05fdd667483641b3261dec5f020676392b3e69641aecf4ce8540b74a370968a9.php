<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_4689a9753292553a8d5b6c0235a0750a2daf1d30bfd18ee073a79e7f800f8ba1 extends Twig_Template
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
        $__internal_645cf43ed870483f12bcddd5625dbf3ab2e0772c487d00a6c086ca187b43a01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645cf43ed870483f12bcddd5625dbf3ab2e0772c487d00a6c086ca187b43a01b->enter($__internal_645cf43ed870483f12bcddd5625dbf3ab2e0772c487d00a6c086ca187b43a01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_6a060cac2dc96a9c4af2c4b8a3dc10a8a4d5a6d4aca8191c2805221d253482e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a060cac2dc96a9c4af2c4b8a3dc10a8a4d5a6d4aca8191c2805221d253482e0->enter($__internal_6a060cac2dc96a9c4af2c4b8a3dc10a8a4d5a6d4aca8191c2805221d253482e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_645cf43ed870483f12bcddd5625dbf3ab2e0772c487d00a6c086ca187b43a01b->leave($__internal_645cf43ed870483f12bcddd5625dbf3ab2e0772c487d00a6c086ca187b43a01b_prof);

        
        $__internal_6a060cac2dc96a9c4af2c4b8a3dc10a8a4d5a6d4aca8191c2805221d253482e0->leave($__internal_6a060cac2dc96a9c4af2c4b8a3dc10a8a4d5a6d4aca8191c2805221d253482e0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
