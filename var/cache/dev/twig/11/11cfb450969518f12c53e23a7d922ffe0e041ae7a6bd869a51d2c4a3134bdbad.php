<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_30936879706bd9139a631616b6c162d5bd67559c8dbe434ddf2ad988ef649f0f extends Twig_Template
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
        $__internal_ccbc575c3130dae8ac015eeed4e1ee185cdebf1a92f13122a1f434ace83c409f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbc575c3130dae8ac015eeed4e1ee185cdebf1a92f13122a1f434ace83c409f->enter($__internal_ccbc575c3130dae8ac015eeed4e1ee185cdebf1a92f13122a1f434ace83c409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_4060bc3a721e356bfede9e851f32406285196c5333a434f51ecaa932df673932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4060bc3a721e356bfede9e851f32406285196c5333a434f51ecaa932df673932->enter($__internal_4060bc3a721e356bfede9e851f32406285196c5333a434f51ecaa932df673932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ccbc575c3130dae8ac015eeed4e1ee185cdebf1a92f13122a1f434ace83c409f->leave($__internal_ccbc575c3130dae8ac015eeed4e1ee185cdebf1a92f13122a1f434ace83c409f_prof);

        
        $__internal_4060bc3a721e356bfede9e851f32406285196c5333a434f51ecaa932df673932->leave($__internal_4060bc3a721e356bfede9e851f32406285196c5333a434f51ecaa932df673932_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
