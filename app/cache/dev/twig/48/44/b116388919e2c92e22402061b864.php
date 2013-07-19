<?php

/* AdmingeneratorGeneratorBundle::base_admin_assetic_less.html.twig */
class __TwigTemplate_4844b116388919e2c92e22402061b864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'scripts_head' => array($this, 'block_scripts_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'icons' => array($this, 'block_icons'),
            'navbar' => array($this, 'block_navbar'),
            'flashes' => array($this, 'block_flashes'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'footer_text' => array($this, 'block_footer_text'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 8
        $this->displayBlock('scripts_head', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('icons', $context, $blocks);
        // line 37
        echo "  </head>

  <body>

    ";
        // line 41
        $this->displayBlock('navbar', $context, $blocks);
        // line 44
        echo "
    <div class=\"container-fluid\">
      ";
        // line 46
        $this->displayBlock('flashes', $context, $blocks);
        // line 58
        echo "
      ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
      ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "    </div> <!--/.container-fluid -->

    ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Admin";
    }

    // line 8
    public function block_scripts_head($context, array $blocks = array())
    {
        // line 9
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/jquery-ui/ui/minified/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>
            <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/html5shiv/dist/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <!--[if lt IE 7]>
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/font-awesome/css/font-awesome-ie7.min"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <![endif]-->        
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/css/general.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/css/profile.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/css/nested-list.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/css/bootstrap-extended.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 29
    public function block_icons($context, array $blocks = array())
    {
        // line 30
        echo "        <!-- Favicon and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    ";
    }

    // line 41
    public function block_navbar($context, array $blocks = array())
    {
        // line 42
        echo "      ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle::base_admin_navbar.html.twig")->display($context);
        // line 43
        echo "    ";
    }

    // line 46
    public function block_flashes($context, array $blocks = array())
    {
        // line 47
        echo "        <div id=\"flashes\" class=\"row-fluid\">
          ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 49
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 50
                echo "              <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
                // line 52
                echo (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage"));
                echo "
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </div><!--/.row-fluid -->
      ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "        <div class=\"row-fluid\">
        </div><!--/.row-fluid -->
      ";
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "      <footer>
        <hr>
        <p>";
        // line 67
        $this->displayBlock('footer_text', $context, $blocks);
        echo "</p>
      </footer>
      ";
    }

    public function block_footer_text($context, array $blocks = array())
    {
        echo "&copy; Symfony2Admingenerator ";
        echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, "now", "Y") > 2012)) ? (("2012 - " . twig_date_format_filter($this->env, "now", "Y"))) : ("2012")), "html", null, true);
    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        // line 73
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/js/treeTable/jquery.treeTable-extended.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/js/admingenerator/general.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "AdmingeneratorGeneratorBundle::base_admin_assetic_less.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  276 => 75,  272 => 74,  267 => 73,  251 => 67,  244 => 64,  238 => 60,  230 => 56,  215 => 52,  204 => 49,  200 => 48,  197 => 47,  194 => 46,  190 => 43,  184 => 41,  178 => 35,  174 => 34,  170 => 33,  159 => 30,  150 => 26,  146 => 25,  124 => 18,  104 => 10,  90 => 5,  81 => 72,  77 => 70,  65 => 46,  59 => 41,  53 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 65,  241 => 77,  235 => 59,  229 => 73,  224 => 55,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 19,  119 => 17,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 59,  67 => 58,  61 => 44,  38 => 6,  94 => 22,  89 => 20,  85 => 25,  75 => 64,  68 => 14,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 16,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 32,  163 => 70,  158 => 67,  156 => 29,  151 => 57,  142 => 24,  138 => 23,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 63,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 8,  83 => 77,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 15,  41 => 8,  35 => 5,  32 => 4,  29 => 1,  209 => 50,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 42,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 31,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 21,  130 => 41,  125 => 44,  122 => 43,  116 => 16,  112 => 42,  109 => 12,  106 => 36,  103 => 37,  99 => 9,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 29,  48 => 28,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
