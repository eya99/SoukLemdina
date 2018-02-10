<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7ab5098c7bc3a85e8205e6720abe3f1306a3f5d8f87c5ea6724883addc2eb7df extends Twig_Template
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
        $__internal_15b6ddc82748797c64f33cbe2dac855adf36f78fb909ee9116861fb1e0d454c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b6ddc82748797c64f33cbe2dac855adf36f78fb909ee9116861fb1e0d454c4->enter($__internal_15b6ddc82748797c64f33cbe2dac855adf36f78fb909ee9116861fb1e0d454c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e3ba4a8e8436d829877a1dbfe099135e9197dfe70e6cdab67cc5f555a864121e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ba4a8e8436d829877a1dbfe099135e9197dfe70e6cdab67cc5f555a864121e->enter($__internal_e3ba4a8e8436d829877a1dbfe099135e9197dfe70e6cdab67cc5f555a864121e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_15b6ddc82748797c64f33cbe2dac855adf36f78fb909ee9116861fb1e0d454c4->leave($__internal_15b6ddc82748797c64f33cbe2dac855adf36f78fb909ee9116861fb1e0d454c4_prof);

        
        $__internal_e3ba4a8e8436d829877a1dbfe099135e9197dfe70e6cdab67cc5f555a864121e->leave($__internal_e3ba4a8e8436d829877a1dbfe099135e9197dfe70e6cdab67cc5f555a864121e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
