<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0393ca3270e28716c8fc879b1fa076d7a3d34639dd9ac7e3e1b39579ec040b7c extends Twig_Template
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
        $__internal_cf6eecd22bdec208b389eacc94c7fb8b06dff6e2e504c54e631b7f158a07073e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6eecd22bdec208b389eacc94c7fb8b06dff6e2e504c54e631b7f158a07073e->enter($__internal_cf6eecd22bdec208b389eacc94c7fb8b06dff6e2e504c54e631b7f158a07073e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_350f23947559aefba9e6cd4e50ff7b04a0d6731b0fb4aa1b91c153d309d290f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350f23947559aefba9e6cd4e50ff7b04a0d6731b0fb4aa1b91c153d309d290f8->enter($__internal_350f23947559aefba9e6cd4e50ff7b04a0d6731b0fb4aa1b91c153d309d290f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cf6eecd22bdec208b389eacc94c7fb8b06dff6e2e504c54e631b7f158a07073e->leave($__internal_cf6eecd22bdec208b389eacc94c7fb8b06dff6e2e504c54e631b7f158a07073e_prof);

        
        $__internal_350f23947559aefba9e6cd4e50ff7b04a0d6731b0fb4aa1b91c153d309d290f8->leave($__internal_350f23947559aefba9e6cd4e50ff7b04a0d6731b0fb4aa1b91c153d309d290f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
