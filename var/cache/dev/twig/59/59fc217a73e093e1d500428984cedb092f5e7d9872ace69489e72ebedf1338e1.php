<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d179aa69a6e5bd4f87aa18ea1d6157f34ea2ab24efd0f4ed66a9a1b10b472090 extends Twig_Template
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
        $__internal_2e698edbd723634862d7dcb4abcd3a01e25721ac3672ac59dc80a3a1e77597c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e698edbd723634862d7dcb4abcd3a01e25721ac3672ac59dc80a3a1e77597c0->enter($__internal_2e698edbd723634862d7dcb4abcd3a01e25721ac3672ac59dc80a3a1e77597c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c6ac40d13d6f077a0285687ba954fa006bdc8cff6a907bd4758ae53552a3635b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ac40d13d6f077a0285687ba954fa006bdc8cff6a907bd4758ae53552a3635b->enter($__internal_c6ac40d13d6f077a0285687ba954fa006bdc8cff6a907bd4758ae53552a3635b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2e698edbd723634862d7dcb4abcd3a01e25721ac3672ac59dc80a3a1e77597c0->leave($__internal_2e698edbd723634862d7dcb4abcd3a01e25721ac3672ac59dc80a3a1e77597c0_prof);

        
        $__internal_c6ac40d13d6f077a0285687ba954fa006bdc8cff6a907bd4758ae53552a3635b->leave($__internal_c6ac40d13d6f077a0285687ba954fa006bdc8cff6a907bd4758ae53552a3635b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
