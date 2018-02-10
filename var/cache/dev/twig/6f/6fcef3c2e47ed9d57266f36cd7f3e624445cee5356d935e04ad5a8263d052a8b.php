<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f5f88c27c8755429dbd497f5f6ecd1f14525708f64eba3d111c5c5ddb956ea4a extends Twig_Template
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
        $__internal_288048650580166756b72958ab63734002aee5250ae051d40e9c7269ecd4c695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288048650580166756b72958ab63734002aee5250ae051d40e9c7269ecd4c695->enter($__internal_288048650580166756b72958ab63734002aee5250ae051d40e9c7269ecd4c695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4c627bbc7b736319eca6c5364d36c00eca9e3aa3d58d5c652e0b1f106bb8c448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c627bbc7b736319eca6c5364d36c00eca9e3aa3d58d5c652e0b1f106bb8c448->enter($__internal_4c627bbc7b736319eca6c5364d36c00eca9e3aa3d58d5c652e0b1f106bb8c448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_288048650580166756b72958ab63734002aee5250ae051d40e9c7269ecd4c695->leave($__internal_288048650580166756b72958ab63734002aee5250ae051d40e9c7269ecd4c695_prof);

        
        $__internal_4c627bbc7b736319eca6c5364d36c00eca9e3aa3d58d5c652e0b1f106bb8c448->leave($__internal_4c627bbc7b736319eca6c5364d36c00eca9e3aa3d58d5c652e0b1f106bb8c448_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
