<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_65ae036295b1f38b45ee0c7ea3ca8b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  102 => 17,  76 => 17,  23 => 4,  100 => 27,  20 => 1,  261 => 1,  240 => 83,  227 => 81,  218 => 76,  216 => 75,  212 => 73,  202 => 67,  188 => 60,  185 => 58,  172 => 50,  239 => 68,  236 => 65,  232 => 64,  228 => 62,  225 => 61,  223 => 60,  198 => 66,  195 => 65,  192 => 62,  186 => 50,  148 => 34,  127 => 28,  180 => 55,  175 => 52,  161 => 41,  155 => 52,  152 => 51,  137 => 30,  129 => 29,  118 => 34,  58 => 17,  34 => 6,  276 => 3,  272 => 2,  267 => 73,  251 => 85,  244 => 64,  238 => 60,  230 => 56,  215 => 52,  204 => 68,  200 => 48,  197 => 47,  194 => 46,  190 => 61,  184 => 41,  178 => 54,  174 => 46,  170 => 49,  159 => 42,  150 => 50,  146 => 33,  124 => 27,  104 => 20,  90 => 32,  81 => 24,  77 => 70,  65 => 85,  59 => 13,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 4,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 65,  241 => 77,  235 => 59,  229 => 73,  224 => 55,  220 => 59,  214 => 74,  208 => 70,  169 => 58,  143 => 47,  140 => 38,  132 => 39,  128 => 19,  119 => 17,  107 => 36,  71 => 8,  177 => 47,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 31,  84 => 29,  70 => 59,  67 => 20,  61 => 12,  38 => 6,  94 => 34,  89 => 20,  85 => 17,  75 => 14,  68 => 14,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 29,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 59,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 57,  171 => 45,  166 => 46,  163 => 45,  158 => 67,  156 => 29,  151 => 57,  142 => 32,  138 => 23,  136 => 56,  121 => 33,  117 => 19,  105 => 18,  91 => 27,  62 => 19,  49 => 13,  24 => 7,  25 => 35,  19 => 2,  79 => 13,  72 => 22,  69 => 9,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 70,  157 => 41,  145 => 46,  139 => 50,  131 => 42,  123 => 37,  120 => 20,  115 => 31,  111 => 29,  108 => 19,  101 => 19,  98 => 23,  96 => 8,  83 => 77,  74 => 11,  66 => 7,  55 => 14,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  35 => 5,  32 => 14,  29 => 3,  209 => 50,  203 => 78,  199 => 67,  193 => 73,  189 => 51,  187 => 42,  182 => 66,  176 => 64,  173 => 74,  168 => 48,  164 => 42,  162 => 31,  154 => 36,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 21,  130 => 41,  125 => 44,  122 => 43,  116 => 32,  112 => 30,  109 => 21,  106 => 36,  103 => 28,  99 => 9,  95 => 22,  92 => 17,  86 => 17,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 16,  57 => 12,  54 => 16,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}