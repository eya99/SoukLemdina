<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_05e858fff68e9b1dd8607f7f6e4ec4e7667fcc072ae0add31184ce26a71968f7 extends Twig_Template
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
        $__internal_322d5ca849fb35024e26369389a94cde54c8032589b23844f1503622b331f42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322d5ca849fb35024e26369389a94cde54c8032589b23844f1503622b331f42c->enter($__internal_322d5ca849fb35024e26369389a94cde54c8032589b23844f1503622b331f42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_fe8691575ccebd53b5a8dce5bfb1f5eb97ae594e410de082159b403fb1643f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8691575ccebd53b5a8dce5bfb1f5eb97ae594e410de082159b403fb1643f64->enter($__internal_fe8691575ccebd53b5a8dce5bfb1f5eb97ae594e410de082159b403fb1643f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_322d5ca849fb35024e26369389a94cde54c8032589b23844f1503622b331f42c->leave($__internal_322d5ca849fb35024e26369389a94cde54c8032589b23844f1503622b331f42c_prof);

        
        $__internal_fe8691575ccebd53b5a8dce5bfb1f5eb97ae594e410de082159b403fb1643f64->leave($__internal_fe8691575ccebd53b5a8dce5bfb1f5eb97ae594e410de082159b403fb1643f64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Group/show_content.html.twig");
    }
}
