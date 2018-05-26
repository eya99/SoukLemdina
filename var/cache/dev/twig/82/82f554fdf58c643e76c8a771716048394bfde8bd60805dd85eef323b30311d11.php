<?php

/* form_table_layout.html.twig */
class __TwigTemplate_1638d29d107be216f97954a889d6fa10b27716fd02d6d67d9461c9e614ed7b19 extends Twig_Template
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
        $__internal_38813cf83f554b520671847222c9c0d2b7fc64d54cc89a5f2019d6afe5f7511f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38813cf83f554b520671847222c9c0d2b7fc64d54cc89a5f2019d6afe5f7511f->enter($__internal_38813cf83f554b520671847222c9c0d2b7fc64d54cc89a5f2019d6afe5f7511f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_015314be3b573f469c10e24ab6a77c6afe35b33993898e84d51b7c9f2ece0f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015314be3b573f469c10e24ab6a77c6afe35b33993898e84d51b7c9f2ece0f30->enter($__internal_015314be3b573f469c10e24ab6a77c6afe35b33993898e84d51b7c9f2ece0f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_38813cf83f554b520671847222c9c0d2b7fc64d54cc89a5f2019d6afe5f7511f->leave($__internal_38813cf83f554b520671847222c9c0d2b7fc64d54cc89a5f2019d6afe5f7511f_prof);

        
        $__internal_015314be3b573f469c10e24ab6a77c6afe35b33993898e84d51b7c9f2ece0f30->leave($__internal_015314be3b573f469c10e24ab6a77c6afe35b33993898e84d51b7c9f2ece0f30_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1aa708f3097f6bacef13e625957e1f17822ba6199a9724e29ca5ec058e7d1db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa708f3097f6bacef13e625957e1f17822ba6199a9724e29ca5ec058e7d1db1->enter($__internal_1aa708f3097f6bacef13e625957e1f17822ba6199a9724e29ca5ec058e7d1db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c40cc5f59f11b82255553e45660a80ebe339128cc7b37450e047dd981b4ebdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40cc5f59f11b82255553e45660a80ebe339128cc7b37450e047dd981b4ebdeb->enter($__internal_c40cc5f59f11b82255553e45660a80ebe339128cc7b37450e047dd981b4ebdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_c40cc5f59f11b82255553e45660a80ebe339128cc7b37450e047dd981b4ebdeb->leave($__internal_c40cc5f59f11b82255553e45660a80ebe339128cc7b37450e047dd981b4ebdeb_prof);

        
        $__internal_1aa708f3097f6bacef13e625957e1f17822ba6199a9724e29ca5ec058e7d1db1->leave($__internal_1aa708f3097f6bacef13e625957e1f17822ba6199a9724e29ca5ec058e7d1db1_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7d7e8750742f74dc8b42f1fa1bedc7d7eaccf0546a0580a9eb4cae6489d741f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7e8750742f74dc8b42f1fa1bedc7d7eaccf0546a0580a9eb4cae6489d741f7->enter($__internal_7d7e8750742f74dc8b42f1fa1bedc7d7eaccf0546a0580a9eb4cae6489d741f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_bd97a2512d094524fa6af5d148fa40df460a7c42c1a964112172b943275f7cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd97a2512d094524fa6af5d148fa40df460a7c42c1a964112172b943275f7cd1->enter($__internal_bd97a2512d094524fa6af5d148fa40df460a7c42c1a964112172b943275f7cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_bd97a2512d094524fa6af5d148fa40df460a7c42c1a964112172b943275f7cd1->leave($__internal_bd97a2512d094524fa6af5d148fa40df460a7c42c1a964112172b943275f7cd1_prof);

        
        $__internal_7d7e8750742f74dc8b42f1fa1bedc7d7eaccf0546a0580a9eb4cae6489d741f7->leave($__internal_7d7e8750742f74dc8b42f1fa1bedc7d7eaccf0546a0580a9eb4cae6489d741f7_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b341c2e20b78bd330933a4a2dfc81f42620edfac370b856fbc32317a86dd9754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b341c2e20b78bd330933a4a2dfc81f42620edfac370b856fbc32317a86dd9754->enter($__internal_b341c2e20b78bd330933a4a2dfc81f42620edfac370b856fbc32317a86dd9754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_570396b26f4b1045b7b90bce303db83da63107104ad1615f97212043c114905d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570396b26f4b1045b7b90bce303db83da63107104ad1615f97212043c114905d->enter($__internal_570396b26f4b1045b7b90bce303db83da63107104ad1615f97212043c114905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_570396b26f4b1045b7b90bce303db83da63107104ad1615f97212043c114905d->leave($__internal_570396b26f4b1045b7b90bce303db83da63107104ad1615f97212043c114905d_prof);

        
        $__internal_b341c2e20b78bd330933a4a2dfc81f42620edfac370b856fbc32317a86dd9754->leave($__internal_b341c2e20b78bd330933a4a2dfc81f42620edfac370b856fbc32317a86dd9754_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_794df3e3688b5a580ca35eceb754100b1d2c7bcc11f4030a3f07fe839d8bd9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794df3e3688b5a580ca35eceb754100b1d2c7bcc11f4030a3f07fe839d8bd9d2->enter($__internal_794df3e3688b5a580ca35eceb754100b1d2c7bcc11f4030a3f07fe839d8bd9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_57fc12a67a5bac8f10b96e016d80d514351faebd9361e73568f116bf25536b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fc12a67a5bac8f10b96e016d80d514351faebd9361e73568f116bf25536b34->enter($__internal_57fc12a67a5bac8f10b96e016d80d514351faebd9361e73568f116bf25536b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_57fc12a67a5bac8f10b96e016d80d514351faebd9361e73568f116bf25536b34->leave($__internal_57fc12a67a5bac8f10b96e016d80d514351faebd9361e73568f116bf25536b34_prof);

        
        $__internal_794df3e3688b5a580ca35eceb754100b1d2c7bcc11f4030a3f07fe839d8bd9d2->leave($__internal_794df3e3688b5a580ca35eceb754100b1d2c7bcc11f4030a3f07fe839d8bd9d2_prof);

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
", "form_table_layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
