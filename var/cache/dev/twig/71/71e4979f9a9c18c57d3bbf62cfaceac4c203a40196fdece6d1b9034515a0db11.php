<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ee1e6bba65bde9096290d88fad835ddb98671f49b7a3a7b6400416c0f44a5629 extends Twig_Template
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
        $__internal_2cf9e6853020abfdd31d97da7a10440fdccc266925f93aef58d1c7836e9d0b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf9e6853020abfdd31d97da7a10440fdccc266925f93aef58d1c7836e9d0b3f->enter($__internal_2cf9e6853020abfdd31d97da7a10440fdccc266925f93aef58d1c7836e9d0b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7296d89f70326ece3d2403a4b667bd62b2c2870cd9c7d0387c1d1a6e6feba2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7296d89f70326ece3d2403a4b667bd62b2c2870cd9c7d0387c1d1a6e6feba2f6->enter($__internal_7296d89f70326ece3d2403a4b667bd62b2c2870cd9c7d0387c1d1a6e6feba2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2cf9e6853020abfdd31d97da7a10440fdccc266925f93aef58d1c7836e9d0b3f->leave($__internal_2cf9e6853020abfdd31d97da7a10440fdccc266925f93aef58d1c7836e9d0b3f_prof);

        
        $__internal_7296d89f70326ece3d2403a4b667bd62b2c2870cd9c7d0387c1d1a6e6feba2f6->leave($__internal_7296d89f70326ece3d2403a4b667bd62b2c2870cd9c7d0387c1d1a6e6feba2f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
