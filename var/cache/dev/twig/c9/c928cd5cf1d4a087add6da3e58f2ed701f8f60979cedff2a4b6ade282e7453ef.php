<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f2532678930ea89cb5c50560ab3fecf276db60e770423a362554c84d6116f702 extends Twig_Template
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
        $__internal_352ef21440a36fe4cf2a54e58850e6cb937dd94fb3516d66a8b501a76d71fdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352ef21440a36fe4cf2a54e58850e6cb937dd94fb3516d66a8b501a76d71fdcc->enter($__internal_352ef21440a36fe4cf2a54e58850e6cb937dd94fb3516d66a8b501a76d71fdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9fc4ae865177bfc99e687577be9e109e2b847a70a1f7b467579b7e45a913f4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc4ae865177bfc99e687577be9e109e2b847a70a1f7b467579b7e45a913f4ff->enter($__internal_9fc4ae865177bfc99e687577be9e109e2b847a70a1f7b467579b7e45a913f4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_352ef21440a36fe4cf2a54e58850e6cb937dd94fb3516d66a8b501a76d71fdcc->leave($__internal_352ef21440a36fe4cf2a54e58850e6cb937dd94fb3516d66a8b501a76d71fdcc_prof);

        
        $__internal_9fc4ae865177bfc99e687577be9e109e2b847a70a1f7b467579b7e45a913f4ff->leave($__internal_9fc4ae865177bfc99e687577be9e109e2b847a70a1f7b467579b7e45a913f4ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
