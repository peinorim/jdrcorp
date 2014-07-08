<?php

/* JdrCorpGuildesBundle:Guildes:loom.html.twig */
class __TwigTemplate_8ab524d616e814ad2a80fccace142dd03dde4875fa50f0abe3dfc0a26164ae48 extends Twig_Template
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
        echo "JdrCorp - Guildes - Loom
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"panel-group\" id=\"accordionMaisons\">
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemaison"]) ? $context["listemaison"] : $this->getContext($context, "listemaison")));
        foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
            // line 10
            echo "    ";
            if (($this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom") != "Génériques")) {
                // line 11
                echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionMaisons\" href=\"#collapse";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
                echo "\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getNom"), "html", null, true);
                echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Tours</h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Portée</th>
                                    <th>Cible</th>
                                    <th>Durée</th>
                                    <th>Effet</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeTour"]) ? $context["listeTour"] : $this->getContext($context, "listeTour")));
                foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
                    // line 38
                    echo "                                ";
                    if (($this->getAttribute($this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getMaison"), "getId") == $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"))) {
                        // line 39
                        echo "                                <tr>
                                    <td>";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getNom"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getPortee"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 42
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getCible"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 43
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getDuree"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "getEffet"), "html", null, true);
                        echo "</td>
                                </tr>
                                ";
                    }
                    // line 47
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Sorts</h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Difficultée</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeSort"]) ? $context["listeSort"] : $this->getContext($context, "listeSort")));
                foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                    // line 67
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getMaison"), "getId") == $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"))) {
                        // line 68
                        echo "                                <tr>
                                    <td>";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getNom"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getDiff"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "getType"), "html", null, true);
                        echo "</td>
                                </tr>
                                    ";
                    }
                    // line 74
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Sortilèges</h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Difficultée</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 92
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeSortilege"]) ? $context["listeSortilege"] : $this->getContext($context, "listeSortilege")));
                foreach ($context['_seq'] as $context["_key"] => $context["sortilege"]) {
                    // line 93
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["sortilege"]) ? $context["sortilege"] : $this->getContext($context, "sortilege")), "getMaison"), "getId") == $this->getAttribute((isset($context["maison"]) ? $context["maison"] : $this->getContext($context, "maison")), "getId"))) {
                        // line 94
                        echo "                                <tr>
                                    <td>";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sortilege"]) ? $context["sortilege"] : $this->getContext($context, "sortilege")), "getNom"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sortilege"]) ? $context["sortilege"] : $this->getContext($context, "sortilege")), "getDiff"), "html", null, true);
                        echo "</td>
                                </tr>
                                    ";
                    }
                    // line 99
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortilege'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
            }
            // line 108
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:loom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 108,  195 => 92,  170 => 74,  146 => 66,  155 => 80,  150 => 67,  160 => 70,  215 => 99,  167 => 89,  134 => 47,  124 => 43,  97 => 43,  263 => 66,  260 => 65,  255 => 67,  244 => 63,  213 => 51,  205 => 95,  188 => 77,  172 => 91,  153 => 68,  210 => 89,  202 => 94,  198 => 81,  194 => 43,  186 => 40,  137 => 51,  127 => 47,  256 => 137,  250 => 133,  242 => 62,  236 => 126,  225 => 54,  212 => 116,  206 => 88,  178 => 74,  165 => 83,  148 => 77,  84 => 40,  77 => 25,  65 => 29,  34 => 7,  100 => 38,  81 => 30,  53 => 17,  339 => 99,  336 => 98,  331 => 100,  328 => 98,  320 => 96,  318 => 95,  297 => 82,  293 => 80,  276 => 68,  271 => 66,  265 => 63,  261 => 139,  257 => 61,  253 => 60,  249 => 59,  245 => 58,  237 => 109,  233 => 56,  226 => 50,  218 => 47,  190 => 84,  184 => 4,  152 => 78,  76 => 29,  129 => 39,  126 => 48,  118 => 65,  114 => 44,  110 => 43,  90 => 28,  70 => 30,  58 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 93,  312 => 98,  309 => 97,  305 => 87,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 69,  268 => 85,  264 => 84,  258 => 81,  252 => 65,  247 => 78,  241 => 57,  229 => 55,  220 => 48,  214 => 46,  177 => 65,  169 => 29,  140 => 75,  132 => 67,  128 => 22,  107 => 37,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 100,  219 => 92,  217 => 52,  208 => 68,  204 => 39,  179 => 81,  159 => 23,  143 => 52,  135 => 53,  119 => 45,  102 => 41,  71 => 22,  67 => 19,  63 => 21,  59 => 16,  38 => 8,  94 => 44,  89 => 35,  85 => 34,  75 => 36,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 47,  88 => 37,  78 => 43,  46 => 15,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 48,  196 => 90,  183 => 82,  171 => 102,  166 => 28,  163 => 62,  158 => 67,  156 => 69,  151 => 59,  142 => 59,  138 => 69,  136 => 56,  121 => 58,  117 => 64,  105 => 37,  91 => 29,  62 => 19,  49 => 11,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 28,  69 => 20,  47 => 16,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 23,  123 => 48,  120 => 47,  115 => 44,  111 => 43,  108 => 36,  101 => 36,  98 => 40,  96 => 37,  83 => 36,  74 => 13,  66 => 24,  55 => 10,  52 => 14,  50 => 11,  43 => 15,  41 => 16,  35 => 6,  32 => 3,  29 => 2,  209 => 96,  203 => 111,  199 => 93,  193 => 30,  189 => 71,  187 => 84,  182 => 75,  176 => 75,  173 => 89,  168 => 72,  164 => 71,  162 => 24,  154 => 58,  149 => 51,  147 => 58,  144 => 76,  141 => 48,  133 => 67,  130 => 41,  125 => 67,  122 => 66,  116 => 56,  112 => 42,  109 => 19,  106 => 42,  103 => 32,  99 => 48,  95 => 39,  92 => 38,  86 => 34,  82 => 33,  80 => 32,  73 => 21,  64 => 23,  60 => 15,  57 => 17,  54 => 15,  51 => 11,  48 => 10,  45 => 9,  42 => 15,  39 => 14,  36 => 13,  33 => 4,  30 => 10,);
    }
}
