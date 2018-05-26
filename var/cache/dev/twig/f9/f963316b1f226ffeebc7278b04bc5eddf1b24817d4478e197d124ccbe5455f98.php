<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_8f5b02ff99bbd9229719619a91a7ea93308b9d7b88820146d70438b51971d292 extends Twig_Template
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
        $__internal_a5faa7ebe160b18625ff0a48259444791c16cfa44599296bd06c51a9461eba9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5faa7ebe160b18625ff0a48259444791c16cfa44599296bd06c51a9461eba9b->enter($__internal_a5faa7ebe160b18625ff0a48259444791c16cfa44599296bd06c51a9461eba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_1599a8805a7eaa5ee5fbbd0af6ee7c3c03a810ab0c982048bb43ff029a46c07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1599a8805a7eaa5ee5fbbd0af6ee7c3c03a810ab0c982048bb43ff029a46c07f->enter($__internal_1599a8805a7eaa5ee5fbbd0af6ee7c3c03a810ab0c982048bb43ff029a46c07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_a5faa7ebe160b18625ff0a48259444791c16cfa44599296bd06c51a9461eba9b->leave($__internal_a5faa7ebe160b18625ff0a48259444791c16cfa44599296bd06c51a9461eba9b_prof);

        
        $__internal_1599a8805a7eaa5ee5fbbd0af6ee7c3c03a810ab0c982048bb43ff029a46c07f->leave($__internal_1599a8805a7eaa5ee5fbbd0af6ee7c3c03a810ab0c982048bb43ff029a46c07f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
", "EasyAdminBundle:default:field_text.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
