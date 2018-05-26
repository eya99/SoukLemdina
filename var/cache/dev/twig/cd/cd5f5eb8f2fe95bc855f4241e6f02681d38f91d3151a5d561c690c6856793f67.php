<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_45db31ce3058dccd1bcc869bf30363f6aec54033f6a2a5a07677bab109c2ccbc extends Twig_Template
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
        $__internal_cf1cc157ce2b530b32d08e2238e90a7d1990fffc740f7de390a0fe907a7031d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1cc157ce2b530b32d08e2238e90a7d1990fffc740f7de390a0fe907a7031d3->enter($__internal_cf1cc157ce2b530b32d08e2238e90a7d1990fffc740f7de390a0fe907a7031d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e24a763c3717451ad13cbb35697767b8bf242e6f57e06dda3ad61be41523ed7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24a763c3717451ad13cbb35697767b8bf242e6f57e06dda3ad61be41523ed7d->enter($__internal_e24a763c3717451ad13cbb35697767b8bf242e6f57e06dda3ad61be41523ed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cf1cc157ce2b530b32d08e2238e90a7d1990fffc740f7de390a0fe907a7031d3->leave($__internal_cf1cc157ce2b530b32d08e2238e90a7d1990fffc740f7de390a0fe907a7031d3_prof);

        
        $__internal_e24a763c3717451ad13cbb35697767b8bf242e6f57e06dda3ad61be41523ed7d->leave($__internal_e24a763c3717451ad13cbb35697767b8bf242e6f57e06dda3ad61be41523ed7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
