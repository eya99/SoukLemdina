<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1d77cf807b40536a366303602957d65eb915dbaf74668de1c176bbd62cbb9964 extends Twig_Template
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
        $__internal_568da34e79bb9655456a5abacabdbdb3d93e047364e541bb46601786e99bd4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568da34e79bb9655456a5abacabdbdb3d93e047364e541bb46601786e99bd4d8->enter($__internal_568da34e79bb9655456a5abacabdbdb3d93e047364e541bb46601786e99bd4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_99ede6a4b53679a8ca5cd68d6a0cde47da2d349d0f5759bf86a02ed5a02d4ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ede6a4b53679a8ca5cd68d6a0cde47da2d349d0f5759bf86a02ed5a02d4ed5->enter($__internal_99ede6a4b53679a8ca5cd68d6a0cde47da2d349d0f5759bf86a02ed5a02d4ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_568da34e79bb9655456a5abacabdbdb3d93e047364e541bb46601786e99bd4d8->leave($__internal_568da34e79bb9655456a5abacabdbdb3d93e047364e541bb46601786e99bd4d8_prof);

        
        $__internal_99ede6a4b53679a8ca5cd68d6a0cde47da2d349d0f5759bf86a02ed5a02d4ed5->leave($__internal_99ede6a4b53679a8ca5cd68d6a0cde47da2d349d0f5759bf86a02ed5a02d4ed5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
