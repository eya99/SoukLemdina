<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_bd818d28c9a6a5041c3f67f613ad92cb05d39220375f9ba4ebc4d34a0579998f extends Twig_Template
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
        $__internal_c8569c00271151642167394c37a4096b6602afe4edae3f8eb522d047cc4ccab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8569c00271151642167394c37a4096b6602afe4edae3f8eb522d047cc4ccab2->enter($__internal_c8569c00271151642167394c37a4096b6602afe4edae3f8eb522d047cc4ccab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7249ed937bf1b2ebe2afce54bd03fd25431c8a42a93095ea4483442e555ecb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7249ed937bf1b2ebe2afce54bd03fd25431c8a42a93095ea4483442e555ecb50->enter($__internal_7249ed937bf1b2ebe2afce54bd03fd25431c8a42a93095ea4483442e555ecb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c8569c00271151642167394c37a4096b6602afe4edae3f8eb522d047cc4ccab2->leave($__internal_c8569c00271151642167394c37a4096b6602afe4edae3f8eb522d047cc4ccab2_prof);

        
        $__internal_7249ed937bf1b2ebe2afce54bd03fd25431c8a42a93095ea4483442e555ecb50->leave($__internal_7249ed937bf1b2ebe2afce54bd03fd25431c8a42a93095ea4483442e555ecb50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
