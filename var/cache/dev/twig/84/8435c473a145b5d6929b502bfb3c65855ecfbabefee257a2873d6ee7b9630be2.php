<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d48f25890c568e4f106ded134f6321c192563af48232740cd892c4cbdbe9a818 extends Twig_Template
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
        $__internal_b1011b072dc2377bed40b4c1247d6efb349de9187ee77b6a48367082374ce12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1011b072dc2377bed40b4c1247d6efb349de9187ee77b6a48367082374ce12d->enter($__internal_b1011b072dc2377bed40b4c1247d6efb349de9187ee77b6a48367082374ce12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_244bb806e7a6e29cb40811efa1ff7559cc7b2b90142127ca6aba5f9b77ab382e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244bb806e7a6e29cb40811efa1ff7559cc7b2b90142127ca6aba5f9b77ab382e->enter($__internal_244bb806e7a6e29cb40811efa1ff7559cc7b2b90142127ca6aba5f9b77ab382e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b1011b072dc2377bed40b4c1247d6efb349de9187ee77b6a48367082374ce12d->leave($__internal_b1011b072dc2377bed40b4c1247d6efb349de9187ee77b6a48367082374ce12d_prof);

        
        $__internal_244bb806e7a6e29cb40811efa1ff7559cc7b2b90142127ca6aba5f9b77ab382e->leave($__internal_244bb806e7a6e29cb40811efa1ff7559cc7b2b90142127ca6aba5f9b77ab382e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
