<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_04b2673f98bc1fdf0359fe3aa0175d1435bf7f074037ace8aa8a4f88d6637962 extends Twig_Template
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
        $__internal_369ccfa6b001b6d8b3cd42e007872cbf780799e7d3e2825707cb44e653079f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369ccfa6b001b6d8b3cd42e007872cbf780799e7d3e2825707cb44e653079f62->enter($__internal_369ccfa6b001b6d8b3cd42e007872cbf780799e7d3e2825707cb44e653079f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_423c36026ae7485041454d6b64e690025fa76b456c4c2960a9a2f5596b1f94bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423c36026ae7485041454d6b64e690025fa76b456c4c2960a9a2f5596b1f94bf->enter($__internal_423c36026ae7485041454d6b64e690025fa76b456c4c2960a9a2f5596b1f94bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_369ccfa6b001b6d8b3cd42e007872cbf780799e7d3e2825707cb44e653079f62->leave($__internal_369ccfa6b001b6d8b3cd42e007872cbf780799e7d3e2825707cb44e653079f62_prof);

        
        $__internal_423c36026ae7485041454d6b64e690025fa76b456c4c2960a9a2f5596b1f94bf->leave($__internal_423c36026ae7485041454d6b64e690025fa76b456c4c2960a9a2f5596b1f94bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
