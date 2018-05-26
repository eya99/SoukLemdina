<?php

/* BackOfficeBundle::backoffice.html.twig */
class __TwigTemplate_78950ccf2a15a5fa22fe2c28d5b96b32b668d4c43704be9219ceaa6cd075de18 extends Twig_Template
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
        $__internal_bcd011fa670be78bf4828636bc9c93d150e5ab54ee53faebf192a0f52b61438a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd011fa670be78bf4828636bc9c93d150e5ab54ee53faebf192a0f52b61438a->enter($__internal_bcd011fa670be78bf4828636bc9c93d150e5ab54ee53faebf192a0f52b61438a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::backoffice.html.twig"));

        $__internal_be0914b5e41c495d073db196cc81fe0e899e44e851b9422ee7a5c9939a2fc790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0914b5e41c495d073db196cc81fe0e899e44e851b9422ee7a5c9939a2fc790->enter($__internal_be0914b5e41c495d073db196cc81fe0e899e44e851b9422ee7a5c9939a2fc790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::backoffice.html.twig"));

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
        
        $__internal_bcd011fa670be78bf4828636bc9c93d150e5ab54ee53faebf192a0f52b61438a->leave($__internal_bcd011fa670be78bf4828636bc9c93d150e5ab54ee53faebf192a0f52b61438a_prof);

        
        $__internal_be0914b5e41c495d073db196cc81fe0e899e44e851b9422ee7a5c9939a2fc790->leave($__internal_be0914b5e41c495d073db196cc81fe0e899e44e851b9422ee7a5c9939a2fc790_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_888d6164c0044f76ba899e871341d6b83f1f5036de0008e9989fad14fab3b1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888d6164c0044f76ba899e871341d6b83f1f5036de0008e9989fad14fab3b1c7->enter($__internal_888d6164c0044f76ba899e871341d6b83f1f5036de0008e9989fad14fab3b1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4dd4cb1c2650a3db0306766fd7e11a809fea4b3d62ee2df9cd77e0109d835b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd4cb1c2650a3db0306766fd7e11a809fea4b3d62ee2df9cd77e0109d835b78->enter($__internal_4dd4cb1c2650a3db0306766fd7e11a809fea4b3d62ee2df9cd77e0109d835b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Back-Office";
        
        $__internal_4dd4cb1c2650a3db0306766fd7e11a809fea4b3d62ee2df9cd77e0109d835b78->leave($__internal_4dd4cb1c2650a3db0306766fd7e11a809fea4b3d62ee2df9cd77e0109d835b78_prof);

        
        $__internal_888d6164c0044f76ba899e871341d6b83f1f5036de0008e9989fad14fab3b1c7->leave($__internal_888d6164c0044f76ba899e871341d6b83f1f5036de0008e9989fad14fab3b1c7_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_31ec04bda1791f39d2f22ed4e8c54434f04e356ae0a50691b043b0f68bceed68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ec04bda1791f39d2f22ed4e8c54434f04e356ae0a50691b043b0f68bceed68->enter($__internal_31ec04bda1791f39d2f22ed4e8c54434f04e356ae0a50691b043b0f68bceed68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d1fa2ae06c7437abbcda893a5f9acc2708b0eab732b63c9a54c36390a6adb589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fa2ae06c7437abbcda893a5f9acc2708b0eab732b63c9a54c36390a6adb589->enter($__internal_d1fa2ae06c7437abbcda893a5f9acc2708b0eab732b63c9a54c36390a6adb589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_d1fa2ae06c7437abbcda893a5f9acc2708b0eab732b63c9a54c36390a6adb589->leave($__internal_d1fa2ae06c7437abbcda893a5f9acc2708b0eab732b63c9a54c36390a6adb589_prof);

        
        $__internal_31ec04bda1791f39d2f22ed4e8c54434f04e356ae0a50691b043b0f68bceed68->leave($__internal_31ec04bda1791f39d2f22ed4e8c54434f04e356ae0a50691b043b0f68bceed68_prof);

    }

    // line 18
    public function block_flash($context, array $blocks = array())
    {
        $__internal_63e11a01f7f631d54df871c751e7bf52eb51b6b6daed028571501784739578da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e11a01f7f631d54df871c751e7bf52eb51b6b6daed028571501784739578da->enter($__internal_63e11a01f7f631d54df871c751e7bf52eb51b6b6daed028571501784739578da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        $__internal_bc26a9e2598feb447c06b5c644f919f495ab577462d087b43eb5a705f62de482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc26a9e2598feb447c06b5c644f919f495ab577462d087b43eb5a705f62de482->enter($__internal_bc26a9e2598feb447c06b5c644f919f495ab577462d087b43eb5a705f62de482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

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
        
        $__internal_bc26a9e2598feb447c06b5c644f919f495ab577462d087b43eb5a705f62de482->leave($__internal_bc26a9e2598feb447c06b5c644f919f495ab577462d087b43eb5a705f62de482_prof);

        
        $__internal_63e11a01f7f631d54df871c751e7bf52eb51b6b6daed028571501784739578da->leave($__internal_63e11a01f7f631d54df871c751e7bf52eb51b6b6daed028571501784739578da_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_e6ac227a39d46c2fa7d7b5c54c28b86e0710151009c532cd70492e8822a0f05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ac227a39d46c2fa7d7b5c54c28b86e0710151009c532cd70492e8822a0f05e->enter($__internal_e6ac227a39d46c2fa7d7b5c54c28b86e0710151009c532cd70492e8822a0f05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c9bb83768fbd65b6ee48215fb92a0674309e23c20cd720bc7c7a3bbf542bb97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bb83768fbd65b6ee48215fb92a0674309e23c20cd720bc7c7a3bbf542bb97c->enter($__internal_c9bb83768fbd65b6ee48215fb92a0674309e23c20cd720bc7c7a3bbf542bb97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c9bb83768fbd65b6ee48215fb92a0674309e23c20cd720bc7c7a3bbf542bb97c->leave($__internal_c9bb83768fbd65b6ee48215fb92a0674309e23c20cd720bc7c7a3bbf542bb97c_prof);

        
        $__internal_e6ac227a39d46c2fa7d7b5c54c28b86e0710151009c532cd70492e8822a0f05e->leave($__internal_e6ac227a39d46c2fa7d7b5c54c28b86e0710151009c532cd70492e8822a0f05e_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d5eb491d7e6dfee5499d9c476f558d9339736983764c80ec89480ccfe335696d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5eb491d7e6dfee5499d9c476f558d9339736983764c80ec89480ccfe335696d->enter($__internal_d5eb491d7e6dfee5499d9c476f558d9339736983764c80ec89480ccfe335696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5725289fd181f9391091f0dfa61fcaf27a9433794e6560d68035fb16a751a157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5725289fd181f9391091f0dfa61fcaf27a9433794e6560d68035fb16a751a157->enter($__internal_5725289fd181f9391091f0dfa61fcaf27a9433794e6560d68035fb16a751a157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_5725289fd181f9391091f0dfa61fcaf27a9433794e6560d68035fb16a751a157->leave($__internal_5725289fd181f9391091f0dfa61fcaf27a9433794e6560d68035fb16a751a157_prof);

        
        $__internal_d5eb491d7e6dfee5499d9c476f558d9339736983764c80ec89480ccfe335696d->leave($__internal_d5eb491d7e6dfee5499d9c476f558d9339736983764c80ec89480ccfe335696d_prof);

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
        return array (  218 => 42,  201 => 37,  190 => 31,  181 => 28,  178 => 27,  174 => 26,  171 => 25,  162 => 22,  159 => 21,  155 => 20,  152 => 19,  143 => 18,  126 => 16,  108 => 9,  97 => 57,  88 => 51,  82 => 47,  76 => 43,  74 => 42,  68 => 38,  66 => 37,  60 => 33,  58 => 18,  55 => 17,  53 => 16,  43 => 9,  39 => 7,  37 => 6,  32 => 3,  30 => 2,);
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
