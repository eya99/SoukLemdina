<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a63b867c8551b0baa95baafb641772f4e0295a992a49edce5f989886cbce8644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 4);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1e92f51a865062f9df3982bf94c92d3a088849ea85721520ecdeefed092108f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e92f51a865062f9df3982bf94c92d3a088849ea85721520ecdeefed092108f->enter($__internal_d1e92f51a865062f9df3982bf94c92d3a088849ea85721520ecdeefed092108f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f269d3186c41832361f87e097e8f56412899971e2f65b0239078b78551e6065b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f269d3186c41832361f87e097e8f56412899971e2f65b0239078b78551e6065b->enter($__internal_f269d3186c41832361f87e097e8f56412899971e2f65b0239078b78551e6065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e92f51a865062f9df3982bf94c92d3a088849ea85721520ecdeefed092108f->leave($__internal_d1e92f51a865062f9df3982bf94c92d3a088849ea85721520ecdeefed092108f_prof);

        
        $__internal_f269d3186c41832361f87e097e8f56412899971e2f65b0239078b78551e6065b->leave($__internal_f269d3186c41832361f87e097e8f56412899971e2f65b0239078b78551e6065b_prof);

    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        $__internal_59d6acd4b7473099c1a4c1dbe2aafb3849ebdd26585235ad1f37658588e70d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d6acd4b7473099c1a4c1dbe2aafb3849ebdd26585235ad1f37658588e70d9e->enter($__internal_59d6acd4b7473099c1a4c1dbe2aafb3849ebdd26585235ad1f37658588e70d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_568ab942b126d693e704d4e4a08b138a9b3cc9f915e6ea6496963fcf5f4d71f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568ab942b126d693e704d4e4a08b138a9b3cc9f915e6ea6496963fcf5f4d71f2->enter($__internal_568ab942b126d693e704d4e4a08b138a9b3cc9f915e6ea6496963fcf5f4d71f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <meta http-equiv=\"refresh\" content=\"3;url=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\"/>
";
        
        $__internal_568ab942b126d693e704d4e4a08b138a9b3cc9f915e6ea6496963fcf5f4d71f2->leave($__internal_568ab942b126d693e704d4e4a08b138a9b3cc9f915e6ea6496963fcf5f4d71f2_prof);

        
        $__internal_59d6acd4b7473099c1a4c1dbe2aafb3849ebdd26585235ad1f37658588e70d9e->leave($__internal_59d6acd4b7473099c1a4c1dbe2aafb3849ebdd26585235ad1f37658588e70d9e_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef6cb417c7a94e98089e225235d4d5ae582a71619a9161e408be91a22a7b41e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6cb417c7a94e98089e225235d4d5ae582a71619a9161e408be91a22a7b41e0->enter($__internal_ef6cb417c7a94e98089e225235d4d5ae582a71619a9161e408be91a22a7b41e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_743eeb4d0b48a8e583e62d1b2d9f7769b0c32162ad0b73c7b850f4076f7e83b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743eeb4d0b48a8e583e62d1b2d9f7769b0c32162ad0b73c7b850f4076f7e83b1->enter($__internal_743eeb4d0b48a8e583e62d1b2d9f7769b0c32162ad0b73c7b850f4076f7e83b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_743eeb4d0b48a8e583e62d1b2d9f7769b0c32162ad0b73c7b850f4076f7e83b1->leave($__internal_743eeb4d0b48a8e583e62d1b2d9f7769b0c32162ad0b73c7b850f4076f7e83b1_prof);

        
        $__internal_ef6cb417c7a94e98089e225235d4d5ae582a71619a9161e408be91a22a7b41e0->leave($__internal_ef6cb417c7a94e98089e225235d4d5ae582a71619a9161e408be91a22a7b41e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  63 => 8,  50 => 2,  41 => 1,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block head %}
    <meta http-equiv=\"refresh\" content=\"3;url={{ path('fos_visitor_home') }}\"/>
{% endblock %}
{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
