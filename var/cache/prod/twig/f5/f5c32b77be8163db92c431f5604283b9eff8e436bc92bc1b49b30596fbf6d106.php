<?php

/* @Social/Profile/followers.html.twig */
class __TwigTemplate_18373f71906ac89e37bead47d178a3fd7dea7e53236dd0d741c57926b22be6d8 extends Twig_Template
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
        $__internal_272c7c9db46dd77f7c6fe95c7c1be28bbbe01b2abd11893bbd6ca43237f3db28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272c7c9db46dd77f7c6fe95c7c1be28bbbe01b2abd11893bbd6ca43237f3db28->enter($__internal_272c7c9db46dd77f7c6fe95c7c1be28bbbe01b2abd11893bbd6ca43237f3db28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Social/Profile/followers.html.twig"));

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
        
        $__internal_272c7c9db46dd77f7c6fe95c7c1be28bbbe01b2abd11893bbd6ca43237f3db28->leave($__internal_272c7c9db46dd77f7c6fe95c7c1be28bbbe01b2abd11893bbd6ca43237f3db28_prof);

    }

    public function getTemplateName()
    {
        return "@Social/Profile/followers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  68 => 21,  62 => 17,  57 => 15,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  32 => 6,  26 => 2,  22 => 1,);
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
{% endfor %}", "@Social/Profile/followers.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Profile/followers.html.twig");
    }
}
