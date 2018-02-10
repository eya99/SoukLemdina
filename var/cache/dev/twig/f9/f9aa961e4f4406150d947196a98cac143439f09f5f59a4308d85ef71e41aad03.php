<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c7e8073e21da9a8dc616553c62e89f1a1d30141a9b8f9c148ae6254937692ed8 extends Twig_Template
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
        $__internal_bba6e654821dda8da6cfc0d95cd1de762dcd4e90a23707045fdb0a8e91386276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba6e654821dda8da6cfc0d95cd1de762dcd4e90a23707045fdb0a8e91386276->enter($__internal_bba6e654821dda8da6cfc0d95cd1de762dcd4e90a23707045fdb0a8e91386276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_41294cc411b98568df23442dc9b7a5e363e9b14cb9c427b259a152d733087827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41294cc411b98568df23442dc9b7a5e363e9b14cb9c427b259a152d733087827->enter($__internal_41294cc411b98568df23442dc9b7a5e363e9b14cb9c427b259a152d733087827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bba6e654821dda8da6cfc0d95cd1de762dcd4e90a23707045fdb0a8e91386276->leave($__internal_bba6e654821dda8da6cfc0d95cd1de762dcd4e90a23707045fdb0a8e91386276_prof);

        
        $__internal_41294cc411b98568df23442dc9b7a5e363e9b14cb9c427b259a152d733087827->leave($__internal_41294cc411b98568df23442dc9b7a5e363e9b14cb9c427b259a152d733087827_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
