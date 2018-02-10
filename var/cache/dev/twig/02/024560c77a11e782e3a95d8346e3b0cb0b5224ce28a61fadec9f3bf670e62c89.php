<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e1df866ef8fbb58e2a4eb6a11907b626cbd6cfeda395126c6e38d064b7043496 extends Twig_Template
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
        $__internal_5328849b1eebd481ce0feeaedfabd5c5856d226938c677c9612f4127983ab445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5328849b1eebd481ce0feeaedfabd5c5856d226938c677c9612f4127983ab445->enter($__internal_5328849b1eebd481ce0feeaedfabd5c5856d226938c677c9612f4127983ab445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9457398ea33ad48bb845e2f5f77968c18cc2d7e6768e7d53e9fc81023c0c7f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9457398ea33ad48bb845e2f5f77968c18cc2d7e6768e7d53e9fc81023c0c7f5b->enter($__internal_9457398ea33ad48bb845e2f5f77968c18cc2d7e6768e7d53e9fc81023c0c7f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5328849b1eebd481ce0feeaedfabd5c5856d226938c677c9612f4127983ab445->leave($__internal_5328849b1eebd481ce0feeaedfabd5c5856d226938c677c9612f4127983ab445_prof);

        
        $__internal_9457398ea33ad48bb845e2f5f77968c18cc2d7e6768e7d53e9fc81023c0c7f5b->leave($__internal_9457398ea33ad48bb845e2f5f77968c18cc2d7e6768e7d53e9fc81023c0c7f5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
