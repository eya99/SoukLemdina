<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_81d54c0bb99e72dd43f5877fb16b1f443708a1fe64ee8eb19bd38f52aa8726dc extends Twig_Template
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
        $__internal_a57915b6db7b98bc53af62674a923339c5a9034ac2da903448bb992c28f18218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57915b6db7b98bc53af62674a923339c5a9034ac2da903448bb992c28f18218->enter($__internal_a57915b6db7b98bc53af62674a923339c5a9034ac2da903448bb992c28f18218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c94a9cbe3ed5f656fc9d57368881d17da22ad476d857fa68f6768e3655686475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94a9cbe3ed5f656fc9d57368881d17da22ad476d857fa68f6768e3655686475->enter($__internal_c94a9cbe3ed5f656fc9d57368881d17da22ad476d857fa68f6768e3655686475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a57915b6db7b98bc53af62674a923339c5a9034ac2da903448bb992c28f18218->leave($__internal_a57915b6db7b98bc53af62674a923339c5a9034ac2da903448bb992c28f18218_prof);

        
        $__internal_c94a9cbe3ed5f656fc9d57368881d17da22ad476d857fa68f6768e3655686475->leave($__internal_c94a9cbe3ed5f656fc9d57368881d17da22ad476d857fa68f6768e3655686475_prof);

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
", "@Framework/Form/percent_widget.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
