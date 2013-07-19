<?php

/* AdmingeneratorGeneratorBundle::base_admin_navbar.html.twig */
class __TwigTemplate_a876cb27c2a2f478ed4ddb01f0f68616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'logo' => array($this, 'block_logo'),
            'brand_text' => array($this, 'block_brand_text'),
            'profile' => array($this, 'block_profile'),
            'menu' => array($this, 'block_menu'),
            'login_script_block' => array($this, 'block_login_script_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-blue navbar-fixed-top\">
  <div class=\"navbar-inner\">
    <div class=\"container\">
      <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
      </a>
      ";
        // line 9
        $this->displayBlock('logo', $context, $blocks);
        // line 13
        echo "      <div class=\"nav-collapse collapse\">
          ";
        // line 14
        $this->displayBlock('profile', $context, $blocks);
        // line 41
        echo "          ";
        $this->displayBlock('menu', $context, $blocks);
        // line 42
        echo "      </div><!--/.nav-collapse -->
    </div><!--/.container -->
  </div><!--/.navbar-inner -->
</div><!--/.navbar -->

";
        // line 47
        $this->displayBlock('login_script_block', $context, $blocks);
    }

    // line 9
    public function block_logo($context, array $blocks = array())
    {
        // line 10
        echo "      ";
        $context["brand_path"] = (((!(null === $this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("dashboard_welcome_path")))) ? ($this->env->getExtension('routing')->getPath($this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("dashboard_welcome_path"))) : ("#"));
        // line 11
        echo "      <a class=\"brand\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["brand_path"]) ? $context["brand_path"] : $this->getContext($context, "brand_path")), "html", null, true);
        echo "\">";
        $this->displayBlock('brand_text', $context, $blocks);
        echo "</a>
      ";
    }

    public function block_brand_text($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dashboard.brand", array(), "Admingenerator"), "html", null, true);
    }

    // line 14
    public function block_profile($context, array $blocks = array())
    {
        // line 15
        echo "          <ul id=\"profile-nav\" class=\"nav pull-right profile\">
              <li><p class=\"navbar-text\">";
        // line 16
        echo $this->env->getExtension('translator')->trans("profile.welcome", array("%username%" => (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) ? ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) : ("anonymous"))), "Admingenerator");
        echo "</p></li>
          ";
        // line 17
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 18
            echo "              ";
            if ((!(null === $this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("logout_path")))) {
                // line 19
                echo "              <li class=\"btn-group\">
                  ";
                // line 20
                if (((!(null === $this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("exit_path"))) && $this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN"))) {
                    // line 21
                    echo "                      <button id=\"button-exit\" class=\"btn btn-small btn-success\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.exit", array(), "Admingenerator"), "html", null, true);
                    echo "\">
                          <i class=\"icon-level-down icon-rotate-90\"></i>
                      </button>
                  ";
                }
                // line 25
                echo "                  <button id=\"button-logout\" class=\"btn btn-small btn-profile\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.logout", array(), "Admingenerator"), "html", null, true);
                echo "\">
                      <i class=\"icon-off icon-white\"></i>
                  </button>
              </li>
              ";
            }
            // line 30
            echo "          ";
        } else {
            // line 31
            echo "              ";
            if ((!(null === $this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("login_path")))) {
                // line 32
                echo "              <li class=\"btn-group\">
                  <button id=\"button-login\" class=\"btn btn-small btn-profile\" title=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.login", array(), "Admingenerator"), "html", null, true);
                echo "\">
                      <i class=\"icon-user icon-white\"></i>
                  </button>
              </li>
              ";
            }
            // line 38
            echo "          ";
        }
        // line 39
        echo "          </ul>
          ";
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render("AdmingeneratorGeneratorBundle:DefaultMenuBuilder:navbarMenu");
    }

    // line 47
    public function block_login_script_block($context, array $blocks = array())
    {
        // line 48
        echo "<script type=\"text/javascript\">
\$(document).ready(function(){
    ";
        // line 50
        if ((!(null === $this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("login_path")))) {
            // line 51
            echo "    \$('#button-login').click(function(){
        document.location = \"";
            // line 52
            echo $this->env->getExtension('routing')->getPath($this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("login_path"));
            echo "\";
    });
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((!(null === $this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("exit_path")))) {
            // line 57
            echo "    \$('#button-exit').click(function(){
        document.location = \"";
            // line 58
            echo twig_escape_filter($this->env, ($this->env->getExtension('routing')->getPath($this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("exit_path")) . "?_switch_user=_exit"), "html", null, true);
            echo "\";
    });
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if ((!(null === $this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("logout_path")))) {
            // line 63
            echo "    \$('#button-logout').click(function(){
        document.location = \"";
            // line 64
            echo $this->env->getExtension('routing')->getPath($this->env->getExtension('admingenerator_config')->getAdmingeneratorConfig("logout_path"));
            echo "\";
    });
    ";
        }
        // line 67
        echo "});
</script>
";
    }

    public function getTemplateName()
    {
        return "AdmingeneratorGeneratorBundle::base_admin_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 63,  175 => 61,  161 => 55,  155 => 52,  152 => 51,  137 => 41,  129 => 38,  118 => 32,  58 => 10,  34 => 9,  276 => 75,  272 => 74,  267 => 73,  251 => 67,  244 => 64,  238 => 60,  230 => 56,  215 => 52,  204 => 49,  200 => 48,  197 => 47,  194 => 46,  190 => 43,  184 => 41,  178 => 62,  174 => 34,  170 => 33,  159 => 30,  150 => 50,  146 => 48,  124 => 18,  104 => 10,  90 => 19,  81 => 16,  77 => 70,  65 => 46,  59 => 41,  53 => 37,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 65,  241 => 77,  235 => 59,  229 => 73,  224 => 55,  220 => 70,  214 => 69,  208 => 68,  169 => 58,  143 => 47,  140 => 55,  132 => 39,  128 => 19,  119 => 17,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 59,  67 => 58,  61 => 11,  38 => 6,  94 => 22,  89 => 20,  85 => 17,  75 => 14,  68 => 14,  56 => 9,  87 => 18,  21 => 2,  26 => 6,  93 => 20,  88 => 6,  78 => 15,  46 => 16,  27 => 4,  44 => 42,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 64,  171 => 61,  166 => 57,  163 => 70,  158 => 67,  156 => 29,  151 => 57,  142 => 24,  138 => 23,  136 => 56,  121 => 33,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 63,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 31,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 8,  83 => 77,  74 => 14,  66 => 15,  55 => 9,  52 => 21,  50 => 10,  43 => 15,  41 => 41,  35 => 5,  32 => 4,  29 => 1,  209 => 50,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 42,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 56,  162 => 31,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 21,  130 => 41,  125 => 44,  122 => 43,  116 => 16,  112 => 30,  109 => 12,  106 => 36,  103 => 25,  99 => 9,  95 => 21,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 47,  48 => 28,  45 => 17,  42 => 7,  39 => 14,  36 => 13,  33 => 4,  30 => 7,);
    }
}
