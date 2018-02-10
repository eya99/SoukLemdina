<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a399fb081a869d760674e04c63344720b2434391399ccfe8b12486390f6b1fe8 extends Twig_Template
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
        $__internal_737791984c1d1ef99037bce201e8885bf615049a40f6abf7c1abb3b01f68c159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737791984c1d1ef99037bce201e8885bf615049a40f6abf7c1abb3b01f68c159->enter($__internal_737791984c1d1ef99037bce201e8885bf615049a40f6abf7c1abb3b01f68c159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_de269ee4afd532344f397e0fda989bd24c49e70bf90f780b226f7029d1baf784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de269ee4afd532344f397e0fda989bd24c49e70bf90f780b226f7029d1baf784->enter($__internal_de269ee4afd532344f397e0fda989bd24c49e70bf90f780b226f7029d1baf784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_737791984c1d1ef99037bce201e8885bf615049a40f6abf7c1abb3b01f68c159->leave($__internal_737791984c1d1ef99037bce201e8885bf615049a40f6abf7c1abb3b01f68c159_prof);

        
        $__internal_de269ee4afd532344f397e0fda989bd24c49e70bf90f780b226f7029d1baf784->leave($__internal_de269ee4afd532344f397e0fda989bd24c49e70bf90f780b226f7029d1baf784_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
