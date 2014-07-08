<?php

/* ::layout_index.html.twig */
class __TwigTemplate_ec85d3f50d538a2b85562920f0666d93e6ae11329455d77024ef40330f12e6e5 extends Twig_Template
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
            // asset "2a2fbda_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a2fbda_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2a2fbda_jquery-1.10.2.min_1.js");
            // line 7
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "2a2fbda"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2a2fbda") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2a2fbda.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ba32e21_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ba32e21_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ba32e21_bootstrap.min_1.js");
            // line 10
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "ba32e21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ba32e21") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ba32e21.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "
        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3daeaa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3daeaa_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e3daeaa_bootstrap_1.css");
            // line 14
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
        // line 16
        echo "    </head>
";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 60
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

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    <nav class=\"navbar navbar-inverse\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("jdr_corp_index_homepage_duplicate");
        echo "\">Accueil JdrCorp</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar\">
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Elric <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("Elric");
        echo "\">Index</a></li>
                        ";
        // line 34
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") == false)) {
            // line 35
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">Inscription</a></li>
                        ";
        }
        // line 37
        echo "                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Guildes <b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("Guildes");
        echo "\">Index</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("Guildes_armes");
        echo "\">Armes & Armures</a></li>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("Guildes_artefacts");
        echo "\">Artefacts</a></li>
                        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("Guildes_cdb");
        echo "\">Coups de bols & Mésaventures</a></li>
                        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("Guildes_comp");
        echo "\">Compétences & Métiers</a></li>
                        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("Guildes_equipement");
        echo "\">Equipement</a></li>
                        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("Guildes_dice");
        echo "\">Lanceur de dés</a></li>
                        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("Guildes_loom");
        echo "\">Loom</a></li>
                        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("Guildes_machinations");
        echo "\">Machinations</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
  ";
        // line 56
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 58
        echo "
";
    }

    // line 56
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 57
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 57,  204 => 56,  199 => 58,  197 => 56,  188 => 50,  184 => 49,  180 => 48,  176 => 47,  172 => 46,  168 => 45,  164 => 44,  160 => 43,  156 => 42,  149 => 37,  143 => 35,  141 => 34,  137 => 33,  127 => 26,  117 => 18,  114 => 17,  108 => 4,  95 => 60,  93 => 17,  90 => 16,  76 => 14,  72 => 13,  69 => 12,  55 => 10,  36 => 7,  27 => 4,  22 => 1,  62 => 17,  58 => 16,  50 => 9,  46 => 10,  40 => 6,  37 => 5,  32 => 6,  29 => 2,);
    }
}
