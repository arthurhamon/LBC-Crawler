<?php

/* ::base.html.twig */
class __TwigTemplate_980ad7130b402885a529da3ef24dd1ccf08caed53f222439de39cb732f5bed7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/site.min.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        // line 18
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a3c5fa2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_0") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_jquery.min_1.js");
            // line 22
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a3c5fa2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_1") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_part_2_application_1.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a3c5fa2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_2") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_part_2_bootstrap.min_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a3c5fa2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_3") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_part_2_holder_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a3c5fa2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_4") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_part_2_html5shiv_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a3c5fa2_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_5") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_part_2_jquery-1.10.1.min_5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a3c5fa2_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_6") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_part_2_respond.min_6.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a3c5fa2_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_7") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_part_2_site.min_7.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "a3c5fa2_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2_8") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all_part_3_script_1.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "a3c5fa2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a3c5fa2") : $this->env->getExtension('assets')->getAssetUrl("assets/js/compiled/all.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  23 => 1,  191 => 54,  188 => 53,  167 => 47,  155 => 42,  153 => 41,  150 => 40,  145 => 38,  134 => 33,  114 => 24,  104 => 21,  83 => 17,  58 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 10,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 44,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 23,  102 => 32,  71 => 19,  67 => 13,  63 => 7,  59 => 14,  47 => 9,  38 => 7,  94 => 20,  89 => 20,  85 => 22,  79 => 18,  75 => 14,  68 => 14,  56 => 9,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 3,  98 => 31,  93 => 28,  88 => 6,  78 => 15,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 9,  31 => 5,  43 => 13,  41 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 37,  138 => 54,  136 => 34,  123 => 47,  121 => 26,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 49,  176 => 64,  173 => 65,  168 => 72,  164 => 46,  162 => 45,  154 => 58,  149 => 51,  147 => 24,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 27,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 18,  82 => 22,  80 => 18,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 5,  51 => 14,  48 => 25,  45 => 14,  42 => 7,  39 => 7,  36 => 6,  33 => 6,  30 => 7,);
    }
}
