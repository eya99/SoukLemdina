<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_00340579a8b0fe79724c93f1c9b302a31b35e10bf3ef839290bcf0629d46ee5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0794822b9b8a607bd139cc72ea0047394f351b2cb52016dfdf790e25bb239897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0794822b9b8a607bd139cc72ea0047394f351b2cb52016dfdf790e25bb239897->enter($__internal_0794822b9b8a607bd139cc72ea0047394f351b2cb52016dfdf790e25bb239897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_313c73d45ad6311f157d8daa9bf6cd7b358157646fd8fede6b3986069e0452b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313c73d45ad6311f157d8daa9bf6cd7b358157646fd8fede6b3986069e0452b8->enter($__internal_313c73d45ad6311f157d8daa9bf6cd7b358157646fd8fede6b3986069e0452b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0794822b9b8a607bd139cc72ea0047394f351b2cb52016dfdf790e25bb239897->leave($__internal_0794822b9b8a607bd139cc72ea0047394f351b2cb52016dfdf790e25bb239897_prof);

        
        $__internal_313c73d45ad6311f157d8daa9bf6cd7b358157646fd8fede6b3986069e0452b8->leave($__internal_313c73d45ad6311f157d8daa9bf6cd7b358157646fd8fede6b3986069e0452b8_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e0cb3a41b40fab8c27c80895ecba77ed49930be94437e4344129738ba3334296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0cb3a41b40fab8c27c80895ecba77ed49930be94437e4344129738ba3334296->enter($__internal_e0cb3a41b40fab8c27c80895ecba77ed49930be94437e4344129738ba3334296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_814a9fa009826669f683e928e0cadbe4b073d6e4ab28fe70f52ff89509d1b489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814a9fa009826669f683e928e0cadbe4b073d6e4ab28fe70f52ff89509d1b489->enter($__internal_814a9fa009826669f683e928e0cadbe4b073d6e4ab28fe70f52ff89509d1b489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_814a9fa009826669f683e928e0cadbe4b073d6e4ab28fe70f52ff89509d1b489->leave($__internal_814a9fa009826669f683e928e0cadbe4b073d6e4ab28fe70f52ff89509d1b489_prof);

        
        $__internal_e0cb3a41b40fab8c27c80895ecba77ed49930be94437e4344129738ba3334296->leave($__internal_e0cb3a41b40fab8c27c80895ecba77ed49930be94437e4344129738ba3334296_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d33ad12db7667f3e91c125bff5d86420f2a0db6d2ce81dc177adc58b97bfdc40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33ad12db7667f3e91c125bff5d86420f2a0db6d2ce81dc177adc58b97bfdc40->enter($__internal_d33ad12db7667f3e91c125bff5d86420f2a0db6d2ce81dc177adc58b97bfdc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e3f10574d917f9b0f7adb759e94724271463e9131cf3de2272c8139c8fa908bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f10574d917f9b0f7adb759e94724271463e9131cf3de2272c8139c8fa908bc->enter($__internal_e3f10574d917f9b0f7adb759e94724271463e9131cf3de2272c8139c8fa908bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e3f10574d917f9b0f7adb759e94724271463e9131cf3de2272c8139c8fa908bc->leave($__internal_e3f10574d917f9b0f7adb759e94724271463e9131cf3de2272c8139c8fa908bc_prof);

        
        $__internal_d33ad12db7667f3e91c125bff5d86420f2a0db6d2ce81dc177adc58b97bfdc40->leave($__internal_d33ad12db7667f3e91c125bff5d86420f2a0db6d2ce81dc177adc58b97bfdc40_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1f2ce076f693f56805b2acb60be3e627f3a399388e76d9e207fdc0825bd0f1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2ce076f693f56805b2acb60be3e627f3a399388e76d9e207fdc0825bd0f1cc->enter($__internal_1f2ce076f693f56805b2acb60be3e627f3a399388e76d9e207fdc0825bd0f1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ee59079c0eaa50b222e9c4bd59b953d11cc4e0f1f48f9d38c92a7a9fb53a2093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee59079c0eaa50b222e9c4bd59b953d11cc4e0f1f48f9d38c92a7a9fb53a2093->enter($__internal_ee59079c0eaa50b222e9c4bd59b953d11cc4e0f1f48f9d38c92a7a9fb53a2093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ee59079c0eaa50b222e9c4bd59b953d11cc4e0f1f48f9d38c92a7a9fb53a2093->leave($__internal_ee59079c0eaa50b222e9c4bd59b953d11cc4e0f1f48f9d38c92a7a9fb53a2093_prof);

        
        $__internal_1f2ce076f693f56805b2acb60be3e627f3a399388e76d9e207fdc0825bd0f1cc->leave($__internal_1f2ce076f693f56805b2acb60be3e627f3a399388e76d9e207fdc0825bd0f1cc_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ccbd581ebce73fd50d1284d7e9e1cc9fcae3f05b8c21a2ae32c06d2913c5af93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbd581ebce73fd50d1284d7e9e1cc9fcae3f05b8c21a2ae32c06d2913c5af93->enter($__internal_ccbd581ebce73fd50d1284d7e9e1cc9fcae3f05b8c21a2ae32c06d2913c5af93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_a9fbba5f49c5316ecc49b30bd2478e2e1762dadcf2b4e8d04be9d2141330c3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fbba5f49c5316ecc49b30bd2478e2e1762dadcf2b4e8d04be9d2141330c3ba->enter($__internal_a9fbba5f49c5316ecc49b30bd2478e2e1762dadcf2b4e8d04be9d2141330c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_a9fbba5f49c5316ecc49b30bd2478e2e1762dadcf2b4e8d04be9d2141330c3ba->leave($__internal_a9fbba5f49c5316ecc49b30bd2478e2e1762dadcf2b4e8d04be9d2141330c3ba_prof);

        
        $__internal_ccbd581ebce73fd50d1284d7e9e1cc9fcae3f05b8c21a2ae32c06d2913c5af93->leave($__internal_ccbd581ebce73fd50d1284d7e9e1cc9fcae3f05b8c21a2ae32c06d2913c5af93_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_84169f41b03194aa77a62c5cdb6e064d82090a7d7b72189e609a5d65a3c08468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84169f41b03194aa77a62c5cdb6e064d82090a7d7b72189e609a5d65a3c08468->enter($__internal_84169f41b03194aa77a62c5cdb6e064d82090a7d7b72189e609a5d65a3c08468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_91011d9ee2277c3253f8f6bcab7abdbaaa14c40abc724fd6d99cadb0b89e6715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91011d9ee2277c3253f8f6bcab7abdbaaa14c40abc724fd6d99cadb0b89e6715->enter($__internal_91011d9ee2277c3253f8f6bcab7abdbaaa14c40abc724fd6d99cadb0b89e6715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_91011d9ee2277c3253f8f6bcab7abdbaaa14c40abc724fd6d99cadb0b89e6715->leave($__internal_91011d9ee2277c3253f8f6bcab7abdbaaa14c40abc724fd6d99cadb0b89e6715_prof);

        
        $__internal_84169f41b03194aa77a62c5cdb6e064d82090a7d7b72189e609a5d65a3c08468->leave($__internal_84169f41b03194aa77a62c5cdb6e064d82090a7d7b72189e609a5d65a3c08468_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4bdce4df44b1c5e5cd8d5459207d358c0c67dd51d402a5b064c1705ed5ae9a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bdce4df44b1c5e5cd8d5459207d358c0c67dd51d402a5b064c1705ed5ae9a96->enter($__internal_4bdce4df44b1c5e5cd8d5459207d358c0c67dd51d402a5b064c1705ed5ae9a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d6cf1779f5461350236efefe79b7938bd7ef9be750d49fb252a4cccb5b01afe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cf1779f5461350236efefe79b7938bd7ef9be750d49fb252a4cccb5b01afe3->enter($__internal_d6cf1779f5461350236efefe79b7938bd7ef9be750d49fb252a4cccb5b01afe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_d6cf1779f5461350236efefe79b7938bd7ef9be750d49fb252a4cccb5b01afe3->leave($__internal_d6cf1779f5461350236efefe79b7938bd7ef9be750d49fb252a4cccb5b01afe3_prof);

        
        $__internal_4bdce4df44b1c5e5cd8d5459207d358c0c67dd51d402a5b064c1705ed5ae9a96->leave($__internal_4bdce4df44b1c5e5cd8d5459207d358c0c67dd51d402a5b064c1705ed5ae9a96_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4aa1db337b3d9f5f29c4f963f55aa6051f191a8781ed5288a738671352b2c34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa1db337b3d9f5f29c4f963f55aa6051f191a8781ed5288a738671352b2c34d->enter($__internal_4aa1db337b3d9f5f29c4f963f55aa6051f191a8781ed5288a738671352b2c34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_77f0937b9efcf313734fee5ceeb4907a36d26465960765b86d5aca7e160e24bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f0937b9efcf313734fee5ceeb4907a36d26465960765b86d5aca7e160e24bb->enter($__internal_77f0937b9efcf313734fee5ceeb4907a36d26465960765b86d5aca7e160e24bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_77f0937b9efcf313734fee5ceeb4907a36d26465960765b86d5aca7e160e24bb->leave($__internal_77f0937b9efcf313734fee5ceeb4907a36d26465960765b86d5aca7e160e24bb_prof);

        
        $__internal_4aa1db337b3d9f5f29c4f963f55aa6051f191a8781ed5288a738671352b2c34d->leave($__internal_4aa1db337b3d9f5f29c4f963f55aa6051f191a8781ed5288a738671352b2c34d_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_86c0a148508620188d6779cdd21346d83d61ec23dbca61884a1f73620722909d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c0a148508620188d6779cdd21346d83d61ec23dbca61884a1f73620722909d->enter($__internal_86c0a148508620188d6779cdd21346d83d61ec23dbca61884a1f73620722909d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bf1cb6ca519a357c5b31a3dfde444a026f96bccf2bd45f13e5496f6032a16fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1cb6ca519a357c5b31a3dfde444a026f96bccf2bd45f13e5496f6032a16fcc->enter($__internal_bf1cb6ca519a357c5b31a3dfde444a026f96bccf2bd45f13e5496f6032a16fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_bf1cb6ca519a357c5b31a3dfde444a026f96bccf2bd45f13e5496f6032a16fcc->leave($__internal_bf1cb6ca519a357c5b31a3dfde444a026f96bccf2bd45f13e5496f6032a16fcc_prof);

        
        $__internal_86c0a148508620188d6779cdd21346d83d61ec23dbca61884a1f73620722909d->leave($__internal_86c0a148508620188d6779cdd21346d83d61ec23dbca61884a1f73620722909d_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d92c57404b448cc86e2e9f3f2ae8fdb643ea17e746087c31d01c5a95b5eee03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92c57404b448cc86e2e9f3f2ae8fdb643ea17e746087c31d01c5a95b5eee03d->enter($__internal_d92c57404b448cc86e2e9f3f2ae8fdb643ea17e746087c31d01c5a95b5eee03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1548ec79846d17b94b1d99bfb96f8fd7e3fbf4932079f3e3d864cc6a13c45510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1548ec79846d17b94b1d99bfb96f8fd7e3fbf4932079f3e3d864cc6a13c45510->enter($__internal_1548ec79846d17b94b1d99bfb96f8fd7e3fbf4932079f3e3d864cc6a13c45510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_1548ec79846d17b94b1d99bfb96f8fd7e3fbf4932079f3e3d864cc6a13c45510->leave($__internal_1548ec79846d17b94b1d99bfb96f8fd7e3fbf4932079f3e3d864cc6a13c45510_prof);

        
        $__internal_d92c57404b448cc86e2e9f3f2ae8fdb643ea17e746087c31d01c5a95b5eee03d->leave($__internal_d92c57404b448cc86e2e9f3f2ae8fdb643ea17e746087c31d01c5a95b5eee03d_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2502e12cbed33f2e7c850b9ea33617411580b54ebc1fd796c3b41a65d4baef2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2502e12cbed33f2e7c850b9ea33617411580b54ebc1fd796c3b41a65d4baef2b->enter($__internal_2502e12cbed33f2e7c850b9ea33617411580b54ebc1fd796c3b41a65d4baef2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5b2788c12985e921b252bb322457a2ba7e570f843dcf7554f319c7f66f41f617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2788c12985e921b252bb322457a2ba7e570f843dcf7554f319c7f66f41f617->enter($__internal_5b2788c12985e921b252bb322457a2ba7e570f843dcf7554f319c7f66f41f617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_5b2788c12985e921b252bb322457a2ba7e570f843dcf7554f319c7f66f41f617->leave($__internal_5b2788c12985e921b252bb322457a2ba7e570f843dcf7554f319c7f66f41f617_prof);

        
        $__internal_2502e12cbed33f2e7c850b9ea33617411580b54ebc1fd796c3b41a65d4baef2b->leave($__internal_2502e12cbed33f2e7c850b9ea33617411580b54ebc1fd796c3b41a65d4baef2b_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bc8172d914d6697c935f50420518edeaa01adfa005f043179cd919842568899c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8172d914d6697c935f50420518edeaa01adfa005f043179cd919842568899c->enter($__internal_bc8172d914d6697c935f50420518edeaa01adfa005f043179cd919842568899c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2b6787233e946bc0b2ba067f4e0308415cb6e0c0fe2d21d67aa519793a2dbe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6787233e946bc0b2ba067f4e0308415cb6e0c0fe2d21d67aa519793a2dbe20->enter($__internal_2b6787233e946bc0b2ba067f4e0308415cb6e0c0fe2d21d67aa519793a2dbe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_2b6787233e946bc0b2ba067f4e0308415cb6e0c0fe2d21d67aa519793a2dbe20->leave($__internal_2b6787233e946bc0b2ba067f4e0308415cb6e0c0fe2d21d67aa519793a2dbe20_prof);

        
        $__internal_bc8172d914d6697c935f50420518edeaa01adfa005f043179cd919842568899c->leave($__internal_bc8172d914d6697c935f50420518edeaa01adfa005f043179cd919842568899c_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b5d975efca66cf794ee0d786b52d1ae042ab9a24a713a836562788bf52c5f7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d975efca66cf794ee0d786b52d1ae042ab9a24a713a836562788bf52c5f7e8->enter($__internal_b5d975efca66cf794ee0d786b52d1ae042ab9a24a713a836562788bf52c5f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_940dd42ca481a8a72d53915d1934366f5eddfbb1349a77a6b941f82b1f2b1621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940dd42ca481a8a72d53915d1934366f5eddfbb1349a77a6b941f82b1f2b1621->enter($__internal_940dd42ca481a8a72d53915d1934366f5eddfbb1349a77a6b941f82b1f2b1621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_940dd42ca481a8a72d53915d1934366f5eddfbb1349a77a6b941f82b1f2b1621->leave($__internal_940dd42ca481a8a72d53915d1934366f5eddfbb1349a77a6b941f82b1f2b1621_prof);

        
        $__internal_b5d975efca66cf794ee0d786b52d1ae042ab9a24a713a836562788bf52c5f7e8->leave($__internal_b5d975efca66cf794ee0d786b52d1ae042ab9a24a713a836562788bf52c5f7e8_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0c4cd9d39fbbd1f4e6c36eaf0d01e59e17cca174da31a57fc9c44a2c0527ebd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4cd9d39fbbd1f4e6c36eaf0d01e59e17cca174da31a57fc9c44a2c0527ebd6->enter($__internal_0c4cd9d39fbbd1f4e6c36eaf0d01e59e17cca174da31a57fc9c44a2c0527ebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fbd07c5c6e5bf3607522370278a7a795f6188edb1353ff8503afaf55324672cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd07c5c6e5bf3607522370278a7a795f6188edb1353ff8503afaf55324672cc->enter($__internal_fbd07c5c6e5bf3607522370278a7a795f6188edb1353ff8503afaf55324672cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_fbd07c5c6e5bf3607522370278a7a795f6188edb1353ff8503afaf55324672cc->leave($__internal_fbd07c5c6e5bf3607522370278a7a795f6188edb1353ff8503afaf55324672cc_prof);

        
        $__internal_0c4cd9d39fbbd1f4e6c36eaf0d01e59e17cca174da31a57fc9c44a2c0527ebd6->leave($__internal_0c4cd9d39fbbd1f4e6c36eaf0d01e59e17cca174da31a57fc9c44a2c0527ebd6_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_abd5edefa0ba5d523e1ba4d7f973e6136b930063bbaffd8d50d7e04d0f2cddd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd5edefa0ba5d523e1ba4d7f973e6136b930063bbaffd8d50d7e04d0f2cddd1->enter($__internal_abd5edefa0ba5d523e1ba4d7f973e6136b930063bbaffd8d50d7e04d0f2cddd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6d0001ea91966bb8a63f54a4a26c33840a19fc9c68902d8a989f59c348f2c6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0001ea91966bb8a63f54a4a26c33840a19fc9c68902d8a989f59c348f2c6aa->enter($__internal_6d0001ea91966bb8a63f54a4a26c33840a19fc9c68902d8a989f59c348f2c6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6d0001ea91966bb8a63f54a4a26c33840a19fc9c68902d8a989f59c348f2c6aa->leave($__internal_6d0001ea91966bb8a63f54a4a26c33840a19fc9c68902d8a989f59c348f2c6aa_prof);

        
        $__internal_abd5edefa0ba5d523e1ba4d7f973e6136b930063bbaffd8d50d7e04d0f2cddd1->leave($__internal_abd5edefa0ba5d523e1ba4d7f973e6136b930063bbaffd8d50d7e04d0f2cddd1_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_64aabbd2f57ca76439c5024036df6123941690400a1760f3950e948232eceaf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64aabbd2f57ca76439c5024036df6123941690400a1760f3950e948232eceaf6->enter($__internal_64aabbd2f57ca76439c5024036df6123941690400a1760f3950e948232eceaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_9542a4bbe685ec739ed30db53134dc0c679a2b7700ad3b94dcface62ebbd26af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9542a4bbe685ec739ed30db53134dc0c679a2b7700ad3b94dcface62ebbd26af->enter($__internal_9542a4bbe685ec739ed30db53134dc0c679a2b7700ad3b94dcface62ebbd26af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9542a4bbe685ec739ed30db53134dc0c679a2b7700ad3b94dcface62ebbd26af->leave($__internal_9542a4bbe685ec739ed30db53134dc0c679a2b7700ad3b94dcface62ebbd26af_prof);

        
        $__internal_64aabbd2f57ca76439c5024036df6123941690400a1760f3950e948232eceaf6->leave($__internal_64aabbd2f57ca76439c5024036df6123941690400a1760f3950e948232eceaf6_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8a5d13000c6e81e1942520ebbbc98bdf90a607fb022cefbd4a998925a9b570d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5d13000c6e81e1942520ebbbc98bdf90a607fb022cefbd4a998925a9b570d7->enter($__internal_8a5d13000c6e81e1942520ebbbc98bdf90a607fb022cefbd4a998925a9b570d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_76563a4cdc5a45a08519e740cdd478dcb28114cad3bd07675e36e3bb724f437e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76563a4cdc5a45a08519e740cdd478dcb28114cad3bd07675e36e3bb724f437e->enter($__internal_76563a4cdc5a45a08519e740cdd478dcb28114cad3bd07675e36e3bb724f437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_76563a4cdc5a45a08519e740cdd478dcb28114cad3bd07675e36e3bb724f437e->leave($__internal_76563a4cdc5a45a08519e740cdd478dcb28114cad3bd07675e36e3bb724f437e_prof);

        
        $__internal_8a5d13000c6e81e1942520ebbbc98bdf90a607fb022cefbd4a998925a9b570d7->leave($__internal_8a5d13000c6e81e1942520ebbbc98bdf90a607fb022cefbd4a998925a9b570d7_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_70a0e45c74b9874db67187011f88ffdefa00ab12fa4415ede4421a067a2419fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a0e45c74b9874db67187011f88ffdefa00ab12fa4415ede4421a067a2419fe->enter($__internal_70a0e45c74b9874db67187011f88ffdefa00ab12fa4415ede4421a067a2419fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_186cd6c915adffd02e20095f4448c37c70f30087a8c7906726d94e3455739175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186cd6c915adffd02e20095f4448c37c70f30087a8c7906726d94e3455739175->enter($__internal_186cd6c915adffd02e20095f4448c37c70f30087a8c7906726d94e3455739175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_186cd6c915adffd02e20095f4448c37c70f30087a8c7906726d94e3455739175->leave($__internal_186cd6c915adffd02e20095f4448c37c70f30087a8c7906726d94e3455739175_prof);

        
        $__internal_70a0e45c74b9874db67187011f88ffdefa00ab12fa4415ede4421a067a2419fe->leave($__internal_70a0e45c74b9874db67187011f88ffdefa00ab12fa4415ede4421a067a2419fe_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f17754bca4beb37fea31961d70bd96f1bc24c615640f471974222d00c19cc5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17754bca4beb37fea31961d70bd96f1bc24c615640f471974222d00c19cc5e9->enter($__internal_f17754bca4beb37fea31961d70bd96f1bc24c615640f471974222d00c19cc5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_44ec01a2249eee0a4bb0bca316fca4405c9fe718817abb2f828229131fd4346a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ec01a2249eee0a4bb0bca316fca4405c9fe718817abb2f828229131fd4346a->enter($__internal_44ec01a2249eee0a4bb0bca316fca4405c9fe718817abb2f828229131fd4346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_44ec01a2249eee0a4bb0bca316fca4405c9fe718817abb2f828229131fd4346a->leave($__internal_44ec01a2249eee0a4bb0bca316fca4405c9fe718817abb2f828229131fd4346a_prof);

        
        $__internal_f17754bca4beb37fea31961d70bd96f1bc24c615640f471974222d00c19cc5e9->leave($__internal_f17754bca4beb37fea31961d70bd96f1bc24c615640f471974222d00c19cc5e9_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3ca3317712df1f693fd802247e689c340ae44bada2211e9ee755875b4a66cf1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca3317712df1f693fd802247e689c340ae44bada2211e9ee755875b4a66cf1a->enter($__internal_3ca3317712df1f693fd802247e689c340ae44bada2211e9ee755875b4a66cf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7488833898a00e4fb0984f079e6c437bf2f8a5b00542b2a4999d98abd0248910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7488833898a00e4fb0984f079e6c437bf2f8a5b00542b2a4999d98abd0248910->enter($__internal_7488833898a00e4fb0984f079e6c437bf2f8a5b00542b2a4999d98abd0248910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7488833898a00e4fb0984f079e6c437bf2f8a5b00542b2a4999d98abd0248910->leave($__internal_7488833898a00e4fb0984f079e6c437bf2f8a5b00542b2a4999d98abd0248910_prof);

        
        $__internal_3ca3317712df1f693fd802247e689c340ae44bada2211e9ee755875b4a66cf1a->leave($__internal_3ca3317712df1f693fd802247e689c340ae44bada2211e9ee755875b4a66cf1a_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_39759670e41d1af8919266e1381e332d2212b9d1b523b7921741ebea4029e383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39759670e41d1af8919266e1381e332d2212b9d1b523b7921741ebea4029e383->enter($__internal_39759670e41d1af8919266e1381e332d2212b9d1b523b7921741ebea4029e383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_31cef64e6a19accd3bfb3e4a6570dac871d720b3653e99033d54d502e757afbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cef64e6a19accd3bfb3e4a6570dac871d720b3653e99033d54d502e757afbd->enter($__internal_31cef64e6a19accd3bfb3e4a6570dac871d720b3653e99033d54d502e757afbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_31cef64e6a19accd3bfb3e4a6570dac871d720b3653e99033d54d502e757afbd->leave($__internal_31cef64e6a19accd3bfb3e4a6570dac871d720b3653e99033d54d502e757afbd_prof);

        
        $__internal_39759670e41d1af8919266e1381e332d2212b9d1b523b7921741ebea4029e383->leave($__internal_39759670e41d1af8919266e1381e332d2212b9d1b523b7921741ebea4029e383_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_3b2a16fac982b5f6cf09a066416d90b27fff14c653da67764715f1d4a5143e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2a16fac982b5f6cf09a066416d90b27fff14c653da67764715f1d4a5143e1b->enter($__internal_3b2a16fac982b5f6cf09a066416d90b27fff14c653da67764715f1d4a5143e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6ccfd380bd25ea55d4628d4fc91ee2a800c6a1a0cac51c1136d359a2f62a103b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccfd380bd25ea55d4628d4fc91ee2a800c6a1a0cac51c1136d359a2f62a103b->enter($__internal_6ccfd380bd25ea55d4628d4fc91ee2a800c6a1a0cac51c1136d359a2f62a103b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6ccfd380bd25ea55d4628d4fc91ee2a800c6a1a0cac51c1136d359a2f62a103b->leave($__internal_6ccfd380bd25ea55d4628d4fc91ee2a800c6a1a0cac51c1136d359a2f62a103b_prof);

        
        $__internal_3b2a16fac982b5f6cf09a066416d90b27fff14c653da67764715f1d4a5143e1b->leave($__internal_3b2a16fac982b5f6cf09a066416d90b27fff14c653da67764715f1d4a5143e1b_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c66b203c16adc40035699795fca56459c449bdedbb2276115d115c9e77a21498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66b203c16adc40035699795fca56459c449bdedbb2276115d115c9e77a21498->enter($__internal_c66b203c16adc40035699795fca56459c449bdedbb2276115d115c9e77a21498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_cb8c894346f4db6c66890e5957c52b2b7007ae20787a8e9fc052fa8f1b583706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8c894346f4db6c66890e5957c52b2b7007ae20787a8e9fc052fa8f1b583706->enter($__internal_cb8c894346f4db6c66890e5957c52b2b7007ae20787a8e9fc052fa8f1b583706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cb8c894346f4db6c66890e5957c52b2b7007ae20787a8e9fc052fa8f1b583706->leave($__internal_cb8c894346f4db6c66890e5957c52b2b7007ae20787a8e9fc052fa8f1b583706_prof);

        
        $__internal_c66b203c16adc40035699795fca56459c449bdedbb2276115d115c9e77a21498->leave($__internal_c66b203c16adc40035699795fca56459c449bdedbb2276115d115c9e77a21498_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c5d254898b60c81994795a83a2eab873a24cef5497590104cfc28e2e9c5b875d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d254898b60c81994795a83a2eab873a24cef5497590104cfc28e2e9c5b875d->enter($__internal_c5d254898b60c81994795a83a2eab873a24cef5497590104cfc28e2e9c5b875d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d9c38af82ad4284c12f3824f2631e5c0c0a33bb91d3a0697d8c8aa025049cd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c38af82ad4284c12f3824f2631e5c0c0a33bb91d3a0697d8c8aa025049cd93->enter($__internal_d9c38af82ad4284c12f3824f2631e5c0c0a33bb91d3a0697d8c8aa025049cd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_d9c38af82ad4284c12f3824f2631e5c0c0a33bb91d3a0697d8c8aa025049cd93->leave($__internal_d9c38af82ad4284c12f3824f2631e5c0c0a33bb91d3a0697d8c8aa025049cd93_prof);

        
        $__internal_c5d254898b60c81994795a83a2eab873a24cef5497590104cfc28e2e9c5b875d->leave($__internal_c5d254898b60c81994795a83a2eab873a24cef5497590104cfc28e2e9c5b875d_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3bf0acfdfec6816585f92790434f6e1f4ac4dc5ccddfa7ef407040357584b8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf0acfdfec6816585f92790434f6e1f4ac4dc5ccddfa7ef407040357584b8f7->enter($__internal_3bf0acfdfec6816585f92790434f6e1f4ac4dc5ccddfa7ef407040357584b8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f20065833fadb340b8c2c8f6afe15fcb00adb8a4d706c40bee53aeb76da74a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20065833fadb340b8c2c8f6afe15fcb00adb8a4d706c40bee53aeb76da74a53->enter($__internal_f20065833fadb340b8c2c8f6afe15fcb00adb8a4d706c40bee53aeb76da74a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_f20065833fadb340b8c2c8f6afe15fcb00adb8a4d706c40bee53aeb76da74a53->leave($__internal_f20065833fadb340b8c2c8f6afe15fcb00adb8a4d706c40bee53aeb76da74a53_prof);

        
        $__internal_3bf0acfdfec6816585f92790434f6e1f4ac4dc5ccddfa7ef407040357584b8f7->leave($__internal_3bf0acfdfec6816585f92790434f6e1f4ac4dc5ccddfa7ef407040357584b8f7_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_cc1a62aa2ab46616556d4c1ad614b6e8ebb2e2906c3cc4af1c5f9c43c304caea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1a62aa2ab46616556d4c1ad614b6e8ebb2e2906c3cc4af1c5f9c43c304caea->enter($__internal_cc1a62aa2ab46616556d4c1ad614b6e8ebb2e2906c3cc4af1c5f9c43c304caea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d20ae9b66ee7036c43ea1b9a683fc676ad94c7f197173a4f94ea8410973e3697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20ae9b66ee7036c43ea1b9a683fc676ad94c7f197173a4f94ea8410973e3697->enter($__internal_d20ae9b66ee7036c43ea1b9a683fc676ad94c7f197173a4f94ea8410973e3697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d20ae9b66ee7036c43ea1b9a683fc676ad94c7f197173a4f94ea8410973e3697->leave($__internal_d20ae9b66ee7036c43ea1b9a683fc676ad94c7f197173a4f94ea8410973e3697_prof);

        
        $__internal_cc1a62aa2ab46616556d4c1ad614b6e8ebb2e2906c3cc4af1c5f9c43c304caea->leave($__internal_cc1a62aa2ab46616556d4c1ad614b6e8ebb2e2906c3cc4af1c5f9c43c304caea_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
