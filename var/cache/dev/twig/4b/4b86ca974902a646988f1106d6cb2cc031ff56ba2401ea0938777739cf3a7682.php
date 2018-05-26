<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_7aee3e2873244a45c8e012b7138856182195665261d6569b8e8615a924872ce0 extends Twig_Template
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
        $__internal_78d8ff962db5f4db0344f830684a3b3d394d4bb98a5e84a3791e00e89c514656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d8ff962db5f4db0344f830684a3b3d394d4bb98a5e84a3791e00e89c514656->enter($__internal_78d8ff962db5f4db0344f830684a3b3d394d4bb98a5e84a3791e00e89c514656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        $__internal_3a2dad31135d808250dfa73a5e614bf92dccd68d2ca171bdedad6230bc48644b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2dad31135d808250dfa73a5e614bf92dccd68d2ca171bdedad6230bc48644b->enter($__internal_3a2dad31135d808250dfa73a5e614bf92dccd68d2ca171bdedad6230bc48644b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_78d8ff962db5f4db0344f830684a3b3d394d4bb98a5e84a3791e00e89c514656->leave($__internal_78d8ff962db5f4db0344f830684a3b3d394d4bb98a5e84a3791e00e89c514656_prof);

        
        $__internal_3a2dad31135d808250dfa73a5e614bf92dccd68d2ca171bdedad6230bc48644b->leave($__internal_3a2dad31135d808250dfa73a5e614bf92dccd68d2ca171bdedad6230bc48644b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "EasyAdminBundle:default:field_image.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_image.html.twig");
    }
}
