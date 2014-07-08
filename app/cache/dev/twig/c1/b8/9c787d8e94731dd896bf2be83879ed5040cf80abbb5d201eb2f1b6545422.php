<?php

/* JdrCorpElricBundle:Elric:mypvmana.html.twig */
class __TwigTemplate_c1b89c787d8e94731dd896bf2be83879ed5040cf80abbb5d201eb2f1b6545422 extends Twig_Template
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
        echo "<ul id=\"myPv\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((-2), 49));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getPv") == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 4
                echo "    <li style='color:red;'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</li>
    ";
            } else {
                // line 6
                echo "    <li>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
<ul id=\"myMana\">
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((-2), 85));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "        ";
            if ((($this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getMana") == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))) && ($this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "getMana") >= 16))) {
                // line 13
                echo "    <li style='color:red;'>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</li>
    ";
            } else {
                // line 15
                echo "    <li>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "JdrCorpElricBundle:Elric:mypvmana.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  56 => 13,  53 => 12,  49 => 11,  35 => 6,  100 => 40,  96 => 39,  83 => 36,  80 => 35,  76 => 34,  60 => 20,  51 => 17,  43 => 15,  92 => 38,  89 => 30,  81 => 28,  63 => 22,  52 => 18,  42 => 15,  36 => 13,  32 => 12,  46 => 15,  34 => 11,  30 => 10,  61 => 11,  55 => 19,  47 => 16,  29 => 4,  26 => 3,  164 => 64,  154 => 57,  144 => 50,  132 => 40,  129 => 39,  126 => 38,  123 => 37,  120 => 39,  118 => 35,  114 => 34,  110 => 44,  106 => 34,  102 => 33,  98 => 32,  94 => 29,  90 => 28,  86 => 37,  82 => 26,  78 => 25,  74 => 26,  70 => 23,  66 => 23,  62 => 15,  58 => 20,  54 => 19,  50 => 18,  45 => 9,  39 => 14,  37 => 12,  22 => 2,  19 => 1,);
    }
}
