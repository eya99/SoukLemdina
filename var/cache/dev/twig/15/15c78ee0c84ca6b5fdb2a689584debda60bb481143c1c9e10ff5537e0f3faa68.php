<?php

/* SocialBundle:Profile:followers.html.twig */
class __TwigTemplate_f76ac9d987c423bf940922097a7c5d0ede3613a2c84d74c098056db9048f2c21 extends Twig_Template
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
        $__internal_06baef047659f39a76d7a1e3dddc3425cea927a46f9af473c8f3f674606c02d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06baef047659f39a76d7a1e3dddc3425cea927a46f9af473c8f3f674606c02d3->enter($__internal_06baef047659f39a76d7a1e3dddc3425cea927a46f9af473c8f3f674606c02d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:followers.html.twig"));

        $__internal_fe05d8f4bd075dfdcdbe44f480eaa2fe26fefa75afa07f6a182948edc24bd945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe05d8f4bd075dfdcdbe44f480eaa2fe26fefa75afa07f6a182948edc24bd945->enter($__internal_fe05d8f4bd075dfdcdbe44f480eaa2fe26fefa75afa07f6a182948edc24bd945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:followers.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["followers"]) ? $context["followers"] : $this->getContext($context, "followers")));
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            // line 2
            echo "    <div class=\"topmargin-sm\">
        <div class=\"col-md-3 col-sm-6 bottommargin\">
            <div class=\"team\">
                <div class=\"team-image cccontainer\">
                    <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "idUser", array()), "id", array()))), "html", null, true);
            echo "\">

                        ";
            // line 8
            if ($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "image", array())) {
                // line 9
                echo "                            <img class=\"img-circle iiimg\"
                                 src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "image", array()))), "html", null, true);
                echo "\"
                                 alt=\"";
                // line 11
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "idUser", array()), "lastname", array())), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 13
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/icons/avatar.jpg"), "html", null, true);
                echo "\"
                                 class=\"img-circle iiimg\"
                                 alt=\"";
                // line 15
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "idUser", array()), "lastname", array())), "html", null, true);
                echo "\" >
                        ";
            }
            // line 17
            echo "                    </a>
                </div>
                <div class=\"team-desc\">
                    <div class=\"team-title\">
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "idUser", array()), "id", array()))), "html", null, true);
            echo "\">
                            <h4>";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["follower"], "idProfileFollower", array()), "idUser", array()), "lastname", array())), "html", null, true);
            echo "</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_06baef047659f39a76d7a1e3dddc3425cea927a46f9af473c8f3f674606c02d3->leave($__internal_06baef047659f39a76d7a1e3dddc3425cea927a46f9af473c8f3f674606c02d3_prof);

        
        $__internal_fe05d8f4bd075dfdcdbe44f480eaa2fe26fefa75afa07f6a182948edc24bd945->leave($__internal_fe05d8f4bd075dfdcdbe44f480eaa2fe26fefa75afa07f6a182948edc24bd945_prof);

    }

    public function getTemplateName()
    {
        return "SocialBundle:Profile:followers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  71 => 21,  65 => 17,  60 => 15,  54 => 13,  49 => 11,  45 => 10,  42 => 9,  40 => 8,  35 => 6,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for follower in followers %}
    <div class=\"topmargin-sm\">
        <div class=\"col-md-3 col-sm-6 bottommargin\">
            <div class=\"team\">
                <div class=\"team-image cccontainer\">
                    <a href=\"{{ path('social_check_profile',{'id':follower.idProfileFollower.idUser.id}) }}\">

                        {% if follower.idProfileFollower.image %}
                            <img class=\"img-circle iiimg\"
                                 src=\"{{ asset('uploads/images/'~follower.idProfileFollower.image) }}\"
                                 alt=\"{{ follower.idProfileFollower.idUser.firstname ~ ' ' ~ follower.idProfileFollower.idUser.lastname }}\">
                        {% else %}
                            <img src=\"{{ asset('Template/images/icons/avatar.jpg') }}\"
                                 class=\"img-circle iiimg\"
                                 alt=\"{{ follower.idProfileFollower.idUser.firstname ~ ' ' ~ follower.idProfileFollower.idUser.lastname }}\" >
                        {% endif %}
                    </a>
                </div>
                <div class=\"team-desc\">
                    <div class=\"team-title\">
                        <a href=\"{{ path('social_check_profile',{'id':follower.idProfileFollower.idUser.id}) }}\">
                            <h4>{{ follower.idProfileFollower.idUser.firstname ~ ' ' ~ follower.idProfileFollower.idUser.lastname }}</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
{% endfor %}", "SocialBundle:Profile:followers.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Profile/followers.html.twig");
    }
}
