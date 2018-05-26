<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_963397ba686f0dd33c20caab9e61c50bae7e2a2ba9b8dab29cb67e89cf2cb169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03de4e04d5c9c335023c5d28334a08f95ba12a4d4f1d9fd10b2add5aa05ba0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03de4e04d5c9c335023c5d28334a08f95ba12a4d4f1d9fd10b2add5aa05ba0c3->enter($__internal_03de4e04d5c9c335023c5d28334a08f95ba12a4d4f1d9fd10b2add5aa05ba0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"]) ? $context["__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"] : $this->getContext($context, "__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"]) ? $context["__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"] : $this->getContext($context, "__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03de4e04d5c9c335023c5d28334a08f95ba12a4d4f1d9fd10b2add5aa05ba0c3->leave($__internal_03de4e04d5c9c335023c5d28334a08f95ba12a4d4f1d9fd10b2add5aa05ba0c3_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_96acb95459b2894236e256077fe327edc70bff9d219df1e97b04c35615087134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96acb95459b2894236e256077fe327edc70bff9d219df1e97b04c35615087134->enter($__internal_96acb95459b2894236e256077fe327edc70bff9d219df1e97b04c35615087134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_96acb95459b2894236e256077fe327edc70bff9d219df1e97b04c35615087134->leave($__internal_96acb95459b2894236e256077fe327edc70bff9d219df1e97b04c35615087134_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c9ee5552fd7d365d094f8f34e56fe81bb240730897f8ce9b14b33159c42d4f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ee5552fd7d365d094f8f34e56fe81bb240730897f8ce9b14b33159c42d4f4c->enter($__internal_c9ee5552fd7d365d094f8f34e56fe81bb240730897f8ce9b14b33159c42d4f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_c9ee5552fd7d365d094f8f34e56fe81bb240730897f8ce9b14b33159c42d4f4c->leave($__internal_c9ee5552fd7d365d094f8f34e56fe81bb240730897f8ce9b14b33159c42d4f4c_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c4e67b36f155dd948ee7483a7f579cad3ea990c0348d8ce6b6ed5227b9702cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e67b36f155dd948ee7483a7f579cad3ea990c0348d8ce6b6ed5227b9702cc2->enter($__internal_c4e67b36f155dd948ee7483a7f579cad3ea990c0348d8ce6b6ed5227b9702cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"]) ? $context["__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1"] : $this->getContext($context, "__internal_add41cad36eb38b8967a957990b2c98a8c62a96db7320bf4ec087053b22ecbe1")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4e67b36f155dd948ee7483a7f579cad3ea990c0348d8ce6b6ed5227b9702cc2->leave($__internal_c4e67b36f155dd948ee7483a7f579cad3ea990c0348d8ce6b6ed5227b9702cc2_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_37995a2a8cea819a83010ccf8af98889682b8b4099292b92108aee7b3cd23e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37995a2a8cea819a83010ccf8af98889682b8b4099292b92108aee7b3cd23e21->enter($__internal_37995a2a8cea819a83010ccf8af98889682b8b4099292b92108aee7b3cd23e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_37995a2a8cea819a83010ccf8af98889682b8b4099292b92108aee7b3cd23e21->leave($__internal_37995a2a8cea819a83010ccf8af98889682b8b4099292b92108aee7b3cd23e21_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_998ad65625fa53b12424d7c56645125328623654da6d24f11a471ca5eb0a4838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998ad65625fa53b12424d7c56645125328623654da6d24f11a471ca5eb0a4838->enter($__internal_998ad65625fa53b12424d7c56645125328623654da6d24f11a471ca5eb0a4838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_998ad65625fa53b12424d7c56645125328623654da6d24f11a471ca5eb0a4838->leave($__internal_998ad65625fa53b12424d7c56645125328623654da6d24f11a471ca5eb0a4838_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_9bcded7b28273df583a8cb6da2a23b2766eb59569c1dcd346fd1a26d5e0c3df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcded7b28273df583a8cb6da2a23b2766eb59569c1dcd346fd1a26d5e0c3df1->enter($__internal_9bcded7b28273df583a8cb6da2a23b2766eb59569c1dcd346fd1a26d5e0c3df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_9bcded7b28273df583a8cb6da2a23b2766eb59569c1dcd346fd1a26d5e0c3df1->leave($__internal_9bcded7b28273df583a8cb6da2a23b2766eb59569c1dcd346fd1a26d5e0c3df1_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_65c059d1fa5abc4e9eefd8364c145156594c5d29d72b2c2537c9bcf64af44ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c059d1fa5abc4e9eefd8364c145156594c5d29d72b2c2537c9bcf64af44ca6->enter($__internal_65c059d1fa5abc4e9eefd8364c145156594c5d29d72b2c2537c9bcf64af44ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_65c059d1fa5abc4e9eefd8364c145156594c5d29d72b2c2537c9bcf64af44ca6->leave($__internal_65c059d1fa5abc4e9eefd8364c145156594c5d29d72b2c2537c9bcf64af44ca6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  173 => 42,  165 => 38,  159 => 37,  151 => 33,  149 => 32,  148 => 31,  147 => 30,  146 => 29,  145 => 28,  143 => 26,  137 => 25,  127 => 22,  121 => 21,  114 => 25,  111 => 24,  108 => 21,  102 => 20,  92 => 16,  91 => 5,  89 => 16,  86 => 15,  84 => 14,  78 => 13,  66 => 11,  54 => 10,  47 => 8,  45 => 6,  44 => 5,  43 => 6,  42 => 5,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
