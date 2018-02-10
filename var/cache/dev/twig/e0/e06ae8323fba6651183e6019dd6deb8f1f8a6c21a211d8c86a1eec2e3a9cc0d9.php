<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_feee55e0468ded255d23ba0be7644fb341f35261baebab533db395fe531a5cb0 extends Twig_Template
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
        $__internal_a55eebcf0f03f72bda9a46202a86093aea0658b43dcc22edf78b6b49fd877f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55eebcf0f03f72bda9a46202a86093aea0658b43dcc22edf78b6b49fd877f05->enter($__internal_a55eebcf0f03f72bda9a46202a86093aea0658b43dcc22edf78b6b49fd877f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_998a28f43f335caeb21230e1ef8f5d3958e4f1e21b19bdbd5d11580061cbe1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998a28f43f335caeb21230e1ef8f5d3958e4f1e21b19bdbd5d11580061cbe1f9->enter($__internal_998a28f43f335caeb21230e1ef8f5d3958e4f1e21b19bdbd5d11580061cbe1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a55eebcf0f03f72bda9a46202a86093aea0658b43dcc22edf78b6b49fd877f05->leave($__internal_a55eebcf0f03f72bda9a46202a86093aea0658b43dcc22edf78b6b49fd877f05_prof);

        
        $__internal_998a28f43f335caeb21230e1ef8f5d3958e4f1e21b19bdbd5d11580061cbe1f9->leave($__internal_998a28f43f335caeb21230e1ef8f5d3958e4f1e21b19bdbd5d11580061cbe1f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
