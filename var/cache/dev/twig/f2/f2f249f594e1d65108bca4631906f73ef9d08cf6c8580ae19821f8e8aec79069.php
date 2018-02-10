<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3be62d27bf9e1dcf24a5fbaa513fbf0bf5e054c3d69dd0072561f8e7adcc7e85 extends Twig_Template
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
        $__internal_4244c188af92a19b4481398d2b7fc44e3c29276ad63e1f7f99ec4bb2e86dac2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4244c188af92a19b4481398d2b7fc44e3c29276ad63e1f7f99ec4bb2e86dac2e->enter($__internal_4244c188af92a19b4481398d2b7fc44e3c29276ad63e1f7f99ec4bb2e86dac2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_411eeb7a9a259853639e82a36c92037921c98c14cedf9ea825003b3b0692bf3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411eeb7a9a259853639e82a36c92037921c98c14cedf9ea825003b3b0692bf3e->enter($__internal_411eeb7a9a259853639e82a36c92037921c98c14cedf9ea825003b3b0692bf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4244c188af92a19b4481398d2b7fc44e3c29276ad63e1f7f99ec4bb2e86dac2e->leave($__internal_4244c188af92a19b4481398d2b7fc44e3c29276ad63e1f7f99ec4bb2e86dac2e_prof);

        
        $__internal_411eeb7a9a259853639e82a36c92037921c98c14cedf9ea825003b3b0692bf3e->leave($__internal_411eeb7a9a259853639e82a36c92037921c98c14cedf9ea825003b3b0692bf3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
