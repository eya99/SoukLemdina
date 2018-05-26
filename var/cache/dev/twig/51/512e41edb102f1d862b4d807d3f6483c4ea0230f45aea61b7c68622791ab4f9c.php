<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_97f0e303b44970909b8318ad29d19318ce1dd4cd8e495d3eef6522596b92dbb4 extends Twig_Template
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
        $__internal_013db3e62836e653885c21a7911475419fab8cad15155b2fa017192bd6e73aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013db3e62836e653885c21a7911475419fab8cad15155b2fa017192bd6e73aff->enter($__internal_013db3e62836e653885c21a7911475419fab8cad15155b2fa017192bd6e73aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4dfccb42a51e144d3252d52e7f2b14e1a9013d06aab8a3aaa512eaffe9749b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfccb42a51e144d3252d52e7f2b14e1a9013d06aab8a3aaa512eaffe9749b0e->enter($__internal_4dfccb42a51e144d3252d52e7f2b14e1a9013d06aab8a3aaa512eaffe9749b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_013db3e62836e653885c21a7911475419fab8cad15155b2fa017192bd6e73aff->leave($__internal_013db3e62836e653885c21a7911475419fab8cad15155b2fa017192bd6e73aff_prof);

        
        $__internal_4dfccb42a51e144d3252d52e7f2b14e1a9013d06aab8a3aaa512eaffe9749b0e->leave($__internal_4dfccb42a51e144d3252d52e7f2b14e1a9013d06aab8a3aaa512eaffe9749b0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
