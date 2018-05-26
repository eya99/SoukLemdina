<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_f2c258c57f21f8944301cba0ec4310af6121dddbf44262442b9f57536e2396de extends Twig_Template
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
        $__internal_9837ab4dcb0af56f3375ebbeac630af3fe154d2f5d31d113cfb6e952532dd938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9837ab4dcb0af56f3375ebbeac630af3fe154d2f5d31d113cfb6e952532dd938->enter($__internal_9837ab4dcb0af56f3375ebbeac630af3fe154d2f5d31d113cfb6e952532dd938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_07b267fc1df9d3cbb76de6bb9d320fe8089ff2139b486cf9cf82de22960ee875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b267fc1df9d3cbb76de6bb9d320fe8089ff2139b486cf9cf82de22960ee875->enter($__internal_07b267fc1df9d3cbb76de6bb9d320fe8089ff2139b486cf9cf82de22960ee875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_9837ab4dcb0af56f3375ebbeac630af3fe154d2f5d31d113cfb6e952532dd938->leave($__internal_9837ab4dcb0af56f3375ebbeac630af3fe154d2f5d31d113cfb6e952532dd938_prof);

        
        $__internal_07b267fc1df9d3cbb76de6bb9d320fe8089ff2139b486cf9cf82de22960ee875->leave($__internal_07b267fc1df9d3cbb76de6bb9d320fe8089ff2139b486cf9cf82de22960ee875_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
