<?php

/* StarRatingBundle:Display:ratingDisplay.html.twig */
class __TwigTemplate_033cebf9319f7e9e8e91018e00f4a34f2ad552ac046c260ed206c07f92dd1cd8 extends Twig_Template
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
        $__internal_1bcead76d6105113ae4ce7a60705970476f65600950128894bcd41871852f41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcead76d6105113ae4ce7a60705970476f65600950128894bcd41871852f41b->enter($__internal_1bcead76d6105113ae4ce7a60705970476f65600950128894bcd41871852f41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StarRatingBundle:Display:ratingDisplay.html.twig"));

        // line 1
        echo "<div class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"";
            if (($context["i"] <= (isset($context["stars"]) ? $context["stars"] : $this->getContext($context, "stars")))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["starSize"]) ? $context["starSize"] : $this->getContext($context, "starSize")), "html", null, true);
            echo "\"></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
        
        $__internal_1bcead76d6105113ae4ce7a60705970476f65600950128894bcd41871852f41b->leave($__internal_1bcead76d6105113ae4ce7a60705970476f65600950128894bcd41871852f41b_prof);

    }

    public function getTemplateName()
    {
        return "StarRatingBundle:Display:ratingDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rating\">
  {% for i in 1..max %}
    <div class=\"{% if i <= stars %}star-full{% else %}star-empty{% endif %} {{ starSize }}\"></div>
  {% endfor %}
</div>", "StarRatingBundle:Display:ratingDisplay.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views/Display/ratingDisplay.html.twig");
    }
}
