<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c312dd3cbc7876ca9bc25f8ca6fae52c848af27552794107a46852f3c6648d24 extends Twig_Template
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
        $__internal_d628b1a4866dc3e5f04dccaae8afac163cb9ced95981031f1d1db613d597adf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d628b1a4866dc3e5f04dccaae8afac163cb9ced95981031f1d1db613d597adf6->enter($__internal_d628b1a4866dc3e5f04dccaae8afac163cb9ced95981031f1d1db613d597adf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4959f241a5bf9db1a491c47523084f42047ff1e7b1cdcd9d8849e37bf25959a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4959f241a5bf9db1a491c47523084f42047ff1e7b1cdcd9d8849e37bf25959a2->enter($__internal_4959f241a5bf9db1a491c47523084f42047ff1e7b1cdcd9d8849e37bf25959a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d628b1a4866dc3e5f04dccaae8afac163cb9ced95981031f1d1db613d597adf6->leave($__internal_d628b1a4866dc3e5f04dccaae8afac163cb9ced95981031f1d1db613d597adf6_prof);

        
        $__internal_4959f241a5bf9db1a491c47523084f42047ff1e7b1cdcd9d8849e37bf25959a2->leave($__internal_4959f241a5bf9db1a491c47523084f42047ff1e7b1cdcd9d8849e37bf25959a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
