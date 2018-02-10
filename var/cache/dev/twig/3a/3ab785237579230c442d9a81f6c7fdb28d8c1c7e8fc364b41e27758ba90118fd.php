<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_362783e924dc52eba0ec0adea5b5dced2f28ad1496ea6e059b2d4888597e1116 extends Twig_Template
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
        $__internal_8bba895a50df446be71f958c9b0d5429a35895a57324b70e7d6f0ea149b6c99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bba895a50df446be71f958c9b0d5429a35895a57324b70e7d6f0ea149b6c99f->enter($__internal_8bba895a50df446be71f958c9b0d5429a35895a57324b70e7d6f0ea149b6c99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_8374555cd925910cfb224dea29d3801e6d735dc4acf88eb69a79a7e30e0cc3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8374555cd925910cfb224dea29d3801e6d735dc4acf88eb69a79a7e30e0cc3b7->enter($__internal_8374555cd925910cfb224dea29d3801e6d735dc4acf88eb69a79a7e30e0cc3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_8bba895a50df446be71f958c9b0d5429a35895a57324b70e7d6f0ea149b6c99f->leave($__internal_8bba895a50df446be71f958c9b0d5429a35895a57324b70e7d6f0ea149b6c99f_prof);

        
        $__internal_8374555cd925910cfb224dea29d3801e6d735dc4acf88eb69a79a7e30e0cc3b7->leave($__internal_8374555cd925910cfb224dea29d3801e6d735dc4acf88eb69a79a7e30e0cc3b7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
