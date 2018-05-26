<?php

/* EasyAdminBundle:default:field_json_array.html.twig */
class __TwigTemplate_27efa5d12e69c3e0c5db123b232df0949ca8664aaaa96db45131cae48ce98e6e extends Twig_Template
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
        $__internal_1394d0ef7014ea2c348e385e63a00684bf66fe295232ff27fe1a64201eac05fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1394d0ef7014ea2c348e385e63a00684bf66fe295232ff27fe1a64201eac05fb->enter($__internal_1394d0ef7014ea2c348e385e63a00684bf66fe295232ff27fe1a64201eac05fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_json_array.html.twig"));

        $__internal_e43fc1d4ef5260bb7c9d2b84d1e7c6ae06bfbeffee087c14f22fc63f58721753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43fc1d4ef5260bb7c9d2b84d1e7c6ae06bfbeffee087c14f22fc63f58721753->enter($__internal_e43fc1d4ef5260bb7c9d2b84d1e7c6ae06bfbeffee087c14f22fc63f58721753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_json_array.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 0)) {
                // line 3
                echo "        <ul>
            ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            } else {
                // line 9
                echo "        <div class=\"empty collection-empty\">
            ";
                // line 10
                echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "templates", array()), "label_empty", array()));
                echo "
        </div>
    ";
            }
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ", ")), "html", null, true);
            echo "
";
        }
        
        $__internal_1394d0ef7014ea2c348e385e63a00684bf66fe295232ff27fe1a64201eac05fb->leave($__internal_1394d0ef7014ea2c348e385e63a00684bf66fe295232ff27fe1a64201eac05fb_prof);

        
        $__internal_e43fc1d4ef5260bb7c9d2b84d1e7c6ae06bfbeffee087c14f22fc63f58721753->leave($__internal_e43fc1d4ef5260bb7c9d2b84d1e7c6ae06bfbeffee087c14f22fc63f58721753_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_json_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 10,  50 => 9,  46 => 7,  37 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {% if value|length > 0 %}
        <ul>
            {% for element in value %}
                <li>{{ element }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div class=\"empty collection-empty\">
            {{ include(entity_config.templates.label_empty) }}
        </div>
    {% endif %}
{% else %}
    {{ value|join(', ')|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_json_array.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_json_array.html.twig");
    }
}
