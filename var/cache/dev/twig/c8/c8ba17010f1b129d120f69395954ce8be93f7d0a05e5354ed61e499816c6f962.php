<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_63774f0990130c4780f189e337b6ca972a11d79986da7a78e4d8327046ccb924 extends Twig_Template
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
        $__internal_dd60786dd4a6797649c8a2d822fd859b98b6b1dbfbfe3d185c6fe36e3993d428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd60786dd4a6797649c8a2d822fd859b98b6b1dbfbfe3d185c6fe36e3993d428->enter($__internal_dd60786dd4a6797649c8a2d822fd859b98b6b1dbfbfe3d185c6fe36e3993d428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_89e544a8f75b3f7dcb39f4bbd488aacf6eba93084f96da0e93c8020f5e98ca8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e544a8f75b3f7dcb39f4bbd488aacf6eba93084f96da0e93c8020f5e98ca8a->enter($__internal_89e544a8f75b3f7dcb39f4bbd488aacf6eba93084f96da0e93c8020f5e98ca8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_dd60786dd4a6797649c8a2d822fd859b98b6b1dbfbfe3d185c6fe36e3993d428->leave($__internal_dd60786dd4a6797649c8a2d822fd859b98b6b1dbfbfe3d185c6fe36e3993d428_prof);

        
        $__internal_89e544a8f75b3f7dcb39f4bbd488aacf6eba93084f96da0e93c8020f5e98ca8a->leave($__internal_89e544a8f75b3f7dcb39f4bbd488aacf6eba93084f96da0e93c8020f5e98ca8a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_bigint.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
