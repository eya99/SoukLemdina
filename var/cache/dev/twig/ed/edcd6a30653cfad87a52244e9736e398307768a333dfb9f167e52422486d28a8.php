<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e9e7c1448826cb605f630e2ae38679efad07b78213bccaf753b118826b7b0d49 extends Twig_Template
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
        $__internal_a4854d2891903de14df19de2241caa62e90fce3ebe5421b3c317d998f374ffeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4854d2891903de14df19de2241caa62e90fce3ebe5421b3c317d998f374ffeb->enter($__internal_a4854d2891903de14df19de2241caa62e90fce3ebe5421b3c317d998f374ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3e5650bf9a0ece787b10839cc0e54fe796df5e7f3f32d67dc3c77f5a7ba6d9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5650bf9a0ece787b10839cc0e54fe796df5e7f3f32d67dc3c77f5a7ba6d9f2->enter($__internal_3e5650bf9a0ece787b10839cc0e54fe796df5e7f3f32d67dc3c77f5a7ba6d9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a4854d2891903de14df19de2241caa62e90fce3ebe5421b3c317d998f374ffeb->leave($__internal_a4854d2891903de14df19de2241caa62e90fce3ebe5421b3c317d998f374ffeb_prof);

        
        $__internal_3e5650bf9a0ece787b10839cc0e54fe796df5e7f3f32d67dc3c77f5a7ba6d9f2->leave($__internal_3e5650bf9a0ece787b10839cc0e54fe796df5e7f3f32d67dc3c77f5a7ba6d9f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
