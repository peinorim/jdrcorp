<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_9cbde4c4e34c5f46a7a6d3ff7bd5df040dc72af95adf7a54fc8868e6c2c0c45c extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  270 => 102,  262 => 98,  248 => 94,  216 => 79,  191 => 77,  242 => 127,  236 => 126,  148 => 77,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 127,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  226 => 84,  218 => 47,  129 => 39,  118 => 49,  70 => 19,  231 => 108,  195 => 92,  170 => 74,  153 => 69,  146 => 66,  126 => 38,  65 => 29,  100 => 40,  215 => 99,  178 => 64,  167 => 71,  124 => 43,  81 => 23,  34 => 11,  97 => 29,  84 => 24,  77 => 34,  275 => 105,  272 => 68,  267 => 101,  245 => 58,  237 => 56,  225 => 121,  213 => 78,  200 => 72,  174 => 74,  165 => 60,  152 => 78,  150 => 55,  210 => 89,  206 => 112,  202 => 94,  198 => 81,  194 => 70,  190 => 29,  186 => 83,  53 => 12,  271 => 66,  256 => 96,  250 => 133,  233 => 87,  212 => 116,  205 => 95,  185 => 75,  181 => 65,  134 => 54,  110 => 44,  113 => 48,  207 => 75,  197 => 71,  188 => 76,  184 => 4,  180 => 48,  172 => 62,  160 => 70,  137 => 51,  127 => 47,  114 => 20,  90 => 27,  76 => 31,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 124,  309 => 97,  305 => 87,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 46,  177 => 45,  169 => 29,  140 => 75,  132 => 40,  128 => 22,  107 => 18,  61 => 11,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 92,  217 => 52,  208 => 68,  204 => 78,  179 => 81,  159 => 82,  143 => 52,  135 => 53,  119 => 40,  102 => 41,  71 => 24,  67 => 24,  63 => 22,  59 => 14,  38 => 6,  94 => 44,  89 => 30,  85 => 26,  75 => 36,  68 => 22,  56 => 13,  87 => 34,  21 => 2,  26 => 3,  93 => 16,  88 => 15,  78 => 25,  46 => 13,  27 => 3,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 73,  166 => 28,  163 => 62,  158 => 36,  156 => 58,  151 => 59,  142 => 59,  138 => 56,  136 => 56,  121 => 50,  117 => 57,  105 => 34,  91 => 29,  62 => 15,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 26,  72 => 18,  69 => 12,  47 => 16,  40 => 8,  37 => 12,  22 => 2,  246 => 93,  157 => 61,  145 => 46,  139 => 45,  131 => 71,  123 => 42,  120 => 39,  115 => 44,  111 => 47,  108 => 4,  101 => 30,  98 => 32,  96 => 37,  83 => 33,  74 => 26,  66 => 23,  55 => 16,  52 => 18,  50 => 24,  43 => 12,  41 => 21,  35 => 6,  32 => 5,  29 => 4,  209 => 96,  203 => 73,  199 => 110,  193 => 30,  189 => 48,  187 => 84,  182 => 75,  176 => 63,  173 => 89,  168 => 61,  164 => 70,  162 => 59,  154 => 57,  149 => 37,  147 => 54,  144 => 76,  141 => 51,  133 => 23,  130 => 46,  125 => 51,  122 => 66,  116 => 39,  112 => 42,  109 => 34,  106 => 34,  103 => 32,  99 => 31,  95 => 39,  92 => 38,  86 => 37,  82 => 33,  80 => 32,  73 => 20,  64 => 23,  60 => 20,  57 => 20,  54 => 19,  51 => 17,  48 => 23,  45 => 10,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 3,);
    }
}
