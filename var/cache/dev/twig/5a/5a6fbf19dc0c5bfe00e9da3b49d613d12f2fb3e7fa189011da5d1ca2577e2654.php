<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_2d1a6749422c0ccc9e71efcc803c962874a3ec4a8397a4fef7e9ca29b4d7e304 extends Twig_Template
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
        $__internal_3f9d753bd2dd2dacb120fc6c8ad9bb52b308bca5f7e0aa83117d362491eca79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9d753bd2dd2dacb120fc6c8ad9bb52b308bca5f7e0aa83117d362491eca79d->enter($__internal_3f9d753bd2dd2dacb120fc6c8ad9bb52b308bca5f7e0aa83117d362491eca79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_ad91ebc41d8a73ab51fe4daeefdc07a5ccadf2fa28873c54ca62cba2ed042686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad91ebc41d8a73ab51fe4daeefdc07a5ccadf2fa28873c54ca62cba2ed042686->enter($__internal_ad91ebc41d8a73ab51fe4daeefdc07a5ccadf2fa28873c54ca62cba2ed042686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_3f9d753bd2dd2dacb120fc6c8ad9bb52b308bca5f7e0aa83117d362491eca79d->leave($__internal_3f9d753bd2dd2dacb120fc6c8ad9bb52b308bca5f7e0aa83117d362491eca79d_prof);

        
        $__internal_ad91ebc41d8a73ab51fe4daeefdc07a5ccadf2fa28873c54ca62cba2ed042686->leave($__internal_ad91ebc41d8a73ab51fe4daeefdc07a5ccadf2fa28873c54ca62cba2ed042686_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_guid.html.twig");
    }
}
