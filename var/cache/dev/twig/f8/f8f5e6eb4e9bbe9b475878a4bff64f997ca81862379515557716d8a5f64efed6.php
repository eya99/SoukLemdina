<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_dd4afa961e076b3128ca3ae2c96e968db8bf615287ccdc235e707942f342aa01 extends Twig_Template
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
        $__internal_f09e3e31d8a1f418c8893886d50f96c9409c9db5500b29d585c76c9e27f6e190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09e3e31d8a1f418c8893886d50f96c9409c9db5500b29d585c76c9e27f6e190->enter($__internal_f09e3e31d8a1f418c8893886d50f96c9409c9db5500b29d585c76c9e27f6e190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_e648a349cef48dd185df48b6cdc04964f50f84890ec0df4580a344cfb0d30f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e648a349cef48dd185df48b6cdc04964f50f84890ec0df4580a344cfb0d30f6b->enter($__internal_e648a349cef48dd185df48b6cdc04964f50f84890ec0df4580a344cfb0d30f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_f09e3e31d8a1f418c8893886d50f96c9409c9db5500b29d585c76c9e27f6e190->leave($__internal_f09e3e31d8a1f418c8893886d50f96c9409c9db5500b29d585c76c9e27f6e190_prof);

        
        $__internal_e648a349cef48dd185df48b6cdc04964f50f84890ec0df4580a344cfb0d30f6b->leave($__internal_e648a349cef48dd185df48b6cdc04964f50f84890ec0df4580a344cfb0d30f6b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
