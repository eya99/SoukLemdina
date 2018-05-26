<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_389063a2ecbe4389748a9a578e6c341f254c63ad36010972ea1510b61f94c5b7 extends Twig_Template
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
        $__internal_8863dca5c1f1fbe99cec81decd452e9e96ac581a2cc81ce21b00f62ca430f1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8863dca5c1f1fbe99cec81decd452e9e96ac581a2cc81ce21b00f62ca430f1fa->enter($__internal_8863dca5c1f1fbe99cec81decd452e9e96ac581a2cc81ce21b00f62ca430f1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_8863dca5c1f1fbe99cec81decd452e9e96ac581a2cc81ce21b00f62ca430f1fa->leave($__internal_8863dca5c1f1fbe99cec81decd452e9e96ac581a2cc81ce21b00f62ca430f1fa_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e04892de11195275de2fe8aca67075bf491d6cf8830eb9361ffef3cca35dc858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04892de11195275de2fe8aca67075bf491d6cf8830eb9361ffef3cca35dc858->enter($__internal_e04892de11195275de2fe8aca67075bf491d6cf8830eb9361ffef3cca35dc858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_e04892de11195275de2fe8aca67075bf491d6cf8830eb9361ffef3cca35dc858->leave($__internal_e04892de11195275de2fe8aca67075bf491d6cf8830eb9361ffef3cca35dc858_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_a87e62e6fb3fdee21cfbea96af1ae47a58651df2a74607cd1712b29dbf799a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87e62e6fb3fdee21cfbea96af1ae47a58651df2a74607cd1712b29dbf799a3b->enter($__internal_a87e62e6fb3fdee21cfbea96af1ae47a58651df2a74607cd1712b29dbf799a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_a87e62e6fb3fdee21cfbea96af1ae47a58651df2a74607cd1712b29dbf799a3b->leave($__internal_a87e62e6fb3fdee21cfbea96af1ae47a58651df2a74607cd1712b29dbf799a3b_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_c6f343b13cb572d3095173927bfe783cae27b6fc819b72bde25d2dc6ca76b6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f343b13cb572d3095173927bfe783cae27b6fc819b72bde25d2dc6ca76b6eb->enter($__internal_c6f343b13cb572d3095173927bfe783cae27b6fc819b72bde25d2dc6ca76b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_c6f343b13cb572d3095173927bfe783cae27b6fc819b72bde25d2dc6ca76b6eb->leave($__internal_c6f343b13cb572d3095173927bfe783cae27b6fc819b72bde25d2dc6ca76b6eb_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_0c63e637bfe6d3a12938cb2412eed1e37d9d727d1584c8165aaa5819e92a4bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c63e637bfe6d3a12938cb2412eed1e37d9d727d1584c8165aaa5819e92a4bd2->enter($__internal_0c63e637bfe6d3a12938cb2412eed1e37d9d727d1584c8165aaa5819e92a4bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_0c63e637bfe6d3a12938cb2412eed1e37d9d727d1584c8165aaa5819e92a4bd2->leave($__internal_0c63e637bfe6d3a12938cb2412eed1e37d9d727d1584c8165aaa5819e92a4bd2_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_5aefa71aff8268c6081d4cc3c6d7a179176b88a457584c62a1c59bf7059e2bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aefa71aff8268c6081d4cc3c6d7a179176b88a457584c62a1c59bf7059e2bf1->enter($__internal_5aefa71aff8268c6081d4cc3c6d7a179176b88a457584c62a1c59bf7059e2bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_5aefa71aff8268c6081d4cc3c6d7a179176b88a457584c62a1c59bf7059e2bf1->leave($__internal_5aefa71aff8268c6081d4cc3c6d7a179176b88a457584c62a1c59bf7059e2bf1_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_deb4fa3fe93c4eca35e48b31f122afea8e97ea1c32b19a4377440b79540b34a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb4fa3fe93c4eca35e48b31f122afea8e97ea1c32b19a4377440b79540b34a1->enter($__internal_deb4fa3fe93c4eca35e48b31f122afea8e97ea1c32b19a4377440b79540b34a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_deb4fa3fe93c4eca35e48b31f122afea8e97ea1c32b19a4377440b79540b34a1->leave($__internal_deb4fa3fe93c4eca35e48b31f122afea8e97ea1c32b19a4377440b79540b34a1_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1bb08a195ed8fd9389f4389898fad65c24343f29697e3db55411bf34cda0366f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb08a195ed8fd9389f4389898fad65c24343f29697e3db55411bf34cda0366f->enter($__internal_1bb08a195ed8fd9389f4389898fad65c24343f29697e3db55411bf34cda0366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_1bb08a195ed8fd9389f4389898fad65c24343f29697e3db55411bf34cda0366f->leave($__internal_1bb08a195ed8fd9389f4389898fad65c24343f29697e3db55411bf34cda0366f_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_0238928589f73dec06ce4bceb235abddf7352bf1406ffa5d0a4b108dfe1c34ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0238928589f73dec06ce4bceb235abddf7352bf1406ffa5d0a4b108dfe1c34ff->enter($__internal_0238928589f73dec06ce4bceb235abddf7352bf1406ffa5d0a4b108dfe1c34ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_0238928589f73dec06ce4bceb235abddf7352bf1406ffa5d0a4b108dfe1c34ff->leave($__internal_0238928589f73dec06ce4bceb235abddf7352bf1406ffa5d0a4b108dfe1c34ff_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_28ec8d6d63e00e01a986750a2c727b603e9209e894ce3e8791b346661311a8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ec8d6d63e00e01a986750a2c727b603e9209e894ce3e8791b346661311a8c9->enter($__internal_28ec8d6d63e00e01a986750a2c727b603e9209e894ce3e8791b346661311a8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_28ec8d6d63e00e01a986750a2c727b603e9209e894ce3e8791b346661311a8c9->leave($__internal_28ec8d6d63e00e01a986750a2c727b603e9209e894ce3e8791b346661311a8c9_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_282c20214aede3aea434fc0a696252d8887622e05344b1472942ee653d8fe8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282c20214aede3aea434fc0a696252d8887622e05344b1472942ee653d8fe8a3->enter($__internal_282c20214aede3aea434fc0a696252d8887622e05344b1472942ee653d8fe8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_282c20214aede3aea434fc0a696252d8887622e05344b1472942ee653d8fe8a3->leave($__internal_282c20214aede3aea434fc0a696252d8887622e05344b1472942ee653d8fe8a3_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_5171595c5ccc8c314de0f8eb1675b2bdc2ab4788a7697d4d654d17e284fad1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5171595c5ccc8c314de0f8eb1675b2bdc2ab4788a7697d4d654d17e284fad1e9->enter($__internal_5171595c5ccc8c314de0f8eb1675b2bdc2ab4788a7697d4d654d17e284fad1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_5171595c5ccc8c314de0f8eb1675b2bdc2ab4788a7697d4d654d17e284fad1e9->leave($__internal_5171595c5ccc8c314de0f8eb1675b2bdc2ab4788a7697d4d654d17e284fad1e9_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_56c794064690ccaa20f150ca3c6d1dea774ff8cd51d40c862ecbcf4a2bdf6583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c794064690ccaa20f150ca3c6d1dea774ff8cd51d40c862ecbcf4a2bdf6583->enter($__internal_56c794064690ccaa20f150ca3c6d1dea774ff8cd51d40c862ecbcf4a2bdf6583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_56c794064690ccaa20f150ca3c6d1dea774ff8cd51d40c862ecbcf4a2bdf6583->leave($__internal_56c794064690ccaa20f150ca3c6d1dea774ff8cd51d40c862ecbcf4a2bdf6583_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_c5fd83043b0c35df4461ce6062ae5d90b2619501da620408c15dc54354ebdf50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fd83043b0c35df4461ce6062ae5d90b2619501da620408c15dc54354ebdf50->enter($__internal_c5fd83043b0c35df4461ce6062ae5d90b2619501da620408c15dc54354ebdf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_c5fd83043b0c35df4461ce6062ae5d90b2619501da620408c15dc54354ebdf50->leave($__internal_c5fd83043b0c35df4461ce6062ae5d90b2619501da620408c15dc54354ebdf50_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_efa0a819f45983050cc0a2bc3eda4bb95235e1b5c0d431ff6bf0cac8f4d09ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa0a819f45983050cc0a2bc3eda4bb95235e1b5c0d431ff6bf0cac8f4d09ea5->enter($__internal_efa0a819f45983050cc0a2bc3eda4bb95235e1b5c0d431ff6bf0cac8f4d09ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_efa0a819f45983050cc0a2bc3eda4bb95235e1b5c0d431ff6bf0cac8f4d09ea5->leave($__internal_efa0a819f45983050cc0a2bc3eda4bb95235e1b5c0d431ff6bf0cac8f4d09ea5_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a94508b7e566ccac57fa15b5b98ee537423bacb5702e215647dfba44a4052a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94508b7e566ccac57fa15b5b98ee537423bacb5702e215647dfba44a4052a7a->enter($__internal_a94508b7e566ccac57fa15b5b98ee537423bacb5702e215647dfba44a4052a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_a94508b7e566ccac57fa15b5b98ee537423bacb5702e215647dfba44a4052a7a->leave($__internal_a94508b7e566ccac57fa15b5b98ee537423bacb5702e215647dfba44a4052a7a_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_ba087c9a65051664d389be91257162505711ec75c14beb43b42b84cb0859cdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba087c9a65051664d389be91257162505711ec75c14beb43b42b84cb0859cdd0->enter($__internal_ba087c9a65051664d389be91257162505711ec75c14beb43b42b84cb0859cdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_ba087c9a65051664d389be91257162505711ec75c14beb43b42b84cb0859cdd0->leave($__internal_ba087c9a65051664d389be91257162505711ec75c14beb43b42b84cb0859cdd0_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_b44f609dc17233c3397cfcb5122ba4976e1877bdb3a5be57f2b0ed9716ff4c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44f609dc17233c3397cfcb5122ba4976e1877bdb3a5be57f2b0ed9716ff4c6d->enter($__internal_b44f609dc17233c3397cfcb5122ba4976e1877bdb3a5be57f2b0ed9716ff4c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b44f609dc17233c3397cfcb5122ba4976e1877bdb3a5be57f2b0ed9716ff4c6d->leave($__internal_b44f609dc17233c3397cfcb5122ba4976e1877bdb3a5be57f2b0ed9716ff4c6d_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_7687a0c25c24beae5942d650ad20fea6cfeff942ac9a578c442f3cd52f8ff49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7687a0c25c24beae5942d650ad20fea6cfeff942ac9a578c442f3cd52f8ff49f->enter($__internal_7687a0c25c24beae5942d650ad20fea6cfeff942ac9a578c442f3cd52f8ff49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_7687a0c25c24beae5942d650ad20fea6cfeff942ac9a578c442f3cd52f8ff49f->leave($__internal_7687a0c25c24beae5942d650ad20fea6cfeff942ac9a578c442f3cd52f8ff49f_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_d58fa175fa2797942803d84112c194750e2bae7fedd6cf647d5e001649b6a576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58fa175fa2797942803d84112c194750e2bae7fedd6cf647d5e001649b6a576->enter($__internal_d58fa175fa2797942803d84112c194750e2bae7fedd6cf647d5e001649b6a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_d58fa175fa2797942803d84112c194750e2bae7fedd6cf647d5e001649b6a576->leave($__internal_d58fa175fa2797942803d84112c194750e2bae7fedd6cf647d5e001649b6a576_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_adf0bf0765a4b714398842716adc9affaf349eb176fe2d6dbe3da5b94624b181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf0bf0765a4b714398842716adc9affaf349eb176fe2d6dbe3da5b94624b181->enter($__internal_adf0bf0765a4b714398842716adc9affaf349eb176fe2d6dbe3da5b94624b181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_adf0bf0765a4b714398842716adc9affaf349eb176fe2d6dbe3da5b94624b181->leave($__internal_adf0bf0765a4b714398842716adc9affaf349eb176fe2d6dbe3da5b94624b181_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_9fbcd820118789643ed7b644f491bf5f8f5fdf8f1b66098a50ce366a3446d582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbcd820118789643ed7b644f491bf5f8f5fdf8f1b66098a50ce366a3446d582->enter($__internal_9fbcd820118789643ed7b644f491bf5f8f5fdf8f1b66098a50ce366a3446d582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_9fbcd820118789643ed7b644f491bf5f8f5fdf8f1b66098a50ce366a3446d582->leave($__internal_9fbcd820118789643ed7b644f491bf5f8f5fdf8f1b66098a50ce366a3446d582_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_784b83c7674ba1ebde1a258bb0062f63d8116c9f6756e12e133eadd79d885505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784b83c7674ba1ebde1a258bb0062f63d8116c9f6756e12e133eadd79d885505->enter($__internal_784b83c7674ba1ebde1a258bb0062f63d8116c9f6756e12e133eadd79d885505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_784b83c7674ba1ebde1a258bb0062f63d8116c9f6756e12e133eadd79d885505->leave($__internal_784b83c7674ba1ebde1a258bb0062f63d8116c9f6756e12e133eadd79d885505_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_3a3cc8afbdb252a4d3cba011efc91df971e500557c7696daaad2da86afde7951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3cc8afbdb252a4d3cba011efc91df971e500557c7696daaad2da86afde7951->enter($__internal_3a3cc8afbdb252a4d3cba011efc91df971e500557c7696daaad2da86afde7951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_3a3cc8afbdb252a4d3cba011efc91df971e500557c7696daaad2da86afde7951->leave($__internal_3a3cc8afbdb252a4d3cba011efc91df971e500557c7696daaad2da86afde7951_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 160,  639 => 153,  632 => 149,  625 => 145,  621 => 143,  618 => 142,  612 => 141,  592 => 139,  586 => 138,  576 => 134,  570 => 133,  562 => 154,  560 => 153,  555 => 150,  552 => 141,  550 => 138,  546 => 136,  543 => 133,  537 => 132,  529 => 125,  527 => 122,  525 => 121,  519 => 120,  511 => 127,  509 => 120,  506 => 119,  500 => 118,  493 => 104,  487 => 101,  484 => 100,  482 => 99,  475 => 97,  472 => 96,  466 => 95,  459 => 108,  454 => 105,  452 => 95,  443 => 89,  438 => 86,  433 => 84,  430 => 83,  428 => 82,  424 => 81,  421 => 80,  419 => 79,  413 => 77,  407 => 76,  398 => 109,  396 => 76,  392 => 74,  389 => 73,  383 => 72,  373 => 66,  364 => 65,  358 => 64,  349 => 112,  347 => 72,  342 => 69,  340 => 64,  333 => 60,  329 => 58,  323 => 57,  315 => 156,  313 => 132,  308 => 129,  306 => 118,  301 => 115,  299 => 57,  296 => 56,  290 => 55,  269 => 53,  261 => 165,  252 => 163,  248 => 162,  245 => 161,  243 => 160,  239 => 158,  237 => 55,  227 => 53,  221 => 52,  203 => 30,  197 => 29,  188 => 43,  185 => 42,  182 => 29,  176 => 28,  164 => 25,  161 => 24,  155 => 23,  145 => 15,  139 => 13,  133 => 12,  121 => 10,  113 => 167,  111 => 52,  107 => 50,  102 => 48,  97 => 47,  95 => 46,  92 => 45,  90 => 28,  87 => 27,  85 => 23,  82 => 22,  73 => 20,  69 => 19,  66 => 18,  64 => 12,  59 => 10,  48 => 2,  45 => 1,);
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
", "@EasyAdmin/default/layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
