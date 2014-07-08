<?php

/* JdrCorpGuildesBundle:Guildes:cdb_maisons.html.twig */
class __TwigTemplate_88a0ef26098b5c81082e1b378e0ad86138f56b5d91df623856ee7744ff5fa537 extends Twig_Template
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
        echo "<div class=\"panel-group\" id=\"accordionMaisons\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemaison"]) ? $context["listemaison"] : $this->getContext($context, "listemaison")));
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom") != "Génériques")) {
                // line 4
                echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionMaisons\" href=\"#collapse";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
                echo "\">
                        ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom"), "html", null, true);
                echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listecdbmaison"]) ? $context["listecdbmaison"] : $this->getContext($context, "listecdbmaison")));
                foreach ($context['_seq'] as $context["_key"] => $context["cdb"]) {
                    // line 15
                    echo "                ";
                    if (($this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId") == $this->getAttribute($this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getMaison"), "getId"))) {
                        // line 16
                        echo "                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"thumbnail\">
                        <div class=\"caption\">
                            <h4><b>";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getTitre"), "html", null, true);
                        echo "</b></h4>
                            <h5><b>Coup de bol</b></h5>
                            <p>";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getCdb"), "html", null, true);
                        echo "</p>
                            <p><i>";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getEffet"), "html", null, true);
                        echo "</i></p>
                            <hr></hr>
                            <h5><b>Mésaventure</b></h5>
                            <p>";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getMes"), "html", null, true);
                        echo "</p>
                            <p><i>";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdb"]) ? $context["cdb"] : $this->getContext($context, "cdb")), "getMesEffet"), "html", null, true);
                        echo "</i></p>
                        </div>
                    </div>
                </div>
                ";
                    }
                    // line 31
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cdb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </div>
        </div>
    </div>
    ";
            }
            // line 36
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:cdb_maisons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  34 => 7,  97 => 31,  84 => 40,  77 => 25,  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 57,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 26,  210 => 89,  206 => 46,  202 => 87,  198 => 43,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 52,  185 => 47,  181 => 46,  134 => 20,  110 => 19,  113 => 51,  207 => 57,  197 => 50,  188 => 50,  184 => 35,  180 => 48,  172 => 46,  160 => 37,  137 => 51,  127 => 47,  114 => 20,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 51,  128 => 22,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 45,  102 => 32,  71 => 22,  67 => 21,  63 => 15,  59 => 14,  38 => 8,  94 => 28,  89 => 31,  85 => 36,  75 => 36,  68 => 14,  56 => 22,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 28,  78 => 21,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 42,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 40,  117 => 18,  105 => 40,  91 => 29,  62 => 19,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 20,  47 => 9,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 48,  123 => 46,  120 => 40,  115 => 44,  111 => 43,  108 => 4,  101 => 36,  98 => 31,  96 => 40,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 21,  50 => 14,  43 => 8,  41 => 16,  35 => 5,  32 => 12,  29 => 4,  209 => 82,  203 => 78,  199 => 58,  193 => 49,  189 => 48,  187 => 84,  182 => 66,  176 => 47,  173 => 44,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 25,  144 => 28,  141 => 34,  133 => 23,  130 => 41,  125 => 4,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 32,  92 => 38,  86 => 28,  82 => 22,  80 => 39,  73 => 21,  64 => 18,  60 => 6,  57 => 16,  54 => 15,  51 => 14,  48 => 10,  45 => 12,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 7,);
    }
}
