<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9b380db57bac0cfb33a9cc6f3d070e209f365fc5a5e80d1d168c3be040288fef extends Twig_Template
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
        $__internal_ec7c70a2935a5bba3ecf9e5adda43470b77fe370a6c3810a81606287cdda9497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7c70a2935a5bba3ecf9e5adda43470b77fe370a6c3810a81606287cdda9497->enter($__internal_ec7c70a2935a5bba3ecf9e5adda43470b77fe370a6c3810a81606287cdda9497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d24912a02f0cdf4c75b43aec47d39758d42888a4a98cf3ba555ea91a2ecac41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24912a02f0cdf4c75b43aec47d39758d42888a4a98cf3ba555ea91a2ecac41d->enter($__internal_d24912a02f0cdf4c75b43aec47d39758d42888a4a98cf3ba555ea91a2ecac41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ec7c70a2935a5bba3ecf9e5adda43470b77fe370a6c3810a81606287cdda9497->leave($__internal_ec7c70a2935a5bba3ecf9e5adda43470b77fe370a6c3810a81606287cdda9497_prof);

        
        $__internal_d24912a02f0cdf4c75b43aec47d39758d42888a4a98cf3ba555ea91a2ecac41d->leave($__internal_d24912a02f0cdf4c75b43aec47d39758d42888a4a98cf3ba555ea91a2ecac41d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
