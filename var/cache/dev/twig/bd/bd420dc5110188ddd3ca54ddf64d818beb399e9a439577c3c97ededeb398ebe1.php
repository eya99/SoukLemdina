<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_85a00a1a76e1d5b9d286464550e24f722e8f670fb4c84b63a5ecc488e468d711 extends Twig_Template
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
        $__internal_0058a28b624d0a6b2316e8c42b526b667ce3d52c4afd2d8c3c5d63b5f299f55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0058a28b624d0a6b2316e8c42b526b667ce3d52c4afd2d8c3c5d63b5f299f55c->enter($__internal_0058a28b624d0a6b2316e8c42b526b667ce3d52c4afd2d8c3c5d63b5f299f55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_4bc1bbe3194d921d67949f32eca303794a7072532bb3e6b6a107e01ed9e99f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc1bbe3194d921d67949f32eca303794a7072532bb3e6b6a107e01ed9e99f04->enter($__internal_4bc1bbe3194d921d67949f32eca303794a7072532bb3e6b6a107e01ed9e99f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_0058a28b624d0a6b2316e8c42b526b667ce3d52c4afd2d8c3c5d63b5f299f55c->leave($__internal_0058a28b624d0a6b2316e8c42b526b667ce3d52c4afd2d8c3c5d63b5f299f55c_prof);

        
        $__internal_4bc1bbe3194d921d67949f32eca303794a7072532bb3e6b6a107e01ed9e99f04->leave($__internal_4bc1bbe3194d921d67949f32eca303794a7072532bb3e6b6a107e01ed9e99f04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
