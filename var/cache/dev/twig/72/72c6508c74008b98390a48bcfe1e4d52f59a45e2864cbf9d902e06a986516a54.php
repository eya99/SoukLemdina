<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_25f6df6d2a1c652124fde6fa2152d9ce252872bd982d4136020954aaa7653e7d extends Twig_Template
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
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6729e40ac73e92058944039cbd15aa33aa8965be0552ed602e0c0989b01c22aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6729e40ac73e92058944039cbd15aa33aa8965be0552ed602e0c0989b01c22aa->enter($__internal_6729e40ac73e92058944039cbd15aa33aa8965be0552ed602e0c0989b01c22aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_1cb4dd938e2454aea08344d60171381de69d795535ed653c2ecbd7898421edf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb4dd938e2454aea08344d60171381de69d795535ed653c2ecbd7898421edf2->enter($__internal_1cb4dd938e2454aea08344d60171381de69d795535ed653c2ecbd7898421edf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"]) ? $context["__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"] : $this->getContext($context, "__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"]) ? $context["__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"] : $this->getContext($context, "__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6729e40ac73e92058944039cbd15aa33aa8965be0552ed602e0c0989b01c22aa->leave($__internal_6729e40ac73e92058944039cbd15aa33aa8965be0552ed602e0c0989b01c22aa_prof);

        
        $__internal_1cb4dd938e2454aea08344d60171381de69d795535ed653c2ecbd7898421edf2->leave($__internal_1cb4dd938e2454aea08344d60171381de69d795535ed653c2ecbd7898421edf2_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3680865ca6f4783dc540b38af779d28489c6231047c44143dc201c7b2c1ad58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3680865ca6f4783dc540b38af779d28489c6231047c44143dc201c7b2c1ad58d->enter($__internal_3680865ca6f4783dc540b38af779d28489c6231047c44143dc201c7b2c1ad58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_f3d8b4d7c0e030e1e74b03a38cf202f6110569d6c645ff2c25208ac604667e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d8b4d7c0e030e1e74b03a38cf202f6110569d6c645ff2c25208ac604667e3e->enter($__internal_f3d8b4d7c0e030e1e74b03a38cf202f6110569d6c645ff2c25208ac604667e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_f3d8b4d7c0e030e1e74b03a38cf202f6110569d6c645ff2c25208ac604667e3e->leave($__internal_f3d8b4d7c0e030e1e74b03a38cf202f6110569d6c645ff2c25208ac604667e3e_prof);

        
        $__internal_3680865ca6f4783dc540b38af779d28489c6231047c44143dc201c7b2c1ad58d->leave($__internal_3680865ca6f4783dc540b38af779d28489c6231047c44143dc201c7b2c1ad58d_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_57464f609c8abbda4f81adb3fc883109d624300da50dc14088234fa327520668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57464f609c8abbda4f81adb3fc883109d624300da50dc14088234fa327520668->enter($__internal_57464f609c8abbda4f81adb3fc883109d624300da50dc14088234fa327520668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_3b2fa9ba1996a94fec8f83e3c5e4295cf0f715a1ad087b7cff1ef43e40ae8448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2fa9ba1996a94fec8f83e3c5e4295cf0f715a1ad087b7cff1ef43e40ae8448->enter($__internal_3b2fa9ba1996a94fec8f83e3c5e4295cf0f715a1ad087b7cff1ef43e40ae8448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3b2fa9ba1996a94fec8f83e3c5e4295cf0f715a1ad087b7cff1ef43e40ae8448->leave($__internal_3b2fa9ba1996a94fec8f83e3c5e4295cf0f715a1ad087b7cff1ef43e40ae8448_prof);

        
        $__internal_57464f609c8abbda4f81adb3fc883109d624300da50dc14088234fa327520668->leave($__internal_57464f609c8abbda4f81adb3fc883109d624300da50dc14088234fa327520668_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_51f4292459372cb6a1bc195e13c6f493f1384260fbf146db261dcf10d9310b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f4292459372cb6a1bc195e13c6f493f1384260fbf146db261dcf10d9310b06->enter($__internal_51f4292459372cb6a1bc195e13c6f493f1384260fbf146db261dcf10d9310b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_a8aa2f3bd57cb0e61f32a14b5a5003032e376ea8286004b7ae58ba37dcec9210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8aa2f3bd57cb0e61f32a14b5a5003032e376ea8286004b7ae58ba37dcec9210->enter($__internal_a8aa2f3bd57cb0e61f32a14b5a5003032e376ea8286004b7ae58ba37dcec9210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"]) ? $context["__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8"] : $this->getContext($context, "__internal_b62d6426e64c41cd32f7b4cf44e6280bc3aaf93d9e6168460757cb201d62beb8")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a8aa2f3bd57cb0e61f32a14b5a5003032e376ea8286004b7ae58ba37dcec9210->leave($__internal_a8aa2f3bd57cb0e61f32a14b5a5003032e376ea8286004b7ae58ba37dcec9210_prof);

        
        $__internal_51f4292459372cb6a1bc195e13c6f493f1384260fbf146db261dcf10d9310b06->leave($__internal_51f4292459372cb6a1bc195e13c6f493f1384260fbf146db261dcf10d9310b06_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_77f4f65c20616f54c24f60e0ae6d8792a2a00a56e0417b2f3aee0cf2d36140d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f4f65c20616f54c24f60e0ae6d8792a2a00a56e0417b2f3aee0cf2d36140d1->enter($__internal_77f4f65c20616f54c24f60e0ae6d8792a2a00a56e0417b2f3aee0cf2d36140d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_be0e0f492e526cc17810131e5247e6b9d11ea154dfea834a8c14506d59ca41ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0e0f492e526cc17810131e5247e6b9d11ea154dfea834a8c14506d59ca41ec->enter($__internal_be0e0f492e526cc17810131e5247e6b9d11ea154dfea834a8c14506d59ca41ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_be0e0f492e526cc17810131e5247e6b9d11ea154dfea834a8c14506d59ca41ec->leave($__internal_be0e0f492e526cc17810131e5247e6b9d11ea154dfea834a8c14506d59ca41ec_prof);

        
        $__internal_77f4f65c20616f54c24f60e0ae6d8792a2a00a56e0417b2f3aee0cf2d36140d1->leave($__internal_77f4f65c20616f54c24f60e0ae6d8792a2a00a56e0417b2f3aee0cf2d36140d1_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_9f9b5fb94585268ea3a84d1f19a3c811f74624c691069e468add73280776c79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9b5fb94585268ea3a84d1f19a3c811f74624c691069e468add73280776c79d->enter($__internal_9f9b5fb94585268ea3a84d1f19a3c811f74624c691069e468add73280776c79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_95776ce348144aec795df7c4c71b1302b81456a7795178d2e9018ddbd651bae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95776ce348144aec795df7c4c71b1302b81456a7795178d2e9018ddbd651bae2->enter($__internal_95776ce348144aec795df7c4c71b1302b81456a7795178d2e9018ddbd651bae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_95776ce348144aec795df7c4c71b1302b81456a7795178d2e9018ddbd651bae2->leave($__internal_95776ce348144aec795df7c4c71b1302b81456a7795178d2e9018ddbd651bae2_prof);

        
        $__internal_9f9b5fb94585268ea3a84d1f19a3c811f74624c691069e468add73280776c79d->leave($__internal_9f9b5fb94585268ea3a84d1f19a3c811f74624c691069e468add73280776c79d_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_9aac4c1ee6f8c46d6d2fc7a5d9f78bd05ce8b65edfd44ce5e44e4c52b93cc6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aac4c1ee6f8c46d6d2fc7a5d9f78bd05ce8b65edfd44ce5e44e4c52b93cc6fc->enter($__internal_9aac4c1ee6f8c46d6d2fc7a5d9f78bd05ce8b65edfd44ce5e44e4c52b93cc6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_7db769f80ccae8d52d09f606fe9480297e9f750051d1a3bd1af1b8aed28655f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db769f80ccae8d52d09f606fe9480297e9f750051d1a3bd1af1b8aed28655f1->enter($__internal_7db769f80ccae8d52d09f606fe9480297e9f750051d1a3bd1af1b8aed28655f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_7db769f80ccae8d52d09f606fe9480297e9f750051d1a3bd1af1b8aed28655f1->leave($__internal_7db769f80ccae8d52d09f606fe9480297e9f750051d1a3bd1af1b8aed28655f1_prof);

        
        $__internal_9aac4c1ee6f8c46d6d2fc7a5d9f78bd05ce8b65edfd44ce5e44e4c52b93cc6fc->leave($__internal_9aac4c1ee6f8c46d6d2fc7a5d9f78bd05ce8b65edfd44ce5e44e4c52b93cc6fc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
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
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
