<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_fd3645e322b04b219bf22ff583d77d98d2a556cc85d2f034e900e83ca8480656 extends Twig_Template
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
        $__internal_88125f2a90b40e248590d94450bd0dac8fed1e4759d8ebceca4b47165e834e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88125f2a90b40e248590d94450bd0dac8fed1e4759d8ebceca4b47165e834e37->enter($__internal_88125f2a90b40e248590d94450bd0dac8fed1e4759d8ebceca4b47165e834e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_060f5bded8102bf10289572dd132d7a64ac0c5103464624872823f541a9d67d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060f5bded8102bf10289572dd132d7a64ac0c5103464624872823f541a9d67d4->enter($__internal_060f5bded8102bf10289572dd132d7a64ac0c5103464624872823f541a9d67d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_88125f2a90b40e248590d94450bd0dac8fed1e4759d8ebceca4b47165e834e37->leave($__internal_88125f2a90b40e248590d94450bd0dac8fed1e4759d8ebceca4b47165e834e37_prof);

        
        $__internal_060f5bded8102bf10289572dd132d7a64ac0c5103464624872823f541a9d67d4->leave($__internal_060f5bded8102bf10289572dd132d7a64ac0c5103464624872823f541a9d67d4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
