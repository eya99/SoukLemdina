<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3526aa8ee87485e27c869b7b7753c1f89b4e6fa39e90236462b685e48b24f045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bac1f2f2fa48119c0f2e00be802bd566a015a238846175f640eff2f947ab733d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac1f2f2fa48119c0f2e00be802bd566a015a238846175f640eff2f947ab733d->enter($__internal_bac1f2f2fa48119c0f2e00be802bd566a015a238846175f640eff2f947ab733d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5d8d75cf4d5fa04925da05c848c915b09b1c8062abfa540ed52fd7dc1dc22c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8d75cf4d5fa04925da05c848c915b09b1c8062abfa540ed52fd7dc1dc22c25->enter($__internal_5d8d75cf4d5fa04925da05c848c915b09b1c8062abfa540ed52fd7dc1dc22c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac1f2f2fa48119c0f2e00be802bd566a015a238846175f640eff2f947ab733d->leave($__internal_bac1f2f2fa48119c0f2e00be802bd566a015a238846175f640eff2f947ab733d_prof);

        
        $__internal_5d8d75cf4d5fa04925da05c848c915b09b1c8062abfa540ed52fd7dc1dc22c25->leave($__internal_5d8d75cf4d5fa04925da05c848c915b09b1c8062abfa540ed52fd7dc1dc22c25_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e802410a0aaa2f5dc4a83b40be7ad2ae27cea88bde3f20f737bb75e74af847b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e802410a0aaa2f5dc4a83b40be7ad2ae27cea88bde3f20f737bb75e74af847b3->enter($__internal_e802410a0aaa2f5dc4a83b40be7ad2ae27cea88bde3f20f737bb75e74af847b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9376539b616be5186f8042109099f8eb19086cd06f8a9b1642e678963ad3c5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9376539b616be5186f8042109099f8eb19086cd06f8a9b1642e678963ad3c5ea->enter($__internal_9376539b616be5186f8042109099f8eb19086cd06f8a9b1642e678963ad3c5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9376539b616be5186f8042109099f8eb19086cd06f8a9b1642e678963ad3c5ea->leave($__internal_9376539b616be5186f8042109099f8eb19086cd06f8a9b1642e678963ad3c5ea_prof);

        
        $__internal_e802410a0aaa2f5dc4a83b40be7ad2ae27cea88bde3f20f737bb75e74af847b3->leave($__internal_e802410a0aaa2f5dc4a83b40be7ad2ae27cea88bde3f20f737bb75e74af847b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c59ed927a04e2042de08067942a28f255385032a8b55a4241748e0e3bacb8a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c59ed927a04e2042de08067942a28f255385032a8b55a4241748e0e3bacb8a1->enter($__internal_3c59ed927a04e2042de08067942a28f255385032a8b55a4241748e0e3bacb8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59d1f7e5a6f1b98d5bb5d05eb4226a38762141f5b964968bbc10eaa8a40cb55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d1f7e5a6f1b98d5bb5d05eb4226a38762141f5b964968bbc10eaa8a40cb55f->enter($__internal_59d1f7e5a6f1b98d5bb5d05eb4226a38762141f5b964968bbc10eaa8a40cb55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_59d1f7e5a6f1b98d5bb5d05eb4226a38762141f5b964968bbc10eaa8a40cb55f->leave($__internal_59d1f7e5a6f1b98d5bb5d05eb4226a38762141f5b964968bbc10eaa8a40cb55f_prof);

        
        $__internal_3c59ed927a04e2042de08067942a28f255385032a8b55a4241748e0e3bacb8a1->leave($__internal_3c59ed927a04e2042de08067942a28f255385032a8b55a4241748e0e3bacb8a1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
