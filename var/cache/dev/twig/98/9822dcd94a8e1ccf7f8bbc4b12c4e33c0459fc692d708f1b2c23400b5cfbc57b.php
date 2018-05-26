<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6b23785a6f538c1c5dae5246bbba95257073ccba1cae15e87a55d97506370d47 extends Twig_Template
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
        $__internal_95712e9bc51b7dfc1b159fa7a4e9f570916e47cd312b3aa3b97b5ed27cf0ab91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95712e9bc51b7dfc1b159fa7a4e9f570916e47cd312b3aa3b97b5ed27cf0ab91->enter($__internal_95712e9bc51b7dfc1b159fa7a4e9f570916e47cd312b3aa3b97b5ed27cf0ab91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ca499efa4d666bd16ef7a0ece69cec039849617d9a20a54742f2c002da333980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca499efa4d666bd16ef7a0ece69cec039849617d9a20a54742f2c002da333980->enter($__internal_ca499efa4d666bd16ef7a0ece69cec039849617d9a20a54742f2c002da333980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_95712e9bc51b7dfc1b159fa7a4e9f570916e47cd312b3aa3b97b5ed27cf0ab91->leave($__internal_95712e9bc51b7dfc1b159fa7a4e9f570916e47cd312b3aa3b97b5ed27cf0ab91_prof);

        
        $__internal_ca499efa4d666bd16ef7a0ece69cec039849617d9a20a54742f2c002da333980->leave($__internal_ca499efa4d666bd16ef7a0ece69cec039849617d9a20a54742f2c002da333980_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
