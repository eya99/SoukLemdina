<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5ebecd8bdade4d05e6f7bd7cbd66620a717f9530daef610b98d750fecc4f9e44 extends Twig_Template
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
        $__internal_316eca3b70ade0bfac2d0d799117dbc0397f4a90e92ec3133322517e1ab24668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316eca3b70ade0bfac2d0d799117dbc0397f4a90e92ec3133322517e1ab24668->enter($__internal_316eca3b70ade0bfac2d0d799117dbc0397f4a90e92ec3133322517e1ab24668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_76e2ce9a37d774e8c957f13acb04694babb32fa1ef7fe208f98bf06237d6390d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e2ce9a37d774e8c957f13acb04694babb32fa1ef7fe208f98bf06237d6390d->enter($__internal_76e2ce9a37d774e8c957f13acb04694babb32fa1ef7fe208f98bf06237d6390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_316eca3b70ade0bfac2d0d799117dbc0397f4a90e92ec3133322517e1ab24668->leave($__internal_316eca3b70ade0bfac2d0d799117dbc0397f4a90e92ec3133322517e1ab24668_prof);

        
        $__internal_76e2ce9a37d774e8c957f13acb04694babb32fa1ef7fe208f98bf06237d6390d->leave($__internal_76e2ce9a37d774e8c957f13acb04694babb32fa1ef7fe208f98bf06237d6390d_prof);

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
", "@Framework/Form/money_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
