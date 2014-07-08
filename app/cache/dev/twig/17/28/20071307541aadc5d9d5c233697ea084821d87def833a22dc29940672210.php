<?php

/* JdrCorpIndexBundle:Index:register.html.twig */
class __TwigTemplate_172820071307541aadc5d9d5c233697ea084821d87def833a22dc29940672210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_simple.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "JdrCorp - Inscription
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"page-header\">
    <h1 style=\"margin-left:20px;\">Inscription</h1>
</div>
<div class=\"well\">
    <div class=\"page-header\">
        <p><b>Notez que l'inscription est tout à fait facultative pour générer vos fiches.</b></p>
        <p>Une fois inscrit vous pourrez cependant profiter d'une sauvegarde automatique de vos fiches ainsi que la possibilité de les visualiser.</p>
    </div>
    <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("register_submit");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
            <div class=\"col-md-3\">
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\" required>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Mot de passe</label>
            <div class=\"col-md-3\">
                <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"pass\" placeholder=\"Mot de passe\" required>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Confirmation du mot de passe</label>
            <div class=\"col-md-3\">
                <input type=\"password\" class=\"form-control\" id=\"confirm\" name=\"confirm\" placeholder=\"Confirmez votre mot de passe\" required>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-default\">S'inscrire</button>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "JdrCorpIndexBundle:Index:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 51,  207 => 57,  197 => 56,  188 => 50,  184 => 49,  180 => 48,  172 => 46,  160 => 43,  137 => 33,  127 => 26,  114 => 17,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 56,  179 => 69,  159 => 61,  143 => 35,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 25,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 17,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 42,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 18,  105 => 40,  91 => 27,  62 => 22,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 24,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 4,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 14,  66 => 23,  55 => 10,  52 => 21,  50 => 14,  43 => 8,  41 => 7,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 58,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 47,  173 => 65,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 58,  144 => 49,  141 => 34,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 60,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
