<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_67bab2434f75b7415dd4292ec145492a0b45dc64028559e126f05b07eae0c381 extends Twig_Template
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
        $__internal_5e4f6577a9f48e272e46a4e459c8fe0db928793120905529fa926069c27f7f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4f6577a9f48e272e46a4e459c8fe0db928793120905529fa926069c27f7f57->enter($__internal_5e4f6577a9f48e272e46a4e459c8fe0db928793120905529fa926069c27f7f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_df97145f62f81ca2328e1434b888cbecfa5565e62f1d6ddfd89fc6eea8fc9161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df97145f62f81ca2328e1434b888cbecfa5565e62f1d6ddfd89fc6eea8fc9161->enter($__internal_df97145f62f81ca2328e1434b888cbecfa5565e62f1d6ddfd89fc6eea8fc9161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5e4f6577a9f48e272e46a4e459c8fe0db928793120905529fa926069c27f7f57->leave($__internal_5e4f6577a9f48e272e46a4e459c8fe0db928793120905529fa926069c27f7f57_prof);

        
        $__internal_df97145f62f81ca2328e1434b888cbecfa5565e62f1d6ddfd89fc6eea8fc9161->leave($__internal_df97145f62f81ca2328e1434b888cbecfa5565e62f1d6ddfd89fc6eea8fc9161_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
