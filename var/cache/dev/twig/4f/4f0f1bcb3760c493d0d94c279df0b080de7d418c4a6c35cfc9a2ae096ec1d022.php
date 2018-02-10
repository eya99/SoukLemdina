<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b2c4805605b2adc317fea08c2bdb3fcf6bb4ff510a1f441f70106329a1342941 extends Twig_Template
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
        $__internal_4ae812ca11779957a79c5d36ecd4ca391ead290bd19e6c2f2924e7d20a979d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae812ca11779957a79c5d36ecd4ca391ead290bd19e6c2f2924e7d20a979d36->enter($__internal_4ae812ca11779957a79c5d36ecd4ca391ead290bd19e6c2f2924e7d20a979d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_22fb87091ec66e8f469e57789339bcd5f8af71f05fd08513b086ed5e6d92d0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fb87091ec66e8f469e57789339bcd5f8af71f05fd08513b086ed5e6d92d0d0->enter($__internal_22fb87091ec66e8f469e57789339bcd5f8af71f05fd08513b086ed5e6d92d0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4ae812ca11779957a79c5d36ecd4ca391ead290bd19e6c2f2924e7d20a979d36->leave($__internal_4ae812ca11779957a79c5d36ecd4ca391ead290bd19e6c2f2924e7d20a979d36_prof);

        
        $__internal_22fb87091ec66e8f469e57789339bcd5f8af71f05fd08513b086ed5e6d92d0d0->leave($__internal_22fb87091ec66e8f469e57789339bcd5f8af71f05fd08513b086ed5e6d92d0d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
