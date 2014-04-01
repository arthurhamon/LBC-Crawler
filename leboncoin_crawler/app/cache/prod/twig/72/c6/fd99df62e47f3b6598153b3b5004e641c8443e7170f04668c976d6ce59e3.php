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
        return array (  181 => 49,  166 => 47,  163 => 46,  161 => 45,  158 => 44,  154 => 42,  152 => 41,  149 => 40,  146 => 39,  144 => 38,  141 => 37,  139 => 36,  135 => 34,  133 => 33,  124 => 27,  120 => 26,  113 => 24,  107 => 23,  103 => 21,  93 => 20,  85 => 18,  82 => 17,  71 => 16,  66 => 13,  62 => 11,  60 => 10,  57 => 9,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
