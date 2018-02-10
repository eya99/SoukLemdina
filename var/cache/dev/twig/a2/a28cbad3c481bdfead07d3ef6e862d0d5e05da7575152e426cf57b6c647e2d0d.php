<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_09b5bc60bf1c81536eea2997011c34f3cdc4ed281a5ba9865d2143af8d66a847 extends Twig_Template
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
        $__internal_731d77b42949003c84e2b9875b94eb1b3fc498bbf4ad45772fb5401e904a5cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731d77b42949003c84e2b9875b94eb1b3fc498bbf4ad45772fb5401e904a5cd0->enter($__internal_731d77b42949003c84e2b9875b94eb1b3fc498bbf4ad45772fb5401e904a5cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_51def03814d82d938e0f18a79d67ea6730ee39922afc8dde5b4432761d76e724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51def03814d82d938e0f18a79d67ea6730ee39922afc8dde5b4432761d76e724->enter($__internal_51def03814d82d938e0f18a79d67ea6730ee39922afc8dde5b4432761d76e724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_731d77b42949003c84e2b9875b94eb1b3fc498bbf4ad45772fb5401e904a5cd0->leave($__internal_731d77b42949003c84e2b9875b94eb1b3fc498bbf4ad45772fb5401e904a5cd0_prof);

        
        $__internal_51def03814d82d938e0f18a79d67ea6730ee39922afc8dde5b4432761d76e724->leave($__internal_51def03814d82d938e0f18a79d67ea6730ee39922afc8dde5b4432761d76e724_prof);

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
", "@Framework/Form/number_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
