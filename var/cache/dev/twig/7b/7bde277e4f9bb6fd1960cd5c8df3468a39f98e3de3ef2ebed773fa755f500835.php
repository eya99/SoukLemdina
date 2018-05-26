<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_e8c81f945f3ba7e0b679d5c234b30c546ab5eef37ada1a4dfcba30d30c3a8b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c02f6f69a5802cdf2d4baf8af76084729429cab340238f52b34d1e374bfb087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c02f6f69a5802cdf2d4baf8af76084729429cab340238f52b34d1e374bfb087->enter($__internal_0c02f6f69a5802cdf2d4baf8af76084729429cab340238f52b34d1e374bfb087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_9aef13a5cb27848aa482ee39f1442182440be90d6ca6d5944174fda16416b06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aef13a5cb27848aa482ee39f1442182440be90d6ca6d5944174fda16416b06a->enter($__internal_9aef13a5cb27848aa482ee39f1442182440be90d6ca6d5944174fda16416b06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_0c02f6f69a5802cdf2d4baf8af76084729429cab340238f52b34d1e374bfb087->leave($__internal_0c02f6f69a5802cdf2d4baf8af76084729429cab340238f52b34d1e374bfb087_prof);

        
        $__internal_9aef13a5cb27848aa482ee39f1442182440be90d6ca6d5944174fda16416b06a->leave($__internal_9aef13a5cb27848aa482ee39f1442182440be90d6ca6d5944174fda16416b06a_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1f72d651715b6f056948f784ddd3f9468cf5f1709e410325be57188061c1ae53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f72d651715b6f056948f784ddd3f9468cf5f1709e410325be57188061c1ae53->enter($__internal_1f72d651715b6f056948f784ddd3f9468cf5f1709e410325be57188061c1ae53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_a0ffe64a674e9c133b21cc3eb74bc2a02b11ba52f0b71e938491c1e2d3102285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ffe64a674e9c133b21cc3eb74bc2a02b11ba52f0b71e938491c1e2d3102285->enter($__internal_a0ffe64a674e9c133b21cc3eb74bc2a02b11ba52f0b71e938491c1e2d3102285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_a0ffe64a674e9c133b21cc3eb74bc2a02b11ba52f0b71e938491c1e2d3102285->leave($__internal_a0ffe64a674e9c133b21cc3eb74bc2a02b11ba52f0b71e938491c1e2d3102285_prof);

        
        $__internal_1f72d651715b6f056948f784ddd3f9468cf5f1709e410325be57188061c1ae53->leave($__internal_1f72d651715b6f056948f784ddd3f9468cf5f1709e410325be57188061c1ae53_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_f593faf0b276a5d4bffa49437ed8297e179f61d56f2d8ae65eef505a0aa9c5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f593faf0b276a5d4bffa49437ed8297e179f61d56f2d8ae65eef505a0aa9c5fa->enter($__internal_f593faf0b276a5d4bffa49437ed8297e179f61d56f2d8ae65eef505a0aa9c5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_bf07965e280fd8b54ccc994fc7691f24d60662a0d2d1470f58737cc10997f9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf07965e280fd8b54ccc994fc7691f24d60662a0d2d1470f58737cc10997f9df->enter($__internal_bf07965e280fd8b54ccc994fc7691f24d60662a0d2d1470f58737cc10997f9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_bf07965e280fd8b54ccc994fc7691f24d60662a0d2d1470f58737cc10997f9df->leave($__internal_bf07965e280fd8b54ccc994fc7691f24d60662a0d2d1470f58737cc10997f9df_prof);

        
        $__internal_f593faf0b276a5d4bffa49437ed8297e179f61d56f2d8ae65eef505a0aa9c5fa->leave($__internal_f593faf0b276a5d4bffa49437ed8297e179f61d56f2d8ae65eef505a0aa9c5fa_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_3eb8736c4b31ea153286125697b2f27d5693bdea192047165661dc3b83eddadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb8736c4b31ea153286125697b2f27d5693bdea192047165661dc3b83eddadd->enter($__internal_3eb8736c4b31ea153286125697b2f27d5693bdea192047165661dc3b83eddadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_a7a0247f60c7bc861f284ef32bf8f2cc77ad8803ecf71da7ee301cb5bfec2ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a0247f60c7bc861f284ef32bf8f2cc77ad8803ecf71da7ee301cb5bfec2ece->enter($__internal_a7a0247f60c7bc861f284ef32bf8f2cc77ad8803ecf71da7ee301cb5bfec2ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a7a0247f60c7bc861f284ef32bf8f2cc77ad8803ecf71da7ee301cb5bfec2ece->leave($__internal_a7a0247f60c7bc861f284ef32bf8f2cc77ad8803ecf71da7ee301cb5bfec2ece_prof);

        
        $__internal_3eb8736c4b31ea153286125697b2f27d5693bdea192047165661dc3b83eddadd->leave($__internal_3eb8736c4b31ea153286125697b2f27d5693bdea192047165661dc3b83eddadd_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_fc18069d3c7ad6d756f8b4cc07092b03bc827d7fb90a5f445f8e743ba50f5283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc18069d3c7ad6d756f8b4cc07092b03bc827d7fb90a5f445f8e743ba50f5283->enter($__internal_fc18069d3c7ad6d756f8b4cc07092b03bc827d7fb90a5f445f8e743ba50f5283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_eed2222bec57540bd58878e650fdf361c9a12462fb83e96faa22eb202dc7a049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed2222bec57540bd58878e650fdf361c9a12462fb83e96faa22eb202dc7a049->enter($__internal_eed2222bec57540bd58878e650fdf361c9a12462fb83e96faa22eb202dc7a049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_eed2222bec57540bd58878e650fdf361c9a12462fb83e96faa22eb202dc7a049->leave($__internal_eed2222bec57540bd58878e650fdf361c9a12462fb83e96faa22eb202dc7a049_prof);

        
        $__internal_fc18069d3c7ad6d756f8b4cc07092b03bc827d7fb90a5f445f8e743ba50f5283->leave($__internal_fc18069d3c7ad6d756f8b4cc07092b03bc827d7fb90a5f445f8e743ba50f5283_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_dd7349bb70421a8239305ed37facf2842c5812b39600455b2d077ea796737509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7349bb70421a8239305ed37facf2842c5812b39600455b2d077ea796737509->enter($__internal_dd7349bb70421a8239305ed37facf2842c5812b39600455b2d077ea796737509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_97c4938341de637392057699516fbdf0e18757d8ce3c44510177a8a8ce7b035b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c4938341de637392057699516fbdf0e18757d8ce3c44510177a8a8ce7b035b->enter($__internal_97c4938341de637392057699516fbdf0e18757d8ce3c44510177a8a8ce7b035b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_97c4938341de637392057699516fbdf0e18757d8ce3c44510177a8a8ce7b035b->leave($__internal_97c4938341de637392057699516fbdf0e18757d8ce3c44510177a8a8ce7b035b_prof);

        
        $__internal_dd7349bb70421a8239305ed37facf2842c5812b39600455b2d077ea796737509->leave($__internal_dd7349bb70421a8239305ed37facf2842c5812b39600455b2d077ea796737509_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f8489284e47e929505fe96fb751bf73a7a57656dcb5fc0a4c8272fbf11595ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8489284e47e929505fe96fb751bf73a7a57656dcb5fc0a4c8272fbf11595ca->enter($__internal_7f8489284e47e929505fe96fb751bf73a7a57656dcb5fc0a4c8272fbf11595ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abb0c45a5c2e1a525e786a2ee5d475958fc788dd9812fb6a2fabbaa19e6163d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb0c45a5c2e1a525e786a2ee5d475958fc788dd9812fb6a2fabbaa19e6163d8->enter($__internal_abb0c45a5c2e1a525e786a2ee5d475958fc788dd9812fb6a2fabbaa19e6163d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_abb0c45a5c2e1a525e786a2ee5d475958fc788dd9812fb6a2fabbaa19e6163d8->leave($__internal_abb0c45a5c2e1a525e786a2ee5d475958fc788dd9812fb6a2fabbaa19e6163d8_prof);

        
        $__internal_7f8489284e47e929505fe96fb751bf73a7a57656dcb5fc0a4c8272fbf11595ca->leave($__internal_7f8489284e47e929505fe96fb751bf73a7a57656dcb5fc0a4c8272fbf11595ca_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8814ff3239ba1510b3be067361bb30f5476d1d88ad852fedc9a94366238dd1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8814ff3239ba1510b3be067361bb30f5476d1d88ad852fedc9a94366238dd1d5->enter($__internal_8814ff3239ba1510b3be067361bb30f5476d1d88ad852fedc9a94366238dd1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_96d7544751f4ce5b12dd8e2525b14cc2c7f427f3bac1e2db13931bfa6e581fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d7544751f4ce5b12dd8e2525b14cc2c7f427f3bac1e2db13931bfa6e581fb2->enter($__internal_96d7544751f4ce5b12dd8e2525b14cc2c7f427f3bac1e2db13931bfa6e581fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_96d7544751f4ce5b12dd8e2525b14cc2c7f427f3bac1e2db13931bfa6e581fb2->leave($__internal_96d7544751f4ce5b12dd8e2525b14cc2c7f427f3bac1e2db13931bfa6e581fb2_prof);

        
        $__internal_8814ff3239ba1510b3be067361bb30f5476d1d88ad852fedc9a94366238dd1d5->leave($__internal_8814ff3239ba1510b3be067361bb30f5476d1d88ad852fedc9a94366238dd1d5_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b376de9ed566b2b78028693699674eb06d5eebb29ca24499e4f2660b31f54ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b376de9ed566b2b78028693699674eb06d5eebb29ca24499e4f2660b31f54ccc->enter($__internal_b376de9ed566b2b78028693699674eb06d5eebb29ca24499e4f2660b31f54ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_baea3da360030aeeae8a3dd80925e57308c024b10ef5b4bdefe88350b8e481b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baea3da360030aeeae8a3dd80925e57308c024b10ef5b4bdefe88350b8e481b8->enter($__internal_baea3da360030aeeae8a3dd80925e57308c024b10ef5b4bdefe88350b8e481b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_baea3da360030aeeae8a3dd80925e57308c024b10ef5b4bdefe88350b8e481b8->leave($__internal_baea3da360030aeeae8a3dd80925e57308c024b10ef5b4bdefe88350b8e481b8_prof);

        
        $__internal_b376de9ed566b2b78028693699674eb06d5eebb29ca24499e4f2660b31f54ccc->leave($__internal_b376de9ed566b2b78028693699674eb06d5eebb29ca24499e4f2660b31f54ccc_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_156c5a1e1416c4751cbc6fd7eaa0ff1cfb5498f23197b6d002f58347fc89c84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156c5a1e1416c4751cbc6fd7eaa0ff1cfb5498f23197b6d002f58347fc89c84a->enter($__internal_156c5a1e1416c4751cbc6fd7eaa0ff1cfb5498f23197b6d002f58347fc89c84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_d1b0b2ec2cf5c3dd008bea07524902db1d38f9f5a36ed5bb19bbfd895690bbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b0b2ec2cf5c3dd008bea07524902db1d38f9f5a36ed5bb19bbfd895690bbc0->enter($__internal_d1b0b2ec2cf5c3dd008bea07524902db1d38f9f5a36ed5bb19bbfd895690bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_d1b0b2ec2cf5c3dd008bea07524902db1d38f9f5a36ed5bb19bbfd895690bbc0->leave($__internal_d1b0b2ec2cf5c3dd008bea07524902db1d38f9f5a36ed5bb19bbfd895690bbc0_prof);

        
        $__internal_156c5a1e1416c4751cbc6fd7eaa0ff1cfb5498f23197b6d002f58347fc89c84a->leave($__internal_156c5a1e1416c4751cbc6fd7eaa0ff1cfb5498f23197b6d002f58347fc89c84a_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_a2b6934f5d4b08ea66f0b14783ee356e55f818b263ea8b21142472b8c43dda47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b6934f5d4b08ea66f0b14783ee356e55f818b263ea8b21142472b8c43dda47->enter($__internal_a2b6934f5d4b08ea66f0b14783ee356e55f818b263ea8b21142472b8c43dda47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_997341136671096e91367f40bd4967b0edf2de693366f1ecbf1dca65068554ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997341136671096e91367f40bd4967b0edf2de693366f1ecbf1dca65068554ca->enter($__internal_997341136671096e91367f40bd4967b0edf2de693366f1ecbf1dca65068554ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_997341136671096e91367f40bd4967b0edf2de693366f1ecbf1dca65068554ca->leave($__internal_997341136671096e91367f40bd4967b0edf2de693366f1ecbf1dca65068554ca_prof);

        
        $__internal_a2b6934f5d4b08ea66f0b14783ee356e55f818b263ea8b21142472b8c43dda47->leave($__internal_a2b6934f5d4b08ea66f0b14783ee356e55f818b263ea8b21142472b8c43dda47_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_7abdd15084a30cdfd0cf4e47d03f48936b4817771bd8a4291d177b2cf337f83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abdd15084a30cdfd0cf4e47d03f48936b4817771bd8a4291d177b2cf337f83b->enter($__internal_7abdd15084a30cdfd0cf4e47d03f48936b4817771bd8a4291d177b2cf337f83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_5c3c649687fa67e19a22f0ebc39b68e8b865f68fdea8aa0966bd011f366dd417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3c649687fa67e19a22f0ebc39b68e8b865f68fdea8aa0966bd011f366dd417->enter($__internal_5c3c649687fa67e19a22f0ebc39b68e8b865f68fdea8aa0966bd011f366dd417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_5c3c649687fa67e19a22f0ebc39b68e8b865f68fdea8aa0966bd011f366dd417->leave($__internal_5c3c649687fa67e19a22f0ebc39b68e8b865f68fdea8aa0966bd011f366dd417_prof);

        
        $__internal_7abdd15084a30cdfd0cf4e47d03f48936b4817771bd8a4291d177b2cf337f83b->leave($__internal_7abdd15084a30cdfd0cf4e47d03f48936b4817771bd8a4291d177b2cf337f83b_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_147e1a880f4bbd5aeb64314311812f137f5bb337f9c15dfcaaa262448e7a065d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147e1a880f4bbd5aeb64314311812f137f5bb337f9c15dfcaaa262448e7a065d->enter($__internal_147e1a880f4bbd5aeb64314311812f137f5bb337f9c15dfcaaa262448e7a065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_17e6790543139bde7df3ced8176825081e58c621c79b56f184a975717189f058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e6790543139bde7df3ced8176825081e58c621c79b56f184a975717189f058->enter($__internal_17e6790543139bde7df3ced8176825081e58c621c79b56f184a975717189f058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_17e6790543139bde7df3ced8176825081e58c621c79b56f184a975717189f058->leave($__internal_17e6790543139bde7df3ced8176825081e58c621c79b56f184a975717189f058_prof);

        
        $__internal_147e1a880f4bbd5aeb64314311812f137f5bb337f9c15dfcaaa262448e7a065d->leave($__internal_147e1a880f4bbd5aeb64314311812f137f5bb337f9c15dfcaaa262448e7a065d_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_93d767fb55e4cd0b2023523e1854518c5f63d7c4a3e523a01d24c33e463de1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d767fb55e4cd0b2023523e1854518c5f63d7c4a3e523a01d24c33e463de1fc->enter($__internal_93d767fb55e4cd0b2023523e1854518c5f63d7c4a3e523a01d24c33e463de1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_c310538a807fdb476c4c0e27bff993ce41f60b36def8f42d7288a47006d8cf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c310538a807fdb476c4c0e27bff993ce41f60b36def8f42d7288a47006d8cf8c->enter($__internal_c310538a807fdb476c4c0e27bff993ce41f60b36def8f42d7288a47006d8cf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_c310538a807fdb476c4c0e27bff993ce41f60b36def8f42d7288a47006d8cf8c->leave($__internal_c310538a807fdb476c4c0e27bff993ce41f60b36def8f42d7288a47006d8cf8c_prof);

        
        $__internal_93d767fb55e4cd0b2023523e1854518c5f63d7c4a3e523a01d24c33e463de1fc->leave($__internal_93d767fb55e4cd0b2023523e1854518c5f63d7c4a3e523a01d24c33e463de1fc_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_2c59167d0c1d87b8d5ff0dbbbe180fcc9421857e61d20be426c6574330a14fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c59167d0c1d87b8d5ff0dbbbe180fcc9421857e61d20be426c6574330a14fda->enter($__internal_2c59167d0c1d87b8d5ff0dbbbe180fcc9421857e61d20be426c6574330a14fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_b892df04da90aaf6c6917e933c5cedfa3334b3cc1d80cbfa386d144e722c943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b892df04da90aaf6c6917e933c5cedfa3334b3cc1d80cbfa386d144e722c943d->enter($__internal_b892df04da90aaf6c6917e933c5cedfa3334b3cc1d80cbfa386d144e722c943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_b892df04da90aaf6c6917e933c5cedfa3334b3cc1d80cbfa386d144e722c943d->leave($__internal_b892df04da90aaf6c6917e933c5cedfa3334b3cc1d80cbfa386d144e722c943d_prof);

        
        $__internal_2c59167d0c1d87b8d5ff0dbbbe180fcc9421857e61d20be426c6574330a14fda->leave($__internal_2c59167d0c1d87b8d5ff0dbbbe180fcc9421857e61d20be426c6574330a14fda_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0153c9948bb9bf3e60d5aec8a009409b206cb30a1e33127148ce0a99b152df50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0153c9948bb9bf3e60d5aec8a009409b206cb30a1e33127148ce0a99b152df50->enter($__internal_0153c9948bb9bf3e60d5aec8a009409b206cb30a1e33127148ce0a99b152df50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_2d7fc141476071a3938d682e1b52d6b53291d6442b083836476159688236b221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7fc141476071a3938d682e1b52d6b53291d6442b083836476159688236b221->enter($__internal_2d7fc141476071a3938d682e1b52d6b53291d6442b083836476159688236b221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_2d7fc141476071a3938d682e1b52d6b53291d6442b083836476159688236b221->leave($__internal_2d7fc141476071a3938d682e1b52d6b53291d6442b083836476159688236b221_prof);

        
        $__internal_0153c9948bb9bf3e60d5aec8a009409b206cb30a1e33127148ce0a99b152df50->leave($__internal_0153c9948bb9bf3e60d5aec8a009409b206cb30a1e33127148ce0a99b152df50_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_2d4bbe164ead7edd2c1d8e42bafbe5187bea4d70d2c4247838daba575cb99d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4bbe164ead7edd2c1d8e42bafbe5187bea4d70d2c4247838daba575cb99d9b->enter($__internal_2d4bbe164ead7edd2c1d8e42bafbe5187bea4d70d2c4247838daba575cb99d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_7e5076bc2c8441d0a5ca258a0031838f2e1e785a0205c65efee5bb3d2225ab3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5076bc2c8441d0a5ca258a0031838f2e1e785a0205c65efee5bb3d2225ab3f->enter($__internal_7e5076bc2c8441d0a5ca258a0031838f2e1e785a0205c65efee5bb3d2225ab3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_7e5076bc2c8441d0a5ca258a0031838f2e1e785a0205c65efee5bb3d2225ab3f->leave($__internal_7e5076bc2c8441d0a5ca258a0031838f2e1e785a0205c65efee5bb3d2225ab3f_prof);

        
        $__internal_2d4bbe164ead7edd2c1d8e42bafbe5187bea4d70d2c4247838daba575cb99d9b->leave($__internal_2d4bbe164ead7edd2c1d8e42bafbe5187bea4d70d2c4247838daba575cb99d9b_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a6a79fc85f7cbb47b90041a9412c7189561bd5212e9966d44e95962d52c4a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6a79fc85f7cbb47b90041a9412c7189561bd5212e9966d44e95962d52c4a80->enter($__internal_3a6a79fc85f7cbb47b90041a9412c7189561bd5212e9966d44e95962d52c4a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0294f339ad2032a448e96195b6a071e7c444be9c5f6d795d71c0203b235b8d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0294f339ad2032a448e96195b6a071e7c444be9c5f6d795d71c0203b235b8d77->enter($__internal_0294f339ad2032a448e96195b6a071e7c444be9c5f6d795d71c0203b235b8d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_0294f339ad2032a448e96195b6a071e7c444be9c5f6d795d71c0203b235b8d77->leave($__internal_0294f339ad2032a448e96195b6a071e7c444be9c5f6d795d71c0203b235b8d77_prof);

        
        $__internal_3a6a79fc85f7cbb47b90041a9412c7189561bd5212e9966d44e95962d52c4a80->leave($__internal_3a6a79fc85f7cbb47b90041a9412c7189561bd5212e9966d44e95962d52c4a80_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_9798a141f92bf6a78f771fd35ac222d9ba6ad6db85644c71fa9f9b2672b1c700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9798a141f92bf6a78f771fd35ac222d9ba6ad6db85644c71fa9f9b2672b1c700->enter($__internal_9798a141f92bf6a78f771fd35ac222d9ba6ad6db85644c71fa9f9b2672b1c700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_347c52a24e921c2bbe3f01344e237973cbd7b964a99956e927b3df724967a23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347c52a24e921c2bbe3f01344e237973cbd7b964a99956e927b3df724967a23c->enter($__internal_347c52a24e921c2bbe3f01344e237973cbd7b964a99956e927b3df724967a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_347c52a24e921c2bbe3f01344e237973cbd7b964a99956e927b3df724967a23c->leave($__internal_347c52a24e921c2bbe3f01344e237973cbd7b964a99956e927b3df724967a23c_prof);

        
        $__internal_9798a141f92bf6a78f771fd35ac222d9ba6ad6db85644c71fa9f9b2672b1c700->leave($__internal_9798a141f92bf6a78f771fd35ac222d9ba6ad6db85644c71fa9f9b2672b1c700_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_2598016f96416a1714bbaa4018ca7c9c092df824d92d4f2412b1b7c346bce189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2598016f96416a1714bbaa4018ca7c9c092df824d92d4f2412b1b7c346bce189->enter($__internal_2598016f96416a1714bbaa4018ca7c9c092df824d92d4f2412b1b7c346bce189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_9417b56d6e06c72d3aaedbe041e4cd1f578793e9c88709702e5c7e0c19f38203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9417b56d6e06c72d3aaedbe041e4cd1f578793e9c88709702e5c7e0c19f38203->enter($__internal_9417b56d6e06c72d3aaedbe041e4cd1f578793e9c88709702e5c7e0c19f38203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_9417b56d6e06c72d3aaedbe041e4cd1f578793e9c88709702e5c7e0c19f38203->leave($__internal_9417b56d6e06c72d3aaedbe041e4cd1f578793e9c88709702e5c7e0c19f38203_prof);

        
        $__internal_2598016f96416a1714bbaa4018ca7c9c092df824d92d4f2412b1b7c346bce189->leave($__internal_2598016f96416a1714bbaa4018ca7c9c092df824d92d4f2412b1b7c346bce189_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_bd8c4ce9b72462c0ad0a32e7e14c4764210f1a839a7e4bf4d8912ab7c0838392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8c4ce9b72462c0ad0a32e7e14c4764210f1a839a7e4bf4d8912ab7c0838392->enter($__internal_bd8c4ce9b72462c0ad0a32e7e14c4764210f1a839a7e4bf4d8912ab7c0838392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_72cf000dd86b18ef824aadee9a532c06fe3c4e20d6c6ca70c50fe440b3fa43ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cf000dd86b18ef824aadee9a532c06fe3c4e20d6c6ca70c50fe440b3fa43ef->enter($__internal_72cf000dd86b18ef824aadee9a532c06fe3c4e20d6c6ca70c50fe440b3fa43ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_72cf000dd86b18ef824aadee9a532c06fe3c4e20d6c6ca70c50fe440b3fa43ef->leave($__internal_72cf000dd86b18ef824aadee9a532c06fe3c4e20d6c6ca70c50fe440b3fa43ef_prof);

        
        $__internal_bd8c4ce9b72462c0ad0a32e7e14c4764210f1a839a7e4bf4d8912ab7c0838392->leave($__internal_bd8c4ce9b72462c0ad0a32e7e14c4764210f1a839a7e4bf4d8912ab7c0838392_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_61f4034ef187b995daa5c8a62597f552fff085b2c4ea8c4071c7dde07b48f547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f4034ef187b995daa5c8a62597f552fff085b2c4ea8c4071c7dde07b48f547->enter($__internal_61f4034ef187b995daa5c8a62597f552fff085b2c4ea8c4071c7dde07b48f547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_8223f489f06f689a52b66c2027cdd4d191a615aa965b1a2bae02520367f238d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8223f489f06f689a52b66c2027cdd4d191a615aa965b1a2bae02520367f238d7->enter($__internal_8223f489f06f689a52b66c2027cdd4d191a615aa965b1a2bae02520367f238d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_8223f489f06f689a52b66c2027cdd4d191a615aa965b1a2bae02520367f238d7->leave($__internal_8223f489f06f689a52b66c2027cdd4d191a615aa965b1a2bae02520367f238d7_prof);

        
        $__internal_61f4034ef187b995daa5c8a62597f552fff085b2c4ea8c4071c7dde07b48f547->leave($__internal_61f4034ef187b995daa5c8a62597f552fff085b2c4ea8c4071c7dde07b48f547_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_0226ef3ed14792d1e8141e125a1652624efd5579d1fc10d0db6f6b74a11f7039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0226ef3ed14792d1e8141e125a1652624efd5579d1fc10d0db6f6b74a11f7039->enter($__internal_0226ef3ed14792d1e8141e125a1652624efd5579d1fc10d0db6f6b74a11f7039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7932d7e4eefdd9a6f7e1d70b50a914c1330c3de44636f2961f931c4f7a275157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7932d7e4eefdd9a6f7e1d70b50a914c1330c3de44636f2961f931c4f7a275157->enter($__internal_7932d7e4eefdd9a6f7e1d70b50a914c1330c3de44636f2961f931c4f7a275157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_7932d7e4eefdd9a6f7e1d70b50a914c1330c3de44636f2961f931c4f7a275157->leave($__internal_7932d7e4eefdd9a6f7e1d70b50a914c1330c3de44636f2961f931c4f7a275157_prof);

        
        $__internal_0226ef3ed14792d1e8141e125a1652624efd5579d1fc10d0db6f6b74a11f7039->leave($__internal_0226ef3ed14792d1e8141e125a1652624efd5579d1fc10d0db6f6b74a11f7039_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_f20982a6b651dce4c47dcb5d93f87f591d4faf25c273b74a4cfb2b89ce3536e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20982a6b651dce4c47dcb5d93f87f591d4faf25c273b74a4cfb2b89ce3536e0->enter($__internal_f20982a6b651dce4c47dcb5d93f87f591d4faf25c273b74a4cfb2b89ce3536e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_a913c6820723550928f9625518f7836a55bbca38728c128afe7a054a37465ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a913c6820723550928f9625518f7836a55bbca38728c128afe7a054a37465ccc->enter($__internal_a913c6820723550928f9625518f7836a55bbca38728c128afe7a054a37465ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_a913c6820723550928f9625518f7836a55bbca38728c128afe7a054a37465ccc->leave($__internal_a913c6820723550928f9625518f7836a55bbca38728c128afe7a054a37465ccc_prof);

        
        $__internal_f20982a6b651dce4c47dcb5d93f87f591d4faf25c273b74a4cfb2b89ce3536e0->leave($__internal_f20982a6b651dce4c47dcb5d93f87f591d4faf25c273b74a4cfb2b89ce3536e0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
