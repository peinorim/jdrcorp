<?php

/* JdrCorpElricBundle:Elric:mypvmana.html.twig */
class __TwigTemplate_364d8878aff6d5ce522abf4e200d97bfaff31fc005665f01059f2dddbea11113 extends Twig_Template
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
        // line 1
        echo "<ul id=\"myPv\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((-2), 49));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getPv") == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 4
                echo "    <li style='color:red;'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</li>
    ";
            } else {
                // line 6
                echo "    <li>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
<ul id=\"myMana\">
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((-2), 85));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "        ";
            if ((($this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getMana") == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) && ($this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getMana") >= 16))) {
                // line 13
                echo "    <li style='color:red;'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</li>
    ";
            } else {
                // line 15
                echo "    <li>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:mypvmana.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  81 => 28,  53 => 12,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 62,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 56,  233 => 55,  226 => 50,  218 => 47,  190 => 29,  184 => 4,  152 => 26,  76 => 34,  129 => 39,  126 => 38,  118 => 35,  114 => 20,  110 => 44,  90 => 28,  70 => 23,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 57,  229 => 73,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 55,  132 => 40,  128 => 22,  107 => 18,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 39,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 33,  71 => 24,  67 => 15,  63 => 22,  59 => 14,  38 => 6,  94 => 29,  89 => 30,  85 => 25,  75 => 17,  68 => 14,  56 => 13,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 15,  78 => 25,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 15,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 18,  69 => 12,  47 => 16,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 37,  120 => 39,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 32,  96 => 39,  83 => 36,  74 => 26,  66 => 23,  55 => 19,  52 => 18,  50 => 9,  43 => 15,  41 => 7,  35 => 6,  32 => 12,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 30,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 64,  162 => 57,  154 => 57,  149 => 51,  147 => 25,  144 => 50,  141 => 48,  133 => 23,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 34,  103 => 32,  99 => 31,  95 => 28,  92 => 38,  86 => 37,  82 => 33,  80 => 35,  73 => 19,  64 => 17,  60 => 20,  57 => 20,  54 => 19,  51 => 17,  48 => 13,  45 => 9,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 7,);
    }
}