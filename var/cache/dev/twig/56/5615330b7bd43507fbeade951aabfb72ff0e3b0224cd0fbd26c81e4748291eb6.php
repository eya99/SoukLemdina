<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4bca943c6ab6bae76c99450685c8a02fca54b7229a4ac90ee11afadf2520fbd9 extends Twig_Template
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
        $__internal_07d9c79a7769753f1e5d21e3f5dcd12621f5b50a4878f9852bf4a4dd446c6878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d9c79a7769753f1e5d21e3f5dcd12621f5b50a4878f9852bf4a4dd446c6878->enter($__internal_07d9c79a7769753f1e5d21e3f5dcd12621f5b50a4878f9852bf4a4dd446c6878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_82f6bf063d4199a05b0e78d67836bb1eb06053cc43b3ec315dc9f175b4dfefc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f6bf063d4199a05b0e78d67836bb1eb06053cc43b3ec315dc9f175b4dfefc1->enter($__internal_82f6bf063d4199a05b0e78d67836bb1eb06053cc43b3ec315dc9f175b4dfefc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_07d9c79a7769753f1e5d21e3f5dcd12621f5b50a4878f9852bf4a4dd446c6878->leave($__internal_07d9c79a7769753f1e5d21e3f5dcd12621f5b50a4878f9852bf4a4dd446c6878_prof);

        
        $__internal_82f6bf063d4199a05b0e78d67836bb1eb06053cc43b3ec315dc9f175b4dfefc1->leave($__internal_82f6bf063d4199a05b0e78d67836bb1eb06053cc43b3ec315dc9f175b4dfefc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
