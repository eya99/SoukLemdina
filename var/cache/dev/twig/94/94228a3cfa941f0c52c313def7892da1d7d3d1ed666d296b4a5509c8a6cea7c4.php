<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_3e97e7bf4e9239596ea7026a641de266d102cf0444a1c9a6f214c43857106aa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_983ade21dd5cf3c30a48fc449c09fe6007417bb64bd759d0cf1c9687f516434c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983ade21dd5cf3c30a48fc449c09fe6007417bb64bd759d0cf1c9687f516434c->enter($__internal_983ade21dd5cf3c30a48fc449c09fe6007417bb64bd759d0cf1c9687f516434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_92e552a94e99e60c7d68bc2f2aadc536bdffa6cee70ee599528a1641e7db959e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e552a94e99e60c7d68bc2f2aadc536bdffa6cee70ee599528a1641e7db959e->enter($__internal_92e552a94e99e60c7d68bc2f2aadc536bdffa6cee70ee599528a1641e7db959e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_983ade21dd5cf3c30a48fc449c09fe6007417bb64bd759d0cf1c9687f516434c->leave($__internal_983ade21dd5cf3c30a48fc449c09fe6007417bb64bd759d0cf1c9687f516434c_prof);

        
        $__internal_92e552a94e99e60c7d68bc2f2aadc536bdffa6cee70ee599528a1641e7db959e->leave($__internal_92e552a94e99e60c7d68bc2f2aadc536bdffa6cee70ee599528a1641e7db959e_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4c70322c8bb8931aa6107936d83c5939cd9f2b6eb976c0a95de437c73b0d2e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c70322c8bb8931aa6107936d83c5939cd9f2b6eb976c0a95de437c73b0d2e20->enter($__internal_4c70322c8bb8931aa6107936d83c5939cd9f2b6eb976c0a95de437c73b0d2e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_28a70855d6b89d7fd3efb0ac45624531a97d70c4ee3056e8dc5fce3cb4fb6093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a70855d6b89d7fd3efb0ac45624531a97d70c4ee3056e8dc5fce3cb4fb6093->enter($__internal_28a70855d6b89d7fd3efb0ac45624531a97d70c4ee3056e8dc5fce3cb4fb6093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_28a70855d6b89d7fd3efb0ac45624531a97d70c4ee3056e8dc5fce3cb4fb6093->leave($__internal_28a70855d6b89d7fd3efb0ac45624531a97d70c4ee3056e8dc5fce3cb4fb6093_prof);

        
        $__internal_4c70322c8bb8931aa6107936d83c5939cd9f2b6eb976c0a95de437c73b0d2e20->leave($__internal_4c70322c8bb8931aa6107936d83c5939cd9f2b6eb976c0a95de437c73b0d2e20_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b30619155a861355ddde387af953c9b69775ffee56f294826aaca58bb4337cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b30619155a861355ddde387af953c9b69775ffee56f294826aaca58bb4337cd9->enter($__internal_b30619155a861355ddde387af953c9b69775ffee56f294826aaca58bb4337cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_09301fabc340e735a0f2c724eb2a7403505a9b10d5115b900f58c288a4c1910e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09301fabc340e735a0f2c724eb2a7403505a9b10d5115b900f58c288a4c1910e->enter($__internal_09301fabc340e735a0f2c724eb2a7403505a9b10d5115b900f58c288a4c1910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_09301fabc340e735a0f2c724eb2a7403505a9b10d5115b900f58c288a4c1910e->leave($__internal_09301fabc340e735a0f2c724eb2a7403505a9b10d5115b900f58c288a4c1910e_prof);

        
        $__internal_b30619155a861355ddde387af953c9b69775ffee56f294826aaca58bb4337cd9->leave($__internal_b30619155a861355ddde387af953c9b69775ffee56f294826aaca58bb4337cd9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6cc991b8c344dda4a08b87b3aa5f8770ea8e69cdbbf454bf5310b666242d38a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc991b8c344dda4a08b87b3aa5f8770ea8e69cdbbf454bf5310b666242d38a6->enter($__internal_6cc991b8c344dda4a08b87b3aa5f8770ea8e69cdbbf454bf5310b666242d38a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_382dd13ead1514ef6951017ecb35a0dee05dd5b54981747b6717e77ee68a61db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382dd13ead1514ef6951017ecb35a0dee05dd5b54981747b6717e77ee68a61db->enter($__internal_382dd13ead1514ef6951017ecb35a0dee05dd5b54981747b6717e77ee68a61db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_382dd13ead1514ef6951017ecb35a0dee05dd5b54981747b6717e77ee68a61db->leave($__internal_382dd13ead1514ef6951017ecb35a0dee05dd5b54981747b6717e77ee68a61db_prof);

        
        $__internal_6cc991b8c344dda4a08b87b3aa5f8770ea8e69cdbbf454bf5310b666242d38a6->leave($__internal_6cc991b8c344dda4a08b87b3aa5f8770ea8e69cdbbf454bf5310b666242d38a6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
