<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8a62f3ed01934b9c03a7375463878a3c55ebb205cce0067d3f36fef150e1c922 extends Twig_Template
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
        $__internal_d79d0f770b9ae37f8584c1b397f2370002ae0bafe56626793852b267c8c55927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79d0f770b9ae37f8584c1b397f2370002ae0bafe56626793852b267c8c55927->enter($__internal_d79d0f770b9ae37f8584c1b397f2370002ae0bafe56626793852b267c8c55927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_85b23d4edf474f6376950e99f56ea6b2732e89ade8a3436b08908cde9ff521b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b23d4edf474f6376950e99f56ea6b2732e89ade8a3436b08908cde9ff521b8->enter($__internal_85b23d4edf474f6376950e99f56ea6b2732e89ade8a3436b08908cde9ff521b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d79d0f770b9ae37f8584c1b397f2370002ae0bafe56626793852b267c8c55927->leave($__internal_d79d0f770b9ae37f8584c1b397f2370002ae0bafe56626793852b267c8c55927_prof);

        
        $__internal_85b23d4edf474f6376950e99f56ea6b2732e89ade8a3436b08908cde9ff521b8->leave($__internal_85b23d4edf474f6376950e99f56ea6b2732e89ade8a3436b08908cde9ff521b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
