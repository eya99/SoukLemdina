<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b74b532a34ac810c3949f9a8ca523565dd69c9b979ecf750318c25612b159c35 extends Twig_Template
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
        $__internal_a7a33a9afe6a672646b52af5f0e522ce844eeeb8af10672e4e442e53fa6316e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a33a9afe6a672646b52af5f0e522ce844eeeb8af10672e4e442e53fa6316e2->enter($__internal_a7a33a9afe6a672646b52af5f0e522ce844eeeb8af10672e4e442e53fa6316e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e1660189f3283687e1d9a4ca564c33fb9f8e415a18c4f9aa50079d64b23f5901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1660189f3283687e1d9a4ca564c33fb9f8e415a18c4f9aa50079d64b23f5901->enter($__internal_e1660189f3283687e1d9a4ca564c33fb9f8e415a18c4f9aa50079d64b23f5901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a7a33a9afe6a672646b52af5f0e522ce844eeeb8af10672e4e442e53fa6316e2->leave($__internal_a7a33a9afe6a672646b52af5f0e522ce844eeeb8af10672e4e442e53fa6316e2_prof);

        
        $__internal_e1660189f3283687e1d9a4ca564c33fb9f8e415a18c4f9aa50079d64b23f5901->leave($__internal_e1660189f3283687e1d9a4ca564c33fb9f8e415a18c4f9aa50079d64b23f5901_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
