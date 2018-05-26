<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_72c217b8660cb296fde4f5473b92c43d0952bb8f955a37eb4b6e92db6d788c50 extends Twig_Template
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
        $__internal_3b5a4eae584b8b20eefe2d8b6d45227b3376ee12eec23bd6913709260854c5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5a4eae584b8b20eefe2d8b6d45227b3376ee12eec23bd6913709260854c5f0->enter($__internal_3b5a4eae584b8b20eefe2d8b6d45227b3376ee12eec23bd6913709260854c5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_761307f6fb14dc6ec52d69d8b008b6f7f6c56d36fb3a358300ddccbc5609fc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761307f6fb14dc6ec52d69d8b008b6f7f6c56d36fb3a358300ddccbc5609fc5f->enter($__internal_761307f6fb14dc6ec52d69d8b008b6f7f6c56d36fb3a358300ddccbc5609fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_3b5a4eae584b8b20eefe2d8b6d45227b3376ee12eec23bd6913709260854c5f0->leave($__internal_3b5a4eae584b8b20eefe2d8b6d45227b3376ee12eec23bd6913709260854c5f0_prof);

        
        $__internal_761307f6fb14dc6ec52d69d8b008b6f7f6c56d36fb3a358300ddccbc5609fc5f->leave($__internal_761307f6fb14dc6ec52d69d8b008b6f7f6c56d36fb3a358300ddccbc5609fc5f_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
