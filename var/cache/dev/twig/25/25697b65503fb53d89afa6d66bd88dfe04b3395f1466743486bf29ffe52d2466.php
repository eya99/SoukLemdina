<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3358efc99191c95b555b450f833226943f70c607779debb1f660ee45f51616b6 extends Twig_Template
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
        $__internal_c41c51a8e3b398d8506d4def80b42f9954b7d0b5befa41d276a255bec26e25e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41c51a8e3b398d8506d4def80b42f9954b7d0b5befa41d276a255bec26e25e0->enter($__internal_c41c51a8e3b398d8506d4def80b42f9954b7d0b5befa41d276a255bec26e25e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5c8424498ad12f8d0c3640e6e075e6e605acadeca99c394b74d83e91079bc419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8424498ad12f8d0c3640e6e075e6e605acadeca99c394b74d83e91079bc419->enter($__internal_5c8424498ad12f8d0c3640e6e075e6e605acadeca99c394b74d83e91079bc419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c41c51a8e3b398d8506d4def80b42f9954b7d0b5befa41d276a255bec26e25e0->leave($__internal_c41c51a8e3b398d8506d4def80b42f9954b7d0b5befa41d276a255bec26e25e0_prof);

        
        $__internal_5c8424498ad12f8d0c3640e6e075e6e605acadeca99c394b74d83e91079bc419->leave($__internal_5c8424498ad12f8d0c3640e6e075e6e605acadeca99c394b74d83e91079bc419_prof);

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
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
