<?php

/* JdrCorpElricBundle:Elric:caracs.html.twig */
class __TwigTemplate_4044514bc00b115dc75080d6975561bd67c719bc6aaea8e6e8d5601665f94b08 extends Twig_Template
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
        <label for=\"force\" class=\"col-lg-2 control-label\">Force</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"force\" name=\"force\" value=\"\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"consti\" class=\"col-lg-2 control-label\">Constitution</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"consti\" name=\"consti\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"taille\" class=\"col-lg-2 control-label\">Taille</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"taille\" name=\"taille\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"intell\" class=\"col-lg-2 control-label\">Intelligence</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"intell\" name=\"intell\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"pouvoir\" class=\"col-lg-2 control-label\">Pouvoir</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"pouvoir\" name=\"pouvoir\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"dexte\" class=\"col-lg-2 control-label\">Dextérité</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"dexte\" name=\"dexte\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"appa\" class=\"col-lg-2 control-label\">Apparence</label>
        <div class=\"col-lg-4 input-group\">
            <input type=\"text\" class=\"form-control\" id=\"appa\" name=\"appa\" readonly/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary dice_carac\" type=\"button\">2D6 + 6</button>
            </span>
        </div>
    </div>
</div>
<div class=\"form-horizontal col-md-5\" >
    <div class=\"form-group\">
        <label for=\"nom\" class=\"col-lg-3 control-label\">Nom du joueur</label>
        <div class=\"col-lg-8\">
            <input type=\"text\" class=\"form-control\" id=\"proprio\" name=\"proprio\"/>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"nom\" class=\"col-lg-3 control-label\">Nom du personnage</label>
        <div class=\"col-lg-8\">
            <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\"/>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"naiss\" class=\"col-lg-3 control-label\">Lieu de naissance</label>
        <div class=\"col-lg-8\">
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
        <label for=\"sexe\" class=\"col-lg-3 control-label\">Sexe</label>
        <div class=\"col-lg-3\">
            <select class=\"form-control\" id=\"sexe\" name=\"sexe\">
                <option>M</option> 
                <option>F</option>
            </select>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"age\" class=\"col-lg-3 control-label\">Age</label>
        <div class=\"col-lg-5\">
            <input type=\"number\" class=\"form-control\" id=\"age\" name=\"age\"/>
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"allure\" class=\"col-lg-3 control-label\">Allure, attitude</label>
        <div class=\"col-lg-5\">
            <textarea id=\"allure\" name=\"allure\" maxlength=\"200\"></textarea>
        </div>
    </div>

    <div class=\"form-group\">
        <label for=\"avatar\" class=\"col-lg-5 control-label\">Emblème / Portrait</label>
        <div class=\"col-lg-5\">
            <input type=\"file\" id=\"avatar\" name=\"avatar\"/>
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
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
