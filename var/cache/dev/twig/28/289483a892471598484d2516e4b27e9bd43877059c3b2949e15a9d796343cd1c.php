<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_55960ed48512056f76b96ff1be77cb50250a536479a012de2b64e1417bf13cb0 extends Twig_Template
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
        $__internal_f77cef72ff9b4c39ee93b6253d18088a24fd95845213a843e70473b03dfceb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77cef72ff9b4c39ee93b6253d18088a24fd95845213a843e70473b03dfceb60->enter($__internal_f77cef72ff9b4c39ee93b6253d18088a24fd95845213a843e70473b03dfceb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_923b5184d88293beec6fa57403bb2479f138c86511682364feb8d009a0364db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923b5184d88293beec6fa57403bb2479f138c86511682364feb8d009a0364db8->enter($__internal_923b5184d88293beec6fa57403bb2479f138c86511682364feb8d009a0364db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f77cef72ff9b4c39ee93b6253d18088a24fd95845213a843e70473b03dfceb60->leave($__internal_f77cef72ff9b4c39ee93b6253d18088a24fd95845213a843e70473b03dfceb60_prof);

        
        $__internal_923b5184d88293beec6fa57403bb2479f138c86511682364feb8d009a0364db8->leave($__internal_923b5184d88293beec6fa57403bb2479f138c86511682364feb8d009a0364db8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
