<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_b6eec63280da91b23b4fb34c3f23f7fcfad2dcd9d31079e70456ce43f5926d25 extends Twig_Template
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
        return array (  357 => 123,  351 => 120,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  303 => 106,  297 => 104,  291 => 102,  263 => 95,  231 => 83,  212 => 78,  202 => 77,  185 => 74,  174 => 65,  161 => 63,  389 => 160,  386 => 159,  380 => 158,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  315 => 110,  307 => 128,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  281 => 114,  276 => 111,  274 => 97,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  248 => 97,  232 => 88,  222 => 83,  216 => 79,  210 => 77,  194 => 68,  191 => 67,  184 => 63,  178 => 59,  175 => 58,  172 => 57,  170 => 56,  155 => 47,  152 => 46,  113 => 40,  361 => 152,  349 => 323,  347 => 322,  344 => 119,  302 => 125,  300 => 105,  20 => 1,  65 => 22,  58 => 14,  134 => 39,  100 => 36,  84 => 27,  76 => 17,  53 => 17,  218 => 97,  213 => 78,  197 => 69,  190 => 76,  186 => 83,  167 => 74,  148 => 62,  137 => 37,  124 => 33,  97 => 40,  90 => 20,  77 => 25,  192 => 52,  188 => 51,  160 => 72,  146 => 61,  127 => 35,  104 => 32,  110 => 35,  81 => 32,  70 => 15,  34 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 38,  132 => 35,  128 => 34,  107 => 36,  61 => 15,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 24,  71 => 23,  67 => 14,  63 => 21,  59 => 22,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 54,  163 => 53,  158 => 67,  156 => 62,  151 => 63,  142 => 59,  138 => 54,  136 => 48,  121 => 46,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 11,  93 => 38,  88 => 25,  78 => 18,  38 => 7,  87 => 33,  44 => 9,  31 => 8,  21 => 2,  28 => 6,  46 => 10,  26 => 3,  94 => 21,  89 => 30,  85 => 24,  75 => 19,  68 => 12,  56 => 16,  27 => 3,  24 => 3,  25 => 5,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 8,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 47,  120 => 31,  115 => 43,  111 => 37,  108 => 47,  101 => 31,  98 => 30,  96 => 35,  83 => 30,  74 => 26,  66 => 25,  55 => 13,  52 => 12,  50 => 16,  43 => 8,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 93,  203 => 73,  199 => 67,  193 => 73,  189 => 66,  187 => 75,  182 => 82,  176 => 64,  173 => 78,  168 => 72,  164 => 73,  162 => 57,  154 => 58,  149 => 51,  147 => 43,  144 => 42,  141 => 25,  133 => 55,  130 => 41,  125 => 42,  122 => 41,  116 => 31,  112 => 36,  109 => 35,  106 => 34,  103 => 44,  99 => 23,  95 => 34,  92 => 27,  86 => 29,  82 => 19,  80 => 29,  73 => 16,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
