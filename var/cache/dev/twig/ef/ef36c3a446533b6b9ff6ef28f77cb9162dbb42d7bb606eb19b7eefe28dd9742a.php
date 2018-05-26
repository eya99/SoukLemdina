<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0abf53e49bad7a66b577f7de0a71fd9bcadec92b3e7a704a80dea3faf1239808 extends Twig_Template
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
        $__internal_7b13e73c416fdebf39d38f11291e609fad722154ca2c795a4b509e680c68475b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b13e73c416fdebf39d38f11291e609fad722154ca2c795a4b509e680c68475b->enter($__internal_7b13e73c416fdebf39d38f11291e609fad722154ca2c795a4b509e680c68475b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_fccbff9e2f0a84e08f52a1e591266c69e317e841ab0f6643c5ba491b49a903b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccbff9e2f0a84e08f52a1e591266c69e317e841ab0f6643c5ba491b49a903b4->enter($__internal_fccbff9e2f0a84e08f52a1e591266c69e317e841ab0f6643c5ba491b49a903b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7b13e73c416fdebf39d38f11291e609fad722154ca2c795a4b509e680c68475b->leave($__internal_7b13e73c416fdebf39d38f11291e609fad722154ca2c795a4b509e680c68475b_prof);

        
        $__internal_fccbff9e2f0a84e08f52a1e591266c69e317e841ab0f6643c5ba491b49a903b4->leave($__internal_fccbff9e2f0a84e08f52a1e591266c69e317e841ab0f6643c5ba491b49a903b4_prof);

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
", "TwigBundle:Exception:error.xml.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
