<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_94a29a96cdb2ffcc2233f4211995e46d extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  213 => 78,  207 => 75,  191 => 67,  181 => 65,  153 => 56,  134 => 54,  113 => 48,  97 => 41,  63 => 19,  110 => 22,  102 => 40,  76 => 31,  23 => 4,  100 => 39,  20 => 1,  261 => 1,  240 => 83,  227 => 81,  218 => 76,  216 => 79,  212 => 73,  202 => 67,  188 => 60,  185 => 66,  172 => 64,  239 => 68,  236 => 65,  232 => 64,  228 => 62,  225 => 61,  223 => 60,  198 => 66,  195 => 65,  192 => 62,  186 => 50,  148 => 34,  127 => 60,  180 => 55,  175 => 65,  161 => 63,  155 => 52,  152 => 51,  137 => 30,  129 => 29,  118 => 49,  58 => 17,  34 => 6,  276 => 3,  272 => 2,  267 => 101,  251 => 85,  244 => 64,  238 => 60,  230 => 56,  215 => 52,  204 => 68,  200 => 72,  197 => 71,  194 => 70,  190 => 61,  184 => 41,  178 => 66,  174 => 46,  170 => 49,  159 => 42,  150 => 55,  146 => 33,  124 => 27,  104 => 20,  90 => 27,  81 => 23,  77 => 70,  65 => 85,  59 => 14,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 65,  241 => 90,  235 => 59,  229 => 85,  224 => 55,  220 => 81,  214 => 74,  208 => 70,  169 => 58,  143 => 47,  140 => 58,  132 => 39,  128 => 19,  119 => 40,  107 => 36,  71 => 8,  177 => 47,  165 => 60,  160 => 61,  135 => 62,  126 => 45,  114 => 31,  84 => 24,  70 => 19,  67 => 24,  61 => 12,  38 => 6,  94 => 34,  89 => 20,  85 => 32,  75 => 14,  68 => 14,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 29,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 59,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 57,  171 => 45,  166 => 46,  163 => 45,  158 => 62,  156 => 58,  151 => 59,  142 => 32,  138 => 23,  136 => 56,  121 => 50,  117 => 19,  105 => 34,  91 => 27,  62 => 19,  49 => 14,  24 => 7,  25 => 35,  19 => 1,  79 => 13,  72 => 22,  69 => 9,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 41,  145 => 46,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 31,  111 => 47,  108 => 19,  101 => 43,  98 => 23,  96 => 37,  83 => 33,  74 => 27,  66 => 7,  55 => 16,  52 => 14,  50 => 10,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 50,  203 => 73,  199 => 67,  193 => 73,  189 => 51,  187 => 42,  182 => 66,  176 => 63,  173 => 74,  168 => 61,  164 => 42,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 53,  141 => 51,  133 => 21,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 30,  109 => 21,  106 => 45,  103 => 28,  99 => 31,  95 => 22,  92 => 17,  86 => 17,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 16,  57 => 12,  54 => 16,  51 => 13,  48 => 9,  45 => 10,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
