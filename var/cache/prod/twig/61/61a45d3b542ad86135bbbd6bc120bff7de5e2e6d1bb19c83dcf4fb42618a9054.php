<?php

/* BackOfficeBundle::backoffice.html.twig */
class __TwigTemplate_25ed3a2114b9180c0517edd38d6796c4140cefbaea34d63ec1ae64766997ac10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'flash' => array($this, 'block_flash'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9ef385e08c4a627d7c917d72ea0f9512208d1a50ef954ac0ea73d06186bf5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ef385e08c4a627d7c917d72ea0f9512208d1a50ef954ac0ea73d06186bf5ae->enter($__internal_a9ef385e08c4a627d7c917d72ea0f9512208d1a50ef954ac0ea73d06186bf5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::backoffice.html.twig"));

        // line 2
        $context["route"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 3
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

</head>
<body>
<div class=\"container\">

    ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('flash', $context, $blocks);
        // line 32
        echo "
    <!-- container content - BEGIN -->
    <div class=\"container container-content\">
        <div id=\"layout-view\" class=\"view view-villa-all\">
            ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "        </div>
    </div>
    <!-- container content - END -->

    ";
        // line 41
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo "
</div>
</body>
</html>
";
        
        $__internal_a9ef385e08c4a627d7c917d72ea0f9512208d1a50ef954ac0ea73d06186bf5ae->leave($__internal_a9ef385e08c4a627d7c917d72ea0f9512208d1a50ef954ac0ea73d06186bf5ae_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e255f62d28ec62a15147b794dc35adc266b13b6ec5f76754c3888788651e3d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e255f62d28ec62a15147b794dc35adc266b13b6ec5f76754c3888788651e3d68->enter($__internal_e255f62d28ec62a15147b794dc35adc266b13b6ec5f76754c3888788651e3d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Back-Office";
        
        $__internal_e255f62d28ec62a15147b794dc35adc266b13b6ec5f76754c3888788651e3d68->leave($__internal_e255f62d28ec62a15147b794dc35adc266b13b6ec5f76754c3888788651e3d68_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_23d7afd05cf095eb8350d131b5fca95655fd67bfba5cd095f2099900856739a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d7afd05cf095eb8350d131b5fca95655fd67bfba5cd095f2099900856739a4->enter($__internal_23d7afd05cf095eb8350d131b5fca95655fd67bfba5cd095f2099900856739a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_23d7afd05cf095eb8350d131b5fca95655fd67bfba5cd095f2099900856739a4->leave($__internal_23d7afd05cf095eb8350d131b5fca95655fd67bfba5cd095f2099900856739a4_prof);

    }

    // line 17
    public function block_flash($context, array $blocks = array())
    {
        $__internal_1d877fe4454545c1afe154859a6d82c68fa123de5c8fb49c1efaebc8b2a65d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d877fe4454545c1afe154859a6d82c68fa123de5c8fb49c1efaebc8b2a65d43->enter($__internal_1d877fe4454545c1afe154859a6d82c68fa123de5c8fb49c1efaebc8b2a65d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "            <div>
                ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "            <div>
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        
        $__internal_1d877fe4454545c1afe154859a6d82c68fa123de5c8fb49c1efaebc8b2a65d43->leave($__internal_1d877fe4454545c1afe154859a6d82c68fa123de5c8fb49c1efaebc8b2a65d43_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_d2588cc68f8b660cfe3a6a70875ceaf014e91564bcaf90853816d0ef51f31908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2588cc68f8b660cfe3a6a70875ceaf014e91564bcaf90853816d0ef51f31908->enter($__internal_d2588cc68f8b660cfe3a6a70875ceaf014e91564bcaf90853816d0ef51f31908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d2588cc68f8b660cfe3a6a70875ceaf014e91564bcaf90853816d0ef51f31908->leave($__internal_d2588cc68f8b660cfe3a6a70875ceaf014e91564bcaf90853816d0ef51f31908_prof);

    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        $__internal_14c6fb225f944492abfcc293be4d6e5942c2b297023dfeb778bc8e591ed2cd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c6fb225f944492abfcc293be4d6e5942c2b297023dfeb778bc8e591ed2cd8c->enter($__internal_14c6fb225f944492abfcc293be4d6e5942c2b297023dfeb778bc8e591ed2cd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_14c6fb225f944492abfcc293be4d6e5942c2b297023dfeb778bc8e591ed2cd8c->leave($__internal_14c6fb225f944492abfcc293be4d6e5942c2b297023dfeb778bc8e591ed2cd8c_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 41,  155 => 36,  147 => 30,  138 => 27,  135 => 26,  131 => 25,  128 => 24,  119 => 21,  116 => 20,  112 => 19,  109 => 18,  103 => 17,  92 => 15,  80 => 8,  69 => 42,  67 => 41,  61 => 37,  59 => 36,  53 => 32,  51 => 17,  48 => 16,  46 => 15,  36 => 8,  29 => 3,  27 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# add navigation current nav mark #}
{% set route = app.request.get('_route') %}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Back-Office{% endblock %}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

</head>
<body>
<div class=\"container\">

    {% block header %}{% endblock %}

    {% block flash %}

        {% for flashMessage in app.session.flashbag.get('notice') %}
            <div>
                {{ flashMessage }}
            </div>
        {% endfor %}

        {% for flashMessage in app.session.flashbag.get('error') %}
            <div>
                {{ flashMessage }}
            </div>
        {% endfor %}

    {% endblock %}

    <!-- container content - BEGIN -->
    <div class=\"container container-content\">
        <div id=\"layout-view\" class=\"view view-villa-all\">
            {% block content %}{% endblock %}
        </div>
    </div>
    <!-- container content - END -->

    {% block footer %}{% endblock footer %}

</div>
</body>
</html>
", "BackOfficeBundle::backoffice.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\src\\BackOfficeBundle/Resources/views/backoffice.html.twig");
    }
}
