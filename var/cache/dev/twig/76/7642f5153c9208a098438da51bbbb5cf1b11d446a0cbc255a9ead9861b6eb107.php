<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_e38cfbd6600ac5074ddfc8c5961caeb2c701f376436f3e4c11c0de148baa43b0 extends Twig_Template
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
        $__internal_19f61835538f0ceccf3b6a37b3098498520b13907e6f880044120560b8e661ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f61835538f0ceccf3b6a37b3098498520b13907e6f880044120560b8e661ab->enter($__internal_19f61835538f0ceccf3b6a37b3098498520b13907e6f880044120560b8e661ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_a7b58597f492fb050a201dc883b77e7b791c9ad4722f1e4aaa1761d12bcb6377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b58597f492fb050a201dc883b77e7b791c9ad4722f1e4aaa1761d12bcb6377->enter($__internal_a7b58597f492fb050a201dc883b77e7b791c9ad4722f1e4aaa1761d12bcb6377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_19f61835538f0ceccf3b6a37b3098498520b13907e6f880044120560b8e661ab->leave($__internal_19f61835538f0ceccf3b6a37b3098498520b13907e6f880044120560b8e661ab_prof);

        
        $__internal_a7b58597f492fb050a201dc883b77e7b791c9ad4722f1e4aaa1761d12bcb6377->leave($__internal_a7b58597f492fb050a201dc883b77e7b791c9ad4722f1e4aaa1761d12bcb6377_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
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
", "EasyAdminBundle:default:field_id.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
