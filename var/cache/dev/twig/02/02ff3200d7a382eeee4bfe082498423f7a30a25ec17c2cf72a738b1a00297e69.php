<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_ba6373570de84a7f914d31e49997f72e2c50d010c483be895dcc1efb7eb4452c extends Twig_Template
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
        $__internal_e528cb6c4bbec08abf27823d704e18bbc2a1153a72967f06dec1b23e1c03022a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e528cb6c4bbec08abf27823d704e18bbc2a1153a72967f06dec1b23e1c03022a->enter($__internal_e528cb6c4bbec08abf27823d704e18bbc2a1153a72967f06dec1b23e1c03022a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_45a8f636b75b25d644eef81b40d4e3e1625cdc60ccd7c4df575e88181cbbccfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a8f636b75b25d644eef81b40d4e3e1625cdc60ccd7c4df575e88181cbbccfc->enter($__internal_45a8f636b75b25d644eef81b40d4e3e1625cdc60ccd7c4df575e88181cbbccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_e528cb6c4bbec08abf27823d704e18bbc2a1153a72967f06dec1b23e1c03022a->leave($__internal_e528cb6c4bbec08abf27823d704e18bbc2a1153a72967f06dec1b23e1c03022a_prof);

        
        $__internal_45a8f636b75b25d644eef81b40d4e3e1625cdc60ccd7c4df575e88181cbbccfc->leave($__internal_45a8f636b75b25d644eef81b40d4e3e1625cdc60ccd7c4df575e88181cbbccfc_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
