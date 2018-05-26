<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8e76897baa2640dfc169cd2bb00b51c993e4008b6357f3be038249e45cce0e93 extends Twig_Template
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
        $__internal_772c72ebe88ea2e4552884869486c1e25756d579405b12619af39015ae8e3b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772c72ebe88ea2e4552884869486c1e25756d579405b12619af39015ae8e3b29->enter($__internal_772c72ebe88ea2e4552884869486c1e25756d579405b12619af39015ae8e3b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_654c46d791c8d93c6ac6649979ea22aa9c961af773e56113b2da5841702aa43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654c46d791c8d93c6ac6649979ea22aa9c961af773e56113b2da5841702aa43f->enter($__internal_654c46d791c8d93c6ac6649979ea22aa9c961af773e56113b2da5841702aa43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_772c72ebe88ea2e4552884869486c1e25756d579405b12619af39015ae8e3b29->leave($__internal_772c72ebe88ea2e4552884869486c1e25756d579405b12619af39015ae8e3b29_prof);

        
        $__internal_654c46d791c8d93c6ac6649979ea22aa9c961af773e56113b2da5841702aa43f->leave($__internal_654c46d791c8d93c6ac6649979ea22aa9c961af773e56113b2da5841702aa43f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
