<?php

/* ::layout_guildes.html.twig */
class __TwigTemplate_c002a846c255e090b7b029a1b1f5cc2c3d9e9aca40d7d55fe46854620999c803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fb603a4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fb603a4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fb603a4_jquery-1.10.2.min_1.js");
            // line 7
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "fb603a4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fb603a4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fb603a4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8116159_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8116159_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8116159_bootstrap.min_1.js");
            // line 10
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "8116159"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8116159") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8116159.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "efd3992_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_efd3992_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/efd3992_index_1.js");
            // line 13
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "efd3992"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_efd3992") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/efd3992.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8c5da37_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c5da37_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8c5da37_dice_1.js");
            // line 16
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "8c5da37"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c5da37") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8c5da37.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
        ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3daeaa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3daeaa_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e3daeaa_bootstrap_1.css");
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "e3daeaa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3daeaa") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e3daeaa.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2c2f727_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c2f727_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2c2f727_index_1.css");
            // line 23
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "2c2f727"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c2f727") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2c2f727.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "    </head>
";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-47119875-1', 'paocorp.com');
         ga('send', 'pageview');
    </script>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Watch My Desk";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "    <nav class=\"navbar navbar-inverse\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("jdr_corp_index_homepage_duplicate");
        echo "\">Accueil JdrCorp</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar\">
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Elric <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("Elric");
        echo "\">Index</a></li>
                        ";
        // line 43
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 44
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">Inscription</a></li>
                        ";
        }
        // line 46
        echo "                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Guildes <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("Guildes");
        echo "\">Index</a></li>
                        <li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("Guildes_armes");
        echo "\">Armes & Armures</a></li>
                        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("Guildes_artefacts");
        echo "\">Artefacts</a></li>
                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("Guildes_cdb");
        echo "\">Coups de bols & Mésaventures</a></li>
                        <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("Guildes_comp");
        echo "\">Compétences & Métiers</a></li>
                        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("Guildes_equipement");
        echo "\">Equipement</a></li>
                        <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("Guildes_dice");
        echo "\">Lanceur de dés</a></li>
                        <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("Guildes_loom");
        echo "\">Loom</a></li>
                        <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("Guildes_machinations");
        echo "\">Machinations</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
  ";
        // line 65
        if ((isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice"))) {
            // line 66
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo " alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
            echo twig_escape_filter($this->env, (isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "html", null, true);
            echo "</div>
  ";
        }
        // line 68
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 70
        echo "
";
    }

    // line 68
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 69
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout_guildes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 69,  272 => 68,  267 => 70,  245 => 59,  237 => 57,  225 => 54,  213 => 51,  200 => 44,  174 => 27,  165 => 4,  152 => 72,  150 => 26,  210 => 89,  206 => 46,  202 => 87,  198 => 43,  194 => 42,  190 => 84,  186 => 83,  53 => 13,  271 => 87,  256 => 66,  250 => 81,  233 => 56,  212 => 56,  205 => 52,  185 => 47,  181 => 46,  134 => 20,  110 => 19,  113 => 51,  207 => 57,  197 => 50,  188 => 50,  184 => 35,  180 => 48,  172 => 46,  160 => 37,  137 => 51,  127 => 47,  114 => 20,  90 => 16,  76 => 14,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 68,  258 => 81,  252 => 80,  247 => 78,  241 => 58,  229 => 55,  220 => 70,  214 => 57,  177 => 45,  169 => 60,  140 => 55,  132 => 51,  128 => 22,  107 => 18,  61 => 13,  273 => 96,  269 => 94,  254 => 65,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 92,  217 => 52,  208 => 68,  204 => 56,  179 => 81,  159 => 61,  143 => 52,  135 => 53,  119 => 45,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 37,  85 => 36,  75 => 25,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 16,  88 => 15,  78 => 21,  46 => 9,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 51,  196 => 90,  183 => 82,  171 => 26,  166 => 39,  163 => 62,  158 => 36,  156 => 42,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 18,  105 => 40,  91 => 27,  62 => 22,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 13,  69 => 12,  47 => 9,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 48,  123 => 46,  120 => 40,  115 => 44,  111 => 43,  108 => 4,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 13,  66 => 23,  55 => 10,  52 => 21,  50 => 9,  43 => 8,  41 => 7,  35 => 5,  32 => 6,  29 => 2,  209 => 82,  203 => 78,  199 => 58,  193 => 49,  189 => 48,  187 => 84,  182 => 66,  176 => 47,  173 => 44,  168 => 45,  164 => 44,  162 => 57,  154 => 58,  149 => 37,  147 => 25,  144 => 28,  141 => 34,  133 => 23,  130 => 41,  125 => 4,  122 => 43,  116 => 41,  112 => 89,  109 => 34,  106 => 36,  103 => 41,  99 => 40,  95 => 39,  92 => 38,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 14,  48 => 10,  45 => 17,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
