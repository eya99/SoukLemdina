<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_adb3b622555eb4a0b430819bdeb18e6569bb604c98b95e342a5a604827f22497 extends Twig_Template
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
        $__internal_27b319058e6886770106595fcbc4898fb1fedbe4333b074843686bedaf15a464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b319058e6886770106595fcbc4898fb1fedbe4333b074843686bedaf15a464->enter($__internal_27b319058e6886770106595fcbc4898fb1fedbe4333b074843686bedaf15a464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_26b93f1d277273aa1069ddc95bcf51d544e9812c52c9f15e510061050e81ef65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b93f1d277273aa1069ddc95bcf51d544e9812c52c9f15e510061050e81ef65->enter($__internal_26b93f1d277273aa1069ddc95bcf51d544e9812c52c9f15e510061050e81ef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_27b319058e6886770106595fcbc4898fb1fedbe4333b074843686bedaf15a464->leave($__internal_27b319058e6886770106595fcbc4898fb1fedbe4333b074843686bedaf15a464_prof);

        
        $__internal_26b93f1d277273aa1069ddc95bcf51d544e9812c52c9f15e510061050e81ef65->leave($__internal_26b93f1d277273aa1069ddc95bcf51d544e9812c52c9f15e510061050e81ef65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
