<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_e42c783188af7ef01958625e708ecc903bd18dcbe05480c1581043c31e7d72d5 extends Twig_Template
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
        $__internal_54902137244c8ce0bf57d50a3730313b5a735205d4ba936da1e869307816cbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54902137244c8ce0bf57d50a3730313b5a735205d4ba936da1e869307816cbea->enter($__internal_54902137244c8ce0bf57d50a3730313b5a735205d4ba936da1e869307816cbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_292d2d2ffeafcdb8dafb70c481861df4e9c6e81b57207931ccde8272d71ecb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292d2d2ffeafcdb8dafb70c481861df4e9c6e81b57207931ccde8272d71ecb8b->enter($__internal_292d2d2ffeafcdb8dafb70c481861df4e9c6e81b57207931ccde8272d71ecb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_54902137244c8ce0bf57d50a3730313b5a735205d4ba936da1e869307816cbea->leave($__internal_54902137244c8ce0bf57d50a3730313b5a735205d4ba936da1e869307816cbea_prof);

        
        $__internal_292d2d2ffeafcdb8dafb70c481861df4e9c6e81b57207931ccde8272d71ecb8b->leave($__internal_292d2d2ffeafcdb8dafb70c481861df4e9c6e81b57207931ccde8272d71ecb8b_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7eea67e7636eb11c5d52e04c0632c7643857de2581e48a3ffd2a2dff820f65dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eea67e7636eb11c5d52e04c0632c7643857de2581e48a3ffd2a2dff820f65dd->enter($__internal_7eea67e7636eb11c5d52e04c0632c7643857de2581e48a3ffd2a2dff820f65dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_05a7cd6ccd76bb61e062e21a8bb5f2247fb22e966d02d95bffa464a02757485e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a7cd6ccd76bb61e062e21a8bb5f2247fb22e966d02d95bffa464a02757485e->enter($__internal_05a7cd6ccd76bb61e062e21a8bb5f2247fb22e966d02d95bffa464a02757485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_05a7cd6ccd76bb61e062e21a8bb5f2247fb22e966d02d95bffa464a02757485e->leave($__internal_05a7cd6ccd76bb61e062e21a8bb5f2247fb22e966d02d95bffa464a02757485e_prof);

        
        $__internal_7eea67e7636eb11c5d52e04c0632c7643857de2581e48a3ffd2a2dff820f65dd->leave($__internal_7eea67e7636eb11c5d52e04c0632c7643857de2581e48a3ffd2a2dff820f65dd_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d5b71eeb595b606de2df4ffcca43a39ad6d87a36429cd7c74cd4f66bff8fdd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b71eeb595b606de2df4ffcca43a39ad6d87a36429cd7c74cd4f66bff8fdd10->enter($__internal_d5b71eeb595b606de2df4ffcca43a39ad6d87a36429cd7c74cd4f66bff8fdd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_271a149db884799573cafed7623dd788c91836b985d33a03f1532be6703ce0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271a149db884799573cafed7623dd788c91836b985d33a03f1532be6703ce0bf->enter($__internal_271a149db884799573cafed7623dd788c91836b985d33a03f1532be6703ce0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_271a149db884799573cafed7623dd788c91836b985d33a03f1532be6703ce0bf->leave($__internal_271a149db884799573cafed7623dd788c91836b985d33a03f1532be6703ce0bf_prof);

        
        $__internal_d5b71eeb595b606de2df4ffcca43a39ad6d87a36429cd7c74cd4f66bff8fdd10->leave($__internal_d5b71eeb595b606de2df4ffcca43a39ad6d87a36429cd7c74cd4f66bff8fdd10_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9c707abcb1984f2689ec29b4ce8cc8af588bf5bb8506508c9c0642367de443a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c707abcb1984f2689ec29b4ce8cc8af588bf5bb8506508c9c0642367de443a6->enter($__internal_9c707abcb1984f2689ec29b4ce8cc8af588bf5bb8506508c9c0642367de443a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_80cdc6afc14781174fd6d9da196fb2790d6e0670bb7425c4d988196332089542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cdc6afc14781174fd6d9da196fb2790d6e0670bb7425c4d988196332089542->enter($__internal_80cdc6afc14781174fd6d9da196fb2790d6e0670bb7425c4d988196332089542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_80cdc6afc14781174fd6d9da196fb2790d6e0670bb7425c4d988196332089542->leave($__internal_80cdc6afc14781174fd6d9da196fb2790d6e0670bb7425c4d988196332089542_prof);

        
        $__internal_9c707abcb1984f2689ec29b4ce8cc8af588bf5bb8506508c9c0642367de443a6->leave($__internal_9c707abcb1984f2689ec29b4ce8cc8af588bf5bb8506508c9c0642367de443a6_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_5324b7093e1b6b672dc3bec0ccf4030c7f6a3b769e7191e99fc31f30f2e5d86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5324b7093e1b6b672dc3bec0ccf4030c7f6a3b769e7191e99fc31f30f2e5d86a->enter($__internal_5324b7093e1b6b672dc3bec0ccf4030c7f6a3b769e7191e99fc31f30f2e5d86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9946e4b40a50612c9a47dde32170751f5903cf976867205e67997ba46aab52ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9946e4b40a50612c9a47dde32170751f5903cf976867205e67997ba46aab52ba->enter($__internal_9946e4b40a50612c9a47dde32170751f5903cf976867205e67997ba46aab52ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_71381ca227448f43b92e44cb1d621551f1dde9fc2a95a1708ef283a4ba101927 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_63b24ca8185c0a91667b1d376c76cee5fea744e5c84bef24097fb91355089ba0 = "{{") && ('' === $__internal_63b24ca8185c0a91667b1d376c76cee5fea744e5c84bef24097fb91355089ba0 || 0 === strpos($__internal_71381ca227448f43b92e44cb1d621551f1dde9fc2a95a1708ef283a4ba101927, $__internal_63b24ca8185c0a91667b1d376c76cee5fea744e5c84bef24097fb91355089ba0)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_aa1235b4852b46f61c9518bdf4fad0dfab30f22f8e535ff72d08f811783064d1 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_bb6bb3a95688d2053ce6602c76cb570520545e519208ea1e9c6cc79061623f91 = "}}") && ('' === $__internal_bb6bb3a95688d2053ce6602c76cb570520545e519208ea1e9c6cc79061623f91 || $__internal_bb6bb3a95688d2053ce6602c76cb570520545e519208ea1e9c6cc79061623f91 === substr($__internal_aa1235b4852b46f61c9518bdf4fad0dfab30f22f8e535ff72d08f811783064d1, -strlen($__internal_bb6bb3a95688d2053ce6602c76cb570520545e519208ea1e9c6cc79061623f91))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
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
        
        $__internal_9946e4b40a50612c9a47dde32170751f5903cf976867205e67997ba46aab52ba->leave($__internal_9946e4b40a50612c9a47dde32170751f5903cf976867205e67997ba46aab52ba_prof);

        
        $__internal_5324b7093e1b6b672dc3bec0ccf4030c7f6a3b769e7191e99fc31f30f2e5d86a->leave($__internal_5324b7093e1b6b672dc3bec0ccf4030c7f6a3b769e7191e99fc31f30f2e5d86a_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7bd761b205c4474af9614203215cac31da7a4dd08ec089acdfd379555b5beab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd761b205c4474af9614203215cac31da7a4dd08ec089acdfd379555b5beab2->enter($__internal_7bd761b205c4474af9614203215cac31da7a4dd08ec089acdfd379555b5beab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_299c2fb70186e812ec505f61a4e1457ccc19cc3cf1f9f9cc1833a071ca273534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299c2fb70186e812ec505f61a4e1457ccc19cc3cf1f9f9cc1833a071ca273534->enter($__internal_299c2fb70186e812ec505f61a4e1457ccc19cc3cf1f9f9cc1833a071ca273534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_299c2fb70186e812ec505f61a4e1457ccc19cc3cf1f9f9cc1833a071ca273534->leave($__internal_299c2fb70186e812ec505f61a4e1457ccc19cc3cf1f9f9cc1833a071ca273534_prof);

        
        $__internal_7bd761b205c4474af9614203215cac31da7a4dd08ec089acdfd379555b5beab2->leave($__internal_7bd761b205c4474af9614203215cac31da7a4dd08ec089acdfd379555b5beab2_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_cb860470b2f86b2323afac6a6d5db9a79ac2b9f8f1e5980bfff85d18d52032b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb860470b2f86b2323afac6a6d5db9a79ac2b9f8f1e5980bfff85d18d52032b4->enter($__internal_cb860470b2f86b2323afac6a6d5db9a79ac2b9f8f1e5980bfff85d18d52032b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_2b5ea2bf9e32a282ba3be16bb3de76e5e665a777eb4122d2a30ccc7903012114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5ea2bf9e32a282ba3be16bb3de76e5e665a777eb4122d2a30ccc7903012114->enter($__internal_2b5ea2bf9e32a282ba3be16bb3de76e5e665a777eb4122d2a30ccc7903012114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_2b5ea2bf9e32a282ba3be16bb3de76e5e665a777eb4122d2a30ccc7903012114->leave($__internal_2b5ea2bf9e32a282ba3be16bb3de76e5e665a777eb4122d2a30ccc7903012114_prof);

        
        $__internal_cb860470b2f86b2323afac6a6d5db9a79ac2b9f8f1e5980bfff85d18d52032b4->leave($__internal_cb860470b2f86b2323afac6a6d5db9a79ac2b9f8f1e5980bfff85d18d52032b4_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7d115c6ce8e3891071e9b47400bb4505510122ca272254546bb66aef7dee627e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d115c6ce8e3891071e9b47400bb4505510122ca272254546bb66aef7dee627e->enter($__internal_7d115c6ce8e3891071e9b47400bb4505510122ca272254546bb66aef7dee627e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0c43eac96a10a31244b7e2a5fd8edfa437ad770950804215f12c7b1892f6ed12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c43eac96a10a31244b7e2a5fd8edfa437ad770950804215f12c7b1892f6ed12->enter($__internal_0c43eac96a10a31244b7e2a5fd8edfa437ad770950804215f12c7b1892f6ed12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_0c43eac96a10a31244b7e2a5fd8edfa437ad770950804215f12c7b1892f6ed12->leave($__internal_0c43eac96a10a31244b7e2a5fd8edfa437ad770950804215f12c7b1892f6ed12_prof);

        
        $__internal_7d115c6ce8e3891071e9b47400bb4505510122ca272254546bb66aef7dee627e->leave($__internal_7d115c6ce8e3891071e9b47400bb4505510122ca272254546bb66aef7dee627e_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5820e5b0e50b35372aa412262f690de012a21c12aa3b8644337abca907b968bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5820e5b0e50b35372aa412262f690de012a21c12aa3b8644337abca907b968bd->enter($__internal_5820e5b0e50b35372aa412262f690de012a21c12aa3b8644337abca907b968bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8a43f4a6e2856d2cb84dfcfbb81677562052461dc8895c3872c7862c828bf608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a43f4a6e2856d2cb84dfcfbb81677562052461dc8895c3872c7862c828bf608->enter($__internal_8a43f4a6e2856d2cb84dfcfbb81677562052461dc8895c3872c7862c828bf608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_8a43f4a6e2856d2cb84dfcfbb81677562052461dc8895c3872c7862c828bf608->leave($__internal_8a43f4a6e2856d2cb84dfcfbb81677562052461dc8895c3872c7862c828bf608_prof);

        
        $__internal_5820e5b0e50b35372aa412262f690de012a21c12aa3b8644337abca907b968bd->leave($__internal_5820e5b0e50b35372aa412262f690de012a21c12aa3b8644337abca907b968bd_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_86b54097a58afe76c516f925ad4b00b2c462fa46977aa6197f5fef20895b5767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b54097a58afe76c516f925ad4b00b2c462fa46977aa6197f5fef20895b5767->enter($__internal_86b54097a58afe76c516f925ad4b00b2c462fa46977aa6197f5fef20895b5767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6cbfcb1f01a29ecfa4cc32527e8943046a13c41cb50124654814fed67bea666b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbfcb1f01a29ecfa4cc32527e8943046a13c41cb50124654814fed67bea666b->enter($__internal_6cbfcb1f01a29ecfa4cc32527e8943046a13c41cb50124654814fed67bea666b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_6cbfcb1f01a29ecfa4cc32527e8943046a13c41cb50124654814fed67bea666b->leave($__internal_6cbfcb1f01a29ecfa4cc32527e8943046a13c41cb50124654814fed67bea666b_prof);

        
        $__internal_86b54097a58afe76c516f925ad4b00b2c462fa46977aa6197f5fef20895b5767->leave($__internal_86b54097a58afe76c516f925ad4b00b2c462fa46977aa6197f5fef20895b5767_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5a73d39ec78e2048b871e97cbedafcbee7c9c42593d8ec40716d84887a029e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a73d39ec78e2048b871e97cbedafcbee7c9c42593d8ec40716d84887a029e8a->enter($__internal_5a73d39ec78e2048b871e97cbedafcbee7c9c42593d8ec40716d84887a029e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f456b37a3939996d74ff13feb50c6b9c00731304977d5b551f57ef1ff94a7bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f456b37a3939996d74ff13feb50c6b9c00731304977d5b551f57ef1ff94a7bad->enter($__internal_f456b37a3939996d74ff13feb50c6b9c00731304977d5b551f57ef1ff94a7bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f456b37a3939996d74ff13feb50c6b9c00731304977d5b551f57ef1ff94a7bad->leave($__internal_f456b37a3939996d74ff13feb50c6b9c00731304977d5b551f57ef1ff94a7bad_prof);

        
        $__internal_5a73d39ec78e2048b871e97cbedafcbee7c9c42593d8ec40716d84887a029e8a->leave($__internal_5a73d39ec78e2048b871e97cbedafcbee7c9c42593d8ec40716d84887a029e8a_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d4c860da67e9dea78f360e22e72126a1bc768fade1688cb3615b4a5c7b39c054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c860da67e9dea78f360e22e72126a1bc768fade1688cb3615b4a5c7b39c054->enter($__internal_d4c860da67e9dea78f360e22e72126a1bc768fade1688cb3615b4a5c7b39c054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a78966134b6cedae2f3200aa9756a766dc32ccb212c3397d9927973b694254c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78966134b6cedae2f3200aa9756a766dc32ccb212c3397d9927973b694254c7->enter($__internal_a78966134b6cedae2f3200aa9756a766dc32ccb212c3397d9927973b694254c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
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
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_a78966134b6cedae2f3200aa9756a766dc32ccb212c3397d9927973b694254c7->leave($__internal_a78966134b6cedae2f3200aa9756a766dc32ccb212c3397d9927973b694254c7_prof);

        
        $__internal_d4c860da67e9dea78f360e22e72126a1bc768fade1688cb3615b4a5c7b39c054->leave($__internal_d4c860da67e9dea78f360e22e72126a1bc768fade1688cb3615b4a5c7b39c054_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_27e8a0af8c94291bcd3a37c1507404fec4bcbde6de8359730e40b9a080d4057d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e8a0af8c94291bcd3a37c1507404fec4bcbde6de8359730e40b9a080d4057d->enter($__internal_27e8a0af8c94291bcd3a37c1507404fec4bcbde6de8359730e40b9a080d4057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0bd5248bd58620a95082cf57b4275779d53ad88b3b67fe70efb96d5173182290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd5248bd58620a95082cf57b4275779d53ad88b3b67fe70efb96d5173182290->enter($__internal_0bd5248bd58620a95082cf57b4275779d53ad88b3b67fe70efb96d5173182290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_0bd5248bd58620a95082cf57b4275779d53ad88b3b67fe70efb96d5173182290->leave($__internal_0bd5248bd58620a95082cf57b4275779d53ad88b3b67fe70efb96d5173182290_prof);

        
        $__internal_27e8a0af8c94291bcd3a37c1507404fec4bcbde6de8359730e40b9a080d4057d->leave($__internal_27e8a0af8c94291bcd3a37c1507404fec4bcbde6de8359730e40b9a080d4057d_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b352ddf3fd2f07503163f01dcbfb9ef6cd58afebad2201896bb6e77ad5e8e2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b352ddf3fd2f07503163f01dcbfb9ef6cd58afebad2201896bb6e77ad5e8e2c0->enter($__internal_b352ddf3fd2f07503163f01dcbfb9ef6cd58afebad2201896bb6e77ad5e8e2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a3b3c26e28b0bb5b980476c1fa3b69bbf7cca00ea58461664cbea1819e2dc6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b3c26e28b0bb5b980476c1fa3b69bbf7cca00ea58461664cbea1819e2dc6bc->enter($__internal_a3b3c26e28b0bb5b980476c1fa3b69bbf7cca00ea58461664cbea1819e2dc6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_a3b3c26e28b0bb5b980476c1fa3b69bbf7cca00ea58461664cbea1819e2dc6bc->leave($__internal_a3b3c26e28b0bb5b980476c1fa3b69bbf7cca00ea58461664cbea1819e2dc6bc_prof);

        
        $__internal_b352ddf3fd2f07503163f01dcbfb9ef6cd58afebad2201896bb6e77ad5e8e2c0->leave($__internal_b352ddf3fd2f07503163f01dcbfb9ef6cd58afebad2201896bb6e77ad5e8e2c0_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6d0253859c0439f41bb761abacce6b43754fca5086e477bf9aaf94b7c99aaa44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0253859c0439f41bb761abacce6b43754fca5086e477bf9aaf94b7c99aaa44->enter($__internal_6d0253859c0439f41bb761abacce6b43754fca5086e477bf9aaf94b7c99aaa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d5b93f2449c8ed906dbaa36c0dff6d3ae6f71f5a9d55f46c602e9921e74a0c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b93f2449c8ed906dbaa36c0dff6d3ae6f71f5a9d55f46c602e9921e74a0c5e->enter($__internal_d5b93f2449c8ed906dbaa36c0dff6d3ae6f71f5a9d55f46c602e9921e74a0c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d5b93f2449c8ed906dbaa36c0dff6d3ae6f71f5a9d55f46c602e9921e74a0c5e->leave($__internal_d5b93f2449c8ed906dbaa36c0dff6d3ae6f71f5a9d55f46c602e9921e74a0c5e_prof);

        
        $__internal_6d0253859c0439f41bb761abacce6b43754fca5086e477bf9aaf94b7c99aaa44->leave($__internal_6d0253859c0439f41bb761abacce6b43754fca5086e477bf9aaf94b7c99aaa44_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_faa3c27ded9aa71eecceba53df051225e7a1333fa9d4e4b25844051160ec7bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa3c27ded9aa71eecceba53df051225e7a1333fa9d4e4b25844051160ec7bba->enter($__internal_faa3c27ded9aa71eecceba53df051225e7a1333fa9d4e4b25844051160ec7bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_59b710cf9ad94b043e023ba152f2cd0646b9c20c867858eeb6667d41a4da3643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b710cf9ad94b043e023ba152f2cd0646b9c20c867858eeb6667d41a4da3643->enter($__internal_59b710cf9ad94b043e023ba152f2cd0646b9c20c867858eeb6667d41a4da3643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_59b710cf9ad94b043e023ba152f2cd0646b9c20c867858eeb6667d41a4da3643->leave($__internal_59b710cf9ad94b043e023ba152f2cd0646b9c20c867858eeb6667d41a4da3643_prof);

        
        $__internal_faa3c27ded9aa71eecceba53df051225e7a1333fa9d4e4b25844051160ec7bba->leave($__internal_faa3c27ded9aa71eecceba53df051225e7a1333fa9d4e4b25844051160ec7bba_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8c63789816423e964673f582f6020ae06e76f1b129b0d82ed9a6f9be2c741c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c63789816423e964673f582f6020ae06e76f1b129b0d82ed9a6f9be2c741c75->enter($__internal_8c63789816423e964673f582f6020ae06e76f1b129b0d82ed9a6f9be2c741c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8183951e2e0829d187159f526893b143abcee8a6af3d3e0c770a1688bca55655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8183951e2e0829d187159f526893b143abcee8a6af3d3e0c770a1688bca55655->enter($__internal_8183951e2e0829d187159f526893b143abcee8a6af3d3e0c770a1688bca55655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8183951e2e0829d187159f526893b143abcee8a6af3d3e0c770a1688bca55655->leave($__internal_8183951e2e0829d187159f526893b143abcee8a6af3d3e0c770a1688bca55655_prof);

        
        $__internal_8c63789816423e964673f582f6020ae06e76f1b129b0d82ed9a6f9be2c741c75->leave($__internal_8c63789816423e964673f582f6020ae06e76f1b129b0d82ed9a6f9be2c741c75_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_97b84579a58667f5ae18c0d51ac82e7d8fe05da83575c8ea24dd1f878a56b752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b84579a58667f5ae18c0d51ac82e7d8fe05da83575c8ea24dd1f878a56b752->enter($__internal_97b84579a58667f5ae18c0d51ac82e7d8fe05da83575c8ea24dd1f878a56b752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f1c717c276a1a00a18b015c02abf3ee5be0a8a0b1f53da74e28af1a748ebb293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c717c276a1a00a18b015c02abf3ee5be0a8a0b1f53da74e28af1a748ebb293->enter($__internal_f1c717c276a1a00a18b015c02abf3ee5be0a8a0b1f53da74e28af1a748ebb293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f1c717c276a1a00a18b015c02abf3ee5be0a8a0b1f53da74e28af1a748ebb293->leave($__internal_f1c717c276a1a00a18b015c02abf3ee5be0a8a0b1f53da74e28af1a748ebb293_prof);

        
        $__internal_97b84579a58667f5ae18c0d51ac82e7d8fe05da83575c8ea24dd1f878a56b752->leave($__internal_97b84579a58667f5ae18c0d51ac82e7d8fe05da83575c8ea24dd1f878a56b752_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5aeca1ad9ac7bca03a1b815b86efda699e3d72250e4b0bb54eef5e77cd83f5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aeca1ad9ac7bca03a1b815b86efda699e3d72250e4b0bb54eef5e77cd83f5a7->enter($__internal_5aeca1ad9ac7bca03a1b815b86efda699e3d72250e4b0bb54eef5e77cd83f5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0fad1262e644db0f7c9cd49503c31dfe6feed6d8dce54a336b62600d875eff0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fad1262e644db0f7c9cd49503c31dfe6feed6d8dce54a336b62600d875eff0a->enter($__internal_0fad1262e644db0f7c9cd49503c31dfe6feed6d8dce54a336b62600d875eff0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_0fad1262e644db0f7c9cd49503c31dfe6feed6d8dce54a336b62600d875eff0a->leave($__internal_0fad1262e644db0f7c9cd49503c31dfe6feed6d8dce54a336b62600d875eff0a_prof);

        
        $__internal_5aeca1ad9ac7bca03a1b815b86efda699e3d72250e4b0bb54eef5e77cd83f5a7->leave($__internal_5aeca1ad9ac7bca03a1b815b86efda699e3d72250e4b0bb54eef5e77cd83f5a7_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fb4944ac1d19b151dabff592803e48dc338d3afd55fb8f79ab7e50473ec34907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4944ac1d19b151dabff592803e48dc338d3afd55fb8f79ab7e50473ec34907->enter($__internal_fb4944ac1d19b151dabff592803e48dc338d3afd55fb8f79ab7e50473ec34907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7d04aec3f309ce84ccfd5f9ff1e6f937ba3255df10dbf7a485dd4892650205e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d04aec3f309ce84ccfd5f9ff1e6f937ba3255df10dbf7a485dd4892650205e2->enter($__internal_7d04aec3f309ce84ccfd5f9ff1e6f937ba3255df10dbf7a485dd4892650205e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_7d04aec3f309ce84ccfd5f9ff1e6f937ba3255df10dbf7a485dd4892650205e2->leave($__internal_7d04aec3f309ce84ccfd5f9ff1e6f937ba3255df10dbf7a485dd4892650205e2_prof);

        
        $__internal_fb4944ac1d19b151dabff592803e48dc338d3afd55fb8f79ab7e50473ec34907->leave($__internal_fb4944ac1d19b151dabff592803e48dc338d3afd55fb8f79ab7e50473ec34907_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9316209054faed9d1684ce066129c2f2b098cb7c5f88a2b03b10fd1845c85c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9316209054faed9d1684ce066129c2f2b098cb7c5f88a2b03b10fd1845c85c91->enter($__internal_9316209054faed9d1684ce066129c2f2b098cb7c5f88a2b03b10fd1845c85c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_be5cf2c856f81a4e8dd2a8a3e3212be1e2609abdbc1b317656b5b3ded70b4a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5cf2c856f81a4e8dd2a8a3e3212be1e2609abdbc1b317656b5b3ded70b4a5f->enter($__internal_be5cf2c856f81a4e8dd2a8a3e3212be1e2609abdbc1b317656b5b3ded70b4a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_be5cf2c856f81a4e8dd2a8a3e3212be1e2609abdbc1b317656b5b3ded70b4a5f->leave($__internal_be5cf2c856f81a4e8dd2a8a3e3212be1e2609abdbc1b317656b5b3ded70b4a5f_prof);

        
        $__internal_9316209054faed9d1684ce066129c2f2b098cb7c5f88a2b03b10fd1845c85c91->leave($__internal_9316209054faed9d1684ce066129c2f2b098cb7c5f88a2b03b10fd1845c85c91_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c1afa6296ce14a01acbdea3456e0f941b107b7e88262f9b9bba9412ed59cd3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1afa6296ce14a01acbdea3456e0f941b107b7e88262f9b9bba9412ed59cd3a9->enter($__internal_c1afa6296ce14a01acbdea3456e0f941b107b7e88262f9b9bba9412ed59cd3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_fe88f0bf08d9d99bfbaf082c9fdd7a819715a030cdbd0057ea4eba330c804a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe88f0bf08d9d99bfbaf082c9fdd7a819715a030cdbd0057ea4eba330c804a66->enter($__internal_fe88f0bf08d9d99bfbaf082c9fdd7a819715a030cdbd0057ea4eba330c804a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fe88f0bf08d9d99bfbaf082c9fdd7a819715a030cdbd0057ea4eba330c804a66->leave($__internal_fe88f0bf08d9d99bfbaf082c9fdd7a819715a030cdbd0057ea4eba330c804a66_prof);

        
        $__internal_c1afa6296ce14a01acbdea3456e0f941b107b7e88262f9b9bba9412ed59cd3a9->leave($__internal_c1afa6296ce14a01acbdea3456e0f941b107b7e88262f9b9bba9412ed59cd3a9_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bb05acf2655ca54eea00cc82e525f6eeeaf3b69030e7838ecee674c151547e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb05acf2655ca54eea00cc82e525f6eeeaf3b69030e7838ecee674c151547e00->enter($__internal_bb05acf2655ca54eea00cc82e525f6eeeaf3b69030e7838ecee674c151547e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0bb67c501228d14bbbb096513ddbf0f99c6fa3335e3d50d5e4b7d92181a728c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb67c501228d14bbbb096513ddbf0f99c6fa3335e3d50d5e4b7d92181a728c3->enter($__internal_0bb67c501228d14bbbb096513ddbf0f99c6fa3335e3d50d5e4b7d92181a728c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0bb67c501228d14bbbb096513ddbf0f99c6fa3335e3d50d5e4b7d92181a728c3->leave($__internal_0bb67c501228d14bbbb096513ddbf0f99c6fa3335e3d50d5e4b7d92181a728c3_prof);

        
        $__internal_bb05acf2655ca54eea00cc82e525f6eeeaf3b69030e7838ecee674c151547e00->leave($__internal_bb05acf2655ca54eea00cc82e525f6eeeaf3b69030e7838ecee674c151547e00_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0abdb0893e5aa9539775e86008ced5b39e744898880698ca25d5a8ad3049c320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abdb0893e5aa9539775e86008ced5b39e744898880698ca25d5a8ad3049c320->enter($__internal_0abdb0893e5aa9539775e86008ced5b39e744898880698ca25d5a8ad3049c320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_700b2fbaaec9b3228231cd07deb78d0658eee53af4f3d66616bf409b19bc83e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700b2fbaaec9b3228231cd07deb78d0658eee53af4f3d66616bf409b19bc83e2->enter($__internal_700b2fbaaec9b3228231cd07deb78d0658eee53af4f3d66616bf409b19bc83e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_700b2fbaaec9b3228231cd07deb78d0658eee53af4f3d66616bf409b19bc83e2->leave($__internal_700b2fbaaec9b3228231cd07deb78d0658eee53af4f3d66616bf409b19bc83e2_prof);

        
        $__internal_0abdb0893e5aa9539775e86008ced5b39e744898880698ca25d5a8ad3049c320->leave($__internal_0abdb0893e5aa9539775e86008ced5b39e744898880698ca25d5a8ad3049c320_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_8be7dd98a287d2e54da2c70afbce9b214755f82d9912a73e39b014bc03f4f4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be7dd98a287d2e54da2c70afbce9b214755f82d9912a73e39b014bc03f4f4a4->enter($__internal_8be7dd98a287d2e54da2c70afbce9b214755f82d9912a73e39b014bc03f4f4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d3e03dec57e7ae22a308d3ba9ef12870c86978d515e6ede3a74c2c69d396dddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e03dec57e7ae22a308d3ba9ef12870c86978d515e6ede3a74c2c69d396dddb->enter($__internal_d3e03dec57e7ae22a308d3ba9ef12870c86978d515e6ede3a74c2c69d396dddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d3e03dec57e7ae22a308d3ba9ef12870c86978d515e6ede3a74c2c69d396dddb->leave($__internal_d3e03dec57e7ae22a308d3ba9ef12870c86978d515e6ede3a74c2c69d396dddb_prof);

        
        $__internal_8be7dd98a287d2e54da2c70afbce9b214755f82d9912a73e39b014bc03f4f4a4->leave($__internal_8be7dd98a287d2e54da2c70afbce9b214755f82d9912a73e39b014bc03f4f4a4_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5070b2c81e7af2c09880f12fb135ffd850a95c6f9ee6980b43b5575357ec46d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5070b2c81e7af2c09880f12fb135ffd850a95c6f9ee6980b43b5575357ec46d2->enter($__internal_5070b2c81e7af2c09880f12fb135ffd850a95c6f9ee6980b43b5575357ec46d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_eaf0d42d405a09f14628fa68265eb12e2ee3519d30e1bb3108956e64cbe6099b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf0d42d405a09f14628fa68265eb12e2ee3519d30e1bb3108956e64cbe6099b->enter($__internal_eaf0d42d405a09f14628fa68265eb12e2ee3519d30e1bb3108956e64cbe6099b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_eaf0d42d405a09f14628fa68265eb12e2ee3519d30e1bb3108956e64cbe6099b->leave($__internal_eaf0d42d405a09f14628fa68265eb12e2ee3519d30e1bb3108956e64cbe6099b_prof);

        
        $__internal_5070b2c81e7af2c09880f12fb135ffd850a95c6f9ee6980b43b5575357ec46d2->leave($__internal_5070b2c81e7af2c09880f12fb135ffd850a95c6f9ee6980b43b5575357ec46d2_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bbba4eb9bf4f120e2106bd46f3c71320e12ddb98331a9244875a0c4ebe7f2369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbba4eb9bf4f120e2106bd46f3c71320e12ddb98331a9244875a0c4ebe7f2369->enter($__internal_bbba4eb9bf4f120e2106bd46f3c71320e12ddb98331a9244875a0c4ebe7f2369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2b15105d0f40ed2a2f4738c73660d6b859e7ce87657de0164872be41014bf8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b15105d0f40ed2a2f4738c73660d6b859e7ce87657de0164872be41014bf8e9->enter($__internal_2b15105d0f40ed2a2f4738c73660d6b859e7ce87657de0164872be41014bf8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_2b15105d0f40ed2a2f4738c73660d6b859e7ce87657de0164872be41014bf8e9->leave($__internal_2b15105d0f40ed2a2f4738c73660d6b859e7ce87657de0164872be41014bf8e9_prof);

        
        $__internal_bbba4eb9bf4f120e2106bd46f3c71320e12ddb98331a9244875a0c4ebe7f2369->leave($__internal_bbba4eb9bf4f120e2106bd46f3c71320e12ddb98331a9244875a0c4ebe7f2369_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6ed9e81030bb6296afcf2b5624b49bb6cb0b3ce35474ae8327ae1b44a403d3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed9e81030bb6296afcf2b5624b49bb6cb0b3ce35474ae8327ae1b44a403d3ed->enter($__internal_6ed9e81030bb6296afcf2b5624b49bb6cb0b3ce35474ae8327ae1b44a403d3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fbb7c9f2b44c0957221759c548df9e98b2aa67aa5e63ed1b3db6e6d5baaf946d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb7c9f2b44c0957221759c548df9e98b2aa67aa5e63ed1b3db6e6d5baaf946d->enter($__internal_fbb7c9f2b44c0957221759c548df9e98b2aa67aa5e63ed1b3db6e6d5baaf946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_fbb7c9f2b44c0957221759c548df9e98b2aa67aa5e63ed1b3db6e6d5baaf946d->leave($__internal_fbb7c9f2b44c0957221759c548df9e98b2aa67aa5e63ed1b3db6e6d5baaf946d_prof);

        
        $__internal_6ed9e81030bb6296afcf2b5624b49bb6cb0b3ce35474ae8327ae1b44a403d3ed->leave($__internal_6ed9e81030bb6296afcf2b5624b49bb6cb0b3ce35474ae8327ae1b44a403d3ed_prof);

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
", "bootstrap_3_layout.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
