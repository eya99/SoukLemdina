<?php

/* @Local/Default/index.html.twig */
class __TwigTemplate_c755f96420b7c7090a52b2090f03ddb9530c5acf3cfda963d02e8ba28d80f59c extends Twig_Template
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
        $__internal_1a1bf0e07299d25a156dac3bef6840bbce0c41cb98bf953684764eb910590681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1bf0e07299d25a156dac3bef6840bbce0c41cb98bf953684764eb910590681->enter($__internal_1a1bf0e07299d25a156dac3bef6840bbce0c41cb98bf953684764eb910590681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Local/Default/index.html.twig"));

        $__internal_860e64da41257ef3d1bf6474c2a06b6de0c0356004364138bb86d2ab509c64fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860e64da41257ef3d1bf6474c2a06b6de0c0356004364138bb86d2ab509c64fa->enter($__internal_860e64da41257ef3d1bf6474c2a06b6de0c0356004364138bb86d2ab509c64fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Local/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1a1bf0e07299d25a156dac3bef6840bbce0c41cb98bf953684764eb910590681->leave($__internal_1a1bf0e07299d25a156dac3bef6840bbce0c41cb98bf953684764eb910590681_prof);

        
        $__internal_860e64da41257ef3d1bf6474c2a06b6de0c0356004364138bb86d2ab509c64fa->leave($__internal_860e64da41257ef3d1bf6474c2a06b6de0c0356004364138bb86d2ab509c64fa_prof);

    }

    public function getTemplateName()
    {
        return "@Local/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@Local/Default/index.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\src\\LocalBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
