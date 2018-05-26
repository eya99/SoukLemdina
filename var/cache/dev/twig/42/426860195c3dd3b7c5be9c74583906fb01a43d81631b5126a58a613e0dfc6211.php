<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bed796b12a9969c2af2aab36e29ebafdcc0b1cf3db9918f2a7ebe48eb616665c extends Twig_Template
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
        $__internal_11ffeceb25f99f6c471f3aac5a986f980a08c77cec62d2da15c04dc08495abee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ffeceb25f99f6c471f3aac5a986f980a08c77cec62d2da15c04dc08495abee->enter($__internal_11ffeceb25f99f6c471f3aac5a986f980a08c77cec62d2da15c04dc08495abee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_963d5793fe179c9127b49787774401058344c336aab7799b7d3728ad2b9d706c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963d5793fe179c9127b49787774401058344c336aab7799b7d3728ad2b9d706c->enter($__internal_963d5793fe179c9127b49787774401058344c336aab7799b7d3728ad2b9d706c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_11ffeceb25f99f6c471f3aac5a986f980a08c77cec62d2da15c04dc08495abee->leave($__internal_11ffeceb25f99f6c471f3aac5a986f980a08c77cec62d2da15c04dc08495abee_prof);

        
        $__internal_963d5793fe179c9127b49787774401058344c336aab7799b7d3728ad2b9d706c->leave($__internal_963d5793fe179c9127b49787774401058344c336aab7799b7d3728ad2b9d706c_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
