<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a9aadc1914b11d24ff09f6963e664c10b621727597b422693f9462d4784e9d50 extends Twig_Template
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
        $__internal_f31281d1a7ac500c0a7dece030b154454d5a4e088a42bd0a7e821aefe53a8773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31281d1a7ac500c0a7dece030b154454d5a4e088a42bd0a7e821aefe53a8773->enter($__internal_f31281d1a7ac500c0a7dece030b154454d5a4e088a42bd0a7e821aefe53a8773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a0d9b5feed285638018ac553c169996e7868896cc3b364a11999bcddf0128536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d9b5feed285638018ac553c169996e7868896cc3b364a11999bcddf0128536->enter($__internal_a0d9b5feed285638018ac553c169996e7868896cc3b364a11999bcddf0128536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f31281d1a7ac500c0a7dece030b154454d5a4e088a42bd0a7e821aefe53a8773->leave($__internal_f31281d1a7ac500c0a7dece030b154454d5a4e088a42bd0a7e821aefe53a8773_prof);

        
        $__internal_a0d9b5feed285638018ac553c169996e7868896cc3b364a11999bcddf0128536->leave($__internal_a0d9b5feed285638018ac553c169996e7868896cc3b364a11999bcddf0128536_prof);

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
", "@Framework/FormTable/button_row.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
