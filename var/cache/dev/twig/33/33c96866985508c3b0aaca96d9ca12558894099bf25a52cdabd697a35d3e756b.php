<?php

/* EasyAdminBundle:form:bootstrap_3_layout.html.twig */
class __TwigTemplate_bdc34303d5b1b867e9aef5dfd152e173cd62ede95af2e02a67a50553fe5582ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c9eee180bd9c206add70bc2194ddfcc8e31bf4b55de95f29290a036cd7763e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9eee180bd9c206add70bc2194ddfcc8e31bf4b55de95f29290a036cd7763e0->enter($__internal_1c9eee180bd9c206add70bc2194ddfcc8e31bf4b55de95f29290a036cd7763e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

        $__internal_b5d30ba298b33a5e42d1138c5fccd88587a65d6a090708ebb74579f03255c04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d30ba298b33a5e42d1138c5fccd88587a65d6a090708ebb74579f03255c04f->enter($__internal_b5d30ba298b33a5e42d1138c5fccd88587a65d6a090708ebb74579f03255c04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 569
        echo "
";
        // line 571
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 593
        echo "
";
        // line 595
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_1c9eee180bd9c206add70bc2194ddfcc8e31bf4b55de95f29290a036cd7763e0->leave($__internal_1c9eee180bd9c206add70bc2194ddfcc8e31bf4b55de95f29290a036cd7763e0_prof);

        
        $__internal_b5d30ba298b33a5e42d1138c5fccd88587a65d6a090708ebb74579f03255c04f->leave($__internal_b5d30ba298b33a5e42d1138c5fccd88587a65d6a090708ebb74579f03255c04f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_be3373c3818d9787f6aae6d3ed497c00b52d29e7a39101c9cc519d1e55c001b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3373c3818d9787f6aae6d3ed497c00b52d29e7a39101c9cc519d1e55c001b0->enter($__internal_be3373c3818d9787f6aae6d3ed497c00b52d29e7a39101c9cc519d1e55c001b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_4e36406f8bc3dcabbad647d73f227ee92afc25c36bf4a2934bd3241a65f820ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e36406f8bc3dcabbad647d73f227ee92afc25c36bf4a2934bd3241a65f820ef->enter($__internal_4e36406f8bc3dcabbad647d73f227ee92afc25c36bf4a2934bd3241a65f820ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_4e36406f8bc3dcabbad647d73f227ee92afc25c36bf4a2934bd3241a65f820ef->leave($__internal_4e36406f8bc3dcabbad647d73f227ee92afc25c36bf4a2934bd3241a65f820ef_prof);

        
        $__internal_be3373c3818d9787f6aae6d3ed497c00b52d29e7a39101c9cc519d1e55c001b0->leave($__internal_be3373c3818d9787f6aae6d3ed497c00b52d29e7a39101c9cc519d1e55c001b0_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_a57b4e59e7cc730ef90681b7f78aa8a6bf2c216b1993b299b14129275d243b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57b4e59e7cc730ef90681b7f78aa8a6bf2c216b1993b299b14129275d243b53->enter($__internal_a57b4e59e7cc730ef90681b7f78aa8a6bf2c216b1993b299b14129275d243b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_e080b46609ed48443eed9afb4f2cdcc5e2c53f2d0f6bf9eb51dff92c36059ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e080b46609ed48443eed9afb4f2cdcc5e2c53f2d0f6bf9eb51dff92c36059ad2->enter($__internal_e080b46609ed48443eed9afb4f2cdcc5e2c53f2d0f6bf9eb51dff92c36059ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_e080b46609ed48443eed9afb4f2cdcc5e2c53f2d0f6bf9eb51dff92c36059ad2->leave($__internal_e080b46609ed48443eed9afb4f2cdcc5e2c53f2d0f6bf9eb51dff92c36059ad2_prof);

        
        $__internal_a57b4e59e7cc730ef90681b7f78aa8a6bf2c216b1993b299b14129275d243b53->leave($__internal_a57b4e59e7cc730ef90681b7f78aa8a6bf2c216b1993b299b14129275d243b53_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f0cd07136398d04442ab056316e8e5d62560077605320bcd64dcd73f2a85aa8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0cd07136398d04442ab056316e8e5d62560077605320bcd64dcd73f2a85aa8f->enter($__internal_f0cd07136398d04442ab056316e8e5d62560077605320bcd64dcd73f2a85aa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c5f9bbf9e827fbfb053e2641957b4fda481ded34118a59c7e9d799a49a398497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f9bbf9e827fbfb053e2641957b4fda481ded34118a59c7e9d799a49a398497->enter($__internal_c5f9bbf9e827fbfb053e2641957b4fda481ded34118a59c7e9d799a49a398497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c5f9bbf9e827fbfb053e2641957b4fda481ded34118a59c7e9d799a49a398497->leave($__internal_c5f9bbf9e827fbfb053e2641957b4fda481ded34118a59c7e9d799a49a398497_prof);

        
        $__internal_f0cd07136398d04442ab056316e8e5d62560077605320bcd64dcd73f2a85aa8f->leave($__internal_f0cd07136398d04442ab056316e8e5d62560077605320bcd64dcd73f2a85aa8f_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c624e4c9655404934c4289ddeb471a7eaf1ea53d9a5f4e6acfd0a1ca7a736e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c624e4c9655404934c4289ddeb471a7eaf1ea53d9a5f4e6acfd0a1ca7a736e32->enter($__internal_c624e4c9655404934c4289ddeb471a7eaf1ea53d9a5f4e6acfd0a1ca7a736e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_016dd9174854b5588b049e51e4e1fc889b320485d9b0741897d544b29ebe11de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016dd9174854b5588b049e51e4e1fc889b320485d9b0741897d544b29ebe11de->enter($__internal_016dd9174854b5588b049e51e4e1fc889b320485d9b0741897d544b29ebe11de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_016dd9174854b5588b049e51e4e1fc889b320485d9b0741897d544b29ebe11de->leave($__internal_016dd9174854b5588b049e51e4e1fc889b320485d9b0741897d544b29ebe11de_prof);

        
        $__internal_c624e4c9655404934c4289ddeb471a7eaf1ea53d9a5f4e6acfd0a1ca7a736e32->leave($__internal_c624e4c9655404934c4289ddeb471a7eaf1ea53d9a5f4e6acfd0a1ca7a736e32_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_91c8a5236551d1711ccc6040f1f25263a52b17c25eb889f854d1d394db55faa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c8a5236551d1711ccc6040f1f25263a52b17c25eb889f854d1d394db55faa0->enter($__internal_91c8a5236551d1711ccc6040f1f25263a52b17c25eb889f854d1d394db55faa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d377b9bb8ff8c4c1b25a5dadfaf1fe2153d5ecb9264c07549575083a93b9f148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d377b9bb8ff8c4c1b25a5dadfaf1fe2153d5ecb9264c07549575083a93b9f148->enter($__internal_d377b9bb8ff8c4c1b25a5dadfaf1fe2153d5ecb9264c07549575083a93b9f148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d377b9bb8ff8c4c1b25a5dadfaf1fe2153d5ecb9264c07549575083a93b9f148->leave($__internal_d377b9bb8ff8c4c1b25a5dadfaf1fe2153d5ecb9264c07549575083a93b9f148_prof);

        
        $__internal_91c8a5236551d1711ccc6040f1f25263a52b17c25eb889f854d1d394db55faa0->leave($__internal_91c8a5236551d1711ccc6040f1f25263a52b17c25eb889f854d1d394db55faa0_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4f7c464eef6aeca71e2998918ece3aea59b4707102ea7b0e9511b36e4e68e079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7c464eef6aeca71e2998918ece3aea59b4707102ea7b0e9511b36e4e68e079->enter($__internal_4f7c464eef6aeca71e2998918ece3aea59b4707102ea7b0e9511b36e4e68e079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a5759a91fefe4e9987244c36b526ff960b96fdbd5a36bcafab891cd3274b25aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5759a91fefe4e9987244c36b526ff960b96fdbd5a36bcafab891cd3274b25aa->enter($__internal_a5759a91fefe4e9987244c36b526ff960b96fdbd5a36bcafab891cd3274b25aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 76
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
        
        $__internal_a5759a91fefe4e9987244c36b526ff960b96fdbd5a36bcafab891cd3274b25aa->leave($__internal_a5759a91fefe4e9987244c36b526ff960b96fdbd5a36bcafab891cd3274b25aa_prof);

        
        $__internal_4f7c464eef6aeca71e2998918ece3aea59b4707102ea7b0e9511b36e4e68e079->leave($__internal_4f7c464eef6aeca71e2998918ece3aea59b4707102ea7b0e9511b36e4e68e079_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_9ef05be95ccecfd12e84bf6a75f222105afc4c0359e0709259000cf8977e951d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef05be95ccecfd12e84bf6a75f222105afc4c0359e0709259000cf8977e951d->enter($__internal_9ef05be95ccecfd12e84bf6a75f222105afc4c0359e0709259000cf8977e951d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8c71b358e34ae416afc5a2cd5068c1c2e7edca826de50b7ece0fd7cb2549b6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c71b358e34ae416afc5a2cd5068c1c2e7edca826de50b7ece0fd7cb2549b6f2->enter($__internal_8c71b358e34ae416afc5a2cd5068c1c2e7edca826de50b7ece0fd7cb2549b6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_8c71b358e34ae416afc5a2cd5068c1c2e7edca826de50b7ece0fd7cb2549b6f2->leave($__internal_8c71b358e34ae416afc5a2cd5068c1c2e7edca826de50b7ece0fd7cb2549b6f2_prof);

        
        $__internal_9ef05be95ccecfd12e84bf6a75f222105afc4c0359e0709259000cf8977e951d->leave($__internal_9ef05be95ccecfd12e84bf6a75f222105afc4c0359e0709259000cf8977e951d_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1ac1ea320e940e880c2cfaaf86bc82b28da9ead30fa26ee339a268cf631ab78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac1ea320e940e880c2cfaaf86bc82b28da9ead30fa26ee339a268cf631ab78a->enter($__internal_1ac1ea320e940e880c2cfaaf86bc82b28da9ead30fa26ee339a268cf631ab78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_57a32c55844616234146480bbd0652a17cbb1909d282e58b5417688c299e2124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a32c55844616234146480bbd0652a17cbb1909d282e58b5417688c299e2124->enter($__internal_57a32c55844616234146480bbd0652a17cbb1909d282e58b5417688c299e2124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
        
        $__internal_57a32c55844616234146480bbd0652a17cbb1909d282e58b5417688c299e2124->leave($__internal_57a32c55844616234146480bbd0652a17cbb1909d282e58b5417688c299e2124_prof);

        
        $__internal_1ac1ea320e940e880c2cfaaf86bc82b28da9ead30fa26ee339a268cf631ab78a->leave($__internal_1ac1ea320e940e880c2cfaaf86bc82b28da9ead30fa26ee339a268cf631ab78a_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3506af6105455ae470c964d89783044820013b34b82e193d6f47ce4bd9b06f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3506af6105455ae470c964d89783044820013b34b82e193d6f47ce4bd9b06f8d->enter($__internal_3506af6105455ae470c964d89783044820013b34b82e193d6f47ce4bd9b06f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b467f3bc2feea1ae1786583b86887acb4f3b14d70782239ca5fc74cab5411303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b467f3bc2feea1ae1786583b86887acb4f3b14d70782239ca5fc74cab5411303->enter($__internal_b467f3bc2feea1ae1786583b86887acb4f3b14d70782239ca5fc74cab5411303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 108
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 120
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_b467f3bc2feea1ae1786583b86887acb4f3b14d70782239ca5fc74cab5411303->leave($__internal_b467f3bc2feea1ae1786583b86887acb4f3b14d70782239ca5fc74cab5411303_prof);

        
        $__internal_3506af6105455ae470c964d89783044820013b34b82e193d6f47ce4bd9b06f8d->leave($__internal_3506af6105455ae470c964d89783044820013b34b82e193d6f47ce4bd9b06f8d_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_00400c4106a3e822fef553694588fc635277546f9d07fc214f5c78ff1e7804e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00400c4106a3e822fef553694588fc635277546f9d07fc214f5c78ff1e7804e3->enter($__internal_00400c4106a3e822fef553694588fc635277546f9d07fc214f5c78ff1e7804e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1f6d6bd87d5cfbe043b98e3c62ae7864fe71a6afbc7afa8fa3bf757896f494aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6d6bd87d5cfbe043b98e3c62ae7864fe71a6afbc7afa8fa3bf757896f494aa->enter($__internal_1f6d6bd87d5cfbe043b98e3c62ae7864fe71a6afbc7afa8fa3bf757896f494aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 127
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 136
                echo "</div>";
            }
        }
        
        $__internal_1f6d6bd87d5cfbe043b98e3c62ae7864fe71a6afbc7afa8fa3bf757896f494aa->leave($__internal_1f6d6bd87d5cfbe043b98e3c62ae7864fe71a6afbc7afa8fa3bf757896f494aa_prof);

        
        $__internal_00400c4106a3e822fef553694588fc635277546f9d07fc214f5c78ff1e7804e3->leave($__internal_00400c4106a3e822fef553694588fc635277546f9d07fc214f5c78ff1e7804e3_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_634fb511579620ba5a14fdea61760f8620d50a4b0cf69896e22214fa7abe3f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634fb511579620ba5a14fdea61760f8620d50a4b0cf69896e22214fa7abe3f84->enter($__internal_634fb511579620ba5a14fdea61760f8620d50a4b0cf69896e22214fa7abe3f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_97f47f23dd16944ca27edaf0dba46ff776929bbdb7a8656c4b70b13e2d01e8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f47f23dd16944ca27edaf0dba46ff776929bbdb7a8656c4b70b13e2d01e8b8->enter($__internal_97f47f23dd16944ca27edaf0dba46ff776929bbdb7a8656c4b70b13e2d01e8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 142
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_97f47f23dd16944ca27edaf0dba46ff776929bbdb7a8656c4b70b13e2d01e8b8->leave($__internal_97f47f23dd16944ca27edaf0dba46ff776929bbdb7a8656c4b70b13e2d01e8b8_prof);

        
        $__internal_634fb511579620ba5a14fdea61760f8620d50a4b0cf69896e22214fa7abe3f84->leave($__internal_634fb511579620ba5a14fdea61760f8620d50a4b0cf69896e22214fa7abe3f84_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_eb2872b97fd9e5710b785a39f30bdfc8eee15520876332451565784836bb3673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2872b97fd9e5710b785a39f30bdfc8eee15520876332451565784836bb3673->enter($__internal_eb2872b97fd9e5710b785a39f30bdfc8eee15520876332451565784836bb3673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_53e206ccdf84490139c82b2eb1a068e1709e2681bfcd227dc778d226d6c345f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e206ccdf84490139c82b2eb1a068e1709e2681bfcd227dc778d226d6c345f2->enter($__internal_53e206ccdf84490139c82b2eb1a068e1709e2681bfcd227dc778d226d6c345f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 170
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 174
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 183
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
        
        $__internal_53e206ccdf84490139c82b2eb1a068e1709e2681bfcd227dc778d226d6c345f2->leave($__internal_53e206ccdf84490139c82b2eb1a068e1709e2681bfcd227dc778d226d6c345f2_prof);

        
        $__internal_eb2872b97fd9e5710b785a39f30bdfc8eee15520876332451565784836bb3673->leave($__internal_eb2872b97fd9e5710b785a39f30bdfc8eee15520876332451565784836bb3673_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_616fd4a0a6db63ba75d3998fa3407a6aea19728f0212f6cb5196da5d47f833cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616fd4a0a6db63ba75d3998fa3407a6aea19728f0212f6cb5196da5d47f833cb->enter($__internal_616fd4a0a6db63ba75d3998fa3407a6aea19728f0212f6cb5196da5d47f833cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_382f04baccf90b9a8327b99a02b6a7dc9ff79c991270974de84ff18aceca9366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382f04baccf90b9a8327b99a02b6a7dc9ff79c991270974de84ff18aceca9366->enter($__internal_382f04baccf90b9a8327b99a02b6a7dc9ff79c991270974de84ff18aceca9366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 194
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
        
        $__internal_382f04baccf90b9a8327b99a02b6a7dc9ff79c991270974de84ff18aceca9366->leave($__internal_382f04baccf90b9a8327b99a02b6a7dc9ff79c991270974de84ff18aceca9366_prof);

        
        $__internal_616fd4a0a6db63ba75d3998fa3407a6aea19728f0212f6cb5196da5d47f833cb->leave($__internal_616fd4a0a6db63ba75d3998fa3407a6aea19728f0212f6cb5196da5d47f833cb_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ac5af1e119ed5835db422e0b2c092428197e89decfeefff8450bda2c66eb3355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5af1e119ed5835db422e0b2c092428197e89decfeefff8450bda2c66eb3355->enter($__internal_ac5af1e119ed5835db422e0b2c092428197e89decfeefff8450bda2c66eb3355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_14ca334c2cf6422bb37bb46e7128b7a141fe7ed65fc691c842f257f262385ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ca334c2cf6422bb37bb46e7128b7a141fe7ed65fc691c842f257f262385ac1->enter($__internal_14ca334c2cf6422bb37bb46e7128b7a141fe7ed65fc691c842f257f262385ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 203
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 205
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
        
        $__internal_14ca334c2cf6422bb37bb46e7128b7a141fe7ed65fc691c842f257f262385ac1->leave($__internal_14ca334c2cf6422bb37bb46e7128b7a141fe7ed65fc691c842f257f262385ac1_prof);

        
        $__internal_ac5af1e119ed5835db422e0b2c092428197e89decfeefff8450bda2c66eb3355->leave($__internal_ac5af1e119ed5835db422e0b2c092428197e89decfeefff8450bda2c66eb3355_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_df6f85ebc4bf8c6c66dfe92f333ad6cc0ec5108da2bbf333901ca2993a4b3c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6f85ebc4bf8c6c66dfe92f333ad6cc0ec5108da2bbf333901ca2993a4b3c12->enter($__internal_df6f85ebc4bf8c6c66dfe92f333ad6cc0ec5108da2bbf333901ca2993a4b3c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ec8ed56ec31d297106e3b42e57f3ee1adf187f6ed31c261ad4806ae59801695c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8ed56ec31d297106e3b42e57f3ee1adf187f6ed31c261ad4806ae59801695c->enter($__internal_ec8ed56ec31d297106e3b42e57f3ee1adf187f6ed31c261ad4806ae59801695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ec8ed56ec31d297106e3b42e57f3ee1adf187f6ed31c261ad4806ae59801695c->leave($__internal_ec8ed56ec31d297106e3b42e57f3ee1adf187f6ed31c261ad4806ae59801695c_prof);

        
        $__internal_df6f85ebc4bf8c6c66dfe92f333ad6cc0ec5108da2bbf333901ca2993a4b3c12->leave($__internal_df6f85ebc4bf8c6c66dfe92f333ad6cc0ec5108da2bbf333901ca2993a4b3c12_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7bd1229a6aeaf56bb1a2895acc11768fc8eefd83bc669ed65c5ad565a1d396a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd1229a6aeaf56bb1a2895acc11768fc8eefd83bc669ed65c5ad565a1d396a4->enter($__internal_7bd1229a6aeaf56bb1a2895acc11768fc8eefd83bc669ed65c5ad565a1d396a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_98c60d3988631584c9cd5812cb656d7739eb28c63a5e8f6bf4619e031bd10010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c60d3988631584c9cd5812cb656d7739eb28c63a5e8f6bf4619e031bd10010->enter($__internal_98c60d3988631584c9cd5812cb656d7739eb28c63a5e8f6bf4619e031bd10010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_98c60d3988631584c9cd5812cb656d7739eb28c63a5e8f6bf4619e031bd10010->leave($__internal_98c60d3988631584c9cd5812cb656d7739eb28c63a5e8f6bf4619e031bd10010_prof);

        
        $__internal_7bd1229a6aeaf56bb1a2895acc11768fc8eefd83bc669ed65c5ad565a1d396a4->leave($__internal_7bd1229a6aeaf56bb1a2895acc11768fc8eefd83bc669ed65c5ad565a1d396a4_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_97583ec775db7ea2e0c933f5812129d7103bccb8a607daac5d562078a014d42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97583ec775db7ea2e0c933f5812129d7103bccb8a607daac5d562078a014d42e->enter($__internal_97583ec775db7ea2e0c933f5812129d7103bccb8a607daac5d562078a014d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_1ab0d93eed24f13fdbd46a074dce7e4e872e48fb6f8598d56145abbb94c40910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab0d93eed24f13fdbd46a074dce7e4e872e48fb6f8598d56145abbb94c40910->enter($__internal_1ab0d93eed24f13fdbd46a074dce7e4e872e48fb6f8598d56145abbb94c40910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1ab0d93eed24f13fdbd46a074dce7e4e872e48fb6f8598d56145abbb94c40910->leave($__internal_1ab0d93eed24f13fdbd46a074dce7e4e872e48fb6f8598d56145abbb94c40910_prof);

        
        $__internal_97583ec775db7ea2e0c933f5812129d7103bccb8a607daac5d562078a014d42e->leave($__internal_97583ec775db7ea2e0c933f5812129d7103bccb8a607daac5d562078a014d42e_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1858c2ed1dc1c966b368a8b1c43449bc53c2746c871461510806fba5a0e415e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1858c2ed1dc1c966b368a8b1c43449bc53c2746c871461510806fba5a0e415e0->enter($__internal_1858c2ed1dc1c966b368a8b1c43449bc53c2746c871461510806fba5a0e415e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_97a8886855de03a33035c0efe0a46d6fce7080b91a463e9b533f694a12471a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a8886855de03a33035c0efe0a46d6fce7080b91a463e9b533f694a12471a49->enter($__internal_97a8886855de03a33035c0efe0a46d6fce7080b91a463e9b533f694a12471a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_97a8886855de03a33035c0efe0a46d6fce7080b91a463e9b533f694a12471a49->leave($__internal_97a8886855de03a33035c0efe0a46d6fce7080b91a463e9b533f694a12471a49_prof);

        
        $__internal_1858c2ed1dc1c966b368a8b1c43449bc53c2746c871461510806fba5a0e415e0->leave($__internal_1858c2ed1dc1c966b368a8b1c43449bc53c2746c871461510806fba5a0e415e0_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b1c500c9cc7500ecb3ec2cb92303ad418fccf319c2fd6da640e96ee55cf11658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c500c9cc7500ecb3ec2cb92303ad418fccf319c2fd6da640e96ee55cf11658->enter($__internal_b1c500c9cc7500ecb3ec2cb92303ad418fccf319c2fd6da640e96ee55cf11658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_9689f1cb3d769ac3949e9de0c76206c1e3ee8f1f9797678ea1abd51fd59148fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9689f1cb3d769ac3949e9de0c76206c1e3ee8f1f9797678ea1abd51fd59148fc->enter($__internal_9689f1cb3d769ac3949e9de0c76206c1e3ee8f1f9797678ea1abd51fd59148fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 237
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 245
                echo "        ";
            }
            // line 246
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 247
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 248
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) ? ((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) : ($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
        
        $__internal_9689f1cb3d769ac3949e9de0c76206c1e3ee8f1f9797678ea1abd51fd59148fc->leave($__internal_9689f1cb3d769ac3949e9de0c76206c1e3ee8f1f9797678ea1abd51fd59148fc_prof);

        
        $__internal_b1c500c9cc7500ecb3ec2cb92303ad418fccf319c2fd6da640e96ee55cf11658->leave($__internal_b1c500c9cc7500ecb3ec2cb92303ad418fccf319c2fd6da640e96ee55cf11658_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cb6230270c9d7de95fe0d760cdd3a02dda467a4ee7425213c877b99d479b8579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6230270c9d7de95fe0d760cdd3a02dda467a4ee7425213c877b99d479b8579->enter($__internal_cb6230270c9d7de95fe0d760cdd3a02dda467a4ee7425213c877b99d479b8579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f9bc83f0040ff7d5adda13a31af85cd114f3c6184d48f427dea7e737cb856b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9bc83f0040ff7d5adda13a31af85cd114f3c6184d48f427dea7e737cb856b3->enter($__internal_6f9bc83f0040ff7d5adda13a31af85cd114f3c6184d48f427dea7e737cb856b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 256
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 261
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
        
        $__internal_6f9bc83f0040ff7d5adda13a31af85cd114f3c6184d48f427dea7e737cb856b3->leave($__internal_6f9bc83f0040ff7d5adda13a31af85cd114f3c6184d48f427dea7e737cb856b3_prof);

        
        $__internal_cb6230270c9d7de95fe0d760cdd3a02dda467a4ee7425213c877b99d479b8579->leave($__internal_cb6230270c9d7de95fe0d760cdd3a02dda467a4ee7425213c877b99d479b8579_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_ab62e4edf5acac133b42c55de2c1b1285a4b3df0415bf384744bbacd8375aefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab62e4edf5acac133b42c55de2c1b1285a4b3df0415bf384744bbacd8375aefe->enter($__internal_ab62e4edf5acac133b42c55de2c1b1285a4b3df0415bf384744bbacd8375aefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_c8d1a2f67e0020eb56efd6e72d4669d8aab867cf36cd832926210d13468c0722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d1a2f67e0020eb56efd6e72d4669d8aab867cf36cd832926210d13468c0722->enter($__internal_c8d1a2f67e0020eb56efd6e72d4669d8aab867cf36cd832926210d13468c0722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_c8d1a2f67e0020eb56efd6e72d4669d8aab867cf36cd832926210d13468c0722->leave($__internal_c8d1a2f67e0020eb56efd6e72d4669d8aab867cf36cd832926210d13468c0722_prof);

        
        $__internal_ab62e4edf5acac133b42c55de2c1b1285a4b3df0415bf384744bbacd8375aefe->leave($__internal_ab62e4edf5acac133b42c55de2c1b1285a4b3df0415bf384744bbacd8375aefe_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_31ac761d288cdf3c0e9d65f58be227aa656abae176ac03a02e6dc3978d1d8897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ac761d288cdf3c0e9d65f58be227aa656abae176ac03a02e6dc3978d1d8897->enter($__internal_31ac761d288cdf3c0e9d65f58be227aa656abae176ac03a02e6dc3978d1d8897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_fcf8478a89f581c9eea9bc573cd2a39accaa3c342b6a6f3eb116d98f6dbc54de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf8478a89f581c9eea9bc573cd2a39accaa3c342b6a6f3eb116d98f6dbc54de->enter($__internal_fcf8478a89f581c9eea9bc573cd2a39accaa3c342b6a6f3eb116d98f6dbc54de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 317
        echo "</div>";
        
        $__internal_fcf8478a89f581c9eea9bc573cd2a39accaa3c342b6a6f3eb116d98f6dbc54de->leave($__internal_fcf8478a89f581c9eea9bc573cd2a39accaa3c342b6a6f3eb116d98f6dbc54de_prof);

        
        $__internal_31ac761d288cdf3c0e9d65f58be227aa656abae176ac03a02e6dc3978d1d8897->leave($__internal_31ac761d288cdf3c0e9d65f58be227aa656abae176ac03a02e6dc3978d1d8897_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fe41f0fd86149ebc7cfa156c341246c728b9f82c1ca62b393e09f92308d9d44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe41f0fd86149ebc7cfa156c341246c728b9f82c1ca62b393e09f92308d9d44c->enter($__internal_fe41f0fd86149ebc7cfa156c341246c728b9f82c1ca62b393e09f92308d9d44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_604fd90263d686ca0b82e014126d2943aa5a041af1242a9675854efc19e12eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604fd90263d686ca0b82e014126d2943aa5a041af1242a9675854efc19e12eae->enter($__internal_604fd90263d686ca0b82e014126d2943aa5a041af1242a9675854efc19e12eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_604fd90263d686ca0b82e014126d2943aa5a041af1242a9675854efc19e12eae->leave($__internal_604fd90263d686ca0b82e014126d2943aa5a041af1242a9675854efc19e12eae_prof);

        
        $__internal_fe41f0fd86149ebc7cfa156c341246c728b9f82c1ca62b393e09f92308d9d44c->leave($__internal_fe41f0fd86149ebc7cfa156c341246c728b9f82c1ca62b393e09f92308d9d44c_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fb53487666b03a2b41a1bf8fa1d75f9a004c83a69226532dbd5df726bf4182d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb53487666b03a2b41a1bf8fa1d75f9a004c83a69226532dbd5df726bf4182d1->enter($__internal_fb53487666b03a2b41a1bf8fa1d75f9a004c83a69226532dbd5df726bf4182d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_304c3aadf9df2cd47222bd3e6a7375d51dd8009578ac84b411dae585776b9211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304c3aadf9df2cd47222bd3e6a7375d51dd8009578ac84b411dae585776b9211->enter($__internal_304c3aadf9df2cd47222bd3e6a7375d51dd8009578ac84b411dae585776b9211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_304c3aadf9df2cd47222bd3e6a7375d51dd8009578ac84b411dae585776b9211->leave($__internal_304c3aadf9df2cd47222bd3e6a7375d51dd8009578ac84b411dae585776b9211_prof);

        
        $__internal_fb53487666b03a2b41a1bf8fa1d75f9a004c83a69226532dbd5df726bf4182d1->leave($__internal_fb53487666b03a2b41a1bf8fa1d75f9a004c83a69226532dbd5df726bf4182d1_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_446fc3285865f3c0be1007185c982528ea8ac8e13b57d4a252a1f80206ac1259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446fc3285865f3c0be1007185c982528ea8ac8e13b57d4a252a1f80206ac1259->enter($__internal_446fc3285865f3c0be1007185c982528ea8ac8e13b57d4a252a1f80206ac1259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ba05f96333a9d3d90212d053278c8c83652dc11aaa935c441684c2ccea4050a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba05f96333a9d3d90212d053278c8c83652dc11aaa935c441684c2ccea4050a5->enter($__internal_ba05f96333a9d3d90212d053278c8c83652dc11aaa935c441684c2ccea4050a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba05f96333a9d3d90212d053278c8c83652dc11aaa935c441684c2ccea4050a5->leave($__internal_ba05f96333a9d3d90212d053278c8c83652dc11aaa935c441684c2ccea4050a5_prof);

        
        $__internal_446fc3285865f3c0be1007185c982528ea8ac8e13b57d4a252a1f80206ac1259->leave($__internal_446fc3285865f3c0be1007185c982528ea8ac8e13b57d4a252a1f80206ac1259_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f871b21581fad064884356a3739a12422edb8fd9a9d0223150029f5a0687a11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f871b21581fad064884356a3739a12422edb8fd9a9d0223150029f5a0687a11c->enter($__internal_f871b21581fad064884356a3739a12422edb8fd9a9d0223150029f5a0687a11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_8320f4a61519a46af0d3f49c0856d88a1b45e2292269ff97f00f1831bb4e92f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8320f4a61519a46af0d3f49c0856d88a1b45e2292269ff97f00f1831bb4e92f9->enter($__internal_8320f4a61519a46af0d3f49c0856d88a1b45e2292269ff97f00f1831bb4e92f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8320f4a61519a46af0d3f49c0856d88a1b45e2292269ff97f00f1831bb4e92f9->leave($__internal_8320f4a61519a46af0d3f49c0856d88a1b45e2292269ff97f00f1831bb4e92f9_prof);

        
        $__internal_f871b21581fad064884356a3739a12422edb8fd9a9d0223150029f5a0687a11c->leave($__internal_f871b21581fad064884356a3739a12422edb8fd9a9d0223150029f5a0687a11c_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d414ea9bf173d270d0d6da5c47ebcdb0e4c81ed46ad0890173ccc62a8c88dd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d414ea9bf173d270d0d6da5c47ebcdb0e4c81ed46ad0890173ccc62a8c88dd4c->enter($__internal_d414ea9bf173d270d0d6da5c47ebcdb0e4c81ed46ad0890173ccc62a8c88dd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7420087eb92f6a860b9f7e2a2dc9a8ed99c101ad9ccb40973abfc154ea31f774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7420087eb92f6a860b9f7e2a2dc9a8ed99c101ad9ccb40973abfc154ea31f774->enter($__internal_7420087eb92f6a860b9f7e2a2dc9a8ed99c101ad9ccb40973abfc154ea31f774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_7420087eb92f6a860b9f7e2a2dc9a8ed99c101ad9ccb40973abfc154ea31f774->leave($__internal_7420087eb92f6a860b9f7e2a2dc9a8ed99c101ad9ccb40973abfc154ea31f774_prof);

        
        $__internal_d414ea9bf173d270d0d6da5c47ebcdb0e4c81ed46ad0890173ccc62a8c88dd4c->leave($__internal_d414ea9bf173d270d0d6da5c47ebcdb0e4c81ed46ad0890173ccc62a8c88dd4c_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5fee16b019260b84725db726f5ea0171fe1805106e6871861532fc0724739bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fee16b019260b84725db726f5ea0171fe1805106e6871861532fc0724739bb8->enter($__internal_5fee16b019260b84725db726f5ea0171fe1805106e6871861532fc0724739bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_82de06458784d4ad8e19d8d2f0d040ef353a4e5c2d99cc30bc0ccc3da13d4f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82de06458784d4ad8e19d8d2f0d040ef353a4e5c2d99cc30bc0ccc3da13d4f74->enter($__internal_82de06458784d4ad8e19d8d2f0d040ef353a4e5c2d99cc30bc0ccc3da13d4f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 348
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 351
        echo "</div>";
        
        $__internal_82de06458784d4ad8e19d8d2f0d040ef353a4e5c2d99cc30bc0ccc3da13d4f74->leave($__internal_82de06458784d4ad8e19d8d2f0d040ef353a4e5c2d99cc30bc0ccc3da13d4f74_prof);

        
        $__internal_5fee16b019260b84725db726f5ea0171fe1805106e6871861532fc0724739bb8->leave($__internal_5fee16b019260b84725db726f5ea0171fe1805106e6871861532fc0724739bb8_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0093418a1582fba471584d3d6a5909fbc16c0816c67c2408f06b17443cfd6ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0093418a1582fba471584d3d6a5909fbc16c0816c67c2408f06b17443cfd6ea3->enter($__internal_0093418a1582fba471584d3d6a5909fbc16c0816c67c2408f06b17443cfd6ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_127f8e028fcb3337884d9030d64fbf41783c677ccaaa6eae51ac392a3b4200ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127f8e028fcb3337884d9030d64fbf41783c677ccaaa6eae51ac392a3b4200ae->enter($__internal_127f8e028fcb3337884d9030d64fbf41783c677ccaaa6eae51ac392a3b4200ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 357
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
        
        $__internal_127f8e028fcb3337884d9030d64fbf41783c677ccaaa6eae51ac392a3b4200ae->leave($__internal_127f8e028fcb3337884d9030d64fbf41783c677ccaaa6eae51ac392a3b4200ae_prof);

        
        $__internal_0093418a1582fba471584d3d6a5909fbc16c0816c67c2408f06b17443cfd6ea3->leave($__internal_0093418a1582fba471584d3d6a5909fbc16c0816c67c2408f06b17443cfd6ea3_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_2b14346cfb16fd0f4c5ac899c68ec04cb04a44ac192d84e0d402976c02715288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b14346cfb16fd0f4c5ac899c68ec04cb04a44ac192d84e0d402976c02715288->enter($__internal_2b14346cfb16fd0f4c5ac899c68ec04cb04a44ac192d84e0d402976c02715288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_c055b300f23540a8c798379b154dc3d72327e43364e73c39b3f9d8414353a3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c055b300f23540a8c798379b154dc3d72327e43364e73c39b3f9d8414353a3d5->enter($__internal_c055b300f23540a8c798379b154dc3d72327e43364e73c39b3f9d8414353a3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 376
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_c055b300f23540a8c798379b154dc3d72327e43364e73c39b3f9d8414353a3d5->leave($__internal_c055b300f23540a8c798379b154dc3d72327e43364e73c39b3f9d8414353a3d5_prof);

        
        $__internal_2b14346cfb16fd0f4c5ac899c68ec04cb04a44ac192d84e0d402976c02715288->leave($__internal_2b14346cfb16fd0f4c5ac899c68ec04cb04a44ac192d84e0d402976c02715288_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_6e1203b5345395e235857e609ca2b7b5994ac8948e2c94bd4366e3e2a6b8465c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1203b5345395e235857e609ca2b7b5994ac8948e2c94bd4366e3e2a6b8465c->enter($__internal_6e1203b5345395e235857e609ca2b7b5994ac8948e2c94bd4366e3e2a6b8465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_3729a6fcf59a29ec9581aa7fb55d46c5e54524deb1f3d1620efcfd901e212851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3729a6fcf59a29ec9581aa7fb55d46c5e54524deb1f3d1620efcfd901e212851->enter($__internal_3729a6fcf59a29ec9581aa7fb55d46c5e54524deb1f3d1620efcfd901e212851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_3729a6fcf59a29ec9581aa7fb55d46c5e54524deb1f3d1620efcfd901e212851->leave($__internal_3729a6fcf59a29ec9581aa7fb55d46c5e54524deb1f3d1620efcfd901e212851_prof);

        
        $__internal_6e1203b5345395e235857e609ca2b7b5994ac8948e2c94bd4366e3e2a6b8465c->leave($__internal_6e1203b5345395e235857e609ca2b7b5994ac8948e2c94bd4366e3e2a6b8465c_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_0831450bfd97c11dabb30ced0272d010544fe4340acf63cc4fadbc958343cb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0831450bfd97c11dabb30ced0272d010544fe4340acf63cc4fadbc958343cb5e->enter($__internal_0831450bfd97c11dabb30ced0272d010544fe4340acf63cc4fadbc958343cb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_517552039f19e1174a39d6a7c8d31e0d71546d5e46a5c3b87f18f0ffc6cf73e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517552039f19e1174a39d6a7c8d31e0d71546d5e46a5c3b87f18f0ffc6cf73e3->enter($__internal_517552039f19e1174a39d6a7c8d31e0d71546d5e46a5c3b87f18f0ffc6cf73e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_517552039f19e1174a39d6a7c8d31e0d71546d5e46a5c3b87f18f0ffc6cf73e3->leave($__internal_517552039f19e1174a39d6a7c8d31e0d71546d5e46a5c3b87f18f0ffc6cf73e3_prof);

        
        $__internal_0831450bfd97c11dabb30ced0272d010544fe4340acf63cc4fadbc958343cb5e->leave($__internal_0831450bfd97c11dabb30ced0272d010544fe4340acf63cc4fadbc958343cb5e_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_02ae11eabfcde38bfe3fed6a298c8084ce8ea3643dcea6af9116538d0a505332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ae11eabfcde38bfe3fed6a298c8084ce8ea3643dcea6af9116538d0a505332->enter($__internal_02ae11eabfcde38bfe3fed6a298c8084ce8ea3643dcea6af9116538d0a505332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_022a3794aa5f534846bc49d462edc4a3ef615169e950ea6937f479305c346029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022a3794aa5f534846bc49d462edc4a3ef615169e950ea6937f479305c346029->enter($__internal_022a3794aa5f534846bc49d462edc4a3ef615169e950ea6937f479305c346029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_022a3794aa5f534846bc49d462edc4a3ef615169e950ea6937f479305c346029->leave($__internal_022a3794aa5f534846bc49d462edc4a3ef615169e950ea6937f479305c346029_prof);

        
        $__internal_02ae11eabfcde38bfe3fed6a298c8084ce8ea3643dcea6af9116538d0a505332->leave($__internal_02ae11eabfcde38bfe3fed6a298c8084ce8ea3643dcea6af9116538d0a505332_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_f6baf1b136f9a18f6da3c5b7321eeabb3e099c4971a92eaec522a21fd5f39e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6baf1b136f9a18f6da3c5b7321eeabb3e099c4971a92eaec522a21fd5f39e39->enter($__internal_f6baf1b136f9a18f6da3c5b7321eeabb3e099c4971a92eaec522a21fd5f39e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_0323453cf664ced6cf4cede0ec33fcbb4c553be04ebddacf1f97f424fa4a352d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0323453cf664ced6cf4cede0ec33fcbb4c553be04ebddacf1f97f424fa4a352d->enter($__internal_0323453cf664ced6cf4cede0ec33fcbb4c553be04ebddacf1f97f424fa4a352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_0323453cf664ced6cf4cede0ec33fcbb4c553be04ebddacf1f97f424fa4a352d->leave($__internal_0323453cf664ced6cf4cede0ec33fcbb4c553be04ebddacf1f97f424fa4a352d_prof);

        
        $__internal_f6baf1b136f9a18f6da3c5b7321eeabb3e099c4971a92eaec522a21fd5f39e39->leave($__internal_f6baf1b136f9a18f6da3c5b7321eeabb3e099c4971a92eaec522a21fd5f39e39_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_ff743a629365002e89360e1c322ec51ad2f36dde098dbf0f3e22b5ea4f1f25fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff743a629365002e89360e1c322ec51ad2f36dde098dbf0f3e22b5ea4f1f25fc->enter($__internal_ff743a629365002e89360e1c322ec51ad2f36dde098dbf0f3e22b5ea4f1f25fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_d70b2a2d704d68fb6ee4e673a528b9553917a85ca79583980e55a49ab9a87a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70b2a2d704d68fb6ee4e673a528b9553917a85ca79583980e55a49ab9a87a2e->enter($__internal_d70b2a2d704d68fb6ee4e673a528b9553917a85ca79583980e55a49ab9a87a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d70b2a2d704d68fb6ee4e673a528b9553917a85ca79583980e55a49ab9a87a2e->leave($__internal_d70b2a2d704d68fb6ee4e673a528b9553917a85ca79583980e55a49ab9a87a2e_prof);

        
        $__internal_ff743a629365002e89360e1c322ec51ad2f36dde098dbf0f3e22b5ea4f1f25fc->leave($__internal_ff743a629365002e89360e1c322ec51ad2f36dde098dbf0f3e22b5ea4f1f25fc_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_64d9a141ae1efdc70756ba8decfd07f4ed9ee6af70caa9bed855730a91bf312b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d9a141ae1efdc70756ba8decfd07f4ed9ee6af70caa9bed855730a91bf312b->enter($__internal_64d9a141ae1efdc70756ba8decfd07f4ed9ee6af70caa9bed855730a91bf312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        $__internal_2489203d24acd9796fc28a9edca3e20ad43837a443318aad4b68dcd79311912b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2489203d24acd9796fc28a9edca3e20ad43837a443318aad4b68dcd79311912b->enter($__internal_2489203d24acd9796fc28a9edca3e20ad43837a443318aad4b68dcd79311912b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 448
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_2489203d24acd9796fc28a9edca3e20ad43837a443318aad4b68dcd79311912b->leave($__internal_2489203d24acd9796fc28a9edca3e20ad43837a443318aad4b68dcd79311912b_prof);

        
        $__internal_64d9a141ae1efdc70756ba8decfd07f4ed9ee6af70caa9bed855730a91bf312b->leave($__internal_64d9a141ae1efdc70756ba8decfd07f4ed9ee6af70caa9bed855730a91bf312b_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_f237c42b701696b29015684f6ac8ee7c48af0072c543797b7cd05250bcbb4a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f237c42b701696b29015684f6ac8ee7c48af0072c543797b7cd05250bcbb4a06->enter($__internal_f237c42b701696b29015684f6ac8ee7c48af0072c543797b7cd05250bcbb4a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_be936610fb354ff172a2d688019166b1d59aa360aa8f2c6019dc5e6bb730e2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be936610fb354ff172a2d688019166b1d59aa360aa8f2c6019dc5e6bb730e2dd->enter($__internal_be936610fb354ff172a2d688019166b1d59aa360aa8f2c6019dc5e6bb730e2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 461
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 470
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 471
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 475
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 481
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 482
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 483
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 484
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 485
        echo "
";
        
        $__internal_be936610fb354ff172a2d688019166b1d59aa360aa8f2c6019dc5e6bb730e2dd->leave($__internal_be936610fb354ff172a2d688019166b1d59aa360aa8f2c6019dc5e6bb730e2dd_prof);

        
        $__internal_f237c42b701696b29015684f6ac8ee7c48af0072c543797b7cd05250bcbb4a06->leave($__internal_f237c42b701696b29015684f6ac8ee7c48af0072c543797b7cd05250bcbb4a06_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_7cf8027d7fe07b0c636dcffef52f8c71669ac790e39e05c8d83ea58d0b391b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf8027d7fe07b0c636dcffef52f8c71669ac790e39e05c8d83ea58d0b391b0a->enter($__internal_7cf8027d7fe07b0c636dcffef52f8c71669ac790e39e05c8d83ea58d0b391b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_032a499e630cbc1ffba9631f992dec3564b4519c46599d0085d42f17ed794576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032a499e630cbc1ffba9631f992dec3564b4519c46599d0085d42f17ed794576->enter($__internal_032a499e630cbc1ffba9631f992dec3564b4519c46599d0085d42f17ed794576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 490
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        if ((twig_length_filter($this->env, (isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : $this->getContext($context, "easyadmin_form_tabs"))) > 0)) {
            // line 493
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : $this->getContext($context, "easyadmin_form_tabs")));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 497
                echo "                            <li class=\"";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 498
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 499
                if ((($this->getAttribute($context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 500
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 502
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "label", array(), "array"), "html", null, true);
                echo "
                                    ";
                // line 503
                if (($this->getAttribute($context["tab_config"], "errors", array()) > 0)) {
                    // line 504
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("form.tab.error_badge_title", $this->getAttribute($context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 505
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 508
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_tabs"]) ? $context["easyadmin_form_tabs"] : $this->getContext($context, "easyadmin_form_tabs")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 514
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 516
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 524
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 526
        echo "    </div>
";
        
        $__internal_032a499e630cbc1ffba9631f992dec3564b4519c46599d0085d42f17ed794576->leave($__internal_032a499e630cbc1ffba9631f992dec3564b4519c46599d0085d42f17ed794576_prof);

        
        $__internal_7cf8027d7fe07b0c636dcffef52f8c71669ac790e39e05c8d83ea58d0b391b0a->leave($__internal_7cf8027d7fe07b0c636dcffef52f8c71669ac790e39e05c8d83ea58d0b391b0a_prof);

    }

    // line 529
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        $__internal_88e2f5c5cfba1ed6072948498e4499b5fd17eeec3e31b4bf6060e21e8480688e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e2f5c5cfba1ed6072948498e4499b5fd17eeec3e31b4bf6060e21e8480688e->enter($__internal_88e2f5c5cfba1ed6072948498e4499b5fd17eeec3e31b4bf6060e21e8480688e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        $__internal_1dd7ea4a17886e0ea300edbf93c47ea3d5135507466abd3b86331779b1a1f598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd7ea4a17886e0ea300edbf93c47ea3d5135507466abd3b86331779b1a1f598->enter($__internal_1dd7ea4a17886e0ea300edbf93c47ea3d5135507466abd3b86331779b1a1f598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 530
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !$this->getAttribute($context["group_config"], "form_tab", array()) || ($this->getAttribute($context["group_config"], "form_tab", array()) == (isset($context["tab_name"]) ? $context["tab_name"] : $this->getContext($context, "tab_name"))))) {
                // line 531
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 533
                if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                    // line 534
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 536
                    if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                        // line 537
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 539
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
                    echo "
                        </h3>
                    </div>
                ";
                }
                // line 543
                echo "
                <div class=\"box-body\">
                    ";
                // line 545
                if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                    // line 546
                    echo "                        <p class=\"help-block\">";
                    echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 548
                echo "
                    <div class=\"row\">
                        ";
                // line 550
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 551
                        echo "                            ";
                        if (( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) ? $context["tab_name"] : $this->getContext($context, "tab_name"))))) {
                            // line 552
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 553
                            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 556
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 557
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 562
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == (isset($context["tab_name"]) ? $context["tab_name"] : $this->getContext($context, "tab_name")))))) {
                    // line 563
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 564
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1dd7ea4a17886e0ea300edbf93c47ea3d5135507466abd3b86331779b1a1f598->leave($__internal_1dd7ea4a17886e0ea300edbf93c47ea3d5135507466abd3b86331779b1a1f598_prof);

        
        $__internal_88e2f5c5cfba1ed6072948498e4499b5fd17eeec3e31b4bf6060e21e8480688e->leave($__internal_88e2f5c5cfba1ed6072948498e4499b5fd17eeec3e31b4bf6060e21e8480688e_prof);

    }

    // line 571
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_6354bb8e9e9a9eb287901f9d58dbfd8c6162bbed1022ad53333688dfeae97658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6354bb8e9e9a9eb287901f9d58dbfd8c6162bbed1022ad53333688dfeae97658->enter($__internal_6354bb8e9e9a9eb287901f9d58dbfd8c6162bbed1022ad53333688dfeae97658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_efce1c316e59b72378013877141535c80c7b8bbfc92e0ab8ff61b0b902f10f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efce1c316e59b72378013877141535c80c7b8bbfc92e0ab8ff61b0b902f10f15->enter($__internal_efce1c316e59b72378013877141535c80c7b8bbfc92e0ab8ff61b0b902f10f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 572
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 573
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 576
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 579
        echo "
";
        
        $__internal_efce1c316e59b72378013877141535c80c7b8bbfc92e0ab8ff61b0b902f10f15->leave($__internal_efce1c316e59b72378013877141535c80c7b8bbfc92e0ab8ff61b0b902f10f15_prof);

        
        $__internal_6354bb8e9e9a9eb287901f9d58dbfd8c6162bbed1022ad53333688dfeae97658->leave($__internal_6354bb8e9e9a9eb287901f9d58dbfd8c6162bbed1022ad53333688dfeae97658_prof);

    }

    // line 582
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_443a056e8a771b0473b29d662f0308994d4e1ad909b80c0fb9134f98c034776e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443a056e8a771b0473b29d662f0308994d4e1ad909b80c0fb9134f98c034776e->enter($__internal_443a056e8a771b0473b29d662f0308994d4e1ad909b80c0fb9134f98c034776e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_4adf56efca82219c9b8a3f617219e0b0a8e6ac82acc594c66ad3351c952937de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adf56efca82219c9b8a3f617219e0b0a8e6ac82acc594c66ad3351c952937de->enter($__internal_4adf56efca82219c9b8a3f617219e0b0a8e6ac82acc594c66ad3351c952937de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 583
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 584
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4adf56efca82219c9b8a3f617219e0b0a8e6ac82acc594c66ad3351c952937de->leave($__internal_4adf56efca82219c9b8a3f617219e0b0a8e6ac82acc594c66ad3351c952937de_prof);

        
        $__internal_443a056e8a771b0473b29d662f0308994d4e1ad909b80c0fb9134f98c034776e->leave($__internal_443a056e8a771b0473b29d662f0308994d4e1ad909b80c0fb9134f98c034776e_prof);

    }

    // line 588
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_c68b7642af24431c0bc6cad5f06006808f4ea4d044103d799df3e3bedc3de2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68b7642af24431c0bc6cad5f06006808f4ea4d044103d799df3e3bedc3de2b2->enter($__internal_c68b7642af24431c0bc6cad5f06006808f4ea4d044103d799df3e3bedc3de2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_7a3a4bdc0829cf6ff9ed51cc6ac6788af0a6e935127892e7a60772be9755321e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3a4bdc0829cf6ff9ed51cc6ac6788af0a6e935127892e7a60772be9755321e->enter($__internal_7a3a4bdc0829cf6ff9ed51cc6ac6788af0a6e935127892e7a60772be9755321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 589
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_7a3a4bdc0829cf6ff9ed51cc6ac6788af0a6e935127892e7a60772be9755321e->leave($__internal_7a3a4bdc0829cf6ff9ed51cc6ac6788af0a6e935127892e7a60772be9755321e_prof);

        
        $__internal_c68b7642af24431c0bc6cad5f06006808f4ea4d044103d799df3e3bedc3de2b2->leave($__internal_c68b7642af24431c0bc6cad5f06006808f4ea4d044103d799df3e3bedc3de2b2_prof);

    }

    // line 595
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_f512d635efbfc49b79494a257bd4389fd58b8c4a68e0a2c25b686010fb0f1e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f512d635efbfc49b79494a257bd4389fd58b8c4a68e0a2c25b686010fb0f1e20->enter($__internal_f512d635efbfc49b79494a257bd4389fd58b8c4a68e0a2c25b686010fb0f1e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_cc3772d0ab12361ef68477c55ebe861eca6a700971ac71de4c467f7b1e764aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3772d0ab12361ef68477c55ebe861eca6a700971ac71de4c467f7b1e764aed->enter($__internal_cc3772d0ab12361ef68477c55ebe861eca6a700971ac71de4c467f7b1e764aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 596
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 597
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 598
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 599
            echo "            <h2>
                ";
            // line 600
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 601
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 604
        echo "
        ";
        // line 605
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 606
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 608
        echo "    </div>
";
        
        $__internal_cc3772d0ab12361ef68477c55ebe861eca6a700971ac71de4c467f7b1e764aed->leave($__internal_cc3772d0ab12361ef68477c55ebe861eca6a700971ac71de4c467f7b1e764aed_prof);

        
        $__internal_f512d635efbfc49b79494a257bd4389fd58b8c4a68e0a2c25b686010fb0f1e20->leave($__internal_f512d635efbfc49b79494a257bd4389fd58b8c4a68e0a2c25b686010fb0f1e20_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2111 => 608,  2105 => 606,  2103 => 605,  2100 => 604,  2093 => 601,  2087 => 600,  2084 => 599,  2082 => 598,  2077 => 597,  2074 => 596,  2065 => 595,  2052 => 589,  2043 => 588,  2033 => 584,  2030 => 583,  2021 => 582,  2010 => 579,  2008 => 576,  2007 => 573,  2005 => 572,  1996 => 571,  1982 => 567,  1972 => 564,  1967 => 563,  1961 => 562,  1951 => 557,  1944 => 556,  1938 => 553,  1933 => 552,  1930 => 551,  1925 => 550,  1921 => 548,  1915 => 546,  1913 => 545,  1909 => 543,  1901 => 539,  1895 => 537,  1893 => 536,  1889 => 534,  1887 => 533,  1881 => 531,  1874 => 530,  1865 => 529,  1854 => 526,  1848 => 524,  1842 => 520,  1824 => 516,  1814 => 514,  1797 => 513,  1793 => 511,  1785 => 508,  1779 => 505,  1774 => 504,  1772 => 503,  1767 => 502,  1761 => 500,  1759 => 499,  1753 => 498,  1746 => 497,  1742 => 496,  1737 => 493,  1735 => 492,  1732 => 491,  1729 => 490,  1720 => 489,  1709 => 485,  1707 => 484,  1706 => 483,  1705 => 482,  1704 => 481,  1703 => 480,  1702 => 479,  1699 => 478,  1697 => 477,  1694 => 476,  1692 => 475,  1691 => 473,  1688 => 472,  1686 => 471,  1685 => 470,  1684 => 469,  1678 => 466,  1675 => 465,  1672 => 463,  1669 => 462,  1666 => 461,  1657 => 460,  1643 => 454,  1641 => 453,  1636 => 449,  1634 => 448,  1625 => 447,  1613 => 443,  1607 => 440,  1603 => 439,  1597 => 436,  1593 => 435,  1590 => 434,  1587 => 433,  1585 => 432,  1582 => 431,  1576 => 429,  1574 => 428,  1570 => 427,  1567 => 426,  1565 => 425,  1556 => 424,  1543 => 421,  1540 => 420,  1531 => 419,  1515 => 412,  1510 => 411,  1504 => 408,  1501 => 407,  1499 => 406,  1495 => 404,  1487 => 402,  1484 => 401,  1482 => 400,  1479 => 399,  1477 => 398,  1468 => 397,  1455 => 394,  1452 => 393,  1443 => 392,  1430 => 388,  1427 => 387,  1418 => 386,  1408 => 383,  1405 => 382,  1402 => 381,  1399 => 380,  1396 => 379,  1390 => 377,  1387 => 376,  1378 => 373,  1366 => 369,  1362 => 367,  1353 => 365,  1349 => 364,  1346 => 363,  1340 => 361,  1338 => 360,  1334 => 359,  1331 => 358,  1328 => 357,  1325 => 356,  1316 => 355,  1306 => 351,  1304 => 350,  1302 => 349,  1294 => 348,  1285 => 347,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1233 => 335,  1223 => 332,  1221 => 331,  1212 => 330,  1202 => 327,  1200 => 326,  1191 => 325,  1181 => 322,  1179 => 321,  1170 => 320,  1160 => 317,  1158 => 316,  1152 => 315,  1143 => 314,  1128 => 308,  1123 => 306,  1119 => 304,  1105 => 295,  1099 => 294,  1088 => 286,  1083 => 283,  1080 => 282,  1078 => 281,  1072 => 279,  1063 => 278,  1053 => 275,  1047 => 273,  1045 => 272,  1043 => 270,  1036 => 265,  1030 => 264,  1026 => 262,  1024 => 261,  1022 => 259,  1020 => 258,  1012 => 257,  1010 => 256,  1001 => 255,  989 => 249,  987 => 248,  985 => 247,  970 => 246,  967 => 245,  964 => 244,  961 => 243,  958 => 242,  955 => 241,  952 => 240,  949 => 239,  946 => 238,  943 => 237,  940 => 236,  938 => 235,  929 => 234,  919 => 231,  910 => 230,  900 => 227,  891 => 226,  881 => 223,  879 => 222,  870 => 220,  860 => 217,  858 => 216,  849 => 215,  838 => 209,  836 => 208,  834 => 207,  831 => 205,  829 => 204,  827 => 203,  818 => 202,  807 => 198,  805 => 197,  803 => 196,  800 => 194,  798 => 193,  796 => 192,  787 => 191,  776 => 187,  770 => 184,  769 => 183,  768 => 182,  764 => 181,  760 => 180,  757 => 178,  751 => 175,  750 => 174,  749 => 173,  745 => 172,  743 => 171,  741 => 170,  732 => 169,  717 => 163,  712 => 161,  708 => 159,  695 => 149,  690 => 146,  687 => 145,  685 => 144,  683 => 143,  681 => 142,  672 => 141,  660 => 136,  657 => 135,  649 => 134,  644 => 132,  642 => 131,  640 => 130,  637 => 128,  635 => 127,  626 => 126,  614 => 121,  612 => 120,  610 => 118,  609 => 117,  608 => 116,  607 => 115,  602 => 113,  600 => 112,  598 => 111,  595 => 109,  593 => 108,  584 => 107,  573 => 103,  571 => 102,  569 => 101,  567 => 100,  565 => 99,  561 => 98,  559 => 97,  556 => 95,  554 => 94,  545 => 93,  534 => 89,  532 => 88,  530 => 87,  521 => 86,  511 => 83,  505 => 81,  503 => 80,  501 => 79,  495 => 77,  492 => 76,  490 => 75,  487 => 74,  478 => 73,  468 => 70,  466 => 69,  457 => 68,  447 => 65,  445 => 64,  436 => 63,  426 => 60,  423 => 58,  421 => 57,  412 => 56,  397 => 50,  392 => 48,  388 => 46,  375 => 36,  370 => 33,  367 => 32,  365 => 31,  363 => 29,  354 => 28,  342 => 23,  340 => 21,  334 => 18,  332 => 17,  329 => 16,  326 => 15,  324 => 13,  323 => 12,  322 => 11,  321 => 9,  320 => 8,  319 => 7,  317 => 5,  315 => 4,  306 => 3,  296 => 595,  293 => 593,  291 => 588,  288 => 586,  286 => 582,  283 => 581,  281 => 571,  278 => 569,  276 => 529,  273 => 528,  271 => 489,  268 => 487,  266 => 460,  263 => 459,  261 => 447,  258 => 446,  256 => 424,  253 => 423,  251 => 419,  248 => 418,  246 => 397,  243 => 396,  241 => 392,  238 => 391,  236 => 386,  234 => 373,  232 => 355,  229 => 353,  227 => 347,  224 => 346,  222 => 340,  219 => 339,  217 => 335,  214 => 334,  212 => 330,  209 => 329,  207 => 325,  204 => 324,  202 => 320,  199 => 319,  197 => 314,  194 => 313,  192 => 278,  189 => 277,  187 => 255,  184 => 254,  181 => 252,  179 => 234,  176 => 233,  174 => 230,  171 => 229,  169 => 226,  166 => 225,  164 => 220,  161 => 219,  159 => 215,  156 => 214,  153 => 212,  151 => 202,  148 => 201,  146 => 191,  143 => 190,  141 => 169,  138 => 168,  136 => 141,  133 => 140,  131 => 126,  128 => 125,  126 => 107,  123 => 106,  121 => 93,  118 => 92,  116 => 86,  113 => 85,  111 => 73,  108 => 72,  106 => 68,  103 => 67,  101 => 63,  98 => 62,  96 => 56,  93 => 55,  91 => 28,  88 => 27,  85 => 25,  83 => 3,  80 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}
    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {{- block('item_actions') -}}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% if easyadmin_form_tabs | length > 0 %}
            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <li class=\"{% if tab_config.active %}active{% endif %}\">
                                <a href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                    {% if tab_config.icon|default(false) %}
                                        <i class=\"fa fa-{{ tab_config.icon }}\"></i>
                                    {% endif %}
                                    {{ tab_config['label'] }}
                                    {% if tab_config.errors > 0 %}
                                        <span class=\"label label-danger\" title=\"{{ 'form.tab.error_badge_title'|transchoice(tab_config.errors, {}, 'EasyAdminBundle') }}\">
                                            {{ tab_config.errors }}
                                        </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %}\">
                                <div class=\"row\">
                                    {{ block('easyadmin_widget_groups') }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {{ block('easyadmin_widget_groups') }}
        {% endif %}
    </div>
{% endblock easyadmin_widget %}

{% block easyadmin_widget_groups %}
    {% for group_name, group_config in easyadmin_form_groups if not group_config.form_tab or group_config.form_tab == tab_name %}
        <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
            <div class=\"box box-default\">
                {% if group_config.label|default(false) or group_config.icon|default(false) %}
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            {% if group_config.icon|default(false) %}
                                <i class=\"fa fa-{{ group_config.icon }}\"></i>
                            {% endif %}
                            {{ group_config.label|trans(domain = _translation_domain)|raw }}
                        </h3>
                    </div>
                {% endif %}

                <div class=\"box-body\">
                    {% if group_config.help|default(false) %}
                        <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                    {% endif %}

                    <div class=\"row\">
                        {% for field in form if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                            {% if not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% for field in form if 'hidden' not in field.vars.block_prefixes and (not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name) %}
            <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                {{ form_row(field) }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock easyadmin_widget_groups %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
