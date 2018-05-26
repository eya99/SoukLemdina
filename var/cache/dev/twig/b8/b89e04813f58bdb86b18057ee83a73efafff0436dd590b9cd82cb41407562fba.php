<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81bc1db327491ada06fd976779ecc7e06ae8ff2f493e67a73167db887e7c3e6a extends Twig_Template
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
        $__internal_4972c5d38259309aae1655d1186da56f80fb94c6fdd88537d268ec735f36ed57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4972c5d38259309aae1655d1186da56f80fb94c6fdd88537d268ec735f36ed57->enter($__internal_4972c5d38259309aae1655d1186da56f80fb94c6fdd88537d268ec735f36ed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2a963556aa637e546e9d5ed29d22fd5d8daca2b2afd53bf0296538a36be9fb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a963556aa637e546e9d5ed29d22fd5d8daca2b2afd53bf0296538a36be9fb57->enter($__internal_2a963556aa637e546e9d5ed29d22fd5d8daca2b2afd53bf0296538a36be9fb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4972c5d38259309aae1655d1186da56f80fb94c6fdd88537d268ec735f36ed57->leave($__internal_4972c5d38259309aae1655d1186da56f80fb94c6fdd88537d268ec735f36ed57_prof);

        
        $__internal_2a963556aa637e546e9d5ed29d22fd5d8daca2b2afd53bf0296538a36be9fb57->leave($__internal_2a963556aa637e546e9d5ed29d22fd5d8daca2b2afd53bf0296538a36be9fb57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
