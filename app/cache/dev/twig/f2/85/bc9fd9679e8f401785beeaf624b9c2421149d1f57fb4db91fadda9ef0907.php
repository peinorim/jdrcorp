<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f285bc9fd9679e8f401785beeaf624b9c2421149d1f57fb4db91fadda9ef0907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  270 => 102,  262 => 98,  248 => 94,  216 => 79,  191 => 77,  242 => 127,  236 => 126,  148 => 77,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 127,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  226 => 84,  218 => 47,  129 => 39,  118 => 49,  70 => 19,  231 => 108,  195 => 92,  170 => 74,  153 => 69,  146 => 66,  126 => 38,  65 => 29,  100 => 40,  215 => 99,  178 => 64,  167 => 71,  124 => 43,  81 => 23,  34 => 11,  97 => 29,  84 => 24,  77 => 34,  275 => 105,  272 => 68,  267 => 101,  245 => 58,  237 => 56,  225 => 121,  213 => 78,  200 => 72,  174 => 74,  165 => 60,  152 => 78,  150 => 55,  210 => 89,  206 => 112,  202 => 94,  198 => 81,  194 => 70,  190 => 29,  186 => 83,  53 => 12,  271 => 66,  256 => 96,  250 => 133,  233 => 87,  212 => 116,  205 => 95,  185 => 75,  181 => 65,  134 => 54,  110 => 44,  113 => 48,  207 => 75,  197 => 71,  188 => 76,  184 => 4,  180 => 48,  172 => 62,  160 => 70,  137 => 51,  127 => 47,  114 => 20,  90 => 27,  76 => 25,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 124,  309 => 97,  305 => 87,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 46,  177 => 45,  169 => 29,  140 => 75,  132 => 40,  128 => 22,  107 => 18,  61 => 17,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 92,  217 => 52,  208 => 68,  204 => 78,  179 => 81,  159 => 82,  143 => 52,  135 => 53,  119 => 40,  102 => 41,  71 => 24,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 44,  89 => 30,  85 => 26,  75 => 36,  68 => 22,  56 => 13,  87 => 34,  21 => 2,  26 => 3,  93 => 16,  88 => 32,  78 => 25,  46 => 13,  27 => 3,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 73,  166 => 28,  163 => 62,  158 => 36,  156 => 58,  151 => 59,  142 => 59,  138 => 56,  136 => 56,  121 => 50,  117 => 57,  105 => 34,  91 => 33,  62 => 15,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 18,  69 => 12,  47 => 16,  40 => 8,  37 => 12,  22 => 2,  246 => 93,  157 => 61,  145 => 46,  139 => 45,  131 => 71,  123 => 42,  120 => 39,  115 => 44,  111 => 47,  108 => 4,  101 => 30,  98 => 32,  96 => 37,  83 => 33,  74 => 26,  66 => 23,  55 => 13,  52 => 12,  50 => 24,  43 => 12,  41 => 21,  35 => 6,  32 => 5,  29 => 4,  209 => 96,  203 => 73,  199 => 110,  193 => 30,  189 => 48,  187 => 84,  182 => 75,  176 => 63,  173 => 89,  168 => 61,  164 => 70,  162 => 59,  154 => 57,  149 => 37,  147 => 54,  144 => 76,  141 => 51,  133 => 23,  130 => 46,  125 => 51,  122 => 66,  116 => 39,  112 => 42,  109 => 34,  106 => 34,  103 => 32,  99 => 31,  95 => 39,  92 => 38,  86 => 37,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 20,  57 => 20,  54 => 19,  51 => 17,  48 => 23,  45 => 9,  42 => 15,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
