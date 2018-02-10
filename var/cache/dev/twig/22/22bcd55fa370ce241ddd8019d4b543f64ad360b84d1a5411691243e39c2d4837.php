<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_200317065dc2b4496cd194f3c956293620a7f557214a0ec1ab9c52ce37736cca extends Twig_Template
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
        $__internal_c2f64e692642f566f72fb21a72a93eb2a8360de7c1390cd44d3000b6b39bacf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f64e692642f566f72fb21a72a93eb2a8360de7c1390cd44d3000b6b39bacf9->enter($__internal_c2f64e692642f566f72fb21a72a93eb2a8360de7c1390cd44d3000b6b39bacf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0af2a6c1ddad347e643824df7e266797182d64f8ce5b2c8629b43682b47c9d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af2a6c1ddad347e643824df7e266797182d64f8ce5b2c8629b43682b47c9d56->enter($__internal_0af2a6c1ddad347e643824df7e266797182d64f8ce5b2c8629b43682b47c9d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c2f64e692642f566f72fb21a72a93eb2a8360de7c1390cd44d3000b6b39bacf9->leave($__internal_c2f64e692642f566f72fb21a72a93eb2a8360de7c1390cd44d3000b6b39bacf9_prof);

        
        $__internal_0af2a6c1ddad347e643824df7e266797182d64f8ce5b2c8629b43682b47c9d56->leave($__internal_0af2a6c1ddad347e643824df7e266797182d64f8ce5b2c8629b43682b47c9d56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
