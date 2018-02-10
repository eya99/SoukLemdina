<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1bdfe1387f2a880d07ba1183d75f4085d3ebd4ce14af1d40ab313e68acb7bc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cae5ec984c19b3ccb2e8de9f3b3b8d91fe0bbbe0c98ebdcdc96e494a34464574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae5ec984c19b3ccb2e8de9f3b3b8d91fe0bbbe0c98ebdcdc96e494a34464574->enter($__internal_cae5ec984c19b3ccb2e8de9f3b3b8d91fe0bbbe0c98ebdcdc96e494a34464574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_bee83f70d42557cc6684862394f34753b1d8facbd3574c8c3cd35b6e32a8d261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee83f70d42557cc6684862394f34753b1d8facbd3574c8c3cd35b6e32a8d261->enter($__internal_bee83f70d42557cc6684862394f34753b1d8facbd3574c8c3cd35b6e32a8d261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cae5ec984c19b3ccb2e8de9f3b3b8d91fe0bbbe0c98ebdcdc96e494a34464574->leave($__internal_cae5ec984c19b3ccb2e8de9f3b3b8d91fe0bbbe0c98ebdcdc96e494a34464574_prof);

        
        $__internal_bee83f70d42557cc6684862394f34753b1d8facbd3574c8c3cd35b6e32a8d261->leave($__internal_bee83f70d42557cc6684862394f34753b1d8facbd3574c8c3cd35b6e32a8d261_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e96715fc986550e5a07e332b3bdff701022f459ff1edd21966e490fdd84eb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e96715fc986550e5a07e332b3bdff701022f459ff1edd21966e490fdd84eb6a->enter($__internal_3e96715fc986550e5a07e332b3bdff701022f459ff1edd21966e490fdd84eb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f955c0efd5d369158c357dd39c050c76e35b8ac5ecc84c7e644f702de4dac66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f955c0efd5d369158c357dd39c050c76e35b8ac5ecc84c7e644f702de4dac66a->enter($__internal_f955c0efd5d369158c357dd39c050c76e35b8ac5ecc84c7e644f702de4dac66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f955c0efd5d369158c357dd39c050c76e35b8ac5ecc84c7e644f702de4dac66a->leave($__internal_f955c0efd5d369158c357dd39c050c76e35b8ac5ecc84c7e644f702de4dac66a_prof);

        
        $__internal_3e96715fc986550e5a07e332b3bdff701022f459ff1edd21966e490fdd84eb6a->leave($__internal_3e96715fc986550e5a07e332b3bdff701022f459ff1edd21966e490fdd84eb6a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
