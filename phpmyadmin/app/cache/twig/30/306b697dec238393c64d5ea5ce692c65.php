<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.twig */
class __TwigTemplate_a4c42be754f8930bf5f4cd16080e8a62 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!doctype html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 2, $this->source); })()), "lang", [], "any", false, false, false, 2), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 2, $this->source); })()), "text_dir", [], "any", false, false, false, 2), "html", null, true);
        yield "\" data-bs-theme=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 2, $this->source); })()), "theme_color_mode", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"referrer\" content=\"same-origin\">
  <meta name=\"robots\" content=\"noindex,nofollow,notranslate\">
  <meta name=\"google\" content=\"notranslate\">
  <script>window.allowThirdPartyFraming = ";
        // line 9
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 9, $this->source); })()), "allow_third_party_framing", [], "any", false, false, false, 9) == "sameorigin")) ? ("\"sameorigin\"") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 9, $this->source); })()), "allow_third_party_framing", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"))));
        yield ";</script>
  ";
        // line 10
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 10, $this->source); })()), "allow_third_party_framing", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "<style id=\"cfs-style\">html{display: none;}</style>";
        }
        // line 13
        yield "
  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 16, $this->source); })()), "theme_path", [], "any", false, false, false, 16), "html", null, true);
        yield "/jquery/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/lib/codemirror.css?v=";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 17, $this->source); })()), "version", [], "any", false, false, false, 17)), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/addon/hint/show-hint.css?v=";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 18, $this->source); })()), "version", [], "any", false, false, false, 18)), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/addon/lint/lint.css?v=";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 19, $this->source); })()), "version", [], "any", false, false, false, 19)), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 20, $this->source); })()), "theme_path", [], "any", false, false, false, 20), "html", null, true);
        yield "/css/theme";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 20, $this->source); })()), "text_dir", [], "any", false, false, false, 20) == "rtl")) ? (".rtl") : (""));
        yield ".css?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 20, $this->source); })()), "version", [], "any", false, false, false, 20)), "html", null, true);
        yield "\">
  <title>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        yield "</title>
  ";
        // line 22
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 22, $this->source); })()), "scripts", [], "any", false, false, false, 22);
        yield "
  <noscript><style>html{display:block}</style></noscript>
</head>
<body";
        // line 25
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 25, $this->source); })()), "body_id", [], "any", false, false, false, 25))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" id=" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 25, $this->source); })()), "body_id", [], "any", false, false, false, 25)), "html", null, true)) : (""));
        yield ">
";
        // line 26
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 26, $this->source); })()), "navigation", [], "any", false, false, false, 26);
        yield "
";
        // line 27
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 27, $this->source); })()), "custom_header", [], "any", false, false, false, 27);
        yield "
";
        // line 28
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 28, $this->source); })()), "load_user_preferences", [], "any", false, false, false, 28);
        yield "

";
        // line 30
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 30, $this->source); })()), "show_hint", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "  <span id=\"no_hint\" class=\"hide\"></span>
";
        }
        // line 33
        yield "
";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 34, $this->source); })()), "is_warnings_enabled", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "  <noscript>
    ";
            // line 36
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Javascript must be enabled past this point!"));
            yield "
  </noscript>
";
        }
        // line 39
        yield "
";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 40, $this->source); })()), "is_menu_enabled", [], "any", false, false, false, 40) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 40, $this->source); })()), "server", [], "any", false, false, false, 40) > 0))) {
            // line 41
            yield "  ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 41, $this->source); })()), "menu", [], "any", false, false, false, 41);
            yield "
  <div id=\"page_nav_icons\" class=\"row row-cols-sm-auto align-items-center d-print-none me-3 p-1\">
    <div class=\"col-12\">
      <div id=\"userAccountDropdown\" class=\"dropdown\">
        <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
            // line 46
            yield PhpMyAdmin\Html\Generator::getImage("user", \_gettext("Open user account menu"));
            // line 47
            yield "</button>
        <ul class=\"dropdown-menu\">
          <li>
            <a class=\"dropdown-item text-nowrap disableAjax\" href=\"";
            // line 50
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 50, $this->source); })()), "current_user", [], "any", false, false, false, 50), 0, [], "array", false, false, false, 50), "hostname" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 50, $this->source); })()), "current_user", [], "any", false, false, false, 50), 1, [], "array", false, false, false, 50)]);
            yield "\">
              ";
            // line 51
            yield PhpMyAdmin\Html\Generator::getImage("user", "", ["aria-hidden" => "true"]);
            yield " <span dir=\"ltr\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 51, $this->source); })()), "current_user", [], "any", false, false, false, 51), "@"), "html", null, true);
            yield "</span>
            </a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 56
            yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
              ";
            // line 57
            yield PhpMyAdmin\Html\Generator::getIcon("b_docs", \_gettext("phpMyAdmin documentation"));
            yield "
            </a>
          </li>
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 61
            yield PhpMyAdmin\Util::getDocuURL(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 61, $this->source); })()), "is_mariadb", [], "any", false, false, false, 61));
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
              ";
            // line 62
            yield PhpMyAdmin\Html\Generator::getIcon("b_sqlhelp", (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 62, $this->source); })()), "is_mariadb", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (\_gettext("MariaDB documentation")) : (\_gettext("MySQL documentation"))));
            yield "
            </a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          ";
            // line 66
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 66, $this->source); })()), "theme_color_modes", [], "any", false, false, false, 66)) > 1)) {
                // line 67
                yield "            <li>
              <form method=\"post\" action=\"";
                // line 68
                yield PhpMyAdmin\Url::getFromRoute("/themes/set");
                yield "\" class=\"dropdown-item py-0 disableAjax\">
                ";
                // line 69
                yield PhpMyAdmin\Url::getHiddenInputs();
                yield "
                <input type=\"hidden\" name=\"set_theme\" value=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 70, $this->source); })()), "theme_id", [], "any", false, false, false, 70), "html", null, true);
                yield "\">
                <div class=\"row row-cols-lg-auto align-items-center flex-nowrap\">
                  <div class=\"col-12\">
                    <label class=\"col-form-label\" for=\"themeColorModeToggle\">";
                // line 73
                yield PhpMyAdmin\Html\Generator::getIcon("s_theme", \_gettext("Appearance:"));
                yield "</label>
                  </div>
                  <div class=\"col-12\">
                    <select class=\"form-select form-select-sm\" name=\"themeColorMode\" id=\"themeColorModeToggle\" aria-label=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Color mode for the theme"), "html", null, true);
                yield "\">
                      ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 77, $this->source); })()), "theme_color_modes", [], "any", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["color_mode"]) {
                    // line 78
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color_mode"], "html", null, true);
                    yield "\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 78, $this->source); })()), "theme_color_mode", [], "any", false, false, false, 78) == $context["color_mode"])) ? (" selected") : (""));
                    yield ">";
                    // line 79
                    if (($context["color_mode"] == "light")) {
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Light color mode of the theme", "Light"), "html", null, true);
                    } elseif ((                    // line 81
$context["color_mode"] == "dark")) {
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Dark color mode of the theme", "Dark"), "html", null, true);
                    } else {
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["color_mode"]), "html", null, true);
                    }
                    // line 86
                    yield "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['color_mode'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                yield "                    </select>
                  </div>
                </div>
              </form>
            </li>
          ";
            }
            // line 94
            yield "          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 95
            yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getIcon("s_cog", \_gettext("Settings"));
            yield "</a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          <li>
            <a class=\"dropdown-item logout disableAjax\" href=\"";
            // line 99
            yield PhpMyAdmin\Url::getFromRoute("/logout");
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getIcon("s_loggoff", \_gettext("Log out"));
            yield "</a>
          </li>
        </ul>
      </div>
    </div>

    <div class=\"col-12\">
      <span id=\"lock_page_icon\"></span>
      <span id=\"page_settings_icon\">
          ";
            // line 108
            yield PhpMyAdmin\Html\Generator::getImage("s_cog", \_gettext("Page-related settings"));
            yield "
        </span>
      <a id=\"goto_pagetop\" href=\"#\">";
            // line 110
            yield PhpMyAdmin\Html\Generator::getImage("s_top", \_gettext("Click on the bar to scroll to top of page"));
            yield "</a>
    </div>
  </div>
";
        }
        // line 114
        yield "
";
        // line 115
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 115, $this->source); })()), "console", [], "any", false, false, false, 115);
        yield "

<div id=\"page_content\">
  ";
        // line 118
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 118, $this->source); })()), "messages", [], "any", false, false, false, 118);
        // line 120
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 120, $this->source); })()), "is_logged_in", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/preview_sql_modal.twig");
            yield "
    ";
            // line 122
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/enum_set_editor.twig");
            yield "
    ";
            // line 123
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
        }
        // line 126
        yield (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 126, $this->source); })());
        yield "
</div>

";
        // line 129
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 129, $this->source); })()), "is_minimal", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "  ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 130, $this->source); })()), "self_url", [], "any", false, false, false, 130))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "    <div id=\"selflink\" class=\"d-print-none\">
      <a href=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 132, $this->source); })()), "self_url", [], "any", false, false, false, 132), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open new phpMyAdmin window"), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
        ";
                // line 133
                if ((($tmp = PhpMyAdmin\Util::showIcons("TabsMode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 134
                    yield "          ";
                    yield PhpMyAdmin\Html\Generator::getImage("window-new", \_gettext("Open new phpMyAdmin window"));
                    yield "
        ";
                } else {
                    // line 136
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open new phpMyAdmin window"), "html", null, true);
                    yield "
        ";
                }
                // line 138
                yield "      </a>
    </div>
  ";
            }
            // line 141
            yield "
  <div class=\"clearfloat d-print-none\" id=\"pma_errors\">
    ";
            // line 143
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 143, $this->source); })()), "error_messages", [], "any", false, false, false, 143);
            yield "
  </div>

  ";
            // line 146
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 146, $this->source); })()), "scripts", [], "any", false, false, false, 146);
            yield "

  ";
            // line 148
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 148, $this->source); })()), "is_demo", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 149
                yield "    <div id=\"pma_demo\" class=\"d-print-none\">
      ";
                // line 150
                $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 151
                    yield "        <a href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/");
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Demo Server"), "html", null, true);
                    yield ":</a>
        ";
                    // line 152
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 152, $this->source); })()), "git_revision_info", [], "any", false, false, false, 152))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 153
                        yield "          ";
                        $context["revision_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 154
                            yield "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 154, $this->source); })()), "git_revision_info", [], "any", false, false, false, 154), "revisionUrl", [], "any", false, false, false, 154)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 154, $this->source); })()), "git_revision_info", [], "any", false, false, false, 154), "revision", [], "any", false, false, false, 154), "html", null, true);
                            yield "</a>";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 156
                        yield "          ";
                        $context["branch_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 157
                            yield "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 157, $this->source); })()), "git_revision_info", [], "any", false, false, false, 157), "branchUrl", [], "any", false, false, false, 157)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 157, $this->source); })()), "git_revision_info", [], "any", false, false, false, 157), "branch", [], "any", false, false, false, 157), "html", null, true);
                            yield "</a>";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 159
                        yield "          ";
                        yield Twig\Extension\CoreExtension::sprintf(\_gettext("Currently running Git revision %1\$s from the %2\$s branch."), (isset($context["revision_info"]) || array_key_exists("revision_info", $context) ? $context["revision_info"] : (function () { throw new RuntimeError('Variable "revision_info" does not exist.', 159, $this->source); })()), (isset($context["branch_info"]) || array_key_exists("branch_info", $context) ? $context["branch_info"] : (function () { throw new RuntimeError('Variable "branch_info" does not exist.', 159, $this->source); })()));
                        yield "
        ";
                    } else {
                        // line 161
                        yield "          ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Git information missing!"), "html", null, true);
                        yield "
        ";
                    }
                    // line 163
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 150
                yield PhpMyAdmin\Twig\MessageExtension::getNotice($_v0);
                // line 164
                yield "    </div>
  ";
            }
            // line 166
            yield "
  ";
            // line 167
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 167, $this->source); })()), "footer", [], "any", false, false, false, 167);
            yield "
";
        }
        // line 169
        yield "</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  450 => 169,  445 => 167,  442 => 166,  438 => 164,  436 => 150,  432 => 163,  426 => 161,  420 => 159,  412 => 157,  409 => 156,  401 => 154,  398 => 153,  396 => 152,  389 => 151,  387 => 150,  384 => 149,  382 => 148,  377 => 146,  371 => 143,  367 => 141,  362 => 138,  356 => 136,  350 => 134,  348 => 133,  342 => 132,  339 => 131,  336 => 130,  334 => 129,  328 => 126,  325 => 123,  321 => 122,  317 => 121,  315 => 120,  313 => 118,  307 => 115,  304 => 114,  297 => 110,  292 => 108,  278 => 99,  269 => 95,  266 => 94,  258 => 88,  251 => 86,  248 => 84,  245 => 82,  243 => 81,  241 => 80,  239 => 79,  233 => 78,  229 => 77,  225 => 76,  219 => 73,  213 => 70,  209 => 69,  205 => 68,  202 => 67,  200 => 66,  193 => 62,  189 => 61,  182 => 57,  178 => 56,  168 => 51,  164 => 50,  159 => 47,  157 => 46,  149 => 41,  147 => 40,  144 => 39,  138 => 36,  135 => 35,  133 => 34,  130 => 33,  126 => 31,  124 => 30,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  101 => 22,  97 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  68 => 13,  65 => 11,  63 => 10,  59 => 9,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"{{ header.lang }}\" dir=\"{{ pma.text_dir }}\" data-bs-theme=\"{{ header.theme_color_mode }}\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"referrer\" content=\"same-origin\">
  <meta name=\"robots\" content=\"noindex,nofollow,notranslate\">
  <meta name=\"google\" content=\"notranslate\">
  <script>window.allowThirdPartyFraming = {{ header.allow_third_party_framing == 'sameorigin' ? '\"sameorigin\"' : (header.allow_third_party_framing ? '1' : '0') }};</script>
  {% if not header.allow_third_party_framing -%}
    <style id=\"cfs-style\">html{display: none;}</style>
  {%- endif %}

  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ header.theme_path }}/jquery/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/lib/codemirror.css?v={{ pma.version|url_encode }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/addon/hint/show-hint.css?v={{ pma.version|url_encode }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"js/vendor/codemirror/addon/lint/lint.css?v={{ pma.version|url_encode }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ header.theme_path }}/css/theme{{ pma.text_dir == 'rtl' ? '.rtl' }}.css?v={{ pma.version|url_encode }}\">
  <title>{{ header.title }}</title>
  {{ header.scripts|raw }}
  <noscript><style>html{display:block}</style></noscript>
</head>
<body{{ header.body_id is not empty ? ' id=' ~ header.body_id }}>
{{ header.navigation|raw }}
{{ header.custom_header|raw }}
{{ header.load_user_preferences|raw }}

{% if not header.show_hint %}
  <span id=\"no_hint\" class=\"hide\"></span>
{% endif %}

{% if header.is_warnings_enabled %}
  <noscript>
    {{ t('Javascript must be enabled past this point!')|error }}
  </noscript>
{% endif %}

{% if header.is_menu_enabled and header.server > 0 %}
  {{ header.menu|raw }}
  <div id=\"page_nav_icons\" class=\"row row-cols-sm-auto align-items-center d-print-none me-3 p-1\">
    <div class=\"col-12\">
      <div id=\"userAccountDropdown\" class=\"dropdown\">
        <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          {{- get_image('user', t('Open user account menu')) -}}
        </button>
        <ul class=\"dropdown-menu\">
          <li>
            <a class=\"dropdown-item text-nowrap disableAjax\" href=\"{{ url('/server/privileges', {'username': header.current_user[0], 'hostname': header.current_user[1]}) }}\">
              {{ get_image('user', '', {'aria-hidden': 'true'}) }} <span dir=\"ltr\">{{ header.current_user|join('@') }}</span>
            </a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"{{ get_docu_link('index') }}\" target=\"_blank\" rel=\"noopener noreferrer\">
              {{ get_icon('b_docs', t('phpMyAdmin documentation')) }}
            </a>
          </li>
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"{{ get_docu_url(header.is_mariadb) }}\" target=\"_blank\" rel=\"noopener noreferrer\">
              {{ get_icon('b_sqlhelp', header.is_mariadb ? t('MariaDB documentation') : t('MySQL documentation')) }}
            </a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          {% if header.theme_color_modes|length > 1 %}
            <li>
              <form method=\"post\" action=\"{{ url('/themes/set') }}\" class=\"dropdown-item py-0 disableAjax\">
                {{ get_hidden_inputs() }}
                <input type=\"hidden\" name=\"set_theme\" value=\"{{ header.theme_id }}\">
                <div class=\"row row-cols-lg-auto align-items-center flex-nowrap\">
                  <div class=\"col-12\">
                    <label class=\"col-form-label\" for=\"themeColorModeToggle\">{{ get_icon('s_theme', t('Appearance:')) }}</label>
                  </div>
                  <div class=\"col-12\">
                    <select class=\"form-select form-select-sm\" name=\"themeColorMode\" id=\"themeColorModeToggle\" aria-label=\"{{ t('Color mode for the theme') }}\">
                      {% for color_mode in header.theme_color_modes %}
                        <option value=\"{{ color_mode }}\"{{ header.theme_color_mode == color_mode ? ' selected' }}>
                          {%- if color_mode == 'light' -%}
                            {{ t('Light', context = 'Light color mode of the theme') }}
                          {%- elseif color_mode == 'dark' -%}
                            {{ t('Dark', context = 'Dark color mode of the theme') }}
                          {%- else -%}
                            {{ color_mode|title }}
                          {%- endif -%}
                        </option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </form>
            </li>
          {% endif %}
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"{{ url('/preferences/manage') }}\">{{ get_icon('s_cog', t('Settings')) }}</a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          <li>
            <a class=\"dropdown-item logout disableAjax\" href=\"{{ url('/logout') }}\">{{ get_icon('s_loggoff', t('Log out')) }}</a>
          </li>
        </ul>
      </div>
    </div>

    <div class=\"col-12\">
      <span id=\"lock_page_icon\"></span>
      <span id=\"page_settings_icon\">
          {{ get_image('s_cog', t('Page-related settings')) }}
        </span>
      <a id=\"goto_pagetop\" href=\"#\">{{ get_image('s_top', t('Click on the bar to scroll to top of page')) }}</a>
    </div>
  </div>
{% endif %}

{{ header.console|raw }}

<div id=\"page_content\">
  {{ header.messages|raw }}

  {%- if header.is_logged_in -%}
    {{ include('modals/preview_sql_modal.twig') }}
    {{ include('modals/enum_set_editor.twig') }}
    {{ include('modals/create_view.twig') }}
  {%- endif -%}

{{ content|raw }}
</div>

{% if not footer.is_minimal %}
  {% if footer.self_url is not empty %}
    <div id=\"selflink\" class=\"d-print-none\">
      <a href=\"{{ footer.self_url }}\" title=\"{{ t('Open new phpMyAdmin window') }}\" target=\"_blank\" rel=\"noopener noreferrer\">
        {% if show_icons('TabsMode') %}
          {{ get_image('window-new', t('Open new phpMyAdmin window')) }}
        {% else %}
          {{ t('Open new phpMyAdmin window') }}
        {% endif %}
      </a>
    </div>
  {% endif %}

  <div class=\"clearfloat d-print-none\" id=\"pma_errors\">
    {{ footer.error_messages|raw }}
  </div>

  {{ footer.scripts|raw }}

  {% if footer.is_demo %}
    <div id=\"pma_demo\" class=\"d-print-none\">
      {% apply notice %}
        <a href=\"{{ url('/') }}\">{{ t('phpMyAdmin Demo Server') }}:</a>
        {% if footer.git_revision_info is not empty %}
          {% set revision_info -%}
            <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{{ footer.git_revision_info.revisionUrl|link }}\">{{ footer.git_revision_info.revision }}</a>
          {%- endset %}
          {% set branch_info -%}
            <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{{ footer.git_revision_info.branchUrl|link }}\">{{ footer.git_revision_info.branch }}</a>
          {%- endset %}
          {{ t('Currently running Git revision %1\$s from the %2\$s branch.')|format(revision_info, branch_info)|raw }}
        {% else %}
          {{ t('Git information missing!') }}
        {% endif %}
      {% endapply %}
    </div>
  {% endif %}

  {{ footer.footer|raw }}
{% endif %}
</body>
</html>
", "base.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/base.twig");
    }
}
