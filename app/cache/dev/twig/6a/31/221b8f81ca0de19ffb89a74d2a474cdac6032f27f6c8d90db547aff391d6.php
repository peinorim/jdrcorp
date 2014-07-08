<?php

/* JdrCorpElricBundle:Elric:caracs.html.twig */
class __TwigTemplate_6a31221b8f81ca0de19ffb89a74d2a474cdac6032f27f6c8d90db547aff391d6 extends Twig_Template
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
        echo "<h2 class=\"StepTitle\">Les caractéristiques</h2>  
<div class=\"form-horizontal col-md-6\">
    <div class=\"form-group\">
        <label for=\"force\" class=\"col-md-2 control-label\">Force</label>
        <div class=\"col-md-4 input-group\">
            <input type=\"text\" class=\"form-control carac\" id=\"force\" name=\"force\" value=\"\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"consti\" class=\"col-md-2 control-label\">Constitution</label>
        <div class=\"col-md-4 input-group\">
            <input type=\"text\" class=\"form-control carac\" id=\"consti\" name=\"consti\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"taille\" class=\"col-md-2 control-label\">Taille</label>
        <div class=\"col-md-4 input-group\">
            <input type=\"text\" class=\"form-control carac\" id=\"taille\" name=\"taille\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"intell\" class=\"col-md-2 control-label\">Intelligence</label>
        <div class=\"col-md-4 input-group\">
            <input type=\"text\" class=\"form-control carac\" id=\"intell\" name=\"intell\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"pouvoir\" class=\"col-md-2 control-label\">Pouvoir</label>
        <div class=\"col-md-4 input-group\">
            <input type=\"text\" class=\"form-control carac\" id=\"pouvoir\" name=\"pouvoir\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"dexte\" class=\"col-md-2 control-label\">Dextérité</label>
        <div class=\"col-md-4 input-group\">
            <input type=\"text\" class=\"form-control carac\" id=\"dexte\" name=\"dexte\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"appa\" class=\"col-md-2 control-label\">Apparence</label>
        <div class=\"col-md-4 input-group\">
            <input type=\"text\" class=\"form-control carac\" id=\"appa\" name=\"appa\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
</div>
<div class=\"form-horizontal col-md-5\" >
    <div class=\"form-group\">
        <label for=\"nom\" class=\"col-md-3 control-label\">Nom du joueur</label>
        <div class=\"col-md-8\">
            <input type=\"text\" class=\"form-control\" id=\"proprio\" name=\"proprio\"/>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"nom\" class=\"col-md-3 control-label\">Nom du personnage</label>
        <div class=\"col-md-8\">
            <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\"/>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"naiss\" class=\"col-md-3 control-label\">Lieu de naissance</label>
        <div class=\"col-md-8\">
            <select class=\"form-control\" id=\"naiss\" name=\"naiss\">
                <option>Argimiliar</option> 
                <option>Dharijor</option>
                <option>Dorel</option>
                <option>Filkhar</option>
                <option>Ilmiora</option>
                <option>L'île des cités pourpre</option>
                <option>Jharkor</option>
                <option>Lormyr</option>
                <option>Oin</option>
                <option>Pikarayd</option>
                <option>Shazar</option>
                <option>Le Désert des Soupirs</option>
                <option>Tarkesh</option>
                <option>Vilmir</option>
                <option>Yu</option>
                <option>Le Désert des Larmes</option>
            </select>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"sexe\" class=\"col-md-3 control-label\">Sexe</label>
        <div class=\"col-md-2\">
            <select class=\"form-control\" id=\"sexe\" name=\"sexe\">
                <option>M</option> 
                <option>F</option>
            </select>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"age\" class=\"col-md-3 control-label\">Age</label>
        <div class=\"col-md-2\">
            <input type=\"number\" class=\"form-control\" id=\"age\" name=\"age\" maxlength=\"3\"/>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"allure\" class=\"col-md-3 control-label\">Allure, attitude</label>
        <div class=\"col-md-8\">
            <textarea class=\"form-control\" id=\"allure\" name=\"allure\" maxlength=\"200\"></textarea>
        </div>
    </div>

    <div class=\"form-group\">
        <label for=\"avatar\" class=\"col-md-3 control-label\">Emblème / Portrait</label>
        <div class=\"col-md-4\">
            <label>
            <input type=\"file\" id=\"avatar\" name=\"avatar\"/>
            </label>
        </div>
        <div class=\"col-md-2\">
            <button id=\"removeFile\" class=\"btn btn-warning\" type=\"button\">x</button>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:caracs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 108,  195 => 92,  170 => 74,  153 => 68,  146 => 66,  126 => 48,  65 => 26,  100 => 38,  215 => 99,  178 => 74,  167 => 65,  124 => 43,  81 => 25,  34 => 7,  97 => 29,  84 => 40,  77 => 35,  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 109,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 67,  210 => 89,  206 => 46,  202 => 94,  198 => 81,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 95,  185 => 47,  181 => 46,  134 => 47,  110 => 43,  113 => 36,  207 => 57,  197 => 50,  188 => 77,  184 => 35,  180 => 48,  172 => 46,  160 => 70,  137 => 51,  127 => 47,  114 => 44,  90 => 16,  76 => 22,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 67,  128 => 41,  107 => 37,  61 => 25,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 100,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 37,  102 => 41,  71 => 22,  67 => 19,  63 => 15,  59 => 16,  38 => 8,  94 => 28,  89 => 27,  85 => 26,  75 => 36,  68 => 22,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 28,  88 => 37,  78 => 43,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 69,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 58,  117 => 57,  105 => 31,  91 => 29,  62 => 19,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 20,  47 => 9,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 48,  120 => 47,  115 => 44,  111 => 43,  108 => 4,  101 => 30,  98 => 40,  96 => 37,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 14,  50 => 14,  43 => 8,  41 => 16,  35 => 5,  32 => 3,  29 => 2,  209 => 96,  203 => 78,  199 => 93,  193 => 49,  189 => 48,  187 => 84,  182 => 75,  176 => 75,  173 => 44,  168 => 45,  164 => 71,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 28,  141 => 34,  133 => 23,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 42,  103 => 32,  99 => 48,  95 => 39,  92 => 38,  86 => 34,  82 => 33,  80 => 39,  73 => 21,  64 => 18,  60 => 15,  57 => 14,  54 => 15,  51 => 11,  48 => 10,  45 => 12,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 7,);
    }
}
