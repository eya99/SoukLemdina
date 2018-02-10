<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6063701a6a19f3474d0d7a21999fab9f1a93d005726914b97757654f96581e70 extends Twig_Template
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
        $__internal_cbf490c9121ae69e18340b85d89fa85ef146cdcd806d2096dbcf7d5a4d3dc2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf490c9121ae69e18340b85d89fa85ef146cdcd806d2096dbcf7d5a4d3dc2be->enter($__internal_cbf490c9121ae69e18340b85d89fa85ef146cdcd806d2096dbcf7d5a4d3dc2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e62c715e7ef28eb76544b1f8563fdfcb3fcdc392ba6c401882bff257a52e8521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62c715e7ef28eb76544b1f8563fdfcb3fcdc392ba6c401882bff257a52e8521->enter($__internal_e62c715e7ef28eb76544b1f8563fdfcb3fcdc392ba6c401882bff257a52e8521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cbf490c9121ae69e18340b85d89fa85ef146cdcd806d2096dbcf7d5a4d3dc2be->leave($__internal_cbf490c9121ae69e18340b85d89fa85ef146cdcd806d2096dbcf7d5a4d3dc2be_prof);

        
        $__internal_e62c715e7ef28eb76544b1f8563fdfcb3fcdc392ba6c401882bff257a52e8521->leave($__internal_e62c715e7ef28eb76544b1f8563fdfcb3fcdc392ba6c401882bff257a52e8521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
