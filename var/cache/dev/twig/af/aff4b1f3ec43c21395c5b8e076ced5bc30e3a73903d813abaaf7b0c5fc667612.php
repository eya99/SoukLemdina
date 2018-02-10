<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_9df5ad0dc18e21a482c7267cce5d7d055909ad4bf5db2a97f9e20f190e78627b extends Twig_Template
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
        $__internal_a221b1527190a1c91d2ce15dae33b87f741f38afb294db87664a93d52866f200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a221b1527190a1c91d2ce15dae33b87f741f38afb294db87664a93d52866f200->enter($__internal_a221b1527190a1c91d2ce15dae33b87f741f38afb294db87664a93d52866f200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_164b2a3367ed85f47a6942f04724b1157c6125328e7b80eb5525f81303554608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164b2a3367ed85f47a6942f04724b1157c6125328e7b80eb5525f81303554608->enter($__internal_164b2a3367ed85f47a6942f04724b1157c6125328e7b80eb5525f81303554608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a221b1527190a1c91d2ce15dae33b87f741f38afb294db87664a93d52866f200->leave($__internal_a221b1527190a1c91d2ce15dae33b87f741f38afb294db87664a93d52866f200_prof);

        
        $__internal_164b2a3367ed85f47a6942f04724b1157c6125328e7b80eb5525f81303554608->leave($__internal_164b2a3367ed85f47a6942f04724b1157c6125328e7b80eb5525f81303554608_prof);

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
", "@Framework/Form/widget_attributes.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
