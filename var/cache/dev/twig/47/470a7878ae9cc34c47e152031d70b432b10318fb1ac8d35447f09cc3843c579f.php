<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c517b7222616953ede497a55441899f322f1c268e06372094e0506d7f712e3f2 extends Twig_Template
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
        $__internal_83302eb7b9001e07119b3ca0b430a8a9da9cf013e24ae65fc121682f9549bb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83302eb7b9001e07119b3ca0b430a8a9da9cf013e24ae65fc121682f9549bb51->enter($__internal_83302eb7b9001e07119b3ca0b430a8a9da9cf013e24ae65fc121682f9549bb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_329c956d0ca0a817d61d359dd74d737f7302d7197a0af1f04d92a995dc01d698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329c956d0ca0a817d61d359dd74d737f7302d7197a0af1f04d92a995dc01d698->enter($__internal_329c956d0ca0a817d61d359dd74d737f7302d7197a0af1f04d92a995dc01d698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_83302eb7b9001e07119b3ca0b430a8a9da9cf013e24ae65fc121682f9549bb51->leave($__internal_83302eb7b9001e07119b3ca0b430a8a9da9cf013e24ae65fc121682f9549bb51_prof);

        
        $__internal_329c956d0ca0a817d61d359dd74d737f7302d7197a0af1f04d92a995dc01d698->leave($__internal_329c956d0ca0a817d61d359dd74d737f7302d7197a0af1f04d92a995dc01d698_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
