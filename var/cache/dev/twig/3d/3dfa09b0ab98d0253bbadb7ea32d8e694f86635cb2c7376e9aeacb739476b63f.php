<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9a8f1ca5437a7caa107c24579d1bc7745a8d435c9014c7c332539e625074599d extends Twig_Template
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
        $__internal_1640d7ac2dbec6c8276e1295a4b2967c8d0bfa4dab3c173a07c8c5f1ec3b3e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1640d7ac2dbec6c8276e1295a4b2967c8d0bfa4dab3c173a07c8c5f1ec3b3e53->enter($__internal_1640d7ac2dbec6c8276e1295a4b2967c8d0bfa4dab3c173a07c8c5f1ec3b3e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9ccf73d232d1ff7985375d66b29b487e5c9a4b00c77d7147a6e5845ce305a0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccf73d232d1ff7985375d66b29b487e5c9a4b00c77d7147a6e5845ce305a0e0->enter($__internal_9ccf73d232d1ff7985375d66b29b487e5c9a4b00c77d7147a6e5845ce305a0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1640d7ac2dbec6c8276e1295a4b2967c8d0bfa4dab3c173a07c8c5f1ec3b3e53->leave($__internal_1640d7ac2dbec6c8276e1295a4b2967c8d0bfa4dab3c173a07c8c5f1ec3b3e53_prof);

        
        $__internal_9ccf73d232d1ff7985375d66b29b487e5c9a4b00c77d7147a6e5845ce305a0e0->leave($__internal_9ccf73d232d1ff7985375d66b29b487e5c9a4b00c77d7147a6e5845ce305a0e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
