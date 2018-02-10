<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d708a49067bc0e33967b6cde79da7fa2329cc90b7f937df9a5ee2aeec63ad857 extends Twig_Template
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
        $__internal_e88986c4d8727c20aa035ca1e770b46c29aac46de9854e772480e4fce34a5a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88986c4d8727c20aa035ca1e770b46c29aac46de9854e772480e4fce34a5a21->enter($__internal_e88986c4d8727c20aa035ca1e770b46c29aac46de9854e772480e4fce34a5a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_879f5d9b6caacb58392fece572747d6c2a32a4cb043f8007cd88609bda2ca2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879f5d9b6caacb58392fece572747d6c2a32a4cb043f8007cd88609bda2ca2bc->enter($__internal_879f5d9b6caacb58392fece572747d6c2a32a4cb043f8007cd88609bda2ca2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e88986c4d8727c20aa035ca1e770b46c29aac46de9854e772480e4fce34a5a21->leave($__internal_e88986c4d8727c20aa035ca1e770b46c29aac46de9854e772480e4fce34a5a21_prof);

        
        $__internal_879f5d9b6caacb58392fece572747d6c2a32a4cb043f8007cd88609bda2ca2bc->leave($__internal_879f5d9b6caacb58392fece572747d6c2a32a4cb043f8007cd88609bda2ca2bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
