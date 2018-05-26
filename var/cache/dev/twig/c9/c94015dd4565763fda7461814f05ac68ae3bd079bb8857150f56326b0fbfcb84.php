<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0fbc7655eef62e3549b2437fb0ca891a6c3eecf49ddfb1f3e8b5a9603e6274a9 extends Twig_Template
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
        $__internal_ec23e61410a9171f96a7e67af89f4667d00555c7f9148972f4223592d53b8e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec23e61410a9171f96a7e67af89f4667d00555c7f9148972f4223592d53b8e9d->enter($__internal_ec23e61410a9171f96a7e67af89f4667d00555c7f9148972f4223592d53b8e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4d22d08e3d73ad5a0038f7877a50760b63a155c9d3c6201e1aaa0f50fd0a06e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d22d08e3d73ad5a0038f7877a50760b63a155c9d3c6201e1aaa0f50fd0a06e2->enter($__internal_4d22d08e3d73ad5a0038f7877a50760b63a155c9d3c6201e1aaa0f50fd0a06e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ec23e61410a9171f96a7e67af89f4667d00555c7f9148972f4223592d53b8e9d->leave($__internal_ec23e61410a9171f96a7e67af89f4667d00555c7f9148972f4223592d53b8e9d_prof);

        
        $__internal_4d22d08e3d73ad5a0038f7877a50760b63a155c9d3c6201e1aaa0f50fd0a06e2->leave($__internal_4d22d08e3d73ad5a0038f7877a50760b63a155c9d3c6201e1aaa0f50fd0a06e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
