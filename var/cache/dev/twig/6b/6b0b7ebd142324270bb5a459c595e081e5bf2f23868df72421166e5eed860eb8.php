<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b1e6ffba9fd16741a8ac7d3e4a66ca63a4dced4d18954e36f65f164574f8fc64 extends Twig_Template
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
        $__internal_739b6fbcfa79a3111b24e9f0280754e499ffafbfbbd5fb85d11801ba83446524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739b6fbcfa79a3111b24e9f0280754e499ffafbfbbd5fb85d11801ba83446524->enter($__internal_739b6fbcfa79a3111b24e9f0280754e499ffafbfbbd5fb85d11801ba83446524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d8090a4a5cb11a8949346f5d0771f53293007751d225e31585b02d5111650886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8090a4a5cb11a8949346f5d0771f53293007751d225e31585b02d5111650886->enter($__internal_d8090a4a5cb11a8949346f5d0771f53293007751d225e31585b02d5111650886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_739b6fbcfa79a3111b24e9f0280754e499ffafbfbbd5fb85d11801ba83446524->leave($__internal_739b6fbcfa79a3111b24e9f0280754e499ffafbfbbd5fb85d11801ba83446524_prof);

        
        $__internal_d8090a4a5cb11a8949346f5d0771f53293007751d225e31585b02d5111650886->leave($__internal_d8090a4a5cb11a8949346f5d0771f53293007751d225e31585b02d5111650886_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
