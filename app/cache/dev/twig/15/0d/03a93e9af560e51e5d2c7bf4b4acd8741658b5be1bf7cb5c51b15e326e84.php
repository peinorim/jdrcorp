<?php

/* JdrCorpElricBundle:Elric:createPerso.html.twig */
class __TwigTemplate_150d03a93e9af560e51e5d2c7bf4b4acd8741658b5be1bf7cb5c51b15e326e84 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Elric - Fiche de personnage</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f567677_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f567677_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f567677_z_recto_1.css");
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "f567677"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f567677") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f567677.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    </head>
    <body>
        <div id=\"fiche_recto\">
        </div>
        <span id=\"proprio\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getProprio"), "html", null, true);
        echo "</span>
        <span id=\"nom\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getNom"), "html", null, true);
        echo "</span>
        <span id=\"fort\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getFort"), "html", null, true);
        echo "</span>
        <span id=\"consti\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getConsti"), "html", null, true);
        echo "</span>
        <span id=\"taille\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getTaille"), "html", null, true);
        echo "</span>
        <span id=\"intell\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getIntell"), "html", null, true);
        echo "</span>
        <span id=\"pouvoir\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getPouvoir"), "html", null, true);
        echo "</span>
        <span id=\"dexte\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getDexte"), "html", null, true);
        echo "</span>
        <span id=\"appa\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getApparence"), "html", null, true);
        echo "</span>
        <span id=\"idee\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getIdee"), "html", null, true);
        echo "</span>
        <span id=\"chance\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getChance"), "html", null, true);
        echo "</span>
        <span id=\"dexterite\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getDexterite"), "html", null, true);
        echo "</span>
        <span id=\"charisme\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getCharisme"), "html", null, true);
        echo "</span>
        <span id=\"modif_degats\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getModifDegats"), "html", null, true);
        echo "</span>
        <span id=\"allure\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getAllure"), "html", null, true);
        echo "</span>
        <span id=\"naiss\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getNaiss"), "html", null, true);
        echo "</span>
        <span id=\"sexe\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getSexe"), "html", null, true);
        echo "</span>
        <span id=\"age\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getAge"), "html", null, true);
        echo "</span>
        ";
        // line 31
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:myComp.html.twig")->display($context);
        // line 32
        echo "        ";
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:mySorts.html.twig")->display($context);
        // line 33
        echo "        ";
        $this->env->loadTemplate("JdrCorpElricBundle:Elric:myCompContact.html.twig")->display($context);
        // line 34
        echo "    </body>
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
        return array (  130 => 34,  127 => 33,  124 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  44 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
