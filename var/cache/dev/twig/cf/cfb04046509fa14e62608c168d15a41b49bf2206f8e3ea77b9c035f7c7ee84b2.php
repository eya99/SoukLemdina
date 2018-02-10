<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_16350bf001733a06a7ae63d07fba7ee12b45d692c3491f9b2f5460493194e82a extends Twig_Template
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
        $__internal_efbd199bc86ef1da2dfed0f6eb0d323026e2f4d3501ee348ab65d44896a42ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbd199bc86ef1da2dfed0f6eb0d323026e2f4d3501ee348ab65d44896a42ea9->enter($__internal_efbd199bc86ef1da2dfed0f6eb0d323026e2f4d3501ee348ab65d44896a42ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_bafc6ac7e02200babe7ed1f7b4ef5c117f9082e04cc7a75f90309eb6c96a9fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafc6ac7e02200babe7ed1f7b4ef5c117f9082e04cc7a75f90309eb6c96a9fd7->enter($__internal_bafc6ac7e02200babe7ed1f7b4ef5c117f9082e04cc7a75f90309eb6c96a9fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_efbd199bc86ef1da2dfed0f6eb0d323026e2f4d3501ee348ab65d44896a42ea9->leave($__internal_efbd199bc86ef1da2dfed0f6eb0d323026e2f4d3501ee348ab65d44896a42ea9_prof);

        
        $__internal_bafc6ac7e02200babe7ed1f7b4ef5c117f9082e04cc7a75f90309eb6c96a9fd7->leave($__internal_bafc6ac7e02200babe7ed1f7b4ef5c117f9082e04cc7a75f90309eb6c96a9fd7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
