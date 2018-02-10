<?php

/* form_table_layout.html.twig */
class __TwigTemplate_1181e7b94ba2b8339c31a7590d48b22e8b814da3623ac093ed13045791dc89fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8ae263bb515dcb1a132d9ff037290a37b1970da57b99da876389afa263430ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ae263bb515dcb1a132d9ff037290a37b1970da57b99da876389afa263430ce->enter($__internal_b8ae263bb515dcb1a132d9ff037290a37b1970da57b99da876389afa263430ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3d514914c79b770e7c869f6081f4aac46d1765e4d5a820201f84a2fdfde3127f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d514914c79b770e7c869f6081f4aac46d1765e4d5a820201f84a2fdfde3127f->enter($__internal_3d514914c79b770e7c869f6081f4aac46d1765e4d5a820201f84a2fdfde3127f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_b8ae263bb515dcb1a132d9ff037290a37b1970da57b99da876389afa263430ce->leave($__internal_b8ae263bb515dcb1a132d9ff037290a37b1970da57b99da876389afa263430ce_prof);

        
        $__internal_3d514914c79b770e7c869f6081f4aac46d1765e4d5a820201f84a2fdfde3127f->leave($__internal_3d514914c79b770e7c869f6081f4aac46d1765e4d5a820201f84a2fdfde3127f_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ca44f021688559f6b8a724ed1661c55a183a787b95132eb4e8b02f2c96586d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca44f021688559f6b8a724ed1661c55a183a787b95132eb4e8b02f2c96586d60->enter($__internal_ca44f021688559f6b8a724ed1661c55a183a787b95132eb4e8b02f2c96586d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_45b592fed6ffbbaffaba4bfbc9b49c78c1be54d0bf6df0d46f3a8dd887863054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b592fed6ffbbaffaba4bfbc9b49c78c1be54d0bf6df0d46f3a8dd887863054->enter($__internal_45b592fed6ffbbaffaba4bfbc9b49c78c1be54d0bf6df0d46f3a8dd887863054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_45b592fed6ffbbaffaba4bfbc9b49c78c1be54d0bf6df0d46f3a8dd887863054->leave($__internal_45b592fed6ffbbaffaba4bfbc9b49c78c1be54d0bf6df0d46f3a8dd887863054_prof);

        
        $__internal_ca44f021688559f6b8a724ed1661c55a183a787b95132eb4e8b02f2c96586d60->leave($__internal_ca44f021688559f6b8a724ed1661c55a183a787b95132eb4e8b02f2c96586d60_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e80a4c9c9d44603e5b61540da0a9adfe70851476ccadf1b1215f9db6f34f9d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80a4c9c9d44603e5b61540da0a9adfe70851476ccadf1b1215f9db6f34f9d43->enter($__internal_e80a4c9c9d44603e5b61540da0a9adfe70851476ccadf1b1215f9db6f34f9d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0782b93b97af3e65b965cdd8321cf7f2327c9c7d19ad1f96c4803f1429aa9382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0782b93b97af3e65b965cdd8321cf7f2327c9c7d19ad1f96c4803f1429aa9382->enter($__internal_0782b93b97af3e65b965cdd8321cf7f2327c9c7d19ad1f96c4803f1429aa9382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_0782b93b97af3e65b965cdd8321cf7f2327c9c7d19ad1f96c4803f1429aa9382->leave($__internal_0782b93b97af3e65b965cdd8321cf7f2327c9c7d19ad1f96c4803f1429aa9382_prof);

        
        $__internal_e80a4c9c9d44603e5b61540da0a9adfe70851476ccadf1b1215f9db6f34f9d43->leave($__internal_e80a4c9c9d44603e5b61540da0a9adfe70851476ccadf1b1215f9db6f34f9d43_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_a853e851d484d7b777742e8541d2dc965ba8716eb68a9d4d991b6467f63d18a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a853e851d484d7b777742e8541d2dc965ba8716eb68a9d4d991b6467f63d18a4->enter($__internal_a853e851d484d7b777742e8541d2dc965ba8716eb68a9d4d991b6467f63d18a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_e75d3139072d9ed8197e9bf7b748bcca973a060398dbab90cd779ce043de3de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75d3139072d9ed8197e9bf7b748bcca973a060398dbab90cd779ce043de3de6->enter($__internal_e75d3139072d9ed8197e9bf7b748bcca973a060398dbab90cd779ce043de3de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_e75d3139072d9ed8197e9bf7b748bcca973a060398dbab90cd779ce043de3de6->leave($__internal_e75d3139072d9ed8197e9bf7b748bcca973a060398dbab90cd779ce043de3de6_prof);

        
        $__internal_a853e851d484d7b777742e8541d2dc965ba8716eb68a9d4d991b6467f63d18a4->leave($__internal_a853e851d484d7b777742e8541d2dc965ba8716eb68a9d4d991b6467f63d18a4_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0b2e9e7f217ecf3f3e4049d5251955b3b120e7bfecb9d82bd85c496d257f40a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2e9e7f217ecf3f3e4049d5251955b3b120e7bfecb9d82bd85c496d257f40a5->enter($__internal_0b2e9e7f217ecf3f3e4049d5251955b3b120e7bfecb9d82bd85c496d257f40a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_72662c7679b4bc8b907a9f58c52562569cab9f5ed1a24451b71e7f4f0c54a548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72662c7679b4bc8b907a9f58c52562569cab9f5ed1a24451b71e7f4f0c54a548->enter($__internal_72662c7679b4bc8b907a9f58c52562569cab9f5ed1a24451b71e7f4f0c54a548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_72662c7679b4bc8b907a9f58c52562569cab9f5ed1a24451b71e7f4f0c54a548->leave($__internal_72662c7679b4bc8b907a9f58c52562569cab9f5ed1a24451b71e7f4f0c54a548_prof);

        
        $__internal_0b2e9e7f217ecf3f3e4049d5251955b3b120e7bfecb9d82bd85c496d257f40a5->leave($__internal_0b2e9e7f217ecf3f3e4049d5251955b3b120e7bfecb9d82bd85c496d257f40a5_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
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

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
