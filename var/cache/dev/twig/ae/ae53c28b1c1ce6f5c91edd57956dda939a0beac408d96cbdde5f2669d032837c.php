<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cffc99c09131d1155a034d53c1abb23555ccc3674c3b4bfb472f69850a81e837 extends Twig_Template
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
        $__internal_4edf22ab0a4866a6fc06c2976f76436ed5a379f12e57aea4fc33beb1e33d962e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edf22ab0a4866a6fc06c2976f76436ed5a379f12e57aea4fc33beb1e33d962e->enter($__internal_4edf22ab0a4866a6fc06c2976f76436ed5a379f12e57aea4fc33beb1e33d962e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9feebb9b88ea4def45bfca8198433e069046926518698bd24ac5ca67276c27fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feebb9b88ea4def45bfca8198433e069046926518698bd24ac5ca67276c27fb->enter($__internal_9feebb9b88ea4def45bfca8198433e069046926518698bd24ac5ca67276c27fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4edf22ab0a4866a6fc06c2976f76436ed5a379f12e57aea4fc33beb1e33d962e->leave($__internal_4edf22ab0a4866a6fc06c2976f76436ed5a379f12e57aea4fc33beb1e33d962e_prof);

        
        $__internal_9feebb9b88ea4def45bfca8198433e069046926518698bd24ac5ca67276c27fb->leave($__internal_9feebb9b88ea4def45bfca8198433e069046926518698bd24ac5ca67276c27fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
