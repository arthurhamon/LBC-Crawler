<?php

/* crawlerlbccrawlerBundle:Default:showAll.html.twig */
class __TwigTemplate_72c6fd99df62e47f3b6598153b3b5004e641c8443e7170f04668c976d6ce59e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container\">
\t";
        // line 6
        $context["compt"] = 1;
        // line 7
        echo "
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 9
            echo "
\t\t";
            // line 10
            if (((isset($context["compt"]) ? $context["compt"] : null) == 1)) {
                // line 11
                echo "\t\t\t<div class=\"row\">
\t\t";
            }
            // line 13
            echo "
\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "images"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                if (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "size") == "b")) {
                    // line 17
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                        // line 18
                        echo "\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "size"), "html", null, true);
                        echo "\" style=\"width: 300px; height: 200px;\">
\t\t\t\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
\t\t\t\t\t<div class=\"caption text-center\">
\t\t\t\t\t\t<h3><a class=\"ad_link\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crawlerlbccrawler_detail", array("id" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "title"), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t<p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "city"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "zip"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span class=\"btn btn-primary\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "price"), "html", null, true);
            echo " €</span>
\t\t\t\t\t\t\t<a class=\"btn btn-danger\" role=\"button\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crawlerlbccrawler_remove", array("id" => $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "id"))), "html", null, true);
            echo "\">Remove</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
            // line 33
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
            // line 34
            echo "

\t\t";
            // line 36
            if ((0 == (isset($context["compt"]) ? $context["compt"] : null) % 5)) {
                // line 37
                echo "\t\t\t</div>
\t\t\t";
                // line 38
                $context["compt"] = 1;
                // line 39
                echo "\t\t";
            }
            // line 40
            echo "
\t\t";
            // line 41
            if (((0 == (isset($context["compt"]) ? $context["compt"] : null) % 5) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == false))) {
                // line 42
                echo "\t\t\t<div class=\"row\">
\t\t";
            } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") == true)) {
                // line 44
                echo "\t\t\t</div>
\t\t\t";
                // line 45
                $context["compt"] = 1;
                // line 46
                echo "\t\t";
            }
            // line 47
            echo "
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "crawlerlbccrawlerBundle:Default:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 49,  161 => 45,  152 => 41,  146 => 39,  139 => 36,  124 => 27,  120 => 26,  113 => 24,  37 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 23,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 34,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 16,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 18,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 4,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 3,  98 => 31,  93 => 20,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 6,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 47,  163 => 46,  158 => 44,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 13,  62 => 11,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 42,  149 => 40,  147 => 58,  144 => 38,  141 => 37,  133 => 33,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 21,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 17,  80 => 19,  73 => 19,  64 => 17,  60 => 10,  57 => 9,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 6,  30 => 7,);
    }
}
