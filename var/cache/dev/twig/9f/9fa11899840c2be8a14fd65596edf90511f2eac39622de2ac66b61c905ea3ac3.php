<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_714fe937984faba1c65c597dda65b091562b2a0a141eb70db7cd111835357af4 extends Twig_Template
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
        $__internal_e964170daeafbb29a0e4e92a6359debf9a64041f38b1a0a69b7011a49602314e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e964170daeafbb29a0e4e92a6359debf9a64041f38b1a0a69b7011a49602314e->enter($__internal_e964170daeafbb29a0e4e92a6359debf9a64041f38b1a0a69b7011a49602314e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_6c6b14f5b367a13fea30a955158741c8cd72e964df38f686b8c7675653a556d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6b14f5b367a13fea30a955158741c8cd72e964df38f686b8c7675653a556d0->enter($__internal_6c6b14f5b367a13fea30a955158741c8cd72e964df38f686b8c7675653a556d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e964170daeafbb29a0e4e92a6359debf9a64041f38b1a0a69b7011a49602314e->leave($__internal_e964170daeafbb29a0e4e92a6359debf9a64041f38b1a0a69b7011a49602314e_prof);

        
        $__internal_6c6b14f5b367a13fea30a955158741c8cd72e964df38f686b8c7675653a556d0->leave($__internal_6c6b14f5b367a13fea30a955158741c8cd72e964df38f686b8c7675653a556d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
