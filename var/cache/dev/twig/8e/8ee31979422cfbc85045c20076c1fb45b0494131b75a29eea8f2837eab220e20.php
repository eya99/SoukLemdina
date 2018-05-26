<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4a3ccca64eca4e2e95905347d7779caf85cc5336c6093f23d7494ae81652c572 extends Twig_Template
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
        $__internal_c78dc7ab1cdcd9151fb60357576048325f4ea2daac223a8ff30aa90e60336d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78dc7ab1cdcd9151fb60357576048325f4ea2daac223a8ff30aa90e60336d9a->enter($__internal_c78dc7ab1cdcd9151fb60357576048325f4ea2daac223a8ff30aa90e60336d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d86e1e93c594592e0d7c03327e63963c52cf0666e46ca93d1a7fb3f5b672d58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86e1e93c594592e0d7c03327e63963c52cf0666e46ca93d1a7fb3f5b672d58f->enter($__internal_d86e1e93c594592e0d7c03327e63963c52cf0666e46ca93d1a7fb3f5b672d58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_c78dc7ab1cdcd9151fb60357576048325f4ea2daac223a8ff30aa90e60336d9a->leave($__internal_c78dc7ab1cdcd9151fb60357576048325f4ea2daac223a8ff30aa90e60336d9a_prof);

        
        $__internal_d86e1e93c594592e0d7c03327e63963c52cf0666e46ca93d1a7fb3f5b672d58f->leave($__internal_d86e1e93c594592e0d7c03327e63963c52cf0666e46ca93d1a7fb3f5b672d58f_prof);

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
", "@Framework/Form/attributes.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
