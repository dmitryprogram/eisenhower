<?php

/* AdmingeneratorGeneratorBundle:KnpMenu:knp_menu_trans.html.twig */
class __TwigTemplate_088e636529419157440810da24fae9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_label($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "icon"), "method", true, true)) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => "messages"), "method")), "html", null, true);
        echo "
    ";
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "caret"), "method")) {
            echo "<b class=\"caret\"></b>";
        }
    }

    public function getTemplateName()
    {
        return "AdmingeneratorGeneratorBundle:KnpMenu:knp_menu_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 68,  236 => 65,  232 => 64,  228 => 62,  225 => 61,  223 => 60,  198 => 54,  195 => 53,  192 => 52,  186 => 50,  148 => 34,  127 => 28,  180 => 48,  175 => 61,  161 => 41,  155 => 52,  152 => 51,  137 => 30,  129 => 29,  118 => 23,  58 => 4,  34 => 27,  276 => 75,  272 => 74,  267 => 73,  251 => 67,  244 => 64,  238 => 60,  230 => 56,  215 => 52,  204 => 49,  200 => 48,  197 => 47,  194 => 46,  190 => 43,  184 => 41,  178 => 62,  174 => 46,  170 => 33,  159 => 30,  150 => 50,  146 => 33,  124 => 27,  104 => 20,  90 => 19,  81 => 16,  77 => 70,  65 => 46,  59 => 41,  53 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 65,  241 => 77,  235 => 59,  229 => 73,  224 => 55,  220 => 59,  214 => 69,  208 => 68,  169 => 58,  143 => 47,  140 => 55,  132 => 39,  128 => 19,  119 => 17,  107 => 36,  71 => 8,  177 => 47,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 15,  70 => 59,  67 => 58,  61 => 11,  38 => 4,  94 => 22,  89 => 20,  85 => 17,  75 => 14,  68 => 14,  56 => 9,  87 => 16,  21 => 2,  26 => 12,  93 => 20,  88 => 6,  78 => 15,  46 => 16,  27 => 4,  44 => 59,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 49,  171 => 45,  166 => 43,  163 => 70,  158 => 67,  156 => 29,  151 => 57,  142 => 32,  138 => 23,  136 => 56,  121 => 33,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 13,  72 => 63,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 70,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 31,  111 => 37,  108 => 37,  101 => 19,  98 => 31,  96 => 8,  83 => 77,  74 => 14,  66 => 7,  55 => 9,  52 => 21,  50 => 10,  43 => 5,  41 => 58,  35 => 5,  32 => 4,  29 => 13,  209 => 50,  203 => 78,  199 => 67,  193 => 73,  189 => 51,  187 => 42,  182 => 66,  176 => 64,  173 => 74,  168 => 44,  164 => 42,  162 => 31,  154 => 36,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 21,  130 => 41,  125 => 44,  122 => 43,  116 => 16,  112 => 30,  109 => 21,  106 => 36,  103 => 25,  99 => 9,  95 => 21,  92 => 17,  86 => 28,  82 => 14,  80 => 19,  73 => 19,  64 => 17,  60 => 5,  57 => 11,  54 => 10,  51 => 2,  48 => 1,  45 => 17,  42 => 7,  39 => 41,  36 => 40,  33 => 4,  30 => 7,);
    }
}
