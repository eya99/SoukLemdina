<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_346497c66a01aa53e4f06f522b7641ad10710d6baecd7f040142dc8e5ebcf28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38cdcd8cf632363f03e9431c87fa338cbf506669760746ffcf9853e4da9ce5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38cdcd8cf632363f03e9431c87fa338cbf506669760746ffcf9853e4da9ce5e6->enter($__internal_38cdcd8cf632363f03e9431c87fa338cbf506669760746ffcf9853e4da9ce5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_2738bcfac6d5582185df307ad7ada53c635a8da787c6e7fcfc6b4d729a486274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2738bcfac6d5582185df307ad7ada53c635a8da787c6e7fcfc6b4d729a486274->enter($__internal_2738bcfac6d5582185df307ad7ada53c635a8da787c6e7fcfc6b4d729a486274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_38cdcd8cf632363f03e9431c87fa338cbf506669760746ffcf9853e4da9ce5e6->leave($__internal_38cdcd8cf632363f03e9431c87fa338cbf506669760746ffcf9853e4da9ce5e6_prof);

        
        $__internal_2738bcfac6d5582185df307ad7ada53c635a8da787c6e7fcfc6b4d729a486274->leave($__internal_2738bcfac6d5582185df307ad7ada53c635a8da787c6e7fcfc6b4d729a486274_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_fa7d97e2d54fcb3c23fde9bbed43d2a142078863002d5cfb227aa586993d4587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7d97e2d54fcb3c23fde9bbed43d2a142078863002d5cfb227aa586993d4587->enter($__internal_fa7d97e2d54fcb3c23fde9bbed43d2a142078863002d5cfb227aa586993d4587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_02ce6479e742e28c07a1a8f89901a7e3e32e0288648b81cb392dd91f980b0ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ce6479e742e28c07a1a8f89901a7e3e32e0288648b81cb392dd91f980b0ac1->enter($__internal_02ce6479e742e28c07a1a8f89901a7e3e32e0288648b81cb392dd91f980b0ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_02ce6479e742e28c07a1a8f89901a7e3e32e0288648b81cb392dd91f980b0ac1->leave($__internal_02ce6479e742e28c07a1a8f89901a7e3e32e0288648b81cb392dd91f980b0ac1_prof);

        
        $__internal_fa7d97e2d54fcb3c23fde9bbed43d2a142078863002d5cfb227aa586993d4587->leave($__internal_fa7d97e2d54fcb3c23fde9bbed43d2a142078863002d5cfb227aa586993d4587_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_92ca27f3bf902addc7f7f06a34d9f8c8d4aafc8226e651448b36d6a94fe4664c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ca27f3bf902addc7f7f06a34d9f8c8d4aafc8226e651448b36d6a94fe4664c->enter($__internal_92ca27f3bf902addc7f7f06a34d9f8c8d4aafc8226e651448b36d6a94fe4664c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_259c8f183c104530f8943490aa25d93d5bf09182d18713002c3f02004f6f6e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259c8f183c104530f8943490aa25d93d5bf09182d18713002c3f02004f6f6e80->enter($__internal_259c8f183c104530f8943490aa25d93d5bf09182d18713002c3f02004f6f6e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_259c8f183c104530f8943490aa25d93d5bf09182d18713002c3f02004f6f6e80->leave($__internal_259c8f183c104530f8943490aa25d93d5bf09182d18713002c3f02004f6f6e80_prof);

        
        $__internal_92ca27f3bf902addc7f7f06a34d9f8c8d4aafc8226e651448b36d6a94fe4664c->leave($__internal_92ca27f3bf902addc7f7f06a34d9f8c8d4aafc8226e651448b36d6a94fe4664c_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_4078357509b9d9822ff7556cf00d053d3a22b27d679da2bf485ab891988829c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4078357509b9d9822ff7556cf00d053d3a22b27d679da2bf485ab891988829c4->enter($__internal_4078357509b9d9822ff7556cf00d053d3a22b27d679da2bf485ab891988829c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8a0b555a4b5ef5358527424caee90a59e5b8958972726aca8d13e3bd7f1ecc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0b555a4b5ef5358527424caee90a59e5b8958972726aca8d13e3bd7f1ecc40->enter($__internal_8a0b555a4b5ef5358527424caee90a59e5b8958972726aca8d13e3bd7f1ecc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_8a0b555a4b5ef5358527424caee90a59e5b8958972726aca8d13e3bd7f1ecc40->leave($__internal_8a0b555a4b5ef5358527424caee90a59e5b8958972726aca8d13e3bd7f1ecc40_prof);

        
        $__internal_4078357509b9d9822ff7556cf00d053d3a22b27d679da2bf485ab891988829c4->leave($__internal_4078357509b9d9822ff7556cf00d053d3a22b27d679da2bf485ab891988829c4_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f9029cdb80eb4a87782544b9f4907261d7579b888a3afb1b328649a784426333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9029cdb80eb4a87782544b9f4907261d7579b888a3afb1b328649a784426333->enter($__internal_f9029cdb80eb4a87782544b9f4907261d7579b888a3afb1b328649a784426333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f44503f030b61dce480be16dce63d82e9845abf70b9b9cccc119ef70468c88f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44503f030b61dce480be16dce63d82e9845abf70b9b9cccc119ef70468c88f3->enter($__internal_f44503f030b61dce480be16dce63d82e9845abf70b9b9cccc119ef70468c88f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_f44503f030b61dce480be16dce63d82e9845abf70b9b9cccc119ef70468c88f3->leave($__internal_f44503f030b61dce480be16dce63d82e9845abf70b9b9cccc119ef70468c88f3_prof);

        
        $__internal_f9029cdb80eb4a87782544b9f4907261d7579b888a3afb1b328649a784426333->leave($__internal_f9029cdb80eb4a87782544b9f4907261d7579b888a3afb1b328649a784426333_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4cf5767a972d80dfb693ce8f09e7c8c2bf845e50add9ca6562e6f4390cd94a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf5767a972d80dfb693ce8f09e7c8c2bf845e50add9ca6562e6f4390cd94a07->enter($__internal_4cf5767a972d80dfb693ce8f09e7c8c2bf845e50add9ca6562e6f4390cd94a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_250e34d4502c07685441d149cb681b072ee51d23a0f6c56dc7a974a267b8c4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250e34d4502c07685441d149cb681b072ee51d23a0f6c56dc7a974a267b8c4b9->enter($__internal_250e34d4502c07685441d149cb681b072ee51d23a0f6c56dc7a974a267b8c4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_250e34d4502c07685441d149cb681b072ee51d23a0f6c56dc7a974a267b8c4b9->leave($__internal_250e34d4502c07685441d149cb681b072ee51d23a0f6c56dc7a974a267b8c4b9_prof);

        
        $__internal_4cf5767a972d80dfb693ce8f09e7c8c2bf845e50add9ca6562e6f4390cd94a07->leave($__internal_4cf5767a972d80dfb693ce8f09e7c8c2bf845e50add9ca6562e6f4390cd94a07_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_39c0bf0776c6d8d4690dae4ab7af61eac900227cf4f237c121cc9b6122aa39a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c0bf0776c6d8d4690dae4ab7af61eac900227cf4f237c121cc9b6122aa39a4->enter($__internal_39c0bf0776c6d8d4690dae4ab7af61eac900227cf4f237c121cc9b6122aa39a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_8712f290830658d912d31c705c492ceefe05ad58b89066b279bf079dbf3f8bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8712f290830658d912d31c705c492ceefe05ad58b89066b279bf079dbf3f8bd2->enter($__internal_8712f290830658d912d31c705c492ceefe05ad58b89066b279bf079dbf3f8bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_8712f290830658d912d31c705c492ceefe05ad58b89066b279bf079dbf3f8bd2->leave($__internal_8712f290830658d912d31c705c492ceefe05ad58b89066b279bf079dbf3f8bd2_prof);

        
        $__internal_39c0bf0776c6d8d4690dae4ab7af61eac900227cf4f237c121cc9b6122aa39a4->leave($__internal_39c0bf0776c6d8d4690dae4ab7af61eac900227cf4f237c121cc9b6122aa39a4_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_4ecdf9f36d71859782b10d1a997e5696def8260e81061be39c3dd397fb1b9ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ecdf9f36d71859782b10d1a997e5696def8260e81061be39c3dd397fb1b9ae7->enter($__internal_4ecdf9f36d71859782b10d1a997e5696def8260e81061be39c3dd397fb1b9ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_77cb39938f87b5dafd06d4674790e5b2318cfc686843185800a87464ee17793c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cb39938f87b5dafd06d4674790e5b2318cfc686843185800a87464ee17793c->enter($__internal_77cb39938f87b5dafd06d4674790e5b2318cfc686843185800a87464ee17793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_77cb39938f87b5dafd06d4674790e5b2318cfc686843185800a87464ee17793c->leave($__internal_77cb39938f87b5dafd06d4674790e5b2318cfc686843185800a87464ee17793c_prof);

        
        $__internal_4ecdf9f36d71859782b10d1a997e5696def8260e81061be39c3dd397fb1b9ae7->leave($__internal_4ecdf9f36d71859782b10d1a997e5696def8260e81061be39c3dd397fb1b9ae7_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f0b93735236d46b3e0aae15c80db1da9c849ed49e2d232854aae1ef9108621f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b93735236d46b3e0aae15c80db1da9c849ed49e2d232854aae1ef9108621f2->enter($__internal_f0b93735236d46b3e0aae15c80db1da9c849ed49e2d232854aae1ef9108621f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4238e8bfcb21b38de35833b0374ca84bd8a4c74f3aa3ca041db2f810fe75c60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4238e8bfcb21b38de35833b0374ca84bd8a4c74f3aa3ca041db2f810fe75c60a->enter($__internal_4238e8bfcb21b38de35833b0374ca84bd8a4c74f3aa3ca041db2f810fe75c60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4238e8bfcb21b38de35833b0374ca84bd8a4c74f3aa3ca041db2f810fe75c60a->leave($__internal_4238e8bfcb21b38de35833b0374ca84bd8a4c74f3aa3ca041db2f810fe75c60a_prof);

        
        $__internal_f0b93735236d46b3e0aae15c80db1da9c849ed49e2d232854aae1ef9108621f2->leave($__internal_f0b93735236d46b3e0aae15c80db1da9c849ed49e2d232854aae1ef9108621f2_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_73aa75f3b30dfac37be6fb87ef239304a92cbb262fa975a753f4482e5351da6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73aa75f3b30dfac37be6fb87ef239304a92cbb262fa975a753f4482e5351da6d->enter($__internal_73aa75f3b30dfac37be6fb87ef239304a92cbb262fa975a753f4482e5351da6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_efc1f9d3202f09ad9aebf01b1607680f855edc82e69ff8044f52f44855c9b3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc1f9d3202f09ad9aebf01b1607680f855edc82e69ff8044f52f44855c9b3f9->enter($__internal_efc1f9d3202f09ad9aebf01b1607680f855edc82e69ff8044f52f44855c9b3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_efc1f9d3202f09ad9aebf01b1607680f855edc82e69ff8044f52f44855c9b3f9->leave($__internal_efc1f9d3202f09ad9aebf01b1607680f855edc82e69ff8044f52f44855c9b3f9_prof);

        
        $__internal_73aa75f3b30dfac37be6fb87ef239304a92cbb262fa975a753f4482e5351da6d->leave($__internal_73aa75f3b30dfac37be6fb87ef239304a92cbb262fa975a753f4482e5351da6d_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_638350675f66f7cd94d241ebac58279075aa6c387bff5443d3592655c230f2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638350675f66f7cd94d241ebac58279075aa6c387bff5443d3592655c230f2e3->enter($__internal_638350675f66f7cd94d241ebac58279075aa6c387bff5443d3592655c230f2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_46bb9f218b670d95e5fd7ae7fa26e6e2b9f31f58bbde4b3ceff81387ffd0bbd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bb9f218b670d95e5fd7ae7fa26e6e2b9f31f58bbde4b3ceff81387ffd0bbd2->enter($__internal_46bb9f218b670d95e5fd7ae7fa26e6e2b9f31f58bbde4b3ceff81387ffd0bbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_46bb9f218b670d95e5fd7ae7fa26e6e2b9f31f58bbde4b3ceff81387ffd0bbd2->leave($__internal_46bb9f218b670d95e5fd7ae7fa26e6e2b9f31f58bbde4b3ceff81387ffd0bbd2_prof);

        
        $__internal_638350675f66f7cd94d241ebac58279075aa6c387bff5443d3592655c230f2e3->leave($__internal_638350675f66f7cd94d241ebac58279075aa6c387bff5443d3592655c230f2e3_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
