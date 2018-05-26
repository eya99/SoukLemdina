<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f65924eab42b05fb6dfdd75fc49d66a6ccdfddfc3249b60fd3b5668f378cb5dc extends Twig_Template
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
        $__internal_245894a339a4256ebf4dbc90af837dfd09b740c6649018bbac038a564dbe6558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245894a339a4256ebf4dbc90af837dfd09b740c6649018bbac038a564dbe6558->enter($__internal_245894a339a4256ebf4dbc90af837dfd09b740c6649018bbac038a564dbe6558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5211117cffb1321f29faf08955bf8228a6827ab2133aeb3d4919338053c83deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5211117cffb1321f29faf08955bf8228a6827ab2133aeb3d4919338053c83deb->enter($__internal_5211117cffb1321f29faf08955bf8228a6827ab2133aeb3d4919338053c83deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_245894a339a4256ebf4dbc90af837dfd09b740c6649018bbac038a564dbe6558->leave($__internal_245894a339a4256ebf4dbc90af837dfd09b740c6649018bbac038a564dbe6558_prof);

        
        $__internal_5211117cffb1321f29faf08955bf8228a6827ab2133aeb3d4919338053c83deb->leave($__internal_5211117cffb1321f29faf08955bf8228a6827ab2133aeb3d4919338053c83deb_prof);

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
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
