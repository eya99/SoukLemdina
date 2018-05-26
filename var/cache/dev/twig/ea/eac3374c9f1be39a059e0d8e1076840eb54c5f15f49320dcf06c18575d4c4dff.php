<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_09a1ede83603a3a862ffde1e338f0c1cb1556df0dc20a51c339bc5c820df6532 extends Twig_Template
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
        $__internal_a3c99569555c4e7d1f8ce75bde8c17a92f8a1784ff5cd0a330ccf7e4bfc27a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c99569555c4e7d1f8ce75bde8c17a92f8a1784ff5cd0a330ccf7e4bfc27a45->enter($__internal_a3c99569555c4e7d1f8ce75bde8c17a92f8a1784ff5cd0a330ccf7e4bfc27a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3de4dcaba4f418c0e450d31d523ef8db4a24495e72e1aa0028b206e06dce8d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de4dcaba4f418c0e450d31d523ef8db4a24495e72e1aa0028b206e06dce8d25->enter($__internal_3de4dcaba4f418c0e450d31d523ef8db4a24495e72e1aa0028b206e06dce8d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a3c99569555c4e7d1f8ce75bde8c17a92f8a1784ff5cd0a330ccf7e4bfc27a45->leave($__internal_a3c99569555c4e7d1f8ce75bde8c17a92f8a1784ff5cd0a330ccf7e4bfc27a45_prof);

        
        $__internal_3de4dcaba4f418c0e450d31d523ef8db4a24495e72e1aa0028b206e06dce8d25->leave($__internal_3de4dcaba4f418c0e450d31d523ef8db4a24495e72e1aa0028b206e06dce8d25_prof);

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
", "@Framework/Form/collection_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
