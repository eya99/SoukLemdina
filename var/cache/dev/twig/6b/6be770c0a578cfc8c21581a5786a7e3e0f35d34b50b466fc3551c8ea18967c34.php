<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_2f82709d94456e1e3984f51110aac8603fcd3de453d9f6259c2075b3a4e601bd extends Twig_Template
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
        $__internal_1857b3c8d7e24803e18ccad29fd3c85d0e0e1e4829f66d85e34cafba55753ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1857b3c8d7e24803e18ccad29fd3c85d0e0e1e4829f66d85e34cafba55753ecf->enter($__internal_1857b3c8d7e24803e18ccad29fd3c85d0e0e1e4829f66d85e34cafba55753ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_9e72583bf3588943ef85836dc3bb5b808153b184941f2402a9bf0506c35fad81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e72583bf3588943ef85836dc3bb5b808153b184941f2402a9bf0506c35fad81->enter($__internal_9e72583bf3588943ef85836dc3bb5b808153b184941f2402a9bf0506c35fad81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_1857b3c8d7e24803e18ccad29fd3c85d0e0e1e4829f66d85e34cafba55753ecf->leave($__internal_1857b3c8d7e24803e18ccad29fd3c85d0e0e1e4829f66d85e34cafba55753ecf_prof);

        
        $__internal_9e72583bf3588943ef85836dc3bb5b808153b184941f2402a9bf0506c35fad81->leave($__internal_9e72583bf3588943ef85836dc3bb5b808153b184941f2402a9bf0506c35fad81_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
