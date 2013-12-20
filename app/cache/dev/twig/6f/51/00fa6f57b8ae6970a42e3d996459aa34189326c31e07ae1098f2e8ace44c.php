<?php

/* JdrCorpElricBundle:Elric:createPerso.html.twig */
class __TwigTemplate_6f5100fa6f57b8ae6970a42e3d996459aa34189326c31e07ae1098f2e8ace44c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host"), "html", null, true);
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
        if (($this->getAttribute($this->getContext($context, "image"), "path") != null)) {
            // line 15
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "image"), "getWebPath")), "html", null, true);
            echo "\" height=\"200\" width=\"200\" id=\"embleme\"/>
        ";
        }
        // line 17
        echo "        <span id=\"proprio\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getProprio"), "html", null, true);
        echo "</span>
        <span id=\"nom\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getNom"), "html", null, true);
        echo "</span>
        <span id=\"fort\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getFort"), "html", null, true);
        echo "</span>
        <span id=\"consti\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getConsti"), "html", null, true);
        echo "</span>
        <span id=\"taille\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getTaille"), "html", null, true);
        echo "</span>
        <span id=\"intell\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getIntell"), "html", null, true);
        echo "</span>
        <span id=\"pouvoir\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getPouvoir"), "html", null, true);
        echo "</span>
        <span id=\"dexte\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getDexte"), "html", null, true);
        echo "</span>
        <span id=\"appa\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getApparence"), "html", null, true);
        echo "</span>
        <span id=\"idee\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getIdee"), "html", null, true);
        echo "</span>
        <span id=\"chance\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getChance"), "html", null, true);
        echo "</span>
        <span id=\"dexterite\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getDexterite"), "html", null, true);
        echo "</span>
        <span id=\"charisme\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getCharisme"), "html", null, true);
        echo "</span>
        <span id=\"modif_degats\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getModifDegats"), "html", null, true);
        echo "</span>
        <span id=\"allure\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getAllure"), "html", null, true);
        echo "</span>
        <span id=\"naiss\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getNaiss"), "html", null, true);
        echo "</span>
        <span id=\"sexe\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getSexe"), "html", null, true);
        echo "</span>
        <span id=\"age\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "perso"), "getAge"), "html", null, true);
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
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Elric!-1.jpg"), "html", null, true);
        echo "\") no-repeat left top;
            width:1169px;
            height:1694px;
        }
        #fiche_verso1 {
            page-break-before:always;
            page-break-after:always;
            background:url(\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Elric!-2.jpg"), "html", null, true);
        echo "\") no-repeat left top;
            top:1700px;
            width:1169px;
            height:1694px;
        }
        #fiche_verso2 {
            page-break-before:always;
            background:url(\"";
        // line 63
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
            left:630px;
            font-size: 14px;
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
        return array (  161 => 63,  151 => 56,  141 => 49,  129 => 39,  126 => 38,  123 => 37,  120 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  45 => 17,  39 => 15,  37 => 14,  22 => 2,  19 => 1,);
    }
}
