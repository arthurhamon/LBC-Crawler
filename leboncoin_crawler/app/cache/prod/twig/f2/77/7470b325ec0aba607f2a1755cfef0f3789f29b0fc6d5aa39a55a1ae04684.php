<?php

/* crawlerlbccrawlerBundle:Default:detail.html.twig */
class __TwigTemplate_f2777470b325ec0aba607f2a1755cfef0f3789f29b0fc6d5aa39a55a1ae04684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isxmlhttprequest")) ? ("::ajax.html.twig") : ("::base.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

<p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "title"), "html", null, true);
        echo " | <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "price"), "html", null, true);
        echo "</strong></p>
<p>";
        // line 7
        echo $this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "description");
        echo "</p>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ad"]) ? $context["ad"] : null), "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            if (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "size") == "b")) {
                // line 9
                echo "\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "size"), "html", null, true);
                echo "\">
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "


";
    }

    public function getTemplateName()
    {
        return "crawlerlbccrawlerBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  48 => 9,  43 => 8,  39 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
