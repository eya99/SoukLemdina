<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_75089ace502e6c6dbdacbdd4c9ed764d2dc31fee6129371fb4a5743b50f7e2ef extends Twig_Template
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
        $__internal_038f8888f5508e645d55a970dd331be92c90b8fe427a904c054ba42b8fa47877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038f8888f5508e645d55a970dd331be92c90b8fe427a904c054ba42b8fa47877->enter($__internal_038f8888f5508e645d55a970dd331be92c90b8fe427a904c054ba42b8fa47877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        $__internal_8458e5a29e4d5530c6150bb8db28a335116a6f8fe68e4c299ccb9a045fd46498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8458e5a29e4d5530c6150bb8db28a335116a6f8fe68e4c299ccb9a045fd46498->enter($__internal_8458e5a29e4d5530c6150bb8db28a335116a6f8fe68e4c299ccb9a045fd46498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_replace_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_038f8888f5508e645d55a970dd331be92c90b8fe427a904c054ba42b8fa47877->leave($__internal_038f8888f5508e645d55a970dd331be92c90b8fe427a904c054ba42b8fa47877_prof);

        
        $__internal_8458e5a29e4d5530c6150bb8db28a335116a6f8fe68e4c299ccb9a045fd46498->leave($__internal_8458e5a29e4d5530c6150bb8db28a335116a6f8fe68e4c299ccb9a045fd46498_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_url.html.twig";
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
    <a target=\"_blank\" href=\"{{ value }}\">{{ value }}</a>
{% else %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_url.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_url.html.twig");
    }
}
