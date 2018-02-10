<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_77dd43daf3ae7f20d5e21e0cbc6c673301f271c3fb166ec29ddfc50df2db7570 extends Twig_Template
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
        $__internal_15ff99cad9f9fa3faca2e52ee299a2354a23ae1c0a05bbffe835a6ef62f5ed96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ff99cad9f9fa3faca2e52ee299a2354a23ae1c0a05bbffe835a6ef62f5ed96->enter($__internal_15ff99cad9f9fa3faca2e52ee299a2354a23ae1c0a05bbffe835a6ef62f5ed96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d52d815541f77ad849fe60b51c161652040cb6db8048a1b7c1469c616c3385c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52d815541f77ad849fe60b51c161652040cb6db8048a1b7c1469c616c3385c9->enter($__internal_d52d815541f77ad849fe60b51c161652040cb6db8048a1b7c1469c616c3385c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_15ff99cad9f9fa3faca2e52ee299a2354a23ae1c0a05bbffe835a6ef62f5ed96->leave($__internal_15ff99cad9f9fa3faca2e52ee299a2354a23ae1c0a05bbffe835a6ef62f5ed96_prof);

        
        $__internal_d52d815541f77ad849fe60b51c161652040cb6db8048a1b7c1469c616c3385c9->leave($__internal_d52d815541f77ad849fe60b51c161652040cb6db8048a1b7c1469c616c3385c9_prof);

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
", "@Framework/FormTable/form_row.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
