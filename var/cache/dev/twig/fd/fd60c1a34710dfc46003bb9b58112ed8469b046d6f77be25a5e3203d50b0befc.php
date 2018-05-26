<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3f613c2bb2a0a1cf52e2ec00ca8742d0b738f36000131cb539ecce6e3732e709 extends Twig_Template
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
        $__internal_fdadf6c7f2f938805db95028dd0abe24a57de6b4e97712920a5d016336f7f31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdadf6c7f2f938805db95028dd0abe24a57de6b4e97712920a5d016336f7f31b->enter($__internal_fdadf6c7f2f938805db95028dd0abe24a57de6b4e97712920a5d016336f7f31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_15b939734cd2c8a8e6b9e36bd6fb44603a34bbfdb4e36d4a58fac456e00173da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b939734cd2c8a8e6b9e36bd6fb44603a34bbfdb4e36d4a58fac456e00173da->enter($__internal_15b939734cd2c8a8e6b9e36bd6fb44603a34bbfdb4e36d4a58fac456e00173da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fdadf6c7f2f938805db95028dd0abe24a57de6b4e97712920a5d016336f7f31b->leave($__internal_fdadf6c7f2f938805db95028dd0abe24a57de6b4e97712920a5d016336f7f31b_prof);

        
        $__internal_15b939734cd2c8a8e6b9e36bd6fb44603a34bbfdb4e36d4a58fac456e00173da->leave($__internal_15b939734cd2c8a8e6b9e36bd6fb44603a34bbfdb4e36d4a58fac456e00173da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
