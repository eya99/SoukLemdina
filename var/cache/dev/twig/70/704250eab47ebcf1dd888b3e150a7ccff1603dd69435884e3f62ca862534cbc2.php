<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d7f0fdba052a24fad5428703df033399734f46a526bf5e80f774037c1642d421 extends Twig_Template
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
        $__internal_99d87754842ed448fc928ba83b4892f4fd27f1a3e31324c11494ce47209bb948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d87754842ed448fc928ba83b4892f4fd27f1a3e31324c11494ce47209bb948->enter($__internal_99d87754842ed448fc928ba83b4892f4fd27f1a3e31324c11494ce47209bb948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6b508eb678c6040fcd893395e17de5cb2490b53321ad7381aa448a19de1eb208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b508eb678c6040fcd893395e17de5cb2490b53321ad7381aa448a19de1eb208->enter($__internal_6b508eb678c6040fcd893395e17de5cb2490b53321ad7381aa448a19de1eb208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_99d87754842ed448fc928ba83b4892f4fd27f1a3e31324c11494ce47209bb948->leave($__internal_99d87754842ed448fc928ba83b4892f4fd27f1a3e31324c11494ce47209bb948_prof);

        
        $__internal_6b508eb678c6040fcd893395e17de5cb2490b53321ad7381aa448a19de1eb208->leave($__internal_6b508eb678c6040fcd893395e17de5cb2490b53321ad7381aa448a19de1eb208_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
