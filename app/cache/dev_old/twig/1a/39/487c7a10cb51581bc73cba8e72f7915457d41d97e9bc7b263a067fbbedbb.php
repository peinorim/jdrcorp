<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1a39487c7a10cb51581bc73cba8e72f7915457d41d97e9bc7b263a067fbbedbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  134 => 36,  100 => 27,  84 => 23,  76 => 27,  53 => 15,  218 => 97,  213 => 95,  197 => 88,  190 => 84,  186 => 83,  167 => 74,  148 => 62,  137 => 37,  124 => 33,  97 => 40,  90 => 38,  77 => 27,  192 => 52,  188 => 51,  160 => 72,  146 => 61,  127 => 23,  104 => 28,  110 => 35,  81 => 32,  70 => 24,  34 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 38,  132 => 35,  128 => 34,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 39,  135 => 53,  119 => 42,  102 => 33,  71 => 17,  67 => 15,  63 => 12,  59 => 17,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 32,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 20,  49 => 10,  93 => 28,  88 => 24,  78 => 21,  38 => 6,  87 => 32,  44 => 9,  31 => 8,  21 => 2,  28 => 3,  46 => 13,  26 => 6,  94 => 39,  89 => 30,  85 => 25,  75 => 26,  68 => 19,  56 => 16,  27 => 4,  24 => 3,  25 => 5,  19 => 1,  79 => 18,  72 => 20,  69 => 22,  47 => 8,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 55,  123 => 47,  120 => 32,  115 => 43,  111 => 37,  108 => 29,  101 => 18,  98 => 34,  96 => 26,  83 => 31,  74 => 26,  66 => 23,  55 => 19,  52 => 18,  50 => 10,  43 => 8,  41 => 9,  35 => 5,  32 => 12,  29 => 3,  209 => 93,  203 => 89,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 82,  176 => 64,  173 => 78,  168 => 72,  164 => 73,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 25,  133 => 55,  130 => 41,  125 => 44,  122 => 22,  116 => 31,  112 => 30,  109 => 34,  106 => 34,  103 => 44,  99 => 31,  95 => 28,  92 => 25,  86 => 29,  82 => 15,  80 => 22,  73 => 19,  64 => 21,  60 => 19,  57 => 11,  54 => 18,  51 => 14,  48 => 15,  45 => 17,  42 => 8,  39 => 10,  36 => 13,  33 => 4,  30 => 7,);
    }
}
