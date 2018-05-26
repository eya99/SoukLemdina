<?php

/* EasyAdminBundle:default:field_toggle.html.twig */
class __TwigTemplate_3ac4bc154f2bc4da26ddb3ca26cb93b1d541d8ad6f598a66c103f862ede270bc extends Twig_Template
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
        $__internal_a1b1bd4516299da482674b0e6eb5859be23cb82b1cecc97881d0de02a55db3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b1bd4516299da482674b0e6eb5859be23cb82b1cecc97881d0de02a55db3af->enter($__internal_a1b1bd4516299da482674b0e6eb5859be23cb82b1cecc97881d0de02a55db3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        $__internal_7ca251c548f5185ec37444c9592c68e35a7f57eac0ed4d6a2889519475355360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca251c548f5185ec37444c9592c68e35a7f57eac0ed4d6a2889519475355360->enter($__internal_7ca251c548f5185ec37444c9592c68e35a7f57eac0ed4d6a2889519475355360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show") || twig_in_filter("edit", $this->getAttribute((isset($context["backend_config"]) ? $context["backend_config"] : $this->getContext($context, "backend_config")), "disabled_actions", array())))) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_a1b1bd4516299da482674b0e6eb5859be23cb82b1cecc97881d0de02a55db3af->leave($__internal_a1b1bd4516299da482674b0e6eb5859be23cb82b1cecc97881d0de02a55db3af_prof);

        
        $__internal_7ca251c548f5185ec37444c9592c68e35a7f57eac0ed4d6a2889519475355360->leave($__internal_7ca251c548f5185ec37444c9592c68e35a7f57eac0ed4d6a2889519475355360_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' or ('edit' in backend_config.disabled_actions) %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "EasyAdminBundle:default:field_toggle.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_toggle.html.twig");
    }
}
