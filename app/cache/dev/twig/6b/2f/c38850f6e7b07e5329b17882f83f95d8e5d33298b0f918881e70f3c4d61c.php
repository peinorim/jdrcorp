<?php

/* JdrCorpGuildesBundle:Guildes:comp.html.twig */
class __TwigTemplate_6b2fc38850f6e7b07e5329b17882f83f95d8e5d33298b0f918881e70f3c4d61c extends Twig_Template
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
        echo "JdrCorp - Guildes - Compétences & Métiers
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"col-md-4\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Métiers</h3>
        </div>
        <div class=\"panel-body\"> 
            <ul id=\"all_met\" class=\"nav nav-pills nav-stacked\" style=\"max-width: 260px;\">
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMetiers"]) ? $context["listeMetiers"] : $this->getContext($context, "listeMetiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["metier"]) {
            // line 15
            echo "                <li style=\"float:left;\" id=\"metier_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getId"), "html", null, true);
            echo "\">
                    <a href=\"#\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metier"]) ? $context["metier"] : $this->getContext($context, "metier")), "getNom"), "html", null, true);
            echo "</a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    </div>
</div>
<div class=\"col-md-6\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Compétences</h3>
        </div>
        <div class=\"panel-body\">
            <div style=\"margin:0!important;\" class=\"page-header\">Compétences d'apprenti</div>
            <ul id=\"all_comp\" class=\"nav nav-pills nav-stacked\">
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCompApp"]) ? $context["listeCompApp"] : $this->getContext($context, "listeCompApp")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 31
            echo "                <li style=\"float:left;margin-top:0!important;line-height: 1.25em;\" id=\"comp_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
            echo "\" data-carac=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getCarac"), "getId"), "html", null, true);
            echo "\" data-chap=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getChapitre"), "getId"), "html", null, true);
            echo "\">
                    <a href=\"#\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
            echo "
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </ul>
            <div style=\"margin:0!important;\" class=\"page-header\">Compétences de compagnon</div>
            <ul id=\"all_compcpg\" class=\"nav nav-pills nav-stacked\">
                ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCompCpg"]) ? $context["listeCompCpg"] : $this->getContext($context, "listeCompCpg")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 41
            echo "                <li style=\"float:left;margin-top:0!important;line-height: 1.25em;\" id=\"comp_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getId"), "html", null, true);
            echo "\" data-carac=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getCarac"), "getId"), "html", null, true);
            echo "\" data-chap=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getChapitre"), "getId"), "html", null, true);
            echo "\">
                    <a href=\"#\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comp"]) ? $context["comp"] : $this->getContext($context, "comp")), "getNom"), "html", null, true);
            echo "
                    </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </ul>
        </div>
    </div>
</div>
<div class=\"col-md-2\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Caractéristiques</h3>
        </div>
        <div class=\"panel-body\"> 
            <ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 260px;\">
        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCarac"]) ? $context["listeCarac"] : $this->getContext($context, "listeCarac")));
        foreach ($context['_seq'] as $context["_key"] => $context["carac"]) {
            // line 59
            echo "                <li id=\"carac_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carac"]) ? $context["carac"] : $this->getContext($context, "carac")), "getId"), "html", null, true);
            echo "\" style=\"margin-top:0!important;line-height: 1.25em;\">
                    <a href=\"#\">
                        ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carac"]) ? $context["carac"] : $this->getContext($context, "carac")), "getNom"), "html", null, true);
            echo "
                    </a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </ul>
        </div>
    </div>
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Chapitres</h3>
        </div>
        <div class=\"panel-body\"> 
            <ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 260px;\">
        ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeChap"]) ? $context["listeChap"] : $this->getContext($context, "listeChap")));
        foreach ($context['_seq'] as $context["_key"] => $context["chap"]) {
            // line 75
            echo "                <li id=\"chap_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chap"]) ? $context["chap"] : $this->getContext($context, "chap")), "getId"), "html", null, true);
            echo "\" style=\"margin-top:0!important;line-height: 1.25em;\">
                    <a href=\"#\">
                        ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chap"]) ? $context["chap"] : $this->getContext($context, "chap")), "getNom"), "html", null, true);
            echo "
                    </a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </ul>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function() {
        \$(\"#comp_path\").addClass('active');
        \$(\"li\").click(function() {
            \$(\"li.active\").each(function(index) {
                \$(this).removeClass('active');
            });
            \$(this).addClass('active');
            var type = \$(this).attr('id').split(\"_\")[0];
            var id = parseInt(\$(this).attr('id').split(\"_\")[1]);
            if (id !== 0) {
                \$.post(\"";
        // line 96
        echo sprintf($this->env->getExtension('url_decode_extension')->urlDecode($this->env->getExtension('routing')->getPath("Guildes_links", array("type" => "%s", "id" => "%s"))), "\"+type+\"", "\"+id+\"");
        echo "\",
                        function(response) {
                            if (response['comp'] !== null) {
                                for (comp_id in response['comp']) {
                                    \$('#comp_' + comp_id).addClass('active');
                                }
                            } else if (response['metier'] !== null) {
                                for (metier_id in response['metier']) {
                                    \$('#metier_' + metier_id).addClass('active');
                                }
                            } else if (response['compCarac'] !== null) {
                                for (comp_id in response['compCarac']) {
                                    \$('#comp_' + comp_id).addClass('active');
                                }
                            } else if (response['compChap'] !== null) {
                                for (chap_id in response['compChap']) {
                                    \$('#comp_' + chap_id).addClass('active');
                                }
                            }
                        });
            }
        });

        \$(\"#all_comp li, #all_compcpg li\").mouseenter(function() {
            var carac_id = parseInt(\$(this).attr('data-carac'));
            var chap_id = parseInt(\$(this).attr('data-chap'));
            \$('#carac_' + carac_id).addClass('active');
            \$('#chap_' + chap_id).addClass('active');
        });
        \$(\"#all_comp li, #all_compcpg li\").mouseleave(function() {
            var carac_id = parseInt(\$(this).attr('data-carac'));
            var chap_id = parseInt(\$(this).attr('data-chap'));
            \$('#carac_' + carac_id).removeClass('active');
            \$('#chap_' + chap_id).removeClass('active');
        });
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "JdrCorpGuildesBundle:Guildes:comp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 96,  178 => 74,  167 => 65,  124 => 43,  81 => 30,  34 => 7,  97 => 31,  84 => 40,  77 => 25,  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 57,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 26,  210 => 89,  206 => 46,  202 => 87,  198 => 81,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 52,  185 => 47,  181 => 46,  134 => 47,  110 => 40,  113 => 51,  207 => 57,  197 => 50,  188 => 77,  184 => 35,  180 => 48,  172 => 46,  160 => 37,  137 => 51,  127 => 47,  114 => 41,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 51,  128 => 22,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 45,  102 => 32,  71 => 22,  67 => 21,  63 => 15,  59 => 16,  38 => 8,  94 => 28,  89 => 31,  85 => 31,  75 => 36,  68 => 19,  56 => 22,  87 => 25,  21 => 2,  26 => 3,  93 => 16,  88 => 28,  78 => 21,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 42,  151 => 59,  142 => 59,  138 => 54,  136 => 56,  121 => 40,  117 => 18,  105 => 37,  91 => 29,  62 => 19,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 20,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 48,  123 => 46,  120 => 40,  115 => 44,  111 => 43,  108 => 4,  101 => 36,  98 => 31,  96 => 40,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 21,  50 => 14,  43 => 8,  41 => 16,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 58,  193 => 49,  189 => 48,  187 => 84,  182 => 75,  176 => 47,  173 => 44,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 28,  141 => 34,  133 => 23,  130 => 41,  125 => 4,  122 => 43,  116 => 41,  112 => 36,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 33,  92 => 38,  86 => 28,  82 => 22,  80 => 39,  73 => 21,  64 => 18,  60 => 6,  57 => 16,  54 => 15,  51 => 14,  48 => 10,  45 => 12,  42 => 7,  39 => 9,  36 => 13,  33 => 4,  30 => 7,);
    }
}
