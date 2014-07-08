<?php

/* JdrCorpGuildesBundle:Guildes:equipement.html.twig */
class __TwigTemplate_70c6e22de34613467a787f3faf1acbdecdfd29d11fdb6cb821e84dca3dcf8a56 extends Twig_Template
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
        echo "JdrCorp - Guildes - Equipement
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"alert alert-info\">
    1 guilder de corail = 10 guilders d'écume = 100 guilders de sable
</div>

<div class=\"panel-group\" id=\"accordionArmes\">
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEqCate"]) ? $context["listeEqCate"] : $this->getContext($context, "listeEqCate")));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 14
            echo "    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordionArmes\" href=\"#collapse";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "getId"), "html", null, true);
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "getNom"), "html", null, true);
            echo "
                </a>
            </h4>
        </div>
        <div id=\"collapse";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "getId"), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Rareté</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeEquip"]) ? $context["listeEquip"] : $this->getContext($context, "listeEquip")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "                        ";
                if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getCategorie"), "getId") == $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "getId"))) {
                    // line 35
                    echo "                        <tr>
                            <td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getNom"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getprix"), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getRarete"), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                // line 41
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  215 => 96,  178 => 74,  167 => 65,  124 => 43,  81 => 30,  34 => 7,  97 => 31,  84 => 40,  77 => 25,  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 57,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 26,  210 => 89,  206 => 46,  202 => 87,  198 => 81,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 52,  185 => 47,  181 => 46,  134 => 47,  110 => 40,  113 => 51,  207 => 57,  197 => 50,  188 => 77,  184 => 35,  180 => 48,  172 => 46,  160 => 37,  137 => 51,  127 => 47,  114 => 41,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 67,  128 => 22,  107 => 37,  61 => 18,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 45,  102 => 32,  71 => 22,  67 => 21,  63 => 15,  59 => 16,  38 => 8,  94 => 28,  89 => 35,  85 => 45,  75 => 36,  68 => 22,  56 => 22,  87 => 25,  21 => 2,  26 => 3,  93 => 47,  88 => 28,  78 => 43,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 42,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 65,  117 => 64,  105 => 37,  91 => 29,  62 => 19,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 20,  47 => 9,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 48,  120 => 40,  115 => 44,  111 => 43,  108 => 4,  101 => 36,  98 => 31,  96 => 37,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 14,  50 => 14,  43 => 8,  41 => 16,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 58,  193 => 49,  189 => 48,  187 => 84,  182 => 75,  176 => 47,  173 => 44,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 28,  141 => 34,  133 => 23,  130 => 41,  125 => 4,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 41,  103 => 32,  99 => 48,  95 => 33,  92 => 36,  86 => 34,  82 => 33,  80 => 39,  73 => 21,  64 => 18,  60 => 6,  57 => 17,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 7,);
    }
}
