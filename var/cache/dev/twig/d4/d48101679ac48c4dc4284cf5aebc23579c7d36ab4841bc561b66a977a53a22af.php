<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cfe7953cdf5fe6e74578895debab87a89e3c69b5f922063e78872d7b61a0e771 extends Twig_Template
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
        $__internal_9df4ba7764bd7e0cf1bb32effa9a01ddbf49bd777b8786fd3d6dfa2267016ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df4ba7764bd7e0cf1bb32effa9a01ddbf49bd777b8786fd3d6dfa2267016ec6->enter($__internal_9df4ba7764bd7e0cf1bb32effa9a01ddbf49bd777b8786fd3d6dfa2267016ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_9c3c53500ef64c3b6638cd032e8a51a1e7cffaf330cc8a65d14629c7ee0f1ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3c53500ef64c3b6638cd032e8a51a1e7cffaf330cc8a65d14629c7ee0f1ad1->enter($__internal_9c3c53500ef64c3b6638cd032e8a51a1e7cffaf330cc8a65d14629c7ee0f1ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9df4ba7764bd7e0cf1bb32effa9a01ddbf49bd777b8786fd3d6dfa2267016ec6->leave($__internal_9df4ba7764bd7e0cf1bb32effa9a01ddbf49bd777b8786fd3d6dfa2267016ec6_prof);

        
        $__internal_9c3c53500ef64c3b6638cd032e8a51a1e7cffaf330cc8a65d14629c7ee0f1ad1->leave($__internal_9c3c53500ef64c3b6638cd032e8a51a1e7cffaf330cc8a65d14629c7ee0f1ad1_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
