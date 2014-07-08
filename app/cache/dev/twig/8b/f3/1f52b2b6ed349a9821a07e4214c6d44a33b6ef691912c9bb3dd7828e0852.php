<?php

/* JdrCorpGuildesBundle:Guildes:index.html.twig */
class __TwigTemplate_8bf31f52b2b6ed349a9821a07e4214c6d44a33b6ef691912c9bb3dd7828e0852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_guildes.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_guildes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    JdrCorp - Guildes - Accueil
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">L'histoire de Guildes</h3>
        </div>
        <div class=\"panel-body text-justify\">
            L'action du jeu se déroule dans un univers imaginaire nommé Cosme. Six peuples typés vivent dans un archipel nommé les Rivages alors que se produit un cataclysme : un raz-de-marée dévaste les côtes des îles. 
            Quelques mois plus tard, on découvre qu'un nouveau continent est \"apparu\" à deux mois de navigation, recelant de mystérieuses peuplades, créatures et puissances magiques. 
            Les joueurs interprètent des natifs des Rivages, faisant partie d'organisations nommées \"Guildes\" vouées à l'exploration et l'exploitation des ressources du Nouveau Monde. L'ambiance est très proche de l'exploration de l'Amérique par les Européens, le côté magique et fantastique en plus.
            Le système de jeu est simple : chaque personnage est défini par des caractéristiques chiffrées (Fort, Agile, Résistant, Observateur, Savant, Rusé, Talentueux, Charmeur) et de compétences (Navigation, Médecine, Négoce, Astronomie, Armes, etc.). 
            Afin de définir si une action est réussie, la somme de deux dés à six faces, de la caractéristique et la compétence appropriées est comparée sur une table avec la difficulté de l'action (de \"routine\" à \"impossible\"), et un niveau de réussite (ou d'échec) variant de \"réussite critique\" à \"échec critique\" est alors interprété par le meneur de jeu.
        </div>
    </div>

    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Un exemple de magie</h3>
        </div>
        <div class=\"panel-body\">
            <h4><b>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getNom"), "html", null, true);
        echo "</b></h4>
            <p><b>Description : </b>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getEffet"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Un exemple de coup de bol lié au personnage</h3>
        </div>
        <div class=\"panel-body\">
            <h4><b>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getNom"), "html", null, true);
        echo "</b></h4>
            <p><b>Description : </b>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getNom"), "html", null, true);
        echo "</p>
            <p><b>Effet : </b>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getEffet"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Un exemple de mésaventure liée au personnage</h3>
        </div>
        <div class=\"panel-body\">
            <h4><b>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "getNom"), "html", null, true);
        echo "</b></h4>
            <p><b>Description : </b>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "getNom"), "html", null, true);
        echo "</p>
            <p><b>Effet : </b>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mes"]) ? $context["mes"] : $this->getContext($context, "mes")), "getEffet"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"panel panel-danger\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Un exemple de machination</h3>
        </div>
        <div class=\"panel-body\">
            <h4><b>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getNom"), "html", null, true);
        echo "</b></h4>
            <p><b>Description : </b>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getNom"), "html", null, true);
        echo "</p>
            <p><b>Effet pervers : </b>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machi"]) ? $context["machi"] : $this->getContext($context, "machi")), "getEffetPervers"), "html", null, true);
        echo "</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  100 => 38,  215 => 96,  178 => 74,  167 => 65,  124 => 43,  81 => 36,  34 => 7,  97 => 46,  84 => 40,  77 => 35,  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 57,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 26,  210 => 89,  206 => 46,  202 => 87,  198 => 81,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 52,  185 => 47,  181 => 46,  134 => 47,  110 => 40,  113 => 51,  207 => 57,  197 => 50,  188 => 77,  184 => 35,  180 => 48,  172 => 46,  160 => 37,  137 => 51,  127 => 47,  114 => 41,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 67,  128 => 22,  107 => 37,  61 => 25,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 45,  102 => 32,  71 => 22,  67 => 21,  63 => 15,  59 => 16,  38 => 8,  94 => 28,  89 => 35,  85 => 37,  75 => 36,  68 => 22,  56 => 22,  87 => 25,  21 => 2,  26 => 3,  93 => 47,  88 => 28,  78 => 43,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 42,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 58,  117 => 57,  105 => 48,  91 => 29,  62 => 19,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 20,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 48,  120 => 40,  115 => 44,  111 => 43,  108 => 4,  101 => 47,  98 => 31,  96 => 37,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 14,  50 => 14,  43 => 8,  41 => 16,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 58,  193 => 49,  189 => 48,  187 => 84,  182 => 75,  176 => 47,  173 => 44,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 28,  141 => 34,  133 => 23,  130 => 41,  125 => 59,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 41,  103 => 32,  99 => 48,  95 => 33,  92 => 36,  86 => 34,  82 => 33,  80 => 39,  73 => 21,  64 => 18,  60 => 6,  57 => 17,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 7,);
    }
}
