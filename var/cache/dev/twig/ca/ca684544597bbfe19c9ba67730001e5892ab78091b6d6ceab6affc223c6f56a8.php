<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ed1e6278325e44739e7f66876670089bf3aa6355e6b6155fb941de59435a4c49 extends Twig_Template
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
        $__internal_8e3ddf5ca1bfcc4761ae3b9fa61e0a4534ed05cf3e59b744a412d68257973b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3ddf5ca1bfcc4761ae3b9fa61e0a4534ed05cf3e59b744a412d68257973b15->enter($__internal_8e3ddf5ca1bfcc4761ae3b9fa61e0a4534ed05cf3e59b744a412d68257973b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f408b6f8eaa2790f61c5f610248228c252fb8331337725071e2fa323bb679948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f408b6f8eaa2790f61c5f610248228c252fb8331337725071e2fa323bb679948->enter($__internal_f408b6f8eaa2790f61c5f610248228c252fb8331337725071e2fa323bb679948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8e3ddf5ca1bfcc4761ae3b9fa61e0a4534ed05cf3e59b744a412d68257973b15->leave($__internal_8e3ddf5ca1bfcc4761ae3b9fa61e0a4534ed05cf3e59b744a412d68257973b15_prof);

        
        $__internal_f408b6f8eaa2790f61c5f610248228c252fb8331337725071e2fa323bb679948->leave($__internal_f408b6f8eaa2790f61c5f610248228c252fb8331337725071e2fa323bb679948_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
