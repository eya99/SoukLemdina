<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_68ffc182e242c19c849f459b43a3cbcb665649dccab050673beb58b873b126b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
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
        $__internal_485a847ff4d7c2eee9e3e8ee070e7cc63c896201d945116c103f58f222bcf713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485a847ff4d7c2eee9e3e8ee070e7cc63c896201d945116c103f58f222bcf713->enter($__internal_485a847ff4d7c2eee9e3e8ee070e7cc63c896201d945116c103f58f222bcf713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

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
        
        $__internal_485a847ff4d7c2eee9e3e8ee070e7cc63c896201d945116c103f58f222bcf713->leave($__internal_485a847ff4d7c2eee9e3e8ee070e7cc63c896201d945116c103f58f222bcf713_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_083268530284667f1ca5c2da7354c0534907e8016054e6b7131da47f3dfdeca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083268530284667f1ca5c2da7354c0534907e8016054e6b7131da47f3dfdeca1->enter($__internal_083268530284667f1ca5c2da7354c0534907e8016054e6b7131da47f3dfdeca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_083268530284667f1ca5c2da7354c0534907e8016054e6b7131da47f3dfdeca1->leave($__internal_083268530284667f1ca5c2da7354c0534907e8016054e6b7131da47f3dfdeca1_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_912ae28ff6d4c8132fbd8ce7ed1d1eb2b7f854132a61b611997c292f65243d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912ae28ff6d4c8132fbd8ce7ed1d1eb2b7f854132a61b611997c292f65243d0c->enter($__internal_912ae28ff6d4c8132fbd8ce7ed1d1eb2b7f854132a61b611997c292f65243d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

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
        
        $__internal_912ae28ff6d4c8132fbd8ce7ed1d1eb2b7f854132a61b611997c292f65243d0c->leave($__internal_912ae28ff6d4c8132fbd8ce7ed1d1eb2b7f854132a61b611997c292f65243d0c_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_051f2e497bb64e95dd1753d0ae3a1aca63180c188bf8c18e570d44ac9ac05154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051f2e497bb64e95dd1753d0ae3a1aca63180c188bf8c18e570d44ac9ac05154->enter($__internal_051f2e497bb64e95dd1753d0ae3a1aca63180c188bf8c18e570d44ac9ac05154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_051f2e497bb64e95dd1753d0ae3a1aca63180c188bf8c18e570d44ac9ac05154->leave($__internal_051f2e497bb64e95dd1753d0ae3a1aca63180c188bf8c18e570d44ac9ac05154_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_fed50d9c7ad392884b31389ec86b524517a913df9bfb1c599cef12096c45d138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed50d9c7ad392884b31389ec86b524517a913df9bfb1c599cef12096c45d138->enter($__internal_fed50d9c7ad392884b31389ec86b524517a913df9bfb1c599cef12096c45d138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fed50d9c7ad392884b31389ec86b524517a913df9bfb1c599cef12096c45d138->leave($__internal_fed50d9c7ad392884b31389ec86b524517a913df9bfb1c599cef12096c45d138_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ad0a4b108f77464c18ce6f63fcdb12fe9df5aa46903524f792ceec515a0ec47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0a4b108f77464c18ce6f63fcdb12fe9df5aa46903524f792ceec515a0ec47c->enter($__internal_ad0a4b108f77464c18ce6f63fcdb12fe9df5aa46903524f792ceec515a0ec47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ad0a4b108f77464c18ce6f63fcdb12fe9df5aa46903524f792ceec515a0ec47c->leave($__internal_ad0a4b108f77464c18ce6f63fcdb12fe9df5aa46903524f792ceec515a0ec47c_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_50eff87601276dd91e697879547e5aac7d88a437fdad2de12eed622e4a740a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50eff87601276dd91e697879547e5aac7d88a437fdad2de12eed622e4a740a97->enter($__internal_50eff87601276dd91e697879547e5aac7d88a437fdad2de12eed622e4a740a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_50eff87601276dd91e697879547e5aac7d88a437fdad2de12eed622e4a740a97->leave($__internal_50eff87601276dd91e697879547e5aac7d88a437fdad2de12eed622e4a740a97_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f25eb6dc07e519a0eb53a27475755e1f5efa696d1f3cb684fc1c6da374c332df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25eb6dc07e519a0eb53a27475755e1f5efa696d1f3cb684fc1c6da374c332df->enter($__internal_f25eb6dc07e519a0eb53a27475755e1f5efa696d1f3cb684fc1c6da374c332df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f25eb6dc07e519a0eb53a27475755e1f5efa696d1f3cb684fc1c6da374c332df->leave($__internal_f25eb6dc07e519a0eb53a27475755e1f5efa696d1f3cb684fc1c6da374c332df_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_18679c99b9cacee63931e7c45c39dba4ea0bc1a586f17663c7210a0f66ffdf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18679c99b9cacee63931e7c45c39dba4ea0bc1a586f17663c7210a0f66ffdf10->enter($__internal_18679c99b9cacee63931e7c45c39dba4ea0bc1a586f17663c7210a0f66ffdf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_18679c99b9cacee63931e7c45c39dba4ea0bc1a586f17663c7210a0f66ffdf10->leave($__internal_18679c99b9cacee63931e7c45c39dba4ea0bc1a586f17663c7210a0f66ffdf10_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_84e4f65c25335ceab06d67d6f2d451eae58e6eadba770a43a7998c8c13e9a62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e4f65c25335ceab06d67d6f2d451eae58e6eadba770a43a7998c8c13e9a62f->enter($__internal_84e4f65c25335ceab06d67d6f2d451eae58e6eadba770a43a7998c8c13e9a62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_84e4f65c25335ceab06d67d6f2d451eae58e6eadba770a43a7998c8c13e9a62f->leave($__internal_84e4f65c25335ceab06d67d6f2d451eae58e6eadba770a43a7998c8c13e9a62f_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_750f83884e41335e44c032b875a465b381c3bf841ac1e858c80ee68f0299c908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750f83884e41335e44c032b875a465b381c3bf841ac1e858c80ee68f0299c908->enter($__internal_750f83884e41335e44c032b875a465b381c3bf841ac1e858c80ee68f0299c908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_750f83884e41335e44c032b875a465b381c3bf841ac1e858c80ee68f0299c908->leave($__internal_750f83884e41335e44c032b875a465b381c3bf841ac1e858c80ee68f0299c908_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e1c81ac7de67e0ecc9c5b5f391fb12f867e4f4b5cc4d2f1c294e489e574e46be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c81ac7de67e0ecc9c5b5f391fb12f867e4f4b5cc4d2f1c294e489e574e46be->enter($__internal_e1c81ac7de67e0ecc9c5b5f391fb12f867e4f4b5cc4d2f1c294e489e574e46be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_e1c81ac7de67e0ecc9c5b5f391fb12f867e4f4b5cc4d2f1c294e489e574e46be->leave($__internal_e1c81ac7de67e0ecc9c5b5f391fb12f867e4f4b5cc4d2f1c294e489e574e46be_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_cf3f0a30be3a15e0b2eec710f05f8e800af64dd149cf9e30e2382b67afc70bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3f0a30be3a15e0b2eec710f05f8e800af64dd149cf9e30e2382b67afc70bd3->enter($__internal_cf3f0a30be3a15e0b2eec710f05f8e800af64dd149cf9e30e2382b67afc70bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_cf3f0a30be3a15e0b2eec710f05f8e800af64dd149cf9e30e2382b67afc70bd3->leave($__internal_cf3f0a30be3a15e0b2eec710f05f8e800af64dd149cf9e30e2382b67afc70bd3_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9465a020b7d2818cac2339d64cb085f536dd071b3399010a7f2067507efd9efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9465a020b7d2818cac2339d64cb085f536dd071b3399010a7f2067507efd9efb->enter($__internal_9465a020b7d2818cac2339d64cb085f536dd071b3399010a7f2067507efd9efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9465a020b7d2818cac2339d64cb085f536dd071b3399010a7f2067507efd9efb->leave($__internal_9465a020b7d2818cac2339d64cb085f536dd071b3399010a7f2067507efd9efb_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_3d6121ed0e22f9f503e694285b9a640dad8b2bb0d701b59e4f2497a4396deb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6121ed0e22f9f503e694285b9a640dad8b2bb0d701b59e4f2497a4396deb92->enter($__internal_3d6121ed0e22f9f503e694285b9a640dad8b2bb0d701b59e4f2497a4396deb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_3d6121ed0e22f9f503e694285b9a640dad8b2bb0d701b59e4f2497a4396deb92->leave($__internal_3d6121ed0e22f9f503e694285b9a640dad8b2bb0d701b59e4f2497a4396deb92_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_65940e42a34bb114ea724b678fc0029961850552cb610c5a437c5358054ec538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65940e42a34bb114ea724b678fc0029961850552cb610c5a437c5358054ec538->enter($__internal_65940e42a34bb114ea724b678fc0029961850552cb610c5a437c5358054ec538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_65940e42a34bb114ea724b678fc0029961850552cb610c5a437c5358054ec538->leave($__internal_65940e42a34bb114ea724b678fc0029961850552cb610c5a437c5358054ec538_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6f02a7ea77de58296a9ee4995fb25e8d5f305b62fe230ec185f15cf960e6dda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f02a7ea77de58296a9ee4995fb25e8d5f305b62fe230ec185f15cf960e6dda3->enter($__internal_6f02a7ea77de58296a9ee4995fb25e8d5f305b62fe230ec185f15cf960e6dda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6f02a7ea77de58296a9ee4995fb25e8d5f305b62fe230ec185f15cf960e6dda3->leave($__internal_6f02a7ea77de58296a9ee4995fb25e8d5f305b62fe230ec185f15cf960e6dda3_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_813157c8a5136c1a6c0c8430c73bb8e5b7b77854867848136eea6b571109851e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813157c8a5136c1a6c0c8430c73bb8e5b7b77854867848136eea6b571109851e->enter($__internal_813157c8a5136c1a6c0c8430c73bb8e5b7b77854867848136eea6b571109851e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_813157c8a5136c1a6c0c8430c73bb8e5b7b77854867848136eea6b571109851e->leave($__internal_813157c8a5136c1a6c0c8430c73bb8e5b7b77854867848136eea6b571109851e_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e3db0e31f72be6bd9a4ce8091a1bbdca349a1f4fde56d160a8f2ccbc7f42f993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3db0e31f72be6bd9a4ce8091a1bbdca349a1f4fde56d160a8f2ccbc7f42f993->enter($__internal_e3db0e31f72be6bd9a4ce8091a1bbdca349a1f4fde56d160a8f2ccbc7f42f993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e3db0e31f72be6bd9a4ce8091a1bbdca349a1f4fde56d160a8f2ccbc7f42f993->leave($__internal_e3db0e31f72be6bd9a4ce8091a1bbdca349a1f4fde56d160a8f2ccbc7f42f993_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_575beb04c46df29cebd47541791e029f1913631b060cd3ca6ccc1783b2f12bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575beb04c46df29cebd47541791e029f1913631b060cd3ca6ccc1783b2f12bc7->enter($__internal_575beb04c46df29cebd47541791e029f1913631b060cd3ca6ccc1783b2f12bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_575beb04c46df29cebd47541791e029f1913631b060cd3ca6ccc1783b2f12bc7->leave($__internal_575beb04c46df29cebd47541791e029f1913631b060cd3ca6ccc1783b2f12bc7_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c65d6c3e8ed244787dd8ce4da13bdd1aa0c0d622d04aaf139ccc5269143e3d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65d6c3e8ed244787dd8ce4da13bdd1aa0c0d622d04aaf139ccc5269143e3d0f->enter($__internal_c65d6c3e8ed244787dd8ce4da13bdd1aa0c0d622d04aaf139ccc5269143e3d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c65d6c3e8ed244787dd8ce4da13bdd1aa0c0d622d04aaf139ccc5269143e3d0f->leave($__internal_c65d6c3e8ed244787dd8ce4da13bdd1aa0c0d622d04aaf139ccc5269143e3d0f_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_1838f69be14de9ab735aedffa9d2a56ed1b7f47c683259a3e25b06e60df9b478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1838f69be14de9ab735aedffa9d2a56ed1b7f47c683259a3e25b06e60df9b478->enter($__internal_1838f69be14de9ab735aedffa9d2a56ed1b7f47c683259a3e25b06e60df9b478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

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
        
        $__internal_1838f69be14de9ab735aedffa9d2a56ed1b7f47c683259a3e25b06e60df9b478->leave($__internal_1838f69be14de9ab735aedffa9d2a56ed1b7f47c683259a3e25b06e60df9b478_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_aeff4398dabb24ad7c6382cdf2429c749a4385c4095c0c601c4543c000ef7135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeff4398dabb24ad7c6382cdf2429c749a4385c4095c0c601c4543c000ef7135->enter($__internal_aeff4398dabb24ad7c6382cdf2429c749a4385c4095c0c601c4543c000ef7135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

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
        
        $__internal_aeff4398dabb24ad7c6382cdf2429c749a4385c4095c0c601c4543c000ef7135->leave($__internal_aeff4398dabb24ad7c6382cdf2429c749a4385c4095c0c601c4543c000ef7135_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_20bb7099e06bda2880312ead4f5813de188e117d67af11540db9ca0a7c079f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bb7099e06bda2880312ead4f5813de188e117d67af11540db9ca0a7c079f25->enter($__internal_20bb7099e06bda2880312ead4f5813de188e117d67af11540db9ca0a7c079f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_20bb7099e06bda2880312ead4f5813de188e117d67af11540db9ca0a7c079f25->leave($__internal_20bb7099e06bda2880312ead4f5813de188e117d67af11540db9ca0a7c079f25_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_22a5f57d8e93be9e807433e48fe7051e66f6eedc5876246e1be6c464a561fe69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a5f57d8e93be9e807433e48fe7051e66f6eedc5876246e1be6c464a561fe69->enter($__internal_22a5f57d8e93be9e807433e48fe7051e66f6eedc5876246e1be6c464a561fe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_22a5f57d8e93be9e807433e48fe7051e66f6eedc5876246e1be6c464a561fe69->leave($__internal_22a5f57d8e93be9e807433e48fe7051e66f6eedc5876246e1be6c464a561fe69_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_81a66a763c9a1c2b066b82cd3b33c5bbebe4c070621a64fd7e0b8bfe61e45fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a66a763c9a1c2b066b82cd3b33c5bbebe4c070621a64fd7e0b8bfe61e45fb4->enter($__internal_81a66a763c9a1c2b066b82cd3b33c5bbebe4c070621a64fd7e0b8bfe61e45fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_81a66a763c9a1c2b066b82cd3b33c5bbebe4c070621a64fd7e0b8bfe61e45fb4->leave($__internal_81a66a763c9a1c2b066b82cd3b33c5bbebe4c070621a64fd7e0b8bfe61e45fb4_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_950a4b92c7a98449462d48f64e57cad5be9c597540e4a5141b70295b8736f889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950a4b92c7a98449462d48f64e57cad5be9c597540e4a5141b70295b8736f889->enter($__internal_950a4b92c7a98449462d48f64e57cad5be9c597540e4a5141b70295b8736f889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_950a4b92c7a98449462d48f64e57cad5be9c597540e4a5141b70295b8736f889->leave($__internal_950a4b92c7a98449462d48f64e57cad5be9c597540e4a5141b70295b8736f889_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0faefcee3bb438cd4679b555267d217b8ed4bf5def61566c720e1ff9b6e6d1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0faefcee3bb438cd4679b555267d217b8ed4bf5def61566c720e1ff9b6e6d1ba->enter($__internal_0faefcee3bb438cd4679b555267d217b8ed4bf5def61566c720e1ff9b6e6d1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_0faefcee3bb438cd4679b555267d217b8ed4bf5def61566c720e1ff9b6e6d1ba->leave($__internal_0faefcee3bb438cd4679b555267d217b8ed4bf5def61566c720e1ff9b6e6d1ba_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6d41b944319065b947471e7fe6977423e34de5f2e8d08d3c2b544637150ac737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d41b944319065b947471e7fe6977423e34de5f2e8d08d3c2b544637150ac737->enter($__internal_6d41b944319065b947471e7fe6977423e34de5f2e8d08d3c2b544637150ac737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_6d41b944319065b947471e7fe6977423e34de5f2e8d08d3c2b544637150ac737->leave($__internal_6d41b944319065b947471e7fe6977423e34de5f2e8d08d3c2b544637150ac737_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f2b8c96a8290945fd12e45dc8ff7a4fd16325b0666f5b514f47a248b7a2c4e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b8c96a8290945fd12e45dc8ff7a4fd16325b0666f5b514f47a248b7a2c4e92->enter($__internal_f2b8c96a8290945fd12e45dc8ff7a4fd16325b0666f5b514f47a248b7a2c4e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_f2b8c96a8290945fd12e45dc8ff7a4fd16325b0666f5b514f47a248b7a2c4e92->leave($__internal_f2b8c96a8290945fd12e45dc8ff7a4fd16325b0666f5b514f47a248b7a2c4e92_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6873d167bc26ea6ec47668d48fd03c820b414903738f00841aefbc1ae5f0d4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6873d167bc26ea6ec47668d48fd03c820b414903738f00841aefbc1ae5f0d4c1->enter($__internal_6873d167bc26ea6ec47668d48fd03c820b414903738f00841aefbc1ae5f0d4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_6873d167bc26ea6ec47668d48fd03c820b414903738f00841aefbc1ae5f0d4c1->leave($__internal_6873d167bc26ea6ec47668d48fd03c820b414903738f00841aefbc1ae5f0d4c1_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_574b77a1fb114f82cd582b2606760f3deb528584de233c80c2d49a58cc88b32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574b77a1fb114f82cd582b2606760f3deb528584de233c80c2d49a58cc88b32d->enter($__internal_574b77a1fb114f82cd582b2606760f3deb528584de233c80c2d49a58cc88b32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_574b77a1fb114f82cd582b2606760f3deb528584de233c80c2d49a58cc88b32d->leave($__internal_574b77a1fb114f82cd582b2606760f3deb528584de233c80c2d49a58cc88b32d_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_d461e71d21f73593e9a2c35a223c016483c7ddbf1a457970fa87cdbe60670d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d461e71d21f73593e9a2c35a223c016483c7ddbf1a457970fa87cdbe60670d8d->enter($__internal_d461e71d21f73593e9a2c35a223c016483c7ddbf1a457970fa87cdbe60670d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_d461e71d21f73593e9a2c35a223c016483c7ddbf1a457970fa87cdbe60670d8d->leave($__internal_d461e71d21f73593e9a2c35a223c016483c7ddbf1a457970fa87cdbe60670d8d_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_25806f9363716855bcf41e5fae78a4fde72d6e8e76103d15bb0b9904fa38e803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25806f9363716855bcf41e5fae78a4fde72d6e8e76103d15bb0b9904fa38e803->enter($__internal_25806f9363716855bcf41e5fae78a4fde72d6e8e76103d15bb0b9904fa38e803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_25806f9363716855bcf41e5fae78a4fde72d6e8e76103d15bb0b9904fa38e803->leave($__internal_25806f9363716855bcf41e5fae78a4fde72d6e8e76103d15bb0b9904fa38e803_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_eb79ef8fc08ed572d0d5b89c68fa14c78e50f235c4b69e666e7658b2f3ce2d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb79ef8fc08ed572d0d5b89c68fa14c78e50f235c4b69e666e7658b2f3ce2d23->enter($__internal_eb79ef8fc08ed572d0d5b89c68fa14c78e50f235c4b69e666e7658b2f3ce2d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_eb79ef8fc08ed572d0d5b89c68fa14c78e50f235c4b69e666e7658b2f3ce2d23->leave($__internal_eb79ef8fc08ed572d0d5b89c68fa14c78e50f235c4b69e666e7658b2f3ce2d23_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_6c17ca296aff1e758a02132ff30d36604cf5020a100ac4fb27ae45f085089bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c17ca296aff1e758a02132ff30d36604cf5020a100ac4fb27ae45f085089bc4->enter($__internal_6c17ca296aff1e758a02132ff30d36604cf5020a100ac4fb27ae45f085089bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_6c17ca296aff1e758a02132ff30d36604cf5020a100ac4fb27ae45f085089bc4->leave($__internal_6c17ca296aff1e758a02132ff30d36604cf5020a100ac4fb27ae45f085089bc4_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_6c1f2466c8e6cae72bd83b40935f22ed7d6c282958f58fb4573d733ac2df6e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1f2466c8e6cae72bd83b40935f22ed7d6c282958f58fb4573d733ac2df6e00->enter($__internal_6c1f2466c8e6cae72bd83b40935f22ed7d6c282958f58fb4573d733ac2df6e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

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
        
        $__internal_6c1f2466c8e6cae72bd83b40935f22ed7d6c282958f58fb4573d733ac2df6e00->leave($__internal_6c1f2466c8e6cae72bd83b40935f22ed7d6c282958f58fb4573d733ac2df6e00_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_3bbbcec9887c060d1e8fe2d1dbd47a833beba3638a5e7f48832249a22f453540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbbcec9887c060d1e8fe2d1dbd47a833beba3638a5e7f48832249a22f453540->enter($__internal_3bbbcec9887c060d1e8fe2d1dbd47a833beba3638a5e7f48832249a22f453540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_3bbbcec9887c060d1e8fe2d1dbd47a833beba3638a5e7f48832249a22f453540->leave($__internal_3bbbcec9887c060d1e8fe2d1dbd47a833beba3638a5e7f48832249a22f453540_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_98af3a556f48e4abb467f7b35b10cfcb2616497fa029ff47c2cebb854680d163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98af3a556f48e4abb467f7b35b10cfcb2616497fa029ff47c2cebb854680d163->enter($__internal_98af3a556f48e4abb467f7b35b10cfcb2616497fa029ff47c2cebb854680d163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

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
        
        $__internal_98af3a556f48e4abb467f7b35b10cfcb2616497fa029ff47c2cebb854680d163->leave($__internal_98af3a556f48e4abb467f7b35b10cfcb2616497fa029ff47c2cebb854680d163_prof);

    }

    // line 529
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        $__internal_c2e8b9861e9baab30cafbd59a79a7262a53a1d3529d838fd7c35cae2668c01a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e8b9861e9baab30cafbd59a79a7262a53a1d3529d838fd7c35cae2668c01a6->enter($__internal_c2e8b9861e9baab30cafbd59a79a7262a53a1d3529d838fd7c35cae2668c01a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

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
        
        $__internal_c2e8b9861e9baab30cafbd59a79a7262a53a1d3529d838fd7c35cae2668c01a6->leave($__internal_c2e8b9861e9baab30cafbd59a79a7262a53a1d3529d838fd7c35cae2668c01a6_prof);

    }

    // line 571
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_3cbf337a5f74aec40825c58a8c8abd5e983061e6ac8d53538b9b3ae058a2aa7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbf337a5f74aec40825c58a8c8abd5e983061e6ac8d53538b9b3ae058a2aa7a->enter($__internal_3cbf337a5f74aec40825c58a8c8abd5e983061e6ac8d53538b9b3ae058a2aa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 572
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 573
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 576
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 579
        echo "
";
        
        $__internal_3cbf337a5f74aec40825c58a8c8abd5e983061e6ac8d53538b9b3ae058a2aa7a->leave($__internal_3cbf337a5f74aec40825c58a8c8abd5e983061e6ac8d53538b9b3ae058a2aa7a_prof);

    }

    // line 582
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_e7f2b651d4db406cd5ec006ff7c2fbcacd683cd94814cf61d19d2f24067284ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f2b651d4db406cd5ec006ff7c2fbcacd683cd94814cf61d19d2f24067284ce->enter($__internal_e7f2b651d4db406cd5ec006ff7c2fbcacd683cd94814cf61d19d2f24067284ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 583
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 584
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e7f2b651d4db406cd5ec006ff7c2fbcacd683cd94814cf61d19d2f24067284ce->leave($__internal_e7f2b651d4db406cd5ec006ff7c2fbcacd683cd94814cf61d19d2f24067284ce_prof);

    }

    // line 588
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_6f58ebe5162ee145c3a73cf36c953c06786183fd2c35f7233ec203531841280c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f58ebe5162ee145c3a73cf36c953c06786183fd2c35f7233ec203531841280c->enter($__internal_6f58ebe5162ee145c3a73cf36c953c06786183fd2c35f7233ec203531841280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 589
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_6f58ebe5162ee145c3a73cf36c953c06786183fd2c35f7233ec203531841280c->leave($__internal_6f58ebe5162ee145c3a73cf36c953c06786183fd2c35f7233ec203531841280c_prof);

    }

    // line 595
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_0a1c1cf53962064baab09a44a4a655141061d6746b0290e84b5ca9a9dbbc03ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1c1cf53962064baab09a44a4a655141061d6746b0290e84b5ca9a9dbbc03ce->enter($__internal_0a1c1cf53962064baab09a44a4a655141061d6746b0290e84b5ca9a9dbbc03ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

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
        
        $__internal_0a1c1cf53962064baab09a44a4a655141061d6746b0290e84b5ca9a9dbbc03ce->leave($__internal_0a1c1cf53962064baab09a44a4a655141061d6746b0290e84b5ca9a9dbbc03ce_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1850 => 608,  1844 => 606,  1842 => 605,  1839 => 604,  1832 => 601,  1826 => 600,  1823 => 599,  1821 => 598,  1816 => 597,  1813 => 596,  1807 => 595,  1797 => 589,  1791 => 588,  1784 => 584,  1781 => 583,  1775 => 582,  1767 => 579,  1765 => 576,  1764 => 573,  1762 => 572,  1756 => 571,  1745 => 567,  1735 => 564,  1730 => 563,  1724 => 562,  1714 => 557,  1707 => 556,  1701 => 553,  1696 => 552,  1693 => 551,  1688 => 550,  1684 => 548,  1678 => 546,  1676 => 545,  1672 => 543,  1664 => 539,  1658 => 537,  1656 => 536,  1652 => 534,  1650 => 533,  1644 => 531,  1637 => 530,  1631 => 529,  1623 => 526,  1617 => 524,  1611 => 520,  1593 => 516,  1583 => 514,  1566 => 513,  1562 => 511,  1554 => 508,  1548 => 505,  1543 => 504,  1541 => 503,  1536 => 502,  1530 => 500,  1528 => 499,  1522 => 498,  1515 => 497,  1511 => 496,  1506 => 493,  1504 => 492,  1501 => 491,  1498 => 490,  1492 => 489,  1484 => 485,  1482 => 484,  1481 => 483,  1480 => 482,  1479 => 481,  1478 => 480,  1477 => 479,  1474 => 478,  1472 => 477,  1469 => 476,  1467 => 475,  1466 => 473,  1463 => 472,  1461 => 471,  1460 => 470,  1459 => 469,  1453 => 466,  1450 => 465,  1447 => 463,  1444 => 462,  1441 => 461,  1435 => 460,  1424 => 454,  1422 => 453,  1417 => 449,  1415 => 448,  1409 => 447,  1400 => 443,  1394 => 440,  1390 => 439,  1384 => 436,  1380 => 435,  1377 => 434,  1374 => 433,  1372 => 432,  1369 => 431,  1363 => 429,  1361 => 428,  1357 => 427,  1354 => 426,  1352 => 425,  1346 => 424,  1336 => 421,  1333 => 420,  1327 => 419,  1314 => 412,  1309 => 411,  1303 => 408,  1300 => 407,  1298 => 406,  1294 => 404,  1286 => 402,  1283 => 401,  1281 => 400,  1278 => 399,  1276 => 398,  1270 => 397,  1260 => 394,  1257 => 393,  1251 => 392,  1241 => 388,  1238 => 387,  1232 => 386,  1225 => 383,  1222 => 382,  1219 => 381,  1216 => 380,  1213 => 379,  1207 => 377,  1204 => 376,  1198 => 373,  1189 => 369,  1185 => 367,  1176 => 365,  1172 => 364,  1169 => 363,  1163 => 361,  1161 => 360,  1157 => 359,  1154 => 358,  1151 => 357,  1148 => 356,  1142 => 355,  1135 => 351,  1133 => 350,  1131 => 349,  1123 => 348,  1117 => 347,  1110 => 344,  1108 => 343,  1106 => 342,  1098 => 341,  1092 => 340,  1085 => 337,  1083 => 336,  1077 => 335,  1070 => 332,  1068 => 331,  1062 => 330,  1055 => 327,  1053 => 326,  1047 => 325,  1040 => 322,  1038 => 321,  1032 => 320,  1025 => 317,  1023 => 316,  1017 => 315,  1011 => 314,  999 => 308,  994 => 306,  990 => 304,  976 => 295,  970 => 294,  959 => 286,  954 => 283,  951 => 282,  949 => 281,  943 => 279,  937 => 278,  930 => 275,  924 => 273,  922 => 272,  920 => 270,  913 => 265,  907 => 264,  903 => 262,  901 => 261,  899 => 259,  897 => 258,  889 => 257,  887 => 256,  881 => 255,  872 => 249,  870 => 248,  868 => 247,  853 => 246,  850 => 245,  847 => 244,  844 => 243,  841 => 242,  838 => 241,  835 => 240,  832 => 239,  829 => 238,  826 => 237,  823 => 236,  821 => 235,  815 => 234,  808 => 231,  802 => 230,  795 => 227,  789 => 226,  782 => 223,  780 => 222,  774 => 220,  767 => 217,  765 => 216,  759 => 215,  751 => 209,  749 => 208,  747 => 207,  744 => 205,  742 => 204,  740 => 203,  734 => 202,  726 => 198,  724 => 197,  722 => 196,  719 => 194,  717 => 193,  715 => 192,  709 => 191,  701 => 187,  695 => 184,  694 => 183,  693 => 182,  689 => 181,  685 => 180,  682 => 178,  676 => 175,  675 => 174,  674 => 173,  670 => 172,  668 => 171,  666 => 170,  660 => 169,  648 => 163,  643 => 161,  639 => 159,  626 => 149,  621 => 146,  618 => 145,  616 => 144,  614 => 143,  612 => 142,  606 => 141,  597 => 136,  594 => 135,  586 => 134,  581 => 132,  579 => 131,  577 => 130,  574 => 128,  572 => 127,  566 => 126,  557 => 121,  555 => 120,  553 => 118,  552 => 117,  551 => 116,  550 => 115,  545 => 113,  543 => 112,  541 => 111,  538 => 109,  536 => 108,  530 => 107,  522 => 103,  520 => 102,  518 => 101,  516 => 100,  514 => 99,  510 => 98,  508 => 97,  505 => 95,  503 => 94,  497 => 93,  489 => 89,  487 => 88,  485 => 87,  479 => 86,  472 => 83,  466 => 81,  464 => 80,  462 => 79,  456 => 77,  453 => 76,  451 => 75,  448 => 74,  442 => 73,  435 => 70,  433 => 69,  427 => 68,  420 => 65,  418 => 64,  412 => 63,  405 => 60,  402 => 58,  400 => 57,  394 => 56,  382 => 50,  377 => 48,  373 => 46,  360 => 36,  355 => 33,  352 => 32,  350 => 31,  348 => 29,  342 => 28,  333 => 23,  331 => 21,  325 => 18,  323 => 17,  320 => 16,  317 => 15,  315 => 13,  314 => 12,  313 => 11,  312 => 9,  311 => 8,  310 => 7,  308 => 5,  306 => 4,  300 => 3,  293 => 595,  290 => 593,  288 => 588,  285 => 586,  283 => 582,  280 => 581,  278 => 571,  275 => 569,  273 => 529,  270 => 528,  268 => 489,  265 => 487,  263 => 460,  260 => 459,  258 => 447,  255 => 446,  253 => 424,  250 => 423,  248 => 419,  245 => 418,  243 => 397,  240 => 396,  238 => 392,  235 => 391,  233 => 386,  231 => 373,  229 => 355,  226 => 353,  224 => 347,  221 => 346,  219 => 340,  216 => 339,  214 => 335,  211 => 334,  209 => 330,  206 => 329,  204 => 325,  201 => 324,  199 => 320,  196 => 319,  194 => 314,  191 => 313,  189 => 278,  186 => 277,  184 => 255,  181 => 254,  178 => 252,  176 => 234,  173 => 233,  171 => 230,  168 => 229,  166 => 226,  163 => 225,  161 => 220,  158 => 219,  156 => 215,  153 => 214,  150 => 212,  148 => 202,  145 => 201,  143 => 191,  140 => 190,  138 => 169,  135 => 168,  133 => 141,  130 => 140,  128 => 126,  125 => 125,  123 => 107,  120 => 106,  118 => 93,  115 => 92,  113 => 86,  110 => 85,  108 => 73,  105 => 72,  103 => 68,  100 => 67,  98 => 63,  95 => 62,  93 => 56,  90 => 55,  88 => 28,  85 => 27,  82 => 25,  80 => 3,  77 => 2,  14 => 1,);
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
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
