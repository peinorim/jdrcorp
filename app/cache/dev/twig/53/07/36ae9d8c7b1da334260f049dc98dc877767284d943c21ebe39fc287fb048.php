<?php

/* JdrCorpElricBundle:Elric:createPerso.html.twig */
class __TwigTemplate_530736ae9d8c7b1da334260f049dc98dc877767284d943c21ebe39fc287fb048 extends Twig_Template
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
        echo "\t
<base href=\"http://";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host"), "html", null, true);
        echo "\">
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" >
        <title>Elric - Fiche de personnage</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <div id=\"fiche_recto\"></div>
        <div id=\"fiche_verso1\"></div>
        <div id=\"fiche_verso2\"></div>
        ";
        // line 14
        if ((((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")) != null) && ($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path") != null))) {
            // line 15
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getWebPath")), "html", null, true);
            echo "\" height=\"200\" width=\"200\" id=\"embleme\"/>
        ";
        }
        // line 17
        echo "        <span id=\"proprio\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getProprio"), "html", null, true);
        echo "</span>
        <span id=\"nom\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getNom"), "html", null, true);
        echo "</span>
        <span id=\"fort\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getFort"), "html", null, true);
        echo "</span>
        <span id=\"consti\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getConsti"), "html", null, true);
        echo "</span>
        <span id=\"taille\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getTaille"), "html", null, true);
        echo "</span>
        <span id=\"intell\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getIntell"), "html", null, true);
        echo "</span>
        <span id=\"pouvoir\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getPouvoir"), "html", null, true);
        echo "</span>
        <span id=\"dexte\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getDexte"), "html", null, true);
        echo "</span>
        <span id=\"appa\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getApparence"), "html", null, true);
        echo "</span>
        <span id=\"idee\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getIdee"), "html", null, true);
        echo "</span>
        <span id=\"chance\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getChance"), "html", null, true);
        echo "</span>
        <span id=\"dexterite\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getDexterite"), "html", null, true);
        echo "</span>
        <span id=\"charisme\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getCharisme"), "html", null, true);
        echo "</span>
        <span id=\"modif_degats\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getModifDegats"), "html", null, true);
        echo "</span>
        <span id=\"allure\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getAllure"), "html", null, true);
        echo "</span>
        <span id=\"naiss\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getNaiss"), "html", null, true);
        echo "</span>
        <span id=\"sexe\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getSexe"), "html", null, true);
        echo "</span>
        <span id=\"age\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getAge"), "html", null, true);
        echo "</span>
        ";
        // line 35
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:myComp.html.twig")->display($context);
        // line 36
        echo "        ";
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:mySorts.html.twig")->display($context);
        // line 37
        echo "        ";
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:myCompContact.html.twig")->display($context);
        // line 38
        echo "        ";
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:myCompJet.html.twig")->display($context);
        // line 39
        echo "        ";
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:mypvmana.html.twig")->display($context);
        // line 40
        echo "    </body>
    <style>
        span, table, img, ul{
            font-family: Calibri;
            font-size: 20px;
            font-weight: bold;
            position:absolute;
            display:block;
        }
        #fiche_recto {
            background:url(\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Elric!-1.jpg"), "html", null, true);
        echo "\") no-repeat left top;
            width:1169px;
            height:1694px;
        }
        #fiche_verso1 {
            page-break-before:always;
            page-break-after:always;
            background:url(\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Elric!-2.jpg"), "html", null, true);
        echo "\") no-repeat left top;
            top:1700px;
            width:1169px;
            height:1694px;
        }
        #fiche_verso2 {
            page-break-before:always;
            background:url(\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Elric!-3.jpg"), "html", null, true);
        echo "\") no-repeat left top;
            top:3390px;
            width:1169px;
            height:1694px;
        }
        #proprio{  
            top:245px;
            left:400px;
        }
        #nom{  
            top:330px;
            left:450px;
        }
        #embleme{
            top:260px;
            left:860px;
            z-index: 100;
        }
        #fort{
            top:330px;
            left:150px;
        }
        #consti{
            top:358px;
            left:150px;
        }
        #modif_degats{
            top:358px;
            left:235px;
        }
        #taille{
            top:388px;
            left:150px;
        }
        #intell{
            top:415px;
            left:150px;
        }
        #idee{
            top:415px;
            left:325px;
        }
        #pouvoir{
            top:444px;
            left:150px;
        }
        #chance{
            top:442px;
            left:325px;
        }
        #dexte{
            top:474px;
            left:150px;
        }
        #dexterite{
            top:472px;
            left:325px;
        }
        #appa{
            top:501px;
            left:150px;
        }
        #charisme{
            top:499px;
            left:325px;
        }
        #allure{
            top:419px;
            left:400px;
            width:350px;
            font-size: 15px;
            line-height: 28px;
            text-align: justify;
        }
        #naiss{
            top:358px;
            left:528px;
        }
        #sexe{
            top:358px;
            left:685px;
        }
        #age{
            top:358px;
            left:770px;
        }
        #myComp{
            top:565px;
            left:100px;
            width:750px;
            overflow:hidden;
            font-size: 13px;
        }
        #myComp li  { 
            width:50%;
        }
        li{
            line-height:1.5em;
            float:left;
            display:inline;
        }
        #mySorts{
            top:979px;
            left:115px;
            font-size: 14px;
        }
        #myCompContact{
            top:1170px;
            left:90px;
            font-size: 14px;
        }
        #myCompJet{
            top:1350px;
            left:625px;
            font-size: 14px;
        }
        #myArmure{
            top:1160px;
            left:640px;
            font-size: 14px;
        }
        #myPv{
            top:600px;
            left:850px;
            width:150px;
            overflow:hidden;
            font-size: 13.5px;
        }
        #myPv li:first-line  { 
            margin-left:40px;;
        }
        #myPv li  { 
            width:10%;
            margin-left:5px;
            margin-right:5px;
        }
        #myMana{
            top:833px;
            left:870px;
            width:150px;
            overflow:hidden;
            font-size: 12px;
        }
        #myMana li:first-line  { 
            margin-left:70px;;
        }
        #myMana li  { 
            width:2px;
            margin-left:10px;
            margin-right:10px;
        }
    </style>
</html>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:createPerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  126 => 38,  118 => 35,  114 => 34,  110 => 33,  90 => 28,  70 => 23,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 40,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 31,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 29,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 25,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 37,  120 => 36,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 24,  66 => 22,  55 => 15,  52 => 21,  50 => 18,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 64,  162 => 57,  154 => 57,  149 => 51,  147 => 58,  144 => 50,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 32,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 27,  82 => 26,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 19,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 15,  36 => 5,  33 => 4,  30 => 7,);
    }
}
