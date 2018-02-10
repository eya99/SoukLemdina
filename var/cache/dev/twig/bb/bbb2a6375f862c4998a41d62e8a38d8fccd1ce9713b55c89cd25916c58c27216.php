<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5e014d49a22c4e542a73de72e498d13a9664bb3406432a0084673b9d1ae508db extends Twig_Template
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
        $__internal_bf94a5357961784a5cedf2da54a8d01e9fa9e73a6db5d940d3ce13e06fee762f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf94a5357961784a5cedf2da54a8d01e9fa9e73a6db5d940d3ce13e06fee762f->enter($__internal_bf94a5357961784a5cedf2da54a8d01e9fa9e73a6db5d940d3ce13e06fee762f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_de0e2539b04f7cd37163a6b601d11251506bd8fc79ecdf536cb20b5df3facace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0e2539b04f7cd37163a6b601d11251506bd8fc79ecdf536cb20b5df3facace->enter($__internal_de0e2539b04f7cd37163a6b601d11251506bd8fc79ecdf536cb20b5df3facace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bf94a5357961784a5cedf2da54a8d01e9fa9e73a6db5d940d3ce13e06fee762f->leave($__internal_bf94a5357961784a5cedf2da54a8d01e9fa9e73a6db5d940d3ce13e06fee762f_prof);

        
        $__internal_de0e2539b04f7cd37163a6b601d11251506bd8fc79ecdf536cb20b5df3facace->leave($__internal_de0e2539b04f7cd37163a6b601d11251506bd8fc79ecdf536cb20b5df3facace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
