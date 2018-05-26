<?php

/* BackOfficeBundle::backoffice.html.twig */
class __TwigTemplate_7448bd5e2b940e38a7ab01397edcc29a4a4b1cd5776cc676c86c5158571ec6eb extends Twig_Template
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
        $__internal_7be5a3399888ba378ae73af8837b7c1d7e2c3732c522e87dcf5a62f42b83e52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be5a3399888ba378ae73af8837b7c1d7e2c3732c522e87dcf5a62f42b83e52c->enter($__internal_7be5a3399888ba378ae73af8837b7c1d7e2c3732c522e87dcf5a62f42b83e52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::backoffice.html.twig"));

        // line 2
        $context["route"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method");
        // line 3
        echo "
<!DOCTYPE html>
<html>
";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 7
            echo "<head>
    <meta charset=\"UTF-8\" />
    <title>";
            // line 9
            $this->displayBlock('title', $context, $blocks);
            echo "</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

</head>
<body>
<div class=\"container\">

    ";
            // line 16
            $this->displayBlock('header', $context, $blocks);
            // line 17
            echo "
    ";
            // line 18
            $this->displayBlock('flash', $context, $blocks);
            // line 33
            echo "
    <!-- container content - BEGIN -->
    <div class=\"container container-content\">
        <div id=\"layout-view\" class=\"view view-villa-all\">
            ";
            // line 37
            $this->displayBlock('content', $context, $blocks);
            // line 38
            echo "        </div>
    </div>
    <!-- container content - END -->

    ";
            // line 42
            $this->displayBlock('footer', $context, $blocks);
            // line 43
            echo "
</div>
</body>
";
        } else {
            // line 47
            echo "    <head>
        <title>
            No Route For You User
        </title>
        <meta http-equiv=\"refresh\" content=\"2;url=";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
            echo "\">
    </head>
    <body>
    <div align=\"center\">Access Denied for Users and Visitors</div>
    </body>
";
        }
        // line 57
        echo "</html>
";
        
        $__internal_7be5a3399888ba378ae73af8837b7c1d7e2c3732c522e87dcf5a62f42b83e52c->leave($__internal_7be5a3399888ba378ae73af8837b7c1d7e2c3732c522e87dcf5a62f42b83e52c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a73b88013112c755159f210aee31e4b7dfcdb08b8ca6738178f508e62f816010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73b88013112c755159f210aee31e4b7dfcdb08b8ca6738178f508e62f816010->enter($__internal_a73b88013112c755159f210aee31e4b7dfcdb08b8ca6738178f508e62f816010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Back-Office";
        
        $__internal_a73b88013112c755159f210aee31e4b7dfcdb08b8ca6738178f508e62f816010->leave($__internal_a73b88013112c755159f210aee31e4b7dfcdb08b8ca6738178f508e62f816010_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_d25c532e02bee91319f58b4ef8a1fbb1bfa89472056da87a786d6982673dac3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25c532e02bee91319f58b4ef8a1fbb1bfa89472056da87a786d6982673dac3e->enter($__internal_d25c532e02bee91319f58b4ef8a1fbb1bfa89472056da87a786d6982673dac3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_d25c532e02bee91319f58b4ef8a1fbb1bfa89472056da87a786d6982673dac3e->leave($__internal_d25c532e02bee91319f58b4ef8a1fbb1bfa89472056da87a786d6982673dac3e_prof);

    }

    // line 18
    public function block_flash($context, array $blocks = array())
    {
        $__internal_c160527155727dc069d2476961b129af7d1c215e16383cdc6a759cd15d01279b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c160527155727dc069d2476961b129af7d1c215e16383cdc6a759cd15d01279b->enter($__internal_c160527155727dc069d2476961b129af7d1c215e16383cdc6a759cd15d01279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "            <div>
                ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "            <div>
                ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        
        $__internal_c160527155727dc069d2476961b129af7d1c215e16383cdc6a759cd15d01279b->leave($__internal_c160527155727dc069d2476961b129af7d1c215e16383cdc6a759cd15d01279b_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_48360a18059675913ca39ad43a3dcd01cdfb72007f8ad4c5bf6477db729f6903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48360a18059675913ca39ad43a3dcd01cdfb72007f8ad4c5bf6477db729f6903->enter($__internal_48360a18059675913ca39ad43a3dcd01cdfb72007f8ad4c5bf6477db729f6903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_48360a18059675913ca39ad43a3dcd01cdfb72007f8ad4c5bf6477db729f6903->leave($__internal_48360a18059675913ca39ad43a3dcd01cdfb72007f8ad4c5bf6477db729f6903_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0b836904fe0ab0312d3c30119c88c93513272a41877be947708bbff6398f7057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b836904fe0ab0312d3c30119c88c93513272a41877be947708bbff6398f7057->enter($__internal_0b836904fe0ab0312d3c30119c88c93513272a41877be947708bbff6398f7057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_0b836904fe0ab0312d3c30119c88c93513272a41877be947708bbff6398f7057->leave($__internal_0b836904fe0ab0312d3c30119c88c93513272a41877be947708bbff6398f7057_prof);

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
        return array (  188 => 42,  177 => 37,  169 => 31,  160 => 28,  157 => 27,  153 => 26,  150 => 25,  141 => 22,  138 => 21,  134 => 20,  131 => 19,  125 => 18,  114 => 16,  102 => 9,  94 => 57,  85 => 51,  79 => 47,  73 => 43,  71 => 42,  65 => 38,  63 => 37,  57 => 33,  55 => 18,  52 => 17,  50 => 16,  40 => 9,  36 => 7,  34 => 6,  29 => 3,  27 => 2,);
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
{% if is_granted(\"ROLE_SUPER_ADMIN\") %}
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
{% else %}
    <head>
        <title>
            No Route For You User
        </title>
        <meta http-equiv=\"refresh\" content=\"2;url={{ path('fos_visitor_home') }}\">
    </head>
    <body>
    <div align=\"center\">Access Denied for Users and Visitors</div>
    </body>
{% endif %}
</html>
", "BackOfficeBundle::backoffice.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/BackOfficeBundle/Resources/views/backoffice.html.twig");
    }
}
