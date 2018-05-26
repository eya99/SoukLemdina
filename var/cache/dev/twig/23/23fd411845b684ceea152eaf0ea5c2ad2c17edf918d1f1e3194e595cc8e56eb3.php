<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_506d73f9184bef422dccd050691e5e0caa20f7aa3e4cb1fc2027fe210c410f21 extends Twig_Template
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
        $__internal_7a11b1cf7044ecc259218d9936e110e74a258cce3f8a8444b2566098aed495fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a11b1cf7044ecc259218d9936e110e74a258cce3f8a8444b2566098aed495fe->enter($__internal_7a11b1cf7044ecc259218d9936e110e74a258cce3f8a8444b2566098aed495fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_349e5b71612d89c87334278acc7158a5dacf6b546a8943ab744474b9df8615ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349e5b71612d89c87334278acc7158a5dacf6b546a8943ab744474b9df8615ab->enter($__internal_349e5b71612d89c87334278acc7158a5dacf6b546a8943ab744474b9df8615ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7a11b1cf7044ecc259218d9936e110e74a258cce3f8a8444b2566098aed495fe->leave($__internal_7a11b1cf7044ecc259218d9936e110e74a258cce3f8a8444b2566098aed495fe_prof);

        
        $__internal_349e5b71612d89c87334278acc7158a5dacf6b546a8943ab744474b9df8615ab->leave($__internal_349e5b71612d89c87334278acc7158a5dacf6b546a8943ab744474b9df8615ab_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
