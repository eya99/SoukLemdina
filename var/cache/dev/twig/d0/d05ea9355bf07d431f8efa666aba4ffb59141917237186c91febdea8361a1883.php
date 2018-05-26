<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b62a2f1ad44fd8b23b1115338a0aa8011720011ad8e09c9d3e1b13c722dd497f extends Twig_Template
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
        $__internal_519dd69de71b8178a35814ad9b7063292aefabd3f1f551d46df018d621b30f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519dd69de71b8178a35814ad9b7063292aefabd3f1f551d46df018d621b30f93->enter($__internal_519dd69de71b8178a35814ad9b7063292aefabd3f1f551d46df018d621b30f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_158a8795f796e617112de4032df57a5490bf90722798db50188affd55cd61ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158a8795f796e617112de4032df57a5490bf90722798db50188affd55cd61ded->enter($__internal_158a8795f796e617112de4032df57a5490bf90722798db50188affd55cd61ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_519dd69de71b8178a35814ad9b7063292aefabd3f1f551d46df018d621b30f93->leave($__internal_519dd69de71b8178a35814ad9b7063292aefabd3f1f551d46df018d621b30f93_prof);

        
        $__internal_158a8795f796e617112de4032df57a5490bf90722798db50188affd55cd61ded->leave($__internal_158a8795f796e617112de4032df57a5490bf90722798db50188affd55cd61ded_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
