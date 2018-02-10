<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e9fbcb1aa7a940adbe422bc37509a444e3418891af4f75a30e79892c9198a548 extends Twig_Template
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
        $__internal_03e1b9a6f9815cd4f8aa3fbdc5876c9729590b65ae19ec186b6c904a9b9981f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e1b9a6f9815cd4f8aa3fbdc5876c9729590b65ae19ec186b6c904a9b9981f1->enter($__internal_03e1b9a6f9815cd4f8aa3fbdc5876c9729590b65ae19ec186b6c904a9b9981f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_593d78933a3ad3447cdc95a63c7c7fcb81a53b2519d3ebda710962cbffe7c29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593d78933a3ad3447cdc95a63c7c7fcb81a53b2519d3ebda710962cbffe7c29f->enter($__internal_593d78933a3ad3447cdc95a63c7c7fcb81a53b2519d3ebda710962cbffe7c29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_03e1b9a6f9815cd4f8aa3fbdc5876c9729590b65ae19ec186b6c904a9b9981f1->leave($__internal_03e1b9a6f9815cd4f8aa3fbdc5876c9729590b65ae19ec186b6c904a9b9981f1_prof);

        
        $__internal_593d78933a3ad3447cdc95a63c7c7fcb81a53b2519d3ebda710962cbffe7c29f->leave($__internal_593d78933a3ad3447cdc95a63c7c7fcb81a53b2519d3ebda710962cbffe7c29f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
