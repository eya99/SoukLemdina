<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0ce82bffde69f2d15382a3fdeddca858a1f6227e18ee8006a68126b892ca0873 extends Twig_Template
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
        $__internal_3eaf694188062d22f469594c99be0d2e784e1395a2ddce33daecdaf8a5f1d058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eaf694188062d22f469594c99be0d2e784e1395a2ddce33daecdaf8a5f1d058->enter($__internal_3eaf694188062d22f469594c99be0d2e784e1395a2ddce33daecdaf8a5f1d058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4e42f598965ff3c3de10581fff8169e9840883c6dfda49c026d3b4b003ec05a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e42f598965ff3c3de10581fff8169e9840883c6dfda49c026d3b4b003ec05a7->enter($__internal_4e42f598965ff3c3de10581fff8169e9840883c6dfda49c026d3b4b003ec05a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3eaf694188062d22f469594c99be0d2e784e1395a2ddce33daecdaf8a5f1d058->leave($__internal_3eaf694188062d22f469594c99be0d2e784e1395a2ddce33daecdaf8a5f1d058_prof);

        
        $__internal_4e42f598965ff3c3de10581fff8169e9840883c6dfda49c026d3b4b003ec05a7->leave($__internal_4e42f598965ff3c3de10581fff8169e9840883c6dfda49c026d3b4b003ec05a7_prof);

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
", "@Framework/Form/form.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
