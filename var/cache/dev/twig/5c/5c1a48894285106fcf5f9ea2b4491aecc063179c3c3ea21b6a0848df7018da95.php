<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6fd316b7e293175eaa309c4a2d509bd46ae1ad5a6990439d202890d94c00ec98 extends Twig_Template
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
        $__internal_74c80008da683ceee136c09735b7b8ac3326952593c9f5950c3a47641bb64da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c80008da683ceee136c09735b7b8ac3326952593c9f5950c3a47641bb64da9->enter($__internal_74c80008da683ceee136c09735b7b8ac3326952593c9f5950c3a47641bb64da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7bb48fd97b7cb4fec3b771b304bbc62dd84cdfbe5294d05e291cdc6e0c36ceaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb48fd97b7cb4fec3b771b304bbc62dd84cdfbe5294d05e291cdc6e0c36ceaf->enter($__internal_7bb48fd97b7cb4fec3b771b304bbc62dd84cdfbe5294d05e291cdc6e0c36ceaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_74c80008da683ceee136c09735b7b8ac3326952593c9f5950c3a47641bb64da9->leave($__internal_74c80008da683ceee136c09735b7b8ac3326952593c9f5950c3a47641bb64da9_prof);

        
        $__internal_7bb48fd97b7cb4fec3b771b304bbc62dd84cdfbe5294d05e291cdc6e0c36ceaf->leave($__internal_7bb48fd97b7cb4fec3b771b304bbc62dd84cdfbe5294d05e291cdc6e0c36ceaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
