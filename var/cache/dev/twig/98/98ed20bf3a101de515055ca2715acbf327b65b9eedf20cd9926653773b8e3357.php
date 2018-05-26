<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_25696b95f7dd6fcdcaa6d805033796b3fd04e6992c5bb93441281ca2693c7638 extends Twig_Template
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
        $__internal_936311d0487ce2592d5f2369f99edb632d4216c208f7990d39d6ed7608f0e341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936311d0487ce2592d5f2369f99edb632d4216c208f7990d39d6ed7608f0e341->enter($__internal_936311d0487ce2592d5f2369f99edb632d4216c208f7990d39d6ed7608f0e341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_89a5a55ae7d5c3a15abdb61ee57eacd423d8950b159113e0adda5c48d275d18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a5a55ae7d5c3a15abdb61ee57eacd423d8950b159113e0adda5c48d275d18c->enter($__internal_89a5a55ae7d5c3a15abdb61ee57eacd423d8950b159113e0adda5c48d275d18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_936311d0487ce2592d5f2369f99edb632d4216c208f7990d39d6ed7608f0e341->leave($__internal_936311d0487ce2592d5f2369f99edb632d4216c208f7990d39d6ed7608f0e341_prof);

        
        $__internal_89a5a55ae7d5c3a15abdb61ee57eacd423d8950b159113e0adda5c48d275d18c->leave($__internal_89a5a55ae7d5c3a15abdb61ee57eacd423d8950b159113e0adda5c48d275d18c_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
