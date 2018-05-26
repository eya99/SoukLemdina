<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4a6b1c948e73e5ce97c1e3cc718852c61fac2343d8a1197f8396233ca73f28ee extends Twig_Template
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
        $__internal_d388429a836ac531d78ea7885b5fb805af3c576240850fb752f83d3504d3733e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d388429a836ac531d78ea7885b5fb805af3c576240850fb752f83d3504d3733e->enter($__internal_d388429a836ac531d78ea7885b5fb805af3c576240850fb752f83d3504d3733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ba7f2a520641a417c7139e73bae2fb629ebda3721aa63586f168e79245cdb14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7f2a520641a417c7139e73bae2fb629ebda3721aa63586f168e79245cdb14e->enter($__internal_ba7f2a520641a417c7139e73bae2fb629ebda3721aa63586f168e79245cdb14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d388429a836ac531d78ea7885b5fb805af3c576240850fb752f83d3504d3733e->leave($__internal_d388429a836ac531d78ea7885b5fb805af3c576240850fb752f83d3504d3733e_prof);

        
        $__internal_ba7f2a520641a417c7139e73bae2fb629ebda3721aa63586f168e79245cdb14e->leave($__internal_ba7f2a520641a417c7139e73bae2fb629ebda3721aa63586f168e79245cdb14e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
