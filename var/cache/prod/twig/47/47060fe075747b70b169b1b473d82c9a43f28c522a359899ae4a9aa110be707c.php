<?php

/* BackOfficeBundle::backoffice.html.twig */
class __TwigTemplate_42c47e14d9e5989e963d977b9b76f4e566d1407b74f3dc57167d497b5b9f115b extends Twig_Template
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
        $__internal_f7f7501484750fec31a5c81e5c0c173a28c3a6bff296d8c58b69355c8dba2072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f7501484750fec31a5c81e5c0c173a28c3a6bff296d8c58b69355c8dba2072->enter($__internal_f7f7501484750fec31a5c81e5c0c173a28c3a6bff296d8c58b69355c8dba2072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::backoffice.html.twig"));

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
        
        $__internal_f7f7501484750fec31a5c81e5c0c173a28c3a6bff296d8c58b69355c8dba2072->leave($__internal_f7f7501484750fec31a5c81e5c0c173a28c3a6bff296d8c58b69355c8dba2072_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ac5a28a534ef79c7a5391e6a7cc30ca26233b0c174d9fcb344a895e05b925f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ac5a28a534ef79c7a5391e6a7cc30ca26233b0c174d9fcb344a895e05b925f->enter($__internal_d8ac5a28a534ef79c7a5391e6a7cc30ca26233b0c174d9fcb344a895e05b925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Back-Office";
        
        $__internal_d8ac5a28a534ef79c7a5391e6a7cc30ca26233b0c174d9fcb344a895e05b925f->leave($__internal_d8ac5a28a534ef79c7a5391e6a7cc30ca26233b0c174d9fcb344a895e05b925f_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_759157b74dc48f810ad965e0b18658550132e93efb3a16d51cd3429b4365627c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759157b74dc48f810ad965e0b18658550132e93efb3a16d51cd3429b4365627c->enter($__internal_759157b74dc48f810ad965e0b18658550132e93efb3a16d51cd3429b4365627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_759157b74dc48f810ad965e0b18658550132e93efb3a16d51cd3429b4365627c->leave($__internal_759157b74dc48f810ad965e0b18658550132e93efb3a16d51cd3429b4365627c_prof);

    }

    // line 18
    public function block_flash($context, array $blocks = array())
    {
        $__internal_e5d25d1bb1336fda95de72d380cf2a0fe4126b5917f42610f6b8b258c66de1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d25d1bb1336fda95de72d380cf2a0fe4126b5917f42610f6b8b258c66de1ea->enter($__internal_e5d25d1bb1336fda95de72d380cf2a0fe4126b5917f42610f6b8b258c66de1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

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
        
        $__internal_e5d25d1bb1336fda95de72d380cf2a0fe4126b5917f42610f6b8b258c66de1ea->leave($__internal_e5d25d1bb1336fda95de72d380cf2a0fe4126b5917f42610f6b8b258c66de1ea_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_6fd6ffec092b61d6cc12f54f05b17f8a54283fe59f4f1005258b265e1db03e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd6ffec092b61d6cc12f54f05b17f8a54283fe59f4f1005258b265e1db03e87->enter($__internal_6fd6ffec092b61d6cc12f54f05b17f8a54283fe59f4f1005258b265e1db03e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6fd6ffec092b61d6cc12f54f05b17f8a54283fe59f4f1005258b265e1db03e87->leave($__internal_6fd6ffec092b61d6cc12f54f05b17f8a54283fe59f4f1005258b265e1db03e87_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_12dd42c9470b92106c161d2d3e225a2ca360f774d809210445c1b0b7128c6dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12dd42c9470b92106c161d2d3e225a2ca360f774d809210445c1b0b7128c6dd2->enter($__internal_12dd42c9470b92106c161d2d3e225a2ca360f774d809210445c1b0b7128c6dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_12dd42c9470b92106c161d2d3e225a2ca360f774d809210445c1b0b7128c6dd2->leave($__internal_12dd42c9470b92106c161d2d3e225a2ca360f774d809210445c1b0b7128c6dd2_prof);

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
