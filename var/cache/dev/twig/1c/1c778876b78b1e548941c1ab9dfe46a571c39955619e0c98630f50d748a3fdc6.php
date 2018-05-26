<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_16a1e70eee40b157ce7eb42865e02865e1388e749bea2ba9b781c92a0e1032b8 extends Twig_Template
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
        $__internal_05575e55f5578d0edae5b80b88174888ceded41d91e468c5e3cfb24e3d087bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05575e55f5578d0edae5b80b88174888ceded41d91e468c5e3cfb24e3d087bc1->enter($__internal_05575e55f5578d0edae5b80b88174888ceded41d91e468c5e3cfb24e3d087bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_68d9fef34fe290ab612e676044c1bd4ca5b4bcdac5e37dca8a51be709d852de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d9fef34fe290ab612e676044c1bd4ca5b4bcdac5e37dca8a51be709d852de2->enter($__internal_68d9fef34fe290ab612e676044c1bd4ca5b4bcdac5e37dca8a51be709d852de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_05575e55f5578d0edae5b80b88174888ceded41d91e468c5e3cfb24e3d087bc1->leave($__internal_05575e55f5578d0edae5b80b88174888ceded41d91e468c5e3cfb24e3d087bc1_prof);

        
        $__internal_68d9fef34fe290ab612e676044c1bd4ca5b4bcdac5e37dca8a51be709d852de2->leave($__internal_68d9fef34fe290ab612e676044c1bd4ca5b4bcdac5e37dca8a51be709d852de2_prof);

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
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
