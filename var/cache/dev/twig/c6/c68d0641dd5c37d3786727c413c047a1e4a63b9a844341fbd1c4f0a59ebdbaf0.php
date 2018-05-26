<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9a6685ca3949d2dd114eddc7c72e8046fd2b6deb1058a9b169498b593ad72ee3 extends Twig_Template
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
        $__internal_44ac393f03484ac9eaca0231b57cee2807d422645fd038b46b0e0549dad65ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ac393f03484ac9eaca0231b57cee2807d422645fd038b46b0e0549dad65ed7->enter($__internal_44ac393f03484ac9eaca0231b57cee2807d422645fd038b46b0e0549dad65ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1be831f634565086865d11e31e7b8c9df0d563138afb72072d04bd67df6b4a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be831f634565086865d11e31e7b8c9df0d563138afb72072d04bd67df6b4a28->enter($__internal_1be831f634565086865d11e31e7b8c9df0d563138afb72072d04bd67df6b4a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_44ac393f03484ac9eaca0231b57cee2807d422645fd038b46b0e0549dad65ed7->leave($__internal_44ac393f03484ac9eaca0231b57cee2807d422645fd038b46b0e0549dad65ed7_prof);

        
        $__internal_1be831f634565086865d11e31e7b8c9df0d563138afb72072d04bd67df6b4a28->leave($__internal_1be831f634565086865d11e31e7b8c9df0d563138afb72072d04bd67df6b4a28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
