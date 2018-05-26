<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_626a98b66b6da74bbc4626cccc3990b5eb8075523f0dbd4686a0023447fc6613 extends Twig_Template
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
        $__internal_1c04e4fcfad29e1fa255766cc0ac9d55f3ea56a6c7b81ed07aca93a96f50cef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c04e4fcfad29e1fa255766cc0ac9d55f3ea56a6c7b81ed07aca93a96f50cef6->enter($__internal_1c04e4fcfad29e1fa255766cc0ac9d55f3ea56a6c7b81ed07aca93a96f50cef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_80767790e5ed5b99f168de323ecea82be19e5e211dd12c4e6ea607f07d2125bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80767790e5ed5b99f168de323ecea82be19e5e211dd12c4e6ea607f07d2125bd->enter($__internal_80767790e5ed5b99f168de323ecea82be19e5e211dd12c4e6ea607f07d2125bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1c04e4fcfad29e1fa255766cc0ac9d55f3ea56a6c7b81ed07aca93a96f50cef6->leave($__internal_1c04e4fcfad29e1fa255766cc0ac9d55f3ea56a6c7b81ed07aca93a96f50cef6_prof);

        
        $__internal_80767790e5ed5b99f168de323ecea82be19e5e211dd12c4e6ea607f07d2125bd->leave($__internal_80767790e5ed5b99f168de323ecea82be19e5e211dd12c4e6ea607f07d2125bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
