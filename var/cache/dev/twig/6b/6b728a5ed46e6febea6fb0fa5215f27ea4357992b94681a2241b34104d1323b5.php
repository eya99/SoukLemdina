<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_300f8742fafda767466a2bad38f98db54f36e97e5bdf191f9289e0e8c2eab6eb extends Twig_Template
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
        $__internal_4fff88061e5cf226dd92284212682d6ad420cc014a5dbdeb4657d9f730d94af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fff88061e5cf226dd92284212682d6ad420cc014a5dbdeb4657d9f730d94af3->enter($__internal_4fff88061e5cf226dd92284212682d6ad420cc014a5dbdeb4657d9f730d94af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6c5f759f286039da83b365578b80acf7885fdcc20fce7189e347e73385227c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5f759f286039da83b365578b80acf7885fdcc20fce7189e347e73385227c3d->enter($__internal_6c5f759f286039da83b365578b80acf7885fdcc20fce7189e347e73385227c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4fff88061e5cf226dd92284212682d6ad420cc014a5dbdeb4657d9f730d94af3->leave($__internal_4fff88061e5cf226dd92284212682d6ad420cc014a5dbdeb4657d9f730d94af3_prof);

        
        $__internal_6c5f759f286039da83b365578b80acf7885fdcc20fce7189e347e73385227c3d->leave($__internal_6c5f759f286039da83b365578b80acf7885fdcc20fce7189e347e73385227c3d_prof);

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
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
