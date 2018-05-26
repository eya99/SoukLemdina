<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_0fde802b537b21bec6c4bfed9ff3f7f790fe40e29915a90f2c20856e98fca869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_817a71d0f8a09295144a1fcc6aeea16597f0f6a41fd549bbfaa07dd98810c14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817a71d0f8a09295144a1fcc6aeea16597f0f6a41fd549bbfaa07dd98810c14f->enter($__internal_817a71d0f8a09295144a1fcc6aeea16597f0f6a41fd549bbfaa07dd98810c14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e0287de3371307ad1b3a7b4f75b94d1020b203a3443c7a7a0447d9d71af2a220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0287de3371307ad1b3a7b4f75b94d1020b203a3443c7a7a0447d9d71af2a220->enter($__internal_e0287de3371307ad1b3a7b4f75b94d1020b203a3443c7a7a0447d9d71af2a220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_817a71d0f8a09295144a1fcc6aeea16597f0f6a41fd549bbfaa07dd98810c14f->leave($__internal_817a71d0f8a09295144a1fcc6aeea16597f0f6a41fd549bbfaa07dd98810c14f_prof);

        
        $__internal_e0287de3371307ad1b3a7b4f75b94d1020b203a3443c7a7a0447d9d71af2a220->leave($__internal_e0287de3371307ad1b3a7b4f75b94d1020b203a3443c7a7a0447d9d71af2a220_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c0026b14747a7a634c35742aa3fb5db6bc90e4b63e435bad13344581d2ba0901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0026b14747a7a634c35742aa3fb5db6bc90e4b63e435bad13344581d2ba0901->enter($__internal_c0026b14747a7a634c35742aa3fb5db6bc90e4b63e435bad13344581d2ba0901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_23cfb069a346afa070f2a768c3310457d35422817b2b7c96cdd108c74be8b183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cfb069a346afa070f2a768c3310457d35422817b2b7c96cdd108c74be8b183->enter($__internal_23cfb069a346afa070f2a768c3310457d35422817b2b7c96cdd108c74be8b183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_23cfb069a346afa070f2a768c3310457d35422817b2b7c96cdd108c74be8b183->leave($__internal_23cfb069a346afa070f2a768c3310457d35422817b2b7c96cdd108c74be8b183_prof);

        
        $__internal_c0026b14747a7a634c35742aa3fb5db6bc90e4b63e435bad13344581d2ba0901->leave($__internal_c0026b14747a7a634c35742aa3fb5db6bc90e4b63e435bad13344581d2ba0901_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_90c853d8df6c1ea5d95efe9fe66993da00012de89255c5054c2007f9366ccad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c853d8df6c1ea5d95efe9fe66993da00012de89255c5054c2007f9366ccad9->enter($__internal_90c853d8df6c1ea5d95efe9fe66993da00012de89255c5054c2007f9366ccad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a692a79cd671f225969785a9a1a4317bebdf54afd57eba1da32523e31cde23a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a692a79cd671f225969785a9a1a4317bebdf54afd57eba1da32523e31cde23a4->enter($__internal_a692a79cd671f225969785a9a1a4317bebdf54afd57eba1da32523e31cde23a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a692a79cd671f225969785a9a1a4317bebdf54afd57eba1da32523e31cde23a4->leave($__internal_a692a79cd671f225969785a9a1a4317bebdf54afd57eba1da32523e31cde23a4_prof);

        
        $__internal_90c853d8df6c1ea5d95efe9fe66993da00012de89255c5054c2007f9366ccad9->leave($__internal_90c853d8df6c1ea5d95efe9fe66993da00012de89255c5054c2007f9366ccad9_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d764d063ec43227a7bc3b9a4f1eaf21d74aa0ac8afb1c3f9eb4c864303bb41d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d764d063ec43227a7bc3b9a4f1eaf21d74aa0ac8afb1c3f9eb4c864303bb41d5->enter($__internal_d764d063ec43227a7bc3b9a4f1eaf21d74aa0ac8afb1c3f9eb4c864303bb41d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3a567e4fd6c234bed9c9d6d3cf455e51f3000c5d9ea369e31b3de00e36490cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a567e4fd6c234bed9c9d6d3cf455e51f3000c5d9ea369e31b3de00e36490cfb->enter($__internal_3a567e4fd6c234bed9c9d6d3cf455e51f3000c5d9ea369e31b3de00e36490cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3a567e4fd6c234bed9c9d6d3cf455e51f3000c5d9ea369e31b3de00e36490cfb->leave($__internal_3a567e4fd6c234bed9c9d6d3cf455e51f3000c5d9ea369e31b3de00e36490cfb_prof);

        
        $__internal_d764d063ec43227a7bc3b9a4f1eaf21d74aa0ac8afb1c3f9eb4c864303bb41d5->leave($__internal_d764d063ec43227a7bc3b9a4f1eaf21d74aa0ac8afb1c3f9eb4c864303bb41d5_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b50d7174e84fdb237f393185425a4367b28a83d34aae7499f37b11cdabfd9201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50d7174e84fdb237f393185425a4367b28a83d34aae7499f37b11cdabfd9201->enter($__internal_b50d7174e84fdb237f393185425a4367b28a83d34aae7499f37b11cdabfd9201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_22df22bb9e098dfbcbfddb8c537dbe9c5e37c18ee1aca02ddf5c31c4e30c4ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22df22bb9e098dfbcbfddb8c537dbe9c5e37c18ee1aca02ddf5c31c4e30c4ecb->enter($__internal_22df22bb9e098dfbcbfddb8c537dbe9c5e37c18ee1aca02ddf5c31c4e30c4ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_dfdcd52c7be279a815bb85a9d8a9661995e75c289cada58118ff5fe3d4d1183a = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_b72f62f2aa26a67ab9693ec3179f019e39b4a475d3c1803fe27e2be960185a63 = "{{") && ('' === $__internal_b72f62f2aa26a67ab9693ec3179f019e39b4a475d3c1803fe27e2be960185a63 || 0 === strpos($__internal_dfdcd52c7be279a815bb85a9d8a9661995e75c289cada58118ff5fe3d4d1183a, $__internal_b72f62f2aa26a67ab9693ec3179f019e39b4a475d3c1803fe27e2be960185a63)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_4c26b5c1a0d88bb5def7ee738883fb191609ae438b57c46915d445eb99f1223d = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_41cff10f399bd9a63936171889f282ef638a69c1939e7d9edaa250cff3b7ef70 = "}}") && ('' === $__internal_41cff10f399bd9a63936171889f282ef638a69c1939e7d9edaa250cff3b7ef70 || $__internal_41cff10f399bd9a63936171889f282ef638a69c1939e7d9edaa250cff3b7ef70 === substr($__internal_4c26b5c1a0d88bb5def7ee738883fb191609ae438b57c46915d445eb99f1223d, -strlen($__internal_41cff10f399bd9a63936171889f282ef638a69c1939e7d9edaa250cff3b7ef70))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend")) || (isset($context["append"]) ? $context["append"] : $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_22df22bb9e098dfbcbfddb8c537dbe9c5e37c18ee1aca02ddf5c31c4e30c4ecb->leave($__internal_22df22bb9e098dfbcbfddb8c537dbe9c5e37c18ee1aca02ddf5c31c4e30c4ecb_prof);

        
        $__internal_b50d7174e84fdb237f393185425a4367b28a83d34aae7499f37b11cdabfd9201->leave($__internal_b50d7174e84fdb237f393185425a4367b28a83d34aae7499f37b11cdabfd9201_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_54051cf4bca81b6b6f68b2009be3f181eb30828a6d2b463efc93edc71ac465c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54051cf4bca81b6b6f68b2009be3f181eb30828a6d2b463efc93edc71ac465c7->enter($__internal_54051cf4bca81b6b6f68b2009be3f181eb30828a6d2b463efc93edc71ac465c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d2ffc51bbb7a8f8ab5e0dced2bb03eabdd58c17dc3b86a8fe83417c51c9d36df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ffc51bbb7a8f8ab5e0dced2bb03eabdd58c17dc3b86a8fe83417c51c9d36df->enter($__internal_d2ffc51bbb7a8f8ab5e0dced2bb03eabdd58c17dc3b86a8fe83417c51c9d36df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_d2ffc51bbb7a8f8ab5e0dced2bb03eabdd58c17dc3b86a8fe83417c51c9d36df->leave($__internal_d2ffc51bbb7a8f8ab5e0dced2bb03eabdd58c17dc3b86a8fe83417c51c9d36df_prof);

        
        $__internal_54051cf4bca81b6b6f68b2009be3f181eb30828a6d2b463efc93edc71ac465c7->leave($__internal_54051cf4bca81b6b6f68b2009be3f181eb30828a6d2b463efc93edc71ac465c7_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_64caa1cba19daec0068e9afb6796a27c6adf4f49d3e85b4f8b01d551dbd22001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64caa1cba19daec0068e9afb6796a27c6adf4f49d3e85b4f8b01d551dbd22001->enter($__internal_64caa1cba19daec0068e9afb6796a27c6adf4f49d3e85b4f8b01d551dbd22001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_20214eaf8d856531c838d74831768e0dc5d8f27f6792a3d74edff714bed1d5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20214eaf8d856531c838d74831768e0dc5d8f27f6792a3d74edff714bed1d5d9->enter($__internal_20214eaf8d856531c838d74831768e0dc5d8f27f6792a3d74edff714bed1d5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_20214eaf8d856531c838d74831768e0dc5d8f27f6792a3d74edff714bed1d5d9->leave($__internal_20214eaf8d856531c838d74831768e0dc5d8f27f6792a3d74edff714bed1d5d9_prof);

        
        $__internal_64caa1cba19daec0068e9afb6796a27c6adf4f49d3e85b4f8b01d551dbd22001->leave($__internal_64caa1cba19daec0068e9afb6796a27c6adf4f49d3e85b4f8b01d551dbd22001_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c5d13c51029d8a84a1efcd41450259b8159145f283426c3cb9ccf9a0a5ae81c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d13c51029d8a84a1efcd41450259b8159145f283426c3cb9ccf9a0a5ae81c6->enter($__internal_c5d13c51029d8a84a1efcd41450259b8159145f283426c3cb9ccf9a0a5ae81c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9443daa5cd26af05331b278ea769be9dbdde18299feae98b109f6733942305e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9443daa5cd26af05331b278ea769be9dbdde18299feae98b109f6733942305e5->enter($__internal_9443daa5cd26af05331b278ea769be9dbdde18299feae98b109f6733942305e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_9443daa5cd26af05331b278ea769be9dbdde18299feae98b109f6733942305e5->leave($__internal_9443daa5cd26af05331b278ea769be9dbdde18299feae98b109f6733942305e5_prof);

        
        $__internal_c5d13c51029d8a84a1efcd41450259b8159145f283426c3cb9ccf9a0a5ae81c6->leave($__internal_c5d13c51029d8a84a1efcd41450259b8159145f283426c3cb9ccf9a0a5ae81c6_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6519d4a355712a759f53603ff020ae69f75ce09f2e69f9945b14293f3f551ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6519d4a355712a759f53603ff020ae69f75ce09f2e69f9945b14293f3f551ff2->enter($__internal_6519d4a355712a759f53603ff020ae69f75ce09f2e69f9945b14293f3f551ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a735bc4f918e91a0f8731e53583b18b5e833b04ba61484492b5acdb94eaa1b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a735bc4f918e91a0f8731e53583b18b5e833b04ba61484492b5acdb94eaa1b7a->enter($__internal_a735bc4f918e91a0f8731e53583b18b5e833b04ba61484492b5acdb94eaa1b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_a735bc4f918e91a0f8731e53583b18b5e833b04ba61484492b5acdb94eaa1b7a->leave($__internal_a735bc4f918e91a0f8731e53583b18b5e833b04ba61484492b5acdb94eaa1b7a_prof);

        
        $__internal_6519d4a355712a759f53603ff020ae69f75ce09f2e69f9945b14293f3f551ff2->leave($__internal_6519d4a355712a759f53603ff020ae69f75ce09f2e69f9945b14293f3f551ff2_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c93f64d8d6a921109015539565f10f84b01b66ca370b23206b00b207363e5691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93f64d8d6a921109015539565f10f84b01b66ca370b23206b00b207363e5691->enter($__internal_c93f64d8d6a921109015539565f10f84b01b66ca370b23206b00b207363e5691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_bdf46669d404d58b02f77141b5680c67f66467f30d9936071db2ba6cafc095cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf46669d404d58b02f77141b5680c67f66467f30d9936071db2ba6cafc095cd->enter($__internal_bdf46669d404d58b02f77141b5680c67f66467f30d9936071db2ba6cafc095cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_bdf46669d404d58b02f77141b5680c67f66467f30d9936071db2ba6cafc095cd->leave($__internal_bdf46669d404d58b02f77141b5680c67f66467f30d9936071db2ba6cafc095cd_prof);

        
        $__internal_c93f64d8d6a921109015539565f10f84b01b66ca370b23206b00b207363e5691->leave($__internal_c93f64d8d6a921109015539565f10f84b01b66ca370b23206b00b207363e5691_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fc3a6de01769a0bf5880c455e40b28ec3ea0947369e18b74ef7c3683c0ffaa0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3a6de01769a0bf5880c455e40b28ec3ea0947369e18b74ef7c3683c0ffaa0c->enter($__internal_fc3a6de01769a0bf5880c455e40b28ec3ea0947369e18b74ef7c3683c0ffaa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_dac2ec28c0ada349203d2a1db221e5231c8314690ed7cf8d9b04867fde541893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac2ec28c0ada349203d2a1db221e5231c8314690ed7cf8d9b04867fde541893->enter($__internal_dac2ec28c0ada349203d2a1db221e5231c8314690ed7cf8d9b04867fde541893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_dac2ec28c0ada349203d2a1db221e5231c8314690ed7cf8d9b04867fde541893->leave($__internal_dac2ec28c0ada349203d2a1db221e5231c8314690ed7cf8d9b04867fde541893_prof);

        
        $__internal_fc3a6de01769a0bf5880c455e40b28ec3ea0947369e18b74ef7c3683c0ffaa0c->leave($__internal_fc3a6de01769a0bf5880c455e40b28ec3ea0947369e18b74ef7c3683c0ffaa0c_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_661fb3a41263ef116e9948e3ebb292dab6c9e99bc3600f09e1d2c7aa3478b722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661fb3a41263ef116e9948e3ebb292dab6c9e99bc3600f09e1d2c7aa3478b722->enter($__internal_661fb3a41263ef116e9948e3ebb292dab6c9e99bc3600f09e1d2c7aa3478b722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b954f4584d7b265fb42893f2772b6e32fc49ae01d3c10b4a14164106ebd41faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b954f4584d7b265fb42893f2772b6e32fc49ae01d3c10b4a14164106ebd41faf->enter($__internal_b954f4584d7b265fb42893f2772b6e32fc49ae01d3c10b4a14164106ebd41faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_b954f4584d7b265fb42893f2772b6e32fc49ae01d3c10b4a14164106ebd41faf->leave($__internal_b954f4584d7b265fb42893f2772b6e32fc49ae01d3c10b4a14164106ebd41faf_prof);

        
        $__internal_661fb3a41263ef116e9948e3ebb292dab6c9e99bc3600f09e1d2c7aa3478b722->leave($__internal_661fb3a41263ef116e9948e3ebb292dab6c9e99bc3600f09e1d2c7aa3478b722_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b0f42091514935178536155df0a605be1d3e63d09892aff25899054790d66869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f42091514935178536155df0a605be1d3e63d09892aff25899054790d66869->enter($__internal_b0f42091514935178536155df0a605be1d3e63d09892aff25899054790d66869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_19ca0b6e7ecadcb6380786623012bb364f6f3c5002cd13b9a506534ae90e79e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ca0b6e7ecadcb6380786623012bb364f6f3c5002cd13b9a506534ae90e79e4->enter($__internal_19ca0b6e7ecadcb6380786623012bb364f6f3c5002cd13b9a506534ae90e79e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_19ca0b6e7ecadcb6380786623012bb364f6f3c5002cd13b9a506534ae90e79e4->leave($__internal_19ca0b6e7ecadcb6380786623012bb364f6f3c5002cd13b9a506534ae90e79e4_prof);

        
        $__internal_b0f42091514935178536155df0a605be1d3e63d09892aff25899054790d66869->leave($__internal_b0f42091514935178536155df0a605be1d3e63d09892aff25899054790d66869_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f279af3a5df537c760442df84e46140726202c29550a0d625a33e102261e66f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f279af3a5df537c760442df84e46140726202c29550a0d625a33e102261e66f6->enter($__internal_f279af3a5df537c760442df84e46140726202c29550a0d625a33e102261e66f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b7457b0ee49de60bc6b5f8ac3972016e4aa33032be49a883aa520112a14eb081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7457b0ee49de60bc6b5f8ac3972016e4aa33032be49a883aa520112a14eb081->enter($__internal_b7457b0ee49de60bc6b5f8ac3972016e4aa33032be49a883aa520112a14eb081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_b7457b0ee49de60bc6b5f8ac3972016e4aa33032be49a883aa520112a14eb081->leave($__internal_b7457b0ee49de60bc6b5f8ac3972016e4aa33032be49a883aa520112a14eb081_prof);

        
        $__internal_f279af3a5df537c760442df84e46140726202c29550a0d625a33e102261e66f6->leave($__internal_f279af3a5df537c760442df84e46140726202c29550a0d625a33e102261e66f6_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ec106add5ad50e58c7f123b3001619a3a24be51e381fe57ac2c73041e23eefd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec106add5ad50e58c7f123b3001619a3a24be51e381fe57ac2c73041e23eefd0->enter($__internal_ec106add5ad50e58c7f123b3001619a3a24be51e381fe57ac2c73041e23eefd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_678c6e1658de57f6332625d7c2e81840ccd3e05af0d9d0fc6f25437bd0187c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678c6e1658de57f6332625d7c2e81840ccd3e05af0d9d0fc6f25437bd0187c34->enter($__internal_678c6e1658de57f6332625d7c2e81840ccd3e05af0d9d0fc6f25437bd0187c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_678c6e1658de57f6332625d7c2e81840ccd3e05af0d9d0fc6f25437bd0187c34->leave($__internal_678c6e1658de57f6332625d7c2e81840ccd3e05af0d9d0fc6f25437bd0187c34_prof);

        
        $__internal_ec106add5ad50e58c7f123b3001619a3a24be51e381fe57ac2c73041e23eefd0->leave($__internal_ec106add5ad50e58c7f123b3001619a3a24be51e381fe57ac2c73041e23eefd0_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b4f401f7a02c221a62927c6f025901992cf735aa4e20a07a79bbb2d64bd9540b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f401f7a02c221a62927c6f025901992cf735aa4e20a07a79bbb2d64bd9540b->enter($__internal_b4f401f7a02c221a62927c6f025901992cf735aa4e20a07a79bbb2d64bd9540b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_46918ec3dca0ae2558c2930af74951db65552806939fe74b74caf3ec75f49bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46918ec3dca0ae2558c2930af74951db65552806939fe74b74caf3ec75f49bcb->enter($__internal_46918ec3dca0ae2558c2930af74951db65552806939fe74b74caf3ec75f49bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_46918ec3dca0ae2558c2930af74951db65552806939fe74b74caf3ec75f49bcb->leave($__internal_46918ec3dca0ae2558c2930af74951db65552806939fe74b74caf3ec75f49bcb_prof);

        
        $__internal_b4f401f7a02c221a62927c6f025901992cf735aa4e20a07a79bbb2d64bd9540b->leave($__internal_b4f401f7a02c221a62927c6f025901992cf735aa4e20a07a79bbb2d64bd9540b_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5ec7a940967a5a666290eee26fa94dd70d058ee85a6db82855d5478d7c8cebbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec7a940967a5a666290eee26fa94dd70d058ee85a6db82855d5478d7c8cebbd->enter($__internal_5ec7a940967a5a666290eee26fa94dd70d058ee85a6db82855d5478d7c8cebbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_745423fec3004783f38cec71bc8e48aacf8026e214249468e35610ef2cec4907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745423fec3004783f38cec71bc8e48aacf8026e214249468e35610ef2cec4907->enter($__internal_745423fec3004783f38cec71bc8e48aacf8026e214249468e35610ef2cec4907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_745423fec3004783f38cec71bc8e48aacf8026e214249468e35610ef2cec4907->leave($__internal_745423fec3004783f38cec71bc8e48aacf8026e214249468e35610ef2cec4907_prof);

        
        $__internal_5ec7a940967a5a666290eee26fa94dd70d058ee85a6db82855d5478d7c8cebbd->leave($__internal_5ec7a940967a5a666290eee26fa94dd70d058ee85a6db82855d5478d7c8cebbd_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_fd3554b9a5064a56e12f4a0f140a5993b2d812d5113f6693fafaeeff140e9ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3554b9a5064a56e12f4a0f140a5993b2d812d5113f6693fafaeeff140e9ae7->enter($__internal_fd3554b9a5064a56e12f4a0f140a5993b2d812d5113f6693fafaeeff140e9ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_94880fb62ac1f4090810e73b1d13dd2ec0377a193ec93f598a107c5f7d7457eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94880fb62ac1f4090810e73b1d13dd2ec0377a193ec93f598a107c5f7d7457eb->enter($__internal_94880fb62ac1f4090810e73b1d13dd2ec0377a193ec93f598a107c5f7d7457eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_94880fb62ac1f4090810e73b1d13dd2ec0377a193ec93f598a107c5f7d7457eb->leave($__internal_94880fb62ac1f4090810e73b1d13dd2ec0377a193ec93f598a107c5f7d7457eb_prof);

        
        $__internal_fd3554b9a5064a56e12f4a0f140a5993b2d812d5113f6693fafaeeff140e9ae7->leave($__internal_fd3554b9a5064a56e12f4a0f140a5993b2d812d5113f6693fafaeeff140e9ae7_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_feab9f703ccc7d8cc00afadbcb5460dd2fc5d62b6a98df3dbca3655c70a31e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feab9f703ccc7d8cc00afadbcb5460dd2fc5d62b6a98df3dbca3655c70a31e70->enter($__internal_feab9f703ccc7d8cc00afadbcb5460dd2fc5d62b6a98df3dbca3655c70a31e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4d74ed8f3fc83db0d4af48cb234ab2f0c127529d18ce4f119fc24b24a07d6777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d74ed8f3fc83db0d4af48cb234ab2f0c127529d18ce4f119fc24b24a07d6777->enter($__internal_4d74ed8f3fc83db0d4af48cb234ab2f0c127529d18ce4f119fc24b24a07d6777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 218
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 224
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
            // line 225
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_4d74ed8f3fc83db0d4af48cb234ab2f0c127529d18ce4f119fc24b24a07d6777->leave($__internal_4d74ed8f3fc83db0d4af48cb234ab2f0c127529d18ce4f119fc24b24a07d6777_prof);

        
        $__internal_feab9f703ccc7d8cc00afadbcb5460dd2fc5d62b6a98df3dbca3655c70a31e70->leave($__internal_feab9f703ccc7d8cc00afadbcb5460dd2fc5d62b6a98df3dbca3655c70a31e70_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_54876fd91a86d49237d0b50ce2d714ee4ba47226bbb053a23ee4c0298f869d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54876fd91a86d49237d0b50ce2d714ee4ba47226bbb053a23ee4c0298f869d44->enter($__internal_54876fd91a86d49237d0b50ce2d714ee4ba47226bbb053a23ee4c0298f869d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_59bdb5ce3a49d2ce481ece5d99da94bed3f0275920a3f400bc10be1f41204933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bdb5ce3a49d2ce481ece5d99da94bed3f0275920a3f400bc10be1f41204933->enter($__internal_59bdb5ce3a49d2ce481ece5d99da94bed3f0275920a3f400bc10be1f41204933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_59bdb5ce3a49d2ce481ece5d99da94bed3f0275920a3f400bc10be1f41204933->leave($__internal_59bdb5ce3a49d2ce481ece5d99da94bed3f0275920a3f400bc10be1f41204933_prof);

        
        $__internal_54876fd91a86d49237d0b50ce2d714ee4ba47226bbb053a23ee4c0298f869d44->leave($__internal_54876fd91a86d49237d0b50ce2d714ee4ba47226bbb053a23ee4c0298f869d44_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2bed1c5ad90a9abe9f1d6f1972771c88821940417b473597ba9482c1dbf60b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bed1c5ad90a9abe9f1d6f1972771c88821940417b473597ba9482c1dbf60b6d->enter($__internal_2bed1c5ad90a9abe9f1d6f1972771c88821940417b473597ba9482c1dbf60b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_10e92eacefb363d47055dfda65c906e455a4a8caa72cb6b42defa75910db387b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e92eacefb363d47055dfda65c906e455a4a8caa72cb6b42defa75910db387b->enter($__internal_10e92eacefb363d47055dfda65c906e455a4a8caa72cb6b42defa75910db387b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_10e92eacefb363d47055dfda65c906e455a4a8caa72cb6b42defa75910db387b->leave($__internal_10e92eacefb363d47055dfda65c906e455a4a8caa72cb6b42defa75910db387b_prof);

        
        $__internal_2bed1c5ad90a9abe9f1d6f1972771c88821940417b473597ba9482c1dbf60b6d->leave($__internal_2bed1c5ad90a9abe9f1d6f1972771c88821940417b473597ba9482c1dbf60b6d_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d31e5447c3a6423cccf364b7ce77ac805f6ba45e74dc80595e523f7ddb61c04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31e5447c3a6423cccf364b7ce77ac805f6ba45e74dc80595e523f7ddb61c04b->enter($__internal_d31e5447c3a6423cccf364b7ce77ac805f6ba45e74dc80595e523f7ddb61c04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ad89b383eb892890230ef98c70a94f42c6fcf9341bf4a59963b7987576f0b211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad89b383eb892890230ef98c70a94f42c6fcf9341bf4a59963b7987576f0b211->enter($__internal_ad89b383eb892890230ef98c70a94f42c6fcf9341bf4a59963b7987576f0b211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ad89b383eb892890230ef98c70a94f42c6fcf9341bf4a59963b7987576f0b211->leave($__internal_ad89b383eb892890230ef98c70a94f42c6fcf9341bf4a59963b7987576f0b211_prof);

        
        $__internal_d31e5447c3a6423cccf364b7ce77ac805f6ba45e74dc80595e523f7ddb61c04b->leave($__internal_d31e5447c3a6423cccf364b7ce77ac805f6ba45e74dc80595e523f7ddb61c04b_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ff461f99ce48ac9fd734f097544386b790a2ddec7ad9c3464cbd6979ad464cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff461f99ce48ac9fd734f097544386b790a2ddec7ad9c3464cbd6979ad464cef->enter($__internal_ff461f99ce48ac9fd734f097544386b790a2ddec7ad9c3464cbd6979ad464cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_363acf32b5a37697cfa17d6552382c235d2cb2151e4b3a475b91c9b543046357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363acf32b5a37697cfa17d6552382c235d2cb2151e4b3a475b91c9b543046357->enter($__internal_363acf32b5a37697cfa17d6552382c235d2cb2151e4b3a475b91c9b543046357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_363acf32b5a37697cfa17d6552382c235d2cb2151e4b3a475b91c9b543046357->leave($__internal_363acf32b5a37697cfa17d6552382c235d2cb2151e4b3a475b91c9b543046357_prof);

        
        $__internal_ff461f99ce48ac9fd734f097544386b790a2ddec7ad9c3464cbd6979ad464cef->leave($__internal_ff461f99ce48ac9fd734f097544386b790a2ddec7ad9c3464cbd6979ad464cef_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b277906583591625bcfed7640c7aa77e6435ce6829ea591e23a8ad48313437e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b277906583591625bcfed7640c7aa77e6435ce6829ea591e23a8ad48313437e3->enter($__internal_b277906583591625bcfed7640c7aa77e6435ce6829ea591e23a8ad48313437e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f440ec00afdc9727c9cd02228598b94663a4855242a7fcd7048f8b62073716ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f440ec00afdc9727c9cd02228598b94663a4855242a7fcd7048f8b62073716ea->enter($__internal_f440ec00afdc9727c9cd02228598b94663a4855242a7fcd7048f8b62073716ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f440ec00afdc9727c9cd02228598b94663a4855242a7fcd7048f8b62073716ea->leave($__internal_f440ec00afdc9727c9cd02228598b94663a4855242a7fcd7048f8b62073716ea_prof);

        
        $__internal_b277906583591625bcfed7640c7aa77e6435ce6829ea591e23a8ad48313437e3->leave($__internal_b277906583591625bcfed7640c7aa77e6435ce6829ea591e23a8ad48313437e3_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_eeb78c9b72f45f5770b5f5b552de174da2dfab27895e4e25f95b35fadbf6ef38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb78c9b72f45f5770b5f5b552de174da2dfab27895e4e25f95b35fadbf6ef38->enter($__internal_eeb78c9b72f45f5770b5f5b552de174da2dfab27895e4e25f95b35fadbf6ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1f0d29123f17dfad8757605ce369cee54ee1ab1a44a414e57e837989ef217ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0d29123f17dfad8757605ce369cee54ee1ab1a44a414e57e837989ef217ce8->enter($__internal_1f0d29123f17dfad8757605ce369cee54ee1ab1a44a414e57e837989ef217ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f0d29123f17dfad8757605ce369cee54ee1ab1a44a414e57e837989ef217ce8->leave($__internal_1f0d29123f17dfad8757605ce369cee54ee1ab1a44a414e57e837989ef217ce8_prof);

        
        $__internal_eeb78c9b72f45f5770b5f5b552de174da2dfab27895e4e25f95b35fadbf6ef38->leave($__internal_eeb78c9b72f45f5770b5f5b552de174da2dfab27895e4e25f95b35fadbf6ef38_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_dddf85cec8a964ec271a9fbda78fe999a5c670b07207094e426fcb53e3ca7309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dddf85cec8a964ec271a9fbda78fe999a5c670b07207094e426fcb53e3ca7309->enter($__internal_dddf85cec8a964ec271a9fbda78fe999a5c670b07207094e426fcb53e3ca7309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b9a8605d0218de271dac042e53145c55a9a26aed6c5435ff33da13f3772d2713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a8605d0218de271dac042e53145c55a9a26aed6c5435ff33da13f3772d2713->enter($__internal_b9a8605d0218de271dac042e53145c55a9a26aed6c5435ff33da13f3772d2713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_b9a8605d0218de271dac042e53145c55a9a26aed6c5435ff33da13f3772d2713->leave($__internal_b9a8605d0218de271dac042e53145c55a9a26aed6c5435ff33da13f3772d2713_prof);

        
        $__internal_dddf85cec8a964ec271a9fbda78fe999a5c670b07207094e426fcb53e3ca7309->leave($__internal_dddf85cec8a964ec271a9fbda78fe999a5c670b07207094e426fcb53e3ca7309_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4494a4c7fa1cc83ef198a9fcf76f465a50511c92defe24dbabf10b3b74a77105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4494a4c7fa1cc83ef198a9fcf76f465a50511c92defe24dbabf10b3b74a77105->enter($__internal_4494a4c7fa1cc83ef198a9fcf76f465a50511c92defe24dbabf10b3b74a77105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7e7c61749342d8963146870be6d3babdc23596e39e9f8eff284c91138fffe153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7c61749342d8963146870be6d3babdc23596e39e9f8eff284c91138fffe153->enter($__internal_7e7c61749342d8963146870be6d3babdc23596e39e9f8eff284c91138fffe153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_7e7c61749342d8963146870be6d3babdc23596e39e9f8eff284c91138fffe153->leave($__internal_7e7c61749342d8963146870be6d3babdc23596e39e9f8eff284c91138fffe153_prof);

        
        $__internal_4494a4c7fa1cc83ef198a9fcf76f465a50511c92defe24dbabf10b3b74a77105->leave($__internal_4494a4c7fa1cc83ef198a9fcf76f465a50511c92defe24dbabf10b3b74a77105_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b106d05194f261a30199d9064d0ec1f88c248b80ae0629e5d1d7da72e06465b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b106d05194f261a30199d9064d0ec1f88c248b80ae0629e5d1d7da72e06465b5->enter($__internal_b106d05194f261a30199d9064d0ec1f88c248b80ae0629e5d1d7da72e06465b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ff9c027d659b8a506eef01a31042e983a6a4b516f63579c12c391318106da0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9c027d659b8a506eef01a31042e983a6a4b516f63579c12c391318106da0cb->enter($__internal_ff9c027d659b8a506eef01a31042e983a6a4b516f63579c12c391318106da0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ff9c027d659b8a506eef01a31042e983a6a4b516f63579c12c391318106da0cb->leave($__internal_ff9c027d659b8a506eef01a31042e983a6a4b516f63579c12c391318106da0cb_prof);

        
        $__internal_b106d05194f261a30199d9064d0ec1f88c248b80ae0629e5d1d7da72e06465b5->leave($__internal_b106d05194f261a30199d9064d0ec1f88c248b80ae0629e5d1d7da72e06465b5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

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
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
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
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
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
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
