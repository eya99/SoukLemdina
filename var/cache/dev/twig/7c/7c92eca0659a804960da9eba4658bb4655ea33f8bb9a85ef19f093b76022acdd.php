<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0ffb25a8bad0d332a5b74b7c70d52cf64519aaf32d1d167276b2a6075ac061b9 extends Twig_Template
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
        $__internal_782b50f6de7b70e63da31eb8f40fe007450d7380c6edb0e74cd48be7d829736d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782b50f6de7b70e63da31eb8f40fe007450d7380c6edb0e74cd48be7d829736d->enter($__internal_782b50f6de7b70e63da31eb8f40fe007450d7380c6edb0e74cd48be7d829736d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_acfc924731d6b9de070f3c193a7efddaee6ac5987c5db0c15b0b7f49b0a3903f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfc924731d6b9de070f3c193a7efddaee6ac5987c5db0c15b0b7f49b0a3903f->enter($__internal_acfc924731d6b9de070f3c193a7efddaee6ac5987c5db0c15b0b7f49b0a3903f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_782b50f6de7b70e63da31eb8f40fe007450d7380c6edb0e74cd48be7d829736d->leave($__internal_782b50f6de7b70e63da31eb8f40fe007450d7380c6edb0e74cd48be7d829736d_prof);

        
        $__internal_acfc924731d6b9de070f3c193a7efddaee6ac5987c5db0c15b0b7f49b0a3903f->leave($__internal_acfc924731d6b9de070f3c193a7efddaee6ac5987c5db0c15b0b7f49b0a3903f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
