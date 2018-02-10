<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_17ee817b16494bb4da06eba41731991f59969625568c96e6ad1ffd07ee389efa extends Twig_Template
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
        $__internal_e578b45e6b34c7c33fb6e8a3064a1aad84394427cfb31d430b000c5dc55cbfc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e578b45e6b34c7c33fb6e8a3064a1aad84394427cfb31d430b000c5dc55cbfc5->enter($__internal_e578b45e6b34c7c33fb6e8a3064a1aad84394427cfb31d430b000c5dc55cbfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_bad5955112a6005ea28e1615ca87953d19159208157f69a8094621b4eafe0533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad5955112a6005ea28e1615ca87953d19159208157f69a8094621b4eafe0533->enter($__internal_bad5955112a6005ea28e1615ca87953d19159208157f69a8094621b4eafe0533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e578b45e6b34c7c33fb6e8a3064a1aad84394427cfb31d430b000c5dc55cbfc5->leave($__internal_e578b45e6b34c7c33fb6e8a3064a1aad84394427cfb31d430b000c5dc55cbfc5_prof);

        
        $__internal_bad5955112a6005ea28e1615ca87953d19159208157f69a8094621b4eafe0533->leave($__internal_bad5955112a6005ea28e1615ca87953d19159208157f69a8094621b4eafe0533_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
