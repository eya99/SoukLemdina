<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6e1eeb3da60693b856ce9cfb10f6e8418f66b929cfae6dc24435f19ffda81cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbe3ab1980fdbd2a111cea08ede4a2f7a04789431a6271eac293e9808af9ddad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe3ab1980fdbd2a111cea08ede4a2f7a04789431a6271eac293e9808af9ddad->enter($__internal_dbe3ab1980fdbd2a111cea08ede4a2f7a04789431a6271eac293e9808af9ddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_389b8c85aa1865b7d0775ca6f8a878e13a17737e2174b34dbe0f2ddc5e1d321b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389b8c85aa1865b7d0775ca6f8a878e13a17737e2174b34dbe0f2ddc5e1d321b->enter($__internal_389b8c85aa1865b7d0775ca6f8a878e13a17737e2174b34dbe0f2ddc5e1d321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_dbe3ab1980fdbd2a111cea08ede4a2f7a04789431a6271eac293e9808af9ddad->leave($__internal_dbe3ab1980fdbd2a111cea08ede4a2f7a04789431a6271eac293e9808af9ddad_prof);

        
        $__internal_389b8c85aa1865b7d0775ca6f8a878e13a17737e2174b34dbe0f2ddc5e1d321b->leave($__internal_389b8c85aa1865b7d0775ca6f8a878e13a17737e2174b34dbe0f2ddc5e1d321b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
