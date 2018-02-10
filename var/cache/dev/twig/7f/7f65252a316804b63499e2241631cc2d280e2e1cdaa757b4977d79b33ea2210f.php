<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_1eadbab23d60575f022d24f481279786dd527f593c5aff93b54b527da22ba3dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e219dd358db06c402642776ff7c1a4b43881d366bc5996eca89fdbbbf4f7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e219dd358db06c402642776ff7c1a4b43881d366bc5996eca89fdbbbf4f7fe->enter($__internal_88e219dd358db06c402642776ff7c1a4b43881d366bc5996eca89fdbbbf4f7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_684b0f38bc4baa3c276f5e2fe38515ca210734ffcf663a011517ba803957cf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684b0f38bc4baa3c276f5e2fe38515ca210734ffcf663a011517ba803957cf01->enter($__internal_684b0f38bc4baa3c276f5e2fe38515ca210734ffcf663a011517ba803957cf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e219dd358db06c402642776ff7c1a4b43881d366bc5996eca89fdbbbf4f7fe->leave($__internal_88e219dd358db06c402642776ff7c1a4b43881d366bc5996eca89fdbbbf4f7fe_prof);

        
        $__internal_684b0f38bc4baa3c276f5e2fe38515ca210734ffcf663a011517ba803957cf01->leave($__internal_684b0f38bc4baa3c276f5e2fe38515ca210734ffcf663a011517ba803957cf01_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4615ef98292e8e5afbc15a455ff53e5c04ea82c3d6cc3fe978b03ed097a93a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4615ef98292e8e5afbc15a455ff53e5c04ea82c3d6cc3fe978b03ed097a93a99->enter($__internal_4615ef98292e8e5afbc15a455ff53e5c04ea82c3d6cc3fe978b03ed097a93a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1c758cb62ad40b776ff6f7e87c7050d403fbeca66d2829e91d56a1a9c1e10e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c758cb62ad40b776ff6f7e87c7050d403fbeca66d2829e91d56a1a9c1e10e48->enter($__internal_1c758cb62ad40b776ff6f7e87c7050d403fbeca66d2829e91d56a1a9c1e10e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1c758cb62ad40b776ff6f7e87c7050d403fbeca66d2829e91d56a1a9c1e10e48->leave($__internal_1c758cb62ad40b776ff6f7e87c7050d403fbeca66d2829e91d56a1a9c1e10e48_prof);

        
        $__internal_4615ef98292e8e5afbc15a455ff53e5c04ea82c3d6cc3fe978b03ed097a93a99->leave($__internal_4615ef98292e8e5afbc15a455ff53e5c04ea82c3d6cc3fe978b03ed097a93a99_prof);

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
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
