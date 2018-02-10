<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_948b165730b43a57be0b772b934f6cf255de8dc44fc6704667dcad9dad93c8bd extends Twig_Template
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
        $__internal_ad2e6a361bc4044bdd48653fdf30601d0f635ce0effe4fde07912c39522c399f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2e6a361bc4044bdd48653fdf30601d0f635ce0effe4fde07912c39522c399f->enter($__internal_ad2e6a361bc4044bdd48653fdf30601d0f635ce0effe4fde07912c39522c399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_b43ff23955312f6c884c4bc39e7d0b321d72f8c32f2b960bff2db5dcd8f81e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43ff23955312f6c884c4bc39e7d0b321d72f8c32f2b960bff2db5dcd8f81e9a->enter($__internal_b43ff23955312f6c884c4bc39e7d0b321d72f8c32f2b960bff2db5dcd8f81e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ad2e6a361bc4044bdd48653fdf30601d0f635ce0effe4fde07912c39522c399f->leave($__internal_ad2e6a361bc4044bdd48653fdf30601d0f635ce0effe4fde07912c39522c399f_prof);

        
        $__internal_b43ff23955312f6c884c4bc39e7d0b321d72f8c32f2b960bff2db5dcd8f81e9a->leave($__internal_b43ff23955312f6c884c4bc39e7d0b321d72f8c32f2b960bff2db5dcd8f81e9a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
