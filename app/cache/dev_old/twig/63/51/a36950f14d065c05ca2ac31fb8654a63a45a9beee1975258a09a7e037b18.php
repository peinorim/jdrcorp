<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_6351a36950f14d065c05ca2ac31fb8654a63a45a9beee1975258a09a7e037b18 extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "class") . $this->getAttribute($this->getContext($context, "trace"), "type")) . $this->getAttribute($this->getContext($context, "trace"), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute($this->getContext($context, "trace"), "file");
            echo " line ";
            echo $this->getAttribute($this->getContext($context, "trace"), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 7,  87 => 20,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  85 => 19,  79 => 18,  75 => 17,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  91 => 31,  69 => 25,  62 => 23,  49 => 19,  93 => 9,  78 => 40,  27 => 4,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  33 => 6,  70 => 23,  60 => 19,  56 => 9,  48 => 16,  110 => 35,  106 => 34,  102 => 33,  98 => 40,  89 => 20,  86 => 28,  81 => 28,  74 => 26,  66 => 15,  63 => 22,  52 => 17,  42 => 14,  36 => 7,  32 => 12,  46 => 7,  37 => 12,  34 => 11,  61 => 11,  55 => 13,  47 => 8,  39 => 6,  29 => 4,  22 => 2,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 39,  116 => 31,  112 => 42,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 21,  88 => 6,  84 => 23,  80 => 19,  76 => 21,  72 => 16,  68 => 14,  64 => 12,  59 => 17,  53 => 15,  51 => 15,  44 => 10,  30 => 3,  26 => 5,  19 => 1,);
    }
}
