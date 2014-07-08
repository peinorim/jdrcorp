<?php

/* JdrCorpIndexBundle:Index:profile.html.twig */
class __TwigTemplate_8ab612cc8aea8249fa52d0dc7bc0538b0f9c9990397607e2326757aa39e94a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "JdrCorp - Elric - Mes fiches
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && (twig_length_filter($this->env, (isset($context["myfiches"]) ? $context["myfiches"] : $this->getContext($context, "myfiches"))) > 0))) {
            // line 7
            echo "<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Vous avez créé ";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["myfiches"]) ? $context["myfiches"] : $this->getContext($context, "myfiches"))), "html", null, true);
            echo " fiches pour Elric</h3>
    </div>
    <div class=\"panel-body\">

        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["myfiches"]) ? $context["myfiches"] : $this->getContext($context, "myfiches")));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 23
                echo "                <tr>
                    <td class=\"col-md-2\">Nom du personnage : ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "getPerso"), "getNom"), "html", null, true);
                echo " -  Créé le : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "date"), "d/m/Y à H:i:s"), "html", null, true);
                echo "</td>
                    <td class=\"col-md-1\"><form action=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Elric_review", array("id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "getId"), "format" => "pdf")), "html", null, true);
                echo "\" target=\"_blank\" method=\"post\"><button type=\"submit\" class=\"btn btn-primary btn-sm\">PDF</button></form></td>
                    <td class=\"col-md-1\"><form action=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Elric_review", array("id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "getId"), "format" => "jpg")), "html", null, true);
                echo "\" target=\"_blank\" method=\"post\"><button type=\"submit\" class=\"btn btn-primary btn-sm\">JPG</button></form></td>
                    <td class=\"col-md-1\">
                        <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#myModal\">x</button>
                        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Suppression d'une fiche de personnage</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"alert alert-danger\">Attention. La suppression d'une fiche est définitive. Voulez-vous tout de même la supprimer ?</div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <form action=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Elric_delete_fiche", array("id" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "getId"))), "html", null, true);
                echo "\" method=\"post\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer cette fiche</button>
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </tbody>
        </table>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "JdrCorpIndexBundle:Index:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 51,  207 => 57,  197 => 56,  188 => 50,  184 => 49,  180 => 48,  172 => 46,  160 => 43,  137 => 33,  127 => 26,  114 => 17,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 56,  179 => 69,  159 => 61,  143 => 35,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 25,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 17,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 42,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 18,  105 => 40,  91 => 27,  62 => 22,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 24,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 4,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 14,  66 => 23,  55 => 10,  52 => 21,  50 => 9,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 58,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 47,  173 => 65,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 49,  141 => 34,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 60,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
