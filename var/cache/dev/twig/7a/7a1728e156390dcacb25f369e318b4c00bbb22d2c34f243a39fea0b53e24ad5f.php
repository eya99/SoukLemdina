<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_90721a6588024f473edd070e19ca1e79a1d95daf39835745a8badbada3160d1f extends Twig_Template
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
        $__internal_0fc4fdeeb349578f15bc4034a7008747bf5a6f2ffac84c8af04e531dbccde824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc4fdeeb349578f15bc4034a7008747bf5a6f2ffac84c8af04e531dbccde824->enter($__internal_0fc4fdeeb349578f15bc4034a7008747bf5a6f2ffac84c8af04e531dbccde824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c185e2357355f8901e50e03eb4b5037dacdc7022b0ad8196a042e09f8dfeb22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c185e2357355f8901e50e03eb4b5037dacdc7022b0ad8196a042e09f8dfeb22d->enter($__internal_c185e2357355f8901e50e03eb4b5037dacdc7022b0ad8196a042e09f8dfeb22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0fc4fdeeb349578f15bc4034a7008747bf5a6f2ffac84c8af04e531dbccde824->leave($__internal_0fc4fdeeb349578f15bc4034a7008747bf5a6f2ffac84c8af04e531dbccde824_prof);

        
        $__internal_c185e2357355f8901e50e03eb4b5037dacdc7022b0ad8196a042e09f8dfeb22d->leave($__internal_c185e2357355f8901e50e03eb4b5037dacdc7022b0ad8196a042e09f8dfeb22d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
