<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_278e24a771eb268754f1770529f98e3650b2bc01102d03e349b43f4f401ce62e extends Twig_Template
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
        $__internal_42a5874e5778a9811af007d70d563e3668fd393ef9151a3ced5ad8e7f05c2be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a5874e5778a9811af007d70d563e3668fd393ef9151a3ced5ad8e7f05c2be5->enter($__internal_42a5874e5778a9811af007d70d563e3668fd393ef9151a3ced5ad8e7f05c2be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_06b1fa76e2b56b7d3c6fb97ada96ff3f7935b8a53a3efe30b66d7eab3c548b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b1fa76e2b56b7d3c6fb97ada96ff3f7935b8a53a3efe30b66d7eab3c548b59->enter($__internal_06b1fa76e2b56b7d3c6fb97ada96ff3f7935b8a53a3efe30b66d7eab3c548b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_42a5874e5778a9811af007d70d563e3668fd393ef9151a3ced5ad8e7f05c2be5->leave($__internal_42a5874e5778a9811af007d70d563e3668fd393ef9151a3ced5ad8e7f05c2be5_prof);

        
        $__internal_06b1fa76e2b56b7d3c6fb97ada96ff3f7935b8a53a3efe30b66d7eab3c548b59->leave($__internal_06b1fa76e2b56b7d3c6fb97ada96ff3f7935b8a53a3efe30b66d7eab3c548b59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
