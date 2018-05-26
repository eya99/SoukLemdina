<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1f9afcf03acd0396af565f27a4b821f2aa1fd2589356ab8dddbeed10c0f9a074 extends Twig_Template
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
        $__internal_a8533acee19ddb3df69058b5311129037422b5705fad3f941246313c94948def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8533acee19ddb3df69058b5311129037422b5705fad3f941246313c94948def->enter($__internal_a8533acee19ddb3df69058b5311129037422b5705fad3f941246313c94948def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_267fdccd56e5ef3206ff5a077c56a1ae00513d453794d0f51aa41c65d04bcb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267fdccd56e5ef3206ff5a077c56a1ae00513d453794d0f51aa41c65d04bcb14->enter($__internal_267fdccd56e5ef3206ff5a077c56a1ae00513d453794d0f51aa41c65d04bcb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a8533acee19ddb3df69058b5311129037422b5705fad3f941246313c94948def->leave($__internal_a8533acee19ddb3df69058b5311129037422b5705fad3f941246313c94948def_prof);

        
        $__internal_267fdccd56e5ef3206ff5a077c56a1ae00513d453794d0f51aa41c65d04bcb14->leave($__internal_267fdccd56e5ef3206ff5a077c56a1ae00513d453794d0f51aa41c65d04bcb14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
