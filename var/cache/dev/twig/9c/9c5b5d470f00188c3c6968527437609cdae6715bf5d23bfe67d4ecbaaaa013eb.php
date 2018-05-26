<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f36583b70c7c21c63d29ca8557bdf59fdaedf3b003b94c93ac6e12eec66e91e8 extends Twig_Template
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
        $__internal_1577af04cabe91f5f962a5f664877c94e3efa964cb3714562c5e4e6d1cf9f891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1577af04cabe91f5f962a5f664877c94e3efa964cb3714562c5e4e6d1cf9f891->enter($__internal_1577af04cabe91f5f962a5f664877c94e3efa964cb3714562c5e4e6d1cf9f891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_99af8b77855bf7aa6e70f6922c1329bef7e7ebcf25d976a77593a47882a04f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99af8b77855bf7aa6e70f6922c1329bef7e7ebcf25d976a77593a47882a04f6e->enter($__internal_99af8b77855bf7aa6e70f6922c1329bef7e7ebcf25d976a77593a47882a04f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1577af04cabe91f5f962a5f664877c94e3efa964cb3714562c5e4e6d1cf9f891->leave($__internal_1577af04cabe91f5f962a5f664877c94e3efa964cb3714562c5e4e6d1cf9f891_prof);

        
        $__internal_99af8b77855bf7aa6e70f6922c1329bef7e7ebcf25d976a77593a47882a04f6e->leave($__internal_99af8b77855bf7aa6e70f6922c1329bef7e7ebcf25d976a77593a47882a04f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
