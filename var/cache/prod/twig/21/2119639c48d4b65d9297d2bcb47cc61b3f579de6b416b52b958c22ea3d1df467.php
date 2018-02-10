<?php

/* @SUser/index.html.twig */
class __TwigTemplate_d7191fb7b13fa475b30fa62ef1d28dfa1796ca2c079b96197f6c90bbcd8a4676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "@SUser/index.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5367346da32d6017c4d2abeedb6120dad9fd15fe4a69dffed2e24be9fb9b067a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5367346da32d6017c4d2abeedb6120dad9fd15fe4a69dffed2e24be9fb9b067a->enter($__internal_5367346da32d6017c4d2abeedb6120dad9fd15fe4a69dffed2e24be9fb9b067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SUser/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5367346da32d6017c4d2abeedb6120dad9fd15fe4a69dffed2e24be9fb9b067a->leave($__internal_5367346da32d6017c4d2abeedb6120dad9fd15fe4a69dffed2e24be9fb9b067a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_612eb1f4b5862a5ab813eea8ff166afd1112a6dab2d9bb03973fde80153d72ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612eb1f4b5862a5ab813eea8ff166afd1112a6dab2d9bb03973fde80153d72ff->enter($__internal_612eb1f4b5862a5ab813eea8ff166afd1112a6dab2d9bb03973fde80153d72ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
    <!-- Document Title
\t============================================= -->
    <title>Welcome to Souk Lemdina!</title>

";
        
        $__internal_612eb1f4b5862a5ab813eea8ff166afd1112a6dab2d9bb03973fde80153d72ff->leave($__internal_612eb1f4b5862a5ab813eea8ff166afd1112a6dab2d9bb03973fde80153d72ff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0792cc0e8744b3c4af2d2edd39ee7a0fa8ce9bf55656b83ca8f81f05ca69b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0792cc0e8744b3c4af2d2edd39ee7a0fa8ce9bf55656b83ca8f81f05ca69b6e->enter($__internal_f0792cc0e8744b3c4af2d2edd39ee7a0fa8ce9bf55656b83ca8f81f05ca69b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <section id=\"slider\" class=\"swiper_wrapper customjs with-header canvas-slider canvas-slider-grid clearfix\">

        <div class=\"swiper-container swiper-parent\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\" style=\"background: url('";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/1.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\">
                        <div class=\"overlay\">
                            <div class=\"text-overlay\">
                                <div class=\"text-overlay-title\">
                                    <h3>Accueil</h3>
                                </div>
                                <div class=\"text-overlay-meta\">
                                    <span>Illustrations, Graphics</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-container swiper-nested-2\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\" style=\"background: url('";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/2.jpeg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Trending</h3>
                                            </div>
                                            <div class=\"text-overlay-meta\">
                                                <span>Illustrations</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"swiper-slide\" style=\"background: url('";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/2.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Évènements</h3>
                                            </div>
                                            <div class=\"text-overlay-meta\">
                                                <span>Graphics, UI Elements</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\" style=\"background: url('";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/4.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                    <a href=\"#\">
                        <div class=\"overlay\">
                            <div class=\"text-overlay\">
                                <div class=\"text-overlay-title\">
                                    <h3>Ateliers</h3>
                                </div>
                                <div class=\"text-overlay-meta\">
                                    <span>Motion, Graphics</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-container swiper-nested-2\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\" style=\"background: url('";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/5.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Explore</h3>
                                            </div>
                                            <div class=\"text-overlay-meta\">
                                                <span>Graphics, Media</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"swiper-slide\" style=\"background: url('";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/gallerie/3.jpg"), "html", null, true);
        echo "') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Boutique En Ligne</h3>
                                            </div>
                                            <div class=\"text-overlay-meta\">
                                                <span>Video</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"section\">
                <div class=\"heading-block center nobottomborder nobottommargin\">
                    <h2>\"سوق المدينة يلمنا الكل\"</h2>
                </div>
            </div>

            <div class=\"container clearfix\">

                <div class=\"col_one_third nobottommargin col_last\" style=\"margin-left: 400px;\">

                    <h4>Que Disent nos Artisans?</h4>

                    <div class=\"fslider testimonial\" data-animation=\"slide\" data-arrows=\"false\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/3.jpg"), "html", null, true);
        echo "\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>والله مشروع هايل، حتى مالدولاب يزيد يدور.</p>
                                        <div class=\"testi-meta\">
                                            Hatem Abrouz
                                            <span>Artisan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/2.jpg"), "html", null, true);
        echo "\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>آفار هايل بصراحة. أعز ماعمل الواحد كي قيد، حتى مالحانوت وماعاش تحتاجو.</p>
                                        <div class=\"testi-meta\">
                                            Hamma Laabidi
                                            <span>Artisan amateur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/1.jpg"), "html", null, true);
        echo "\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>يعطيه الصحة لي خرج الزبدة متع الفكرة. وليت تقولش عليا نهار كامل في السوق.</p>
                                        <div class=\"testi-meta\">
                                            Slim Sahraoui
                                            <span>Bricoleur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/4.jpg"), "html", null, true);
        echo "\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>شعندي نقول؟ يعطيكم الصحة اما مازال ماكملش؟</p>
                                        <div class=\"testi-meta\">
                                            Salah Touzri
                                            <span>Utilisateur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/testimonials/5.jpg"), "html", null, true);
        echo "\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>مافما مايتقال عالخدمة. أما مش كلي مازال فارغ مالعباد؟</p>
                                        <div class=\"testi-meta\">
                                            Mounir Ben Romdhane
                                            <span>Bijoutier</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

";
        
        $__internal_f0792cc0e8744b3c4af2d2edd39ee7a0fa8ce9bf55656b83ca8f81f05ca69b6e->leave($__internal_f0792cc0e8744b3c4af2d2edd39ee7a0fa8ce9bf55656b83ca8f81f05ca69b6e_prof);

    }

    public function getTemplateName()
    {
        return "@SUser/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 190,  257 => 178,  242 => 166,  227 => 154,  212 => 142,  163 => 96,  146 => 82,  126 => 65,  106 => 48,  89 => 34,  70 => 18,  66 => 17,  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SUserBundle::layout.html.twig' %}

{% block head %}

    <!-- Document Title
\t============================================= -->
    <title>Welcome to Souk Lemdina!</title>

{% endblock %}

{% block body %}

    <section id=\"slider\" class=\"swiper_wrapper customjs with-header canvas-slider canvas-slider-grid clearfix\">

        <div class=\"swiper-container swiper-parent\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\" style=\"background: url('{{ asset('Template/images/gallerie/1.jpg') }}') center center; background-size:cover;\">
                    <a href=\"{{ path('fos_visitor_home') }}\">
                        <div class=\"overlay\">
                            <div class=\"text-overlay\">
                                <div class=\"text-overlay-title\">
                                    <h3>Accueil</h3>
                                </div>
                                <div class=\"text-overlay-meta\">
                                    <span>Illustrations, Graphics</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-container swiper-nested-2\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\" style=\"background: url('{{ asset('Template/images/gallerie/2.jpeg') }}') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Trending</h3>
                                            </div>
                                            <div class=\"text-overlay-meta\">
                                                <span>Illustrations</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"swiper-slide\" style=\"background: url('{{ asset('Template/images/gallerie/2.jpg') }}') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Évènements</h3>
                                            </div>
                                            <div class=\"text-overlay-meta\">
                                                <span>Graphics, UI Elements</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\" style=\"background: url('{{ asset('Template/images/gallerie/4.jpg') }}') center center; background-size:cover;\">
                    <a href=\"#\">
                        <div class=\"overlay\">
                            <div class=\"text-overlay\">
                                <div class=\"text-overlay-title\">
                                    <h3>Ateliers</h3>
                                </div>
                                <div class=\"text-overlay-meta\">
                                    <span>Motion, Graphics</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-container swiper-nested-2\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\" style=\"background: url('{{ asset('Template/images/gallerie/5.jpg') }}') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Explore</h3>
                                            </div>
                                            <div class=\"text-overlay-meta\">
                                                <span>Graphics, Media</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"swiper-slide\" style=\"background: url('{{ asset('Template/images/gallerie/3.jpg') }}') center center; background-size:cover;\">
                                <a href=\"#\">
                                    <div class=\"overlay\">
                                        <div class=\"text-overlay\">
                                            <div class=\"text-overlay-title\">
                                                <h3>Boutique En Ligne</h3>
                                            </div>
                                            <div class=\"text-overlay-meta\">
                                                <span>Video</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"section\">
                <div class=\"heading-block center nobottomborder nobottommargin\">
                    <h2>\"سوق المدينة يلمنا الكل\"</h2>
                </div>
            </div>

            <div class=\"container clearfix\">

                <div class=\"col_one_third nobottommargin col_last\" style=\"margin-left: 400px;\">

                    <h4>Que Disent nos Artisans?</h4>

                    <div class=\"fslider testimonial\" data-animation=\"slide\" data-arrows=\"false\">
                        <div class=\"flexslider\">
                            <div class=\"slider-wrap\">
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/3.jpg') }}\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>والله مشروع هايل، حتى مالدولاب يزيد يدور.</p>
                                        <div class=\"testi-meta\">
                                            Hatem Abrouz
                                            <span>Artisan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/2.jpg') }}\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>آفار هايل بصراحة. أعز ماعمل الواحد كي قيد، حتى مالحانوت وماعاش تحتاجو.</p>
                                        <div class=\"testi-meta\">
                                            Hamma Laabidi
                                            <span>Artisan amateur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/1.jpg') }}\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>يعطيه الصحة لي خرج الزبدة متع الفكرة. وليت تقولش عليا نهار كامل في السوق.</p>
                                        <div class=\"testi-meta\">
                                            Slim Sahraoui
                                            <span>Bricoleur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/4.jpg') }}\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>شعندي نقول؟ يعطيكم الصحة اما مازال ماكملش؟</p>
                                        <div class=\"testi-meta\">
                                            Salah Touzri
                                            <span>Utilisateur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"slide\">
                                    <div class=\"testi-image\">
                                        <a href=\"#\"><img src=\"{{ asset('Template/images/testimonials/5.jpg') }}\" alt=\"Customer Testimonails\"></a>
                                    </div>
                                    <div class=\"testi-content\">
                                        <p>مافما مايتقال عالخدمة. أما مش كلي مازال فارغ مالعباد؟</p>
                                        <div class=\"testi-meta\">
                                            Mounir Ben Romdhane
                                            <span>Bijoutier</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

{% endblock %}", "@SUser/index.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\src\\SUserBundle\\Resources\\views\\index.html.twig");
    }
}
