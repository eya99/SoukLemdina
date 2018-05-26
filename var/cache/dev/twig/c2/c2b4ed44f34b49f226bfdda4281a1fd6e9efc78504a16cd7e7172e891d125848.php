<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_63295298821bc060b7a5835b7cdcaee545e88c144290c94b880bbc511693b3a8 extends Twig_Template
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
        $__internal_0a0d9928d27ca1a4d382f2ac2ac94f281dd0497a1ead6dbccb154ef0ed29bd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0d9928d27ca1a4d382f2ac2ac94f281dd0497a1ead6dbccb154ef0ed29bd39->enter($__internal_0a0d9928d27ca1a4d382f2ac2ac94f281dd0497a1ead6dbccb154ef0ed29bd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_bbf406701bb7daa71dcbd301d45ac199c58d96e4eacaa0cb6c36b9ad973e0ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf406701bb7daa71dcbd301d45ac199c58d96e4eacaa0cb6c36b9ad973e0ea4->enter($__internal_bbf406701bb7daa71dcbd301d45ac199c58d96e4eacaa0cb6c36b9ad973e0ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a0d9928d27ca1a4d382f2ac2ac94f281dd0497a1ead6dbccb154ef0ed29bd39->leave($__internal_0a0d9928d27ca1a4d382f2ac2ac94f281dd0497a1ead6dbccb154ef0ed29bd39_prof);

        
        $__internal_bbf406701bb7daa71dcbd301d45ac199c58d96e4eacaa0cb6c36b9ad973e0ea4->leave($__internal_bbf406701bb7daa71dcbd301d45ac199c58d96e4eacaa0cb6c36b9ad973e0ea4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
