<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_d291721747b4bbc4bf65bd9ed54952a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  100 => 27,  20 => 1,  261 => 1,  240 => 83,  227 => 81,  218 => 76,  216 => 75,  212 => 73,  202 => 67,  188 => 60,  185 => 58,  172 => 50,  239 => 68,  236 => 65,  232 => 64,  228 => 62,  225 => 61,  223 => 60,  198 => 66,  195 => 65,  192 => 62,  186 => 50,  148 => 34,  127 => 28,  180 => 55,  175 => 52,  161 => 41,  155 => 52,  152 => 51,  137 => 30,  129 => 29,  118 => 34,  58 => 18,  34 => 6,  276 => 3,  272 => 2,  267 => 73,  251 => 85,  244 => 64,  238 => 60,  230 => 56,  215 => 52,  204 => 68,  200 => 48,  197 => 47,  194 => 46,  190 => 61,  184 => 41,  178 => 54,  174 => 46,  170 => 49,  159 => 42,  150 => 50,  146 => 33,  124 => 27,  104 => 20,  90 => 20,  81 => 24,  77 => 70,  65 => 85,  59 => 41,  53 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 4,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 65,  241 => 77,  235 => 59,  229 => 73,  224 => 55,  220 => 59,  214 => 74,  208 => 70,  169 => 58,  143 => 47,  140 => 38,  132 => 39,  128 => 19,  119 => 17,  107 => 36,  71 => 8,  177 => 47,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 31,  84 => 16,  70 => 59,  67 => 20,  61 => 11,  38 => 8,  94 => 22,  89 => 20,  85 => 17,  75 => 14,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 6,  78 => 15,  46 => 14,  27 => 4,  44 => 59,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 57,  171 => 45,  166 => 46,  163 => 45,  158 => 67,  156 => 29,  151 => 57,  142 => 32,  138 => 23,  136 => 56,  121 => 33,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 19,  24 => 1,  25 => 3,  19 => 2,  79 => 13,  72 => 21,  69 => 9,  47 => 44,  40 => 11,  37 => 19,  22 => 3,  246 => 70,  157 => 41,  145 => 46,  139 => 50,  131 => 42,  123 => 37,  120 => 35,  115 => 31,  111 => 29,  108 => 37,  101 => 19,  98 => 23,  96 => 8,  83 => 77,  74 => 11,  66 => 7,  55 => 81,  52 => 80,  50 => 10,  43 => 5,  41 => 9,  35 => 15,  32 => 14,  29 => 5,  209 => 50,  203 => 78,  199 => 67,  193 => 73,  189 => 51,  187 => 42,  182 => 66,  176 => 64,  173 => 74,  168 => 48,  164 => 42,  162 => 31,  154 => 36,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 21,  130 => 41,  125 => 44,  122 => 43,  116 => 32,  112 => 30,  109 => 21,  106 => 36,  103 => 28,  99 => 9,  95 => 22,  92 => 17,  86 => 17,  82 => 14,  80 => 19,  73 => 19,  64 => 17,  60 => 83,  57 => 82,  54 => 16,  51 => 2,  48 => 1,  45 => 29,  42 => 28,  39 => 41,  36 => 7,  33 => 4,  30 => 9,);
    }
}
