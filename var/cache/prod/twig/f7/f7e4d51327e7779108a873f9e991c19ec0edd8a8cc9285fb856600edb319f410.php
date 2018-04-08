<?php

/* SocialBundle:Post:posts.html.twig */
class __TwigTemplate_cd7c771df9a38ebd5ddb6a265436ae5468314b00ab2d1e75833122226711b3be extends Twig_Template
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
        $__internal_86416db3b049ac36b06ca1b9ef48fc705cdcbf5a513745787aa56b39f0b60a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86416db3b049ac36b06ca1b9ef48fc705cdcbf5a513745787aa56b39f0b60a61->enter($__internal_86416db3b049ac36b06ca1b9ef48fc705cdcbf5a513745787aa56b39f0b60a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Post:posts.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["deb"]) ? $context["deb"] : $this->getContext($context, "deb")), (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin"))));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo " ";
            // line 2
            echo "    <br>
    <div class=\"col-xs-12 bottommargin-sm\">
        <div class=\"ipost clearfix\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-offset-0\">
                    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $context["n"], array(), "array"), "idUser", array()), "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 8
            if ($this->getAttribute($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $context["n"], array(), "array"), "image", array())) {
                // line 9
                echo "                            <img class=\"alignright img-circle img-thumbnail notopmargin nobottommargin fish\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $context["n"], array(), "array"), "image", array()))), "html", null, true);
                echo "\" alt=\"Image du profile\" style=\"max-width: 74px;\">
                        ";
            } else {
                // line 11
                echo "                            <img class=\"alignright img-circle img-thumbnail notopmargin nobottommargin fish\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/icons/avatar.jpg"), "html", null, true);
                echo "\" alt=\"Avatar\" style=\"max-width: 74px;\">
                        ";
            }
            // line 13
            echo "                    </a>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"entry-image cccontainer\">
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "image", array()))), "html", null, true);
            echo "\" data-lightbox=\"image\" ><img class=\"image_fade fishes iiimg\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "image", array()))), "html", null, true);
            echo "\" alt=\"Image de la publication\"></a>
                    </div>
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"entry-title\">
                        <h3>
                            <a href=\"#comments\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "titre", array()), "html", null, true);
            echo "</a>
                        </h3>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li>
                            <i class=\"icon-calendar3\"></i> ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "date", array())), "html", null, true);
            echo "
                        </li>
                        <li><a href=\"#comments\"><i class=\"icon-comments\"></i>13</a></li>
                        ";
            // line 31
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 32
                echo "                            <li>
                                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_modifier_post_fromWelcome", array("id" => $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_delete_post_fromWelcome", array("id" => $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "id", array()))), "html", null, true);
                echo "\"
                                   onclick=\"return confirm('Voulez-vous vraiment supprimer cette publication ?')\">Supprimer</a>
                            </li>
                        ";
            }
            // line 40
            echo "                    </ul>
                    <div class=\"entry-content\">
                        <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), $context["n"], array(), "array"), "texte", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_86416db3b049ac36b06ca1b9ef48fc705cdcbf5a513745787aa56b39f0b60a61->leave($__internal_86416db3b049ac36b06ca1b9ef48fc705cdcbf5a513745787aa56b39f0b60a61_prof);

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
        return array (  105 => 42,  101 => 40,  94 => 36,  88 => 33,  85 => 32,  83 => 31,  77 => 28,  69 => 23,  58 => 17,  52 => 13,  46 => 11,  40 => 9,  38 => 8,  34 => 7,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for n in deb..fin %} {#7atta el grand max (posts|length - 1)#}
    <br>
    <div class=\"col-xs-12 bottommargin-sm\">
        <div class=\"ipost clearfix\">
            <div class=\"row clearfix\">
                <div class=\"col-sm-offset-0\">
                    <a href=\"{{ path('social_check_profile',{'id':profiles[n].idUser.id}) }}\">
                        {% if profiles[n].image %}
                            <img class=\"alignright img-circle img-thumbnail notopmargin nobottommargin fish\" src=\"{{ asset('uploads/images/' ~ profiles[n].image) }}\" alt=\"Image du profile\" style=\"max-width: 74px;\">
                        {% else %}
                            <img class=\"alignright img-circle img-thumbnail notopmargin nobottommargin fish\" src=\"{{ asset('Template/images/icons/avatar.jpg') }}\" alt=\"Avatar\" style=\"max-width: 74px;\">
                        {% endif %}
                    </a>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"entry-image cccontainer\">
                        <a href=\"{{ asset('uploads/images/' ~ posts[n].image) }}\" data-lightbox=\"image\" ><img class=\"image_fade fishes iiimg\" src=\"{{ asset('uploads/images/' ~ posts[n].image) }}\" alt=\"Image de la publication\"></a>
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
    <br>
{% endfor %}
", "SocialBundle:Post:posts.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Post/posts.html.twig");
    }
}
