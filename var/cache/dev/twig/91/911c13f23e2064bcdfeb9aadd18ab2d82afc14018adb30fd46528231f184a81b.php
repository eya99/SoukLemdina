<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_193f4c5dd258f3fde9a5dbdf1363b203e2573f43c95f810f41549c6ae9bab47a extends Twig_Template
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
        $__internal_7d5c27a92d7ce481f2b4bf2cb62bcc3477d5139de6855576bc1b2d89e8041799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5c27a92d7ce481f2b4bf2cb62bcc3477d5139de6855576bc1b2d89e8041799->enter($__internal_7d5c27a92d7ce481f2b4bf2cb62bcc3477d5139de6855576bc1b2d89e8041799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_1bab5a538cba31c8b2dbef7cadc09a71d1519a77ca6bfb8fcc3cdbc0e8f24fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bab5a538cba31c8b2dbef7cadc09a71d1519a77ca6bfb8fcc3cdbc0e8f24fa5->enter($__internal_1bab5a538cba31c8b2dbef7cadc09a71d1519a77ca6bfb8fcc3cdbc0e8f24fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        
        $__internal_7d5c27a92d7ce481f2b4bf2cb62bcc3477d5139de6855576bc1b2d89e8041799->leave($__internal_7d5c27a92d7ce481f2b4bf2cb62bcc3477d5139de6855576bc1b2d89e8041799_prof);

        
        $__internal_1bab5a538cba31c8b2dbef7cadc09a71d1519a77ca6bfb8fcc3cdbc0e8f24fa5->leave($__internal_1bab5a538cba31c8b2dbef7cadc09a71d1519a77ca6bfb8fcc3cdbc0e8f24fa5_prof);

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
", "FOSUserBundle:Group:list_content.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Group/list_content.html.twig");
    }
}
