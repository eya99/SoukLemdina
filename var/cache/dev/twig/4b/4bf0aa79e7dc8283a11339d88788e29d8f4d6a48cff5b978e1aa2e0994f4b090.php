<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a70a1af3332270b28151b75ef55324d951ca62c3f41c65041e355151631bc7be extends Twig_Template
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
        $__internal_b73bb7f27bed0a8cfa94bb9160defb55656f97aa44c1fa37dc473673690ca537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73bb7f27bed0a8cfa94bb9160defb55656f97aa44c1fa37dc473673690ca537->enter($__internal_b73bb7f27bed0a8cfa94bb9160defb55656f97aa44c1fa37dc473673690ca537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_964a28f20c4425d3b99d7b70f7bbe66c536343f62750f41db8710defed3fa1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964a28f20c4425d3b99d7b70f7bbe66c536343f62750f41db8710defed3fa1b4->enter($__internal_964a28f20c4425d3b99d7b70f7bbe66c536343f62750f41db8710defed3fa1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b73bb7f27bed0a8cfa94bb9160defb55656f97aa44c1fa37dc473673690ca537->leave($__internal_b73bb7f27bed0a8cfa94bb9160defb55656f97aa44c1fa37dc473673690ca537_prof);

        
        $__internal_964a28f20c4425d3b99d7b70f7bbe66c536343f62750f41db8710defed3fa1b4->leave($__internal_964a28f20c4425d3b99d7b70f7bbe66c536343f62750f41db8710defed3fa1b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
