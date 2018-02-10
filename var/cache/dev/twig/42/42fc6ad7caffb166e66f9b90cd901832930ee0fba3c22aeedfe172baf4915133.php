<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_def964f84eace8512d87cfb0414dffc7e8495a4dfc8dacc22a0446a6218f5c06 extends Twig_Template
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
        $__internal_e8ed8a8654e84d9a033d3c1bb7bad0c47376f39defacdc3ae770b3e89f8e71ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ed8a8654e84d9a033d3c1bb7bad0c47376f39defacdc3ae770b3e89f8e71ea->enter($__internal_e8ed8a8654e84d9a033d3c1bb7bad0c47376f39defacdc3ae770b3e89f8e71ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0c74f16c3d5288dc8b2b0df42ac25b7bc7840d07a82a79616bc78c333e6f8955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c74f16c3d5288dc8b2b0df42ac25b7bc7840d07a82a79616bc78c333e6f8955->enter($__internal_0c74f16c3d5288dc8b2b0df42ac25b7bc7840d07a82a79616bc78c333e6f8955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e8ed8a8654e84d9a033d3c1bb7bad0c47376f39defacdc3ae770b3e89f8e71ea->leave($__internal_e8ed8a8654e84d9a033d3c1bb7bad0c47376f39defacdc3ae770b3e89f8e71ea_prof);

        
        $__internal_0c74f16c3d5288dc8b2b0df42ac25b7bc7840d07a82a79616bc78c333e6f8955->leave($__internal_0c74f16c3d5288dc8b2b0df42ac25b7bc7840d07a82a79616bc78c333e6f8955_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
