<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5f65f178473e256aced874c4de026952991905696e18f4eae89e913a872616bc extends Twig_Template
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
        $__internal_9630790b08ed1652205ce21d74d739193665b229aad030888a74789750250353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9630790b08ed1652205ce21d74d739193665b229aad030888a74789750250353->enter($__internal_9630790b08ed1652205ce21d74d739193665b229aad030888a74789750250353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0cbe9cc7dd8465f77471e0a55df71bb21c9372fc1bf61bfc0f9fd6271c43d319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbe9cc7dd8465f77471e0a55df71bb21c9372fc1bf61bfc0f9fd6271c43d319->enter($__internal_0cbe9cc7dd8465f77471e0a55df71bb21c9372fc1bf61bfc0f9fd6271c43d319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9630790b08ed1652205ce21d74d739193665b229aad030888a74789750250353->leave($__internal_9630790b08ed1652205ce21d74d739193665b229aad030888a74789750250353_prof);

        
        $__internal_0cbe9cc7dd8465f77471e0a55df71bb21c9372fc1bf61bfc0f9fd6271c43d319->leave($__internal_0cbe9cc7dd8465f77471e0a55df71bb21c9372fc1bf61bfc0f9fd6271c43d319_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
