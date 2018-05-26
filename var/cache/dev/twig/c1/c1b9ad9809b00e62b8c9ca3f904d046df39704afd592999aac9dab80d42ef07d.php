<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_53c0a5d936ac778560b1bff74c37be067d9f6deff00907e4ce6f43103cb329e7 extends Twig_Template
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
        $__internal_06fa97f7db33cfbad19756ccafc4067e3e79329759977730a6293048b42982b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fa97f7db33cfbad19756ccafc4067e3e79329759977730a6293048b42982b7->enter($__internal_06fa97f7db33cfbad19756ccafc4067e3e79329759977730a6293048b42982b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_40d90c608ca68f55d94adba29083956febe68c40dec544add0ca6b8e0fd9ef10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d90c608ca68f55d94adba29083956febe68c40dec544add0ca6b8e0fd9ef10->enter($__internal_40d90c608ca68f55d94adba29083956febe68c40dec544add0ca6b8e0fd9ef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06fa97f7db33cfbad19756ccafc4067e3e79329759977730a6293048b42982b7->leave($__internal_06fa97f7db33cfbad19756ccafc4067e3e79329759977730a6293048b42982b7_prof);

        
        $__internal_40d90c608ca68f55d94adba29083956febe68c40dec544add0ca6b8e0fd9ef10->leave($__internal_40d90c608ca68f55d94adba29083956febe68c40dec544add0ca6b8e0fd9ef10_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c9cb490445d209e06a8e6f37367cfee66cf8da17723b3fc963e361be418d6a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cb490445d209e06a8e6f37367cfee66cf8da17723b3fc963e361be418d6a23->enter($__internal_c9cb490445d209e06a8e6f37367cfee66cf8da17723b3fc963e361be418d6a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2ea07345c4712bccfd321652b0794087e5a34ea00c27691cc54b1496380d586f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea07345c4712bccfd321652b0794087e5a34ea00c27691cc54b1496380d586f->enter($__internal_2ea07345c4712bccfd321652b0794087e5a34ea00c27691cc54b1496380d586f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2ea07345c4712bccfd321652b0794087e5a34ea00c27691cc54b1496380d586f->leave($__internal_2ea07345c4712bccfd321652b0794087e5a34ea00c27691cc54b1496380d586f_prof);

        
        $__internal_c9cb490445d209e06a8e6f37367cfee66cf8da17723b3fc963e361be418d6a23->leave($__internal_c9cb490445d209e06a8e6f37367cfee66cf8da17723b3fc963e361be418d6a23_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_348cab3968067d935c7353caa17f56ebd69e33fe7fa00427e08131a01df0e4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348cab3968067d935c7353caa17f56ebd69e33fe7fa00427e08131a01df0e4ac->enter($__internal_348cab3968067d935c7353caa17f56ebd69e33fe7fa00427e08131a01df0e4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0ff9252ecd4fe7c8dbe088bbe2e84b360ba76a710765c8ae224036316914a006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff9252ecd4fe7c8dbe088bbe2e84b360ba76a710765c8ae224036316914a006->enter($__internal_0ff9252ecd4fe7c8dbe088bbe2e84b360ba76a710765c8ae224036316914a006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_0ff9252ecd4fe7c8dbe088bbe2e84b360ba76a710765c8ae224036316914a006->leave($__internal_0ff9252ecd4fe7c8dbe088bbe2e84b360ba76a710765c8ae224036316914a006_prof);

        
        $__internal_348cab3968067d935c7353caa17f56ebd69e33fe7fa00427e08131a01df0e4ac->leave($__internal_348cab3968067d935c7353caa17f56ebd69e33fe7fa00427e08131a01df0e4ac_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_df0c0c67f5a15c58bf6c9ed05de6ffd31897416b58fac1afc1ff426acde15d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0c0c67f5a15c58bf6c9ed05de6ffd31897416b58fac1afc1ff426acde15d5c->enter($__internal_df0c0c67f5a15c58bf6c9ed05de6ffd31897416b58fac1afc1ff426acde15d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_7dfb5d1a0f0b1d1497154524616b2dfb07c0ebd70727c3e91b9c6f9f3a156ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfb5d1a0f0b1d1497154524616b2dfb07c0ebd70727c3e91b9c6f9f3a156ff6->enter($__internal_7dfb5d1a0f0b1d1497154524616b2dfb07c0ebd70727c3e91b9c6f9f3a156ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7dfb5d1a0f0b1d1497154524616b2dfb07c0ebd70727c3e91b9c6f9f3a156ff6->leave($__internal_7dfb5d1a0f0b1d1497154524616b2dfb07c0ebd70727c3e91b9c6f9f3a156ff6_prof);

        
        $__internal_df0c0c67f5a15c58bf6c9ed05de6ffd31897416b58fac1afc1ff426acde15d5c->leave($__internal_df0c0c67f5a15c58bf6c9ed05de6ffd31897416b58fac1afc1ff426acde15d5c_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_18d4679de94af165042203ff27f7727fa9d8124fdddfa2d86eed4a100ce209de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d4679de94af165042203ff27f7727fa9d8124fdddfa2d86eed4a100ce209de->enter($__internal_18d4679de94af165042203ff27f7727fa9d8124fdddfa2d86eed4a100ce209de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_fcbbf926058f0303dd64e0c9d65ccbbf8a3ec6686a8fd09cabb221658cf238cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbbf926058f0303dd64e0c9d65ccbbf8a3ec6686a8fd09cabb221658cf238cf->enter($__internal_fcbbf926058f0303dd64e0c9d65ccbbf8a3ec6686a8fd09cabb221658cf238cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
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
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_fcbbf926058f0303dd64e0c9d65ccbbf8a3ec6686a8fd09cabb221658cf238cf->leave($__internal_fcbbf926058f0303dd64e0c9d65ccbbf8a3ec6686a8fd09cabb221658cf238cf_prof);

        
        $__internal_18d4679de94af165042203ff27f7727fa9d8124fdddfa2d86eed4a100ce209de->leave($__internal_18d4679de94af165042203ff27f7727fa9d8124fdddfa2d86eed4a100ce209de_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_913c79ddbdf6a9c091f39ef0167e63c8b10cb26fd63aa5ea2e3fa4e3aac7f437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913c79ddbdf6a9c091f39ef0167e63c8b10cb26fd63aa5ea2e3fa4e3aac7f437->enter($__internal_913c79ddbdf6a9c091f39ef0167e63c8b10cb26fd63aa5ea2e3fa4e3aac7f437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7562ffd8fdb5b2836b22500ea038d45d94607f7b1d62b8509ddd9a9b766666fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7562ffd8fdb5b2836b22500ea038d45d94607f7b1d62b8509ddd9a9b766666fb->enter($__internal_7562ffd8fdb5b2836b22500ea038d45d94607f7b1d62b8509ddd9a9b766666fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_7562ffd8fdb5b2836b22500ea038d45d94607f7b1d62b8509ddd9a9b766666fb->leave($__internal_7562ffd8fdb5b2836b22500ea038d45d94607f7b1d62b8509ddd9a9b766666fb_prof);

        
        $__internal_913c79ddbdf6a9c091f39ef0167e63c8b10cb26fd63aa5ea2e3fa4e3aac7f437->leave($__internal_913c79ddbdf6a9c091f39ef0167e63c8b10cb26fd63aa5ea2e3fa4e3aac7f437_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_820d65819a861040da26ee4f20cca31ee8db17089f5c328232c9348f51a3ac91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820d65819a861040da26ee4f20cca31ee8db17089f5c328232c9348f51a3ac91->enter($__internal_820d65819a861040da26ee4f20cca31ee8db17089f5c328232c9348f51a3ac91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1fa3330093669cd6454fd5f404da9bd610a814078200af9bc7c4278b63f5a7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa3330093669cd6454fd5f404da9bd610a814078200af9bc7c4278b63f5a7ab->enter($__internal_1fa3330093669cd6454fd5f404da9bd610a814078200af9bc7c4278b63f5a7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_1fa3330093669cd6454fd5f404da9bd610a814078200af9bc7c4278b63f5a7ab->leave($__internal_1fa3330093669cd6454fd5f404da9bd610a814078200af9bc7c4278b63f5a7ab_prof);

        
        $__internal_820d65819a861040da26ee4f20cca31ee8db17089f5c328232c9348f51a3ac91->leave($__internal_820d65819a861040da26ee4f20cca31ee8db17089f5c328232c9348f51a3ac91_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f1fd732bac7866eb95595c702343c97f9daa69b8bfd5575048b459fa213ae072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fd732bac7866eb95595c702343c97f9daa69b8bfd5575048b459fa213ae072->enter($__internal_f1fd732bac7866eb95595c702343c97f9daa69b8bfd5575048b459fa213ae072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_708f5f13bc526d996a75cd3b391d3238ef27af1e0f0f63e44f395dba2528b82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708f5f13bc526d996a75cd3b391d3238ef27af1e0f0f63e44f395dba2528b82f->enter($__internal_708f5f13bc526d996a75cd3b391d3238ef27af1e0f0f63e44f395dba2528b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_708f5f13bc526d996a75cd3b391d3238ef27af1e0f0f63e44f395dba2528b82f->leave($__internal_708f5f13bc526d996a75cd3b391d3238ef27af1e0f0f63e44f395dba2528b82f_prof);

        
        $__internal_f1fd732bac7866eb95595c702343c97f9daa69b8bfd5575048b459fa213ae072->leave($__internal_f1fd732bac7866eb95595c702343c97f9daa69b8bfd5575048b459fa213ae072_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_67b25cbb9ad6acaf15254e22515bb67ab820738aaf6331db5388bfc1e4870d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b25cbb9ad6acaf15254e22515bb67ab820738aaf6331db5388bfc1e4870d23->enter($__internal_67b25cbb9ad6acaf15254e22515bb67ab820738aaf6331db5388bfc1e4870d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_b7c226c9bfd361a5e4e46ec099ca2d87f3234cefa6a3402b8ae9b0041eab1b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c226c9bfd361a5e4e46ec099ca2d87f3234cefa6a3402b8ae9b0041eab1b14->enter($__internal_b7c226c9bfd361a5e4e46ec099ca2d87f3234cefa6a3402b8ae9b0041eab1b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
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
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_b7c226c9bfd361a5e4e46ec099ca2d87f3234cefa6a3402b8ae9b0041eab1b14->leave($__internal_b7c226c9bfd361a5e4e46ec099ca2d87f3234cefa6a3402b8ae9b0041eab1b14_prof);

        
        $__internal_67b25cbb9ad6acaf15254e22515bb67ab820738aaf6331db5388bfc1e4870d23->leave($__internal_67b25cbb9ad6acaf15254e22515bb67ab820738aaf6331db5388bfc1e4870d23_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ae9e5527826dbbfd781fec9a1a4790f73584c7cf6ea84b881164074a41f7d086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9e5527826dbbfd781fec9a1a4790f73584c7cf6ea84b881164074a41f7d086->enter($__internal_ae9e5527826dbbfd781fec9a1a4790f73584c7cf6ea84b881164074a41f7d086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e4d4d3c127ed42b502446ba5ca502109fbcc11f01147c4db5d483703ac9afa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d4d3c127ed42b502446ba5ca502109fbcc11f01147c4db5d483703ac9afa11->enter($__internal_e4d4d3c127ed42b502446ba5ca502109fbcc11f01147c4db5d483703ac9afa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_e4d4d3c127ed42b502446ba5ca502109fbcc11f01147c4db5d483703ac9afa11->leave($__internal_e4d4d3c127ed42b502446ba5ca502109fbcc11f01147c4db5d483703ac9afa11_prof);

        
        $__internal_ae9e5527826dbbfd781fec9a1a4790f73584c7cf6ea84b881164074a41f7d086->leave($__internal_ae9e5527826dbbfd781fec9a1a4790f73584c7cf6ea84b881164074a41f7d086_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7b4bce6f8aeb11071f4a523cf684a2c871d12e4b7c2f6b63cf1f17c72982c353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4bce6f8aeb11071f4a523cf684a2c871d12e4b7c2f6b63cf1f17c72982c353->enter($__internal_7b4bce6f8aeb11071f4a523cf684a2c871d12e4b7c2f6b63cf1f17c72982c353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_10d3957ecde96de4b7948790adbf5aea5baf79c2c3e8b9908616af2b50d88d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d3957ecde96de4b7948790adbf5aea5baf79c2c3e8b9908616af2b50d88d93->enter($__internal_10d3957ecde96de4b7948790adbf5aea5baf79c2c3e8b9908616af2b50d88d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
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
        
        $__internal_10d3957ecde96de4b7948790adbf5aea5baf79c2c3e8b9908616af2b50d88d93->leave($__internal_10d3957ecde96de4b7948790adbf5aea5baf79c2c3e8b9908616af2b50d88d93_prof);

        
        $__internal_7b4bce6f8aeb11071f4a523cf684a2c871d12e4b7c2f6b63cf1f17c72982c353->leave($__internal_7b4bce6f8aeb11071f4a523cf684a2c871d12e4b7c2f6b63cf1f17c72982c353_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6c5399e04dbe5e1b5940e28fd28d9e3f1f56bb3955b702ea971b058308905aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5399e04dbe5e1b5940e28fd28d9e3f1f56bb3955b702ea971b058308905aa1->enter($__internal_6c5399e04dbe5e1b5940e28fd28d9e3f1f56bb3955b702ea971b058308905aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_8dfee622eedbd70a96a480bf867bc9c8a5b25bbee77f6ba42ddfbea9147f1a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfee622eedbd70a96a480bf867bc9c8a5b25bbee77f6ba42ddfbea9147f1a52->enter($__internal_8dfee622eedbd70a96a480bf867bc9c8a5b25bbee77f6ba42ddfbea9147f1a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_8dfee622eedbd70a96a480bf867bc9c8a5b25bbee77f6ba42ddfbea9147f1a52->leave($__internal_8dfee622eedbd70a96a480bf867bc9c8a5b25bbee77f6ba42ddfbea9147f1a52_prof);

        
        $__internal_6c5399e04dbe5e1b5940e28fd28d9e3f1f56bb3955b702ea971b058308905aa1->leave($__internal_6c5399e04dbe5e1b5940e28fd28d9e3f1f56bb3955b702ea971b058308905aa1_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_459d34f8d3edd1b9b88bde0d6aa7e58fea6981034b0e3abc6228cf164ef05741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459d34f8d3edd1b9b88bde0d6aa7e58fea6981034b0e3abc6228cf164ef05741->enter($__internal_459d34f8d3edd1b9b88bde0d6aa7e58fea6981034b0e3abc6228cf164ef05741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c36759d7586c9d29aeb4fb907079814e523201d88c0fe7fcb6cb1ae6d9c47b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36759d7586c9d29aeb4fb907079814e523201d88c0fe7fcb6cb1ae6d9c47b02->enter($__internal_c36759d7586c9d29aeb4fb907079814e523201d88c0fe7fcb6cb1ae6d9c47b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_c36759d7586c9d29aeb4fb907079814e523201d88c0fe7fcb6cb1ae6d9c47b02->leave($__internal_c36759d7586c9d29aeb4fb907079814e523201d88c0fe7fcb6cb1ae6d9c47b02_prof);

        
        $__internal_459d34f8d3edd1b9b88bde0d6aa7e58fea6981034b0e3abc6228cf164ef05741->leave($__internal_459d34f8d3edd1b9b88bde0d6aa7e58fea6981034b0e3abc6228cf164ef05741_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_13f75570cd890d6fc82517015d74df08420361be2c4af298b9c8cc279e6cf2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f75570cd890d6fc82517015d74df08420361be2c4af298b9c8cc279e6cf2b0->enter($__internal_13f75570cd890d6fc82517015d74df08420361be2c4af298b9c8cc279e6cf2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3e4eaa05a8f52c78696f38f4b0382d66047cf2013d12f9830de68eeb9eaf9a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4eaa05a8f52c78696f38f4b0382d66047cf2013d12f9830de68eeb9eaf9a74->enter($__internal_3e4eaa05a8f52c78696f38f4b0382d66047cf2013d12f9830de68eeb9eaf9a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3e4eaa05a8f52c78696f38f4b0382d66047cf2013d12f9830de68eeb9eaf9a74->leave($__internal_3e4eaa05a8f52c78696f38f4b0382d66047cf2013d12f9830de68eeb9eaf9a74_prof);

        
        $__internal_13f75570cd890d6fc82517015d74df08420361be2c4af298b9c8cc279e6cf2b0->leave($__internal_13f75570cd890d6fc82517015d74df08420361be2c4af298b9c8cc279e6cf2b0_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b2c12b80c2d1eb47e82da1b836220267f39a644f226c2b6bac230c4cc23e4048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c12b80c2d1eb47e82da1b836220267f39a644f226c2b6bac230c4cc23e4048->enter($__internal_b2c12b80c2d1eb47e82da1b836220267f39a644f226c2b6bac230c4cc23e4048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_fd0464be8f621db0f15cb52a8209432623a552fa733434fe11d91519450d950c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0464be8f621db0f15cb52a8209432623a552fa733434fe11d91519450d950c->enter($__internal_fd0464be8f621db0f15cb52a8209432623a552fa733434fe11d91519450d950c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_fd0464be8f621db0f15cb52a8209432623a552fa733434fe11d91519450d950c->leave($__internal_fd0464be8f621db0f15cb52a8209432623a552fa733434fe11d91519450d950c_prof);

        
        $__internal_b2c12b80c2d1eb47e82da1b836220267f39a644f226c2b6bac230c4cc23e4048->leave($__internal_b2c12b80c2d1eb47e82da1b836220267f39a644f226c2b6bac230c4cc23e4048_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e1e5482694928c7ad9dce81728467b4ba83bc17c08fb3979e5d277715dafae12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e5482694928c7ad9dce81728467b4ba83bc17c08fb3979e5d277715dafae12->enter($__internal_e1e5482694928c7ad9dce81728467b4ba83bc17c08fb3979e5d277715dafae12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6a5b72cdd9494b3885e7fb2ac4eeeecbbb29cdc01dc64eb55884d8d6bc4d3958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5b72cdd9494b3885e7fb2ac4eeeecbbb29cdc01dc64eb55884d8d6bc4d3958->enter($__internal_6a5b72cdd9494b3885e7fb2ac4eeeecbbb29cdc01dc64eb55884d8d6bc4d3958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6a5b72cdd9494b3885e7fb2ac4eeeecbbb29cdc01dc64eb55884d8d6bc4d3958->leave($__internal_6a5b72cdd9494b3885e7fb2ac4eeeecbbb29cdc01dc64eb55884d8d6bc4d3958_prof);

        
        $__internal_e1e5482694928c7ad9dce81728467b4ba83bc17c08fb3979e5d277715dafae12->leave($__internal_e1e5482694928c7ad9dce81728467b4ba83bc17c08fb3979e5d277715dafae12_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_710b12d5f82f421de94ec6d85ee06bc16edecf6fc03d7eee5beeb151142a3229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710b12d5f82f421de94ec6d85ee06bc16edecf6fc03d7eee5beeb151142a3229->enter($__internal_710b12d5f82f421de94ec6d85ee06bc16edecf6fc03d7eee5beeb151142a3229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c723bacf505e5038c8ff6ec166f96dca2aa19155cc33a4da55cca64f3193b8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c723bacf505e5038c8ff6ec166f96dca2aa19155cc33a4da55cca64f3193b8d6->enter($__internal_c723bacf505e5038c8ff6ec166f96dca2aa19155cc33a4da55cca64f3193b8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c723bacf505e5038c8ff6ec166f96dca2aa19155cc33a4da55cca64f3193b8d6->leave($__internal_c723bacf505e5038c8ff6ec166f96dca2aa19155cc33a4da55cca64f3193b8d6_prof);

        
        $__internal_710b12d5f82f421de94ec6d85ee06bc16edecf6fc03d7eee5beeb151142a3229->leave($__internal_710b12d5f82f421de94ec6d85ee06bc16edecf6fc03d7eee5beeb151142a3229_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ee25436d07982ddbedd1e80d53e3d5cb533bcbaf9ffd1ec93e76c982c44749b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee25436d07982ddbedd1e80d53e3d5cb533bcbaf9ffd1ec93e76c982c44749b9->enter($__internal_ee25436d07982ddbedd1e80d53e3d5cb533bcbaf9ffd1ec93e76c982c44749b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2258a63fad91d75139530787f98994a14fd80d918294bc1f9188ff1753b8a252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2258a63fad91d75139530787f98994a14fd80d918294bc1f9188ff1753b8a252->enter($__internal_2258a63fad91d75139530787f98994a14fd80d918294bc1f9188ff1753b8a252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 255
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_2258a63fad91d75139530787f98994a14fd80d918294bc1f9188ff1753b8a252->leave($__internal_2258a63fad91d75139530787f98994a14fd80d918294bc1f9188ff1753b8a252_prof);

        
        $__internal_ee25436d07982ddbedd1e80d53e3d5cb533bcbaf9ffd1ec93e76c982c44749b9->leave($__internal_ee25436d07982ddbedd1e80d53e3d5cb533bcbaf9ffd1ec93e76c982c44749b9_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5233d553b5ad0ddbe2fa2b13d4361a48e1d40db30ced4e259af7e69c1794c182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5233d553b5ad0ddbe2fa2b13d4361a48e1d40db30ced4e259af7e69c1794c182->enter($__internal_5233d553b5ad0ddbe2fa2b13d4361a48e1d40db30ced4e259af7e69c1794c182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f17e9e67afadf115faa0efe6eb7448addfc192ca61ed693137a1cb7d9ce4bd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17e9e67afadf115faa0efe6eb7448addfc192ca61ed693137a1cb7d9ce4bd5a->enter($__internal_f17e9e67afadf115faa0efe6eb7448addfc192ca61ed693137a1cb7d9ce4bd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_f17e9e67afadf115faa0efe6eb7448addfc192ca61ed693137a1cb7d9ce4bd5a->leave($__internal_f17e9e67afadf115faa0efe6eb7448addfc192ca61ed693137a1cb7d9ce4bd5a_prof);

        
        $__internal_5233d553b5ad0ddbe2fa2b13d4361a48e1d40db30ced4e259af7e69c1794c182->leave($__internal_5233d553b5ad0ddbe2fa2b13d4361a48e1d40db30ced4e259af7e69c1794c182_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_802ca24b702fff9cd8045b69657cbc527d2552d8cecb6f38a3546206d0e1be97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802ca24b702fff9cd8045b69657cbc527d2552d8cecb6f38a3546206d0e1be97->enter($__internal_802ca24b702fff9cd8045b69657cbc527d2552d8cecb6f38a3546206d0e1be97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_e34d4ea459a87752cb8ca673b2f239c6ef526236d40b5fae23754e78a6260aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34d4ea459a87752cb8ca673b2f239c6ef526236d40b5fae23754e78a6260aad->enter($__internal_e34d4ea459a87752cb8ca673b2f239c6ef526236d40b5fae23754e78a6260aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e34d4ea459a87752cb8ca673b2f239c6ef526236d40b5fae23754e78a6260aad->leave($__internal_e34d4ea459a87752cb8ca673b2f239c6ef526236d40b5fae23754e78a6260aad_prof);

        
        $__internal_802ca24b702fff9cd8045b69657cbc527d2552d8cecb6f38a3546206d0e1be97->leave($__internal_802ca24b702fff9cd8045b69657cbc527d2552d8cecb6f38a3546206d0e1be97_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_aebec5fcd8da4e2dbc64269affbdf0ebc6a1c0c4e5d406fde5fecefec35ff31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebec5fcd8da4e2dbc64269affbdf0ebc6a1c0c4e5d406fde5fecefec35ff31f->enter($__internal_aebec5fcd8da4e2dbc64269affbdf0ebc6a1c0c4e5d406fde5fecefec35ff31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_4ceda2cd921c54797711901558dbf2a2708a53f402995615547d9748382018f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ceda2cd921c54797711901558dbf2a2708a53f402995615547d9748382018f9->enter($__internal_4ceda2cd921c54797711901558dbf2a2708a53f402995615547d9748382018f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4ceda2cd921c54797711901558dbf2a2708a53f402995615547d9748382018f9->leave($__internal_4ceda2cd921c54797711901558dbf2a2708a53f402995615547d9748382018f9_prof);

        
        $__internal_aebec5fcd8da4e2dbc64269affbdf0ebc6a1c0c4e5d406fde5fecefec35ff31f->leave($__internal_aebec5fcd8da4e2dbc64269affbdf0ebc6a1c0c4e5d406fde5fecefec35ff31f_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5b1661c087a4269e4ec257a85d4a921c5b386057cab7967c5c3e48d4c3665718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1661c087a4269e4ec257a85d4a921c5b386057cab7967c5c3e48d4c3665718->enter($__internal_5b1661c087a4269e4ec257a85d4a921c5b386057cab7967c5c3e48d4c3665718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9785d5466c96c92bb6f75062619b1e30521f71957ad010525dc87acc37e681dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9785d5466c96c92bb6f75062619b1e30521f71957ad010525dc87acc37e681dd->enter($__internal_9785d5466c96c92bb6f75062619b1e30521f71957ad010525dc87acc37e681dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9785d5466c96c92bb6f75062619b1e30521f71957ad010525dc87acc37e681dd->leave($__internal_9785d5466c96c92bb6f75062619b1e30521f71957ad010525dc87acc37e681dd_prof);

        
        $__internal_5b1661c087a4269e4ec257a85d4a921c5b386057cab7967c5c3e48d4c3665718->leave($__internal_5b1661c087a4269e4ec257a85d4a921c5b386057cab7967c5c3e48d4c3665718_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4e5ddf91c6b736baccec5087e867e8d039a10c04e5ca7fb3d5b199ba32683542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5ddf91c6b736baccec5087e867e8d039a10c04e5ca7fb3d5b199ba32683542->enter($__internal_4e5ddf91c6b736baccec5087e867e8d039a10c04e5ca7fb3d5b199ba32683542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_6d6cbd3c8fa708898dca9e811f7deaaddbfa9e8c3e7bcf90e7d8391d2388c2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6cbd3c8fa708898dca9e811f7deaaddbfa9e8c3e7bcf90e7d8391d2388c2aa->enter($__internal_6d6cbd3c8fa708898dca9e811f7deaaddbfa9e8c3e7bcf90e7d8391d2388c2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6d6cbd3c8fa708898dca9e811f7deaaddbfa9e8c3e7bcf90e7d8391d2388c2aa->leave($__internal_6d6cbd3c8fa708898dca9e811f7deaaddbfa9e8c3e7bcf90e7d8391d2388c2aa_prof);

        
        $__internal_4e5ddf91c6b736baccec5087e867e8d039a10c04e5ca7fb3d5b199ba32683542->leave($__internal_4e5ddf91c6b736baccec5087e867e8d039a10c04e5ca7fb3d5b199ba32683542_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9181427d13d30b39ea90c53ff17feedf29dcb9e92ac611c086b3feb493b5c8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9181427d13d30b39ea90c53ff17feedf29dcb9e92ac611c086b3feb493b5c8af->enter($__internal_9181427d13d30b39ea90c53ff17feedf29dcb9e92ac611c086b3feb493b5c8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_aacb91ca1eb113736d9582646f8fd872ccba997233243dbc14d6d4bdbe90899e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacb91ca1eb113736d9582646f8fd872ccba997233243dbc14d6d4bdbe90899e->enter($__internal_aacb91ca1eb113736d9582646f8fd872ccba997233243dbc14d6d4bdbe90899e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_aacb91ca1eb113736d9582646f8fd872ccba997233243dbc14d6d4bdbe90899e->leave($__internal_aacb91ca1eb113736d9582646f8fd872ccba997233243dbc14d6d4bdbe90899e_prof);

        
        $__internal_9181427d13d30b39ea90c53ff17feedf29dcb9e92ac611c086b3feb493b5c8af->leave($__internal_9181427d13d30b39ea90c53ff17feedf29dcb9e92ac611c086b3feb493b5c8af_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2e8081b37170347de568fb90ca83c8e3549f963d05e1352a4110eba2549360dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8081b37170347de568fb90ca83c8e3549f963d05e1352a4110eba2549360dc->enter($__internal_2e8081b37170347de568fb90ca83c8e3549f963d05e1352a4110eba2549360dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b02dda555db9dc02912ab10f5f385933c971dcafba462afeeedab754ccf89a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02dda555db9dc02912ab10f5f385933c971dcafba462afeeedab754ccf89a4d->enter($__internal_b02dda555db9dc02912ab10f5f385933c971dcafba462afeeedab754ccf89a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_b02dda555db9dc02912ab10f5f385933c971dcafba462afeeedab754ccf89a4d->leave($__internal_b02dda555db9dc02912ab10f5f385933c971dcafba462afeeedab754ccf89a4d_prof);

        
        $__internal_2e8081b37170347de568fb90ca83c8e3549f963d05e1352a4110eba2549360dc->leave($__internal_2e8081b37170347de568fb90ca83c8e3549f963d05e1352a4110eba2549360dc_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_32d53c77e9f464cb4caa2f83f59b9c75a6906b90f2d2bff6f6bdb52ed14c623c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d53c77e9f464cb4caa2f83f59b9c75a6906b90f2d2bff6f6bdb52ed14c623c->enter($__internal_32d53c77e9f464cb4caa2f83f59b9c75a6906b90f2d2bff6f6bdb52ed14c623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_52c84d29d982d9f9eb6f0b2f5abfe4ad6fbc98736fdffbd60c2b1a0227aa6251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c84d29d982d9f9eb6f0b2f5abfe4ad6fbc98736fdffbd60c2b1a0227aa6251->enter($__internal_52c84d29d982d9f9eb6f0b2f5abfe4ad6fbc98736fdffbd60c2b1a0227aa6251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_52c84d29d982d9f9eb6f0b2f5abfe4ad6fbc98736fdffbd60c2b1a0227aa6251->leave($__internal_52c84d29d982d9f9eb6f0b2f5abfe4ad6fbc98736fdffbd60c2b1a0227aa6251_prof);

        
        $__internal_32d53c77e9f464cb4caa2f83f59b9c75a6906b90f2d2bff6f6bdb52ed14c623c->leave($__internal_32d53c77e9f464cb4caa2f83f59b9c75a6906b90f2d2bff6f6bdb52ed14c623c_prof);

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
", "foundation_5_layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
