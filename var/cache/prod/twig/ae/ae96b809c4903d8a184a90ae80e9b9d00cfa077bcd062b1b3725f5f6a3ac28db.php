<?php

/* SocialBundle:Post:posts.html.twig */
class __TwigTemplate_d959951ce083a9254a27b5c550cff3168e19ab4f848f38b037827b75d4cdecb1 extends Twig_Template
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
        $__internal_5d766a8093f73c6e7a82c77c8cd2f838c6a8874c543c0687785267e204732f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d766a8093f73c6e7a82c77c8cd2f838c6a8874c543c0687785267e204732f00->enter($__internal_5d766a8093f73c6e7a82c77c8cd2f838c6a8874c543c0687785267e204732f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Post:posts.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")))) {
            // line 2
            echo "    ";
            if ( !(null === $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), (isset($context["deb"]) ? $context["deb"] : $this->getContext($context, "deb")), array(), "array"))) {
                // line 3
                echo "        ";
                if ((null === $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")), array(), "array"))) {
                    // line 4
                    echo "            ";
                    $context["fin"] = ((isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")) - 1);
                    // line 5
                    echo "        ";
                }
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((isset($context["deb"]) ? $context["deb"] : $this->getContext($context, "deb")), (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin"))));
                foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                    echo " ";
                    // line 7
                    echo "            <div class=\"col-xs-12 bottommargin-sm\">
                <div class=\"ipost clearfix\">
                    <div class=\"row clearfix\">
                        <div class=\"col-sm-offset-0\">
                            <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $context["n"], array(), "array"), "idUser", array()), "id", array()))), "html", null, true);
                    echo "\">
                                ";
                    // line 12
                    if ($this->getAttribute($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $context["n"], array(), "array"), "image", array())) {
                        // line 13
                        echo "                                    <img class=\"alignright img-circle img-thumbnail notopmargin nobottommargin fish\"
                                         src=\"";
                        // line 14
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $context["n"], array(), "array"), "image", array()))), "html", null, true);
                        echo "\" alt=\"Image du profile\"
                                         style=\"max-width: 74px;\">
                                ";
                    } else {
                        // line 17
                        echo "                                    <img class=\"alignright img-circle img-thumbnail notopmargin nobottommargin fish\"
                                         src=\"";
                        // line 18
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/icons/avatar.jpg"), "html", null, true);
                        echo "\" alt=\"Avatar\"
                                         style=\"max-width: 74px;\">
                                ";
                    }
                    // line 21
                    echo "                            </a>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"entry-image\">
                                <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "image", array()))), "html", null, true);
                    echo "\" data-lightbox=\"image\"><img
                                            class=\"image_fade fishes iiimg\"
                                            src=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "image", array()))), "html", null, true);
                    echo "\"
                                            alt=\"Image de la publication\"></a>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <div class=\"entry-title\">
                                <h3>
                                    <a href=\"#comments\">";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "titre", array()), "html", null, true);
                    echo "</a>
                                </h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li>
                                    <i class=\"icon-calendar3\"></i> ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "date", array())), "html", null, true);
                    echo "
                                </li>
                                <li><a href=\"#comments\"><i class=\"icon-comments\"></i>13</a></li>
                                ";
                    // line 42
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                        // line 43
                        echo "                                    <li>
                                        <a href=\"";
                        // line 44
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_modifier_post_fromWelcome", array("id" => $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "id", array()))), "html", null, true);
                        echo "\">Modifier</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_delete_post_fromWelcome", array("id" => $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "id", array()))), "html", null, true);
                        echo "\"
                                           onclick=\"return confirm('Voulez-vous vraiment supprimer cette publication ?')\">Supprimer</a>
                                    </li>
                                ";
                    }
                    // line 51
                    echo "                            </ul>
                            <div class=\"entry-content\">
                                <p>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "texte", array()), "html", null, true);
                    echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "    ";
            }
        }
        
        $__internal_5d766a8093f73c6e7a82c77c8cd2f838c6a8874c543c0687785267e204732f00->leave($__internal_5d766a8093f73c6e7a82c77c8cd2f838c6a8874c543c0687785267e204732f00_prof);

    }

    public function getTemplateName()
    {
        return "SocialBundle:Post:posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  129 => 53,  125 => 51,  118 => 47,  112 => 44,  109 => 43,  107 => 42,  101 => 39,  93 => 34,  83 => 27,  78 => 25,  72 => 21,  66 => 18,  63 => 17,  57 => 14,  54 => 13,  52 => 12,  48 => 11,  42 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if profiles is not empty %}
    {% if profiles[deb] is not null %}
        {% if profiles[fin] is null %}
            {% set fin = fin - 1 %}
        {% endif %}
        {% for n in deb..fin %} {#7atta el grand max (posts|length - 1)#}
            <div class=\"col-xs-12 bottommargin-sm\">
                <div class=\"ipost clearfix\">
                    <div class=\"row clearfix\">
                        <div class=\"col-sm-offset-0\">
                            <a href=\"{{ path('social_check_profile',{'id':profiles[n].idUser.id}) }}\">
                                {% if profiles[n].image %}
                                    <img class=\"alignright img-circle img-thumbnail notopmargin nobottommargin fish\"
                                         src=\"{{ asset('uploads/images/' ~ profiles[n].image) }}\" alt=\"Image du profile\"
                                         style=\"max-width: 74px;\">
                                {% else %}
                                    <img class=\"alignright img-circle img-thumbnail notopmargin nobottommargin fish\"
                                         src=\"{{ asset('Template/images/icons/avatar.jpg') }}\" alt=\"Avatar\"
                                         style=\"max-width: 74px;\">
                                {% endif %}
                            </a>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"entry-image\">
                                <a href=\"{{ asset('uploads/images/' ~ posts[n].image) }}\" data-lightbox=\"image\"><img
                                            class=\"image_fade fishes iiimg\"
                                            src=\"{{ asset('uploads/images/' ~ posts[n].image) }}\"
                                            alt=\"Image de la publication\"></a>
                            </div>
                        </div>
                        <div class=\"col-sm-8\">
                            <div class=\"entry-title\">
                                <h3>
                                    <a href=\"#comments\">{{ posts[n].titre }}</a>
                                </h3>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li>
                                    <i class=\"icon-calendar3\"></i> {{ posts[n].date|date }}
                                </li>
                                <li><a href=\"#comments\"><i class=\"icon-comments\"></i>13</a></li>
                                {% if posts[n].idUser.id == app.user.id %}
                                    <li>
                                        <a href=\"{{ path('social_modifier_post_fromWelcome',{'id':posts[n].id}) }}\">Modifier</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('social_delete_post_fromWelcome',{'id':posts[n].id}) }}\"
                                           onclick=\"return confirm('Voulez-vous vraiment supprimer cette publication ?')\">Supprimer</a>
                                    </li>
                                {% endif %}
                            </ul>
                            <div class=\"entry-content\">
                                <p>{{ posts[n].texte }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    {% endif %}
{% endif %}", "SocialBundle:Post:posts.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Post/posts.html.twig");
    }
}
