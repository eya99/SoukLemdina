<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_970b1c3e5fd51129ed98068e5dc762dcc2a81e054dc63e3413ce2b292c07f3ff extends Twig_Template
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
        $__internal_45ae012e34f1d33af02aff97d0c8b2544c6b48f7b051d7773ff75a3cf44a510c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ae012e34f1d33af02aff97d0c8b2544c6b48f7b051d7773ff75a3cf44a510c->enter($__internal_45ae012e34f1d33af02aff97d0c8b2544c6b48f7b051d7773ff75a3cf44a510c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_363b5a9b20e39120baf4a39e9ff8923b1b194385f9a7212db9e9443f9026e414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363b5a9b20e39120baf4a39e9ff8923b1b194385f9a7212db9e9443f9026e414->enter($__internal_363b5a9b20e39120baf4a39e9ff8923b1b194385f9a7212db9e9443f9026e414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_45ae012e34f1d33af02aff97d0c8b2544c6b48f7b051d7773ff75a3cf44a510c->leave($__internal_45ae012e34f1d33af02aff97d0c8b2544c6b48f7b051d7773ff75a3cf44a510c_prof);

        
        $__internal_363b5a9b20e39120baf4a39e9ff8923b1b194385f9a7212db9e9443f9026e414->leave($__internal_363b5a9b20e39120baf4a39e9ff8923b1b194385f9a7212db9e9443f9026e414_prof);

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
", "@Framework/Form/choice_options.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
