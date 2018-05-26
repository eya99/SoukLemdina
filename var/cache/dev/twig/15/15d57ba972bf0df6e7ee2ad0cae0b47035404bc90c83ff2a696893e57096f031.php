<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_34458c81c6a7ae58dc457163b664f448f1150a4e47f376d8dd70a4fa65c8cde7 extends Twig_Template
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
        $__internal_33847bc114c2b4fc53c3ae2e2008abd47735e6796a0568c706bcd8d88ffff247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33847bc114c2b4fc53c3ae2e2008abd47735e6796a0568c706bcd8d88ffff247->enter($__internal_33847bc114c2b4fc53c3ae2e2008abd47735e6796a0568c706bcd8d88ffff247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_db9390f0f4789c33da571c22217b6cdca0a03babaa0f7cf74cac2a4bbdc3da46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9390f0f4789c33da571c22217b6cdca0a03babaa0f7cf74cac2a4bbdc3da46->enter($__internal_db9390f0f4789c33da571c22217b6cdca0a03babaa0f7cf74cac2a4bbdc3da46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_33847bc114c2b4fc53c3ae2e2008abd47735e6796a0568c706bcd8d88ffff247->leave($__internal_33847bc114c2b4fc53c3ae2e2008abd47735e6796a0568c706bcd8d88ffff247_prof);

        
        $__internal_db9390f0f4789c33da571c22217b6cdca0a03babaa0f7cf74cac2a4bbdc3da46->leave($__internal_db9390f0f4789c33da571c22217b6cdca0a03babaa0f7cf74cac2a4bbdc3da46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
