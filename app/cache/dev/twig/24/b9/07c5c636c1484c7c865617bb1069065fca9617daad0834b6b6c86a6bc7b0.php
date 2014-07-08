<?php

/* JdrCorpElricBundle:Elric:index.html.twig */
class __TwigTemplate_24b907c5c636c1484c7c865617bb1069065fca9617daad0834b6b6c86a6bc7b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_elric.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_elric.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "JdrCorp - Elric - Accueil
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"\" style=\"margin-top:50px;\">
    <form method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Elric_Create");
        echo "\" id=\"create\" name=\"create\" enctype='multipart/form-data'>
        <div id=\"wizard\" class=\"swMain\" style=\"height:500px;width:100%;\">
            <ul>
                <li><a href=\"#caracs\">
                        <span class=\"stepNumber\">1</span>
                        <span class=\"stepDesc\">
                            Caractéristiques<br />
                            <small></small>
                        </span>
                    </a></li>
                <li><a href=\"#metier\">
                        <span class=\"stepNumber\">2</span>
                        <span class=\"stepDesc\">
                            Métier<br />
                            <small></small>
                        </span>
                    </a></li>
                <li><a href=\"#settings\">
                        <span class=\"stepNumber\">3</span>
                        <span class=\"stepDesc\">
                            Paramètres<br />
                            <small></small>
                        </span>
                    </a></li>
            </ul>

            <div style=\"width:100%;\"  id=\"caracs\">";
        // line 33
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:caracs.html.twig")->display($context);
        echo "</div>
            <div style=\"width:100%;\" id=\"metier\">";
        // line 34
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:metier.html.twig")->display($context);
        echo "</div>
            <div style=\"width:100%;\" id=\"settings\">";
        // line 35
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:settings.html.twig")->display($context);
        echo "</div>   
        </div>
    </form>
</div>\t
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  118 => 35,  70 => 23,  231 => 108,  195 => 92,  170 => 74,  153 => 68,  146 => 66,  126 => 38,  65 => 26,  100 => 38,  215 => 99,  178 => 74,  167 => 65,  124 => 43,  81 => 25,  34 => 7,  97 => 29,  84 => 40,  77 => 35,  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 109,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 67,  210 => 89,  206 => 46,  202 => 94,  198 => 81,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 95,  185 => 47,  181 => 46,  134 => 47,  110 => 33,  113 => 36,  207 => 57,  197 => 50,  188 => 77,  184 => 35,  180 => 48,  172 => 46,  160 => 70,  137 => 51,  127 => 47,  114 => 34,  90 => 28,  76 => 34,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 40,  128 => 41,  107 => 37,  61 => 25,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 100,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 37,  102 => 31,  71 => 22,  67 => 19,  63 => 15,  59 => 16,  38 => 8,  94 => 29,  89 => 27,  85 => 26,  75 => 36,  68 => 22,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 28,  88 => 37,  78 => 25,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 69,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 58,  117 => 57,  105 => 31,  91 => 29,  62 => 21,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 33,  69 => 20,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 37,  120 => 36,  115 => 44,  111 => 43,  108 => 4,  101 => 30,  98 => 30,  96 => 37,  83 => 25,  74 => 24,  66 => 22,  55 => 10,  52 => 14,  50 => 18,  43 => 7,  41 => 16,  35 => 5,  32 => 3,  29 => 2,  209 => 96,  203 => 78,  199 => 93,  193 => 49,  189 => 48,  187 => 84,  182 => 75,  176 => 75,  173 => 44,  168 => 45,  164 => 64,  162 => 57,  154 => 57,  149 => 37,  147 => 58,  144 => 50,  141 => 34,  133 => 23,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 32,  99 => 48,  95 => 39,  92 => 38,  86 => 27,  82 => 26,  80 => 35,  73 => 21,  64 => 18,  60 => 15,  57 => 14,  54 => 19,  51 => 11,  48 => 10,  45 => 17,  42 => 7,  39 => 15,  36 => 13,  33 => 4,  30 => 7,);
    }
}
