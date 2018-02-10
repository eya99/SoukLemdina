<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_efd219f957d91fc453045b05336d62b5a241424b84666910839b86a26e71e9dc extends Twig_Template
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
        $__internal_8c475344f5c24f7d7036c123112fcf7b74b1b17df48df06a8a094a823fe04e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c475344f5c24f7d7036c123112fcf7b74b1b17df48df06a8a094a823fe04e88->enter($__internal_8c475344f5c24f7d7036c123112fcf7b74b1b17df48df06a8a094a823fe04e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7ba70b753da49d7c2f3e0c29ee6ae85f52f692129c25c83577053bc1821909ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba70b753da49d7c2f3e0c29ee6ae85f52f692129c25c83577053bc1821909ee->enter($__internal_7ba70b753da49d7c2f3e0c29ee6ae85f52f692129c25c83577053bc1821909ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8c475344f5c24f7d7036c123112fcf7b74b1b17df48df06a8a094a823fe04e88->leave($__internal_8c475344f5c24f7d7036c123112fcf7b74b1b17df48df06a8a094a823fe04e88_prof);

        
        $__internal_7ba70b753da49d7c2f3e0c29ee6ae85f52f692129c25c83577053bc1821909ee->leave($__internal_7ba70b753da49d7c2f3e0c29ee6ae85f52f692129c25c83577053bc1821909ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
