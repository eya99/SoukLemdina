<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_81aa087b7124e23d1b2e4f8001bce99a06a973984cdb6a63d59794d395428550 extends Twig_Template
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
        $__internal_d2ba475b2f9bc807e9573d529ba8ab3378a063d8c625e21f43eda9b5aac61512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ba475b2f9bc807e9573d529ba8ab3378a063d8c625e21f43eda9b5aac61512->enter($__internal_d2ba475b2f9bc807e9573d529ba8ab3378a063d8c625e21f43eda9b5aac61512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a46d1aeecc87e49c5c63130b28d330a7c62f5e99bb70e2bad1a77438f50194cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46d1aeecc87e49c5c63130b28d330a7c62f5e99bb70e2bad1a77438f50194cf->enter($__internal_a46d1aeecc87e49c5c63130b28d330a7c62f5e99bb70e2bad1a77438f50194cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d2ba475b2f9bc807e9573d529ba8ab3378a063d8c625e21f43eda9b5aac61512->leave($__internal_d2ba475b2f9bc807e9573d529ba8ab3378a063d8c625e21f43eda9b5aac61512_prof);

        
        $__internal_a46d1aeecc87e49c5c63130b28d330a7c62f5e99bb70e2bad1a77438f50194cf->leave($__internal_a46d1aeecc87e49c5c63130b28d330a7c62f5e99bb70e2bad1a77438f50194cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
