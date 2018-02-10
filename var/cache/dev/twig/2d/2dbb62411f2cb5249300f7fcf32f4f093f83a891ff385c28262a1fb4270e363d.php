<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a1aab37af6de0bf5c121302fb4ce9ceaf1646df81cb1f5df54a11dbbd3ecc7ef extends Twig_Template
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
        $__internal_42fde94d9087dd328f5b635ee9a045bd660f0f21b098a2d8ac9f6796f586ac26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42fde94d9087dd328f5b635ee9a045bd660f0f21b098a2d8ac9f6796f586ac26->enter($__internal_42fde94d9087dd328f5b635ee9a045bd660f0f21b098a2d8ac9f6796f586ac26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_19f199105382c0b8b12cd8afc678be43e5080f8146d47ab1a30e865fa8fe5ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f199105382c0b8b12cd8afc678be43e5080f8146d47ab1a30e865fa8fe5ee5->enter($__internal_19f199105382c0b8b12cd8afc678be43e5080f8146d47ab1a30e865fa8fe5ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_42fde94d9087dd328f5b635ee9a045bd660f0f21b098a2d8ac9f6796f586ac26->leave($__internal_42fde94d9087dd328f5b635ee9a045bd660f0f21b098a2d8ac9f6796f586ac26_prof);

        
        $__internal_19f199105382c0b8b12cd8afc678be43e5080f8146d47ab1a30e865fa8fe5ee5->leave($__internal_19f199105382c0b8b12cd8afc678be43e5080f8146d47ab1a30e865fa8fe5ee5_prof);

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
", "TwigBundle:Exception:error.atom.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
