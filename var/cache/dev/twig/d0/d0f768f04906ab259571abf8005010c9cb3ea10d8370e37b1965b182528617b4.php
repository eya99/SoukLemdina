<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b8ac9c62df5084206529324b24be75bdce9ddc2407d07eb519a7b206052e6a37 extends Twig_Template
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
        $__internal_78a085ec4ee7c36f2eb0d84f99bda55dd9c6acbd27ef3d6108d423f37df38ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a085ec4ee7c36f2eb0d84f99bda55dd9c6acbd27ef3d6108d423f37df38ea9->enter($__internal_78a085ec4ee7c36f2eb0d84f99bda55dd9c6acbd27ef3d6108d423f37df38ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_cb1999ba01bfea559225f5f14311a009a3cf550ec795b09829fa2019e12cdfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1999ba01bfea559225f5f14311a009a3cf550ec795b09829fa2019e12cdfdd->enter($__internal_cb1999ba01bfea559225f5f14311a009a3cf550ec795b09829fa2019e12cdfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_78a085ec4ee7c36f2eb0d84f99bda55dd9c6acbd27ef3d6108d423f37df38ea9->leave($__internal_78a085ec4ee7c36f2eb0d84f99bda55dd9c6acbd27ef3d6108d423f37df38ea9_prof);

        
        $__internal_cb1999ba01bfea559225f5f14311a009a3cf550ec795b09829fa2019e12cdfdd->leave($__internal_cb1999ba01bfea559225f5f14311a009a3cf550ec795b09829fa2019e12cdfdd_prof);

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
", "@Framework/Form/button_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
